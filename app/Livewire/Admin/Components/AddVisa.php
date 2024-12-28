<?php

namespace App\Livewire\Admin\Components;

use App\Models\VisaDetail;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class AddVisa extends Component
{
    use WithFileUploads;

    public $visaType;
    public $documentsRequired;
    public $processingTime;
    public $price;
    public $file;
    public $visaId;

    protected $rules = [
        'visaType' => 'required|string',
        'documentsRequired' => 'required|string',
        'processingTime' => 'required|integer',
        'price' => 'required|numeric',
        'file' => 'nullable|file|mimes:pdf,jpg,png,doc,docx|max:2048',
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
                'file_path' => $filePath ?? $visa->file_path,
            ]);
            session()->flash('message', 'Visa details updated successfully!');
            $this->reset(['visaType', 'documentsRequired', 'processingTime', 'price', 'file']);
            return view('livewire.admin.components.list-all-visa');
        } else {
            // Add new visa
            VisaDetail::create([
                'visa_type' => $this->visaType,
                'documents_required' => $this->documentsRequired,
                'processing_time' => $this->processingTime,
                'price' => $this->price,
                'file_path' => $filePath,
            ]);
            session()->flash('message', 'Visa details added successfully!');
        }

        // Reset form fields
        $this->reset(['visaType', 'documentsRequired', 'processingTime', 'price', 'file']);
    }

    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-visa');
    }
}
