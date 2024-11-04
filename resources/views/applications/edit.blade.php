@extends('layouts.app')

@section('content')
    <h1>Edit Lamaran Pekerjaan</h1>
    <form action="{{ route('applications.update', $application->id) }}" method="POST">
        @csrf
        @method('PUT')

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
<!DOCTYPE html>
<html>
<head>
    <title>Edit Lamaran Pekerjaan</title>
</head>
<body>
    <h1>Edit Lamaran Pekerjaan</h1>

    <form action="{{ route('applications.update', $application->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="company_name">Perusahaan:</label>
        <input type="text" name="company_name" value="{{ $application->company_name }}" required>

        <label for="job_title">Posisi:</label>
        <input type="text" name="job_title" value="{{ $application->job_title }}" required>

        <label for="application_date">Tanggal Pengajuan:</label>
        <input type="date" name="application_date" value="{{ $application->application_date }}" required>

        <button type="submit">Perbarui</button>
    </form>

    <a href="{{ route('applications.index') }}">Kembali ke Daftar</a>
</body>
</html>
<form action="{{ route('applications.update', $application->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="applicant_name">Nama Pelamar:</label>
    <input type="text" name="applicant_name" value="{{ $application->applicant_name }}" required>

    <label for="company_name">Perusahaan:</label>
    <input type="text" name="company_name" value="{{ $application->company_name }}" required>

    <label for="job_title">Posisi:</label>
    <input type="text" name="job_title" value="{{ $application->job_title }}" required>

    <label for="application_date">Tanggal Pengajuan:</label>
    <input type="date" name="application_date" value="{{ $application->application_date }}" required>

    <button type="submit">Perbarui</button>
</form>
