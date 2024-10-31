@foreach ($pengampu->unique('dosen.nama') as $ngampu)
    <tr>
        <td class="text-center p-2" style="min-width: 60px; vertical-align: middle;">
            {{ $loop->iteration }}</td>
        <td class="p-2" style="min-width: 350px; vertical-align: middle;">
            {{ $ngampu->dosen->nama }}
        </td>
        @foreach ($jabatan as $jbtn)
            @if ($ngampu->dosen->jabatan == $jbtn->id)
                <td class="p-2" style="min-width: 200px; vertical-align: middle;">
                    {{ $jbtn->nama }}
                </td>
            @endif
        @endforeach
        @foreach ($munculprodi as $data)
            <td class="p-2 text-center" style="min-width: 100px; vertical-align: middle;">
                @if (isset($total_mk[$ngampu->dosen->nip][$data->nama]))
                    {{ $total_mk[$ngampu->dosen->nip][$data->nama] }}
                @else
                    0
                @endif
            </td>
            <td class="p-2 text-center" style="min-width: 100px; vertical-align: middle;">
                @if (isset($total_sks_teori[$ngampu->dosen->nip][$data->nama]))
                    {{ $total_sks_teori[$ngampu->dosen->nip][$data->nama] }}
                @else
                    0
                @endif
            </td>
            <td class="p-2 text-center" style="min-width: 100px; vertical-align: middle;">
                @if (isset($total_sks_praktik[$ngampu->dosen->nip][$data->nama]))
                    {{ $total_sks_praktik[$ngampu->dosen->nip][$data->nama] }}
                @else
                    0
                @endif
            </td>
            <td class="p-2 text-center" style="min-width: 100px; vertical-align: middle;">
                @if (isset($total_sks_teori_praktik[$ngampu->dosen->nip][$data->nama]))
                    {{ $total_sks_teori_praktik[$ngampu->dosen->nip][$data->nama] }}
                @else
                    0
                @endif
            </td>
        @endforeach

        <td class="p-2 text-center" style="min-width: 100px; vertical-align: middle;">
            @foreach ($tot_kjm_mk as $nip => $nama_prodi_values)
                @if ($nip == $ngampu->dosen->nip)
                    {{ array_sum($nama_prodi_values) }}
                @endif
            @endforeach
        </td>
        <td class="p-2 text-center" style="min-width: 100px; vertical-align: middle;" title="KJM Teori">
            @foreach ($tot_kjm_teori as $nip => $nama_prodi_values)
                @if ($nip == $ngampu->dosen->nip)
                    {{ array_sum($nama_prodi_values) }}
                @endif
            @endforeach
        </td>
        <td class="p-2 text-center" style="min-width: 100px; vertical-align: middle;">
            @foreach ($total_kjm_sks_teori as $nip => $nama_prodi_values)
                @if ($nip == $ngampu->dosen->nip)
                    {{ array_sum($nama_prodi_values) }}
                @endif
            @endforeach
        </td>
        <td class="p-2 text-center" style="min-width: 100px; vertical-align: middle;" title="KJM Praktik">
            @foreach ($tot_kjm_praktik as $nip => $nama_prodi_values)
                @if ($nip == $ngampu->dosen->nip)
                    {{ array_sum($nama_prodi_values) }}
                @endif
            @endforeach
        </td>
        <td class="p-2 text-center" style="min-width: 100px; vertical-align: middle;">
            @foreach ($total_kjm_sks_praktik as $nip => $nama_prodi_values)
                @if ($nip == $ngampu->dosen->nip)
                    {{ array_sum($nama_prodi_values) }}
                @endif
            @endforeach
        </td>

        <td class="p-2 text-right" style="min-width: 100px; vertical-align: middle;">
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
                            $kjm_teori = array_sum($nama_prodi_values) * $jbtn->nominal * 14;
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
                            $kjm_praktik = array_sum($nama_prodi_values) * $jbtn->nominal * 14;
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
