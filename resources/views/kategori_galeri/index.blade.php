@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Kategori Galeri</div>
                <div class="card-body">

                    <div class="card-body">
                        <div class="row justify-content-right">
                            <a href="{!! route('kategori_galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                             <a href="{!! route('kategori_berita.trash') !!}" class="btn btn-danger">Trash</a>

                        </div>
                    </div>

                <table class="table table-bordered">
                    <thead class="bg-warning">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User Id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Update</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $KategoriGaleri as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s')!!}</td>
                        <td>{!! $item->updated_at->format('d/m/Y H:i:s')!!}</td>
                        <td>
                         <a href="{!! route('kategori_galeri.show',[$item->id]) !!}" class="btn btn-sm btn-primary">
                         Lihat</a>

                         <a href="{!! route('kategori_galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">
                         Edit</a>

                         {!! Form::open(['route' => ['kategori_galeri.destroy', $item->id],'method'=>'delete']); !!}

                         {!! Form::submit('Hapus', ['class'=>'btn btn-sm btn-danger','onclick'=>"return confirm('Apakah anda yakin menghapus data ini ?')"]); !!}

                         {!! Form::close() !!}

                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection