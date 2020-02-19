@extends('layout')

@section('content')

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>    
        @endforeach
    </ul>
<h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat temporibus consequatur ipsum ullam ratione rem deserunt nobis totam quam perspiciatis nulla tempora, repudiandae illum? Assumenda, saepe corrupti? Fuga doloremque amet commodi iusto possimus rem deserunt ipsam, dolore minus. Iste pariatur voluptatem hic facilis aperiam quam qui non nam illum distinctio repellat laboriosam, sapiente, natus dolorem architecto iure sequi eos deleniti modi odit autem asperiores iusto velit rerum! Aut veritatis asperiores ullam explicabo accusamus totam iure aliquam rem voluptates, eaque libero officiis odio. Officia, architecto aliquid. Mollitia rerum molestiae ad voluptas, excepturi ab aut laudantium accusamus, nam id repellat ut autem!</p>
@endsection