<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center px-4 py-2 bg-cyan-800 border
    border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-cyan-700
    active:bg-cyan-900 focus:outline-none focus:border-cyan-900 focus:ring ring-gray-300 disabled:opacity-25 transition
    ease-in-out duration-150']) }}>
    {{ $slot }}
</button>