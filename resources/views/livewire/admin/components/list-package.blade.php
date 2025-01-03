
               <div class="card ">
                 <div class="card-body">
                   <div class="d-flex align-items-center">
                      <h5 class="mb-0">Customer Details</h5>
                      
                       <form class="ms-auto position-relative" style="margin-right: 5rem">
                         <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-search"></i></div>
                         <input class="form-control ps-5" type="text" placeholder="search">
                       </form>
                       <button href="{{route('admin.package-add')}}" wire:navigate class="btn btn-primary"><i class="bi bi-bag-plus"></i>&nbsp; CREATE</button>
                   </div>
                   <div class="table-responsive mt-3 ">
                     <table class="table align-middle">
                       <thead class="table-secondary">
                         <tr>
                          <th>S.No</th>
                          <th>Package Image</th>
                          <th>Package Name</th>
                         
                         
                          <th>Actions</th>
                         </tr>
                       </thead>
                       <tbody>
                         <tr>
                          <td>1</td>
                           <td>
                             <div class="d-flex align-items-center gap-3 cursor-pointer">
                                <img src="assets/images/avatars/avatar-1.png" class="rounded-circle" width="44" height="44" alt="">
                                
                             </div>
                           </td>
                           <td>89 Chicago UK</td>
                           
                         
                           
                           <td>
                             <div class="table-actions d-flex align-items-center gap-3 fs-6">
                               <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a> &nbsp;
                               <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a> &nbsp;
                               <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                             </div>
                           </td>
                         </tr>
                       
                       </tbody>
                     </table>
                   </div>
                 </div>
               </div>
          