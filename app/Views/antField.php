<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barrages - Anfield Fireworks</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
    
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- Custom CSS -->
    <style>
        /* CSS Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    /* Brand Colors - Original Scheme */
    --primary-red: #dc2626;
    --dark-red: #b91c1c;
    --light-red: #ef4444;
    --primary-black: #0f0f0f;
    --dark-black: #000000;
    --light-black: #1f1f1f;
    --pure-white: #ffffff;
    --light-gray: #f8f9fa;
    --medium-gray: #6b7280;
    --dark-gray: #374151;
    
    /* Typography */
    --font-primary: 'Inter', sans-serif;
    --font-display: 'Oswald', sans-serif;
    
    /* Spacing */
    --container-padding: 2rem;
    --section-padding: 4rem 0;
    
    /* Transitions */
    --transition-fast: 0.2s ease;
    --transition-normal: 0.3s ease;
    --transition-slow: 0.5s ease;
    
    /* Shadows */
    --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
    
    /* Border Radius */
    --radius-sm: 0.375rem;
    --radius-md: 0.5rem;
    --radius-lg: 0.75rem;
    --radius-xl: 1rem;
}

body {
    font-family: var(--font-primary);
    line-height: 1.6;
    color: var(--dark-gray);
    background-color: var(--pure-white);
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 var(--container-padding);
}

/* Top Banner */
.top-banner {
    background: var(--primary-black);
    color: var(--pure-white);
    padding: 0.75rem 0;
    font-size: 0.875rem;
    font-weight: 600;
    position: relative;
    overflow: hidden;
}

.top-banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(90deg, var(--primary-red) 0%, var(--dark-red) 50%, var(--primary-red) 100%);
    opacity: 0.1;
    animation: shimmer 3s infinite;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}

.banner-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
}

.top-banner .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.separator {
    color: var(--medium-gray);
}

.contact-info {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

/* Header */
.header {
    background: var(--pure-white);
    padding: 1.5rem 0;
    box-shadow: var(--shadow-sm);
    position: relative;
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.logo-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, var(--primary-red), var(--dark-red));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--pure-white);
    font-size: 1.5rem;
    box-shadow: var(--shadow-lg);
    position: relative;
    overflow: hidden;
}

.logo-icon::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent, rgba(255,255,255,0.2), transparent);
    transform: translateX(-100%);
    animation: logoShine 2s infinite;
}

@keyframes logoShine {
    0% { transform: translateX(-100%); }
    50% { transform: translateX(100%); }
    100% { transform: translateX(100%); }
}

.logo-text h1 {
    font-family: var(--font-display);
    font-size: 1.75rem;
    font-weight: 700;
    color: var(--primary-black);
    margin-bottom: -0.25rem;
}

.logo-text span {
    font-size: 0.875rem;
    color: var(--primary-red);
    font-weight: 600;
    letter-spacing: 0.1em;
}

.header-actions {
    display: flex;
    align-items: center;
}

.header-links {
    display: flex;
    gap: 1.5rem;
}

.header-links a {
    text-decoration: none;
    color: var(--dark-gray);
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    border-radius: var(--radius-md);
    transition: all var(--transition-fast);
}

.header-links a:hover {
    color: var(--primary-red);
    background-color: var(--light-gray);
    transform: translateY(-2px);
}

/* Navigation */
.main-nav {
    background: var(--primary-red);
    position: relative;
    box-shadow: var(--shadow-lg);
}

.main-nav::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--pure-white), transparent, var(--pure-white));
    opacity: 0.3;
}

.nav-menu {
    display: flex;
    list-style: none;
    gap: 0;
}

.nav-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1.25rem 1.5rem;
    color: var(--pure-white);
    text-decoration: none;
    font-weight: 500;
    font-size: 0.95rem;
    transition: all var(--transition-fast);
    position: relative;
    overflow: hidden;
}

.nav-link::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: var(--dark-red);
    transform: scaleX(0);
    transform-origin: right;
    transition: transform var(--transition-normal);
    z-index: 1;
}

.nav-link:hover::before {
    transform: scaleX(1);
    transform-origin: left;
}

.nav-link:hover {
    transform: translateY(-2px);
}

.nav-link > * {
    position: relative;
    z-index: 2;
}

.mobile-menu-toggle {
    display: none;
    color: var(--pure-white);
    font-size: 1.5rem;
    cursor: pointer;
    padding: 1rem;
}

/* Page Header */
.page-header {
    background: linear-gradient(135deg, var(--light-black) 0%, var(--primary-black) 100%);
    color: var(--pure-white);
    padding: 3rem 0;
    position: relative;
    overflow: hidden;
}

.page-header::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="fireworks" patternUnits="userSpaceOnUse" width="20" height="20"><circle cx="10" cy="10" r="1" fill="rgba(220,38,38,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23fireworks)"/></svg>');
    animation: float 20s infinite linear;
}

@keyframes float {
    0% { transform: translateX(-50px) translateY(-50px); }
    100% { transform: translateX(50px) translateY(50px); }
}

.page-header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    z-index: 2;
}

.page-title {
    font-family: var(--font-display);
    font-size: 2.5rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.page-title i {
    color: var(--primary-red);
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.1); }
}

.breadcrumb {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 0.875rem;
    color: var(--medium-gray);
}

.breadcrumb a {
    color: var(--pure-white);
    text-decoration: none;
    transition: color var(--transition-fast);
}

.breadcrumb a:hover {
    color: var(--primary-red);
}

.breadcrumb i {
    font-size: 0.75rem;
}

/* Main Content */
.main-content {
    padding: var(--section-padding);
}

.content-wrapper {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 2rem;
    align-items: start;
}

/* Sidebar */
.sidebar {
    background: var(--pure-white);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-md);
    overflow: hidden;
    position: sticky;
    top: 2rem;
}

.filter-section h3 {
    background: var(--primary-red);
    color: var(--pure-white);
    padding: 1rem 1.5rem;
    font-family: var(--font-display);
    font-size: 1.125rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.filter-group {
    padding: 1.5rem;
    border-bottom: 1px solid var(--light-gray);
}

.filter-group:last-child {
    border-bottom: none;
}

.filter-group h4 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 1rem;
    color: var(--primary-black);
}

