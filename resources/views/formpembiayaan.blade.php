@extends('header')
@section('content')

    <script src="/js/customjs.js"></script>
    <div class="main-page">
        <div class="forms">
            <h3 class="title1">Form Pembiayaan</h3>

            <div class=" form-grids row form-grids-right">
                <div class="widget-shadow " data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Data Lengkap</h4>
                    </div>
                    <div class="form-body">
                            <form class="form-horizontal" action="/tambahpembiayaan" method="post">
                                {{csrf_field()}}

                                <div id="alert"></div>

                                <div class="form-group">
                                    <label for="focusedinput" >No Rekening</label>
                                        <input type="text" class="form-control" onchange="get();" id="No_Rekening" name="No_Rekening" required="true" >
                                </div>
                                {{--<button type="button" class="btn btn-primary" onclick ="get();"> Cek No Rekening</button>--}}
                                <div class="form-group">
                                    <label for="focusedinput" >ID Nasabah</label>
                                    <input type="text" class="form-control1" id="Id_Nasabah" name="Id_Nasabah" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="focusedinput" >Nama Nasabah</label>
                                    <input type="text" class="form-control1" id="Nama" name="Nama" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="focusedinput" >Tujuan Akad</label>
                                        <input type="text" class="form-control1" id="focusedinput" placeholder="Tujuan Akad" name="tujuan_akad" required="">
                                </div>
                                <div class="form-group">
                                    <label for="focusedinput">Jangka Waktu</label>
                                    <input type="number" class="form-control1" min="1" max="24" id="jangkaWaktu" placeholder="Jangka Waktu Pembiayaan" name="Jangka_Waktu" required="">

                                </div>
                                <div class="form-group">
                                    <label for="focusedinput">Besar Pembiayaan</label>
                                        <input type="number" class="form-control1" min="1000000" onchange="hitungAngsuran()" max="100000000" step="100000" id="besarPembiayaan"
                                               placeholder="Besar Pembiayaan" name="Besar_Pembiayaan" required="true">
                                </div>

                                <div class="form-group">
                                    <label for="focusedinput" >Nisbah Nasabah %</label>
                                        <input type="text" class="form-control1" id="nisbahnasabah" oninput="Nisbah()" min="20" max="80" placeholder="Nisbah Nasabah" name="Nisbah_Nasabah" required="">
                                </div>
                                <div class="form-group">
                                    <label for="focusedinput" >Nisbah BMT %</label>
                                        <input type="text" class="form-control1" id="nisbahbmt"  placeholder="Nisbah BMT" name="Nisbah_BMT" required="" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="focusedinput" >Angsuran Perbulan</label>
                                        <input type="number" class="form-control1" id="angsuranPerbulan" placeholder="Angsuran Perbulan" name="angsuran_perbulan" required="" readonly >

                                </div>

                                    <div class="form-group">
                                        <label for="selector1" >Status</label>
                                            <select name="Status" id="selector1" class="form-control1" required="">
                                                <option value="1">Belum Disetujui</option>
                                            </select>
                                        </div>
                                    <div class="form-group">
                                        <label for="focusedinput" >Keterangan</label>
                                        <input type="text" class="form-control1" placeholder="Keterangan" name="keterangan">
                                    </div>
                                {{--<div class="form-group">--}}
                                    {{--<label for="selector1" >Status Pembayaran</label>--}}
                                        {{--<select name="status_pembayaran"  id="selector1" class="form-control1" required="">--}}
                                            {{--<option value="1">Belum Lunas</option>--}}
                                            {{--<option value="2">Sudah Lunas</option>--}}
                                        {{--</select>--}}
                                {{--</div>--}}

                                <div class="data-jaminan">
                                    <div class="content-divider">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Sertaka Jaminan</label>
                                            <select id="punyajaminan" name="punyajaminan" class="form-control" onchange="onSelectJaminanEventClicked()">
                                                <option value="2">Tidak</option>
                                                <option value="1">Ya</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="layout-jaminan" style="display: none">

                                        <div class="form-group">
                                            <label for="radio" required >Jenis Jaminan</label>
                                            <div class="radio block">
                                                <label><input type="radio" name="jenis_jaminan" value="BPKB Motor" checked> BPKB Motor </label>
                                                <label><input type="radio" name="jenis_jaminan" value="BPKB Mobil"> BPKB Mobil </label>
                                                <label><input type="radio" name="jenis_jaminan" value="Sertifikat Rumah"> BPKB Sertifikat Rumah </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="focusedinput" >No ID Jaminan</label>
                                            <input type="number" class="form-control1" id="focusedinput" placeholder="No Jaminan" name="no_id_jaminan" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="focusedinput" >Jaminan Atas Nama</label>
                                            <input type="text" class="form-control1" id="focusedinput" placeholder="Jaminan Atas Nama" name="atas_nama" required="">
                                        </div>
                                        <div class="form-group">
                                            <label for="radio" required >Status Jaminan</label>
                                            <div class="radio block">
                                                <label><input type="radio" name="status_jaminan" value="Belum Diterima" checked> Belum Diterima </label>
                                                <label><input type="radio" name="status_jaminan" value="Di BMT"> Di BMT </label>
                                                <label><input type="radio" name="status_jaminan" value="Sudah Dikembalikan"> Sudah Dikembalikan</label>
                                            </div>
                                        </div>

                                        </div>
                                </div>

                                </div>


                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-5">
                                            <button type="submit" class="btn-success btn">Submit</button>
                                            <a href="/home" class="btn-default btn">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                                </div>



                        </div>
                </div>
                    </div>
                </div>

    <script>
        function hitungAngsuran() {
            var besarPembiayaan = document.getElementById('besarPembiayaan').value;
            var jangkaWaktu = document.getElementById('jangkaWaktu').value;
            var angsuranPerbulan = document.getElementById('angsuranPerbulan');

            var total = besarPembiayaan / jangkaWaktu;

            angsuranPerbulan.value = total;
        }

    </script>
    <script>
        function Nisbah() {
            var nisbahnasabah = document.getElementById('nisbahnasabah').value;
            var nisbahbmt = document.getElementById('nisbahbmt');

            var total = 100 - nisbahnasabah;

            nisbahbmt.value = total;
        }
    </script>

    <script type="text/javascript">
        function get()
        {
            var id = $("#No_Rekening").val();
            $.ajax(
                    {
                        url: "{{url('checkrek')}}/"+id,
                        success: function(data)
                        {
                            if(data.status ==1)
                            {
                                if(data.status_pembayaran == 2)
                                {
                                    $("#Id_Nasabah").attr('value', data.Id_Nasabah);
                                    $("#Nama").attr('value', data.Nama);
                                }
                                else if (data.status_pembayaran == 1)
                                {
                                    document.getElementById("alert").innerHTML = "<div class='alert alert-danger'>Pembayaran <Belum></Belum> Belum Lunas </div>";
                                }
                                else{
                                    $("#Id_Nasabah").attr('value', data.Id_Nasabah);
                                    $("#Nama").attr('value', data.Nama);
                                }
                            }
                           else
                            {
                                document.getElementById("alert").innerHTML = "<div class='alert alert-danger'>Rekening <Belum></Belum> Tidak Aktif </div>";
                            }
                        }
                    }
            );
        }

    </script>


    {{--<script type="text/javascript">--}}
        {{--function get()--}}
        {{--{--}}
            {{--var id = $("#No_Rekening").val();--}}
            {{--$.ajax({--}}
                {{--url: "{{url('checkrek')}}/"+id,--}}
                {{--success: function(data){--}}
                    {{--if(data != 0)--}}
                    {{--{--}}
                        {{--$("#Id_Nasabah").attr('value', data.Id_Nasabah);--}}
                        {{--$("#Nama").attr('value', data.Nama);--}}
                    {{--}--}}
                    {{--else--}}
                    {{--{--}}
                        {{--alert('Nasabah mempunyai tanggungan yang belum terselesaikan');--}}
                        {{--$("#No_Rekening").attr('value',"");--}}
                        {{--$("#Id_Nasabah").attr('value',"");--}}
                        {{--$("#Nama_Nasabah").attr('value',"");--}}
                        {{--window.location.href = 'http://projekbismudharabah.dev/home';--}}
                    {{--}--}}

                {{--}--}}
            {{--});--}}
        {{--}--}}
    {{--</script>--}}

    {{--<script type="text/javascript">--}}
        {{--function get()--}}
        {{--{--}}
            {{--var id = $("#No_Rekening").val();--}}
            {{--$.ajax({--}}
                {{--url: "{{url('checkrek')}}/"+id,--}}
                {{--success: function(data){--}}
                    {{--if(data)--}}
                    {{--{--}}
                        {{--if(data.status_pembayaran == "2")--}}
                        {{--{--}}
                            {{--$("#No_Rekening").attr('value', data.No_Rekening);--}}
                            {{--$("#Id_Nasabah").attr('value', data.Id_Nasabah);--}}
                            {{--$("#Nama").attr('value', data.Nama);--}}
                        {{--}--}}
                        {{--else{--}}
                            {{--document.getElementById("alert").innerHTML = "<div class='alert alert-danger'>Pembayaran belum lunas </div>";--}}
                            {{--$("#No_Rekening").attr('value', "");--}}
                            {{--$("#Id_Nasabah").attr('value', "");--}}
                            {{--$("#Nama").attr('value', "");--}}
                        {{--}--}}
                    {{--}--}}

                    {{--else--}}
                    {{--{--}}
                        {{--alert('Nasabah mempunyai tanggungan yang belum terselesaikan');--}}
                        {{--$("#No_Rekening").attr('value',"");--}}
                        {{--$("#Id_Nasabah").attr('value',"");--}}
                        {{--$("#Nama_Nasabah").attr('value',"");--}}
                        {{--window.location.href = 'http://projekbismudharabah.dev/home';--}}
                    {{--}--}}

            {{--}--}}
            {{--});--}}
        {{--}--}}
    {{--</script>--}}


    {{--<script type="text/javascript">--}}
        {{--function get()--}}
        {{--{--}}
            {{--var id = $("#No_Rekening").val();--}}
            {{--$.ajax({--}}
                {{--url: "{{url('checkrek')}}/"+id,--}}
                {{--success: function(data){--}}
                    {{--if(data != 0)--}}
                    {{--{--}}
                        {{--$("#Id_Nasabah").attr('value', data.Id_Nasabah);--}}
                        {{--$("#Nama").attr('value', data.Nama);--}}
                    {{--}--}}
                    {{--else--}}
                    {{--{--}}
                        {{--alert('Nasabah mempunyai tanggungan yang belum terselesaikan');--}}
                        {{--$("#No_Rekening").attr('value',"");--}}
                        {{--$("#Id_Nasabah").attr('value',"");--}}
                        {{--$("#Nama_Nasabah").attr('value',"");--}}
                        {{--window.location.href = 'http://projekbismudharabah.dev/home';--}}
                    {{--}--}}

                {{--}--}}
            {{--});--}}
        {{--}--}}
    {{--</script>--}}


@endsection