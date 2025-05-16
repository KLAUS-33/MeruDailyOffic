<!-- Hero Carousel (Full Width and 80vh Height) -->
<div class="relative w-full h-[80vh] overflow-hidden">
    <!-- Slide 1 -->
    <section class="absolute top-0 left-0 w-full h-full bg-[url('/assets/img/home11.jpg')] bg-cover bg-center text-white text-center flex items-center justify-center opacity-100 transition-opacity duration-1000" data-slide="1">
        <div class="bg-black/50 absolute inset-0 z-0"></div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Welcome to Mount Kenya Milk</h1>
            <p class="text-lg md:text-xl drop-shadow-lg">The Cool Mountain Freshness</p>
            <div class="mt-6 space-x-4">
                <a href="/products" class="bg-indigo-800 text-white py-2 px-4 rounded-full hover:bg-indigo-600 transition duration-300">Shop Now</a>
                <a href="/about" class="bg-white text-indigo-800 py-2 px-4 rounded-full hover:bg-gray-200 transition duration-300">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Slide 2 -->
    <section class="absolute top-0 left-0 w-full h-full bg-[url('/assets/img/home44.jpg')] bg-cover bg-center text-white text-center flex items-center justify-center opacity-0 transition-opacity duration-1000" data-slide="2">
        <div class="bg-black/50 absolute inset-0 z-0"></div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Discover Our Fresh Milk</h1>
            <p class="text-lg md:text-xl drop-shadow-lg">Pure and Natural from Mount Kenya</p>
            <div class="mt-6 space-x-4">
                <a href="/products" class="bg-indigo-800 text-white py-2 px-4 rounded-full hover:bg-indigo-600 transition duration-300">Explore Products</a>
                <a href="/about" class="bg-white text-indigo-800 py-2 px-4 rounded-full hover:bg-gray-200 transition duration-300">Our Story</a>
            </div>
        </div>
    </section>

    <!-- Slide 3 -->
    <!-- <section class="absolute top-0 left-0 w-full h-full bg-[url('/assets/img/home3.png')] bg-cover bg-center text-white text-center flex items-center justify-center opacity-0 transition-opacity duration-1000" data-slide="3">
        <div class="bg-black/50 absolute inset-0 z-0"></div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Join Our Campaign!</h1>
            <p class="text-lg md:text-xl drop-shadow-lg">Win Exciting Prizes with Every Purchase</p>
            <div class="mt-6 space-x-4">
                <a href="/campaigns" class="bg-indigo-800 text-white py-2 px-4 rounded-full hover:bg-indigo-600 transition duration-300">Join Now</a>
                <a href="/products" class="bg-white text-indigo-800 py-2 px-4 rounded-full hover:bg-gray-200 transition duration-300">Shop Now</a>
            </div>
        </div>
    </section> -->

    <!-- Slide 4 -->
    <section class="absolute top-0 left-0 w-full h-full bg-[url('/assets/img/home22.jpg')] bg-cover bg-center text-white text-center flex items-center justify-center opacity-0 transition-opacity duration-1000" data-slide="4">
        <div class="bg-black/50 absolute inset-0 z-0"></div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Support Local Farmers</h1>
            <p class="text-lg md:text-xl drop-shadow-lg">Empowering Communities with Every Sip</p>
            <div class="mt-6 space-x-4">
                <a href="/csr" class="bg-indigo-800 text-white py-2 px-4 rounded-full hover:bg-indigo-600 transition duration-300">Our Impact</a>
                <a href="/products" class="bg-white text-indigo-800 py-2 px-4 rounded-full hover:bg-gray-200 transition duration-300">Shop Now</a>
            </div>
        </div>
    </section>

    <!-- Navigation Arrows -->
    <button class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-indigo-800 text-white p-2 rounded-full opacity-75 hover:opacity-100 transition-opacity" id="prev-slide">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
    </button>
    <button class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-indigo-800 text-white p-2 rounded-full opacity-75 hover:opacity-100 transition-opacity" id="next-slide">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
    </button>
</div>

