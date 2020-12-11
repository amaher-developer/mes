<!DOCTYPE html>
<html>
<head>
    <title>Laravel Mail Queue Message</title>
</head>
<body>
<h2>Report of file excel uploaded</h2>
<p>
    <ul>
    @foreach($data as $d)
        <li><b>Status of Process:</b> {!! $d['status'] = 'true' ? '<span style="color:green;">'.$d['status'].'</span>' : '<span style="color:red;">'.$d['status'].'</span>' !!}</li>
        <li><b>Book Name:</b> {{$d['data']['name']}}</li>
        <li><b>Author Name:</b> {{$d['data']['author']}}</li>
        <br/><br/><hr/><br/><br/>
    @endforeach
    </ul>
</p>
</body>
</html>
