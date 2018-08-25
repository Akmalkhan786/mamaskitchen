@extends('layouts.app')

@section('title', 'Contact')

@section('css')
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('inc.messages')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Show Message</h4>
                        </div>
                        <div class="card-body">
                            <strong>Name: {{$contact->name}}</strong><br>
                            <b>Eamil: {{$contact->email}}</b><br>
                            <strong>Subject: {{$contact->subject}}</strong><br>
                            <strong>Message: </strong><hr>
                            <p class="lead">{{$contact->message}}</p><hr>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <a href="{{route('contact.index')}}" class="btn btn-default btn-lg"><span class="fa fa-backward"></span> Back</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection