<!-- Parte Superior de formulario -->
<div class="row">
    <!-- Paso x de x -->
    <p class="text-center col-sm-12 col-12 col-md-12 col-lg-12 pasos" >Paso 2 de 3</p>

    <!-- Cuestionario general -->
    <p class="text-center col-sm-12 col-12 col-md-12 col-lg-12 titulo" style="margin-top: -50px;">Capacidades productivas del Sector {{$sector}}</p>
</div>

<!-- Indicadores de seccion de cuestionario-->
<div class="container" style="margin-top: -10px;">
    <div class="row indicadorempresa indicador">
        <div class="col-lg-4 text-center d-none d-xl-block">
            <h6><a id="sistemas2" class="isistemas listo" href="#">1. Sistemas y Componentes</a></h6>
        </div>
        <div class="col-lg-4 text-center">
            <h6 class="fondo"><a id="certificaciones2" class="icertificaciones inactivo" href="#">2. Certificaciones De Calidad</a></h6>
        </div>
        <div class="col-lg-4 text-center d-none d-xl-block">
            <h6><a id="equipo2" class="iequipo inactivo" href="#">3. Equipo y Maquinaria</a></h6>
        </div>
    </div>
</div>

<div class="container linea" style="margin-bottom: 20px; margin-top: 5px;"></div>

<!-- Aqui comienza formulario -->
<div class="offset-sm-1 col-sm-10">

    <h3 class="col-12 col-sm-12 col-md-12 col-lg-12 formato-titulo">Los campos marcados * son obligatorios</h3>

    <label class="col-12 col-sm-12 col-md-12 col-lg-12 formato-subtitulo"><b>Seleccione las certificaciones de calidad que actualmente tiene la empresa.</b></label>

    <div class="certificaciones_calidaddiv container formato">
    
    <div class="form-check col-12 col-sm-12 col-md-12 col-lg-12">
        <label>
            <input type="checkbox" name="certificaciones[]" class="checkcertificaciones form-check-input" value="AS9100"> <span class="label-text">AS9100</span>
        </label>
    </div>
    <div class="form-check col-12 col-sm-12 col-md-12 col-lg-12">
        <label>
            <input type="checkbox" name="certificaciones[]" class="checkcertificaciones form-check-input" value="AS9110"> <span class="label-text">AS9110</span>
        </label>
    </div>
    <div class="form-check col-12 col-sm-12 col-md-12 col-lg-12">
        <label>
            <input type="checkbox" name="certificaciones[]" class="checkcertificaciones form-check-input" value="AS9120"> <span class="label-text">AS9120</span>
        </label>
    </div>
    <div class="form-check col-12 col-sm-12 col-md-12 col-lg-12">
        <label>
            <input type="checkbox" name="certificaciones[]" class="checkcertificaciones form-check-input" value="Nadcap"> <span class="label-text">Nadcap</span>
        </label>
    </div>
    <div class="form-check col-12 col-sm-12 col-md-12 col-lg-12">
        <label>
            <input type="checkbox" name="certificaciones[]" class="checkcertificaciones form-check-input" value="FAA"> <span class="label-text">FAA</span>
        </label>
    </div>
    <div class="form-check col-12 col-sm-12 col-md-12 col-lg-12">
        <label>
            <input type="checkbox" name="certificaciones[]" class="checkcertificaciones form-check-input" value="DGAC"> <span class="label-text">DGAC</span>
        </label>
    </div>
    <div class="form-check col-12 col-sm-12 col-md-12 col-lg-12">
        <label>
            <input type="checkbox" name="certificaciones[]" class="checkcertificaciones form-check-input" value="ITAR"> <span class="label-text">ITAR</span>
        </label>
    </div>
    <div class="form-check col-12 col-sm-12 col-md-12 col-lg-12">
        <label>
            <input type="checkbox" name="certificaciones[]" class="checkcertificaciones form-check-input" value="MIL"> <span class="label-text">MIL</span>
        </label>
    </div>
    </div>
    <!-- Check para agregar otros certificaciones -->
    <div class="certificaciones_calidad container">
    <div class="form-check col-12 col-sm-12 col-md-12 col-lg-12 formato">
        <label>
            <input type="checkbox" class="otras_certificaciones form-check-input" value="Otras_certificaciones"> <span class="label-text">Otras certificaciones</span>
        </label>
    </div>
    <div class="certificacionesdiv d-none col-12 col-sm-12 col-md-12 col-lg-12 row">
        <div class="col-9 col-sm-10 col-md-10 col-lg-6">
            <input type="text" id="certificacionnueva" class="form-control inputp">
            <label class="labelp">* Especifique otra</label>
        </div>
        <div class="col-1 col-sm-2 col-md-2 col-lg-4">
            <button type="button" id="agregarcertificacion" class="btn btn-success addbtn"><b>+</b></button>
        </div>
    </div> 
    </div>

    <label class="col-12 col-sm-12 col-md-12 col-lg-12 formato-subtitulo"><b>Seleccione las pruebas e inspecciones de calidad que actualmente realiza la empresa.</b></label>

    <div class="pruebas_inspecciones container formato">
    
    <div class="form-check col-sm-12">
        <label>
            <input type="checkbox" name="inspecciones[]" class="checkpruebas form-check-input" value="NDT"> <span class="label-text">NDT</span>
        </label>
    </div>
    <div class="form-check col-sm-12">
        <label>
            <input type="checkbox" name="inspecciones[]" class="checkpruebas form-check-input" value="MCL"> <span class="label-text">MCL</span>
        </label>
    </div>
    </div>
    <!-- Check para agregar otras pruebas -->
    <div class="divagregarcer container">
    <div class="form-check col-12 col-sm-12 col-md-12 col-lg-12 formato">
        <label>
            <input type="checkbox" class="otras_pruebas form-check-input" value="Otras_certificaciones"> <span class="label-text">Otras pruebas/inspecciones</span>
        </label>
    </div>
    <div class="pruebasdiv d-none col-12 col-sm-12 col-md-12 col-lg-12 row">
        <div class="col-10 col-sm-10 col-md-10 col-lg-6">
            <input type="text" id="pruebanueva" class="form-control inputp">
            <label class="labelp">* Especifique otra</label>
        </div>
        <div class="col-2 col-sm-2 col-md-2 col-lg-4">
            <button type="button" id="agregarprueba" class="btn btn-success addbtn"><b>+</b></button>
        </div>
    </div> 
    </div>    
</div>

<br>

<button type="button" id="anterior" class="botonprev offset-sm-2 offset-2 col-4 col-sm-4 offset-md-3 col-md-3 col-lg-2 offset-lg-4 btn btn-danger" onclick="location.href='#top'">Anterior</button>

<button type="button" id="siguiente1" class="botonnext col-4 col-sm-4 col-md-3 col-lg-2 btn btn-success" onclick="location.href='#top'">Siguiente</button>

<br><br><br>