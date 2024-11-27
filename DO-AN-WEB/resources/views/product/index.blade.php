@extends('layout.layout')
@section('content')
@endsection
@section('main_content')
<div class="card-body">
    <p class="text-muted">
        Danh sach san pham
    </p>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên san pham</th>
                    <th>Thuong hieu</th>
                    <th>Gia</th>
                    <th>Mo Ta</th>
                    <th>So Luong</th>
                    <th>Hinh anh</th>

                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->brand_id }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>{{ $product->desc }}</td>
                    <td>{{ $product->product_sold }}</td>
                    <td>{{ $product->product_image }}</td>

                    <td>
                        <!-- Delete Button Form -->
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection