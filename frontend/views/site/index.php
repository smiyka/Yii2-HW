<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    Tanya Melnik
    <form>
        <label>Email</label>
        <input type="text" name="email">
        <label>Phone</label>
        <input type="text" name="phone">
        <input type="submit">

    </form>
    <?php if (isset($contact)): ?>
        <p>Email: <?php echo $contact->getEmail(); ?></p>
        <p>Phone: <?php echo $contact->getPhone(); ?></p>
    <?php endif ?>


</div>
