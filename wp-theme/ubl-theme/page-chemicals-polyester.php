<?php
/**
 * Template Name: Chemicals – Polyester
 * @package UBL_Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$sales_email = ubl_option( 'company_sales_email', 'sales@umangboards.com' );

$svg_wire    = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20"/></svg>';
$svg_motor   = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="7"/><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83"/></svg>';
$svg_coil    = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6"/><path d="M10 12c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6"/></svg>';
$svg_elect   = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="4" y="4" width="16" height="16" rx="2"/><rect x="9" y="9" width="6" height="6"/></svg>';

$catalog = [
    'type'           => 'chemicals',
    'name'           => 'Polyester Wire Enamels',
    'term_id'        => 11,
    'parent_term_id' => 10,
    'hero_image'     => UBL_URI . '/assets/images/product-insulating-chemicals.png',
    'breadcrumb_parent' => [ 'name' => 'Insulating Chemicals', 'url' => '/products/insulating-chemicals/' ],
    'applications' => [
        [ 'name' => 'Enamelled Wire Manufacturing', 'sub' => 'Vertical & horizontal machines', 'svg' => $svg_wire   ],
        [ 'name' => 'Electric Motor Rewinding',     'sub' => 'Class 130 & 155 windings',      'svg' => $svg_motor  ],
        [ 'name' => 'Transformer Windings',         'sub' => 'Distribution & power',           'svg' => $svg_coil   ],
        [ 'name' => 'Electronic Coil Production',   'sub' => 'Fans, relays, instruments',      'svg' => $svg_elect  ],
    ],
    'category_intro' => 'UBL Polyester wire enamels are high-performance coating solutions for enamelling copper and aluminium conductors. Formulated for Class 130 and Class 155 thermal performance, they deliver chemical, mechanical, and electrical resistance across a wide processing range. All grades conform to RoHS Directive (2002/95/EC).',
    'thermal_class'  => 'Thermal Class 130 / 155',
    'viscosity'      => 'Medium viscosity — felt & die wiping',
    'key_properties' => [
        [ 'label' => 'Wire Range',       'value' => '0.05 mm to 1.6 mm diameter (copper & aluminium)' ],
        [ 'label' => 'Thermal Class',    'value' => 'Class 130 (E) and Class 155 (F)' ],
        [ 'label' => 'Processing',       'value' => 'Vertical and horizontal machines; felt and die wiping methods' ],
        [ 'label' => 'RoHS Compliance',  'value' => 'All grades comply with RoHS Directive 2002/95/EC' ],
    ],
    'products' => [
        [ 'grade' => 'UB F 35 A',   'thermal_class' => 'Class 130 (E)', 'wire_range' => '0.05–1.0 mm', 'description' => 'Medium viscosity polyester enamel for fine wire; wide curing range; suitable for felt and die wiping on vertical/horizontal machines.' ],
        [ 'grade' => 'UB F 35 AL',  'thermal_class' => 'Class 130 (E)', 'wire_range' => '0.05–1.0 mm', 'description' => 'Aluminium-compatible variant of UB F 35 A; same processing characteristics; wide curing range.' ],
        [ 'grade' => 'UB F 215-35', 'thermal_class' => 'Class 130 (E)', 'wire_range' => '0.05–1.0 mm', 'description' => 'Fine wire grade with excellent cut-through resistance; high processing speed; suitable for fan wire grades.' ],
        [ 'grade' => 'UB 216-35',   'thermal_class' => 'Class 130 (E)', 'wire_range' => '0.05–1.0 mm', 'description' => 'High-speed polyester enamel with light yellowish colour; ideal for fine wire fans and small appliance windings.' ],
        [ 'grade' => 'UB 216-35 D', 'thermal_class' => 'Class 130 (E)', 'wire_range' => '0.05–1.0 mm', 'description' => 'Modified high-speed variant of UB 216-35; enhanced processing characteristics for fine wire applications.' ],
        [ 'grade' => 'UB 230-35 G', 'thermal_class' => 'Class 155 (F)', 'wire_range' => '0.05–1.6 mm', 'description' => 'General purpose polyester enamel for motors, fans, transformers and relay coils; high speed processing.' ],
        [ 'grade' => 'UB 231-35 P', 'thermal_class' => 'Class 155 (F)', 'wire_range' => '0.05–1.6 mm', 'description' => 'Balanced performance polyester enamel; high-speed running; suitable for motors, fans and transformers.' ],
        [ 'grade' => 'UB 232-35 YG','thermal_class' => 'Class 155 (F)', 'wire_range' => '0.05–1.6 mm', 'description' => 'Yellow-green coloured polyester enamel; high-speed processing; motors, fans, transformers, relay coils.' ],
        [ 'grade' => 'UB 232-35 YGH','thermal_class' => 'Class 155 (F)','wire_range' => '0.05–1.6 mm', 'description' => 'High-performance variant of UB 232-35 YG with enhanced thermal properties for demanding motor windings.' ],
        [ 'grade' => 'UB G 250-35', 'thermal_class' => 'Class 155 (F)', 'wire_range' => '0.05–1.6 mm', 'description' => 'High-speed general-purpose polyester enamel; suitable for motors, fans, transformers and relay coils.' ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
