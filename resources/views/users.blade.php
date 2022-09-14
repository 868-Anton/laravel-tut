<x-header/>

        {{-- @if ($errors->any())
        @foreach ($errors->all() as $err)
        <li>{{ $err }}</li>
        @endforeach

        @endif --}}


<form class= "mt-20 flex flex-col justify-center items-center text-center" action="user" method="POST">
    {{-- protect user form id from fakers --}}
    @csrf
    {{-- {{ method_field('PUT') }} --}}
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
    <button class="bg-black text-fuchsia-800 rounded p-2 w-16 text-xl hover:text-sky-400" type="submit">Login</button>
</form>