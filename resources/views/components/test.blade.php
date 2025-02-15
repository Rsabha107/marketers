    <div class="modal-dialog modal-lg modal-dialog-top">
        <div class="modal-content bg-body-highlight">
            <div class="modal-header bg-modal-header">
                <h3 class="mb-0" id="add_edit_project_modal_label">
                    <?= get_label('create_project', 'Create project') ?></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form class="row g-3  px-3 needs-validation form-submit-event" id="add_edit_project_form"
                novalidate="" action="{{ route('project.update') }}" method="POST">
                @csrf

                <input type="hidden" name="id" id="add_edit_project_id_h" value="">
                <input type="hidden" name="table" id="add_edit_project_table_h" value="project_table">
                <input type="hidden" name="redirect" id="add_edit_project_redirect_h" value="">

                <div class="modal-body">

                    <div class="mb-3 row">
                        <div class="mb-3 col-md-12">
                            <label class="form-label" for="inputEmail4">Title</label>
                            <input name="name" id="add_edit_project_name" class="form-control" type="text"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputAddress2">Assign to (multiple)</label>
                            <select required class="form-select js-select-project-assign-multiple"
                                id="add_edit_project_assigned_to" name="assignment_to_id[]" multiple="multiple"
                                data-with="100%" data-placeholder="<?= get_label('Team', 'Team') ?>">
                                <option value="">Select users</option>
                                @foreach ($employees as $key => $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->full_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputAddress2">Tags (multiple)</label>
                            <select class="form-select js-select-project-tags-multiple" id="add_edit_project_tag"
                                name="tag_id[]" multiple="multiple" data-with="100%"
                                data-placeholder="<?= get_label('Tags', 'Tags') ?>">
                                <option value="">Select tag</option>
                                @foreach ($tags as $key => $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->title }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-3 col-md-3">
                            <label class="form-label" for="inputAddress">Project type</label>
                            <select name="project_type_id" class="form-select" id="add_edit_project_project_type"
                                required>
                                <option selected="selected" value="">Select...</option>
                                @foreach ($project_type as $key => $item)
                                @if (Request::old('id') == $item->id)
                                <option value="{{ $item->id }}" selected>
                                    {{ $item->name }}
                                </option>
                                @else
                                <option value="{{ $item->id }}">
                                    {{ $item->name }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3 col-md-3">
                            <label class="form-label" for="inputAddress">Category</label>
                            <select name="category_id" class="form-select" id="add_edit_project_category"
                                required>
                                <option selected="selected" value="">Select...</option>
                                @foreach ($event_category as $key => $item)
                                @if (Request::old('id') == $item->id)
                                <option value="{{ $item->id }}" selected>
                                    {{ $item->name }}
                                </option>
                                @else
                                <option value="{{ $item->id }}">
                                    {{ $item->name }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="inputAddress">Client</label>
                            <select name="client_id" class="form-select" id="add_edit_project_client" required>
                                <option selected="selected" value="">Select...</option>
                                @foreach ($clients as $key => $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->first_name . ' ' . $item->last_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="inputAddress">Functional Area</label>
                            <select name="functional_area_id" class="form-select" id="add_edit_project_functional_area"
                                required>
                                <option selected="selected" value="">Select...</option>
                                @foreach ($functional_areas as $key => $item)
                                @if (Request::old('id') == $item->id)
                                <option value="{{ $item->id }}" selected>
                                    {{ $item->name }}
                                </option>
                                @else
                                <option value="{{ $item->id }}">
                                    {{ $item->name }}
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">

                    </div>

                    <div class="mb-3 row">

                        <!-- <h4 class="mt-6">Schedule</h4> -->
                        <div class="col-md-6">
                            <label class="form-label" for="inputEmail4">Start Date</label>
                            <input class="form-control datetimepicker" id="edit_project_start_date"
                                data-target="#floatingInputStartDate" name="start_date" type="date"
                                placeholder="dd/mm/yyyy"
                                data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="inputEmail4">End Date</label>
                            <input class="form-control datetimepicker" id="edit_project_end_date"
                                data-target="#floatingInputStartDate" name="end_date" type="date"
                                placeholder="dd/mm/yyyy"
                                data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' required>
                        </div>
                    </div>
                    <!-- <h4 class="mt-6">Other Information</h4> -->
                    <div class="mb-3 row">

                        <div class="col-md-4">
                            <label class="form-label" for="inputCity">Budget allocated</label>
                            <input name="budget_allocation" class="form-control"
                                id="edit_project_budget_allocation" type="number" step="0.01"
                                placeholder="" value="0" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="inputCity">Sales</label>
                            <input name="total_sales" class="form-control"
                                id="edit_project_total_sales" type="number" step="0.01"
                                placeholder="" value="0" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="inputCity">Sales Margin</label>
                            <input name="sales_margin" class="form-control"
                                id="edit_project_sales_margin" type="number" step="0.01"
                                placeholder="" value="0" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label" for="gridCheck">Description</label>
                        <textarea required name="description" class="form-control tinymce1" id="add_edit_project_description"
                            data-tinymce="{}" placeholder=""></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary"
                        data-bs-dismiss="modal"><?= get_label('close', 'Close') ?></label></button>
                    <button type="submit" class="btn btn-primary"
                        id="submit_btn"><?= get_label('save', 'Save') ?></label></button>
                </div>
            </form>
        </div>
    </div>
