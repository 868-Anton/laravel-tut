<x-header/>
  
{{-- protect user form id from fakers --}}
<form class= "mt-20 flex flex-col justify-center items-center text-center" action="users" method="POST">
    @csrf
    <input 
    type="text" 
    name="username" 
    id="username" 
    placeholder="enter user id"
    class="text-xl"
    />
    <br>
    <br>
    <input 
    type="password" 
    name="userpassword" 
    id="userpassword" 
    placeholder="enter user password"
    class="text-xl "
    /> 
    <br>
    <br>
    <button class="bg-black text-fuchsia-800 rounded p-2 w-16 text-xl" type="submit">Login</button>
</form>