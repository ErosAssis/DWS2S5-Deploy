        @extends('layouts.main')

        @section('title', 'HDC Events')

        @section('content')
        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="Banner">
        @if(10 > 15)
        <p>A condição é true</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == "Eros")
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos e trabalha como {{ $profissao }}</p>
        @else
        <p>O nome não é Eros</p>
        @endif

        @for($i = 0; $i < count($arr); $i++) <p>{{ $arr[$i] }} - {{ $i }}</p>
            @if($i == 2)
            <p>O i é 2</p>
            @endif
            @endfor

            @foreach($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
            @endforeach

            @php
            $name = "Eros";
            echo $name;
            @endphp
        
        @endsection