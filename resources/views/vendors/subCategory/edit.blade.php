@extends('vendors.layouts.app')


@section('contents')
    <div class="card m-4">
        <div class="card-header">
            <h3 class="text-center">Update Sub-Category</h3>
        </div>
        <div class="card-body">
            {{-- @dd($category) --}}
            {{-- {!! Form::model($category, ['route' => ['vendors.subCategory.store'], 'method' => 'POST']) !!} --}}
            {!! Form::model($subCategory, ['route' => ['vendors.subCategory.update', $subCategory->slug], 'method' => 'PUT']) !!}
            @include('vendors.subCategory.form.form')
            <div class="form-group">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status">Status</label>
                                {!! Form::select('status', ['unavailable', 'available'], $subCategory->status, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="category_id">Category</label>
                            {{-- {!! Form::select('category_id', $category, $category, ['class' => 'form-control']) !!} --}}
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($category as $cat)
                                    {{-- {{ $cat->slug == $cat->category_id ? 'selected' : '' }} --}}
                                    <option value="{{ $cat->id }}"
                                        {{ $subCategory->category_id == $cat->id ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-info mt-2 "><i class="fa fa-paper-plane">Update</i></button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
