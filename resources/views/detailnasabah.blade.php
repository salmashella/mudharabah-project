@extends('header')
@section('content')

    <div class="content-top">
        <div class="col-md-12 ">



            <div class="detail-body row container">
                <div class="col-sm-1 ">
                    <a href="/lihatnasabah" class="btn-default btn">Kembali</a>
                </div>

        <div class="row">

            <div class="panel-group tool-tips widget-shadow">
                <h4 class="title2">Detail Nasabah  "{{ $result->Id_Nasabah }}"</h4>
                <ul id="myTabs" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#nasabah" id="nasabah-tab" role="tab" data-toggle="tab" aria-controls="nasabah" aria-expanded="true">Data Nasabah</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#pasangan" role="tab" id="pasangan-tab" data-toggle="tab" aria-controls="pasangan" aria-expanded="false">Data Pasangan</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#perusahaan" role="tab" id="perusahaan-tab" data-toggle="tab" aria-controls="perusahaan" aria-expanded="false">Data Perusahaan</a>
                    </li>
                    <li role="presentation" class="">
                        <a href="#penghasilan" role="tab" id="penghasilan-tab" data-toggle="tab" aria-controls="penghasilan" aria-expanded="false">Data Penghasilan</a>
                    </li>
                    {{--<li role="presentation" class="">--}}
                        {{--<a href="#pembiayaan" role="tab" id="pembiayaan-tab" data-toggle="tab" aria-controls="pembiayaan" aria-expanded="false">Data Pembiayaan</a>--}}
                    {{--</li>--}}

                </ul>


                <div id="myTabContent" class="tab-content scrollbar1">
                    <div role="tabpanel" class="tab-pane fade active in" id="nasabah" aria-labelledby="nasabah-tab">
                        <div class="detail-data-nasabah">
                            <div class="content">
                                <div class="col-md-3">Nama Lengkap</div>
                                <div class="col-md-9">: {{ $result->Nama }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Jenis Kelamin</div>
                                <div class="col-md-9">: {{ $result->Jenkel }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Alamat</div>
                                <div class="col-md-9">: {{$result->Alamat}}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Agama</div>
                                <div class="col-md-9">:
                                    @if($result->Agama == "Islam") Islam
                                    @elseif($result->Agama == "Kristen") Kristen
                                    @elseif($result->Agama == "Katholik") Katholik
                                    @elseif($result->Agama == "Budha") Budha
                                    @elseif($result->Agama == "Konghucu") Konghucu
                                    @endif

                                </div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Telepon</div>
                                <div class="col-md-9">: {{ $result->No_Telp }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Jenis Identitas</div>
                                <div class="col-md-9">: @if($result->Jenis_Identitas == "KTP") KTP
                                    @elseif($result->Jenis_Identitas == "SIM") SIM
                                    @endif
                                </div>
                            </div>

                            <br><br>
                            <div class="content">
                                <div class="col-md-3">No Identitas</div>
                                <div class="col-md-9">: {{ $result->No_Identitas }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Pekerjaan</div>
                                <div class="col-md-9">: {{ $result->Pekerjaan }}</div>
                            </div>

                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Tempat, Tanggal Lahir</div>
                                <div class="col-md-9">: {{ $result->Tempat_Lahir }}, {{ $result->Tanggal_Lahir }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Nama Ahli Waris</div>
                                <div class="col-md-9">: {{ $result->Nama_Ahliwaris }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Alamat Ahli Waris</div>
                                <div class="col-md-9">: {{ $result->Alamat_Ahliwaris }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Hubungan Ahli Waris</div>
                                <div class="col-md-9">: {{ $result->Hubungankeluarga_Ahliwaris }}</div>
                            </div>
                            <br><br>
                        </div>
                    </div>


                    <!-- DATA PASANGAN -->

                    <div role="tabpanel" class="tab-pane fade " id="pasangan" aria-labelledby="pasangan-tab">
                        <div class="detail-data-pasangan">
                            <div class="content">
                                <div class="col-md-3">Id Pasangan</div>
                                <div class="col-md-9">: {{ $result->Id_Pasangan }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Nama Pasangan</div>
                                <div class="col-md-9">: {{ $result->Nama_Pasangan }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Pekerjaan Pasangan</div>
                                <div class="col-md-9">: {{$result->Pekerjaan_Pasangan}}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Jenis Kelamin</div>
                                <div class="col-md-9">: @if($result->Jenkel_Pasangan == "L") Laki-Laki
                                    @elseif($result->Jenkel_Pasangan == "P") Perempuan
                                    @endif
                                </div>
                            </div>

                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Keterangan</div>
                                <div class="col-md-9">: {{ $result->Keterangan }}</div>
                            </div>
                            <br><br>
                        </div>
                    </div>

                    <!-- DATA PERUSAHAAN  -->

                    <div role="tabpanel" class="tab-pane fade " id="perusahaan" aria-labelledby="perusahaan-tab">

                        <div class="detail-data-perusahaan">
                            <div class="content">
                                <div class="col-md-3">Id Perusahaan</div>
                                <div class="col-md-9">: {{ $result->Id_Perusahaan }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Nama Perusahaan</div>
                                <div class="col-md-9">: {{ $result->Nama_Perusahaan}}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">No Telp Perusahaan</div>
                                <div class="col-md-9">: {{$result->No_Telp_Perusahaan}}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Alamat Perusahaan</div>
                                <div class="col-md-9">: {{ $result->Alamat_Perusahaan }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Bidang Usaha</div>
                                <div class="col-md-9">: {{ $result->Bidang_Usaha }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Berdiri Sejak</div>
                                <div class="col-md-9">: {{ $result->Berdiri_Sejak }}</div>
                            </div>
                            <br><br>

                            <div class="content">
                                <div class="col-md-3">Status</div>
                                <div class="col-md-9">: @if($result->Status == "Aktif") Aktif
                                    @elseif($result->Status == "Tidak Aktif") Tidak Aktif
                                    @endif
                                </div>
                            </div>


                            <br><br>
                        </div>
                    </div>


                    <!-- DATA PENGHASILAN  -->


                    <div role="tabpanel" class="tab-pane fade " id="penghasilan" aria-labelledby="penghasilan-tab">
                        <div class="detail-data-penghasilan">
                            <div class="content">
                                <div class="col-md-3">Id Penghasilan</div>
                                <div class="col-md-9">: {{ $result->Id_Penghasilan }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Penghasilan Istri </div>
                                <div class="col-md-9">: {{ $result->Penghasilan_Istri}}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Penghasilan Suami  </div>
                                <div class="col-md-9">: {{$result->Penghasilan_Suami}}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Penghasilan Lain </div>
                                <div class="col-md-9">: {{ $result->Penghasilan_lain }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Pengeluaran Pendidikan</div>
                                <div class="col-md-9">: {{ $result->Pengeluaran_Pendidikan }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Pengeluaran Rumah Tangga</div>
                                <div class="col-md-9">: {{ $result->Pengeluaran_Rumahtangga }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Pengeluaran Cicilan Bank</div>
                                <div class="col-md-9">: {{ $result->Pengeluaran_CicilanBank }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Pengeluaran Pribadi</div>
                                <div class="col-md-9">: {{ $result->Pengeluaran_Pribadi }}</div>
                            </div>
                            <br><br>
                            <div class="content">
                                <div class="col-md-3">Pengeluaran Lain</div>
                                <div class="col-md-9">: {{ $result->Pengeluaran_lain }}</div>
                            </div>
                            <br><br>
                        </div>
                    </div>


                    {{--<!-- DATA PEMBIAYAAN  -->--}}

                    {{--<div role="tabpanel" class="tab-pane fade " id="pembiayaan" aria-labelledby="pembiayaan-tab">--}}
                        {{--<div class="detail-data-pembiayaan">--}}
                            {{--<div class="content">--}}
                                {{--<div class="col-md-3">Id Pembiayaan</div>--}}
                                {{--<div class="col-md-9">: {{ $result->Id_Pembiayaan }}</div>--}}
                            {{--</div>--}}
                            {{--<br><br>--}}
                            {{--<div class="content">--}}
                                {{--<div class="col-md-3">Tujuan Pembiayaan</div>--}}
                                {{--<div class="col-md-9">: {{ $result->Tujuan_Pembiayaan }}</div>--}}
                            {{--</div>--}}
                            {{--<br><br>--}}
                            {{--<div class="content">--}}
                                {{--<div class="col-md-3"> Status Pembiayaan</div>--}}
                                {{--<div class="col-md-9">: {{$result->Status}}</div>--}}
                            {{--</div>--}}
                            {{--<br><br>--}}
                            <!-- <div class="content">
                        {{--<div class="col-md-3">Status Pembayaran</div>--}}
                        {{--<div class="col-md-9">: {{ $result->Status_Pembayaran }}</div>--}}
                    </div>
                    <br><br> -->
                        </div>
                    </div>
                </div>
        </div>
            </div>
        </div>
            <div class="clearfix"> </div>
        </div>



    @endsection