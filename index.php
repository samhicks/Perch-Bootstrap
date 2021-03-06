<?php include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>

<!doctype html>
<html lang="en">

<!-- Head -->
<head>

	<!-- Meta -->
    <meta charset="utf-8"/>
    <title><?php perch_content('Company Name'); ?> |  <?php perch_pages_title(); ?></title>
    <?php perch_content('Meta'); ?>
    <link rel="icon" type="image/ico" href="../favicon.ico">
    
    <!-- Style -->
    <link href="../css/build/global.css" media="screen, projection" rel="stylesheet" type="text/css" />

    <!-- Responsive -->
    <meta name="viewport" content="width=device-width"/>

</head>

<body>

	<?php perch_layout('global.header'); ?>

	<!-- Main -->
    <div role="main">

		<div class="grid pad wysiwyg">

			<section>

				<?php perch_content('Content'); ?>

			</section>

		</div>

	</div>

	<?php perch_layout('global.footer'); ?>
    
</body>

</html>