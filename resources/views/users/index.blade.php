<x-layout>
    <div class="w-full h-full p-8 flex flex-col gap-6">
        <header class="w-full flex justify-between items-center">
            <span class="text-2xl font-semibold">Usuários</span>
            <x-buttons.buttonPrimary text="Novo Usuário" id="toggleButton" type="button"/>
        </header>
        <x-users.form/>
        <x-users.table :users="$users"/>
    </div>
</x-layout>
