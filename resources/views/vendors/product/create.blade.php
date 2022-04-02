@extends('vendors.layouts.app')

@section('contents')
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Add Product</h3>
        </div>
        <div class="card-body">
            {!! Form::model($category, ['route' => ['vendors.product.store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="">
                <div class="form-group">
                    <label for="category_id">Category</label>
                    {{-- @dd($product->category->name) --}}
                    {{-- {!! Form::select('category_id', [$product->category->name], $category, ['class' => 'form-control']) !!} --}}
                    {!! Form::select('category_id', $category, $category, ['class' => 'form-control']) !!}
                    @if ($errors->has('category'))
                        <div class="errors text-danger">**{{ $errors->first('category') }}**</div>
                    @endif
                </div>
            </div>

            @include('vendors.product.form.form')
            <div class="col-md-6">
                <div class="form-group">
                    <label for="images">Choose Image</label>
                    <input type="file" name="images[]" id="images" class="form-control" multiple />
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="tags">Select Tags</label>
                    <select name="tag_id" id="tags" class="form-control">
                        <option selected>--Select Tags--</option>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="status">Status</label>
                    {!! Form::select('status', ['unavailable', 'available'], ['unavailable'], ['class' => 'form-control']) !!}

                </div>

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
