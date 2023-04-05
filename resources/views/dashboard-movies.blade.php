<x-layout>
    <div class="flex flex-col ites-center w-[50%] gap-5"> 
        @if ($movies)
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
            <h1 class="text-white">Movies</h1>
                <table class="text-sm text-left text-gray-500 dark:text-gray-400 flex w-full">
                    <tbody class="w-full">
                    @foreach ($movies as $movie)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 flex items-center">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <p>{{$movie->title}}</p>
                            </th>
                            <td class="px-6 py-4">
                                <form action="/movies/movie/{{$movie->slug}}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                                </form>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/movies/movie/{{$movie->slug}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif

        @if ($quotes)
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <h1 class="text-white">Quotes</h1>
                <table class="text-sm text-left text-gray-500 dark:text-gray-400 flex w-full">
                    <tbody class='w-full'>
                    @foreach ($quotes as $quote)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 flex items-center">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <p class="break-words">{{$quote->name}}</p>
                                <img src="{{asset('storage/' . $quote->thumbnail)}}" alt="" width="50px"/>
                            </th>
                            <td class="px-6 py-4">
                                <form action="/quotes/quote/{{$quote->slug}}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                                </form>
                            </td>
                            <td class="px-6 py-4">
                                <a href="/quotes/quote/{{$quote->slug}}/edit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    

</x-layout>