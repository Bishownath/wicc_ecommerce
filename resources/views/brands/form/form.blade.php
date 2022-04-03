<div class="form-group">
    <label for="name">Brand Name</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Brand Name', 'id' => 'name']) !!}
</div>
<div class="form-group">
    <label for="description">Description</label>
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Brand Description', 'id' => 'description']) !!}
</div>

<div class="form-group">
    <label for="image">Choose Image</label><br>
    <input type="file" name="image" id="image" class="form-control">
</div>


<button type="submit" class="btn btn-primary">Submit</button>
