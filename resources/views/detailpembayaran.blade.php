<div class="content-top">


        <div class="panel-footer">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-4">
                <button type="button" class="btn-success btn" onclick="printDiv('div-print')" >Print Halaman</button>

                <a href="/home" class="btn-default btn">Cancel</a>
            </div>
        </div>
    </div>
    <br><br><br>

    <div class="col-md-12 ">

        <div id="div-print">
            <h4>
                {{--<center>Receipt Pembayaran  {{ $id_pembiayaan }} </center>--}}
                <center>Receipt Pembayaran </center>
                <center>BMT Prima Syariah </center>
                <br>
                <br>
                <center>{{ $created_at->created_at }} </center>
            </h4>
            <div class="detail-body row container col-md-12">
                <div class="panel-group tool-tips widget-shadow">
                    {{--<div class="row">--}}
                        {{--<div class="col-md-3">--}}
                            {{--ID Pembayaran--}}
                        {{--</div>--}}
                        {{--<div class="col-md-9">--}}
                            {{--: {{ $id_pembayaran->id_pembayaran }}--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="row">
                        <div class="col-md-3">
                            ID Pembiayaan
                        </div>
                        <div class="col-md-9">
                            : {{ $Id_Pembiayaan->Id_Pembiayaan }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            No Rekening
                        </div>
                        <div class="col-md-9">
                            : {{ ($No_Rekening->No_Rekening) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Penyetor
                        </div>
                        <div class="col-md-9">
                            : {{ $penyetor->penyetor }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Angsuran Ke
                        </div>
                        <div class="col-md-9">
                            : {{ $angsuran_ke->angsuran_ke }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            Nominal
                        </div>
                        <div class="col-md-9">
                            : {{ 'Rp. ' . number_format($nominal->nominal)}}
                        </div>
                    </div>
                    <br>

                    <h4>
                        <div class="col-sm-2 col-md-10">
                            Resi ini harap disimpan baik-baik sebagai bukti pembayaran
                        </div>

                    </h4>

                    <br><br><br><br>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTables-example">

                                <tr>
                                    <th>Penyetor,</th>
                                    <th>Penerima,</th>
                                </tr>

                            </table>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table" id="dataTables-example">

                                <tr>
                                    <th>( TTD Penyetor )</th>
                                    <th>( TTD Penerima )</th>
                                </tr>

                            </table>
                        </div>
                    </div>

                    {{--<h4>--}}
                        {{--<div class="col-sm-6  ">--}}
                            {{--<right>Penyetor,</right>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6">--}}
                            {{--<left>Mengetahui,</left>--}}
                        {{--</div>--}}

                    {{--</h4>--}}

                    {{--<br> <br> <br> <br>--}}
                    {{--<h4>--}}
                        {{--<div class="col-sm-6">--}}
                            {{--<right>TTD Penerima</right>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-6">--}}
                            {{--<left>TTD Penyetor</left>--}}
                        {{--</div>--}}

                    {{--</h4>--}}

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