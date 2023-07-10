@extends('layouts.plantilla')

@section('content')
    
</head>
<body>
    <form action="{{route('soldados.store')}}"method="post">@csrf  <label>
        Nombre 
        <br>
        <input type="text" name="nombre">
    </label>
    <br>
    <label>
            apellido
            <br>
            <input type="text" name="apellido">
        </label>
        <br>
        <label>
                descripcion
                <br>
                <input type="text" name="descripcion">
            </label>
            
        
    <br><br>
    <button type="submit">Enviar Formulario:</button> </form> 