@extends('templates.main.layout')
@section('meta-title')Test push to remote repository
@endsection
@section('content')
    <div class="pricing-header p-3 pb-md-4 mx-auto">
        <h1 class="display-4 fw-normal text-center">Messages</h1>
        @foreach($data as $mess)
            <div class="alert alert-info">
                <h3>{{$mess->name}}</h3>
                <p>{{$mess->email}}</p>
                <p>{{$mess->subject}}</p>
                <a href="{{route('contacts-detail', $mess->id)}}" class="btn btn-warning">More</a>
                <a href="{{route('contacts-update', $mess->id)}}" class="btn btn-warning">Edit</a>
                <a href="{{route('contacts-delete', $mess->id)}}" class="btn btn-danger">Delete</a>
            </div>
        @endforeach
    </div>
@endsection
@section('aside')
    @parent
    <p>Text</p>
@endsection
