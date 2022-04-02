{{-- <div class="form-group">
    {!! Form::number('vendor_id', auth()->id(), ['class' => 'form-control', 'hidden' => 'hidden']) !!}
     {!! Form::model($vendor, ['class' => 'form-control', 'placeholder' => 'Vendor', 'id' => 'name']) !!} 
</div> --}}
<div class="form-group">
    <label for="name">Tag Name</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Tag Name', 'id' => 'name']) !!}
    @if ($errors->has('name'))
        <div class="errors text-danger">**{{ $errors->first('name') }}**</div>
    @endif
</div>
