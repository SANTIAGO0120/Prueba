<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Ccompatible" content="ie=edge">
    <title>Login y Register - Guadalupana</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        font-family: 'Roboto', sans-serif;
    }

    body {
        background-image: url(../imagen/fondo.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    }

    main {
        width: 100%;
        padding: 20px;
        margin: auto;
        margin-top: 100px;
    }

    .contenedor__todo {
        width: 100%;
        max-width: 800px;
        margin: auto;
        position: relative;
    }

    .caja__trasera {
        width: 100%;
        padding: 10px 20px;
        display: flex;
        justify-content: center;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        background-color: rgba(225, 0, 255, 0.3);

    }

    .caja__trasera div {
        margin: 100px 40px;
        color: white;
        transition: all 500ms;
    }


    .caja__trasera div p,
    .caja__trasera button {
        margin-top: 30px;
    }

    .caja__trasera div h3 {
        font-weight: 400;
        font-size: 26px;
    }

    .caja__trasera div p {
        font-size: 16px;
        font-weight: 300;
    }

    .caja__trasera button {
        padding: 10px 40px;
        border: 2px solid #fff;
        font-size: 14px;
        background: transparent;
        font-weight: 600;
        cursor: pointer;
        color: white;
        outline: none;
        transition: all 300ms;
    }

    .caja__trasera button:hover {
        background: #fff;
        color: #46A2FD;
    }

    .contenedor__login-register {
        display: flex;
        align-items: center;
        width: 100%;
        max-width: 380px;
        position: relative;
        top: -166px;
        left: 10px;
        transition: left 500ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
    }

    .contenedor__login-register form {
        width: 100%;
        padding: 80px 20px;
        background: white;
        position: absolute;
        border-radius: 20px;
    }

    .contenedor__login-register form h2 {
        font-size: 30px;
        text-align: center;
        margin-bottom: 20px;
        color: #46A2FD;
    }

    .contenedor__login-register form input {
        width: 100%;
        margin-top: 20px;
        padding: 10px;
        border: none;
        background: #F2F2F2;
        font-size: 16px;
        outline: none;
    }

    .contenedor__login-register form button {
        padding: 10px 40px;
        margin-top: 40px;
        border: none;
        font-size: 14px;
        background: #46A2FD;
        font-weight: 600;
        cursor: pointer;
        color: white;
        outline: none;
    }

    .formulario__register select {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        border: none;
        background: #F2F2F2;
        font-size: 16px;
        outline: none;
        border-radius: 5px;
    }

    .formulario__register select option[disabled] {
        color: #999;
    }


    .formulario__login {
        opacity: 1;
        display: block;
    }

    .formulario__register {
        display: none;
    }



    @media screen and (max-width: 850px) {

        main {
            margin-top: 50px;
        }

        .caja__trasera {
            max-width: 350px;
            height: 300px;
            flex-direction: column;
            margin: auto;
        }

        .caja__trasera div {
            margin: 0px;
            position: absolute;
        }


        /Formularios/

        .contenedor__login-register {
            top: -10px;
            left: -5px;
            margin: auto;
        }

        .contenedor__login-register form {
            position: relative;
        }
    }
</style>

<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <a href="#"><button id="btn__iniciar-sesion">Iniciar Sesión</button></a>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <a href="#"><button id="btn__registrarse">Regístrarse</button></a>
                </div>
            </div>

            <div class="contenedor__login-register">
                {{-- login --}}
                <form method="POST" action="{{ route('login') }}" class="formulario__login">
                    @csrf
                    <h2>Iniciar Sesión</h2>

                    <label for="email">Correo Electrónico:</label>
                    <input type="text" id="email" name="email" placeholder="Correo Electrónico" required>

                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña" required>

                    <button type="submit">Entrar</button>
                </form>

                {{-- registro --}}
                <form method="POST" action="{{ route('register') }}" class="formulario__register">
                    @csrf
                    <h2>Registrarse</h2>

                    <label for="email">Correo Electrónico:</label>
                    <input type="text" id="email" name="email" placeholder="Correo Electrónico" required>

                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña" required>

                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="nombre" placeholder="Nombre" required>

                    <label for="lastName">Apellidos:</label>
                    <input type="text" id="lastName" name="apellido" placeholder="Apellidos" required>

                    <label for="idtype">Tipo de Identificación:</label>
                    <select class="idtype" id="idtype" name="tipo_id" required>
                        <option value="">Seleccione...</option>
                        <option value="cc">Cédula de Ciudadanía</option>
                        <option value="ce">Cédula de Extranjería</option>
                        <option value="ti">Tarjeta de Identidad</option>
                    </select>

                    <label for="idNumber">N. Identificación:</label>
                    <input type="text" id="idNumber" name="n_id" placeholder="N. Identificación" required>

                    <label for="phone">N. Celular:</label>
                    <input type="number" id="phone" name="celular" placeholder="N. Celular" required>

                    <label for="address">Dirección:</label>
                    <input type="text" id="address" name="direccion" placeholder="Dirección" required>

                    <button type="submit">Registrarse</button>
                </form>

            </div>
        </div>
    </main>

    <script>
        //Ejecutando funciones
        document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
        document.getElementById("btn__registrarse").addEventListener("click", register);
        window.addEventListener("resize", anchoPage);

        //Declarando variables
        var formulario_login = document.querySelector(".formulario__login");
        var formulario_register = document.querySelector(".formulario__register");
        var contenedor_login_register = document.querySelector(".contenedor__login-register");
        var caja_trasera_login = document.querySelector(".caja__trasera-login");
        var caja_trasera_register = document.querySelector(".caja__trasera-register");

        //FUNCIONES

        function anchoPage() {

            if (window.innerWidth > 850) {
                caja_trasera_register.style.display = "block";
                caja_trasera_login.style.display = "block";
            } else {
                caja_trasera_register.style.display = "block";
                caja_trasera_register.style.opacity = "1";
                caja_trasera_login.style.display = "none";
                formulario_login.style.display = "block";
                contenedor_login_register.style.left = "0px";
                formulario_register.style.display = "none";
            }
        }

        anchoPage();


        function iniciarSesion() {
            if (window.innerWidth > 850) {
                formulario_login.style.display = "block";
                contenedor_login_register.style.left = "10px";
                formulario_register.style.display = "none";
                caja_trasera_register.style.opacity = "1";
                caja_trasera_login.style.opacity = "0";
            } else {
                formulario_login.style.display = "block";
                contenedor_login_register.style.left = "0px";
                formulario_register.style.display = "none";
                caja_trasera_register.style.display = "block";
                caja_trasera_login.style.display = "none";
            }
        }

        function register() {
            if (window.innerWidth > 850) {
                formulario_register.style.display = "block";
                contenedor_login_register.style.left = "410px";
                formulario_login.style.display = "none";
                caja_trasera_register.style.opacity = "0";
                caja_trasera_login.style.opacity = "1";
            } else {
                formulario_register.style.display = "block";
                contenedor_login_register.style.left = "0px";
                formulario_login.style.display = "none";
                caja_trasera_register.style.display = "none";
                caja_trasera_login.style.display = "block";
                caja_trasera_login.style.opacity = "1";
            }
        }
    </script>
</body>

</html>