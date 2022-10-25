@if($data -> isEmpty())
    <h6 class="text-center">Siswa Belumm Memiliki Project</h6>
@else
@foreach($data as $item)
    <div class="card">
        <div class="card-header">
            {{$item->nama_prjt}}
        </div>
        <div class="card-body">
            <h5>Tanggal Project</h5>
            {{$item->tgl}}
            <h5>Deskripsi Project</h5>
            {{$item->desc_prjt}}
        </div>
        <div class="card-footer">
            <a href="{{route('masterproject.hapus', $item->id)}}" class="btn btn-danger btn-circle btn-sm"><i class="fas fa-trash"></i></a>
            <a href="{{route('masterproject.edit', $item->id)}}" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a>
        </div>
    </div>
    @endforeach
@endif