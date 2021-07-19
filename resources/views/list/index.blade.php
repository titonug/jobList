@extends('master')

@section('judul_halaman')

@section('judul_konten')

@section('konten')

<div class="col">
    <form action="{{ URL('/search')}}" method="GET" enctype="multipart/form-data">

        <div class="form-group row">
            <label for="post">Search</label>
            <div class="col-sm-12">
                <small class="form-text text-muted">Description</small>
                <input type="text" id="description" name="description"></input> 
                
                <small class="form-text text-muted">Location</small>
                <input type="text" id="location" name="location"></input> 
                <br>

                @csrf
                <button type="submit" class="btn btn-primary">Search</button>
                <br>
            </div>
        </div>

    </form>
</div>

<div class="container">
    <div class="list-group">
        @foreach($data as $list)
        <a href="{{ URL('list', ['list' => $list['id']] )}}" class="list-group-item list-group-item-action">
        <p><strong>{{ $list['title'] }}</strong></p> 
        <p>
            <span style="color:Grey;">{{ $list['company'] }} </span>
            <span style ="color:Red;"> - {{ $list['type']}}</span> 
        </p>
        <p>
            <span> Location : </span>
            <span> {{ $list['location']}}   </span>
        </p>
        </a>
        @endforeach
    </div>
</div>
<!-- <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Title</th>
            <th>Company</th>
            <th>Type</th>
            <th>Location</th>
            <th class="Actions">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $list)
        <tr>
            <td>{{ $list['title'] }}</td>
            <td>{{ $list['company'] }}</td>
            <td>{{ $list['type']}}</td>
            <td>{{ $list['location']}}</td>
            
            <td class="actions">
                <a href="{{ URL('list', 
                    ['list' => $list['id']] )}}" alt='View' title='View'>
                    View
                </a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table> -->

@endsection
