<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="display-4">Visualização de Produto</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputProduct">Nome</label>
                        <input type="text" disabled value="{{$product->name}}" require class="form-control" name="name" aria-describedby="Produto" placeholder="Produto">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputQuantity">Quantidade</label>
                        <input type="number" disabled value="{{$product->quantity}}" require class="form-control" name="quantity" placeholder="Quantidade">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputValue">Valor</label>
                        <input type="number" disabled value="{{$product->value}}" require class="form-control" name="value" placeholder="Valor">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="my-textarea">Descrição</label>
                        <textarea id="descricao" disabled class="form-control" name="description" rows="3">{{$product->description}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-left">
                    <a href="{{route('products.index')}}" class="btn btn-danger w-50">Voltar</a>
                </div>
            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>