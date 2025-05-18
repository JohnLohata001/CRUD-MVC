<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
   <link rel="stylesheet" href="<?=BASE_URL?>/assets/css/style.css">
</head>
<body>
    <header></header>
    <main>
        <section class="container">
            <h1>Add Product</h1>
            <form method="POST" action="<?= BASE_URL ?>/product/create">
                <input type="text" name="name" placeholder="Product Name" required>
                <input type="number" step="0.01" name="price" placeholder="Price" required>
                <div class="gr-btn">
                    <button type="submit" class="btn-submit">Save</button>
                    <a href="<?= BASE_URL ?>/product/"><button type="button" class="btn-cancel">Cancel</button></a>
                </div>
            </form>
        </section>
    </main>
    <footer></footer>
</body>
</html>
