<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <table class="table table-stripped">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </thead>
        <tbody>
            <?php foreach($products as $pro): ?>
                <tr>
                    <td><?= $pro['id'] ?></td>
                    <td><?= $pro['name'] ?></td>
                    <td><?= $pro['price'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>