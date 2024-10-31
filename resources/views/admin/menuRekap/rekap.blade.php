@extends('component.main')
@section('Title', 'dashboard')
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <div class="nk-block-des text-soft">
                                <strong>Rekap Data</strong>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="card col-12">
                    <div class="card-body">
                        <form action="{{ route('rekap.export') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label>Tahun Akademik</label>
                                    <select class="form-control select2 filter" style="width: 100%;" name="tahun_akademik"
                                        id="tahun_akademik" onchange="filterTahunAkademik(this.value)">
                                        @foreach ($tahun as $th)
                                            <option value="{{ $th->id }}">{{ $th->tahun_ajaran }}
                                                {{ $th->keterangan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 mt-md-4 mt-sm-4">
                                    <button type="submit" name="export" class="btn btn-success"><i
                                            class="fa fa-file-excel"></i> Download</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="row">
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="table-responsive" style="max-height: 500px; overflow-y: auto; border:2px;">

                                    <table id="myTable" class="mt-3 table table-bordered display table-striped border-2"
                                        style="width: 100%;">
                                        <thead style="background: #FDFDFD;">
                                            <tr>
                                                <th rowspan="2" style="width: 60px; vertical-align: middle;"
                                                    class="p-0 text-center" id="no">NO</th>
                                                <th rowspan="2" style="width: 350px; vertical-align: middle;"
                                                    class="p-0 text-center" id="nama_dosen">NAMA DOSEN</th>
                                                <th rowspan="2" style="width: 200px; vertical-align: middle;"
                                                    class="p-0 text-center" id="jabatan">JABATAN</th>
                                                <th rowspan="2" style="width: 200px; vertical-align: middle;"
                                                    class="p-0 text-center" id="jabatan">Rumpun Ilmu</th>
                                                <th rowspan="2" style="width: 200px; vertical-align: middle;"
                                                    class="p-0 text-center" id="jabatan">Pohon Ilmu</th>
                                                <th rowspan="2" style="width: 200px; vertical-align: middle;"
                                                    class="p-0 text-center" id="jabatan">Cabang Rumpun</th>
                                                @foreach ($munculprodi as $data)
                                                    <th colspan="4" class="text-center p-0" id="semua_prodi">
                                                        {{ $data->nama }}</th>
                                                @endforeach
                                                <th colspan="12" class="text-center p-0"
                                                    style="width: 100px; vertical-align: middle;" id="total_kjm">TOTAL KJM
                                                </th>
                                            </tr>
                                            <tr>
                                                @foreach ($munculprodi as $data)
                                                    <th class="p-0 text-center"
                                                        style="min-width: 100px; vertical-align: middle;" id="mk">
                                                        MK
                                                    </th>
                                                    <th class="p-0 text-center"
                                                        style="min-width: 100px; vertical-align: middle;" id="teori">
                                                        TEORI</th>
                                                    <th class="p-0 text-center"
                                                        style="min-width: 100px; vertical-align: middle;" id="praktik">
                                                        PRAKTIK</th>
                                                    <th class="p-0 text-center"
                                                        style="min-width: 100px; vertical-align: middle;"
                                                        id="teori_praktik">TEORI + PRAKTIK</th>
                                                @endforeach
                                                <th class="p-0 text-center"
                                                    style="min-width: 100px; vertical-align: middle;" id="total_mk">
                                                    Total
                                                    MK</th>
                                                <th class="p-0 text-center"
                                                    style="min-width: 100px; vertical-align: middle;" id="total_teori">
                                                    Total
                                                    TEORI</th>
                                                <th class="p-0 text-center"
                                                    style="min-width: 100px; vertical-align: middle;" id="total_kjm_teori">
                                                    Total KJM TEORI</th>
                                                <th class="p-0 text-center"
                                                    style="min-width: 100px; vertical-align: middle;" id="total_praktik">
                                                    Total PRAKTIK</th>
                                                <th class="p-0 text-center"
                                                    style="min-width: 100px; vertical-align: middle;"
                                                    id="total_kjm_praktik">Total KJM PRAKTIK</th>
                                                <th class="p-0 text-center"
                                                    style="min-width: 100px; vertical-align: middle;"
                                                    id="total_teori_praktik">Total TEORI + PRAKTIK</th>
                                                <th class="p-0 text-center"
                                                    style="min-width: 100px; vertical-align: middle;" id="jabatan">
                                                    JABATAN</th>
                                                <th class="p-0 text-center"
                                                    style="min-width: 100px; vertical-align: middle;"
                                                    id="total_uang_teori">
                                                    KJM TEORI</th>
                                                <th class="p-0 text-center"
                                                    style="min-width: 100px; vertical-align: middle;"
                                                    id="total_uang_praktik">KJM PRAKTIK</th>
                                                <th class="p-0 text-center"
                                                    style="min-width: 100px; vertical-align: middle;"
                                                    id="total_uang_semua">
                                                    TOTAL UANG KJM</th>
                                                <th class="p-0 text-center" style="width: 400px; vertical-align: middle;"
                                                    id="prodi">PRODI
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pengampu->unique('dosen.nama') as $ngampu)
                                                <tr>
                                                    <td class="text-center p-2"
                                                        style="min-width: 60px; vertical-align: middle;">
                                                        {{ $loop->iteration }}</td>
                                                    <td class="p-2" style="min-width: 350px; vertical-align: middle;">
                                                        {{ $ngampu->dosen->nama ?? ''}}
                                                    </td>
                                                    @foreach ($jabatan as $jbtn)
                                                        @if ($ngampu->dosen->jabatan == $jbtn->id)
                                                            <td class="p-2"
                                                                style="min-width: 200px; vertical-align: middle;">
                                                                {{ $jbtn->nama }}
                                                            </td>
                                                        @endif
                                                    @endforeach
                                                    <td class="p-2" style="min-width: 350px; vertical-align: middle;">
                                                        @if ($ngampu->dosen->pohonilmu->rumpunilmu->id != 6)
                                                            <!-- Menambahkan kondisi untuk mengecualikan rumpun ilmu dengan id = 6 -->
                                                            {{ $ngampu->dosen->pohonilmu->rumpunilmu->nama ?? '' }}
                                                        @endif
                                                    </td>
                                                    <td class="p-2" style="min-width: 350px; vertical-align: middle;">
                                                        @if ($ngampu->dosen->pohonilmu->id != 10)
                                                            {{ $ngampu->dosen->pohonilmu->nama ?? '' }}
                                                        @endif
                                                    </td>
                                                    <td class="p-2" style="min-width: 350px; vertical-align: middle;">
                                                        @if ($ngampu->dosen->cabangilmu->id != 17)
                                                            {{ $ngampu->dosen->cabangilmu->nama ?? '' }}
                                                        @endif
                                                    </td>

                                                    @foreach ($munculprodi as $data)
                                                        <td class="p-2 text-center"
                                                            style="min-width: 100px; vertical-align: middle;">
                                                            @if (isset($total_mk[$ngampu->dosen->nip][$data->nama]))
                                                                {{ $total_mk[$ngampu->dosen->nip][$data->nama] }}
                                                            @else
                                                                0
                                                            @endif
                                                        </td>
                                                        <td class="p-2 text-center"
                                                            style="min-width: 100px; vertical-align: middle;">
                                                            @if (isset($total_sks_teori[$ngampu->dosen->nip][$data->nama]))
                                                                {{ $total_sks_teori[$ngampu->dosen->nip][$data->nama] }}
                                                            @else
                                                                0
                                                            @endif
                                                        </td>
                                                        <td class="p-2 text-center"
                                                            style="min-width: 100px; vertical-align: middle;">
                                                            @if (isset($total_sks_praktik[$ngampu->dosen->nip][$data->nama]))
                                                                {{ $total_sks_praktik[$ngampu->dosen->nip][$data->nama] }}
                                                            @else
                                                                0
                                                            @endif
                                                        </td>
                                                        <td class="p-2 text-center"
                                                            style="min-width: 100px; vertical-align: middle;">
                                                            @if (isset($total_sks_teori_praktik[$ngampu->dosen->nip][$data->nama]))
                                                                {{ $total_sks_teori_praktik[$ngampu->dosen->nip][$data->nama] }}
                                                            @else
                                                                0
                                                            @endif
                                                        </td>
                                                    @endforeach

                                                    <td class="p-2 text-center"
                                                        style="min-width: 100px; vertical-align: middle;">
                                                        @foreach ($tot_kjm_mk as $nip => $nama_prodi_values)
                                                            @if ($nip == $ngampu->dosen->nip)
                                                                {{ array_sum($nama_prodi_values) }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td class="p-2 text-center"
                                                        style="min-width: 100px; vertical-align: middle;"
                                                        title="KJM Teori">
                                                        @foreach ($tot_kjm_teori as $nip => $nama_prodi_values)
                                                            @if ($nip == $ngampu->dosen->nip)
                                                                {{ array_sum($nama_prodi_values) }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td class="p-2 text-center"
                                                        style="min-width: 100px; vertical-align: middle;">
                                                        @foreach ($total_kjm_sks_teori as $nip => $nama_prodi_values)
                                                            @if ($nip == $ngampu->dosen->nip)
                                                                {{ array_sum($nama_prodi_values) }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td class="p-2 text-center"
                                                        style="min-width: 100px; vertical-align: middle;"
                                                        title="KJM Praktik">
                                                        @foreach ($tot_kjm_praktik as $nip => $nama_prodi_values)
                                                            @if ($nip == $ngampu->dosen->nip)
                                                                {{ array_sum($nama_prodi_values) }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    <td class="p-2 text-center"
                                                        style="min-width: 100px; vertical-align: middle;">
                                                        @foreach ($total_kjm_sks_praktik as $nip => $nama_prodi_values)
                                                            @if ($nip == $ngampu->dosen->nip)
                                                                {{ array_sum($nama_prodi_values) }}
                                                            @endif
                                                        @endforeach
                                                    </td>

                                                    <td class="p-2 text-right"
                                                        style="min-width: 100px; vertical-align: middle;">
                                                        @foreach ($tot_kjm_teori_praktik as $nip => $nama_prodi_values)
                                                            @if ($nip == $ngampu->dosen->nip)
                                                                {{ array_sum($nama_prodi_values) }}
                                                            @endif
                                                        @endforeach
                                                    </td>
                                                    @foreach ($jabatan as $jbtn)
                                                        @if ($ngampu->dosen->jabatan == $jbtn->id)
                                                            <td class="p-0 text-center">
                                                                {{ 'Rp ' . number_format($jbtn->nominal, 2, ',', '.') }}
                                                            </td>
                                                        @endif
                                                    @endforeach
                                                    @foreach ($total_kjm_sks_teori as $nip => $nama_prodi_values)
                                                        @if ($nip == $ngampu->dosen->nip)
                                                            @foreach ($jabatan as $jbtn)
                                                                @if ($ngampu->dosen->jabatan == $jbtn->id)
                                                                    @php
                                                                        $kjm_teori =
                                                                            array_sum($nama_prodi_values) *
                                                                            $jbtn->nominal *
                                                                            14;
                                                                    @endphp
                                                                    <td class="p-0 text-center">
                                                                        {{ 'Rp ' . number_format($kjm_teori, 2, ',', '.') }}
                                                                    </td>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                    @foreach ($total_kjm_sks_praktik as $nip => $nama_prodi_values)
                                                        @if ($nip == $ngampu->dosen->nip)
                                                            @foreach ($jabatan as $jbtn)
                                                                @if ($ngampu->dosen->jabatan == $jbtn->id)
                                                                    @php
                                                                        $kjm_praktik =
                                                                            array_sum($nama_prodi_values) *
                                                                            $jbtn->nominal *
                                                                            14;
                                                                    @endphp
                                                                    <td class="p-0 text-center">
                                                                        {{ 'Rp ' . number_format($kjm_praktik, 2, ',', '.') }}
                                                                    </td>
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                    @foreach ($total_kjm_sks_teori as $nip => $nama_prodi_values_teori)
                                                        @if ($nip == $ngampu->dosen->nip)
                                                            @foreach ($total_kjm_sks_praktik as $nip_praktik => $nama_prodi_values_praktik)
                                                                @if ($nip_praktik == $ngampu->dosen->nip)
                                                                    @foreach ($jabatan as $jbtn)
                                                                        @if ($ngampu->dosen->jabatan == $jbtn->id)
                                                                            <td class="p-0 text-center">
                                                                                {{ 'Rp ' . number_format((array_sum($nama_prodi_values_teori) + array_sum($nama_prodi_values_praktik)) * $jbtn->nominal * 14, 2, ',', '.') }}
                                                                            </td>
                                                                        @endif
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        @endif
                                                    @endforeach
                                                    @foreach ($munculprodi as $data)
                                                        @if ($ngampu->id_prodi == $data->id)
                                                            <td class="p-0 text-center">{{ $data->nama }}</td>
                                                        @endif
                                                    @endforeach
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- Js --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#refresh').on('click', function() {
                filterTahunAkademik('');
            });
        });


        function filterTahunAkademik(tahun_id) {
            $.ajax({
                type: 'GET',
                url: '{{ route('rekap.index') }}',
                data: {
                    tahun_akademik: tahun_id
                },
                success: function(data) {
                    // Update the table with the new data
                    $('#myTable').html($(data).find('#myTable').html());

                    // Hancurkan instance DataTable yang ada
                    $('#myTable').DataTable().destroy();

                    var table = $('#myTable').DataTable();
                    // Update form ekspor dengan tahun akademik yang dipilih
                    $('form[action="{{ route('rekap.export') }}"] select[name="tahun_akademik"]').val(tahun_id);

                }
            });
        }
    </script>

    {{-- API --}}

    @include('sweetalert::alert')
@endsection
