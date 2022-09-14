<x-header/>

        
        <div class="py-12 bg-white">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
              <p class="mt-2 text-3xl leading-8 font-bold tracking-tight text-gray-900 sm:text-4xl sm:tracking-tight">Hello there,</p>
              <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">{{ session('username') }}</p>
            </div>
            <br></br>
        <a href="/logout" class="bg-black text-fuchsia-800 rounded p-2 w-16 text-xl hover:text-sky-400">Logout</a>
<x-footer/>