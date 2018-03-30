<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Dashboard</title>

        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <img src="img/dash_logo.png" alt="Login Logo"> 
                </div>

                <ul id="accordion" class="list-unstyled components">
                    <!-- <p>Dummy Heading</p> -->
                    <li class="">
                        <a href="#first" aria-expanded="false"><img src="img/first.png"><span>FirstImage</span></a>
                        <!-- <ul class="collapse list-unstyled" id="first">
                            <li><a href="#">Subir Documentos</a></li>
                            <li><a href="#">Nueva Factura</a></li>
                            <li><a href="#">Facturas Emitidas</a></li>
                            <li><a href="#">Exportar Datos</a></li>
                        </ul> -->
                    </li>
                    <li>
                        <!-- <a href="#">About</a> -->
                         <a href="#second" aria-expanded="false"><img src="img/second.png"><span>Emisión Factura</span></a>
                        <ul class="collapse list-unstyled" id="second">
                            <li><a href="#">Subir Documentos</a></li>
                            <li><a href="nueva_factura.php">Nueva Factura</a></li>
                            <li><a href="#">Facturas Emitidas</a></li>
                            <li><a href="#">Exportar Datos</a></li>
                        </ul>                        
                    </li>
                    <li>
                        <a href="#third" aria-expanded="false"><img src="img/third.png"><span>Tickets</span></a>
                        <ul class="collapse list-unstyled" id="third">
                            <li><a href="#">Subir Ticket</a></li>
                            <li><a href="#">Nuevo Ticket</a></li>
                            <li><a href="#">Panel Tickets Rec.</a></li>
                            <li><a href="#">Nota Gastos</a></li>
                            <li><a href="#">Exportar Datos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#fourth" aria-expanded="false"><img src="img/fourth.png"><span>FourthImage</span></a>
                        <ul class="collapse list-unstyled" id="fourth">
                            <!-- <li><a href="#">Home 1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="#fifth" aria-expanded="false"><img src="img/fifth.png"><span>FifthImage</span></a>
                        <ul class="collapse list-unstyled" id="fifth">
                            <!-- <li><a href="#">Home 1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li> -->
                        </ul>
                    </li>
                    <li>
                        <a href="#sixth" aria-expanded="false"><img src="img/sixth.png"><span>Balances</span></a>
                        <ul class="collapse list-unstyled" id="sixth">
                            <li><a href="#">Cuenta PyG</a></li>
                            <li><a href="#">Balance y Situación</a></li>
                            <li><a href="#">Informes</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="#" class="powered"><img src="img/powered.png"></a>
            </nav>
