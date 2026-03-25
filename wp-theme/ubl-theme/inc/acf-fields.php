<?php
/**
 * ACF Field Groups — registered programmatically
 * All homepage sections are editable from WP Admin → Home page
 */

if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

/* ═══════════════════════════════════════════
   HOMEPAGE FIELDS
   ═══════════════════════════════════════════ */

acf_add_local_field_group( [
    'key'      => 'group_homepage',
    'title'    => 'Homepage Sections',
    'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
    'menu_order' => 0,
    'style'    => 'default',
    'fields'   => [],
] );

/* ─── HERO SECTION ─── */
acf_add_local_field_group( [
    'key'      => 'group_hero',
    'title'    => 'Hero Section',
    'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
    'menu_order' => 1,
    'fields'   => [
        [
            'key'   => 'field_hero_eyebrow',
            'label' => 'Eyebrow Text',
            'name'  => 'hero_eyebrow',
            'type'  => 'text',
            'default_value' => 'Since 1999 — Jaipur, India',
        ],
        [
            'key'   => 'field_hero_title_1',
            'label' => 'Title Line 1',
            'name'  => 'hero_title_line1',
            'type'  => 'text',
            'default_value' => "Powering Worlds'",
        ],
        [
            'key'   => 'field_hero_title_2',
            'label' => 'Title Line 2 (italic)',
            'name'  => 'hero_title_line2',
            'type'  => 'text',
            'default_value' => 'Electric Future',
        ],
        [
            'key'   => 'field_hero_subtitle',
            'label' => 'Subtitle',
            'name'  => 'hero_subtitle',
            'type'  => 'textarea',
            'rows'  => 2,
            'default_value' => 'Manufacturing high quality Transformer insulation solutions and winding wires.',
        ],
        [
            'key'   => 'field_hero_video',
            'label' => 'Background Video',
            'name'  => 'hero_video',
            'type'  => 'file',
            'return_format' => 'url',
            'mime_types'    => 'mp4,webm',
        ],
        [
            'key'   => 'field_hero_stats',
            'label' => 'Hero Stats',
            'name'  => 'hero_stats',
            'type'  => 'repeater',
            'min'   => 0,
            'max'   => 4,
            'layout' => 'table',
            'sub_fields' => [
                [
                    'key'   => 'field_hero_stat_num',
                    'label' => 'Number',
                    'name'  => 'number',
                    'type'  => 'text',
                ],
                [
                    'key'   => 'field_hero_stat_suffix',
                    'label' => 'Suffix',
                    'name'  => 'suffix',
                    'type'  => 'text',
                ],
                [
                    'key'   => 'field_hero_stat_label',
                    'label' => 'Label',
                    'name'  => 'label',
                    'type'  => 'text',
                ],
            ],
        ],
        [
            'key'   => 'field_hero_cta1_text',
            'label' => 'Primary CTA Text',
            'name'  => 'hero_cta1_text',
            'type'  => 'text',
            'default_value' => 'Explore Solutions',
        ],
        [
            'key'   => 'field_hero_cta1_url',
            'label' => 'Primary CTA URL',
            'name'  => 'hero_cta1_url',
            'type'  => 'url',
            'default_value' => '/products',
        ],
        [
            'key'   => 'field_hero_cta2_text',
            'label' => 'Secondary CTA Text',
            'name'  => 'hero_cta2_text',
            'type'  => 'text',
            'default_value' => 'Our Story',
        ],
        [
            'key'   => 'field_hero_cta2_url',
            'label' => 'Secondary CTA URL',
            'name'  => 'hero_cta2_url',
            'type'  => 'url',
            'default_value' => '/about-us',
        ],
    ],
] );

