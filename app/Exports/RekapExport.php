<?php

namespace App\Exports;

use App\Models\Pengampu;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use App\Models\Tahun;
use App\Models\TahunAkademik;
use App\Models\Prodi;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class RekapExport implements FromQuery, WithHeadings, WithMapping, WithStyles, ShouldAutoSize, WithTitle, WithCustomStartCell
{
    use Exportable;
    protected $tahun_id;
    protected $prodi_id;
    protected $prodi;
    protected $tahun;

    public function __construct($tahun_id, $prodi_id)
    {
        $this->tahun_id = $tahun_id;
        $this->prodi_id = $prodi_id;
        $this->prodi = $prodi_id ? Prodi::find($prodi_id) : null;
        $this->tahun = $tahun_id ? TahunAkademik::find($tahun_id) : null;
    }

    public function query()
    {
        $query = Pengampu::with(['matkul', 'prodi', 'dosen', 'tahun', 'dosen.pohonilmu', 'dosen.cabangilmu']);

       
        if ($this->tahun_id) {
            $query->whereHas('tahun', function ($q) {
                $q->where('id', $this->tahun_id);
            });
        }

        
        if ($this->prodi_id) {
            $query->whereHas('prodi', function ($q) {
                $q->where('id', $this->prodi_id);
            });
        }

        return $query;
    }

    public function headings(): array
    {
        return [
            'NO',
            'NAMA DOSEN',
            'JABATAN',
            'RUMPUN ILMU',
            'POHON ILMU',
            'CABANG RUMPUN',
            'TOTAL MK',
            'TOTAL TEORI',
            'TOTAL KJM TEORI',
            'TOTAL PRAKTIK',
            'TOTAL KJM PRAKTIK',
            'TOTAL TEORI + PRAKTIK',
            'JABATAN',
            'KJM TEORI',
            'KJM PRAKTIK',
            'TOTAL UANG KJM',
            'PRODI'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->mergeCells('A1:Q1');
        $tahunajaran = $this->tahun ? $this->tahun->tahun_ajaran : '';
        $sheet->setCellValue('A1', 'REKAP DATA DOSEN PENGAMPU TAHUN ' . $tahunajaran);
        return [
            1 => [
                'font' => [
                    'bold' => true,
                    'color' => ['rgb' => 'FFFFFF']
                ],
                'fill' => [
                    'fillType' => Fill::FILL_SOLID,
                    'startColor' => ['rgb' => '1F497D']
                ],
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['rgb' => '000000']
                    ]
                ]
            ],
            2 => [
                'font' => [
                    'bold' => true,
                    'color' => ['rgb' => 'FFFFFF']
                ],
                'fill' => [
                    'fillType' => Fill::FILL_SOLID,
                    'startColor' => ['rgb' => '000000']
                ],
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER
                ],
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['rgb' => '000000']
                    ]
                ]
            ],
            'A1:Q' . $sheet->getHighestRow() => [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['rgb' => '000000']
                    ]
                ],
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER
                ]
            ],
            'A2:Q' . $sheet->getHighestRow() => [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['rgb' => '000000']
                    ]
                ],
                'alignment' => [
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER
                ]
            ]
        ];
    }

    public function map($pengampu): array
    {
        // Hitung total MK
        $total_mk = Pengampu::where('id_dosen', $pengampu->id_dosen)
            ->count();

        // Hitung total SKS teori
        $total_teori = Pengampu::where('id_dosen', $pengampu->id_dosen)
            ->join('matkul', 'pengampu.id_matkul', '=', 'matkul.id')
            ->sum('matkul.tot_teori');

        // Hitung total SKS praktik  
        $total_praktik = Pengampu::where('id_dosen', $pengampu->id_dosen)
            ->join('matkul', 'pengampu.id_matkul', '=', 'matkul.id')
            ->sum('matkul.tot_praktik');

        // Hitung KJM teori
        $kjm_teori = $total_teori <= 4 ? 0 : ($total_teori > 4 && $total_teori <= 8 ? $total_teori - 4 : 4);

        // Hitung KJM praktik
        $kjm_praktik = $total_praktik <= 8 ? 0 : ($total_praktik > 8 && $total_praktik <= 12 ? $total_praktik - 8 : 4);

        // Hitung nominal KJM
        $nominal = $pengampu->dosen->jabatan()->first()->nominal ?? 0;
        $uang_teori = $kjm_teori * $nominal * 14;
        $uang_praktik = $kjm_praktik * $nominal * 14;
        $total_uang = $uang_teori + $uang_praktik;

        return [
            static::$row++,
            $pengampu->dosen->nama,
            $pengampu->dosen->jabatan()->first()->nama ?? '',
            $pengampu->dosen->pohonilmu->rumpunilmu->nama ?? '',
            $pengampu->dosen->pohonilmu->nama ?? '',
            $pengampu->dosen->cabangilmu->nama ?? '',
            $total_mk,
            $total_teori,
            $kjm_teori,
            $total_praktik,
            $kjm_praktik,
            $total_teori + $total_praktik,
            number_format($nominal, 2, ',', '.'),
            number_format($uang_teori, 2, ',', '.'),
            number_format($uang_praktik, 2, ',', '.'),
            number_format($total_uang, 2, ',', '.'),
            $pengampu->prodi->nama
        ];
    }
    public function title(): string
    {
        $tahunajaran = $this->tahun ? $this->tahun->tahun_ajaran : '';
        return 'Rekap Data Dosen Pengampu ' . $tahunajaran;
    }

    public function startCell(): string
    {
        return 'A2';
    }

    private static $row = 1;
}
