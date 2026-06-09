<?php
/**
 * Template Name: Moulded Components
 * @package UBL_Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$sales_email = ubl_option( 'company_sales_email', 'sales@umangboards.com' );

$svg_power   = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>';
$svg_dist    = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>';
$svg_hv      = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>';
$svg_special = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg>';

$catalog = [
    'type'           => 'components',
    'name'           => 'Moulded Components',
    'term_id'        => 5,
    'parent_term_id' => 2,
    'hero_image'     => UBL_URI . '/assets/images/product-transformer-insulation.jpg',
    'breadcrumb_parent' => [ 'name' => 'Transformer Insulation', 'url' => '/products/transformer-insulation/' ],
    'applications' => [
        [ 'name' => 'Power Transformers',        'sub' => 'Winding end insulation',   'svg' => $svg_power   ],
        [ 'name' => 'Distribution Transformers', 'sub' => 'Coil end supports',        'svg' => $svg_dist    ],
        [ 'name' => 'High Voltage Equipment',    'sub' => 'HV lead insulation',       'svg' => $svg_hv      ],
        [ 'name' => 'Traction Transformers',     'sub' => 'Custom moulded forms',     'svg' => $svg_special ],
    ],
    'products' => [
        [
            'id'       => 'angle-rings',
            'tab'      => 'Angle Rings',
            'name'     => 'Angle Rings, Cap Rings & Snouts',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/prod-36.png',
            'intro'    => 'Wet-formed pressboard rings manufactured to precise radii — provide insulation and mechanical support at coil ends and bushing entries.',
            'features' => [
                '100% electrical grade sulphate pulp',
                'Natural colour, high purity and oil absorption',
                'Insulation class A (105°C)',
                'Good compatibility with liquid dielectrics',
                'Manufactured to tight angular and dimensional tolerances',
            ],
            'variants' => [ 'Split angle ring', 'Full angle ring', '6-segment angle ring', 'Cap ring', 'Chimney type snout segment' ],
            'applications_text' => 'Insulation of winding ends in transformers; bushing entry insulation; HV coil end protection.',
            'matrix_row' => [ 'Electrical grade sulphate pulp', 'Class A (105°C)', 'Split / Full / Segmented / Cap / Snout' ],
        ],
        [
            'id'       => 'end-rings',
            'tab'      => 'End Rings',
            'name'     => 'End Rings',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/prod-24.png',
            'intro'    => 'Flat or profiled pressboard rings placed at winding ends to distribute axial compressive forces and maintain insulation clearances under fault conditions.',
            'features' => [
                '100% electrical grade sulphate pulp',
                'Insulation class A (105°C)',
                'High compressive strength for axial force distribution',
                'Good dimensional stability under mechanical load',
            ],
            'variants' => [ 'Plain flat ring', 'Profiled end ring', 'Custom OD/ID' ],
            'applications_text' => 'Winding end-support; axial compression distribution; coil-end insulation.',
            'matrix_row' => [ 'Electrical grade sulphate pulp', 'Class A (105°C)', 'Flat / Profiled / Custom' ],
        ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
