@extends('layouts.app')

@section('title', 'Dashboard')

@section('css')

@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                {{--<i class="material-icons">content_copy</i>--}}
                                <i class="fa fa-copy"></i>
                            </div>
                            <p class="card-category">Category / Item</p>
                            <h3 class="card-title">{{$categoryCount}}/{{$itemCount}}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                {{--<i class="material-icons text-danger">warning</i>--}}
                                {{--<i class="fa fa-pencil"></i>--}}
                                <a href="#pablo">Get More Space...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                {{--<i class="material-icons">store</i>--}}
                                <i class="fa fa-slideshare"></i>
                            </div>
                            <p class="card-category">Slider Count</p>
                            <h3 class="card-title">{{$sliderCount}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-calendar pt-1 pr-1"></i> <a href="{{route('slider.index')}}"> Get More Details...</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-chevron-circle-up"></i>
                            </div>
                            <p class="card-category">Reservations</p>
                            <h3 class="card-title">{{$reservations->count()}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-tag pt-1 pr-1"></i> Not Confirmed Reservation
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <p class="card-category">Contacts</p>
                            <h3 class="card-title">{{$contactCount}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="fa fa-upload pt-1 pr-1"></i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @include('inc.messages')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Reservations</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive overflow-custom">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-primary">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($reservations as $reservation)
                                        <tr>
                                            <td>{{$reservation->id}}</td>
                                            <td>{{$reservation->name}}</td>
                                            <td>{{$reservation->phone}}</td>
                                            <td>
                                                @if($reservation->status == true)
                                                    <span class="badge badge-info">Confirmed</span>
                                                @else
                                                    <span class="badge badge-danger">Not Confirmed Yet</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($reservation->status == false)
                                                    <form id="status-form-{{$reservation->id}}" method="POST" action="{{route('reservation.status', $reservation->id)}}" style="display: none">
                                                        @csrf
                                                        <input type="hidden" name="status" value="0">
                                                    </form>
                                                    <button type="button" class="btn btn-info btn-fab-mini" onclick="if (confirm('Are you verify this request by phone?')){
                                                            event.preventDefault();
                                                            document.getElementById('status-form-{{$reservation->id}}').submit();
                                                            } else {
                                                            event.preventDefault();
                                                            }"><i class="fa fa-check-circle"></i> </button>
                                                @else
                                                    <form id="status-form-{{$reservation->id}}" method="POST" action="{{route('reservation.status', $reservation->id)}}" style="display: none">
                                                        @csrf
                                                        <input type="hidden" name="status" value="1">
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-fab-mini" onclick="if (confirm('Are you un-verify this request by phone?')){
                                                            event.preventDefault();
                                                            document.getElementById('status-form-{{$reservation->id}}').submit();
                                                            } else {
                                                            event.preventDefault();
                                                            }"><i class="fa fa-undo"></i> </button>
                                                @endif
                                                <form id="delete-form-{{$reservation->id}}" method="POST" action="{{route('reservation.destroy', $reservation->id)}}" style="display: none">
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