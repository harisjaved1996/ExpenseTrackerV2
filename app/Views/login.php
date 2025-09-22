<?php 
/*
print_r($response);
echo $response['message'];
die('haris');
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barrages - Premium Fireworks Collection</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#ff6b35',
                        secondary: '#1a1a2e',
                        accent: '#ffd700',
                        dark: '#0f0f23'
                    },
                    animation: {
                        'sparkle': 'sparkle 2s ease-in-out infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes sparkle {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.1); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        @keyframes glow {
            from { box-shadow: 0 0 20px rgba(255, 107, 53, 0.3); }
            to { box-shadow: 0 0 30px rgba(255, 107, 53, 0.6); }
        }
        .gradient-bg {
            background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 50%, #16213e 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
        .price-tag {
            background: linear-gradient(45deg, #ff6b35, #ff8f65);
            clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="gradient-bg shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-3xl font-bold text-white">
                            <i class="fas fa-fire text-primary mr-2"></i>
                            FireworksHub
                        </h1>
                    </div>
                </div>
                
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#" class="text-white hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">Home</a>
                        <a href="#" class="text-white hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">Products</a>
                        <a href="#" class="text-primary bg-white px-3 py-2 rounded-md text-sm font-medium">Barrages</a>
                        <a href="#" class="text-white hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">Safety</a>
                        <a href="#" class="text-white hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors">Contact</a>
                    </div>
                </div>
                
                <div class="flex items-center space-x-4">
                    <button class="text-white hover:text-primary transition-colors">
                        <i class="fas fa-search text-xl"></i>
                    </button>
                    <button class="text-white hover:text-primary transition-colors relative">
                        <i class="fas fa-shopping-cart text-xl"></i>
                        <span class="absolute -top-2 -right-2 bg-primary text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">0</span>
                    </button>
                    <button class="md:hidden text-white" id="mobile-menu-btn">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div class="md:hidden hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-secondary">
                <a href="#" class="text-white block px-3 py-2 rounded-md text-base font-medium">Home</a>
                <a href="#" class="text-white block px-3 py-2 rounded-md text-base font-medium">Products</a>
                <a href="#" class="text-primary bg-white block px-3 py-2 rounded-md text-base font-medium">Barrages</a>
                <a href="#" class="text-white block px-3 py-2 rounded-md text-base font-medium">Safety</a>
                <a href="#" class="text-white block px-3 py-2 rounded-md text-base font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-accent rounded-full animate-sparkle"></div>
            <div class="absolute top-1/3 right-1/3 w-1 h-1 bg-primary rounded-full animate-sparkle" style="animation-delay: 0.5s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-3 h-3 bg-accent rounded-full animate-sparkle" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 right-1/4 w-1 h-1 bg-primary rounded-full animate-sparkle" style="animation-delay: 1.5s;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 animate-float">
                    Premium <span class="text-primary">Barrages</span>
                </h1>
                <p class="text-xl text-gray-300 mb-8 max-w-3xl mx-auto">
                    Spectacular multi-shot fireworks that create breathtaking displays. From intimate gatherings to grand celebrations, our barrages deliver explosive entertainment.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-primary hover:bg-orange-600 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 animate-glow">
                        <i class="fas fa-rocket mr-2"></i>Shop Now
                    </button>
                    <button class="border-2 border-white text-white hover:bg-white hover:text-secondary px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300">
                        <i class="fas fa-play mr-2"></i>Watch Demo
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="bg-white py-8 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700 font-medium">Filter by:</span>
                    <select class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-transparent">
                        <option>All Categories</option>
                        <option>Small Barrages</option>
                        <option>Medium Barrages</option>
                        <option>Large Barrages</option>
                        <option>Professional</option>
                    </select>
                    <select class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-transparent">
                        <option>Price Range</option>
                        <option>Under £20</option>
                        <option>£20 - £50</option>
                        <option>£50 - £100</option>
                        <option>Over £100</option>
                    </select>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-gray-700">Sort by:</span>
                    <select class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-primary focus:border-transparent">
                        <option>Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest First</option>
                        <option>Best Selling</option>
                    </select>
                    <div class="flex border border-gray-300 rounded-lg">
                        <button class="p-2 text-gray-600 hover:bg-gray-100 active" id="grid-view">
                            <i class="fas fa-th-large"></i>
                        </button>
                        <button class="p-2 text-gray-600 hover:bg-gray-100" id="list-view">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="products-grid">
                <!-- Product Card 1 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1514525253161-7a46d19cd819?w=400&h=300&fit=crop" alt="Firework" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 left-4 price-tag text-white px-3 py-1 font-bold">
                            SALE
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="bg-white bg-opacity-90 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                <i class="fas fa-heart text-gray-600 hover:text-red-500"></i>
                            </button>
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-sm">
                            25 shots
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <div class="flex text-accent text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(47 reviews)</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Thunderstorm Barrage</h3>
                        <p class="text-gray-600 text-sm mb-4">Professional 25-shot barrage with gold and silver effects</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-primary">£24.99</span>
                                <span class="text-gray-500 line-through">£29.99</span>
                            </div>
                            <button class="bg-primary hover:bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold transition-all transform hover:scale-105">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1467810563316-b5476525c0f9?w=400&h=300&fit=crop" alt="Firework" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4">
                            <button class="bg-white bg-opacity-90 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                <i class="fas fa-heart text-gray-600 hover:text-red-500"></i>
                            </button>
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-sm">
                            50 shots
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <div class="flex text-accent text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(32 reviews)</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Golden Phoenix</h3>
                        <p class="text-gray-600 text-sm mb-4">Spectacular 50-shot display with golden effects and crackling finale</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-primary">£45.99</span>
                            </div>
                            <button class="bg-primary hover:bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold transition-all transform hover:scale-105">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1482160549825-59d1b23cb208?w=400&h=300&fit=crop" alt="Firework" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 left-4 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-bold">
                            NEW
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="bg-white bg-opacity-90 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                <i class="fas fa-heart text-gray-600 hover:text-red-500"></i>
                            </button>
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-sm">
                            100 shots
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <div class="flex text-accent text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(89 reviews)</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Mega Explosion Pro</h3>
                        <p class="text-gray-600 text-sm mb-4">Professional grade 100-shot barrage for ultimate displays</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-primary">£89.99</span>
                            </div>
                            <button class="bg-primary hover:bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold transition-all transform hover:scale-105">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?w=400&h=300&fit=crop" alt="Firework" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4">
                            <button class="bg-white bg-opacity-90 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                <i class="fas fa-heart text-gray-600 hover:text-red-500"></i>
                            </button>
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-sm">
                            36 shots
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <div class="flex text-accent text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(23 reviews)</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Silver Storm</h3>
                        <p class="text-gray-600 text-sm mb-4">Beautiful silver and white effects with whistling finale</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-primary">£32.99</span>
                            </div>
                            <button class="bg-primary hover:bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold transition-all transform hover:scale-105">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=400&h=300&fit=crop" alt="Firework" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 left-4 price-tag text-white px-3 py-1 font-bold">
                            BESTSELLER
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="bg-white bg-opacity-90 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                <i class="fas fa-heart text-red-500"></i>
                            </button>
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-sm">
                            75 shots
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <div class="flex text-accent text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(156 reviews)</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Rainbow Cascade</h3>
                        <p class="text-gray-600 text-sm mb-4">Colorful 75-shot display with rainbow effects and gold finale</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-primary">£65.99</span>
                            </div>
                            <button class="bg-primary hover:bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold transition-all transform hover:scale-105">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 6 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=300&fit=crop" alt="Firework" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4">
                            <button class="bg-white bg-opacity-90 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                <i class="fas fa-heart text-gray-600 hover:text-red-500"></i>
                            </button>
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-sm">
                            30 shots
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <div class="flex text-accent text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(41 reviews)</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Crimson Night</h3>
                        <p class="text-gray-600 text-sm mb-4">Stunning red and gold effects with crackling stars</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-primary">£38.99</span>
                            </div>
                            <button class="bg-primary hover:bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold transition-all transform hover:scale-105">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 7 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1493306454986-c8042aa394b3?w=400&h=300&fit=crop" alt="Firework" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 left-4 price-tag text-white px-3 py-1 font-bold">
                            LIMITED
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="bg-white bg-opacity-90 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                <i class="fas fa-heart text-gray-600 hover:text-red-500"></i>
                            </button>
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-sm">
                            120 shots
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <div class="flex text-accent text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(73 reviews)</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ultimate Finale</h3>
                        <p class="text-gray-600 text-sm mb-4">Professional 120-shot grand finale barrage</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-primary">£125.99</span>
                            </div>
                            <button class="bg-primary hover:bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold transition-all transform hover:scale-105">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 8 -->
                <div class="bg-white rounded-2xl shadow-lg overflow-hidden card-hover group">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1542623024-4973b19c8d69?w=400&h=300&fit=crop" alt="Firework" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-4 right-4">
                            <button class="bg-white bg-opacity-90 p-2 rounded-full hover:bg-opacity-100 transition-all">
                                <i class="fas fa-heart text-gray-600 hover:text-red-500"></i>
                            </button>
                        </div>
                        <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-3 py-1 rounded-full text-sm">
                            42 shots
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <div class="flex text-accent text-sm">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-500 text-sm ml-2">(29 reviews)</span>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Blue Diamond</h3>
                        <p class="text-gray-600 text-sm mb-4">Beautiful blue and white effects with diamond crackling</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-2xl font-bold text-primary">£42.99</span>
                            </div>
                            <button class="bg-primary hover:bg-orange-600 text-white px-4 py-2 rounded-lg font-semibold transition-all transform hover:scale-105">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-16">
                <nav class="flex items-center space-x-2">
                    <button class="px-4 py-2 text-gray-500 hover:text-primary transition-colors">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="px-4 py-2 bg-primary text-white rounded-lg">1</button>
                    <button class="px-4 py-2 text-gray-700 hover:text-primary transition-colors">2</button>
                    <button class="px-4 py-2 text-gray-700 hover:text-primary transition-colors">3</button>
                    <span class="px-4 py-2 text-gray-500">...</span>
                    <button class="px-4 py-2 text-gray-700 hover:text-primary transition-colors">10</button>
                    <button class="px-4 py-2 text-gray-500 hover:text-primary transition-colors">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </nav>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="gradient-bg py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-white mb-4">Stay Updated</h2>
            <p class="text-xl text-gray-300 mb-8">Get the latest deals and new product announcements</p>
            <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                <input type="email" placeholder="Enter your email" class="flex-1 px-6 py-3 rounded-full border-0 focus:ring-4 focus:ring-primary focus:ring-opacity-30 outline-none">
                <button class="bg-primary hover:bg-orange-600 text-white px-8 py-3 rounded-full font-semibold transition-all transform hover:scale-105">
                    Subscribe
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-secondary text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4">
                        <i class="fas fa-fire text-primary mr-2"></i>
                        FireworksHub
                    </h3>
                    <p class="text-gray-400 mb-4">Your premier destination for spectacular fireworks and pyrotechnic displays.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                            <i class="fab fa-facebook text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-primary transition-colors">
                            <i class="fab fa-youtube text-2xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Products</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Barrages</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Rockets</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Fountains</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Roman Candles</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Sparklers</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Safety Guide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Shipping Info</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Returns</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Contact Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">FAQ</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <div class="space-y-2 text-gray-400">
                        <p><i class="fas fa-phone mr-2 text-primary"></i>+44 123 456 7890</p>
                        <p><i class="fas fa-envelope mr-2 text-primary"></i>info@fireworkshub.com</p>
                        <p><i class="fas fa-map-marker-alt mr-2 text-primary"></i>123 Fireworks Street, London, UK</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 FireworksHub. All rights reserved. | Age verification required - Must be 18+ to purchase.</p>
            </div>
        </div>
    </footer>

    <script>
        $(document).ready(function() {
            // Mobile menu toggle
            $('#mobile-menu-btn').click(function() {
                $('#mobile-menu').toggleClass('hidden');
            });

            // View toggle functionality
            $('#grid-view').click(function() {
                $(this).addClass('bg-gray-200 text-primary');
                $('#list-view').removeClass('bg-gray-200 text-primary');
                $('#products-grid').removeClass('grid-cols-1').addClass('grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4');
            });

            $('#list-view').click(function() {
                $(this).addClass('bg-gray-200 text-primary');
                $('#grid-view').removeClass('bg-gray-200 text-primary');
                $('#products-grid').removeClass('grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4').addClass('grid-cols-1');
            });

            // Add to cart functionality
            $('.card-hover button:contains("Add to Cart")').click(function() {
                const button = $(this);
                const originalText = button.text();
                button.text('Added!').addClass('bg-green-500').removeClass('bg-primary hover:bg-orange-600');
                
                // Update cart count
                const cartCount = $('.fa-shopping-cart').next('span');
                const currentCount = parseInt(cartCount.text());
                cartCount.text(currentCount + 1);
                
                setTimeout(function() {
                    button.text(originalText).removeClass('bg-green-500').addClass('bg-primary hover:bg-orange-600');
                }, 1000);
            });

            // Heart icon toggle
            $('.fa-heart').parent().click(function() {
                const heart = $(this).find('.fa-heart');
                heart.toggleClass('text-gray-600 text-red-500');
                if (heart.hasClass('text-red-500')) {
                    heart.removeClass('far').addClass('fas');
                } else {
                    heart.removeClass('fas').addClass('far');
                }
            });

            // Search functionality
            $('.fa-search').parent().click(function() {
                const searchInput = '<input type="text" placeholder="Search products..." class="px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary focus:border-transparent ml-4" id="search-input">';
                if (!$('#search-input').length) {
                    $(this).after(searchInput);
                    $('#search-input').focus();
                }
            });

            // Smooth scrolling
            $('a[href^="#"]').click(function(e) {
                e.preventDefault();
                const target = $($(this).attr('href'));
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top - 80
                    }, 500);
                }
            });

            // Parallax effect for hero section
            $(window).scroll(function() {
                const scroll = $(window).scrollTop();
                $('.gradient-bg').first().css('background-position', 'center ' + (scroll * 0.5) + 'px');
            });

            // Intersection Observer for animations
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fadeInUp');
                    }
                });
            });

            $('.card-hover').each(function() {
                observer.observe(this);
            });
        });
    </script>
</body>
</html>
