<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function confirmDeletion(event) {
            event.preventDefault();
            var form = event.target.form;
            var confirmation = confirm('Apakah Anda yakin ingin menghapus pegawai ini?');
            if (confirmation) {
                form.submit();
            }
        }
    </script>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Daftar Pegawai</h2>
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawai as $pgw)
                    <tr>
                        <td>{{ $pgw->nama }}</td>
                        <td>{{ $pgw->jabatan }}</td>
                        <td>
                            <a href="{{ route('pegawai.show', $pgw->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('pegawai.edit', $pgw->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('pegawai.destroy', $pgw->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="confirmDeletion(event)">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
