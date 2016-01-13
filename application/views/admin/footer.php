    <!-- jQuery -->
    <script src="../js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../js/morris-data.js"></script>

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