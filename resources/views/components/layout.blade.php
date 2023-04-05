<!doctype html>

<title>Movie Quotes</title>
{{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}
@vite('resources/css/app.css')
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>



<style>
    html {
        scroll-behavior: smooth;
    }

</style>

<body class="bg-gray-500 relative">
    <div class="flex justify-center">
        <aside class="flex flex-col justify-center items-center gap-2 m-4 fixed left-0" style="top: 50%; transform: translateY(-50%)">
            <button class="hover:bg-white hover:text-black text-white font-bold py-2 px-4 border-white border-2 bg-transparent rounded rounded-full p-5">En</button>
            <button class="hover:bg-white hover:text-black text-white font-bold py-2 px-4 border-white border-2 bg-transparent rounded rounded-full">KA</button>
            @auth
                <form action="/logout" method="POST">
                @csrf
                <button class="underline underline-offset-1 text-center block text-3xl text-white">LogOut<button>
            </form>
                <a href="/dashboard" class="underline underline-offset-1 text-center block text-3xl text-white">Dashboard</a>
                @else
                <a href="/login" class="underline underline-offset-1 text-center block text-3xl text-white">Login</a>
            @endauth
            <br>
            <a href="/" class="underline underline-offset-1 text-center block text-3xl text-white">Main Page</a>
        </aside>
        <main class="w-full flex justify-center items-center min-h-screen">
            {{$slot}}
        </main>
    </div>
</body>
