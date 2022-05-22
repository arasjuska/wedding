<x-back-layout>
    <x-slot name="header">
        <h1 class="text-gray-700 text-2xl">
            {{ __('Add New Role') }}
        </h1>
        <x-link href="{{ route('dashboard.admin.roles.index') }}">
            {{ __('Back') }}
        </x-link>
    </x-slot>

    <div class="flex flex-col mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full overflow-hidden sm:rounded-lg">
                <div class="p-6 bg-gray-100 flex items-center justify-center">
                    <div class="container max-w-screen-lg mx-auto">
                        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                                <div class="text-gray-600">
                                    <p class="font-medium text-lg">{{ __('Add new role to user') }}</p>
                                    <p>{{ __('Please fill out all the fields.') }}</p>
                                </div>

                                <form action="{{ route('dashboard.admin.roles.store') }}" method="post" class="lg:col-span-2">
                                    @csrf
                                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                                        <div class="md:col-span-5">
                                            <label for="name">{{ __('Name') }}</label>
                                            <input type="text" name="name" id="name"
                                                   class="h-10 border mt-1 rounded px-4 w-full bg-gray-50"/>
                                            @error('name')
                                            <div class="my-1">
                                                <span class="text-xs text-red-600">{{ $message }}</span>
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="md:col-span-5 text-right mt-4">
                                            <div class="inline-flex items-end">
                                                <button
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-back-layout>
