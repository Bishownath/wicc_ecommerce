@extends('admin.dashboard')

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <div>
                <h2>Categories</h2>
                <a href="{{ route('category.create') }}" class="btn btn-info float-right"><i class="fa fa-edit"></i></a>

            </div>
        </div>
        @if ($categories->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key => $category)
                            <tr>


                                <td>{{ ++$key }}</td>
                                <td>
                                    <a href="{{ route('category.show', $category->slug) }}" class="btn btn-link">
                                        {{ $category->name }}
                                    </a>
                                </td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->status == 1 ? 'available' : 'unavailable' }}</td>

                                <td><a href="{{ route('category.edit', $category->slug) }}" class="btn btn-info">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('category.destroy', $category->slug) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                </td>
                                </form>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
        @else
            <h3 class="text-center p-5">No Categories...</h3>
            <p class="text-center">Please add one <br> <a href="{{ route('category.create') }}"
                    class="btn btn-link">Add
                    Category</a></p>
        @endif
    </div>
@endsection
