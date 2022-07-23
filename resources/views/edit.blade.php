<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    
<div class="container">

<h1 class="text-center">
 Modifier un client 
</h1>
<hr>
<form action="{{  url('update-data/' .$clients->id)  }}" method="POST">

{{ csrf_field() }}


@method('PUT')

<div>
<label for="nom">Nom</label>
<input type="text" class="form-control" name="nom" value="{{$clients->nom}}">
<br>
<label for="prenom">Prénom</label>
<input type="text"  class="form-control" name="prenom" value="{{$clients->prenom}}">
<button type= "submit" class="btn btn-primary">Modifier</button>





</div>

</div>

</form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>