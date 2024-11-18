<?php 

include("conectar.php");

if(isset($_POST['register'])) {
    if(
        strlen($_POST['name']) >= 1&&
        strlen($_POST['email']) >= 1&&
        strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['phone']) >= 1&&
        strlen($_POST['password']) >= 1
    ){

        $name= trim($_POST['name']);
        $email= trim($_POST['email']);
        $direccion= trim($_POST['direccion']);
        $phone= trim($_POST['phone']);
        $password= trim($_POST['password']);

        $consulta = "INSERT INTO registros(Nombre, Email, Direccion, Telefono, Contraseña)
          VALUES('$name','$email', '$direccion', '$phone', '$password')";       
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado){

            ?>
            <h3 class="success" >Tu Registro se a completado </h3>
            <?php
        } else {
            ?>

            <h3 class="error">Ocurrio un error</h3>
            <?php
        }

    } else {
        ?>
        <h3 class="error">Llena los campos no sea imbecil</h3>
        <?php
    }
        
}

 


?>