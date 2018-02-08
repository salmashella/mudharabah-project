<script src="/js/customjs.js" type="text/javascript"></script>
@extends('header')
@section('content')


    <div class="main-page">
        <div class="forms">
            <h3 class="title1">Form Pembayaran</h3>


            <div class=" form-grids row form-grids-right">
                <div class="widget-shadow " data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Data Lengkap</h4>
                    </div>
                    <div class="form-body">
                        <form class="form-horizontal" action="/tambahpembayaran" method="post">
                            {{csrf_field()}}
                            <div id="alert"></div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">ID Pembiayaan</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" onchange="get();" id="Id_Pembiayaan" placeholder="ID Pembiayaan" name="Id_Pembiayaan" required="" >
                                </div>
                                <div class="col-sm-2">
                                    <button type="button" class="btn btn-primary" onclick="get();" > Cek ID </button>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">No Rekening</label>
                                <div class="col-sm-9">
                                    <input readonly type="text" class="form-control" id="No_Rekening" placeholder="No Rekening" name="No_Rekening"  >
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label for="focusedinput" class="col-sm-2 control-label">Id Pegawai</label>--}}
                                {{--<div class="col-sm-9">--}}
                                    {{--<input readonly type="text" class="form-control" id="No_Rekening" placeholder="Id Pegawai" name="Id_Pegawai"  >--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <div class="form-group">
                            <label for="focusedinput"  class="col-sm-2 control-label">Nama Nasabah</label>
                                <div class="col-sm-9">
                            <input readonly type="text" class="form-control1" id="Nama" name="Nama" placeholder="Nama Nasabah" readonly>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput"  class="col-sm-2 control-label">Besar Pembiayaan</label>
                                <div class="col-sm-9">
                                <input readonly type="number" class="form-control1" id="Besar_Pembiayaan"  placeholder="Besar Pembiayaan" name="Besar_Pembiayaan"  readonly>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Nama Penyetor</label>
                                <div class="col-sm-9">
                                    <input  type="text" class="form-control" id="focusedinput" placeholder="Nama Penyetor" name="penyetor" required="" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="radio" class="col-sm-2 control-label">Jenis Identitas Penyetor</label>
                                <div class="radio block">
                                    <label><input type="radio" name="jenis_id_penyetor" value="KTP" checked> KTP </label>
                                    <label><input type="radio" name="jenis_id_penyetor" value="SIM"> SIM </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">No Identitas Penyetor</label>
                                <div class="col-sm-9">
                                <input type="number" class="form-control1" id="focusedinput" placeholder="No Identitas Penyetor" name="no_id_penyetor" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Alamat Penyetor</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control1" id="focusedinput" placeholder="Alamat Penyetor" name="alamat_penyetor" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">No Telepon Penyetor</label>
                                <div class="col-sm-9">
                                <input type="number" class="form-control1" id="focusedinput" placeholder="No Telepon Penyetor" name="no_telp_penyetor" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Angsuran ke</label>
                                <div class="col-sm-9">
                                    <input readonly type="number" class="form-control" id="angsuran_ke" placeholder="Angsuran Ke" name="angsuran_ke" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Nominal</label>
                                <div class="col-sm-9">
                                    <input readonly type="number" class="form-control" id="nominal" placeholder="Nominal" name="nominal" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Sisa Pembayaran</label>
                                <div class="col-sm-9">
                                    <input readonly type="number" class="form-control" id="sisa_bayar" placeholder=" Sisa Pembayaran" name="sisa_pembayaran"  >
                                </div>
                            </div>
                            {{--<div class="form-group">--}}
                                {{--<label for="focusedinput" class="col-sm-2 control-label">Status Pembayaran</label>--}}
                                {{--<div class="col-sm-9">--}}
                                {{--<select name="status_pembayaran"  id="status_pembayaran" class="form-control1" required="">--}}
                                    {{--<option value="1">Belum Lunas</option>--}}
                                    {{--<option value="2">Sudah Lunas</option>--}}
                                {{--</select>--}}
                            {{--</div>--}}


                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-4">
                                    <button type="submit" class="btn-success btn">Submit</button>
                                    <a href="home" class="btn-default btn">Cancel</a>
                                    <button type="reset" class="btn-inverse btn">Reset</button>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function hitungsisabayar() {
            var sisabayar = document.getElementById('sisabayar').value;
            var nominal = document.getElementById('nominal').value;
            var Besar_Pembiayaan = document.getElementById('Besar_Pembiayaan').value;

            var total = Besar_Pembiayaan - nominal;

            console.log(sisabayar);
            console.log(nominal);
            console.log(Besar_Pembiayaan);
            console.log(total);
            sisabayar.value = total;
        }
    </script>


    <script type="text/javascript">
        function get()
        {
            var id = $("#Id_Pembiayaan").val();
            $.ajax(
                    {
                        url:"{{url('checkbayar')}}/"+id,
                        success: function(data)
                        {
                            if(data)
                            {
                                if(data.Status == "2")
                                {
                                    if(data.status_pembayaran == 2)
                                    {
                                        document.getElementById("alert").innerHTML = "<div class='alert alert-danger'>Pembayaran Sudah Lunas </div>";
                                        $("#No_Rekening").attr('value', "");
//                                        $("#Id_Pegawai").attr('value', "");
                                        $("#Nama").attr('value', "");
                                        $("#Besar_Pembiayaan").attr('value', "");
                                        $("#angsuran_ke").attr('value', "");
                                        $("#sisa_bayar").attr('value', "");
                                        $("#nominal").attr('value', "");
                                    }
                                    else{
                                        $("#No_Rekening").attr('value', data.No_Rekening);
//                                        $("#Id_Pegawai").attr('value', data.Id_Pegawai);
                                        $("#Nama").attr('value', data.Nama);
                                        $("#Besar_Pembiayaan").attr('value', data.Besar_Pembiayaan);
                                        $("#angsuran_ke").attr('value', data.angsuran_ke);
                                        $("#sisa_bayar").attr('value', Math.round(data.sisa_bayar));
                                        $("#nominal").attr('value', Math.round(data.rekomendasi_bayar));

                                        var total = data.Besar_Pembiayaan - data.rekomendasi_bayar * data.angsuran_ke;
                                        $("#sisa_bayar").attr('value',total);
                                    }

                                }
                                else if (data.Status == 1){
                                    document.getElementById("alert").innerHTML = "<div class='alert alert-danger'>Data Belum Disetujui </div>";
                                    $("#No_Rekening").attr('value', "");
                                    $("#Nama").attr('value',"");
                                    $("#Besar_Pembiayaan").attr('value', "");
                                    $("#angsuran_ke").attr('value', "");
                                    $("#sisa_bayar").attr('value', "");
                                    $("#nominal").attr('value', "");
//                                console.log(total);
                                }
                                else{
                                    document.getElementById("alert").innerHTML = "<div class='alert alert-danger'>Data Ditolak </div>";
                                }
                            }
                            else
                            {
                                alert('No Rekening tidak ditemukan ');
                                $("#Id_Pembiayaan").attr('value',"");
                                $("#Nama").attr('value',"");
                                $("#Jumlah_Pinjaman").attr('value',"");
                                $("#angsuran_ke").attr('value', "");
                                $("#sisa_bayar").attr('value', "");
                                $("#nominal").attr('value', "");

                            }
                        }
                    }
            );
        }

        function hitungsisabayar() {
            var sisabayar = document.getElementById('sisabayar').value;
            var nominal = document.getElementById('nominal').value;
            var Besar_Pembiayaan = document.getElementById('Besar_Pembiayaan').value;

            var total = Besar_Pembiayaan - nominal;

            console.log(sisabayar);
            console.log(nominal);
            console.log(Besar_Pembiayaan);
            console.log(total);
            sisabayar.value = total;
        }
    </script>


@endsection
