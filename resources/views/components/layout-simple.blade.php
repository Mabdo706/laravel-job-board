<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Job Board' }}</title>
    <!-- تضمين مكتبة Tailwind CSS مباشرة لضمان ظهور التنسيقات فوراً -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!-- محتوى الصفحات الفرعية -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        {{ $slot }}
    </main>
</body>
</html>