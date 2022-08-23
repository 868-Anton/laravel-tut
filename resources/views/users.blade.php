<x-header title={{ URL::current() }}/>

        <div class="relative flex items-top justify-center">
            <h1>Users Page</h1>
        </div>
        
        <h2>Basic Blade Template</h2>


        <h3>Perform logic like Add 20 + 10</h3>
        {{ 20+10 }} 
        
        
        
        {{-- <div class="flex align-content-sm-end">
            <h3>Using if, else if and else</h3>
            @if ($user==="Anton")
            <h3>Hi {{ $user }}</h3>
            @elseif($user==='sam')
            <h3>Hi {{ $user }}</h3>
            <p>data passed in controller 'user'=>'sam' </p>
            @else
            <h3>Hello, Unkown user </h3>
            @endif
        </div> --}}

        <div class="flex justify">
        <h3>Using foreach</h3>
        @foreach ($users as $user)
            <h4>{{ $user }} is a registered user</h4>
        @endforeach
        </div>



<x-footer/>