@extends('layouts.main')
@section('title','| kelas')
@section('content')

<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <h2>Halaman Restore</h2>
                <a href="/siswa" class="btn btn-primary">Kembali ke Daftar Siswa</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswalist as $siswa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->classroom->kode }}</td>
                            <td>{{ $siswa->name }}</td>
                            <td>{{ $siswa->jk == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                            <td>{{ $siswa->alamat }}</td>
                            <td>
                                <form action="/siswa/{{$siswa->id}}/restore"  style="display: inline-block;">
                                    
                                    <button type="submit" class="btn btn-success">Restore</button>
                                </form>
                                <form action="/siswa/{{$siswa->id}}/forceDelete" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete Permanent</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    



@endsection