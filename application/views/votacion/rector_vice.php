<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
<div class="col-xs-12">
  <div class="box box-success collapsed-box box-solid" >
    <div class="box-header" data-widget="collapse">
      <h3 class="box-title">Computos de Votos Ponderados</h3>
            <div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
</button>
</div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover table-bordered table-striped">
        <thead class="table-header-pers">
            <tr >
              <th rowspan="2" class="text-center table-center">Lista Nro</th>
              <th rowspan="2" class="text-center table-center">Nombre de la lista</th>
              <th colspan="4" class="text-center">Claustros</th>
              <th colspan="2" class="text-center">Totales</th>
            </tr>
            <tr>
              <th class="text-center">Docente</th>
              <th class="text-center">No docente</th>
              <th class="text-center">Estudiantil</th>
              <th class="text-center">Graduados</th>
              <th class="text-center">Votos</th>
              <th class="text-center">%</th>
            </tr>
        </thead>
        <tbody>
        <tr class="text-center">
          <td>1</td>
          <td>Convergencia en la Unidad</td>
          <td>510</td>
          <td>290</td>
          <td>2359</td>
          <td>1732</td>
          <td>4891</td>
          <td>59,32 %</td>
        </tr>
        <tr class="text-center">
          <td>2</td>
          <td>Construcción Plural Universitaria</td>
          <td>357</td>
          <td>166</td>
          <td>1570</td>
          <td>1261</td>
          <td>3354</td>
          <td>40,68 %</td>
        </tr>
         <tr class="text-center table-tr-total-pers">
          <td colspan="3"></td>
          <td >166</td>
          <td>1570</td>
          <td>1261</td>
          <td>3354</td>
          <td>40,68 %</td>
        </tr>
        </tbody>
      </table>              
    </div>


    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
</div>


<div class="col-md-6">

  <!-- DONUT CHART -->
  <div class="box box-danger">
    <div class="box-header with-border">
      <h3 class="box-title">Donut Chart</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <canvas id="pieChart" style="height:250px"></canvas>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->


</div>
        <!-- /.col (LEFT) -->
<div class="col-md-6">
  <!-- LINE CHART -->
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Bar chart</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      <div class="chart">
        <canvas id="barChart" style="height:250px"></canvas>
      </div>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->



</div>


