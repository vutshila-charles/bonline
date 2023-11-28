<div>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Generate Auth Toke') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
          <div class="text-white text-center py-4">
                Welcome
          </div>
          <div  class="max-w-md  mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200">
                    <div class="text-white text-center py-4">
                        Generate Auth Token
                    </div>
                    <div class="flex items-center mt-4">
                        <x-button class="ml-4" wire:click='generateAuthToken'>
                            {{ __('Generate') }}
                        </x-button>
                    </div>
                    <div class="text-white">{{ $token }}</div>
                    <div>
                        @if (session()->has('message'))
                        <div class="alert alert-success text-white">
                            {{ session('message') }}
                        </div>
                    @endif
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
</div>

