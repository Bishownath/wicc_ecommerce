@extends('admin.dashboard')

@section('content')
    {!! Form::model($product, ['route' => ['product.update', $product->slug], 'method' => 'put']) !!}
    <div class="">
        <div class="form-group">
            <label for="category_id">Category</label>
            {{-- @dd($product->category->name) --}}
            {{-- {!! Form::select('category_id', [$product->category->name], $category, ['class' => 'form-control']) !!} --}}
            {!! Form::select('category_id', [$product->category->name], $category, ['class' => 'form-control']) !!}
            @if ($errors->has('category'))
                <div class="errors text-danger">**{{ $errors->first('category') }}**</div>
            @endif
        </div>
    </div>
    @include('product.form.form')
    <div class="col-md-6">
        <div class="form-group">
            <label for="image">Choose Image</label>
            <input type="file" name="image" id="image" class="form-control" />
        </div>
        @if ($product->image)
            <img src="{{ $product->image }}" alt="{{ $product->image }}">
        @endif
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="status">Status</label>
            {!! Form::select('status', ['unavailable', 'available'], $product->status, ['class' => 'form-control']) !!}

        </div>
    </div>

    </div>
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-info">Update</button>
    </div>
    {!! Form::close() !!}
@endsection
