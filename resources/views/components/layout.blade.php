<!doctype html>

<title>Movie Quotes</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>



<style>
    html {
        scroll-behavior: smooth;
    }

</style>

<body class="bg-gray-500">
    <div class="flex">
        <aside class="flex flex-col justify-center gap-2 m-4">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">En</button>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">KA</button>
        </aside>
        <div>
            {{$slot}}
        </div>
    </div>
</body>
