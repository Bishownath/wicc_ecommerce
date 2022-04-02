<div class="form-group">
    <label for="name">Product Name</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Product Name', 'id' => 'name', 'enctype' => 'multipart/form-data']) !!}
    @if ($errors->has('name'))
        <div class="errors text-danger">**{{ $errors->first('name') }}**</div>
    @endif
    {{-- <input type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter email"> --}}
</div>
<div class="form-group">
    <label for="description">Description</label>
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Product Description']) !!}
    @if ($errors->has('description'))
        <div class="errors text-danger">
            ** {{ $errors->first('description') }} **
        </div>
    @endif

</div>

<div class="col-md-12">
    <div class="row">

        <div class="col-md-6">

            <div class="form-group">
                <label for="price">Price</label>
                {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Product Price', 'id' => 'price', 'min' => 0, 'step' => 0.1]) !!}
                @if ($errors->has('price'))
                    <div class="errors text-danger">**{{ $errors->first('price') }}**</div>
                @endif

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="old_price">Old Price</label>
                {!! Form::number('old_price', null, ['class' => 'form-control', 'min' => 0, 'placeholder' => 'Product Old Price', 'step' => 0.1]) !!}
                @if ($errors->has('old_price'))
                    <div class="errors text-danger">**{{ $errors->first('old_price') }}**</div>
                @endif

            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="row">
        <div class="col-md-6">

            <div class="form-group">
                <label for="quantity">Quantity</label>
                {!! Form::number('quantity', null, ['class' => 'form-control', 'placeholder' => 'Product Quantity', 'id' => 'quantity', 'min' => 0, 'step' => 1]) !!}
                @if ($errors->has('quantity'))
                    <div class="errors text-danger">**{{ $errors->first('quantity') }}**</div>
                @endif
            </div>
        </div>
