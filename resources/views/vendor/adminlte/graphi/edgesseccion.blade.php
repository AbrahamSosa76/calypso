<div class="row min-margin" id="edgeWrapper">
  <div class="col-12 col-sm-12" id="edges">
    <div class="row componentWrapper" id="edge1">
      <div class="col-12 col-sm-12">

        <!-- Encabezado de edge -->
        <div class="row bg-ultradark componentHead">
          <div class="col-sm-1 p-2 flex-column">
            <img src="./img/graphi/rowedge.png">
          </div>
          <div class="col-sm-2 text-center p-2 flex-column">
            Edge
          </div>
          <div class="col-sm-7 text-center input-margin-node">
            <input type="text" id="name" class="form-control" placeholder="Name">
          </div>
          <div class="col-sm-1 text-center p-2 flex-column">
            <img src="./img/graphi/deletebutton.png">
          </div>
          <div class="col-sm-1 text-center p-2 flex-column">
            <img id="hehw4" class="burger" src="./img/graphi/menubutton.png">
          </div>
        </div>
        <!-- /Encabezado de edge -->

        <div class="row componentBody">
          <div class="col-12 col-sm-12">
            <!-- Contenido de edge -->
            @include('adminlte::graphi.edgedataseccion')
            <!-- /Contenido de edge -->

            <!-- Contenido de trigger -->
            @include('adminlte::graphi.triggerseccion')
            <!-- /Contenido de trigger -->
          </div>  
        </div>  
      </div>
    </div>      
  </div>  
</div>