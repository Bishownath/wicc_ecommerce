@extends('admin.dashboard')

@section('content')
    {!! Form::open(['route' => 'brand.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @include('brands.form.form')
    {!! Form::close() !!}
@endsection
