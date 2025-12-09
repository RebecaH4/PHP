@extends('app')
@section('title','Estudiantes')

@section('content')

<h1 style="text-align: center; color: #333; margin-bottom: 20px;">Estudiantes</h1>

<table style="width: 100%; border-collapse: collapse; background: #fff; 
               box-shadow: 0 0 10px rgba(0,0,0,0.1); border-radius: 6px; overflow: hidden;">
    <thead>
        <tr style="background-color: #007bff; color: white; text-align: left;">
            <th style="padding: 12px;">Id</th>
            <th style="padding: 12px;">Nombre</th>
            <th style="padding: 12px;">Phone</th>
            <th style="padding: 12px;">Language</th>
            <th style="padding: 12px;">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $student)
        <tr style="border-bottom: 1px solid #e0e0e0;">
            <td style="padding: 10px;">{{ $student['id'] }}</td>
            <td style="padding: 10px;">{{ $student['name'] }}</td>
            <td style="padding: 10px;">{{ $student['phone'] }}</td>
            <td style="padding: 10px;">{{ $student['language'] }}</td>
            <td style="padding: 10px;">
                <a href="{{ route('students.view',$student['id']) }}" 
                   style="color: #007bff; margin-right: 10px; text-decoration:none;">
                    Editar
                </a>

                <a href="{{ route('students.delete',$student['id']) }}" 
                   style="color: #dc3545; text-decoration:none;">
                    Borrar
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection