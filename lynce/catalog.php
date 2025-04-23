<?php include 'includes/header.php'; ?>

<main class="container mx-auto px-4 py-12">
    <!-- Page Title -->
    <div class="text-center mb-12">
        <h1 class="font-playfair text-4xl mb-4">Our Collection</h1>
        <p class="font-inter text-gray-600">Discover our latest pieces, crafted with elegance and sophistication</p>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Product 1 -->
        <div class="group">
            <div class="relative overflow-hidden">
                <img src="https://images.pexels.com/photos/9558577/pexels-photo-9558577.jpeg" 
                     alt="Black Elegance Dress" 
                     class="w-full h-96 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                <a href="order.php?pid=1" 
                   class="absolute bottom-4 left-4 right-4 bg-black text-white py-3 text-center font-inter text-sm hover:bg-gray-900 transition-colors">
                    Order Now
                </a>
            </div>
            <div class="mt-4">
                <h3 class="font-montserrat text-lg">Black Elegance Dress</h3>
                <p class="font-inter text-gray-600 mt-1">$299</p>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="group">
            <div class="relative overflow-hidden">
                <img src="https://images.pexels.com/photos/9558763/pexels-photo-9558763.jpeg" 
                     alt="White Collection Suit" 
                     class="w-full h-96 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                <a href="order.php?pid=2" 
                   class="absolute bottom-4 left-4 right-4 bg-black text-white py-3 text-center font-inter text-sm hover:bg-gray-900 transition-colors">
                    Order Now
                </a>
            </div>
            <div class="mt-4">
                <h3 class="font-montserrat text-lg">White Collection Suit</h3>
                <p class="font-inter text-gray-600 mt-1">$499</p>
            </div>
        </div>

        <!-- Product 3 -->
        <div class="group">
            <div class="relative overflow-hidden">
                <img src="https://images.pexels.com/photos/9558658/pexels-photo-9558658.jpeg" 
                     alt="Designer Evening Gown" 
                     class="w-full h-96 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                <a href="order.php?pid=3" 
                   class="absolute bottom-4 left-4 right-4 bg-black text-white py-3 text-center font-inter text-sm hover:bg-gray-900 transition-colors">
                    Order Now
                </a>
            </div>
            <div class="mt-4">
                <h3 class="font-montserrat text-lg">Designer Evening Gown</h3>
                <p class="font-inter text-gray-600 mt-1">$799</p>
            </div>
        </div>

        <!-- Product 4 -->
        <div class="group">
            <div class="relative overflow-hidden">
                <img src="https://images.pexels.com/photos/9558776/pexels-photo-9558776.jpeg" 
                     alt="Classic Black Suit" 
                     class="w-full h-96 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                <a href="order.php?pid=4" 
                   class="absolute bottom-4 left-4 right-4 bg-black text-white py-3 text-center font-inter text-sm hover:bg-gray-900 transition-colors">
                    Order Now
                </a>
            </div>
            <div class="mt-4">
                <h3 class="font-montserrat text-lg">Classic Black Suit</h3>
                <p class="font-inter text-gray-600 mt-1">$599</p>
            </div>
        </div>

        <!-- Product 5 -->
        <div class="group">
            <div class="relative overflow-hidden">
                <img src="https://images.pexels.com/photos/9558588/pexels-photo-9558588.jpeg" 
                     alt="Silk Evening Dress" 
                     class="w-full h-96 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                <a href="order.php?pid=5" 
                   class="absolute bottom-4 left-4 right-4 bg-black text-white py-3 text-center font-inter text-sm hover:bg-gray-900 transition-colors">
                    Order Now
                </a>
            </div>
            <div class="mt-4">
                <h3 class="font-montserrat text-lg">Silk Evening Dress</h3>
                <p class="font-inter text-gray-600 mt-1">$699</p>
            </div>
        </div>

        <!-- Product 6 -->
        <div class="group">
            <div class="relative overflow-hidden">
                <img src="https://images.pexels.com/photos/9558907/pexels-photo-9558907.jpeg" 
                     alt="Modern White Dress" 
                     class="w-full h-96 object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                <a href="order.php?pid=6" 
                   class="absolute bottom-4 left-4 right-4 bg-black text-white py-3 text-center font-inter text-sm hover:bg-gray-900 transition-colors">
                    Order Now
                </a>
            </div>
            <div class="mt-4">
                <h3 class="font-montserrat text-lg">Modern White Dress</h3>
                <p class="font-inter text-gray-600 mt-1">$399</p>
            </div>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
