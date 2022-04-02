@extends('admin.dashboard')

@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-title text-uppercase">Name: {{ $category->name }}</h4>
            <p class="card-text font-weight-bold">Description: [ {{ $category->description }} ]</p>
            <hr>
            <p>Status: {{ $category->status }}</p>
        </div>
    </div>
@endsection
