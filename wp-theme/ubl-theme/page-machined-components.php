<?php
/**
 * Template Name: Machined and Milled Components
 * @package UBL_Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$sales_email = ubl_option( 'company_sales_email', 'sales@umangboards.com' );

$svg_power   = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>';
$svg_dist    = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>';
$svg_traction= '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="8" width="20" height="8" rx="2"/><circle cx="6" cy="16" r="2"/><circle cx="18" cy="16" r="2"/><path d="M2 12h20"/></svg>';
$svg_special = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>';

$catalog = [
    'type'           => 'components',
    'name'           => 'Machined and Milled Components',
    'term_id'        => 4,
    'parent_term_id' => 2,
    'hero_image'     => UBL_URI . '/assets/images/product-transformer-insulation.jpg',
    'breadcrumb_parent' => [ 'name' => 'Transformer Insulation', 'url' => '/products/transformer-insulation/' ],
    'applications' => [
        [ 'name' => 'Power Transformers',        'sub' => 'Winding support structure', 'svg' => $svg_power   ],
        [ 'name' => 'Distribution Transformers', 'sub' => 'Core & coil assembly',      'svg' => $svg_dist    ],
        [ 'name' => 'Traction Transformers',     'sub' => 'Rail & metro systems',      'svg' => $svg_traction ],
        [ 'name' => 'Special Transformers',      'sub' => 'Custom configurations',     'svg' => $svg_special ],
    ],
    'products' => [
        [
            'id'       => 'spacers',
            'tab'      => 'Spacers',
            'name'     => 'Spacers',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/machined-spacers.png',
            'intro'    => 'Precision-machined insulation components used to maintain uniform gaps between conductors and winding layers, ensuring proper oil circulation, electrical clearance, and mechanical stability within the transformer. Manufactured from UB-HD-3.1 and laminated board according to customer specifications, spacers offer excellent mechanical strength, dimensional accuracy, low moisture content, and consistent dielectric performance.',
            'properties' => [
                'Manufactured from UB-HD-3.1 and laminated board',
                'Excellent mechanical strength and dimensional accuracy',
                'Low moisture content',
                'Consistent dielectric performance',
            ],
            'applications_text' => 'Maintains uniform gaps between conductors and winding layers; ensures oil circulation, electrical clearance, and mechanical stability.',
            'matrix_row' => [ 'UB-HD-3.1 / Laminated Board', 'Class A (105°C)', 'Made to customer specification' ],
        ],
        [
            'id'       => 'strips',
            'tab'      => 'Strips',
            'name'     => 'Strips',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/machined-strips.png',
            'intro'    => 'High-strength insulating strips manufactured from premium transformerboard, used for winding support, duct formation, and structural reinforcement. Precision-machined from premium cellulose-based insulation materials, strips provide high compressive strength, excellent dimensional stability, superior oil compatibility, and dependable electrical insulation characteristics.',
            'properties' => [
                'Manufactured from premium transformerboard',
                'High compressive strength and dimensional stability',
                'Superior oil compatibility',
                'Dependable electrical insulation characteristics',
            ],
            'applications_text' => 'Winding support, duct formation, and structural reinforcement.',
            'matrix_row' => [ 'Premium Transformerboard', 'Class A (105°C)', 'Made to customer specification' ],
        ],
        [
            'id'       => 'washers',
            'tab'      => 'Washers',
            'name'     => 'Washers',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/machined-washers.png',
            'intro'    => 'Insulating washer rings designed to provide electrical insulation and mechanical support at fastening and clamping points. They help distribute pressure evenly while maintaining insulation integrity within the transformer assembly. Engineered for durability and insulation integrity, washers feature excellent dielectric properties, high mechanical strength, low shrinkage, and precise dimensional tolerances, ensuring consistent performance throughout the transformer\'s service life.',
            'properties' => [
                'Excellent dielectric properties',
                'High mechanical strength',
                'Low shrinkage',
                'Precise dimensional tolerances',
            ],
            'applications_text' => 'Electrical insulation and mechanical support at fastening and clamping points.',
            'matrix_row' => [ 'Premium Cellulose Board', 'Class A (105°C)', 'Made to customer specification' ],
        ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
