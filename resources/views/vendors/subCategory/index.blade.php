@extends('vendors.layouts.app')

@section('contents')
    <div class="card m-4">
        <div class="card-header ">
            <h3 class="text-center">Sub Category</h3>
            <a href="{{ route('vendors.subCategory.create') }}" class="btn btn-info float-right"><i
                    class="fa fa-edit"></i>
            </a>
        </div>
        @if ($subCategories->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subCategories as $key => $subCategory)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $subCategory->category->name }}</td>
                                <td><a
                                        href="{{ route('vendors.subCategory.show', $subCategory->slug) }}">{{ $subCategory->name }}</a>
                                </td>
                                <td>{{ $subCategory->description }}</td>
                                <td>{{ $subCategory->status == 1 ? 'shown' : 'hide' }}</td>
                                <td>
                                    <a href="{{ route('vendors.subCategory.edit', $subCategory->slug) }}"
                                        class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('vendors.subCategory.destroy', $subCategory->slug) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $subCategories->links() }}
            </div>
        @else
            <h1 class="text-center m-5">No Data</h1>
        @endif
    </div>
@endsection
