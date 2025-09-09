


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Reegistro Admin</title>
  
    <link rel="stylesheet" href="crearcuenta2.css" >
</head>

<body>
    <br><br><br><br><br>
    <section class="container">
        <header>REGISTRO</header>
        <form action="insertaradmi.php" class="form" method="post">
            <div class="input-box">
                <label>Nombre Completo</label>
                <input type="text" name="nombre" placeholder="ingresa tu nombre completo" required />
            </div>

            <div class="input-box">
                <label>Correo electonico</label>
                <input type="text" name="correo" placeholder="ingresa tu correo electronico" required />
            </div>

            <div class="input-box">
                <label>Contraseña</label>
                <input type="password" name="clave" placeholder="ingresa tu contraseña" required />
            </div>

            <div class="column">
            <div class="input-box">
                    <label>Numero  telefonico</label>
                    <input type="number" name="celular" placeholder="ingresa tu numero telefonico" required />
                </div>
               
                <div class="input-box">
                    <label>Fecha de nacimiento</label>
                    <input type="date" name="nacimiento" placeholder="ingresa tu fecha de cumpleaños" required />
                </div>
            </div>
            <div class="gender-box">
                <h3>Genero</h3>
                <div class="gender-option">
                    <div class="gender">
                        <input type="radio" id="check-male" name="genero" checked />
                        <label for="check-male">masculino</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-female" name="genero" />
                        <label for="check-female">Femenino</label>
                    </div>
                    <div class="gender">
                        <input type="radio" id="check-other" name="genero" />
                        <label for="check-other">prefiero no decirlo</label>
                    </div>
                </div>
            </div>
            <style>
        body {
            font-family: Arial, sans-serif;
        }

        .input-box {
            width: 300px;
            padding: 20px;
            margin: 20px auto;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .input-box input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .input-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .input-box input[type="submit"]:hover {
            background-color: #45a049;
        }

        .login-btn, .register-btn {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            background-color: white;
            color: white;
       
            border-radius: 5px;
           
        }

        .login-btn:hover, .register-btn:hover {
            background-color: #e6e6e6;
        }
        .register-btn {
        text-align: center;
        margin-top: 20px;
    }

    .register-btn input[type="submit"] {
        background-color: #4CAF50; /* Green background color */
        color: white; /* White text color */
        padding: 10px 20px; /* Padding for better appearance */
        border: none; /* Remove border */
        border-radius: 5px; /* Optional: rounded corners */
        cursor: pointer; /* Add a pointer cursor on hover */
        font-size: 16px; /* Font size */
        text-decoration: none; /* Remove underlines for links */
    }

    /* Change button color on hover */
    .register-btn input[type="submit"]:hover {
        background-color: #45a049;
    }
    .input-box input[type="text"],
.input-box input[type="number"],
.input-box input[type="password"],
.input-box input[type="date"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid black; /* Black border */
    border-radius: 3px;
}

.input-box input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Rest of your styles */

       
    </style>
</head>
<body>
    <div class="input-box address">
        <div class="column">
            <input type="number" name="cedula" placeholder="Cedula" required />
        </div>
    </div>

 
 
</div>
<p> <a href="iniciosesionadmi.php">¿Ya tienes una cuenta?<b>Inicia Sesión</b></a></p>
    <a href="index.php" id="atras-btn">atras</a>
</body>
</html>
        </form>
    </section>
</body>

</html>