<body>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/"><img alt="Brand" class="img-responsive" src="/uploads/shell-logo-small.jpg"></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
    <li><a>Sucursal -> <?php echo $this->session->userdata('branch');?></a></li>
      <li><a href="/">Salir</a></li>
      <li>X</li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </nav>

<div id="wrapper">


<div class="proveedor">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Usuario:<h3> <span id="nume">Sergio </span></h3>
        </div>
    </div>
</div>
<div class="container">
    <h1>Venta de Combustibles</h1>
    <hr>
    <div class="panel panel-default">
      <!-- Default panel contents -->
        <div class="panel-heading">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-3">
                        <input class="form-control" type="date" id="fechainicio" name="fechainicio">
                    </div>
                    <div class="col-sm-1">
                        <p style="text-align: center;"><strong>al</strong></p>
                    </div>
                    <div class="col-sm-3">
                        <input class="form-control" type="date" id="fechafin" name="fechafin">     
                    </div>
                    <div class="col-sm-2">
                        <button type="button" class="btn btn-primary" id="btnBuscar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
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


</body>

</html>
