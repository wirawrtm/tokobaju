@extends('../layouts/mainadmin')
@section('core')						
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Products-->
								<div class="card card-flush">
									<!--begin::Card header-->
									<div class="card-header align-items-center py-5 gap-2 gap-md-5">
										<h1 class="d-flex text-dark fw-bolder fs-1 align-items-center my">{{$produk2->namatoko}} </h1>
										<!--begin::Card title-->
										<!--end::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												<span class="svg-icon svg-icon-1 position-absolute ms-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
											</div>
											<!--end::Search-->
										</div>
										<!--end::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
											<!--begin::Table head-->
											<thead>
												<!--begin::Table row-->
												<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
													<th class="w-10px pe-2">
														<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
															<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
														</div>
													</th>
													<th class="min-w-200px">Product</th>
													<th class="text-center min-w-70px">Qty</th>
													<th class="text-center min-w-100px">Price/item</th>
													<th class="text-center min-w-100px">Total</th>
													<th class="text-center min-w-70px">Actions</th>
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fw-bold text-gray-600">
												@foreach ($produk->where('iduser', $produk2->id) as $prod)
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="showproduct/{{$prod->idbarang}}" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url({{asset('storage/'.$prod->produk->foto)}});"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="showproduct/{{$prod->idbarang}}" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">{{$prod->produk->nama}}</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Qty=-->
													<td class="text-center " data-order="15">
														<span class="fw-bolder">{{$prod->jumlah}} </span>
													</td>
													<!--end::Qty=-->
													<!--begin::Price=-->
													<td class="text-center ">
														<span class="fw-bolder text-dark">{{number_format($prod->produk->harga,0,',','.')}} </span>
													</td>
													<!--end::Price=-->
													<!--begin::Qty=-->
													<td class="text-center " data-order="15">
														<span class="fw-bolder ms-3">
															{{number_format(($prod->jumlah*$prod->produk->harga),0,',','.')}}
														 </span>
													</td>
													<!--end::Qty=-->
													<!--begin::Action=-->
													<td class="text-center">
															<!--begin::Label-->
                                                            @if ($prod->kirim == 'belum kirim')
															<span class="fw-bolder badge badge-light-primary p-3 w-100 d-flex justify-content-center">{{$prod->kirim}} </span>
                                                            @endif
                                                            @if ($prod->kirim == 'kirim')
															<span class="fw-bolder badge badge-light-success p-3 w-100 d-flex justify-content-center">{{$prod->kirim}}</span>
                                                            @endif
                                                            @if ($prod->kirim == 'tolak')
															<span class="fw-bolder badge badge-light-danger p-3 w-100 d-flex justify-content-center">{{$prod->kirim}}</span>
                                                            @endif

															<!--end::Label-->													
                                                    </td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
											@endforeach
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Products-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
@endsection