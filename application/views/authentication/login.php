<!DOCTYPE html>

<html lang="en">
   <!--begin::Head-->
   <head>
      <?php $this->load->view('includes/meta.php'); ?>
      <?php $this->load->view('includes/css.php'); ?>
   </head>
   <body id="kt_body" class="page-auth">
      <div class="d-flex flex-column flex-root">
         <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed bg-danger" >
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
               <h1 class="mb-12">Login</h1>
               <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                  <form class="form w-100"  id="kt_sign_in_form" >
                     <div class="fv-row mb-8">
                        <label class="form-label fs-6 fw-bolder text-dark">Username</label>
                        <input style="border: 1px solid;" class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" />
                        
                     </div>
                    
                     <div class="fv-row mb-10">
                       
                        <div class="d-flex flex-stack mb-2">
                           
                           <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                          
                        </div>
                       
                        <input style="border: 1px solid;" class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
                      
                     </div>
                     
                     <div class="text-center">
                        <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                        <span class="indicator-label">Continue</span>
                        
                        </button>
                       
                     </div>
                  
                  </form>
             
               </div>
      
            </div>
          
         </div>
        
      </div>
      <!--end::Main-->
      <?php $this->load->view('includes/scripts.php'); ?>
   </body>
   <!--end::Body-->
</html>