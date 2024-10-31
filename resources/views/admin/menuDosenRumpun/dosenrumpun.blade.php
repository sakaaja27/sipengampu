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
                                <strong>Data Dosen Rumpun</strong>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content">
                            <div class="toggle-wrap nk-block-tools-toggle">
                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                    data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                <div class="toggle-expand-content" data-content="pageMenu">
                                    <ul class="nk-block-tools g-3">
                                        <li>
                                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#modal"><em class="icon ni ni-plus"></em>
                                                Add Data
                                            </button> --}}
                                        </li>
                                        {{-- <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em
                                                    class="icon ni ni-reports"></em><span>Reports</span></a></li> --}}
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
                                    <th>NIP Dosen</th>
                                    <th>NIDN Dosen</th>
                                    <th>Nama Dosen</th>
                                    <th>Jabatan</th>
                                    <th>Rumpun ilmu</th>
                                    <th>Pohon ilmu</th>
                                    <th>Cabang ilmu</th>
                                    <th>Status Dosen</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $data->dosen->nip }}</td>
                                        <td>{{ $data->dosen->nidn }}</td>
                                        <td>{{ $data->dosen->nama }}</td>
                                        @foreach ($jabatan as $jbtn)
                                            @if ($data->dosen->jabatan == $jbtn->id)
                                                <td>{{ $jbtn->nama }}</td>
                                            @endif
                                        @endforeach
                                        <td>{{ $data->pohonilmu->rumpunilmu->nama }}</td>
                                        <td>{{ $data->pohonilmu->nama }}</td>
                                        <td>{{ $data->cabangilmu->nama }}</td>
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
    @include('sweetalert::alert')
@endsection
