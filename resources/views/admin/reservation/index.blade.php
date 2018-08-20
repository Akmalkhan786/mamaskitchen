@extends('layouts.app')

@section('title', 'Reservation')

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
                            <h4 class="card-title ">All Reservations</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive overflow-custom">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-primary">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>E-mail</th>
                                    <th>Time and Date</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($reservations as $reservation)
                                            <tr>
                                                <td>{{$reservation->id}}</td>
                                                <td>{{$reservation->name}}</td>
                                                <td>{{$reservation->phone}}</td>
                                                <td>{{$reservation->email}}</td>
                                                <td>{{$reservation->date_and_time}}</td>
                                                <td>{{$reservation->message}}</td>
                                                <td>
                                                    @if($reservation->status == true)
                                                        <span class="label label-info">Confirmed</span>
                                                    @else
                                                        <span class="label label-danger">Not Confirmed Yet</span>
                                                    @endif
                                                </td>
                                                <td>{{$reservation->created_at ? $reservation->created_at->diffForHumans() : 'No Date'}}</td>
                                                <td>{{$reservation->updated_at ? $reservation->updated_at->diffForHumans() : 'No Date'}}</td>
                                                <td><a href="" class="btn btn-warning btn-fab-mini"><span class="fa fa-pencil"></span></a>
                                                    <form id="delete-form-{{$reservation->id}}" method="POST" action="" style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-fab-mini" onclick="if (confirm('Are You Sure? To Delete This Record.')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{$reservation->id}}').submit();
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
                                        {{$reservations->render()}}
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