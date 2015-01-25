<?php foreach ($results as $result) { ?>
  Title: <?php echo $this->escaper->escapeHtml($result->title->text); ?><br/>
<?php } ?>