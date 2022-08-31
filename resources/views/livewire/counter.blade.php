<div class="p-16 flex justify-center gap-6 items-center">
    <button wire:click="decrement" class="py-2 px-4 bg-cyan-500 hover:bg-cyan-600 rounded text-white">-</button>
    <span>{{ $count }}</span>
    <button wire:click="increment" class="py-2 px-4 bg-cyan-500 hover:bg-cyan-600 rounded text-white">+</button>
</div>
