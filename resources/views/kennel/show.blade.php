@extends('layouts.layout')

@section('content')
 <div class='container'>
    <div class="row">
        <div class="col-md-5">
            <div class="mb-3"><h1>{{ $kennel->id}} питомник</h1></div>
            <form action="{{route ('kennel.store')}}" method="post">
                @csrf

                <div class="mb-3">
                  
                   <div> <strong> {{$kennel->date}}</strong> создан питомник:{{$kennel->name}}. <strong>Владельцем питомника назначен(а):</strong> {{$kennel->owner}}. В питомнике в настоящее время {{$kennel->dogs}} собак.</div>

               <a href="{{ route('kennel.edit', $kennel->id)}}" class="btn btn-dark">редактировать</a>  <br> 
             </form>

             <form action="{{route('kennel.destroy', $kennel->id)}}" method="post">
                    @csrf
                    @method('delete')
                    
                <button type="submit" class="btn btn-dark" value="delete">удалить</button>
            </form> 

                 <br><a href="{{ route('kennel.index')}}">на главную</a>  


           
            
        </div>
    </div>
 </div>
 
    
@endsection