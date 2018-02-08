@extends('header')
@section('content')

    <div class="main-page">
        <div class="forms">
            <h3 class="title1">Form Edit Nasabah</h3>
            <form class="form-horizontal" action="{{route('editnasabah.update',$result->Id_Nasabah)}}" method="post" >
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                    <script src="/js/customjs.js"></script>

                    <div class="col-md-6">
                        <div class="form-title">
                            <h4>Data Nasabah</h4>
                        </div>
                        <div class="form-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Nasabah</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Nasabah" name="Nama" value="{{ $result->Nama }}" required="true">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kelamin </label>
                                <br>
                                    @if($result->Jenkel == "L")
                                        <input type="radio" name="Jenkel" value="L" checked>Laki laki
                                        <input style="margin-left: 100px" type="radio" name="Jenkel" value="P">Perempuan
                                    @else
                                        <input type="radio" name="Jenkel" value="L">Laki laki
                                        <input style="margin-left: 100px" type="radio" name="Jenkel" value="P" checked>Perempuan
                                    @endif
                            </div>


                            <div class="form-group">
                                <label for="txtarea1" >Alamat</label>
											<textarea id="txtarea1"  class="form-control1" placeholder="Alamat" name="Alamat" required="true">
                                                {{ $result->Alamat }}
											</textarea>
                            </div>
                            <div class="form-group">
                                <label for="selector1" >Agama</label>
                                <select name="Agama"  id="selector1" class="form-control1" required="true">
                                    @if($result->Agama == 'Islam')
                                        <option value="Islam">Islam</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Budha">Budha</option>
                                    @elseif($result->Agama == 'Konghucu')
                                        <option value="Islam">Islam</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Budha">Budha</option>
                                    @elseif($result->Agama == 'Kristen')
                                        <option value="Islam">Islam</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Budha">Budha</option>
                                    @elseif($result->Agama == 'Protestan')
                                        <option value="Islam">Islam</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Budha">Budha</option>
                                    @elseif($result->Agama == 'Budha')
                                        <option value="Islam">Islam</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Budha">Budha</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" >No Telepon</label>
                                <input type="number" class="form-control" id="focusedinput" placeholder="No Telepon" name="No_Telp" value="{{ $result->No_Telp }}" required="true">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Identitas </label>
                                    @if($result->Jenis_Identitas == "KTP")
                                        <input type="radio" name="Jenis_Identitas" value="KTP" checked>KTP
                                        <input style="margin-left: 100px" type="radio" name="Jenis_Identitas" value="SIM">SIM
                                    @else
                                        <input type="radio" name="Jenis_Identitas" value="KTP">KTP
                                        <input style="margin-left: 100px" type="radio" name="Jenis_Identitas" value="SIM" checked>SIM
                                    @endif
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" >No Identitas</label>
                                <input type="number" class="form-control" id="focusedinput" placeholder="No Identitas" name="No_Identitas" value="{{ $result->No_Identitas }}" required="true">
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" >Pekerjaan</label>
                                <input type="text" class="form-control" id="focusedinput" placeholder="Pekerjaan" name="Pekerjaan" value="{{ $result->Pekerjaan }}" required="true">
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" >Tempat Lahir</label>
                                <input type="text" class="form-control" id="focusedinput" placeholder="Tempat Lahir" name="Tempat_Lahir" value="{{ $result->Tempat_Lahir }}" required="true">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1" >Tanggal Lahir</label>
                                <input type="date" id="datefield" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date"  name="Tanggal_Lahir" value="{{ $result->Tanggal_Lahir }}" required="true">

                            </div>

                            <div class="form-group">
                                <label for="focusedinput" >Nama Ahli Waris</label>
                                <input type="text" class="form-control1" id="focusedinput" placeholder="Nama Ahli Waris" name="Nama_Ahliwaris" value="{{ $result->Nama_Ahliwaris }}" required="true">
                            </div>
                            <div class="form-group">
                                <label for="radio" >Jenis Identitas Ahli Waris</label>
                                <div class="radio block">
                                    @if($result->jenis_id_ahliwaris == "KTP")
                                    <label><input type="radio" name="jenis_id_ahliwaris" value="KTP" checked> KTP </label>
                                    <label><input type="radio" name="jenis_id_ahliwaris" value="SIM"> SIM </label>
                                    @else
                                    <label><input type="radio" name="jenis_id_ahliwaris" value="KTP"> KTP </label>
                                    <label><input type="radio" name="jenis_id_ahliwaris" value="SIM" checked> SIM </label>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" >No Identitas Ahli Waris</label>
                                <input type="number" class="form-control1" id="focusedinput" placeholder="No Identitas Ahli Waris" name="no_id_ahliwaris" required="" value="{{$result->no_id_ahliwaris}}">
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" >No Telepon Ahli Waris</label>
                                <input type="number" class="form-control1" id="focusedinput" placeholder="No Telepon Ahli Waris" name="no_telp_ahliwaris" required="" value="{{$result->no_telp_ahliwaris}}">
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" >Alamat Ahli Waris</label>
                                <input type="text" class="form-control1" id="focusedinput" placeholder="Alamat Ahli Waris" name="Alamat_Ahliwaris" required="true" value="{{ $result->Alamat_Ahliwaris }}" >
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" >Hubungan keluarga Ahli Waris</label>
                                <input type="text" class="form-control1" id="focusedinput" placeholder="Hubungan keluarga Ahli Waris" name="Hubungankeluarga_Ahliwaris" value="{{ $result->Hubungankeluarga_Ahliwaris }}" required="true">
                            </div>

                            <div class="form-group">
                                <hr>
                            </div>

                            <div class="form-title">
                                <h4>Data Pasangan</h4>
                            </div>
                            <div class="data-pasangan">
                                <div class="content-divider">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Apakah nasabah mempunyai pasangan?</label>
                                        <select id="punyapasangan" name="punyapasangan" class="form-control" onchange="onSelectPasanganEventClicked()">
                                            <option value="2">Tidak</option>
                                            <option value="1">Ya</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="layout-pasangan" style="display: none">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Pasangan</label>
                                        <input type="text" class="form-control" id="focusedinput" placeholder="Nama Pasangan" name="Nama_Pasangan" value="{{ $result->Nama_Pasangan }}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="radio" >Jenis Identitas Pasangan</label>
                                        <div class="radio block">
                                            @if($result->jenis_id_pasangan == "KTP")
                                                <label><input type="radio" name="jenis_id_pasangan" value="KTP" checked> KTP </label>
                                                <label><input type="radio" name="jenis_id_pasangan" value="SIM"> SIM </label>
                                            @else
                                                <label><input type="radio" name="jenis_id_pasangan" value="KTP"> KTP </label>
                                                <label><input type="radio" name="jenis_id_pasangan" value="SIM" checked> SIM </label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" >No Identitas Pasangan</label>
                                        <input type="number" class="form-control1" id="focusedinput" placeholder="No Identitas Pasangan" name="no_id_pasangan" required="" value="{{$result->no_id_pasangan}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" >No Telepon Pasangan</label>
                                        <input type="number" class="form-control1" id="focusedinput" placeholder="No Telepon Pasangan" name="no_telp_pasangan" required="" value="{{$result->no_telp_pasangan}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pekerjaan Pasangan</label>
                                        <input type="text" class="form-control" id="focusedinput" placeholder="Pekerjaan Pasangan" name="Pekerjaan_Pasangan" value="{{ $result->Pekerjaan_Pasangan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jenis Kelamin Pasangan</label>
                                        <br>
                                            @if($result->Jenkel_Pasangan == "L")
                                                <input type="radio" name="Jenkel_Pasangan" value="L" checked>Laki laki
                                                <input style="margin-left: 100px" type="radio" name="Jenkel_Pasangan" value="P">Perempuan
                                            @else
                                                <input type="radio" name="Jenkel_Pasangan" value="L">Laki laki
                                                <input style="margin-left: 100px" type="radio" name="Jenkel_Pasangan" value="P" checked>Perempuan
                                            @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="txtarea1">Keterangan</label>
                                        <textarea  id="txtarea1" cols="80" rows="4" class="form-control1" placeholder="Keterangan" name="Keterangan" required="">  {{ $result->Keterangan }}</textarea>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-title">
                            <h4>Data Perusahaan</h4>
                        </div>
                        <div class="data-perusahaan">
                            <div class="content-divider">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Apakah nasabah mempunyai perusahaan?</label>
                                    <select id="punyaperusahaan" name="punyaperusahaan" class="form-control" onchange="onSelectPerusahaanEventClicked()">
                                        <option value="2">Tidak</option>
                                        <option value="1">Ya</option>
                                    </select>
                                </div>
                            </div>

                            <div id="layout-perusahaan" style="display: none">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Nama Perusahaan" name="Nama_Perusahaan" value="{{ $result->Nama_Perusahaan }}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No SIUP</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="No SIUP" name="no_siup" value="{{ $result->no_siup }}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No Telepon</label>
                                        <input type="number" class="form-control1" id="focusedinput" placeholder="No Telepon" name="No_Telp_Perusahaan" value="{{ $result->No_Telp_Perusahaan }}" >
                                </div>
                                <div class="form-group">
                                    <label for="txtarea1">Alamat Perusahaan</label>
                                    <textarea  id="txtarea1" cols="80" rows="4" class="form-control1" placeholder="Alamat Perusahaan" name="Alamat_Perusahaan" required="">  {{ $result->Alamat_Perusahaan }}</textarea>
                                </div>



                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bidang Usaha</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Bidang Usaha" name="Bidang_Usaha" value="{{ $result->Bidang_Usaha }}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" >Berdiri Sejak</label>
                                        <input type="date" id="datefield" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date"  name="Berdiri_Sejak" value="{{ $result->Berdiri_Sejak }}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status Perusahaan</label>
                                    <br>
                                    <select name="Status" id="selector1" class="form-control1" >
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                        @if($result->Status == 'Aktif')
                                            <option value="Aktif" selected>Aktif</option>
                                            <option value="Tidak Aktif">Tidak Aktif</option>
                                        @elseif($result->Status == 'Tidak Aktif')
                                            <option value="Aktif" >Aktif</option>
                                            <option value="Tidak Aktif" selected>Tidak Aktif</option>

                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <hr>
                        </div>
                        <div class="form-title">
                            <h4>Data Penghasilan</h4>
                        </div>
                        <div class="data-penghasilan">
                            <div class="content-divider">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Apakah akan memasukan data penghasilan nasabah?</label>
                                    <select id="punyapenghasilan" name="punyapenghasilan" class="form-control" onchange="onSelectPenghasilanEventClicked()">
                                        <option value="2">Tidak</option>
                                        <option value="1">Ya</option>
                                    </select>
                                </div>
                            </div>
                            <div id="layout-penghasilan" style="display: none">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Penghasilan Istri</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Penghasilan Istri" name="Penghasilan_Istri" value="{{ $result->Penghasilan_Istri }}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Penghasilan Suami</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Penghasilan Suami" name="Penghasilan_Suami" value="{{ $result->Penghasilan_Suami }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Penghasilan Lain</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Penghasilan Lain" name="Penghasilan_lain" value="{{ $result->Penghasilan_lain }}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengeluaran Pendidikan</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Pengeluaran Pendidikan" name="Pengeluaran_Pendidikan" value="{{ $result->Pengeluaran_Pendidikan }}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengeluaran Rumah Tangga</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Pengeluaran Rumah Tangga" name="Pengeluaran_Rumahtangga" value="{{ $result->Pengeluaran_Rumahtangga }}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengeluaran Cicilan Bank</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Pengeluaran Cicilan Bank" name="Pengeluaran_CicilanBank" value="{{ $result->Pengeluaran_CicilanBank }}"  >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengeluaran Pribadi</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Pengeluaran Pribadi" name="Pengeluaran_Pribadi" value="{{ $result->Pengeluaran_Pribadi }}" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengeluaran Lain</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Pengeluaran Lain" name="Pengeluaran_lain" value="{{ $result->Pengeluaran_lain }}" >
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-4">
                            <button type="submit" class="btn-success btn">Submit</button>
                            <a href="/lihatnasabah" class="btn-default btn">Cancel</a>
                        </div>
                    </div>
                </div>
                </form>
        </div>
    </div>

    <script>

        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1;
        var yyyy = today.getFullYear();

        if(dd<10)
        {
            dd='0'+dd
        }
        if(mm<10)
        {
            mm='0'+mm
        }

        today =(yyyy - 18)+'-'+mm + '-' + dd ;
        document.getElementById("datefield").setAttribute("max",today);

    </script>



@endsection