<!-- Product Showcase Section -->
<section class="bg-white py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-indigo-800 text-center mb-6">Featured Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Fresh Milk -->
            <div class="text-center">
                <div class="bg-indigo-800 text-white p-4 rounded-t-lg">
                    <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <div class="bg-gray-50 p-4 rounded-b-lg">
                    <h3 class="text-lg font-semibold text-indigo-800">Mount Kenya Fresh Milk</h3>
                    <p class="text-sm text-gray-600 mt-2">Rich in calcium and vitamins, our milk is perfect for a healthy start to your day.</p>
                    <a href="/products#fresh-milk" class="text-indigo-600 hover:underline mt-2 inline-block">→ Learn More</a>
                </div>
            </div>
            <!-- Yoghurt -->
            <div class="text-center">
                <div class="bg-indigo-800 text-white p-4 rounded-t-lg">
                    <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v4m0 0v4a2 2 0 01-2 2H8m4-6h4m-4 0l4 4"></path>
                    </svg>
                </div>
                <div class="bg-gray-50 p-4 rounded-b-lg">
                    <h3 class="text-lg font-semibold text-indigo-800">Mount Kenya Yoghurt</h3>
                    <p class="text-sm text-gray-600 mt-2">Probiotic-rich, available in Strawberry and Vanilla flavors for a tasty treat.</p>
                    <a href="/products#yoghurt" class="text-indigo-600 hover:underline mt-2 inline-block">→ Learn More</a>
                </div>
            </div>
            <!-- Lala -->
            <div class="text-center">
                <div class="bg-indigo-800 text-white p-4 rounded-t-lg">
                    <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v6m-4 2h8m-8 0a4 4 0 008 0 4 4 0 00-8 0zm4 4v6"></path>
                    </svg>
                </div>
                <div class="bg-gray-50 p-4 rounded-b-lg">
                    <h3 class="text-lg font-semibold text-indigo-800">Mount Kenya Lala</h3>
                    <p class="text-sm text-gray-600 mt-2">A traditional fermented milk drink, packed with gut-friendly bacteria.</p>
                    <a href="/products#lala" class="text-indigo-600 hover:underline mt-2 inline-block">→ Learn More</a>
                </div>
            </div>
            <!-- Ghee -->
            <div class="text-center">
                <div class="bg-indigo-800 text-white p-4 rounded-t-lg">
                    <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5h8a2 2 0 012 2v10a2 2 0 01-2 2H8a2 2 0 01-2-2V7a2 2 0 012-2zm4 12l4-4"></path>
                    </svg>
                </div>
                <div class="bg-gray-50 p-4 rounded-b-lg">
                    <h3 class="text-lg font-semibold text-indigo-800">Mount Kenya Ghee</h3>
                    <p class="text-sm text-gray-600 mt-2">Pure ghee, ideal for cooking, with a rich aroma and healthy fats.</p>
                    <a href="/products#ghee" class="text-indigo-600 hover:underline mt-2 inline-block">→ Learn More</a>
                </div>
            </div>
        </div>

        <!-- Call-to-Action Section -->
        <div class="mt-8 bg-indigo-800 text-white text-center py-6 rounded-lg">
            <h2 class="text-2xl font-bold">PROVIDING KENYA WITH THE BEST MILK PRODUCTS FOR A HEALTHY LIFE</h2>
            <div class="mt-4 space-x-4">
                <a href="/about" class="bg-white text-indigo-800 py-2 px-4 rounded-full hover:bg-gray-200 transition duration-300">Learn More</a>
                <a href="/products" class="bg-white text-indigo-800 py-2 px-4 rounded-full hover:bg-gray-200 transition duration-300">Our Products</a>
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="mt-8">
            <h2 class="text-2xl font-bold text-indigo-800 text-center mb-6">Why Choose Mount Kenya Milk?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Pure & Natural -->
                <div class="text-center">
                    <div class="flex justify-center">
                        <svg class="w-12 h-12 text-indigo-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-indigo-800 mt-4">Pure & Natural</h3>
                    <p class="text-sm text-gray-600 mt-2">Our dairy products are sourced from the pristine slopes of Mount Kenya, ensuring 100% natural taste and nutrition.</p>
                </div>
                <!-- Farmer Support -->
                <div class="text-center">
                    <div class="flex justify-center">
                        <svg class="w-12 h-12 text-indigo-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.515-2.375.91-2.923a10.416 10.416 0 013.276-2.241 4 4 0 10-5.186 6.528z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-indigo-800 mt-4">Farmer Support</h3>
                    <p class="text-sm text-gray-600 mt-2">We empower local farmers by offering fair prices and sustainable practices for a thriving community.</p>
                </div>
                <!-- Trusted Quality -->
                <div class="text-center">
                    <div class="flex justify-center">
                        <svg class="w-12 h-12 text-indigo-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-indigo-800 mt-4">Trusted Quality</h3>
                    <p class="text-sm text-gray-600 mt-2">Our products undergo strict quality checks to ensure you get the best dairy experience.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Farmer Stories Section -->
