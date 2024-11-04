@extends('layouts.app')

@section('title', 'Edit Lamaran Pekerjaan')

@section('content')
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
@endsection
