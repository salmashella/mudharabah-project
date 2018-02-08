@extends('header')
@section('content')

    <div class="content-top">
        <div class="col-md-12 ">
            <div class="content-top-1">
                 <div id="page-inner">

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <center>Daftar Transaksi</center>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nomor Rekening</th>
                                                <th>Nominal Saldo</th>
                                                <th>Keterangan</th>
                                                <th>Tanggal Terjadi</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($result))
                                                <?php $a = 0 ?>
                                                @foreach($result as $value)
                                                    <tr class="odd gradeX">
                                                        <th scope="row">{{ ++$a }}</th>
                                                        <td>{{ $value->No_Rekening }}</td>
                                                        <td>{{ $value->nominal_transaksi }}</td>
                                                        <td>{{ $value->keterangan }}</td>
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
                            <!--End Advanced Tables -->
                        </div>
                    </div>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection