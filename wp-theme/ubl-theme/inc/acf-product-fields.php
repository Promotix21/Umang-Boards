<?php
/**
 * ACF Field Groups — Product & Product Category pages
 * Provides structured technical data fields for the engineering catalog.
 *
 * @package UBL_Theme
 */

if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

/* ═══════════════════════════════════════════
   PRODUCT FIELDS (on dd_product CPT)
   ═══════════════════════════════════════════ */

/* ─── Quick Specs (spec strip below hero) ─── */
acf_add_local_field_group( [
    'key'      => 'group_product_quick_specs',
    'title'    => 'Quick Specifications',
    'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'dd_product' ] ] ],
    'menu_order' => 10,
    'position' => 'normal',
    'style'    => 'default',
    'fields'   => [
        [
            'key'          => 'field_pqs_specs',
            'label'        => 'Quick Spec Cards',
            'name'         => 'quick_specs',
            'type'         => 'repeater',
            'instructions' => 'Up to 5 key specs shown in the horizontal strip below the product hero.',
            'min'          => 0,
            'max'          => 5,
            'layout'       => 'table',
            'sub_fields'   => [
                [
                    'key'   => 'field_pqs_label',
                    'label' => 'Label',
                    'name'  => 'spec_label',
                    'type'  => 'text',
                    'placeholder' => 'e.g. THICKNESS',
                ],
                [
                    'key'   => 'field_pqs_value',
                    'label' => 'Value',
                    'name'  => 'spec_value',
                    'type'  => 'text',
                    'placeholder' => 'e.g. 0.5–8.0 mm',
                ],
            ],
        ],
    ],
] );

/* ─── Product Description & Key Features ─── */
acf_add_local_field_group( [
    'key'      => 'group_product_description',
    'title'    => 'Product Description & Features',
    'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'dd_product' ] ] ],
    'menu_order' => 20,
    'position' => 'normal',
    'style'    => 'default',
    'fields'   => [
        [
            'key'          => 'field_pd_long_desc',
            'label'        => 'Detailed Description',
            'name'         => 'product_description_long',
            'type'         => 'wysiwyg',
            'instructions' => 'Full product description shown in the overview section. Supports paragraphs and formatting.',
            'tabs'         => 'all',
            'toolbar'      => 'full',
            'media_upload' => 0,
        ],
        [
            'key'          => 'field_pd_features',
            'label'        => 'Key Features',
            'name'         => 'key_features',
            'type'         => 'repeater',
            'instructions' => 'Bullet-point features shown in the sidebar card.',
            'min'          => 0,
            'max'          => 12,
            'layout'       => 'table',
            'sub_fields'   => [
                [
                    'key'   => 'field_pd_feature_text',
                    'label' => 'Feature',
                    'name'  => 'feature_text',
                    'type'  => 'text',
                    'placeholder' => 'e.g. High mechanical strength',
                ],
            ],
        ],
    ],
] );

/* ─── Technical Specifications Table ─── */
acf_add_local_field_group( [
    'key'      => 'group_product_tech_specs',
    'title'    => 'Technical Specifications',
    'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'dd_product' ] ] ],
    'menu_order' => 30,
    'position' => 'normal',
    'style'    => 'default',
    'fields'   => [
        [
            'key'          => 'field_pts_table',
            'label'        => 'Spec Table Rows',
            'name'         => 'tech_specs',
            'type'         => 'repeater',
            'instructions' => 'Property/value rows for the technical specifications table.',
            'min'          => 0,
            'max'          => 30,
            'layout'       => 'table',
            'sub_fields'   => [
                [
                    'key'   => 'field_pts_property',
                    'label' => 'Property',
                    'name'  => 'property',
                    'type'  => 'text',
                    'placeholder' => 'e.g. Dielectric strength',
                ],
                [
                    'key'   => 'field_pts_value',
                    'label' => 'Value',
                    'name'  => 'value',
                    'type'  => 'text',
                    'placeholder' => 'e.g. > 10 kV/mm',
                ],
            ],
        ],
    ],
] );

/* ─── Characteristics ─── */
acf_add_local_field_group( [
    'key'      => 'group_product_characteristics',
    'title'    => 'Product Characteristics',
    'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'dd_product' ] ] ],
    'menu_order' => 40,
    'position' => 'normal',
    'style'    => 'default',
    'fields'   => [
        [
            'key'          => 'field_pc_list',
            'label'        => 'Characteristics',
            'name'         => 'characteristics',
            'type'         => 'repeater',
            'instructions' => 'Bullet list shown in 2-column layout.',
            'min'          => 0,
            'max'          => 20,
            'layout'       => 'table',
            'sub_fields'   => [
                [
                    'key'   => 'field_pc_text',
                    'label' => 'Characteristic',
                    'name'  => 'characteristic_text',
                    'type'  => 'text',
                ],
            ],
        ],
    ],
] );

