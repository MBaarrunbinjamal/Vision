<!DOCTYPE html>
<html>
<head>
    <title>Users PDF</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 6px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>All Registered Users</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>  
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Registered At</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td> 
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->Role }}</td>
                <td>{{ $user->created_at->format('Y-m-d H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
