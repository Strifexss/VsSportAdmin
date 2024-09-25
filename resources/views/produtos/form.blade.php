<x-layout>
    <div class="w-full h-full p-8 flex flex-col gap-6">
        <header class="w-full flex justify-between items-center">
            <span class="text-2xl xl:text-xl 2xl:text-2xl font-semibold">Cadastro de Produto</span>
        </header>
        <x-produtos.form :categorias="$categorias" :sexo="$sexo"/>
    </div>
</x-layout>
