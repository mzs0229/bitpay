@if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            <H5>{{count($errors)}}处错误</H5>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif