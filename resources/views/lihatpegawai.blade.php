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
                                    <center>Data Pegawai</center>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID Pegawai</th>
                                                <th>Nama Pegawai</th>
                                                <th>Alamat</th>
                                                <th>Jabatan</th>
                                                <th>Jenis Kelamin</th>
                                                <th>No Telepon</th>
                                                <th>Agama</th>
                                                <th>Tempat, Tanggal_Lahir</th>
                                                <th>Status</th>
                                                @if(session('Jabatan') == 2)
                                                <th>Action</th>
                                                @endif
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($result))
                                                <?php $a = 1 ?>
                                                @foreach($result as $value)
                                                    <tr class="odd gradeX">
                                                        <th scope="row">{{ ++$a }}</th>
                                                        <td>{{ $value->Id_Pegawai }}</td>
                                                        <td>{{ $value->Nama_Pegawai }}</td>
                                                        <td>{{ $value->Alamat}}</td>
                                                        <td>@if($value->Jabatan == "1") Manajer
                                                            @elseif($value->Jabatan == "2") Admin / CSO
                                                            @elseif($value->Jabatan == "3") Teller @endif</td>
                                                        <td>@if($value->Jenkel == "L") Laki Laki @elseif($value->Jenkel == "P") Perempuan @endif</td>
                                                        <td>{{ $value->No_Telp }} </td>
                                                        <td>@if($value->Agama == "Islam") Islam
                                                            @elseif($value->Agama == "Kristen") Kristen
                                                            @elseif($value->Agama == "Katholik") Katholik
                                                            @elseif($value->Agama == "Budha") Budha
                                                            @elseif($value->Agama == "Konghucu") Konghucu
                                                            @endif</td>
                                                        <td>{{ $value->Tempat_Lahir }}, {{ $value->Tanggal_Lahir }}</td>
                                                        <td>@if($value->Status == "1") Aktif @elseif($value->Status == "2") Tidak Aktif @endif</td>

                                                        <td>
                                                            @if(session('Jabatan') == 2)
                                                                <a class="btn-sm btn-info" href="/updatepegawai/{{ base64_encode($value->Id_Pegawai) }}">Edit</a>
                                                                <a class="btn-sm btn-success" href="/updatepassword/{{ base64_encode($value->Id_Pegawai) }}">Ganti Password</a>
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