<?php include 'includes/header.php'; ?>

<main>
    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center bg-black">
        <div class="absolute inset-0">
            <img src="https://images.pexels.com/photos/9558761/pexels-photo-9558761.jpeg" 
                 alt="LYNCE Fashion" 
                 class="w-full h-full object-cover opacity-50">
        </div>
        <div class="relative text-center text-white z-10">
            <h1 class="font-playfair text-5xl md:text-7xl mb-4">LYNCE</h1>
            <p class="font-montserrat text-xl md:text-2xl tracking-wider">Modern. Elegant. Timeless.</p>
            <a href="catalog.php" 
               class="inline-block mt-8 px-8 py-3 border-2 border-white font-inter text-sm hover:bg-white hover:text-black transition-colors">
                EXPLORE COLLECTION
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section class="container mx-auto px-4 py-20">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="font-playfair text-3xl mb-6">Welcome to LYNCE</h2>
            <p class="font-inter text-gray-600 leading-relaxed">
                LYNCE represents the pinnacle of modern fashion, where elegance meets contemporary design. 
                Our carefully curated collections embody timeless sophistication while embracing current trends, 
                creating pieces that stand the test of time.
            </p>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="container mx-auto px-4 py-16">
        <h2 class="font-playfair text-3xl text-center mb-12">Featured Collection</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Featured Product 1 -->
            <div class="group">
                <div class="relative overflow-hidden">
                    <img src="https://images.pexels.com/photos/9558577/pexels-photo-9558577.jpeg" 
                         alt="Black Elegance Dress" 
                         class="w-full h-96 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                </div>
                <div class="mt-4">
                    <h3 class="font-montserrat text-lg">Black Elegance Dress</h3>
                    <p class="font-inter text-gray-600 mt-1">$299</p>
                    <a href="product.php?pid=1" 
                       class="inline-block mt-2 text-sm font-inter border-b border-black hover:border-gray-400">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Featured Product 2 -->
            <div class="group">
                <div class="relative overflow-hidden">
                    <img src="https://images.pexels.com/photos/9558763/pexels-photo-9558763.jpeg" 
                         alt="White Collection Suit" 
                         class="w-full h-96 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                </div>
                <div class="mt-4">
                    <h3 class="font-montserrat text-lg">White Collection Suit</h3>
                    <p class="font-inter text-gray-600 mt-1">$499</p>
                    <a href="product.php?pid=2" 
                       class="inline-block mt-2 text-sm font-inter border-b border-black hover:border-gray-400">
                        View Details
                    </a>
                </div>
            </div>

            <!-- Featured Product 3 -->
            <div class="group">
                <div class="relative overflow-hidden">
                    <img src="https://images.pexels.com/photos/9558658/pexels-photo-9558658.jpeg" 
                         alt="Designer Evening Gown" 
                         class="w-full h-96 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-opacity"></div>
                </div>
                <div class="mt-4">
                    <h3 class="font-montserrat text-lg">Designer Evening Gown</h3>
                    <p class="font-inter text-gray-600 mt-1">$799</p>
                    <a href="product.php?pid=3" 
                       class="inline-block mt-2 text-sm font-inter border-b border-black hover:border-gray-400">
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="bg-black text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h2 class="font-playfair text-3xl mb-6">Stay Updated</h2>
            <p class="font-inter mb-8 max-w-2xl mx-auto">
                Subscribe to our newsletter to receive updates on new collections, exclusive offers, and fashion insights.
            </p>
            <form class="max-w-md mx-auto flex gap-4">
                <input type="email" 
                       placeholder="Enter your email" 
                       class="flex-1 px-4 py-3 bg-transparent border border-white text-white placeholder-gray-400 font-inter focus:outline-none">
                <button type="submit" 
                        class="px-8 py-3 bg-white text-black font-inter text-sm hover:bg-gray-100 transition-colors">
                    Subscribe
                </button>
            </form>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
