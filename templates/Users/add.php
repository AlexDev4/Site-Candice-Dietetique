<?= $this->layout = 'backoffice'; ?>

<?php $this->assign('title',  ($slider->isNew() ? 'Ajout' : 'Modification') .  ' d\'un slider'); ?>
<?php $baseUrl = '/backoffice/sliders' ?>
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
                    <li class="breadcrumb-item"><a href="<?= $this->Url->build($baseUrl) ?>">Les sliders</a>
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
        <?= $this->Form->create($slider, ['type' => 'file']) ?>
        <div class="tab-content" id="myTabContent">
            <!-- A S S O -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-12 col-lg-6 my-1">
                        <?= $this->Form->control('titre', ['label' => 'Titre', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-12 col-lg-6 my-1">
                        <?= $this->Form->control('sous_titre', ['label' => 'Sous-titre', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-12 col-lg-6 my-1">
                        <?= $this->Form->control('texte_alt', ['label' => 'Balise alt', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-12 col-lg-6 my-1">
                    <div class="form-group">
                        <label for="is_white">Texte blanc</label> <br>
                        <?= $this->Form->control('is_white', ['class' => 'switchery', 'label' => false, 'checked' => $slider->isNew() || $slider->is_white]) ?>
                    </div>
                    </div>
                    <div class="col-12 col-lg-6 my-1">
                        <img src="<?= $this->Url->build($slider->image ?? '/img/profil/profil.png') ?>" alt="" class="img-fluid d-block mx-auto" id="header-preview">
                        <?= $this->Form->control('file_upload', ['type' => 'file',
                            'class' => 'd-none preview',
                            'label' => false,
                            'id' => 'header-image-input',
                            'data-target' => '#header-preview'
                        ]) ?>
                        <label for="header-image-input" class="btn btn-primary mt-2 w-100">
                            <i class="fas fa-upload"></i> Image du slider
                        </label>
                        <span class="text-danger">Taille recommandée: 1024x680px</span>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-end">
                    <div class="form-group">
                        <label for="is_active">Actif ?</label> <br>
                        <?= $this->Form->control('is_active', ['class' => 'switchery', 'label' => false, 'checked' => $slider->isNew() || $slider->is_active]) ?>
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
