@extends('main')

<title>Tambah Menu</title>


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
                    <li class="active">ADD</i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <br><h2><center><strong>Tambah Menu Makanan</strong></h2></center>
                </div>
            <br>
            <div class="pull-right">
                <a href="{{ url('menus') }}" class="btn btn-danger btn-sm">
                <i class="fa fa-undo"></i> Kembali
                </a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form action="{{ url('menus') }}" method="POST">
                    @csrf
                    <div class="from-group">
                        <label>Nama Makanan</label>
                        <input type="text" name="name" class="form-control" autofocus required >
                    </div>

                    <div class="from-group">
                        <label>Keterangan</label>
                        <textarea name="desc" class="form-control" required></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection