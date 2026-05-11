<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Profile
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="p-6 bg-white shadow sm:rounded-lg">
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    @method('PATCH')

                    <div>
                        <label>Name</label>
                        <input type="text"
                               name="name"
                               value="{{ Auth::user()->name }}"
                               class="border p-2 w-full">
                    </div>

                    <div class="mt-4">
                        <label>Email</label>
                        <input type="email"
                               name="email"
                               value="{{ Auth::user()->email }}"
                               class="border p-2 w-full">
                    </div>

                    <button type="submit"
                            class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">
                        Save
                    </button>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>