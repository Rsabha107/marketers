<script src="<?php echo e(asset('fnx/assets/js/phoenix.js')); ?>"></script>

<input type="hidden" name="table" value="item_master_table" />
<input type="hidden" id="edit_item_id" name="id" value="<?php echo e($item_master->id); ?>">
<div>

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <div class="ms-3">
            <h5 class="mb-0 fs-sm">Add Product</h5>
        </div>
    </div>
    <div class="card-body">

        <div class="row mb-3">
            <div class="col-sm-6 col-md-6 mb-3">
                <div class="form-floating">
                    <input class="form-control" 
                            name="item_name" 
                            id="edit_item_name" 
                            type="text"
                            placeholder="Product Name" 
                            value="<?php echo e($item_master->item_name); ?>" 
                            required />
                    <div class="invalid-feedback">
                        Please enter Product Name.
                    </div>
                    <label for="edit_item_name">Product Name <span class="red">*</span></label>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 mb-3">
                <div class="form-floating">
                    <input  class="form-control" 
                            name="SKU" 
                            id="edit_item_sku" 
                            type="text"
                            value="<?php echo e($item_master->sku); ?>"
                            placeholder="SKU" />
                    <div class="invalid-feedback">
                        Please enter SKU.
                    </div>
                    <label for="edit_item_sku">SKU</label>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6 col-md-6  mb-3">
                <div class="input-group">
                    <div class="form-floating">
                        <select name="item_category_id" class="form-select"
                            id="edit_item_category_id">
                            <option selected="selected" value="">Select...</option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>" 
                                    <?php echo e($item_master->item_category_id == $item->id ? 'selected' : null); ?>>
                                    <?php echo e($item->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label for="edit_item_category_id">Category</label>
                    </div>
                    <div class="invalid-feedback">
                        Please select Sub Category.
                    </div>
                    <button type="button" class="btn btn-phoenix-primary px-3"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-plus-circle text-success"></i>
                    </button>
                </div>
            </div>
            <div class="col-sm-6 col-md-6  mb-3">
                <div class="input-group">
                    <div class="form-floating ">
                        <select name="item_subcategory_id" class="form-select"
                            id="edit_item_subcategory_id">
                            <option selected="selected" value="">Select...</option>
                            <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>"
                                    <?php echo e($item_master->item_subcategory_id == $item->id ? 'selected' : null); ?>>
                                    <?php echo e($item->name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label for="item_subcategory_id">Sub Category</label>
                    </div>
                    <div class="invalid-feedback">
                        Please select Sub Category.
                    </div>
                    <button type="button" class="btn btn-phoenix-primary px-3"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-plus-circle text-success"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select name="unit_type_id" class="form-select" id="edit_unit_type_id">
                        <option selected="selected" value="">Select...</option>
                        <?php $__currentLoopData = $unittypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"
                                <?php echo e($item_master->unit_type_id == $item->id ? 'selected' : null); ?>>
                                <?php echo e($item->title); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <label for="edit_unit_type_id">Unit Type</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-group">
                    <input class="form-control" name="course_image" type="file" id="image">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 image-display">
                <img id="showImage" src="<?php echo e(url('upload/no_image.jpg')); ?>" alt="Admin"
                    class="rounded-circle p-1 bg-primary" width="100">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-6 col-md-6 mb-3">
                <div class="form-floating">
                    <input class="form-control" 
                            name="item_price" 
                            id="add_item_price"
                            type="text" 
                            value="<?php echo e($item_master->item_price); ?>"
                            placeholder="Selling Price" 
                            required />
                    <div class="invalid-feedback">
                        Please enter Selling Price.
                    </div>
                    <label for="add_item_price">Selling Price<span class="red">*</span></label>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 mb-3">
                <div class="form-floating">
                    <input class="form-control" 
                            name="item_cost" 
                            id="add_item_cost"
                            type="text"
                            value="<?php echo e($item_master->item_cost); ?>"
                            placeholder="Selling Cost" 
                            required />
                    <div class="invalid-feedback">
                        Please enter Cost price.
                    </div>
                    <label for="add_item_cost">Cost Price<span class="red">*</span></label>
                </div>
            </div>
        </div>

        <div class="col-12 gy-3">
            <div class="form-floating mb-3">
                <textarea class="form-control" name="description" id="add_item_description" placeholder="Product Description"
                    style="height: 100px"><?php echo e($item_master->description); ?></textarea>
                <div class="invalid-feedback">
                    Please enter Description.
                </div>
                <label for="floatingitemOverview">Description</label>
            </div>
        </div>

        <div class="col-12 gy-3">
            <div class="row g-3 justify-content-end">
                <a href="javascript:void(0)" class="col-auto">
                    <button type="button" class="btn btn-phoenix-danger px-5"
                        data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-dismiss="offcanvas">
                        Cancel
                    </button>
                </a>
                <div class="col-auto">
                    <button class="btn btn-primary px-5 px-sm-15" id="submit_btn">Create
                        item</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\procurement\admin\items\mv\edit.blade.php ENDPATH**/ ?>