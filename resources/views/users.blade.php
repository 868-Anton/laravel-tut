<x-header title={{ URL::current() }}/>

        <div>
            <h1 class="text-4xl">Users Page</h1>
        </div>
        
        <h2 class="text-lg">Basic Blade Template</h2>


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

        <div>
        <h3>Using foreach</h3>
        @foreach ($users as $user)
            <h4>{{ $user }} is a registered user</h4>
        @endforeach
        </div>



<x-footer/>