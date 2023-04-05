<x-layout>
    <div class="flex flex-col w-[50%]">
        <div class="grid gap-4 grid-cols-1">
            @if ($movie->quotes->count())
                <div class="flex  items-center justify-center flex-col mt-10 mb-10">
                    <div class="block max-w-sm rounded-lg text-white dark:bg-neutral-700 text-black w-full" >
                        <img class="rounded-t-lg shadow-lg w-full"
                            src="{{asset('storage/' . $movie->quotes->first()->thumbnail)}}"
                            alt="" />
                        <div class="p-6">
                    </div>
                    <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200 text-4xl text-white text-center">"{{$movie->quotes->first()->name}}"</p>
                </div>
            @endif 
        <a href="/movies/{{$movie->slug}}" class="underline underline-offset-1 text-center block text-3xl text-white">{{$movie->title}}</a>
        </div>
    </div>
</x-layout>
