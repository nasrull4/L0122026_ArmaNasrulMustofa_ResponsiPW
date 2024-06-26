<!DOCTYPE html>
<html>
<head>
    <title>Detail Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Detail Pegawai</h2>
        <div class="card">
            <div class="card-body">
                <p class="card-text"><strong>Nama:</strong> {{ $pegawai->nama }}</p>
                <p class="card-text"><strong>Jabatan:</strong> {{ $pegawai->jabatan }}</p>
            </div>
        </div>
        <a href="{{ route('pegawai.index') }}" class="btn btn-primary mt-3">Kembali</a>
    </div>
</body>
</html>
