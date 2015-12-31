@if ($errors->any())
    <div class="container">
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                <p>{{$error}}</p>
            </div>
        @endforeach
    </div>
@endif