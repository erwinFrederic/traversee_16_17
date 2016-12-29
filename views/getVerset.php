<?php // var_dump($_SESSION); ?>

<div class="row">
    <div class="col-md-6 add-verset-container">
        <div class="page-content">
            <div class="verset">
                <?php if (!empty($_SESSION['verset'])) : ?>

                    <p class="content"><?php print $_SESSION['verset'][0]['content']; ?></p>
                    <p class="reference"><?php print $_SESSION['verset'][0]['vreference']; ?></p>


                <?php endif; ?>
            </div>
        </div>
    </div>
</div>