<x-tomato-admin-layout>
    <x-slot:header>
        {{$label}}
    </x-slot:header>
    <x-slot:buttons>
        {{ $buttons ?? '' }}
    </x-slot:buttons>
    <div class="bg-white p-6 rounded-xl border ">
        <x-splade-modal class="font-main">
            <x-slot:title>
                {{$label}}
            </x-slot:title>

            <div class="pt-3">
                {{$slot}}
            </div>
        </x-splade-modal>
    </div>

    @if(isset($body))
        {{$body}}
    @endif
</x-tomato-admin-layout>