/* ─── VALUE PROPOSITION SECTION ─── */
acf_add_local_field_group( [
    'key'      => 'group_value',
    'title'    => 'Why Umang Boards Section',
    'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
    'menu_order' => 2,
    'fields'   => [
        [
            'key'   => 'field_value_eyebrow',
            'label' => 'Section Eyebrow',
            'name'  => 'value_eyebrow',
            'type'  => 'text',
            'default_value' => 'Why Umang Boards',
        ],
        [
            'key'   => 'field_value_title',
            'label' => 'Section Title (HTML allowed)',
            'name'  => 'value_title',
            'type'  => 'textarea',
            'rows'  => 2,
            'default_value' => 'Built on Trust,<br>Driven by <em>Excellence</em>',
        ],
        [
            'key'   => 'field_value_desc',
            'label' => 'Section Description',
            'name'  => 'value_desc',
            'type'  => 'textarea',
            'rows'  => 3,
            'default_value' => "From a single pressboard unit in 1999 to India's most trusted name in transformer insulation — delivering quality that powers critical infrastructure worldwide.",
        ],
        [
            'key'   => 'field_value_row1_image',
            'label' => 'Feature Row 1 — Image',
            'name'  => 'value_row1_image',
            'type'  => 'image',
            'return_format' => 'url',
        ],
        [
            'key'   => 'field_value_row1_badge',
            'label' => 'Feature Row 1 — Badge Text',
            'name'  => 'value_row1_badge',
            'type'  => 'text',
            'default_value' => 'Est. 1999 — Jaipur, Rajasthan',
        ],
        [
            'key'   => 'field_value_row1_number',
            'label' => 'Feature Row 1 — Big Number',
            'name'  => 'value_row1_number',
            'type'  => 'text',
            'default_value' => '25+',
        ],
        [
            'key'   => 'field_value_row1_label',
            'label' => 'Feature Row 1 — Number Label',
            'name'  => 'value_row1_label',
            'type'  => 'text',
            'default_value' => 'Years of Continuous Manufacturing Excellence',
        ],
        [
            'key'   => 'field_value_row1_body',
            'label' => 'Feature Row 1 — Body Text',
            'name'  => 'value_row1_body',
            'type'  => 'textarea',
            'rows'  => 3,
        ],
        [
            'key'   => 'field_value_facts',
            'label' => 'Facts Band',
            'name'  => 'value_facts',
            'type'  => 'repeater',
            'min'   => 0,
            'max'   => 6,
            'layout' => 'table',
            'sub_fields' => [
                [
                    'key'   => 'field_fact_num',
                    'label' => 'Number',
                    'name'  => 'number',
                    'type'  => 'text',
                ],
                [
                    'key'   => 'field_fact_suffix',
                    'label' => 'Suffix',
                    'name'  => 'suffix',
                    'type'  => 'text',
                ],
                [
                    'key'   => 'field_fact_label',
                    'label' => 'Label',
                    'name'  => 'label',
                    'type'  => 'text',
                ],
            ],
        ],
        [
            'key'   => 'field_value_row2_image',
            'label' => 'Feature Row 2 — Image',
            'name'  => 'value_row2_image',
            'type'  => 'image',
            'return_format' => 'url',
        ],
        [
            'key'   => 'field_value_certs',
            'label' => 'Certifications',
            'name'  => 'value_certs',
            'type'  => 'repeater',
            'min'   => 0,
            'max'   => 6,
            'layout' => 'table',
            'sub_fields' => [
                [
                    'key'   => 'field_cert_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ],
                [
                    'key'   => 'field_cert_sub',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'text',
                ],
            ],
        ],
    ],
] );

/* ─── PRODUCTS SECTION ─── */
acf_add_local_field_group( [
    'key'      => 'group_products',
    'title'    => 'Products Section',
    'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
    'menu_order' => 3,
    'fields'   => [
        [
            'key'   => 'field_products_eyebrow',
            'label' => 'Section Eyebrow',
            'name'  => 'products_eyebrow',
            'type'  => 'text',
            'default_value' => 'Product Portfolio',
        ],
        [
            'key'   => 'field_products_title',
            'label' => 'Section Title (HTML allowed)',
            'name'  => 'products_title',
            'type'  => 'textarea',
            'rows'  => 2,
            'default_value' => 'Three Pillars of<br><em>Insulation Excellence</em>',
        ],
        [
            'key'   => 'field_products_desc',
            'label' => 'Section Description',
            'name'  => 'products_desc',
            'type'  => 'textarea',
            'rows'  => 3,
        ],
        [
            'key'   => 'field_product_tabs',
            'label' => 'Product Tabs',
            'name'  => 'product_tabs',
            'type'  => 'repeater',
            'min'   => 1,
            'max'   => 5,
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key'   => 'field_ptab_name',
                    'label' => 'Tab Name',
                    'name'  => 'tab_name',
                    'type'  => 'text',
                ],
                [
                    'key'   => 'field_ptab_tag',
                    'label' => 'Tag',
                    'name'  => 'tag',
                    'type'  => 'text',
                ],
                [
                    'key'   => 'field_ptab_title',
                    'label' => 'Panel Title',
                    'name'  => 'title',
                    'type'  => 'text',
                ],
                [
                    'key'   => 'field_ptab_desc',
                    'label' => 'Panel Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 3,
                ],
                [
                    'key'   => 'field_ptab_image',
                    'label' => 'Panel Image',
                    'name'  => 'image',
                    'type'  => 'image',
                    'return_format' => 'url',
                ],
                [
                    'key'   => 'field_ptab_items',
                    'label' => 'Product List Items',
                    'name'  => 'items',
                    'type'  => 'textarea',
                    'rows'  => 4,
                    'instructions' => 'One item per line',
                ],
                [
                    'key'   => 'field_ptab_link',
                    'label' => 'CTA URL',
                    'name'  => 'link',
                    'type'  => 'url',
                ],
            ],
        ],
        [
            'key'   => 'field_product_cta_title',
            'label' => 'Catch Phrase Title',
            'name'  => 'product_cta_title',
            'type'  => 'text',
            'default_value' => 'Something caught your eye?',
        ],
        [
            'key'   => 'field_product_cta_desc',
            'label' => 'Catch Phrase Description',
            'name'  => 'product_cta_desc',
            'type'  => 'text',
            'default_value' => 'Connect with our sales team for pricing, samples, and technical specifications.',
        ],
    ],
] );

