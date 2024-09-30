<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Equipajes</title>
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
        input, select {
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
    <h2>Registro de Equipajes</h2>
    <form id="equipajeForm">
        <input type="text" id="id_equipaje" placeholder="ID del Equipaje" required>
        <select id="precio_equipaje" required>
            <option value="" disabled selected>Seleccionar Precio de Equipaje</option>
            <option value="50">50 USD</option>
            <option value="100">100 USD</option>
            <option value="150">150 USD</option>
            <option value="200">200 USD</option>
        </select>
        <select id="tipo_equipaje" required>
            <option value="" disabled selected>Seleccionar Tipo de Equipaje</option>
            <option value="maleta">Maleta</option>
            <option value="mochila">Mochila</option>
            <option value="bolso">Bolso</option>
            <option value="otro">Otro</option>
        </select>
        <button type="submit">Registrar Equipaje</button>
    </form>

   
</body>
</html>