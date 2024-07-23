<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <form action="/product/store" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" required><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>
