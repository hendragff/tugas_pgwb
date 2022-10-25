@extends('admin/mainAdmin',["elementActive" => "masterproject"])
@section('title', 'Master Project ')
@section('content-title', 'Edit Master Project')
@section('hacked', 'by ur mom')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-wight-b$data text-primary">Data Siswa</h6>
            </div>
                <div class="card-body">
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('masterproject.update', ['masterproject' => $data->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="form-group">
                                <label for="id_siswa">ID Siswa</label>
                            <input type="number" class="form-control" id="id_siswa" name="id_siswa" value ="{{$data->id_siswa}}"required>
                            </div>
                            <div class="form-group">
                                <label for="nama_prjt">Nama Project</label>
                            <input type="text" class="form-control" id="nama_prjt" name="nama_prjt" value ="{{$data->nama_prjt}}"required>
                            </div>
                            <div class="form-group">
                            <label for="desc_prjt">Deskripsi Project</label>
                                <textarea class="form-control" id="desc_prjt" name="desc_prjt" required>{{$data->desc_prjt}} </textarea>
                            </div>
                            <div class="form-group">
                            <label for="tgl">Tanggal Project</label>
                                <input type="date" class="form-control" id="tgl" name="tgl" value ="{{$data->tgl}}"required>
                            </div>
                            <div class="form-group">  
                            <label for="foto_prjt">Foto</label>
                                <input type="file" class="form-control-file" id="foto_prjt" name="foto_prjt">
                                <img src="{{asset('/template/img/'.$data->foto_prjt)}}" alt="" class="img-thumbnail" width="300">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Add">
                                <a href="{{route('masterproject.index')}}" class="btn btn-danger">Batal</a>
                            </div>
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection