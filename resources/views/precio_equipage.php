<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precios de Equipajes</title>
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
    <h2>Registro de Precios de Equipajes</h2>
    <form id="precioEquipajeForm">
        <input type="text" id="id_precio" placeholder="ID del Precio" required>
        <select id="precio_equipaje" required>
            <option value="" disabled selected>Seleccionar Precio</option>
            <option value="50">50 USD</option>
            <option value="100">100 USD</option>
            <option value="150">150 USD</option>
            <option value="200">200 USD</option>
        </select>
        <select id="rango_equipaje" required>
            <option value="" disabled selected>Seleccionar Rango de Equipaje</option>
            <option value="0-10">0-10 kg</option>
            <option value="11-20">11-20 kg</option>
            <option value="21-30">21-30 kg</option>
            <option value="31-40">31-40 kg</option>
        </select>
        <button type="submit">Registrar Precio de Equipaje</button>
    </form>

    
</body>
</html>