<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/css/app.css')

    <title>Evidencia</title>
</head>
<body class="bg-purple-100 p-6">

    <div class="max-w-md mx-auto bg-white rounded-md p-8 shadow-md">
      <h2 class="text-2xl font-semibold text-purple-800 mb-6">Formulario</h2>
  
      <form>

        <div class="mb-4">
          <label for="nombre" class="block text-gray-600 text-sm font-medium mb-2">Nombre</label>
          <input type="text" id="nombre" name="nombre" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500" placeholder="Ingrese su nombre" required>
        </div>
  

        <div class="mb-4">
          <label for="cedula" class="block text-gray-600 text-sm font-medium mb-2">Cédula</label>
          <input type="number" id="cedula" name="cedula" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500" placeholder="Ingrese su cédula" required>
        </div>
  

        <div class="mb-4">
          <label for="telefono" class="block text-gray-600 text-sm font-medium mb-2">Número de teléfono</label>
          <input type="number" id="telefono" name="telefono" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500" placeholder="Ingrese su número de teléfono" required>
        </div>
  

        <div class="mb-4">
          <label for="direccion" class="block text-gray-600 text-sm font-medium mb-2">Dirección</label>
          <input type="string" id="direccion" name="direccion" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-purple-500" placeholder="Ingrese su dirección" required>
        </div>
  

        <div class="mt-6">
          <input type="submit" value="Enviar" class="w-full bg-purple-500 text-white px-4 py-2 rounded-md hover:bg-purple-600 focus:outline-none focus:bg-purple-600">
        </div>
      </form>
    </div>
  
  </body>
</html>