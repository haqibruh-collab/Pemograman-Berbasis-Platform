<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
    return "Daftar seluruh mahasiswa";
    }
    public function show(string $id)
    {
    return "Detail mahasiswa dengan id: $id";
    }
    public function store()
    {
    return "Menyimpan data mahasiswa baru";
    }
}