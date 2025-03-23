<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .header-info {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
            font-size: 12px;
        }
        th {
            background-color: #f2f2f2;
        }
        .footer {
            margin-top: 30px;
            text-align: right;
            font-size: 12px;
        }
        .period {
            margin-bottom: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    
    <div class="period">
        @if ($start_date && $end_date)
            Periode: {{ Carbon\Carbon::parse($start_date)->format('d/m/Y') }} - {{ Carbon\Carbon::parse($end_date)->format('d/m/Y') }}
        @else
            Periode: Semua Waktu
        @endif
    </div>
    
    <table>
        <thead>
            <tr>
                <th style="width: 5%;">No</th>
                <th>Nama Karyawan</th>
                <th>Judul Pekerjaan</th>
                <th>Pekerjaan dimulai</th>
                <th>Pekerjaan selesai</th>
                <th style="width: 15%;">Penyelesaian</th>
                <th>Lokasi</th>
                <th>Blok</th>
                <th>Deskripsi Tugas</th>
                <th>Status Pekerjaan</th>
                <!-- tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            @forelse ($laporan as $index => $task)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $task->user->name }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
                <td>{{ round($task->created_at->diffInDays($task->updated_at), 1) }} hari</td>
                <td>{{ $task->department }}</td>
                <td>{{ $task->blok }}</td>
                <td>{{ $task->description }}</td>
                <td> {{ $task->task_status }}</td>
                
            </tr>
            @empty
            <tr>
                <td colspan="3" style="text-align: center;">Tidak ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    
    <div class="footer">
        <p>Dicetak pada: {{ Carbon\Carbon::createFromFormat('d/m/y H:i:s', $tanggal_cetak)->format('d/m/Y') }}</p>
    </div>
</body>
</html>