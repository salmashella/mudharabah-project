<link href="/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
@extends('header')
@section('content')

    <div class="content-top">
        <div class="col-md-12 ">
            <div class="content-top-1">

                <div class="clearfix"> </div>
                <div id="page-inner">

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Advanced Tables -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <center>Data Rekening</center>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                            <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>No Rekening</th>
                                                <th>Saldo</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($result))
                                                <?php $a = 1 ?>
                                                @foreach($result as $value)
                                            <tr class="odd gradeX">
                                                <th scope="row">{{ $a }}</th>
                                                <td>{{ $value->No_Rekening }}</td>
                                                <td>{{ $value->Saldo }}</td>
                                                <td>
                                                    @if($value->Status == 1)
                                                        <font color="blue">Aktif</font>
                                                    @else
                                                        <font color="red">Tidak Aktif</font>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{--<a class="btn-sm btn-danger" href="/detailrekening{{ base64_encode($value->No_Rekening) }}">Detail</a>--}}
                                                    @if(session('Jabatan') == 2)
                                                        <a class="btn-sm btn-info" href="{{route('editrekening.show',$value->id)}}">Ubah Status</a>
                                                    @endif
                                                    @if(session('Jabatan') == 3)
                                                        <a class="btn-sm btn-info" href="{{route('editrekening.show',$value->id)}}">Tambah Saldo</a>
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
        <script src="/js/dataTables/jquery.dataTables.js"></script>
        <script src="/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
        </script>
    </div>
@endsection