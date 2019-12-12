@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>Responsable</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
      @foreach($proyectos as $proyecto)
      <tr>
      <td><a href="{{route('proyecto.show', $proyecto->id)}}">{{$proyecto->id}}</a></td>
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechafin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        @if(!is_null($proyecto->empleado))
          <td><a href="{{route('empleado', $proyecto->empleado->id)}}">{{$proyecto->empleado->nombre}}</td>
        @else
          <td></td> 
        @endif
          <td><a href="{{route('proyecto.edit', $proyecto->id)}}">Editar</a></td>
          <td>
            <form action="{{route('proyecto.destroy', $proyecto->id)}}" method="post">
              @method('DELETE')
              @csrf
              <input type="submit" value="Eliminar">
            </form>
          </td>
        </tr>
        @endforeach
    </table>
@endsection