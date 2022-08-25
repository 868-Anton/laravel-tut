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
        @include('inner');

    <h2>Using foreach</h2>

    <h3>Here is a list of auth users.</h3>

    @foreach ($users as $item )
        <p>{{ $item }}</p>
    @endforeach
@csrf

<script>
    //add Js to PHP
    var data = @json($users)

    console.log(data)
    data[0] = 'Mike'
    console.warn(data)
</script>
<x-footer/>