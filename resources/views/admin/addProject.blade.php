@extends('admin/mainAdmin',["elementActive" => "masterproject"])
@section('title', 'Master Project ')
@section('content-title', 'Add Master Project')
@section('hacked', 'by ur mom')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-wight-bold text-primary">Data Siswa</h6>
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
                    <form action="{{route('masterproject.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                                <label for="id_siswa">Siswa</label>
                                <select type="multiple" class="form-control form-select" id="id_siswa" name="id_siswa" required>
                                @foreach($data as $item )
                                    <option value="{{$item->id}}" selected>{{$item->nama}}</option>
                                @endforeach
                                </select>
                            <div class="form-group">
                                <label for="nama_prjt">Nama Project</label>
                            <input type="text" class="form-control" id="nama_prjt" name="nama_prjt" value ="{{old('nama_prjt')}}"required>
                            </div>
                            <div class="form-group">
                            <label for="desc_prjt">Deskripsi Project</label>
                                <textarea class="form-control" id="desc_prjt" name="desc_prjt" required>{{old('desc_prjt')}} </textarea>
                            </div>
                            <div class="form-group">
                            <label for="tgl">Tanggal Project</label>
                                <input type="date" class="form-control" id="tgl" name="tgl" value ="{{old('tgl')}}"required>
                            </div>
                            <div class="form-group">
                            <label for="foto_prjt">Foto</label>
                                <input type="file" class="form-control-file" id="foto_prjt" name="foto_prjt" value="{{old('foto_prjt')}}" required>
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