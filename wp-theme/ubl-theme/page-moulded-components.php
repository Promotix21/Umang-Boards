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
            'name'     => 'Angle Rings',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/moulded-angle-rings.png',
            'intro'    => 'Precision-formed from premium mouldable pressboard, our angle rings offer excellent strength, insulation properties, and dimensional accuracy. Available in diameters from 400 mm to 2000 mm, they are supplied in sectors and manufactured to meet specific customer requirements.',
            'properties' => [
                'Premium mouldable pressboard',
                'Excellent strength and insulation properties',
                'Dimensional accuracy',
                'Supplied in sectors to customer requirements',
            ],
            'matrix_row' => [ 'Mouldable Pressboard', 'Class A (105°C)', '400–2000 mm dia · in sectors' ],
        ],
        [
            'id'       => 'cap-rings',
            'tab'      => 'Cap Rings',
            'name'     => 'Cap Rings',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/moulded-cap-rings.png',
            'intro'    => 'Precision-formed from premium mouldable pressboard, our cap rings offer excellent mechanical strength, dimensional stability, and dielectric performance. Available in diameters from 400 mm to 2000 mm, they are supplied in sectors and manufactured to meet specific customer requirements, ensuring consistent quality and dimensional accuracy.',
            'properties' => [
                'Premium mouldable pressboard',
                'Excellent mechanical strength and dimensional stability',
                'Dependable dielectric performance',
                'Supplied in sectors to customer requirements',
            ],
            'matrix_row' => [ 'Mouldable Pressboard', 'Class A (105°C)', '400–2000 mm dia · in sectors' ],
        ],
        [
            'id'       => 'disc-angle-ring',
            'tab'      => 'Disc Angle Ring',
            'name'     => 'Disc Angle Ring',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/moulded-angle-rings.png',
            'intro'    => 'Manufactured from premium mouldable pressboard, our disc angle rings offer excellent mechanical strength, dimensional stability, and dielectric performance. Available in diameters ranging from 450 mm to 2000 mm, they are supplied in sectors and manufactured to customer specifications, ensuring precise dimensions and consistent quality.',
            'properties' => [
                'Premium mouldable pressboard',
                'Excellent mechanical strength and dimensional stability',
                'Dependable dielectric performance',
                'Supplied in sectors to customer specifications',
            ],
            'matrix_row' => [ 'Mouldable Pressboard', 'Class A (105°C)', '450–2000 mm dia · in sectors' ],
        ],
        [
            'id'       => 'disc-cap-ring',
            'tab'      => 'Disc Cap Ring',
            'name'     => 'Disc Cap Ring',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/moulded-cap-rings.png',
            'intro'    => 'Manufactured from premium mouldable pressboard, our disc cap rings offer excellent mechanical strength, dimensional stability, and dielectric performance. Available in diameters ranging from 450 mm to 2000 mm, they are supplied in sectors and manufactured to customer specifications, ensuring precise dimensions and consistent quality.',
            'properties' => [
                'Premium mouldable pressboard',
                'Excellent mechanical strength and dimensional stability',
                'Dependable dielectric performance',
                'Supplied in sectors to customer specifications',
            ],
            'matrix_row' => [ 'Mouldable Pressboard', 'Class A (105°C)', '450–2000 mm dia · in sectors' ],
        ],
        [
            'id'       => 'snouts',
            'tab'      => 'Snouts',
            'name'     => 'Snouts',
            'grade'    => null,
            'iec'      => null,
            'image'    => UBL_URI . '/assets/images/moulded-snouts.jpg',
            'intro'    => 'Manufactured from premium mouldable pressboard, our snouts provide excellent mechanical strength, dimensional stability, and electrical insulation properties. Available in diameters ranging from 400 mm to 2000 mm, they are produced to customer specifications, ensuring precise dimensions, consistent quality, and reliable performance.',
            'properties' => [
                'Premium mouldable pressboard',
                'Excellent mechanical strength and dimensional stability',
                'Reliable electrical insulation properties',
                'Produced to customer specifications',
            ],
            'matrix_row' => [ 'Mouldable Pressboard', 'Class A (105°C)', '400–2000 mm dia' ],
        ],
    ],
];

include get_template_directory() . '/inc/catalog-renderer.php';
