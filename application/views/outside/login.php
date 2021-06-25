<div class='auth'>
    <div class='appTitle'>
        FODASoft
    </div>
    <div class='arrow-down'></div>
    <div class='row pestanias'>
        <div class='col-6 pr-0'>
            <button id='btn-seccion-login' class='btn btn-block seccion-activa'>
                Login
            </button>
        </div>
        <div class='col-6 pl-0'>
            <button id='btn-seccion-registro' class='btn btn-block seccion-inactiva'>
                Registro
            </button>
        </div>
    </div>

    <form id='form-auth' formaction='login' data-seccion='ass'>
    </form>

    <div id='panelInfo' class='aling-content-center'>
        <div class="circulo mx-auto">
            <div id='carita' class='icon-volteado'>:)</div>
        </div>
        <div id="mensaje">
            Bienvenido, visitante.
        </div>
    </div>
</div>




<!-- LOGIN -->
<div id='contenedor-login' class='contenedor-oculto'>
    <div class="row">
        <div class='fieldset'>
            <span><i class='fa fa-user'></i></span>
            <input id='txt-l-usuario' placeholder='Usuario' class='input-text' required>
        </div>
    </div>
    <div class="row">
        <div class='fieldset'>
            <span><i class='fas fa-lock'></i></span>
            <input id='txt-l-clave' placeholder='Contraseña' type='password' class='input-text' required>
        </div>
    </div>
    <div class="row">
        <div class='fieldset'>
            <button id='btn-login' class='btn btn-submit' type='submit'>Entrar</button>
            <button id='btn-seccion-recuperar-clave' class='mx-auto text-center'>Recuperar clave</button>
        </div>
    </div>
</div>

<!-- REGISTRO -->
<div id='contenedor-registro' class='contenedor-oculto'>
    <div class="row">
        <div class='fieldset'>
            <span><i class='fa fa-user'></i></span>
            <input id='txt-r-usuario' placeholder='Usuario' class='input-text' required>
        </div>
    </div>
    <div class="row">
        <div class='fieldset'>
            <span><i class='fas fa-at'></i></span>
            <input id='txt-r-email' placeholder='Email' class='input-text' required>
        </div>
    </div>
    <div class="row">
        <div class='fieldset'>
            <span><i class='fas fa-lock'></i></span>
            <input id='txt-r-clave' placeholder='Contraseña' type='password' class='input-text' required>
        </div>
    </div>
    <div class="row">
        <div class='fieldset'>
            <span><i class='fas fa-lock'></i></span>
            <input id='txt-r-rep-clave' placeholder='Repetir contraseña' type='password' class='input-text' required>
        </div>
    </div>
    <div class="row">
        <div class='fieldset'>
            <button id='btn-registro' class='btn btn-submit' type='submit'>Registrar</button>
        </div>
    </div>
</div>

<!-- RECUPERAR CLAVE -->
<div id='contenedor-recuperar-clave' class='contenedor-oculto'>
    <h5 class='text-center'>Recuperar contraseña</h5>
    <p class="text-center">
        Ingrese email para contactarnos con usted.
    </p>
    <div class="row">
        <div class='fieldset'>
            <span><i class='fas fa-at'></i></span>
            <input id='txt-rc-email' placeholder='Email' class='input-text' required>
        </div>
    </div>
    <div class="row">
        <div class='fieldset'>
            <button id='btn-recuperar-clave' class='btn btn-submit' type='submit'>Enviar correo</button>
        </div>
    </div>
</div>