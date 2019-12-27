<a href="{{route('users.show',$user->id)}}">
<img src="{{$user->gravatar('140')}}" alt="{{$user->name}}" class="gravatar">
</a>
<h1>{{$user->name}}</h1>
<h1>
    {{$user->name}} - {{$user->email}}
</h1>