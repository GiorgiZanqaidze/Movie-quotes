
<x-layout>

    <div class="flex min-h-screen items-center justify-center flex-col text-white">
        <div class="block max-w-sm rounded-lg text-white dark:bg-neutral-700" >
            <img class="rounded-t-lg shadow-lg"
                src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg"
                alt="" />
            <div class="p-6">
        </div>
        <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200 text-3xl">Some quick example text to build on the card title and make up the bulk of the card's content.
        </p>
        <a href="/movies/{{$movie->slug}}" class="underline underline-offset-1 text-center block text-3xl">{{$movie->title}}</a>
    </div>
</x-layout>
