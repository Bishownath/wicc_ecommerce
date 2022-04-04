@extends('vendors.layouts.app')

@section('contents')
    <div class="card m-4">
        <div class="card-header">
            Tags List
            <a href="{{ route('vendors.tags.create') }}" class="btn btn-info float-right"><i class="fa fa-edit"></i>
            </a>
        </div>
        @if ($tags->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $key => $tag)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $tag->name }}</td>
                                {{-- {{ route('vendors.tags.edit', $tag->id) }} --}}
                                {{-- <td><button type="submit" class="btn btn-info" disabled><i
                                            class="fa fa-pen"></i></button>
                                </td> --}}
                                <td><a href="{{ route('vendors.tags.edit', $tag->id) }}" class="btn btn-info"><i
                                            class="fa fa-pen"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('vendors.tags.destroy', $tag->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $tags->links() }}
            </div>
        @else
            <h1 class="text-center m-5">No Data</h1>
        @endif
    </div>
@endsection
