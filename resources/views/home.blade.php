@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section>
    @foreach ($trains as $train )

        <h2 class="text-center pt-5">{{$train->azienda}}</h2>
        <div class="table-responsive pt-3"> 
        <table class="table align-middle table-bordered ">
            <thead class="table-active align-middle ">
                <tr>
                <th scope="col">stazione di partenza</th>
                <th scope="col">stazione di arrivo</th>
                <th scope="col">orario di partenza</th>
                <th scope="col">orario di arrivo</th>
                <th scope="col">codice treno</th>
                <th scope="col">numero carrozza</th>
                <th scope="col">prezzo biglietto</th>
                <th scope="col">in orario</th>
                <th scope="col">cancellato</th>
                <th scope="col">tipo di treno</th>
                <th scope="col">disponibilità posti</th>

                </tr>
            </thead>
            <tbody >
                <tr>
                <td>{{$train->stazione_di_partenza}}</td>
                <td>{{$train->stazione_di_arrivo}}</td>
                <td>{{$train->orario_di_partenza}}</td>
                <td>{{$train->orario_di_arrivo}}</td>
                <td>{{$train->codice_treno}}</td>
                <td>{{$train->numero_carrozze}}</td>
                <td>{{$train->prezzo_biglietto}}</td>
                <td>{{$train->in_orario}}</td>
                <td>{{$train->cancellato}}</td>
                <td>{{$train->tipo_di_treno}}</td>
                <td>{{$train->disponibilità_posti}}</td>
                </tr>
            </tbody>
        </table>  
        </div>    
    @endforeach
  
</section>

@endsection
