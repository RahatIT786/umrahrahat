<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">{{'View Package Details'}}</h5>
    </div>

    <div class="card-body">
     
        <form >
        <div class="row">
            <!-- First Row: Two Inputs -->
            <div class="col-md-6 mb-3">
                <label for="simpleinput" class="form-label">Package Name</label>
                <input type="text" id="simpleinput" class="form-control" placeholder="Package Name" wire:model="package_name" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label for="example-email" class="form-label">Package Description</label>
                <input type="text" id="example-email" name="example-email" class="form-control"  placeholder="Package Description" wire:model="description" readonly>
            </div>

            <!-- Second Row: Three Inputs -->
            <div class="col-md-4 mb-3">
                <label for="sharing" class="form-label">Sharing</label>
                <input type="number" id="sharing" class="form-control" value="sharing" min="0" placeholder="Enter Price"  wire:model="sharing" readonly>
            </div>
            <div class="col-md-4 mb-3">
                <label for="quint" class="form-label">Quint</label>
                <input type="number" id="quint" class="form-control" min="0" placeholder="Enter Price"  wire:model="quint" readonly>
            </div>
            <div class="col-md-4 mb-3">
                <label for="quad" class="form-label">Quad</label>
                <input type="number" id="quad" class="form-control" min="0" placeholder="Enter Price"  wire:model="quad" readonly>
            </div>

            <!-- Second Row: Three Inputs -->
            <div class="col-md-4 mb-3">
                <label for="triple" class="form-label">Triple</label>
                <input type="number" id="triple" class="form-control" min="0" value="triple" placeholder="Enter Price"  wire:model="triple" readonly>
            </div>
            <div class="col-md-4 mb-3">
                <label for="Double" class="form-label">Double</label>
                <input type="number" id="Double" class="form-control" min="0" placeholder="Enter Price"  wire:model="double" readonly>
            </div>
            <div class="col-md-4 mb-3">
                <label for="single" class="form-label">Single</label>
                <input type="number" id="single" class="form-control" min="0" placeholder="Enter Price"  wire:model="single" readonly>
            </div>

           

            <!--DEPARTURE DATES Checkboxes -->
           <div class="col-md-12 d-flex flex-wrap justify-content-between" >
            <div class="col-md-5 mb-3">
                <label for="startYear" class="form-label">Enter Start Year</label>
                <input type="number" class="form-control" id="startYear" wire:model="startYear" min="2023" readonly>
            </div>
            <div class="col-md-6 mb-3">
                <label for="startYear" class="form-label">Enter End Year</label>
                <input type="number" class="form-control" id="startYear" wire:model="endYear" min="2023" readonly>
            </div>

            <div class="col-md-5 mb-3">
                <label for="startMonth" class="form-label">Start Month</label>
                <select id="startMonth" class="form-control" wire:model="startMonth" readonly>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
            <div class="col-md-5 mb-3">
                <label for="endMonth" class="form-label">Start Month</label>
                <select id="endMonth" class="form-control" wire:model="endMonth" readonly>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
           </div>
         

            <!-- Text Areas -->
            <div class="col-md-12 mb-3">
                <label for="example-textarea" class="form-label">Note</label>
                <textarea class="form-control" id="example-textarea" rows="5" wire:model="note" readonly></textarea>
            </div>

            <div class="col-md-12 mb-3">
                <label for="example-textarea" class="form-label">Includes</label>
                <textarea class="form-control" id="example-textarea" rows="5" wire:model="includes" readonly></textarea>
            </div>
        </div>
        <div>
            <label for="example-textarea" class="form-label">Visa Banner Image</label>
            <input type="file" class="form-control" wire:model="photo" accept="image/*" readonly>
            <div>
                    <!-- Show uploaded image if available -->
                    @if ($photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $photo) }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    @elseif ($package_id && $photo)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $photo) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                        </div>
                    @endif
            </div>
        </div>

        <!-- Save Button -->
        <div class="d-flex justify-content-end m-2">
        <a href="{{ route('admin.package-manager') }}" class="btn btn-primary">{{ 'Close' }}</a>
        </div>
    </form>
    </div>
</div>