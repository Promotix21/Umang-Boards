<?php
/**
 * Template Name: Chemicals – Polyamide-imide
 * @package UBL_Theme
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$sales_email = ubl_option( 'company_sales_email', 'sales@umangboards.com' );

$svg_wire    = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20"/></svg>';
$svg_motor   = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="7"/><path d="M12 1v4M12 19v4"/></svg>';
$svg_inverter= '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>';
$svg_defence = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>';

$catalog = [
    'type'           => 'chemicals',
    'name'           => 'Polyamide-imide Wire Enamels',
    'term_id'        => 15,
    'parent_term_id' => 10,
    'hero_image'     => UBL_URI . '/assets/images/product-insulating-chemicals.png',
    'breadcrumb_parent' => [ 'name' => 'Insulating Chemicals', 'url' => '/products/insulating-chemicals/' ],
    'applications' => [
        [ 'name' => 'Enamelled Wire Manufacturing', 'sub' => 'Class 200 overcoat',           'svg' => $svg_wire    ],
        [ 'name' => 'Premium Motor Windings',       'sub' => 'High-stress Class 200',        'svg' => $svg_motor   ],
        [ 'name' => 'Inverter-Duty Motors',         'sub' => 'Extreme PD resistance',        'svg' => $svg_inverter ],
        [ 'name' => 'High-Reliability Equipment',   'sub' => 'Defence & aerospace coils',    'svg' => $svg_defence ],
    ],
    'category_intro' => 'UBL Polyamide-imide (PAI) wire enamels represent the highest performance tier in the wire enamel range, delivering Class 200 thermal performance and exceptional resistance to partial discharge, chemical attack, and mechanical stress. Used primarily as a topcoat over polyestermide base layers in dual-coat (bonded coat) wire systems, they are the standard for inverter-duty motors, aerospace applications, and any environment demanding the ultimate in insulation reliability.',
    'thermal_class'  => 'Thermal Class 200 (C)',
    'viscosity'      => 'High viscosity — overcoat application',
    'key_properties' => [
        [ 'label' => 'Thermal Class',    'value' => 'Class 200 (C) — highest standard thermal rating for wire enamels' ],
        [ 'label' => 'Wire Range',       'value' => '0.05 mm to 2.0 mm diameter' ],
        [ 'label' => 'Key Advantage',    'value' => 'Maximum partial discharge resistance; used as overcoat in bonded-coat dual systems' ],
        [ 'label' => 'Application',      'value' => 'Overcoat layer on polyestermide base — forms the industry-standard Class 200 bonded coat wire' ],
    ],
    'products' => [
        [ 'grade' => 'UB AI 1013 BV', 'thermal_class' => 'Class 200 (C)', 'wire_range' => '0.05–2.0 mm', 'description' => 'Polyamide-imide overcoat enamel (bonded-coat variant); provides Class 200 thermal protection and outstanding PD resistance as topcoat over polyestermide base.' ],
        [ 'grade' => 'UB AI 1013 SC', 'thermal_class' => 'Class 200 (C)', 'wire_range' => '0.05–2.0 mm', 'description' => 'Self-crosslinking polyamide-imide overcoat; enhanced film hardness and chemical resistance; suitable for demanding inverter-duty and aerospace motor windings.' ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
