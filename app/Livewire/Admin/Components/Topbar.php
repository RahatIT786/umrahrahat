<?php

namespace App\Livewire\Admin\Components;

use App\Models\SuperAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Layout;
class Topbar extends Component
{
   public $showMyAccount;

   public $showPassword;

   public $adminDetails;

   public $email;
   public $password;
   public $newPassword;

   public $admin;

   public $showMessage;

    public function OpenMyAccount(){
        $this->showMyAccount = true;

        $this->dispatch('success',['message'=>'new message']); // Dispatch the event to show the alert


       if(Auth::check()){
        // $this->adminDetails=SuperAdmin::where('email',Auth::user()->email)->first();
        $this->email=Auth::user()->email;
        // $this->password=Auth::user()->password;
        // dd ($email,$password);
       }
       else{
           $this->adminDetails=null;
       }
    }

    public function closeMyAccount(){
        $this->showMyAccount = false;
    }


    public function showPassword(){
        $this->showPassword = true;
        // $this->password=Crypt::decryptString($this->password);
        
        
    }

    public function updateAccountDetails(){
        $this->dispatch('success',['message'=>'new message']); 
        
        if(!empty($this->password) ){
            $this->admin=Auth::user();
            // $this->admin->password=Crypt::encryptString($this->password);
            SuperAdmin::where('email',Auth::user()->email)
            ->update([
                'password'=>Hash::make($this->password),
                'email'=>$this->email
            ]);

            Auth::logout();
            Auth::attempt([
                'email'=>$this->email,
                'password'=>$this->password
            ]);

           
        }
         session()->flash('success', 'Account details updated successfully!');
        //  $this->dispatchBrowserEvent('hide-alert'); // Dispatch the event to hide the alertt
       



    }

    public function closeAdminAccountAlert(){
        $this->showMessage = false;
    }




    public function render()
    {
        return view('admin.includes.topbar');
    }
}
// D:\git_files\umrahrahat\resources\views\admin\includes\topbar.blade.php