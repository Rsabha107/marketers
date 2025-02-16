<!-- //****************************************** offcanvasAddEditTask (not used but can be an option.  will add it to config) ******************************************/ */ -->


<div class="offcanvas offcanvas-end offcanvas-global-modal in" id="offcanvas-edit-project-modal" tabindex="-1"
    aria-labelledby="offcanvasWithBackdropLabel">
    <a class="close-task-detail in" id="close-task-detail" style="display: block;" data-bs-dismiss="offcanvas">
        <span><svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true" focusable="false" data-prefix="fa"
                data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"
                data-fa-i2svg="">
                <path fill="currentColor"
                    d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                </path>
            </svg><!-- <i class="fa fa-times"></i> Font Awesome fontawesome.com --></span>
    </a>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-sm-12">
                <form class="row g-3 needs-validation form-submit-event" id="edit_project_form" novalidate=""
                    action="<?php echo e(route('project.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div id="global-edit-project-content"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end offcanvas-global-modal in" id="offcanvas-add-project-modal" tabindex="-1"
    aria-labelledby="offcanvasWithBackdropLabel">
    <a class="close-task-detail in" id="close-task-detail" style="display: block;" data-bs-dismiss="offcanvas">
        <span><svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true" focusable="false" data-prefix="fa"
                data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"
                data-fa-i2svg="">
                <path fill="currentColor"
                    d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                </path>
            </svg><!-- <i class="fa fa-times"></i> Font Awesome fontawesome.com --></span>
    </a>
    <?php if (isset($component)) { $__componentOriginal9c65ea2d124f77fdaebfabcb515fbc50 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c65ea2d124f77fdaebfabcb515fbc50 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.projects.admin-project-drawer','data' => ['id' => '','formAction' => ''.e(route('project.store')).'','functionalareas' => $functional_areas,'tags' => $tags,'projecttype' => $project_type,'eventcategory' => $event_category,'clients' => $clients,'employees' => $employees,'formId' => 'add_project_form']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('projects.admin-project-drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => '','formAction' => ''.e(route('project.store')).'','functionalareas' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($functional_areas),'tags' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tags),'projecttype' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project_type),'eventcategory' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($event_category),'clients' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($clients),'employees' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($employees),'formId' => 'add_project_form']); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9c65ea2d124f77fdaebfabcb515fbc50)): ?>
<?php $attributes = $__attributesOriginal9c65ea2d124f77fdaebfabcb515fbc50; ?>
<?php unset($__attributesOriginal9c65ea2d124f77fdaebfabcb515fbc50); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c65ea2d124f77fdaebfabcb515fbc50)): ?>
<?php $component = $__componentOriginal9c65ea2d124f77fdaebfabcb515fbc50; ?>
<?php unset($__componentOriginal9c65ea2d124f77fdaebfabcb515fbc50); ?>
<?php endif; ?>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add_new_project_type_modal" tabindex="-1"
    aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top">
        <div class="modal-content bg-100">
            <div class="modal-header bg-modal-header">
                <h3 class=" text-white mb-0" id="ModalLabel">Add Memeber</h3>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                        class="fas fa-times fs--1 text-danger"></span></button>
            </div>
            <form class="needs-validation form-submit-event" novalidate=""
                action="<?php echo e(route('projects.admin.project.member.update')); ?>" method="POST" id="project_members">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <div class="modal-body px-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <input type="hidden" id="add_project_member_projectid" name="project_id">
                                <input type="hidden" id="add_project_member_table" name="table" value="project_members_table">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="inputAddress2">Assign to (multiple)</label>
                                    <select required class="form-select js-select-project-member-assign-multiple"
                                        id="add_project_member" name="assignment_to_id[]" multiple="multiple"
                                        data-with="100%" data-placeholder="<?= get_label('Team', 'Team') ?>">
                                        
                                        <?php $__currentLoopData = $emps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>">
                                            <?php echo e($item->full_name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-outline-danger" type="button"
                        data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" id="submit_btn">Save</button>
                </div>
            </form>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views/projects/admin/partials/project_modal.blade.php ENDPATH**/ ?>