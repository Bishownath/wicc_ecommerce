<div class="card">

    <div class="card-header">
        <h3 class="text-center">Add Brand</h3>
    </div>
    <div class="card-body">

        <div class="form-group">
            <label for="name">Brand Name</label>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Brand Name', 'id' => 'name']) !!}
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Brand Description', 'id' => 'description']) !!}
        </div>
