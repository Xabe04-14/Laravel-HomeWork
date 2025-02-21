<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        font-size: 18px;
        font-family: 'Times New Roman', Times, serif;
    }

    .container {
        background-color: pink;
        width: 50%;
        padding: 20px;
        margin: 20px 250px;
        border-radius: 18px;
    }

    h2 {
        font-size: 36px;
        color: brown;
        text-align: center;
    }

    form {
        margin: 20px 50px;
    }

    input {
        margin-top: 6px;
        width: 500px;
    }

    .btn {
        width: 100px;
        margin-left: 200px;
        text-align: center;
        background-color: pink;
        padding: 5px;
        border-radius: 8px;
        border-color: pink;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .btn-delete{
        width: 150px;
        margin-bottom: 10px;
        text-align: center;
        background-color: pink;
        padding: 5px;
        border-radius: 8px;
        border-color: pink;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .displayInfor {
        color: darkgreen;
        font-size: bolder;
    }

    .alert,.btn-delete {
        color: red;
    }
</style>

<body>
    <div class="container">
        <h2>Let's register Now!!!!!!</h2>
        <form action="/signup" method="POST">
            @csrf
            <label for="name">Your Full Name</label>
            <br>
            <input type="text" name="name" required>
            <br><br>
            <label for="age">Your Age</label><br>
            <input type="number" name="age" required>
            <br><br>
            <label for="date">Your BirthDay</label><br>
            <input type="date" name="date" required>
            <br><br>
            <label for="tel">Your Phone</label><br>
            <input type="tel" name="phone" required>
            <br><br>
            <label for="web">Your Website</label><br>
            <input type="url" name="web" required>
            <br><br>
            <label for="addr">Your Adress</label><br>
            <input type="text" name="addr" required>
            <br><br>
            <div>
                @include ('blocks.error')
            </div>
            <button type="submit" class='btn'>OK</button>

            <div class="displayInfor">
                <h2>Danh sách người dùng</h2>
                <br>
                @if(isset($users) && count($users)>0)
                @foreach (session('users') as $user)
                <ul>
                    <p>Your Name: {{ $user['name'] }}</p><br>
                    <p>Your Date: {{ $user['date'] }}</p><br>
                    <p>Your Phone: {{ $user['phone'] }}</p><br>
                    <p>Your Website: {{ $user['web'] }}</p><br>
                    <p>Your Address: {{ $user['addr'] }}</p><br>
                    <button class="btn-delete">Xóa danh sách</button>
                    <hr>
                    <br>
                </ul>
             
                @endforeach
                @endif
              
            </div>
        </form>
    </div>
</body>

</html>