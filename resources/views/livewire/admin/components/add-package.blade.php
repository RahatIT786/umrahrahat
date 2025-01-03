<section>
    <div class="row">
        <div class="col-xl-9 mx-auto">
    <h6 class="mb-0 text-uppercase">{{$package_id ? 'Edit Package Details' : 'Add Package Details'}}</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div>
                @if (session()->has('message'))
                    <div id="successMessage" class="alert alert-success text-center">{{session('message')}}</div>
                @endif
            </div>
            <div class="p-4 border rounded">
                <form class="row g-3" wire:submit.prevent="packageSubmit">
                    <div class="col-md-6">
                        <label for="validationDefault01" class="form-label">Package Name</label>
                        <input type="text" class="form-control" id="validationDefault01" value="Mark" wire:model="package_name" >
                        @error('package_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="validationDefault02" class="form-label">Package Description</label>
                        <input type="text" class="form-control" id="validationDefault02" value="Otto" wire:model="description">
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    {{--  --}}
                    <div class="col-md-4">
                        <label for="validationDefaultUsername" class="form-label">Sharing</label>
                        <input type="number" class="form-control" aria-describedby="inputGroupPrepend2" min="1" wire:model="sharing">
                        @error('sharing') <span class="text-danger">{{ $message }}</span> @enderror
                        
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefaultUsername" class="form-label">Quint</label>
                        <input type="number" class="form-control" aria-describedby="inputGroupPrepend2" min="1" wire:model="quint" >
                        @error('quint') <span class="text-danger">{{ $message }}</span> @enderror
                        
                    </div>
                    <div class="col-md-4">
                        <label for="validationDefaultUsername" class="form-label">Quad</label>
                        <input type="number" class="form-control" aria-describedby="inputGroupPrepend2" min="1" wire:model="quad" >
                        @error('quad') <span class="text-danger">{{ $message }}</span> @enderror
                        
                    </div>
                    {{--  --}}
 {{--  --}}
 <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Triple</label>
    <input type="number" class="form-control" aria-describedby="inputGroupPrepend2" min="1" wire:model="triple">
    @error('triple') <span class="text-danger">{{ $message }}</span> @enderror
    
</div>
<div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Triple</label>
    <input type="number" class="form-control" aria-describedby="inputGroupPrepend2" min="1" wire:model="double">
    @error('double') <span class="text-danger">{{ $message }}</span> @enderror
    
</div>
<div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Single</label>
    <input type="number" class="form-control" aria-describedby="inputGroupPrepend2" min="1" wire:model="single">
    @error('single') <span class="text-danger">{{ $message }}</span> @enderror
    
</div>
{{--  --}}
                    <div class="col-md-6">
                        <label for="validationDefault03" class="form-label">Enter Start Month</label>
                        <input type="month" class="form-control" id="validationDefault03" wire:model="startMonth" >
                        @error('startMonth') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="col-md-6">
                        <label for="validationDefault03" class="form-label">Enter End Month</label>
                        <input type="month" class="form-control" id="validationDefault03" wire:model="endMonth" >
                        @error('endMonth') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault05" class="form-label">Note</label>
                        {{-- <input type="text" class="form-control" id="validationDefault05" required> --}}
                        <textarea class="form-control" id="example-textarea" rows="5" wire:model="note"></textarea>
                        @error('note') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault05" class="form-label">Includes</label>
                        {{-- <input type="text" class="form-control" id="validationDefault05" required> --}}
                        <textarea class="form-control" id="example-textarea" rows="5" wire:model="includes"></textarea>
                        @error('includes') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="col-md-12">
                        <label for="validationDefault05" class="form-label">Includes</label>
                        <input type="file" class="form-control" id="validationDefault05" wire:model="photo" value="" accept="image/*">
                      
                        @error('photo') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        {{-- @if ($photo)
                        <img src="{{$photo->temporaryUrl() }}" alt="Preview_image" height="80" width="90">
                           
                        @endif --}}
                        @if ($photo)
                                <div class="mt-2">
                                    <img src="{{ $photo->temporaryUrl() }}" alt="Preview" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @elseif ($package_name && $photo_path && $package_name)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $photo_path) }}" alt="Current Image" class="img-thumbnail" style="max-width: 200px;">
                                </div>
                            @endif
                    </div>


                    {{-- <div class="col-md-6">
                        <label for="validationDefault04" class="form-label">Enter End Month</label>
                        <select class="form-select" id="validationDefault04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="validationDefault05" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="validationDefault05" required>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label>
                        </div>
                    </div> --}}
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">{{$package_id ? 'Update Package' : 'Add Package'}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div>
        <div>
</section>