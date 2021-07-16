@extends('master')

@section('judul_halaman')

@section('judul_konten')

@section('konten')
<dl class="row">
<dt class="col-sm-3"></dt>
    <dd class="col-sm-3">{{ $data['location'] }}</dd>
    <dt class="col-sm-3"></dt>
    <dd class="col-sm-3">{{ $data['title'] }}</dd>

    <dd class="col-sm-9">
        <img width="500px" 
        src="@php echo $data['company_logo'] @endphp">
    </dd>
    <dd class="col-sm-9"><a href="{{ $data['company_url'] }}">{{ $data['company_url'] }}</a></dd>
    <dt class="col-sm-9">How to Apply</dt>
    <dd class="col-sm-9">{!! $data['how_to_apply'] !!}</dd>

    <dd class="col-sm-9">{!! $data['description'] !!}</dd>
    
    
    
    

</dl>

<a class="btn btn-primary" href="{{ URL('/list') }}" role="button">
    Back</a>


@endsection