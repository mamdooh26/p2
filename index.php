<?php
require 'helpers.php';
require 'logic.php';
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Bill Splitter</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="container">
    <h1>Bill Splitter</h1>
    <form method='GET'>
        <ul class="form-style-1">
            <li><label for='waysOfSplit'>Split how many ways? <span class="required">*</span></label></li>
            <li><input type='text'
                       name='waysOfSplit'
                       id='waysOfSplit'><span class="required">* <?php echo $waysOfSplitErr; ?></span></li>
            <li><label for='tabCost'>How much was the tab? <span class="required">*</span></label></li>
            <li><input type='text'
                       name='tabCost'
                       id='tabCost'><span class="required">* <?php echo $waysOfSplitErr; ?></span></li>
            <li><label for='serviceRating'>How was the service?</label></li>
            <li><select name='serviceRating' id='serviceRating'></li>
            <option value='0'>Choose one...</option>
            <option value='20' <?php if ($day == 'excellent') echo 'selected' ?>>Excellent (20% tip)</option>
            <option value='18' <?php if ($day == 'veryGood') echo 'selected' ?>>Very Good (18% tip)</option>
            <option value='16' <?php if ($day == 'good') echo 'selected' ?>>Good(16% tip)</option>
            <option value='0' <?php if ($day == 'poor') echo 'selected' ?>>Poor(0 tip)</option>
            </select></li>
            <li><label for='roundUp'>Round up?
                    <input type='checkbox' name='roundUp' id='roundUp' value='1'>
                                     Yes</label></li>
            <li><input type='submit' value='Calculate' class=''></li>
            <?php if ($owns): ?>
            <li><p>Everyone Owens $<?= $owns ?></p></li>
            <?php elseif ($owns): ?>
                <div class='alert alert-danger'>No results</div>
            <?php endif; ?>
        </ul>
    </form>
</div>
</body>
</html>
