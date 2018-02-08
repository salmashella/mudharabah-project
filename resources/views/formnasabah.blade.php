
@extends('header')
@section('content')

			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Form Nasabah</h3>
                    <form class="form-horizontal" action="tambahnasabah" method="post">
                        {{ csrf_field() }}

				<div class="form-grids row widget-shadow" data-example-id="basic-forms">
                    <script src="/js/customjs.js"></script>
				<div class="col-md-6"> 
						<div class="form-title">
							<h4>Data Nasabah</h4>
						</div>
						<div class="form-body">
								
								<div class="form-group"> 
									<label for="exampleInputEmail1">Nama Nasabah</label> 
									<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Nasabah" name="Nama"  required="">
								</div>
								<div class="form-group">
										<label for="radio">Jenis Kelamin</label>
											<div class="radio block">
												<label><input type="radio" name="Jenkel" value="L" checked> Laki-Laki</label>
												<label><input type="radio" name="Jenkel" value="P"> Perempuan</label>
										</div>
									</div>
									<div class="form-group">
										<label for="txtarea1" >Alamat</label>		
											<textarea id="txtarea1" cols="60" rows="4" class="form-control1" placeholder="Alamat" name="Alamat" required="">
											</textarea>
									</div>
									<div class="form-group">
										<label for="selector1" >Agama</label>										
											<select name="Agama"  id="selector1" class="form-control1" required="">
												<option value="Islam">Islam</option>
												<option value="Kristen">Kristen</option>
												<option value="Katholik">Katholik</option>
												<option value="Budha">Budha</option>
												<option value="Konghucu">Konghucu</option>
											</select>										
									</div>
									<div class="form-group"> 
										<label for="focusedinput" >No Telepon</label> 
											<input type="number" class="form-control" id="focusedinput" placeholder="No Telepon" name="No_Telp" required=""> 
									</div> 
									<div class="form-group">
										<label for="radio" >Jenis Identitas</label>
											<div class="radio block">
												<label><input type="radio" name="Jenis_Identitas" value="KTP" checked> KTP </label>
												<label><input type="radio" name="Jenis_Identitas" value="SIM"> SIM </label>
											</div>
									</div>
									<div class="form-group"> 
										<label for="focusedinput" >No Identitas</label> 
											<input type="number" class="form-control" id="focusedinput" placeholder="No Identitas" name="No_Identitas" required=""> 
									</div> 
									<div class="form-group"> 
										<label for="focusedinput" >Pekerjaan</label> 
											<input type="text" class="form-control" id="focusedinput" placeholder="Pekerjaan" name="Pekerjaan" required=""> 
									</div> 
									<div class="form-group"> 
										<label for="focusedinput" >Tempat Lahir</label> 
											<input type="text" class="form-control" id="focusedinput" placeholder="Tempat Lahir" name="Tempat_Lahir" required=""> 
									</div> 
									<div class="form-group">
                                    	<label for="focusedinput" >Tanggal Lahir</label>
                                        	<input type="date" id="datefield" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required="" name="Tanggal_Lahir">
                                	</div>
	                                <div class="form-group">
                            			<label for="focusedinput" >Nama Ahli Waris</label>
                                			<input type="text" class="form-control1" id="focusedinput" placeholder="Nama Ahli Waris" name="Nama_Ahliwaris" required="">
                        			</div>
                                    <div class="form-group">
                                        <label for="radio" >Jenis Identitas Ahli Waris</label>
                                        <div class="radio block">
                                            <label><input type="radio" name="jenis_id_ahliwaris" value="KTP" checked> KTP </label>
                                            <label><input type="radio" name="jenis_id_ahliwaris" value="SIM"> SIM </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" >No Identitas Ahli Waris</label>
                                        <input type="number" class="form-control1" id="focusedinput" placeholder="No Identitas Ahli Waris" name="no_id_ahliwaris" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" >No Telepon Ahli Waris</label>
                                        <input type="number" class="form-control1" id="focusedinput" placeholder="No Telepon Ahli Waris" name="no_telp_ahliwaris" required="">
                                    </div>
                        			<div class="form-group">
                            			<label for="focusedinput" >Alamat Ahli Waris</label>
                                			<input type="text" class="form-control1" id="focusedinput" placeholder="Alamat Ahli Waris" name="Alamat_Ahliwaris" required="">
                        			</div>
			                        <div class="form-group">
			                            <label for="focusedinput" >Hubungan keluarga Ahli Waris</label>
			                                <input type="text" class="form-control1" id="focusedinput" placeholder="Hubungan keluarga Ahli Waris" name="Hubungankeluarga_Ahliwaris" required="">
			                        </div>

			                        <div class="form-group">
	                                    <hr>
	                                </div>
			                     
		                        <div class="form-title">
									<h4>Data Pasangan</h4>
								</div>  
								<div class="data-pasangan">
	                            <div class="content-divider">	                                
	                                <div class="form-group">
	                                    <label for="exampleInputPassword1">Apakah nasabah mempunyai pasangan?</label>
	                                    <select id="punyapasangan" name="punyapasangan" class="form-control" onchange="onSelectPasanganEventClicked()">
	                                        <option value="2">Tidak</option>
	                                        <option value="1">Ya</option>
	                                    </select>
	                                </div>
	                            </div>
	                            <div id="layout-pasangan" style="display: none">
	                                <div class="form-group">
	                                    <label for="exampleInputEmail1">Nama Pasangan</label>
	                                    <input type="text" class="form-control" id="focusedinput" placeholder="Nama Pasangan" name="Nama_Pasangan">
	                                </div>
                                    <div class="form-group">
                                        <label for="radio" >Jenis Identitas Pasangan</label>
                                        <div class="radio block">
                                            <label><input type="radio" name="jenis_id_pasangan" value="KTP" checked> KTP </label>
                                            <label><input type="radio" name="jenis_id_pasangan" value="SIM"> SIM </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" >No Identitas Pasangan</label>
                                        <input type="number" class="form-control1" id="focusedinput" placeholder="No Identitas Pasangan" name="no_id_pasangan" >
                                    </div>
                                    <div class="form-group">
                                        <label for="focusedinput" >No Telepon Pasangan</label>
                                        <input type="number" class="form-control1" id="focusedinput" placeholder="No Telepon Pasangan" name="no_telp_pasangan"  >
                                    </div>
	                                <div class="form-group">
	                                    <label for="exampleInputEmail1">Pekerjaan Pasangan</label>
	                                    <input type="text" class="form-control" id="focusedinput" placeholder="Pekerjaan Pasangan" name="Pekerjaan_Pasangan">
	                                </div>
	                                <div class="form-group">
	                                    <label for="exampleInputEmail1">Jenis Kelamin Pasangan</label>
	                                    <br>
	                                    <select name="Jenkel_Pasangan" id="selector1" class="form-control1" >
	                                        <option value="Laki-Laki">Laki-Laki</option>
	                                        <option value="Perempuan">Perempuan</option>
	                                    </select>
	                                </div>
	                                <div class="form-group">
	                                    <label for="txtarea1">Keterangan</label>
                                        <textarea  id="txtarea1" cols="80" rows="4" class="form-control1" placeholder="Keterangan" name="Keterangan">  </textarea>

	                                </div>

	                            </div>
	                        </div>                   
	                    </div>
	                </div>

	                <div class="col-md-6"> 
	                	<div class="form-title">
							<h4>Data Perusahaan</h4>
						</div> 
						<div class="data-perusahaan">
                            <div class="content-divider">                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Apakah nasabah mempunyai perusahaan?</label>
                                    <select id="punyaperusahaan" name="punyaperusahaan" class="form-control" onchange="onSelectPerusahaanEventClicked()">
                                        <option value="2">Tidak</option>
                                        <option value="1">Ya</option>
                                    </select>
                                </div>
                            </div>

                            <div id="layout-perusahaan" style="display: none">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama Perusahaan</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Nama Perusahaan" name="Nama_Perusahaan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">No SIUP</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="No SIUP" name="no_siup">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" >No Telepon</label>
                                        <input type="number" class="form-control1" id="focusedinput" placeholder="No Telepon" name="No_Telp_Perusahaan" >

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat Perusahaan</label>
                                    <input type="textarea" class="form-control" id="focusedinput" placeholder="Alamat Perusahaan" name="Alamat_Perusahaan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bidang Usaha</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Bidang Usaha" name="Bidang_Usaha">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" >Berdiri Sejak</label>
                                        <input type="date" class="form-control1 ng-invalid " ng-model="model.date" name="Berdiri_Sejak">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status Perusahaan</label>
                                    <br>
                                    <select name="Status" id="selector1" class="form-control1" >
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
	                        <hr>
	                    </div>
	                    <div class="form-title">
							<h4>Data Penghasilan</h4>
						</div> 
						<div class="data-penghasilan">
                            <div class="content-divider">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Apakah akan memasukan data penghasilan nasabah?</label>
                                    <select id="punyapenghasilan" name="punyapenghasilan" class="form-control" onchange="onSelectPenghasilanEventClicked()">
                                        <option value="2">Tidak</option>
                                        <option value="1">Ya</option>
                                    </select>
                                </div>
                            </div>
                            <div id="layout-penghasilan" style="display: none">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Penghasilan Istri</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Penghasilan Istri" name="Penghasilan_Istri">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Penghasilan Suami</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Penghasilan Suami" name="Penghasilan_Suami">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Penghasilan Lain</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Penghasilan Lain" name="Penghasilan_lain">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengeluaran Pendidikan</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Pengeluaran Pendidikan" name="Pengeluaran_Pendidikan">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengeluaran Rumah Tangga</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Pengeluaran Rumah Tangga" name="Pengeluaran_Rumahtangga">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengeluaran Cicilan Bank</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Pengeluaran Cicilan Bank" name="Pengeluaran_CicilanBank">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengeluaran Pribadi</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Pengeluaran Pribadi" name="Pengeluaran_Pribadi">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Pengeluaran Lain</label>
                                    <input type="text" class="form-control" id="focusedinput" placeholder="Pengeluaran Lain" name="Pengeluaran_lain">
                                </div>

                            </div>
                        </div>
					</div>
	            </div>

	                			<div class="panel-footer">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-4">
                                            <button type="submit" class="btn-success btn">Submit</button>
                                            <a href="/home" class="btn-default btn">Cancel</a>
                                        </div>
                                    </div>	
                                </div>
                </form>
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