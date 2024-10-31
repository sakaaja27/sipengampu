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
                                <strong>Data Admin</strong>
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
                                    @if (session('status'))
                                        <div class="alert alert-success " role="alert">
                                            {{ session('status') }}

                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <table class="datatable-init table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Prodi</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Golongan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $data->prodi->nama }}</td>
                                        <td>{{ $data->nip }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->golongan }}</td>
                                        <td>
                                            <a type="button" data-bs-toggle="modal" href="#"
                                                data-bs-target="#modaledit-{{ $data->id }}"
                                                class="btn btn-warning btn-sm"><em class="icon ni ni-pen2"></em></a>
                                            <a type="button" href="{{ route('admin.delete', $data->id) }}"
                                                onclick="return confirm('Yakin ingin menghapus ?');"
                                                class="btn btn-danger btn-sm"><em class="icon ni ni-trash-fill"></em></a>
                                        </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>

    {{-- Modal Add --}}
    <div class="modal fade" id="modal">
        <div class="modal-dialog modal-lg">
            <form action="admin" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Admin</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group" hidden>
                            <label>ID</label>
                            <input type="text" class="form-control" placeholder="id" name="id">
                        </div>
                        <div class="form-group">
                            <label>NIDN</label>
                            <input type="text" class="form-control" placeholder="NIDN" name="nidn" required>
                            @error('nidn')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Program Studi</label>
                            <select class="form-control select2" placeholder="Prodi" name="id_prodi" required>
                                @foreach ($prodi as $prod)
                                    <option value="{{ $prod->id }}">{{ $prod->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" placeholder="NIP" name="nip" required>
                            @error('nip')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap (Beserta gelar)</label>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <input type="text" class="form-control" name="glr_depan" placeholder="Gelar">
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" name="nama" placeholder="Nama"
                                            required>
                                    </div>
                                    <div class="col-4">
                                        <input type="text" class="form-control" name="glr_belakang" placeholder="Gelar"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Bidang Studi</label>
                            <input type="text" class="form-control" placeholder="Bidang Studi" name="bidang_studi" required>
                        </div>
                        <div class="form-group">
                            <label>Perguruan Tinggi</label>
                            <input type="text" class="form-control" placeholder="Perguruan Tinggi" name="perguruan_tinggi" required>
                        </div>
                        <div class="form-group">
                            <label>Golongan</label>
                            <input type="text" class="form-control" placeholder="Golongan" name="golongan" required>
                        </div>
                        <div class="form-group">
                            <label>Jabatan</label>
                            <select class="form-control select2" placeholder="Jabatan" name="jabatan" required>
                                @foreach ($jabatan as $jabat)
                                    <option value="{{ $jabat->id }}">{{ $jabat->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Status Pegawai</label>
                            <select class="form-control select2" name="status_pegawai" required>
                                <option value="1">Admin</option>
                                <option value="2">Ketua Program Studi</option>
                                <option value="3">Ketua Jurusan</option>
                                <option value="4">Sekertaris Jurusan</option>
                                {{-- <option value="5">Dosen</option> --}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password" required>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-end">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    {{-- end modal add --}}

    {{-- modal edit --}}
    @foreach ($datas as $data)
        <div class="modal fade" id="modaledit-{{ $data->id }}">
            <div class="modal-dialog modal-lg">
                <form action="{{ route('admin.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Admin</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group" hidden>
                                <label>ID</label>
                                <input type="text" class="form-control" placeholder="id" name="id"
                                    value="{{ $data->id }}">
                            </div>
                            <div class="form-group">
                                <label>NIDN</label>
                                <input type="text" class="form-control" placeholder="nidn" name="nidn"
                                    value="{{ $data->nidn }}">
                                @error('nidn')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Program Studi</label>
                                <select class="form-control select2" placeholder="Prodi" name="id_prodi">

                                    @foreach ($prodi as $prod)
                                        <option value="{{ $prod->id }}"
                                            {{ $data->id_prodi == $prod->id ? 'selected' : '' }}>
                                            {{ $prod->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" class="form-control" placeholder="NIP" name="nip"
                                    value="{{ $data->nip }}">
                                @error('nip')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap (Beserta gelar)</label>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-4">
                                            <input type="text" class="form-control" name="glr_depan"
                                                placeholder="Gelar" value="{{ $data->glr_depan }}">
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" name="nama" placeholder="Nama"
                                                value="{{ $data->nama }}">
                                        </div>
                                        <div class="col-4">
                                            <input type="text" class="form-control" name="glr_belakang"
                                                placeholder="Gelar" value="{{ $data->glr_belakang }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Bidang Studi</label>
                                <input type="text" class="form-control" placeholder="Bidang Studi" name="bidang_studi" value="{{$data->bidang_studi}}">
                            </div>
                            <div class="form-group">
                                <label>Perguruan Tinggi</label>
                                <input type="text" class="form-control" placeholder="Perguruan Tinggi" name="perguruan_tinggi" value="{{$data->perguruan_tinggi}}">
                            </div>
                            <div class="form-group">
                                <label>Golongan</label>
                                <input type="text" class="form-control" placeholder="Golongan" name="golongan"
                                    value="{{ $data->golongan }}">
                            </div>
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select class="form-control select2" name="jabatan">
                                    @foreach ($jabatan as $jabatanItem)
                                        <option {{ $data->jabatan == $jabatanItem->id ? 'selected' : '' }}
                                            value="{{ $jabatanItem->id }}">{{ $jabatanItem->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status Pegawai</label>
                                <select class="form-control select2" name="status_pegawai">
                                    @foreach ([1 => 'Admin', 2 => 'Ketua Program Studi', 3 => 'Ketua Jurusan', 4 => 'Sekertaris Jurusan'] as $value => $text)
                                        <option value="{{ $value }}"
                                            {{ $data->status_pegawai == $value ? 'selected' : '' }}>{{ $text }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-end">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                        </div>
                    </div>
                </form>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    @endforeach
    {{-- end modal edit  --}}

    {{-- JS --}}
    @include('sweetalert::alert')
@endsection
