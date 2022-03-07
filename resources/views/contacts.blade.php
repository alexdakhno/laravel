@extends('templates.main.layout')
@section('meta-title')A Basic HTML5 Template
@endsection
@section('content')
    <div class="pricing-header p-3 pb-md-4 mx-auto">
        <h1 class="display-4 fw-normal text-center">Home page</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{route('contact-form')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Input name</label>
                <input name="name" id="name" class="form-control" placeholder="Input name">
            </div>
            <div class="form-group">
                <label for="email">Input e-mail</label>
                <input name="email" id="email" class="form-control" placeholder="Input email">
            </div>
            <div class="form-group">
                <label for="subject">Input subject</label>
                <input name="subject" id="subject" class="form-control" placeholder="Input subject">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control" placeholder="Input message"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Send</button>
        </form>
    </div>
@endsection
