<x-header title={{ URL::current() }}/>

        <div class="relative flex items-top justify-center">
            <h1>Users Page</h1>


        </div>
        
        <h2>basic blade Template</h2>

        {{ 20+10 }} 

        @if ($user==="Anton")
        <h3>Hi {{ $user }}</h3>
        @elseif($user==='sam')
        <h3>Hi {{ $user }}</h3>
        @else
        <h3>Hello, Unkown user </h3>
        @endif

<x-footer/>