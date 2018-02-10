<div class="content-top">

    <center>
        <button type="button" class="btn-sm btn-danger col-md-2" onclick="printDiv('div-print')" style="float: right">Print Halaman</button>
    </center>
    <br><br><br>

    <div class="col-md-12 ">

        <div id="div-print">
            <h4>
                <center>Detail Pembiayaan dengan ID Pembiayaan {{ $Id_Pembiayaan }} </center>

            </h4>
            <div class="detail-body row container col-md-12">
                <div class="panel-group tool-tips widget-shadow">
                    <div class="row">
                        <div class="col-md-3">
                            Pelaku pembiayaan
                        </div>
                        <div class="col-md-9">
                            : {{ $data_pembiayaan->No_Rekening }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Tujuan pembiayaan
                        </div>
                        <div class="col-md-9">
                            : {{ $data_pembiayaan->tujuan_akad }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Besar pembiayaan
                        </div>
                        <div class="col-md-9">
                            : {{ 'Rp. ' . number_format($data_pembiayaan->Besar_Pembiayaan) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Jangka waktu pembiayaan
                        </div>
                        <div class="col-md-9">
                            : {{ $data_pembiayaan->Jangka_Waktu }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Diajukan pada
                        </div>
                        <div class="col-md-9">
                            : {{ $data_pembiayaan->created_at }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Nisbah nasabah
                        </div>
                        <div class="col-md-9">
                            : {{ $data_pembiayaan->Nisbah_Nasabah . '%'}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Nisbah BMT
                        </div>
                        <div class="col-md-9">
                            : {{ $data_pembiayaan->Nisbah_BMT . '%' }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Angsuran Perbulan
                        </div>
                        <div class="col-md-9">
                            : {{ 'Rp. ' . number_format($data_pembiayaan->angsuran_perbulan) }}
                        </div>
                    </div>
                    {{--<div class="row">--}}
                        {{--<div class="col-md-3">--}}
                            {{--Jenis jaminan--}}
                        {{--</div>--}}
                        {{--<div class="col-md-9">--}}
                            {{--: {{ $data_pembiayaan->Jenis_Jaminan }}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-3">--}}
                            {{--Nomor Jaminan--}}
                        {{--</div>--}}
                        {{--<div class="col-md-9">--}}
                            {{--: {{ $data_pembiayaan->No_Jaminan }}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-3">--}}
                            {{--Nomor Jaminan--}}
                        {{--</div>--}}
                        {{--<div class="col-md-9">--}}
                            {{--: {{ $data_pembiayaan->No_Jaminan }}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="row">
                        <div class="col-md-3">
                            Status persetujuan pembiayaan
                        </div>
                        <div class="col-md-9">
                            :
                            @if($data_pembiayaan->Status == 1)
                                <font color="red">Belum Disetujui</font>
                            @else
                                <font color="blue">Telah Disetujui</font>
                            @endif
                        </div>
                    </div>
                    {{--<div class="row">--}}
                        {{--<div class="col-md-3">--}}
                            {{--Status pelunasan--}}
                        {{--</div>--}}
                        {{--<div class="col-md-9">--}}
                            {{--:--}}
                            {{--@if($data_pembiayaan->status_pembayaran == 1)--}}
                                {{--<font color="red">Belum Lunas</font>--}}
                            {{--@else--}}
                                {{--<font color="green">Telah Lunas</font>--}}
                            {{--@endif--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-3">--}}
                            {{--Sisa Cicilan--}}
                        {{--</div>--}}
                        {{--<div class="col-md-9">--}}
                            {{--: {{ $estimasi_sisa_cicilan . ' kali sisa cicilan' }}--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="row">
                        <div class="col-md-3">
                            Jumlah Per Angsuran
                        </div>
                        <div class="col-md-9">
                            : {{ 'Rp. ' . number_format($data_pembiayaan->angsuran_perbulan) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Sisa yang belum dibayar
                        </div>
                        <div class="col-md-9">
                            : {{ 'Rp. ' . number_format($sisa_bayar) }}
                        </div>
                    </div>
                    <br><br><br><br>
                    <center>
                        <h3>Data Pembayaran</h3>
                    </center>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No Rekening</th>
                                    <th>Id Pembiayaan</th>
                                    <th>Jumlah Setoran</th>
                                    <th>Tanggal</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($data_pembayaran))
                                    <?php $a = 1 ?>
                                    @foreach($data_pembayaran as $value)
                                        <tr class="odd gradeX">
                                            <th scope="row">{{ $a }}</th>
                                            <td>{{ $value->No_Rekening }}</td>
                                            <td>{{ $value->Id_Pembiayaan }}</td>
                                            <td>{{ number_format($value->nominal) }}</td>
                                            <td>{{ $value->created_at }}</td>
                                        </tr>
                                        <?php $a++ ?>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"> </div>
</div>

<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<!-- js-->
<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!--animate-->
<link href="/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="/js/wow.min.js"></script>
<link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<script>
    new WOW().init();
</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="/js/metisMenu.min.js"></script>
<script src="/js/custom.js"></script>
<link href="/css/custom.css" rel="stylesheet">

<script src="/js/jquery.nicescroll.js"></script>
<script src="/js/scripts.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.js"> </script>

<script src="/js/validator.min.js"></script>
<script src="/js/dataTables/jquery.dataTables.js"></script>
<script src="/js/dataTables/dataTables.bootstrap.js"></script>
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>