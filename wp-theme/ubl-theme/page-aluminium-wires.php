<?php
/**
 * Template Name: Aluminium Winding Wires
 * @package UBL_Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$sales_email = ubl_option( 'company_sales_email', 'sales@umangboards.com' );

$svg_transformer = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>';
$svg_motor       = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="7"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83"/></svg>';
$svg_dist        = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg>';
$svg_electronics = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/><path d="M9 1v3M15 1v3M9 20v3M15 20v3M1 9h3M1 15h3M20 9h3M20 15h3"/></svg>';

$catalog = [
    'type'           => 'wires',
    'name'           => 'Aluminium Winding Wires',
    'term_id'        => 8,
    'parent_term_id' => 7,
    'hero_image'     => UBL_URI . '/assets/images/product-winding-wire.png',
    'breadcrumb_parent' => [ 'name' => 'Winding Wires', 'url' => '/products/winding-wires/' ],
    'applications' => [
        [ 'name' => 'Power Transformers',        'sub' => 'HV & LV windings',       'svg' => $svg_transformer ],
        [ 'name' => 'Electric Motors',           'sub' => 'Stator & rotor coils',   'svg' => $svg_motor       ],
        [ 'name' => 'Distribution Transformers', 'sub' => 'Cost-efficient winding',  'svg' => $svg_dist        ],
        [ 'name' => 'Electronic Appliances',     'sub' => 'ACs, fans, refrigerators','svg' => $svg_electronics ],
    ],
    'products' => [
        [
            'id'       => 'al-enamel-round',
            'tab'      => 'Enamelled Round',
            'name'     => 'Super Enamelled Al Round Wire',
            'grade'    => 'EC Grade Aluminium',
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/prod-126.png',
            'intro' => 'Electrolytic-grade aluminium round wire with high-performance enamel coating — a cost-efficient alternative to copper for motor and transformer windings.',
            'properties' => [
                'EC grade aluminium conductor for high conductivity-to-weight ratio',
                'Multiple insulation class options matching copper enamelled range',
                'Lightweight — reduces transformer core frame loads',
                'Excellent windability on automated coil winding equipment',
                'Available on PT 35 to PT 200 spools',
            ],
            'specs' => [
                [ 'label' => 'Conductor',         'value' => 'EC Grade Aluminium' ],
                [ 'label' => 'Diameter Range',    'value' => '0.5 mm to 5 mm' ],
                [ 'label' => 'Insulation Class',  'value' => 'Modified Polyester (Class 130 & 155) / Hermetic (Class 180) / Dual Coat (Class 200)' ],
                [ 'label' => 'Spool Sizes',       'value' => 'PT 35 to PT 200' ],
                [ 'label' => 'Applications',      'value' => 'Power transformers, motors, fans, AC units, refrigerators' ],
            ],
            'matrix_row' => [ 'EC Grade Aluminium', '0.5–5 mm dia', 'Class 130 / 155 / 180 / 200', 'Round' ],
        ],
        [
            'id'       => 'al-enamel-flat',
            'tab'      => 'Enamelled Flat',
            'name'     => 'Super Enamelled Al Flat Wire',
            'grade'    => 'EC Grade Aluminium',
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/prod-124.png',
            'intro' => 'Rectangular aluminium wire with enamel insulation — provides high winding density at reduced cost and weight compared to copper flat wire.',
            'properties' => [
                'EC grade aluminium conductor',
                'Rectangular cross-section for maximum winding fill',
                'Multiple insulation class options',
                'Consistent enamel coating on all four faces',
                'Suitable for distribution transformer windings',
            ],
            'specs' => [
                [ 'label' => 'Conductor',        'value' => 'EC Grade Aluminium' ],
                [ 'label' => 'Size Range',       'value' => '10 sq. mm to 80 sq. mm' ],
                [ 'label' => 'Insulation Class', 'value' => 'Modified Polyester (Class 130 & 155) / Hermetic (Class 180) / Dual Coat (Class 200)' ],
                [ 'label' => 'Applications',     'value' => 'Distribution transformers, motors, electronic appliances' ],
            ],
            'matrix_row' => [ 'EC Grade Aluminium', '10–80 sq. mm', 'Class 130 / 155 / 180 / 200', 'Flat' ],
        ],
        [
            'id'       => 'al-paper-flat',
            'tab'      => 'Paper Covered Flat',
            'name'     => 'Paper Covered Al Flat Wire',
            'grade'    => 'EC Grade Aluminium',
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/prod-120.png',
            'intro' => 'Rectangular aluminium conductor wrapped with electrical-grade kraft paper — used in oil-cooled transformer windings where aluminium conductors are specified.',
            'properties' => [
                'EC grade aluminium conductor',
                'Electrical grade insulating kraft paper covering',
                'Excellent oil impregnation during vacuum-pressure treatment',
                'Lighter weight than equivalent copper paper-covered wire',
            ],
            'specs' => [
                [ 'label' => 'Conductor',        'value' => 'EC Grade Aluminium' ],
                [ 'label' => 'Size Range',       'value' => '10 sq. mm to 80 sq. mm' ],
                [ 'label' => 'Covering',         'value' => 'Electrical grade insulating kraft paper' ],
                [ 'label' => 'Applications',     'value' => 'Oil-cooled transformer leads and shields' ],
            ],
            'matrix_row' => [ 'EC Grade Aluminium', '10–80 sq. mm', 'Kraft paper covering', 'Flat' ],
        ],
        [
            'id'       => 'al-kraft-round',
            'tab'      => 'Kraft/Crepe Round',
            'name'     => 'Kraft / Crepe Coated Al Round Wire',
            'grade'    => 'EC Grade Aluminium',
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/prod-122.png',
            'intro' => 'Round aluminium conductor with kraft or crepe paper insulation — used as an aluminium alternative for transformer leads and shields in oil-immersed designs.',
            'properties' => [
                'EC grade aluminium conductor',
                'Electrical grade kraft / crepe paper covering',
                'Lightweight alternative to copper in lead applications',
                'Good oil absorption and impregnation properties',
            ],
            'specs' => [
                [ 'label' => 'Conductor',        'value' => 'EC Grade Aluminium' ],
                [ 'label' => 'Diameter Range',   'value' => '0.5 mm to 5 mm' ],
                [ 'label' => 'Covering',         'value' => 'Electrical grade kraft / crepe paper' ],
                [ 'label' => 'Variants',         'value' => 'Double paper covered / Triple paper covered' ],
                [ 'label' => 'Applications',     'value' => 'Oil-cooled transformer leads and shields' ],
            ],
            'matrix_row' => [ 'EC Grade Aluminium', '0.5–5 mm dia', 'Kraft / Crepe covering', 'Round' ],
        ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
