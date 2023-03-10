<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <!-- <x-application-logo class="block h-12 w-auto" /> -->

    <h1 class="mt-8 text-2xl font-medium text-gray-900 dark:text-white">
        Bienvenidos a la Plataforma de Omega!
    </h1>

    <p class="mt-6 text-gray-500 dark:text-gray-400 leading-relaxed">
        Refrigeración Omega Costa Rica nace en Piedades de Santa Ana, cuando los empresarios Vicente y Humberto Alpízar deciden conformar una empresa dedicada a la fabricación de equipos de refrigeración. Inicialmente se trabajó con operarios capacitados en esta área, quienes junto con los dueños se encargaron de la planeación, diseño y producción de los equipos.
    </p>
</div>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <div class="container mt-5">
        <div class="row">
            <!-- Con esta variable traemos un arreglo con  todos los mensajes de error -->
            <!-- {{$errors}} -->                        
            <div class="col-lg-6 col-12 mx-auto">
                <!-- Si todos los campos están validados, mostramos un mensaje de EXITO -->
                @if(Session::has('success'))
                    <div class="alert alert-success text-center">
                        {{Session::get('success')}}
                    </div>
                @endif            
                <div class="p-5 bg-white rounded shadow-lg">            
                    <form  method="post" action="guardar" novalidate>
                        @csrf
                        <div class="form-group mb-2">
                            <label>Nombre</label>
                            <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre') }}">
                            @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label>Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                        <label>Password</label>
                            <input type="password" class="form-control @error('pass') is-invalid @enderror" name="pass" id="pass" value="{{ old('pass') }}">      
                            @error('pass')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                        <label>Confirmación de Password</label>
                            <input type="password" class="form-control @error('pass_confirmation') is-invalid @enderror" name="pass_confirmation" id="pass_confirmation" value="{{ old('pass_confirmation') }}">        
                            @error('pass_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="d-grid mt-3">
                        <input type="submit" name="send" value="Enviar" class="btn btn-primary btn-lg w-100 shadow-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
