@extends('layouts.main')

@section('title','HDC Eventos')

@section('content')

   <div id="search-container" class="col-md-12">
      <h1>Busque um evento </h1>
          <form action="/" method="GET">
               <input type="text" id="search" name="search" class="form-control" placeholder= "Procurar">
           </form>
   </div>

   <div id="events-container" class="col-md-12">
     <h2>Proximos Eventos</h2>
           <p class="subtitle">Veja os eventos dos proximos dias</p>
               <div id="cards-container" class="row">
                    @foreach($events as $event)
                         <div class="card col-md3">
                              <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                              <div class="card-body">
                                   <div class="card-date">{{date('d/m/Y', strtotime($event->date))}}</div>
                                   <h5 class="card-title">{{$event->title}}</h5>
                                   <p> <div class="card-participants">{{count($event->users)}} Participantes</div></p>
                                   <a href="/events/{{$event -> id}}" class="btn btn-primary"> Saber mais</a>

                              </div>
                         </div>

                    @endforeach
                    @if(count($events) == 0 && $search)
                    <p>Não foi possivel encontrar nenhum evento com {{$search}}! <a href="/">Ver todos</a> </p>
                    @elseif(count($events) == 0 )
                    <p>Não há eventos disponíveis </p>
                    @endif
                    




               </div>

   </div>


       <!-- Comentario HTML --> 
        {{--  Este é o comentario em blade--}}

@endsection
