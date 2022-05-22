<x-back-layout>
    <x-slot name="header">
        <h1 class="text-gray-700 text-2xl">
            {{ __('Users List') }}
        </h1>
        <x-link href="{{ route('dashboard.admin.users.create') }}">
            {{ __('New User') }}
        </x-link>
    </x-slot>

    @if(session('success'))
        <div class="py-2 my-4 bg-green-200 text-center rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex flex-col mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full overflow-hidden sm:rounded-lg border-b border-gray-200">
                <x-table>
                    <x-slot name="head">
                        <tr>
                            <x-table.th>{{ __('ID') }}</x-table.th>
                            <x-table.th>{{ __('Name') }}</x-table.th>
                            <x-table.th>{{ __('Role') }}</x-table.th>
                            <x-table.th></x-table.th>
                        </tr>
                    </x-slot>

                    <x-slot name="body">
                        @foreach($users as $user)
                            <tr>
                                <x-table.td>{{ $user->id }}</x-table.td>
                                <x-table.td>{{ $user->name }}</x-table.td>
                                <x-table.td>
                                    <x-badge>{{ $user->role->name }}</x-badge>
                                </x-table.td>
                                <x-table.td>
                                    <div class="flex justify-end">
                                        <div class="w-4 mr-2 transform hover:text-sky-600 hover:scale-110">
                                            <a href="{{ route('dashboard.admin.users.edit', $user->id ) }}"
                                               class="fa-regular fa-pen-to-square"></a>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-rose-600 hover:scale-110">
                                            <form
                                                action="{{ route('dashboard.admin.users.destroy', $user->id) }}"
                                                method="post"
                                                onsubmit="return confirm('Are you sure?')">
                                                @csrf
                                                @method('delete')
                                                <button type="submit">
                                                    <i class="fa-regular fa-trash-can"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </x-table.td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table>
            </div>
        </div>
    </div>
</x-back-layout>
