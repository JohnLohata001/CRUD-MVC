<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <header></header>
    <main>
        <section class="container">
            <h1>Products</h1>
            <a href="<?= BASE_URL ?>/product/create" class="btn-add">+ Add Product</a>
            <table border="1">
               <tr>
                    <th width="50%">Product Name</th>
                    <th width="40%">Price</th>
                    <th width="10%">Actions</th>
               </tr>
                <?php foreach ($products as $p): ?>
                    <tr>
                        <td><?= htmlspecialchars($p['name']) ?></td>
                        <td>$<?= $p['price'] ?></td> 
                        <td><a href="<?= BASE_URL ?>/product/edit/<?= $p['id'] ?>"><i class="fas fa-edit" style="color: green;font-size:18px"></i> &nbsp;&nbsp;&nbsp;&nbsp;</a>

                        <a href="<?= BASE_URL ?>/product/delete/<?= $p['id'] ?>" onclick="return confirm('Are you sure?')"><i class="fas fa-trash" style="color:red;font-size:18px"></i> </a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </main>
    <footer></footer>
</body>
</html>