.category-list {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.category-link {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem;
    text-decoration: none;
    color: var(--dark-gray);
    border-radius: var(--radius-md);
    transition: all var(--transition-fast);
    font-weight: 500;
}

.category-link:hover,
.category-link.active {
    background: var(--primary-red);
    color: var(--pure-white);
    transform: translateX(5px);
}

.category-link i {
    width: 16px;
    text-align: center;
}

/* Price Filter */
.price-filter {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.price-slider {
    width: 100%;
    height: 6px;
    border-radius: 3px;
    background: var(--light-gray);
    outline: none;
    -webkit-appearance: none;
}

.price-slider::-webkit-slider-thumb {
    appearance: none;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: var(--primary-red);
    cursor: pointer;
    box-shadow: var(--shadow-md);
}

.price-slider::-moz-range-thumb {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    background: var(--primary-red);
    cursor: pointer;
    border: none;
    box-shadow: var(--shadow-md);
}

.price-display {
    text-align: center;
    font-weight: 600;
    color: var(--primary-black);
}

.filter-btn {
    background: var(--primary-red);
    color: var(--pure-white);
    border: none;
    padding: 0.75rem 1.5rem;
    border-radius: var(--radius-md);
    font-weight: 600;
    cursor: pointer;
    transition: all var(--transition-fast);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.filter-btn:hover {
    background: var(--dark-red);
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

/* Special Offers */
.offer-badges {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}

.offer-badge {
    padding: 0.5rem 0.75rem;
    border-radius: var(--radius-md);
    font-size: 0.875rem;
    font-weight: 600;
    text-align: center;
    cursor: pointer;
    transition: all var(--transition-fast);
}

.offer-badge.sale {
    background: #fee2e2;
    color: var(--dark-red);
    border: 2px solid transparent;
}

.offer-badge.sale:hover {
    border-color: var(--primary-red);
    background: var(--primary-red);
    color: var(--pure-white);
}

.offer-badge.bogo {
    background: #dcfce7;
    color: #166534;
    border: 2px solid transparent;
}

.offer-badge.bogo:hover {
    border-color: #16a34a;
    background: #16a34a;
    color: var(--pure-white);
}

.offer-badge.new {
    background: #dbeafe;
    color: #1e40af;
    border: 2px solid transparent;
}

.offer-badge.new:hover {
    border-color: #2563eb;
    background: #2563eb;
    color: var(--pure-white);
}

/* Products Section */
.products-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    padding: 1rem 0;
    border-bottom: 2px solid var(--light-gray);
}

.results-info {
    font-weight: 600;
    color: var(--dark-gray);
}

#sortSelect {
    padding: 0.75rem 1rem;
    border: 2px solid var(--light-gray);
    border-radius: var(--radius-md);
    background: var(--pure-white);
    font-weight: 500;
    cursor: pointer;
    transition: all var(--transition-fast);
    min-width: 200px;
}

#sortSelect:focus {
    outline: none;
    border-color: var(--primary-red);
    box-shadow: 0 0 0 3px rgba(220, 38, 38, 0.1);
}

/* Products Grid */
.products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 1.5rem;
    margin-bottom: 3rem;
}

.product-card {
    background: var(--pure-white);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: all var(--transition-normal);
    position: relative;
    cursor: pointer;
}

.product-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

.product-image {
    position: relative;
    height: 250px;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform var(--transition-slow);
}

.product-card:hover .product-image img {
    transform: scale(1.05);
}

.product-badges {
    position: absolute;
    top: 1rem;
    left: 1rem;
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    z-index: 2;
}

