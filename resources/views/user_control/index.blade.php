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
                <a href="{{ route('spm') }}">Data SP2D RI</a>
              </li>
              <li>
                <a href="{{ route('pajakls') }}">Data Pajak LS</a>
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
                      Setting
                      <iconify-icon icon="heroicons-outline:chevron-right" class="relative top-[3px] text-slate-500 rtl:rotate-180"></iconify-icon>
                    </li>
                    <li class="inline-block relative text-sm text-slate-500 font-Inter dark:text-white">
                      User Control</li>
                  </ul>
                </div>
                <!-- END: BreadCrumb -->

                <!-- Tabel -->
                <div class=" space-y-5">
                  <div class="card">
                    <header class=" card-header noborder">
                      <h4 class="card-title">Data Admin dan User
                      </h4>
                      <a href="{{ route('tambahopd') }}" class="btn inline-flex justify-center btn-light btn-sm">Tambah Data</a>
                    </header>
                    <div class="card-body px-6 pb-6">
                      <div class="overflow-x-auto -mx-6 dashcode-data-table">
                        <span class=" col-span-8  hidden"></span>
                        <span class="  col-span-4 hidden"></span>
                        <div class="inline-block min-w-full align-middle">
                          <div class="overflow-hidden ">
                            
                            <table class="min-w-full divide-y divide-slate-100 table-fixed dark:divide-slate-700 data-table">
                              <thead class="bg-slate-200 dark:bg-slate-700">
                                <tr>
                                  <th scope="col" class=" table-th ">
                                    NO
                                  </th>
                                  <th scope="col" class=" table-th ">
                                    NAMA USER
                                  </th>
                                  <th scope="col" class=" table-th ">
                                    EMAIL
                                  </th>
                                  <th scope="col" class=" table-th ">
                                    OPD
                                  </th>
                                  <th scope="col" class=" table-th ">
                                    ROLE
                                  </th>
                                  <th scope="col" class=" table-th ">
                                    Action
                                  </th>
                                </tr>
                              </thead>

                              <body>
                                <?php $i=1; ?>
                                  @foreach ($data as $item)
                                    <tr class="hover:bg-slate-200 dark:hover:bg-slate-700">
                                        <td class="table-td"> {{ $i++ }}</td>
                                        <td class="table-td">{{ $item['fullname'] }}</td>
                                        <td class="table-td">{{ $item['email'] }}</td>
                                        <td class="table-td">{{ $item['id_opd'] }}</td>
                                        <td class="table-td">{{ $item['role'] }}</td>
                                        <td class="table-td ">
                                              <div class="flex space-x-3 rtl:space-x-reverse">
                                                  <a class="action-btn" type="button">
                                                    <iconify-icon icon="heroicons:eye"></iconify-icon>
                                                  </a>

                                                  <form onsubmit="return confirmHapus(event)" action="" method="post" class="d-inline">
                                                     @csrf
                                                      <button type="submit" class="action-btn">
                                                      <iconify-icon icon="heroicons:trash"></iconify-icon>
                                                      </button>
                                                  </form>

                                                  <a href="" class="action-btn" type="button">
                                                     <iconify-icon icon="heroicons:pencil-square"></  iconify-icon>
                                                  </a>
                                                </div>
                                            </td>
                                    </tr>
                                  @endforeach
                              </body>

                            </table>
                            
                           
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