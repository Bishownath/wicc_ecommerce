<div class="form-group">
    <label for="name">Tag Name</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Tag Name', 'id' => 'name']) !!}
    @if ($errors->has('name'))
        <div class="errors text-danger">**{{ $errors->first('name') }}**</div>
    @endif
</div>
