<div class="form-group">
    <label for="name">Name</label>
    {{-- <input type="text" name="name" placeholder="Category Name"> --}}
    {!! Form::text('name', null, ['placeholder' => 'Category Name', 'class' => 'form-control', 'id' => 'name']) !!}
    @if ($errors->has('name'))
        <div class="errors text-danger">**{{ $errors->first('name') }}**</div>
    @endif
</div>
<div class="form-group">
    <label for="description">Description</label>
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Category Description', 'id' => 'description']) !!}
    @if ($errors->has('name'))
        <div class="errors text-danger">**{{ $errors->first('name') }}**</div>
    @endif
</div>
