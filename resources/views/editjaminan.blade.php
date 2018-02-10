@extends('header')
@section('content')

    <script src="/js/customjs.js"></script>
    <div class="main-page">
        <div class="forms">
            <h3 class="title1">Form Jaminan</h3>

            <div class=" form-grids row form-grids-right">
                <div class="widget-shadow " data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Data Lengkap</h4>
                    </div>
                    <div class="form-body">
<<<<<<< HEAD
                        <form class="form-horizontal"  action="{{route('editjaminan.update',$result->Id_Pembiayaan)}}" method="post" >
=======
                        <form class="form-horizontal"  action="{{route('editjaminan.update',$result->Id_Pembiayaan  )}}" method="post" >
>>>>>>> 551664b288b5248457ae36d2790ecabc49ec5991
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            {{csrf_field()}}

                            <div id="alert"></div>

                            {{--<div class="form-group">--}}
                                {{--<label for="focusedinput" >No Rekening</label>--}}
                                {{--<input type="text" class="form-control" onchange="get();" id="No_Rekening" name="No_Rekening" value="{{$result ->No_Rekening}}" readonly>--}}
                            {{--</div>--}}
                            {{--<button type="button" class="btn btn-primary" onclick ="get();"> Cek No Rekening</button>--}}


                            <div class="form-group">
                                <label for="focusedinput" >Tujuan Akad</label>
                                <input type="text" class="form-control1" id="focusedinput" placeholder="Tujuan Akad" name="tujuan_akad" value="{{$result ->tujuan_akad}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput">Jangka Waktu</label>
                                <input type="number" class="form-control1" min="1" max="24" id="jangkaWaktu" placeholder="Jangka Waktu Pembiayaan" name="Jangka_Waktu" value="{{$result ->Jangka_Waktu}}" readonly>

                            </div>
                            <div class="form-group">
                                <label for="focusedinput">Besar Pembiayaan</label>
                                <input type="number" class="form-control1" min="1000000" onchange="hitungAngsuran()" max="100000000" step="100000" id="besarPembiayaan"
                                       placeholder="Besar Pembiayaan" name="Besar_Pembiayaan" value="{{$result ->Besar_Pembiayaan}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" >Nisbah Nasabah %</label>
                                <input type="text" class="form-control1" id="nisbahnasabah" oninput="Nisbah()" min="20" max="80" placeholder="Nisbah Nasabah" name="Nisbah_Nasabah" value="{{$result ->Nisbah_Nasabah}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" >Nisbah BMT %</label>
                                <input type="text" class="form-control1" id="nisbahbmt"  placeholder="Nisbah BMT" name="Nisbah_BMT" value="{{$result ->Nisbah_BMT}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" >Angsuran Perbulan</label>
                                <input type="number" class="form-control1" id="angsuranPerbulan" placeholder="Angsuran Perbulan" name="angsuran_perbulan" value="{{$result ->angsuran_perbulan}}" readonly >

                            </div>

                            <div class="form-group">
                                <label for="selector1" >Status</label>
                                <select name="Status" id="selector1" class="form-control1" readonly>
                                @if($result->Status == '1')
                                    <option value="1" selected>Belum Disetujui</option>
                                @elseif($result->Status == '2')
                                    <option value="2" selected>Disetujui</option>
                                @else($result->Status == 'Ditolak')
                                    <option value="3" selected>Ditolak</option>
                                @endif

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" >Keterangan</label>
                                <input type="text" class="form-control1" placeholder="Keterangan" name="keterangan" value="{{$result ->keterangan}}" readonly>
                            </div>


                            <div class="data-jaminan">
                                <div class="content-divider">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Sertakan Jaminan</label>
                                        <select id="punyajaminan" name="punyajaminan" class="form-control" onchange="onSelectJaminanEventClicked()">
                                            <option value="2">Tidak</option>
                                            <option value="1">Ya</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="layout-jaminan" style="display: none">

                                    <div class="form-group">
                                        <label for="radio"  >Jenis Jaminan</label>
                                        <div class="radio block">
                                                @if($result->jenis_jaminan == "BPKB Motor")
                                                <label><input type="radio" name="jenis_jaminan" value="BPKB Motor" checked> BPKB Motor </label>
                                                <label><input type="radio" name="jenis_jaminan" value="BPKB Mobil" disabled> BPKB Mobil </label>
                                                <label><input type="radio" name="jenis_jaminan" value="Sertifikat Rumah" disabled> BPKB Sertifikat Rumah </label>
                                                @elseif($result->jenis_jaminan == "BPKB Mobil")
                                                <label><input type="radio" name="jenis_jaminan" value="BPKB Motor" disabled> BPKB Motor </label>
                                                <label><input type="radio" name="jenis_jaminan" value="BPKB Mobil" checked> BPKB Mobil </label>
                                                <label><input type="radio" name="jenis_jaminan" value="Sertifikat Rumah" disabled> BPKB Sertifikat Rumah </label>
                                                @else
                                                <label><input type="radio" name="jenis_jaminan" value="BPKB Motor" disabled> BPKB Motor </label>
                                                <label><input type="radio" name="jenis_jaminan" value="BPKB Mobil" disabled> BPKB Mobil </label>
                                                <label><input type="radio" name="jenis_jaminan" value="Sertifikat Rumah" checked> BPKB Sertifikat Rumah </label>
                                                @endif
                                            </div>

                                        </div>

                                    <div class="form-group">
                                        <label for="focusedinput" >No ID Jaminan</label>
                                        <input type="number" class="form-control1" id="focusedinput" placeholder="No Jaminan" name="no_id_jaminan"  value="{{$result ->no_id_jaminan}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" >Jaminan Atas Nama</label>
                                        <input type="text" class="form-control1" id="focusedinput" placeholder="Jaminan Atas Nama" name="atas_nama" value="{{$result ->atas_nama}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="selector1" >Status Jaminan</label>
                                            <select name="status_jaminan"  id="selector1" class="form-control1" required="">
                                                @if($result->status_jaminan== "Sudah Diterima")
                                                    <option value="Sudah Diterima" selected>Sudah Diterima</option>
                                                    <option value="Sudah Dikembalikan">Sudah Dikembalikan</option>
                                                @elseif($result->status_jaminan == "if")
                                                    <option value="Sudah Diterima">Sudah Diterima</option>
                                                    <option value="Sudah Dikembalikan" selected>Sudah Dikembalikan</option>
                                                @endif
                                            </select>
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