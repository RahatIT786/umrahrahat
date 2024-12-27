<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Basic Example</h5>
    </div>

    <div class="card-body">
        <div class="row">
            <!-- First Row: Two Inputs -->
            <div class="col-md-6 mb-3">
                <label for="simpleinput" class="form-label">Package Name</label>
                <input type="text" id="simpleinput" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
                <label for="example-email" class="form-label">Package Description</label>
                <input type="text" id="example-email" name="example-email" class="form-control" placeholder="Package Description">
            </div>

            <!-- Second Row: Three Inputs -->
            <div class="col-md-4 mb-3">
                <label for="example-password" class="form-label">Password</label>
                <input type="password" id="example-password" class="form-control" value="password">
            </div>
            <div class="col-md-4 mb-3">
                <label for="example-placeholder" class="form-label">Placeholder</label>
                <input type="text" id="example-placeholder" class="form-control" placeholder="placeholder">
            </div>
            <div class="col-md-4 mb-3">
                <label for="example-placeholder" class="form-label">Placeholder</label>
                <input type="text" id="example-placeholder" class="form-control" placeholder="placeholder">
            </div>

            <!-- Checkboxes -->
            <div class="col-md-12 mb-3">
                <div class="row">
                    <div class="form-check col-md-3">
                        <input type="checkbox" class="form-check-input" id="customCheckcolor1" checked>
                        <label class="form-check-label" for="customCheckcolor1">Default Checkbox</label>
                    </div>
                    <!-- Repeat similar checkboxes for the remaining ones -->
                </div>
            </div>

            <!-- Text Areas -->
            <div class="col-md-12 mb-3">
                <label for="example-textarea" class="form-label">Note</label>
                <textarea class="form-control" id="example-textarea" rows="5"></textarea>
            </div>

            <div class="col-md-12 mb-3">
                <label for="example-textarea" class="form-label">Includes</label>
                <textarea class="form-control" id="example-textarea" rows="5"></textarea>
            </div>
        </div>

        <!-- Save Button -->
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary">Save</button>
        </div>
    </div>
</div>

