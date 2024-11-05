@extends('component.main')
@section('Title', 'dashboard')
@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-primary">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <span class="fs-2 me-1">{{ $dosen }}</span>

                                                </div>
                                                <h6 class="text-white">Dosen</h6>
                                            </div>
                                           
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                        <div class="nk-cmwg1-ck">
                                            <canvas class="campaign-line-chart-s1 rounded-bottom"
                                                id="runningCampaign"></canvas>
                                        </div>
                                    </div>
                                </div><!-- .nk-cmwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                            <div class="col-lg-3 col-sm-6">
                                <div class="card h-100 bg-info">
                                    <div class="nk-cmwg nk-cmwg1">
                                        <div class="card-inner pt-3">
                                            <div class="d-flex justify-content-between">
                                                <div class="flex-item">
                                                    <div class="text-white d-flex flex-wrap">
                                                        <span class="fs-2 me-1">{{ $matakuliah }}</span>
                                                       
                                                    </div>
                                                    <h6 class="text-white">Mata Kuliah</h6>
                                                </div>
                                                
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="nk-cmwg1-ck mt-auto">
                                            <canvas class="campaign-line-chart-s1 rounded-bottom" id="totalAudience"></canvas>
                                        </div>
                                    </div><!-- .nk-cmwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-warning">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <span class="fs-2 me-1">{{ $total_prodi }}</span>
                                                </div>
                                                <h6 class="text-white">Program Studi</h6>
                                            </div>
                                           
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                        <div class="nk-cmwg1-ck">
                                            <canvas class="campaign-bar-chart-s1 rounded-bottom" id="avgRating"></canvas>
                                        </div>
                                    </div>
                                </div><!-- .nk-cmwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-lg-3 col-sm-6">
                            <div class="card h-100 bg-danger">
                                <div class="nk-cmwg nk-cmwg1">
                                    <div class="card-inner pt-3">
                                        <div class="d-flex justify-content-between">
                                            <div class="flex-item">
                                                <div class="text-white d-flex flex-wrap">
                                                    <span class="fs-2 me-1">{{ $totalpengampu }}</span>
                                                </div>
                                                <h6 class="text-white">Pengampu</h6>
                                            </div>
                                           
                                        </div>
                                    </div><!-- .card-inner -->
                                    {{-- <div class="nk-ck-wrap mt-auto overflow-hidden rounded-bottom">
                                        <div class="nk-cmwg1-ck">
                                            <canvas class="campaign-line-chart-s1 rounded-bottom"
                                                id="testing"></canvas>
                                        </div>
                                    </div> --}}
                                </div><!-- .nk-cmwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        {{-- @foreach ($jabatan as $jbtn)
                            @php
                                $dosen_jabatan = $datas->where('jabatan', $jbtn->id)->first();
                            @endphp
                            @if ($dosen_jabatan)
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card card-full">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title"> Grafik Persebaran Total SKS Dosen
                                                        {{ $jbtn->nama }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner pt-0">
                                            <div class="nk-cmwg4-ck mt-4">
                                                <canvas id="myChart{{ $jbtn->nama }}"></canvas>
                                            </div>
                                        </div>
                                    </div><!-- .card -->
                                </div>
                            @endif
                        @endforeach --}}
                        @foreach ($jabatan as $jbtn)
                            @php
                                $dosen_jabatan = $datas->where('jabatan', $jbtn->id)->first();
                            @endphp
                            @if ($dosen_jabatan)
                            <div class="col-xxl-5">
                                <div class="card h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start gx-3 mb-3">
                                            <div class="card-title">
                                                <h6 class="title">Grafik Persebaran Total SKS Dosen
                                                    {{ $jbtn->nama }}</h6>
                                            </div>
                                        </div>
                                        <div class=" pt-4">
                                            <canvas class="w-100 h-100"
                                                id="myChart{{ $jbtn->nama }}"></canvas>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div>
                            @endif
                        @endforeach

                        <!-- .col -->
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/charts/gd-campaign.js?ver=3.2.2') }}"></script>

    <script>
        var charts = {!! json_encode($charts) !!};

        charts.forEach(function(chart) {
            const ctx = document.getElementById(chart.id);
            new Chart(ctx, {
                type: 'bar',
                data: chart.data,
                options: chart.options
            });
        });
    </script>

@endsection
