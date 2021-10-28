@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>post</h2>
            </div>
            <div class="pull-right">
                @can('product-create')
                <a class="btn btn-success" href="{{ route('post.create') }}"> Create New Product</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($post as $item)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $item->name }}</td>
	        <td>{{ $item->detail }}</td>
	        <td>
                <form action="{{ route('post.destroy',$item->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('post.show',$item->id) }}">Show</a>
                    @can('product-edit')
                    <a class="btn btn-primary" href="{{ route('post.edit',$item->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('product-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $post->links() !!}


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection