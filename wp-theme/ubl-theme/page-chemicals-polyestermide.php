<?php
/**
 * Template Name: Chemicals – Polyestermide
 * @package UBL_Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$sales_email = ubl_option( 'company_sales_email', 'sales@umangboards.com' );

$svg_wire    = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20"/></svg>';
$svg_motor   = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="7"/><path d="M12 1v4M12 19v4"/></svg>';
$svg_inverter= '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>';
$svg_traction= '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="8" width="20" height="8" rx="2"/><circle cx="6" cy="16" r="2"/><circle cx="18" cy="16" r="2"/></svg>';

$catalog = [
    'type'           => 'chemicals',
    'name'           => 'Polyestermide Wire Enamels',
    'term_id'        => 13,
    'parent_term_id' => 10,
    'hero_image'     => UBL_URI . '/assets/images/product-insulating-chemicals.png',
    'breadcrumb_parent' => [ 'name' => 'Insulating Chemicals', 'url' => '/products/insulating-chemicals/' ],
    'applications' => [
        [ 'name' => 'Enamelled Wire Manufacturing', 'sub' => 'Class 180 windings',                 'svg' => $svg_wire     ],
        [ 'name' => 'High-Performance Motors',      'sub' => 'Inverter-duty & traction motors',   'svg' => $svg_motor    ],
        [ 'name' => 'Inverter-Fed Drives',          'sub' => 'Variable frequency drive motors',   'svg' => $svg_inverter ],
        [ 'name' => 'Traction Applications',        'sub' => 'Rail & industrial traction',        'svg' => $svg_traction ],
    ],
    'category_intro' => 'UBL Polyestermide wire enamels combine the film flexibility of polyester with the thermal and chemical resistance of imide chemistry, delivering Class 180 thermal performance. These enamels are the preferred choice for inverter-duty motors, traction windings, and high-temperature applications requiring superior resistance to voltage spike degradation.',
    'thermal_class'  => 'Thermal Class 180 (H)',
    'viscosity'      => 'Medium viscosity — die wiping',
    'key_properties' => [
        [ 'label' => 'Thermal Class',    'value' => 'Class 180 (H) — suitable for high-temperature winding environments' ],
        [ 'label' => 'Wire Range',       'value' => '0.05 mm to 2.0 mm diameter' ],
        [ 'label' => 'Key Advantage',    'value' => 'Superior resistance to partial discharge (PD) and voltage spikes from inverter drives' ],
        [ 'label' => 'RoHS Compliance',  'value' => 'All grades comply with RoHS Directive 2002/95/EC' ],
    ],
    'products' => [
        [ 'grade' => 'UB 543-32',    'thermal_class' => 'Class 180 (H)', 'wire_range' => '0.05–2.0 mm', 'description' => 'Polyestermide enamel for fine to medium wire; excellent thermal stability and dielectric properties at elevated temperatures.' ],
        [ 'grade' => 'UB 543-35',    'thermal_class' => 'Class 180 (H)', 'wire_range' => '0.05–2.0 mm', 'description' => 'Standard polyestermide grade; high thermal index; suitable for inverter-fed and high-performance motor windings.' ],
        [ 'grade' => 'UB 543-38',    'thermal_class' => 'Class 180 (H)', 'wire_range' => '0.05–2.0 mm', 'description' => 'Higher solids polyestermide; thicker film build per pass; traction motors and demanding industrial windings.' ],
        [ 'grade' => 'UB 543 38 FL', 'thermal_class' => 'Class 180 (H)', 'wire_range' => '0.05–2.0 mm', 'description' => 'Flat wire grade polyestermide; optimised for rectangular conductor enamelling in high-power motor applications.' ],
        [ 'grade' => 'UB 533-39',    'thermal_class' => 'Class 180 (H)', 'wire_range' => '0.1–2.0 mm',  'description' => 'High-build polyestermide enamel; fewer passes for target film thickness; reduces processing time in production.' ],
        [ 'grade' => 'UB 540-36',    'thermal_class' => 'Class 180 (H)', 'wire_range' => '0.05–1.6 mm', 'description' => 'Balanced polyestermide enamel for motors, transformers and high-temperature coil applications.' ],
        [ 'grade' => 'UB 540-38',    'thermal_class' => 'Class 180 (H)', 'wire_range' => '0.05–1.6 mm', 'description' => 'Enhanced variant of UB 540 series; improved flexibility and film adhesion for automated winding processes.' ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
