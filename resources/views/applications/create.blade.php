
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Lamaran Pekerjaan</title>
</head>
<body>
    <h1>Tambah Lamaran Pekerjaan</h1>

    <form action="{{ route('applications.store') }}" method="POST">
        @csrf
        <label for="company_name">Perusahaan:</label>
        <input type="text" name="company_name" required>

        <label for="job_title">Posisi:</label>
        <input type="text" name="job_title" required>

        <label for="application_date">Tanggal Pengajuan:</label>
        <input type="date" name="application_date" required>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('applications.index') }}">Kembali ke Daftar</a>
</body>
</html>
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
