<?php
/**
 * Template Name: Copper Winding Wires
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
    'name'           => 'Copper Winding Wires',
    'term_id'        => 9,
    'parent_term_id' => 7,
    'hero_image'     => UBL_URI . '/assets/images/product-winding-wire.png',
    'breadcrumb_parent' => [ 'name' => 'Winding Wires', 'url' => '/products/winding-wires/' ],
    'applications' => [
        [ 'name' => 'Power Transformers',        'sub' => 'HV & LV windings',       'svg' => $svg_transformer ],
        [ 'name' => 'Electric Motors',           'sub' => 'Stator & rotor coils',   'svg' => $svg_motor       ],
        [ 'name' => 'Distribution Transformers', 'sub' => 'Compact winding design', 'svg' => $svg_dist        ],
        [ 'name' => 'Electronic Appliances',     'sub' => 'ACs, fans, refrigerators','svg' => $svg_electronics ],
    ],
    'products' => [
        [
            'id'       => 'cu-paper-insulated',
            'tab'      => 'Paper Insulated',
            'name'     => 'Paper Insulated Copper Conductors (Rectangular / Round)',
            'grade'    => 'Electrolytic Copper',
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/cu-paper-insulated.jpg',
            'intro'    => 'High-conductivity electrolytic copper conductors wrapped with multiple layers of electrical insulation paper. The insulation delivers excellent dielectric strength and the thermal stability required for transformer windings, supporting applications that demand high electrical conductivity and long operational life.',
            'properties' => [
                'High conductivity electrolytic copper conductor',
                'Multiple paper insulation layers for high dielectric strength',
                'Excellent thermal stability for transformer windings',
                'Available in rectangular and round profiles',
            ],
            'specs' => [
                [ 'label' => 'Conductor',              'value' => 'High Conductivity Electrolytic Copper' ],
                [ 'label' => 'Width',                  'value' => '3 mm – 30 mm' ],
                [ 'label' => 'Thickness',              'value' => '0.80 mm – 5 mm' ],
                [ 'label' => 'Cross Section Area',     'value' => '3.2 sq.mm – 150 sq.mm' ],
                [ 'label' => 'Width / Thickness Ratio','value' => '1.2 – 8' ],
                [ 'label' => 'Conductor Diameter (Round)', 'value' => '0.80 mm – 6.0 mm' ],
                [ 'label' => 'Radial Insulation',      'value' => '0.300 mm – 10.00 mm' ],
                [ 'label' => 'Applications',           'value' => 'Power Transformers, Distribution Transformers, Dry Type Transformers, High Voltage Motors, Wind Turbine Generators' ],
            ],
            'paper_types' => [
                'Electrical Grade Kraft Paper',
                'Thermally Upgraded Paper (TUP)',
                'Nomex® Paper',
                'Crepe Paper',
                'Mica Paper',
                'Kapton',
                'Polyester Paper',
            ],
            'paper_types_image' => UBL_URI . '/assets/images/paper-covering-options.jpg',
            'matrix_row' => [ 'Electrolytic Copper', 'Rectangular / Round' ],
        ],
        [
            'id'       => 'cu-enamel-strips',
            'tab'      => 'Enameled Strips',
            'name'     => 'Enameled Copper Rectangular Strips',
            'grade'    => 'Electrolytic Copper',
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/cu-enamel-strips.jpg',
            'intro'    => 'Flat copper conductors coated with enamel insulation. The rectangular profile provides better space utilisation in coils and improves current distribution. Copper conductors offer excellent electrical conductivity and are commonly used in high-efficiency electrical equipment.',
            'properties' => [
                'Electrolytic copper conductor for maximum conductivity',
                'Rectangular profile for high winding fill',
                'Multiple insulation thermal classes available',
                'Suitable for high-efficiency electrical equipment',
            ],
            'specs' => [
                [ 'label' => 'Conductor',                 'value' => 'Electrolytic Copper' ],
                [ 'label' => 'Width',                     'value' => '3.15 mm – 15 mm' ],
                [ 'label' => 'Thickness',                 'value' => '1.12 mm – 5 mm' ],
                [ 'label' => 'Cross Section Area',        'value' => '3.5 sq.mm – 120 sq.mm' ],
                [ 'label' => 'Insulation Thermal Classes','value' => 'Modified Polyester 155°C · Polyesterimide 180°C · Dual Coated 200 / 220°C · Self Solderable 155°C / 180°C' ],
                [ 'label' => 'Applications',              'value' => 'Power Transformers, Motors & Generators, Renewable Energy Transformers, Automotive Electrical Systems' ],
            ],
            'matrix_row' => [ 'Electrolytic Copper', 'Rectangular Strip' ],
        ],
        [
            'id'       => 'cu-magnet-wire',
            'tab'      => 'Magnet Wires',
            'name'     => 'Enameled Copper Winding Wires (Magnet Wires)',
            'grade'    => 'Electrolytic Copper',
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/cu-magnet-wire.png',
            'intro'    => 'Magnet wires manufactured from electrolytically refined copper coated with high-quality enamel insulation. These wires offer excellent conductivity, mechanical strength, and durability for transformer, motor, and appliance windings.',
            'properties' => [
                'Electrolytically refined copper conductor',
                'High-quality enamel insulation coating',
                'Excellent conductivity, mechanical strength, and durability',
                'Available across a wide diameter and grade range',
            ],
            'specs' => [
                [ 'label' => 'Conductor',        'value' => 'Electrolytically Refined Copper' ],
                [ 'label' => 'AWG Range',        'value' => '4 – 26' ],
                [ 'label' => 'SWG Range',        'value' => '5 – 27' ],
                [ 'label' => 'Diameter',         'value' => '0.40 mm – 5.40 mm' ],
                [ 'label' => 'Insulation Grade', 'value' => '1 – 3' ],
                [ 'label' => 'Applications',     'value' => 'Transformers, Electric Motors, Generators, Household Appliances, Industrial Equipment' ],
            ],
            'matrix_row' => [ 'Electrolytic Copper', 'Round Enamelled' ],
        ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
