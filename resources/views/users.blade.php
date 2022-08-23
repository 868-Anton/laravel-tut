<x-header title={{ URL::current() }}/>

        <div class="relative flex items-top justify-center">
            <h1>Users Page</h1>


        </div>
        
        <h2>Basic Blade Template</h2>

        <h3>Perform logic like Add 20 + 10</h3>
        {{ 20+10 }} 
        
        
        
        <h3>Using if, else if and els</h3>
        @if ($user==="Anton")
        <h3>Hi {{ $user }}</h3>
        @elseif($user==='sam')
        <h3>Hi {{ $user }}</h3>
        @else
        <h3>Hello, Unkown user </h3>
        @endif

<x-footer/>