@extends('layouts.app')

@section('title', 'Slider')

@section('css')
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('inc.messages')
                    <a href="{{ route('slider.create') }}" class="btn btn-primary btn-lg pull-right mb-4"><span class="fa fa-plus"></span> Add Slider</a>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Sliders</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-primary">
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($sliders as $slider)
                                            <tr>
                                                <td>{{$slider->id}}</td>
                                                <td>{{$slider->title}}</td>
                                                <td>{{$slider->sub_title}}</td>
                                                <td><img height="50" src="/uploads/slider/{{$slider->image}}"></td>
                                                <td>{{$slider->created_at ? $slider->created_at->diffForHumans() : 'No Date'}}</td>
                                                <td>{{$slider->updated_at ? $slider->updated_at->diffForHumans() : 'No Date'}}</td>
                                                <td><a href="{{route('slider.edit', $slider->id)}}" class="btn btn-warning btn-fab-mini"><span class="fa fa-pencil"></span></a>
                                                    <form id="delete-form-{{$slider->id}}" method="POST" action="{{ route('slider.destroy', $slider->id) }}" style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-fab-mini" onclick="if (confirm('Are You Sure? To Delete This Record.')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{$slider->id}}').submit();
                                                    } else {
                                                        event.preventDefault();
                                                            }"><i class="material-icons">delete</i> </button>
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