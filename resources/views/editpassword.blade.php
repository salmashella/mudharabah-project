

@extends('header')
@section('content')

    <div class="main-page">
        <div class="forms">
            <h3 class="title1">Form Ganti Password</h3>

            <div class=" form-grids row form-grids-right">
                <div class="widget-shadow " data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Ganti Password</h4>
                    </div>
                    <br>
                    <div class="form-body">
                        <form class="form-horizontal" action="{{route('editpassword.update',$result->id)}}" method="post" >
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-9">
                                    <input class="form-control"  name="Username" value="{{ $result->Username }}" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="focusedinput" placeholder="Password" name="Password" required="" value="{{ $result->Password }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-4">
                                    <button type="submit" class="btn-success btn">Submit</button>
                                    <a href="home" class="btn-default btn">Cancel</a>
                                    <button type="reset" class="btn-inverse btn">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
