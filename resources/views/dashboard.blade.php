<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Contatos') }}
        </h2>
    </x-slot>

    <livewire:contacts-form></livewire:contacts-form>

    <livewire:contacts-table></livewire:contacts-table>

</x-app-layout>
