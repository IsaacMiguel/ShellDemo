    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#btnBuscar').click(function (){
                var suc = $('#sucursales').val();
                var fi = $('#fechainicio').val();
                var ff = $('#fechafin').val();

                if (suc == 0) {
                    alert("Debe seleccionar una Sucursal")
                }else{
                    if (fi > ff || fi == '' || ff == '') {
                        alert("Cargue correctamente las fechas!")
                    }else{
                        $.post("<?php echo base_url();?>login/queryOil/" ,
                            {
                                suc : suc,
                                fi : fi,
                                ff: ff
                            }, function(data) {
                                    $('#contenido').html(data);
                                }
                            );
                    }
                }
            });
        });
    </script>
</body>

</html>