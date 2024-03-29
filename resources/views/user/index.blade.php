@extends('admin.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            Vendors
        </div>
        <div class="card-body">
            @if ($vendors->count())
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fullname </th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Status</th>
                            <th scope="col">Applied At</th>
                            <th scope="col">Status Updated</th>
                            <th scope="col">Action</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vendors as $key => $vendor)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $vendor->name }}</td>
                                <td>{{ $vendor->email }}</td>
                                <td>
                                    <form action="{{ route('vendor.changeStatus', $vendor->id) }}" method="post">
                                        @csrf
                                        <button type="submit"
                                            class="{{ $vendor->status == 1 ? 'btn btn-success' : 'btn btn-warning' }}">
                                            {{ $vendor->status == 1 ? 'live' : 'dormant' }}
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $vendor->created_at->diffForHumans() }}</td>
                                <td>{{ $vendor->updated_at->diffForHumans() }}</td>
                                <td>
                                    <a href="{{ route('vendor.edit', $vendor->id) }}" class="btn btn-info"><i
                                            class="fa fa-pen"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('vendor.destroy', $vendor->id) }}">
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <h1 class="text-center">No Data..</h1>
            @endif
        </div>
    </div>
@endsection
