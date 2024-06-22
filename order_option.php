<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="order_option.css">
</head>
<body>
    <div class="container">
        <div class="product-image">
            <img src="image/tws.jpg" alt="Apple iPhone 7">
        </div>
        <div class="product-details">
            <h1>Product name</h1>
            <p>product...........name</p>
           
            <div class="price">
                <p>Discount Price: <span class="strike">$162.00</span></p>
                <p>Tatal Price: <span class="save-price">$152.00</span></p>
            </div>
            <div class="delivery">
                <p>Delivery by: 7 days</p>
            </div>
            <div class="options">
                <label for="color">Color:</label>
                <select id="color">
                    <option value="gold">Gold</option>
                    <option value="black">Black</option>
                    <option value="blue">Blue</option>
                    <option value="green">Green</option>
                </select>
                <label for="size">Quantity:</label>
                    <input id="size"  id="size" type="number" id="quantity" name="quantity" min="1" max="10" value="1">
           
            </div>
            <div class="actions">
                <button id="buy-now">Proceed to Buy</button>
                <button id="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>




