<!-- resources/views/practicas/indexp5.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Simulación de Prácticas</title>
</head>
<body>
    <h1>Resultado de la Simulación</h1>

    <h2>{{ $ramm->getName() }} (Soldado)</h2>
    <p>Vida: {{ $ramm->getHealth() }}</p>
    <p>Armadura: {{ $ramm->getArmorName() }}</p>

    <h2>{{ $silence->getName() }} (Arquero)</h2>
    <p>Vida: {{ $silence->getHealth() }}</p>
</body>
</html>