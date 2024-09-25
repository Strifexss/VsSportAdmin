<div class="overflow-x-auto">
    <table class="w-full bg-zinc-900 text-white rounded-lg shadow-md">
        <thead>
            <tr class="bg-zinc-800 text-gray-300">
                <th class="py-3 px-4 border-b border-gray-600 text-left">Código</th>
                <th class="py-3 px-4 border-b border-gray-600 text-left">Nome</th>
                <th class="py-3 px-4 border-b border-gray-600 text-left hidden md:table-cell">Estoque</th>
                <th class="py-3 px-4 border-b border-gray-600 text-left"></th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach($users as $user)
                <tr class="hover:bg-gray-800" data-id="{{$user->id}}">
                    <td class="py-3 px-4 border-b border-gray-600">{{ $user->id }}</td>
                    <td class="py-3 px-4 border-b border-gray-600">{{ $user->name }}</td>
                    <td class="py-3 px-4 border-b border-gray-600 hidden md:table-cell">{{ $user->email }}</td>
                    <td class="py-3 px-4 border-b border-gray-600 hidden md:table-cell">{{ $user->created_at->format('d/m/Y H:i') }}</td>
                    <td class="py-3 px-4 border-b border-gray-600">
                        <button class="text-red-500 remover">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                    </td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
</div>
<script>
    $(".remover").click(function () {
        Swal.fire({
                title: 'Você tem certeza que deseja excluir esse usuário?',
                text: 'Essa ação não pode ser desfeita!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3b82f6',
                cancelButtonColor: '#9ca3af',
                confirmButtonText: 'Sim',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                const id = $(this).closest("tr").data("id");

                if (result.isConfirmed) {
                    $.ajax({
                        type: "POST",
                        url: `/usuarios/delete/${id}`,
                        success: function (response) {
                            Toastify({
                                text: response.message,
                                duration: 3000,
                                gravity: "top",
                                position: 'center',
                                backgroundColor: response.status ? "green" : "orange",
                                stopOnFocus: true,
                            }).showToast();

                            if(response.status) {
                                setTimeout(() => {
                                    location.reload();
                                }, 1000);
                            }
                        }
                    });
                }
            });
    });

</script>