.badge {
    padding: 0.375rem 0.75rem;
    border-radius: var(--radius-md);
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.badge.sale {
    background: var(--primary-red);
    color: var(--pure-white);
}

.badge.bogo {
    background: #16a34a;
    color: var(--pure-white);
}

.badge.new {
    background: #2563eb;
    color: var(--pure-white);
}

.product-info {
    padding: 1.5rem;
}

.product-brand {
    font-size: 0.875rem;
    color: var(--medium-gray);
    margin-bottom: 0.5rem;
    font-weight: 500;
}

.product-shots {
    font-size: 0.8rem;
    color: var(--primary-red);
    font-weight: 600;
    margin-bottom: 0.75rem;
    padding: 0.25rem 0.5rem;
    background: rgba(220, 38, 38, 0.1);
    border-radius: var(--radius-sm);
    display: inline-block;
}

.savings-text {
    font-size: 0.75rem;
    color: #16a34a;
    font-weight: 700;
    background: rgba(22, 163, 74, 0.1);
    padding: 0.125rem 0.375rem;
    border-radius: var(--radius-sm);
    margin-left: 0.5rem;
}

.product-title {
    font-size: 1.125rem;
    font-weight: 600;
    color: var(--primary-black);
    margin-bottom: 1rem;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.product-price {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.current-price {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--primary-red);
}

.original-price {
    font-size: 1rem;
    color: var(--medium-gray);
    text-decoration: line-through;
}

.add-to-cart-btn {
    width: 100%;
    background: var(--primary-red);
    color: var(--pure-white);
    border: none;
    padding: 0.875rem;
    border-radius: var(--radius-md);
    font-weight: 600;
    cursor: pointer;
    transition: all var(--transition-fast);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.add-to-cart-btn:hover {
    background: var(--dark-red);
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

/* Load More */
.load-more-section {
    text-align: center;
    margin-top: 3rem;
}

.load-more-btn {
    background: var(--pure-white);
    color: var(--primary-red);
    border: 2px solid var(--primary-red);
    padding: 1rem 2rem;
    border-radius: var(--radius-lg);
    font-weight: 600;
    cursor: pointer;
    transition: all var(--transition-fast);
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1rem;
}

.load-more-btn:hover {
    background: var(--primary-red);
    color: var(--pure-white);
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

/* Footer */
.footer {
    background: var(--primary-black);
    color: var(--pure-white);
    padding: 3rem 0 1rem;
    margin-top: 4rem;
}

.footer-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
}

.footer-section h3 {
    font-family: var(--font-display);
    font-size: 1.25rem;
    margin-bottom: 1rem;
    color: var(--primary-red);
}

.contact-details p {
    margin-bottom: 0.75rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.contact-details i {
    width: 16px;
    color: var(--primary-red);
}

.footer-links {
    list-style: none;
}

.footer-links li {
    margin-bottom: 0.5rem;
}

.footer-links a {
    color: var(--medium-gray);
    text-decoration: none;
    transition: color var(--transition-fast);
}

.footer-links a:hover {
    color: var(--primary-red);
}

.social-links {
    display: flex;
    gap: 1rem;
}

.social-links a {
    width: 40px;
    height: 40px;
    background: var(--primary-red);
    color: var(--pure-white);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    font-size: 1.125rem;
    transition: all var(--transition-fast);
}

.social-links a:hover {
    background: var(--dark-red);
    transform: translateY(-2px);
}

.footer-bottom {
    border-top: 1px solid var(--light-black);
    padding-top: 2rem;
    text-align: center;
}

.age-warning {
    background: var(--primary-red);
    color: var(--pure-white);
    padding: 1rem;
    border-radius: var(--radius-md);
    margin-bottom: 1rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.footer-bottom p:last-child {
    color: var(--medium-gray);
    font-size: 0.875rem;
}

/* Animations */
.animate__animated {
    animation-duration: 0.8s;
}

/* Loading States */
.loading {
    opacity: 0.7;
    pointer-events: none;
    position: relative;
}

.loading::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 40px;
    height: 40px;
    border: 3px solid var(--light-gray);
    border-top: 3px solid var(--primary-red);
    border-radius: 50%;
    animation: spin 1s linear infinite;
    transform: translate(-50%, -50%);
    z-index: 1000;
}

@keyframes spin {
    0% { transform: translate(-50%, -50%) rotate(0deg); }
    100% { transform: translate(-50%, -50%) rotate(360deg); }
}

/* Toast Notifications */
.toast-notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background: var(--primary-red);
    color: var(--pure-white);
    padding: 1rem 1.5rem;
    border-radius: var(--radius-md);
    box-shadow: var(--shadow-xl);
    z-index: 9999;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    min-width: 300px;
    max-width: 500px;
}

.toast-content {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.toast-notification i {
    font-size: 1.25rem;
    color: var(--pure-white);
}

/* Skeleton Loading for Products */
.product-skeleton {
    background: var(--pure-white);
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-md);
    animation: pulse-skeleton 1.5s ease-in-out infinite;
}

.skeleton-image {
    height: 250px;
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    animation: shimmer-skeleton 2s infinite;
}

.skeleton-content {
    padding: 1.5rem;
}

.skeleton-line {
    height: 12px;
    background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
    background-size: 200% 100%;
    border-radius: var(--radius-sm);
    animation: shimmer-skeleton 2s infinite;
    margin-bottom: 0.75rem;
}

.skeleton-line.short {
    width: 60%;
}

.skeleton-line.medium {
    width: 80%;
}

.skeleton-line.long {
    width: 100%;
}

@keyframes pulse-skeleton {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.8; }
}

@keyframes shimmer-skeleton {
    0% { background-position: -200% 0; }
    100% { background-position: 200% 0; }
}

/* Enhanced Focus States for Accessibility */
button:focus-visible,
input:focus-visible,
select:focus-visible,
a:focus-visible {
    outline: 3px solid var(--primary-red);
    outline-offset: 2px;
}

/* Smooth transitions for all interactive elements */
* {
    transition: color var(--transition-fast), 
                background-color var(--transition-fast), 
                border-color var(--transition-fast), 
                transform var(--transition-fast), 
                box-shadow var(--transition-fast);
}

/* Responsive Design - Mobile First Approach */

/* Large Desktop (1200px+) */
@media (min-width: 1200px) {
    .container {
        max-width: 1400px;
    }
    
    .products-grid {
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    }
    
    .page-title {
        font-size: 3rem;
    }
}

/* Desktop (992px - 1199px) */
@media (max-width: 1199px) {
    .content-wrapper {
        grid-template-columns: 260px 1fr;
        gap: 1.5rem;
    }
    
    .products-grid {
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
    }
}

/* Tablet Landscape (768px - 991px) */
@media (max-width: 991px) {
    :root {
        --container-padding: 1.5rem;
    }
    
    .content-wrapper {
        grid-template-columns: 1fr;
        gap: 2rem;
    }
    
    .sidebar {
        position: static;
        order: 2;
    }
    
    .products-section {
        order: 1;
    }
    
    .nav-menu {
        flex-wrap: wrap;
    }
    
    .nav-link {
        padding: 1rem 1.25rem;
        font-size: 0.875rem;
    }
    
    .page-header-content {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }
    
    .page-title {
        font-size: 2.25rem;
    }
    
    .products-grid {
        grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
        gap: 1.25rem;
    }
    
    .filter-section {
        background: var(--light-gray);
        border-radius: var(--radius-lg);
        padding: 1rem;
    }
    
    .filter-group {
        background: var(--pure-white);
        border-radius: var(--radius-md);
        margin-bottom: 1rem;
        border-bottom: none;
    }
    
    .filter-section h3 {
        background: var(--primary-black);
        margin: -1rem -1rem 1rem -1rem;
        border-radius: var(--radius-lg) var(--radius-lg) 0 0;
    }
}

/* Tablet Portrait (600px - 767px) */
@media (max-width: 767px) {
    .top-banner .container {
        flex-direction: column;
        gap: 0.5rem;
        text-align: center;
    }
    
    .banner-content {
        font-size: 0.8rem;
    }
    
    .contact-info {
        font-size: 0.875rem;
    }
    
    .header-content {
        flex-direction: column;
        gap: 1rem;
    }
    
    .logo {
        justify-content: center;
    }
    
    .header-links {
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
    }
    
    .header-links a {
        padding: 0.5rem 0.75rem;
        font-size: 0.875rem;
    }
    
    .nav-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: var(--primary-red);
        flex-direction: column;
        box-shadow: var(--shadow-xl);
        z-index: 1000;
    }
    
    .nav-menu.active {
        display: flex;
    }
    
    .mobile-menu-toggle {
        display: block;
    }
    
    .nav-link {
        padding: 1rem 1.5rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .nav-link:last-child {
        border-bottom: none;
    }
    
    .page-title {
        font-size: 2rem;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .breadcrumb {
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .products-header {
        flex-direction: column;
        gap: 1rem;
        align-items: stretch;
    }
    
    #sortSelect {
        min-width: auto;
        width: 100%;
    }
    
    .products-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 1rem;
    }
    
    .product-card {
        border-radius: var(--radius-md);
    }
    
    .product-image {
        height: 200px;
    }
    
    .product-info {
        padding: 1rem;
    }
    
    .product-title {
        font-size: 1rem;
    }
    
    .current-price {
        font-size: 1.125rem;
    }
    
    .sidebar {
        margin-bottom: 2rem;
    }
    
    .filter-group {
        padding: 1rem;
    }
    
    .category-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 0.5rem;
    }
    
    .offer-badges {
        flex-direction: row;
        flex-wrap: wrap;
    }
    
    .footer-content {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 2rem;
    }
    
    .contact-details p {
        justify-content: center;
    }
    
    .social-links {
        justify-content: center;
    }
}

/* Mobile Large (480px - 599px) */
@media (max-width: 599px) {
    :root {
        --container-padding: 1rem;
        --section-padding: 2rem 0;
    }
    
    .top-banner {
        padding: 0.5rem 0;
    }
    
    .header {
        padding: 1rem 0;
    }
    
    .logo-icon {
        width: 50px;
        height: 50px;
        font-size: 1.25rem;
    }
    
    .logo-text h1 {
        font-size: 1.5rem;
    }
    
    .logo-text span {
        font-size: 0.8rem;
    }
    
    .header-links {
        gap: 0.75rem;
    }
    
    .header-links a {
        padding: 0.5rem;
        font-size: 0.8rem;
        flex-direction: column;
        gap: 0.25rem;
    }
    
    .header-links a i {
        font-size: 1rem;
    }
    
    .page-header {
        padding: 2rem 0;
    }
    
    .page-title {
        font-size: 1.75rem;
    }
    
    .breadcrumb {
        font-size: 0.8rem;
        gap: 0.5rem;
    }
    
    .products-grid {
        grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
        gap: 0.75rem;
    }
    
    .product-image {
        height: 160px;
    }
    
    .product-info {
        padding: 0.75rem;
    }
    
    .product-brand {
        font-size: 0.8rem;
    }
    
    .product-title {
        font-size: 0.9rem;
        margin-bottom: 0.75rem;
    }
    
    .current-price {
        font-size: 1rem;
    }
    
    .original-price {
        font-size: 0.875rem;
    }
    
    .add-to-cart-btn {
        padding: 0.75rem 0.5rem;
        font-size: 0.875rem;
    }
    
    .load-more-btn {
        padding: 0.875rem 1.5rem;
        font-size: 0.9rem;
    }
    
    .filter-section h3 {
        padding: 0.875rem 1rem;
        font-size: 1rem;
    }
    
    .category-list {
        grid-template-columns: 1fr;
    }
    
    .category-link {
        padding: 0.625rem 0.75rem;
        font-size: 0.875rem;
    }
}

/* Mobile Small (320px - 479px) */
@media (max-width: 479px) {
    :root {
        --container-padding: 0.75rem;
    }
    
    .banner-content {
        flex-direction: column;
        gap: 0.25rem;
        font-size: 0.75rem;
    }
    
    .separator {
        display: none;
    }
    
    .contact-info {
        font-size: 0.8rem;
    }
    
    .logo {
        gap: 0.75rem;
    }
    
    .logo-icon {
        width: 45px;
        height: 45px;
        font-size: 1.125rem;
    }
    
    .logo-text h1 {
        font-size: 1.25rem;
    }
    
    .logo-text span {
        font-size: 0.75rem;
    }
    
    .header-links a span {
        display: none;
    }
    
    .page-title {
        font-size: 1.5rem;
    }
    
    .breadcrumb {
        font-size: 0.75rem;
    }
    
    .products-grid {
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 0.5rem;
    }
    
    .product-image {
        height: 140px;
    }
    
    .product-info {
        padding: 0.5rem;
    }
    
    .product-brand {
        font-size: 0.75rem;
        margin-bottom: 0.25rem;
    }
    
    .product-title {
        font-size: 0.8rem;
        margin-bottom: 0.5rem;
        -webkit-line-clamp: 3;
    }
    
    .product-price {
        margin-bottom: 0.75rem;
        flex-direction: column;
        align-items: flex-start;
        gap: 0.25rem;
    }
    
    .current-price {
        font-size: 0.9rem;
    }
    
    .original-price {
        font-size: 0.8rem;
    }
    
    .add-to-cart-btn {
        padding: 0.625rem 0.5rem;
        font-size: 0.8rem;
    }
    
    .badge {
        font-size: 0.625rem;
        padding: 0.25rem 0.5rem;
    }
    
    .filter-group {
        padding: 0.75rem;
    }
    
    .filter-group h4 {
        font-size: 0.9rem;
        margin-bottom: 0.75rem;
    }
    
    .category-link {
        padding: 0.5rem;
        font-size: 0.8rem;
    }
    
    .category-link i {
        width: 14px;
        font-size: 0.875rem;
    }
    
    .price-display {
        font-size: 0.875rem;
    }
    
    .filter-btn {
        padding: 0.625rem 1rem;
        font-size: 0.875rem;
    }
    
    .offer-badge {
        padding: 0.375rem 0.5rem;
        font-size: 0.75rem;
    }
    
    .footer {
        padding: 2rem 0 1rem;
    }
    
    .footer-section h3 {
        font-size: 1.125rem;
    }
    
    .contact-details p {
        font-size: 0.875rem;
        margin-bottom: 0.5rem;
    }
    
    .footer-links a {
        font-size: 0.875rem;
    }
    
    .social-links a {
        width: 35px;
        height: 35px;
        font-size: 1rem;
    }
    
    .age-warning {
        font-size: 0.875rem;
        padding: 0.75rem;
    }
    
    .footer-bottom p:last-child {
        font-size: 0.8rem;
    }
}

/* Ultra Wide Screens (1600px+) */
@media (min-width: 1600px) {
    .container {
        max-width: 1600px;
    }
    
    .products-grid {
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 2rem;
    }
    
    .content-wrapper {
        grid-template-columns: 320px 1fr;
        gap: 3rem;
    }
}

/* Accessibility and Motion Preferences */
@media (prefers-reduced-motion: reduce) {
    *,
    *::before,
    *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}

/* High Contrast Mode */
@media (prefers-contrast: high) {
    .product-card {
        border: 2px solid var(--dark-gray);
    }
    
    .nav-link:hover::before {
        background: var(--primary-black);
    }
    
    .category-link:hover,
    .category-link.active {
        border: 2px solid var(--pure-white);
    }
}

/* Dark Mode Support */
@media (prefers-color-scheme: dark) {
    :root {
        --pure-white: #1a1a1a;
        --light-gray: #2a2a2a;
        --dark-gray: #e5e7eb;
        --medium-gray: #9ca3af;
    }
    
    body {
        background-color: var(--pure-white);
        color: var(--dark-gray);
    }
    
    .header {
        background: var(--light-gray);
        border-bottom: 1px solid var(--medium-gray);
    }
    
    .product-card {
        background: var(--light-gray);
        border: 1px solid var(--medium-gray);
    }
    
    .sidebar {
        background: var(--light-gray);
        border: 1px solid var(--medium-gray);
    }
    
    #sortSelect {
        background: var(--light-gray);
        border-color: var(--medium-gray);
        color: var(--dark-gray);
    }
}

/* Print Styles */
@media print {
    .top-banner,
    .main-nav,
    .sidebar,
    .footer,
    .load-more-section {
        display: none;
    }
    
    .content-wrapper {
        grid-template-columns: 1fr;
    }
    
    .products-grid {
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 1rem;
    }
    
    .product-card {
        box-shadow: none;
        border: 1px solid #ccc;
    }
    
    .page-header {
        background: none;
        color: black;
        padding: 1rem 0;
    }
    
    .page-title {
        color: black;
    }
}
    </style>
    <script>
        // Main JavaScript functionality for Anfield Fireworks website

class AnfieldFireworks {
    constructor() {
        this.init();
        this.bindEvents();
    }

    init() {
        this.currentSort = 'default';
        this.currentFilter = {
            category: 'barrages',
            minPrice: 0,
            maxPrice: 500,
            offers: []
        };
        
        // Initialize components
        this.initMobileMenu();
        this.initPriceFilter();
        this.initAnimations();
        this.loadProducts();
    }

    bindEvents() {
        // Mobile menu toggle
        const mobileToggle = document.querySelector('.mobile-menu-toggle');
        if (mobileToggle) {
            mobileToggle.addEventListener('click', () => this.toggleMobileMenu());
        }

        // Sort functionality
        const sortSelect = document.getElementById('sortSelect');
        if (sortSelect) {
            sortSelect.addEventListener('change', (e) => this.handleSort(e.target.value));
        }

        // Price filter
        const priceRange = document.getElementById('priceRange');
        if (priceRange) {
            priceRange.addEventListener('input', (e) => this.updatePriceDisplay(e.target.value));
        }

        const filterBtn = document.querySelector('.filter-btn');
        if (filterBtn) {
            filterBtn.addEventListener('click', () => this.applyPriceFilter());
        }

        // Category links
        document.querySelectorAll('.category-link').forEach(link => {
            link.addEventListener('click', (e) => this.handleCategoryChange(e));
        });

        // Offer badges
        document.querySelectorAll('.offer-badge').forEach(badge => {
            badge.addEventListener('click', (e) => this.handleOfferFilter(e));
        });

        // Load more button
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', () => this.loadMoreProducts());
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => this.handleSmoothScroll(e));
        });

        // Window scroll effects
        window.addEventListener('scroll', () => this.handleScroll());
        
        // Window resize handler
        window.addEventListener('resize', () => this.handleResize());
    }

    initMobileMenu() {
        const navMenu = document.querySelector('.nav-menu');
        const mobileToggle = document.querySelector('.mobile-menu-toggle');
        
        if (navMenu && mobileToggle) {
            // Close menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
                    navMenu.classList.remove('active');
                    this.updateMobileToggleIcon(false);
                }
            });
        }
    }

    toggleMobileMenu() {
        const navMenu = document.querySelector('.nav-menu');
        const isActive = navMenu.classList.contains('active');
        
        navMenu.classList.toggle('active');
        this.updateMobileToggleIcon(!isActive);
        
        // Animate menu items
        if (!isActive) {
            this.animateMenuItems();
        }
    }

    updateMobileToggleIcon(isOpen) {
        const icon = document.querySelector('.mobile-menu-toggle i');
        if (icon) {
            icon.className = isOpen ? 'fas fa-times' : 'fas fa-bars';
        }
    }

    animateMenuItems() {
        const menuLinks = document.querySelectorAll('.nav-menu .nav-link');
        menuLinks.forEach((link, index) => {
            link.style.animationDelay = `${index * 0.1}s`;
            link.classList.add('animate__animated', 'animate__fadeInDown');
        });
    }

    initPriceFilter() {
        const priceRange = document.getElementById('priceRange');
        if (priceRange) {
            this.updatePriceDisplay(priceRange.value);
        }
    }

    updatePriceDisplay(maxValue) {
        const maxPriceSpan = document.getElementById('maxPrice');
        if (maxPriceSpan) {
            maxPriceSpan.textContent = maxValue;
        }
        this.currentFilter.maxPrice = parseInt(maxValue);
    }

    applyPriceFilter() {
        this.showLoadingState();
        
        setTimeout(() => {
            this.filterProducts();
            this.hideLoadingState();
        }, 500);
    }

    handleSort(sortValue) {
        this.currentSort = sortValue;
        this.showLoadingState();
        
        setTimeout(() => {
            this.sortProducts();
            this.hideLoadingState();
        }, 300);
    }

    handleCategoryChange(e) {
        e.preventDefault();
        
        // Update active category
        document.querySelectorAll('.category-link').forEach(link => {
            link.classList.remove('active');
        });
        e.target.closest('.category-link').classList.add('active');
        
        // Update filter and reload products
        this.currentFilter.category = e.target.dataset.category || 'barrages';
        this.loadProducts();
    }

    handleOfferFilter(e) {
        const offerType = e.target.classList.contains('sale') ? 'sale' :
                         e.target.classList.contains('bogo') ? 'bogo' : 'new';
        
        e.target.classList.toggle('active');
        
        if (this.currentFilter.offers.includes(offerType)) {
            this.currentFilter.offers = this.currentFilter.offers.filter(o => o !== offerType);
        } else {
            this.currentFilter.offers.push(offerType);
        }
        
        this.filterProducts();
    }

    initAnimations() {
        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                }
            });
        }, observerOptions);

        // Observe product cards
        document.querySelectorAll('.product-card').forEach(card => {
            observer.observe(card);
        });
    }

    loadProducts() {
        this.showLoadingState();
        
        // Simulate API call
        setTimeout(() => {
            this.renderProducts(this.getFilteredProducts());
            this.updateProductCount();
            this.hideLoadingState();
            this.initAnimations(); // Re-initialize animations for new products
        }, 800);
    }

    getFilteredProducts() {
        let filteredProducts = [...window.productsData];
        
        // Filter by category
        if (this.currentFilter.category !== 'all') {
            filteredProducts = filteredProducts.filter(product => 
                product.category === this.currentFilter.category
            );
        }
        
        // Filter by price
        filteredProducts = filteredProducts.filter(product => 
            product.price >= this.currentFilter.minPrice && 
            product.price <= this.currentFilter.maxPrice
        );
        
        // Filter by offers
        if (this.currentFilter.offers.length > 0) {
            filteredProducts = filteredProducts.filter(product => 
                this.currentFilter.offers.some(offer => product.badges.includes(offer))
            );
        }
        
        return filteredProducts;
    }

    sortProducts() {
        const productsGrid = document.getElementById('productsGrid');
        const products = Array.from(productsGrid.children);
        
        products.sort((a, b) => {
            const priceA = parseFloat(a.dataset.price);
            const priceB = parseFloat(b.dataset.price);
            const titleA = a.dataset.title.toLowerCase();
            const titleB = b.dataset.title.toLowerCase();
            
            switch (this.currentSort) {
                case 'price-low':
                    return priceA - priceB;
                case 'price-high':
                    return priceB - priceA;
                case 'name-asc':
                    return titleA.localeCompare(titleB);
                case 'name-desc':
                    return titleB.localeCompare(titleA);
                default:
                    return 0;
            }
        });
        
        // Re-append sorted products
        products.forEach(product => productsGrid.appendChild(product));
    }

    filterProducts() {
        const filteredProducts = this.getFilteredProducts();
        this.renderProducts(filteredProducts);
        this.updateProductCount();
    }

    renderProducts(products) {
        const productsGrid = document.getElementById('productsGrid');
        productsGrid.innerHTML = '';
        
        products.forEach((product, index) => {
            const productCard = this.createProductCard(product);
            productCard.style.animationDelay = `${index * 0.1}s`;
            productsGrid.appendChild(productCard);
        });
    }

    createProductCard(product) {
        const card = document.createElement('div');
        card.className = 'product-card';
        card.dataset.price = product.price;
        card.dataset.title = product.title;
        
        const badges = product.badges.map(badge => {
            const badgeText = badge === 'bogo' ? 'Buy 1 Get 1 FREE' : 
                             badge === 'sale' ? 'Sale' : 'New';
            return `<span class="badge ${badge}">${badgeText}</span>`;
        }).join('');
        
        const originalPrice = product.originalPrice ? 
            `<span class="original-price">£${product.originalPrice}</span>` : '';
        
        // Calculate savings percentage
        const savings = product.originalPrice ? 
            Math.round(((product.originalPrice - product.price) / product.originalPrice) * 100) : 0;
        
        const savingsText = savings > 0 ? 
            `<span class="savings-text">Save ${savings}%</span>` : '';
        
        card.innerHTML = `
            <div class="product-image">
                <img src="${product.image}" 
                     alt="${product.title}" 
                     loading="lazy"
                     onerror="this.src='https://via.placeholder.com/300x300/dc2626/ffffff?text=Firework+Image'">
                <div class="product-badges">
                    ${badges}
                </div>
            </div>
            <div class="product-info">
                <div class="product-brand">${product.brand}</div>
                <h3 class="product-title">${product.title}</h3>
                ${product.shots ? `<div class="product-shots">${product.shots} shots • ${product.duration}</div>` : ''}
                <div class="product-price">
                    <span class="current-price">£${product.price}</span>
                    ${originalPrice}
                    ${savingsText}
                </div>
                <button class="add-to-cart-btn" onclick="window.anfield.addToCart('${product.id}')">
                    <i class="fas fa-shopping-cart"></i>
                    Add to Cart
                </button>
            </div>
        `;
        
        return card;
    }

    addToCart(productId) {
        // Find product
        const product = window.productsData.find(p => p.id === productId);
        if (!product) return;
        
        // Show success animation
        this.showAddToCartSuccess(product.title);
        
        // Update cart count (simulate)
        this.updateCartCount();
    }

    showAddToCartSuccess(productTitle) {
        // Create and show toast notification
        const toast = document.createElement('div');
        toast.className = 'toast-notification animate__animated animate__slideInRight';
        toast.innerHTML = `
            <div class="toast-content">
                <i class="fas fa-check-circle"></i>
                <span>Added "${productTitle}" to cart!</span>
            </div>
        `;
        
        // Add toast styles
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--primary-red);
            color: white;
            padding: 1rem 1.5rem;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-xl);
            z-index: 9999;
            font-weight: 600;
        `;
        
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.classList.replace('animate__slideInRight', 'animate__slideOutRight');
            setTimeout(() => document.body.removeChild(toast), 500);
        }, 3000);
    }

    updateCartCount() {
        const cartLink = document.querySelector('.header-links a[href="#"]:last-child');
        if (cartLink) {
            const currentCount = parseInt(cartLink.textContent.match(/\\d+/)?.[0] || '0');
            cartLink.innerHTML = `<i class="fas fa-shopping-cart"></i> Cart (${currentCount + 1})`;
        }
    }

    updateProductCount() {
        const productCount = document.getElementById('productCount');
        const visibleProducts = document.querySelectorAll('.product-card').length;
        if (productCount) {
            productCount.textContent = visibleProducts;
        }
    }

    loadMoreProducts() {
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        loadMoreBtn.classList.add('loading');
        loadMoreBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Loading...';
        
        setTimeout(() => {
            // Simulate loading more products
            const moreProducts = this.getMoreProducts();
            moreProducts.forEach((product, index) => {
                const productCard = this.createProductCard(product);
                productCard.style.animationDelay = `${index * 0.1}s`;
                productCard.classList.add('animate__animated', 'animate__fadeInUp');
                document.getElementById('productsGrid').appendChild(productCard);
            });
            
            this.updateProductCount();
            
            loadMoreBtn.classList.remove('loading');
            loadMoreBtn.innerHTML = '<i class="fas fa-plus"></i> Load More Products';
            
            // Hide button if no more products
            if (document.querySelectorAll('.product-card').length >= 20) {
                loadMoreBtn.style.display = 'none';
            }
        }, 1500);
    }

    getMoreProducts() {
        // Return additional products (simulate pagination)
        return window.productsData.slice(15, 20);
    }

    handleSmoothScroll(e) {
        const href = e.target.getAttribute('href');
        if (href && href.startsWith('#')) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    }

    handleScroll() {
        const scrollTop = window.pageYOffset;
        
        // Header shadow effect
        const header = document.querySelector('.header');
        if (scrollTop > 100) {
            header.style.boxShadow = 'var(--shadow-lg)';
        } else {
            header.style.boxShadow = 'var(--shadow-sm)';
        }
        
        // Parallax effect for page header
        const pageHeader = document.querySelector('.page-header');
        if (pageHeader && scrollTop < pageHeader.offsetHeight) {
            pageHeader.style.transform = `translateY(${scrollTop * 0.3}px)`;
        }
    }

    handleResize() {
        // Close mobile menu on resize to desktop
        if (window.innerWidth > 767) {
            const navMenu = document.querySelector('.nav-menu');
            navMenu.classList.remove('active');
            this.updateMobileToggleIcon(false);
        }
    }

    showLoadingState() {
        const productsGrid = document.getElementById('productsGrid');
        productsGrid.classList.add('loading');
    }

    hideLoadingState() {
        const productsGrid = document.getElementById('productsGrid');
        productsGrid.classList.remove('loading');
    }
}

// Initialize the application when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    window.anfield = new AnfieldFireworks();
});

// Export for use in other files
window.AnfieldFireworks = AnfieldFireworks;

// Product data for Anfield Fireworks - Barrages Category

window.productsData = [
    {
        id: 'barrage-001',
        title: 'Strobe Rocket Barrage',
        brand: 'Brothers Pyrotechnics',
        category: 'barrages',
        price: 45.99,
        originalPrice: 59.99,
        image: 'https://anfieldfireworks.com/wp-content/uploads/2025/09/Strobe-Rocket-300x300.png',
        badges: ['sale'],
        description: 'A spectacular barrage of strobing rockets creating an amazing light show in the sky.',
        shots: 25,
        duration: '45 seconds',
        category1: 'F2'
    },
    {
        id: 'barrage-002',
        title: 'Big Chief Barrage',
        brand: 'Hallmark Fireworks',
        category: 'barrages',
        price: 32.99,
        originalPrice: 42.99,
        image: 'https://anfieldfireworks.com/wp-content/uploads/2025/09/bc-300x300.png',
        badges: ['sale', 'bogo'],
        description: 'Massive barrage with golden chrysanthemum effects and crackling stars.',
        shots: 36,
        duration: '60 seconds',
        category1: 'F2'
    },
    {
        id: 'barrage-003',
        title: 'MI6 Elite Barrage',
        brand: 'Brothers Pyrotechnics',
        category: 'barrages',
        price: 89.99,
        image: 'https://anfieldfireworks.com/wp-content/uploads/2025/09/MI6-by-brothers-pyrotechnics-300x300.png',
        badges: ['new'],
        description: 'Professional grade barrage with multi-colored bursts and thunderous reports.',
        shots: 49,
        duration: '75 seconds',
        category1: 'F3'
    },
    {
        id: 'barrage-004',
        title: 'M14 Thunder Barrage',
        brand: 'Diamond Fireworks',
        category: 'barrages',
        price: 28.99,
        originalPrice: 35.99,
        image: 'https://anfieldfireworks.com/wp-content/uploads/2025/09/m14-300x300.png',
        badges: ['sale'],
        description: 'Powerful barrage with loud reports and colorful palm effects.',
        shots: 30,
        duration: '50 seconds',
        category1: 'F2'
    },
    {
        id: 'barrage-005',
        title: 'Indestructible Barrage',
        brand: 'Pyro King',
        category: 'barrages',
        price: 155.99,
        image: 'https://anfieldfireworks.com/wp-content/uploads/2025/09/indestructible-300x300.png',
        badges: ['new'],
        description: 'Ultimate barrage experience with massive bursts and incredible effects.',
        shots: 100,
        duration: '120 seconds',
        category1: 'F3'
    },
    {
        id: 'barrage-006',
        title: 'RS3 Rocket Storm',
        brand: 'Brothers Pyrotechnics',
        category: 'barrages',
        price: 67.99,
        originalPrice: 79.99,
        image: 'https://anfieldfireworks.com/wp-content/uploads/2025/09/RS3-by-brothers-pyrotechnics-300x300.png',
        badges: ['sale', 'bogo'],
        description: 'Intense rocket barrage with red, silver, and gold effects.',
        shots: 42,
        duration: '65 seconds',
        category1: 'F3'
    },
    {
        id: 'barrage-007',
        title: 'Punch Bag Deal Barrage',
        brand: 'Fireworks International',
        category: 'barrages',
        price: 24.99,
        originalPrice: 32.99,
        image: 'https://anfieldfireworks.com/wp-content/uploads/2025/09/the-punch-bag-deal-300x300.png',
        badges: ['sale', 'bogo'],
        description: 'Great value barrage perfect for backyard celebrations.',
        shots: 20,
        duration: '35 seconds',
        category1: 'F2'
    },
    {
        id: 'barrage-008',
        title: 'Golden Tears Barrage',
        brand: 'Celtic Fireworks',
        category: 'barrages',
        price: 41.99,
        image: 'https://anfieldfireworks.com/wp-content/uploads/2025/09/golden-tears-300x300.png',
        badges: [],
        description: 'Beautiful golden willow effects cascading from the sky.',
        shots: 25,
        duration: '40 seconds',
        category1: 'F2'
    },
    {
        id: 'barrage-009',
        title: 'Titans Trilogy Barrage',
        brand: 'Hallmark Fireworks',
        category: 'barrages',
        price: 125.99,
        image: 'https://anfieldfireworks.com/wp-content/uploads/2025/09/Titans-Trilogy-by-Hallmark-Fireworks-300x300.png',
        badges: ['new'],
        description: 'Three-part barrage sequence with escalating intensity and effects.',
        shots: 81,
        duration: '100 seconds',
        category1: 'F3'
    },
    {
        id: 'barrage-010',
        title: 'Volcanic Eruption Barrage',
        brand: 'Hallmark Fireworks',
        category: 'barrages',
        price: 78.99,
        originalPrice: 89.99,
        image: 'https://anfieldfireworks.com/wp-content/uploads/2025/09/volcanic-eruption-by-hallmark-fireworks-300x300.png',
        badges: ['sale'],
        description: 'Explosive barrage simulating a volcanic eruption with red and orange effects.',
        shots: 36,
        duration: '55 seconds',
        category1: 'F3'
    },
    {
        id: 'barrage-011',
        title: 'Etna Lava Barrage',
        brand: 'Hallmark Fireworks',
        category: 'barrages',
        price: 65.99,
        image: 'https://anfieldfireworks.com/wp-content/uploads/2025/09/Etna-Lava-by-Hallmark-Fireworks-300x300.png',
        badges: [],
        description: 'Fiery lava effects with molten gold and red cascading stars.',
        shots: 30,
        duration: '45 seconds',
        category1: 'F2'
    },
    {
        id: 'barrage-012',
        title: 'Thunder King Barrage',
        brand: 'Brothers Pyrotechnics',
        category: 'barrages',
        price: 95.99,
        image: 'https://via.placeholder.com/300x300/dc2626/ffffff?text=Thunder+King',
        badges: ['new'],
        description: 'Massive thunder reports combined with silver and gold chrysanthemums.',
        shots: 50,
        duration: '80 seconds',
        category1: 'F3'
    },
    {
        id: 'barrage-013',
        title: 'Rainbow Cascade Barrage',
        brand: 'Spectrum Pyro',
        category: 'barrages',
        price: 52.99,
        originalPrice: 64.99,
        image: 'https://via.placeholder.com/300x300/dc2626/ffffff?text=Rainbow+Cascade',
        badges: ['sale'],
        description: 'Multi-colored cascading effects creating a rainbow in the sky.',
        shots: 35,
        duration: '60 seconds',
        category1: 'F2'
    },
    {
        id: 'barrage-014',
        title: 'Phoenix Rising Barrage',
        brand: 'Mythical Fireworks',
        category: 'barrages',
        price: 112.99,
        image: 'https://via.placeholder.com/300x300/dc2626/ffffff?text=Phoenix+Rising',
        badges: ['new'],
        description: 'Rising phoenix effects with red, gold, and orange burst patterns.',
        shots: 60,
        duration: '90 seconds',
        category1: 'F3'
    },
    {
        id: 'barrage-015',
        title: 'Crystal Palace Barrage',
        brand: 'Royal Pyrotechnics',
        category: 'barrages',
        price: 73.99,
        originalPrice: 85.99,
        image: 'https://via.placeholder.com/300x300/dc2626/ffffff?text=Crystal+Palace',
        badges: ['sale', 'bogo'],
        description: 'Elegant silver and white effects resembling crystal formations.',
        shots: 40,
        duration: '70 seconds',
        category1: 'F3'
    },
    // Additional products for pagination demo
    {
        id: 'barrage-016',
        title: 'Midnight Storm Barrage',
        brand: 'Storm Fireworks',
        category: 'barrages',
        price: 48.99,
        image: 'https://via.placeholder.com/300x300/dc2626/ffffff?text=Midnight+Storm',
        badges: [],
        description: 'Dark effects with silver flashes and thunder sounds.',
        shots: 28,
        duration: '50 seconds',
        category1: 'F2'
    },
    {
        id: 'barrage-017',
        title: 'Dragon Breath Barrage',
        brand: 'Dragon Fireworks',
        category: 'barrages',
        price: 134.99,
        image: 'https://via.placeholder.com/300x300/dc2626/ffffff?text=Dragon+Breath',
        badges: ['new'],
        description: 'Fierce dragon-themed effects with flames and roars.',
        shots: 75,
        duration: '95 seconds',
        category1: 'F3'
    },
    {
        id: 'barrage-018',
        title: 'Starlight Symphony Barrage',
        brand: 'Symphony Pyro',
        category: 'barrages',
        price: 61.99,
        originalPrice: 74.99,
        image: 'https://via.placeholder.com/300x300/dc2626/ffffff?text=Starlight+Symphony',
        badges: ['sale'],
        description: 'Musical themed barrage with synchronized light patterns.',
        shots: 33,
        duration: '65 seconds',
        category1: 'F2'
    },
    {
        id: 'barrage-019',
        title: 'Avalanche Barrage',
        brand: 'Alpine Fireworks',
        category: 'barrages',
        price: 87.99,
        image: 'https://via.placeholder.com/300x300/dc2626/ffffff?text=Avalanche',
        badges: [],
        description: 'Cascading white and silver effects like an avalanche.',
        shots: 45,
        duration: '75 seconds',
        category1: 'F3'
    },
    {
        id: 'barrage-020',
        title: 'Neon Nights Barrage',
        brand: 'Neon Pyrotechnics',
        category: 'barrages',
        price: 56.99,
        originalPrice: 67.99,
        image: 'https://via.placeholder.com/300x300/dc2626/ffffff?text=Neon+Nights',
        badges: ['sale', 'bogo'],
        description: 'Bright neon colors creating a vibrant night sky display.',
        shots: 38,
        duration: '60 seconds',
        category1: 'F2'
    }
];

// Additional product categories for navigation (sample data)
window.allCategories = {
    'firework-display-packs': [
        {
            id: 'pack-001',
            title: '500 Pack Family Deal',
            brand: 'Anfield Fireworks',
            category: 'firework-display-packs',
            price: 299.99,
            originalPrice: 399.99,
            image: 'https://anfieldfireworks.com/wp-content/uploads/2025/09/500-pack-300x300.png',
            badges: ['sale', 'bogo'],
            description: 'Complete firework display pack with 500 pieces for the ultimate celebration.'
        }
    ],
    'rockets': [
        {
            id: 'rocket-001',
            title: 'Thunder Rocket',
            brand: 'Sky High Pyro',
            category: 'rockets',
            price: 12.99,
            image: 'https://via.placeholder.com/300x300/dc2626/ffffff?text=Thunder+Rocket',
            badges: ['new'],
            description: 'Single shot rocket with massive burst and thunder report.'
        }
    ],
    'selection-boxes': [
        {
            id: 'box-001',
            title: 'Premium Selection Box',
            brand: 'Elite Fireworks',
            category: 'selection-boxes',
            price: 75.99,
            originalPrice: 89.99,
            image: 'https://via.placeholder.com/300x300/dc2626/ffffff?text=Selection+Box',
            badges: ['sale'],
            description: 'Curated selection of premium fireworks in one convenient box.'
        }
    ]
};

// Utility functions for product data
window.ProductUtils = {
    // Get products by category
    getProductsByCategory: function(category) {
        if (category === 'barrages') {
            return window.productsData;
        }
        return window.allCategories[category] || [];
    },

    // Get product by ID
    getProductById: function(id) {
        return window.productsData.find(product => product.id === id);
    },

    // Filter products by price range
    filterByPrice: function(products, minPrice, maxPrice) {
        return products.filter(product => 
            product.price >= minPrice && product.price <= maxPrice
        );
    },

    // Filter products by badges/offers
    filterByOffers: function(products, offers) {
        if (!offers || offers.length === 0) return products;
        
        return products.filter(product => 
            offers.some(offer => product.badges.includes(offer))
        );
    },

    // Sort products
    sortProducts: function(products, sortBy) {
        const sortedProducts = [...products];
        
        switch (sortBy) {
            case 'price-low':
                return sortedProducts.sort((a, b) => a.price - b.price);
            case 'price-high':
                return sortedProducts.sort((a, b) => b.price - a.price);
            case 'name-asc':
                return sortedProducts.sort((a, b) => a.title.localeCompare(b.title));
            case 'name-desc':
                return sortedProducts.sort((a, b) => b.title.localeCompare(a.title));
            case 'popularity':
                // Simulate popularity sorting (could be based on sales data)
                return sortedProducts.sort((a, b) => b.shots - a.shots);
            case 'rating':
                // Simulate rating sorting (would need rating data)
                return sortedProducts.sort((a, b) => (b.price / 10) - (a.price / 10));
            case 'date':
                // Sort by new badges first, then by price
                return sortedProducts.sort((a, b) => {
                    const aIsNew = a.badges.includes('new');
                    const bIsNew = b.badges.includes('new');
                    if (aIsNew && !bIsNew) return -1;
                    if (!aIsNew && bIsNew) return 1;
                    return b.price - a.price;
                });
            default:
                return sortedProducts;
        }
    },

    // Calculate savings
    calculateSavings: function(originalPrice, currentPrice) {
        if (!originalPrice || originalPrice <= currentPrice) return 0;
        return Math.round(((originalPrice - currentPrice) / originalPrice) * 100);
    },

    // Generate product URL slug
    generateSlug: function(title) {
        return title.toLowerCase()
            .replace(/[^a-z0-9 -]/g, '')
            .replace(/\\s+/g, '-')
            .replace(/-+/g, '-');
    },

    // Format price for display
    formatPrice: function(price) {
        return `£${price.toFixed(2)}`;
    },

    // Get category display name
    getCategoryDisplayName: function(category) {
        const categoryNames = {
            'barrages': 'Barrages',
            'firework-display-packs': 'Firework Display Packs',
            'rockets': 'Rockets',
            'selection-boxes': 'Selection Boxes',
            'display-kits': 'Display Kits',
            'fountains-wheels': 'Fountains & Wheels',
            'roman-candles': 'Roman Candles',
            'flares-smoke-bombs': 'Flares/ Smoke Bombs',
            'sparklers': 'Sparklers'
        };
        return categoryNames[category] || category;
    }
};

// Initialize product data when script loads
document.addEventListener('DOMContentLoaded', function() {
    // Add data attributes to category links
    document.querySelectorAll('.category-link').forEach((link, index) => {
        const categories = [
            'barrages',
            'firework-display-packs', 
            'rockets',
            'selection-boxes',
            'display-kits',
            'fountains-wheels',
            'roman-candles',
            'flares-smoke-bombs',
            'sparklers'
        ];
        
        if (categories[index]) {
            link.dataset.category = categories[index];
        }
    });
});

// Export for use in other scripts
if (typeof module !== 'undefined' && module.exports) {
    module.exports = { productsData: window.productsData, ProductUtils: window.ProductUtils };
}
    </script>
</head>
<body>
    <!-- Top Banner -->
    <div class="top-banner animate__animated animate__fadeInDown">
        <div class="container">
            <div class="banner-content">
                <i class="fas fa-fire"></i>
                <span>BONFIRE NIGHT!</span>
                <span class="separator">|</span>
                <span>🔥 DEALS LIVE 🔥</span>
            </div>
            <div class="contact-info">
                <i class="fas fa-phone"></i>
                <span>07305535781</span>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <div class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-star-and-crescent"></i>
                    </div>
                    <div class="logo-text">
                        <h1>ANFIELD</h1>
                        <span>FIREWORKS</span>
                    </div>
                </div>

                <!-- Header Actions -->
                <div class="header-actions">
                    <div class="header-links">
                        <a href="#"><i class="fas fa-user"></i> Account</a>
                        <a href="#"><i class="fas fa-heart"></i> Wishlist</a>
                        <a href="#"><i class="fas fa-shopping-cart"></i> Cart (0)</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="main-nav animate__animated animate__fadeInUp">
        <div class="container">
            <ul class="nav-menu">
                <li><a href="#" class="nav-link"><i class="fas fa-fire"></i> Fireworks</a></li>
                <li><a href="#" class="nav-link"><i class="fas fa-gift"></i> Firework Display Packs</a></li>
                <li><a href="#" class="nav-link"><i class="fas fa-store"></i> Gift Shop</a></li>
                <li><a href="#" class="nav-link"><i class="fas fa-boxes"></i> Wholesale</a></li>
                <li><a href="#" class="nav-link"><i class="fas fa-info-circle"></i> About Us</a></li>
                <li><a href="#" class="nav-link"><i class="fas fa-blog"></i> Blog</a></li>
            </ul>
            
            <!-- Mobile Menu Toggle -->
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container">
            <div class="page-header-content">
                <h1 class="page-title animate__animated animate__fadeInLeft">
                    <i class="fas fa-rocket"></i>
                    Barrages
                </h1>
                <div class="breadcrumb animate__animated animate__fadeInRight">
                    <a href="#">Home</a>
                    <i class="fas fa-chevron-right"></i>
                    <a href="#">Product Categories</a>
                    <i class="fas fa-chevron-right"></i>
                    <span>Barrages</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="content-wrapper">
                <!-- Sidebar Filters -->
                <aside class="sidebar animate__animated animate__fadeInLeft">
                    <div class="filter-section">
                        <h3><i class="fas fa-filter"></i> Filters</h3>
                        
                        <!-- Categories -->
                        <div class="filter-group">
                            <h4>Product Categories</h4>
                            <div class="category-list">
                                <a href="#" class="category-link active">
                                    <i class="fas fa-rocket"></i>
                                    Barrages
                                </a>
                                <a href="#" class="category-link">
                                    <i class="fas fa-gift"></i>
                                    Firework Display Packs
                                </a>
                                <a href="#" class="category-link">
                                    <i class="fas fa-space-shuttle"></i>
                                    Rockets
                                </a>
                                <a href="#" class="category-link">
                                    <i class="fas fa-box"></i>
                                    Selection Boxes
                                </a>
                                <a href="#" class="category-link">
                                    <i class="fas fa-tools"></i>
                                    Display Kits
                                </a>
                                <a href="#" class="category-link">
                                    <i class="fas fa-water"></i>
                                    Fountains & Wheels
                                </a>
                                <a href="#" class="category-link">
                                    <i class="fas fa-candle"></i>
                                    Roman Candles
                                </a>
                                <a href="#" class="category-link">
                                    <i class="fas fa-smoke"></i>
                                    Flares/ Smoke Bombs
                                </a>
                                <a href="#" class="category-link">
                                    <i class="fas fa-sparkles"></i>
                                    Sparklers
                                </a>
                            </div>
                        </div>

                        <!-- Price Filter -->
                        <div class="filter-group">
                            <h4>Filter by price</h4>
                            <div class="price-filter">
                                <div class="price-range">
                                    <input type="range" id="priceRange" min="0" max="500" value="500" class="price-slider">
                                </div>
                                <div class="price-display">
                                    Price: £<span id="minPrice">0</span> — £<span id="maxPrice">500</span>
                                </div>
                                <button class="filter-btn">
                                    <i class="fas fa-search"></i>
                                    Filter
                                </button>
                            </div>
                        </div>

                        <!-- Special Offers -->
                        <div class="filter-group">
                            <h4>Special Offers</h4>
                            <div class="offer-badges">
                                <span class="offer-badge sale">Sale Items</span>
                                <span class="offer-badge bogo">Buy 1 Get 1 FREE</span>
                                <span class="offer-badge new">New Arrivals</span>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Products Section -->
                <section class="products-section animate__animated animate__fadeInRight">
                    <div class="products-header">
                        <div class="results-info">
                            <span>Showing <strong id="productCount">15</strong> results</span>
                        </div>
                        <div class="sort-options">
                            <select id="sortSelect">
                                <option value="default">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price-low">Sort by price: low to high</option>
                                <option value="price-high">Sort by price: high to low</option>
                            </select>
                        </div>
                    </div>

                    <!-- Products Grid -->
                    <div class="products-grid" id="productsGrid">
                        <!-- Products will be loaded here by JavaScript -->
                    </div>

                    <!-- Load More Button -->
                    <div class="load-more-section">
                        <button class="load-more-btn" id="loadMoreBtn">
                            <i class="fas fa-plus"></i>
                            Load More Products
                        </button>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Contact Us</h3>
                    <div class="contact-details">
                        <p><i class="fas fa-phone"></i> 07305535781</p>
                        <p><i class="fas fa-envelope"></i> info@anfieldfireworks.com</p>
                        <p><i class="fas fa-map-marker-alt"></i> 109 Breck Road, Anfield, Liverpool L4 2QX</p>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Safety</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Delivery</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="age-warning">
                    <i class="fas fa-exclamation-triangle"></i>
                    IT IS ILLEGAL TO SELL FIREWORKS TO ANYONE UNDER 18
                </p>
                <p>&copy; 2025 Anfield Fireworks. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/main.js"></script>
    <script src="js/products.js"></script>
</body>
</html>