<div class="modal fade" id="<?php echo e($id); ?>" tabindex="-1" aria-labelledby="<?php echo e($id); ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-top">
        <div class="modal-content bg-body-highlight">
            <div class="modal-header bg-modal-header">
                <h3 class="mb-0" id="add_edit_project_modal_label">
                    <?= get_label('create_project', 'Create project') ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form class="row g-3  px-3 needs-validation form-submit-event" id="add_edit_project_form"
                novalidate="" action="<?php echo e($formAction); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <?php echo e($hiddenInputs); ?>


                <div class="modal-body">

                    <?php echo e($modalbody); ?>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary"
                        data-bs-dismiss="modal"><?= get_label('close', 'Close') ?></label></button>
                    <button type="submit" class="btn btn-primary"
                        id="submit_btn"><?= get_label('save', 'Save Changes') ?></label></button>
                </div>
            </form>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\components\modal.blade.php ENDPATH**/ ?>