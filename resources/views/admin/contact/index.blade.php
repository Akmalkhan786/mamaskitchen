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
                            <h4 class="card-title ">All Messages</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive overflow-custom">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-primary">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($contacts as $contact)
                                            <tr>
                                                <td>{{$contact->id}}</td>
                                                <td>{{$contact->name}}</td>
                                                <td>{{$contact->email}}</td>
                                                <td>{{$contact->subject}}</td>
                                                <td>{{$contact->message}}</td>
                                                <td>{{$contact->created_at ? $contact->created_at->diffForHumans() : 'No Date'}}</td>
                                                <td>{{$contact->updated_at ? $contact->updated_at->diffForHumans() : 'No Date'}}</td>
                                                <td><a href="{{route('contact.show', $contact->id)}}" class="btn btn-warning btn-fab-mini"><span class="fa fa-viacoin"></span></a>
                                                    <form id="delete-form-{{$contact->id}}" method="POST" action="{{route('contact.destroy', $contact->id)}}" style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-fab-mini" onclick="if (confirm('Are You Sure? To Delete This Record.')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{$contact->id}}').submit();
                                                    } else {
                                                        event.preventDefault();
                                                            }"><i class="fa fa-remove"></i> </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-sm-offset-4">
                                        {{$contacts->render()}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection