<x-layout>
    <div class="">
        <p class="mb-4 text-center block text-3xl text-white pt-4">{{$movie->title}}</p>
        <div class="grid gap-4 grid-cols-1">
        @if ($movie->quotes->count())
            @foreach ($movie->quotes as $quote)
            <div class="flex  items-center justify-center flex-col mt-10 mb-10">
                <div class="block max-w-sm rounded-lg text-white dark:bg-neutral-700 text-black bg-white" >
                    <img class="rounded-t-lg shadow-lg w-full"
                        src="{{asset('storage/' . $movie->thumbnail)}}"
                        alt="" />
                    <div class="p-6">
                </div>
                <p class="mb-4 text-base text-neutral-600 dark:text-neutral-200 text-3xl text-black">{{$quote->name}}</p>
            </div>
            @endforeach
        @else
       <div class="flex items-center justify-center flex-col mt-10 mb-10">
                <div class="block max-w-sm rounded-lg text-white dark:bg-neutral-700 text-black bg-white" >
                    <img class="rounded-t-lg shadow-lg w-full"
                        src="{{asset('storage/' . $movie->thumbnail)}}"
                        alt="" />
                    <div class="p-6">
                </div>
            </div>
        @endif 
        </div>
    </div>
</x-layout>