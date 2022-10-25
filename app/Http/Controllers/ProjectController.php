<?php

namespace App\Http\Controllers;
use App\Models\Project;
use File;
use App\Models\Siswa;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Project::all();
        $data1 = Siswa::all('id','nisn', 'nama');
        return view('admin.masterproject',compact('data','data1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Siswa::all();
        return view('admin.addProject', compact('data'));
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
            // 'max' => ':attribute maksimal :max karakter gaes',
            'numeric' => ':attribute harus pake nomer bang',
            'mimes' => ':attribute harus bertipe jpg,png,jpeg',
            'size' => 'file yang diupload maksimal :size'
        ];
        $this->validate($request,[
            'nama_prjt' => 'required|min:5',
            'desc_prjt' => 'required|min:5',
            'id_siswa' => 'required',
            'tgl' => 'required',
            'foto_prjt' => 'required|mimes:jpg,jpeg,png,gif,svg'
        ],$message);

        // ambil info yang di upload
        $file = $request->file('foto_prjt');

        // rename +ambil nama file
        $nama_file = time()."_".$file->getClientOriginalName();

        // upload
        $tujuan_upload = './template/img';
        $file->move($tujuan_upload,$nama_file);

        // insert db
        Project::create([
            'nama_prjt' => $request->nama_prjt,
            'id_siswa' => $request->id_siswa,
            'desc_prjt' => $request->desc_prjt,
            'tgl' => $request->tgl,
            'foto_prjt' => $nama_file
        ]);
        return redirect('/masterproject');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::find($id)->project()->get();
        return view('admin.showProject', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Project::find($id);
        return view('admin.editProject', compact('data'));
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
            'nama_prjt' => 'required|min:5',
            'desc_prjt' => 'required|min:5',
            'id_siswa' => 'required',
            'tgl' => 'required',
            'foto_prjt' => 'mimes:jpg,jpeg,png,gif,svg'
        ],$message);

        if($request->foto !=''){
        // dengan ganti foto
        $siswa = Project::find($id);
        file::delete('/template/img'.$siswa->foto);
        // ambil info yang di upload
        $file = $request->file('foto');
        // rename +ambil nama file
        $nama_file = time()."_".$file->getClientOriginalName();
        // upload
        $tujuan_upload = './template/img';
        $file->move($tujuan_upload,$nama_file);
        // save db
            $siswa->id_siswa=$request->id_siswa;
            $siswa->nama_prjt=$request->nama_prjt;
            $siswa->desc_prjt=$request->desc_prjt;
            $siswa->tgl=$request->tgl;
            $siswa->foto=$nama_file;
            $siswa->update();
            return redirect('/masterproject');
        }else{
            // tanpa ganti foto
            $siswa = Project::find($id);
            $siswa->id_siswa=$request->id_siswa;
            $siswa->nama_prjt=$request->nama_prjt;
            $siswa->desc_prjt=$request->desc_prjt;
            $siswa->tgl=$request->tgl;
            $siswa->save();
            return redirect('/masterproject');
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
        $data = Project::find($id)->delete();
        return redirect('/masterproject');
    }

    public function hapus($id)
    {
        $data = Project::find($id)->delete();
        return redirect('/masterproject');
    }


}
