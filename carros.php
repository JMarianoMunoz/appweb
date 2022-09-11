<?php include("cabecera.php");?>
<br/>

<div class="container">
    <div class="row">
        <div class="col-6">
                <div class="card">
            <div class="card-header">
                Ingrese un nuevo carro
            </div>
            <div class="card-body">
                <form action="agregarcarro.php" method="POST">
                
                Identificador de referencia: <input class="form-control" type="text"  name="ref" id="">
                <br/>
                Nombre del carro: <input class="form-control" type="text"  name="carro" id="">
                <br/>
                Planta que lo produce: <input class="form-control" type="text"  name="planta" id="">
                <br/>
                Fecha de ensamblaje: <input class="form-control" type="date"  name="ensamble" id="">
                <br/>
                Modelo según matrícula: <input class="form-control" type="text"  name="modelo" id="">
                <br/>
                Ciudad de almacenamiento: <input class="form-control" type="text"  name="ciudad" id="">
                <br/>
                <br/>
                <input class="btn btn-primary" type="submit" name="registrocar" value="Agregar carro">
                
                </form>
                <?php

                include("agregarcarro.php");

                ?>
            </div>
        </div>
    </div>
</div>
