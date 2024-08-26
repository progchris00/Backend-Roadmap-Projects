<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Unit Converter</title>
</head>

<body>
    <main>
        <h1>Unit Converter</h1>
        <div class="choices">
            <p>Length</p>
            <p>Weight</p>
            <p>Temperature</p>
        </div>
        <form action="result.php" method="post">
            <label for="length">Enter the length to convert:</label>
            <input name="length" id="length" type="number">
            <label for="convert_unit_from">Unit to Convert from</label>
            <select name="convert_unit_from" id="">
            </select>
            <label for="convert_unit_to">Unit to Convert to</label>
            <select name="convert_unit_to" id="">
            </select>
            <button type="submit">Convert</button>
        </form>
    </main>
</body>

</html>