@extends('app')

@section('title', 'Alumnos')

@section('content')
<h1 style="font-family: Arial, sans-serif; color:#333; margin-bottom: 20px;">
    Nuevo estudiante
</h1>

<form 
    action="{{ route('students.store') }}" 
    method="POST" 
    style="max-width: 400px; background:#f9f9f9; padding:20px; border-radius:10px; box-shadow:0 2px 8px rgba(0,0,0,0.1); font-family: Arial, sans-serif;"
>
    @csrf 

    <label for="name" style="display:block; margin-bottom:5px; font-weight:bold;">
        Nombre
    </label>
    <input 
        type="text" 
        name="name" 
        id="name"
        style="width:100%; padding:8px; margin-bottom:15px; border:1px solid #ccc; border-radius:5px;"
    >

    <label for="phone" style="display:block; margin-bottom:5px; font-weight:bold;">
        Teléfono
    </label>
    <input 
        type="text" 
        name="phone" 
        id="phone"
        style="width:100%; padding:8px; margin-bottom:15px; border:1px solid #ccc; border-radius:5px;"
    >

    <label for="language" style="display:block; margin-bottom:5px; font-weight:bold;">
        Lenguaje
    </label>
    <input 
        type="text" 
        name="language" 
        id="language"
        style="width:100%; padding:8px; margin-bottom:20px; border:1px solid #ccc; border-radius:5px;"
    >

    <button 
        type="submit" 
        style="width:100%; padding:10px; background:#007bff; color:white; border:none; border-radius:5px; font-size:16px; cursor:pointer;"
    >
        Guardar
    </button>
</form>
@endsection
