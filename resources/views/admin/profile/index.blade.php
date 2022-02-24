@extends('admin.layout.index')

@section('namePage', 'Profile')

@section('content')

<!-- DIRECT CHAT -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><b>Profile</b></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <!-- <div class="alert alert-warning"  role="alert">
                Note : Jika tidak ingin mengganti gambar silahkan kosongkan saja.
            </div> -->



        

        <form action="{{ route('tentang.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputJudul">wa</label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Judul" value="">
                        @error('judul')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        walink
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Judul" value="">

                    </div>


                    
                    
                    

                    <div class="form-group">
                        <label for="exampleInputJudul">fb</label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Judul" value="">
                        @error('judul')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        fblink
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Judul" value="">
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="exampleInputJudul">ig</label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Judul" value="">
                        @error('judul')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        iglink
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Judul" value="">
                    </div>


                </div>


                <div class="col-lg-6">
                
        
        
                    <div class="form-group">
                        <label for="exampleInputJudul">email</label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Judul" value="">
                        @error('judul')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputJudul">telp</label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Judul" value="">
                        @error('judul')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    


                    <div class="form-group">
                        <label for="exampleInputJudul">alamat</label>
                        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Judul" value="">
                        @error('judul')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>
            </div>


            <hr>
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