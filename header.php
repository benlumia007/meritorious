<?php
/**
 * Initiator (index.php)
 *
 * The (header.php) template file contains all of the codes that will render in the header. This file is a template partial,
 * which uses get_header(); to render only the header and should not include any contents.
 *
 * @package     Initiator Starter Theme
 * @copyright   Copyright (C) 2018. Benjamin Lu
 * @license     GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author      Benjamin Lu (https://getbenonit.com)
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section id="container" class="site-container">
	<header id="header" class="site-header">
		<div class="site-branding">
			<?php Benlumia007\Backdrop\Site\display_site_title(); ?>
			<?php Benlumia007\Backdrop\Site\display_site_description(); ?>
		</div>
		<?php Benlumia007\Backdrop\Menu\display_primary(); ?>
	<section id="content" class="site-content">
