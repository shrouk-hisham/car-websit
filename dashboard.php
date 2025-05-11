<?php
 session_start();
 if (!isset($_SESSION['user'])) {
     header("Location: login.html");
     exit();
 }

// مثال على بيانات العربيات (يفترض أن تأتي من قاعدة بيانات)
$cars = [
    [
        "name" => "Amaze",
        "type" => "Sedan",
        "model" => "N/A",
        "price" => "$15,000 /Per Day",
        "color" => "N/A",
        "status" => "Available",
        "image" => "deals-13.png"
    ],
    [
        "name" => "Elevate",
        "type" => "SUV",
        "model" => "N/A",
        "price" => "$20,000 /Per Day",
        "color" => "N/A",
        "status" => "Available",
        "image" => "deals-14.png"
    ],
    [
        "name" => "City",
        "type" => "Sedan",
        "model" => "N/A",
        "price" => "$18,000 /Per Day",
        "color" => "N/A",
        "status" => "Available",
        "image" => "deals-15.png"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Cars</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f1f2f6;
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            color: white;
            display: flex;
            flex-direction: column;
            padding-top: 20px;
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 22px;
        }

        .sidebar a {
            color: white;
            padding: 15px 20px;
            text-decoration: none;
            display: flex;
            align-items: center;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #34495e;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .main-content {
            flex: 1;
            padding: 30px;
            overflow-x: auto;
        }

        .main-content h1 {
            color: #2c3e50;
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        table th, table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }

        table th {
            background-color: #ecf0f1;
            font-weight: bold;
        }

        table img {
            width: 120px;
            border-radius: 8px;
        }

        .status-available {
            color: green;
            font-weight: bold;
        }

        .status-sold {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h2>Dashboard</h2>
    <a href="view_cars.php"><i class="fas fa-car"></i> View Cars</a>
    <a href="edit_car.php"><i class="fas fa-edit"></i> Edit Car</a>
    <a href="delete_car.php"><i class="fas fa-trash-alt"></i> Delete Car</a>
    <a href="car_review.php"><i class="fas fa-info-circle"></i> Car Details</a>
    <a href="get_models.php"><i class="fas fa-list"></i> Get Models</a>
    <a href="view_reviews.php"><i class="fas fa-star"></i> View Reviews</a>
    <a href="message.php"><i class="fas fa-envelope"></i> View Messages</a>
    <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
</div>

<div class="main-content">
    <h1>Available Cars</h1>
    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Type</th>
            <th>Model</th>
            <th>Color</th>
            <th>Price</th>
            <th>Status</th>
        </tr>
        <?php foreach ($cars as $car): ?>
            <tr>
                <td><img src="<?= $car['image'] ?>" alt="<?= $car['name'] ?>"></td>
                <td><?= $car['name'] ?></td>
                <td><?= $car['type'] ?></td>
                <td><?= $car['model'] ?></td>
                <td><?= $car['color'] ?></td>
                <td><?= $car['price'] ?></td>
                <td class="<?= $car['status'] == 'Available' ? 'status-available' : 'status-sold' ?>">
                    <?= $car['status'] ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>