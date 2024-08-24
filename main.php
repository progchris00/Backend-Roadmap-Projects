<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Unit Converter</title>
</head>

<body>
    <form action="result.php" method="post">
        <h1>Unit Converter</h1>
        <label for="length">Enter the length to convert:</label>
        <input name="length" id="length" type="number">
        <label for="convert_unit_from">Unit to Convert from</label>
        <select name="" id="">
            <option value="millimeter">millimeter</option>
            <option value="centimeter">centimeter</option>
            <option value="meter">meter</option>
            <option value="kilometer">kilometer</option>
        </select>
        <label for="convert_unit_to">Unit to Convert to</label>
        <select name="" id="">
            <option value="millimeter">millimeter</option>
            <option value="centimeter">centimeter</option>
            <option value="meter">meter</option>
            <option value="kilometer">kilometer</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>

</html>