<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Premium Digital Experience</title>
    <meta name="description" content="A premium digital experience offering world-class services, beautiful galleries, and exceptional support.">
    <meta name="keywords" content="premium, services, gallery, portfolio, agency">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3, .heading-font { font-family: 'Playfair Display', serif; }
        .glass-nav { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(10px); }
        .loader-wrapper {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 9999;
            background-color: #0f172a; display: flex; justify-content: center; items-center; transition: opacity 0.5s ease;
        }
        .loader {
            width: 48px; height: 48px; border: 5px solid #FFF; border-bottom-color: transparent;
            border-radius: 50%; display: inline-block; box-sizing: border-box; animation: rotation 1s linear infinite; margin: auto;
        }
        @keyframes rotation { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
</head>
<body class="antialiased text-slate-800 bg-slate-50" x-data="{ lightboxOpen: false, lightboxImg: '', mobileMenuOpen: false }">

    <!-- Preloader -->
    <div id="preloader" class="loader-wrapper">
        <span class="loader"></span>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="text-2xl font-bold heading-font text-slate-900 tracking-tight">LUMIÈRE</a>
                </div>
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#home" class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors">Home</a>
                    <a href="#about" class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors">About</a>
                    <a href="#services" class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors">Services</a>
                    <a href="#gallery" class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors">Gallery</a>
                    <a href="#testimonials" class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors">Testimonials</a>
                    <a href="#contact" class="px-5 py-2.5 rounded-full bg-slate-900 text-white text-sm font-medium hover:bg-indigo-600 transition-colors shadow-lg shadow-slate-900/20">Contact Us</a>
                </div>
                <div class="md:hidden flex items-center">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-slate-600 hover:text-slate-900 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-white shadow-xl absolute w-full">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <a @click="mobileMenuOpen = false" href="#home" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50">Home</a>
                <a @click="mobileMenuOpen = false" href="#about" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50">About</a>
                <a @click="mobileMenuOpen = false" href="#services" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50">Services</a>
                <a @click="mobileMenuOpen = false" href="#gallery" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50">Gallery</a>
                <a @click="mobileMenuOpen = false" href="#testimonials" class="block px-3 py-2 text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-slate-50">Testimonials</a>
                <a @click="mobileMenuOpen = false" href="#contact" class="block px-3 py-2 text-base font-medium text-indigo-600 hover:bg-slate-50">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0 opacity-40">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80" alt="Hero background" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 z-0 bg-gradient-to-b from-slate-900/50 to-slate-900/90"></div>
        
        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto" data-aos="fade-up" data-aos-duration="1000">
            <span class="text-indigo-400 font-semibold tracking-wider uppercase text-sm mb-4 block">Redefining Excellence</span>
            <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">Elevate Your Vision <br> <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-400">Beyond Limits</span></h1>
            <p class="text-lg md:text-xl text-slate-300 mb-10 max-w-2xl mx-auto font-light">We craft digital experiences that leave a lasting impression. Discover the perfect blend of aesthetics and functionality.</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                <a href="#gallery" class="px-8 py-4 rounded-full bg-indigo-600 text-white font-medium hover:bg-indigo-700 transition-all transform hover:-translate-y-1 shadow-lg shadow-indigo-600/30">View Portfolio</a>
                <a href="#contact" class="px-8 py-4 rounded-full bg-transparent border border-white/30 text-white font-medium hover:bg-white hover:text-slate-900 transition-all">Get in Touch</a>
            </div>
        </div>
        
        <!-- Scroll Down Indicator -->
        <a href="#about" class="absolute bottom-10 left-1/2 transform -translate-x-1/2 text-white/50 hover:text-white animate-bounce transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </a>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right" data-aos-duration="1000">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80" alt="About us" class="rounded-2xl shadow-2xl">
                </div>
                <div data-aos="fade-left" data-aos-duration="1000">
                    <span class="text-indigo-600 font-semibold tracking-wider uppercase text-sm mb-2 block">Our Story</span>
                    <h2 class="text-4xl font-bold text-slate-900 mb-6 heading-font">Crafting brilliance since 2010.</h2>
                    <p class="text-slate-600 mb-6 leading-relaxed">We are a team of passionate creators, dedicated to transforming ideas into remarkable realities. Our approach combines innovative thinking with meticulous craftsmanship, ensuring every project we touch stands out in today's crowded landscape.</p>
                    <p class="text-slate-600 mb-8 leading-relaxed">Through collaboration and a relentless pursuit of perfection, we deliver results that not only meet but exceed expectations.</p>
                    
                    <div class="grid grid-cols-2 gap-8 mb-8">
                        <div>
                            <h4 class="text-3xl font-bold text-slate-900 mb-1 heading-font">150+</h4>
                            <p class="text-sm text-slate-500 uppercase tracking-wide">Projects Done</p>
                        </div>
                        <div>
                            <h4 class="text-3xl font-bold text-slate-900 mb-1 heading-font">98%</h4>
                            <p class="text-sm text-slate-500 uppercase tracking-wide">Client Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-indigo-600 font-semibold tracking-wider uppercase text-sm mb-2 block">What We Do</span>
                <h2 class="text-4xl font-bold text-slate-900 mb-4 heading-font">Premium Services for Modern Brands</h2>
                <p class="text-slate-600">Tailored solutions designed to elevate your business and captivate your audience.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-indigo-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 transition-colors duration-300">
                        <svg class="w-7 h-7 text-indigo-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 heading-font">Digital Design</h3>
                    <p class="text-slate-600 leading-relaxed">Creating stunning, user-centric interfaces that engage and convert, with a focus on seamless experiences.</p>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-indigo-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 transition-colors duration-300">
                        <svg class="w-7 h-7 text-indigo-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 heading-font">Brand Identity</h3>
                    <p class="text-slate-600 leading-relaxed">Developing cohesive visual systems that tell your story and build lasting connections with your audience.</p>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-indigo-50 rounded-xl flex items-center justify-center mb-6 group-hover:bg-indigo-600 transition-colors duration-300">
                        <svg class="w-7 h-7 text-indigo-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3 heading-font">Creative Strategy</h3>
                    <p class="text-slate-600 leading-relaxed">Data-driven approaches combined with creative thinking to position your brand for sustainable growth.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12" data-aos="fade-up">
                <div class="max-w-2xl">
                    <span class="text-indigo-600 font-semibold tracking-wider uppercase text-sm mb-2 block">Portfolio</span>
                    <h2 class="text-4xl font-bold text-slate-900 heading-font">Our Selected Works</h2>
                </div>
                <div class="mt-4 md:mt-0">
                    <a href="#" class="text-indigo-600 font-medium hover:text-indigo-800 flex items-center transition-colors">
                        View All Projects <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            @if($galleries->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($galleries as $index => $gallery)
                        <div class="group relative overflow-hidden rounded-2xl cursor-pointer aspect-w-4 aspect-h-3" 
                             data-aos="fade-up" data-aos-delay="{{ ($index % 3) * 100 }}"
                             @click="lightboxOpen = true; lightboxImg = '{{ asset('storage/' . $gallery->image_path) }}'">
                            <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}" class="object-cover w-full h-72 transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                <h3 class="text-white text-xl font-medium heading-font transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">{{ $gallery->title ?: 'Creative Work' }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-20 bg-slate-50 rounded-2xl border border-dashed border-slate-300">
                    <p class="text-slate-500 font-medium">Gallery is currently empty. Images uploaded from the admin panel will appear here.</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-24 bg-slate-900 text-white relative overflow-hidden">
        <div class="absolute top-0 right-0 -mt-20 -mr-20 w-80 h-80 bg-indigo-600 rounded-full blur-3xl opacity-20"></div>
        <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-80 h-80 bg-cyan-600 rounded-full blur-3xl opacity-20"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <span class="text-indigo-400 font-semibold tracking-wider uppercase text-sm mb-2 block">Client Stories</span>
                <h2 class="text-4xl font-bold mb-4 heading-font">What People Say</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex text-yellow-400 mb-4">
                        ★★★★★
                    </div>
                    <p class="text-slate-300 text-lg mb-6 leading-relaxed">"The attention to detail and level of creativity exceeded our expectations. Our new brand identity perfectly captures our vision."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-slate-600 overflow-hidden mr-4">
                            <img src="https://ui-avatars.com/api/?name=Sarah+J&background=random" alt="Sarah" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium text-white">Sarah Jenkins</h4>
                            <p class="text-sm text-slate-400">CEO, TechStart</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex text-yellow-400 mb-4">
                        ★★★★★
                    </div>
                    <p class="text-slate-300 text-lg mb-6 leading-relaxed">"An absolute pleasure to work with. They delivered a stunning website that has significantly improved our conversion rates."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-slate-600 overflow-hidden mr-4">
                            <img src="https://ui-avatars.com/api/?name=Michael+C&background=random" alt="Michael" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium text-white">Michael Chen</h4>
                            <p class="text-sm text-slate-400">Marketing Director</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-indigo-50 rounded-3xl overflow-hidden shadow-lg border border-indigo-100">
                <div class="grid grid-cols-1 lg:grid-cols-2">
                    <div class="p-12 lg:p-16 bg-indigo-600 text-white" data-aos="fade-right">
                        <h2 class="text-4xl font-bold mb-6 heading-font">Let's create something extraordinary.</h2>
                        <p class="text-indigo-100 mb-10 leading-relaxed text-lg">Ready to start your next project? Get in touch with our team of experts to discuss how we can help elevate your brand.</p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <svg class="w-6 h-6 mr-4 text-indigo-300 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div>
                                    <h4 class="font-medium">Visit Us</h4>
                                    <p class="text-indigo-200 mt-1">123 Creative Avenue, Design District, NY 10001</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-6 h-6 mr-4 text-indigo-300 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                <div>
                                    <h4 class="font-medium">Email Us</h4>
                                    <p class="text-indigo-200 mt-1">hello@lumiere-agency.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="p-12 lg:p-16 bg-white" data-aos="fade-left">
                        <form class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Name</label>
                                <input type="text" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 transition-colors bg-slate-50" placeholder="John Doe">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
                                <input type="email" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 transition-colors bg-slate-50" placeholder="john@example.com">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2">Message</label>
                                <textarea rows="4" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-600 focus:border-indigo-600 transition-colors bg-slate-50" placeholder="How can we help you?"></textarea>
                            </div>
                            <button type="button" class="w-full py-4 rounded-xl bg-slate-900 text-white font-medium hover:bg-indigo-600 transition-colors duration-300 shadow-lg shadow-slate-900/20">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 text-slate-400 py-12 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-6 md:mb-0">
                    <span class="text-2xl font-bold text-white heading-font">LUMIÈRE</span>
                    <p class="mt-2 text-sm">Crafting premium digital experiences.</p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-white transition-colors">Instagram</a>
                    <a href="#" class="hover:text-white transition-colors">Twitter</a>
                    <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-white/10 text-sm text-center md:text-left flex flex-col md:flex-row justify-between">
                <p>&copy; {{ date('Y') }} Lumière Agency. All rights reserved.</p>
                <div class="mt-4 md:mt-0 flex space-x-4 justify-center">
                    <a href="#" class="hover:text-white">Privacy Policy</a>
                    <a href="#" class="hover:text-white">Terms of Service</a>
                    <a href="{{ route('login') }}" class="hover:text-indigo-400 font-medium">Admin</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Lightbox Modal -->
    <div x-show="lightboxOpen" class="fixed inset-0 z-[100] flex items-center justify-center bg-black/90 p-4" style="display: none;"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        
        <button @click="lightboxOpen = false" class="absolute top-6 right-6 text-white/50 hover:text-white transition-colors focus:outline-none z-[101]">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        
        <img :src="lightboxImg" @click.away="lightboxOpen = false" class="max-w-full max-h-screen object-contain rounded-sm shadow-2xl" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="scale-95 opacity-0"
             x-transition:enter-end="scale-100 opacity-100">
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            once: true,
            offset: 50,
        });

        // Preloader
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500);
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-md');
                navbar.classList.replace('py-4', 'py-0');
            } else {
                navbar.classList.remove('shadow-md');
            }
        });
    </script>
</body>
</html>
