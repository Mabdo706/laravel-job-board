<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Job Board' }}</title>
    <!-- تضمين مكتبة Tailwind CSS مباشرة لضمان ظهور التنسيقات فوراً -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    <!-- شريط العناوين الداكن (Navbar) -->
    <nav class="bg-slate-900 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                
                <div class="flex items-center gap-8">
                    <!-- الشعار (Logo) -->
                    <a href="/" class="flex items-center text-blue-500 font-bold text-xl">
                        <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                    </a>

                    <!-- روابط القائمة ديناميكية -->
                    <div class="flex gap-6 text-sm font-medium">
                        <a href="/" 
                        class="{{ request()->is('/') ? 'text-white font-semibold border-b-2 border-blue-500 pb-1' : 'text-gray-300 hover:text-white transition-colors' }}">
                            Dashboard
                        </a>

                        <a href="/about" 
                        class="{{ request()->is('about') ? 'text-white font-semibold border-b-2 border-blue-500 pb-1' : 'text-gray-300 hover:text-white transition-colors' }}">
                            About
                        </a>

                        <a href="/contact" 
                        class="{{ request()->is('contact') ? 'text-white font-semibold border-b-2 border-blue-500 pb-1' : 'text-gray-300 hover:text-white transition-colors' }}">
                            Contact
                        </a>

                        <a href="/blog" 
                        class="{{ request()->is('blog*') ? 'text-white font-semibold border-b-2 border-blue-500 pb-1' : 'text-gray-300 hover:text-white transition-colors' }}">
                            Blog
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <!-- محتوى الصفحات الفرعية -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>

</body>
</html>