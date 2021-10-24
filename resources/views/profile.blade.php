@extends("layout")
@section("title")
Profle Paagee
@endsection
@section("contents")
    <h1>Mr Profile</h1>
    <h4>{{$myId}} ==== {{$myEmail}}</h4>
    @foreach($info as $user)
{{$user}}<br>
@endforeach

@if($age >30)
<p>You are older</p>
@else
<p>You are yonger</p>
@endif
@endsection