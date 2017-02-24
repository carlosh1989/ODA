<div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">paginacion</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          Vista <b>paginacion</b> del mudulo <b>login</b>
          <hr>
          <ul>
          <?php foreach (Arr::paginator($tareas) as $tarea): ?>
              <li>
                <h1><?php echo $tarea->titulo ?></h1> 
                <p><?php echo $tarea->body ?></p>
              </li>
          <?php endforeach ?>
          </ul>
          <hr>
          <div class="container">
            <?php foreach (Arr::infiniteScroll($tareas) as $tarea): ?>
              <div class="item">
                <h1><?php echo $tarea->titulo ?></h1> 
                <p><?php echo $tarea->body ?></p>
              </div>
            <?php endforeach ?>
            <br><br>
            <?php echo Arr::infiniteScroll($tareas) ?>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
</div>
