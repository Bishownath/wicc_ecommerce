@extends('vendors.layouts.app')

@section('contents')
    <div class="card m-4">
        <div class="card-header ">
            <h3 class="text-center">Product</h3>
            <a href="{{ route('vendors.product.create') }}" class="btn btn-info float-right"><i class="fa fa-edit"></i>
            </a>
        </div>
        @if ($products->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Old Price</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $key => $product)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td><a
                                        href="{{ route('vendors.product.show', $product->slug) }}">{{ $product->name }}</a>
                                </td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>NRs. {{ $product->old_price }}</td>
                                <td>NRs. {{ $product->price }}</td>
                                <td>{{ $product->status == 1 ? 'available' : 'unavailable' }}</td>
                                <td>
                                    <a href="{{ route('vendors.product.edit', $product->slug) }}"
                                        class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('vendors.product.destroy', $product->slug) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        @else
            <h1 class="text-center m-5">No Data</h1>
        @endif
    </div>
@endsection
