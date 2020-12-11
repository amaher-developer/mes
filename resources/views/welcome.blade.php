<!DOCTYPE html>
<html>
<head>
    <title>Import Excel File in Laravel</title>
    <link rel="shortcut icon" href="https://mideastsoft.com/0.3/wp-content/uploads/2019/06/icon-color.png" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br />

<div class="container">
    <h3 align="center">Import Excel File (books.xlsx)</h3>
    <br />
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            Upload Validation Error<br><br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <form method="post" enctype="multipart/form-data" action="{{ route('upload') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <table class="table">
                <tr>
                    <td width="40%" align="right"><label>Select File for Upload</label></td>
                    <td width="30">
                        <input type="file" name="select_file" />
                    </td>
                    <td width="30%" align="left">
                        <input type="submit" name="upload" class="btn btn-primary" value="Upload">
                    </td>
                </tr>
                <tr>
                    <td width="40%" align="right"></td>
                    <td width="30"><span class="text-muted">.xls, .xslx</span></td>
                    <td width="30%" align="left"></td>
                </tr>
            </table>
        </div>
    </form>

    @if($books)
    <br />
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Books</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Book ID</th>
                        <th>Book Name</th>
                        <th>Book Description</th>
                        <th>Author Name</th>
                    </tr>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->description }}</td>
                            <td>{{ $book->author->name }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    @endif
</div>
</body>
</html>
