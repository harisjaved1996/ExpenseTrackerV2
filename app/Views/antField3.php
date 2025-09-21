<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barrages - Anfield Fireworks</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'anfield-red': '#DC2626',
                        'anfield-dark': '#1F2937',
                        'anfield-black': '#111827',
                        'anfield-gold': '#FCD34D'
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.6s ease-out',
                        'bounce-subtle': 'bounceSubtle 2s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(20px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        bounceSubtle: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-5px)' }
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 20px rgba(220, 38, 38, 0.3)' },
                            '100%': { boxShadow: '0 0 30px rgba(220, 38, 38, 0.6)' }
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;600;700&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
        }
        
        .hero-bg {
            background: linear-gradient(135deg, rgba(220, 38, 38, 0.9) 0%, rgba(17, 24, 39, 0.9) 100%),
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="sparkle" cx="50%" cy="50%" r="50%"><stop offset="0%" style="stop-color:%23FCD34D;stop-opacity:1" /><stop offset="100%" style="stop-color:%23FCD34D;stop-opacity:0" /></radialGradient></defs><circle cx="100" cy="100" r="2" fill="url(%23sparkle)" opacity="0.8"><animate attributeName="opacity" values="0.8;0.3;0.8" dur="2s" repeatCount="indefinite"/></circle><circle cx="300" cy="200" r="1.5" fill="url(%23sparkle)" opacity="0.6"><animate attributeName="opacity" values="0.6;0.2;0.6" dur="3s" repeatCount="indefinite"/></circle><circle cx="500" cy="150" r="2.5" fill="url(%23sparkle)" opacity="0.9"><animate attributeName="opacity" values="0.9;0.4;0.9" dur="1.5s" repeatCount="indefinite"/></circle></svg>');
            background-size: cover;
            position: relative;
        }
        
        .product-card {
            transition: all 0.3s ease;
            background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
        }
        
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(220, 38, 38, 0.2);
        }
        
        .filter-sidebar {
            background: linear-gradient(145deg, #1f2937 0%, #374151 100%);
        }
        
        .brand-title {
            font-family: 'Rajdhani', sans-serif;
            font-weight: 700;
        }
        
        .sparkle-effect {
            position: relative;
            overflow: hidden;
        }
        
        .sparkle-effect::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(252, 211, 77, 0.1) 0%, transparent 70%);
            animation: rotate 10s linear infinite;
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .price-tag {
            background: linear-gradient(135deg, #DC2626 0%, #B91C1C 100%);
        }
        
        .badge-offer {
            background: linear-gradient(135deg, #FCD34D 0%, #F59E0B 100%);
            color: #1F2937;
        }
        
        @media (max-width: 768px) {
            .filter-sidebar {
                position: fixed;
                top: 0;
                left: -100%;
                height: 100vh;
                z-index: 50;
                transition: left 0.3s ease;
            }
            
            .filter-sidebar.open {
                left: 0;
            }
        }
        
        .loading-spinner {
            border: 4px solid #f3f3f3;
            border-top: 4px solid #DC2626;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <!-- Navigation -->
    <nav class="bg-anfield-black shadow-lg sticky top-0 z-40">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-anfield-red rounded-full flex items-center justify-center animate-glow">
                        <i class="fas fa-fire text-white text-xl"></i>
                    </div>
                    <div>
                        <h1 class="brand-title text-2xl font-bold text-white">ANFIELD</h1>
                        <p class="text-anfield-gold text-sm font-semibold">FIREWORKS</p>
                    </div>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#" class="hover:text-anfield-red transition duration-300">Home</a>
                    <a href="#" class="hover:text-anfield-red transition duration-300">Fireworks</a>
                    <a href="#" class="text-anfield-red font-semibold">Barrages</a>
                    <a href="#" class="hover:text-anfield-red transition duration-300">Display Packs</a>
                    <a href="#" class="hover:text-anfield-red transition duration-300">About</a>
                    <a href="#" class="hover:text-anfield-red transition duration-300">Contact</a>
                </div>
                
                <!-- Cart and Mobile Menu -->
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <i class="fas fa-shopping-cart text-xl hover:text-anfield-red cursor-pointer transition duration-300"></i>
                        <span class="absolute -top-2 -right-2 bg-anfield-red text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                    </div>
                    <button class="lg:hidden" id="mobile-menu-toggle">
                        <i class="fas fa-bars text-xl hover:text-anfield-red transition duration-300"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-50 z-50 lg:hidden hidden">
        <div class="bg-anfield-black w-64 h-full shadow-xl">
            <div class="p-6">
                <button id="close-mobile-menu" class="float-right text-white text-xl">
                    <i class="fas fa-times"></i>
                </button>
                <div class="mt-8 space-y-4">
                    <a href="#" class="block text-white hover:text-anfield-red transition duration-300">Home</a>
                    <a href="#" class="block text-white hover:text-anfield-red transition duration-300">Fireworks</a>
                    <a href="#" class="block text-anfield-red font-semibold">Barrages</a>
                    <a href="#" class="block text-white hover:text-anfield-red transition duration-300">Display Packs</a>
                    <a href="#" class="block text-white hover:text-anfield-red transition duration-300">About</a>
                    <a href="#" class="block text-white hover:text-anfield-red transition duration-300">Contact</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-bg py-20 text-center sparkle-effect">
        <div class="container mx-auto px-4">
            <h1 class="brand-title text-5xl md:text-7xl font-bold mb-6 animate-slide-up">
                EXPLOSIVE <span class="text-anfield-gold">BARRAGES</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 animate-fade-in opacity-90">
                Professional Grade Firework Barrages for Spectacular Displays
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-in">
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4 border border-white border-opacity-20">
                    <i class="fas fa-shield-alt text-anfield-gold text-2xl mb-2"></i>
                    <p class="font-semibold">Safety Certified</p>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4 border border-white border-opacity-20">
                    <i class="fas fa-truck text-anfield-gold text-2xl mb-2"></i>
                    <p class="font-semibold">Fast Delivery</p>
                </div>
                <div class="bg-white bg-opacity-10 backdrop-blur-sm rounded-lg p-4 border border-white border-opacity-20">
                    <i class="fas fa-star text-anfield-gold text-2xl mb-2"></i>
                    <p class="font-semibold">Premium Quality</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Sidebar Filters -->
            <div class="lg:w-1/4">
                <button id="filter-toggle" class="lg:hidden w-full bg-anfield-red text-white py-3 px-4 rounded-lg mb-4 font-semibold">
                    <i class="fas fa-filter mr-2"></i>Filters
                </button>
                
                <div id="filter-sidebar" class="filter-sidebar lg:block rounded-xl p-6 text-white w-full lg:w-auto">
                    <h3 class="text-xl font-bold mb-6 text-anfield-gold">Filter Products</h3>
                    
                    <!-- Price Range -->
                    <div class="mb-6">
                        <h4 class="font-semibold mb-3">Price Range</h4>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="mr-2 filter-checkbox" data-filter="price" data-value="0-25">
                                <span>£0 - £25</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="mr-2 filter-checkbox" data-filter="price" data-value="25-50">
                                <span>£25 - £50</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="mr-2 filter-checkbox" data-filter="price" data-value="50-100">
                                <span>£50 - £100</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="mr-2 filter-checkbox" data-filter="price" data-value="100+">
                                <span>£100+</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Brand -->
                    <div class="mb-6">
                        <h4 class="font-semibold mb-3">Brand</h4>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="mr-2 filter-checkbox" data-filter="brand" data-value="brothers">
                                <span>Brothers Pyrotechnics</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="mr-2 filter-checkbox" data-filter="brand" data-value="hallmark">
                                <span>Hallmark Fireworks</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="mr-2 filter-checkbox" data-filter="brand" data-value="anfield">
                                <span>Anfield Exclusive</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Special Offers -->
                    <div class="mb-6">
                        <h4 class="font-semibold mb-3">Special Offers</h4>
                        <div class="space-y-2">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="mr-2 filter-checkbox" data-filter="offer" data-value="sale">
                                <span>On Sale</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="mr-2 filter-checkbox" data-filter="offer" data-value="bogof">
                                <span>Buy One Get One Free</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" class="mr-2 filter-checkbox" data-filter="offer" data-value="bundle">
                                <span>Bundle Deals</span>
                            </label>
                        </div>
                    </div>
                    
                    <button id="clear-filters" class="w-full bg-anfield-red hover:bg-red-700 text-white py-2 px-4 rounded-lg transition duration-300">
                        Clear All Filters
                    </button>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="lg:w-3/4">
                <!-- Search and Sort -->
                <div class="flex flex-col sm:flex-row justify-between items-center mb-8 gap-4">
                    <div class="relative w-full sm:w-64">
                        <input type="text" id="search-input" placeholder="Search Products" 
                               class="w-full bg-white text-gray-900 px-4 py-2 pl-10 rounded-lg border-2 border-gray-300 focus:border-anfield-red focus:outline-none transition duration-300">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-300">Sort by:</span>
                        <select id="sort-select" class="bg-anfield-dark text-white px-4 py-2 rounded-lg border border-gray-600 focus:border-anfield-red focus:outline-none">
                            <option value="name">Name A-Z</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="popular">Most Popular</option>
                        </select>
                    </div>
                </div>

                <!-- Loading Spinner -->
                <div id="loading" class="hidden text-center py-12">
                    <div class="loading-spinner mx-auto mb-4"></div>
                    <p class="text-gray-400">Loading amazing barrages...</p>
                </div>

                <!-- Products Grid -->
                <div id="products-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Products will be populated by JavaScript -->
                    <!-- haris1 -->
                    <!-- Product Card 1 -->
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png" alt="Thunder King Barrage" class="w-full h-64 object-cover">
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
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png" alt="Thunder King Barrage" class="w-full h-64 object-cover">
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
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png" alt="Thunder King Barrage" class="w-full h-64 object-cover">
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
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png" alt="Thunder King Barrage" class="w-full h-64 object-cover">
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
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png" alt="Thunder King Barrage" class="w-full h-64 object-cover">
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
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png" alt="Thunder King Barrage" class="w-full h-64 object-cover">
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
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png" alt="Thunder King Barrage" class="w-full h-64 object-cover">
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
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png" alt="Thunder King Barrage" class="w-full h-64 object-cover">
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
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png" alt="Thunder King Barrage" class="w-full h-64 object-cover">
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
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png" alt="Thunder King Barrage" class="w-full h-64 object-cover">
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
                    <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden fade-in">
                        <div class="relative">
                            <img src="https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png" alt="Thunder King Barrage" class="w-full h-64 object-cover">
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
                    <!--  -->
                </div>

                <!-- Pagination -->
                <div id="pagination" class="flex justify-center mt-12">
                    <div class="flex space-x-2">
                        <button class="px-4 py-2 bg-anfield-dark text-white rounded-lg hover:bg-anfield-red transition duration-300 disabled:opacity-50" disabled>Previous</button>
                        <button class="px-4 py-2 bg-anfield-red text-white rounded-lg">1</button>
                        <button class="px-4 py-2 bg-anfield-dark text-white rounded-lg hover:bg-anfield-red transition duration-300">2</button>
                        <button class="px-4 py-2 bg-anfield-dark text-white rounded-lg hover:bg-anfield-red transition duration-300">3</button>
                        <button class="px-4 py-2 bg-anfield-dark text-white rounded-lg hover:bg-anfield-red transition duration-300">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-anfield-black py-12 mt-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-10 h-10 bg-anfield-red rounded-full flex items-center justify-center">
                            <i class="fas fa-fire text-white"></i>
                        </div>
                        <div>
                            <h3 class="brand-title text-xl font-bold text-white">ANFIELD</h3>
                            <p class="text-anfield-gold text-sm">FIREWORKS</p>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-4">Professional fireworks for unforgettable celebrations since 1995.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-anfield-red transition duration-300">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-anfield-red transition duration-300">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-anfield-red transition duration-300">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-anfield-red transition duration-300">Home</a></li>
                        <li><a href="#" class="hover:text-anfield-red transition duration-300">All Fireworks</a></li>
                        <li><a href="#" class="hover:text-anfield-red transition duration-300">Display Packs</a></li>
                        <li><a href="#" class="hover:text-anfield-red transition duration-300">Safety Guide</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-semibold mb-4">Customer Service</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-anfield-red transition duration-300">Contact Us</a></li>
                        <li><a href="#" class="hover:text-anfield-red transition duration-300">Delivery Info</a></li>
                        <li><a href="#" class="hover:text-anfield-red transition duration-300">Returns</a></li>
                        <li><a href="#" class="hover:text-anfield-red transition duration-300">Terms & Conditions</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-semibold mb-4">Contact Info</h4>
                    <div class="space-y-3 text-gray-400">
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-phone text-anfield-red"></i>
                            <span>07305535781</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-anfield-red"></i>
                            <span>info@anfieldfireworks.com</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-anfield-red"></i>
                            <span>109 Breck Road<br>Anfield, Liverpool L4 2QX</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2025 Anfield Fireworks. All rights reserved. | <strong>IT IS ILLEGAL TO SELL FIREWORKS TO ANYONE UNDER 18.</strong></p>
            </div>
        </div>
    </footer>
</body>
<script>
    $(document).ready(function() {
        
        // Sample product data - in a real application, this would come from an API
        const products = [
            {
                id: 1,
                name: "Strobe Rocket",
                price: 24.99,
                originalPrice: 29.99,
                image: "https://anfieldfireworks.com/wp-content/uploads/2025/09/Strobe-Rocket-300x300.png",
                brand: "anfield",
                offer: "sale",
                rating: 4.5,
                description: "Spectacular strobe effects with brilliant colors"
            },
            {
                id: 2,
                name: "Black Cat Barrage",
                price: 18.99,
                image: "https://anfieldfireworks.com/wp-content/uploads/2025/09/bc-300x300.png",
                brand: "brothers",
                offer: null,
                rating: 4.2,
                description: "Intense rapid-fire barrage with golden effects"
            },
            {
                id: 3,
                name: "MI6 by Brothers Pyrotechnics",
                price: 35.99,
                image: "https://anfieldfireworks.com/wp-content/uploads/2025/09/MI6-by-brothers-pyrotechnics-300x300.png",
                brand: "brothers",
                offer: "bundle",
                rating: 4.8,
                description: "Professional grade secret agent themed barrage"
            },
            {
                id: 4,
                name: "M14 Explosive Pack",
                price: 42.50,
                image: "https://anfieldfireworks.com/wp-content/uploads/2025/09/m14-300x300.png",
                brand: "anfield",
                offer: "bogof",
                rating: 4.6,
                description: "Military inspired high-impact barrage series"
            },
            {
                id: 5,
                name: "Indestructible",
                price: 55.99,
                image: "https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png",
                brand: "hallmark",
                offer: null,
                rating: 4.9,
                description: "Ultimate power barrage for grand finales"
            },
            {
                id: 6,
                name: "RS3 by Brothers Pyrotechnics",
                price: 28.99,
                image: "https://anfieldfireworks.com/wp-content/uploads/2025/09/RS3-by-brothers-pyrotechnics-300x300.png",
                brand: "brothers",
                offer: "sale",
                originalPrice: 34.99,
                rating: 4.4,
                description: "Rocket series with stunning aerial effects"
            },
            {
                id: 7,
                name: "The Punch Bag Deal",
                price: 45.99,
                image: "https://anfieldfireworks.com/wp-content/uploads/2025/09/the-punch-bag-deal-300x300.png",
                brand: "anfield",
                offer: "bundle",
                rating: 4.3,
                description: "Heavy-hitting combo pack with multiple barrages"
            },
            {
                id: 8,
                name: "Golden Tears",
                price: 32.99,
                image: "https://anfieldfireworks.com/wp-content/uploads/2025/09/golden-tears-300x300.png",
                brand: "hallmark",
                offer: null,
                rating: 4.7,
                description: "Beautiful golden waterfall effects"
            },
            {
                id: 9,
                name: "Titans Trilogy by Hallmark",
                price: 89.99,
                image: "https://anfieldfireworks.com/wp-content/uploads/2025/09/Titans-Trilogy-by-Hallmark-Fireworks-300x300.png",
                brand: "hallmark",
                offer: "bundle",
                rating: 4.9,
                description: "Three powerful barrages in one premium package"
            }
        ];

        let filteredProducts = [...products];
        let currentPage = 1;
        const itemsPerPage = 6;

        // Initialize page
        renderProducts();
        
        // Mobile menu toggle
        $('#mobile-menu-toggle').click(function() {
            $('#mobile-menu').removeClass('hidden');
        });
        
        $('#close-mobile-menu').click(function() {
            $('#mobile-menu').addClass('hidden');
        });
        
        // Filter sidebar toggle for mobile
        $('#filter-toggle').click(function() {
            $('#filter-sidebar').toggleClass('open');
        });
        
        // Search functionality
        $('#search-input').on('input', function() {
            const searchTerm = $(this).val().toLowerCase();
            filteredProducts = products.filter(product => 
                product.name.toLowerCase().includes(searchTerm) ||
                product.description.toLowerCase().includes(searchTerm)
            );
            currentPage = 1;
            renderProducts();
        });
        
        // Sort functionality
        $('#sort-select').change(function() {
            const sortBy = $(this).val();
            
            filteredProducts.sort((a, b) => {
                switch(sortBy) {
                    case 'name':
                        return a.name.localeCompare(b.name);
                    case 'price-low':
                        return a.price - b.price;
                    case 'price-high':
                        return b.price - a.price;
                    case 'popular':
                        return b.rating - a.rating;
                    default:
                        return 0;
                }
            });
            
            renderProducts();
        });
        
        // Filter functionality
        $('.filter-checkbox').change(function() {
            applyFilters();
        });
        
        // Clear filters
        $('#clear-filters').click(function() {
            $('.filter-checkbox').prop('checked', false);
            filteredProducts = [...products];
            currentPage = 1;
            renderProducts();
        });
        
        function applyFilters() {
            const priceFilters = [];
            const brandFilters = [];
            const offerFilters = [];
            
            $('input[data-filter="price"]:checked').each(function() {
                priceFilters.push($(this).data('value'));
            });
            
            $('input[data-filter="brand"]:checked').each(function() {
                brandFilters.push($(this).data('value'));
            });
            
            $('input[data-filter="offer"]:checked').each(function() {
                offerFilters.push($(this).data('value'));
            });
            
            filteredProducts = products.filter(product => {
                let matchesPrice = priceFilters.length === 0;
                let matchesBrand = brandFilters.length === 0;
                let matchesOffer = offerFilters.length === 0;
                
                // Price filter
                if (priceFilters.length > 0) {
                    priceFilters.forEach(range => {
                        if (range === '0-25' && product.price <= 25) matchesPrice = true;
                        if (range === '25-50' && product.price > 25 && product.price <= 50) matchesPrice = true;
                        if (range === '50-100' && product.price > 50 && product.price <= 100) matchesPrice = true;
                        if (range === '100+' && product.price > 100) matchesPrice = true;
                    });
                }
                
                // Brand filter
                if (brandFilters.length > 0) {
                    matchesBrand = brandFilters.includes(product.brand);
                }
                
                // Offer filter
                if (offerFilters.length > 0) {
                    matchesOffer = offerFilters.includes(product.offer);
                }
                
                return matchesPrice && matchesBrand && matchesOffer;
            });
            
            currentPage = 1;
            renderProducts();
        }
        
        function renderProducts() {
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const productsToShow = filteredProducts.slice(startIndex, endIndex);
            
            $('#loading').removeClass('hidden');
            $('#products-grid').addClass('opacity-50');
            
            setTimeout(() => {
                let html = '';
                
                productsToShow.forEach(product => {
                    html += `
                        <div class="product-card bg-white rounded-xl shadow-lg overflow-hidden animate-fade-in">
                            ${product.offer ? getOfferBadge(product.offer) : ''}
                            
                            <div class="relative group">
                                <img src="${product.image}" alt="${product.name}" 
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                                        onerror="this.src='data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMzAwIiBoZWlnaHQ9IjMwMCIgdmlld0JveD0iMCAwIDMwMCAzMDAiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxyZWN0IHdpZHRoPSIzMDAiIGhlaWdodD0iMzAwIiBmaWxsPSIjRjNGNEY2Ii8+CjxwYXRoIGQ9Ik0xNTAgMTAwTDE4MCAyMDBIMTIwTDE1MCAxMDBaIiBmaWxsPSIjREMyNjI2Ii8+CjwvbGc+Cg=='; this.onerror=null;">
                                
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <div class="absolute bottom-4 left-4 right-4">
                                        <button class="w-full bg-anfield-red hover:bg-red-700 text-white py-2 px-4 rounded-lg font-semibold transition duration-300 transform translate-y-4 group-hover:translate-y-0">
                                            <i class="fas fa-shopping-cart mr-2"></i>Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="p-6">
                                <h3 class="font-bold text-gray-900 text-lg mb-2 line-clamp-2">${product.name}</h3>
                                <p class="text-gray-600 text-sm mb-3 line-clamp-2">${product.description}</p>
                                
                                <div class="flex items-center mb-3">
                                    <div class="flex text-yellow-400 text-sm">
                                        ${generateStars(product.rating)}
                                    </div>
                                    <span class="text-gray-500 text-sm ml-2">(${product.rating})</span>
                                </div>
                                
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center space-x-2">
                                        <span class="price-tag text-white px-3 py-1 rounded-full font-bold">
                                            £${product.price.toFixed(2)}
                                        </span>
                                        ${product.originalPrice ? `<span class="text-gray-400 line-through text-sm">£${product.originalPrice.toFixed(2)}</span>` : ''}
                                    </div>
                                    <button class="text-anfield-red hover:text-red-700 transition duration-300">
                                        <i class="fas fa-heart text-xl"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                });
                
                if (productsToShow.length === 0) {
                    html = `
                        <div class="col-span-full text-center py-12">
                            <i class="fas fa-search text-6xl text-gray-400 mb-4"></i>
                            <h3 class="text-xl font-semibold text-gray-400 mb-2">No products found</h3>
                            <p class="text-gray-500">Try adjusting your filters or search terms</p>
                        </div>
                    `;
                }
                
                $('#products-grid').html(html);
                $('#loading').addClass('hidden');
                $('#products-grid').removeClass('opacity-50');
                
                renderPagination();
            }, 500);
        }
    }
</script>

        