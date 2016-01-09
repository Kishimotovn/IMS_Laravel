<div class="row">
    <div class="container">

        <div class="row">
            <div class="form-group col-xs-12">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('confirm_password', 'Confirm Password:') !!}
                {!! Form::password('confirm_password', ['class' => 'form-control']) !!}
            </div>

            {!! Form::hidden('role', 0) !!}
        </div>
    </div>
</div>
<div class="container">
    <h2>User information:</h2>
</div>
<div class="row">
    <div class="container">
        <div class="row">
            <div class="form-group col-xs-7">
                {!! Form::label('firstname', 'First name:') !!}
                {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-xs-5">
                {!! Form::label('lastname', 'Last name:') !!}
                {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12">
                {!! Form::label('dob', 'DoB:') !!}
                {!! Form::input('date', 'dob', date('d-m-Y'), ['class' => 'form-control', 'placeholder' => 'Date']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('alternative_email', 'Alternative Email:') !!}
                {!! Form::text('alternative_email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('descriptions', 'Descriptions:') !!}
                {!! Form::textarea('descriptions', null, ['class' => 'form-control']) !!}
            </div>
            <div class="row">
                <div class="form-group col-xs-12">
                    {!! Form::submit($submitBtnLabel, ['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>
        </div>
    </div>
</div>