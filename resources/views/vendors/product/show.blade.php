@extends('vendors.layouts.app')

@section('contents')
    <div class="card m-2" style="width: 98%">

        <div class="card-body">

            <h4 class="card-title text-uppercase">Name: {{ $product->name }}</h4>
            <p class="card-text font-weight-bold">Description: [ {{ $product->description }} ]</p>
            <hr>
            <p class="font-weight-bold">Price: NRs. {{ $product->price }}</p>
            <p>Old Price: <del class="font-weight-bold">NRs. {{ $product->old_price }}<del></p>
            <p>Status: {{ $product->status }}</p>
        </div>
    </div>
    <h3 class="text-center">Product Images</h3><br>
    <div class="card ml-5 mr-5">
        <div class="card-body">
            <div class="d-flex m-2">
                @foreach ($images as $img)
                    <img src="{{ asset('images/product/' . $img->image) }}" alt="" width="100px" height="100px">
                @endforeach
            </div>
        </div>
    </div>
@endsection
