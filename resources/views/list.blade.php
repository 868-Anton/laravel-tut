<h1>Members Lists</h1>

<?php if(session()->has('flashSuccess'))
{
  echo Session::get('flashSuccess');
}
?>
<table border='1'>

  <tr>
    <td>Id</td>
    <td>fullName</td>
    <td>OnlineName</td>
    <td>phoneNumber</td>
    <td>Divsion</td>
    <td>Operator</td>
  </tr>
  @foreach ( $Players as $item)
  <tr>
    <td>{{ $item['Id'] }}</td>
    <td>{{ $item['fullName'] }}</td>
    <td>{{ $item['onlineName'] }}</td>
    <td>{{ $item['phoneNumber'] }}</td>
    <td>{{ $item['Divsion'] }}</td>
    <td><a href={{"delete/".$item['Id'] }}>Delete</a></td>
  </tr>
  @endforeach
</table>