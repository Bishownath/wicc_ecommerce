@extends('admin.dashboard')

@section('content')
    {!! Form::model($category, ['route' => ['category.update', $category->slug], 'method' => 'put']) !!}
    @include('components/category/forms/form')
    <div class="form-group">
        <label for="status">Status</label>
        {!! Form::select('status', [0, 1], $category->status, ['class' => 'form-control']) !!}
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </div>
    {!! Form::close() !!}
@endsection
