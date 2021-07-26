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

<p>Таблица расчета для шрота</p>
<table border="1">
   <tr>
    <th>Тоннаж\Месяц</th><th>Январь</th><th>Февраль</th><th>Август</th><th>Сентябрь</th><th>Октябрь</th><th>Ноябрь</th>
   </tr>
   <tr>
    <td>25</td><td>125</td><td>121</td><td>137</td><td>126</td><td>124</td><td>128</td>
    </tr>
   <tr>
   <td>50</td><td>145</td><td>118</td><td>119</td><td>121</td><td>122</td><td>147</td>
   </tr>
   <tr>
   <td>75</td><td>136</td><td>137</td><td>141</td><td>137</td><td>131</td><td>143</td>
   </tr>
   <tr>
   <td>100</td><td>138</td><td>142</td><td>117</td><td>124</td><td>147</td><td>112</td>
</table>
<p>Таблица расчета для жмых</p>
<table border="1">
   <tr>
    <th>Тоннаж\Месяц</th><th>Январь</th><th>Февраль</th><th>Август</th><th>Сентябрь</th><th>Октябрь</th><th>Ноябрь</th>
   </tr>
   <tr>
    <td>25</td><td>121</td><td>137</td><td>124</td><td>137</td><td>122</td><td>125</td>
    </tr>
   <tr>
   <td>50</td><td>118</td><td>121</td><td>145</td><td>147</td><td>143</td><td>145</td>
   </tr>
   <tr>
   <td>75</td><td>137</td><td>124</td><td>136</td><td>143</td><td>112</td><td>136</td>
   </tr>
   <tr>
   <td>100</td><td>142</td><td>131</td><td>138</td><td>112</td><td>117</td><td>138</td>
</table>
<p>Таблица расчета для сои</p>
<table border="1">
   <tr>
    <th>Тоннаж\Месяц</th><th>Январь</th><th>Февраль</th><th>Август</th><th>Сентябрь</th><th>Октябрь</th><th>Ноябрь</th>
   </tr>
   <tr>
    <td>25</td><td>137</td><td>125</td><td>124</td><td>122</td><td>137</td><td>121</td>
    </tr>
   <tr>
   <td>50</td><td>147</td><td>145</td><td>145</td><td>143</td><td>119</td><td>118</td>
   </tr>
   <tr>
   <td>75</td><td>112</td><td>136</td><td>136</td><td>112</td><td>141</td><td>137</td>
   </tr>
   <tr>
   <td>100</td><td>122</td><td>138</td><td>138</td><td>117</td><td>117</td><td>142</td>
</table>
</body>

</html>

















