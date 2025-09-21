<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barrages - Anfield Fireworks | Premium Firework Display Packs</title>
    <meta name="description" content="Shop premium barrage fireworks at Anfield Fireworks. Best deals on multi-shot barrages with spectacular effects. Free delivery on orders over £50.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 50%, #991b1b 100%);
        }
        
        .product-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .price-slider {
            -webkit-appearance: none;
            appearance: none;
            background: #e5e7eb;
            border-radius: 5px;
            height: 8px;
            outline: none;
        }
        
        .price-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            background: #dc2626;
            border-radius: 50%;
            cursor: pointer;
        }
        
        .price-slider::-moz-range-thumb {
            width: 20px;
            height: 20px;
            background: #dc2626;
            border-radius: 50%;
            cursor: pointer;
            border: none;
        }
        
        .offer-badge {
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .fade-in {
            animation: fadeIn 0.6s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .loading-spinner {
            border: 3px solid #f3f4f6;
            border-top: 3px solid #dc2626;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="bg-black text-white sticky top-0 z-50 shadow-lg">
        <div class="container mx-auto px-4">
            <!-- Top Bar -->
            <div class="flex items-center justify-between py-2 text-sm border-b border-gray-700">
                <div class="flex items-center space-x-4">
                    <span><i class="fas fa-phone text-red-600"></i> 07305535781</span>
                    <span><i class="fas fa-envelope text-red-600"></i> info@anfieldfireworks.com</span>
                </div>
                <div class="flex items-center space-x-3">
                    <a href="#" class="hover:text-red-600 transition-colors"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-red-600 transition-colors"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-red-600 transition-colors"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            
            <!-- Main Navigation -->
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-red-600">ANFIELD <span class="text-white">FIREWORKS</span></h1>
                </div>
                
                <!-- Navigation Menu -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <div class="relative group">
                        <a href="#" class="hover:text-red-600 transition-colors flex items-center">
                            Fireworks <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                    </div>
                    <div class="relative group">
                        <a href="#" class="hover:text-red-600 transition-colors flex items-center">
                            Display Packs <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                    </div>
                    <a href="#" class="hover:text-red-600 transition-colors">Gift Shop</a>
                    <a href="#" class="hover:text-red-600 transition-colors">Wholesale</a>
                    <a href="#" class="hover:text-red-600 transition-colors">About Us</a>
                    <a href="#" class="hover:text-red-600 transition-colors">Blog</a>
                </nav>
                
                <!-- Search & Cart -->
                <div class="flex items-center space-x-4">
                    <div class="relative hidden md:block">
                        <input type="text" placeholder="Search products..." 
                               class="bg-gray-800 text-white px-4 py-2 pr-10 rounded-full border border-gray-700 focus:border-red-600 focus:outline-none transition-colors">
                        <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
                    </div>
                    <button class="relative hover:text-red-600 transition-colors">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-red-600 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </button>
                    <button class="lg:hidden text-xl hover:text-red-600 transition-colors">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="bg-white border-b">
        <div class="container mx-auto px-4 py-3">
            <nav class="text-sm text-gray-600">
                <a href="#" class="hover:text-red-600 transition-colors">Home</a>
                <span class="mx-2">/</span>
                <a href="#" class="hover:text-red-600 transition-colors">Fireworks</a>
                <span class="mx-2">/</span>
                <span class="text-red-600 font-medium">Barrages</span>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Sidebar -->
            <aside class="lg:w-1/4">
                <div class="bg-white rounded-xl shadow-lg p-6 sticky top-24">
                    <h3 class="text-xl font-bold mb-6 text-gray-800 border-b pb-3">Filter Products</h3>
                    
                    <!-- Price Filter -->
                    <div class="mb-8">
                        <h4 class="font-semibold mb-4 text-gray-700 flex items-center">
                            <i class="fas fa-pound-sign text-red-600 mr-2"></i>Price Range
                        </h4>
                        <div class="space-y-4">
                            <input type="range" min="0" max="200" value="100" class="price-slider w-full" id="priceRange">
                            <div class="flex justify-between text-sm text-gray-600">
                                <span>£0</span>
                                <span id="priceValue" class="font-medium text-red-600">£100</span>
                                <span>£200+</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sort By -->
                    <div class="mb-8">
                        <h4 class="font-semibold mb-4 text-gray-700 flex items-center">
                            <i class="fas fa-sort text-red-600 mr-2"></i>Sort By
                        </h4>
                        <select class="w-full p-3 border border-gray-300 rounded-lg focus:border-red-600 focus:outline-none transition-colors">
                            <option>Newest Products</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Most Popular</option>
                            <option>Best Rated</option>
                        </select>
                    </div>
                    
                    <!-- Brand Filter -->
                    <div class="mb-8">
                        <h4 class="font-semibold mb-4 text-gray-700 flex items-center">
                            <i class="fas fa-star text-red-600 mr-2"></i>Brand
                        </h4>
                        <div class="space-y-3">
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" class="mr-3 accent-red-600">
                                <span>Epic Fireworks</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" class="mr-3 accent-red-600">
                                <span>Brothers Pyrotechnics</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" class="mr-3 accent-red-600">
                                <span>Bright Star</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" class="mr-3 accent-red-600">
                                <span>Celtic Fireworks</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Noise Rating -->
                    <div class="mb-8">
                        <h4 class="font-semibold mb-4 text-gray-700 flex items-center">
                            <i class="fas fa-volume-up text-red-600 mr-2"></i>Noise Rating
                        </h4>
                        <div class="space-y-3">
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="radio" name="noise" class="mr-3 accent-red-600">
                                <span>1 - Very Quiet</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="radio" name="noise" class="mr-3 accent-red-600">
                                <span>2 - Quiet</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="radio" name="noise" class="mr-3 accent-red-600">
                                <span>3 - Medium</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="radio" name="noise" class="mr-3 accent-red-600">
                                <span>4 - Loud</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="radio" name="noise" class="mr-3 accent-red-600">
                                <span>5 - Very Loud</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Number of Shots -->
                    <div class="mb-6">
                        <h4 class="font-semibold mb-4 text-gray-700 flex items-center">
                            <i class="fas fa-fire text-red-600 mr-2"></i>Number of Shots
                        </h4>
                        <div class="space-y-3">
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" class="mr-3 accent-red-600">
                                <span>1-25 Shots</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" class="mr-3 accent-red-600">
                                <span>26-50 Shots</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" class="mr-3 accent-red-600">
                                <span>51-100 Shots</span>
                            </label>
                            <label class="flex items-center cursor-pointer hover:bg-gray-50 p-2 rounded">
                                <input type="checkbox" class="mr-3 accent-red-600">
                                <span>100+ Shots</span>
                            </label>
                        </div>
                    </div>
                    
                    <button class="w-full gradient-bg text-white py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                        Apply Filters
                    </button>
                </div>
            </aside>

            <!-- Main Content Area -->
            <main class="lg:w-3/4">
                <!-- Page Header -->
                <div class="mb-8">
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h1 class="text-4xl font-bold text-gray-800 mb-4">Barrages Collection</h1>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Discover our spectacular range of barrage fireworks featuring multi-shot displays that create stunning aerial effects. 
                            Perfect for celebrations, these premium quality barrages deliver professional-grade performances for your special events.
                        </p>
                        <div class="flex flex-wrap items-center gap-4 mt-4 text-sm">
                            <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full">
                                <i class="fas fa-truck mr-1"></i>Free Delivery Over £50
                            </span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full">
                                <i class="fas fa-shield-alt mr-1"></i>Safety Certified
                            </span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full">
                                <i class="fas fa-star mr-1"></i>Premium Quality
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Results Info -->
                <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
                    <div class="text-gray-600 mb-4 sm:mb-0">
                        Showing <span class="font-semibold text-gray-800">24</span> of <span class="font-semibold text-gray-800">156</span> products
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600">View:</span>
                        <button class="p-2 text-red-600 bg-red-50 rounded border border-red-200">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="p-2 text-gray-600 hover:text-red-600 transition-colors">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6" id="productsGrid">
                    <!-- Product Card 1 -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://via.placeholder.com/300x300/dc2626/ffffff?text=Barrage+1" alt="Thunder King Barrage" class="w-full h-64 object-cover">
                            <div class="absolute top-3 left-3">
                                <span class="offer-badge bg-red-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                                    2 for £30
                                </span>
                            </div>
                            <div class="absolute top-3 right-3">
                                <button class="bg-white bg-opacity-80 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                    <i class="far fa-heart text-gray-600 hover:text-red-600"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="text-sm text-red-600 font-medium mb-1">Epic Fireworks</div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Thunder King 25 Shot Barrage</h3>
                            <div class="flex items-center mb-3">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="text-sm text-gray-600 ml-2">(28 reviews)</span>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <span class="text-2xl font-bold text-red-600">£18.99</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">£24.99</span>
                                </div>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">In Stock</span>
                            </div>
                            <button class="w-full gradient-bg text-white py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                                <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://via.placeholder.com/300x300/dc2626/ffffff?text=Barrage+2" alt="Mega Blast Barrage" class="w-full h-64 object-cover">
                            <div class="absolute top-3 left-3">
                                <span class="offer-badge bg-orange-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                                    Buy 1 Get 1 FREE
                                </span>
                            </div>
                            <div class="absolute top-3 right-3">
                                <button class="bg-white bg-opacity-80 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                    <i class="far fa-heart text-gray-600 hover:text-red-600"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="text-sm text-red-600 font-medium mb-1">Brothers Pyrotechnics</div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Mega Blast 36 Shot Spectacular</h3>
                            <div class="flex items-center mb-3">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="text-sm text-gray-600 ml-2">(42 reviews)</span>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <span class="text-2xl font-bold text-red-600">£32.50</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">£45.00</span>
                                </div>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">In Stock</span>
                            </div>
                            <button class="w-full gradient-bg text-white py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                                <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://via.placeholder.com/300x300/dc2626/ffffff?text=Barrage+3" alt="Golden Storm Barrage" class="w-full h-64 object-cover">
                            <div class="absolute top-3 left-3">
                                <span class="offer-badge bg-yellow-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                                    SALE
                                </span>
                            </div>
                            <div class="absolute top-3 right-3">
                                <button class="bg-white bg-opacity-80 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                    <i class="fas fa-heart text-red-600"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="text-sm text-red-600 font-medium mb-1">Bright Star</div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Golden Storm 49 Shot Deluxe</h3>
                            <div class="flex items-center mb-3">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="text-sm text-gray-600 ml-2">(15 reviews)</span>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <span class="text-2xl font-bold text-red-600">£48.75</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">£65.00</span>
                                </div>
                                <span class="bg-orange-100 text-orange-800 text-xs px-2 py-1 rounded">Limited Stock</span>
                            </div>
                            <button class="w-full gradient-bg text-white py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                                <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://via.placeholder.com/300x300/dc2626/ffffff?text=Barrage+4" alt="Phoenix Rising Barrage" class="w-full h-64 object-cover">
                            <div class="absolute top-3 right-3">
                                <button class="bg-white bg-opacity-80 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                    <i class="far fa-heart text-gray-600 hover:text-red-600"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="text-sm text-red-600 font-medium mb-1">Celtic Fireworks</div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Phoenix Rising 60 Shot Pro</h3>
                            <div class="flex items-center mb-3">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="text-sm text-gray-600 ml-2">(63 reviews)</span>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <span class="text-2xl font-bold text-red-600">£75.99</span>
                                </div>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">In Stock</span>
                            </div>
                            <button class="w-full gradient-bg text-white py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                                <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product Card 5 -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://via.placeholder.com/300x300/dc2626/ffffff?text=Barrage+5" alt="Diamond Cascade Barrage" class="w-full h-64 object-cover">
                            <div class="absolute top-3 left-3">
                                <span class="offer-badge bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                                    NEW
                                </span>
                            </div>
                            <div class="absolute top-3 right-3">
                                <button class="bg-white bg-opacity-80 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                    <i class="far fa-heart text-gray-600 hover:text-red-600"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="text-sm text-red-600 font-medium mb-1">Epic Fireworks</div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Diamond Cascade 42 Shot Elite</h3>
                            <div class="flex items-center mb-3">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="text-sm text-gray-600 ml-2">(8 reviews)</span>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <span class="text-2xl font-bold text-red-600">£58.25</span>
                                </div>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">In Stock</span>
                            </div>
                            <button class="w-full gradient-bg text-white py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                                <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Product Card 6 -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://via.placeholder.com/300x300/dc2626/ffffff?text=Barrage+6" alt="Starlight Symphony Barrage" class="w-full h-64 object-cover">
                            <div class="absolute top-3 left-3">
                                <span class="offer-badge bg-red-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                                    3 for £50
                                </span>
                            </div>
                            <div class="absolute top-3 right-3">
                                <button class="bg-white bg-opacity-80 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                    <i class="far fa-heart text-gray-600 hover:text-red-600"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="text-sm text-red-600 font-medium mb-1">Brothers Pyrotechnics</div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2 line-clamp-2">Starlight Symphony 30 Shot</h3>
                            <div class="flex items-center mb-3">
                                <div class="flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <span class="text-sm text-gray-600 ml-2">(24 reviews)</span>
                            </div>
                            <div class="flex items-center justify-between mb-4">
                                <div>
                                    <span class="text-2xl font-bold text-red-600">£22.99</span>
                                    <span class="text-sm text-gray-500 line-through ml-2">£28.99</span>
                                </div>
                                <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">In Stock</span>
                            </div>
                            <button class="w-full gradient-bg text-white py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                                <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="text-center mt-12">
                    <button id="loadMoreBtn" class="gradient-bg text-white px-8 py-4 rounded-lg font-semibold hover:opacity-90 transition-opacity inline-flex items-center">
                        <span class="mr-2">Load More Products</span>
                        <div class="loading-spinner hidden"></div>
                    </button>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center items-center space-x-2 mt-8">
                    <button class="px-3 py-2 text-gray-600 hover:text-red-600 transition-colors">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="px-4 py-2 bg-red-600 text-white rounded-lg">1</button>
                    <button class="px-4 py-2 text-gray-600 hover:text-red-600 transition-colors">2</button>
                    <button class="px-4 py-2 text-gray-600 hover:text-red-600 transition-colors">3</button>
                    <span class="px-2 text-gray-400">...</span>
                    <button class="px-4 py-2 text-gray-600 hover:text-red-600 transition-colors">7</button>
                    <button class="px-3 py-2 text-gray-600 hover:text-red-600 transition-colors">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-black text-white mt-16">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold text-red-600 mb-4">ANFIELD FIREWORKS</h3>
                    <p class="text-gray-300 mb-4">Your premier destination for high-quality fireworks and spectacular displays. Creating magical moments since 2015.</p>
                    <div class="flex space-x-3">
                        <a href="#" class="text-gray-400 hover:text-red-600 transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-600 transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-red-600 transition-colors">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold mb-4 text-gray-200">Quick Links</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-red-600 transition-colors">Firework Display Packs</a></li>
                        <li><a href="#" class="hover:text-red-600 transition-colors">Rockets</a></li>
                        <li><a href="#" class="hover:text-red-600 transition-colors">Selection Boxes</a></li>
                        <li><a href="#" class="hover:text-red-600 transition-colors">Barrages</a></li>
                        <li><a href="#" class="hover:text-red-600 transition-colors">Display Kits</a></li>
                    </ul>
                </div>
                
                <!-- Customer Service -->
                <div>
                    <h4 class="font-semibold mb-4 text-gray-200">Customer Service</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-red-600 transition-colors">Safety Guidelines</a></li>
                        <li><a href="#" class="hover:text-red-600 transition-colors">Return Policy</a></li>
                        <li><a href="#" class="hover:text-red-600 transition-colors">Delivery Information</a></li>
                        <li><a href="#" class="hover:text-red-600 transition-colors">Terms & Conditions</a></li>
                        <li><a href="#" class="hover:text-red-600 transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="font-semibold mb-4 text-gray-200">Contact Us</h4>
                    <div class="text-gray-300 space-y-3">
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt text-red-600 mr-3"></i>
                            <div>
                                <div>109 Breck Road</div>
                                <div>Liverpool L4 2QX</div>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone text-red-600 mr-3"></i>
                            <div>07305535781</div>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope text-red-600 mr-3"></i>
                            <div>info@anfieldfireworks.com</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 text-sm mb-4 md:mb-0">
                    © 2025 Anfield Fireworks. All rights reserved.
                </div>
                <div class="text-red-600 text-sm font-medium">
                    IT IS ILLEGAL TO SELL FIREWORKS TO ANYONE UNDER 18
                </div>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Price range slider
            $('#priceRange').on('input', function() {
                $('#priceValue').text('£' + $(this).val());
            });
            
            // Load more functionality
            $('#loadMoreBtn').click(function() {
                const button = $(this);
                const spinner = button.find('.loading-spinner');
                const text = button.find('span');
                
                // Show loading state
                spinner.removeClass('hidden');
                text.text('Loading...');
                button.prop('disabled', true);
                
                // Simulate loading
                setTimeout(function() {
                    // Add more products (simplified for demo)
                    const newProducts = `
                        <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                            <div class="relative">
                                <img src="https://via.placeholder.com/300x300/dc2626/ffffff?text=New+Barrage" alt="New Barrage" class="w-full h-64 object-cover">
                                <div class="absolute top-3 right-3">
                                    <button class="bg-white bg-opacity-80 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                        <i class="far fa-heart text-gray-600 hover:text-red-600"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="text-sm text-red-600 font-medium mb-1">New Brand</div>
                                <h3 class="text-lg font-bold text-gray-800 mb-2">Spectacular Display 45 Shot</h3>
                                <div class="flex items-center mb-3">
                                    <div class="flex text-yellow-400">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <span class="text-sm text-gray-600 ml-2">(12 reviews)</span>
                                </div>
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <span class="text-2xl font-bold text-red-600">£39.99</span>
                                    </div>
                                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">In Stock</span>
                                </div>
                                <button class="w-full gradient-bg text-white py-3 rounded-lg font-semibold hover:opacity-90 transition-opacity">
                                    <i class="fas fa-cart-plus mr-2"></i>Add to Cart
                                </button>
                            </div>
                        </div>
                    `;
                    
                    $('#productsGrid').append(newProducts);
                    
                    // Reset button state
                    spinner.addClass('hidden');
                    text.text('Load More Products');
                    button.prop('disabled', false);
                }, 2000);
            });
            
            // Filter interactions
            $('input[type="checkbox"], input[type="radio"]').change(function() {
                // Simulate filter application
                console.log('Filter applied:', $(this).closest('label').text().trim());
            });
            
            // Add to cart functionality
            $(document).on('click', '.product-card button:contains("Add to Cart")', function() {
                const button = $(this);
                const originalText = button.html();
                
                button.html('<i class="fas fa-check mr-2"></i>Added!');
                button.removeClass('gradient-bg').addClass('bg-green-600');
                
                setTimeout(function() {
                    button.html(originalText);
                    button.removeClass('bg-green-600').addClass('gradient-bg');
                }, 2000);
            });
            
            // Heart icon toggle
            $(document).on('click', '.fa-heart', function() {
                $(this).toggleClass('far fas text-gray-600 text-red-600');
            });
            
            // Mobile menu toggle (placeholder)
            $('.fa-bars').click(function() {
                alert('Mobile menu would open here');
            });
            
            // Search functionality (placeholder)
            $('input[placeholder="Search products..."]').keypress(function(e) {
                if (e.which == 13) {
                    alert('Search for: ' + $(this).val());
                }
            });
        });
    </script>
</body>
</html>