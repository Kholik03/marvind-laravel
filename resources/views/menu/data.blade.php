@extends('main')

@section('title')


@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Menu</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li>
                        <a href="#">Menu</a>
                    </li>
                    <li class="active">Data</i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">
        
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <br><h2><center><strong>Daftar Menu</strong></h2></center>
                </div>
            <br>
            <div class="pull-right">
                <a href="{{ url('menus/add') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> Tambah
                </a>
            </div>
        </div>

        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Makanan</th>
                        <th>Keterangan</th>
                        <th><center>Pilihan</th>
                    </tr>
                    <tbody>
                        @foreach ($menus as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->desc }}</td>
                                <td class="text-center">
                                    <a href="{{ url('menus/edit/'.$item->id) }}" class="btn btn-primary btn-sm">
                                        <i class="ni ni-settings"></i>
                                    </a>
                                <form action="{{ url('menus/'.$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Hapus Menu Makanan?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>

        

    </div>

</div>
@endsection