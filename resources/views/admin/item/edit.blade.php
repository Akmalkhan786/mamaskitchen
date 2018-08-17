@extends('layouts.app')

@section('title', 'Category')

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
                            <h4 class="card-title ">Update Category</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('category.update', $category->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-label-floating">
                                            <label class="control-label">Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$category->name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-label-floating">
                                            <label class="control-label">Slug</label>
                                            <input type="text" name="slug" class="form-control" value="{{$category->slug}}">
                                        </div>
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
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection