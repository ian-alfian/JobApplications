@extends('layouts.app')

@section('content')
    <h1>Edit Lamaran Pekerjaan</h1>

    <!-- Menampilkan pesan kesalahan jika ada -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form Edit Lamaran Pekerjaan -->
    <form action="{{ route('applications.update', $application->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Pastikan kita menggunakan method PUT untuk update -->

        <label for="applicant_name">Nama Pelamar:</label>
        <input type="text" name="applicant_name" value="{{ old('applicant_name', $application->applicant_name) }}" required>
        <br>

        <label for="company_name">Perusahaan:</label>
        <input type="text" name="company_name" value="{{ old('company_name', $application->company_name) }}" required>
        <br>

        <label for="job_title">Posisi:</label>
        <input type="text" name="job_title" value="{{ old('job_title', $application->job_title) }}" required>
        <br>

        <label for="application_date">Tanggal Pengajuan:</label>
        <input type="date" name="application_date" value="{{ old('application_date', $application->application_date) }}" required>
        <br>

        <button type="submit">Simpan Perubahan</button>
    </form>
@endsection
