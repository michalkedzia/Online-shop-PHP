<?php  if (count($successes) > 0) : ?>
    <div class="alert alert-success" role="alert">
        <?php foreach ($successes as $success) : ?>
            <p><?php echo $success ?></p>
        <?php endforeach ?>
    </div>
<?php  endif ?>