<section class="bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-indigo-800 text-center mb-6">Supporting Our Farmers</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-indigo-800">Empowering Local Communities</h3>
                <p class="text-sm text-gray-600 mt-2">At Mount Kenya Milk, we work closely with over 1,200,000 farmers across Kenya, providing training and fair pricing to ensure sustainable livelihoods.</p>
                <a href="/csr" class="text-indigo-600 hover:underline mt-2 inline-block">Read More →</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-indigo-800">Farmer Spotlight: John from Meru</h3>
                <p class="text-sm text-gray-600 mt-2">"Thanks to Mount Kenya Milk, I’ve been able to expand my farm and provide for my family. Their support has been life-changing!"</p>
                <a href="/blog/farmer-stories" class="text-indigo-600 hover:underline mt-2 inline-block">More Stories →</a>
            </div>
        </div>
    </div>
</section>

<!-- Quality Assurance Section -->
<section class="bg-white py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-indigo-800 text-center mb-6">Our Commitment to Quality</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="text-center">
                <div class="flex justify-center">
                    <svg class="w-12 h-12 text-indigo-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-indigo-800 mt-4">Certified by KEBS</h3>
                <p class="text-sm text-gray-600 mt-2">All our products meet the stringent standards of the Kenya Bureau of Standards (KEBS).</p>
            </div>
            <div class="text-center">
                <div class="flex justify-center">
                    <svg class="w-12 h-12 text-indigo-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-indigo-800 mt-4">Freshness Guaranteed</h3>
                <p class="text-sm text-gray-600 mt-2">From farm to table in less than 24 hours, ensuring maximum freshness.</p>
            </div>
            <div class="text-center">
                <div class="flex justify-center">
                    <svg class="w-12 h-12 text-indigo-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-indigo-800 mt-4">Award-Winning Quality</h3>
                <p class="text-sm text-gray-600 mt-2">Proud recipients of the 2024 Kenya Dairy Excellence Award.</p>
            </div>
        </div>
    </div>
</section>

<!-- Recent News and Promotions Section -->
<section class="bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-indigo-800 text-center mb-6">Latest News & Promotions</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-indigo-800">New Vanilla Yoghurt Launch!</h3>
                <p class="text-sm text-gray-600 mt-2">Try our new Vanilla Yoghurt, now available in stores nationwide!</p>
                <a href="/blog/new-vanilla-yoghurt" class="text-indigo-600 hover:underline mt-2 inline-block">Read More →</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-indigo-800">Win a Trip to Mount Kenya!</h3>
                <p class="text-sm text-gray-600 mt-2">Buy any Mount Kenya Milk product and enter our raffle to win an all-expenses-paid trip!</p>
                <a href="/campaigns/mount-kenya-trip" class="text-indigo-600 hover:underline mt-2 inline-block">Join Now →</a>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold text-indigo-800">Milk for Schools Program</h3>
                <p class="text-sm text-gray-600 mt-2">We’re donating milk to schools in Meru to support children’s nutrition.</p>
                <a href="/csr/milk-for-schools" class="text-indigo-600 hover:underline mt-2 inline-block">Learn More →</a>
            </div>
        </div>
    </div>
</section>

