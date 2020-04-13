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
                <li class="active">Daftar Makanan</li>
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
                         <td>Sistem Manajemen Restoran</td>
                     </tr>
                     <tr>
                         <td>NIM</td>
                         <td>1815051008</td>
                         <td>Penjelasan</td>
                         <td>Sistem ini dibuat untuk memanajemen sebuah restaurant cepat saji</td>
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
                <a href="{{route('makanan.create')}}">Input data</a>
                <table class="table table-bordered">
                    <thead>
                    <tr><th>no</th>
                    <th>nama</th>
                    <th>jenis</th
                    ><th>harga</th>
                    <th>aksi</th>
                </tr>
                    </thead>
                    <tbody>
                        @foreach ($makanan as $in => $val)
                                <tr><td>{{($in+1)}}</td><td>{{$val->nama_makanan}}</td><td>{{$val->jenis}}</td><td>{{$val->harga}}</td>
                                <td>
                                <a href="{{route('makanan.edit',$val->id_makanan)}}">update</a>
                                <form action="{{route('makanan.destroy',$val->id_makanan)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">delete</button>
                                </form>
                                </td></tr>
                        @endforeach
                        </tbody>
                    </table>
                {{$makanan->links()}}
                </div>
        </div>
    </div>
</div>
@endsection



