<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <!--Css Bootstrap-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--Css FontAwesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Css do app -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <!-- Navbar content -->
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="/img/logo.png" alt="Logo"></a>
                <span class="navbar-text">
                    Você está logado como {{$client}}
                </span>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer>
        <div class="bg-dark">
            <p class="text-center fs-6 light">
                &copy; 2022 Copyright: <a href="mailto:dilsono316@gmail.com">Desenvolvido por: Dilson e André</a>
            </p>
        </div>
    </footer>

    <div class="modal_enroll">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Matrícula</h5>
                    <button type="button" class="btn-close close"></button>
                </div>
                <div class="modal-body">
                    <input class="form-control" type="text" name="" id="" placeholder="Digite sua matrícula">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close">Sair</button>
                    <button type="button" class="btn btn-success" id="send">Enviar</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal_enroll">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Criar nova aula</h5>
                    <button type="button" class="btn-close close"></button>
                </div>
                <form action="/alunos" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label for="id_discipline" class="form-label">Disciplina:</label>
                        <input class="form-control" type="text" name="discipline" id="id_discipline" placeholder="Digite a disciplina do centro" required>
                        <label for="id_datetime" class="form-label">Dia / Hora:</label>
                        <input type="datetime-local" name="time_center" id="id_datetime" class="form-control" required>
                        <label for="id_place" class="form-label">Local:</label>
                        <input class="form-control" type="text" name="place" id="id_place" placeholder="Digite onde vai ocorrer o centro" required>
                        <label for="id_diary" class="form-label">Diários:</label>
                        <input type="file" name="diary" id="id_diary" class="form-control">

                        <div class="radios_format">
                            <input type="radio" name="format" id="id_p" value="Presencial" class="form-check-input" checked>
                            <label for="id_p" class="form-check-label">Presencial</label>
                            <input type="radio" name="format" id="id_o" value="Online" class="form-check-input">
                            <label for="id_o" class="form-check-label">Online</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary close">Sair</button>
                        <input type="submit" class="btn btn-success" value="Enviar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="spinner-border" role="status">
  <span class="visually-hidden">Loading...</span>
</div> -->
    <!--JS do bootstrap-->
    <script src="{{asset('assets/css/bootstrap.bundle.min.js')}}"></script>
    <!--JS do App-->
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>