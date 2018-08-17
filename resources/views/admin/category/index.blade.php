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
                    <a href="{{ route('category.create') }}" class="btn btn-primary btn-lg pull-right mb-4"><span class="fa fa-plus"></span> Add Category</a>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Categories</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-primary">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{$category->id}}</td>
                                                <td>{{$category->name}}</td>
                                                <td>{{$category->slug}}</td>
                                                <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'No Date'}}</td>
                                                <td>{{$category->updated_at ? $category->updated_at->diffForHumans() : 'No Date'}}</td>
                                                <td><a href="{{route('category.edit', $category->id)}}" class="btn btn-warning btn-fab-mini"><span class="fa fa-pencil"></span></a>
                                                    <form id="delete-form-{{$category->id}}" method="POST" action="{{ route('category.destroy', $category->id) }}" style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-fab-mini" onclick="if (confirm('Are You Sure? To Delete This Record.')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{$category->id}}').submit();
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