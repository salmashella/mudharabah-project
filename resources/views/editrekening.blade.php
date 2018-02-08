@extends('header')
@section('content')

    <script src="/js/customjs.js" type="text/javascript"></script>
    <div class="main-page">
        <div class="forms">
            <h3 class="title1">Form </h3>

            <div class=" form-grids row form-grids-right">
                <div class="widget-shadow " data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Data Rekening</h4>
                    </div>
                    <div class="form-body">
                        <form class="form-horizontal" action="{{route('editrekening.update',$result->id)}}" method="post" >
                            {{csrf_field()}}
                            {{method_field('PUT')}}

                            <div class="form-group">
                                <label for="focusedinput" >No Rekening</label>
                                <input type="text" class="form-control" name="No_Rekening" required="true" value="{{ $result->No_Rekening }}" readonly >
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" >ID Nasabah</label>
                                <input type="text" class="form-control" name="Id_Nasabah" required="true" value="{{ $result->Id_Nasabah }}" readonly >
                            </div>
                            @if(session('Jabatan') == 2)
                                <div class="form-group">
                                    <label for="focusedinput" >Saldo</label>
                                    <input type="number" class="form-control1" id="focusedinput"  name="Saldo"  value="{{ $result->Saldo }}" readonly>
                                </div>
                            @endif
                            @if(session('Jabatan') == 3)
                            <div class="form-group">
                                <label for="focusedinput" >Nominal Tambah Saldo</label>
                                <input type="number" class="form-control1" id="focusedinput" name="Saldo" min="50000" required="true">
                            </div>
                            @endif
                            @if(session('Jabatan') == 2)
                            <div class="form-group">
                                <label for="selector1" >Status</label>
                                <select name="Status" id="selector1" class="form-control1" >
                                    @if($result->Status == "1")
                                        <option value="1" selected>Aktif</option>
                                        <option value="2">Tidak Aktif</option>
                                    @elseif($result->Status == "2")
                                        <option value="1" >Aktif</option>
                                        <option value="2" selected>Tidak Aktif</option>
                                    @endif
                                </select>
                            </div>
                            @endif
                            @if(session('Jabatan') == 3)
                                <div class="form-group">
                                    <label for="selector1" >Status</label>
                                    <select name="Status" id="selector1" class="form-control1" >
                                        @if($result->Status == "1")
                                            <option value="1">Aktif</option>
                                            <option value="2">Tidak Aktif</option>
                                        @elseif($result->Status == "2")
                                            <option value="2" >Tidak Aktif</option>
                                            <option value="1" >Aktif</option>
                                        @endif
                                    </select>
                                </div>
                            @endif


                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-5">
                                        <button type="submit" class="btn-success btn" value="submit">Submit</button>
                                        <a href="/lihatrekening" class="btn-default btn">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection