@extends('admin.dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Add Vendor</h3>
        </div>
        <div class="card-body">
            {!! Form::model($vendor, ['route' => ['vendor.update', $vendor->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
            @include('user.form.form')
            {{-- <div class="col-md-6">
                <div class="form-group">
                    <label for="images">Choose Image</label>
                    <input type="file" name="images[]" id="images" class="form-control" multiple />
                </div>
            </div> --}}


            <div class="form-group">
                <label for="status">Status</label>
                {!! Form::select('status', ['live', 'dormant'], ['live'], ['class' => 'form-control']) !!}

            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            {!! Form::close() !!}

        </div>
    </div>


    {{-- create --}}
    {{-- </div>
    </div> --}}
@endsection
