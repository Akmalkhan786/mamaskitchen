@extends('layouts.app')

@section('title', 'Slider')

@section('css')
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 my-5">
                    <img src="/uploads/slider/{{$slider->image}}" class="img-fluid rounded img-thumbnail">
                </div>
                <div class="col-md-8">
                    @include('inc.messages')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Update Slider</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('slider.update', $slider->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-label-floating">
                                            <label class="control-label">Title</label>
                                            <input type="text" name="title" class="form-control" value="{{$slider->title}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-label-floating">
                                            <label class="control-label">Sub Title</label>
                                            <input type="text" name="sub_title" class="form-control" value="{{$slider->sub_title}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="control-label">Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="{{ route('slider.index') }}" class="btn btn-danger btn-lg"><span class="fa fa-backward"></span> Back</a>
                                    <button type="submit" class="btn btn-success btn-lg"><span class="fa fa-save"></span> Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection