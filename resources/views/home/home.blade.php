@extends('home.template')

@section('title')
    Home
@endsection

@section('content')
    <div class="flex justify-between">
        <div class="text-xl font-bold">Data User</div>
        <div>
            <a href="{{route('tambah')}}" class="bg-blue-500 hover:bg-blue-300 text-white p-2 border rounded-md">Tambah Data</a>
        </div>
    </div>

    <table class="table w-full mt-5">
        <thead>
            <tr class="border p-3 bg-teal-400 text-white">
                <th class="border p-3">No</th>
                <th class="border p-3">Nama</th>
                <th class="border p-3">Email</th>
                <th class="border p-3">Telpon</th>
                <th class="border p-3">Foto</th>
                <th class="border p-3">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $i => $a)
                <tr class="border p-3">
                    <td class="border p-3">{{$i+1}}</td>
                    <td class="border p-3">{{$a->nama}}</td>
                    <td class="border p-3">{{$a->email}}</td>
                    <td class="border p-3">{{$a->telpon}}</td>
                    <td class="border p-3"><img src="{{asset('foto/'.$a->foto)}}" class="w-1/3" alt=""></td>
                    <td class="border p-3">
                        <div class="flex gap-3 justify-center">
                            <a href="{{route('edit',$a->id)}}" class="bg-blue-500 flex items-center justify-center hover:bg-blue-400 text-white rounded-md w-14 h-8">Edit</a>
                            <a href="{{route('hapus',$a->id)}}" class="bg-red-500 flex items-center justify-center hover:bg-red-400 text-white rounded-md w-14 h-8">Hapus</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection