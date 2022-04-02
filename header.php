<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<style>

    /* Upsell Santé Page code start */
    /*https://secret-terra-nova.fr/1-upsell-sante/*/
	#uSSantSec1{
        display: none;
	}
	#uSSantSec2{
        display: none;
	}
	#uSSantSec3{
        display: none;
	}
	#uSSantSec4{
        display: none;
	}
	#uSSantSec5{
        display: none;
	}
	#uSSantSec6{
        display: none;
	}
	#uSSantSec7{
        display: none;
	}
	#uSSantSec8{
        display: none;
	}
	#uSSantSec9{
        display: none;
	}
	#uSSantSec10{
        display: none;
	}
	#uSSantSec11{
        display: none;
	}
	#uSSantSec12{
        display: none;
	}
	#uSSantSec13{
        display: none;
	}
	/*Upsell Santé Page code END*/
	
	
	
	/* Upsell Abondance Page code start */
	/*https://secret-terra-nova.fr/upsell-abondance/*/
	
	#uSAbondanceSec1{
        display: none;
    }
    #uSAbondanceSec2{
        display: none;
    }
    #uSAbondanceSec3{
        display: none;
    }
    #uSAbondanceSec4{
        display: none;
    }
    #uSAbondanceSec5{
        display: none;
    }
    #uSAbondanceSec6{
        display: none;
    }
    #uSAbondanceSec7{
        display: none;
    }
    #uSAbondanceSec8{
        display: none;
    }
    #uSAbondanceSec9{
        display: none;
    }
    #uSAbondanceSec10{
        display: none;
    }
    #uSAbondanceSec11{
        display: none;
    }
    #uSAbondanceSec12{
        display: none;
    }
    #uSAbondanceSec13{
        display: none;
    }
    #uSAbondanceSec14{
        display: none;
    }
    #uSAbondanceSec15{
        display: none;
    }
    #uSAbondanceSec16{
        display: none;
    }
    /* Upsell Abondance Page code END */
    
    
    /* ************** Funnel principal Discount Flows ***************** */
    
    /* Upsell Santé Page code start */
    /*https://secret-terra-nova.fr/2-upsell-sante/*/
    
	#uSSantDiscountSec1{
        display: none;
    }
    #uSSantDiscountSec2{
        display: none;
    }
    #uSSantDiscountSec3{
        display: none;
    }
    #uSSantDiscountSec4{
        display: none;
    }
    #uSSantDiscountSec5{
        display: none;
    }
    #uSSantDiscountSec6{
        display: none;
    }
    #uSSantDiscountSec7{
        display: none;
    }
    #uSSantDiscountSec8{
        display: none;
    }
    #uSSantDiscountSec9{
        display: none;
    }
    #uSSantDiscountSec10{
        display: none;
    }
    #uSSantDiscountSec11{
        display: none;
    }
    #uSSantDiscountSec12{
        display: none;
    }
    #uSSantDiscountSec13{
        display: none;
    }
    #uSSantDiscountSec14{
        display: none;
    }
    
    
     /* Upsell Abondance Page code start */
     /*https://secret-terra-nova.fr/2-upsell-abondance/*/
	#uSAbondanceDiscountSec1{
        display: none;
    }
    #uSAbondanceDiscountSec2{
        display: none;
    }
    #uSAbondanceDiscountSec3{
        display: none;
    }
    #uSAbondanceDiscountSec4{
        display: none;
    }
    #uSAbondanceDiscountSec5{
        display: none;
    }
    #uSAbondanceDiscountSec6{
        display: none;
    }
    #uSAbondanceDiscountSec7{
        display: none;
    }
    #uSAbondanceDiscountSec8{
        display: none;
    }
    #uSAbondanceDiscountSec9{
        display: none;
    }
    #uSAbondanceDiscountSec10{
        display: none;
    }
    #uSAbondanceDiscountSec11{
        display: none;
    }
    #uSAbondanceDiscountSec12{
        display: none;
    }
    #uSAbondanceDiscountSec13{
        display: none;
    }
    #uSAbondanceDiscountSec14{
        display: none;
    }
    #uSAbondanceDiscountSec15{
        display: none;
    }
    #uSAbondanceDiscountSec16{
        display: none;
    }
</style>


<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	astra_header_before();

	astra_header();

	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>
