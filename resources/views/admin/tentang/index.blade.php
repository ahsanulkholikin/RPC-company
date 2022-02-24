@extends('admin.layout.index')

@section('namePage', 'Tentang')

@section('content')

<!-- DIRECT CHAT -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><b>Tentang</b></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <div class="alert alert-warning"  role="alert">
                Note : Jika tidak ingin mengganti gambar silahkan kosongkan saja.
            </div>

            <form action="{{ route('tentang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="form-group">
                    <label for="exampleInputJudul">Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Judul" value="@if($tentang !== null) {{ old('judul',$tentang->judul) }} @else {{ old('judul') }} @endif">
                    @error('judul')
                    <div class="alert alert-danger mt-2 error invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputImage">Image</label>
                    <input type="file" name="img" class="form-control @error('img') is-invalid @enderror" id="exampleInputImage" aria-describedby="ImageHelp" placeholder="Enter Image">
                    @error('img')
                    <div class="alert alert-danger mt-2 error invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputDesc">Desc</label>
                    <input type="text" name="desc" class="form-control @error('desc') is-invalid @enderror" id="exampleInputDesc" aria-describedby="DescHelp" placeholder="Enter Desc" value="@if($tentang !== null) {{ old('desc',$tentang->desc) }} @else {{ old('desc') }} @endif">
                    @error('desc')
                    <div class="alert alert-danger mt-2 error invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <hr>
                <button type="submit" class="btn btn-primary" style="width: 100%;"><i class="fa fa-save"></i> Simpan</button>
            </form>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
    </div>
    <!-- /.card-footer-->
</div>
<!--/.direct-chat -->


@endsection