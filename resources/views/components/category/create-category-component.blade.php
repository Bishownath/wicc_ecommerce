<div>
    <div class="card">

        <div class="card-header">
            <h3 class="text-center">Add Category</h3>
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
            @include('components/category/forms/form')
            <div class="form-group">
                <label for="status">Status</label>
                {!! Form::select('status', ['unavailable', 'available'], 'unavailable', ['class' => 'form-control']) !!}
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" name="submit" class="btn btn-primary fa fa-paper-plane">Submit</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
