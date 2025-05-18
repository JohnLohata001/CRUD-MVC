<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
   <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/style.css">
</head>
<body>
    <header></header>
    <main>
        <section class="container">
            <h1>Edit Product</h1>
            <form method="POST" action="<?= BASE_URL ?>/product/edit/<?= $product['id'] ?>">
                <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
                <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>" required>

                <div class="gr-btn">
                    <button type="submit" class="btn-submit">Update</button>
                    <a href="<?= BASE_URL ?>/product/"><button type="button" class="btn-cancel">Cancel</button></a>
                </div>
            </form>
        </section>
    <footer></footer>
</body>
</html>
