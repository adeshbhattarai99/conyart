<div x-data="{ open: false }" class="space-y-6">
    <!-- Clickable Performances title -->
    <button
        @click.prevent="open = !open"
        class="flex w-full items-center justify-between uppercase text-gray-400 hover:text-black transition text-lg focus:outline-none">
        Performances
        <svg class="w-5 h-5 transition-transform duration-300"
             :class="{ 'rotate-180': open }"
             fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    <!-- Dropdown items – appear/disappear on click -->
    <div x-show="open"
         x-transition
         x-cloak
         class="overflow-hidden">
        <div class="ml-8 space-y-4 border-l-2 border-gray-300 pl-6 pt-3">
            @forelse(\App\Models\Performance::orderBy('title')->get() as $perf)
                <a href="{{ route('performances.show', $perf) }}"
                   class="block uppercase text-gray-400 hover:text-black transition text-base tracking-wider">
                    {{ $perf->title }}
                </a>
            @empty
                <span class="block uppercase text-gray-300 text-sm">No performances yet</span>
            @endforelse
        </div>
    </div>
</div>
