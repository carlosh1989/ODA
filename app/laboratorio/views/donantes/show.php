<div class="panel panel-default">
  
  <ul class="nav nav-tabs">
    <li class="active"><a href="#datos" data-toggle="tab" aria-expanded="true">DATOS</a></li>
    <li class=""><a href="#historia" data-toggle="tab" aria-expanded="false">HISTORIA</a></li>
    <li class=""><a href="#serologia" data-toggle="tab" aria-expanded="false">SEROLOGIA</a></li>
  </ul>
  <div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="datos">
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-4 dl-horizontal">
            <dt>Nombre:</dt>
            <dd><?php echo $donante->nombre_apellido ?></dd>
          </div>
          <div class="col-lg-4 dl-horizontal">
            <dt>Cédula:</dt>
            <dd><?php echo $donante->cedula ?></dd>
          </div>
          <div class="col-lg-4 dl-horizontal">
            <dt>Email:</dt>
            <dd><?php echo $donante->email ?> </dd>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-4 dl-horizontal">
            <dt>Telefono fijo:</dt>
            <dd><?php echo $donante->telefono_fijo ?> </dd>
          </div>
          <div class="col-lg-4 dl-horizontal">
            <dt>Telefono celular:</dt>
            <dd><?php echo $donante->telefono_celular ?> </dd>
          </div>
          <div class="col-lg-4 dl-horizontal">
            <dt>Dirección:</dt>
            <dd><?php echo $donante->direccion ?> </dd>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="historia">
      <p>Historia</p>
    </div>
    <div class="tab-pane fade" id="dropdown1">
      <p>Serologia</p>
    </div>
    <div class="tab-pane fade" id="dropdown2">
      <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
    </div>
  </div>
</div>