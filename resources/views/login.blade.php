<x-panel>
    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
        {{__('forms.sign_in')}}
    </h1>
    <form class="space-y-4 md:space-y-6" method="POST" action="/login">
        @csrf
        <x-form.input type="email" name="email" placeholder="example@gmail.com" label="{{__('forms.your_email')}}">{{old('email')}}</x-form-input>
        <x-form.input type="password" name="password" placeholder="••••••••" label="{{__('forms.your_password')}}"></x-form-input>
        <x-form.button>{{__('navigate-text.login')}}</x-form.button>
    </form>
</x-panel>