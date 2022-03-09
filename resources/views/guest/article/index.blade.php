@extends('guest.layout.app')

@section('namePage', $project->judul)

@section('content')

    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>{{$project->judul}}</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-fluid mt-5 mb-3 img-full" src="{{ asset('images/project/'.$project->img) }}"
                        alt="{{$project->judul}}" >
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">

                    <h2 class="mb-3">Deskripsi Projek</h2>
                    <p>{!!$project->desFull!!}</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


@endsection