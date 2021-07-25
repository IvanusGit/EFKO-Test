<?php include 'SiteController.php' ?>
<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Калькулятор расчета стоимости перевозки</title>
</head>

<body>
<h2>Калькулятор расчета стоимости перевозки</h2>
<hr>
<form name="feedback" method="POST" action="">
    <select name="months">
        <?php foreach($months as $key => $val): ?>
            <option value=<? echo $key;?>><? echo $val;?></option>
        <?php endforeach;?>
    </select>
    <select name="raw">
        <?php foreach($raw as $key => $val): ?>
            <option value=<? echo $key;?>><?echo $val;?></option>
        <?php endforeach;?>
    </select>
    <select name="tonnage">
        <?php foreach($tonnage as $val): ?>
            <option value=<?php echo $val;?>><?php echo $val;?></option>
        <?php endforeach;?>
    </select>
    <input type="submit" name="send" value="Рассчитать">
</form>

<?php if ($res): ?>
    <p>Результат: <?php echo $res ?></p>
<?php endif ?>

</body>

</html>

















