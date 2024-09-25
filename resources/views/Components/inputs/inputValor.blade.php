<div class="flex flex-col items-start gap-2 text-[0.8rem] xl:text-[0.6rem] 2xl:text-[0.8rem]">
    <label for="{{$name}}">{{$placeholder}}</label>
    <input
        class="input-valor text-white bg-zinc-800 h-[2.5rem] outline-none rounded-md w-full xl:w-[15rem] 2xl:w-[{{$size}}] p-2"
        type="text"
        name="{{$name}}"
        id="{{$name}}"
        placeholder="{{$placeholder}}"
        value="{{ isset($value) ? $value : '' }}"
    >
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.input-valor').on('input', function() {
        console.log("Teste");

        // Remove caracteres não numéricos
        let value = $(this).val().replace(/[^0-9]/g, '');

        // Converte para formato monetário
        if (value) {
            // Adiciona zeros à esquerda se necessário
            let formattedValue = (parseInt(value) / 100).toFixed(2).replace('.', ',');
            $(this).val(formattedValue);
        } else {
            $(this).val('');
        }

        console.log($(this).val()); // Verifica o valor formatado
    });
});
</script>
