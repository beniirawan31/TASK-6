@extends('layouts.main')
@section('title','| kelas')
@section('content')

<h2>halaman kelas</h2>

<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classlist as $class)
                        <tr>
                            <th>
                                {{$loop->iteration}}
                            </th>
                            <th>
                                {{$class->kode}}
                            </th>
                            <th>
                                @foreach ($class->siswa as $siswa)
                                -{{$siswa->name}} <br>
                                @endforeach
                            </th>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



@endsection
