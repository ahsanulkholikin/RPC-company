@extends('admin.layout.index')

@section('namePage', 'Project')

@section('content')

<!-- DIRECT CHAT -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title"><b>Project</b></h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <a href="{{route('project.create')}}" class="btn btn-success" title="Tambah">
                <i class="fas fa-plus"></i>
            </a>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table-data table table-border" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>img</th>
                        <th>judul</th>
                        <th>desSingkat</th>
                        <!-- <th>desFull</th> -->
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($project as $k)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$k->img}}</td>
                        <td>{{$k->judul}}</td>
                        <td>{{$k->desSingkat}}</td>
                        <!-- <td>{{$k->desFull}}</td> -->
                        <td>
                            <a href="{{route('project.update',$k->id)}}" class="btn btn-xs btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('project.destroy', $k->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-danger" title="Hapus"><i class="fas fa-trash"></i></button>
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