

@extends('header')
@section('content')

    <div class="content-top">
        <div class="col-md-12 ">
            <div class="content-top-1">

                <div class="clearfix"> </div>
                <div id="page-inner">

                    <div class="row">
                        <div class="col-md-12">
                            @if(session('message'))
                                <div class="alert-danger">
                                    <center>
                                        {{ session('message') }}
                                    </center>
                                </div>
                            @endif
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <center>Detail Pembiayaan</center>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                {{--<th>Id_Pembiayaan</th>--}}
                                                <th>No_Rekening</th>
                                                <th>Tujuan Akad</th>
                                                <th>Jangka Waktu</th>
                                                <th>Besar Pembiayaan</th>
                                                <th>Nisbah Nasabah</th>
                                                <th>Nisbah BMT</th>
                                                <th>Angsuran Perbulan</th>
                                                <th>Tanggal Pengajuan</th>
                                                {{--<th>Jenis Jaminan</th>--}}
                                                {{--<th>No Jaminan</th>--}}
                                                <th>Status Pembiayaan</th>
                                                <th>Keterangan</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($result))
                                                <?php $a = 1 ?>
                                                @foreach($result as $value)
                                                    <tr class="odd gradeX">
                                                        <th scope="row">{{ $a }}</th>
                                                        {{--<td>{{ $value->Id_Pembiayaan }}</td>--}}
                                                        <td>{{ $value->No_Rekening }}</td>
                                                        <td>{{ $value->tujuan_akad }}</td>
                                                        <td>{{ $value->Jangka_Waktu }}</td>
                                                        <td> Rp. {{{ number_format($value->Besar_Pembiayaan, 2) }}}</td>
                                                        <td>{{ $value->Nisbah_Nasabah }}</td>
                                                        <td>{{ $value->Nisbah_BMT }}</td>
                                                        <td>Rp. {{{ number_format($value->angsuran_perbulan, 2) }}}</td>
                                                        <td>{{ $value->tanggal_pengajuan }}</td>
                                                        {{--<td>{{ $value->Jenis_Jaminan }}</td>--}}
                                                        {{--<td>{{ $value->No_Jaminan }}</td>--}}
                                                        <td>
                                                            @if($value->Status == 1)
                                                                <font color="orange">Belum Disetujui</font>
                                                            @elseif($value->Status == 2)
                                                                <font color="blue">Disetujui</font>
                                                            @else
                                                                <font color="red">Ditolak</font>
                                                            @endif
                                                        </td>
                                                        <td>{{ $value->keterangan}}</td>
                                                        <td>

                                                            @if(session('Jabatan') == 1)
                                                                <a class="btn-sm btn-info" href="/verifikasipembiayaan/{{ base64_encode($value->Id_Pembiayaan) }}">Verifikasi</a><br><br>
                                                                <a class="btn-sm btn-danger" href="/detailpembiayaan/{{ base64_encode($value->Id_Pembiayaan) }}">Detail</a>
                                                            @else
                                                                {

                                                                    <a class="btn-sm btn-info" href="/editjaminan/{{ base64_encode($value->Id_Pembiayaan) }}">Jaminan</a>
                                                                    <a class="btn-sm btn-warning" href="/suratperjanjian/{{base64_encode($value->Id_Pembiayaan)}}">Print Dokumen Akad</a>
                                                                }
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


                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection

