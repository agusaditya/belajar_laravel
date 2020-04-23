@extends('layouts.admin')
@section('content')
<div class="page-header">

    <div class="page-header-content">
        
        
        </div>

         </div>
        <div class="content">
            <div class="panel panel-flat border-top-lg border-top-primary">
            <form action="{{(isset($karyawan))?route('karyawan.update',$karyawan -> id_karyawan):route('karyawan.store')}}" method="POST" >
            @csrf
            @if(isset($karyawan))@method('PUT')@endif

                <div class="panel-body">
                     <div class="form-group">
                         <label class="control-label col-lg-2 ">nama karyawan</label>
                             <div class="col-lg-10">
                                 <input type="text" value="{{(isset($karyawan))?$karyawan->nama_karyawan:old('nama_karyawan')}}" name="nama_karyawan" class="form-control">
                                 @error('nama_karyawan')<small style="color:red">  {{$message}} </small>@enderror
                        </div>
                         </div>

                         <div class="form-group">
                         <label class="control-label col-lg-2 ">alamat</label>
                             <div class="col-lg-10">
                                 <input type="text" value="{{(isset($karyawan))?$karyawan->alamat:old('alamat')}}" name="alamat" class="form-control">
                                 @error('alamat')<small style="color:red">  {{$message}} </small>@enderror
                        </div>
                         </div>

                         <div class="form-group">
                         <label class="control-label col-lg-2 ">jenis</label>
                             <div class="col-lg-10">
                                 <input type="text" value="{{(isset($karyawan))?$karyawan->jenis:old('jenis')}}" name="jenis" class="form-control">
                                 @error('jenis')<small style="color:red">  {{$message}} </small>@enderror
                        </div>
                         </div>

                         <div class="col-lg-2">
                                <div class="form-group">
                                <button type="submit">simpan</button>
                                </div>
                                </div>
                         </div>
                               
  </div>
</form>
</div>
</div>
@endsection