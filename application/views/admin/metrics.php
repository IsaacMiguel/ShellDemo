        <div class="container">
            <div class="panel panel-success">
              <!-- Default panel contents -->
                <div class="panel-heading">
                    <h1 style="text-align: center;">Sucursal 
                    <img src="<?php echo base_url()?>../uploads/shell-icon.png"> 
                    <?php echo $this->session->userdata('branch')?></h1>
                </div>

                <div class = "panel-body">
                    <div class="row" style="padding-left:20%;">
                        <div class="col-sm-12">
                            <div class="col-sm-3">
                                <input class="form-control" type="date" id="fechainicio" name="fechainicio">
                            </div>
                            <div class="col-sm-1">
                                <p><strong>al</strong></p>
                            </div>
                            <div class="col-sm-3">
                                <input class="form-control" type="date" id="fechafin" name="fechafin">     
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary" id="btnGetMetrics"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            </div>
                        </div>
                    </div>

                    <!-- </div> -->
                    <div class="row">
                        <div class="col-sm-12">
                                <table class="table table-striped table-hover">
                                    <tbody id="tbodylisto">
                                        <!--<div class="container">-->
                                            <div class="row">
                                                <br>
                                                <center><div id='fake_users1'></div></center>
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