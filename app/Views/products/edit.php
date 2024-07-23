<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="/product/update/<?= $product['id'] ?>" method="post">
        <input type="hidden" name="_method" value="PUT">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $product['name'] ?>" required><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required><?= $product['description'] ?></textarea><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" value="<?= $product['date'] ?>" required><br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="<?= $product['price'] ?>" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
