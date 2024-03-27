@extends('layouts.main')
@section('title', ('| dashboard'))
@section('content')

<h2>selamat datang = {{Auth::user()->name}} </h2>
<br>
<h2>anda di sini sebagai = {{Auth::user()->role['name']}}</h2>
<br>
<hr>
@if (Auth::user()->role_id != 2)
@else
<h2>Silahkan check kelas anda </h2>
@endif
    
@endsection