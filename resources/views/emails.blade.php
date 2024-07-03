@extends('layouts.main')
 
 @section('title', 'Emails')


 @section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emails</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        
table {
  border-collapse: collapse;
  width: 80%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #D6EEEE;
}
</style>
</head>
<body>
    <div class="container mt-5">
        <h3>Emails :</h3>
        
        @if(count($emails) > 0)
            
            <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>EMAILS</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <br>
                @foreach($emails as $email)
                <tr>
                    <td>{{ $email->id }}</td>
                    <td>{{ $email->email }}</td>
                    <td>
                    <form action="{{ url('/email', $email->id) }}" method="post" class="row">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" >Delete</button>
                        </form>
                        </td>
                </tr>
                @endforeach
            </ul>
        @else
            <p>No emails found.</p>
        @endif
    </div>
</body>
</html>
@endsection

