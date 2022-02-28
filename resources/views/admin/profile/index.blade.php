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



        

        <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputJudul">Whatsapp</label>
                        <input type="text" name="wa" class="form-control @error('wa') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter No Whatsapp" value="@if($profile !== null){{ old('wa',$profile->wa) }}@else{{ old('wa') }}@endif">
                        @error('wa')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        Whatsapp Link
                        <input type="text" name="walink" class="form-control @error('walink') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Link Whatsapp" value="@if($profile !== null){{ old('walink',$profile->walink) }}@else{{ old('walink') }}@endif">
                        @error('walink')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>


                    
                    
                    

                    <div class="form-group">
                        <label for="exampleInputJudul">Facebook</label>
                        <input type="text" name="fb" class="form-control @error('fb') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Facebook" value="@if($profile !== null){{ old('fb',$profile->fb) }}@else{{ old('fb') }}@endif">
                        @error('fb')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        Facebook Link
                        <input type="text" name="fblink" class="form-control @error('fblink') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Link Facebook" value="@if($profile !== null){{ old('fblink',$profile->fblink) }}@else{{ old('fblink') }}@endif">

                        @error('fblink')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="exampleInputJudul">Instagram</label>
                        <input type="text" name="ig" class="form-control @error('ig') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Instagram" value="@if($profile !== null){{ old('ig',$profile->ig) }}@else{{ old('ig') }}@endif">
                        @error('ig')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                        Instagram Link
                        <input type="text" name="iglink" class="form-control @error('iglink') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Link Instagram" value="@if($profile !== null){{ old('iglink',$profile->iglink) }}@else{{ old('iglink') }}@endif">
                        @error('iglink')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                </div>


                <div class="col-lg-6">
                
        
        
                    <div class="form-group">
                        <label for="exampleInputJudul">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Email" value="@if($profile !== null){{ old('email',$profile->email) }}@else{{ old('email') }}@endif">
                        @error('email')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputJudul">Telp</label>
                        <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter No Telp" value="@if($profile !== null){{ old('telp',$profile->telp) }}@else{{ old('telp') }}@endif">
                        @error('telp')
                        <div class="alert alert-danger mt-2 error invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    


                    <div class="form-group">
                        <label for="exampleInputJudul">Alamat</label>
                        <textarea rows="5" name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="exampleInputJudul" aria-describedby="JudulHelp" placeholder="Enter Alamat">
                        @if($profile !== null){{ old('alamat',$profile->alamat) }}@else{{ old('alamat') }}@endif
                        </textarea>
                        @error('alamat')
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