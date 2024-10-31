@extends('component.main')
@section('Title', 'dashboard')
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="row g-gs">
                        {{-- munculkan nama dosen yang login --}}
                        Berikut adalah Profile dari {{ Auth::user()->nama }}
                        <div class="col-xxl-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    @foreach ($datas as $data)
                                        <form action="{{ route('dashboarddosen.update', $data->id) }}" class="row g-3"
                                            method="post">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-md-3">
                                                <label>NIP</label>
                                                <input type="email" class="form-control" value="{{ $data->nip }}"
                                                    disabled>
                                            </div>
                                            <div class="col-md-3">
                                                <label>NIDN</label>
                                                <input type="text" class="form-control" value="{{ $data->nidn }}"
                                                    disabled>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Jabatan</label>
                                                @foreach ($jabatan as $jbtn)
                                                    @if ($data->jabatan == $jbtn->id)
                                                        <input type="text" class="form-control"
                                                            value="{{ $jbtn->nama }}" disabled>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="col-md-3">
                                                <label>Prodi</label>
                                                <input type="text" class="form-control" value="{{ $data->prodi->nama }}"
                                                    disabled>
                                            </div>
                                            {{--  --}}
                                            <div class="d-flex justify-content-center align-items-center">
                                                <div class="col-md-2 mx-2 mb-3">
                                                    <label>Gelar Depan</label>
                                                    <input type="email" class="form-control"
                                                        value="{{ $data->glr_depan }}" disabled>
                                                </div>
                                                <div class="col-md-3 mx-2 mb-3">
                                                    <label>Nama</label>
                                                    <input type="text" class="form-control" value="{{ $data->nama }}"
                                                        disabled>
                                                </div>
                                                <div class="col-md-2 mx-2 mb-3">
                                                    <label>Gelar Belakang</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $data->glr_belakang }}" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Bidang Studi</label>
                                                <input type="text" class="form-control" value="{{ $data->bidang_studi }}"
                                                    disabled>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Perguruan Tinggi</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $data->perguruan_tinggi }}" disabled>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Golongan</label>
                                                <input type="text" class="form-control" value="{{ $data->golongan }}"
                                                    disabled>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Status Pegawai</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $data->status_pegawai == 1 ? 'Admin' : ($data->status_pegawai == 2 ? 'Ketua Program Studi' : ($data->status_pegawai == 3 ? 'Ketua Jurusan' : ($data->status_pegawai == 4 ? 'Sekretaris Jurusan' : 'Dosen'))) }}"
                                                    disabled>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Rumpun Ilmu</label>
                                                @if ($data->pohonilmu->rumpunilmu->id != 6)
                                                    <!-- Menambahkan kondisi untuk mengecualikan id = 6 -->
                                                    <input type="text" class="form-control"
                                                        value="{{ $data->pohonilmu->rumpunilmu->nama ?? '' }}" disabled>
                                                @else
                                                    <input type="text" class="form-control" value="" disabled>
                                                @endif
                                            </div>

                                            <div class="col-md-4" id="pohonGroup">
                                                <label>Pohon Ilmu</label>
                                                @if ($data->pohonilmu->id != 10)
                                                    <input type="text" class="form-control"
                                                        value="{{ $data->pohonilmu->nama ?? '' }}" disabled>
                                                @else
                                                    <input type="text" class="form-control" value="" disabled>
                                                @endif
                                            </div>
                                            <div class="col-md-4">
                                                <label>Cabang Ilmu</label>
                                                @if ($data->cabangilmu->id != 17)
                                                    <input type="text" class="form-control"
                                                        value="{{ $data->cabangilmu->nama ?? '' }}" disabled>
                                                @else
                                                    <input type="text" class="form-control" value="" disabled>
                                                @endif
                                            </div>
                                            <div class="col-12">
                                                <a type="button" data-bs-toggle="modal" href="#"
                                                    data-bs-target="#modaledit-{{ $data->id }}"
                                                    class="btn btn-warning btn-sm"><em class="icon ni ni-pen2"></em>Update
                                                    Rumpun</a>
                                            </div>
                                        </form>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
    @foreach ($datas as $data)
        <div class="modal fade" id="modaledit-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Rumpun</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('dashboarddosen.update', $data->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group" hidden>
                                <label>ID</label>
                                <input type="text" class="form-control" placeholder="id" name="id"
                                    value="{{ $data->id }}">
                            </div>

                            <!-- Select untuk Rumpun Ilmu -->
                            {{-- <div class="form-group">
                                <label>Rumpun Ilmu</label>
                                <select class="form-control" id="rumpunSelect" onchange="updatePohon()" required>
                                    @if (is_null($data->pohonilmu) || is_null($data->pohonilmu->id_pohon))
                                        @foreach ($rumpun as $rmp)
                                            <option value="{{ $rmp->id }}">
                                                {{ $rmp->nama }}
                                            </option>
                                        @endforeach
                                    @else
                                        @foreach ($rumpun as $rmp)
                                            <option value="{{ $rmp->id }}"
                                                {{ $data->pohonilmu->rumpunilmu->id_rumpun == $rmp->id ? 'selected' : '' }}>
                                                {{ $rmp->nama }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>

                            <!-- Select untuk Pohon Ilmu (disembunyikan) -->
                            <div class="form-group" id="pohonGroup">
                                <label>Pohon Ilmu</label>
                                <select class="form-control select2" id="pohonSelect" name="id_pohon"
                                    onchange="updateCabang()" required>
                                    @foreach ($pohonilmu as $phn)
                                        <option value="{{ $phn->id }}"
                                            {{ $data->id_pohon == $phn->id ? 'selected' : '' }}>
                                            {{ $phn->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" id="pohonGroup">
                                <label>Cabang Ilmu</label>
                                <select class="form-control select2" id="pohonSelect" name="id_cabang"
                                    onchange="updateCabang()" required>
                                    @foreach ($cabangilmu as $cbg)
                                        <option value="{{ $cbg->id }}"
                                            {{ $data->id_cabang == $cbg->id ? 'selected' : '' }}>
                                            {{ $cbg->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="form-group">
                                <label>Rumpun Ilmu</label>
                                <select class="form-control" id="rumpunSelect" onchange="updatePohon()" required>
                                    @foreach ($rumpun as $rmp)
                                        @if ($rmp->id != 6) <!-- Tambahkan kondisi untuk menyembunyikan id_rumpun = 6 -->
                                            <option value="{{ $rmp->id }}"
                                                {{ (isset($data->pohonilmu) && isset($data->pohonilmu->rumpunilmu) && $data->pohonilmu->rumpunilmu->id_rumpun == $rmp->id) ? 'selected' : '' }}>
                                                {{ $rmp->nama }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <!-- Select untuk Pohon Ilmu (disembunyikan) -->
                            <div class="form-group" id="pohonGroup" style="display: block;">
                                <label>Pohon Ilmu</label>
                                <select class="form-control select2" id="pohonSelect" name="id_pohon"
                                    onchange="updateCabang()" required>
                                    <option value="" disabled selected>Pilih Pohon Ilmu</option>
                                    <!-- Options will be populated dynamically -->
                                </select>
                            </div>

                            <!-- Select untuk Cabang Ilmu (disembunyikan) -->
                            <div class="form-group" id="cabangGroup" style="display: none;">
                                <label>Cabang Ilmu</label>
                                <select class="form-control select2" id="cabangSelect" name="id_cabang" required>
                                    <option value="" disabled selected>Pilih Cabang Ilmu</option>
                                    <!-- Options will be populated dynamically -->
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
    @endforeach
    {{-- JS --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
    <script>
        const pohonData = @json($pohonilmu);

        function updatePohon() {
            const id = document.getElementById('rumpunSelect').value;
            const pohonSelect = document.getElementById('pohonSelect');
            const pohonGroup = document.getElementById('pohonGroup');
            const cabangSelect = document.getElementById('cabangSelect');
            const cabangGroup = document.getElementById('cabangGroup');

            // Clear existing options for Cabang Ilmu
            cabangSelect.innerHTML = '<option value="" disabled selected>Pilih Cabang Ilmu</option>';
            cabangGroup.style.display = 'none'; // Sembunyikan dropdown Cabang Ilmu

            // Clear existing options for Pohon Ilmu
            pohonSelect.innerHTML = '<option value="" disabled selected>Pilih Pohon Ilmu</option>';

            // Check if a Rumpun Ilmu is selected
            if (id) {
                // Show the Pohon Ilmu dropdown
                pohonGroup.style.display = 'block';

                // Filter pohon based on selected rumpun
                const filteredPohon = pohonData.filter(phn => phn.id_rumpun == id);

                // Populate the pohon dropdown
                filteredPohon.forEach(phn => {
                    const option = document.createElement('option');
                    option.value = phn.id;
                    option.textContent = phn.nama;
                    pohonSelect.appendChild(option);
                });

                // Set the selected value for Pohon Ilmu if exists
                const selectedPohon = {{ $data->id_pohon }};
                if (selectedPohon) {
                    const existingOption = Array.from(pohonSelect.options).find(opt => opt.value == selectedPohon);
                    if (existingOption) {
                        existingOption.selected = true;
                    }
                }
            } else {
                // Hide the Pohon Ilmu dropdown if no Rumpun Ilmu is selected
                pohonGroup.style.display = 'none';
            }
        }

        const cabangData = @json($cabangilmu); // Pastikan data cabang ilmu tersedia

        function updateCabang() {
            const pohonId = document.getElementById('pohonSelect').value;
            const cabangSelect = document.getElementById('cabangSelect');
            const cabangGroup = document.getElementById('cabangGroup');

            // Clear existing options
            cabangSelect.innerHTML = '<option value="" disabled selected>Pilih Cabang Ilmu</option>';

            // Check if a Pohon Ilmu is selected
            if (pohonId) {
                // Show the Cabang Ilmu dropdown
                cabangGroup.style.display = 'block';

                // Filter cabang based on selected pohon
                const filteredCabang = cabangData.filter(cbg => cbg.id_pohon == pohonId);

                // Populate the cabang dropdown
                filteredCabang.forEach(cbg => {
                    const option = document.createElement('option');
                    option.value = cbg.id;
                    option.textContent = cbg.nama;
                    cabangSelect.appendChild(option);
                });

                // Set the selected value for Cabang Ilmu if exists
                const selectedCabang = {{ $data->id_cabang }};
                if (selectedCabang) {
                    const existingOption = Array.from(cabangSelect.options).find(opt => opt.value == selectedCabang);
                    if (existingOption) {
                        existingOption.selected = true;
                    }
                }
            } else {
                // Hide the Cabang Ilmu dropdown if no Pohon Ilmu is selected
                cabangGroup.style.display = 'none';
            }
        }
    </script>
    @include('sweetalert::alert')
@endsection
