<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pasajeros</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            margin: 0;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 20px;
        }
        form {
            max-width: 600px;
            margin: auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        input {
            width: calc(100% - 22px);
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 12px 15px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #007BFF;
            color: white;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Registro de Pasajeros</h2>
    <form id="registroPasajerosForm">
        <input type="text" id="nombre" placeholder="Nombre" required>
        <input type="text" id="apellido" placeholder="Apellido" required>
        <input type="email" id="correo" placeholder="Correo Electrónico" required>
        <input type="text" id="pasaporte" placeholder="Número de Pasaporte" required>
        <input type="tel" id="telefono" placeholder="Teléfono" required>
        <button type="submit">Registrar Pasajero</button>
    </form>

    <script>
        document.getElementById('registroPasajerosForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Pasajero registrado: ' + document.getElementById('nombre').value + ' ' + document.getElementById('apellido').value);
            this.reset();
        });
    </script>
</body>
</html>