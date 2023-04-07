@props(['name'])
@props(['text'])

<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" 
    for="{{$name}}">
    {{$text}}
</label>