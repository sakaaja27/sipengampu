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
                                <strong>Data Tahun Akademik</strong>
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
                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em
                                                    class="icon ni ni-reports"></em><span>Reports</span></a></li>
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
                                    <th>Tahun Ajaran</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $data->tahun_ajaran }}</td>
                                        <td>{{ $data->keterangan }}</td>
                                        <td>
                                            @if ($data->status == 1)
                                                <span class="badge text-bg-success">Aktif</span>
                                            @else
                                                <span class="badge text-bg-danger">Tidak Aktif</span>
                                            @endif
                                        </td>

                                        <td>
                                            <a type="button" data-bs-toggle="modal" href="#"
                                                data-bs-target="#modaledit-{{ $data->id }}"
                                                class="btn btn-warning btn-sm"><em class="icon ni ni-pen2"></em></a>
                                            <a type="button" href="{{ route('tahunakademik.delete', $data->id) }}"
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Tahun Akademik</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="tahunakademik" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group" hidden>
                            <label>ID</label>
                            <input type="text" class="form-control" placeholder="id" name="id">
                        </div>
                        <div class="form-group" >
                            <label>Tahun Akademik</label>
                            <input type="text" class="form-control" placeholder="Masukkan tahun akademik" name="tahun_ajaran" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Keterangan</label>
                            <select name="keterangan" class="form-control" required>
                                <option value="GANJIL">GANJIL</option>
                                <option value="GENAP">GENAP</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="col-6 d-flex justify-content-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" value="1" required
                                        checked>
                                    <label class="form-check-label">Aktif</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="status" value="0" required>
                                    <label class="form-check-label">Tidak aktif</label>
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
    @foreach ($datas as $data)
        <div class="modal fade" id="modaledit-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Tahun Akademik</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('tahunakademik.update', $data->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group" hidden>
                                <label>ID</label>
                                <input type="text" class="form-control" placeholder="id" name="id"
                                    value="{{ $data->id }}">
                            </div>
                            <div class="form-group">
                                <label>Tahun Akademik</label>
                                <input type="text" class="form-control" placeholder="tahun ajaran"
                                    name="tahun_ajaran" value="{{ $data->tahun_ajaran }}">
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <select name="keterangan" class="form-control">
                                    <option value="GANJIL" {{ $data->keterangan == 'GANJIL' ? 'selected' : '' }}>GANJIL
                                    </option>
                                    <option value="GENAP" {{ $data->keterangan == 'GENAP' ? 'selected' : '' }}>GENAP
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <div class="col-6 d-flex justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="1"
                                            {{ $data->status == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label">Aktif</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="0"
                                            {{ $data->status == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label">Tidak aktif</label>
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
    {{-- Js --}}
    @include('sweetalert::alert')
@endsection
