<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Product') }}
        </h2>

        <a href="{{ route('admin.inv.index') }}" class="font-semibold text-warning text-xl">Back</a>
    </x-slot>

    <form method="POST" action="{{ route('admin.inv.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama Barang')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
         <!-- Name -->
         <div class="mt-4">
            <x-input-label for="qty" :value="__('Jumlah')" />
            <x-text-input id="qty" class="block mt-1 w-full" type="number" name="qty" required />
            <x-input-error :messages="$errors->get('qty')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="status" :value="__('Status')" />
            <x-text-input id="status" class="block mt-1 w-full" type="text" name="status" :value="old('status')" required autocomplete="status" />
            <x-input-error :messages="$errors->get('status')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="keterangan" :value="__('Keterangan')" />
            <x-text-input id="keterangan" class="block mt-1 w-full" type="text" name="keterangan" :value="old('keterangan')"  autocomplete="keterangan" />
            <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
        </div>


        <div class="mt-4">
            <x-text-input id="tokoid" value="{{ $tokoid }}" hidden type="number" name="tokoid" required />
        </div>

            <x-primary-button class="ml-4">
                {{ __('Tambah') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>