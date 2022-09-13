<x-header/>

<h1>User List from API</h1>

<table class = 'table-auto mt-4'>
  <thead>
    <th class="border border-slate-600">ID</th>
    <th class="border border-slate-600">Name</th>
    <th class="border border-slate-600">Email Address</th>
    <th class="border border-slate-600">Photo</th>
  </thead>
  <tbody>
    @foreach ($collection as $item )
      
    <tr>
      <td class="border border-slate-700 ...">{{  $item['id']}}</td>
      <td class="border border-slate-700 ...">{{  $item['first_name']}}</td>
      <td class="border border-slate-700 ...">{{  $item['email']}}</td>
      <td class="border border-slate-700 ..."><img src="{{  $item['avatar']}}" alt="avatar"></td>
    </tr>
    @endforeach
  </tbody>
</table>