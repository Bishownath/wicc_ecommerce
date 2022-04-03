<div>
    {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
    @include('components/category/forms/form')
    <div class="form-group">
        <label for="status">Status</label>
        {!! Form::select('status', ['unavailable', 'available'], 'unavailable', ['class' => 'form-control']) !!}
    </div>
    <div class="d-flex justify-content-center">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
    {!! Form::close() !!}
</div>
