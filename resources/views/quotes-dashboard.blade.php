<x-layout>
    @if ($quotes)
        <div class="relative overflow-x-auto sm:rounded-lg">
            <h1 class="text-white text-center text-3xl mb-4">Quotes</h1>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-md">
                <tbody>
                    @foreach ($quotes as $quote)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="{{asset('storage/' . $quote->thumbnail)}}" alt="Jese image">
                                <div class="pl-3">
                                    <div class="text-base font-semibold">{{$quote->name}}</div>
                                </div>  
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
        @else
        <h1 class="text-white">There are no quotes</h1>
    @endif
</x-layout>