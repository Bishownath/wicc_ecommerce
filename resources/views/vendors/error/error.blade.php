@extends('vendors.layouts.app')

@section('contents')
    <div class="mt-4 justify-content-center d-flex">

        <section class="error-part">
            <div class="container">
                <h1>404 | Not Found</h1>
                <img class="img-fluid" src="{{ asset('assets/images/error.png') }}" alt="error" />
                <h3>ooopps! Images Cannot be Found</h3>
                <p>It looks like <span> Images</span> was not found at this location.</p>
                <a href="{{ route('vendors.dashboard') }}" class="btn btn-info">go to home</a>
            </div>
        </section>
    </div>
@endsection
