<x-header/>

    <div class="relative flex items-top justify-center">
        <h1>About</h1>
    </div>

    <div >
        <p>This is my current url page:  {{ URL::current() }}</p>
        <p>This is my previous url page:  {{ URL::previous() }}</p>
        <p>This is my full URL page:  {{ URL::full() }}</p>
    </div>

    <div>
        <form action="{{ URL::to('/home') }}" method="post">
            <input type="text" name="text">
            <button type="submit"></button>
        </form>
                    
    </div>
<x-footer/>
