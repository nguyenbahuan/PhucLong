<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h1 style="text-align: center">Danh sách nhân viên</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Tên Nhân Viên</th>
            <th scope="col">Email</th>
            <th scope="col" >Giới tính</th>
            <th scope="col" >Năm Sinh</th>
            <th scope="col" >Chức Năng</th>
          </tr>
        </thead>
        @foreach ($data as $item )
            <tbody>
                <tr>
                    <th scope="row">{{ $item->Ten }}</th>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->GioiTinh }}</td>
                    <td>{{ explode(' ', $item->NamSinh)[0] }}</td>
                    <td><a href="/index/{{ $item->std_id }}" class="btn btn-success" role="button">chi tiết</a>
                        {{-- <a href="/delete/{{  }}" class="btn btn-danger" role="button" onclick="return confirm('bạn có muốn xóa không ?');">delete</a> --}}
                    </td>
                </tr>
            </tbody>
            
        @endforeach
      </table>
</body>
</html>