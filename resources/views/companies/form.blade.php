<div class="row">
    <div class="container">

        <div class="row">
            <div class="form-group col-xs-12">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('website', 'Website:') !!}
                {!! Form::text('website', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('briefIntro', 'Brief Introduction:') !!}
                {!! Form::textarea('briefIntro', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('internPos', 'Intern Position:') !!}
                {!! Form::text('internPos', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('numberOfStudentNeeded', 'Number Of Students needed:') !!}
                {!! Form::text('numberOfStudentNeeded', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('address', 'Address:') !!}
                {!! Form::text('address', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('representative', 'Representative:') !!}
                {!! Form::text('representative', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12">
                {!! Form::submit($submitBtnLabel, ['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>

    </div>
</div>