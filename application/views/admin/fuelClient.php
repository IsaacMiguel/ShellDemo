        <div class="container">
            <div class="panel panel-success">
              <!-- Default panel contents -->
                <div class="panel-heading">
                    <h1 style="text-align: center;">Sucursal 
                    <img src="<?php echo base_url()?>../uploads/shell-icon.png"> 
                    <?php echo $this->session->userdata('branch')?></h1>
                </div>

                <div class = "panel-body">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                        		<div class="row">
                        				<div class="col-sm-4">
                        						<center><label for="client">Buscar Cliente por nombre: </label></center>
                        				</div>
                        				<div class="col-sm-4">
                        						<input class="form-control" id="client" name="client">
                        				</div>
                        				<div class="col-sm-4">
                        						<button class="form-control btn btn-primary" id="bClient">BUSCAR</button>
                        				</div>
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
                                                <div id="contenido">
                                                    
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