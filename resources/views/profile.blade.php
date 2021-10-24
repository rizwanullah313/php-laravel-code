<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
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
</body>
</html>