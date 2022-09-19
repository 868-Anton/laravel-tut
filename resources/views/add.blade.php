<x-header/>

<h1 class="mt-5 text-center">Add Memmber </h1>

@if(session('user'))
<p class="mt-5 text-green-500 text-center " >{{ session('user') }} User added</p>
@endif

<form class= "mt-20 flex flex-col justify-center items-center text-center" action="addMember" method="POST">
    {{-- protect user form id from fakers --}}
    @csrf
    {{-- {{ method_field('PUT') }} --}}
    <label>  Name </label>
    <input 
    type="text" 
    name="username" 
    id="username" 
    placeholder="enter user id"
    class="text-xl border text-center"
    value='{{ old("username") }}'
    
    />
    <span class="mt-2 text-red-600">
        @error('username'){{ $message }}@enderror
    </span>
    <br>
    <br>

    <label>  Password </label>
    <input 
    type="password" 
    name="userpassword" 
    id="userpassword" 
    placeholder="enter user password"
    class="text-xl border text-center"
    value='{{ old("userpassword") }}'
    {{-- onchange= "@error('userpassword'){{ $message }} @enderror"  this dont work --}}
    /> 
    <span class="mt-2 text-red-600">@error('userpassword'){{ $message }}@enderror</span>

    <br>
    <br>
    <label>  email </label>
    <input 
    type="email" 
    name="email" 
    id="email" 
    placeholder="enter user email"
    class="text-xl border text-center"
    value='{{ old("email") }}'
    {{-- onchange= "@error('userpassword'){{ $message }} @enderror"  this dont work --}}
    /> 
    <span class="mt-2 text-red-600">@error('email'){{ $message }}@enderror</span>

    <br>
    <br>
    <button class="bg-black text-fuchsia-800 rounded p-2  text-xl hover:text-sky-400" type="submit">Add Member </button>
</form>