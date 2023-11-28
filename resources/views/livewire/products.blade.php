<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        @foreach($products as $product)
        <div>
            <div class=" items-center  mt-4  bg-white rounded-md shadow-xl py-2 px-2">
                <a class="underline text-sm text-gray-700  rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('show.product',$product->id) }}">
                    {{ $product->name }}
                </a>
                <div class="text-gray-900">{{ $product->skuid }}</div>
                <div class="text-gray-900">{{ $product->price }}</div>
            </div>
        </div>
        @endforeach

    </x-authentication-card>
</x-guest-layout>
