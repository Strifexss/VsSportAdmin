<x-layout>
    <div class="w-full h-full p-8 flex flex-col gap-6">
        <header class="w-full flex justify-between items-center">
            <span class="text-2xl font-semibold">Grade</span>
            <x-buttons.buttonPrimary text="Nova Grade" id="toggleButton" type="button"/>
        </header>
        <form action="/grade" id="form" method="post" class="w-full flex gap-4 hidden justify-start items-end">
            @csrf
            <x-inputs.inputText name="nome" placeholder="Nome*" size="15rem"/>
            <div class="flex items-center">
                <x-buttons.buttonPrimary type="submit" text="Salvar" id=""/>
            </div>
        </form>
      <x-grades.table :grades="$grades"/>
    </div>

</x-layout>
