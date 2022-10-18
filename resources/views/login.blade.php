<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <!--Css Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!--Css do app -->
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <section>
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="/"><img src="img/logo.png" alt="logo" class="text-center"></a>
                        </div>

                        <form action="/professor" method="POST">
                            @csrf
                            <label for="email" class="form-label">Login</label>
                            <input type="email" name="email" id="email" class="form-control my-3 py-2" placeholder="Digite sua matricula" required autocomplete="off">
                            <label for="password" class="form-label">Senha</label>
                            <input type="password" name="password" id="password" class="form-control my-3 py-2" placeholder="Digite sua senha" required autocomplete="off">
                            <div class="text-center mt-3">
                                <input type="submit" class="btn btn-dark" id="btn_validate" value="Acessar">
                                <a href="{{route('student')}}" class="nav-link">Sou aluno</a>
                                <a href="{{route('signup')}}">Sou professor</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>