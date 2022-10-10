
<x-header/>

<h1>Players List </h1>

<table class="table-fixed">
  <thead>
    <tr>
      <th>User Name</th>
      <th>Online Name</th>
      <th>Phone Number</th>
      <th>Full Name</th>
      <th>Division</th>
      <th>Operation</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($players as $player ) 
    <tr>
      <td>{{ $player['userName'] }}</td>
      <td>{{ $player['onlineName'] }}</td>
      <td>{{ $player['phoneNumber'] }}</td>
      <td>{{ $player['fullName'] }}</td>
      <td>{{ $player['Division'] }}</td>
      <td>
        <a href={{ 'delete/'.$player['id'] }}>Delete</a>
        <a href={{ 'edit/'.$player['id'] }}>Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>