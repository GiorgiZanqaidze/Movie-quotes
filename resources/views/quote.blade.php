
<x-layout>
    <body style="font-family: Open Sans, sans-serif">
        <div class="flex justify-center min-h-screen items-center bg-gray-500">
            <div class="block max-w-sm rounded-lg bg-white shadow-lg dark:bg-neutral-700" >
                <a href="#!">
                <img
                    class="rounded-t-lg"
                    src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
                    alt="" />
                </a>
                <div class="p-6">
                <h5
                    class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
                    {{$quote}}
                </h5>
                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                </p>
                    <a href="/quotes/quote">movie name</a>
                </div>
            </div>
        </div>
    </body>
</x-layout>
