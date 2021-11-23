<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/facebook.ico">
    <title>Login</title>
    <style>


        input[name="foto_perfil"]{
            display: none;
        }

        .uploader{
            width: 100px;
            height: 100px;
            border: dashed;
            cursor: pointer;
        }
        body{
            background: #121212;
            font-family: 'Inconsolata', monospace;
            color:white;
        }
        input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: darkred;
            color: #fff;
            font-size: 18px;
            border-radius: 20px;
        }


    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body id="body" class="wrap-login100">
<div class="container">
    <?php
    if(isset($_SESSION["flash"])){    ?>
        <span class="alert alert-danger">
            <?php
            echo $_SESSION["flash"];
            unset($_SESSION["flash"]);
            ?>
        </span>


    <?php    }    ?>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
        </li>
        
    </ul>
    <div class="tab-content" id="myTabContent" >
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form action="/cliente_servidor_1/?controller=Usuarios&action=doLogin" method="POST" id="login">
                <div class="form-group">
                    <label for="">Correo:</label>
                    <input name="correo" type="text"  id="pruebaaa" class="form-control"><br>
                </div>
                <div class="form-group">
                    <label class="label">Password: </label>
                    <input name="password" type="password" class="form-control"><br>
                </div>
                <input type="submit" value="Ingresar" class="btn btn-success" id="ace">
                <a href="Views/create.php">Registrate</a>
            </form>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
       $("#login [type='submit']").on("click", function (e) {
           e.preventDefault();
           //debugger;
           var correo = $("#login input[name='correo']");
           var password = $("#login input[name='password']");

           if(correo.val()==""||password.val()==""){
               alert("Por favor verifica que hayas llenado todos los campos");
               return;
           }
           $("#login").submit();
       })
    });
</script>

</body>
</html>
