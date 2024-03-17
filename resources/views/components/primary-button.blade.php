<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#0E194D] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#0E194D]/70 focus:bg-[#0E194D]/70 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-[#004AAD] focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
