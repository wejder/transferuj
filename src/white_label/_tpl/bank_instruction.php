<link rel="stylesheet" type="text/css" href="../_css/bank_instruction.css"/>
<div id="white-label-bank-instruction">
    <div class="bank-block">
        <img src="https://secure.transferuj.pl/_/banks/b<?php echo $data['bank_id'] ?>.png" alt=""/>
        <?php foreach ($data['instructions'] as $paragraph) { ?>
            <p><?php echo $paragraph ?></p>
<?php
}
        ?>
    </div>
</div>