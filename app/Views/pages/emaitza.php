<?= $this->extend("templates/base"); ?>

<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Konkordantzia</title>
    <style>
         * {
  font-family: Nunito, sans-serif;
}
        body {
            text-align: center; /* Centra el texto en la página */
        }
        .resultado {
            display: block; /* Cada resultado ocupa toda la línea */
            margin: 10px 0; /* Espaciado entre resultados */
            max-width: 900px; /* Limita el ancho máximo de cada línea */
            margin-left: auto; /* Centra horizontalmente */
            margin-right: auto; /* Centra horizontalmente */
            overflow-wrap: break-word; /* Permite que las palabras largas se dividan */
            font-family: Times, sans-serif;
        }
        .highlight {
            font-weight: bold; /* Pone el texto en negrita */
            background-color: #71D9B6; /* Resalta la palabra buscada */
            padding: 0 5px; /* Espaciado alrededor de la palabra */
            font-family: Times, sans-serif;
            color: black;
        }
        form {
    width: 100%;
}
        .button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: auto;
}

    </style>
</head>
<body>
    <h1>Bilatu konkordantzia egiteko hitza</h1>
    <form action="<?= site_url('Main/buscar') ?>" method="post">
        <input type="text" name="palabra" required placeholder="Idatzi bilatu nahi duzun hitza" size=27>
        <button class=button type="submit">Bilatu</button>
    </form>

    <?php if (isset($resultados)): ?>
        <h2>Emaitza:</h2>
        <ul>
            <?php foreach ($resultados as $resultado): ?>
                <li class="resultado"><?= esc($resultado) ?></li>
            <?php endforeach; ?>
        </ul>

        <script type="text/javascript">
            document.querySelectorAll('.resultado').forEach(function(item) {
                const palabra = '<?= esc($palabra) ?>'; // La palabra buscada
                const regex = new RegExp(`(${palabra})`, 'gi'); // Crea una expresión regular
                item.innerHTML = item.innerHTML.replace(regex, '<span class="highlight">$1</span>'); // Resalta la palabra
            });
        </script>

    <?php endif; ?>
</body>
</html>
&nbsp;
<?= $this->endSection(); ?> 