@extends('admin.layout.index')

@section('namePage', 'Dashboard')

@section('content')

<!-- DIRECT CHAT -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Selamat datang admin <b>RPC-Karya : {{Auth::user()->email}}</b></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">


    </div>
    <!-- /.card-body -->
    <div class="card-footer">
    </div>
    <!-- /.card-footer-->
</div>
<!--/.direct-chat -->


@endsection