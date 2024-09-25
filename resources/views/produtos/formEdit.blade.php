<x-layout>
    <div class="w-full h-full p-8 flex flex-col gap-6">
        <header class="w-full flex justify-between items-center">
            <span class="text-2xl xl:text-xl 2xl:text-2xl font-semibold">Produto - {{$produto->nome}}</span>
        </header>
        <x-produtos.formEdit :categorias="$categorias" :sexo="$sexo" :produto="$produto"/>
        <div class="w-1/2 flex justify-start">
            <div class="w-full flex flex-col gap-2 justify-start">
                <span class="text-xl font-semibold">Grade</span>
                <x-produtos.gradeTable/>
            </div>
        </div>
    </div>
</x-layout>
