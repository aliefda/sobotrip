@extends('layouts.app')

@section('title', 'Data Wisata')

@section('content')

<div class="container">
    <a href="/destinations/create" class="btn btn-primary mb-3">Tambah Data</a>
    
    @if($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table table-bordered table-hover table-stiped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Title 1</th>
                    <th>Description 1</th>
                    <th>Description 2</th>
                    <th>Maps</th>
                    <th>Gambar</th>
                    <th>Thumbnail 1</th>
                    <th>Thumbnail 2</th>
                    <th>Thumbnail 3</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1
                @endphp
                @foreach ($destinations as $destination)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$destination->title}}</td>
                    <td>{{$destination->title_1}}</td>
                    <td>{{$destination->description_1}}</td>
                    <td>{{$destination->description_2}}</td>
                    <td>{{$destination->maps_embed}}</td>
                    <td>
                        <img src="/image/{{$destination->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <img src="/image/{{$destination->thumbnail_1}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <img src="/image/{{$destination->thumbnail_2}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <img src="/image/{{$destination->thumbnail_3}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{route('destinations.edit', $destination->id)}}" class="btn btn-warning mb-1">Edit</a>
                        <form action="{{route('destinations.destroy', $destination->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection