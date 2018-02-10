@extends('header')
@section('content')
    <div class="content-top">

        <div class="col-md-12 ">
    <div class="content-top">

        <div class="bs-example widget-shadow" data-example-id="contextual-table">
            <div class="grid-bottom widget-shadow">
                <h3> <center>Detail Pembiayaan</center></h3>
            </div>
            <div class="clearfix"> </div>
            <hr>
            <div id="page-inner">

            <table class="table">
                <thead>
                <tr>
                    <th>ID Pembiayaan</th>
                    <th>No Rekening</th>
                    <th>ID Nasabah</th>
                    <th>Tujuan Akad</th>
                    <th>Jangka Waktu</th>
                    <th>Besar Pembiayaan</th>
                    <th>Nisbah Nasabah</th>
                    <th>Nisbah BMT</th>
                    <th>Angsuran Perbulan</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Jenis Jaminan</th>
                    <th>No Jaminan</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <tr class="active">
                    <td>{{ $result->Id_Pembiayaan }}</td>
                    <td>{{ $result->No_Rekening }}</td>
                    <td>{{ $result->Id_Nasabah }}</td>
                    <td>{{ $result->tujuan_akad }}</td>
                    <td>{{ $result->Jangka_Waktu}}</td>
                    <td>Rp. {{{number_format($result->Besar_Pembiayaan, 2) }}}</td>
                    <td>{{ $result->Nisbah_Nasabah}}</td>
                    <td>{{ $result->Nisbah_BMT}}</td>
                    <td>Rp. {{{ number_format( $result->angsuran_perbulan, 2) }}} / bulan</td>
                    <td>{{ $result->tanggal_pengajuan}}</td>
                    <td>{{ $result->Jenis_Jaminan}}</td>
                    <td>{{ $result->No_Jaminan}}</td>
                    <td>@if($result->Status == 1)
                            <font color="orange">Belum Disetujui</font>
                        @elseif($result->Status == 2)
                            <font color="blue">Disetujui</font>
                        @else
                            <font color="red">Ditolak</font>
                        @endif
                    </td>
                    <td>
                        @if($result->Status == 2)
                            <div class="col-md-3">Tanggal Disetujui</div>
                            <div class="col-md-9">: {{ $result->created_at }}</div>
                        @endif
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

                        <br><br>
                        <div class="col-sm-8 col-sm-offset-5">
                            <a href="/lihatpembiayaan" class="btn-default btn">Kembali</a>
                        </div>

                        <br><br>

                    </div>

                </div>
            </div>
    </div>
@endsection