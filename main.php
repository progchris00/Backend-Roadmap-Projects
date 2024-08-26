<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Unit Converter</title>
</head>

<body>
    <main>
        <h1>Unit Converter</h1>
        <div class="conversion-choices-window">
            <button class="conversion-button" id="length-conversion">Length</button>
            <button class="conversion-button" id="weight-conversion">Weight</button>
            <button class="conversion-button" id="temperature-conversion">Temperature</button>
        </div>
        <form action="result.php" method="post" id="conversion-form">
            <label for="unit-to-convert">Enter the length to convert:</label>
            <input name="unit-to-convert" id="unit-to-convert" type="number">
            <label for="convert-unit-from">Unit to Convert from</label>
            <select name="convert-unit-from" id="convert-unit-from">
            </select>
            <label for="convert-unit-to">Unit to Convert to</label>
            <select name="convert-unit-to" id="convert-unit-to">
            </select>
            <button type="submit" id="convert-button">Convert</button>
        </form>
    </main>
    <script src="scripts/main.js"></script>
</body>

</html>