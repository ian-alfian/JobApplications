@extends('layouts.app')

@section('content')
    <h1>Tambah Lamaran Pekerjaan</h1>

    <!-- Tambahkan style CSS langsung di dalam Blade -->
    <style>
        /* Menambahkan border pada form */
        form {
            border: 2px solid #007bff; /* Warna biru untuk border */
            padding: 20px;
            border-radius: 8px; /* Membuat sudut border sedikit melengkung */
            max-width: 600px;
            margin: 0 auto;
        }

        /* Memberikan jarak antar elemen input */
        form label, form input, form button {
            display: block;
            margin-bottom: 10px;
        }

        /* Memberikan border pada input */
        form input {
            width: 100%; /* Lebar input 100% agar mengikuti lebar form */
            padding: 8px;
            border: 1px solid #ccc; /* Border input */
            border-radius: 4px; /* Sudut input melengkung */
            box-sizing: border-box; /* Menjaga padding agar tidak menambah lebar input */
        }

        /* Memberikan border pada button */
        form button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #0056b3;
        }

        /* Styling link */
        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

    <!-- Form tambah lamaran pekerjaan -->
    <form action="{{ route('applications.store') }}" method="POST">
        @csrf

        <label for="applicant_name">Nama Pelamar:</label>
        <input type="text" name="applicant_name" required>

        <label for="company_name">Perusahaan:</label>
        <input type="text" name="company_name" required>

        <label for="job_title">Posisi:</label>
        <input type="text" name="job_title" required>

        <label for="application_date">Tanggal Pengajuan:</label>
        <input type="date" name="application_date" required>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('applications.index') }}">Kembali ke Daftar</a>
@endsection
