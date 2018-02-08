
@extends('header')
@section('content')


			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Form Pegawai</h3>
					
					<div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Data Lengkap</h4>
							</div>
							<div class="form-body">
                                <form class="form-horizontal" action="/tambahpegawai" method="post">
                                    {{csrf_field()}}
									<div class="form-group"> 
										<label for="focusedinput" class="col-sm-2 control-label">Nama Pegawai</label> 
										<div class="col-sm-9"> 
											<input type="text" class="form-control" id="focusedinput" placeholder="Nama Pegawai" name="Nama_Pegawai" required=""> 
										</div> 
									</div> 
									<div class="form-group">
										<label for="txtarea1" class="col-sm-2 control-label">Alamat</label>
										<div class="col-sm-9">
											<textarea  id="txtarea1" class="form-control1" placeholder="Alamat" name="Alamat" required=""></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="selector1" class="col-sm-2 control-label">Jabatan</label>
										<div class="col-sm-9">
											<select name="Jabatan"  id="selector1" class="form-control1" required="">
												<option value="1">Manajer</option>
												<option value="2">Admin/CSO</option>
												<option value="3">Teller</option>
										</select>
										</div>
									</div>
									<div class="form-group">
										<label for="radio" class="col-sm-2 control-label">Jenis Kelamin</label>
										<div class="col-sm-9">
											<div class="radio">
												<label><input type="radio" name="Jenkel" value="L" checked> Laki-Laki</label>
												<label><input type="radio" name="Jenkel" value="P"> Perempuan</label>
											</div>
										</div>
									</div>
									<div class="form-group"> 
										<label for="focusedinput" class="col-sm-2 control-label">No Telepon</label> 
										<div class="col-sm-9"> 
											<input type="number" class="form-control" id="focusedinput" placeholder="No Telepon" name="No_Telp" required=""> 
										</div> 
									</div> 
									<div class="form-group">
										<label for="selector1" class="col-sm-2 control-label">Agama</label>
										<div class="col-sm-9">
											<select name="Agama"  id="selector1" class="form-control1" required="">
												<option value="Islam">Islam</option>
												<option value="Kristen">Kristen</option>
												<option value="Katholik">Katholik</option>
												<option value="Budha">Budha</option>
												<option value="Konghucu">Konghucu</option>
										</select>
										</div>
									</div>
									<div class="form-group"> 
										<label for="focusedinput" class="col-sm-2 control-label">Tempat Lahir</label> 
										<div class="col-sm-9"> 
											<input type="text" class="form-control" id="focusedinput"   placeholder="Tempat Lahir" name="Tempat_Lahir" required="">
										</div>

									</div> 
									<div class="form-group">
                                    	<label for="focusedinput" class="col-sm-2 control-label">Tanggal Lahir</label>
                                    	<div class="col-sm-9">
                                        	<input type="date" id="datefield" class="form-control1 ng-invalid ng-invalid-required"  ng-model="model.date" required="" name="Tanggal_Lahir">
                                    	</div>
                                    </div>
	                                <div class="form-group">
	                                    <label for="selector1" class="col-sm-2 control-label">Status</label>
	                                    	<div class="col-sm-9">
                                                <select name="Status" id="selector1" class="form-control1" required="">
	                                            <option value="1">Aktif</option>
	                                        </select>
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label for="focusedinput" class="col-sm-2 control-label">Username</label>
	                                    <div class="col-sm-9">
	                                        <input type="text" class="form-control1" id="focusedinput" placeholder="Username" name="Username" required="">
	                                    </div>
	                                </div>
	                                <div class="form-group">
	                                    <label for="focusedinput" class="col-sm-2 control-label">Password</label>
	                                    <div class="col-sm-9">
	                                        <input type="password"  class="form-control" id="inputPassword" placeholder="Password" name="Password" required="">
	                                    </div>
	                                </div>
                                    <div class="row">
                                        <div class="col-sm-8 col-sm-offset-4">
                                            <button type="submit" class="btn-success btn">Submit</button>
                                            <a href="/home" class="btn-default btn">Cancel</a>
                                        </div>
                                    </div>				


								</form>
							</div>
						</div>
					</div>
				</div>
			</div>


    <script>

            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1;
            var yyyy = today.getFullYear();

            if(dd<10)
            {
                dd='0'+dd
            }
            if(mm<10)
            {
                mm='0'+mm
            }

            today =(yyyy - 18)+'-'+mm + '-' + dd ;
            document.getElementById("datefield").setAttribute("max",today);

    </script>

@endsection