<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makers Ia</title>
    <link rel="stylesheet" href="index.css">
   

</head>

<body>
    <style>
        .Maps {
            position: relative;
            width: 600px;
            height: 500px;
            background: #fff;
        }

        .Maps iframe {
            width: 100%;
            height: 100%;
        }

        .caja#rayita {
            text-align: center;
        }

        .icons {
            display: flex;
            justify-content: center;
            align-items: center;
            list-style: none;
            padding: 0;
        }

        .icons li {
            margin: 0 10px;
            /* Espaciado entre los íconos */
        }

        .icons img {
            width: 30px;
            height: auto;
            transition: filter 0.3s ease;
            /* Agregamos una transición al filtro */
        }

        .icons a:hover img {
            filter: invert(1);
            /* Cambiamos el color al hacer hover */
        }


        .grupo-1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }



        body {

            padding: 0;
            font-family: Arial, sans-serif;
        }

        section#inicio {
            position: relative;
            overflow: hidden;
            height: 100vh;
        }

        #content {
            position: relative;
            z-index: 1;
            padding: 20px;
        }




        video {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
        }

        img {
            width: 27%;
            height: auto;
            float: right;
            shape-outside: rectangle(0, 0, 0, 100%);
        }

        /* Importing Google font - Open Sans */
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap');

        * {

            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        .card-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            max-width: 1250px;
            margin: 100px auto;
            padding: 20px;
            gap: 20px;
        }

        .card-list .card-item {
            background: #fff;
            padding: 26px;
            border-radius: 8px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.04);
            list-style: none;
            cursor: pointer;
            text-decoration: none;
            border: 2px solid transparent;
            transition: border 0.5s ease;
        }

        .card-list .card-item:hover {
            border: 2px solid #000;
        }

        .card-list .card-item img {
            width: 100%;
            aspect-ratio: 16/9;
            border-radius: 8px;
            object-fit: cover;
        }

        .card-list span {
            display: inline-block;
            background: #ffffff;
            margin-top: 32px;
            padding: 8px 15px;
            font-size: 0.75rem;
            border-radius: 50px;
            font-weight: 600;
        }

        .card-list .developer {
            background-color: #ffffff;
            color: #B22485;
        }

        .card-list .designer {
            background-color: #ffffff;
            color: #2968a8;
        }

        .card-list .editor {
            background-color: #ffffff;
            color: #205c20;
        }

        .card-item h3 {
            color: #000;
            font-size: 1.438rem;
            margin-top: 28px;
            font-weight: 600;
        }

        .card-item .arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            transform: rotate(-35deg);
            height: 40px;
            width: 40px;
            color: #000;
            border: 1px solid #000;
            border-radius: 50%;
            margin-top: 40px;
            transition: 0.2s ease;
        }

        .card-list .card-item:hover .arrow {
            background: #000;
            color: #fff;
        }

        @media (max-width: 1200px) {
            .card-list .card-item {
                padding: 15px;
            }
        }

        @media screen and (max-width: 980px) {
            .card-list {
                margin: 0 auto;
            }
        }

        ul {

            display: flex;
            margin-right: 10px;
        }

        ul li a {

            display: inline-block;
            padding: 20px 40px;
            font-size: 1.3rem;
            color: #black;
        }

        ul li a:hover {
            background: #570dd6ff;
            border: 2px solid #fff;
            padding: 17px 35px;
        }

        .miVideo {
            position: relative;
            top: -30px
        }

        .text-1,
        .text-3 {
            color: #fff;
            /* Texto blanco */
        }

        .icons img {
            width: 30px;
            /* Ajusta el tamaño según tus preferencias */
            height: auto;
            /* Esto permite que la altura se ajuste automáticamente manteniendo la proporción original */
        }

        .caja {
            color: white;
            /* Color de texto blanco */
        }

        #redes,
        #c {
            color: black;
            /* Color de texto blanco */
        }

        .white-footer {
            background-color: white;
        }

        .menu a {
            color: black;
        }
    </style>



    <nav class="navbar">
        <div class="max-width navbar-container">
            <div class="logo"><a href="#">Makers<span>IA.</span></a></div>

            <ul class="menu">
                <li><a href="iniciosesionadmi.php">Registro Administrador</a></li>
                <li><a href="iniciodesesion.php">Inicia sesión</a></li>
            </ul>



            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>



    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Makers IA: Innovación con chatbot inteligente para tu negocio</div>

            </div>
        </div>
    </section>
    <!-- home section start -->




    <br><br><br><br><br><br><br><br>
    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contactanos</h2>
            <div class="contact-content">
                <footer class="white-footer">

                    <div class="animated">
                        <div class="wave" id="wave1"></div>
                        <div class="wave" id="wave2"></div>

                    </div>

                    <div class="grupo-1">
                        <div class="caja">
                           
                        </div>



                        <div class="caja" id="rayita">
                            <p class="foot" id="redes">REDES SOCIALES</p>

                            <ul class="icons">
                                <li>
                                    <a href="https://www.tiktok.com/@innovation.system?_t=8hiY9wzp1Nu&_r=1"
                                        class="tiktok">
                                        <!-- Reemplaza "your_username" con tu nombre de usuario de TikTok -->
                                        <img src="tik tok.png" alt="TikTok">
                                        <!-- Asegúrate de tener un archivo de imagen para TikTok (tiktok.png) -->
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/system_inovattion/" class="instagram">
                                        <img src="ig.png" alt="Instagram">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/Systeminovation" class="twitter">
                                        <img src="twiter.png" alt="Twitter">
                                    </a>
                                </li>
                            </ul>
                        </div>



                        <div class="caja" id="cajacontac">
                            <p class="foot" id="c">CONTACTO</p>
                            <div class="contacto">
                                <br>
                                <ul class="icons">
                                    <li>
                                        <a href="https://w.app/0zsmzc"
                                            class="whatsapp">
                                            <img src="what.png" alt="WhatsApp">
                                        </a>
                                    </li>
                                </ul><br>




                </footer>
                <!-- footer section start -->


                <script src="script2.js"></script>
</body>

</html>