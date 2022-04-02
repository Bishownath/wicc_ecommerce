@extends('admin.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            Vendors
        </div>
        <div class="card-body">
            @if ($users->count())
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fullname </th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Action</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="" class="btn btn-info"><i class="fa fa-pen"></i></a>
                                </td>
                                <td>
                                    <form action="{{ route('user.destroy', $user->id) }}">
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
