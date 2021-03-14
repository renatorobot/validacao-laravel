<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-toker" content="{{csrf_token()}}"> 
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
                            <form action="/cliente" method="POST">
                                <div class="form-group">
                                    <label for="nome">Nome do Cliente</label>
                                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome do cliente">
                                </div>
                                <div class="form-group">
                                    <label for="idade">Idade do Cliente</label>
                                    <input type="number" id="idade" name="idade" class="form-control" placeholder="Idade do cliente">
                                </div>
                                <div class="form-group">
                                    <label for="endereco">Endereço do Cliente</label>
                                    <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço do cliente">
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail do Cliente</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail do cliente">
                                </div>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <script src="asset('js/app.js')"></script>
    </body>
</html>