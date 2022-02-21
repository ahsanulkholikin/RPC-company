@extends('admin.layout.index')

@section('namePage', 'Kontak')

@section('content')

<!-- DIRECT CHAT -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><b>Kontak</b></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="{{ route('kontak.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" name="name" class="form-control @error('Name') is-invalid @enderror" id="exampleInputName1" aria-describedby="NameHelp" placeholder="Enter Name">
                @error('name')
                <div class="alert alert-danger mt-2 error invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control @error('Email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="EmailHelp" placeholder="Enter Email">
                @error('email')
                <div class="alert alert-danger mt-2 error invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleInputsubject1">Subject</label>
                <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" id="exampleInputsubject1" aria-describedby="subjectHelp" placeholder="Enter Subject">
                @error('subject')
                <div class="alert alert-danger mt-2 error invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>


            <div class="form-group">
                <label for="exampleInputmessages1">Messages</label>
                <textarea rows="5" name="message" class="form-control @error('messages') is-invalid @enderror" id="exampleInputmessages1" aria-describedby="messagesHelp" placeholder="Enter Messages"> </textarea>
                @error('messages')
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