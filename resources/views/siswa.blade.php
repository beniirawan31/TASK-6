@extends('layouts.main')
@section('title', ('| siswa'))
@section('content')
<h2>Halaman Table Siswa</h2>


<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                @if (Auth::user()->role_id != 1)
                @else
                <a href="/add" class="btn btn-primary">Tambah Siswa</a>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIS</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            @if (Auth::user()->role_id != 1)
                            @else
                            <th scope="col">Action</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswalist as $siswa)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $siswa->nis }}</td>

                            <td>
                            {{$siswa->classroom['kode']}}
                        </td>

                            <td>{{ $siswa->name }}</td>
                            <td>
                                @if ($siswa->jk == 'L')
                                    Laki-Laki
                                @elseif ($siswa->jk == 'P')
                                    Perempuan
                                @endif
                            </td>
                            <td>{{ $siswa->alamat }}</td>
                            @if (Auth::user()->role_id != 1)
                                
                            @else
                                
                            <td>
                                <a href="/edit/{{$siswa->id}}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('Delete', ['id' => $siswa->id]) }}" class="btn btn-danger">Delete</a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection