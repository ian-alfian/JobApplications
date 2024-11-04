<!DOCTYPE html>
<html>
<head>
    <title>Daftar Lamaran Pekerjaan</title>
</head>
<body>
    <h1>Daftar Lamaran Pekerjaan</h1>
    <table>
        <thead>
            <tr>
                <th>Perusahaan</th>
                <th>Posisi</th>
                <th>Tanggal Pengajuan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $application->company_name }}</td>
                    <td>{{ $application->job_title }}</td>
                    <td>{{ $application->application_date }}</td>
                    <td>{{ $application->status }}</td> <!-- Tambahkan jika ada status -->
                    <td>
                        <a href="{{ route('applications.edit', $application->id) }}">Edit</a>
                        <form action="{{ route('applications.destroy', $application->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('applications.create') }}">Tambah Lamaran Baru</a>
</body>
</html>
<table>
    <thead>
        <tr>
            <th>Nama Pelamar</th>
            <th>Perusahaan</th>
            <th>Posisi</th>
            <th>Tanggal Pengajuan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($applications as $application)
        <tr>
            <td>{{ $application->applicant_name }}</td>
            <td>{{ $application->company_name }}</td>
            <td>{{ $application->job_title }}</td>
            <td>{{ $application->application_date }}</td>
            <td>{{ $application->status }}</td>
            <td>
                <a href="{{ route('applications.edit', $application->id) }}">Edit</a>
                <form action="{{ route('applications.destroy', $application->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
