<?php

namespace App\Livewire\Admin\PackageManager;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AddPackage extends Component
{
    public $content; // To hold the editor's content

    public function mount()
    {
        // Initialize the content (e.g., load from the database)
        $this->content = '<h3><span class="ql-size-large">Hello World!</span></h3>
                          <p><br></p>
                          <h3>This is a simple editable area.</h3>
                          <p><br></p>
                          <ul>
                              <li>Select a text to reveal the toolbar.</li>
                              <li>Edit rich document on-the-fly, so elastic!</li>
                          </ul>
                          <p><br></p>
                          <p>End of simple area</p>';
    }
    public function saveContent()
    {
        // Save the content to the database or perform other actions
        // Example: Content saved logic here
        session()->flash('message', 'Content saved successfully!');
    }
    #[Layout('admin.layouts.app')]
    public function render()
    {
        return view('livewire.admin.components.add-package');
    }
}
