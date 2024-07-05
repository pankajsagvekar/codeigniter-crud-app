<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome To Products Page</h1>

    <h2>Product Name : <?= $name; //$data['name'] ?></h2>

    <h3>Product List</h3>
    <ul>
        <?php foreach ($prod_list as $item) :?>
            <li> <?= $item; ?></li>
        <?php endforeach?>
    </ul>
</body>
</html>