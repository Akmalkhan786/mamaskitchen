@extends('layouts.app')

@section('title', 'Item')

@section('css')
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('inc.messages')
                    <a href="{{ route('item.create') }}" class="btn btn-primary btn-lg pull-right mb-4"><span class="fa fa-plus"></span> Add Item</a>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Items</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive overflow-custom">
                                <table class="table table-striped table-bordered">
                                    <thead class="text-primary">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($items as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td><img height="50" width="50" src="/uploads/item/{{$item->image}}"></td>
                                                <td>{{$item->description}}</td>
                                                <td>{{$item->category ? $item->category->name : 'Uncategorized'}}</td>
                                                <td>{{$item->price}}</td>
                                                <td>{{$item->created_at ? $item->created_at->diffForHumans() : 'No Date'}}</td>
                                                <td>{{$item->updated_at ? $item->updated_at->diffForHumans() : 'No Date'}}</td>
                                                <td><a href="{{route('item.edit', $item->id)}}" class="btn btn-warning btn-fab-mini"><span class="fa fa-pencil"></span></a>
                                                    <form id="delete-form-{{$item->id}}" method="POST" action="{{ route('item.destroy', $item->id) }}" style="display: none">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <button type="button" class="btn btn-danger btn-fab-mini" onclick="if (confirm('Are You Sure? To Delete This Record.')){
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{$item->id}}').submit();
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
                                        {{$items->render()}}
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