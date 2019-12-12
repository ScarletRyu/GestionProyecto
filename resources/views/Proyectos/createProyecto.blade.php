@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>
    <form method="post" action="{{route('proyecto.store')}}">
      @csrf
      Nombre: <input type="text" name="nombre"><br>
      Titulo: <input type="text" name="titulo"><br>
      Fecha inicio: <input type="date" name="fechaI"><br>
      Fecha fin: <input type="date" name="fechaF"><br>
      Horas estimadas: <input type="number" name="horasE"><br>
      Responsable: <select name="res">
        @foreach($empleados as $empleado)
        <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>
        @endforeach
      </select>
      <input type="submit" name="guardar" value="Guardar">
    </form>
@endsection