<form id="form" action="/usuarios" method="POST" class="w-full  justify-start items-center gap-4 hidden">
    @csrf
    <x-inputs.inputText name="name" placeholder="Nome*" size="15rem"/>
    <x-inputs.inputText name="email" placeholder="Email*" size="15rem"/>
    <x-inputs.inputPassword name="password" placeholder="Senha*" size="15rem"/>
    <x-buttons.buttonPrimary text='Salvar' id="salvar" type="submit"/>
    <x-buttons.buttonGray text='Cancelar' id="cancelar" type="button"/>
</form>
<script>
    $("#cancelar").click(function () {
        $("#name").val("");
        $("#email").val("");
        $("#password").val("");

        $("#toggleButton").click();
     })
</script>
