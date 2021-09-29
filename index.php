<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>Привет мир!</title>
</head>
<body>
<?php
function calc()
{
    $message = "Нечего считать ((((";
    if (isset($_POST['btnCalc'])){
        if (isset($_POST['a']) && !empty ($_POST['a']))
        {
            $a = $_POST['a'];
        };
        if (isset($_POST['b']) && !empty ($_POST['b']))
        {
            $b = $_POST['b'];
        };
        if (isset($_POST['action']) && !empty ($_POST['action']))
        {
            $action = $_POST['action'];
        };
        switch ($action)
        {
            case '-': $message =  "$a - $b ="; $message .= $a-$b; break;
            case '+': $message =  "$a + $b ="; $message .= $a+$b; break;
            case '/': $message =  "$a / $b ="; $message .= $a/$b;
                if(isset($_POST['b'  == '0']))
                {
                    $message = "Так нельзя";
                }
                break;
            case '*': $message =  "$a * $b ="; $message .= $a*$b; break;
            default: $message = "WTF? ";
        }
    }
    return $message;
}
?>
<div class="conteiner-fluid" >

    <ul class="nav justify-content-end" style="background: darkblue;">
        <h5 style="margin-right: 900px">Calculiator V 0.01</h5>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>

<div class="row">
    <div class="col-6">
        <form action="index.php" method="post">
            <div class="mb-3">
                <label class="from-label">Введите число А</label>
                <input type="text" class="form-control" name="a">
            </div>
            <div class="mb-3">
                <label class="from-label">ВВедите число Б</label>
                <input type="text" class="form-control" name="b">
            </div>
            <div class="mb-3">
                <select class="form-select" name="action">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="btnCalc">Подсчитать</button>
        </form>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-body">
                Результат) <br>
                <?php echo calc();?>
            </div>
        </div>
        <ul class="nav flex-column" style="background: darkmagenta">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
</div>
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</body>
</html>
