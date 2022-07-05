<!-- Page Content -->
<div class="container">
    <div class="featurette" id="about">
        <h2 class="featurette-heading">Programação</h2>
        <div class="container col-md-12">
            <br>
            <div class="agenda">
                <div class="table-responsive">
                    <table class="table table-condensed table-bordered">
                        <?php if (count($programacao) != 0): ?>
                            <thead>
                                <tr>
                                    <th class="agenda">Data</th>
                                    <th class="agenda">Horário</th>
                                    <th class="agenda">Evento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- DIA DE EVENTO -->
                                <?php
                                foreach ($programacao as $data => $pro) :
                                    /*
                                      Confere se só existe um único evento vazio
                                     *  cadastrado, para que a data sem eventos não 
                                     *  seja exibida
                                     *                                          */
                                    if (!(count($pro) == 1 && $pro[0]->evento == "")):

                                        list ($ano, $mes, $dia) = preg_split('/[-]/', $data);
                                        $diasemana = date('l', strtotime($data));
                                        $diasSemana = array("Sunday" => "Domingo", "Monday" => "Segunda", "Tuesday" => "Terça", "Wednesday" => "Quarta", "Thursday" => "Quinta", "Friday" => "Sexta", "Saturday" => "Sábado");
                                        $mesTexto = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
                                        ?>
                                        <tr>
                                            <td class="agenda-date" class="active" rowspan="<?= sizeof($pro) ?>">
                                                <div class="dayofmonth"><?= $dia ?></div>
                                                <div class="dayofweek"><?= $diasSemana["$diasemana"] ?></div>
                                                <div class="shortdate text-muted"><?= $mesTexto[$mes - 1] . ", " . $ano ?></div>
                                            </td>

                                            <?php foreach ($pro as $event): ?>
                                                <?php if ($event != ""): ?>

                                                    <td class="agenda-time">
                                                        <?= $event->hora; ?>
                                                    </td>
                                                    <td class="agenda-events">
                                                        <div class="agenda-event">
                                                            <?= $event->evento; ?>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                <?php endif; ?>
                                            <?php endforeach; ?>

                                        <?php endif; ?>
                                    <?php endforeach; ?>

                                    <!--FIM - DIA DE EVENTO-->                             
                            </tbody>
                        <?php else: ?>
                            <center><h3>Nenhuma informação encontrada.</h3></center>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>