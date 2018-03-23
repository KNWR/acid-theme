</div> <!-- site content -->

</body>

<?php wp_footer() ?>

<?php echo
do_shortcode('[jetpack_subscription_form title="Subscribe via e-mail." subscribe_text=""]');
?>

<footer><a href=" <?php echo site_url();?> ">acid</a>&nbsp;<a href=" <?php echo get_permalink(2); /*2 == id of about pg*/?> ">about</a></footer>


</html>