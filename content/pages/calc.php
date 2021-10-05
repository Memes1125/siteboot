<div class="container">
<div>
    <form action="index.php?page=calc" method="post">
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

            <?php

            echo calc();
            ?>
        </div>
    </div>
</div>
</div>