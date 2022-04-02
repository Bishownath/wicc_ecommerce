<div class="form-group">
    <label for="name">Fullname</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Fullname', 'id' => 'name']) !!}
    @if ($errors->has('name'))
        <div class="errors text-danger">**{{ $errors->first('name') }}**</div>
    @endif
    {{-- <input type="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter email"> --}}
</div>
<div class="form-group">
    <label for="email">Email</label>
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
    @if ($errors->has('email'))
        <div class="errors text-danger">
            ** {{ $errors->first('email') }} **
        </div>
    @endif

</div>

<div class="col-md-12">
    <div class="row">

        <div class="col-md-6">

            <div class="form-group">
                <label for="password">Password</label>
                {!! Form::password('password', null, ['class' => 'form-control', 'placeholder' => 'Password', 'id' => 'password']) !!}
                @if ($errors->has('password'))
                    <div class="errors text-danger">**{{ $errors->first('password') }}**</div>
                @endif

            </div>
        </div>
    </div>
</div>
