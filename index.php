<?php
require('Form.php');
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
    <p>Bill Splitter helps you calculate the amount of bill for each one. </p>
    <form method='GET'>
        <ul class="form-style-1">
            <li><label for='waysOfSplit'>Split how many ways? <span class="required">*</span></label></li>
            <li><input type='text'
                       name='waysOfSplit'
                       id='waysOfSplit' value='<?= $form->prefill("waysOfSplit") ?>'></li>
            <li><label for='tabCost'>How much was the tab? <span class="required">*</span></label></li>
            <li><input type='text'
                       name='tabCost'
                       id='tabCost' value='<?= $form->prefill("tabCost") ?>'></li>
            <li><label for='serviceRating'>How was the service?</label></li>
            <li><select name='serviceRating' id='serviceRating' ?>></li>
            <option value='-1'>Choose one...</option>
            <option value='20' <?php if ($serviceRating == '20') echo 'selected' ?>>Excellent (20% tip)</option>
            <option value='18' <?php if ($serviceRating == '18') echo 'selected' ?>>Very Good (18% tip)</option>
            <option value='16' <?php if ($serviceRating == '16') echo 'selected' ?>>Good(16% tip)</option>
            <option value='0' <?php if ($serviceRating == '0') echo 'selected' ?>>Poor(0 tip)</option>
            </select></li>
            <li><label for='roundUp'>Round up?
                    <input type='checkbox'
                           name='roundUp'
                           id='roundUp'
                           value='1' <?php if ($roundUp == '1') echo 'checked' ?>>
                                     Yes</label></li>
            <li><input type='submit' value='Calculate' class=''></li>
            <br/>
            <?php if ($form->hasErrors) : ?>
                <div class='alert alert-danger'>
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php elseif (($owns)) : ?>

                <li>
                    <div class="alert alert-success">Everyone Owens $<?= $owns ?></div>
                </li>
            <?php endif; ?>

        </ul>
    </form>
</div>
</body>
</html>
