<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <h2>este es mi nuevo componente</h2>
    <h1>el tiupo de error es {{$type}}</h1>
    <h1>este es un mensaje: {{$mensaje}}</h1>

    @foreach($lenguajes('c#') as $item)

    <h4>{{$item}}</h4>

    @endforeach

</div>