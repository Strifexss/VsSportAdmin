
<form action="/produtos/edit" method="post" class="flex flex-col xl:flex-row gap-6">
    @csrf
    <input type="hidden" name="id" id="id" value="{{$produto->id}}">
    <div class="w-full flex-col xl:flex-row flex justify-between gap-6">
        <div class="flex xl:h-auto flex-wrap flex-col  gap-4 xl:flex-row bg-zinc-900 p-4 rounded-md">
            <x-inputs.inputText name="nome" placeholder="Nome*" size="25rem" value="{{$produto->nome}}"/>
            <x-inputs.inputText name="descricao" placeholder="Descrição" size="25rem" value="{{$produto->descricao}}"/>
            <x-inputs.inputValor name="valor" placeholder="Valor" size="10rem" value="{{$produto->valor}}"/>
            <x-inputs.inputSelect name="categoria_id" label="Categoria" size="25rem" :data="$categorias"/>
            <x-inputs.inputSelect name="sexo" label="Sexo" size="25rem" :data="$sexo"/>
            <div class="w-full">
                <div class="w-[2rem]">
                    <x-buttons.buttonPrimary type="submit" id="salvar" text="Salvar"/>
                </div>
            </div>
        </div>
        <div class="xl:w-[10rem] w-full bg-zinc-900 p-4 flex flex-col items-start xl:items-center gap-2 rounded-md">
            <div>
                <span class="font-bold">Configurações</span>
            </div>
            <div class="mb-6 flex flex-col gap-4">
                <x-inputs.inputToggle name="vender" label="Vender" atributos="{{$produto->vender == '1' ? 'checked' : ''}}"/>
                <x-inputs.inputToggle name="controlar_estoque" label="Controlar Estoque" atributos="{{$produto->controlar_estoque == '1' ? 'checked' : ''}}"/>
            </div>
        </div>
    </div>
</form>
