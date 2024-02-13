@extends('layouts.main')

@section('content')
    <h1>NEW KELAS</h1>

    <form method="post" action="/dashboard/kelas/add">
        @csrf
        <div class="mb-3">
            <label for="nama_kelas" class="form-label">NAMA KELAS</label>
            <input type="text" required class="form-control" id="nama_kelas" name="nama_kelas"
                   value="{{ old('nama_kelas') }}"
            >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
