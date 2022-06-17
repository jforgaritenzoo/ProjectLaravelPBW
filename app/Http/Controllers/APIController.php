<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class APIController extends Controller
{
    public function tampilmhs(){
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'success'   => true,
            'message'   => 'Berhasil ditampilkan!',
            'data'      => $mahasiswa
        ], 200);
    }
    public function createmhs(Request $req){
        $mahasiswa = Mahasiswa::create([
            'nim' => $req->nim,
            'nama' => $req->nama,
            'gender' => $req->gender,
            'jurusan' => $req->jurusan,
            'bid_minat' => $req->bid_minat
        ]);
        if($mahasiswa){
            return response()->json([
                'success'   => true,
                'message'   => 'Berhasil ditambahkan!',
            ],200);
        }else{
            return response()->json([
                'success'   => false,
                'message'   => 'Data gagal ditambahkan!',
            ],401);
        }

    }

    public function updatemhs(Request $req){
        $mahasiswa = Mahasiswa::whereId($req->id)->update($req->except('id'));
        if($mahasiswa){
            return response()->json([
                'success'   => true,
                'message'   => 'Berhasil diubah!',
            ],200);
        }else{
            return response()->json([
                'success'   => false,
                'message'   => 'Data gagal diubah!',
            ],401);
        }
    }

    public function deletemhs($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        if($mahasiswa){
            return response()->json([
                'success'   => true,
                'message'   => 'Berhasil dihapus!',
            ],200);
        }else{
            return response()->json([
                'success'   => false,
                'message'   => 'Data gagal dihapus!',
            ],401);
        }
    }
}
