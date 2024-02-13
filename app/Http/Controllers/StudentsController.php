<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Models\Student;
use function Laravel\Prompts\alert;

class StudentsController extends Controller
{
    public function index()
    {
        return view('student.all', [
            "title" => "Student",
            "students" => Student::all()
        ]);
    }

    public function create()
    {
        return view('student.create', [
            "title" => "New Student",
            "kelas" => Kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $result = Student::create($validateData);

        if ($result) {
            return redirect('/dashboard/student/all')->with('success', 'Data siswa berhasil ditambahkan!');
        } else {
            return redirect('/dashboard/student/all')->with('error', 'Gagal membuat data siswa. Silakan coba lagi.');
        }
    }

    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('/student/all');
    }

    public function edit(Student $id)
    {
        return view('student.edit'
            , [
                "title" => "Edit Student",
                "students" => $id,
                "kelas" => Kelas::all()
            ]);
    }

    public function update(Request $request, Student $id)
    {
        $validateData = $request->validate([
            'nis' => 'required|max:255',
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'kelas_id' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $result = Student::where('id', $id->id)->update($validateData);

        if ($result) {
            return redirect('/dashboard/student/all')->with('success', 'Data siswa berhasil ditambahkan!');
        } else {
            return redirect('/dashboard/student/all')->with('error', 'Gagal mengupdate data siswa. Silakan coba lagi.');
        }
    }
}

