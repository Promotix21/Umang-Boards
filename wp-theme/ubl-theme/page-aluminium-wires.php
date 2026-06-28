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
            'id'       => 'al-paper-insulated',
            'tab'      => 'Paper Insulated',
            'name'     => 'Paper Insulated Aluminium Conductors (Rectangular / Round)',
            'grade'    => 'High Conductivity Aluminium',
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/al-paper-insulated.jpg',
            'intro'    => 'High-conductivity aluminium conductors wrapped with layers of electrical insulation paper. Multiple insulation layers provide high dielectric strength, mechanical protection, and reliable performance in transformer windings — at lower weight and cost than copper.',
            'properties' => [
                'High conductivity aluminium conductor',
                'Multiple paper insulation layers for high dielectric strength',
                'Mechanical protection and reliable winding performance',
                'Available in rectangular and round profiles',
            ],
            'specs' => [
                [ 'label' => 'Conductor',              'value' => 'High Conductivity Aluminium' ],
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
                'Thermally Upgraded Paper',
                'Nomex® Paper',
                'Crepe Paper',
                'Mica Paper',
                'Polyester Insulation',
                'Kapton',
            ],
            'paper_types_image' => UBL_URI . '/assets/images/paper-covering-options.jpg',
            'matrix_row' => [ 'High Conductivity Aluminium', '0.80–6.0 mm dia · up to 150 sq.mm', 'Paper Insulated', 'Rectangular / Round' ],
        ],
        [
            'id'       => 'al-enamel-strips',
            'tab'      => 'Enameled Strips',
            'name'     => 'Enameled Aluminium Rectangular Strips',
            'grade'    => 'EC Grade Aluminium',
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/al-enamel-strips.jpg',
            'intro'    => 'Flat aluminium conductors coated with electrical insulation enamel. The rectangular shape improves winding density and allows efficient use of space inside electrical coils, while aluminium offers lower weight and cost than copper with good electrical conductivity.',
            'properties' => [
                'EC grade aluminium conductor',
                'Rectangular profile for high winding density',
                'Multiple insulation thermal classes available',
                'Lower weight and cost than copper',
            ],
            'specs' => [
                [ 'label' => 'Conductor',                 'value' => 'EC Grade Aluminium' ],
                [ 'label' => 'Width',                     'value' => '3.15 mm – 15 mm' ],
                [ 'label' => 'Thickness',                 'value' => '1.12 mm – 5 mm' ],
                [ 'label' => 'Cross Section Area',        'value' => '3.5 sq.mm – 120 sq.mm' ],
                [ 'label' => 'Insulation Thermal Classes','value' => 'Modified Polyester 155°C · Polyesterimide 180°C · Dual Coated 200 / 220°C · Self Solderable 155°C / 180°C' ],
                [ 'label' => 'Applications',              'value' => 'Power Transformers, Motors & Generators, Renewable Energy Transformers, Automotive Electrical Systems' ],
            ],
            'matrix_row' => [ 'EC Grade Aluminium', '3.15–15 mm W · 1.12–5 mm T', 'Up to 200 / 220°C', 'Rectangular Strip' ],
        ],
        [
            'id'       => 'al-magnet-wire',
            'tab'      => 'Magnet Wires',
            'name'     => 'Enameled Aluminium Winding Wires',
            'grade'    => 'EC Grade Aluminium',
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/al-magnet-wire.png',
            'intro'    => 'Aluminium conductors coated with thin enamel insulation that provides electrical insulation and mechanical protection. These wires are widely used where weight reduction and cost efficiency are important.',
            'properties' => [
                'EC grade aluminium conductor',
                'Thin, uniform enamel insulation coating',
                'Electrical insulation with mechanical protection',
                'Weight reduction and cost efficiency',
            ],
            'specs' => [
                [ 'label' => 'Conductor',        'value' => 'EC Grade Aluminium' ],
                [ 'label' => 'AWG Range',        'value' => '4 – 26' ],
                [ 'label' => 'SWG Range',        'value' => '5 – 27' ],
                [ 'label' => 'Diameter',         'value' => '0.40 mm – 5.40 mm' ],
                [ 'label' => 'Insulation Grade', 'value' => '1 – 3' ],
                [ 'label' => 'Applications',     'value' => 'Transformers, Electric Motors, Generators, Household Appliances, Industrial Equipment' ],
            ],
            'matrix_row' => [ 'EC Grade Aluminium', '0.40–5.40 mm dia', 'Grade 1 – 3', 'Round Enamelled' ],
        ],
        [
            'id'       => 'al-bare-foil',
            'tab'      => 'Bare Foil / Strip',
            'name'     => 'Bare Aluminium Foil / Strip Conductors',
            'grade'    => 'High Quality Aluminium',
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/al-bare-foil.png',
            'intro'    => 'Flat aluminium strips used as electrical conductors in transformer and electrical equipment manufacturing. Supplied without insulation, they are typically used in foil-winding transformers where external insulation layers are applied during coil manufacturing. The rectangular geometry allows uniform current distribution, improved winding compactness, and efficient heat dissipation, with the added advantages of low weight, good conductivity, and cost efficiency.',
            'properties' => [
                'High quality aluminium conductor',
                'Supplied bare (uninsulated) for foil winding',
                'Uniform current distribution and compact winding',
                'Efficient heat dissipation, low weight, cost efficient',
            ],
            'specs' => [
                [ 'label' => 'Conductor',              'value' => 'High Quality Aluminium' ],
                [ 'label' => 'Width',                  'value' => '4 mm – 30 mm' ],
                [ 'label' => 'Thickness',              'value' => '0.80 mm – 10 mm' ],
                [ 'label' => 'Cross Section Area',     'value' => '10 sq.mm – 150 sq.mm' ],
                [ 'label' => 'Width / Thickness Ratio','value' => '1.2 – 8' ],
                [ 'label' => 'Applicable Standards',   'value' => 'IS · IEC · DIN · Customer Specific Requirements' ],
                [ 'label' => 'Applications',           'value' => 'Foil Winding Transformers, Distribution Transformers, Switchgear Equipment, CT & PT Manufacturing, Electrical Busbars, Motors & Electrical Equipment' ],
            ],
            'matrix_row' => [ 'High Quality Aluminium', '4–30 mm W · 0.80–10 mm T', 'Bare (uninsulated)', 'Foil / Strip' ],
        ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
