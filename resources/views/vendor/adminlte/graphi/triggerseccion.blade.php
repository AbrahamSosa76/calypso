<div class="row sortabletriggers" id="triggerWrapper">
  <div class="col-12 col-sm-12 sortabletrigger" id="triggers">
    <div class="row hide-content componentWrapper" id="rowTriggerId">
      <div class="col-12 col-sm-12">

        <!-- Encabezado de Trigger -->
        <div class="row bg-ultradark componentHead">
          <div class="col-sm-1 p-2 flex-column">
            <img src="./img/graphi/rowtrigger.png">
          </div>
          <div class="col-sm-2 text-center p-2 flex-column">
            Trigger
          </div>
          <div class="col-sm-7 text-center input-margin-node">
            <input type="text" id="name" class="form-control" placeholder="Name">
          </div>
          <div class="col-sm-1 text-center p-2 flex-column">
            <img src="./img/graphi/deletebutton.png">
          </div>
          <div class="col-sm-1 text-center p-2 flex-column">
            <img id="hehw3" class="burger" src="./img/graphi/menubutton.png">
          </div>
        </div>
        <!-- /Encabezado de Trigger -->
        
        <!-- Contenido de Edge -->
        <div class="row componentBody">
          <div class="col-12 col-sm-12">
            @include('adminlte::graphi.triggerdataseccion')
          </div>
        </div>
        <!-- /Contenido de Edge -->   
      </div>
    </div>
  </div>  
</div>  