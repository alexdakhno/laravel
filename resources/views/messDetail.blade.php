@extends('templates.main.layout')
@section('meta-title')A Basic HTML5 Template
@endsection
@section('content')
    <div class="pricing-header p-3 pb-md-4 mx-auto">
        <h1 class="display-4 fw-normal text-center">Message #{{$data->id}}</h1>
        <div class="alert alert-info">
            <h3>{{$data->name}}</h3>
            <p>{{$data->email}}</p>
            <p>{{$data->subject}}</p>
            <p>{{$data->message}}</p>
        </div>
    </div>
@endsection
@section('aside')
    @parent
    <p>Text</p>
@endsection
