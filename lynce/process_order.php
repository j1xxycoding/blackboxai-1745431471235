<?php
// Validate form submission
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: catalog.php');
    exit;
}

// Validate required fields
$required_fields = ['name', 'phone', 'address', 'product_id', 'product_name', 'product_price'];
$errors = [];

foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        $errors[] = ucfirst($field) . ' is required.';
    }
}

// If there are errors, store them in session and redirect back
if (!empty($errors)) {
    session_start();
    $_SESSION['order_errors'] = $errors;
    header('Location: order.php?pid=' . $_POST['product_id']);
    exit;
}

// Sanitize input
$order = [
    'name' => htmlspecialchars($_POST['name']),
    'phone' => htmlspecialchars($_POST['phone']),
    'address' => htmlspecialchars($_POST['address']),
    'product_id' => (int)$_POST['product_id'],
    'product_name' => htmlspecialchars($_POST['product_name']),
    'product_price' => (float)$_POST['product_price'],
    'order_date' => date('Y-m-d H:i:s'),
    'order_id' => uniqid('ORDER-')
];

// Create orders directory if it doesn't exist
$orders_dir = __DIR__ . '/orders';
if (!file_exists($orders_dir)) {
    mkdir($orders_dir, 0755, true);
}

// Save order to file
$order_data = implode(" | ", [
    $order['order_id'],
    $order['order_date'],
    $order['name'],
    $order['phone'],
    $order['address'],
    $order['product_name'],
    '$' . number_format($order['product_price'], 2)
]) . "\n";

$success = false;
$file = $orders_dir . '/orders.txt';

if (file_put_contents($file, $order_data, FILE_APPEND | LOCK_EX) !== false) {
    $success = true;
}

// Include header
include 'includes/header.php';
?>

<main class="container mx-auto px-4 py-12">
    <div class="max-w-2xl mx-auto text-center">
        <?php if ($success): ?>
            <!-- Success Message -->
            <div class="mb-8">
                <div class="inline-block p-4 bg-black rounded-full mb-6">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h1 class="font-playfair text-3xl mb-4">Order Confirmed!</h1>
                <p class="font-inter text-gray-600 mb-4">Thank you for shopping with LYNCE.</p>
                <p class="font-inter text-sm mb-2">Order Reference: <span class="font-medium"><?php echo $order['order_id']; ?></span></p>
                <p class="font-inter text-sm text-gray-500">We will contact you shortly to confirm your order details.</p>
            </div>

            <!-- Order Summary -->
            <div class="bg-gray-50 p-6 rounded-lg text-left mb-8">
                <h2 class="font-montserrat text-xl mb-4">Order Summary</h2>
                <div class="font-inter space-y-2">
                    <p class="text-gray-600">Product: <span class="text-black"><?php echo $order['product_name']; ?></span></p>
                    <p class="text-gray-600">Price: <span class="text-black">$<?php echo number_format($order['product_price'], 2); ?></span></p>
                    <p class="text-gray-600">Name: <span class="text-black"><?php echo $order['name']; ?></span></p>
                    <p class="text-gray-600">Phone: <span class="text-black"><?php echo $order['phone']; ?></span></p>
                    <p class="text-gray-600">Delivery Address: <span class="text-black"><?php echo $order['address']; ?></span></p>
                </div>
            </div>
        <?php else: ?>
            <!-- Error Message -->
            <div class="mb-8">
                <div class="inline-block p-4 bg-red-100 rounded-full mb-6">
                    <svg class="w-12 h-12 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
                <h1 class="font-playfair text-3xl mb-4">Order Processing Error</h1>
                <p class="font-inter text-gray-600">Sorry, there was an error processing your order. Please try again.</p>
            </div>
        <?php endif; ?>

        <!-- Navigation Links -->
        <div class="space-x-4">
            <a href="index.php" 
               class="inline-block px-6 py-3 bg-black text-white font-inter text-sm hover:bg-gray-900 transition-colors rounded-lg">
                Return Home
            </a>
            <a href="catalog.php" 
               class="inline-block px-6 py-3 border border-black text-black font-inter text-sm hover:bg-gray-100 transition-colors rounded-lg">
                Continue Shopping
            </a>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
