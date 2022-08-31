<div class="p-6">
    <form wire:submit.prevent="save" class="flex flex-col w-[400px] mx-auto py-16">
        <div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        @if ($image)
            Preview: (НЕ работает из-за неверного пути в превью). Путь <strong>http://lara-livewire.test/livewire/preview-file/aNHjiCi3LT5cXl2KPZ80ZaFC43lgug-metaNV8yLkpQRw==-.jpg</strong> вместо <strong>http://lara-livewire.test/storage/img/aNHjiCi3LT5cXl2KPZ80ZaFC43lgug-metaNV8yLkpQRw==-.jpg</strong>
            <br /><br />
            
            @foreach($image as $im)
                {{ $im->temporaryUrl() }}
            @endforeach

            <div class="flex flex-wrap justify-center gap-6">
                @foreach($image as $im)
                    <img src="{{ $im->temporaryUrl() }}" class="w-[110x] h-[90px] object-cover">
                @endforeach
            </div>
        @endif

        <input type="file" wire:model="image" class="mb-4" multiple>

        @error('image') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class="py-2 px-4 bg-cyan-500 hover:bg-cyan-600 disabled:cursor-not-allowed disabled:bg-opacity-90 text-white">Save</button>
    </form>

    <div class="flex flex-wrap gap-7">
        @foreach($images as $image)
            <img src="{{$image}}" class="w-[128x] h-[120px] object-cover">
        @endforeach
    </div>

</div>