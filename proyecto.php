<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrar Proyecto</title>
    <link rel="stylesheet" href="proyecto.css" />
  </head>
  <body>
    <h2>Registro de Proyecto</h2>

    <form
      action="procesar_proyecto.php"
      method="post"
      onsubmit="return validarProyecto()"
    >
      <label for="nombre">Nombre del Proyecto:</label>
      <input type="text" id="nombre" name="nombre" required />

      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" name="descripcion" required></textarea>

      <label for="presupuesto">Presupuesto:</label>
      <input type="number" id="presupuesto" name="presupuesto" required />

      <label for="fecha_inicio">Fecha de Inicio:</label>
      <input type="date" id="fecha_inicio" name="fecha_inicio" required />

      <label for="fecha_fin">Fecha de Fin:</label>
      <input type="date" id="fecha_fin" name="fecha_fin" required />

      <button type="submit">Registrar Proyecto</button>
    </form>

    <script>
      function validarProyecto() {
        var presupuesto = document.getElementById("presupuesto").value;
        if (presupuesto <= 0) {
          alert("El presupuesto debe ser mayor a 0.");
          return false;
        }
        return true;
      }
    </script>
  </body>
</html>
