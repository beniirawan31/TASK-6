@extends('layouts.main')
@section('title', '| Add Data')
@section('content')
    <h1>Ini adalah halaman add data</h1>
    <body>
    <form action="siswa" method="POST">
      @csrf
      <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control" id="nis" name="nis" required>
      </div>
      <div class="mb-3">
          <select class="form-select" name="kode_id" required>
              <option value="">Pilih kelas </option>
              <option value="1">Kelas 1A</option>
              <option value="2">Kelas 1B</option>
              <option value="3">Kelas 1C</option>
              <option value="4">Kelas 1D</option>
          </select>
      </div>
      <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" required>
      </div>
      <div class="mb-3">
          <select class="form-select" name="jk" required>
              <option value="">Pilih gender</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
          </select>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </body>
@endsection



