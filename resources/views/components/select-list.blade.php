<div>
    <div wire:ignore class="w-full">
         <select class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border[#004AAD] focus:ring[#004AAD] disabled:opacity-50 disabled:pointer-events-none"  data-placeholder="Select your option" {{ $attributes }}> 
            @if(!isset($attributes['multiple']))
            <option></option>
        @endif
            @foreach($options as $key => $value )
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
         </select> 
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener("livewire:load", () => {
            let el = $('#{{ $attributes['id'] }}')

            function initSelect() {
                el.select2({
                    placeholder: 'Select your option',
                    allowClear: !el.attr('required')
                })
            }

            initSelect()
            Livewire.hook('message.processed', (message, component) => {
                initSelect()
            });
            el.on('change', function (e) {
                let data = $(this).select2("val")
                if (data === "") {
                    data = null
                }
                @this.set('{{ $attributes['wire:model'] }}', data)
            });
        });
    </script>
@endpush
