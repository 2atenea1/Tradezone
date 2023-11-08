@extends('plantilla.plantilla')

@section('contenido')
<div class="men">

    <div class="imagentitulo">
        <h1 class="til">Historial</h1>
    </div>
    <div class="cuadro">
        <table class="tae">
            <thead class="hea">
                <tr class="t" >
                    <th class="h">Nombre</th>
                    <th class="h">Fecha</th>
                    <th class="h">Imprimir</th>
                </tr>
            </thead>
            <tbody class="bod">
                <tr class="t">
                    <td class="d">venta 1</td>
                    <td class="d">18/08/2023</td>
                    <td class="d"><button class="text1" id="btn">Imprimir</button></td>
                </tr>
                <tr class="t">
                    <td class="d">venta 2</td>
                    <td class="d">09/09/2023</td>
                    <td class="d"><button class="text1" id="btn">Imprimir</button></td>
                </tr class="t">
                <tr class="t">
                    <td class="d">venta 3</td>
                    <td class="d">23/10/2023</td>
                    <td class="d"><button class="text1" id="btn">Imprimir</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
@endsection