    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://rawgit.com/FragCoder/bootstrap-left-slide-menu/master/bootstrap-left-slide-menu.js"></script>

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
                        $.post("<?php echo base_url();?>mailbox/queryMailBox/" ,
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


            $('#btnGetMetrics').click(function () {
                var suc = $('#sucursales').val();
                var fi = $('#fechainicio').val();
                var ff = $('#fechafin').val();

                if (suc == 0) {
                    alert("Debe seleccionar una Sucursal")
                }else{
                    if (fi > ff || fi == '' || ff == '') {
                        alert("Cargue correctamente las fechas!")
                    }else{
                        d3.json('http://opecom.com.ar/index.php/metrics/getMetrics/' + fi + '/' + ff, function (data) {
                            var fuels = [];
                            for (var i = 0; i < data.length; i++) {
                                data[i] = MG.convert.date(data[i], 'date');
                                fuels.push(data[i][0].NomComb);
                            }

                            MG.data_graphic({
                                title: "Metricas",
                                description: "Grafico de consumos de conbustibles en pesos",
                                data: data,
                                width: 620,
                                height: 240,
                                right: 80,
                                target: document.getElementById('fake_users1'),
                                x_accessor: 'date',
                                y_accessor: 'value',
                                legend: fuels
                            });
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>