/* ─── CSR SECTION ─── */
acf_add_local_field_group( [
    'key'      => 'group_csr',
    'title'    => 'CSR Section',
    'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
    'menu_order' => 5,
    'fields'   => [
        [
            'key'   => 'field_csr_eyebrow',
            'label' => 'Eyebrow',
            'name'  => 'csr_eyebrow',
            'type'  => 'text',
            'default_value' => 'Responsibility',
        ],
        [
            'key'   => 'field_csr_title',
            'label' => 'Title (HTML allowed)',
            'name'  => 'csr_title',
            'type'  => 'textarea',
            'rows'  => 2,
        ],
        [
            'key'   => 'field_csr_desc',
            'label' => 'Description',
            'name'  => 'csr_desc',
            'type'  => 'textarea',
            'rows'  => 3,
        ],
        [
            'key'   => 'field_csr_image',
            'label' => 'Image',
            'name'  => 'csr_image',
            'type'  => 'image',
            'return_format' => 'url',
        ],
        [
            'key'   => 'field_csr_items',
            'label' => 'CSR Items',
            'name'  => 'csr_items',
            'type'  => 'repeater',
            'min'   => 0,
            'max'   => 6,
            'layout' => 'table',
            'sub_fields' => [
                [
                    'key'   => 'field_csr_item_title',
                    'label' => 'Title',
                    'name'  => 'title',
                    'type'  => 'text',
                ],
                [
                    'key'   => 'field_csr_item_desc',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'text',
                ],
            ],
        ],
    ],
] );

/* ─── INVESTOR SECTION ─── */
acf_add_local_field_group( [
    'key'      => 'group_investor',
    'title'    => 'Investor Section',
    'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
    'menu_order' => 6,
    'fields'   => [
        [
            'key'   => 'field_inv_eyebrow',
            'label' => 'Eyebrow',
            'name'  => 'inv_eyebrow',
            'type'  => 'text',
            'default_value' => 'Investor Relations',
        ],
        [
            'key'   => 'field_inv_title',
            'label' => 'Title (HTML allowed)',
            'name'  => 'inv_title',
            'type'  => 'textarea',
            'rows'  => 2,
        ],
        [
            'key'   => 'field_inv_desc',
            'label' => 'Description',
            'name'  => 'inv_desc',
            'type'  => 'textarea',
            'rows'  => 3,
        ],
        [
            'key'   => 'field_inv_stock_label',
            'label' => 'Stock Ticker Label',
            'name'  => 'inv_stock_label',
            'type'  => 'text',
            'default_value' => 'NSE: UMANGBOARD',
        ],
    ],
] );

