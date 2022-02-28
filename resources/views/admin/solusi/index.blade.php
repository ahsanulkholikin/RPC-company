@extends('admin.layout.index')

@section('namePage', 'solusi')

@section('content')

<!-- DIRECT CHAT -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><b>solusi</b></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <div class="alert alert-warning" role="alert">
                Note : Jika tidak ingin mengganti gambar silahkan kosongkan saja.
            </div>

            <form action="{{ route('solusi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="form-group">
                    <label for="exampleInputJudul">Judul</label>
                    <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Judul" value="@if($solusi !== null){{ old('judul',$solusi->judul) }}@else{{ old('judul') }}@endif">
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
                    <label for="exampleInputDesc">Deskripsi</label>
                    <textarea name="desc" class="summer-data @error('desc') is-invalid @enderror" id="exampleInputDesc" aria-describedby="DescHelp" placeholder="Enter Desc" >
                    @if($solusi !== null){{ old('desc',$solusi->desc) }}@else{{ old('desc') }}@endif
                    </textarea>
                    @error('desc')
                    <div class="alert alert-danger mt-2 error invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                
                <hr>
                <hr>

                <div class="form-group">
                    <label for="exampleInputJudul">Judul Strategi</label>
                    <input type="text" name="judulStrategi" class="form-control @error('judulStrategi') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Judul Strategi" value="@if($solusi !== null){{ old('judulStrategi',$solusi->judulStrategi) }}@else{{ old('judulStrategi') }}@endif">
                    @error('judulStrategi')
                    <div class="alert alert-danger mt-2 error invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="exampleInputImage">Image Strategi</label>
                    <input type="file" name="imgStrategi" class="form-control @error('imgStrategi') is-invalid @enderror" id="exampleInputImage" aria-describedby="ImageHelp" placeholder="Enter Image">
                    @error('imgStrategi')
                    <div class="alert alert-danger mt-2 error invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputstrategi">Deskripsi Strategi</label>
                    <textarea name="strategi" class="summer-data @error('strategi') is-invalid @enderror" id="exampleInputstrategi" aria-describedby="strategiHelp" placeholder="Enter strategi" >
                    @if($solusi !== null){{ old('strategi',$solusi->strategi) }}@else{{ old('strategi') }}@endif
                    </textarea>
                    @error('strategi')
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