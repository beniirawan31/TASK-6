@extends('layouts.main')
@section('title', '| Delete Data')
@section('content')

<div class="mt-5">
    <h3>Apa Anda yakin ingin menghapus data dengan nama {{ $siswa->name }} dan NIS {{ $siswa->nis }}</h3>
    <form style="display: inline-block" action="{{ route('Delete.Destroy', $siswa->id) }}" method="post">
       @csrf
       @method('delete')
       <button type="submit" class="btn btn-danger">Delete</button>
    </form>
   
    <a class="btn btn-primary" href="/siswa">Cancel</a>
</div>

@endsection
