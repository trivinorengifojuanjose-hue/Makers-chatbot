<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot ConfiguroWeb</title>
    <!-- Se mantiene la importación de la fuente y los iconos -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Estilos CSS con temática tecnológica */
        :root {
            --color-bg-dark: #0f172a;
            --color-bg-light: #1e293b;
            --color-accent-blue: #00bcd4;
            --color-accent-magenta: #ff00ff;
            --color-text-light: #e2e8f0;
            --color-text-dark: #cbd5e1;
            /* Se eliminan las variables de brillo para un efecto más sutil */
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        html, body {
            display: grid;
            height: 100%;
            place-items: center;
            background: var(--color-bg-dark);
        }
        ::selection {
            color: var(--color-bg-dark);
            background: var(--color-accent-blue);
        }
        /* Estilo de la barra de desplazamiento (scrollbar) sin efectos de brillo */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: var(--color-bg-light);
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb {
            background: var(--color-accent-blue);
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--color-accent-magenta);
        }
        /* Contenedor principal del chat */
        .wrapper {
            width: 370px;
            background: var(--color-bg-light);
            border-radius: 10px;
            border: 1px solid var(--color-text-dark);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Sombra más suave */
            overflow: hidden;
        }
        .wrapper .title {
            background: var(--color-bg-light);
            color: var(--color-accent-blue);
            font-size: 20px;
            font-weight: 600;
            line-height: 60px;
            text-align: center;
            border-bottom: 1px solid var(--color-accent-blue);
            text-transform: uppercase;
        }
        /* Área de mensajes del chat */
        .wrapper .form {
            padding: 20px 15px;
            min-height: 400px;
            max-height: 400px;
            overflow-y: auto;
            background: var(--color-bg-dark);
        }
        .wrapper .form .inbox {
            width: 100%;
            display: flex;
            align-items: flex-start;
        }
        .wrapper .form .user-inbox {
            justify-content: flex-end;
            margin: 15px 0;
        }
        .wrapper .form .inbox .icon {
            height: 40px;
            width: 40px;
            color: var(--color-bg-dark);
            text-align: center;
            line-height: 40px;
            border-radius: 50%;
            font-size: 18px;
            background: var(--color-accent-blue);
            border: 1px solid var(--color-accent-blue);
            box-shadow: 0 0 5px rgba(0, 188, 212, 0.5); /* Sombra de color sutil */
        }
        .wrapper .form .inbox .msg-header {
            max-width: 53%;
            margin-left: 10px;
        }
        .form .inbox .msg-header p {
            color: var(--color-bg-dark);
            background: var(--color-accent-blue);
            border-radius: 10px;
            padding: 8px 10px;
            font-size: 14px;
            word-break: break-all;
            box-shadow: 0 0 5px rgba(0, 188, 212, 0.5); /* Sombra de color sutil */
            transition: background 0.3s ease, box-shadow 0.3s ease;
        }
        .form .inbox .msg-header p:hover {
            background: var(--color-accent-magenta);
            box-shadow: 0 0 5px rgba(255, 0, 255, 0.5); /* Sombra de color sutil */
        }
        .form .user-inbox .msg-header p {
            color: var(--color-bg-dark);
            background: var(--color-text-dark);
            border-radius: 10px;
            box-shadow: none;
        }
        /* Campo de entrada de texto */
        .wrapper .typing-field {
            display: flex;
            height: 60px;
            width: 100%;
            align-items: center;
            justify-content: space-evenly;
            background: var(--color-bg-light);
            border-top: 1px solid var(--color-text-dark);
            border-radius: 0 0 10px 10px;
        }
        .wrapper .typing-field .input-data {
            height: 40px;
            width: 335px;
            position: relative;
        }
        .wrapper .typing-field .input-data input {
            height: 100%;
            width: 100%;
            outline: none;
            border: 1px solid var(--color-accent-blue);
            padding: 0 80px 0 15px;
            border-radius: 5px;
            font-size: 15px;
            background: var(--color-bg-dark);
            color: var(--color-text-light);
            transition: all 0.3s ease;
        }
        .typing-field .input-data input:focus {
            border-color: var(--color-accent-magenta);
        }
        .input-data input::placeholder {
            color: #4a5568;
            transition: all 0.3s ease;
        }
        .input-data input:focus::placeholder {
            color: var(--color-text-dark);
        }
        /* Botón de envío */
        .wrapper .typing-field .input-data button {
            position: absolute;
            right: 5px;
            top: 50%;
            height: 30px;
            width: 65px;
            color: var(--color-bg-dark);
            font-size: 16px;
            cursor: pointer;
            outline: none;
            opacity: 0;
            pointer-events: none;
            border-radius: 5px;
            background: var(--color-accent-blue);
            border: 1px solid var(--color-accent-blue);
            transform: translateY(-50%);
            transition: all 0.3s ease;
        }
        .wrapper .typing-field .input-data input:valid ~ button {
            opacity: 1;
            pointer-events: auto;
        }
        .typing-field .input-data button:hover {
            background: var(--color-accent-magenta);
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="title">ChatBot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hola, ¿cómo puedo ayudarte?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Escribe algo aquí.." required>
                <button id="send-btn">Enviar</button>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#send-btn").on("click", function() {
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>' + $value + '</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                // iniciar el código ajax
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text=' + $value,
                    success: function(result) {
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' + result + '</p></div></div>';
                        $(".form").append($replay);
                        // cuando el chat baja, la barra de desplazamiento llega automáticamente al final
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
  <a href="../menu.php" id="atras-btn">Atras</a>
<style>
  #atras-btn {
    position: fixed;
    bottom: 20px;
    right: 50px;
    background-color: #1641a8ff;
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }  #atras-btn:hover {
    background-color: #1641a8ff;
  }
</body>
</html>
