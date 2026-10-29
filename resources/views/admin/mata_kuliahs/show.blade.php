<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Detail Mata Kuliah</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Kode MK:</strong> {{ $mataKuliah->kode_mk }}</p>
            <p><strong>Nama Mata Kuliah:</strong> {{ $mataKuliah->nama_mk }}</p>
            <p><strong>SKS:</strong> {{ $mataKuliah->sks }}</p>
            <a href="{{ route('admin.mata-kuliahs.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</body>
</html>