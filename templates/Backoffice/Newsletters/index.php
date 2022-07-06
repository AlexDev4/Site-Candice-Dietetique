<?= $this->layout = 'backoffice'; ?>
<?php $this->assign('title', 'Liste des inscrits à la newsletter'); ?>
<?php $baseUrl = '/backoffice/newsletters' ?>
<?php
$this->append('css');
echo $this->Html->css('/bo/css/extensions/sweetalert2.min.css');
$this->end();
?>





<?= $this->element('backoffice/modal-delete') ?>
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title mb-0"><?= $this->fetch('title') ?></h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $this->Url->build('/backoffice') ?>">Accueil</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?= $this->Url->build($baseUrl) ?>">Newsletter</a>
                    </li>
                    <li class="breadcrumb-item active"><?= $this->fetch('title') ?>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <section class="users-list-wrapper ">
        <div class="users-list-table">
            <div class="row card">
                <div class="col-12">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive btn-export">
                                <table class="data-table">
                                    <thead>
                                        <tr>
                                            <td class="d-none">Ordre</td>
                                            <td>Adresse(s) email(s)</td>
                                            <td>Actions</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($newsletters as $newsletter) : ?>
                                            <tr>
                                                <td class="d-none">
                                                    <?= $newsletter->id ?>
                                                </td>
                                                <td>
                                                    <a href="mailto:<?= $newsletter->mail ?>"><?= $newsletter->mail ?></a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger btn-delete" href="<?= $this->Url->build($baseUrl . '/delete/' . $newsletter->id) ?>">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->append('script') ?>



<script type="text/javascript">
    $(document).ready(function() {
        datatableConfig.dom = 'Bfrtip';
        datatableConfig.buttons = [{
                extend: 'csv',
                exportOptions: {
                    columns: [1],
                }
            },
            {
                extend: 'excel',
                exportOptions: {
                    columns: [1],
                }
            }
        ]
        $('table').dataTable(datatableConfig);
        $('.btn-delete').on('click', function(e) {
            e.preventDefault();
            $('#modal-delete').find('.btn-danger').attr('href', $(this).data('href'));
            $('#modal-delete').modal('show');
        });

        $('.btn-view').on('click', function(e) {
            e.preventDefault();
            const modal = $('#modal-contact');
            modal.find('.modal-body').html(getSpinner('dark'));
            modal.modal('show');
            const that = this;
            $.get($(this).data('url'), (res) => {
                if (res.code !== 200) {
                    toastr['error']('Une erreur s\'est produite.');
                    modal.modal('hide');
                    return true;
                }

                $(that).closest('tr').removeClass('unread');
                modal.find('.modal-body').html(`<p>${res.contact.message}</p>`);
            });
        });
    });
</script>
<?php $this->end() ?>