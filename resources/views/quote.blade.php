<x-layout>
    <div class="flex min-h-screen items-center justify-center flex-col text-white">
        <div class="block max-w-sm rounded-lg text-white dark:bg-neutral-700" >
            @if ($movie->quotes->count())
                <img class="rounded-t-lg shadow-lg w-full"
                    src="{{asset('storage/' . $movie->quotes->first()->thumbnail)}}"
                    alt="" />
                <div class="p-6">
                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200 text-3xl text-white">{{$movie->quotes->first()->name}}</p>
                 @else
                <a href="/movies/{{$movie->slug}}" class="underline underline-offset-1 text-center block text-3xl">{{$movie->title}}</a>
            @endif
        </div>
    </div>
</x-layout>
