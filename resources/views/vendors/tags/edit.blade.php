@extends('vendors.layouts.app')

@section('contents')
    <div class="card">
        <div class="card-header">
            <h3>Update Tag</h3>
        </div>
        <div class="card-body">
            {!! Form::model($tag, ['route' => ['vendors.tags.update', $tag->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
            @include('vendors.tags.form.form')

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-info">Update Tag</button>
            </div>
        </div>
    </div>
@endsection
