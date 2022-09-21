<x-header/>
 
<form class= "mt-20 flex flex-col justify-center items-center text-center" action="upload" method="POST" enctype="multipart/form-data">
    @csrf
    <input 
    type="file" 
    name="file" 
    class="text-xl border text-center"
    />
     <br>
    <button class="bg-black text-fuchsia-800 rounded p-2 w-auto text-xl hover:text-sky-400" type="submit">Upload file</button>
</form>