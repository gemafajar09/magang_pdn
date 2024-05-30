@extends('home.template')

@section('title')
    Tambah Data
@endsection

@section('content')

    <form action="{{route('prakerja-create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-2">
            <label for="">Nama</label>
            <input type="text" name="nama" value="{{old('nama')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('nama')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Email</label>
            <input type="text" name="email" value="{{old('email')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('email')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Telpon</label>
            <input type="text" name="telpon" value="{{old('telpon')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('telpon')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Alamat</label>
            <input type="text" name="alamat" value="{{old('alamat')}}" class="p-2 border rounded-md">
            <span>{{$errors->first('alamat')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Pendidikan Terakhir</label>
            <select name="pendidikan_terakhir" class="p-2 border rounded-md">
                <option value="">-PILIH-</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
            </select>
            <span>{{$errors->first('pendidikan_terakhir')}}</span>
        </div>
        <div class="flex flex-col gap-2">
            <label for="">Foto</label>
            <input type="file" name="foto" class="p-2 border rounded-md">
            <span>{{$errors->first('foto')}}</span>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 w-1/2 p-2 rounded-md text-white">Simpan</button>
        </div>
    </form>

@endsection