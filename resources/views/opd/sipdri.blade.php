@extends('halaman_dasboard.index')

@if (Auth::user()->role === 'admin')
    @section('navitem')
    <li class="sidebar-menu-title">MENU</li>
          <li class="">
            <a href="/admin" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
            <span>Dashboard</span>
              </span>
              <!-- <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon> -->
            </a>
          </li>

          <li class="sidebar-menu-title">MASTER DATA</li>
          <!-- Authentication -->
          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:collection"></iconify-icon>
            <span>Master Data</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="{{ route('opd') }}">Data OPD</a>
              </li>
              <li>
                <a href="{{ route('spm') }}?id=1">Data SP2D LS SIPD RI</a>
              </li>
              <li>
                <a href="{{ route('pajakls') }}">Data Pajak LS</a>
              </li>
              <li>
                <a href="{{ route('sp2dgu') }}?id=1">Data SP2D GU SIPD RI</a>
              </li>
            </ul>
          </li>

          <!-- Pages Area -->
          <li class="sidebar-menu-title">TRANSAKSI</li>
          <!-- Authentication -->
          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:collection"></iconify-icon>
            <span>Penatausahaan Pengeluaran</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="signin-one.html">Buku Kontrol Verifikasi SPM</a>
              </li>
              <li>
                <a href="{{ route('datapajak') }}">Verifiaksi SPM</a>
              </li>
              <li>
                <a href="signin-two.html">Pembuatan SP2D</a>
              </li>
              <li>
                <a href="signin-two.html">Verifikasi SP2D</a>
              </li>
            </ul>
          </li>

          <!-- Elements Area -->
          <li class="sidebar-menu-title">LAPORAN</li>
          <!-- Widgets -->
          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:view-grid-add"></iconify-icon>
            <span>Laporan</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="basic-widgets.html">Register SP2D</a>
              </li>
              <li>
                <a href="statistics-widgets.html">Sumber Dana</a>
              </li>
            </ul>
          </li>

          <!-- Elements Area -->
          <li class="sidebar-menu-title">SETTING</li>
          <!-- Widgets -->
          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:view-grid-add"></iconify-icon>
            <span>User Control</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="{{ route('usercontrol') }}">Admin / User</a>
              </li>
            </ul>
          </li>

          <!-- Map -->
          <li class="">
            <a href="map.html" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:map"></iconify-icon>
            <span>Profil</span>
              </span>
            </a>
          </li>
          
@endsection

{{-- @elseif(Auth::user()->role === 'user')
    @section('navitem')
    <li class="sidebar-menu-title">MENU</li>
          <li class="">
            <a href="#" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:home"></iconify-icon>
            <span>Dashboard</span>
              </span>
              <!-- <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon> -->
            </a>
          </li>

          <!-- Pages Area -->
          <li class="sidebar-menu-title">TRANSAKSI</li>
          <!-- Authentication -->
          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:collection"></iconify-icon>
            <span>Input Data Pajak</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="signin-one.html">Signin One</a>
              </li>
              <li>
                <a href="signin-two.html">Signin Two</a>
              </li>
            </ul>
          </li>
          <!-- Utility -->
          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:view-boards"></iconify-icon>
            <span>Verifikasi</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="{{ route('datapajak') }}">Terima</a>
              </li>
              <li>
                <a href="pricing.html">Tolak</a>
              </li>
            </ul>
          </li>

          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:view-boards"></iconify-icon>
            <span>Validasi</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="invoice.html">Invoice</a>
              </li>
              <li>
                <a href="pricing.html">Pricing</a>
              </li>
            </ul>
          </li>


          <!-- Elements Area -->
          <li class="sidebar-menu-title">LAPORAN</li>
          <!-- Widgets -->
          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:view-grid-add"></iconify-icon>
            <span>Widgets</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="basic-widgets.html">Basic</a>
              </li>
              <li>
                <a href="statistics-widgets.html">Statistic</a>
              </li>
            </ul>
          </li>
          <!-- Components -->
          <li>
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:collection"></iconify-icon>
            <span>Components</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="typography.html">Typography</a>
              </li>
              <li>
                <a href="colors.html">Colors</a>
              </li>
              <li>
                <a href="alert.html">Alert</a>
              </li>
              <li>
                <a href="buttons.html">Button</a>
              </li>
              <li>
                <a href="card.html">Card</a>
              </li>
              <li>
                <a href="carousel.html">Carousel</a>
              </li>
              <li>
                <a href="dropdown.html">Dropdown</a>
              </li>
              <li>
                <a href="image.html">Image</a>
              </li>
              <li>
                <a href="modal.html">Modal</a>
              </li>
              <li>
                <a href="progressbar.html">Progress bar</a>
              </li>
              <li>
                <a href="placeholder.html">Placeholder</a>
              </li>
              <li>
                <a href="tab-accordion.html">Tab & Accordion</a>
              </li>
              <li>
                <a href="badges.html">Badges</a>
              </li>
              <li>
                <a href="pagination.html">Pagination</a>
              </li>
              <li>
                <a href="video.html">Video</a>
              </li>
              <li>
                <a href="tooltip-popover.html">Tooltip & Popover</a>
              </li>
            </ul>
          </li>
          <!-- Forms -->
          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:clipboard-list"></iconify-icon>
            <span>Forms</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="input.html">Input</a>
              </li>
              <li>
                <a href="input-group.html">Input group</a>
              </li>
              <li>
                <a href="input-layout.html">Input layout</a>
              </li>
              <li>
                <a href="form-validation.html">Form validation</a>
              </li>
              <li>
                <a href="wizard.html">Wizard</a>
              </li>
              <li>
                <a href="input-mask.html">Input mask</a>
              </li>
              <li>
                <a href="file-input.html">File input</a>
              </li>
              <li>
                <a href="form-repeater.html">Form repeater</a>
              </li>
              <li>
                <a href="textarea.html">Textarea</a>
              </li>
              <li>
                <a href="checkbox.html">Checkbox</a>
              </li>
              <li>
                <a href="radio.html">Radio button</a>
              </li>
              <li>
                <a href="switch.html">Switch</a>
              </li>
              <li>
                <a href="select.html">Select</a>
              </li>
              <li>
                <a href="date-picker.html">Date time picker</a>
              </li>
            </ul>
          </li>
          <!-- Tables -->
          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:table"></iconify-icon>
            <span>Tables</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="basic-table.html">Basic table</a>
              </li>
              <li>
                <a href="advance-table.html">Advanced table</a>
              </li>
            </ul>
          </li>
          <!-- Charts -->
          <li class="">
            <a href="javascript:void(0)" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:chart-bar"></iconify-icon>
            <span>Chart</span>
              </span>
              <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
            </a>
            <ul class="sidebar-submenu">
              <li>
                <a href="apex-chart.html">Apex chart</a>
              </li>
              <li>
                <a href="chartjs.html">Chart js</a>
              </li>
            </ul>
          </li>
          <!-- Map -->
          <li class="">
            <a href="map.html" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:map"></iconify-icon>
            <span>Map</span>
              </span>
            </a>
          </li>
          <!-- Icons -->
          <li class="">
            <a href="icons.html" class="navItem">
              <span class="flex items-center">
            <iconify-icon class=" nav-icon" icon="heroicons-outline:emoji-happy"></iconify-icon>
            <span>Icons</span>
              </span>
            </a>
          </li>
    @endsection --}}
@endif


@section('main')
    <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]" id="content_wrapper">
          <div class="page-content">
            <div class="transition-all duration-150 container-fluid" id="page_layout">
              <div id="content_layout">

                <!-- BEGIN: Breadcrumb -->
                <div class="mb-5">
                  <ul class="m-0 p-0 list-none">
                    <li class="inline-block relative top-[3px] text-base text-primary-500 font-Inter ">
                      <a href="index.html">
                        <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                        <iconify-icon icon="heroicons-outline:chevron-right" class="relative text-slate-500 text-sm rtl:rotate-180"></iconify-icon>
                      </a>
                    </li>
                    <li class="inline-block relative text-sm text-primary-500 font-Inter ">
                      Master Data
                      <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                    </li>
                    <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                      Data SP2D SIPD RI</li>
                  </ul>
                </div>
                <!-- END: BreadCrumb -->

                <!-- Tabel -->
                <div class=" space-y-5">
                  <div class="card">
                    <header class=" card-header noborder">
                      <h4 class="card-title">DATA SP2D RI
                      </h4>
                      <!-- <a href="#" class="btn inline-flex justify-center btn-light btn-sm">Tambah Data</a> -->
                    </header>
                    <div class="card-body px-6 pb-6">
                      <div class="overflow-x-auto -mx-6 dashcode-data-table">
                        <span class=" col-span-8  hidden"></span>
                        <span class="  col-span-4 hidden"></span>
                        <div class="inline-block min-w-full align-middle">
                          <div class="overflow-hidden ">
                            
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700">
                              <thead class="bg-slate-200 dark:bg-slate-700">
                                <tr>
                                  <th scope="col" class=" table-th ">
                                    NO
                                  </th>
                                  <th scope="col" class=" table-th ">
                                    NAMA OPD
                                  </th>
                                  <th scope="col" class=" table-th ">
                                    NOMOR SP2D
                                  </th>
                                  <th scope="col" class=" table-th ">
                                    TANGGAL SP2D
                                  </th>
                                  <th scope="col" class=" table-th ">
                                    KETERANGAN
                                  </th>
                                  <th scope="col" class=" table-th ">
                                    NILAI SP2D
                                  </th>
                                  <th scope="col" class=" table-th ">
                                    Action
                                  </th>
                                </tr>
                              </thead>

                              <body>
                                <?php $i=1; 

                                      $page = $_GET['id'];
                                      // $nomordok = $_GET['id'];
                                      $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJTSVBEX0FVVEhfU0VSVklDRSIsInN1YiI6IjMyMi4zNDIiLCJleHAiOjE3MjMyMDc2OTUsImlhdCI6MTcyMjk5MTY5NSwidGFodW4iOjIwMjQsImlkX3VzZXIiOjMyMiwiaWRfZGFlcmFoIjozNDIsImtvZGVfcHJvdmluc2kiOiI3MiIsImlkX3NrcGQiOjAsImlkX3JvbGUiOjksImlkX3BlZ2F3YWkiOjMyMiwic3ViX2RvbWFpbl9kYWVyYWgiOiJwYWx1In0.wHezoAshycC45kUTdkI_2WC5v7mihdBf0wFOPqIeLsc';
                                      $urlls = "https://service.sipd.kemendagri.go.id/pengeluaran/strict/sp2d/pembuatan/index?jenis=LS&status=LS&page=$page&limit=10";
                                      // $urlgu = "https://service.sipd.kemendagri.go.id/pengeluaran/strict/sp2d/pembuatan/index?jenis=GU&status=LS&page=$page&limit=10";
                                      // $urldok = "https://service.sipd.kemendagri.go.id/pengeluaran/strict/sp2d/pembuatan/cetak/$nomordok";
                                      $pagination = 40 ;

                                      function rupiah($angka){
                                      $hasil_rupiah = "" . number_format($angka,0,',','.');
                                      return $hasil_rupiah;
                                      }

                                      $hitung = $pagination;
                                      $curl = curl_init();
                                      curl_setopt_array($curl, array(
                                        CURLOPT_URL => $urlls,
                                        CURLOPT_RETURNTRANSFER => true,
                                        CURLOPT_ENCODING => '',
                                        CURLOPT_MAXREDIRS => 10,
                                        CURLOPT_TIMEOUT => 0,
                                        CURLOPT_FOLLOWLOCATION => true,
                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                        CURLOPT_CUSTOMREQUEST => 'GET',
                                        CURLOPT_HTTPHEADER => array(
                                          "Authorization: Bearer  $token"
                                        ),
                                      ));
                                      $response = curl_exec($curl);
                                      curl_close($curl);
                                      $dt = json_decode($response, true);
                                      
                                ?>
                                <?php $i=1; ?>
                                @foreach ($dt as $row)

                                
                                  <tr class="hover:bg-slate-200 dark:hover:bg-slate-700">
                                  <td class="table-td"> {{ $i++ }}</td>
                                  <td class="table-td">{{ $row['nama_sub_skpd'] }}</td>
                                  <td class="table-td">{{ $row['nomor_sp_2_d'] }}</td>
                                  <td class="table-td">{{ $row['tanggal_sp_2_d'] }}</td>
                                  <td class="table-td">{{ $row['keterangan_sp_2_d'] }}</td>
                                  <td class="table-td">{{ rupiah($row['nilai_sp_2_d']) }}</td>
                                  
                                            <td class="table-td ">
                                              <div class="flex space-x-3 rtl:space-x-reverse">
                                                  <a href="{{ route('detailspm') }}?id=<?= $row['id_spm']; ?>" class="action-btn" type="button">
                                                    <iconify-icon icon="heroicons:eye"></iconify-icon>
                                                  </a>

                                                  <!-- // {{-- <form onsubmit="return confirmHapus(event)" action="" method="post" class="d-inline">
                                                  //    @csrf
                                                  //     <button type="submit" class="action-btn">
                                                  //     <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                  //     </button>
                                                  // </form> --}} -->

                                                  <a href="{{ route('simpansp2d') }}?id=<?= $row['id_sp_2_d']; ?>" class="action-btn" type="button">
                                                     <iconify-icon icon="heroicons:pencil-square"></  iconify-icon>
                                                  </a>
                                                </div>
                                              </td>
                                    </tr>                                    
                                  @endforeach
                                
                              </body>
                            </table>

                            <div>
                              <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                  <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                      <span aria-hidden="true">&laquo;</span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                  </li>
                                  <?php
                                    for($a=1;$a<$hitung;$a++)
                                    {
                                      ?>
                                      <li class="page-item"><a class="page-link" href="Spm?id=<?=$a;?>"><?=$a;?></a></li>
                                    <?php 
                                      }
                                    ?>
                                  <li class="page-item">
                                    <a class="page-link" href="Spm?id=<?=$a;?>" aria-label="Next">
                                      <span aria-hidden="true">&raquo;</span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </li>
                                </ul>
                              </nav>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
    
@endsection