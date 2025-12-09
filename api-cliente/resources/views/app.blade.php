<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(135deg, #74b9ff, #a29bfe);
    min-height: 100vh;
">

    <header style="
        padding: 20px;
        text-align: center;
        color: white;
        background: rgba(0,0,0,0.15);
        backdrop-filter: blur(4px);
        box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    ">
        <h1 style="margin: 0; font-size: 32px; letter-spacing: 1px;">
            Gestión de Estudiantes
        </h1>
    </header>


    <div style="text-align: center; margin: 30px 0;">
        <a href=""
           style="
                display: inline-block;
                padding: 12px 25px;
                margin-right: 10px;
                background: #0984e3;
                color: #fff;
                text-decoration: none;
                border-radius: 30px;
                font-size: 16px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                transition: 0.2s;
           "
           onmouseover="this.style.transform='scale(1.05)'"
           onmouseout="this.style.transform='scale(1)'">
            Actualizar Lista
        </a>

        <a href="{{ route('students.create') }}"
           style="
                display: inline-block;
                padding: 12px 25px;
                background: #00b894;
                color: #fff;
                text-decoration: none;
                border-radius: 30px;
                font-size: 16px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                transition: 0.2s;
           "
           onmouseover="this.style.transform='scale(1.05)'"
           onmouseout="this.style.transform='scale(1)'">
            Crear Estudiante
        </a>
    </div>


    <div style="
        max-width: 900px;
        margin: auto;
        background: rgba(255,255,255,0.9);
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        backdrop-filter: blur(6px);
    ">
        @yield('content')
    </div>

</body>
</html>
