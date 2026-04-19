@extends('student.layout')
@section('content')
    <h1>www</h1>

// الاتصال بقاعدة البيانات
$host = "localhost";
$user = "root";
$pass = "";
$db = "zain";

// التأكد من الاتصال وطباعة اذا كان مشكلة في الاتصال
$conn = new mysqli($host, $user, $pass, $db);

    $sql = "SELECT * FROM users LIMIT 10";
    $result = $conn->query($sql);

    @if ($result){
    <table border="1" style="width:50%; border-collapse: collapse; text-align: center; margin: auto;">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>

         @while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["name"] ?></td>
                <td><?= $row["email"] ?></td>
            </tr>
        @endwhile;
    </table>
    }
    @else {
        echo "No data found";
    }
    @endif


@endsection
