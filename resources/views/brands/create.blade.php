@extends('admin.dashboard')

@section('content')
    {!! Form::open(['route' => 'brand.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @include('brands.form.form')

    <div class="form-group">
        <label for="image">Choose Image</label><br>
        <input type="file" name="image" id="image" class="form-control">
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary fa fa-paper-plane">Submit</button>
    </div>
    {!! Form::close() !!}
@endsection
