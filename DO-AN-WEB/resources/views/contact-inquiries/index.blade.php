@extends('layout.layout')
@section('content')
@endsection
@section('main_content')
<div class="card-body">
    <p class="text-muted">
        Danh Sách Liên Hệ
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
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Số Điện Thoại</th>
                    <th>Thông tin</th>
                    <th>Ngày Tạo</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inquiries as $inquiry)
                <tr>
                    <td>{{ $inquiry->name }}</td>
                    <td>{{ $inquiry->email }}</td>
                    <td>{{ $inquiry->SDT }}</td>
                    <td>{{ $inquiry->message }}</td>
                    <td>{{ $inquiry->created_at }}</td>
                    <td>
                        <!-- Delete Button Form -->
                        <form action="{{ route('inquiries.destroy', $inquiry->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa thông tin này?');">
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
@endsection