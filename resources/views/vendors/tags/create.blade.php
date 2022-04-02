@extends('vendors.layouts.app')

@section('contents')
    <div class="card">
        <div class="card-header">
            <h3>Add Tag</h3>
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'vendors.tags.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            @include('vendors.tags.form.form')

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-info">Create Tag</button>
            </div>
        </div>
    </div>
@endsection
