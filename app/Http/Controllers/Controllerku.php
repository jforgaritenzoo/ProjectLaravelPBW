<?php

namespace App\Http\Controllers;

use App\User;
use App\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\MessageBag;

class Controllerku extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function user()
    {
        $user = User::paginate(5);
        return view('user', ['user' => $user]);
    }
    public function formuser()
    {
        return view('formuser');
    }
    public function simpanuser(Request $req)
    {
        $req->validate([
            'nama_user' => ['required', 'max:255'],
            'nik_user' => ['required', 'unique:users', 'max:11'],
            'no_hp' => ['required', 'max:15'],
            'password' => ['required', 'min:8']
        ]);
        User::create([
            'nama_user' => $req->nama_user,
            'nik_user' => $req->nik_user,
            'no_hp' => $req->no_hp,
            'password' => md5($req->password)
        ]);
        return redirect('/user')->with('alert-success', 'Data berhasil disimpan!');
    }
    public function registeruser(Request $req)
    {
        $req->validate([
            'nama_user' => ['required', 'max:255'],
            'nik_user' => ['required', 'unique:users', 'max:11'],
            'no_hp' => ['required', 'max:15'],
            'password' => ['required', 'min:8']
        ]);
        User::create([
            'nama_user' => $req->nama_user,
            'nik_user' => $req->nik_user,
            'no_hp' => $req->no_hp,
            'password' => md5($req->password)
        ]);
        return redirect('/login')->with('alert-success', 'Register berhasil, lakukan login!');
    }
    public function formedituser($id)
    {
        $user = User::find($id);
        return view('formedituser', ['user' => $user]);
    }
    public function updateuser($id, Request $req)
    {
        $req->validate([
            'nama_user' => ['required', 'max:255'],
            'nik_user' => ['required', 'max:11'],
            'no_hp' => ['required', 'max:15'],
            'password' => ['required', 'min:8']
        ]);

        $user = User::find($id);
        $user->nama_user = $req->nama_user;
        $user->nik_user = $req->nik_user;
        $user->no_hp = $req->no_hp;
        $user->password = md5($req->password);
        $user->save();
        return redirect('/user')->with('alert-info', 'Data berhasil diupdate!');
    }
    public function hapususer($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('alert-danger', 'Data berhasil dihapus!');
    }
    public function cariuser(Request $req){
        $cari = $req -> cari;
        $user = User::where('nama_user','like','%'.$cari.'%')->orWhere('nik_user','like','%'.$cari.'%')->paginate();
        return view('user',['user'=> $user]);
    }


    public function tampilmhs(){
        $mahasiswa = Mahasiswa::orderBy('id','desc')->paginate(10);
        return view('mahasiswa',['mahasiswa'=> $mahasiswa]);
    }
    public function pencarianmhs(Request $req){
        $cari = $req -> cari;
        $mahasiswa = Mahasiswa::where('nama','like','%'.$cari.'%')->orWhere('nim','like','%'.$cari.'%')->paginate();
        return view('mahasiswa',['mahasiswa'=> $mahasiswa]);
    }
    public function formmhs(){
        return view('formmahasiswa');
    }
    public function formeditmhs($id){
        $mahasiswa = Mahasiswa::find($id);
        return view('formeditmahasiswa',['mahasiswa'=>$mahasiswa]);
    }
    public function simpanmhs(Request $req){
        $bid_minat = implode(",",$req->bid_minat);
        Mahasiswa::create([
            'nim' => $req->nim,
            'nama' => $req->nama,
            'gender' => $req->gender,
            'jurusan' => $req->jurusan,
            'bid_minat' => $bid_minat
        ]);
        return redirect('/mahasiswa')->with('alert-success','Data berhasil disimpan!');
    }
    public function updatemhs($id, Request $req){
        $bid_minat = implode(',', $req->bid_minat);
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> nim = $req->nim;
        $mahasiswa -> nama = $req->nama;
        $mahasiswa -> gender = $req->gender;
        $mahasiswa -> jurusan = $req->jurusan;
        $mahasiswa -> bid_minat = $bid_minat;
        $mahasiswa ->save();
        return redirect ('/mahasiswa')->with('alert-info', 'Data berhasil diupdate!');
    }
    public function hapusmhs($id){
        $mahasiswa = Mahasiswa :: find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')->with('alert-danger', 'Data berhasil dihapus!');
    }
}
