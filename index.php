<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE,chrome=1">
    <title>Style Guide Template</title>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Colors Atom CSS -->
    <link href="css/atoms/colors.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Fonts Atom CSS -->
    <link href="css/atoms/fonts.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Headings Atom CSS -->
    <link href="css/atoms/headings.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Paragraphs Atom CSS -->
    <link href="css/atoms/paragraphs.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Blockquotes Atom CSS -->
    <link href="css/atoms/blockquotes.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Inline Elemets Atom CSS -->
    <link href="css/atoms/inline-elements.css" media="screen" rel="stylesheet" type="text/css">

    <!-- HR Atom CSS -->
    <link href="css/atoms/hr.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Unordered Lists Atom CSS -->
    <link href="css/atoms/unordered-lists.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Ordered Lists Atom CSS -->
    <link href="css/atoms/ordered-lists.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Definitions Lists Atom CSS -->
    <link href="css/atoms/definitions.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Text Fields Atom CSS -->
    <link href="css/atoms/text-fields.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Select Fields Atom CSS -->
    <link href="css/atoms/select-fields.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Checkbox Fields Atom CSS -->
    <link href="css/atoms/checkbox-fields.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Radio Buttons Atom CSS -->
    <link href="css/atoms/radio-buttons.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Buttons Atom CSS -->
    <link href="css/atoms/buttons.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Tabels Atom CSS -->
    <link href="css/atoms/tables.css" media="screen" rel="stylesheet" type="text/css">

    <script>
    document.createElement( "picture" );
    </script>
    <script src="js/picturefill.js" async></script>
</head>
<body>
<header class="header--fc">
	<div class="body-container">
		<a href="http://fulcrumcreatives.com" class="logo--fc"></a>
	</div>
</header>
<div class="body-container">

	<!-- Client Heading -->
	<div class="header--client"><h1>Client's Style Guide</h1></div>

	<!-- Colors Atom Section -->
	<section>
		<header class="header--section"><p>Colors</p></header>
		<?php include('atoms/colors.php'); ?>
	</section>

	<!-- Fonts Atom Section -->
	<section>
		<header class="header--section"><p>Fonts</p></header>
		<?php include('atoms/fonts.php'); ?>
	</section>

	<!-- Heading Atom Section -->
	<section>
		<header class="header--section"><p>Fonts</p></header>
		<?php include('atoms/headings.php'); ?>
	</section>

	<!-- Paragraphs Atom Section -->
	<section>
		<header class="header--section"><p>Paragraphs</p></header>
		<?php include('atoms/paragraphs.php'); ?>
	</section>

	<!-- Blockquotes Atom Section -->
	<section>
		<header class="header--section"><p>Blockquotes</p></header>
		<?php include('atoms/blockquotes.php'); ?>
	</section>

	<!-- Inline Elements Atom Section -->
	<section>
		<header class="header--section"><p>Inline Elemts</p></header>
		<?php include('atoms/inline-elements.php'); ?>
	</section>

	<!-- HR Atom Section -->
	<section>
		<header class="header--section"><p>HR</p></header>
		<?php include('atoms/hr.php'); ?>
	</section>

	<!-- Unordered Lists Atom Section -->
	<section>
		<header class="header--section"><p>Unordered Lists</p></header>
		<?php include('atoms/unordered-lists.php'); ?>
	</section>

	<!-- Ordered Lists Atom Section -->
	<section>
		<header class="header--section"><p>Ordered Lists</p></header>
		<?php include('atoms/ordered-lists.php'); ?>
	</section>

	<!-- Definitions Lists Atom Section -->
	<section>
		<header class="header--section"><p>Definitions</p></header>
		<?php include('atoms/definitions.php'); ?>
	</section>

	<!-- Text Fields Atom Section -->
	<section>
		<header class="header--section"><p>Text Fields</p></header>
		<?php include('atoms/text-fields.php'); ?>
	</section>

	<!-- Select Fields Atom Section -->
	<section>
		<header class="header--section"><p>Select Fields</p></header>
		<?php include('atoms/select-fields.php'); ?>
	</section>

	<!-- Checkbox Fields Atom Section -->
	<section>
		<header class="header--section"><p>Checkboxes</p></header>
		<?php include('atoms/checkbox-fields.php'); ?>
	</section>

	<!-- Radio Buttons Atom Section -->
	<section>
		<header class="header--section"><p>Radio Buttons</p></header>
		<?php include('atoms/radio-buttons.php'); ?>
	</section>

	<!-- Buttons Atom Section -->
	<section>
		<header class="header--section"><p>Buttons</p></header>
		<?php include('atoms/buttons.php'); ?>
	</section>

	<!-- Tables Atom Section -->
	<section>
		<header class="header--section"><p>Tables</p></header>
		<?php include('atoms/tables.php'); ?>
	</section>

</div>
<footer>
</footer>
<script src="js/main.min.js"></script>
</body>
</html>