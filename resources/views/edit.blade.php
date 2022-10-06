<h1>Update Record</h1>

<form action="/edit" method="POST">
@csrf
<input type="hiddien" name='Id' value="{{$data['Id'] }}"><br>
<input type="text" name='Username' value="{{$data['Username'] }}"><br>
<input type="text" name='onlineName' value="{{$data['onlineName'] }}"><br>
<input type="number" name='phoneNumber' value="{{$data['phoneNumber'] }}"><br>
<input type="text" name='fullName' value="{{$data['fullName'] }}"><br>
<input type="text" name='Divsion' value="{{$data['Divsion'] }}"><br>
<button type="submit">Update</button>


</form>