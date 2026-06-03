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
            'intro'    => 'Precision-machined pressboard spacers that maintain winding separation and establish oil-duct clearances in transformer core-coil assemblies.',
            'features' => [
                '100% electrical grade sulphate pulp',
                'Natural colour, high purity',
                'Insulation class A (105°C)',
                'Good oil absorption and compatibility with liquid dielectrics',
            ],
            'variants' => [ 'Standard shape', 'V-shaped' ],
            'applications_text' => 'Threaded on strips for duct formation; spacer rings; moulding kits for coil assembly.',
            'matrix_row' => [ 'Electrical grade sulphate pulp', 'Class A (105°C)', 'Standard / V-shaped' ],
        ],
        [
            'id'       => 'spacer-strips',
            'tab'      => 'Spacer Strips',
            'name'     => 'Spacer Strips',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/machined-spacer-strips.png',
            'intro'    => 'Precision-cut strips used to form oil-cooling ducts and provide structural support between winding layers in power and distribution transformers.',
            'features' => [
                '100% electrical grade sulphate pulp',
                'Insulation class A (105°C)',
                'High dimensional precision for consistent duct widths',
                'Good compatibility with liquid dielectrics',
            ],
            'variants' => [ 'Rectangular Strips', 'Rectangular with rounded edges', 'Calibrated with special tolerance', 'V-Strips', 'Trapezoidal T-Strips', 'T-Strips' ],
            'applications_text' => 'Cylinder with strips; strips with spacers; duct spacers in winding assemblies.',
            'matrix_row' => [ 'Electrical grade sulphate pulp', 'Class A (105°C)', 'Rectangular / V / T / Trapezoidal' ],
        ],
        [
            'id'       => 'spacer-rings',
            'tab'      => 'Spacer Rings',
            'name'     => 'Spacer Rings',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/machined-spacer-rings.png',
            'intro'    => 'Circular pressboard rings used to support and position winding coils, providing axial compression resistance and insulation clearance in transformers.',
            'features' => [
                '100% electrical grade sulphate pulp',
                'Insulation class A (105°C)',
                'Manufactured to precise inner and outer diameter tolerances',
                'Good oil absorption and mechanical stability',
            ],
            'variants' => [ 'Full ring', 'Split ring', 'Custom OD/ID configurations' ],
            'applications_text' => 'Coil end-support rings; axial compression elements; insulation clearance maintenance.',
            'matrix_row' => [ 'Electrical grade sulphate pulp', 'Class A (105°C)', 'Full / Split / Custom' ],
        ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
