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
                                <strong>Data Cabang Ilmu</strong>
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
                                    <th>Rumpun Ilmu</th>
                                    <th>Pohon Ilmu</th>
                                    <th>Cabang Rumpun Ilmu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $data->pohonilmu->rumpunilmu->nama }}</td>
                                        <td>{{ $data->pohonilmu->nama }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>
                                            <a type="button" data-bs-toggle="modal" href="#"
                                                data-bs-target="#modaledit-{{ $data->id }}"
                                                class="btn btn-warning btn-sm"><em class="icon ni ni-pen2"></em></a>
                                            <a type="button" href="{{ route('cabangilmu.delete', $data->id) }}"
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

    {{-- Modal add --}}
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Cabang Ilmu</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('cabangilmu.store')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group" hidden>
                            <label>ID</label>
                            <input type="text" class="form-control" placeholder="id" name="id">
                        </div>

                        <div class="form-group">
                            <label>Rumpun Ilmu</label>
                            <select class="form-control" id="rumpunSelect" onchange="updatePohon()">
                                <option value="" disabled selected>Pilih Rumpun Ilmu</option>
                                @foreach ($rumpun as $r)
                                    @if ($r->id != 6)
                                        <!-- Menambahkan kondisi untuk melewatkan id = 6 -->
                                        <option value="{{ $r->id }}">{{ $r->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group" id="pohonGroup" style="display: none;">
                            <label>Pohon Ilmu</label>
                            <select class="form-control select2" id="pohonSelect" name="id_pohon" required>
                                <option value="" disabled selected>Pilih Pohon Ilmu</option>
                                <!-- Options will be populated by JavaScript -->
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Cabang Rumpun Ilmu</label>
                            <input type="text" class="form-control" placeholder="cabang rumpun ilmu" name="nama"
                                required>
                            @error('nama')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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

    {{-- Modal edit --}}
    @foreach ($datas as $data)
        <div class="modal fade" id="modaledit-{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Cabang Rumpun Ilmu</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('cabangilmu.update', $data->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="form-group" hidden>
                                <label>ID</label>
                                <input type="text" class="form-control" placeholder="id" name="id"
                                    value="{{ $data->id }}">
                            </div>

                            <div class="form-group">
                                <label>Rumpun Ilmu</label>
                                <select class="form-control" id="rumpunSelected" onchange="updatePohon2()">
                                    <option value="" disabled selected>Pilih Rumpun Ilmu</option>
                                    @foreach ($rumpun as $r)
                                        @if ($r->id != 6)
                                            <!-- Menambahkan kondisi untuk melewatkan id = 6 -->
                                            <option value="{{ $r->id }}">{{ $r->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" id="pohonGroupted" style="display: none;">
                                <label>Pohon Ilmu</label>
                                <select class="form-control select2" id="pohonSelected" name="id_pohon" required>
                                    <option value="" disabled selected>Pilih Pohon Ilmu</option>
                                    <!-- Options will be populated by JavaScript -->
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nama Cabang Rumpun Ilmu</label>
                                <input type="text" class="form-control" placeholder="" name="nama"
                                    value="{{ $data->nama }}">
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
    <script>
        const pohonData = @json($pohon); // Pastikan ini benar

        function updatePohon() {
            const id = document.getElementById('rumpunSelect').value;
            const pohonSelect = document.getElementById('pohonSelect');
            const pohonGroup = document.getElementById('pohonGroup');

            // Clear existing options
            pohonSelect.innerHTML = '<option value="" disabled selected>Pilih Pohon Ilmu</option>';

            // Check if a Rumpun Ilmu is selected
            if (id) {
                // Show the Pohon Ilmu dropdown
                pohonGroup.style.display = 'block';

                // Filter pohon based on selected rumpun
                const filteredPohon = pohonData.filter(phn => phn.id_rumpun == id); // Pastikan ini sesuai

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

        // Call updatePohon on page load to set the correct state
        document.addEventListener('DOMContentLoaded', function() {
            updatePohon();
        });
    </script>

    <script>
        const pohonDataupdate = @json($pohon); // Pastikan ini benar

        function updatePohon2() {
            const id = document.getElementById('rumpunSelected').value;
            const pohonSelected = document.getElementById('pohonSelected');
            const pohonGroupted = document.getElementById('pohonGroupted');

            // Clear existing options
            pohonSelected.innerHTML = '<option value="" disabled selected>Pilih Pohon Ilmu</option>';

            // Check if a Rumpun Ilmu is selected
            if (id) {
                // Show the Pohon Ilmu dropdown
                pohonGroupted.style.display = 'block';

                // Filter pohon based on selected rumpun
                const filteredPohoned = pohonDataupdate.filter(phn => phn.id_rumpun == id); // Pastikan ini sesuai

                // Populate the pohon dropdown
                filteredPohoned.forEach(phn => {
                    const option = document.createElement('option');
                    option.value = phn.id;
                    option.textContent = phn.nama;
                    pohonSelected.appendChild(option);
                });

                // Set the selected value for Pohon Ilmu if exists
                const selectedPohon = {{ $data->id_pohon }};
                if (selectedPohon) {
                    const existingOption = Array.from(pohonSelected.options).find(opt => opt.value == selectedPohon);
                    if (existingOption) {
                        existingOption.selected = true;
                    }
                }
            } else {
                // Hide the Pohon Ilmu dropdown if no Rumpun Ilmu is selected
                pohonGroupted.style.display = 'none'; // Perbaikan di sini
            }
        }

        // Call updatePohon on page load to set the correct state
        document.addEventListener('DOMContentLoaded', function() {
            updatePohon2();
        });
    </script>
    @include('sweetalert::alert')
@endsection
