                        <div class="card-header border-0 pt-6">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    
                                <!--     <div class="d-flex align-items-center position-relative my-1">
                            
                                        <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                                                </svg>
                                            </span>
                                      
                                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14 search" placeholder="Search user" />
                                    </div> -->
                                    <!--end::Search-->
                                </div>
                                <!--begin::Card title-->
                                 <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                                       
                                
                                    <?php if ($admin_access) {
                                        # code...
                                     ?>
                                     
                                        <!--end::Export-->
                                        <!--begin::Add user-->
                                        <button type="button" class="btn btn-danger delete-multi-artist" style="margin-right: 5px" >
                                          
                                            <!--end::Svg Icon-->Delete</button>
                                             <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Add Artist</button>


                                        <?php }  ?>
                                        <!--end::Add user-->
                                    </div>
                                  
                                 
                                   <?php $this->load->view('admin/artist/modals/add_artist_modal') ?>
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->