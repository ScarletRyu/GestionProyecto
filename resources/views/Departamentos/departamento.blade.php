@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>
    <tr>
      <td>{{$departamento->id}}</a></td>
      <td>{{$departamento->nombre}}</td>
    </tr>
  </table>

@endsection