@extends('admin/mainAdmin',["elementActive" => "mastersiswa"])
@section('title', 'Master Siswa')
@section('content-title', 'Show Master Siswa')
@section('hacked', 'by ur siswa')
@section('content')
<div class="row">
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-body text-center">
                <img src="{{asset('/template/img/'.$data->foto)}}" alt="" class="rounded-circle img-thumbnail">
                <h3 class=""><strong>{{$data->nama}}</strong></h3>
                <h5 class="">{{$data->nisn}}</h5>
                <h5 class="">{{$data->alamat}}</h5>
                <h5 class="">{{$data->email}}</h5>
            </div>
        </div>   
    
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus"></i> Kontak Siswa</h6>
            </div>
            <div class="card-body">
                @foreach ($data1 as $kntk)
                <a href="{{$kntk->desc_kntk}}">
                    {{$kntk->jenis->jenis}}<br>   
                </a>
                @endforeach
            </div>
        </div>   
    </div>
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-quote-left"></i> About Siswa</h6>
            </div>
            <div class="card-body">
                <blockquote class="blockquote text-center">
                <p class="mb-0">{{$data->about}}</p>
            </blockquote>  
            </div>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-"></i> Project Siswa</h6>
            </div>
            <div class="card-body">
            @foreach ($data2 as $project)
                <a href="{{$project->nama_prjt}}">
                    {{$project->desc_prjt}}
                </a>
                <img src="{{asset('/template/img/'.$project->foto_prjt)}}" alt="">
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
