@extends('layouts.main')
@section('title','| edit Data'  )
@section('content')
<h1>Ini adalah halaman EDIT</h1>


    <form action="/siswa/{{$siswa->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" class="form-control" id="nis" value="{{$siswa->nis}}" name="nis">
        </div>
        <div class="mb-3">
            <select class="form-select" name="kode_id">
                <option value="">Pilih kelas</option>
                @foreach ($classrooms as $classroom)
                <option value="{{ $classroom->id }}" 
                    @if ($classroom->id == $siswa->kode_id) selected
                    @endif>{{ $classroom->kode }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" value="{{$siswa->name}}" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" value="{{$siswa->alamat}}" id="alamat" name="alamat">
        </div>
        <div class="mb-3">
            <select class="form-select" id="jk" name="jk">
                <option value="">Pilih gender</option>
                @if ($siswa->jk == 'L')
                <option value="L" selected>Laki-Laki</option>
                <option value="P">Perempuan</option>
                @else
                <option value="L">Laki-Laki</option>
                <option value="P" selected>Perempuan</option>
                @endif
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection
