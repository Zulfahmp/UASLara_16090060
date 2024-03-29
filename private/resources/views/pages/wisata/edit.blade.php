@extends('template.admin')
@section('main')
<div class="row">          
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>DATA WISATA</h2>
                <ul class="nav navbar-right">
                    <ol class="breadcrumb">
                    <li><a href="{{asset('/beranda')}}"><i class="fa fa-home"></i> Beranda</a></li>
                        <li class="active"><a href="{{asset('wisata')}}"><i class="fa fa-plane"></i> Data Wisata</a></li>
                        <li class="active"><a href="{{asset('user')}}"><i class="fa fa-user"></i> Data User</a></li>
                    </ol>
                </ul>
                <div class="clearfix"></div>
            </div>
           
            <form action="{{ route('wisata.update', $data->id) }}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
                @method('PATCH')
                <div align="right" class="box-header with-border" >
                        <i class="fa fa-info-circle"></i> <i><b>(*)</b> harus diisi !</i>
                </div>
                <br>
                <div class="form-group row">
                    <label for="inputInstansi" class="col-sm-3 col-form-label" >Nama Wisata</label>
                    
                    <div class="col-sm-8">
                        <input name="nama_wisata" value="{{ $data->nama_wisata }}" type="text" class="form-control"  placeholder="masukan nama wisata">
                    </div>
                </div>

				<div class="form-group row">
                    <label for="editStatus" class="col-sm-3 col-form-label">Kategori</label>
                    
                    <div class="col-sm-8">
                        <select name="kategori" type="text" class="form-control"  >
                            <option value="">-- Pilih Kategori--</option>
                            <option value="Pantai" @if ($data->kategori =='Pantai') selected @endif >Pantai</option>
                            <option value="Pegunungan" @if ($data->kategori =='Pegunungan') selected @endif >Pegunungan</option>
                            <option value="Bermain" @if ($data->kategori =='Bermain') selected @endif >Bermain</option>
                            <option value="Belanja" @if ($data->kategori =='Belanja') selected @endif >Belanja</option>
                            <option value="Keluarga" @if ($data->kategori =='Keluarga') selected @endif >Keluarga</option>
                            <option value="Sejarah" @if ($data->kategori =='Sejarah') selected @endif >Sejarah</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputInstansi" class="col-sm-3 col-form-label">Lokasi</label>
                    
                    <div class="col-sm-8">
                        <input name="lokasi" value="{{ $data->lokasi }}" type="text" class="form-control"  placeholder="masukan lokasi" >
                    </div>
                </div>
				<div class="form-group row">
                    <label for="inputInstansi" class="col-sm-3 col-form-label">Deskripsi</label>
                    
                    <div class="col-sm-8">
                        <input name="deskripsi" value="{{ $data->deskripsi }}" type="text" class="form-control" placeholder="masukan deskripsi" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputInstansi" class="col-sm-3 col-form-label">Foto</label>
                    
                    <div class="col-sm-8">
                        <input name="image" type="file" class="form-control" placeholder="masukan foto" >
                        <img src="{{ URL::to('/') }}/public/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
                    </div>
                </div>  
                
                
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a type="button" href="{{ route('wisata.index') }}" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</a >
                </div>
            </form>
        </div>
    </div>
</div>
@stop