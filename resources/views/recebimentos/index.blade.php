@extends('adminlte::page')
@section('title', 'Recebimentos')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-donate"></i> Recebimentos
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
        Listagem de Recebimentos
        </h3>
    </div>

    <div class="card-body">
        @if(session()->has('mensagem'))
            <div class="alert alert-success">
                {{ session()->get('mensagem') }}
            </div>
        @endif

        <a href="/recebimentos/create" class="btn btn-warning mb-5">Novo recebimento</a>

        <table class="table table-striped">
            <thead class="alert-warning">
                <tr>
                <th>Ações</th>
                    <th>Cliente</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Data Recebimento</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($recebimentos as $recebimento)
                    <tr>
                        <td>
                            <a href="/recebimentos/edit/{{ $recebimento->id }}"><i class="fas fa-edit icone-action"></i></a>
                            <form action="/recebimentos/{{ $recebimento->id }}" class="d-inline-block" method="POST" onSubmit="confirmarExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button class="btn "><i class="fas fa-trash-alt icone-action"></i></button>
                            </form>
                        </td>
                        <td>{{ $recebimento->cliente }}</td>
                        <td>{{ $recebimento->descricao }}</td>
                        <td>{{ $recebimento->valor_recebimento }}</td>
                        <td>{{ $recebimento->data_recebimento }}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js" integrity="sha512-mVkLPLQVfOWLRlC2ZJuyX5+0XrTlbW2cyAwyqgPkLGxhoaHNSWesYMlcUjX8X+k45YB8q90s88O7sos86636NQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    function confirmarExclusao(event) {
        event.preventDefault();
        swal({
            title: "Você tem certeza que deseja excluir o registro de recebimento?",
            icon: "warning",
            dangerMode: true,
            buttons: {
                cancel: "Cancelar",
                catch: {
                    text: "Excluir",
                    value: true,
                },
            }
        })
        .then((willDelete) => {
            if (willDelete) {
                event.target.submit();
            } else {
                return false;
            }
        });
    }

</script>
</body>
<style>
.icone-action{
        color: #3498db
    }
</style>
</html>
