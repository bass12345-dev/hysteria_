<!--begin::Modal - Add task-->
<div class="modal fade" id="kt_modal_add_gigs" tabindex="-1" aria-hidden="true">
   <!--begin::Modal dialog-->
   <div class="modal-dialog modal-dialog-centered mw-1000px">
      <!--begin::Modal content-->
      <div class="modal-content">
         <!--begin::Modal header-->
         <div class="modal-header" id="kt_modal_add_user_header">
            <!--begin::Modal title-->
            <h2 class="fw-bolder">Gigs</h2>
            <!--end::Modal title-->
            <!--begin::Close-->
            <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
               <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
               <span class="svg-icon svg-icon-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                     <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                     <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                  </svg>
               </span>
               <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
         </div>
         <!--end::Modal header-->
         <!--begin::Modal body-->
         <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
            <!--begin::Form-->
            <form id="add_gigs_form" class="form" action="#">
               <!--begin::Scroll-->
               <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                  data-kt-scroll-offset="300px">
                  <div class="fv-row mb-7">
                     <!--begin::Label-->
                     <label class="required fw-bold fs-6 mb-2">Location</label>
                     <!--end::Label-->
                     <!--begin::Input-->
                     <input type="text" name="location" style="border: 1px solid;" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Location" value="" />
                  </div>
                  <div class="fv-row mb-7">
                     <!--begin::Label-->
                     <label class="required fw-bold fs-6 mb-2">Event</label>
                     <textarea name="event" style="border: 1px solid;" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Event" value="">
                                                                    
                                                                </textarea>
                     <!--end::Label-->
                  </div>
                  <div class="fv-row mb-7">
                     <label class="required fw-bold fs-6 mb-2">Number of Sets</label>
                     <input type="text" style="border: 1px solid;" class="form-control form-control-solid mb-3 mb-lg-0" name="n_of_sets" >
                  </div>
                  <div class="fv-row mb-7">
                     <label class="required fw-bold fs-6 mb-2">Date</label>
                     <input type="date" style="border: 1px solid;" class="form-control form-control-solid mb-3 mb-lg-0" name="date" >
                  </div>
                  <div class="fv-row mb-7">
                     <label class="required fw-bold fs-6 mb-2">Time</label>
                     <input type="time" style="border: 1px solid;" class="form-control form-control-solid mb-3 mb-lg-0" name="time" >
                  </div>
                  <!--  <div class="fv-row mb-7">
                     <label class="required fw-bold fs-6 mb-2">Income</label>
                         
                         <input type="text" style="border: 1px solid;" class="form-control form-control-solid mb-3 mb-lg-0" name="income" value="500.00">
                     
                     </div>
                     -->
               </div>
               <!--end::Scroll-->
               <!--begin::Actions-->
               <div class="text-center pt-15">
                  <button type="submit" class="btn btn-primary" >
                  <span class="indicator-label">Submit</span>
                  <span class="indicator-progress">Please wait... 
                  <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  </button>
               </div>
               <!--end::Actions-->
            </form>
            <!--end::Form-->
         </div>
         <!--end::Modal body-->
      </div>
      <!--end::Modal content-->
   </div>
   <!--end::Modal dialog-->
</div>
<!--end::Modal - Add task-->