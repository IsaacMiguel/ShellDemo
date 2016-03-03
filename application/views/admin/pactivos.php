        <div class="container">
            <div class="panel panel-success">
              <!-- Default panel contents -->
                <div class="panel-heading">
                    <h1 style="text-align: center;">Sucursal 
                    <img src="<?php echo base_url()?>../uploads/shell-icon.png"> 
                    <?php echo $this->session->userdata('branch')?></h1>
                </div>

                <div class = "panel-body">
                    <!-- </div> -->
                    <div class="row">
                        <div class="col-sm-12">
                                <table class="table table-striped table-hover">
                                    <tbody id="tbodylisto">
                                        <!--<div class="container">-->
                                            <div class="row">
                                                <br>
                                                <div id="contenido">
                                                <?php
                                                    foreach ($data as $d) {
                                                        echo "<div class='col-sm-4'>";
                                                          echo "<div class='panel panel-primary'>";
                                                              echo "<div class='panel-heading'>";
                                                                  echo "<div class='row'>";
                                                                      echo "<div class='col-xs-3'>";
                                                                          echo "<h2><i class='glyphicon glyphicon-print'></i></h2>";
                                                                      echo "</div>";
                                                                      echo "<div class='col-xs-9 text-right'>";
                                                                          echo "<div><h3>Punto " . $d->Punto . "</h3></div>";
                                                                          echo "<div><h4>Letra " . $d->Letra . "</h4></div>";
                                                                          echo "<div><h4>Comprobante " . $d->Comprobante . "</h4></div>";
                                                                          echo "<div><h4>Fecha " . $d->Fecha . "</h4></div>";
                                                                      echo "</div>";
                                                                  echo "</div>";
                                                              echo "</div>";
                                                              echo "<a href='#'>";
                                                                  echo "<div class='panel-footer'>";
                                                                      echo "<span class='pull-left'>Ver Detalles</span>";
                                                                      echo "<span class='pull-right'><i class='glyphicon glyphicon-circle-arrow-right'></i></span>";
                                                                      echo "<div class='clearfix'></div>";
                                                                  echo "</div>";
                                                              echo "</a>";
                                                          echo "</div>";
                                                        echo "</div>";
                                                    }?>
                                                </div>                                
                                            </div> <!-- endrow-->
                                        <!--</div>  endcontainer -->
                                    </tbody>
                                </table>
                        </div><!--div col xs12 -->
                    </div><!--div row -->
                </div>
            </div>
        </div>
    </div>
</div>