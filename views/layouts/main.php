<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($data['title'] ?? 'Meru Dairy Website'); ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fallback inline styles if Tailwind fails -->
    <style>
        .hidden { display: none; }
        .flex { display: flex; }
        @media (min-width: 768px) {
            .md\\:flex { display: flex; }
            .md\\:hidden { display: none; }
        }
    </style>
    <!-- Google Fonts for Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto', sans-serif; }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header Section -->
    <header class="bg-white text-indigo-800 p-4 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo and Title -->
            <div class="flex items-center">
                <img src="/assets/logo/logo.png" alt="Logo" class="h-12 w-12 mr-2" />
                <h1 class="text-2xl font-bold">MT KENYA MILK</h1>
            </div>

            <!-- Hamburger Menu (Visible on Mobile) -->
            <button id="menu-toggle" class="md:hidden focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Navigation Menu -->
            <nav id="nav-menu" class="hidden md:flex md:items-center space-x-4">
                <!-- Menu Items -->
                <a href="/home" class="hover:text-indigo-600">Home</a>
                <a href="/about" class="hover:text-indigo-600">About Us</a>
                <a href="/products" class="hover:text-indigo-600">Products</a>
                <a href="/contact" class="hover:text-indigo-600">Contact Us</a>
                <a href="/jobs" class="hover:text-indigo-600">Job Opportunities</a>
                <a href="/blog" class="hover:text-indigo-600">Blog</a>
                <a href="/csr" class="hover:text-indigo-600">CSR</a>
                <a href="/birthday" class="hover:text-indigo-600">Birthday Nominations</a>
            </nav>
        </div>

        <!-- Contact Info (Visible on Desktop) -->
        <div class="container mx-auto mt-2 text-sm text-indigo-800 hidden md:block">
            <p>P.O. Box 2919 Meru-Kenya | Email: maziwa@merudairy.co.ke | Phone: 0710 901376</p>
        </div>

        <!-- Mobile Menu (Visible when Hamburger is Clicked) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white text-indigo-800">
            <nav class="flex flex-col space-y-2 p-4">
                <a href="/home" class="hover:text-indigo-600">Home</a>
                <a href="/about" class="hover:text-indigo-600">About Us</a>
                <a href="/products" class="hover:text-indigo-600">Products</a>
                <a href="/contact" class="hover:text-indigo-600">Contact Us</a>
                <a href="/jobs" class="hover:text-indigo-600">Job Opportunities</a>
                <a href="/blog" class="hover:text-indigo-600">Blog</a>
                <a href="/csr" class="hover:text-indigo-600">CSR</a>
                <a href="/birthday" class="hover:text-indigo-600">Birthday Nominations</a>
                <div class="text-sm mt-2">
                    <p>P.O. Box 2919 Meru-Kenya</p>
                    <p>Email: maziwa@merudairy.co.ke</p>
                    <p>Phone: 0710 901376</p>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    {{content}}
    <!-- Hero Carousel (Full Width and 70vh Height) -->


  <!-- Footer Section -->
    <footer class="bg-indigo-800 text-white py-6 mt-4">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- Mount Kenya Milk Column -->
                <div>
                    <h4 class="text-lg font-semibold mb-2">Mount Kenya Milk</h4>
                    <p class="text-sm mb-2">The Cool Mountain Freshness</p>
                    <div class="flex space-x-2">
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Quick Links Column -->
                <div>
                    <h4 class="text-lg font-semibold mb-2">Quick Links</h4>
                    <ul class="space-y-1 text-sm">
                        <li><a href="/home" class="hover:underline">Home</a></li>
                        <li><a href="/about" class="hover:underline">About</a></li>
                        <li><a href="/products" class="hover:underline">Products</a></li>
                        <li><a href="/contact" class="hover:underline">Contact</a></li>
                        <li><a href="/jobs" class="hover:underline">Job Opportunities</a></li>
                        <li><a href="/blog" class="hover:underline">Blog</a></li>
                        <li><a href="/csr" class="hover:underline">CSR</a></li>
                        <li><a href="/birthday" class="hover:underline">Birthday Nominations</a></li>
                    </ul>
                </div>

                <!-- Help & Support Column -->
                <div>
                    <h4 class="text-lg font-semibold mb-2">Help & Support</h4>
                    <ul class="space-y-1 text-sm">
                        <li><a href="/faqs" class="hover:underline">FAQs</a></li>
                        <li><a href="/contact" class="hover:underline">Contact Us</a></li>
                        <li><a href="/terms" class="hover:underline">Terms of Service</a></li>
                        <li><a href="/privacy" class="hover:underline">Privacy Policy</a></li>
                    </ul>
                </div>

                <!-- Newsletter Signup (Inspired by Fairfield Dairy) -->
                <div>
                    <h4 class="text-lg font-semibold mb-2">Newsletter</h4>
                    <p class="text-sm mb-2">Stay updated with our latest news and offers.</p>
                    <form action="/subscribe" method="POST" class="flex flex-col space-y-2">
                        <input type="email" name="email" placeholder="Enter your email" class="p-2 rounded-lg text-indigo-800 focus:outline-none focus:ring-2 focus:ring-indigo-600">
                        <button type="submit" class="bg-white text-indigo-800 py-2 px-4 rounded-lg hover:bg-gray-200">Subscribe</button>
                    </form>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="mt-6 border-t border-gray-500 pt-4 text-center text-xs">
                <p>© <?php echo date('Y'); ?> Mount Kenya Milk. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Hamburger Menu and Counter -->
    <script src="/js/nav.js"></script>
    <script>
        // Counter Animation
        function animateCounter(target, element) {
            let start = 0;
            const end = parseInt(target.dataset.target);
            const duration = 2000; // 2 seconds
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

        // Run counters only on first load or refresh
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
</body>
</html>
