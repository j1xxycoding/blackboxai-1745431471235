<?php
$products = [
    1 => ['name' => 'Black Elegance Dress', 'price' => 299],
    2 => ['name' => 'White Collection Suit', 'price' => 499],
    3 => ['name' => 'Designer Evening Gown', 'price' => 799],
    4 => ['name' => 'Classic Black Suit', 'price' => 599],
    5 => ['name' => 'Silk Evening Dress', 'price' => 699],
    6 => ['name' => 'Modern White Dress', 'price' => 399]
];

$pid = isset($_GET['pid']) ? (int)$_GET['pid'] : 0;
$product = isset($products[$pid]) ? $products[$pid] : null;
?>

<?php include 'includes/header.php'; ?>

<main class="container mx-auto px-4 py-12">
    <?php if ($product): ?>
    <div class="max-w-2xl mx-auto">
        <h1 class="font-playfair text-3xl text-center mb-8">Order Form</h1>
        
        <!-- Product Summary -->
        <div class="bg-gray-50 p-6 mb-8 rounded-lg">
            <h2 class="font-montserrat text-xl mb-4">Order Summary</h2>
            <div class="font-inter">
                <p class="text-gray-600">Product: <span class="text-black"><?php echo htmlspecialchars($product['name']); ?></span></p>
                <p class="text-gray-600">Price: <span class="text-black">$<?php echo number_format($product['price'], 2); ?></span></p>
            </div>
        </div>

        <!-- Order Form -->
        <form action="process_order.php" method="POST" class="space-y-6">
            <input type="hidden" name="product_id" value="<?php echo $pid; ?>">
            <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($product['name']); ?>">
            <input type="hidden" name="product_price" value="<?php echo $product['price']; ?>">

            <!-- Name Field -->
            <div>
                <label for="name" class="block font-inter text-sm text-gray-600 mb-2">Full Name *</label>
                <input type="text" 
                       id="name" 
                       name="name" 
                       required 
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg font-inter focus:outline-none focus:border-black transition-colors"
                       placeholder="Enter your full name">
            </div>

            <!-- Phone Field -->
            <div>
                <label for="phone" class="block font-inter text-sm text-gray-600 mb-2">Phone Number *</label>
                <input type="tel" 
                       id="phone" 
                       name="phone" 
                       required 
                       class="w-full px-4 py-3 border border-gray-300 rounded-lg font-inter focus:outline-none focus:border-black transition-colors"
                       placeholder="Enter your phone number">
            </div>

            <!-- Address Field -->
            <div>
                <label for="address" class="block font-inter text-sm text-gray-600 mb-2">Delivery Address *</label>
                <textarea id="address" 
                          name="address" 
                          required 
                          rows="4" 
                          class="w-full px-4 py-3 border border-gray-300 rounded-lg font-inter focus:outline-none focus:border-black transition-colors"
                          placeholder="Enter your complete delivery address"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="pt-4">
                <button type="submit" 
                        class="w-full bg-black text-white py-4 rounded-lg font-inter hover:bg-gray-900 transition-colors">
                    Place Order
                </button>
            </div>

            <p class="text-center text-sm text-gray-500 font-inter mt-4">
                * Required fields
            </p>
        </form>
    </div>
    <?php else: ?>
    <div class="text-center py-12">
        <h1 class="font-playfair text-3xl mb-4">Product Not Found</h1>
        <p class="font-inter text-gray-600 mb-8">Sorry, the product you're looking for is not available.</p>
        <a href="catalog.php" 
           class="inline-block px-8 py-3 bg-black text-white font-inter text-sm hover:bg-gray-900 transition-colors rounded-lg">
            Return to Catalog
        </a>
    </div>
    <?php endif; ?>
</main>

<?php include 'includes/footer.php'; ?>
