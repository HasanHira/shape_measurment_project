<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape Measurment | Input</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="title">Shape Measure</h2>
        <form action="process.php" method="post">
            <div class="form-set">
                <label>Select Shape Name:</label>
                <select name="shape" id="shape--type" required>
                    <option>-- Select an item --</option>
                    <option value="circle">Circle</option>
                    <option value="square">Square</option>
                    <option value="triangle">Triangle</option>
                </select>
            </div>
            <div class="form-set">
                <label>Input numaric value:</label>
                <input required type="number" name="measurement" min="100" max="10000" placeholder="Number only (above 100 is required)">
                <button type="submit">Measure</button>
            </div>
        </form>
    </div>
</body>
</html>