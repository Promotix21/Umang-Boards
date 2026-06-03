<?php
/**
 * Template Name: Chemicals – Modified Polyester
 * @package UBL_Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$sales_email = ubl_option( 'company_sales_email', 'sales@umangboards.com' );

$svg_wire  = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20"/></svg>';
$svg_motor = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="7"/><path d="M12 1v4M12 19v4"/></svg>';
$svg_coil  = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 12c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6"/><path d="M10 12c0-3.3 2.7-6 6-6s6 2.7 6 6-2.7 6-6 6"/></svg>';
$svg_hermetic = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>';

$catalog = [
    'type'           => 'chemicals',
    'name'           => 'Modified Polyester Wire Enamels',
    'term_id'        => 12,
    'parent_term_id' => 10,
    'hero_image'     => UBL_URI . '/assets/images/product-insulating-chemicals.png',
    'breadcrumb_parent' => [ 'name' => 'Insulating Chemicals', 'url' => '/products/insulating-chemicals/' ],
    'applications' => [
        [ 'name' => 'Enamelled Wire Manufacturing', 'sub' => 'Class 155–180 windings',         'svg' => $svg_wire     ],
        [ 'name' => 'Motor Rewinding',              'sub' => 'Elevated temperature motors',    'svg' => $svg_motor    ],
        [ 'name' => 'Transformer Windings',         'sub' => 'Higher thermal class designs',   'svg' => $svg_coil     ],
        [ 'name' => 'Hermetic Applications',        'sub' => 'Refrigerator compressors',       'svg' => $svg_hermetic ],
    ],
    'category_intro' => 'UBL Modified Polyester wire enamels provide enhanced thermal performance over standard polyester grades, targeting Class 155 to Class 180 applications. They are formulated for improved refrigerant resistance in hermetic motor applications and offer better thermal shock performance for demanding winding conditions.',
    'thermal_class'  => 'Thermal Class 155 / 180',
    'viscosity'      => 'Medium to high viscosity',
    'key_properties' => [
        [ 'label' => 'Wire Range',      'value' => '0.05 mm to 1.6 mm diameter' ],
        [ 'label' => 'Thermal Class',   'value' => 'Class 155 (F) and Class 180 (H)' ],
        [ 'label' => 'Key Advantage',   'value' => 'Improved refrigerant and chemical resistance over standard polyester' ],
        [ 'label' => 'RoHS Compliance', 'value' => 'All grades comply with RoHS Directive 2002/95/EC' ],
    ],
    'products' => [
        [ 'grade' => 'UB 101-36',   'thermal_class' => 'Class 155 (F)', 'wire_range' => '0.05–1.6 mm', 'description' => 'Modified polyester enamel with enhanced refrigerant resistance for hermetic compressor motor windings.' ],
        [ 'grade' => 'UB 227-35',   'thermal_class' => 'Class 155 (F)', 'wire_range' => '0.05–1.6 mm', 'description' => 'General purpose modified polyester enamel; improved thermal shock over standard polyester grades.' ],
        [ 'grade' => 'UB 235-35 U', 'thermal_class' => 'Class 155 (F)', 'wire_range' => '0.05–1.6 mm', 'description' => 'Modified polyester enamel for uniform and consistent film build; suitable for fine and medium wire ranges.' ],
        [ 'grade' => 'UB 251-38 F', 'thermal_class' => 'Class 155 (F)', 'wire_range' => '0.05–1.6 mm', 'description' => 'Fast-bake modified polyester enamel; high line speed processing; motors and transformer windings.' ],
        [ 'grade' => 'UB 256-40',   'thermal_class' => 'Class 180 (H)', 'wire_range' => '0.05–1.6 mm', 'description' => 'High thermal class modified polyester for Class 180 applications; excellent chemical resistance.' ],
        [ 'grade' => 'UB 257-35',   'thermal_class' => 'Class 155 (F)', 'wire_range' => '0.05–1.6 mm', 'description' => 'Modified polyester enamel with balanced mechanical and electrical properties; general motor and coil use.' ],
        [ 'grade' => 'UB 257-38',   'thermal_class' => 'Class 155 (F)', 'wire_range' => '0.05–1.6 mm', 'description' => 'Variant of UB 257 series with optimised viscosity for improved film uniformity in automated enamelling.' ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