/* ─── CTA SECTION ─── */
acf_add_local_field_group( [
    'key'      => 'group_cta',
    'title'    => 'Bottom CTA Section',
    'location' => [ [ [ 'param' => 'page_type', 'operator' => '==', 'value' => 'front_page' ] ] ],
    'menu_order' => 7,
    'fields'   => [
        [
            'key'   => 'field_cta_title',
            'label' => 'CTA Title (HTML allowed)',
            'name'  => 'cta_title',
            'type'  => 'textarea',
            'rows'  => 2,
        ],
        [
            'key'   => 'field_cta_desc',
            'label' => 'CTA Description',
            'name'  => 'cta_desc',
            'type'  => 'textarea',
            'rows'  => 3,
        ],
        [
            'key'   => 'field_cta_btn1_text',
            'label' => 'Button 1 Text',
            'name'  => 'cta_btn1_text',
            'type'  => 'text',
            'default_value' => 'Get a Quote',
        ],
        [
            'key'   => 'field_cta_btn1_url',
            'label' => 'Button 1 URL',
            'name'  => 'cta_btn1_url',
            'type'  => 'url',
        ],
        [
            'key'   => 'field_cta_btn2_text',
            'label' => 'Button 2 Text',
            'name'  => 'cta_btn2_text',
            'type'  => 'text',
            'default_value' => 'Download Catalogue',
        ],
        [
            'key'   => 'field_cta_btn2_url',
            'label' => 'Button 2 URL',
            'name'  => 'cta_btn2_url',
            'type'  => 'url',
        ],
        [
            'key'   => 'field_cta_video',
            'label' => 'Background Video',
            'name'  => 'cta_video_mp4',
            'type'  => 'file',
            'return_format' => 'url',
            'mime_types'    => 'mp4,webm',
        ],
    ],
] );

/* ─── FOOTER / CONTACT INFO ─── */
acf_add_local_field_group( [
    'key'      => 'group_site_info',
    'title'    => 'Site-Wide Contact & Footer Info',
    'location' => [ [ [ 'param' => 'options_page', 'operator' => '==', 'value' => 'ubl-site-settings' ] ] ],
    'menu_order' => 0,
    'fields'   => [
        [
            'key'   => 'field_company_address',
            'label' => 'Address',
            'name'  => 'company_address',
            'type'  => 'textarea',
            'rows'  => 2,
            'default_value' => '"Umang House", D-40/A, RIICO Industrial Area, Mansarovar, Jaipur — 302020, India',
        ],
        [
            'key'   => 'field_company_phone',
            'label' => 'Phone',
            'name'  => 'company_phone',
            'type'  => 'text',
            'default_value' => '+91 141 239 5845',
        ],
        [
            'key'   => 'field_company_email',
            'label' => 'General Email',
            'name'  => 'company_email',
            'type'  => 'email',
            'default_value' => 'info@umangboards.com',
        ],
        [
            'key'   => 'field_company_sales_email',
            'label' => 'Sales Email',
            'name'  => 'company_sales_email',
            'type'  => 'email',
            'default_value' => 'sales@umangboards.com',
        ],
        [
            'key'   => 'field_company_whatsapp',
            'label' => 'WhatsApp Number (with country code, no +)',
            'name'  => 'company_whatsapp',
            'type'  => 'text',
            'default_value' => '911412395845',
        ],
        [
            'key'   => 'field_social_linkedin',
            'label' => 'LinkedIn URL',
            'name'  => 'social_linkedin',
            'type'  => 'url',
        ],
        [
            'key'   => 'field_social_twitter',
            'label' => 'X / Twitter URL',
            'name'  => 'social_twitter',
            'type'  => 'url',
        ],
        [
            'key'   => 'field_social_youtube',
            'label' => 'YouTube URL',
            'name'  => 'social_youtube',
            'type'  => 'url',
        ],
        [
            'key'   => 'field_social_instagram',
            'label' => 'Instagram URL',
            'name'  => 'social_instagram',
            'type'  => 'url',
        ],
        [
            'key'   => 'field_footer_cin',
            'label' => 'CIN Number',
            'name'  => 'footer_cin',
            'type'  => 'text',
            'default_value' => 'L29199RJ1999PLC015490',
        ],
        [
            'key'           => 'field_color_mode',
            'label'         => 'Color Mode',
            'name'          => 'color_mode',
            'type'          => 'select',
            'instructions'  => 'Navy = dark corporate (#0B1F3A). Blue = lighter brand blue (#376eb4). Changes all dark sections, buttons, and accents site-wide.',
            'choices'       => [
                'navy' => 'Navy (Default)',
                'blue' => 'Blue (Logo Blue)',
            ],
            'default_value' => 'navy',
        ],
    ],
] );
