<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Lamaran Pekerjaan</title>
    <style>
        /* Style untuk tabel */
        table {
            width: 100%;
            border-collapse: collapse; /* Menggabungkan border antara sel tabel */
            margin-top: 20px;
        }

        /* Style untuk header tabel */
        th {
            padding: 10px;
            background-color: #f2f2f2;
            border: 1px solid #ddd; /* Border untuk header */
            text-align: left;
        }

        /* Style untuk sel tabel */
        td {
            padding: 10px;
            border: 1px solid #ddd; /* Border untuk sel */
            text-align: left;
        }

        /* Style untuk baris tabel ganjil (untuk pembeda visual) */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Style untuk baris tabel saat hover (untuk interaktivitas) */
        tr:hover {
            background-color: #f1f1f1;
        }

        /* Tombol Edit dan Hapus */
        a, button {
            text-decoration: none;
            padding: 5px 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
            background-color: #4CAF50;
            color: white;
        }

        a:hover, button:hover {
            background-color: #45a049;
        }

        /* Style untuk link "Tambah Lamaran Baru" */
        a.tambah-lamaran {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #008CBA;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        a.tambah-lamaran:hover {
            background-color: #007b9e;
        }

        /* Styling untuk status */
        .status {
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .status.diterima {
            background-color: #4CAF50;
            color: white;
        }

        .status.ditolak {
            background-color: #f44336;
            color: white;
        }

        .status.menunggu {
            background-color: #ff9800;
            color: white;
        }

        .status.proses {
            background-color: #2196F3;
            color: white;
        }
    </style>
</head>
<body>

    <h1>Daftar Lamaran Pekerjaan</h1>

    <!-- Menampilkan pesan sukses jika ada -->
    @if (session('success'))
        <div style="color: green; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tabel yang benar -->
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
                <td>
                    <!-- Menampilkan status dengan warna sesuai kondisi -->
                    <span class="status {{ strtolower($application->status) }}">
                        {{ $application->status }}
                    </span>
                </td>
                <td>
                    <a href="{{ route('applications.edit', $application->id) }}">Edit</a>
                    <form action="{{ route('applications.destroy', $application->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin?');" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('applications.create') }}" class="tambah-lamaran">Tambah Lamaran Baru</a>

</body>
</html>
