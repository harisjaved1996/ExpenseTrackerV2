<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fireworks Paradise - Premium Fireworks & Firecrackers</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
        }
        
        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .firework-animation {
            animation: firework 2s ease-in-out infinite;
        }
        
        @keyframes firework {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }
        
        .hero-pattern {
            background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.15) 1px, transparent 0);
            background-size: 40px 40px;
        }
        
        .price-tag {
            background: linear-gradient(45deg, #ff6b35, #f7931e);
        }
        
        .filter-glass {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
        }
        
        .mobile-menu-overlay {
            backdrop-filter: blur(20px);
            background: rgba(15, 15, 35, 0.95);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen text-white">
    
    <!-- Header -->
    <header class="sticky top-0 z-50 filter-glass border-b border-white/10">
        <nav class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-600 rounded-full flex items-center justify-center firework-animation">
                        <i class="fas fa-fire text-white text-lg"></i>
                    </div>
                    <span class="text-xl font-bold bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent">
                        Fireworks Paradise
                    </span>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#" class="hover:text-orange-400 transition-colors">Home</a>
                    <div class="relative group">
                        <a href="#" class="hover:text-orange-400 transition-colors flex items-center">
                            Categories <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <div class="absolute top-full left-0 mt-2 w-48 filter-glass rounded-lg border border-white/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                            <a href="#" class="block px-4 py-2 hover:bg-white/10 rounded-t-lg">Barrages</a>
                            <a href="#" class="block px-4 py-2 hover:bg-white/10">Rockets</a>
                            <a href="#" class="block px-4 py-2 hover:bg-white/10">Selection Boxes</a>
                            <a href="#" class="block px-4 py-2 hover:bg-white/10">Fountains & Wheels</a>
                            <a href="#" class="block px-4 py-2 hover:bg-white/10">Roman Candles</a>
                            <a href="#" class="block px-4 py-2 hover:bg-white/10 rounded-b-lg">Sparklers</a>
                        </div>
                    </div>
                    <a href="#" class="hover:text-orange-400 transition-colors">About</a>
                    <a href="#" class="hover:text-orange-400 transition-colors">Contact</a>
                </div>
                
                <!-- Actions -->
                <div class="flex items-center space-x-4">
                    <button class="hover:text-orange-400 transition-colors">
                        <i class="fas fa-search text-lg"></i>
                    </button>
                    <button class="hover:text-orange-400 transition-colors relative">
                        <i class="fas fa-shopping-cart text-lg"></i>
                        <span class="absolute -top-2 -right-2 w-5 h-5 bg-orange-500 rounded-full text-xs flex items-center justify-center">3</span>
                    </button>
                    <button class="lg:hidden hover:text-orange-400 transition-colors" id="mobile-menu-btn">
                        <i class="fas fa-bars text-lg"></i>
                    </button>
                </div>
            </div>
        </nav>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="fixed inset-0 z-40 mobile-menu-overlay opacity-0 invisible transition-all duration-300 lg:hidden">
        <div class="flex flex-col items-center justify-center h-full space-y-8 text-xl">
            <a href="#" class="hover:text-orange-400 transition-colors">Home</a>
            <a href="#" class="hover:text-orange-400 transition-colors">Categories</a>
            <a href="#" class="hover:text-orange-400 transition-colors">About</a>
            <a href="#" class="hover:text-orange-400 transition-colors">Contact</a>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden hero-pattern">
        <div class="container mx-auto px-4">
            <div class="text-center max-w-4xl mx-auto">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-orange-400 via-red-500 to-pink-500 bg-clip-text text-transparent">
                    Light Up The Night
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-8 leading-relaxed">
                    Discover our premium collection of fireworks, firecrackers, and pyrotechnics. 
                    Create unforgettable moments with spectacular displays.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="px-8 py-4 bg-gradient-to-r from-orange-500 to-red-600 rounded-full font-semibold hover:shadow-2xl hover:shadow-orange-500/25 transition-all duration-300 transform hover:scale-105">
                        Shop Now
                    </button>
                    <button class="px-8 py-4 border-2 border-white/20 rounded-full font-semibold hover:bg-white/10 transition-all duration-300">
                        View Catalog
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-4 h-4 bg-orange-400 rounded-full opacity-60 firework-animation"></div>
        <div class="absolute top-40 right-20 w-6 h-6 bg-red-500 rounded-full opacity-40 firework-animation" style="animation-delay: 0.5s;"></div>
        <div class="absolute bottom-20 left-1/4 w-3 h-3 bg-yellow-400 rounded-full opacity-70 firework-animation" style="animation-delay: 1s;"></div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Filter Sidebar -->
            <aside class="lg:w-80 space-y-6">
                <div class="filter-glass rounded-2xl p-6 border border-white/10">
                    <h3 class="text-xl font-semibold mb-4 flex items-center">
                        <i class="fas fa-filter mr-3 text-orange-400"></i>
                        Filters
                    </h3>
                    
                    <!-- Category Filter -->
                    <div class="mb-6">
                        <h4 class="font-medium mb-3 text-gray-300">Categories</h4>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer hover:text-orange-400 transition-colors">
                                <input type="checkbox" class="mr-3 rounded bg-transparent border-white/30" checked>
                                <span>Barrages (24)</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:text-orange-400 transition-colors">
                                <input type="checkbox" class="mr-3 rounded bg-transparent border-white/30">
                                <span>Rockets (18)</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:text-orange-400 transition-colors">
                                <input type="checkbox" class="mr-3 rounded bg-transparent border-white/30">
                                <span>Selection Boxes (12)</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:text-orange-400 transition-colors">
                                <input type="checkbox" class="mr-3 rounded bg-transparent border-white/30">
                                <span>Fountains & Wheels (15)</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:text-orange-400 transition-colors">
                                <input type="checkbox" class="mr-3 rounded bg-transparent border-white/30">
                                <span>Roman Candles (9)</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Price Range -->
                    <div class="mb-6">
                        <h4 class="font-medium mb-3 text-gray-300">Price Range</h4>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer hover:text-orange-400 transition-colors">
                                <input type="radio" name="price" class="mr-3" checked>
                                <span>£0 - £25</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:text-orange-400 transition-colors">
                                <input type="radio" name="price" class="mr-3">
                                <span>£25 - £50</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:text-orange-400 transition-colors">
                                <input type="radio" name="price" class="mr-3">
                                <span>£50 - £100</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:text-orange-400 transition-colors">
                                <input type="radio" name="price" class="mr-3">
                                <span>£100+</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Brand Filter -->
                    <div class="mb-6">
                        <h4 class="font-medium mb-3 text-gray-300">Brand</h4>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer hover:text-orange-400 transition-colors">
                                <input type="checkbox" class="mr-3 rounded bg-transparent border-white/30">
                                <span>PyroTech</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:text-orange-400 transition-colors">
                                <input type="checkbox" class="mr-3 rounded bg-transparent border-white/30">
                                <span>FireWorks Pro</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:text-orange-400 transition-colors">
                                <input type="checkbox" class="mr-3 rounded bg-transparent border-white/30">
                                <span>Stellar Displays</span>
                            </label>
                        </div>
                    </div>
                    
                    <button class="w-full py-3 bg-orange-500 hover:bg-orange-600 rounded-lg font-medium transition-colors">
                        Apply Filters
                    </button>
                </div>
            </aside>

            <!-- Product Grid -->
            <div class="flex-1">
                <!-- Toolbar -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
                    <div>
                        <h2 class="text-2xl font-bold mb-2">Premium Fireworks Collection</h2>
                        <p class="text-gray-400">Showing 1-12 of 48 products</p>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <select class="bg-white/10 border border-white/20 rounded-lg px-4 py-2 text-white">
                            <option>Sort by: Featured</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest First</option>
                        </select>
                        
                        <div class="flex border border-white/20 rounded-lg overflow-hidden">
                            <button class="px-3 py-2 bg-orange-500 text-white">
                                <i class="fas fa-th"></i>
                            </button>
                            <button class="px-3 py-2 hover:bg-white/10 transition-colors">
                                <i class="fas fa-list"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8" id="products-grid">
                    <!-- Product Card 1 -->
                    <div class="card-hover filter-glass rounded-2xl overflow-hidden border border-white/10">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1514303284444-24ba0d852d71?w=400&h=300&fit=crop" 
                                 alt="Professional Barrage Pack" 
                                 class="w-full h-48 object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="price-tag text-white px-3 py-1 rounded-full text-sm font-medium">
                                    Best Seller
                                </span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <button class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                                    <i class="fas fa-heart text-white"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg mb-2">Professional Barrage Pack</h3>
                            <p class="text-gray-400 text-sm mb-3">25-shot barrage with golden willow effects</p>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-2xl font-bold text-orange-400">£34.99</span>
                                    <span class="text-gray-500 line-through text-sm">£39.99</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                    </div>
                                    <span class="text-gray-400 text-sm">(24)</span>
                                </div>
                            </div>
                            <button class="w-full py-3 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg font-medium hover:shadow-lg hover:shadow-orange-500/25 transition-all duration-300">
                                Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="card-hover filter-glass rounded-2xl overflow-hidden border border-white/10">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1483653085484-eb63c9f02547?w=400&h=300&fit=crop" 
                                 alt="Rocket Selection Box" 
                                 class="w-full h-48 object-cover">
                            <div class="absolute top-4 right-4">
                                <button class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                                    <i class="fas fa-heart text-white"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg mb-2">Rocket Selection Box</h3>
                            <p class="text-gray-400 text-sm mb-3">12 assorted rockets with various effects</p>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-2xl font-bold text-orange-400">£28.50</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="far fa-star text-xs"></i>
                                    </div>
                                    <span class="text-gray-400 text-sm">(18)</span>
                                </div>
                            </div>
                            <button class="w-full py-3 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg font-medium hover:shadow-lg hover:shadow-orange-500/25 transition-all duration-300">
                                Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="card-hover filter-glass rounded-2xl overflow-hidden border border-white/10">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1467810563316-b5476525c0f9?w=400&h=300&fit=crop" 
                                 alt="Roman Candle Pack" 
                                 class="w-full h-48 object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                                    New
                                </span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <button class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                                    <i class="fas fa-heart text-white"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg mb-2">Roman Candle Pack</h3>
                            <p class="text-gray-400 text-sm mb-3">6-pack of colorful roman candles</p>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-2xl font-bold text-orange-400">£19.99</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                    </div>
                                    <span class="text-gray-400 text-sm">(31)</span>
                                </div>
                            </div>
                            <button class="w-full py-3 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg font-medium hover:shadow-lg hover:shadow-orange-500/25 transition-all duration-300">
                                Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="card-hover filter-glass rounded-2xl overflow-hidden border border-white/10">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1482438231137-332a81c0a62a?w=400&h=300&fit=crop" 
                                 alt="Fountain Display Set" 
                                 class="w-full h-48 object-cover">
                            <div class="absolute top-4 right-4">
                                <button class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                                    <i class="fas fa-heart text-white"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg mb-2">Fountain Display Set</h3>
                            <p class="text-gray-400 text-sm mb-3">8 stunning fountain fireworks</p>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-2xl font-bold text-orange-400">£45.00</span>
                                    <span class="text-gray-500 line-through text-sm">£52.00</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="far fa-star text-xs"></i>
                                    </div>
                                    <span class="text-gray-400 text-sm">(15)</span>
                                </div>
                            </div>
                            <button class="w-full py-3 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg font-medium hover:shadow-lg hover:shadow-orange-500/25 transition-all duration-300">
                                Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product Card 5 -->
                    <div class="card-hover filter-glass rounded-2xl overflow-hidden border border-white/10">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop" 
                                 alt="Sparkler Collection" 
                                 class="w-full h-48 object-cover">
                            <div class="absolute top-4 right-4">
                                <button class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                                    <i class="fas fa-heart text-white"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg mb-2">Sparkler Collection</h3>
                            <p class="text-gray-400 text-sm mb-3">50 premium sparklers in various sizes</p>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-2xl font-bold text-orange-400">£12.99</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                    </div>
                                    <span class="text-gray-400 text-sm">(67)</span>
                                </div>
                            </div>
                            <button class="w-full py-3 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg font-medium hover:shadow-lg hover:shadow-orange-500/25 transition-all duration-300">
                                Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product Card 6 -->
                    <div class="card-hover filter-glass rounded-2xl overflow-hidden border border-white/10">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1545558014-8692077e9b5c?w=400&h=300&fit=crop" 
                                 alt="Professional Display Kit" 
                                 class="w-full h-48 object-cover">
                            <div class="absolute top-4 left-4">
                                <span class="price-tag text-white px-3 py-1 rounded-full text-sm font-medium">
                                    Premium
                                </span>
                            </div>
                            <div class="absolute top-4 right-4">
                                <button class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors">
                                    <i class="fas fa-heart text-white"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-lg mb-2">Professional Display Kit</h3>
                            <p class="text-gray-400 text-sm mb-3">Complete professional fireworks display</p>
                            <div class="flex items-center justify-between mb-4">
                                <div class="flex items-center space-x-2">
                                    <span class="text-2xl font-bold text-orange-400">£89.99</span>
                                    <span class="text-gray-500 line-through text-sm">£99.99</span>
                                </div>
                                <div class="flex items-center space-x-1">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                        <i class="fas fa-star text-xs"></i>
                                    </div>
                                    <span class="text-gray-400 text-sm">(42)</span>
                                </div>
                            </div>
                            <button class="w-full py-3 bg-gradient-to-r from-orange-500 to-red-600 rounded-lg font-medium hover:shadow-lg hover:shadow-orange-500/25 transition-all duration-300">
                                Add to Cart
                            </button>
                        </div>
                    </div>

                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-12">
                    <div class="flex items-center space-x-2">
                        <button class="px-4 py-2 border border-white/20 rounded-lg hover:bg-white/10 transition-colors">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="px-4 py-2 bg-orange-500 text-white rounded-lg">1</button>
                        <button class="px-4 py-2 border border-white/20 rounded-lg hover:bg-white/10 transition-colors">2</button>
                        <button class="px-4 py-2 border border-white/20 rounded-lg hover:bg-white/10 transition-colors">3</button>
                        <span class="px-4 py-2 text-gray-400">...</span>
                        <button class="px-4 py-2 border border-white/20 rounded-lg hover:bg-white/10 transition-colors">12</button>
                        <button class="px-4 py-2 border border-white/20 rounded-lg hover:bg-white/10 transition-colors">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-20 border-t border-white/10">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-600 rounded-full flex items-center justify-center firework-animation">
                            <i class="fas fa-fire text-white text-lg"></i>
                        </div>
                        <span class="text-xl font-bold bg-gradient-to-r from-orange-400 to-red-500 bg-clip-text text-transparent">
                            Fireworks Paradise
                        </span>
                    </div>
                    <p class="text-gray-400 mb-4">Your trusted source for premium fireworks and firecrackers. Creating magical moments since 2010.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-orange-500 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-orange-500 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-orange-500 transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Firework Display Packs</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Rockets</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Selection Boxes</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Barrages</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Safety Guide</a></li>
                    </ul>
                </div>
                
                <!-- Customer Service -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Customer Service</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Terms and Conditions</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Return Policy</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Delivery Information</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">FAQ</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Contact Us</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h4 class="font-semibold text-lg mb-4">Contact Us</h4>
                    <div class="space-y-3 text-gray-400">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-orange-400"></i>
                            <span>+44 7305 535781</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-orange-400"></i>
                            <span>info@fireworksparadise.com</span>
                        </div>
                        <div class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-orange-400 mt-1"></i>
                            <span>109 Breck Road<br>Liverpool L4 2QX<br>United Kingdom</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-white/10 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Fireworks Paradise. All rights reserved.</p>
                <p class="mt-2 text-sm">IT IS ILLEGAL TO SELL FIREWORKS TO ANYONE UNDER 18. IT IS ILLEGAL FOR ANYONE UNDER 18 TO POSSESS FIREWORKS IN A PUBLIC PLACE.</p>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Mobile menu toggle
            $('#mobile-menu-btn').click(function() {
                $('#mobile-menu-overlay').toggleClass('opacity-0 invisible');
            });
            
            // Close mobile menu when clicking on overlay
            $('#mobile-menu-overlay').click(function(e) {
                if (e.target === this) {
                    $(this).addClass('opacity-0 invisible');
                }
            });
            
            // Product filtering (basic example)
            $('input[type="checkbox"], input[type="radio"]').change(function() {
                // Here you would implement actual filtering logic
                console.log('Filter changed:', $(this).is(':checked'), $(this).closest('label').text());
            });
            
            // Add to cart functionality
            $('.products-grid').on('click', 'button:contains("Add to Cart")', function() {
                const $button = $(this);
                const originalText = $button.text();
                
                $button.text('Adding...').prop('disabled', true);
                
                setTimeout(function() {
                    $button.text('Added!').removeClass('from-orange-500 to-red-600').addClass('from-green-500 to-green-600');
                    
                    setTimeout(function() {
                        $button.text(originalText).removeClass('from-green-500 to-green-600').addClass('from-orange-500 to-red-600').prop('disabled', false);
                    }, 1500);
                }, 800);
            });
            
            // Wishlist toggle
            $('.products-grid').on('click', '.fa-heart', function() {
                $(this).toggleClass('fas far text-red-500');
            });
            
            // Smooth scrolling for anchor links
            $('a[href^="#"]').on('click', function(event) {
                const target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });
            
            // Search functionality (basic)
            $('.fa-search').click(function() {
                const searchQuery = prompt('Enter search term:');
                if (searchQuery) {
                    console.log('Searching for:', searchQuery);
                    // Implement search logic here
                }
            });
            
            // Add loading animation for images
            $('img').on('load', function() {
                $(this).addClass('loaded');
            });
            
            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fade-in');
                    }
                });
            }, observerOptions);
            
            // Observe all product cards
            document.querySelectorAll('.card-hover').forEach(card => {
                observer.observe(card);
            });
        });
        
        // Add CSS animation class
        const style = document.createElement('style');
        style.textContent = `
            .animate-fade-in {
                animation: fadeInUp 0.6s ease-out forwards;
            }
            
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
            
            img.loaded {
                transition: opacity 0.3s ease;
                opacity: 1;
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html>
