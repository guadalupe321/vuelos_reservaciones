<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Origen de Reservación de Vuelos</title>
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
    <h2>Origen de Reservación de Vuelos</h2>
    <form id="origenForm">
        <input type="text" id="id" placeholder="ID" required>
        <input type="text" id="nombre_ciudad" placeholder="Nombre de la Ciudad" required>
        <input type="text" id="pais" placeholder="País" required>
        <button type="submit">Agregar Origen</button>
    </form>

    
</body>
</html>