@extends('templates.main.layout')
@section('meta-title')A Basic HTML5 Template
@endsection
@section('content')
    <div class="pricing-header p-3 pb-md-4 mx-auto">
        <h1 class="display-4 fw-normal text-center">Update Message #{{$data->id}}</h1>
        <div class="alert alert-info">
            <form action="{{route('contact-update-submit', $data->id)}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Input name</label>
                    <input value="{{$data->name}}" name="name" id="name" class="form-control" placeholder="Input name">
                </div>
                <div class="form-group">
                    <label for="email">Input e-mail</label>
                    <input value="{{$data->email}}" name="email" id="email" class="form-control" placeholder="Input email">
                </div>
                <div class="form-group">
                    <label for="subject">Input subject</label>
                    <input value="{{$data->subject}}" name="subject" id="subject" class="form-control" placeholder="Input subject">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Input message">{{$data->message}}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Send</button>
            </form>
        </div>
    </div>
@endsection
@section('aside')
    @parent
    <p>Text</p>
@endsection
