@extends('layouts.main')

@section('content')
    <h1>EDIT DATA STUDENT</h1>

    <form method="post" action="/dashboard/kelas/update/{{$kelas->id}}">
        @csrf

        <div class="mb-3">
            <label for="nama_kelas" class="form-label">NAMA Kelas</label>
            <input type="text" required class="form-control" id="nama_kelas" name="nama_kelas"
                   value="{{old('nama_kelas', $kelas->nama_kelas)}}"
            ></div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
