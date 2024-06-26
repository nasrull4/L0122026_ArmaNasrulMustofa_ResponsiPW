<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Pegawai</h2>
        <form action="{{ route('pegawai.update', ['id' => $pegawai->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama }}" required>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $pegawai->jabatan }}" required>
            </div>
            <button type="submit" class="btn btn-primary"style="margin-top: 10px;">Simpan</button>
        </form>
        <a href="{{ route('pegawai.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>
