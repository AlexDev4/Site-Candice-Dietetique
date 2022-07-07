<?= $this->layout = 'backoffice'; ?>
<?php $this->assign('title', 'Créer une tâche'); ?>
<?php $baseUrl = '/backoffice/tasks/' ?>
<?php
$this->append('css');
echo $this->Html->css('/bo/css/extensions/sweetalert2.min.css');
$this->end();
?>



<?php
$this->append('script');
echo $this->Html->script('/bo/js/extensions/sweetalert2.all.min.js');
?>
<?php $this->end(); ?>

<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0"><?= $this->fetch('title') ?></h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $this->Url->build('/backoffice') ?>">Accueil</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?= $this->Url->build($baseUrl) ?>">Listes des tâches</a>
                    </li>
                    <li class="breadcrumb-item active"><?= $this->fetch('title') ?>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <div class="card card-body">
        <div class="d-flex ml-auto">
            <a href="<?= $this->Url->build($baseUrl) ?>" class="btn-icon btn btn-primary btn-round">
                <i class="fas fa-arrow-left"></i> Retour
            </a>
        </div>
        <?= $this->Form->create($task, ['type' => 'file']) ?>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-12 col-lg-6 my-1">
                        <?= $this->Form->control('task', ['label' => 'Tâche', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-12 col-lg-6 my-1">
                        <?= $this->Form->control('due_date', ['label' => 'Echéance', 'class' => 'form-control']) ?>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-end">
                    <div class="form-group">
                        <label for="priority">Priorité</label> <br>
                        <?= $this->Form->input('priority', array(
                            'type' => 'select',
                            'options' => array(
                                '0' => 'Faible',
                                '1' => 'Moyenne',
                                '2' => 'Importante',
                                '3' => 'Urgente',
                            ),
                            'empty' => 'Choisir..',
                        )); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex mt-3 justify-content-end">
            <button type="submit" class="btn btn-primary mr-2">Enregistrer</button>
            <a href="<?= $this->Url->build($baseUrl) ?>" class="btn btn-danger">Retour</a>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>


<?php $this->append('script') ?>
<script type="text/javascript">
    $(document).ready(() => {

    });
</script>
<?php $this->end() ?>