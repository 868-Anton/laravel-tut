<h1>Update Record</h1>

<form action="/edit" method="POST">
@csrf
<input type="hidden" name='id' value="{{$data['id'] }}"><br>
<input type="text" name='userName' value="{{$data['userName'] }}"><br>
<input type="text" name='onlineName' value="{{$data['onlineName'] }}"><br>
<input type="number" name='phoneNumber' value="{{$data['phoneNumber'] }}"><br>
<input type="text" name='fullName' value="{{$data['fullName'] }}"><br>
<input type="text" name='Divsion' value="{{$data['Division'] }}"><br>
<button type="submit">Update</button>


</form>