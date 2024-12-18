<!--begin::Header navs-->
<div class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0 overflow-hidden overflow-lg-visible" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
    <!--begin::Container-->
    <div class="d-lg-flex px-10 w-100">
        <!--begin::Wrapper-->
        <div class="d-lg-flex flex-column justify-content-lg-center w-100" id="kt_header_navs_wrapper">
            <!--begin::Header tab content-->
            <div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}" data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
                <!--begin::Tab panel-->
                <?php if(session()->get('type')  == 'task_creator'){ ?>
                <div class="tab-pane fade active show" id="kt_header_navs_tab_1">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                        <div class="d-flex flex-column flex-lg-row gap-2">
                            <a href="<?=base_url()?>main" class="btn btn-sm btn-light fw-bold" id="creattion_task_list_view">LIST TASK VIEW</a>
                        </div>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <?php } ?>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <?php if(session()->get('type') == 'keyin'){ ?>
                <div class="tab-pane fade" id="kt_header_navs_tab_2">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                        <div class="d-flex flex-column flex-lg-row gap-2">
                            <a href="<?php echo base_url();?>list_task_view" class="btn btn-sm btn-light fw-bold" id="vipview" >Keyin order List</a>
                            <!-- <a href="<?=base_url();?>fifoview" class="btn btn-sm btn-light fw-bold" id="fifoview">FIFO VIEW</a>
                            <a href="<?=base_url();?>stock_lens_fifo_view" class="btn btn-sm btn-light fw-bold" id="Stocklenfifo">STOCK LENS FIFO VIEW</a> -->
                        </div>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <div class="tab-pane fade" id="tab_Myjob1">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                        <div class="d-flex flex-column flex-lg-row gap-2">
                            <a href="<?=base_url();?>myjobvip" class="btn btn-sm btn-light fw-bold" id="myjobvip">VIP</a>
                            <a href="<?=base_url();?>myjobfifo" class="btn btn-sm btn-light fw-bold" id="myjobfifo">FIFO</a>
                            <a href="<?=base_url();?>myjobstock" class="btn btn-sm btn-light fw-bold" id="myjobstock">STOCK</a>
                        </div>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <?php }?>

                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <?php if(session()->get('type') == 'support'){ ?>
                <div class="tab-pane fade" id="kt_header_navs_tab_3">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                        <div class="d-flex flex-column flex-lg-row gap-2">
                            <a href="<?=base_url();?>main" class="btn btn-sm btn-light fw-bold" id="dashboardSupportMenu">Dashboards CS Support</a>
                            <a her class="btn btn-sm btn-light fw-bold" hidden href="apps/inbox/listing.html">Tag Category Setting</a>
                        </div>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <?php }?>
                <!--end::Tab panel-->
                <!--begin::Tab panel-->
                <?php if(session()->get('type') == 'feedback'){ ?>
                <div class="tab-pane fade" id="kt_header_navs_tab_4">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                        <div class="d-flex flex-column flex-lg-row gap-2">
                            <a href="<?=base_url();?>main" class="btn btn-sm btn-light fw-bold" id="qcdashboard">QC Dashboard</a>
                        </div>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <div class="tab-pane fade" id="tab_Myjobqc1">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                        <div class="d-flex flex-column flex-lg-row gap-2">
                            <a href="<?=base_url();?>myjobqc" class="btn btn-sm btn-light fw-bold" id="myjobqc">Call QC Job</a>
                            
                        </div>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <?php }?>
                <!--end::Tab panel-->
            </div>
            <!--end::Header tab content-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header navs-->