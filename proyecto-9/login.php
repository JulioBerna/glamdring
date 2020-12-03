<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title>LOGIN</title>
    <meta name="description" content="login">
    <meta name="viewport" content="width=device width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos-login.css"/>
    <!-- <link rel="shortcut icon" type="image/png" href="/favicon.ico"/> -->

</head>

<body>
    
    <!-- HEADER: MENU + HEROE SECTION -->

    <header>
    
        <div class="menu">
            <ul>            
                <li class="logo">
                    <a href="logoJRCJ.docx" target="blank">

                        <img src="logoJRCJ.png" alt="visita la web JRCJ" title="logo JRCJ">
                    </a>
                </li>
            </ul>    
        </div>

        <div class="empresa"> 
            <li class=""><b>URBANMOVE</b></li>
        </div>

        <div class="menu">        
            <ul>           
                <li class="menu-item hidden"><a href="#">INICIO</a></li>
                <li class="menu-item hidden"><a href="#">REGISTRO</a></li>
                <li class="menu-item hidden"><a href="#">INICIAR SESION</a></li>
            </ul>        
        </div>

        <br/>
    
    </header>
    
        <div class="formulario">
        
            <form method="POST" action="">
            
                <input type="text" name="nombre" id="nombretabla"  placeholder="Nombre:" value="">
                <input type="password" name="password" id="password"  placeholder="Contraseña:" value="">
                <input type="submit" name="submit" class="boton-submit" value="Acceder">
                
            </form>
        </div>

</body>

</html>