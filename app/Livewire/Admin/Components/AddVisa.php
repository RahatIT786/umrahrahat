<?php

namespace App\Livewire\Admin\Components;

use App\Models\VisaDetail;
use Livewire\WithFileUploads;
use Livewire\Component;
use Livewire\Attributes\Layout;

class AddVisa extends Component
{
    use WithFileUploads;
    public $visaType;
    public $documentsRequired;
    public $processingTime;
    public $price;
    public $file;
    public $visaId;
    public $filePath;

    protected $rules = [
        'visaType' => 'required|string',
        'documentsRequired' => 'required|string',
        'processingTime' => 'required|integer',
        'price' => 'required|numeric',
        'file' => 'nullable|image|max:2048', // Only images allowed
    ];

    protected $messages = [
        'visaType.required' => 'Visa type is required.',
        'visaType.string' => 'Visa type must be a string.',
        'visaType.max' => 'Visa type cannot exceed 255 characters.',

        'documentsRequired.required' => 'Fill this field.',
        'documentsRequired.string' => 'Documents required must be a string.',
        'documentsRequired.max' => 'Documents required description cannot exceed 1000 characters.',

        'processingTime.required' => 'Processing time is required.',
        'processingTime.integer' => 'Processing time must be an integer.',
        'processingTime.min' => 'Processing time must be at least 1 day.',

        'price.required' => 'Price is required.',
        'price.numeric' => 'Price must be a numeric value.',
        'price.min' => 'Price must be a positive value.',

        'file.image' => 'The file must be an image.',
        'file.max' => 'The image size must not exceed 2MB.',
    ];

    // Initialize component with ID when editing
   
    public function mount($id = null)
    {
        
        if ($id) {
            $visa = VisaDetail::findOrFail($id);
            $this->visaId = $visa->id;
            $this->visaType = $visa->visa_type;
            $this->documentsRequired = $visa->documents_required;
            $this->processingTime = $visa->processing_time;
            $this->price = $visa->price;
            $this->filePath = $visa->file_path;  // Set file path for editing
        }
    }


   
    // Submit form to save or update visa details
    public function submit()
    {
        $this->validate();

        $filePath = null;
        if ($this->file) {
            $filePath = $this->file->store('uploads', 'public');
        }

        if ($this->visaId) {
            // Update existing visa
            $visa = VisaDetail::findOrFail($this->visaId);
            $visa->update([
                'visa_type' => $this->visaType,
                'documents_required' => $this->documentsRequired,
                'processing_time' => $this->processingTime,
                'price' => $this->price,
                'file_path' => $filePath ?? $visa->file_path, // Keep old file path if no new file is uploaded
            ]);
            session()->flash('message', 'Visa details updated successfully!');
        } else {
            // Add new visa
            VisaDetail::create([
                'visa_type' => $this->visaType,
                'documents_required' => $this->documentsRequired,
                'processing_time' => $this->processingTime,
                'price' => $this->price,
                'file_path' => $filePath,
                'delete_status' => 1,
            ]);
            session()->flash('message', 'Visa details added successfully!');
        }

        // Reset form fields
        $this->reset(['visaType', 'documentsRequired', 'processingTime', 'price', 'file']);
    }

    #[Layout('admin.Layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-visa');
    }
}
