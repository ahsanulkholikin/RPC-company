@extends('admin.layout.index')

@section('namePage', 'Profle')

@section('content')

<!-- DIRECT CHAT -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Profile</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="container">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email" aria-describedby="exampleInputEmail1-error" aria-invalid="true" value="{{ old('email', $profile->email) }}">

                    @error('email')
                    <div class="alert alert-danger mt-2 error invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <!-- <span id="exampleInputEmail1-error" class="error invalid-feedback">Please enter a valid email address</span> -->
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="password" name="password" class="form-control form-control @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Enter Password" aria-describedby="exampleInputPassword-error" aria-invalid="true" value="">

                    @error('password')
                    <div class="alert alert-danger mt-2 error invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp; Simpan</button>
        </div>
        <!-- /.card-footer-->
    </form>
</div>
<!--/.direct-chat -->


@endsection