/* ─── Applications ─── */
acf_add_local_field_group( [
    'key'      => 'group_product_applications',
    'title'    => 'Applications',
    'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'dd_product' ] ] ],
    'menu_order' => 50,
    'position' => 'normal',
    'style'    => 'default',
    'fields'   => [
        [
            'key'          => 'field_pa_cards',
            'label'        => 'Application Cards',
            'name'         => 'applications',
            'type'         => 'repeater',
            'instructions' => 'Application use-cases displayed as cards.',
            'min'          => 0,
            'max'          => 8,
            'layout'       => 'block',
            'sub_fields'   => [
                [
                    'key'   => 'field_pa_name',
                    'label' => 'Application Name',
                    'name'  => 'app_name',
                    'type'  => 'text',
                    'placeholder' => 'e.g. Power Transformers',
                ],
                [
                    'key'   => 'field_pa_desc',
                    'label' => 'Short Description',
                    'name'  => 'app_description',
                    'type'  => 'textarea',
                    'rows'  => 2,
                    'placeholder' => 'e.g. Insulation barriers and spacers in HV windings',
                ],
                [
                    'key'           => 'field_pa_icon',
                    'label'         => 'Icon',
                    'name'          => 'app_icon',
                    'type'          => 'select',
                    'choices'       => [
                        'power-transformer'        => 'Power Transformer',
                        'distribution-transformer' => 'Distribution Transformer',
                        'instrument-transformer'   => 'Instrument Transformer',
                        'electric-motor'           => 'Electric Motor',
                        'ev-motor'                 => 'EV Motor',
                        'renewables'               => 'Renewables',
                        'data-center'              => 'Data Center',
                        'home-appliance'           => 'Home Appliance',
                        'stabilizer'               => 'Stabilizer',
                        'general'                  => 'General',
                    ],
                    'default_value' => 'general',
                ],
            ],
        ],
    ],
] );

/* ─── Downloads ─── */
acf_add_local_field_group( [
    'key'      => 'group_product_downloads',
    'title'    => 'Downloadable Documents',
    'location' => [ [ [ 'param' => 'post_type', 'operator' => '==', 'value' => 'dd_product' ] ] ],
    'menu_order' => 60,
    'position' => 'normal',
    'style'    => 'default',
    'fields'   => [
        [
            'key'          => 'field_pdl_docs',
            'label'        => 'Documents',
            'name'         => 'downloads',
            'type'         => 'repeater',
            'instructions' => 'Datasheets, test reports, MSDS and other downloadable documents.',
            'min'          => 0,
            'max'          => 10,
            'layout'       => 'table',
            'sub_fields'   => [
                [
                    'key'   => 'field_pdl_name',
                    'label' => 'Document Name',
                    'name'  => 'doc_name',
                    'type'  => 'text',
                    'placeholder' => 'e.g. Product Datasheet',
                ],
                [
                    'key'           => 'field_pdl_file',
                    'label'         => 'File',
                    'name'          => 'doc_file',
                    'type'          => 'file',
                    'return_format' => 'array',
                    'mime_types'    => 'pdf,doc,docx,dwg,zip',
                ],
                [
                    'key'           => 'field_pdl_type',
                    'label'         => 'Type',
                    'name'          => 'doc_type',
                    'type'          => 'select',
                    'choices'       => [
                        'pdf'  => 'PDF',
                        'dwg'  => 'DWG',
                        'cad'  => 'CAD',
                        'doc'  => 'Document',
                        'zip'  => 'Archive',
                    ],
                    'default_value' => 'pdf',
                ],
            ],
        ],
    ],
] );

/* ═══════════════════════════════════════════
   PRODUCT CATEGORY (taxonomy: dd_product_cat)
   ═══════════════════════════════════════════ */

acf_add_local_field_group( [
    'key'      => 'group_product_cat_fields',
    'title'    => 'Category Page Settings',
    'location' => [ [ [ 'param' => 'taxonomy', 'operator' => '==', 'value' => 'dd_product_cat' ] ] ],
    'menu_order' => 0,
    'style'    => 'default',
    'fields'   => [
        [
            'key'   => 'field_pcat_eyebrow',
            'label' => 'Header Eyebrow',
            'name'  => 'category_eyebrow',
            'type'  => 'text',
            'default_value' => 'Product Category',
            'instructions'  => 'Small label above the category title.',
        ],
        [
            'key'          => 'field_pcat_desc',
            'label'        => 'Extended Description',
            'name'         => 'category_description_long',
            'type'         => 'textarea',
            'rows'         => 4,
            'instructions' => 'Detailed description shown in the category header. Falls back to the default category description.',
        ],
        [
            'key'           => 'field_pcat_image',
            'label'         => 'Header Image',
            'name'          => 'category_image',
            'type'          => 'image',
            'return_format' => 'url',
            'preview_size'  => 'medium',
            'instructions'  => 'Image shown in the right column of the category header.',
        ],
    ],
] );
