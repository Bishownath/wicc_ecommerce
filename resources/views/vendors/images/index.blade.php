@extends('vendors.layouts.app')

@section('contents')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Product Images</h3>
            <a href="{{ route('vendors.product.create') }}" class="btn btn-info float-right"><i
                    class="fa fa-plus mr-1"></i>Create
                Product</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Images</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($images)
                        @foreach ($images as $key => $img)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td><a
                                        href="{{ route('vendors.product.show', $img->product->slug) }}">{{ $img->product->name }}</a>
                                </td>
                                <td>
                                    @if ($files = $img)
                                        <img src="{{ asset('images/product/' . $img->images) }}" alt="" width="100px"
                                            height="100px">
                                    @else
                                        <p>No Image</p>
                                    @endif
                                </td>
                                <td>{{ $img->status }}</td>
                                <td>
                                    <form action="{{ route('vendors.image.destroy', $img->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <h2>No Images </h2>
                    @endif
                </tbody>
            </table>
            {{ $images->links() }}
        </div>
    </div>
@endsection
