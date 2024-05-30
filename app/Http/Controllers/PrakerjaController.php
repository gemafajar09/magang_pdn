<?php

namespace App\Http\Controllers;

use App\Http\Requests\InputPrakerjaRequest;
use App\Http\Requests\UpdatePrakerjaRequest;
use App\Models\Pengguna;
use App\Models\Prakerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PrakerjaController extends Controller
{
    public function index()
    {
        $data['prakerja'] = Prakerja::get();
        return view('prakerja/index',$data);
    }

    public function tambah()
    {
        return view('prakerja/tambah');
    }

    public function proses_tambah(InputPrakerjaRequest $r)
    {
        if($r->validated()){
           
            $foto = $r->foto->getClientOriginalName();
            $r->foto->move('/foto',$foto);
            
            Prakerja::create([
                'nama' => $r->nama,
                'email' => $r->email,
                'telpon' => $r->telpon,
                'alamat' => $r->alamat,
                'pendidikan_terakhir' => $r->pendidikan_terakhir,
                'foto' => $foto,
            ]);
    
            return redirect('prakerja');
        }

    }

    public function edit($id)
    {
        $data['prakerja'] = Prakerja::where('id',$id)->first();
        return view('prakerja/edit',$data);
    }

    public function update(UpdatePrakerjaRequest $r, $id){
        if($r->validated()){
            if($r->foto){
                // cek nama file sebelumnya
                $cek = Prakerja::where('id',$id)->first();
                // jika file sebelumnya ada maka jalankana perintah hapus
                if(File::exists(public_path('foto/'.$cek->foto))){
                    File::delete(public_path('foto/'.$cek->foto));
                }
                // ambil nama file gambar
                $foto =  $r->foto->getClientOriginalName();
                // pindahkan file gambar ke dalam direktori public/foto    
                $r->foto->move('foto/',$foto);

                $data['foto'] = $foto;
            }

            $data['nama'] = $r->nama;
            $data['email'] = $r->email;
            $data['telpon'] = $r->telpon;
            $data['alamat'] = $r->alamat;
            $data['pendidikan_terakhir'] = $r->pendidikan_terakhir;

            Prakerja::where('id',$id)->update($data);

            return redirect('prakerja');
        }
    }

    public function hapus($id){
        Prakerja::where('id',$id)->delete();
        return back();
    }
}
