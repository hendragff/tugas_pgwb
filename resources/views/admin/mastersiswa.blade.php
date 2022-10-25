@extends('admin/mainAdmin',["elementActive" => "mastersiswa"])
@section('title', 'Master Siswa')
@section('content-title', 'Master Siswa')
@section('hacked', 'by ur siswa')
@section('content')
<a href="{{route('mastersiswa.create')}}" class="btn btn-success">+</a>
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-wight-bold text-primary">Data Siswa</h6>
            </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <thead>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Jenis Kelamin</th>
                                <!-- <th scope="col">Alamat</th> -->
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </thead>
                            <tbody>
                                <?php //$i = 1; ?>
                                @foreach($data as $i => $item)
                                <tr>
                                    <th scope="row">{{++$i}}</th>
                                    <td scope="row">{{$item->nama}}</td>
                                    <td scope="row">{{$item->jk}}</td>
                                    <!-- <td scope="row">{{$item->alamat}}</td> -->
                                    <td scope="row">{{$item->email}}</td>
                                    <td>
                                        <a href="{{route('mastersiswa.show', $item->id)}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                                        <a href="{{route('mastersiswa.edit', $item->id)}}" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="{{route('mastersiswa.hapus', $item->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </tr>
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection