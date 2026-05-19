<?php
/**
 * ACF Field Groups — Investor Document Pages
 * Uses ACF Free (no repeater). Structured data stored as JSON in textarea fields.
 * Admin can edit JSON directly, or we provide a helper admin UI later.
 */

if ( ! defined( 'ABSPATH' ) ) exit;
if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

acf_add_local_field_group( [
    'key'      => 'group_investor_docs',
    'title'    => 'Investor Document Page Settings',
    'location' => [ [
        [
            'param'    => 'page_template',
            'operator' => '==',
            'value'    => 'page-investor-documents.php',
        ],
    ] ],
    'menu_order' => 0,
    'style'      => 'default',
    'fields'     => [

        [
            'key'   => 'field_invdoc_subtitle',
            'label' => 'Page Subtitle',
            'name'  => 'invdoc_subtitle',
            'type'  => 'textarea',
            'rows'  => 2,
            'instructions' => 'Short description shown below the page title in the hero.',
        ],

        [
            'key'   => 'field_invdoc_tabs_json',
            'label' => 'Document Tabs (JSON)',
            'name'  => 'invdoc_tabs_json',
            'type'  => 'textarea',
            'rows'  => 15,
            'instructions' => 'JSON array of tabs. Each tab: {"title":"Tab Name","documents":[{"title":"Doc","file":"url","year":"2024-25","quarter":"Q1","date":"2025-01-15"}]}. Documents can have "url" instead of "file" for external links.',
            'default_value' => '[]',
        ],

        [
            'key'   => 'field_invdoc_compliance_json',
            'label' => 'Compliance Table (JSON)',
            'name'  => 'invdoc_compliance_json',
            'type'  => 'textarea',
            'rows'  => 10,
            'instructions' => 'JSON array for SEBI Reg 46 table. Each row: {"particular":"...","link_text":"View","link_url":"/page/"}. Leave empty [] if not needed.',
            'default_value' => '[]',
        ],

        [
            'key'   => 'field_invdoc_committees_json',
            'label' => 'Board Committees (JSON)',
            'name'  => 'invdoc_committees_json',
            'type'  => 'textarea',
            'rows'  => 10,
            'instructions' => 'JSON array. Each: {"name":"Audit Committee","members":[{"name":"Mr. X","role":"Chairman","designation":"Independent Director"}]}. Leave empty [] if not needed.',
            'default_value' => '[]',
        ],

        [
            'key'   => 'field_invdoc_contacts_json',
            'label' => 'Contact Cards (JSON)',
            'name'  => 'invdoc_contacts_json',
            'type'  => 'textarea',
            'rows'  => 8,
            'instructions' => 'JSON array. Each: {"title":"Company Secretary","name":"Mr. X","email":"x@y.com","phone":"+91-xxx","address":"..."}. Leave empty [] if not needed.',
            'default_value' => '[]',
        ],
    ],
] );
