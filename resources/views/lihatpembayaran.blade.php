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
                                    <center>Detail Pembayaran</center>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>ID Pembayaran</th>
                                                <th>ID Pembiayaan</th>
                                                {{--<th>ID Pegawai</th>--}}
                                                <th>Penyetor</th>
                                                <th>Tanggal Setor</th>
                                                <th>Angsuran Ke</th>
                                                <th>Nominal</th>
                                                <th>Sisa Pembayaran</th>
                                                <th>Status Pembayaran</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($result))
                                                <?php $a = 1 ?>
                                                @foreach($result as $value)
                                            <th scope="row">{{ $a }}</th>
                                            <td>{{ $value->id_pembayaran }}</td>
                                            <td>{{ $value->Id_Pembiayaan }}</td>
                                            {{--<td>{{ $value->Id_Pegawai }}</td>--}}
                                            <td>{{ $value->penyetor }}</td>
                                            <td>{{ $value->created_at }}</td>
                                            <td>{{ $value->angsuran_ke }}</td>
                                            <td>{{ $value->nominal }}</td>
                                            <td>{{ $value->sisa_pembayaran }}</td>
                                            <td>@if($value->status_pembayaran == "1") Belum Lunas
                                                @elseif($value->status_pembayaran == "2") Sudah Lunas
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