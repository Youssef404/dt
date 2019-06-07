


    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
        <ul class="pagination pagination-split">
            <li><a href="#">A</a></li>
            <li><a href="#">B</a></li>
            <li><a href="#">C</a></li>
            <li><a href="#">D</a></li>
            <li><a href="#">E</a></li>
            <li>...</li>
            <li><a href="#">W</a></li>
            <li><a href="#">X</a></li>
            <li><a href="#">Y</a></li>
            <li><a href="#">Z</a></li>
        </ul>
    </div>

    <div class="clearfix"></div>

    <?php foreach ($students as $student): ?>
        <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
            <div class="well profile_view">
                <div class="col-sm-12">
                    <h4 class="brief"><i>Id etudiant :<?= $this->Number->format($student->id) ?></i></h4>
                    <div class="left col-xs-7">
                        <h3><?= h($student->first_name) ?> <?= h($student->last_name) ?></h3>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-phone"></i> Phone #: <?= h($student->phone_number) ?> </li>
                            <li><i class="fa  fa-university"></i> Etablissement: <?= $student->has('establishment') ? $this->Html->link($student->establishment->name, ['controller' => 'Establishments', 'action' => 'view', $student->establishment->id]) : '' ?> </li>

                        </ul>
                    </div>
                    <div class="right col-xs-5 text-center">
                        <?= $this->Html->image($student->photo,['class'=>'img-circle img-responsive']) ?>
                    </div>
                </div>
                <div class="col-xs-12 bottom text-center">
                    <div class="col-xs-12 col-sm-6 emphasis">
                        <button type="button" class="btn btn-primary btn-xs" onclick="window.location.href='<?= $this->Url->build(['controller'=>'students','action'=>'view',$student->id]) ?>'">
                            <i class="fa fa-user"> </i>Plus d'infos
                        </button>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>



