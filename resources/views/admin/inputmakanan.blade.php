@extends('layouts.admin')
@section('content')
<div class="page-header">

    <div class="page-header-content">
        <div>
            <h4 clas="">
                <i class="icon-home position-left"></i>
                <span class="text-semibold">Daftar Makanan</span></h4>
            <a class="heading-element-toggle">
                
            </a>
        </div>
        <div class="heading-elements">
            <ul class="breadcrumb position-right">
                <li>
                <a href="{{route('makanan.index')}}">Home</a>
                </li>
                <li>
                <a href="">makanan</a>
                </li>
                <li class="active">input Makanan</li>
            </ul>
        </div>
        </div>

         </div>
        <div class="content">
            <div class="panel panel-flat border-top-lg border-top-primary">
            <form action="{{(isset($makanan))?route('makanan.update',$makanan -> id_makanan):route('makanan.store')}}" method="POST" >
            @csrf
            @if(isset($makanan))?@method('PUT')@endif

                <div class="panel-body">
                     <div class="form-group">
                         <label class="control-label col-lg-2 ">nama makanan</label>
                             <div class="col-lg-10">
                                 <input type="text" value="{{(isset($makanan))?$makanan->nama_makanan:old('nama_makanan')}}" name="nama_makanan" class="form-control">
                                 @error('nama_makanan')<small style="color:red">  {{$message}} </small>@enderror
                        </div>
                         </div>

                         <div class="form-group">
                         <label class="control-label col-lg-2 ">jenis</label>
                             <div class="col-lg-10">
                                 <input type="text" value="{{(isset($makanan))?$makanan->jenis:old('jenis')}}" name="jenis" class="form-control">
                                 @error('jenis')<small style="color:red">  {{$message}} </small>@enderror
                        </div>
                         </div>

                         <div class="form-group">
                         <label class="control-label col-lg-2 ">harga</label>
                             <div class="col-lg-10">
                                 <input type="text" value="{{(isset($makanan))?$makanan->harga:old('harga')}}" name="harga" class="form-control">
                                 @error('harga')<small style="color:red">  {{$message}} </small>@enderror
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