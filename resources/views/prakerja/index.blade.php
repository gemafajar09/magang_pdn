@extends('home.template')

@section('title')
    Prakerja
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-xl font-bold">Data Prakerja</div>
        <div>
            <a href="{{route('prakerja-tambah')}}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah Data</a>
        </div>
    </div>

    <table class="table w-full mt-5">
        <thead>
            <tr class="border p-3 bg-teal-400 text-white">
                <th class="border p-3">No</th>
                <th class="border p-3">Nama</th>
                <th class="border p-3">Email</th>
                <th class="border p-3">Alamat</th>
                <th class="border p-3">Telpon</th>
                <th class="border p-3">Pendidikan</th>
                <th class="border p-3">Foto</th>
                <th class="border p-3">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach($prakerja as $i => $p)
            <tr>
                <td>{{$i+1}}</td>
                <td>{{$p->nama}}</td>
                <td>{{$p->email}}</td>
                <td>{{$p->alamat}}</td>
                <td>{{$p->telpon}}</td>
                <td>{{$p->pendidikan_terakhir}}</td>
                <td><img src="{{asset('foto/'.$p->foto_user)}}" class="w-24" alt=""></td>
                <td>
                    <a href="{{route('prakerja-edit',$p->id)}}">Edit</a>
                    <a href="">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection