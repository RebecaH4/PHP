@extends('app')

@section('title', 'Alumnos')

@section('content')

<h1 style="text-align:center; font-family:Arial; color:#444; margin-bottom:25px;">
    Editar Estudiante
</h1>

<form action="{{ route('students.update') }}" method="POST"
      style="
        max-width: 420px;
        margin: auto;
        padding: 25px;
        border-radius: 15px;
        background: linear-gradient(135deg, #e3f2ff, #ffffff);
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        font-family: Arial, sans-serif;
      ">
    
    @csrf

    <label for="name" style="display:block; margin-bottom:6px; font-weight:bold; color:#333;">
        Nombre
    </label>
    <input type="text" name="name" id="name" value="{{ $data['name'] }}"
        style="
            width:100%;
            padding:12px;
            margin-bottom:18px;
            border:1px solid #b6d4ff;
            border-radius:10px;
            background:#f8fbff;
            font-size:15px;
        ">

    <label for="phone" style="display:block; margin-bottom:6px; font-weight:bold; color:#333;">
        Celular
    </label>
    <input type="text" name="phone" id="phone" value="{{ $data['phone'] }}"
        style="
            width:100%;
            padding:12px;
            margin-bottom:18px;
            border:1px solid #b6d4ff;
            border-radius:10px;
            background:#f8fbff;
            font-size:15px;
        ">

    <label for="language" style="display:block; margin-bottom:6px; font-weight:bold; color:#333;">
        Lenguaje
    </label>
    <input type="text" name="language" id="language" value="{{ $data['language'] }}"
        style="
            width:100%;
            padding:12px;
            margin-bottom:22px;
            border:1px solid #b6d4ff;
            border-radius:10px;
            background:#f8fbff;
            font-size:15px;
        ">
    
    <button type="submit"
        style="
            width:100%;
            padding:14px;
            background:#0d6efd;
            background: linear-gradient(135deg, #0b5ed7, #0d6efd);
            color:white;
            font-size:17px;
            border:none;
            border-radius:10px;
            cursor:pointer;
            transition: 0.2s;
        "
        onmouseover="this.style.opacity='0.9'"
        onmouseout="this.style.opacity='1'">
        Actualizar
    </button>

</form>

@endsection
