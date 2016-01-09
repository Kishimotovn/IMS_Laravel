<div class="row">
    <div class="container">
        <div class="row">
            <div class="form-group col-xs-12">
                {!! Form::label('title', 'Post Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-xs-12">
                {!! Form::label('body', 'Body:') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="row">
            <div class="form-group col-xs-12">
                {!! Form::submit($submitBtnLabel, ['class' => 'btn btn-primary form-control']) !!}
            </div>
        </div>
        {!! Form::hidden('published_at', \Carbon\Carbon::now()) !!}
    </div>
</div>