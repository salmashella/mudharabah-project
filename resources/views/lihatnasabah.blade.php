@extends('header')
@section('content')
    <div class="content-top">
        <div class="col-md-12 ">
            <div class="content-top-1">


                <div class="clearfix"> </div>
                <hr>
                <div id="page-inner">

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <center>Data Nasabah</center>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID Nasabah</th>
                                                <th>No Rekening</th>
                                                <th>Nama Lengkap</th>
                                                <th>Tempat, tanggal lahir</th>
                                                <th>Alamat</th>
                                                <th>No. Identitas</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($result))
                                                <?php $a = 1 ?>
                                                @foreach($result as $value)
                                                    <tr class="odd gradeX">
                                                        <th scope="row">{{ ++$a }}</th>
                                                        <td>{{ $value->Id_Nasabah }}</td>
                                                        <td>{{ $value->No_Rekening }}</td>
                                                        <td>{{ $value->Nama }}</td>
                                                        <td>{{ $value->Tempat_Lahir }}, {{ $value->Tanggal_Lahir }}</td>
                                                        <td>{{ $value->Alamat }}</td>
                                                        <td>{{ $value->No_Identitas }}</td>
                                                        <td>
                                                            <a class="btn-sm btn-danger" href="/detailnasabah/{{ base64_encode($value->Id_Nasabah) }}">Detail</a>
                                                            <a class="btn-sm btn-info" href="/lihattransaksi/{{ base64_encode($value->Id_Nasabah) }}">Lihat Transaksi</a>
                                                            @if(session('Jabatan') == 2)
                                                                <a class="btn-sm btn-info" href="/updatenasabah/{{ base64_encode($value->Id_Nasabah) }}">Edit</a>
                                                            @endif
                                                        </td>
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
        </div>
    </div>
</div>
@endsection