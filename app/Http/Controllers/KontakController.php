<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Models\Kontak;
use App\Models\Siswa;
use App\Models\Jns_siswa;
class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kontak::all();
        return view('admin.masterkontak', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Jns_siswa::all();
        $data1 = Siswa::all();
        return view('admin.addKontak', compact('data', 'data1'));
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
            'required' => ':atribut harus diisi dulu lur',
            'min' => ':atribut minimal :min karakter cak!',
            'max' => ':atribut maksimal :max karakter gaes',
            'numeric' => ':atribut harus pake nomer bang',
            'mimes' => ':atribut harus bertipe jpg,png,jpeg',
            'size' => 'file yang diupload maksimal :size'
        ];
        $this->validate($request,[
            'desc_kntk' => 'required',
            'id_siswa' => 'required',
            'id_jns' => 'required'
        ],$message);
        // insert db
        Kontak::create([
            'desc_kntk' => $request->desc_kntk,
            'id_siswa' => $request->id_siswa,
            'id_jns' => $request->id_jns
        ]);

        return redirect('/masterkontak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.showKontak');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.editKontak');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
