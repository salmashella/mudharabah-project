@extends('header')
@section('content')
			<div class="main-page">
                <div class="user-panel-top">
                    <div class="col-md-9 top-content">
                        {{--<h2>{{ session('message') }}</h2>--}}
                        <h3>Selamat datang, {{ session('Nama_Pegawai') }} sebagai
                    @if(session ('Jabatan')==1)
                        <h3>Manager</h3>
                    @elseif (session('Jabatan')==2)
                        <h3>Admin/CSO</h3>
                    @else
                        <h3>Teller</h3>
                    @endif



                        </h3>
                    </div>
                    <div class="clearfix"> </div>
                </div>
				<div class="row-one">
					<div class="col-md-6 widget-shadow">
						<div class="stats-left ">
							<h5>Until Today</h5>
							<h4>Jumlah Data Nasabah</h4>

						</div>
						<div class="stats-right">
                                <div class="clearfix">
                                    <label>{{ $datanasabah }} </label>
                                </div>
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-6 widget-shadow ">
						<div class="stats-left">
							<h5>Until Today</h5>
							<h4>Jumlah Data Pembiayaan</h4>

						</div>
						<div class="stats-right">
                                <div class="clearfix">
                                    <label>{{ $datapembiayaan }}</label>
                                </div>
						</div>
						<div class="clearfix"> </div>
					</div>
					
				{{--<div class="row calender widget-shadow">--}}
					{{--<h4 class="title">Calender</h4>--}}
					{{--<div class="cal1">--}}
						{{----}}
					{{--</div>--}}
				{{--</div>--}}
				<div class="clearfix"> </div>
			</div>
		</div>
@endsection