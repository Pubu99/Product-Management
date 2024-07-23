<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <a href="/product/create">Add New Product</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Date</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <?php foreach($products as $product): ?>
        <tr>
            <td><?= $product['name'] ?></td>
            <td><?= $product['description'] ?></td>
            <td><?= $product['date'] ?></td>
            <td><?= $product['price'] ?></td>
            <td>
                <a href="/product/edit/<?= $product['id'] ?>">Edit</a>
                <form action="/product/delete/<?= $product['id'] ?>" method="post" style="display:inline;">
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
