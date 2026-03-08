<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A clean and professional web calculator built with Laravel.">
    <title>Calculator — Laravel App</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/calculator.css') }}">
</head>
<body>

    <div class="card">
        <div class="card-header">
            <div class="icon">🧮</div>
            <h1>Calculator</h1>
            <p>Simple · Fast · Precise</p>
        </div>

        @if(isset($result))
            <div class="result-box">
                <span class="result-label">Result</span>
                <span class="result-value">{{ $result }}</span>
            </div>
        @endif

        <form action="/calculate" method="POST">
            @csrf
            <div class="row">
                <div class="form-group">
                    <label for="num1">First Number</label>
                    <input
                        type="number"
                        id="num1"
                        name="num1"
                        placeholder="0"
                        step="any"
                        required
                    >
                </div>
                <div class="form-group">
                    <label for="num2">Second Number</label>
                    <input
                        type="number"
                        id="num2"
                        name="num2"
                        placeholder="0"
                        step="any"
                        required
                    >
                </div>
            </div>

            <div class="form-group">
                <label for="operation">Operation</label>
                <div class="select-wrapper">
                    <select id="operation" name="operation">
                        <option value="add">＋  Addition</option>
                        <option value="subtract">－  Subtraction</option>
                        <option value="multiply">×  Multiplication</option>
                        <option value="divide">÷  Division</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn">Calculate</button>
        </form>
    </div>

</body>
</html>
