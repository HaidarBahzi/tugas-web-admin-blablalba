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

    <h1>Ini halaman student</h1>

    @auth
        <a type="button" class="btn btn-primary" href="/student/create">Tambah</a>
        <table class="table mt-4 container">
            <tr>
                <th>ID</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Action</th>
            </tr>
            @foreach ($students as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kelas->nama_kelas }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                    <td>
                        <button type="button"
                                class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal{{ $item->id }}">Detail Modal
                        </button>
                        <a href="/dashboard/student/edit/{{$item->id}}" class="btn btn-warning">Edit</a>
                        <form method="post" action="/dashboard/student/delete/{{$item->id}}">
                            @method('DELETE')
                            @csrf
                            <button onclick="return confirm('Are you sure?')"
                                    class="btn btn-danger">Delete
                            </button>
                        </form>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit data Student</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nis" class="form-label">NIS</label>
                                    <input type="text" class="form-control" id="nis" name="nis"
                                           value="{{ $item->nis }}">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                           value="{{ $item->nama }}">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                           value="{{ $item->alamat }}">
                                </div>
                                <div class="mb-3">
                                    <label for="kelas" class="form-label">Kelas</label>
                                    <input type="text" class="form-control" id="kelas" name="kelas"
                                           value="{{ $item->kelas->nama_kelas }}">
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                           value="{{ $item->tgl_lahir }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </table>
    @else
        <table class="table mt-4 container">
            <tr>
                <th>ID</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
            </tr>
            @foreach ($students as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->kelas->nama_kelas }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit data Student</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nis" class="form-label">NIS</label>
                                    <input type="text" class="form-control" id="nis" name="nis"
                                           value="{{ $item->nis }}">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                           value="{{ $item->nama }}">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                           value="{{ $item->alamat }}">
                                </div>
                                <div class="mb-3">
                                    <label for="kelas" class="form-label">Kelas</label>
                                    <input type="text" class="form-control" id="kelas" name="kelas"
                                           value="{{ $item->kelas->nama_kelas }}">
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                           value="{{ $item->tgl_lahir }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </table>
    @endauth

@endsection
