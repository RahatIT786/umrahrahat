<div class="card">
    <div class="card-header">
        <h5 class="card-title mb-0">Add Visa Details</h5>
    </div>

    <div class="card-body">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif

        <form wire:submit.prevent="submit" >
        <div class="row">
            <!-- First Row: Two Inputs -->
            <div class="col-md-6 mb-3">
                <label for="VisaType" class="form-label">Visa Type</label>
                <select class="form-select" id="VisaType" wire:model="visaType">
                    <option value="">select visa type</option>
                    <option value="UMRAH VISA">UMRAH VISA</option>
                    <option value="TOURIST VISA">TOURIST VISA</option>
                    <option value="BUSINESS VISA">BUSINESS VISA</option>
                    <option value="PERSONAL VISA">PERSONAL VISA</option>
                </select>
                @error('visaType')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="documentsRequired" class="form-label">Documents Required</label>
                <input type="text" id="documentsRequired" wire:model="documentsRequired" class="form-control"  placeholder="Enter Required Documents">
                @error('documentsRequired') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Second Row: Two Inputs -->
            <div class="col-md-6 mb-3">
                <label for="processingTime" class="form-label">Processing Time (Days)</label>
                <input type="number" id="processingTime" class="form-control" wire:model="processingTime" placeholder="Enter no of days">
                @error('processingTime') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" id="price" class="form-control" min="0" wire:model="price" placeholder="Enter Price">
                @error('price') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Third Row: File Upload -->
            <div class="col-md-12 mb-3">
            <label for="file" class="form-label">Upload Supporting Documents</label>
                    <input type="file" id="file" class="form-control" wire:model="file">
                    <small class="form-text text-muted">Allowed file types: .pdf, .jpg, .png, .doc, .docx</small>
                    @error('file') <span class="text-danger">{{ $message }}</span> @enderror

                    <!-- Show uploading progress -->
                    @if ($file)
                        <div class="mt-2">File selected: {{ $file->getClientOriginalName() }}</div>
                    @endif
            </div>
        </div>

        <!-- Save Button -->
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">{{ $visaId ? 'Update Visa' : 'Add Visa' }}</button>
        </div>
        </form>
    </div>
</div>
