@extends('layouts.admin')
@section('content')
<div class="page-header">

    <div class="page-header-content">
        <div>
            <h4 clas="">
                <i class="icon-home position-left"></i>
                <span class="text-semibold">Daftar Karyawan</span></h4>
            <a class="heading-element-toggle">
                
            </a>
        </div>
        <div class="heading-elements">
            <ul class="breadcrumb position-right">
                <li>
                <a href="{{route('karyawan.index')}}">Home</a>
                </li>
                <li>
                <a href="">karyawan</a>
                </li>
                <li class="active">Daftar Karyawan</li>
            </ul>
        </div>
        </div>

         </div>
             <div class="content">
            <div class="panel panel-flat border-top-lg border-top-primary">
         <div class="panel-body">
                <div class="col-lg-12">
                     <table class="table table-borderless">
                    <tr>
                         <td width="700"><b>Biodata</b></td>
                         <td width="3000"></td>
                         <td width="350"><b>Studi Kasus</b></td>
                         <td width="4200"></td>
                     </tr>
                     <tr>
                         <td>Nama</td>
                         <td>I Kadek Aldi Bragi</td>
                         <td>Judul</td>
                         <td>MY SHOP</td>
                     </tr>
                     <tr>
                         <td>NIM</td>
                         <td>1815051008</td>
                         <td>Penjelasan</td>
                         <td>Sistem ini dibuat untuk memanajemen karyawan MY SHOP</td>
                     </tr>
                     <tr>
                         <td>Program Studi</td>
                         <td>Pendidikan Teknik Informatika</td>
                         <td></td>
                         <td></td>
                     </tr>
                    </table>
                </div>
        
                <div class="col-lg-12">
                <a href="{{route('karyawan.create')}}">Input data</a>
                <table class="table table-bordered">
                    <thead>
                    <tr><th>no</th>
                    <th>nama</th>
                    <th>alamat</th
                    ><th>jenis</th>
                    <th>aksi</th>
                </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $in => $val)
                                <tr><td>{{($in+1)}}</td><td>{{$val->nama_karyawan}}</td><td>{{$val->alamat}}</td><td>{{$val->jenis}}</td>
                                <td>
                                <a href="{{route('karyawan.edit',$val->id_karyawan)}}">update</a>
                                <form action="{{route('karyawan.destroy',$val->id_karyawan)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">delete</button>
                                </form>
                                </td></tr>
                        @endforeach
                        </tbody>
                    </table>
                {{$karyawan->links()}}
                </div>
        </div>
    </div>
</div>
@endsection



