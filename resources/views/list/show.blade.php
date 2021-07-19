@extends('master')

@section('judul_halaman')

@section('judul_konten')

@section('konten')

<div class="container">
    <div class="list-group">
    <p>{{ $data['type'] }} / {{ $data['location'] }}</p>    
    <p>{{ $data['title'] }}</p>
    </div>
    <div class="list-group">
        <img width="500px" 
        src="@php echo $data['company_logo'] @endphp">
        <a href="{{ $data['company_url'] }}">{{ $data['company_url'] }}</a>
    </div>
    <div class="list-group">
        <p><strong> How to Apply </strong></p>
        <span>{!! $data['how_to_apply'] !!}</span>
    </div>
    <div class="list-group">
        {!! $data['description'] !!}
    </div>
</div>


<a class="btn btn-primary" href="{{ URL('/list') }}" role="button">
    Back</a>


@endsection