@extends('layouts.main')

@section('content')
    <h1>EDIT DATA STUDENT</h1>

    <form method="post" action="/dashboard/student/update/{{$students->id}}">
        @csrf


            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input type="text" required class="form-control" id="nis" name="nis"
                       value="{{ old('nis', $students->nis) }}"
                >
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" required class="form-control" id="nama" name="nama"
                       value="{{old('nama', $students->nama)}}"
                >
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" required class="form-control" id="alamat" name="alamat"
                       value="{{old('alamat', $students->alamat)}}"
                >
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <select name="kelas_id" class="form-select">
                    @foreach($kelas as $osas)
                        @if($osas->id == $students->kelas->id)
                            <option name="kelas_id" value="{{$osas->id}}" selected>{{$osas->nama_kelas}}</option>
                        @else
                            <option name="kelas_id" value="{{$osas->id}}">{{$osas->nama_kelas}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" required class="form-control" id="tgl_lahir" name="tgl_lahir"
                       value="{{old('tgl_lahir', $students->tgl_lahir)}}"
                ></div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
