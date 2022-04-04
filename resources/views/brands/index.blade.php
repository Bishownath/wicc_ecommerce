@extends('admin.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            Brand List
            <a href="{{ route('brand.create') }}" class="btn btn-info float-right"><i class="fa fa-edit"></i></a>
        </div>
        @if ($brands->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Brand Name</th>
                            <th scope="col">Brand Description</th>
                            <th scope="col">Brand Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($brands as $key => $brand)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $brand->name }}</td>
                                <td>{{ $brand->description }}</td>
                                <td><img src="{{ asset('/images/brands/' . $brand->image) }}" alt="" width="100px"
                                        height="100px"></td>
                                <td><a href="{{ route('brand.edit', $brand->slug) }}" class="btn btn-success"><i
                                            class="fa fa-pen"></i></a></td>
                                <td>
                                    <form action="{{ route('brand.destroy', $brand->slug) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $brands->links() }}
            </div>
        @else
            <h1 class="text-center m-5">No Data</h1>
        @endif
    </div>
@endsection
