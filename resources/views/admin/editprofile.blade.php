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
												<div class="image-input image-input-empty image-input-outline mb-3 w-150px h-150px" data-kt-image-input="true" style="background-image: url({{asset ('storage/'.$tampil->foto)}} )">
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
                                                <div class="mb-1 fv-row">
                                                    <!--begin::Label-->
                                                    <label class="required form-label">Nama Toko</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="nama" class="form-control mb-5" placeholder="Product name" value="{{$tampil->namatoko}} " />
                                                    <!--end::Input-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Edit nama toko</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->
                                                
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
																<label class="required form-label">Name</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" name="nama" class="form-control mb-2" placeholder="Product name" value="{{$tampil->nama}} " />
																<!--end::Input-->
																<!--begin::Description-->
																<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
																<!--end::Description-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="mb-10 fv-row">
																<!--begin::Label-->
																<label class="required form-label">Email</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" name="nama" class="form-control mb-2" placeholder="Product name" value="{{$tampil->email}}" />
																<!--end::Input-->
																<!--begin::Description-->
																<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
																<!--end::Description-->
															</div>
															<!--end::Input group-->
                                                            
															<!--begin::Input group-->
															<div>
																<!--begin::Label-->
																<label class="form-label">Description</label>
																<!--end::Label-->
																<!--begin::Editor-->
																<textarea id="kt_ecommerce_add_product_description" name="keterangan" class="form-control mb-2 min-h-100px mb-2" placeholder="Silahkan masukkan deskripsi">{{$tampil->keterangan}}</textarea>
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