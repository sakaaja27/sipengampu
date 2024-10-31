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
                                <strong>Data Mata Kuliah</strong>
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
                                    <th>Kode Matkul</th>
                                    <th>Nama Matkul</th>
                                    <th>Prodi</th>
                                    <th>Semester</th>
                                    <th>Total SKS Teori</th>
                                    <th>Total SKS Praktik</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $data->kode }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->prodi->nama }}</td>
                                        <td>{{ $data->semester }}</td>
                                        <td>{{ $data->tot_teori }}</td>
                                        <td>{{ $data->tot_praktik }}</td>
                                        <td>
                                            @if ($data->status == 1)
                                                <span class="badge text-bg-info">Teori</span>
                                            @elseif ($data->status == 2)
                                                <span class="badge text-bg-success">Praktik</span>
                                            @else
                                                <span class="badge text-bg-warning">Teori + Praktik</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a type="button" data-bs-toggle="modal" href="#"
                                                data-bs-target="#modaledit-{{ $data->id }}"
                                                class="btn btn-warning btn-sm"><em class="icon ni ni-pen2"></em></a>
                                            <a type="button" href="{{ route('matakuliah.delete', $data->id) }}"
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Mata Kuliah</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="matakuliah" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group" hidden>
                            <label>ID</label>
                            <input type="text" class="form-control" placeholder="id" name="id">
                        </div>
                        <div class="form-group">
                            <label>Kode Matkul</label>
                            <input type="text" class="form-control" placeholder="kode matkul" name="kode" required>
                            @error('kode')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Mata Kuliah</label>
                            <input type="text" class="form-control" placeholder="nama mata kuliah" name="nama"
                                required>
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
                            <label>Semester</label>
                            <input type="number" class="form-control" placeholder="Semester" name="semester" required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <div class="col-6 d-flex justify-content-between">
                                <div class="form-check m-3">
                                    <input class="form-check-input" type="radio" name="status" value="1" required
                                        checked>
                                    <label class="form-check-label">Teori</label>
                                </div>
                                <div class="form-check m-3">
                                    <input class="form-check-input" type="radio" name="status" value="2" required>
                                    <label class="form-check-label">Praktik</label>
                                </div>
                                <div class="form-check m-3">
                                    <input class="form-check-input" type="radio" name="status" value="3"
                                        required>
                                    <label class="form-check-label">Teori + Praktik</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Total SKS Teori</label>
                            <input type="number" class="form-control" placeholder="Total SKS Teori" name="tot_teori"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Total SKS Praktik</label>
                            <input type="number" class="form-control" placeholder="Total SKS Praktik"
                                name="tot_praktik" required>
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Mata Kuliah</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('matakuliah.update', $data->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group" hidden>
                                <label>ID</label>
                                <input type="text" class="form-control" placeholder="id" name="id"
                                    value="{{ $data->id }}">
                            </div>
                            <div class="form-group">
                                <label>Kode Matkul</label>
                                <input type="text" class="form-control" placeholder="kode matkul" name="kode"
                                    value="{{ $data->kode }}">
                                @error('kode')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Mata Kuliah</label>
                                <input type="text" class="form-control" placeholder="nama mata kuliah" name="nama"
                                    value="{{ $data->nama }}">
                            </div>
                            <div class="form-group">
                                <label>Program Studi</label>
                                <select class="form-control select2" placeholder="Prodi" name="prodi_id">
                                    @foreach ($prodi as $prod)
                                        <option value="{{ $prod->id }}"
                                            {{ $data->prodi_id == $prod->id ? 'selected' : '' }}>
                                            {{ $prod->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Semester</label>
                                <input type="number" class="form-control" placeholder="Semester" name="semester"
                                    value="{{ $data->semester }}">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <div class="col-6 d-flex justify-content-between">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="1"
                                            {{ $data->status == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label">Teori</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="2"
                                            {{ $data->status == 2 ? 'checked' : '' }}>
                                        <label class="form-check-label">Praktik</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" value="3"
                                            {{ $data->status == 3 ? 'checked' : '' }}>
                                        <label class="form-check-label">Teori + Praktik</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Total SKS Teori</label>
                                <input type="number" class="form-control" placeholder="Total SKS Teori"
                                    name="tot_teori" value="{{ $data->tot_teori }}">
                            </div>
                            <div class="form-group">
                                <label>Total SKS Praktik</label>
                                <input type="number" class="form-control" placeholder="Total SKS Praktik"
                                    name="tot_praktik" value="{{ $data->tot_praktik }}">
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
