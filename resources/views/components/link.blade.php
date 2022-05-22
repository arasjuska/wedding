<a {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-sky-600 border border-transparent rounded text-xs text-white uppercase tracking-widest hover:bg-sky-500 active:bg-sky-700 focus:outline-none focus:bg-sky-700 focus:ring ring-sky-500 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
