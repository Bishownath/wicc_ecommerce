@extends('vendors.layouts.app')

@section('contents')
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
    @include('vendors.product.form.form')

    <div class="col-md-6">
        <div class="form-group">
            <label for="tags">Select Tags</label>
            <select name="tag_id" id="tags" class="form-control">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" {{ $product->tag_id == $tag->id ? 'selected' : '' }}>
                        {{ $tag->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="image">Choose Image</label>
            <input type="file" name="image" id="image" class="form-control" />
        </div>
        Uploaded Images: <br>
        @foreach ($product->images as $prod)
            @if ($prod->image)
                <img src="{{ asset('images/product/' . $prod->image) }}"
                    alt="{{ asset('images/product/' . $prod->image) }}" height="100px" width="100px">
            @endif
        @endforeach
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
