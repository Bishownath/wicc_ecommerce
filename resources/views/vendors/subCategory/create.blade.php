@extends('vendors.layouts.app')


@section('contents')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="text-center">Add Sub-Category</h3>
        </div>
        <div class="card-body">
            {{-- @dd($category) --}}
            {{-- {!! Form::model($category, ['route' => ['vendors.subCategory.store'], 'method' => 'POST']) !!} --}}
            {!! Form::open(['route' => 'vendors.subCategory.store', 'method' => 'POST']) !!}
            @include('vendors.subCategory.form.form')
            <div class="col-md-6">
                <label for="category_id">Category</label>
                {{-- {!! Form::select('category_id', $category, $category, ['class' => 'form-control']) !!} --}}
                <select name="category_id" id="category_id" class="form-control">
                    <option value="" selected>--Select Status--</option>
                    @foreach ($category as $cat)
                        {{-- {{ $cat->slug == $cat->category_id ? 'selected' : '' }} --}}
                        <option value="{{ $cat->id }}" {{ $cat->id == $cat->category_id ? 'selected' : '' }}>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-info mt-2 ">Submit</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
