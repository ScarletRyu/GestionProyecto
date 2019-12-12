@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>
    <form method="post" action="{{route('proyecto.update', $proyecto->id)}}">
      @csrf
      @method('PUT')
      Nombre: <input type="text" name="nombre" value="{{$proyecto->nombre}}"><br>
      Titulo: <input type="text" name="titulo" value="{{$proyecto->titulo}}"><br>
      Fecha inicio: <input type="date" name="fechaI" value="{{$proyecto->fechainicio}}"><br>
      Fecha fin: <input type="date" name="fechaF" value="{{$proyecto->fechafin}}"><br>
      Horas estimadas: <input type="number" name="horasE" value="{{$proyecto->horasestimadas}}"><br>
      Responsable: <select name="res">
        @foreach($empleados as $empleado)
          @if($empleado->id === $proyecto->responsable)
            <option value="{{$empleado->id}}" selected>{{$empleado->nombre}}</option>
          @else
            <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
          @endif
        @endforeach
      </select>
      <input type="submit" name="update" value="Actualizar">
    </form>
@endsection