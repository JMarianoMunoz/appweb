<?php include("cabecera.php");?>
<br/>

<div class="container">
    <div class="row">
        <div class="col-10">
                <div class="card">
            <div class="card-header">
                Ingrese un nuevo cliente
            </div>
            <div class="card-body">
                <form action="agregarcliente.php" method="POST">

                Nombres y Apellidos: <input class="form-control" type="text"  name="nombre" id="">
                <br/>
                Cédula: <input class="form-control" type="text"  name="cedula" id="">
                <br/>
                Carro que desea reservar: <input class="form-control" list="listacarros"  name="reserva" id="">
                <datalist id="listacarros">
                    <option value="Megane Classic 2004">
                    <option value="Logan 2013">
                    <option value="Duster 2021">
                    <option value="Megane 2013">
                </datalist>
                <br/>
                <br/>
                <input class="btn btn-primary" type="submit" name="registrocl" value="Agregar Cliente">
                
                </form>
            </div>
        </div>