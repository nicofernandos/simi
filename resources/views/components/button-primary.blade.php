<div {{ $attributes->class(['flex', 'justify-end','pr-9'])  }}>
    <div class="text-center h-10 w-20 p-2 rounded-lg text-md border border-slate-400 hover:bg-blue-400 hover:text-white">
        <div class="font-sm font-serif text-center">
            {{ $slot }}
        </div>
    </div>
</div>