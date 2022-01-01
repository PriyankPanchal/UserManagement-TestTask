<!-- First Name Field -->
<div class="col-sm-2">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $user->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="col-sm-2">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $user->last_name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-2">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Dob Field -->
<div class="col-sm-2">
    {!! Form::label('dob', 'Dob:') !!}
    <p>{{ $user->dob }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-2">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $user->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-2">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $user->updated_at }}</p>
</div>
