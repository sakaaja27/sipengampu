 <!-- sidebar @s -->
 <div class="nk-sidebar is-light nk-sidebar-fixed is-light " data-content="sidebarMenu">
     <div class="nk-sidebar-element nk-sidebar-head">
         <div class="nk-sidebar-brand">
             <a href="/" class="logo-link nk-sidebar-logo">
                 <img class="logo-light logo-img" src="{{ asset('images/logo/logo.png') }}"
                     srcset="{{ asset('images/logo/logo.png') }} 2x" alt="logo">
                 <img class="logo-dark logo-img" src="{{ asset('images/logo/logo.png') }}"
                     srcset="{{ asset('images/logo/logo.png') }} 2x" alt="logo-dark">
                 <img class="logo-small logo-img logo-img-small" src="{{ asset('images/logo/logo.png') }}"
                     srcset="{{ asset('images/logo/logo.png') }} 2x" alt="logo-small"><span class="m-2">TEACH MAP</span>
             </a>
         </div>
         <div class="nk-menu-trigger me-n2">
             <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                     class="icon ni ni-arrow-left"></em></a>
         </div>
     </div><!-- .nk-sidebar-element -->
     <div class="nk-sidebar-element">
         <div class="nk-sidebar-content">
             <div class="nk-sidebar-menu" data-simplebar>
                 <ul class="nk-menu">
                     {{-- jika status_pegawai != 5 --}}
                     @if (Auth::user()->status_pegawai != 5)
                         <li class="nk-menu-heading">
                             <h6 class="overline-title text-primary-alt">Dashboards</h6>
                         </li><!-- .nk-menu-item -->
                         <li class="nk-menu-item">
                             <a href="{{ '/dashboard' }}" class="nk-menu-link">
                                 <span class="nk-menu-icon"><em class="icon ni ni-presentation"></em></span>
                                 <span class="nk-menu-text">Dashboard</span>
                             </a>
                         </li><!-- .nk-menu-item -->
                         <li class="nk-menu-heading">
                             <h6 class="overline-title text-primary-alt">Applications</h6>
                         </li><!-- .nk-menu-heading -->
                         <li class="nk-menu-item has-sub">
                             <a href="#" class="nk-menu-link nk-menu-toggle">
                                 <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                                 <span class="nk-menu-text">Master Data</span>
                             </a>
                             <ul class="nk-menu-sub">
                                 <li class="nk-menu-item">
                                     <a href="{{ '/admin' }}" class="nk-menu-link"><span
                                             class="nk-menu-text">Admin</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                     <a href="{{ '/dosen' }}" class="nk-menu-link"><span
                                             class="nk-menu-text">Dosen</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                     <a href="{{ '/jabatan' }}" class="nk-menu-link"><span
                                             class="nk-menu-text">Jabatan</span></a>
                                 </li>

                                 <li class="nk-menu-item">
                                     <a href="{{ '/tahunakademik' }}" class="nk-menu-link"><span
                                             class="nk-menu-text">Tahun Akademik</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                     <a href="{{ '/prodi' }}" class="nk-menu-link"><span
                                             class="nk-menu-text">Program Studi</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                     <a href="{{ '/matakuliah' }}" class="nk-menu-link"><span class="nk-menu-text">Mata
                                             Kuliah</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                     <a href="{{ '/pengampu' }}" class="nk-menu-link"><span
                                             class="nk-menu-text">Pengampu</span></a>
                                 </li>
                             </ul><!-- .nk-menu-sub -->
                         </li><!-- .nk-menu-item -->
                         <li class="nk-menu-item has-sub">
                             <a href="#" class="nk-menu-link nk-menu-toggle">
                                 <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                                 <span class="nk-menu-text">Master Rumpun Ilmu</span>
                             </a>
                             <ul class="nk-menu-sub">
                                 <li class="nk-menu-item">
                                     <a href="{{ '/rumpunilmu' }}" class="nk-menu-link"><span
                                             class="nk-menu-text">Rumpun Ilmu</span></a>
                                 </li>
                                 <li class="nk-menu-item">
                                    <a href="{{ '/pohonilmu' }}" class="nk-menu-link"><span
                                            class="nk-menu-text">Pohon Ilmu</span></a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ '/cabangilmu' }}" class="nk-menu-link"><span
                                            class="nk-menu-text">Cabang Rumpun Ilmu</span></a>
                                </li>
                                {{-- <li class="nk-menu-item">
                                    <a href="{{ '/dosenrumpun' }}" class="nk-menu-link"><span
                                            class="nk-menu-text">Dosen Rumpun</span></a>
                                </li> --}}

                             </ul><!-- .nk-menu-sub -->
                         </li><!-- .nk-menu-item -->
                         <li class="nk-menu-item">
                             <a href="{{ '/rekap' }}" class="nk-menu-link">
                                 <span class="nk-menu-icon"><em class="icon ni ni-property-alt"></em></span>
                                 <span class="nk-menu-text">Rekap Data</span>
                             </a>
                         </li><!-- .nk-menu-item -->
                     @else
                         <li class="nk-menu-heading">
                             <h6 class="overline-title text-primary-alt">Dashboards</h6>
                         </li><!-- .nk-menu-item -->
                         <li class="nk-menu-item">
                             <a href="{{ '/dashboard' }}" class="nk-menu-link">
                                 <span class="nk-menu-icon"><em class="icon ni ni-presentation"></em></span>
                                 <span class="nk-menu-text">Dashboard</span>
                             </a>
                         </li><!-- .nk-menu-item -->
                     @endif
                     <!-- .nk-menu-item -->
                 </ul><!-- .nk-menu -->
             </div><!-- .nk-sidebar-menu -->
         </div><!-- .nk-sidebar-content -->
     </div><!-- .nk-sidebar-element -->
 </div>
 <!-- sidebar @e -->
