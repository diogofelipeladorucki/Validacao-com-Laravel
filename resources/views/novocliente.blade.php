<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="crsf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Cadastro de Cliente</title>
    <style>
        body{
            padding: 20px;
        }
    </style>
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            <h2 class="text-center">Cadastro Cliente</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input class="form-control {{ $errors->has('nome') ? 'is-invalid' : '' }}" 
                                    type="text" name="nome" id="nome">
                                @if ($errors->has('nome'))
                                <div class="invalid-feedback">{{ $errors->first('nome') }}</div>    
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="nome">Idade</label>
                                <input class="form-control {{ $errors->has('idade') ? 'is-invalid' : '' }}" 
                                    type="number" name="idade" id="idade">
                                @if ($errors->has('idade'))
                                <div class="invalid-feedback">{{ $errors->first('idade') }}</div>    
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="nome">Endereço</label>
                                <input class="form-control {{ $errors->has('endereco') ? 'is-invalid' : '' }}" 
                                    type="text" name="endereco" id="endereco">
                                @if ($errors->has('endereco'))
                                <div class="invalid-feedback">{{ $errors->first('endereco') }}</div>    
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="nome">Email</label>
                                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" 
                                type="text" name="email" id="email">
                                @if ($errors->has('email'))
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>    
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary btn-small">Salva</button>
                            <button type="calcel" class="btn btn-primary btn-small">Cancelar</button>

                        </form>
                    </div>
                    {{-- @if ($errors->any())
                    <div class="card-footer">
                        <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                    @endif --}}
                </div>
            </div>  
        </div>
    </main>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>