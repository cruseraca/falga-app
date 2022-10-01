<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>KindaCode.com</title>
</head>

<body>
    <div>
        @livewire('components.navbar')
        <div class="h-screen bg-red-600">
            <h1 class="text-4xl text-center p-20">Content</h1>
        </div>
        <footer class="h-96 p-20 bg-red-600">
            <h1 class="text-white text-4xl text-center p-20">Footer</h1>
        </footer>
    </div>
</body>
</html>