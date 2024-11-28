@extends('layout.layout')
@section('content')
@endsection
@section('main_content')
<div class="col-lg-6 col-md-">
										<div class="card custom-card">
											<div class="card-header border-bottom">
												<h3 class="card-title">Cập nhật</h3>
											</div>
											<div class="card-body">
												<p class="text-muted">Chỉnh sửa thông tin</p>
												<div class="d-flex flex-column">
												
													<p class="text-muted">Trạng thái</p>
													<div class="form-group">
														<input class="form-control" value="{{ $order->status }}" placeholder="" type="text">
													</div>
													<p class="text-muted">Mã Order</p>
													<div class="form-group">
														<input class="form-control" value="{{ $order->order_code }}" placeholder="" type="text">
													</div>
													<form action="{{ route('order.update', $order->order_id) }}" method="POST" style="display:inline-block;">
                        							@csrf
                        							@method('PUT')
                        							<button type="submit" class="btn btn-primary fs-14 btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này?');">Lưu</button>
												
                    								</form>
												
												</div>
											</div>
										</div>
								</div>

@endsection