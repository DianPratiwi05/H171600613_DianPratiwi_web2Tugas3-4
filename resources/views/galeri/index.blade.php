@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Galeri</div>
                <div class="card-body">

                    <div class="card-body">
                        <div class="row justify-content-right">
                            <a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                            <a href="{!! route('galeri.trash') !!}" class="btn btn-danger">Trash</a>
                        </div>
                    </div>

                <table class="table table-bordered">
                    <thead class="bg-warning">
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Path</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Users Id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Update</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $Galeri as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->katerangan !!}</td>
                        <td>{!! $item->path !!}</td>
                        <td>{!! $item->kategori_galeri_id !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                        <td>{!! $item->updated_at->format('d/m/Y H:i:s')!!}</td>
                        
                        <td>
                         <a href="{!! route('galeri.show',[$item->id]) !!}"class="btn btn-primary">Lihat</a>

                         <a href="{!! route('galeri.edit',[$item->id]) !!}" class="btn btn-sm btn-warning">
                         Edit</a>

                         {!! Form::open(['route' => ['galeri.destroy', $item->id],'method'=>'delete']); !!}

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