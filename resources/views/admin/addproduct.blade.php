@extends('../layouts/mainadmin')
@section('core')						
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Form-->
								<form method="POST" action="storeproduct" enctype="multipart/form-data" id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row">
									@csrf
									<!--begin::Aside column-->
									<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
										<!--begin::Thumbnail settings-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<!--begin::Card title-->
												<div class="card-title">
													<h2>Image</h2>
												</div>
												<!--end::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body text-center pt-0">
												<!--begin::Image input-->
												<div class="image-input image-input-empty image-input-outline mb-3 w-150px h-150px" data-kt-image-input="true" style="background-image: url(../assets/media/svg/files/blank-image-dark.svg)">
													<!--begin::Preview existing avatar-->
													<div class="image-input-wrapper w-150px h-150px"></div>
													<!--end::Preview existing avatar-->
													<!--begin::Label-->
													<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
														<i class="bi bi-pencil-fill fs-7"></i>
														<!--begin::Inputs-->
														<input type="file" name="avatar"/>
														<input type="hidden" name="avatar_remove" />
														<!--end::Inputs-->
													</label>
													<!--end::Label-->
													<!--begin::Cancel-->
													<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
														<i class="bi bi-x fs-2"></i>
													</span>
													<!--end::Cancel-->
													<!--begin::Remove-->
													<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
														<i class="bi bi-x fs-2"></i>
													</span>
													<!--end::Remove-->
												</div>
												<!--end::Image input-->

												<!--begin::Description-->
												<div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Thumbnail settings-->
										<!--begin::Category & tags-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<!--begin::Card title-->
												<div class="card-title">
													<h2>Product Details</h2>
												</div>
												<!--end::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">
												<!--end::Button-->
												<!--begin::Input group-->
												<!--begin::Label-->
												<label class="form-label d-block">Warna/Motif</label>
												<!--end::Label-->
												<!--begin::Input-->
												<input id="kt_ecommerce_add_product_tags" name="detail1" class="form-control mb-2 fs-7" value="" placeholder="........................"/>
												<input id="kt_ecommerce_add_product_tags" name="detail2" class="form-control mb-2 fs-7" value="" placeholder="........................"/>
												<input id="kt_ecommerce_add_product_tags" name="detail3" class="form-control mb-2 fs-7" value="" placeholder="........................"/>
												<input id="kt_ecommerce_add_product_tags" name="detail4" class="form-control mb-2 fs-7" value="" placeholder="........................"/>
												<input id="kt_ecommerce_add_product_tags" name="detail5" class="form-control mb-2 fs-7" value="" placeholder="........................"/>
												<!--end::Input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Add Motif to a product.</div>
												<!--end::Description-->
												<!--end::Input group-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Category & tags-->
									</div>
									<!--end::Aside column-->
									<!--begin::Main column-->
									<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
										<!--begin::Tab content-->
										<div class="tab-content">
											<!--begin::Tab pane-->
											<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
												<div class="d-flex flex-column gap-7 gap-lg-10">
													<!--begin::General options-->
													<div class="card card-flush py-4">
														<!--begin::Card header-->
														<div class="card-header">
															<div class="card-title">
																<h2>General</h2>
															</div>
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0">
															<!--begin::Input group-->
															<div class="mb-10 fv-row">
																<!--begin::Label-->
																<label class="required form-label">Product Name</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" name="nama" class="form-control mb-2" placeholder="Product name" value="" />
																<!--end::Input-->
																<!--begin::Description-->
																<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
																<!--end::Description-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="mb-10 fv-row">
																<!--begin::Label-->
																<label class="required form-label">Quality</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" name="jumlah" class="form-control mb-2" placeholder="Quality" value="" />
																<!--end::Input-->
																<!--begin::Description-->
																<div class="text-muted fs-7">A Quality is required and recommended to be number.</div>
																<!--end::Description-->
															</div>
															<!--end::Input group-->
															
															<!--begin::Input group-->
															<div>
																<!--begin::Label-->
																<label class="form-label">Description</label>
																<!--end::Label-->
																<!--begin::Editor-->
																<textarea id="kt_ecommerce_add_product_description" name="keterangan" class="form-control mb-2 min-h-100px mb-2" placeholder="Silahkan masukkan deskripsi"></textarea>
																<!--end::Editor-->
																<!--begin::Description-->
																<div class="text-muted fs-7">Set a description to the product for better visibility.</div>
																<!--end::Description-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Card header-->
													</div>
													<!--end::General options-->
										<!--begin::Status-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<!--begin::Card title-->
												<div class="card-title">
													<h2>Size</h2>
												</div>
												<!--end::Card title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
												</div>
												<!--begin::Card toolbar-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">
												<!--begin::Select2-->
												<!--end::Select2-->

																<!--begin::Row-->
																<div class="row" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
																	<!--begin::Col-->
																	<div class="col">
																		<!--begin::Option-->
																		<label class="btn btn-outline btn-outline-dashed btn-outline-default d-inline-flex text-start p-3 w-100" data-kt-button="true">
																			<!--begin::Radio-->
																			<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																				<input class="form-check-input" type="checkbox" name="ukurans" value="1" />
																			</span>
																			<!--end::Radio-->
																			<!--begin::Info-->
																			<span class="ms-5">
																				<span class="fs-6 fw-bolder text-gray-800 d-block">S</span>
																			</span>
																			<!--end::Info-->
																		</label>
																		<!--end::Option-->
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="col">
																		<!--begin::Option-->
																		<label class="btn btn-outline btn-outline-dashed btn-outline-default d-inline-flex text-start p-3 w-100" data-kt-button="true">
																			<!--begin::Radio-->
																			<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																				<input class="form-check-input" type="checkbox" name="ukuranm" value="2" />
																			</span>
																			<!--end::Radio-->
																			<!--begin::Info-->
																			<span class="ms-5">
																				<span class="fs-6 fw-bolder text-gray-800 d-block">M</span>
																			</span>
																			<!--end::Info-->
																		</label>
																		<!--end::Option-->
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="col">
																		<!--begin::Option-->
																		<label class="btn btn-outline btn-outline-dashed btn-outline-default d-inline-flex text-start p-3 w-100" data-kt-button="true">
																			<!--begin::Radio-->
																			<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																				<input class="form-check-input" type="checkbox" name="ukuranl" value="1" />
																			</span>
																			<!--end::Radio-->
																			<!--begin::Info-->
																			<span class="ms-5">
																				<span class="fs-6 fw-bolder text-gray-800 d-block">L</span>
																			</span>
																			<!--end::Info-->
																		</label>
																		<!--end::Option-->
																	</div>
																	<!--end::Col-->																	
																	<!--begin::Col-->
																	<div class="col">
																		<!--begin::Option-->
																		<label class="btn btn-outline btn-outline-dashed btn-outline-default d-inline-flex text-start p-3 w-100" data-kt-button="true">
																			<!--begin::Radio-->
																			<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																				<input class="form-check-input" type="checkbox" name="ukuranxl" value="3" />
																			</span>
																			<!--end::Radio-->
																			<!--begin::Info-->
																			<span class="ms-5">
																				<span class="fs-6 fw-bolder text-gray-800 d-block">XL</span>
																			</span>
																			<!--end::Info-->
																		</label>
																		<!--end::Option-->
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Row-->
												<!--begin::Description-->
												<div class="text-muted fs-7">Set the product size.</div>
												<!--end::Description-->
												<!--begin::Datepicker-->
												<div class="d-none mt-10">
													<label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
													<input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date &amp; time" />
												</div>
												<!--end::Datepicker-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Status-->
													
													<!--begin::Pricing-->
													<div class="card card-flush py-4">
														<!--begin::Card header-->
														<div class="card-header">
															<div class="card-title">
																<h2>Pricing</h2>
															</div>
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0">
															<!--begin::Input group-->
															<div class="mb-10 fv-row">
																<!--begin::Label-->
																<label class="required form-label">Base Price</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" name="harga" class="form-control mb-2" placeholder="Product price" value="" />
																<!--end::Input-->
																<!--begin::Description-->
																<div class="text-muted fs-7">Set the product price.</div>
																<!--end::Description-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Card header-->
													</div>
													<!--end::Pricing-->
												</div>
											</div>
											<!--end::Tab pane-->
										</div>
										<!--end::Tab content-->
										<div class="d-flex justify-content-end">
											<!--begin::Button-->
											<a href="../../demo1/dark/apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
											<!--end::Button-->
											<!--begin::Button-->
											<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
												<span class="indicator-label">Save Changes</span>
												<span class="indicator-progress">Please wait... 
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<!--end::Button-->
										</div>
									</div>
									<!--end::Main column-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
@endsection
