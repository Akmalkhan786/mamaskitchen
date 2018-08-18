@extends('layouts.app')

@section('title', 'Item')

@section('css')
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    @include('inc.messages')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Update Item</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('item.update', $item->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$item->name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-label-floating">
                                            <label class="control-label">Category</label>
                                            <select class="form-control" name="category_id">
                                                @foreach($categories as $category)
                                                    <option {{$category->id == $item->category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-label-floating">
                                            <label class="control-label">Description</label>
                                            <textarea class="form-control" name="description" cols="15" rows="5">{{$item->description}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-label-floating">
                                            <label class="control-label">Price</label>
                                            <input type="number" name="price" class="form-control" value="{{$item->price}}">
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
                                    <a href="{{ route('category.index') }}" class="btn btn-danger btn-lg"><span class="fa fa-backward"></span> Back</a>
                                    <button type="submit" class="btn btn-success btn-lg"><span class="fa fa-save"></span> Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-5">
                    <img src="/uploads/item/{{$item->image}}" class="img-fluid rounded img-thumbnail">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection