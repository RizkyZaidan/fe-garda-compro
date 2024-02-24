@section('content')
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
<style>

    @media print {
    body {
        margin: 0;
    }

    #modalContent {
        width: 100%;
        padding: 15px;
        box-sizing: border-box;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border: 2px solid black;
    }

    th, td {
        border: 1px solid black; /* Set border color and width */
        padding: 8px; /* Adjust padding as needed */
    }
    }
    .tujuanSumhist {
        -ms-overflow-style: none !important;
        /* Internet Explorer 10+ */
        scrollbar-width: none !important;
        /* Firefox */
    }

    .tujuanSumhist::-webkit-scrollbar {
        display: none !important;
        /* Safari and Chrome */
    }

    .progressline-wrapper {
        margin-left: 1.5rem;
        border-left: 4px solid #e5e8f5;
        counter-reset: Title;
        margin-top: 2rem;
    }

    .node {
        padding-top: 0;
        padding-left: 1.5rem;
        padding-bottom: 3.5rem;
        position: relative;
        counter-increment: step;
    }

    .node h3,
    .node p {
        margin: 0 !important;
    }

    .node::before {
        content: counter(step);
        color: transparent;
        width: 1.4rem;
        height: 1.4rem;
        background: #e5e8f5;
        border: 2px solid #e5e8f5;
        border-radius: 50%;
        position: absolute;
        top: 0rem;
        left: -0.9rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .progressline-wrapper>*:last-child {

        padding-bottom: 0rem !important;
    }

    .skeleton-load {
        border-radius: 3px;
        background-image: linear-gradient(90deg, #e2e2e2 0px, #efefef 30px, #e2e2e2 60px) !important;
        background-size: calc(160px + 160px) !important;
        animation: refresh 1.2s infinite ease-out !important;
    }

    @keyframes refresh {
        0% {
            background-position: calc(-160px);
        }

        60%,
        100% {
            background-position: 160px;
        }
    }
</style>
<input type="hidden" id="unitid" value="{{ session('id_unit_kerja') }}">
<div class="page-content">
    <div class="container-fluid">
        {{-- <?php dd($dashboard); ?> --}}
        {{-- <?php dd($dashboard['data']); ?> --}}
        {{-- <?php dd(session()); ?> --}}
        {{-- <?php dd(session()->get('role')); ?> --}}
        {{-- <?php dd(); ?> --}}
        {{-- <php dd($dashboard);?> --}}
        <div class="row">
            <div class="col-xl-12">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-3">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>{{ session()->get('nama') }}</p>
                                    {{-- <p>{{ session()->get('jabatan')}} - {{ session()->get('unit_kerja')}}</p> --}}
                                </div>
                            </div>
                            <div class="col-5 align-self-end text-right">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid" width="50%"
                                    height="50%">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="avatar-md profile-user-wid mb-4">
                                    @if (session()->get('foto') == 'File Photo not found')
                                        <img class="img-thumbnail rounded-circle" src="assets/images/users/avatar-5.jpg"
                                            alt="foto">
                                    @else
                                        <img class="img-thumbnail rounded-circle"
                                            style="width: 75px; height: 75px !important;"
                                            src="data:image/png;base64, {{ session()->get('foto') }}" alt="foto">
                                    @endif
                                </div>
                                <h5 class="font-size-15">{{ session()->get('nama') }}</h5>
                            </div>

                            <div class="col-sm-8">
                                <div class="pt-4">
                                    <div class="mt-4">
                                        <p class="text-muted mb-0 text-truncate pl-1"
                                            style="border-left: 2px solid red;">{{ session()->get('unit_kerja') }}</p>
                                        <p class="text-muted mb-0 text-truncate pl-1"
                                            style="border-left: 2px solid red;">{{ session()->get('jabatan') }}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-medium">Naskah Masuk</p>
                                        @php
                                            // dd($dashboard);
                                        @endphp
                                        <h4 class="mb-0">{{ $dashboard['suratMasuk'] }}</h4>
                                    </div>

                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                        <span class="avatar-title">
                                            <i class="fas fa-arrow-alt-circle-down font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-medium">Naskah Keluar</p>
                                        <h4 class="mb-0">{{ $dashboard['suratKeluar'] }}</h4>
                                    </div>

                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                        <span class="avatar-title">
                                            <i class="fas fa-arrow-alt-circle-up font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-medium">Disposisi Berjalan</p>
                                        <h4 class="mb-0">{{ $dashboard['disposisiOnprogres'] }}</h4>
                                    </div>

                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                        <span class="avatar-title">
                                            <i class="fab fa-accessible-icon font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-medium">Disposisi Selesai</p>
                                        <h4 class="mb-0">{{ $dashboard['disposisiSelesai'] }}</h4>
                                    </div>

                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                        <span class="avatar-title">
                                            <i class="fab fa-wpforms font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-12" style="padding-left: 1.5rem; padding-top: 1.5rem;">
                                    <h6 class="d-inline-block mx-2">Daftar Naskah Dinas</h6>
                                    <div class="custom-control custom-switch custom-switch-md d-inline-block">
                                        <input type="checkbox" class="custom-control-input custom-control-input-md"
                                            id="customSwitch1" data-target="#rowNasdin">
                                        <label class="custom-control-label" for="customSwitch1"></label>
                                    </div>
                                    <h6 class="d-inline-block mx-2">Daftar Izin Prinsip</h6>
                                </div>
                            </div>
                            <div class="card-body" id="rowNasdin">
                                <h3>Daftar Naskah Dinas</h3>

                                <div class="mb-3">&nbsp;</div>
                                <input type="hidden" id="mytoken" value="{{ session('token') }}">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; white-space: nowrap; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nomor Surat</th>
                                            <th>PIC</th>
                                            <th>Jenis</th>
                                            <th>Sifat</th>
                                            <th>Prioritas</th>
                                            <th>Status</th>
                                            <th>tanggal dibuat</th>
                                            <th>tanggal deadline</th>
                                            <th style="width: 300px; word-break:break-all; word-wrap:break-word;">
                                                Naskah Dinas Upload atau Lampiran</th>
                                            <th>Action</th>
                                            {{-- <th type ="hidden"></th>
                                        <th type ="hidden"></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @php dd($dashboard);@endphp --}}
                                        @foreach ($dashboard['data'] as $key => $data)
                                            @php
                                                // dd($data);
                                                if (isset($data['tgl_create']) && $data['tgl_create'] !== null) {
                                                    $tgl = tanggal_indonesia(date('Y-m-d', strtotime($data['tgl_create'])));
                                                } else {
                                                    $tgl = '-';
                                                }

                                                if ($data['tanggal_end'] !== null) {
                                                    $tgl_deadline = tanggal_indonesia(date('Y-m-d', strtotime($data['tanggal_end'])));
                                                } else {
                                                    $tgl_deadline = '-';
                                                }
                                                $dataStatusURL = str_replace(' ', '%20', $data['status']);
                                            @endphp
                                            <tr class="text-center">
                                                <td width="5%" style="vertical-align: middle;" data-priority="1">
                                                    {{ $key + 1 }}</td>
                                                <td width="5%" style="vertical-align: middle;" data-priority="2">
                                                    {{ $data['no_surat'] }}</td>
                                                <td width="5%" style="vertical-align: middle;" data-priority="3">
                                                    {{ $data['pembuat'] }}</td>
                                                <td width="5%" style="vertical-align: middle;" data-priority="4">
                                                    {{ $data['jenis'] }}</td>
                                                <td width="5%" style="vertical-align: middle;" data-priority="5">
                                                    {{ $data['sifat'] }}</td>
                                                <td width="5%" style="vertical-align: middle;" data-priority="6">
                                                    {{ $data['prioritas'] }}</td>
                                                <td width="5%"style="vertical-align: middle;" data-priority="7">
                                                    @if ($data['statusId'] == 2)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 3)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 4)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 5)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 6)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 7)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 8)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 9)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 10)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 11)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 12)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 13)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 14)
                                                        <span class="badge text-white"
                                                            style="background-color: #f374b1">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 15)
                                                        <span
                                                            class="badge text-dark badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 16)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 17)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @endif
                                                </td>
                                                <td width="5%" style="vertical-align: middle;" data-priority="8">
                                                    {{ $tgl }}</td>

                                                <td width="5%" style="vertical-align: middle;" data-priority="9">
                                                    {{ $tgl_deadline }}
                                                </td>

                                                @if ($data['status_lampiran'] == 'Ada')
                                                    <td width="5%" style="vertical-align: middle"><span
                                                            class="badge text-white badge-dark">{{ $data['status_lampiran'] }}</span>
                                                    </td>
                                                @else
                                                    <td width="5%" style="vertical-align: middle"><span
                                                            class="badge text-white badge-danger">{{ $data['status_lampiran'] }}</span>
                                                    </td>
                                                @endif
                                                <td class="text-center" width="20%">
                                                    <div class="btn-group mt-2 mr-1 dropright">
                                                        <button type="button"
                                                            class="btn btn-info waves-effect waves-light dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="mdi mdi-chevron-right"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            @if ($data['statusId'] == 15)
                                                                <a href="/lihat_naskah/{{ $data['id'] }}/{{ $data['unit_id'] }}/{{ $data['surat'] }}" class="dropdown-item">
                                                                    Tindak Lanjut
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if ($data['statusId'] == 14)
                                                                <a href="/edit1?id={{ $data['id'] }}" class="dropdown-item">
                                                                    Edit Naskah Dinas
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if (in_array($data['statusId'], [3, 14]))
                                                                <a href="javascript:void(0);" onclick="publish({{ $data['id'] }})" class="dropdown-item">
                                                                    Kirim Naskah Dinas
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if (
                                                                ($data['sifat'] == 'Rahasia' && in_array(session('role'), ['puk1', 'puk2']))
                                                                || ($data['sifat'] != 'Rahasia' && in_array(session('role'), ['admin', 'kesekretariatan', 'staff']))
                                                                || (session('nama') == $data['pembuat'])
                                                            )
                                                                @php
                                                                    $id_unit_kerja = $data['unit_id'] ? $data['unit_id'] : session()->get('id_unit_kerja');
                                                                    $url_lihat_naskah = "/lihat_naskah/".$data['id']."/".$id_unit_kerja."/nostatus/0";
                                                                    $url_lihat_naskah_qr = "/lihat_naskah_qr/".$data['id']."/".$id_unit_kerja."/nostatus/0";
                                                                @endphp

                                                                <a href="{{ $url_lihat_naskah }}" class="dropdown-item">
                                                                    Lihat Naskah Dinas
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="{{ $url_lihat_naskah_qr }}" class="dropdown-item">
                                                                    Lihat Naskah Dinas QR
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if ($data['surat'] == 'Keluar' && in_array(session('role'), ['puk1', 'puk2']))
                                                                <a href="/lihat_naskah/{{ $data['id'] }}/{{ $data['unit_id'] }}/{{ $dataStatusURL }}/0" class="dropdown-item">
                                                                    Approval
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if (
                                                                in_array(session('role'), ['puk1', 'puk2'])
                                                                && (
                                                                    ($data['surat'] == 'Masuk' && ! (in_array($data['status'], ['Naskah Dinas Telah Disposisi PUK 1']))) 
                                                                    || ($data['surat'] == 'Disposisi' && $data['status'] = 'Naskah Dinas Telah Disposisi PUK 2')
                                                                ) 
                                                            )
                                                                <a href="/lihat_naskah/{{ $data['id'] }}/{{ $data['unit_id'] }}/{{ $dataStatusURL }}/1" class="dropdown-item">
                                                                    Disposisi
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if (
                                                                (
                                                                    $data['surat'] == 'Disposisi'
                                                                    || in_array($data['status'], ['Naskah Dinas Baru Masuk', 'Naskah Dinas Telah Disposisi PUK 1'])
                                                                    || ($data['surat'] == 'Masuk' && $data['status'] == 'Naskah Dinas Telah Disposisi PUK 2')

                                                                ) && (
                                                                    (session('role') == 'staff' && $data['sifat'] == 'Rahasia' && $data['pegawai_id'] == session('pegawai_id'))
                                                                    || ($data['sifat'] != 'Rahasia' && in_array(session('role'), ['staff', 'kesekretariatan']) && $data['unit_id'] != session('id_unit_kerja'))
                                                                    || in_array(session('role'), ['puk1', 'puk2'])
                                                                )
                                                            )
                                                                <a href="/lihat_naskah/{{ $data['id'] }}/{{ $data['unit_id'] }}/{{ $data['surat'] }}/2" class="dropdown-item">
                                                                    Tindak Lanjut
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if ($data['status'] == 'Revisi' && in_array(session('role'), ['staff', 'kesekretariatan']))
                                                                <a href="edit?id={{ $data['id'] }}" class="dropdown-item">
                                                                    Revisi
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if (
                                                                !empty($data['isi'])
                                                                && (
                                                                    ($data['sifat'] != 'Rahasia')
                                                                    || ($data['sifat'] == 'Rahasia' && session('role') == 'puk1')
                                                                )
                                                            )
                                                                <a href="/cetak_naskah/{{ $data['id'] }}" class="dropdown-item">
                                                                    Cetak Nota Dinas
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if ($data['sifat'] != 'Rahasia' || ($data['sifat'] == 'Rahasia' && in_array(session('role'), ['puk1', 'puk2'])))
                                                                @if ($data['status_lampiran'] == 'Ada') 
                                                                    {{-- Download Lampiran --}}
                                                                    <a href="#" onclick="lampiranku()" data-nomor="{{ $data['id'] }}" class="dropdown-item">
                                                                        Download Lampiran
                                                                    </a>
                                                                    <div class="dropdown-divider"></div>
                                                                @endif

                                                                @if ($data['isi'] != null || $data['isi'] != '')
                                                                    {{-- Download Naskah Dinas --}}
                                                                    <a class="dropdown-item" href="/download-naskah-dinas/{{ $data['id'] }}/{{ $data['unit_id'] }}/{{ $dataStatusURL }}/0" target="_blank">
                                                                        Download Naskah Dinas
                                                                    </a>
                                                                    <div class="dropdown-divider"></div>
                                                                @endif
                                                            @endif

                                                            @if (
                                                                $data['sifat'] != 'Rahasia'
                                                                || (
                                                                    in_array(session('role'), ['puk1', 'puk2'])
                                                                    || (session('nama') == $data['pembuat'] && $data['sifat'] == 'Rahasia')
                                                                )
                                                            )
                                                                <a href="#" onclick="historiku()" data-nomor="{{ $data['id'] }}" data-toggle="modal" data-target="#ListHistory{{ $data['id'] }}" data-unitidsurat="{{ $data['unit_id'] }}" class="dropdown-item">
                                                                    History
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if (
                                                                // in_array(session()->get('level_jabatan'), [8, 7, 9]) && 
                                                                !in_array($data['statusId'], [3, 4, 14, 2, 10, 11])
                                                            )
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#lembarDisposisiModal{{ $data['id'] }}">
                                                                    Lembar Disposisi
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- <td type ="hidden" id="mastersurat_unitid" value="{{ $data['unit_id'] }}"></td>
                                            <td type ="hidden" id="masterdisposisi_pegawaiid" value={{ isset($data['pegawai_id'])?`"`+$data['pegawai_id']+`"`:"" }}></td> --}}
                                            </tr>

                                            <!-- Modal Histori -->

                                            <!--  <div aria-hidden="true" aria-labelledby="edit-pegawaiLabel" role="dialog"
                                            tabindex="-1" id="ListHistory{{ $data['id'] }}" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content bg-white">
                                                        <div class="modal-body bg-white">
                                                            <h5 class="text-center">History Naskah Dinas</h5>
                                                            <hr style="border-width:1px;border-color:black">
                                                            {{-- isi --}}
                                                            <ul class="list-group" id="historinya{{ $data['id'] }}">

                                                            </ul>
                                                            <br>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger btn-block"
                                                                    data-dismiss="modal">Tutup</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <!-- Modal End Histori -->
                                            <!-- Modal New History - Summary History -->
                                            <div aria-hidden="true" aria-labelledby="edit-pegawaiLabel"
                                                role="dialog" tabindex="-1" id="ListHistory{{ $data['id'] }}"
                                                class="modal fade p-0">
                                                <div class="modal-dialog" style="max-width: fit-content">
                                                    <div class="modal-content bg-white px-3"
                                                        style="width:67em !important;">
                                                        <div class="modal-body bg-white">

                                                            <!-- Title -->
                                                            <h5 class="text-center py-2"
                                                                style="background-color:#f0f6fd;font-weight:bold;" id="titleSumhist{{ $data['id'] }}">
                                                                History Nota Dinas</h5>

                                                            <div class="w-100 row mx-0 mt-5 px-4">
                                                                <div class="w-100 column" style="height: 200px;" id="progressBarSumhist{{ $data['id'] }}">
                                                                    <div class="position-relative"
                                                                        style="margin: 1vh auto">
                                                                        <button type="button"
                                                                            class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                            style="width: 3rem; top:-10.7em; height:3rem;left:0%; background-color:#E6E9EF;padding:4px;">
                                                                        </button>
                                                                        <h6 class="position-absolute translate-middle"
                                                                            style="width: 5rem; top:-55px; height:3rem;left:-1.9%;font-weight:700;text-align:center;">
                                                                            Draft
                                                                        </h6>
                                                                        <button type="button"
                                                                            class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                            style="width: 3rem; top:-10.7em; height:3rem;left:32%; background-color:#E6E9EF;padding:4px;">
                                                                        </button>
                                                                        <h6 class="position-absolute translate-middle"
                                                                            style="width: 5rem; top:-55px; height:3rem;left:30.1%;font-weight:700;text-align:center;">
                                                                            Approval 1
                                                                        </h6>
                                                                        <button type="button"
                                                                            class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                            style="width: 3rem; top:-10.7em; height:3rem;left:64%; background-color:#E6E9EF;padding:4px;">
                                                                        </button>
                                                                        <h6 class="position-absolute translate-middle"
                                                                            style="width: 5rem; top:-55px; height:3rem;left:62%;font-weight:700;text-align:center;">
                                                                            Approval 2
                                                                        </h6>
                                                                        <button type="button"
                                                                            class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                            style="width: 3rem; top:-10.7em; height:3rem;left:93.4%; background-color:#E6E9EF;padding:4px;">
                                                                        </button>
                                                                        <h6 class="position-absolute translate-middle"
                                                                            style="width: 5rem; top:-55px; height:3rem;left:91.4%;font-weight:700;text-align:center;">
                                                                            Terkirim
                                                                        </h6>
                                                                        <div class="progress skeleton-load"
                                                                            style="height: 4em;margin-top:100px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="column non-scroll tujuanSumhist"
                                                                style="max-height: 45vh; overflow-y:auto;overflow-x:hidden;width:80%;margin:0 10%;resize:none;" id="tujuanSumhist{{ $data['id'] }}">

                                                                <div id="accordion">
                                                                    <div class="card"
                                                                        style="background-color: transparent;">
                                                                        <div class="card-header accordion-shadow skeleton-load"
                                                                            style="background-color: #eef6fe;padding:0;height:5vh;border-radius: 10px;box-shadow: 0px 3px 4px -1px grey;">
                                                                            <h3 class="mb-0"
                                                                                style="height:100%;text-align:left;">
                                                                                <button class="btn"
                                                                                    style="min-width: 100%;height:100%;text-align:left;font-weight: 700;color: #50a5f1;font-size: 0.75em !important;padding: 0px 25px;"
                                                                                    data-toggle="collapse"
                                                                                    data-target="#collapseOne"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="collapseOne">
                                                                                </button>
                                                                            </h3>
                                                                        </div>
                                                                        <div id="collapseOne" class="collapse show"
                                                                            aria-labelledby="headingOne"
                                                                            data-parent="#accordion">
                                                                            <div class="card-body"
                                                                                style="padding: 1.25rem 0 1.25rem 0rem !important">
                                                                                <div class="position-relative"
                                                                                    style="margin: 1vh 3%;width:90%;">
                                                                                    <button type="button"
                                                                                        class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                                        style="width: 3rem; top:-10.7em; height:3rem;left:0%; background-color:#E6E9EF;padding:4px;">
                                                                                        <div style="height:2.5rem;">
                                                                                        </div>
                                                                                    </button>
                                                                                    <h6 class="position-absolute translate-middle"
                                                                                        style="width:6rem; top:-55px; height:3rem;left:-4%;font-weight:700;text-align:center;">
                                                                                        Diterima
                                                                                    </h6>
                                                                                    <button type="button"
                                                                                        class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                                        style="width: 3rem; top:-10.7em; height:3rem;left:32%; background-color:#E6E9EF;padding:4px;">
                                                                                        <div style="height:2.5rem;">
                                                                                        </div>
                                                                                    </button>
                                                                                    <h6 class="position-absolute translate-middle"
                                                                                        style="width:6rem; top:-55px; height:3rem;left:28%;font-weight:700;text-align:center;">
                                                                                        Disposisi
                                                                                    </h6>
                                                                                    <button type="button"
                                                                                        class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                                        style="width: 3rem; top:-10.7em; height:3rem;left:64%; background-color:#E6E9EF;padding:4px;">
                                                                                        <div style="height:2.5rem;">
                                                                                        </div>
                                                                                    </button>
                                                                                    <h6 class="position-absolute translate-middle"
                                                                                        style="width:6rem; top:-55px; height:3rem;left:60%;font-weight:700;text-align:center;">
                                                                                        Disposisi GH
                                                                                    </h6>
                                                                                    <button type="button"
                                                                                        class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                                        style="width: 3rem; top:-10.7em; height:3rem;left:96%; background-color:#E6E9EF;padding:4px;">
                                                                                        <div style="height:2.5rem;">
                                                                                        </div>
                                                                                    </button>
                                                                                    <h6 class="position-absolute translate-middle"
                                                                                        style="width:6rem; top:-55px; height:3rem;left:92%;font-weight:700;text-align:center;">
                                                                                        Tindak Lanjut
                                                                                    </h6>
                                                                                    <div class="progress skeleton-load"
                                                                                        style="height: 3.6em;margin:130px auto 40px;">
                                                                                    </div>
                                                                                </div>
                                                                            <h6 class="mb-0"
                                                                                style="text-align:center;min-width: 100%;height:100%;font-weight: 700;color: #0e0e0e;font-size: 1.25em !important;padding: 15px 25px;">
                                                                                Detail Proses
                                                                            </h6>
                                                                                <div class="progressline-wrapper">
                                                                                    <div class="node">
                                                                                        <div class="skeleton-load" style="width:30em;height:2.5em;margin-bottom:1.5em"></div>
                                                                                        <div class="skeleton-load" style="width:15rem;height:2em;margin-bottom:0.5em"></div>
                                                                                        <div class="skeleton-load" style="width:15rem;height:2em;margin-bottom:0.5em"></div>
                                                                                        <div class="skeleton-load" style="width:12.5rem;height:2em;margin-bottom:0.5em"></div>
                                                                                    </div>
                                                                                    <div class="node">
                                                                                        <div class="skeleton-load" style="width:30em;height:2.5em;margin-bottom:1.5em"></div>
                                                                                        <div class="skeleton-load" style="width:15rem;height:2em;margin-bottom:0.5em"></div>
                                                                                        <div class="skeleton-load" style="width:15rem;height:2em;margin-bottom:0.5em"></div>
                                                                                        <div class="skeleton-load" style="width:12.5rem;height:2em;margin-bottom:0.5em"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <br>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-danger btn-block"
                                                                    data-dismiss="modal">Tutup</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                                @foreach($dashboard['data'] as $key => $data)
                                    {{-- Modal Lembar Disposisi --}}
                                    <div class="modal fade p-0" id="lembarDisposisiModal{{ $data['id'] }}" tabindex="-1" role="dialog" aria-labelledby="lembarDisposisiModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="container p-3" id="modalContent{{ $data['id'] }}">
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="d-flex align-items-center row row-check mb-3">
                                                                <div class="col-md-4">
                                                                    <img src="assets/images/logo-bjbs.png" alt="Logo BJBS" style="width: auto;">
                                                                </div>
                                                                <div class="col-md-8" id="lembarDisposisiHeader">
                                                                    <h1>
                                                                        <u>
                                                                            Lembar Disposisi 
                                                                        </u>
                                                                    </h1>
                                                                </div>
                                                            </div>

                                                            <div class="mb-4">
                                                                <p class="font-weight-bold text-right mb-0">
                                                                    Tanggal Penerimaan : 
                                                                </p>

                                                                <p class="text-right">
                                                                    {{ date('d-m-Y', strtotime($data['tgllastupdated'])) }}
                                                                </p>

                                                                <div class="row">
                                                                    <div class="py-0 col-md-4">
                                                                        <p class="font-weight-bold">
                                                                            DARI
                                                                        </p>
                                                                    </div>
                                                                    <div class="py-0 col-md-8">
                                                                        <p>
                                                                            <span class="font-weight-bold">:</span> {{ $data['unit'] }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="py-0 col-md-4">
                                                                        <p class="font-weight-bold">
                                                                            PERIHAL
                                                                        </p>
                                                                    </div>
                                                                    <div class="py-0 col-md-8">
                                                                        <p>
                                                                            <span class="font-weight-bold">:</span> {{ $data['perihal'] }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="py-0 col-md-4">
                                                                        <p class="font-weight-bold">
                                                                            TANGGAL SURAT / MEMO
                                                                        </p>
                                                                    </div>
                                                                    <div class="py-0 col-md-8">
                                                                        <p>
                                                                            <span class="font-weight-bold">:</span> {{ date('d-m-Y', strtotime($data['tgl_create'])) }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="py-0 col-md-4">
                                                                        <p class="font-weight-bold">
                                                                            NOMOR SURAT / MEMO
                                                                        </p>
                                                                    </div>
                                                                    <div class="py-0 col-md-8">
                                                                        <p>
                                                                            <span class="font-weight-bold">:</span> {{ $data['no_surat'] }}
                                                                        </p>
                                                                    </div>
                                                                </div>

                                                                <br>

                                                                <table class="table border-lg">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="text-center" scope="col" width="70%">
                                                                                Disposisi
                                                                            </th>
                                                                            <th class="text-center" scope="col">
                                                                                Tandatangan
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($data['tujuan'] as $key => $tujuan)
                                                                            @foreach ($tujuan['logs'] as $key => $logs)
                                                                                <tr>
                                                                                    <td>
                                                                                        {{ $logs['catatan'] }}
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        {{ $logs['pic'] }} - {{ $tujuan['unit'] }}
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-primary" type="button" title="Download PDF" onclick="printContent({{ $data['id'] }})">
                                                        <img src="assets/images/aplikasi/pdf.svg" alt="Download PDF Button">
                                                    </button>
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- End Modal Lembar Disposisi --}}
                                @endforeach
                            </div>
                            <div class="card-body" id="rowIzin">
                                <h3>Daftar Izin Prinsip</h3>
                                <div class="mb-3">&nbsp;</div>
                                <input type="hidden" id="mytoken" value="{{ session('token') }}">
                                <table id="datatable2" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; white-space: nowrap; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nomor Surat</th>
                                            <th>PIC</th>
                                            <th>Jenis</th>
                                            <th>Sifat</th>
                                            <th>Prioritas</th>
                                            <th>Status</th>
                                            <th>tanggal dibuat</th>
                                            <th>tanggal deadline</th>
                                            <th style="width: 300px; word-break:break-all; word-wrap:break-word;">
                                                Naskah Dinas Upload atau Lampiran</th>
                                            <th>Action</th>
                                            {{-- <th type ="hidden"></th>
                                        <th type ="hidden"></th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @php dd($dashboard);@endphp --}}
                                        @foreach ($dashboard['dataIzinPrinsip'] as $key => $data)
                                            @php
                                                // dd($data);
                                                if (isset($data['tgl_create']) && $data['tgl_create'] !== null) {
                                                    $tgl = tanggal_indonesia(date('Y-m-d', strtotime($data['tgl_create'])));
                                                } else {
                                                    $tgl = '-';
                                                }

                                                if ($data['tanggal_end'] !== null) {
                                                    $tgl_deadline = tanggal_indonesia(date('Y-m-d', strtotime($data['tanggal_end'])));
                                                } else {
                                                    $tgl_deadline = '-';
                                                }
                                                $dataStatusURL = str_replace(' ', '%20', $data['status']);
                                            @endphp
                                            <tr class="text-center">
                                                <td width="5%" style="vertical-align: middle;" data-priority="1">
                                                    {{ $key + 1 }}</td>
                                                <td width="5%" style="vertical-align: middle;" data-priority="2">
                                                    {{ $data['no_surat'] }}</td>
                                                <td width="5%" style="vertical-align: middle;" data-priority="3">
                                                    {{ $data['pembuat'] }}</td>
                                                <td width="5%" style="vertical-align: middle;" data-priority="4">
                                                    {{ $data['jenis'] }}</td>
                                                <td width="5%" style="vertical-align: middle;" data-priority="5">
                                                    {{ $data['sifat'] }}</td>
                                                <td width="5%" style="vertical-align: middle;" data-priority="6">
                                                    {{ $data['prioritas'] }}</td>
                                                <td width="5%"style="vertical-align: middle;" data-priority="7">
                                                    @if ($data['statusId'] == 2)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 3)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 4)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 5)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 6)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 7)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 8)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 9)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 10)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 11)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 12)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 13)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 14)
                                                        <span class="badge text-white"
                                                            style="background-color: #f374b1">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 15)
                                                        <span
                                                            class="badge text-dark badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 16)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @elseif ($data['statusId'] == 17)
                                                        <span
                                                            class="badge badge-{{ $data['warna'] }}">{{ $data['status'] }}</span>
                                                    @endif
                                                </td>
                                                <td width="5%" style="vertical-align: middle;" data-priority="8">
                                                    {{ $tgl }}</td>

                                                <td width="5%" style="vertical-align: middle;" data-priority="9">
                                                    {{ $tgl_deadline }}
                                                </td>

                                                @if ($data['status_lampiran'] == 'Ada')
                                                    <td width="5%" style="vertical-align: middle"><span
                                                            class="badge text-white badge-dark">{{ $data['status_lampiran'] }}</span>
                                                    </td>
                                                @else
                                                    <td width="5%" style="vertical-align: middle"><span
                                                            class="badge text-white badge-danger">{{ $data['status_lampiran'] }}</span>
                                                    </td>
                                                @endif
                                                <td class="text-center" width="20%">
                                                    <div class="btn-group mt-2 mr-1 dropright">
                                                        <button type="button"
                                                            class="btn btn-info waves-effect waves-light dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="mdi mdi-chevron-right"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            @if ($data['statusId'] == 15)
                                                                <a href="/lihat_naskah/{{ $data['id'] }}/{{ $data['unit_id'] }}/{{ $data['surat'] }}" class="dropdown-item">
                                                                    Tindak Lanjut
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if ($data['statusId'] == 14)
                                                                <a href="/edit1?id={{ $data['id'] }}" class="dropdown-item">
                                                                    Edit Naskah Dinas
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if (in_array($data['statusId'], [3, 14]))
                                                                <a href="javascript:void(0);" class="dropdown-item" onclick="publish({{ $data['id'] }})">
                                                                    Kirim Naskah Dinas
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif
                                            
                                                            @if (
                                                                    ($data['sifat'] == 'Rahasia' && in_array(session('role'), ['puk1', 'puk2']))
                                                                    || ($data['sifat'] != 'Rahasia' && in_array(session('role'), ['admin', 'kesekretariatan', 'staff']))
                                                                    || (session('nama') == $data['pembuat'])
                                                                )
                                                                @php
                                                                    $id_unit_kerja = $data['unit_id'] ? $data['unit_id'] : session()->get('id_unit_kerja');
                                                                    $url_lihat_naskah = "/lihat_naskah/".$data['id']."/".$id_unit_kerja."/nostatus/0";
                                                                    $url_lihat_naskah_qr = "/lihat_naskah_qr/".$data['id']."/".$id_unit_kerja."/nostatus/0";
                                                                @endphp

                                                                <a href="{{ $url_lihat_naskah }}" class="dropdown-item">
                                                                    Lihat Naskah Dinas
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                                <a href="{{ $url_lihat_naskah_qr }}" class="dropdown-item">
                                                                    Lihat Naskah Dinas QR
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif
                                                            
                                                            @if ($data['surat'] == 'Keluar' && in_array(session('role'), ['puk1', 'puk2']))
                                                                <a href="/lihat_naskah/{{ $data['id'] }}/{{ $data['unit_id'] }}/{{ $dataStatusURL }}/0" class="dropdown-item">
                                                                    Approval
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if (
                                                                in_array(session('role'), ['puk1', 'puk2'])
                                                                && (
                                                                    ($data['surat'] == 'Masuk' && !(in_array($data['status'], ['Naskah Dinas Telah Disposisi PUK 1', 'Naskah Dinas Telah Disposisi PUK 2']))) 
                                                                    || ($data['surat'] == 'Disposisi' && $data['status'] = 'Naskah Dinas Telah Disposisi PUK 2')
                                                                ) 
                                                            )
                                                                <a href="/lihat_naskah/{{ $data['id'] }}/{{ $data['unit_id'] }}/{{ $dataStatusURL }}/1" class="dropdown-item">
                                                                    Disposisi
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if (
                                                                (
                                                                    $data['surat'] == 'Disposisi'
                                                                    || in_array($data['status'], ['Naskah Dinas Baru Masuk', 'Naskah Dinas Telah Disposisi PUK 1'])
                                                                    || ($data['surat'] == 'Masuk' && $data['status'] == 'Naskah Dinas Telah Disposisi PUK 2')
                                                                ) && (
                                                                    (session('role') == 'staff' && $data['sifat'] == 'Rahasia' && $data['pegawai_id'] == session('pegawai_id'))
                                                                    || ($data['sifat'] != 'Rahasia' && in_array(session('role'), ['staff', 'kesekretariatan']))
                                                                    || in_array(session('role'), ['puk1', 'puk2'])
                                                                )
                                                            )
                                                                <a href="/lihat_naskah/{{ $data['id'] }}/{{ $data['unit_id'] }}/{{ $data['surat'] }}/2" class="dropdown-item">
                                                                    Tindak Lanjut
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if ($data['status'] == 'Revisi' && in_array(session('role'), ['staff', 'kesekretariatan']))
                                                                <a href="/edit?id={{ $data['id'] }}" class="dropdown-item">
                                                                    Revisi
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if (
                                                                !empty($data['isi'])
                                                                && (
                                                                    ($data['sifat'] != 'Rahasia')
                                                                    || ($data['sifat'] == 'Rahasia' && session('role') == 'puk1')
                                                                )
                                                            )
                                                                <a href="/cetak_naskah/{{ $data['id'] }}" class="dropdown-item">
                                                                    Cetak Nota Dinas
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if ($data['sifat'] != 'Rahasia' || ($data['sifat'] == 'Rahasia' && in_array(session('role'), ['puk1', 'puk2'])))
                                                                @if ($data['status_lampiran'] == 'Ada') 
                                                                    {{-- Download Lampiran --}}
                                                                    <a href="#" onclick="lampiranku()" data-nomor="{{ $data['id'] }}" class="dropdown-item">
                                                                        Download Lampiran
                                                                    </a>
                                                                    <div class="dropdown-divider"></div>
                                                                @endif

                                                                @if ($data['isi'] != null || $data['isi'] != '')
                                                                    {{-- Download Naskah Dinas --}}
                                                                    <a class="dropdown-item" href="/download-naskah-dinas/{{ $data['id'] }}/{{ $data['unit_id'] }}/{{ $dataStatusURL }}/0" target="_blank">
                                                                        Download Naskah Dinas
                                                                    </a>
                                                                    <div class="dropdown-divider"></div>
                                                                @endif
                                                            @endif

                                                            @if (
                                                                $data['sifat'] != 'Rahasia'
                                                                || (
                                                                    in_array(session('role'), ['puk1', 'puk2'])
                                                                    || (session('nama') == $data['pembuat'] && $data['sifat'] == 'Rahasia')
                                                                )
                                                            )
                                                                <a href="#" onclick="historiku()" data-nomor="{{ $data['id'] }}" data-toggle="modal" data-target="#ListHistory{{ $data['id'] }}" data-unitidsurat="{{ $data['unit_id'] }}" class="dropdown-item">
                                                                    History
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif

                                                            @if (
                                                                // in_array(session()->get('level_jabatan'), [8, 7, 9]) && 
                                                                !in_array($data['status'], [2, 3, 4, 10, 11, 14])
                                                            )
                                                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#lembarDisposisiModal{{ $data['id'] }}">
                                                                    Lembar Disposisi
                                                                </a>
                                                                <div class="dropdown-divider"></div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </td>
                                                {{-- <td type ="hidden" id="mastersurat_unitid" value="{{ $data['unit_id'] }}"></td>
                                                <td type ="hidden" id="masterdisposisi_pegawaiid" value={{ isset($data['pegawai_id'])?`"`+$data['pegawai_id']+`"`:"" }}></td> --}}
                                            </tr>
                                            <!-- Modal New History - Summary History -->
                                            <div aria-hidden="true" aria-labelledby="edit-pegawaiLabel"
                                                role="dialog" tabindex="-1" id="ListHistory{{ $data['id'] }}"
                                                class="modal fade p-0">
                                                <div class="modal-dialog" style="max-width: fit-content">
                                                    <div class="modal-content bg-white px-3"
                                                        style="width:67em !important;">
                                                        <div class="modal-body bg-white">

                                                            <!-- Title -->
                                                            <h5 class="text-center py-2"
                                                                style="background-color:#f0f6fd;font-weight:bold;" id="titleSumhist{{ $data['id'] }}">
                                                                History Nota Dinas</h5>

                                                            <div class="w-100 row mx-0 mt-5 px-4">
                                                                <div class="w-100 column" style="height: 200px;" id="progressBarSumhist{{ $data['id'] }}">
                                                                    <div class="position-relative"
                                                                        style="margin: 1vh auto">
                                                                        <button type="button"
                                                                            class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                            style="width: 3rem; top:-10.7em; height:3rem;left:0%; background-color:#E6E9EF;padding:4px;">
                                                                        </button>
                                                                        <h6 class="position-absolute translate-middle"
                                                                            style="width: 5rem; top:-55px; height:3rem;left:-1.9%;font-weight:700;text-align:center;">
                                                                            Draft
                                                                        </h6>
                                                                        <button type="button"
                                                                            class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                            style="width: 3rem; top:-10.7em; height:3rem;left:32%; background-color:#E6E9EF;padding:4px;">
                                                                        </button>
                                                                        <h6 class="position-absolute translate-middle"
                                                                            style="width: 5rem; top:-55px; height:3rem;left:30.1%;font-weight:700;text-align:center;">
                                                                            Approval 1
                                                                        </h6>
                                                                        <button type="button"
                                                                            class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                            style="width: 3rem; top:-10.7em; height:3rem;left:64%; background-color:#E6E9EF;padding:4px;">
                                                                        </button>
                                                                        <h6 class="position-absolute translate-middle"
                                                                            style="width: 5rem; top:-55px; height:3rem;left:62%;font-weight:700;text-align:center;">
                                                                            Approval 2
                                                                        </h6>
                                                                        <button type="button"
                                                                            class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                            style="width: 3rem; top:-10.7em; height:3rem;left:93.4%; background-color:#E6E9EF;padding:4px;">
                                                                        </button>
                                                                        <h6 class="position-absolute translate-middle"
                                                                            style="width: 5rem; top:-55px; height:3rem;left:91.4%;font-weight:700;text-align:center;">
                                                                            Terkirim
                                                                        </h6>
                                                                        <div class="progress skeleton-load"
                                                                            style="height: 4em;margin-top:100px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="column non-scroll tujuanSumhist"
                                                                style="max-height: 45vh; overflow-y:auto;overflow-x:hidden;width:80%;margin:0 10%;resize:none;" id="tujuanSumhist{{ $data['id'] }}">

                                                                <div id="accordion">
                                                                    <div class="card"
                                                                        style="background-color: transparent;">
                                                                        <div class="card-header accordion-shadow skeleton-load"
                                                                            style="background-color: #eef6fe;padding:0;height:5vh;border-radius: 10px;box-shadow: 0px 3px 4px -1px grey;">
                                                                            <h3 class="mb-0"
                                                                                style="height:100%;text-align:left;">
                                                                                <button class="btn"
                                                                                    style="min-width: 100%;height:100%;text-align:left;font-weight: 700;color: #50a5f1;font-size: 0.75em !important;padding: 0px 25px;"
                                                                                    data-toggle="collapse"
                                                                                    data-target="#collapseOne"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="collapseOne">
                                                                                </button>
                                                                            </h3>
                                                                        </div>
                                                                        <div id="collapseOne" class="collapse show"
                                                                            aria-labelledby="headingOne"
                                                                            data-parent="#accordion">
                                                                            <div class="card-body"
                                                                                style="padding: 1.25rem 0 1.25rem 0rem !important">
                                                                                <div class="position-relative"
                                                                                    style="margin: 1vh 3%;width:90%;">
                                                                                    <button type="button"
                                                                                        class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                                        style="width: 3rem; top:-10.7em; height:3rem;left:0%; background-color:#E6E9EF;padding:4px;">
                                                                                        <div style="height:2.5rem;">
                                                                                        </div>
                                                                                    </button>
                                                                                    <h6 class="position-absolute translate-middle"
                                                                                        style="width:6rem; top:-55px; height:3rem;left:-4%;font-weight:700;text-align:center;">
                                                                                        Diterima
                                                                                    </h6>
                                                                                    <button type="button"
                                                                                        class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                                        style="width: 3rem; top:-10.7em; height:3rem;left:32%; background-color:#E6E9EF;padding:4px;">
                                                                                        <div style="height:2.5rem;">
                                                                                        </div>
                                                                                    </button>
                                                                                    <h6 class="position-absolute translate-middle"
                                                                                        style="width:6rem; top:-55px; height:3rem;left:28%;font-weight:700;text-align:center;">
                                                                                        Disposisi
                                                                                    </h6>
                                                                                    <button type="button"
                                                                                        class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                                        style="width: 3rem; top:-10.7em; height:3rem;left:64%; background-color:#E6E9EF;padding:4px;">
                                                                                        <div style="height:2.5rem;">
                                                                                        </div>
                                                                                    </button>
                                                                                    <h6 class="position-absolute translate-middle"
                                                                                        style="width:6rem; top:-55px; height:3rem;left:60%;font-weight:700;text-align:center;">
                                                                                        Disposisi GH
                                                                                    </h6>
                                                                                    <button type="button"
                                                                                        class="position-absolute translate-middle btn btn-sm rounded skeleton-load"
                                                                                        style="width: 3rem; top:-10.7em; height:3rem;left:96%; background-color:#E6E9EF;padding:4px;">
                                                                                        <div style="height:2.5rem;">
                                                                                        </div>
                                                                                    </button>
                                                                                    <h6 class="position-absolute translate-middle"
                                                                                        style="width:6rem; top:-55px; height:3rem;left:92%;font-weight:700;text-align:center;">
                                                                                        Tindak Lanjut
                                                                                    </h6>
                                                                                    <div class="progress skeleton-load"
                                                                                        style="height: 3.6em;margin:130px auto 40px;">
                                                                                    </div>
                                                                                </div>
                                                                            <h6 class="mb-0"
                                                                                style="text-align:center;min-width: 100%;height:100%;font-weight: 700;color: #0e0e0e;font-size: 1.25em !important;padding: 15px 25px;">
                                                                                Detail Proses
                                                                            </h6>
                                                                                <div class="progressline-wrapper">
                                                                                    <div class="node">
                                                                                        <div class="skeleton-load" style="width:30em;height:2.5em;margin-bottom:1.5em"></div>
                                                                                        <div class="skeleton-load" style="width:15rem;height:2em;margin-bottom:0.5em"></div>
                                                                                        <div class="skeleton-load" style="width:15rem;height:2em;margin-bottom:0.5em"></div>
                                                                                        <div class="skeleton-load" style="width:12.5rem;height:2em;margin-bottom:0.5em"></div>
                                                                                    </div>
                                                                                    <div class="node">
                                                                                        <div class="skeleton-load" style="width:30em;height:2.5em;margin-bottom:1.5em"></div>
                                                                                        <div class="skeleton-load" style="width:15rem;height:2em;margin-bottom:0.5em"></div>
                                                                                        <div class="skeleton-load" style="width:15rem;height:2em;margin-bottom:0.5em"></div>
                                                                                        <div class="skeleton-load" style="width:12.5rem;height:2em;margin-bottom:0.5em"></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <br>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-danger btn-block"
                                                                    data-dismiss="modal">Tutup</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                                @foreach($dashboard['data'] as $key => $data)
                                {{-- Modal Lembar Disposisi --}}
                                <div class="modal fade p-0" id="lembarDisposisiModal{{ $data['id'] }}" tabindex="-1" role="dialog" aria-labelledby="lembarDisposisiModalLabel" aria-hidden="true" data-bs-keyboard="false" data-bs-backdrop="static">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="container p-3" id="modalContentIzin{{ $data['id'] }}">
                                                <div class="modal-body">
                                                    <div class="container">
                                                        <div class="d-flex align-items-center row row-check mb-3">
                                                            <div class="col-md-4">
                                                                <img src="assets/images/logo-bjbs.png" alt="Logo BJBS" style="width: auto;">
                                                            </div>
                                                            <div class="col-md-8" id="lembarDisposisiHeader">
                                                                <h1>
                                                                    <u>
                                                                        Lembar Disposisi 
                                                                    </u>
                                                                </h1>
                                                            </div>
                                                        </div>

                                                        <div class="mb-4">
                                                            <p class="font-weight-bold text-right mb-0">
                                                                Tanggal Penerimaan : 
                                                            </p>

                                                            <p class="text-right">
                                                                {{ date('d-m-Y', strtotime($data['tgllastupdated'])) }}
                                                            </p>

                                                            <div class="row">
                                                                <div class="py-0 col-md-4">
                                                                    <p class="font-weight-bold">
                                                                        DARI
                                                                    </p>
                                                                </div>
                                                                <div class="py-0 col-md-8">
                                                                    <p>
                                                                        <span class="font-weight-bold">:</span> {{ $data['unit'] }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="py-0 col-md-4">
                                                                    <p class="font-weight-bold">
                                                                        PERIHAL
                                                                    </p>
                                                                </div>
                                                                <div class="py-0 col-md-8">
                                                                    <p>
                                                                        <span class="font-weight-bold">:</span> {{ $data['perihal'] }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="py-0 col-md-4">
                                                                    <p class="font-weight-bold">
                                                                        TANGGAL SURAT / MEMO
                                                                    </p>
                                                                </div>
                                                                <div class="py-0 col-md-8">
                                                                    <p>
                                                                        <span class="font-weight-bold">:</span> {{ date('d-m-Y', strtotime($data['tgl_create'])) }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="py-0 col-md-4">
                                                                    <p class="font-weight-bold">
                                                                        NOMOR SURAT / MEMO
                                                                    </p>
                                                                </div>
                                                                <div class="py-0 col-md-8">
                                                                    <p>
                                                                        <span class="font-weight-bold">:</span> {{ $data['no_surat'] }}
                                                                    </p>
                                                                </div>
                                                            </div>

                                                            <br>

                                                            <table class="table border-lg">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center" scope="col" width="70%">
                                                                            Disposisi
                                                                        </th>
                                                                        <th class="text-center" scope="col">
                                                                            Tandatangan
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($data['tujuan'] as $key => $tujuan)
                                                                        @foreach ($tujuan['logs'] as $key => $logs)
                                                                            <tr>
                                                                                <td>
                                                                                    {{ $logs['catatan'] }}
                                                                                </td>
                                                                                <td class="text-center">
                                                                                    {{ $logs['pic'] }} - {{ $tujuan['unit'] }}
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button" title="Download PDF" onclick="printContent({{ $data['id'] }})">
                                                    <img src="assets/images/aplikasi/pdf.svg" alt="Download PDF Button">
                                                </button>
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal Lembar Disposisi --}}
                            @endforeach
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
    <script>
        $('#nama_table').dataTable({
            "lengthChange": false,
            "bPaginate": false,
        });

        $('#datatable2').dataTable({

        });

        $(document).ready(function () {
            let message = "{{ session()->get('data') }}";

            <?php if (Session::get('login')): ?>
            swal("", "Berhasil Login", "success");
            <?php endif; ?>

            <?php if (Session::get('data')): ?>
            Swal.fire({
                    title: 'Berhasil',
                    text: message,
                    icon: 'success',
                });
            // swal("", message, "success");
            <?php endif; ?>

            <?php  if (Session::get('approval')): ?>
            swal("", "Berhasil Approval Naskah Dinas", "success");
            <?php endif; ?>

            <?php if (Session::get('approval_revisi')): ?>
            swal("", "Naskah Dinas Berhasil di Revisi", "success");
            <?php endif; ?>

            <?php if (Session::get('approval_reject')): ?>
            swal("", "Berhasil Me-reject Naskah Dinas", "success");
            <?php endif; ?>

            <?php if (Session::get('disposisi')): ?>
            swal("", "Berhasil Mendisposisikan Naskah Dinas", "success");
            <?php endif; ?>

            <?php if (Session::get('revisi')): ?>
            swal("", "Naskah Dinas Berhasil di Revisi ", "success");
            <?php endif; ?>

            <?php if (Session::get('ubah')): ?>
            swal("", "Naskah Dinas Berhasil di Ubah ", "success");
            <?php endif; ?>

            <?php if (Session::get('tindak_lanjut')): ?>
            swal("", "Naskah Dinas Berhasil Ditindak Lanjuti", "success");
            <?php endif; ?>
        });
    </script>
@endsection
