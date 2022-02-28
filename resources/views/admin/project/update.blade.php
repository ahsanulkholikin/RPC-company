@extends('admin.layout.index')

@section('namePage', 'Project')

@section('content')

<!-- DIRECT CHAT -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><b>Edit Project</b></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="alert alert-warning"  role="alert">
                Note : Jika tidak ingin mengganti gambar silahkan kosongkan saja.
            </div>
        <form action="{{ route('projecttt.ngedit',$project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="exampleInputjudul1">Judul</label>
                <input type="judul" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputjudul1" aria-describedby="judulHelp" placeholder="Enter Title" value="{{ old('judul',$project->judul) }}">
                @error('judul')
                <div class="alert alert-danger mt-2 error invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputdesSingkat1">Deskripsi Singkat</label>
                <input type="text" name="desSingkat" class="form-control @error('desSingkat') is-invalid @enderror" id="exampleInputdesSingkat1" aria-describedby="desSingkatHelp" placeholder="Enter Text" value="{{ old('desSingkat',$project->desSingkat) }}">
                @error('desSingkat')
                <div class="alert alert-danger mt-2 error invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>


            <div class="form-group">
                <label for="exampleInputimg1">Img Thumbnail</label>
                <input type="file" name="img" class="form-control @error('img') is-invalid @enderror" id="exampleInputimg1" aria-describedby="imgHelp" placeholder="Enter Image">
                @error('img')
                <div class="alert alert-danger mt-2 error invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputdesFull1">Deskripsi Full</label>
                <input type="text" name="desFull" class="form-control @error('desFull') is-invalid @enderror" id="exampleInputdesFull1" aria-describedby="desFullHelp" placeholder="Enter Text" value="{{ old('desFull',$project->desFull) }}">
                @error('desFull')
                <div class="alert alert-danger mt-2 error invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            


            <button type="submit" class="btn btn-primary" style="width: 100%;"><i class="fa fa-save"></i> Simpan</button>
        </form>

    </div>
    <!-- /.card-body -->
    <div class="card-footer">
    </div>
    <!-- /.card-footer-->
</div>
<!--/.direct-chat -->


@endsection