@extends('layout.layout')
@section('content')
@endsection
@section('main_content')

<div class="row">
								<div class="row row-sm">
									<div class="col-lg-12">
										<div class="card">
											<div class="card-header border-bottom">
												<h3 class="card-title">Quản lý đơn hàng</h3>
											</div>
											<div class="card-body">
											
												<div class="table-responsive deleted-table">
									
													<table id="delete-datatable" class="table editable-table table-nowrap table-bordered table-edit">
														<thead>
															<tr>
																<th>ID ORDER</th>
																<th>ID KHÁCH HÀNG</th>
																<th>ID VẬN CHUYỂN</th>
																<th>TRẠNG THÁI</th>
																<th>MÃ ORDER</th>
                                                                <th>Edit</th>
															</tr>
														</thead>
														<tbody>
														@foreach($orders as $order)
            <tr>
                <td>{{ $order->order_id }}</td>
                <td>{{ $order->customer_id }}</td>
                <td>{{ $order->shipping_id }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->order_code }}</td>
				<td>
                    <!-- Edit Action -->
                    <!-- Delete Action -->
					<form 
                        style="display:inline-block;">
                        <a href="{{ route('order.update') }}" type="submit" class="btn btn-primary fs-14 btn-danger">
							Sửa
						</a>
                    </form>
                    <form action="{{ route('orders.destroy', $order->order_id) }}" method="POST"
                        style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary fs-14 btn-danger"
                            onclick="return confirm('Bạn có chắc chắn muốn xóa bình luận này?');">
                            Xóa
                        </button>
                    </form>
                </td>  
            </tr>
            @endforeach
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
@endsection