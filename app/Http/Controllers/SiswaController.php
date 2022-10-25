<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use File;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::all();
        return view('admin.mastersiswa',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addSiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message =[
            'required' => ':attribute harus diisi dulu lur',
            'min' => ':attribute minimal :min karakter cak!',
            'max' => ':attribute maksimal :max karakter gaes',
            'numeric' => ':attribute harus pake nomer bang',
            'mimes' => ':attribute harus bertipe jpg,png,jpeg',
            'size' => 'file yang diupload maksimal :size'
        ];
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'jk' => 'required',
            'email' => 'required',
            'nisn' => 'required|numeric|digits_between:6,12',
            'alamat' => 'required|min:5',
            'about' => 'required||min:50',
            'foto' => 'required|mimes:jpg,jpeg,png,gif,svg'
        ],$message);

        // ambil info yang di upload
        $file = $request->file('foto');

        // rename +ambil nama file
        $nama_file = time()."_".$file->getClientOriginalName();

        // upload
        $tujuan_upload = './template/img';
        $file->move($tujuan_upload,$nama_file);

        // insert db
        Siswa::create([
            'nama' => $request->nama,
            'jk' => $request->jk,
            'email' => $request->email,
            'nisn' => $request->nisn,
            'alamat' => $request->alamat,
            'about' => $request->about,
            'foto' => $nama_file
        ]);

        return redirect('/mastersiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $data = Siswa::find($id);
        $data1 = Siswa::find($id)->kontak;
        $data2 = Siswa::find($id)->project;
        return view('admin.showSiswa', compact('data','data1','data2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::find($id);
        return view('admin.editSiswa', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message =[
            'required' => ':attribute harus diisi dulu lur',
            'min' => ':attribute minimal :min karakter cak!',
            'max' => ':attribute maksimal :max karakter gaes',
            'numeric' => ':attribute harus pake nomer bang',
            'mimes' => ':attribute harus bertipe jpg,png,jpeg',
            'size' => 'file yang diupload maksimal :size'
        ];
        // $data = Siswa::find($id);
        // return view('admin.editSiswa',compact('data'));
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'jk' => 'required',
            'email' => 'required',
            'nisn' => 'required|numeric|digits_between:6,12',
            'alamat' => 'required|min:5',
            'about' => 'required||min:50',
            'foto' => 'mimes:jpg,jpeg,png,gif,svg'
        ],$message);

        if($request->foto !=''){
        // dengan ganti foto
        $siswa = Siswa::find($id);
        file::delete('/template/img'.$siswa->foto);
        // ambil info yang di upload
        $file = $request->file('foto');
        // rename +ambil nama file
        $nama_file = time()."_".$file->getClientOriginalName();
        // upload
        $tujuan_upload = './template/img';
        $file->move($tujuan_upload,$nama_file);
        // save db
            $siswa->nama=$request->nama;
            $siswa->nisn=$request->nisn;
            $siswa->jk=$request->jk;
            $siswa->alamat=$request->alamat;
            $siswa->email=$request->email;
            $siswa->about=$request->about;
            $siswa->foto=$nama_file;
            $siswa->update();
            return redirect('/mastersiswa');
        }else{
            // tanpa ganti foto
            $siswa = Siswa::find($id);
            $siswa->nama=$request->nama;
            $siswa->nisn=$request->nisn;
            $siswa->jk=$request->jk;
            $siswa->alamat=$request->alamat;
            $siswa->email=$request->email;
            $siswa->about=$request->about;
            $siswa->save();
            return redirect('/mastersiswa');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Siswa::find($id)->delete();
        return redirect('/mastersiswa');
    }

    public function hapus($id)
    {
        $data = Siswa::find($id)->delete();
        return redirect('/mastersiswa');
    }

}
