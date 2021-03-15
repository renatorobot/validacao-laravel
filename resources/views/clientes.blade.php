<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}"> 
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
    <body>
    
        <main role="main">
            <div class="row">
                <div class="container col-md-8 offset-md-2 mt-5">
                    <div class="card border">
                        <div class="card-header">
                            <div class="card-title">
                                Cadastro de Cliente
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover" id="tabelaprodutos">
                                <thead>
                                    <th>
                                        Código
                                    </th>
                                    <th>
                                        Nome
                                    </th>
                                    <th>
                                        Endereço
                                    </th>
                                    <th>
                                        Idade
                                    </th>
                                    <th>
                                        E-mail
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $c)
                                        <tr>
                                            <td>
                                                 {{$c->id}}
                                            </td>
                                            <td>
                                                {{$c->nome}}
                                            </td>
                                            <td>
                                                {{$c->endereco}}
                                            </td>
                                            <td>
                                                {{$c->idade}}
                                            </td>
                                            <td>
                                                {{$c->email}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script src="asset('js/app.js')"></script>
    </body>
</html>