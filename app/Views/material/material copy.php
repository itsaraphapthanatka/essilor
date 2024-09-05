<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
	<!--begin::Content wrapper-->
	<div class="d-flex flex-column flex-column-fluid">
		<!--begin::Toolbar-->
		<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
			<!--begin::Toolbar container-->
			<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
				<!--begin::Page title-->
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
					<!--begin::Title-->
					<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Setup Material</h1>
					<!--end::Title-->
					<!--begin::Breadcrumb-->
					<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">
							<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<!--end::Item-->
						<!--begin::Item-->
						<li class="breadcrumb-item text-muted">Setup Material</li>
						<!--end::Item-->
					</ul>
					<!--end::Breadcrumb-->
				</div>
				<!--end::Page title-->
			</div>
			<!--end::Toolbar container-->
		</div>
		<!--end::Toolbar-->
		<!--begin::Content-->
		<div id="kt_app_content" class="app-content flex-column-fluid">
			<!--begin::Content container-->
			<div id="kt_app_content_container" class="app-container container-xxl">
				<!--begin::Card-->
				<div class="card card-flush">
					<!--begin::Card header-->
					<div class="card-header pt-8">
						<div class="card-title">
							<!--begin::Search-->
							<div class="d-flex align-items-center position-relative my-1">
								<i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								<input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Material Type" />
							</div>
							<!--end::Search-->
						</div>
						<!--begin::Card toolbar-->
						<div class="card-toolbar">
							<!--begin::Toolbar-->
							<div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
								<!--begin::Export-->
								<button type="button" class="btn btn-flex btn-light-primary me-3" id="kt_file_manager_new_folder">
								<i class="ki-duotone ki-add-folder fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>New Folder</button>
								<!--end::Export-->
								<!--begin::Add customer-->
								<button type="button" class="btn btn-flex btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
								<i class="ki-duotone ki-folder-up fs-2">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>Upload Files</button>
								<!--end::Add customer-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Group actions-->
							<div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
								<div class="fw-bold me-5">
								<span class="me-2" data-kt-filemanager-table-select="selected_count"></span>Selected</div>
								<button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">Delete Selected</button>
							</div>
							<!--end::Group actions-->
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->
					<!--begin::Card body-->
					<div class="card-body">
						<!--begin::Table header-->
						<div class="d-flex flex-stack">
							<!--begin::Folder path-->
							<div class="badge badge-lg badge-light-primary">
								<div class="d-flex align-items-center flex-wrap">
								<i class="ki-duotone ki-abstract-32 fs-2 text-primary me-3">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
								Material Type
								<!-- <i class="ki-duotone ki-right fs-2 text-primary mx-1"></i>
								<a href="#">themes</a>
								<i class="ki-duotone ki-right fs-2 text-primary mx-1"></i>
								<a href="#">html</a>
								<i class="ki-duotone ki-right fs-2 text-primary mx-1"></i>
								demo1 -->
							</div>
							</div>
							<!--end::Folder path-->
							<!--begin::Folder Stats-->
							<div class="badge badge-lg badge-primary">
								<span id="kt_file_manager_items_counter">82 items</span>
							</div>
							<!--end::Folder Stats-->
						</div>
						<!--end::Table header-->
						<!--begin::Table-->
						<table id="kt_file_manager_list" data-kt-filemanager-table="folders" class="table align-middle table-row-dashed fs-6 gy-5">
							<thead>
								<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
									<th class="w-10px pe-2">
										<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
											<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_file_manager_list .form-check-input" value="1" />
										</div>
									</th>
									
									<th class="min-w-250px">Name</th>
									<th class="min-w-10px">Code</th>
									<th class="min-w-125px">Status</th>
									<th class="w-125px"></th>
								</tr>
							</thead>
							<tbody class="fw-semibold text-gray-600">
							<?php $n=0; foreach ($res as $key => $value) {?>
							<tr>
								<td>
									<div class="form-check form-check-sm form-check-custom form-check-solid">
										<input class="form-check-input" type="checkbox" value="<?=$value['mattype_id'];?>" />
									</div>
								</td>
								
								<td data-order="<?=$value['mattype_id'];?>">
									<div class="d-flex align-items-center">
										<span class="icon-wrapper">
											<i class="ki-duotone ki-folder fs-2x text-primary me-4">
												<span class="path1"></span>
												<span class="path2"></span>
											</i>
										</span>
										<a href="#" class="text-gray-800 text-hover-primary"><?=$value['mattype_name'];?></a>
									</div>
								</td>
								<td><?=$value['mattype_code'];?></td>
								<td><?=$value['mattype_status'];?></td>
								<td class="text-end" data-kt-filemanager-table="action_dropdown">
									<div class="d-flex justify-content-end">
										<!--begin::Share link-->
										<div class="ms-2" data-kt-filemanger-table="copy_link">
											<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
												<i class="ki-duotone ki-fasten fs-5 m-0">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</button>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
												<!--begin::Card-->
												<div class="card card-flush">
													<div class="card-body p-5">
														<!--begin::Loader-->
														<div class="d-flex" data-kt-filemanger-table="copy_link_generator">
															<!--begin::Spinner-->
															<div class="me-5" data-kt-indicator="on">
																<span class="indicator-progress">
																	<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
																</span>
															</div>
															<!--end::Spinner-->
															<!--begin::Label-->
															<div class="fs-6 text-dark">Generating Share Link...</div>
															<!--end::Label-->
														</div>
														<!--end::Loader-->
														<!--begin::Link-->
														<div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
															<div class="d-flex mb-3">
																<i class="ki-duotone ki-check fs-2 text-success me-3"></i>
																<div class="fs-6 text-dark">Share Link Generated</div>
															</div>
															<input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
															<div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
															<a href="../../demo1/dist/apps/file-manager/settings/.html" class="ms-2">Change permissions</a></div>
														</div>
														<!--end::Link-->
													</div>
												</div>
												<!--end::Card-->
											</div>
											<!--end::Menu-->
											<!--end::Share link-->
										</div>
										<!--begin::More-->
										<div class="ms-2">
											<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
												<i class="ki-duotone ki-dots-square fs-5 m-0">
													<span class="path1"></span>
													<span class="path2"></span>
													<span class="path3"></span>
													<span class="path4"></span>
												</i>
											</button>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/apps/file-manager/files.html" class="menu-link px-3">View</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3">Download Folder</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu-->
											<!--end::More-->
										</div>
									</div>
								</td>
							</tr>
							<?php $n=$n+1; } ?>
							</tbody>
						</table>
						<!--end::Table-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
				<!--begin::Upload template-->
				<table class="d-none">
					<tr id="kt_file_manager_new_folder_row" data-kt-filemanager-template="upload">
						<td></td>
						<td id="kt_file_manager_add_folder_form" class="fv-row">
							<div class="d-flex align-items-center">
								<!--begin::Folder icon-->
								<span id="kt_file_manager_folder_icon">
									<i class="ki-duotone ki-folder fs-2x text-primary me-4">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<!--end::Folder icon-->
								<!--begin:Input-->
								<input type="text" name="new_folder_name" placeholder="Enter the folder name" class="form-control mw-250px me-3" />
								<!--end:Input-->
								<!--begin:Submit button-->
								<button class="btn btn-icon btn-light-primary me-3" id="kt_file_manager_add_folder">
									<span class="indicator-label">
										<i class="ki-duotone ki-check fs-1"></i>
									</span>
									<span class="indicator-progress">
										<span class="spinner-border spinner-border-sm align-middle"></span>
									</span>
								</button>
								<!--end:Submit button-->
								<!--begin:Cancel button-->
								<button class="btn btn-icon btn-light-danger" id="kt_file_manager_cancel_folder">
									<span class="indicator-label">
										<i class="ki-duotone ki-cross fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</span>
									<span class="indicator-progress">
										<span class="spinner-border spinner-border-sm align-middle"></span>
									</span>
								</button>
								<!--end:Cancel button-->
							</div>
						</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</table>
				<!--end::Upload template-->
				<!--begin::Rename template-->
				<div class="d-none" data-kt-filemanager-template="rename">
					<div class="fv-row">
						<div class="d-flex align-items-center">
							<span id="kt_file_manager_rename_folder_icon"></span>
							<input type="text" id="kt_file_manager_rename_input" name="rename_folder_name" placeholder="Enter the new folder name" class="form-control mw-250px me-3" value="" />
							<button class="btn btn-icon btn-light-primary me-3" id="kt_file_manager_rename_folder">
								<i class="ki-duotone ki-check fs-1"></i>
							</button>
							<button class="btn btn-icon btn-light-danger" id="kt_file_manager_rename_folder_cancel">
								<span class="indicator-label">
									<i class="ki-duotone ki-cross fs-1">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</span>
								<span class="indicator-progress">
									<span class="spinner-border spinner-border-sm align-middle"></span>
								</span>
							</button>
						</div>
					</div>
				</div>
				<!--end::Rename template-->
				<!--begin::Action template-->
				<div class="d-none" data-kt-filemanager-template="action">
					<div class="d-flex justify-content-end">
						<!--begin::Share link-->
						<div class="ms-2" data-kt-filemanger-table="copy_link">
							<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<i class="ki-duotone ki-fasten fs-5 m-0">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</button>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px" data-kt-menu="true">
								<!--begin::Card-->
								<div class="card card-flush">
									<div class="card-body p-5">
										<!--begin::Loader-->
										<div class="d-flex" data-kt-filemanger-table="copy_link_generator">
											<!--begin::Spinner-->
											<div class="me-5" data-kt-indicator="on">
												<span class="indicator-progress">
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
												</span>
											</div>
											<!--end::Spinner-->
											<!--begin::Label-->
											<div class="fs-6 text-dark">Generating Share Link...</div>
											<!--end::Label-->
										</div>
										<!--end::Loader-->
										<!--begin::Link-->
										<div class="d-flex flex-column text-start d-none" data-kt-filemanger-table="copy_link_result">
											<div class="d-flex mb-3">
												<i class="ki-duotone ki-check fs-2 text-success me-3"></i>
												<div class="fs-6 text-dark">Share Link Generated</div>
											</div>
											<input type="text" class="form-control form-control-sm" value="https://path/to/file/or/folder/" />
											<div class="text-muted fw-normal mt-2 fs-8 px-3">Read only.
											<a href="../../demo1/dist/apps/file-manager/settings/.html" class="ms-2">Change permissions</a></div>
										</div>
										<!--end::Link-->
									</div>
								</div>
								<!--end::Card-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Share link-->
						<!--begin::More-->
						<div class="ms-2">
							<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
								<i class="ki-duotone ki-dots-square fs-5 m-0">
									<span class="path1"></span>
									<span class="path2"></span>
									<span class="path3"></span>
									<span class="path4"></span>
								</i>
							</button>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">Download File</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-filemanager-table="rename">Rename</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-filemanager-table-filter="move_row" data-bs-toggle="modal" data-bs-target="#kt_modal_move_to_folder">Move to folder</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::More-->
					</div>
				</div>
				<!--end::Action template-->
				<!--begin::Checkbox template-->
				<div class="d-none" data-kt-filemanager-template="checkbox">
					<div class="form-check form-check-sm form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="1" />
					</div>
				</div>
				<!--end::Checkbox template-->
				<!--begin::Modals-->
				<!--begin::Modal - Upload File-->
				<div class="modal fade" id="kt_modal_upload" tabindex="-1" aria-hidden="true">
					<!--begin::Modal dialog-->
					<div class="modal-dialog modal-dialog-centered mw-650px">
						<!--begin::Modal content-->
						<div class="modal-content">
							<!--begin::Form-->
							<form class="form" action="none" id="kt_modal_upload_form">
								<!--begin::Modal header-->
								<div class="modal-header">
									<!--begin::Modal title-->
									<h2 class="fw-bold">Upload files</h2>
									<!--end::Modal title-->
									<!--begin::Close-->
									<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
										<i class="ki-duotone ki-cross fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
									<!--end::Close-->
								</div>
								<!--end::Modal header-->
								<!--begin::Modal body-->
								<div class="modal-body pt-10 pb-15 px-lg-17">
									<!--begin::Input group-->
									<div class="form-group">
										<!--begin::Dropzone-->
										<div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
											<!--begin::Controls-->
											<div class="dropzone-panel mb-4">
												<a class="dropzone-select btn btn-sm btn-primary me-2">Attach files</a>
												<a class="dropzone-upload btn btn-sm btn-light-primary me-2">Upload All</a>
												<a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
											</div>
											<!--end::Controls-->
											<!--begin::Items-->
											<div class="dropzone-items wm-200px">
												<div class="dropzone-item p-5" style="display:none">
													<!--begin::File-->
													<div class="dropzone-file">
														<div class="dropzone-filename text-dark" title="some_image_file_name.jpg">
															<span data-dz-name="">some_image_file_name.jpg</span>
															<strong>(
															<span data-dz-size="">340kb</span>)</strong>
														</div>
														<div class="dropzone-error mt-0" data-dz-errormessage=""></div>
													</div>
													<!--end::File-->
													<!--begin::Progress-->
													<div class="dropzone-progress">
														<div class="progress bg-gray-300">
															<div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
														</div>
													</div>
													<!--end::Progress-->
													<!--begin::Toolbar-->
													<div class="dropzone-toolbar">
														<span class="dropzone-start">
															<i class="ki-duotone ki-to-right fs-1"></i>
														</span>
														<span class="dropzone-cancel" data-dz-remove="" style="display: none;">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
														<span class="dropzone-delete" data-dz-remove="">
															<i class="ki-duotone ki-cross fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
													</div>
													<!--end::Toolbar-->
												</div>
											</div>
											<!--end::Items-->
										</div>
										<!--end::Dropzone-->
										<!--begin::Hint-->
										<span class="form-text fs-6 text-muted">Max file size is 1MB per file.</span>
										<!--end::Hint-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Modal body-->
							</form>
							<!--end::Form-->
						</div>
					</div>
				</div>
				<!--end::Modal - Upload File-->
				<!--begin::Modal - New Product-->
				<div class="modal fade" id="kt_modal_move_to_folder" tabindex="-1" aria-hidden="true">
					<!--begin::Modal dialog-->
					<div class="modal-dialog modal-dialog-centered mw-650px">
						<!--begin::Modal content-->
						<div class="modal-content">
							<!--begin::Form-->
							<form class="form" action="#" id="kt_modal_move_to_folder_form">
								<!--begin::Modal header-->
								<div class="modal-header">
									<!--begin::Modal title-->
									<h2 class="fw-bold">Move to folder</h2>
									<!--end::Modal title-->
									<!--begin::Close-->
									<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
										<i class="ki-duotone ki-cross fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</div>
									<!--end::Close-->
								</div>
								<!--end::Modal header-->
								<!--begin::Modal body-->
								<div class="modal-body pt-10 pb-15 px-lg-17">
									<!--begin::Input group-->
									<div class="form-group fv-row">
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="move_to_folder" type="radio" value="0" id="kt_modal_move_to_folder_0" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_move_to_folder_0">
													<div class="fw-bold">
													<i class="ki-duotone ki-folder fs-2 text-primary me-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>account</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="move_to_folder" type="radio" value="1" id="kt_modal_move_to_folder_1" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_move_to_folder_1">
													<div class="fw-bold">
													<i class="ki-duotone ki-folder fs-2 text-primary me-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>apps</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="move_to_folder" type="radio" value="2" id="kt_modal_move_to_folder_2" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_move_to_folder_2">
													<div class="fw-bold">
													<i class="ki-duotone ki-folder fs-2 text-primary me-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>widgets</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="move_to_folder" type="radio" value="3" id="kt_modal_move_to_folder_3" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_move_to_folder_3">
													<div class="fw-bold">
													<i class="ki-duotone ki-folder fs-2 text-primary me-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>assets</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="move_to_folder" type="radio" value="4" id="kt_modal_move_to_folder_4" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_move_to_folder_4">
													<div class="fw-bold">
													<i class="ki-duotone ki-folder fs-2 text-primary me-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>documentation</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="move_to_folder" type="radio" value="5" id="kt_modal_move_to_folder_5" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_move_to_folder_5">
													<div class="fw-bold">
													<i class="ki-duotone ki-folder fs-2 text-primary me-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>layouts</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="move_to_folder" type="radio" value="6" id="kt_modal_move_to_folder_6" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_move_to_folder_6">
													<div class="fw-bold">
													<i class="ki-duotone ki-folder fs-2 text-primary me-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>modals</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="move_to_folder" type="radio" value="7" id="kt_modal_move_to_folder_7" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_move_to_folder_7">
													<div class="fw-bold">
													<i class="ki-duotone ki-folder fs-2 text-primary me-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>authentication</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="move_to_folder" type="radio" value="8" id="kt_modal_move_to_folder_8" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_move_to_folder_8">
													<div class="fw-bold">
													<i class="ki-duotone ki-folder fs-2 text-primary me-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>dashboards</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
										<div class='separator separator-dashed my-5'></div>
										<!--begin::Item-->
										<div class="d-flex">
											<!--begin::Checkbox-->
											<div class="form-check form-check-custom form-check-solid">
												<!--begin::Input-->
												<input class="form-check-input me-3" name="move_to_folder" type="radio" value="9" id="kt_modal_move_to_folder_9" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_move_to_folder_9">
													<div class="fw-bold">
													<i class="ki-duotone ki-folder fs-2 text-primary me-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>pages</div>
												</label>
												<!--end::Label-->
											</div>
											<!--end::Checkbox-->
										</div>
										<!--end::Item-->
									</div>
									<!--end::Input group-->
									<!--begin::Action buttons-->
									<div class="d-flex flex-center mt-12">
										<!--begin::Button-->
										<button type="button" class="btn btn-primary" id="kt_modal_move_to_folder_submit">
											<span class="indicator-label">Save</span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<!--end::Button-->
									</div>
									<!--begin::Action buttons-->
								</div>
								<!--end::Modal body-->
							</form>
							<!--end::Form-->
						</div>
					</div>
				</div>
				<!--end::Modal - Move file-->
				<!--end::Modals-->
			</div>
			<!--end::Content container-->
		</div>
		<!--end::Content-->
	</div>
	<!--end::Content wrapper-->
	<!--begin::Footer-->
	<div id="kt_app_footer" class="app-footer">
		<!--begin::Footer container-->
		<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
			<!--begin::Copyright-->
			<div class="text-dark order-2 order-md-1">
				<span class="text-muted fw-semibold me-1">2023&copy;</span>
				<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
			</div>
			<!--end::Copyright-->
			<!--begin::Menu-->
			<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
				<li class="menu-item">
					<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
				</li>
				<li class="menu-item">
					<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
				</li>
				<li class="menu-item">
					<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
				</li>
			</ul>
			<!--end::Menu-->
		</div>
		<!--end::Footer container-->
	</div>
	<!--end::Footer-->
</div>
<!--end:::Main-->


<script>
    $("#tab_<?= $seq1; ?>").addClass('show');
	$("#tab_group_<?= $seq2; ?>").addClass('show');
	$("#tab_sub_<?= $seq3; ?>").addClass('active');
</script>

<script>
	"use strict";
var KTFileManagerList = (function () {
  var e, t, o, n, r, a;
  const l = () => {
      t.querySelectorAll(
        '[data-kt-filemanager-table-filter="delete_row"]'
      ).forEach((t) => {
        t.addEventListener("click", function (t) {
          t.preventDefault();
          const o = t.target.closest("tr"),
            n = o.querySelectorAll("td")[1].innerText;
          Swal.fire({
            text: "Are you sure you want to delete " + n + "?",
            icon: "warning",
            showCancelButton: !0,
            buttonsStyling: !1,
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "No, cancel",
            customClass: {
              confirmButton: "btn fw-bold btn-danger",
              cancelButton: "btn fw-bold btn-active-light-primary",
            },
          }).then(function (t) {
            t.value
              ? Swal.fire({
                  text: "You have deleted " + n + "!.",
                  icon: "success",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: { confirmButton: "btn fw-bold btn-primary" },
                }).then(function () {
                  e.row($(o)).remove().draw();
                })
              : "cancel" === t.dismiss &&
                Swal.fire({
                  text: customerName + " was not deleted.",
                  icon: "error",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: { confirmButton: "btn fw-bold btn-primary" },
                });
          });
        });
      });
    },
    i = () => {
      var o = t.querySelectorAll('[type="checkbox"]');
      "folders" === t.getAttribute("data-kt-filemanager-table") &&
        (o = document.querySelectorAll(
          '#kt_file_manager_list_wrapper [type="checkbox"]'
        ));
      const n = document.querySelector(
        '[data-kt-filemanager-table-select="delete_selected"]'
      );
      o.forEach((e) => {
        e.addEventListener("click", function () {
          console.log(e),
            setTimeout(function () {
              s();
            }, 50);
        });
      }),
        n.addEventListener("click", function () {
          Swal.fire({
            text: "Are you sure you want to delete selected files or folders?",
            icon: "warning",
            showCancelButton: !0,
            buttonsStyling: !1,
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "No, cancel",
            customClass: {
              confirmButton: "btn fw-bold btn-danger",
              cancelButton: "btn fw-bold btn-active-light-primary",
            },
          }).then(function (n) {
            n.value
              ? Swal.fire({
                  text: "You have deleted all selected  files or folders!.",
                  icon: "success",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: { confirmButton: "btn fw-bold btn-primary" },
                }).then(function () {
                  o.forEach((t) => {
                    t.checked &&
                      e
                        .row($(t.closest("tbody tr")))
                        .remove()
                        .draw();
                  });
                  t.querySelectorAll('[type="checkbox"]')[0].checked = !1;
                })
              : "cancel" === n.dismiss &&
                Swal.fire({
                  text: "Selected  files or folders was not deleted.",
                  icon: "error",
                  buttonsStyling: !1,
                  confirmButtonText: "Ok, got it!",
                  customClass: { confirmButton: "btn fw-bold btn-primary" },
                });
          });
        });
    },
    s = () => {
      const e = document.querySelector(
          '[data-kt-filemanager-table-toolbar="base"]'
        ),
        o = document.querySelector(
          '[data-kt-filemanager-table-toolbar="selected"]'
        ),
        n = document.querySelector(
          '[data-kt-filemanager-table-select="selected_count"]'
        ),
        r = t.querySelectorAll('tbody [type="checkbox"]');
      let a = !1,
        l = 0;
      r.forEach((e) => {
        e.checked && ((a = !0), l++);
      }),
        a
          ? ((n.innerHTML = l),
            e.classList.add("d-none"),
            o.classList.remove("d-none"))
          : (e.classList.remove("d-none"), o.classList.add("d-none"));
    },
    c = () => {
      const e = t.querySelector("#kt_file_manager_new_folder_row");
      e && e.parentNode.removeChild(e);
    },
    d = () => {
      t.querySelectorAll('[data-kt-filemanager-table="rename"]').forEach(
        (e) => {
          e.addEventListener("click", u);
        }
      );
    },
    u = (o) => {
      let r;
      if (
        (o.preventDefault(),
        t.querySelectorAll("#kt_file_manager_rename_input").length > 0)
      )
        return void Swal.fire({
          text: "Unsaved input detected. Please save or cancel the current item",
          icon: "warning",
          buttonsStyling: !1,
          confirmButtonText: "Ok, got it!",
          customClass: { confirmButton: "btn fw-bold btn-danger" },
        });
      const a = o.target.closest("tr"),
        l = a.querySelectorAll("td")[1],
        i = l.querySelector(".icon-wrapper");
      r = l.innerText;
      const s = n.cloneNode(!0);
      (s.querySelector("#kt_file_manager_rename_folder_icon").innerHTML =
        i.outerHTML),
        (l.innerHTML = s.innerHTML),
        (a.querySelector("#kt_file_manager_rename_input").value = r);
      var c = FormValidation.formValidation(l, {
        fields: {
          rename_folder_name: {
            validators: { notEmpty: { message: "Name is required" } },
          },
        },
        plugins: {
          trigger: new FormValidation.plugins.Trigger(),
          bootstrap: new FormValidation.plugins.Bootstrap5({
            rowSelector: ".fv-row",
            eleInvalidClass: "",
            eleValidClass: "",
          }),
        },
      });
      document
        .querySelector("#kt_file_manager_rename_folder")
        .addEventListener("click", (t) => {
          t.preventDefault(),
            c &&
              c.validate().then(function (t) {
                console.log("validated!"),
                  "Valid" == t &&
                    Swal.fire({
                      text: "Are you sure you want to rename " + r + "?",
                      icon: "warning",
                      showCancelButton: !0,
                      buttonsStyling: !1,
                      confirmButtonText: "Yes, rename it!",
                      cancelButtonText: "No, cancel",
                      customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary",
                      },
                    }).then(function (t) {
                      t.value
                        ? Swal.fire({
                            text: "You have renamed " + r + "!.",
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                              confirmButton: "btn fw-bold btn-primary",
                            },
                          }).then(function () {
                            const t = document.querySelector(
                                "#kt_file_manager_rename_input"
                              ).value,
                              o = `<div class="d-flex align-items-center">\n                                        ${i.outerHTML}\n                                        <a href="?page=apps/file-manager/files/" class="text-gray-800 text-hover-primary">${t}</a>\n                                    </div>`;
                            e.cell($(l)).data(o).draw();
                          })
                        : "cancel" === t.dismiss &&
                          Swal.fire({
                            text: r + " was not renamed.",
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                              confirmButton: "btn fw-bold btn-primary",
                            },
                          });
                    });
              });
        });
      const d = document.querySelector("#kt_file_manager_rename_folder_cancel");
      d.addEventListener("click", (t) => {
        t.preventDefault(),
          d.setAttribute("data-kt-indicator", "on"),
          setTimeout(function () {
            const t = `<div class="d-flex align-items-center">\n                    ${i.outerHTML}\n                    <a href="?page=apps/file-manager/files/" class="text-gray-800 text-hover-primary">${r}</a>\n                </div>`;
            d.removeAttribute("data-kt-indicator"),
              e.cell($(l)).data(t).draw(),
              (toastr.options = {
                closeButton: !0,
                debug: !1,
                newestOnTop: !1,
                progressBar: !1,
                positionClass: "toastr-top-right",
                preventDuplicates: !1,
                showDuration: "300",
                hideDuration: "1000",
                timeOut: "5000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
              }),
              toastr.error("Cancelled rename function");
          }, 1e3);
      });
    },
    m = () => {
      t.querySelectorAll('[data-kt-filemanger-table="copy_link"]').forEach(
        (e) => {
          const t = e.querySelector("button"),
            o = e.querySelector(
              '[data-kt-filemanger-table="copy_link_generator"]'
            ),
            n = e.querySelector(
              '[data-kt-filemanger-table="copy_link_result"]'
            ),
            r = e.querySelector("input");
          t.addEventListener("click", (e) => {
            var t;
            e.preventDefault(),
              o.classList.remove("d-none"),
              n.classList.add("d-none"),
              clearTimeout(t),
              (t = setTimeout(() => {
                o.classList.add("d-none"),
                  n.classList.remove("d-none"),
                  r.select();
              }, 2e3));
          });
        }
      );
    },
    f = () => {
      document.getElementById("kt_file_manager_items_counter").innerText =
        e.rows().count() + " items";
    };
  return {
    init: function () {
      (t = document.querySelector("#kt_file_manager_list")) &&
        ((o = document.querySelector(
          '[data-kt-filemanager-template="upload"]'
        )),
        (n = document.querySelector('[data-kt-filemanager-template="rename"]')),
        (r = document.querySelector('[data-kt-filemanager-template="action"]')),
        (a = document.querySelector(
          '[data-kt-filemanager-template="checkbox"]'
        )),
        (() => {
          t.querySelectorAll("tbody tr").forEach((e) => {
            const t = e.querySelectorAll("td")[4],
              o = moment(t.innerHTML, "DD MMM YYYY, LT").format();
            t.setAttribute("data-order", o);
          });
          const o = {
              info: !1,
              order: [],
              scrollY: "700px",
              scrollCollapse: !0,
              paging: !1,
              ordering: !1,
              columns: [
                { data: "checkbox" },
                { data: "name" },
                { data: "size" },
                { data: "date" },
                { data: "action" },
              ],
              language: {
                emptyTable: `<div class="d-flex flex-column flex-center">\n                    <img src="${hostUrl}media/illustrations/sketchy-1/5.png" class="mw-400px" />\n                    <div class="fs-1 fw-bolder text-dark">No items found.</div>\n                    <div class="fs-6">Start creating new folders or uploading a new file!</div>\n                </div>`,
              },
            },
            n = {
              info: !1,
              order: [],
              pageLength: 10,
              lengthChange: !1,
              ordering: !1,
              columns: [
                { data: "checkbox" },
                { data: "name" },
                { data: "size" },
                { data: "date" },
                { data: "action" },
              ],
              language: {
                emptyTable: `<div class="d-flex flex-column flex-center">\n                    <img src="${hostUrl}media/illustrations/sketchy-1/5.png" class="mw-400px" />\n                    <div class="fs-1 fw-bolder text-dark mb-4">No items found.</div>\n                    <div class="fs-6">Start creating new folders or uploading a new file!</div>\n                </div>`,
              },
              conditionalPaging: !0,
            };
          var r;
          (r =
            "folders" === t.getAttribute("data-kt-filemanager-table") ? o : n),
            (e = $(t).DataTable(r)).on("draw", function () {
              i(), l(), s(), c(), KTMenu.createInstances(), m(), f(), d();
            });
        })(),
        i(),
        document
          .querySelector('[data-kt-filemanager-table-filter="search"]')
          .addEventListener("keyup", function (t) {
            e.search(t.target.value).draw();
          }),
        l(),
        document
          .getElementById("kt_file_manager_new_folder")
          .addEventListener("click", (n) => {
            if (
              (n.preventDefault(),
              t.querySelector("#kt_file_manager_new_folder_row"))
            )
              return;
            const l = t.querySelector("tbody"),
              i = o.cloneNode(!0);
            l.prepend(i);
            const s = i.querySelector("#kt_file_manager_add_folder_form"),
              d = i.querySelector("#kt_file_manager_add_folder"),
              u = i.querySelector("#kt_file_manager_cancel_folder"),
              m = i.querySelector("#kt_file_manager_folder_icon"),
              f = i.querySelector('[name="new_folder_name"]');
            var p = FormValidation.formValidation(s, {
              fields: {
                new_folder_name: {
                  validators: {
                    notEmpty: { message: "Folder name is required" },
                  },
                },
              },
              plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                bootstrap: new FormValidation.plugins.Bootstrap5({
                  rowSelector: ".fv-row",
                  eleInvalidClass: "",
                  eleValidClass: "",
                }),
              },
            });
            d.addEventListener("click", (t) => {
              t.preventDefault(),
                d.setAttribute("data-kt-indicator", "on"),
                p &&
                  p.validate().then(function (t) {
                    console.log("validated!"),
                      "Valid" == t
                        ? setTimeout(function () {
                            const t = document.createElement("a");
                            t.setAttribute(
                              "href",
                              "?page=apps/file-manager/blank"
                            ),
                              t.classList.add(
                                "text-gray-800",
                                "text-hover-primary"
                              ),
                              (t.innerText = f.value);
                            const o = e.row
                              .add({
                                checkbox: a.innerHTML,
                                name: m.outerHTML + t.outerHTML,
                                size: "-",
                                date: "-",
                                action: r.innerHTML,
                              })
                              .node();
                            $(o)
                              .find("td")
                              .eq(4)
                              .attr(
                                "data-kt-filemanager-table",
                                "action_dropdown"
                              ),
                              $(o).find("td").eq(4).addClass("text-end");
                            for (
                              var n,
                                l = e.row(0).index(),
                                i = e.data().length - 1,
                                s = e.row(i).data(),
                                c = i;
                              c > l;
                              c--
                            )
                              (n = e.row(c - 1).data()),
                                e.row(c).data(n),
                                e.row(c - 1).data(s);
                            (toastr.options = {
                              closeButton: !0,
                              debug: !1,
                              newestOnTop: !1,
                              progressBar: !1,
                              positionClass: "toastr-top-right",
                              preventDuplicates: !1,
                              showDuration: "300",
                              hideDuration: "1000",
                              timeOut: "5000",
                              extendedTimeOut: "1000",
                              showEasing: "swing",
                              hideEasing: "linear",
                              showMethod: "fadeIn",
                              hideMethod: "fadeOut",
                            }),
                              toastr.success(f.value + " was created!"),
                              d.removeAttribute("data-kt-indicator"),
                              (f.value = ""),
                              e.draw(!1);
                          }, 2e3)
                        : d.removeAttribute("data-kt-indicator");
                  });
            }),
              u.addEventListener("click", (e) => {
                e.preventDefault(),
                  u.setAttribute("data-kt-indicator", "on"),
                  setTimeout(function () {
                    u.removeAttribute("data-kt-indicator"),
                      (toastr.options = {
                        closeButton: !0,
                        debug: !1,
                        newestOnTop: !1,
                        progressBar: !1,
                        positionClass: "toastr-top-right",
                        preventDuplicates: !1,
                        showDuration: "300",
                        hideDuration: "1000",
                        timeOut: "5000",
                        extendedTimeOut: "1000",
                        showEasing: "swing",
                        hideEasing: "linear",
                        showMethod: "fadeIn",
                        hideMethod: "fadeOut",
                      }),
                      toastr.error("Cancelled new folder creation"),
                      c();
                  }, 1e3);
              });
          }),
        (() => {
          const e = "#kt_modal_upload_dropzone",
            t = document.querySelector(e);
          var o = t.querySelector(".dropzone-item");
          o.id = "";
          var n = o.parentNode.innerHTML;
          o.parentNode.removeChild(o);
          var r = new Dropzone(e, {
            url: "path/to/your/server",
            parallelUploads: 10,
            previewTemplate: n,
            maxFilesize: 1,
            autoProcessQueue: !1,
            autoQueue: !1,
            previewsContainer: e + " .dropzone-items",
            clickable: e + " .dropzone-select",
          });
          r.on("addedfile", function (o) {
            (o.previewElement.querySelector(e + " .dropzone-start").onclick =
              function () {
                const e = o.previewElement.querySelector(".progress-bar");
                e.style.opacity = "1";
                var t = 1,
                  n = setInterval(function () {
                    t >= 100
                      ? (r.emit("success", o),
                        r.emit("complete", o),
                        clearInterval(n))
                      : (t++, (e.style.width = t + "%"));
                  }, 20);
              }),
              t.querySelectorAll(".dropzone-item").forEach((e) => {
                e.style.display = "";
              }),
              (t.querySelector(".dropzone-upload").style.display =
                "inline-block"),
              (t.querySelector(".dropzone-remove-all").style.display =
                "inline-block");
          }),
            r.on("complete", function (e) {
              const o = t.querySelectorAll(".dz-complete");
              setTimeout(function () {
                o.forEach((e) => {
                  (e.querySelector(".progress-bar").style.opacity = "0"),
                    (e.querySelector(".progress").style.opacity = "0"),
                    (e.querySelector(".dropzone-start").style.opacity = "0");
                });
              }, 300);
            }),
            t
              .querySelector(".dropzone-upload")
              .addEventListener("click", function () {
                r.files.forEach((e) => {
                  const t = e.previewElement.querySelector(".progress-bar");
                  t.style.opacity = "1";
                  var o = 1,
                    n = setInterval(function () {
                      o >= 100
                        ? (r.emit("success", e),
                          r.emit("complete", e),
                          clearInterval(n))
                        : (o++, (t.style.width = o + "%"));
                    }, 20);
                });
              }),
            t
              .querySelector(".dropzone-remove-all")
              .addEventListener("click", function () {
                Swal.fire({
                  text: "Are you sure you would like to remove all files?",
                  icon: "warning",
                  showCancelButton: !0,
                  buttonsStyling: !1,
                  confirmButtonText: "Yes, remove it!",
                  cancelButtonText: "No, return",
                  customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light",
                  },
                }).then(function (e) {
                  e.value
                    ? ((t.querySelector(".dropzone-upload").style.display =
                        "none"),
                      (t.querySelector(".dropzone-remove-all").style.display =
                        "none"),
                      r.removeAllFiles(!0))
                    : "cancel" === e.dismiss &&
                      Swal.fire({
                        text: "Your files was not removed!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: { confirmButton: "btn btn-primary" },
                      });
                });
              }),
            r.on("queuecomplete", function (e) {
              t.querySelectorAll(".dropzone-upload").forEach((e) => {
                e.style.display = "none";
              });
            }),
            r.on("removedfile", function (e) {
              r.files.length < 1 &&
                ((t.querySelector(".dropzone-upload").style.display = "none"),
                (t.querySelector(".dropzone-remove-all").style.display =
                  "none"));
            });
        })(),
        m(),
        d(),
        (() => {
          const e = document.querySelector("#kt_modal_move_to_folder"),
            t = e.querySelector("#kt_modal_move_to_folder_form"),
            o = t.querySelector("#kt_modal_move_to_folder_submit"),
            n = new bootstrap.Modal(e);
          var r = FormValidation.formValidation(t, {
            fields: {
              move_to_folder: {
                validators: {
                  notEmpty: { message: "Please select a folder." },
                },
              },
            },
            plugins: {
              trigger: new FormValidation.plugins.Trigger(),
              bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: ".fv-row",
                eleInvalidClass: "",
                eleValidClass: "",
              }),
            },
          });
          o.addEventListener("click", (e) => {
            e.preventDefault(),
              o.setAttribute("data-kt-indicator", "on"),
              r &&
                r.validate().then(function (e) {
                  console.log("validated!"),
                    "Valid" == e
                      ? setTimeout(function () {
                          Swal.fire({
                            text: "Are you sure you would like to move to this folder",
                            icon: "warning",
                            showCancelButton: !0,
                            buttonsStyling: !1,
                            confirmButtonText: "Yes, move it!",
                            cancelButtonText: "No, return",
                            customClass: {
                              confirmButton: "btn btn-primary",
                              cancelButton: "btn btn-active-light",
                            },
                          }).then(function (e) {
                            e.isConfirmed
                              ? (t.reset(),
                                n.hide(),
                                (toastr.options = {
                                  closeButton: !0,
                                  debug: !1,
                                  newestOnTop: !1,
                                  progressBar: !1,
                                  positionClass: "toastr-top-right",
                                  preventDuplicates: !1,
                                  showDuration: "300",
                                  hideDuration: "1000",
                                  timeOut: "5000",
                                  extendedTimeOut: "1000",
                                  showEasing: "swing",
                                  hideEasing: "linear",
                                  showMethod: "fadeIn",
                                  hideMethod: "fadeOut",
                                }),
                                toastr.success("1 item has been moved."),
                                o.removeAttribute("data-kt-indicator"))
                              : (Swal.fire({
                                  text: "Your action has been cancelled!.",
                                  icon: "error",
                                  buttonsStyling: !1,
                                  confirmButtonText: "Ok, got it!",
                                  customClass: {
                                    confirmButton: "btn btn-primary",
                                  },
                                }),
                                o.removeAttribute("data-kt-indicator"));
                          });
                        }, 500)
                      : o.removeAttribute("data-kt-indicator");
                });
          });
        })(),
        f(),
        KTMenu.createInstances());
    },
  };
})();
KTUtil.onDOMContentLoaded(function () {
  KTFileManagerList.init();
});

</script>