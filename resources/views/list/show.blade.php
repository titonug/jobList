@extends('master')

@section('judul_halaman')

@section('judul_konten')

@section('konten')
<dl class="row">

    <dd class="col-sm-9">{{ $data['location'] }}</dd>
    <dd class="col-sm-9">{{ $data['title'] }}</dd>

    <dt class="col-sm-3">Description</dt>
    {{ $data['description'] }}


    <dt class="col-sm-3">How to Apply</dt>
    <dd class="col-sm-9">{{ $data['how_to_apply'] }}</dd>

</dl>

<a class="btn btn-primary" href="{{ URL('/list') }}" role="button">
    Back</a>


@endsection