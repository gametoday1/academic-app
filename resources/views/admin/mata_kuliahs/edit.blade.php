<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h2>Edit Mata Kuliah</h2>
    <form action="{{ route('admin.mata-kuliahs.update', $mataKuliah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Kode MK</label>
            <input type="text" name="kode_mk" class="form-control" value="{{ old('kode_mk', $mataKuliah->kode_mk) }}" required>
        </div>
        <div class="mb-3">
            <label>Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" class="form-control" value="{{ old('nama_mk', $mataKuliah->nama_mk) }}" required>
        </div>
        <div class="mb-3">
            <label>SKS</label>
            <input type="number" name="sks" class="form-control" value="{{ old('sks', $mataKuliah->sks) }}" min="1" max="6" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.mata-kuliahs.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>