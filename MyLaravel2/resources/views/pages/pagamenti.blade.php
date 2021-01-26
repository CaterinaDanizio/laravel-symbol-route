@extends('layout.main-layout')

@section('content')
    <h1>PAGAMENTI</h1>
    <ul>
    
<!-- Verifico se l'indice dell'elemento è pari o dispari -->
        @foreach ($pagamenti as $pagamento)
            

            @if ($loop -> iteration % 2 == 0)
             <li class="red">
            
            @else
             <li class="green">
            @endif

<!-- Stampo elenco pagamento riportando i dati principali -->
            {{ $pagamento['id'] }}
            {{ $pagamento['status'] }} 
            {{ $pagamento['price'] }} 
            </li>
        @endforeach
    </ul>
    <br>
@endsection