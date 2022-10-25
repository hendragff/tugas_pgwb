@extends('admin/mainAdmin',["elementActive" => "mastersiswa"])
@section('title', 'Master Siswa')
@section('content-title', 'Add Master Siswa')
@section('hacked', 'by ur siswa')
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
                    <form action="{{route('mastersiswa.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn" value ="{{old('nisn')}}">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value ="{{old('nama')}}">
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select type="multiple" class="form-control form-select" id="jk" name="jk" value ="{{old('jk')}}"required>
                                    <option value="Laki-Laki" selected>Laki-Laki</option>
                                    <option value="Perempuan" selected>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value ="{{old('alamat')}}" required>
                            </div>
                            <div class="form-group">
                            <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value ="{{old('email')}}"required>
                            </div>
                            <div class="form-group">
                            <label for="about">About</label>
                                <input type="textfield" class="form-control" id="about" name="about" value ="{{old('about')}}" required>
                            </div>
                            <div class="form-group">
                            <label for="foto">Foto</label>
                                <input type="file" class="form-control-file" id="foto" name="foto" value="{{old('foto')}}" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Add">
                                <a href="{{route('mastersiswa.index')}}" class="btn btn-danger">Batal</a>
                            </div>
                    </form>
                </div>
        </div>
    </div>
</div>

@endSection