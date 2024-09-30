<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino de Reservación de Vuelos</title>
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
    <h2>Destino de Reservación de Vuelos</h2>
    <form id="destinoForm">
        <input type="text" id="id_destino" placeholder="ID de Destino" required>
        <select id="ciudad" required>
            <option value="" disabled selected>Seleccionar Ciudad</option>
            <option value="Buenos Aires">Buenos Aires</option>
            <option value="Sao Paulo">Sao Paulo</option>
            <option value="Santiago">Santiago</option>
            <option value="Bogotá">Bogotá</option>
            <option value="Madrid">Madrid</option>
            <option value="París">París</option>
            <option value="Nueva York">Nueva York</option>
            <option value="Ciudad de México">Ciudad de México</option>
            <option value="Lima">Lima</option>
            <option value="Londres">Londres</option>
            <option value="Berlín">Berlín</option>
            <option value="Roma">Roma</option>
            <option value="Tokio">Tokio</option>
            <option value="Sídney">Sídney</option>
        </select>
        <select id="pais" required>
            <option value="" disabled selected>Seleccionar País</option>
            <option value="Argentina">Argentina</option>
            <option value="Brasil">Brasil</option>
            <option value="Chile">Chile</option>
            <option value="Colombia">Colombia</option>
            <option value="España">España</option>
            <option value="Francia">Francia</option>
            <option value="Estados Unidos">Estados Unidos</option>
            <option value="México">México</option>
            <option value="Perú">Perú</option>
            <option value="Reino Unido">Reino Unido</option>
            <option value="Alemania">Alemania</option>
            <option value="Italia">Italia</option>
            <option value="Japón">Japón</option>
            <option value="Australia">Australia</option>
        </select>
        <button type="submit">Agregar Destino</button>
    </form>

    
</body>
</html>