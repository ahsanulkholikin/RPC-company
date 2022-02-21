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
        <div class="table-responsive">
            <table class="table-data table table-border" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Messages</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kontak as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$k->name}}</td>
                        <td><a href="mailto:{{$k->email}}">{{$k->email}}</a></td>
                        <td>{{$k->subject}}</td>
                        <td>{{$k->message}}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kontak.destroy', $k->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                            </form>
                            <!-- <button class="btn btn-xs btn-danger"> <i class="fa fa-trash"></i></button> -->
                        </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Data Blog belum Tersedia.
                    </div>
                    @endforelse

                </tbody>

            </table>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
    </div>
    <!-- /.card-footer-->
</div>
<!--/.direct-chat -->


@endsection