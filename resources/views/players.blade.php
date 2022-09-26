
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
    </tr>
  </thead>
  <tbody>
    @foreach ($players as $player ) 
    <tr>
      <td>{{ $player['Username'] }}</td>
      <td>{{ $player['onlineName'] }}</td>
      <td>{{ $player['phoneNumber'] }}</td>
      <td>{{ $player['fullName'] }}</td>
      <td>{{ $player['Divsion'] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<span class = "mt-10 flex">
  {{ $players->links() }}
</span>

<style>
  width: 25px; 
  .w-5{
    display: none;
  }
</style>