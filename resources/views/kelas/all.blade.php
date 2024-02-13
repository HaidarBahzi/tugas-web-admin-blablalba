@extends('layouts.main')

@section('content')
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    <h1>List Kelas</h1>
    @auth
        <a type="button" class="btn btn-primary" href="/dashboard/kelas/create">Tambah</a>
        <table class="table mt-4 container">
            <tr>
                <th>ID</th>
                <th>Nama Kelas</th>
                <th>Action</th>
            </tr>
            @foreach ($kelas as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nama_kelas }}</td>
                    <td>
                        <a href="/kelas/edit/{{$item->id}}" class="btn btn-warning">Edit</a>
                        <form method="post" action="/kelas/delete/{{$item->id}}">
                            @method('DELETE')
                            @csrf
                            <button onclick="return confirm('Are you sure?')"
                                    class="btn btn-danger">Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @else
                <table class="table mt-4 container">
                    <tr>
                        <th>ID</th>
                        <th>Nama Kelas</th>
                    </tr>
                    @foreach ($kelas as $key => $item)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->nama_kelas }}</td>
                        </tr>
        @endforeach
    @endauth

@endsection
