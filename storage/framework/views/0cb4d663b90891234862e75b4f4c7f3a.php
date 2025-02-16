<div class="offcanvas-body">
    <div class="row">
        <div class="col-sm-12">
            <form class="row g-3 needs-validation form-submit-event" id="<?php echo e($formId); ?>" novalidate=""
                action="<?php echo e($formAction); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="table" value="purchase_table" />

                <div class="card">
                    <div class="card-header d-flex align-items-center border-bottom">
                        <div class="ms-3">
                            <h5 class="mb-0 fs-sm">Create Purchase</h5>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="row mb-3">
                            <div class="col-sm-6 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">PO</span>
                                    <div class="form-floating">
                                        <input class="form-control" name="po_number" type="text"
                                            placeholder="Purchase Order Number (Auto Generated)" disabled />
                                        <div class="invalid-feedback">
                                            Please enter Purchase Order Number.
                                        </div>
                                        <label for="floatingInputGrid">Order Number generated Automatically</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4  mb-3">
                                <div class="form-floating">
                                    <select name="vendor_id" class="form-select" id="add_vendor_id">
                                        <option selected="selected" value="">Select...</option>
                                        <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>">
                                                <?php echo e($item->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select Vendor name.
                                    </div>
                                    <label for="floatingSelectTeam">Vendor name </label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4  mb-3">
                                <div class="form-floating">
                                    <select name="currency_id" class="form-select" id="add_currencyid">
                                        <option selected="selected" value="">Select...</option>
                                        <?php $__currentLoopData = $currency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>">
                                                <?php echo e($item->code); ?> (<?php echo e($item->symbol); ?>)
                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select Currency.
                                    </div>
                                    <label for="floatingSelectTeam">Currency</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6 col-md-4  mb-3">
                                <div class="flatpickr-input-container">
                                    <div class="form-floating">
                                        <input class="form-control datetimepicker" id="floatingInputStartDate"
                                            type="date" placeholder="dd/mm/yyyy" placeholder="order date"
                                            name="order_date" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}'
                                            required />
                                        <div class="invalid-feedback">
                                            Please enter order date.
                                        </div>
                                        <label class="ps-6" for="floatingInputStartDate">order date</label><span
                                            class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4  mb-3">
                                <div class="flatpickr-input-container">
                                    <div class="form-floating">
                                        <input class="form-control datetimepicker" id="floatingInputStartDate"
                                            type="date" placeholder="dd/mm/yyyy" placeholder="expected delivery date"
                                            name="expected_delivery_date"
                                            data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                                        <div class="invalid-feedback">
                                            Please enter expected delivery date.
                                        </div>
                                        <label class="ps-6" for="floatingInputStartDate">expected
                                            delivery</label><span
                                            class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4  mb-3">
                                <div class="form-floating">
                                    <select name="delivery_address_id" class="form-select" id="add_vendor_id">
                                        <option selected="selected" value="">Select...</option>
                                        <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>">
                                                <?php echo e($item->location_name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select Delivery Address.
                                    </div>
                                    <label for="floatingSelectTeam">Delivery Address </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <input class="form-control" name="requester_id" id="floatingInputGrid"
                                        type="text" placeholder="Requester Name" />
                                    <div class="invalid-feedback">
                                        Please enter Requester Name.
                                    </div>
                                    <label for="floatingInputGrid">Requester Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4  mb-3">
                                <div class="form-floating">
                                    <select name="project_id" class="form-select" id="add_project_id">
                                        <option selected="selected" value="">Select...</option>
                                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>">
                                                <?php echo e($item->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select Project name.
                                    </div>
                                    <label for="floatingSelectTeam">Project name </label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-floating">
                                    <textarea class="form-control form-control-sm description" name="h_description" type="text"
                                        placeholder="note to vendor"></textarea>
                                    <div class="invalid-feedback">
                                        Please enter description.
                                    </div>
                                    <label for="floatingInputGrid">Description</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="btn-container mb-2">
                            <a id="addNew" class="btn btn-sm">
                                <i class="fas fa-plus-circle text-success me-2"></i>Add new line
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="add_item">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width:2%"></th>
                                        <th scope="col" style="width:25%">Item</th>
                                        <th scope="col" style="width:25%">Description</th>
                                        <th scope="col" style="width:10%">Quantity</th>
                                        <th scope="col" style="width:10%">Unite Price</th>
                                        <th scope="col" class="po-subtotal" style="width:5%">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id="row_1">
                                        <th id="delete_1" scope="row" class="delete_row">

                                        </th>
                                        <td>
                                            <div class="col-sm-6 col-md-12">
                                                <div class="input-group">
                                                    <select name="item_id[]"
                                                        class="form-select form-select-sm item_selected"
                                                        id="item_id_1" required>
                                                        <option selected="selected" value="">Select...</option>
                                                        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>">
                                                                <?php echo e($item->item_name); ?>

                                                            </option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <button type="button" class="btn btn-phoenix-primary px-3"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fas fa-plus-circle text-success"></i>
                                                    </button>
                                                    <div class="invalid-feedback">
                                                        Please select Item.
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-sm-6 col-md-12">
                                                
                                                <input class="form-control form-control-sm description"
                                                    name="line_description[]" id="description_1" type="text"
                                                    placeholder="description" required />
                                                <div class="invalid-feedback">
                                                    Please enter description.
                                                </div>
                                                
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-sm-6 col-md-12">
                                                
                                                <input class="form-control form-control-sm quantity text-right"
                                                    name="quantity[]" id="quantity_1" type="number"
                                                    placeholder="quantity" required />
                                                <div class="invalid-feedback">
                                                    Please enter quantity.
                                                </div>
                                                
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-sm-6 col-md-12">
                                                
                                                <input class="form-control form-control-sm unit_price text-right"
                                                    name="unit_price[]" id="unit_price_1" type="number"
                                                    placeholder="Unit Price" required />
                                                <div class="invalid-feedback">
                                                    Please enter Unit Price.
                                                </div>
                                                
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-sm-6 col-md-12">
                                                
                                                <input class="form-control form-control-sm line_total text-right"
                                                    name="total" id="total_1" disabled type="number"
                                                    placeholder="Total" required />
                                                <div class="invalid-feedback">
                                                    Please enter Total.
                                                </div>
                                                
                                                
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <table class="table text-right">
                                    <tbody>
                                        <tr>
                                            <td><span class="bold">Subtotal :</span>

                                                <input type="hidden" name="total_mn" value="">
                                            </td>
                                            <td class="po-subtotal" id="subtotal">
                                                <div id="subtotal">0.00</div>
                                                <input type="hidden" name="total_mn" value="0.00">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <span class="bold">Shipping Fee</span>
                                                    </div>
                                                    <div class="col-md-3 po-subtotal" id="shipping_fee_input">
                                                        <input type="number" data-toggle="tooltip" value="0"
                                                            class="form-control form-control-sm pull-left text-right shipping_fee"
                                                            name="shipping_fee">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="shiping_fee po-subtotal">
                                                <div id="shippingtotal">0.00</div>
                                            </td>
                                        </tr>

                                        <tr id="totalmoney">
                                            <td><span class="bold">Grand total :</span>

                                                <input type="hidden" name="grand_total" value="">
                                            </td>
                                            <td class="po-subtotal">
                                                <div id="grandtotal">0.00</div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="card mb-3 py-3 px-3">
                    <div class="mb-3">

                        <input class="form-control form-control-sm" id="customFileSm" type="file" />
                    </div>
                    <div class="col-sm-6 col-md-12 mb-3">
                        <div class="form-floating">
                            <textarea class="form-control form-control-sm description" name="note_to_vendor" type="text"
                                placeholder="note to vendor" style="height: 100px"></textarea>
                            <div class="invalid-feedback">
                                Please enter note to vendor.
                            </div>
                            <label for="floatingInputGrid">Note to Vendor</label>
                        </div>
                    </div>
                    <hr>
                    <div class="col-12 gy-3 mb-3">
                        <div class="row g-3 justify-content-end">
                            <a href="javascript:void(0)" class="col-auto">
                                <button type="button" class="btn btn-phoenix-danger px-5" data-bs-toggle="tooltip"
                                    data-bs-placement="right" data-bs-dismiss="offcanvas">
                                    Cancel
                                </button>
                            </a>
                            <div class="col-auto">
                                <button class="btn btn-primary px-5 px-sm-15" id="submit_btn">Save
                                    PO</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- FORM END -->
        </div>
    </div>
</div>

<!--========== Start of add multiple class with ajax ==============-->

<script type="text/javascript">
    // $(document).ready(function() {

    var SmartAuto = (function() {
        var addBtn, html, rowCount, tableBody;

        addBtn = $("#addNew")
        rowCount = $("#add_item tbody tr").length + 1;
        tableBody = $("#add_item tbody");

        function formHtml() {
            html = '    <tr id="row_' + rowCount + '">'
            html += '        <th id="delete_' + rowCount + '" scope="row" class="delete_row">'
            html += '             <i class="fas fa-minus-circle text-danger"></i>'
            html += '        </th>'

            html += '        <td>'
            html += '                                <div class="col-sm-6 col-md-12">'
            html += '                                    <div class="input-group">'
            html +=
                '                                         <select name="item_id[]" class="form-select form-select-sm item_selected"'
            html += '                                            id="item_id_' + rowCount + '" required>'
            html +=
                '                                            <option selected="selected" value="">Select...</option>'
            html += '                                            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>'
            html += '                                            <option value="<?php echo e($item->id); ?>">'
            html += '                                                <?php echo e($item->item_name); ?>'
            html += '                                            </option>'
            html +=
                '                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>'
            html += '                                      </select>'
            html +=
                '                                        <button  type="button" class="btn btn-phoenix-primary px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">'
            html +=
                '                                            <i class="fas fa-plus-circle text-success"></i>'
            html += '                                        </button>'
            html += '                                        <div class="invalid-feedback">'
            html += '                                            Please select Item.'
            html += '                                        </div>'
            html += '                                    </div>'
            html += '                                </div>'
            html += '                            </td>'

            html += '                            <td>'
            html += '                                <div class="col-sm-6 col-md-12">'
            html +=
                '                                        <input class="form-control form-control-sm description" name="description[]"'
            html += '                                            id="description_' + rowCount +
                '"  type="text"'
            html += '                                            placeholder="description" required />'
            html += '                                        <div class="invalid-feedback">'
            html += '                                            Please enter description.'
            html += '                                        </div>'
            html += '                                </div>'
            html += '                            </td>'

            html += '                            <td>'
            html += '                                <div class="col-sm-6 col-md-12">'
            html +=
                '                                        <input class="form-control form-control-sm quantity text-right" name="quantity[]" id="quantity_' +
                rowCount + '"'
            html += '                                             type="number"'
            html += '                                            placeholder="quantity" required />'
            html += '                                        <div class="invalid-feedback">'
            html += '                                            Please enter quantity.'
            html += '                                        </div>'
            html += '                                </div>'
            html += '                            </td>'


            html += '                            <td>'
            html += '                                <div class="col-sm-6 col-md-12">'
            html +=
                '                                        <input class="form-control form-control-sm unit_price text-right" name="unit_price[]" id="unit_price_' +
                rowCount + '"'
            html += '                                             type="number"'
            html += '                                            placeholder="Unit Price" required />'
            html += '                                        <div class="invalid-feedback">'
            html += '                                            Please enter Unit Price.'
            html += '                                        </div>'
            html += '                                </div>'
            html += '                            </td>'
            html += '                            <td>'
            html += '                                <div class="col-sm-6 col-md-12">'
            html +=
                '                                        <input class="form-control form-control-sm line_total text-right" name="total" disabled id="total_' +
                rowCount + '"'
            html += '                                             type="number"'
            html += '                                            placeholder="Total" required />'
            html += '                                        <div class="invalid-feedback">'
            html += '                                            Please enter Total.'
            html += '                                        </div>'
            html += '                                </div>'
            html += '                            </td>'


            html += '    </tr>'

            rowCount++;
            return html;
        }

        function getId(element) {
            var id, idArr;
            id = element.attr('id');
            idArr = id.split("_");
            return idArr[idArr.length - 1]
        }

        function addNewRow() {
            tableBody.append(formHtml());
        }

        function deleteRow() {
            var currentEle, rowNo;
            currentEle = $(this);
            rowNo = getId(currentEle);
            $("#row_" + rowNo).remove();
            $("#subtotal").html(sumTotalLines);
            $("#grandtotal").html(sumTotalLines);

        }

        function autoFillItem() {
            // console.log('autoFillItem')
            var currentEle, rowNo, itemId, shippingFee;
            currentEle = $(this);
            itemId = currentEle.val();
            // console.log(currentEle.val())
            rowNo = getId(currentEle);
            // console.log(rowNo)
            $.ajax({
                url: "/procurement/admin/item/get/" + itemId,
                method: "GET",
                async: false,
                success: function(response) {
                    // console.log(response)
                    $("#quantity_" + rowNo).val('1');
                    // console.log(response.itemData.item_price)
                    $("#description_" + rowNo).val(response.itemData.description);
                    $("#unit_price_" + rowNo).val(response.itemData.item_price);
                    $("#total_" + rowNo).val(response.itemData.item_price * 1);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    // console.log(xhr.status);
                    // console.log(thrownError);
                    $("#cover-spin").hide();
                },
            });
            // $("#quantity_"+rowNo).val('1');
            shippingFee = $(".shipping_fee").val();
            // console.log('shippingFee', shippingFee)
            grandTotal = (parseFloat(sumTotalLines()) + parseFloat(shippingFee));
            // console.log('grandTotal', grandTotal);

            $("#subtotal").html(sumTotalLines);
            $("#grandtotal").html(grandTotal);

        }

        function sumTotalLines() {
            // console.log('inside sumTtoalLines')
            var sum = 0;
            $(".line_total").each(function() {

                //add only if the value is number
                if (!isNaN(this.value) && this.value.length != 0) {
                    sum += parseFloat(this.value);
                }
            });

            return sum.toFixed(2);
        }


        function shippingFeeChange() {
            var currentEle, shippingFeeValue;
            // console.log('inside shippingFeeChange');
            currentEle = $(this);
            // console.log(currentEle)
            shippingFeeValue = currentEle.val();
            $("#shippingtotal").html(shippingFeeValue);

            // console.log('shippingFeeValue', shippingFeeValue)
            grandTotal = (parseFloat(sumTotalLines()) + parseFloat(shippingFeeValue));
            // console.log('grandTotal', grandTotal);
            $("#grandtotal").html(grandTotal.toFixed(2));
        }

        function quantityPriceTotals() {
            var currentEle, rowNo, itemId, sum = 0;
            currentEle = $(this);
            rowNo = getId(currentEle);
            qunatityValue = $("#quantity_" + rowNo).val()
            unitPriceValue = $("#unit_price_" + rowNo).val();
            shippingFeeValue = $(".shipping_fee").val();

            // console.log('qunatityValue', qunatityValue)
            // console.log('unitPriceValue', unitPriceValue)

            $("#total_" + rowNo).val(qunatityValue * unitPriceValue);
            // $("#subtotal").html(qunatityValue * unitPriceValue);

            $("#subtotal").html(sumTotalLines());

            grandTotal = (parseFloat(sumTotalLines()) + parseFloat(shippingFeeValue));
            // console.log('grandTotal', grandTotal);
            $("#grandtotal").html(grandTotal.toFixed(2));

        }

        function registerEvents() {
            // console.log('inside registerEvents')
            addBtn.on("click", addNewRow);

            $(document).on("click", ".delete_row", deleteRow);
            $(document).on("change", ".item_selected", autoFillItem);
            $(document).on("keyup change", ".quantity", quantityPriceTotals);
            $(document).on("keyup change", ".unit_price", quantityPriceTotals);
            $(document).on("change keyup", ".shipping_fee", shippingFeeChange);
        }

        function init() {
            registerEvents();
        }

        return {
            init: init
        }
    })();

    $(document).ready(function() {
        SmartAuto.init();
    });
</script>
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views/components/procurement/purchase/admin-purchase-drawer.blade.php ENDPATH**/ ?>