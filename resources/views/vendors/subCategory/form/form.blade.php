<div class="card-body">
    <div class="form-group">
        <div class="col-md-12">
            <input type="hidden" name="vendor_id" id="vendor_id" value="{{ auth()->id() }}">
            <label for="name">Name</label>
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Sub category Name', 'id' => 'name']) !!}
            {{-- <input class="form-control" type="text" name="name" placeholder="Sub-category Name" id="name"> --}}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <label for="description">Description</label>
            {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Sub category Description', 'id' => 'description']) !!}
            {{-- <textarea class="form-control" name="description" placeholder="Sub-category Description" id="name" cols="25"
                rows="5"></textarea> --}}
        </div>
    </div>
