<?php
/**
 * Template Name: Insulation Papers
 * @package UBL_Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$sales_email = ubl_option( 'company_sales_email', 'sales@umangboards.com' );

$svg_transformer = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>';
$svg_motor       = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/></svg>';
$svg_dist        = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/><line x1="12" y1="12" x2="12" y2="16"/><line x1="10" y1="14" x2="14" y2="14"/></svg>';
$svg_reactor     = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M2 12c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6"/><path d="M10 12c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6"/></svg>';

$catalog = [
    'type'           => 'rolls',
    'name'           => 'Insulation Papers',
    'term_id'        => 6,
    'parent_term_id' => 2,
    'hero_image'     => UBL_URI . '/assets/images/product-transformer-insulation.jpg',
    'breadcrumb_parent' => [ 'name' => 'Transformer Insulation', 'url' => '/products/transformer-insulation/' ],
    'applications' => [
        [ 'name' => 'Power Transformers',        'sub' => 'Up to 400 kV class', 'svg' => $svg_transformer ],
        [ 'name' => 'Distribution Transformers', 'sub' => '11 kV – 33 kV class', 'svg' => $svg_dist       ],
        [ 'name' => 'Motors & Generators',       'sub' => 'Winding insulation',  'svg' => $svg_motor      ],
        [ 'name' => 'Instrument Transformers',   'sub' => 'CTs &amp; PTs',       'svg' => $svg_reactor    ],
    ],
    'products' => [
        [
            'id'         => 'kraft',
            'tab'        => 'Kraft Paper',
            'name'       => 'Insulation Kraft Paper',
            'grade'      => 'UB-IKP',
            'iec'        => 'IEC 60554-3-5:1984',
            'image'      => UBL_URI . '/assets/images/paper-kraft.jpg',
            'intro'      => 'The standard conductor insulation paper — wound directly onto copper and aluminium conductors for winding in power and distribution transformers.',
            'properties' => [
                'Reliable electrical insulation characteristics',
                'Good tensile strength and durability',
                'Uniform thickness and consistent density',
                'Smooth surface for efficient wrapping and processing',
                'Good oil absorption and compatibility with transformer oils',
                'Available in standard and thermally upgraded grades',
            ],
            'sizes' => [
                [ 'grade' => 'UB-IKP', 'thickness' => '2 mil to 5 mil (0.05 mm to 0.125 mm)', 'max_width' => 'Upto 1250', 'tolerance' => '+/- 5' ],
            ],
            'matrix_row' => [ [ 'chip' => 'UB-IKP' ], 'IEC 60554-3-5:1984', '0.05–0.125 mm', 'Upto 1250 mm' ],
        ],
        [
            'id'         => 'press',
            'tab'        => 'Press Paper',
            'name'       => 'Insulation Press Paper',
            'grade'      => 'UB-IPP',
            'iec'        => 'IEC 60641-3-2 P2.1B',
            'image'      => UBL_URI . '/assets/images/paper-press.jpg',
            'intro'      => 'A multi-layer structured insulation paper with high mechanical strength — used for heavier insulation requirements in power transformer windings.',
            'properties' => [
                'Thermal class performance (up to 105°C class)',
                'High mechanical strength and tear resistance',
                'Strong electrical insulation characteristics',
                'Uniform multi-layer structure with pinhole-free construction',
                'Consistent density and dependable dimensional stability',
                'Good oil absorption and compatibility with insulating liquids',
                'Available in natural finish and customised colour options',
            ],
            'sizes' => [
                [ 'grade' => 'UB-IPP', 'thickness' => '5 mil to 20 mil (0.125 mm to 0.5 mm)', 'max_width' => 'Upto 1250', 'tolerance' => '+/- 5' ],
            ],
            'matrix_row' => [ [ 'chip' => 'UB-IPP' ], 'IEC 60641-3-2 P2.1B', '0.125–0.5 mm', 'Upto 1250 mm' ],
        ],
        [
            'id'         => 'ddp',
            'tab'        => 'Diamond Dotted',
            'name'       => 'Diamond Dotted Paper',
            'grade'      => 'UB-DDP',
            'iec'        => 'IEC 60641-3-2 P4.1A',
            'image'      => UBL_URI . '/assets/images/paper-ddp.jpg',
            'intro'      => 'Epoxy resin-coated paper that bonds winding layers under heat and pressure — eliminates the need for varnish impregnation in coil assembly.',
            'properties' => [
                'Strong interlayer bonding after curing',
                'Maintains reliable electrical insulation performance',
                'Good mechanical strength and winding stability',
                'Controlled adhesive distribution for clean processing',
                'Good oil penetration and compatibility with insulating liquids',
                'Suitable for long-term thermal performance',
            ],
            'sizes' => [
                [ 'grade' => 'UB-DDP', 'thickness' => '3 mil to 20 mil (0.075 mm to 0.5 mm)', 'max_width' => 'Upto 1220', 'tolerance' => '+/- 5' ],
            ],
            'matrix_row' => [ [ 'chip' => 'UB-DDP' ], 'IEC 60641-3-2 P4.1A', '0.075–0.5 mm', 'Upto 1220 mm' ],
        ],
        [
            'id'         => 'crepe',
            'tab'        => 'Crepe Paper',
            'name'       => 'Insulation Crepe Paper',
            'grade'      => 'UB-Crepe',
            'iec'        => 'IEC 60554-3-3:1980',
            'image'      => UBL_URI . '/assets/images/paper-crepe.jpg',
            'intro'      => 'High-elongation paper that conforms tightly to irregular surfaces — used for wrapping leads, bushings, and components requiring flexible insulation.',
            'properties' => [
                'High elongation and excellent flexibility',
                'Conforms easily to uneven surfaces and contours',
                'Reliable electrical insulation performance',
                'Low dissipation factor for high-voltage applications',
                'Good mechanical strength and tear resistance',
                'Compatible with insulating oils and drying processes',
            ],
            'sizes' => [
                [ 'grade' => 'UB-Crepe', 'thickness' => '3 mil to 5 mil (0.075 mm to 0.125 mm)', 'max_width' => 'Upto 1000', 'tolerance' => '+/- 5' ],
            ],
            'matrix_row' => [ [ 'chip' => 'UB-Crepe' ], 'IEC 60554-3-3:1980', '0.075–0.125 mm', 'Upto 1000 mm' ],
        ],
        [
            'id'         => 'tu-paper',
            'tab'        => 'Thermally Upgraded',
            'name'       => 'Thermally Upgraded Paper',
            'grade'      => 'UB-TUP',
            'iec'        => 'IEC 60554-2:2001',
            'image'      => UBL_URI . '/assets/images/paper-tup.jpg',
            'intro'      => 'Chemically treated paper engineered for extended transformer life — delivers superior thermal stability at 120°C class and significantly slower ageing than standard kraft.',
            'properties' => [
                'Higher thermal class performance (up to 120°C class)',
                'Slower ageing under elevated operating temperatures',
                'Improved moisture and acid management during service life',
                'Strong electrical insulation characteristics',
            ],
            'sizes' => [
                [ 'grade' => 'UB-TUP',      'thickness' => '3 mil to 20 mil (0.075 mm to 0.5 mm)',   'max_width' => 'Upto 1500', 'tolerance' => '+/- 5' ],
                [ 'grade' => 'UB-TUP(C)',    'thickness' => '3 mil to 5 mil (0.075 mm to 0.125 mm)',   'max_width' => 'Upto 1000', 'tolerance' => '+/- 5' ],
                [ 'grade' => 'UB-TUP(DDP)', 'thickness' => '3 mil to 20 mil (0.075 mm to 0.5 mm)',   'max_width' => 'Upto 1450', 'tolerance' => '+/- 5' ],
            ],
            'matrix_row' => [ [ 'chip' => 'UB-TUP' ], 'IEC 60554-2:2001', '0.075–0.5 mm', 'Upto 1500 mm' ],
        ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
