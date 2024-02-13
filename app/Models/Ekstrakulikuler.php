<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakulikuler{
    private static $ekstraList = [
        [
            "id" => 1,
            "nama" => "ROHIS",
            "nama_pembina" => "Bpk. Sarwo Edi",
            "deskripsi" => "Organisasi untuk membina murid agar lebih dekat dengan agama Islam"
        ],
        [
            "id" => 2,
            "nama" => "Rebana",
            "nama_pembina" => "Bpk. Ihsan",
            "deskripsi" => "Organisasi untuk membina murid agar bisa main rebana"
        ],[
            "id" => 3,
            "nama" => "OSIS",
            "nama_pembina" => "Ibu Widi",
            "deskripsi" => "Organisasi untuk membina murid agar bisa ngurus sekolah"
        ],[
            "id" => 4,
            "nama" => "RUS Esport",
            "nama_pembina" => "UNKNOWN",
            "deskripsi" => "Organisasi untuk membina murid agar bisa main game"
        ],[
            "id" => 5,
            "nama" => "MPK",
            "nama_pembina" => "UNKNOWN",
            "deskripsi" => "Ndak tau, mungkin budak sekolah"
        ],
    ];

    public static function all() {
        return self::$ekstraList;
    }
}
