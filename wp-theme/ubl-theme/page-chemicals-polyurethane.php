<?php
/**
 * Template Name: Chemicals – Polyurethane
 * @package UBL_Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$sales_email = ubl_option( 'company_sales_email', 'sales@umangboards.com' );

$svg_wire    = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20"/></svg>';
$svg_solder  = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2v20M2 12h20"/><circle cx="12" cy="12" r="4"/></svg>';
$svg_relay   = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="7" width="20" height="10" rx="2"/><path d="M7 12h10"/><circle cx="7" cy="12" r="1" fill="currentColor"/><circle cx="17" cy="12" r="1" fill="currentColor"/></svg>';
$svg_auto    = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="8" width="20" height="8" rx="2"/><circle cx="6" cy="16" r="2"/><circle cx="18" cy="16" r="2"/><path d="M6 8V6a2 2 0 012-2h8a2 2 0 012 2v2"/></svg>';

$catalog = [
    'type'           => 'chemicals',
    'name'           => 'Polyurethane Wire Enamels',
    'term_id'        => 14,
    'parent_term_id' => 10,
    'hero_image'     => UBL_URI . '/assets/images/product-insulating-chemicals.png',
    'breadcrumb_parent' => [ 'name' => 'Insulating Chemicals', 'url' => '/products/insulating-chemicals/' ],
    'applications' => [
        [ 'name' => 'Enamelled Wire Manufacturing', 'sub' => 'Solderable wire grades',        'svg' => $svg_wire   ],
        [ 'name' => 'Solderable Coils',             'sub' => 'Direct solder without stripping','svg' => $svg_solder ],
        [ 'name' => 'Relay & Solenoid Coils',       'sub' => 'Compact winding designs',       'svg' => $svg_relay  ],
        [ 'name' => 'Automotive Electronics',       'sub' => 'Sensor & actuator coils',       'svg' => $svg_auto   ],
    ],
    'category_intro' => 'UBL Polyurethane wire enamels are the preferred choice where direct solderability without stripping is required. Class 130 thermal performance combined with outstanding solderable film characteristics make these enamels ideal for relay coils, solenoids, fine motor windings, and any application where direct tin soldering of the coil ends is needed.',
    'thermal_class'  => 'Thermal Class 130 (E)',
    'viscosity'      => 'Low to medium viscosity — solderable',
    'key_properties' => [
        [ 'label' => 'Key Advantage',   'value' => 'Direct solderable — no prior stripping of insulation required' ],
        [ 'label' => 'Thermal Class',   'value' => 'Class 130 (E)' ],
        [ 'label' => 'Wire Range',      'value' => '0.05 mm to 1.0 mm diameter' ],
        [ 'label' => 'RoHS Compliance', 'value' => 'All grades comply with RoHS Directive 2002/95/EC' ],
    ],
    'products' => [
        [ 'grade' => 'UB 1340-35', 'thermal_class' => 'Class 130 (E)', 'wire_range' => '0.05–1.0 mm', 'description' => 'Standard polyurethane enamel with excellent solderable film; suitable for relay coils, fine motor windings and solenoids.' ],
        [ 'grade' => 'UB 1380 M1', 'thermal_class' => 'Class 130 (E)', 'wire_range' => '0.05–1.0 mm', 'description' => 'Modified polyurethane enamel with improved thermal stability; enhanced mechanical properties for compact coil designs.' ],
        [ 'grade' => 'UB 240',     'thermal_class' => 'Class 130 (E)', 'wire_range' => '0.05–0.6 mm', 'description' => 'Fine wire polyurethane enamel; excellent flexibility and film adhesion; direct solderable for electronics manufacturing.' ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
