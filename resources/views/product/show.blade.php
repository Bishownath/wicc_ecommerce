@extends('admin.dashboard')

@section('content')
    <div class="card m-5" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-title text-uppercase">Name: {{ $product->name }}</h4>
            <p class="card-text font-weight-bold">Description: [ {{ $product->description }} ]</p>
            <hr>
            <p class="font-weight-bold">Price: NRs. {{ $product->price }}</p>
            <p>Old Price: <del class="font-weight-bold">NRs. {{ $product->old_price }}<del></p>
            <p>Status: {{ $product->status }}</p>
        </div>
    </div>
@endsection
