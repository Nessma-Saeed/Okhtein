<?php
require_once('../vendor/autoload.php');
$authObj = new \App\Authenticate();
$authObj->redirectIfNotAuth();

$productObj = new \App\Product();
$collectionFilter = isset($_GET['collection']) ? $_GET['collection'] : null;
$products = $productObj->getProducts($collectionFilter);

$collections = [
    "TOP PICKS",
    "THE JASMINE CAPSULE",
    "THE GODDESS COLLECTION",
    "GOLDEN COLLECTION",
    "JEWELRY"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <title>Product List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .filter {
            text-align: center;
            margin-bottom: 20px;
        }

        select {
            padding: 8px 12px;
            font-size: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: bisque ;
            color: black;
        }

        #timg {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 6px;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
            margin-right: 4px;
        }

        .edit-btn {
            background-color: bisque ;
            color: black;
            padding-left: 20px;
            padding-right: 20px;
        }

        .delete-btn {
            background-color: brown;
        }

        .btn:hover {
            opacity: 0.9;
        }
        h2{font-weight: 400;
               text-align: center;}
            .newsletter h3{
                text-align: left;
                font-weight: normal;
            }
            p:hover{
                font-weight:bold;
                color: brown;
            }
            a:hover{
                font-weight:bold;
            }    
    </style>
</head>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/PR_IA/Pages/Layout/Navbar.php'); ?>
<!-- In Product_View.php -->
<body>

<h1>Product List</h1>

<

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Collection</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($products->num_rows > 0): ?>
            <?php $i = 1; ?>
            <?php while ($row = $products->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><img id=timg src="<?php echo htmlspecialchars($row['image']); ?>" alt="Product Image"></td>
                    <td><?php echo htmlspecialchars($row['Name']); ?></td>
                    <td>$<?php echo htmlspecialchars($row['price']); ?></td>
                    <td><?php echo htmlspecialchars($row['collection']); ?></td>
                    <td>
                        <!-- Proper edit and delete buttons -->
                        <a class="btn edit-btn" href="/Pages/Product_Update.php echo urlencode($row['id']); ?>">Edit</a><br><br>
                        
                       <a class="btn delete-btn" href="/Pages/Product_Update.php echo urlencode($row['id']); ?>">Delete</a>
                        
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="6">No products found.</td></tr>
        <?php endif; ?>
    </tbody>
</table>
</body>
</html>
