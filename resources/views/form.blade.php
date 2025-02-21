<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Addition</title>
    <style>
        body {
            background-color: pink;
        }

        .container {
            margin: 20px 250px;
            width: 50%;
            background-color: bisque;
            padding: 20px;
            text-align: center;
        }

        .result {
            color: green;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Addition</h2>
        <form action="/form" method="POST">
            @csrf
            <label for="num1">Number 1:</label>
            <input type="number" name="num1" required value="{{ request('num1') }}">
            <br><br>

            <label for="num2">Number 2:</label>
            <input type="number" name="num2" required value="{{ request('num2') }}">
            <br><br>

            @if(isset($result))
            <h3 class="result">Result: {{ $result }}</h3>
            @endif

            <button type="submit">Calculate</button>

        </form>
    </div>

</body>

</html>