<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', 'First Name: *') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', 'Last Name: *') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::text('dob', null, ['class' => 'form-control','id'=>'dob', 'placeholder'=> 'Date of Birth']) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email: *') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

@if(isset($user))
@else
<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password: *') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<!-- Confimr Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password_confirmation', 'Confirm Password: *') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>
@endif
