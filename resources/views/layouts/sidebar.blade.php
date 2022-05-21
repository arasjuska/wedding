<div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false"
     class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

<div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
     class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center mt-8">
        <div class="flex items-center">
            <i class="fa-solid fa-fire text-2xl text-white"></i>
            <span class="mx-2 text-2xl font-semibold text-white">{{ __('Dashboard') }}</span>
        </div>
    </div>

    <nav class="mt-10">
        <x-sidebar-link href="{{ route('dashboard.') }}"
                        :active="request()->routeIs('dashboard.')">
            <i class="fa-solid fa-chart-pie text-lg"></i>
            <span class="mx-3">{{ __('Dashboard') }}</span>
        </x-sidebar-link>

        @if(auth()->user()->hasRole('admin'))
            <x-sidebar-link href="{{ route('dashboard.admin.roles.index') }}"
                            :active="request()->routeIs('dashboard.admin.roles.index')">
                <i class="fa-solid fa-user-gear text-lg"></i>
                <span class="mx-3">{{ __('Users Roles') }}</span>
            </x-sidebar-link>
        @endif
    </nav>
</div>
