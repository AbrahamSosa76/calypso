<div class="row" id="nodesWrapper">
  <div class="col-12 col-sm-12" id="nodes">
    <div class="row componentWrapper" id="node1">
      <div class="col-12 col-sm-12" id="">
        <div class="row bg-ultradark componentHead"><!--encabezado de nodo-->
          <div class="col-sm-1 p-2 flex-column">
            <img src="./img/graphi/rownode.png">
          </div>
          <div class="col-sm-2 text-center p-2 flex-column">
            Node
          </div>
          <div class="col-sm-7 text-center input-margin-node flex-column">
            <input type="text" id="nameCurrentElement" class="form-control" placeholder="Name">
          </div>
          <div class="col-sm-1 text-center p-2 flex-column">
            <img src="./img/graphi/deletebutton.png">
          </div>
          <div class="col-sm-1 text-center p-2 flex-column">
            <img id="hehw" class="burger" src="./img/graphi/menubutton.png" >
          </div>
        </div> <!-- /encabezado de nodo -->
        <div class="row componentBody" id="rowNodeId">
          <div class="col-12 col-sm-12">            
            @include('adminlte::graphi.nodedataseccion')
            @include('adminlte::graphi.worksseccion')
          </div>  
        </div> 
      </div>  
    </div> <!--/node1-->
  </div>             
</div>