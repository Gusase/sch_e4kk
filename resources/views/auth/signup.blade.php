<x-auth-layout>

  <x-slot:title>
    New User Registration
    </x-slot>

    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 font-main tracking-tight text-gray-900">Welcome to {{
        config('app.name') }}
      </h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm font-headin">
      <form class="space-y-6" action="{{ route('register') }}" method="POST">
        @csrf
        <x-auth.label name="name" type="text"></x-auth.label>

        <x-auth.label name="username" type="text"></x-auth.label>

        <x-auth.label name="email" type="text"></x-auth.label>

        <x-auth.label name="password" type="password"></x-auth.label>

        <x-auth.label name="password_confirmation" type="password"></x-auth.label>

        <div>
          <button type="submit"
            class="flex w-full justify-center rounded-md bg-gray-900 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-800">Register
            Account</button>
        </div>
      </form>

      <p class="mt-10 text-center text-sm text-gray-500">
        Already?
        <a href="{{ route('login') }}"
          class="font-semibold leading-6 text-gray-800 decoration-2 underline-offset-2 hover:underline hover:decoration-blue-700 dark:text-white">Login
          here</a>
      </p>
    </div>
</x-auth-layout>