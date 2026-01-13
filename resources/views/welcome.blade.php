<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Competitive Relocation - Affiliate Program</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/fav.jpg') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 50%, #1e3a8a 100%);
        }
        
        .wave-pattern {
            background-image: radial-gradient(circle at 2px 2px, rgba(255,255,255,0.1) 1px, transparent 0);
            background-size: 40px 40px;
        }
        
        .hover-scale {
            transition: transform 0.3s ease;
        }
        
        .hover-scale:hover {
            transform: translateY(-4px);
        }
        
        .success-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }
        
        .success-modal.show {
            display: flex;
        }
        
        .animate-fade-in {
            animation: fadeIn 0.3s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
    </style>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <img 
                        src="https://competitiverelocation.com/wp-content/uploads/2023/03/logo-site-colored-trans.png"
                        alt="Competitive Relocation"
                        class="h-12 w-auto"
                    />
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center gap-8">
                    <a href="#benefits" class="text-gray-700 hover:text-blue-900 transition-colors">Benefits</a>
                    <a href="#how-it-works" class="text-gray-700 hover:text-blue-900 transition-colors">How It Works</a>
                    <a href="#commission" class="text-gray-700 hover:text-blue-900 transition-colors">Commission</a>
                    <div class="flex items-center gap-2 text-sm text-gray-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <a href="tel:18773852919" class="hover:text-blue-900">877 385 2919</a>
                    </div>
                    <button onclick="scrollToForm()" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2.5 rounded-lg transition-colors">
                        Join Now
                    </button>
                </nav>

                <!-- Mobile Menu Button -->
                <button onclick="toggleMobileMenu()" class="md:hidden p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Navigation -->
            <nav id="mobile-menu" class="hidden md:hidden py-4 border-t border-gray-200">
                <div class="flex flex-col gap-4">
                    <a href="#benefits" class="text-gray-700 hover:text-blue-900">Benefits</a>
                    <a href="#how-it-works" class="text-gray-700 hover:text-blue-900">How It Works</a>
                    <a href="#commission" class="text-gray-700 hover:text-blue-900">Commission</a>
                    <button onclick="scrollToForm()" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-2.5 rounded-lg transition-colors w-full">
                        Join Now
                    </button>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="relative gradient-bg text-white overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 wave-pattern"></div>

        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('https://images.unsplash.com/photo-1766524790783-7915025f453a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w3Nzg4Nzd8MHwxfHNlYXJjaHwxfHxtb3ZpbmclMjB0cnVjayUyMHByb2Zlc3Npb25hbHxlbnwxfHx8fDE3NjY5NDEzMjF8MA&ixlib=rb-4.1.0&q=80&w=1080')"></div>
        
        <div class="relative z-10 container mx-auto px-4 py-16 sm:py-20 md:py-28 lg:py-32">
            <div class="max-w-4xl mx-auto text-center">
                <div class="inline-block mb-4 sm:mb-6">
                    <span class="bg-orange-500 text-white px-3 py-1.5 sm:px-4 sm:py-2 rounded-full text-xs sm:text-sm uppercase tracking-wide">
                        Affiliate Program
                    </span>
                </div>
                
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold mb-4 sm:mb-6 leading-tight px-4 sm:px-0">
                    Turn Your Network Into<br>
                    <span class="text-orange-400">Passive Income</span>
                </h1>
                
                <p class="text-lg sm:text-xl md:text-2xl mb-8 sm:mb-12 text-blue-100 max-w-3xl mx-auto px-4 sm:px-0">
                    Earn generous commissions by helping people move smoothly. Join our affiliate program and start earning today—zero pressure, zero effort.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center items-center px-4 sm:px-0">
                    <button onclick="scrollToForm()" class="w-full sm:w-auto bg-orange-500 hover:bg-orange-600 text-white px-6 sm:px-8 py-5 sm:py-6 text-base sm:text-lg rounded-lg transition-all group">
                        Get Started Now
                        <svg class="inline-block ml-2 w-4 h-4 sm:w-5 sm:h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>

                <!-- Trust Indicators -->
                <div class="mt-12 sm:mt-16 flex flex-wrap justify-center gap-4 sm:gap-8 text-xs sm:text-sm text-blue-200 px-4">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        No Hidden Fees
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        Instant Setup
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                        24/7 Support
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Wave -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
                <path d="M0 120L60 105C120 90 240 60 360 45C480 30 600 30 720 37.5C840 45 960 60 1080 67.5C1200 75 1320 75 1380 75L1440 75V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="white"/>
            </svg>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="py-12 sm:py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-orange-100 text-orange-600 mb-3 sm:mb-4">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-900 mb-1">10%</div>
                    <div class="text-xs sm:text-sm font-semibold text-gray-900 mb-1">Commission Rate</div>
                    <div class="text-xs text-gray-500 hidden sm:block">of the total deposit for every completed move</div>
                </div>
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-orange-100 text-orange-600 mb-3 sm:mb-4">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-900 mb-1">500+</div>
                    <div class="text-xs sm:text-sm font-semibold text-gray-900 mb-1">Active Affiliates</div>
                    <div class="text-xs text-gray-500 hidden sm:block">Growing community</div>
                </div>
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-orange-100 text-orange-600 mb-3 sm:mb-4">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-900 mb-1">$2.5M+</div>
                    <div class="text-xs sm:text-sm font-semibold text-gray-900 mb-1">Paid Out</div>
                    <div class="text-xs text-gray-500 hidden sm:block">To our partners</div>
                </div>
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-orange-100 text-orange-600 mb-3 sm:mb-4">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path>
                        </svg>
                    </div>
                    <div class="text-2xl sm:text-3xl md:text-4xl font-bold text-blue-900 mb-1">98%</div>
                    <div class="text-xs sm:text-sm font-semibold text-gray-900 mb-1">Satisfaction</div>
                    <div class="text-xs text-gray-500 hidden sm:block">Affiliate rating</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div id="benefits" class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12 sm:mb-16">
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-blue-900 mb-3 sm:mb-4 px-4">
                    Become Our Affiliate Partner
                </h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto px-4">
                    Join hundreds of successful affiliates earning passive income by helping people with their relocation needs
                </p>
            </div>
            
            <div class="grid sm:grid-cols-2 gap-6 sm:gap-8 mb-10 sm:mb-12">
                <div class="bg-gradient-to-br from-white to-gray-50 p-6 sm:p-8 rounded-2xl shadow-lg border border-gray-100 hover-scale">
                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white shadow-lg">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg sm:text-xl font-bold text-blue-900 mb-2">Get your unique affiliate link</h3>
                            <p class="text-sm sm:text-base text-gray-600">Receive a personalized tracking link immediately after signup</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-white to-gray-50 p-6 sm:p-8 rounded-2xl shadow-lg border border-gray-100 hover-scale">
                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white shadow-lg">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg sm:text-xl font-bold text-blue-900 mb-2">Share with your network</h3>
                            <p class="text-sm sm:text-base text-gray-600">Post on social media, send via email, or share with anyone planning to move</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-white to-gray-50 p-6 sm:p-8 rounded-2xl shadow-lg border border-gray-100 hover-scale">
                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white shadow-lg">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg sm:text-xl font-bold text-blue-900 mb-2">They book → You earn</h3>
                            <p class="text-sm sm:text-base text-gray-600">Earn 10% of total deposit when your referrals complete their move</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-white to-gray-50 p-6 sm:p-8 rounded-2xl shadow-lg border border-gray-100 hover-scale">
                    <div class="flex items-start gap-3 sm:gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center text-white shadow-lg">
                                <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg sm:text-xl font-bold text-blue-900 mb-2">Zero pressure, zero effort</h3>
                            <p class="text-sm sm:text-base text-gray-600">No quotas, no targets—just share and earn at your own pace</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-blue-900 to-blue-800 rounded-2xl p-6 sm:p-8 md:p-12 text-white text-center shadow-2xl">
                <h3 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 sm:mb-4 px-4">
                    Ready to Start Earning?
                </h3>
                <p class="text-sm sm:text-base text-blue-100 mb-6 sm:mb-8 max-w-2xl mx-auto px-4">
                    Sign up now and get your unique affiliate link in minutes. Start sharing and earning commissions today!
                </p>
                <button onclick="scrollToForm()" class="w-full sm:w-auto bg-orange-500 hover:bg-orange-600 text-white px-8 sm:px-10 py-5 sm:py-6 text-base sm:text-lg rounded-lg shadow-xl transition-all">
                    Join the Program Now
                </button>
            </div>
        </div>
    </div>

    <!-- How It Works Section -->
    <div id="how-it-works" class="py-16 sm:py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12 sm:mb-16">
                <div class="inline-block mb-4">
                    <span class="bg-orange-100 text-orange-600 px-3 py-1.5 sm:px-4 sm:py-2 rounded-full text-xs sm:text-sm uppercase tracking-wide font-semibold">
                        Simple Process
                    </span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-blue-900 mb-3 sm:mb-4 px-4">How It Works</h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto px-4">
                    Get started in four simple steps and begin earning commissions immediately
                </p>
            </div>
            
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-6 lg:gap-8 mb-12 sm:mb-16">
                <div class="relative text-center">
                    <div class="relative z-10">
                        <div class="relative inline-block mb-4 sm:mb-6">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center mx-auto shadow-xl">
                                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                                </svg>
                            </div>
                            <div class="absolute -top-2 -right-2 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-blue-900 text-white flex items-center justify-center shadow-lg text-sm sm:text-base font-bold">
                                01
                            </div>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-blue-900 mb-2 sm:mb-3">Fill out the Form</h3>
                        <p class="text-sm text-gray-600 px-2">Complete our simple affiliate registration with your details and preferred payment method</p>
                    </div>
                </div>

                <div class="relative text-center">
                    <div class="relative z-10">
                        <div class="relative inline-block mb-4 sm:mb-6">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center mx-auto shadow-xl">
                                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                            </div>
                            <div class="absolute -top-2 -right-2 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-blue-900 text-white flex items-center justify-center shadow-lg text-sm sm:text-base font-bold">
                                02
                            </div>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-blue-900 mb-2 sm:mb-3">Receive your link</h3>
                        <p class="text-sm text-gray-600 px-2">Get your unique tracking link instantly via email and in your dashboard</p>
                    </div>
                </div>

                <div class="relative text-center">
                    <div class="relative z-10">
                        <div class="relative inline-block mb-4 sm:mb-6">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center mx-auto shadow-xl">
                                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path>
                                </svg>
                            </div>
                            <div class="absolute -top-2 -right-2 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-blue-900 text-white flex items-center justify-center shadow-lg text-sm sm:text-base font-bold">
                                03
                            </div>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-blue-900 mb-2 sm:mb-3">Share everywhere</h3>
                        <p class="text-sm text-gray-600 px-2">Post on Facebook, Instagram, SMS, email, or anywhere your audience is</p>
                    </div>
                </div>

                <div class="relative text-center">
                    <div class="relative z-10">
                        <div class="relative inline-block mb-4 sm:mb-6">
                            <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-gradient-to-br from-orange-500 to-orange-600 flex items-center justify-center mx-auto shadow-xl">
                                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                            </div>
                            <div class="absolute -top-2 -right-2 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-blue-900 text-white flex items-center justify-center shadow-lg text-sm sm:text-base font-bold">
                                04
                            </div>
                        </div>
                        <h3 class="text-lg sm:text-xl font-bold text-blue-900 mb-2 sm:mb-3">Get paid</h3>
                        <p class="text-sm text-gray-600 px-2">Receive commissions directly to your account a day after the job is done</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-gradient-to-r from-orange-50 to-orange-100 border-l-4 border-orange-500 p-6 sm:p-8 rounded-xl">
                <div class="flex items-start gap-3 sm:gap-4">
                    <div class="flex-shrink-0">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-orange-500 flex items-center justify-center text-white">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg sm:text-xl font-bold text-blue-900 mb-2">Earn Commissions by Helping Clients Move Smoothly</h3>
                        <p class="text-sm sm:text-base text-gray-700">
                            Our affiliate program is designed to be effortless. Share your unique link with friends, family, or your online audience, and earn commissions every time someone books a move through your referral. Track everything in real-time and get paid a day after the job is done.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Commission Structure Section -->
    <div id="commission" class="py-16 sm:py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="text-center mb-12 sm:mb-16">
                <div class="inline-block mb-4">
                    <span class="bg-blue-100 text-blue-600 px-3 py-1.5 sm:px-4 sm:py-2 rounded-full text-xs sm:text-sm uppercase tracking-wide font-semibold">
                        Transparent Pricing
                    </span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-blue-900 mb-3 sm:mb-4 px-4">
                    Commission Structure
                </h2>
                <p class="text-lg sm:text-xl text-gray-600 max-w-2xl mx-auto px-4">
                    Clear, straightforward commission rates with no hidden fees
                </p>
            </div>
            
            <div class="bg-white rounded-3xl shadow-2xl p-6 sm:p-8 md:p-12 mb-8 sm:mb-12 border border-gray-100">
                <p class="text-center text-sm sm:text-base text-gray-600 mb-8 sm:mb-12 font-semibold">
                    Earn 10% of the total deposit for every completed move
                </p>
                
                <div class="grid sm:grid-cols-3 gap-6 sm:gap-8 mb-8 sm:mb-12">
                    <div class="text-center group hover-scale">
                        <div class="bg-gradient-to-br from-orange-500 to-orange-600 text-white rounded-2xl p-6 sm:p-8 mb-4 shadow-xl">
                            <div class="text-4xl sm:text-5xl md:text-6xl font-bold mb-2">10%</div>
                            <div class="text-sm sm:text-base text-orange-100">Affiliate Commission</div>
                        </div>
                        <p class="text-xs sm:text-sm text-gray-600">Earn 10% of the total deposit for every completed move</p>
                    </div>
                    
                    <div class="text-center group hover-scale">
                        <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 text-white rounded-2xl p-6 sm:p-8 mb-4 shadow-xl">
                            <div class="text-4xl sm:text-5xl md:text-6xl font-bold mb-2">0.5%</div>
                            <div class="text-sm sm:text-base text-yellow-100">Card Processing</div>
                        </div>
                        <p class="text-xs sm:text-sm text-gray-600">Payment processing fees</p>
                    </div>
                    
                    <div class="text-center group hover-scale">
                        <div class="bg-gradient-to-br from-blue-600 to-blue-700 text-white rounded-2xl p-6 sm:p-8 mb-4 shadow-xl">
                            <div class="text-4xl sm:text-5xl md:text-6xl font-bold mb-2">31.5%</div>
                            <div class="text-sm sm:text-base text-blue-100">Total Deposit</div>
                        </div>
                        <p class="text-xs sm:text-sm text-gray-600">Overall commission structure</p>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-blue-900 to-blue-800 text-white text-center p-6 sm:p-8 rounded-2xl shadow-xl">
                    <p class="text-lg sm:text-xl md:text-2xl font-semibold">
                        💰 Simple & Transparent Commission Split
                    </p>
                    <p class="text-blue-200 text-xs sm:text-sm mt-2">
                        Ensuring quality service and support for all moves
                    </p>
                </div>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-6 sm:gap-8">
                <div class="bg-blue-50 border-2 border-blue-200 rounded-2xl p-6 sm:p-8">
                    <div class="flex items-center gap-3 mb-4 sm:mb-6">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-blue-600 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-blue-900">Total Deposit Breakdown</h3>
                    </div>
                    
                    <div class="space-y-3 sm:space-y-4">
                        <div class="flex justify-between items-center p-2.5 sm:p-3 bg-white rounded-lg">
                            <span class="text-sm sm:text-base text-gray-700 font-medium">Affiliate Partner</span>
                            <span class="text-sm sm:text-base text-blue-900 font-bold">10.0%</span>
                        </div>
                        <div class="flex justify-between items-center p-2.5 sm:p-3 bg-white rounded-lg">
                            <span class="text-sm sm:text-base text-gray-700 font-medium">Card Processing Fees</span>
                            <span class="text-sm sm:text-base text-blue-900 font-bold">0.5%</span>
                        </div>
                        <div class="flex justify-between items-center p-2.5 sm:p-3 bg-gradient-to-r from-blue-100 to-blue-50 rounded-lg border-2 border-blue-300">
                            <span class="text-sm sm:text-base text-blue-900 font-bold">Company Operations</span>
                            <span class="text-sm sm:text-base text-blue-900 font-bold">21%</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-yellow-50 border-2 border-yellow-200 rounded-2xl p-6 sm:p-8">
                    <div class="flex items-center gap-3 mb-4 sm:mb-6">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 rounded-xl bg-yellow-500 flex items-center justify-center flex-shrink-0">
                            <svg class="w-5 h-5 sm:w-6 sm:h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl sm:text-2xl font-bold text-blue-900">Payment Terms</h3>
                    </div>
                    
                    <div class="space-y-3 sm:space-y-4">
                        <div class="p-3 sm:p-4 bg-white rounded-lg border-l-4 border-yellow-500">
                            <h4 class="text-sm sm:text-base text-blue-900 mb-1 sm:mb-2 font-bold">Commission Rate</h4>
                            <p class="text-xs sm:text-sm text-gray-700">
                                Affiliates earn 10% commission on the total deposit for every completed move
                            </p>
                        </div>
                        
                        <div class="p-3 sm:p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-lg border-2 border-green-300">
                            <div class="flex items-center gap-2 text-green-700 mb-1">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-sm sm:text-base font-bold">After Job Done Payouts</span>
                            </div>
                            <p class="text-xs sm:text-sm text-gray-700">
                                All commissions are paid a day after the job is completed via your preferred payment method
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Registration Form -->
    <div id="registration-form" class="py-16 sm:py-20 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4 max-w-3xl">
            <div class="text-center mb-8 sm:mb-12">
                <div class="inline-block mb-4">
                    <span class="bg-orange-100 text-orange-600 px-3 py-1.5 sm:px-4 sm:py-2 rounded-full text-xs sm:text-sm uppercase tracking-wide font-semibold">
                        Get Started
                    </span>
                </div>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-blue-900 mb-3 sm:mb-4 px-4">
                    Affiliate Registration
                </h2>
                <p class="text-lg sm:text-xl text-gray-600 px-4">
                    Fill out the form below to create your affiliate account and receive your unique referral link
                </p>
            </div>
            
            <div class="bg-white rounded-3xl shadow-2xl p-6 sm:p-8 md:p-12 border border-gray-100">
                <form id="affiliate-form" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="fullName" class="flex items-center gap-2 text-blue-900 mb-2 font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Full Name *
                            </label>
                            <input
                                id="fullName"
                                type="text"
                                required
                                class="w-full h-12 px-4 border border-gray-300 rounded-lg focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:outline-none transition-all"
                                placeholder="John Doe"
                            />
                        </div>

                        <div>
                            <label for="email" class="flex items-center gap-2 text-blue-900 mb-2 font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                                Email Address *
                            </label>
                            <input
                                id="email"
                                type="email"
                                required
                                class="w-full h-12 px-4 border border-gray-300 rounded-lg focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:outline-none transition-all"
                                placeholder="john@example.com"
                            />
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="phone" class="flex items-center gap-2 text-blue-900 mb-2 font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                Phone Number *
                            </label>
                            <input
                                id="phone"
                                type="tel"
                                required
                                class="w-full h-12 px-4 border border-gray-300 rounded-lg focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:outline-none transition-all"
                                placeholder="(123) 456-7890"
                            />
                        </div>

                        <div>
                            <label for="companyName" class="flex items-center gap-2 text-blue-900 mb-2 font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                Company / Brand Name
                            </label>
                            <input
                                id="companyName"
                                type="text"
                                class="w-full h-12 px-4 border border-gray-300 rounded-lg focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:outline-none transition-all"
                                placeholder="Optional"
                            />
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="paymentMethod" class="flex items-center gap-2 text-blue-900 mb-2 font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                                Preferred Payment Method *
                            </label>
                            <select
                                id="paymentMethod"
                                required
                                class="w-full h-12 px-4 border border-gray-300 rounded-lg focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:outline-none transition-all bg-white"
                            >
                                <option value="">Select payment method</option>
                                <option value="bank">Bank Transfer</option>
                                <option value="paypal">PayPal</option>
                                <option value="venmo">Venmo</option>
                                <option value="zelle">Zelle</option>
                                <option value="check">Check</option>
                                <option value="stripe">Stripe</option>
                            </select>
                        </div>

                        <div>
                            <label for="accountNumber" class="flex items-center gap-2 text-blue-900 mb-2 font-medium">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                                Account Number *
                            </label>
                            <input
                                id="accountNumber"
                                type="text"
                                required
                                class="w-full h-12 px-4 border border-gray-300 rounded-lg focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:outline-none transition-all"
                                placeholder="Enter account details"
                            />
                        </div>
                    </div>

                    <div class="bg-white border-2 border-blue-300 p-5 rounded-xl">
                        <div class="flex items-start gap-3">
                            <input
                                type="checkbox"
                                id="terms"
                                required
                                class="mt-1 w-4 h-4 text-orange-500 border-gray-300 rounded focus:ring-orange-500 flex-shrink-0"
                            />
                            <label for="terms" class="cursor-pointer text-sm leading-relaxed text-gray-700">
                                I agree to all the <a href="#" class="text-blue-600 hover:text-blue-700 underline font-medium">Terms and Conditions</a> with Competitive Relocation Service. I understand that commission payments are processed a day after move completion.
                            </label>
                        </div>
                    </div>

                    <button 
                        type="submit"
                        class="w-full bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white py-6 text-lg rounded-lg shadow-xl hover:shadow-2xl transition-all font-semibold"
                    >
                        Create My Affiliate Account
                    </button>

                    <p class="text-center text-sm text-gray-500">
                        By creating an account, you'll receive your unique affiliate link via email within minutes
                    </p>
                </form>
            </div>
            
            <div class="mt-8 grid md:grid-cols-3 gap-4 text-sm">
                <div class="bg-white border border-gray-200 rounded-xl p-4 text-center">
                    <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center mx-auto mb-2 font-bold">
                        ✓
                    </div>
                    <p class="text-gray-700 font-medium">Instant email confirmation</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-4 text-center">
                    <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center mx-auto mb-2 font-bold">
                        ✓
                    </div>
                    <p class="text-gray-700 font-medium">Real-time commission tracking</p>
                </div>
                <div class="bg-white border border-gray-200 rounded-xl p-4 text-center">
                    <div class="w-8 h-8 rounded-full bg-green-100 text-green-600 flex items-center justify-center mx-auto mb-2 font-bold">
                        ✓
                    </div>
                    <p class="text-gray-700 font-medium">Quick payout reports</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-blue-900 to-blue-950 text-white">
        <div class="container mx-auto px-4 py-12 sm:py-16">
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-8 sm:mb-12">
                <!-- Company Info -->
                <div>
                    <img 
                        src="https://competitiverelocation.com/wp-content/uploads/2023/03/logo-site-colored-trans.png"
                        alt="Competitive Relocation"
                        class="h-8 sm:h-10 w-auto mb-4 brightness-0 invert"
                    />
                    <p class="text-blue-200 text-sm mb-4">
                        Professional relocation services with a rewarding affiliate program. Join us and earn while helping others move smoothly.
                    </p>
                    <div class="flex gap-3">
                        <a href="#" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-blue-800 hover:bg-orange-500 flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-blue-800 hover:bg-orange-500 flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-blue-800 hover:bg-orange-500 flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-blue-800 hover:bg-orange-500 flex items-center justify-center transition-colors">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="mb-3 sm:mb-4 text-sm sm:text-base font-semibold">Quick Links</h4>
                    <ul class="space-y-2 text-sm text-blue-200">
                        <li><a href="#benefits" class="hover:text-orange-400 transition-colors">Benefits</a></li>
                        <li><a href="#how-it-works" class="hover:text-orange-400 transition-colors">How It Works</a></li>
                        <li><a href="#commission" class="hover:text-orange-400 transition-colors">Commission Structure</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">FAQs</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Success Stories</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div>
                    <h4 class="mb-3 sm:mb-4 text-sm sm:text-base font-semibold">Support</h4>
                    <ul class="space-y-2 text-sm text-blue-200">
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Help Center</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Terms & Conditions</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Affiliate Agreement</a></li>
                        <li><a href="#" class="hover:text-orange-400 transition-colors">Contact Support</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="mb-3 sm:mb-4 text-sm sm:text-base font-semibold">Contact Us</h4>
                    <ul class="space-y-3 text-sm text-blue-200">
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div>
                                13 Galaxy Ct Sewell<br>
                                New Jersey 08080
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <div>
                                <a href="mailto:info@competitiverelocation.com" class="hover:text-orange-400 transition-colors break-all">
                                    info@competitiverelocation.com
                                </a>
                            </div>
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <div>
                                <span class="text-blue-200">Toll Free:</span>
                                <a href="tel:18773852919" class="hover:text-orange-400 transition-colors">
                                    877 385 2919
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-blue-800 pt-6 sm:pt-8 flex flex-col md:flex-row justify-between items-center gap-3 sm:gap-4 text-xs sm:text-sm text-blue-300">
                <p>© 2026 Competitive Relocation Service. All rights reserved.</p>
                <p>Built with care for our affiliate partners</p>
            </div>
        </div>
    </footer>

    <!-- Success Modal -->
    <div id="success-modal" class="success-modal">
        <div class="bg-white rounded-3xl p-8 md:p-12 max-w-md mx-4 animate-fade-in shadow-2xl">
            <div class="text-center">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-blue-900 mb-4">Welcome to Our Affiliate Program!</h3>
                <p class="text-gray-600 mb-6">
                    Your affiliate account has been created successfully. Check your email for your unique referral link and next steps.
                </p>
                <div class="bg-blue-50 border-2 border-blue-200 rounded-xl p-4 mb-6">
                    <p class="text-sm text-blue-900 font-semibold mb-2">Your Unique Affiliate Link:</p>
                    <p id="affiliate-link" class="text-sm text-blue-600 break-all font-mono bg-white p-2 rounded">
                        https://competitiverelocation.com/ref/ABC123XYZ
                    </p>
                </div>
                <button onclick="closeModal()" class="w-full bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg transition-all font-semibold">
                    Get Started
                </button>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        }

        // Scroll to form
        function scrollToForm() {
            document.getElementById('registration-form').scrollIntoView({ behavior: 'smooth' });
        }

        // Form submission
        document.getElementById('affiliate-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = {
                fullName: document.getElementById('fullName').value,
                email: document.getElementById('email').value,
                phone: document.getElementById('phone').value,
                companyName: document.getElementById('companyName').value,
                paymentMethod: document.getElementById('paymentMethod').value,
                accountNumber: document.getElementById('accountNumber').value,
                termsAccepted: document.getElementById('terms').checked
            };

            // Generate unique affiliate code
            const affiliateCode = 'CR' + Math.random().toString(36).substring(2, 11).toUpperCase();
            
            // Update modal with affiliate link
            document.getElementById('affiliate-link').textContent = 
                `https://competitiverelocation.com/ref/${affiliateCode}`;
            
            // Show success modal
            document.getElementById('success-modal').classList.add('show');
            
            // Reset form
            this.reset();
            
            console.log('Affiliate Registration:', formData);
            console.log('Generated Affiliate Code:', affiliateCode);
        });

        // Close modal
        function closeModal() {
            document.getElementById('success-modal').classList.remove('show');
        }

        // Close modal on background click
        document.getElementById('success-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Smooth scroll for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                    // Close mobile menu if open
                    document.getElementById('mobile-menu').classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>
