@extends('admin.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Product</h3>
            <a href="{{ route('product.create') }}" class="btn btn-info float-right"><i class="fa fa-edit"></i></a>
        </div>
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
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->old_price }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->status }}</td>
                            <td>
                                <a href="{{ route('product.edit', $product->slug) }}" class="btn btn-info"><i
                                        class="fa fa-pen"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('product.destroy', $product->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
@endsection
