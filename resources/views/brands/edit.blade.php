@extends('admin.dashboard')

@section('content')
    {!! Form::model($brand, ['route' => ['brand.update', $brand->slug], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
    @include('brands.form.form')

    <div class="form-group">
        <label for="image">Choose Image</label><br>
        <input type="file" name="image" id="image" class="form-control">
        @if ($brand->image)
            <img src="{{ asset('images/brands/' . $brand->image) }}" alt="" width="100px" height="100px">
        @endif
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary fa fa-paper-plane">Submit</button>
    </div>
    {!! Form::close() !!}
@endsection
