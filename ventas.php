<!--
<?php //include 'templates/header.php'; ?>
<section class="content">
    <div class="page_wrapper">
        <div class="ventas background-1">
            <h3 class="heading">Nuestras últimas propiedades en venta</h3>
        </div>
    </div>
    <div class="full-isotope page_wrapper clearfix">
        <?php //include 'includes/results.php'; ?>
    </div>
</section>
<?php //include 'templates/footer.php'; ?>
-->

<?php include 'templates/header.php'; ?>
<section class="content">
    <?php include 'includes/active_comparation.php'; ?>
    <?php include 'includes/search_form.php'; ?>
    <div class="columns-isotope">
        <?php include 'includes/filters.php'; ?>
        <?php include 'includes/results.php'; ?>
    </div>
</section>
<?php include 'templates/footer.php'; ?>
