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
                                <strong>Data Dosen Pengampu</strong>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                    data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modal"><em class="icon ni ni-plus"></em>
                                                Add Data
                                            </button>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <table class="datatable-init table table-bordered table-hover" style="width: 100%;">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Akademik</th>
                                    <th>Prodi</th>
                                    <th>Kode Matkul</th>
                                    <th>Nama Matkul</th>
                                    <th>Semester Matkul</th>
                                    <th>Gol Mahasiswa</th>
                                    <th>NIP Dosen</th>
                                    <th>Nama Dosen</th>
                                    <th>Nama Teknisi</th>
                                    <th>Status Dosen</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $data->tahun->tahun_ajaran }} {{ $data->tahun->keterangan }}</td>
                                        <td>{{ $data->prodi->nama ?? '' }}</td>
                                        <td>{{ $data->matkul->kode ?? '' }}</td>
                                        <td>{{ $data->matkul->nama ?? '' }}</td>
                                        <td>{{ $data->matkul->semester ?? '' }}</td>
                                        <td>{{ $data->golonganmahasiswa->nama ?? '' }}</td>
                                        <td>{{ $data->dosen->nip ?? '' }}</td>
                                        <td>{{ $data->dosen->nama ?? '' }}</td>
                                        <td>{{ $data->teknisi->nama ?? '' }}</td>
                                        <td>
                                            @if ($data->status_dosen == 1)
                                                <span>Koordinator Matkul</span>
                                            @elseif($data->status_dosen == 2)
                                                <span>Team Teamteaching Matkul</span>
                                            @else
                                                <span>Tidak ada</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a type="button" data-bs-toggle="modal" href="#"
                                                data-bs-target="#modaledit-{{ $data->id }}"
                                                class="btn btn-warning btn-sm"><em class="icon ni ni-pen2"></em></a>
                                            <a type="button" href="{{ route('pengampu.delete', $data->id) }}"
                                                onclick="return confirm('Yakin ingin menghapus ?');"
                                                class="btn btn-danger btn-sm"><em class="icon ni ni-trash-fill"></em></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>

    {{-- modal add --}}
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Pengampu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('pengampu.store') }}" method="post">
                    @csrf
                    <div class="modal-body" style="overflow-y: auto; max-height: 500px;">
                        <div class="form-group" hidden>
                            <label>ID</label>
                            <input type="text" class="form-control" placeholder="id" name="id">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tahun Akademik</label>
                                    <select class="form-control select2" placeholder="tahun akademik" name="id_tahun_akademik">
                                        <option value="">Pilih Tahun Akademik</option>
                                        @foreach ($tahun as $tahun)
                                            <option value="{{ $tahun->id }}">{{ $tahun->tahun_ajaran }} {{ $tahun->keterangan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Prodi</label>
                                    <select class="form-control select2" placeholder="prodi" name="id_prodi">
                                        <option value="">Pilih Prodi</option>
                                        @foreach ($prodi as $prodi)
                                            <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Dosen</label>
                                    <select class="form-control select2" placeholder="Dosen" name="nip_dosen">
                                        <option value="">Pilih dosen</option>
                                        @foreach ($dosen as $dosen)
                                            <option value="{{ $dosen->id }}">{{ $dosen->nip }} - {{ $dosen->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Matkul</label>
                                    <select class="form-control select2" placeholder="Mata kuliah" name="kode_matkul">
                                        <option value="">Pilih mata kuliah</option>
                                        @foreach ($matkul as $matkul)
                                            <option value="{{ $matkul->id }}">{{ $matkul->kode }} - {{ $matkul->nama }} - Semester {{$matkul->semester}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Golongan Kelas Mahasiswa</label>
                                    <select class="form-control select2" placeholder="Mata kuliah" name="id_golongan">
                                        <option value="">Pilih golongan mahasiswa</option>
                                        @foreach ($golonganmahasiswa as $gol)
                                            <option value="{{ $gol->id }}">{{ $gol->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Teknisi</label>
                                    <select class="form-control select2" placeholder="Teknisi" name="id_teknisi">
                                        <option value="">Pilih teknisi</option>
                                        @foreach ($teknisi as $tknisi)
                                            <option value="{{ $tknisi->id }}">{{ $tknisi->nip }} - {{ $tknisi->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status Dosen</label>
                                    <select class="form-control select2" placeholder="Status Dosen" name="status_dosen">
                                        <option value="1">Koordinator Matkul</option>
                                        <option value="2">Team Teamteaching Matkul</option>
                                        <option value="3">Tidak ada</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end --}}
    {{-- modal edit --}}

    {{-- @foreach ($datas as $data)
        <div class="modal fade" id="modaledit-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pengampu</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('pengampu.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body" style="overflow-y: auto; max-height: 500px;">
                            
                            <div class="form-group">
                                <label for="">Status Dosen</label>
                                <select class="form-control select2" name="status_dosen">
                                    @foreach ([1 => 'Koordinator Matkul', 2 => 'Team Teamteaching Matkul', 3 => 'Tidak Ada'] as $value => $text)
                                        <option value="{{ $value }}" {{ $data->status_dosen == $value ? 'selected' : '' }}>{{ $text }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-end">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach --}}

    @foreach ($datas as $data)
    <div class="modal fade" id="modaledit-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Pengampu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('pengampu.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body" style="overflow-y: auto; max-height: 500px;">
                        <div class="form-group" hidden>
                            <label>ID</label>
                            <input type="text" class="form-control" placeholder="id" name="id" value="{{ $data->id }}">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tahun Akademik</label>
                                    <select class="form-control select2" placeholder="tahun akademik" name="id_tahun_akademik">
                                        @foreach ($datatahun as $dthn)
                                            <option value="{{ $dthn->id }}" {{ $data->id_tahun_akademik == $dthn->id ? 'selected' : '' }}>
                                                {{ $dthn->tahun_ajaran }} - {{ $dthn->keterangan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Prodi</label>
                                    <select class="form-control select2" placeholder="prodi" name="id_prodi">
                                        @foreach ($dataprodi as $prod)
                                            <option value="{{ $prod->id }}" {{ $data->id_prodi == $prod->id ? 'selected' : '' }}>
                                                {{ $prod->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Dosen</label>
                                    <select class="form-control select2" placeholder="Dosen" name="id_dosen">
                                        @foreach ($datadosen as $dsn)
                                            <option value="{{ $dsn->id }}" {{ $data->id_dosen == $dsn->id ? 'selected' : '' }}>
                                                {{ $dsn->nip }} - {{ $dsn->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kode Matkul</label>
                                    <select class="form-control select2" placeholder="Mata kuliah" name="id_matkul">
                                        @foreach ($datamatkul as $mtkl)
                                            <option value="{{ $mtkl->id }}" {{ $data->id_matkul == $mtkl->id ? 'selected' : '' }}>
                                                {{ $mtkl->kode }} : {{ $mtkl->nama }} - Semester {{$mtkl->semester}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Golongan Kelas Mahasiswa</label>
                                    <select class="form-control select2" placeholder="Golongan Kelas Mahasiswa" name="id_golongan">
                                        @foreach ($golonganmahasiswa as $gol)
                                            <option value="{{ $gol->id }}" {{ $data->id_golongan == $gol->id ? 'selected' : '' }}>
                                                {{ $gol->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Teknisi</label>
                                    <select class="form-control select2" placeholder="Teknisi" name="id_teknisi">
                                        @foreach ($teknisi as $tknisi)
                                        <option value="{{ $tknisi->id }}" {{ $data->id_teknisi == $tknisi->id ? 'selected' : '' }}>
                                            {{ $tknisi->nip }} - {{ $tknisi->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Status Dosen</label>
                                    <select class="form-control select2" placeholder="Status Dosen" name="status_dosen">
                                        @foreach ([1 => 'Koordinator Matkul', 2 => 'Team Teamteaching Matkul', 3 => 'Tidak Ada'] as $value => $text)
                                            <option value="{{ $value }}" {{ $data->status_dosen == $value ? 'selected' : '' }}>
                                                {{ $text }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    {{-- end --}}

    {{-- JS --}}
    @include('sweetalert::alert')
@endsection