<!-- What Customers Are Saying About Us Section -->
<section class="bg-white py-8 mt-4">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-indigo-800 text-center mb-6">What Customers Are Saying About Us</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Testimonial 1 -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <p class="text-sm text-gray-700 italic">"The best milk product ever! I love the way it feels in my mouth. It is 100% natural, and all my customers always demand Mount Kenya Milk."</p>
                <p class="mt-4 text-right font-semibold text-indigo-600">— Jane M., Nairobi</p>
            </div>
            <!-- Testimonial 2 -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <p class="text-sm text-gray-700 italic">"Mount Kenya Milk is the best brand ever! I always choose it for its quality and taste."</p>
                <p class="mt-4 text-right font-semibold text-indigo-600">— Samuel K., Meru</p>
            </div>
            <!-- Testimonial 3 -->
            <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                <p class="text-sm text-gray-700 italic">"I appreciate that Mount Kenya Milk supports farmers by paying them better. It’s a brand I trust for my family."</p>
                <p class="mt-4 text-right font-semibold text-indigo-600">— Esther W., Embu</p>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="bg-indigo-800 py-8 mt-4">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-center text-white">
            <!-- Farmers -->
            <div>
                <svg class="w-12 h-12 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.515-2.375.91-2.923a10.416 10.416 0 013.276-2.241 4 4 0 10-5.186 6.528z"></path>
                </svg>
                <p class="text-3xl font-bold mt-2" data-target="1200000">0</p>
                <p class="text-sm mt-1">Our Farmers</p>
            </div>
            <!-- Cooperative Societies -->
            <div>
                <svg class="w-12 h-12 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <p class="text-3xl font-bold mt-2" data-target="120">0</p>
                <p class="text-sm mt-1">Cooperative Societies</p>
            </div>
            <!-- Litres Processed -->
            <div>
                <svg class="w-12 h-12 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                </svg>
                <p class="text-3xl font-bold mt-2" data-target="6000000">0</p>
                <p class="text-sm mt-1">Litres of Milk Processed per Day</p>
            </div>
            <!-- Customers Served -->
            <div>
                <svg class="w-12 h-12 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
                <p class="text-3xl font-bold mt-2" data-target="1000000000">0</p>
                <p class="text-sm mt-1">Customers Served</p>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for Carousel -->
<script>
    const slides = document.querySelectorAll('[data-slide]');
    const prevSlideBtn = document.getElementById('prev-slide');
    const nextSlideBtn = document.getElementById('next-slide');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('opacity-100', i === index);
            slide.classList.toggle('opacity-0', i !== index);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    function prevSlide() {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    }

    // Initial display
    showSlide(currentSlide);

    // Auto transition every 5 seconds
    let autoSlide = setInterval(nextSlide, 5000);

    // Manual navigation
    nextSlideBtn.addEventListener('click', () => {
        clearInterval(autoSlide); // Stop auto-slide on manual navigation
        nextSlide();
        autoSlide = setInterval(nextSlide, 5000); // Restart auto-slide
    });

    prevSlideBtn.addEventListener('click', () => {
        clearInterval(autoSlide); // Stop auto-slide on manual navigation
        prevSlide();
        autoSlide = setInterval(nextSlide, 5000); // Restart auto-slide
    });

    // Counter Animation (for Statistics Section)
    function animateCounter(target, element) {
        let start = 0;
        const end = parseInt(target.dataset.target);
        const duration = 2000;
        const stepTime = Math.abs(Math.floor(duration / end));
        const timer = setInterval(() => {
            start += 1;
            element.textContent = start.toLocaleString();
            if (start >= end) {
                element.textContent = target.dataset.target + '+';
                clearInterval(timer);
            }
        }, stepTime);
    }

    if (!sessionStorage.getItem('countersRun')) {
        document.querySelectorAll('[data-target]').forEach(target => {
            animateCounter(target, target);
        });
        sessionStorage.setItem('countersRun', 'true');
    } else {
        document.querySelectorAll('[data-target]').forEach(target => {
            target.textContent = target.dataset.target + '+';
        });
    }
</script>