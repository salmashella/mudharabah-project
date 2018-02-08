@extends('header')
@section('content')

    <script src="/js/customjs.js" type="text/javascript"></script>
    <div class="main-page">
        <div class="forms">
            <h3 class="title1">Form Persetujuan</h3>

            <div class=" form-grids row form-grids-right">
                <div class="widget-shadow " data-example-id="basic-forms">
                    <div class="form-title">
                        <h4>Data Lengkap</h4>
                    </div>
                    <div class="form-body">
                        <form class="form-horizontal" action="{{route('formpersetujuan.update',$result->id)}}" method="post" >
                            {{csrf_field()}}
                            {{method_field('PUT')}}


                            <div class="form-group">
                                <label for="focusedinput" >No Rekening</label>
                                <input type="text" class="form-control" name="No_Rekening" required="true" value="{{ $result->No_Rekening }}" readonly >
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" >Tujuan Akad</label>
                                <input type="text" class="form-control1" id="focusedinput" placeholder="Tujuan Akad" name="tujuan_akad" required="" value="{{ $result->tujuan_akad }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput">Jangka Waktu</label>
                                <input type="text" class="form-control1" min="1" max="24" onkeypress="hitungAngsuran()"  placeholder="Jangka Waktu Pembiayaan" name="Jangka_Waktu" required="" value="{{ $result->Jangka_Waktu }}" readonly>

                            </div>
                            <div class="form-group">
                                <label for="focusedinput">Besar Pembiayaan</label>
                                <input type="number" class="form-control1"  placeholder="Besar Pembiayaan" name="Besar_Pembiayaan" required="true" value="{{ $result->Besar_Pembiayaan }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" >Nisbah Nasabah %</label>
                                <input type="text" class="form-control1" id="focusedinput" placeholder="Nisbah Nasabah" name="Nisbah_Nasabah" required="" value="{{ $result->Nisbah_Nasabah }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="focusedinput" >Nisbah BMT %</label>
                                <input type="text" class="form-control1" id="focusedinput" placeholder="Nisbah BMT" name="Nisbah_BMT" required="" value="{{ $result->Nisbah_BMT }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" >Angsuran Perbulan</label>
                                <input type="number" class="form-control1" placeholder="Angsuran Perbulan" name="angsuran_perbulan" required="" value="{{ $result->angsuran_perbulan }}" readonly >

                            </div>

                            <div class="form-group">
                                <label for="focusedinput" >Bentuk jaminan pembiayaan</label>
                                <select id="Jenis_Jaminan" name="Jenis_Jaminan" class="form-control1">
                                    @if($result->Jenis_Jaminan == "BPKB Motor")
                                        <option value="BPKB Motor" selected>BPKB Motor</option>
                                        <option value="BPKB Mobil">BPKB Mobil</option>
                                        <option value="Surat Tanah">Sertifikat Rumah</option>
                                    @elseif($result->Jenis_Jaminan == "BPKB Mobil")
                                        <option value="BPKB Motor">BPKB Motor</option>
                                        <option value="BPKB Mobil" selected>BPKB Mobil</option>
                                        <option value="Surat Tanah">Sertifikat Rumah</option>
                                    @elseif($result->Jenis_Jaminan == "Surat Tanah")
                                        <option value="BPKB Motor">BPKB Motor</option>
                                        <option value="BPKB Mobil">BPKB Mobil</option>
                                        <option value="Surat Tanah" selected>Sertifikat Rumah</option>
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" >Nomor ID Jaminan</label>
                                <input type="number" class="form-control1" placeholder="Nomor ID Jaminan" name="No_Jaminan" required="" value="{{ $result->No_Jaminan }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="selector1" >Status</label>
                                <select name="Status" id="selector1" class="form-control1" required="">
                                    @if($result->Status == "1")
                                        <option value="1" selected>Belum Disetujui</option>
                                        <option value="2">Disetujui</option>
                                        <option value="3">Ditolak</option>
                                    @elseif($result->Status == "2")
                                        <option value="2" selected>Disetujui</option>
                                    @elseif($result->Status == "3")
                                        <option value="3" selected>Ditolak</option>
                                    @endif
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="focusedinput" >Keterangan</label>
                                <input type="number" class="form-control1" placeholder="Keterangan" name="keterangan" required="" value="{{ $result->keterangan }}" >
                            </div>


                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-5">
                                        <button type="submit" class="btn-success btn" value="submit">Submit</button>
                                        <a href="/lihatpembiayaan" class="btn-default btn">Cancel</a>
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