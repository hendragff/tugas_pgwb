@extends('admin/mainAdmin',["elementActive" => "masterproject"])
@section('title', 'Master Project ')
@section('content-title', 'Master Project')
@section('hacked', 'by ur mom')
@section('content')
<a href="{{route('masterproject.create')}}" class="btn btn-success">+</a>
<div class="row">
    <div class="col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">Data Siswa</h6>
            </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <thead>
                                <th scope="col">No.</th>
                                <th scope="col">NISN</th>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Action</th>
                            </thead>
                            <tbody>
                                <?php //$i = 1; ?>
                                @foreach($data1 as $i => $item)
                                <tr>
                                    <th scope="row">{{++$i}}</th>
                                    <td scope="row">{{$item->nisn}}</td>
                                    <td scope="row">{{$item->nama}}</td>
                                    <td>
                                        <a href="" onclick="show({{$item->id}}, event)" class="btn btn-info btn-circle btn-sm"><i class="fas fa-folder-open"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </tr>
                    </table>
                </div>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary text-center">Data Project</h6>
            </div>
            <div class="card-body" id="project">
                <h6 class="text-center">Pilih Siswa Dulu</h6>
            </div>
        </div>
    </div>
</div>
<script>
    function show(id, e){
        e.preventDefault();
        $.get('masterproject/'+id, function(data){
            $('#project').html(data);
        })
    }
</script>
@endsection