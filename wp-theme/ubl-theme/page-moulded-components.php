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
        [
            'id'       => 'corner-collars',
            'tab'      => 'Corner Collars',
            'name'     => 'Corner Collars',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/prod-32.png',
            'intro'    => 'Formed pressboard collars that provide continuous insulation around conductor corners and sharp bends — preventing corona discharge at high-stress points.',
            'features' => [
                '100% electrical grade sulphate pulp',
                'Insulation class A (105°C)',
                'Formed to maintain insulation continuity at corners',
                'Compatible with standard transformer oils',
            ],
            'variants' => [ 'Moulded corner collar', 'Custom bend radius' ],
            'applications_text' => 'Conductor corner insulation; HV lead corner protection; coil lead exit points.',
            'matrix_row' => [ 'Electrical grade sulphate pulp', 'Class A (105°C)', 'Moulded / Custom radius' ],
        ],
        [
            'id'       => 'hv-leads',
            'tab'      => 'HV Terminal Leads',
            'name'     => 'Couched High Voltage Terminal Leads',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/prod-30.png',
            'intro'    => 'Pressboard insulation sleeves couched around high-voltage terminal leads — ensuring adequate creepage and clearance from the lead to grounded metalwork.',
            'features' => [
                '100% electrical grade sulphate pulp',
                'Insulation class A (105°C)',
                'Manufactured to match conductor diameter and lead geometry',
                'Good oil absorption and dielectric properties',
            ],
            'variants' => [ 'Cylindrical couched lead', 'Profiled to lead geometry', 'Custom insulation thickness' ],
            'applications_text' => 'HV winding lead-out insulation; LV busbar insulation; tap changer connection insulation.',
            'matrix_row' => [ 'Electrical grade sulphate pulp', 'Class A (105°C)', 'Cylindrical / Profiled / Custom' ],
        ],
        [
            'id'       => 'crepe-tubes',
            'tab'      => 'Crepe Paper Tubes',
            'name'     => 'Crepe Paper Tubes',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/prod-28.png',
            'intro'    => 'Wound tubes of crepe insulation paper used as flexible insulation sleeves for high-voltage diverter leads and tap changer connections inside transformers.',
            'features' => [
                '100% electrical grade sulphate pulp',
                'Natural colour, high purity',
                'Insulation class A (105°C)',
                'Flexible — accommodates routing around obstructions',
                'Good compatibility with transformer oils',
            ],
            'variants' => [ 'Cylindrical tubes', 'Custom inner diameter and wall thickness' ],
            'applications_text' => 'High-voltage insulation of diverters; tap changer lead insulation; flexible lead covers.',
            'matrix_row' => [ 'Crepe paper — sulphate pulp', 'Class A (105°C)', 'Cylindrical / Custom dimensions' ],
        ],
        [
            'id'       => 'ddp-tubes',
            'tab'      => 'DDP Paper Tubes',
            'name'     => 'Diamond Dotted Paper Tubes',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/prod-26.png',
            'intro'    => 'Tubes wound from diamond dotted paper that bond together under heat — providing rigid, self-supporting insulation cylinders after curing in the transformer.',
            'features' => [
                'Epoxy resin coated for self-bonding on heat cure',
                'Forms rigid cylinder after assembly and curing',
                'Good dielectric properties post-cure',
                'Compatible with transformer oils',
            ],
            'variants' => [ 'Standard wound tube', 'Custom ID and wall thickness' ],
            'applications_text' => 'Bonded winding cylinders; rigid inter-winding insulation barriers.',
            'matrix_row' => [ 'DDP — epoxy resin coated', 'Class A (105°C)', 'Standard / Custom dimensions' ],
        ],
        [
            'id'       => 'shielding',
            'tab'      => 'Shielding Insulations',
            'name'     => 'Shielding Insulations',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/prod-22.png',
            'intro'    => 'Pressboard shielding components placed between winding sections to control electrostatic field distribution and reduce turn-to-turn stress during impulse conditions.',
            'features' => [
                '100% electrical grade sulphate pulp',
                'Insulation class A (105°C)',
                'Formed to match winding geometry',
                'Good oil absorption for uniform impregnation',
            ],
            'variants' => [ 'Flat shield', 'Curved shield', 'Custom formed profile' ],
            'applications_text' => 'Electrostatic shielding between windings; impulse voltage distribution control; inter-winding screens.',
            'matrix_row' => [ 'Electrical grade sulphate pulp', 'Class A (105°C)', 'Flat / Curved / Custom' ],
        ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
