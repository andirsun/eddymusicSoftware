<div class="container mt-5 mb-5 shadow p-3 mb-5 bg-white rounded">
    <div clas="row">
        <div class="col ">
            <h2>Reprogramaciones de clase</h2>
            <table class="table table-borderless table-hover table-responsive-sm" id="tableCancelations">
                <thead >
                    <tr>
                        <th>Fecha/hora</th>
                        <th>Estudiante</th>
                        <th>Instrumento</th>
                        <th>Fecha Reprogramacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="trClone1">
                        <th scope="row" id="fecha"></th>
                        <td id="estudiante"></td>
                        <td id="instrumento"></td>
                        <td id="fechaReprogramacion"></td>
                        <td id="acciones">
                            <div class="custom-control custom-switch">
                                <input value="" type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label id="estado" class="custom-control-label" for="customSwitch1"></label>
                            </div>
                            <?php if ($level==0 || $level==4): ?>
                                <button type="button" id="revertir" class="btn btn-danger btn-sm" value=''>
                                    <i class="fas fa-history"></i>
                                </button>
                            <?php endif ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




<script src="<?echo base_url() ?>assets/js/admin/cancelaciones.js?<? echo time_unix(); ?>" type="text/javascript"></script>
<!--Switches, Documentation in https://gitbrent.github.io/bootstrap4-toggle/-->

<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>