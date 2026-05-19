<?php
/**
 * Investor Document Pages — Custom Admin Editor
 * No ACF dependency. Provides a clean admin UI for managing:
 * - Page subtitle
 * - Document tabs with PDF uploads
 * - Compliance disclosure table
 * - Board committee accordions
 * - Contact cards
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* ─── Register Meta Box ─── */
add_action( 'add_meta_boxes', function () {
    add_meta_box(
        'ubl_investor_docs',
        'Investor Page Settings',
        'ubl_investor_docs_render',
        'page',
        'normal',
        'high'
    );
} );

/* ─── Only show on Investor Documents template ─── */
add_action( 'admin_enqueue_scripts', function ( $hook ) {
    if ( $hook !== 'post.php' && $hook !== 'post-new.php' ) return;
    global $post;
    if ( ! $post || get_page_template_slug( $post->ID ) !== 'page-investor-documents.php' ) return;

    wp_enqueue_media();
    wp_enqueue_style( 'ubl-investor-admin', false );
    wp_add_inline_style( 'ubl-investor-admin', '
        .ubl-ivd-box { background: #fff; border: 1px solid #ccd0d4; padding: 20px; margin-bottom: 20px; }
        .ubl-ivd-box h3 { margin: 0 0 15px; padding: 0 0 10px; border-bottom: 1px solid #e2e4e7; font-size: 14px; }
        .ubl-ivd-field { margin-bottom: 15px; }
        .ubl-ivd-field label { display: block; font-weight: 600; margin-bottom: 5px; font-size: 13px; }
        .ubl-ivd-field textarea { width: 100%; font-family: monospace; font-size: 12px; }
        .ubl-ivd-field input[type=text] { width: 100%; }
        .ubl-ivd-help { color: #666; font-size: 12px; margin-top: 4px; }
        .ubl-ivd-tabs-wrap { border: 1px solid #e2e4e7; margin-top: 10px; }
        .ubl-ivd-tab-bar { display: flex; background: #f1f1f1; border-bottom: 1px solid #e2e4e7; flex-wrap: wrap; }
        .ubl-ivd-tab-btn { padding: 8px 16px; cursor: pointer; border: none; background: none; font-size: 13px; font-weight: 600; border-bottom: 2px solid transparent; }
        .ubl-ivd-tab-btn.active { background: #fff; border-bottom-color: #2271b1; color: #2271b1; }
        .ubl-ivd-tab-btn:hover { background: #e9e9e9; }
        .ubl-ivd-tab-panel { display: none; padding: 15px; }
        .ubl-ivd-tab-panel.active { display: block; }
        .ubl-ivd-doc-row { display: flex; gap: 8px; align-items: center; margin-bottom: 6px; padding: 6px; background: #f9f9f9; border: 1px solid #e2e4e7; flex-wrap: wrap; }
        .ubl-ivd-doc-row input { font-size: 12px; }
        .ubl-ivd-doc-row .doc-title { flex: 2; min-width: 200px; }
        .ubl-ivd-doc-row .doc-file { flex: 2; min-width: 200px; }
        .ubl-ivd-doc-row .doc-year { width: 90px; }
        .ubl-ivd-doc-row .doc-quarter { width: 60px; }
        .ubl-ivd-doc-row .doc-date { width: 110px; }
        .ubl-ivd-doc-row .doc-remove { color: #b32d2e; cursor: pointer; background: none; border: none; font-size: 16px; padding: 4px 8px; }
        .ubl-ivd-doc-row .doc-upload { cursor: pointer; background: #2271b1; color: #fff; border: none; padding: 4px 10px; font-size: 11px; border-radius: 3px; }
        .ubl-ivd-add-btn { margin-top: 8px; padding: 6px 14px; font-size: 12px; cursor: pointer; }
        .ubl-ivd-add-tab-btn { margin: 8px 4px; padding: 6px 14px; font-size: 12px; cursor: pointer; }
        .ubl-ivd-compliance-row { display: flex; gap: 8px; margin-bottom: 4px; align-items: center; flex-wrap: wrap; }
        .ubl-ivd-compliance-row input { font-size: 12px; }
        .ubl-ivd-compliance-row .ct-particular { flex: 2; min-width: 200px; }
        .ubl-ivd-compliance-row .ct-link-text { flex: 1; min-width: 100px; }
        .ubl-ivd-compliance-row .ct-link-url { flex: 2; min-width: 200px; }
        .ubl-ivd-committee { border: 1px solid #e2e4e7; margin-bottom: 10px; }
        .ubl-ivd-committee-header { display: flex; justify-content: space-between; align-items: center; padding: 8px 12px; background: #f1f1f1; cursor: pointer; }
        .ubl-ivd-committee-body { padding: 12px; }
        .ubl-ivd-member-row { display: flex; gap: 8px; margin-bottom: 4px; align-items: center; flex-wrap: wrap; }
        .ubl-ivd-member-row input, .ubl-ivd-member-row select { font-size: 12px; }
        .ubl-ivd-contact-card { border: 1px solid #e2e4e7; padding: 12px; margin-bottom: 10px; background: #f9f9f9; }
        .ubl-ivd-contact-card input { font-size: 12px; width: 100%; margin-bottom: 6px; }
        .ubl-ivd-section-toggle { cursor: pointer; user-select: none; }
        .ubl-ivd-section-toggle .dashicons { vertical-align: middle; }
    ' );
} );

/* ─── Render Meta Box ─── */
function ubl_investor_docs_render( $post ) {
    if ( get_page_template_slug( $post->ID ) !== 'page-investor-documents.php' ) {
        echo '<p style="color:#666;">This meta box only appears on pages using the <strong>Investor Documents</strong> template.</p>';
        return;
    }

    wp_nonce_field( 'ubl_invdoc_save', 'ubl_invdoc_nonce' );

    $subtitle   = get_post_meta( $post->ID, 'invdoc_subtitle', true );
    $tabs_json  = get_post_meta( $post->ID, 'invdoc_tabs_json', true ) ?: '[]';
    $ct_json    = get_post_meta( $post->ID, 'invdoc_compliance_json', true ) ?: '[]';
    $comm_json  = get_post_meta( $post->ID, 'invdoc_committees_json', true ) ?: '[]';
    $cont_json  = get_post_meta( $post->ID, 'invdoc_contacts_json', true ) ?: '[]';

    ?>
    <!-- Subtitle -->
    <div class="ubl-ivd-box">
        <h3>Hero Section</h3>
        <div class="ubl-ivd-field">
            <label>Page Subtitle</label>
            <textarea name="invdoc_subtitle" rows="2"><?php echo esc_textarea( $subtitle ); ?></textarea>
            <p class="ubl-ivd-help">Short description shown below the title in the hero area.</p>
        </div>
    </div>

    <!-- Document Tabs -->
    <div class="ubl-ivd-box">
        <h3>Document Tabs &amp; Files</h3>
        <p class="ubl-ivd-help">Organize documents into tabs. Each tab contains downloadable PDFs with year/quarter metadata for filtering.</p>
        <div id="ivdTabsEditor">
            <div class="ubl-ivd-tabs-wrap">
                <div class="ubl-ivd-tab-bar" id="ivdTabBar"></div>
                <div id="ivdTabPanels"></div>
            </div>
            <button type="button" class="button ubl-ivd-add-tab-btn" id="ivdAddTab">+ Add Tab</button>
        </div>
        <input type="hidden" name="invdoc_tabs_json" id="ivdTabsJson" value="<?php echo esc_attr( $tabs_json ); ?>">
    </div>

    <!-- Compliance Table -->
    <div class="ubl-ivd-box">
        <h3 class="ubl-ivd-section-toggle" onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'">
            Compliance / Disclosure Table <span class="dashicons dashicons-arrow-down-alt2"></span>
        </h3>
        <div id="ivdComplianceEditor">
            <p class="ubl-ivd-help">For SEBI Regulation 46 disclosure tables. Leave empty if not needed for this page.</p>
            <div id="ivdComplianceRows"></div>
            <button type="button" class="button ubl-ivd-add-btn" id="ivdAddCompliance">+ Add Row</button>
        </div>
        <input type="hidden" name="invdoc_compliance_json" id="ivdComplianceJson" value="<?php echo esc_attr( $ct_json ); ?>">
    </div>

    <!-- Committees -->
    <div class="ubl-ivd-box">
        <h3 class="ubl-ivd-section-toggle" onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'">
            Board Committees <span class="dashicons dashicons-arrow-down-alt2"></span>
        </h3>
        <div id="ivdCommitteesEditor">
            <p class="ubl-ivd-help">Expandable accordion sections showing committee compositions. Leave empty if not needed.</p>
            <div id="ivdCommitteeRows"></div>
            <button type="button" class="button ubl-ivd-add-btn" id="ivdAddCommittee">+ Add Committee</button>
        </div>
        <input type="hidden" name="invdoc_committees_json" id="ivdCommitteesJson" value="<?php echo esc_attr( $comm_json ); ?>">
    </div>

    <!-- Contacts -->
    <div class="ubl-ivd-box">
        <h3 class="ubl-ivd-section-toggle" onclick="this.nextElementSibling.style.display=this.nextElementSibling.style.display==='none'?'block':'none'">
            Contact Cards <span class="dashicons dashicons-arrow-down-alt2"></span>
        </h3>
        <div id="ivdContactsEditor">
            <p class="ubl-ivd-help">Contact information cards shown at the bottom. Leave empty if not needed.</p>
            <div id="ivdContactRows"></div>
            <button type="button" class="button ubl-ivd-add-btn" id="ivdAddContact">+ Add Contact</button>
        </div>
        <input type="hidden" name="invdoc_contacts_json" id="ivdContactsJson" value="<?php echo esc_attr( $cont_json ); ?>">
    </div>

    <script>
    jQuery(document).ready(function($) {
        /* ═══════════════════════════════
           DOCUMENT TABS EDITOR
           ═══════════════════════════════ */
        var tabsData = [];
        try { tabsData = JSON.parse($('#ivdTabsJson').val()); } catch(e) { tabsData = []; }
        if (!Array.isArray(tabsData) || tabsData.length === 0) tabsData = [{title:'Documents', documents:[]}];

        var activeTabIdx = 0;

        function renderTabs() {
            var bar = $('#ivdTabBar').empty();
            var panels = $('#ivdTabPanels').empty();

            tabsData.forEach(function(tab, ti) {
                // Tab button
                var btn = $('<button type="button" class="ubl-ivd-tab-btn'+(ti===activeTabIdx?' active':'')+'" data-ti="'+ti+'">'+
                    '<input type="text" value="'+escH(tab.title)+'" style="border:none;background:transparent;font-weight:600;width:120px;font-size:13px;" class="tab-title-input" data-ti="'+ti+'">' +
                    (tabsData.length > 1 ? ' <span class="tab-remove" data-ti="'+ti+'" style="color:#b32d2e;cursor:pointer;font-size:16px;">&times;</span>' : '') +
                    '</button>');
                bar.append(btn);

                // Panel
                var panel = $('<div class="ubl-ivd-tab-panel'+(ti===activeTabIdx?' active':'')+'" data-ti="'+ti+'"></div>');

                // Header row
                panel.append('<div style="display:flex;gap:8px;margin-bottom:8px;font-size:11px;font-weight:600;color:#666;flex-wrap:wrap;">' +
                    '<span style="flex:2;min-width:200px;">Document Title</span>' +
                    '<span style="flex:2;min-width:200px;">File URL / Upload</span>' +
                    '<span style="width:90px;">FY Year</span>' +
                    '<span style="width:60px;">Qtr</span>' +
                    '<span style="width:110px;">Date</span>' +
                    '<span style="width:30px;"></span></div>');

                // Documents
                (tab.documents || []).forEach(function(doc, di) {
                    panel.append(renderDocRow(ti, di, doc));
                });

                panel.append('<button type="button" class="button ubl-ivd-add-btn add-doc-btn" data-ti="'+ti+'">+ Add Document</button>');
                panels.append(panel);
            });

            syncTabsJson();
        }

        function renderDocRow(ti, di, doc) {
            return '<div class="ubl-ivd-doc-row" data-ti="'+ti+'" data-di="'+di+'">' +
                '<input type="text" class="doc-title" placeholder="Document title" value="'+escH(doc.title || '')+'">' +
                '<input type="text" class="doc-file" placeholder="PDF URL or upload" value="'+escH(doc.file || doc.url || '')+'">' +
                '<button type="button" class="doc-upload">Upload</button>' +
                '<input type="text" class="doc-year" placeholder="2024-25" value="'+escH(doc.year || '')+'">' +
                '<input type="text" class="doc-quarter" placeholder="Q1" value="'+escH(doc.quarter || '')+'">' +
                '<input type="date" class="doc-date" value="'+escH(doc.date || '')+'">' +
                '<button type="button" class="doc-remove">&times;</button>' +
                '</div>';
        }

        function syncTabsJson() {
            // Read from DOM
            tabsData.forEach(function(tab, ti) {
                tab.title = $('.tab-title-input[data-ti='+ti+']').val() || tab.title;
                tab.documents = [];
                $('.ubl-ivd-doc-row[data-ti='+ti+']').each(function() {
                    tab.documents.push({
                        title: $(this).find('.doc-title').val(),
                        file: $(this).find('.doc-file').val(),
                        year: $(this).find('.doc-year').val(),
                        quarter: $(this).find('.doc-quarter').val(),
                        date: $(this).find('.doc-date').val()
                    });
                });
            });
            $('#ivdTabsJson').val(JSON.stringify(tabsData));
        }

        // Tab click
        $(document).on('click', '.ubl-ivd-tab-btn', function(e) {
            if ($(e.target).hasClass('tab-title-input') || $(e.target).hasClass('tab-remove')) return;
            syncTabsJson();
            activeTabIdx = parseInt($(this).data('ti'));
            renderTabs();
        });

        // Tab title change
        $(document).on('input', '.tab-title-input', function() {
            var ti = $(this).data('ti');
            tabsData[ti].title = $(this).val();
            syncTabsJson();
        });

        // Remove tab
        $(document).on('click', '.tab-remove', function() {
            syncTabsJson();
            var ti = parseInt($(this).data('ti'));
            tabsData.splice(ti, 1);
            if (activeTabIdx >= tabsData.length) activeTabIdx = tabsData.length - 1;
            renderTabs();
        });

        // Add tab
        $('#ivdAddTab').on('click', function() {
            syncTabsJson();
            tabsData.push({title: 'New Tab', documents: []});
            activeTabIdx = tabsData.length - 1;
            renderTabs();
        });

        // Add document
        $(document).on('click', '.add-doc-btn', function() {
            syncTabsJson();
            var ti = parseInt($(this).data('ti'));
            tabsData[ti].documents.push({title:'', file:'', year:'', quarter:'', date:''});
            renderTabs();
        });

        // Remove document
        $(document).on('click', '.doc-remove', function() {
            syncTabsJson();
            var ti = parseInt($(this).closest('.ubl-ivd-doc-row').data('ti'));
            var di = parseInt($(this).closest('.ubl-ivd-doc-row').data('di'));
            tabsData[ti].documents.splice(di, 1);
            renderTabs();
        });

        // Upload PDF
        $(document).on('click', '.doc-upload', function() {
            var row = $(this).closest('.ubl-ivd-doc-row');
            var fileInput = row.find('.doc-file');
            var frame = wp.media({ title: 'Select PDF', library: { type: 'application/pdf' }, multiple: false });
            frame.on('select', function() {
                var url = frame.state().get('selection').first().toJSON().url;
                fileInput.val(url);
                syncTabsJson();
            });
            frame.open();
        });

        // Sync on any input change
        $(document).on('input change', '.ubl-ivd-doc-row input', function() { syncTabsJson(); });

        renderTabs();

        /* ═══════════════════════════════
           COMPLIANCE TABLE EDITOR
           ═══════════════════════════════ */
        var ctData = [];
        try { ctData = JSON.parse($('#ivdComplianceJson').val()); } catch(e) { ctData = []; }

        function renderCompliance() {
            var wrap = $('#ivdComplianceRows').empty();
            ctData.forEach(function(row, i) {
                wrap.append('<div class="ubl-ivd-compliance-row" data-ci="'+i+'">' +
                    '<input type="text" class="ct-particular" placeholder="Particular" value="'+escH(row.particular || '')+'">' +
                    '<input type="text" class="ct-link-text" placeholder="Link text" value="'+escH(row.link_text || '')+'">' +
                    '<input type="text" class="ct-link-url" placeholder="URL" value="'+escH(row.link_url || '')+'">' +
                    '<button type="button" class="doc-remove" data-ci="'+i+'">&times;</button></div>');
            });
            syncComplianceJson();
        }

        function syncComplianceJson() {
            ctData = [];
            $('.ubl-ivd-compliance-row').each(function() {
                ctData.push({
                    particular: $(this).find('.ct-particular').val(),
                    link_text: $(this).find('.ct-link-text').val(),
                    link_url: $(this).find('.ct-link-url').val()
                });
            });
            $('#ivdComplianceJson').val(JSON.stringify(ctData));
        }

        $('#ivdAddCompliance').on('click', function() {
            ctData.push({particular:'', link_text:'', link_url:''});
            renderCompliance();
        });
        $(document).on('click', '#ivdComplianceEditor .doc-remove', function() {
            ctData.splice(parseInt($(this).data('ci')), 1);
            renderCompliance();
        });
        $(document).on('input', '.ubl-ivd-compliance-row input', syncComplianceJson);
        renderCompliance();

        /* ═══════════════════════════════
           COMMITTEES EDITOR
           ═══════════════════════════════ */
        var commData = [];
        try { commData = JSON.parse($('#ivdCommitteesJson').val()); } catch(e) { commData = []; }

        function renderCommittees() {
            var wrap = $('#ivdCommitteeRows').empty();
            commData.forEach(function(comm, ci) {
                var div = $('<div class="ubl-ivd-committee" data-ci="'+ci+'">');
                div.append('<div class="ubl-ivd-committee-header">' +
                    '<input type="text" class="comm-name" placeholder="Committee Name" value="'+escH(comm.name || '')+'" style="font-weight:600;border:none;background:transparent;flex:1;">' +
                    '<button type="button" class="doc-remove" data-ci="'+ci+'" style="margin-left:auto;">&times;</button></div>');
                var body = $('<div class="ubl-ivd-committee-body">');
                (comm.members || []).forEach(function(m, mi) {
                    body.append('<div class="ubl-ivd-member-row" data-ci="'+ci+'" data-mi="'+mi+'">' +
                        '<input type="text" placeholder="Name" value="'+escH(m.name || '')+'" style="flex:2;">' +
                        '<select style="width:100px;"><option value="Chairman"'+(m.role==='Chairman'?' selected':'')+'>Chairman</option><option value="Member"'+(m.role==='Member'?' selected':'')+'>Member</option></select>' +
                        '<input type="text" placeholder="Designation" value="'+escH(m.designation || '')+'" style="flex:2;">' +
                        '<button type="button" class="doc-remove member-remove" data-ci="'+ci+'" data-mi="'+mi+'">&times;</button></div>');
                });
                body.append('<button type="button" class="button add-member-btn" data-ci="'+ci+'" style="margin-top:6px;font-size:11px;">+ Add Member</button>');
                div.append(body);
                wrap.append(div);
            });
            syncCommitteesJson();
        }

        function syncCommitteesJson() {
            commData = [];
            $('.ubl-ivd-committee').each(function() {
                var members = [];
                $(this).find('.ubl-ivd-member-row').each(function() {
                    var inputs = $(this).find('input, select');
                    members.push({ name: inputs.eq(0).val(), role: inputs.eq(1).val(), designation: inputs.eq(2).val() });
                });
                commData.push({ name: $(this).find('.comm-name').val(), members: members });
            });
            $('#ivdCommitteesJson').val(JSON.stringify(commData));
        }

        $('#ivdAddCommittee').on('click', function() {
            commData.push({name:'', members:[{name:'', role:'Chairman', designation:''}]});
            renderCommittees();
        });
        $(document).on('click', '#ivdCommitteesEditor > .ubl-ivd-committee .ubl-ivd-committee-header .doc-remove', function(e) {
            e.stopPropagation();
            commData.splice(parseInt($(this).data('ci')), 1);
            renderCommittees();
        });
        $(document).on('click', '.add-member-btn', function() {
            var ci = parseInt($(this).data('ci'));
            commData[ci].members.push({name:'', role:'Member', designation:''});
            renderCommittees();
        });
        $(document).on('click', '.member-remove', function(e) {
            e.stopPropagation();
            syncCommitteesJson();
            var ci = parseInt($(this).data('ci'));
            var mi = parseInt($(this).data('mi'));
            commData[ci].members.splice(mi, 1);
            renderCommittees();
        });
        $(document).on('input change', '#ivdCommitteesEditor input, #ivdCommitteesEditor select', syncCommitteesJson);
        renderCommittees();

        /* ═══════════════════════════════
           CONTACTS EDITOR
           ═══════════════════════════════ */
        var contData = [];
        try { contData = JSON.parse($('#ivdContactsJson').val()); } catch(e) { contData = []; }

        function renderContacts() {
            var wrap = $('#ivdContactRows').empty();
            contData.forEach(function(c, i) {
                wrap.append('<div class="ubl-ivd-contact-card" data-coni="'+i+'">' +
                    '<input type="text" class="con-title" placeholder="Title/Role" value="'+escH(c.title || '')+'">' +
                    '<input type="text" class="con-name" placeholder="Name" value="'+escH(c.name || '')+'">' +
                    '<input type="email" class="con-email" placeholder="Email" value="'+escH(c.email || '')+'">' +
                    '<input type="text" class="con-phone" placeholder="Phone" value="'+escH(c.phone || '')+'">' +
                    '<input type="text" class="con-address" placeholder="Address" value="'+escH(c.address || '')+'">' +
                    '<button type="button" class="doc-remove" data-coni="'+i+'" style="margin-top:4px;">Remove</button></div>');
            });
            syncContactsJson();
        }

        function syncContactsJson() {
            contData = [];
            $('.ubl-ivd-contact-card').each(function() {
                contData.push({
                    title: $(this).find('.con-title').val(),
                    name: $(this).find('.con-name').val(),
                    email: $(this).find('.con-email').val(),
                    phone: $(this).find('.con-phone').val(),
                    address: $(this).find('.con-address').val()
                });
            });
            $('#ivdContactsJson').val(JSON.stringify(contData));
        }

        $('#ivdAddContact').on('click', function() {
            contData.push({title:'', name:'', email:'', phone:'', address:''});
            renderContacts();
        });
        $(document).on('click', '#ivdContactsEditor .doc-remove', function() {
            contData.splice(parseInt($(this).data('coni')), 1);
            renderContacts();
        });
        $(document).on('input', '#ivdContactsEditor input', syncContactsJson);
        renderContacts();

        /* Helper */
        function escH(s) { return $('<div>').text(s).html(); }

        // Sync all before form submit
        $('form#post').on('submit', function() {
            syncTabsJson();
            syncComplianceJson();
            syncCommitteesJson();
            syncContactsJson();
        });
    });
    </script>
    <?php
}

/* ─── Save Meta Box Data ─── */
add_action( 'save_post_page', function ( $post_id ) {
    if ( ! isset( $_POST['ubl_invdoc_nonce'] ) || ! wp_verify_nonce( $_POST['ubl_invdoc_nonce'], 'ubl_invdoc_save' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    $fields = [ 'invdoc_subtitle', 'invdoc_tabs_json', 'invdoc_compliance_json', 'invdoc_committees_json', 'invdoc_contacts_json' ];

    foreach ( $fields as $f ) {
        if ( isset( $_POST[ $f ] ) ) {
            update_post_meta( $post_id, $f, wp_unslash( $_POST[ $f ] ) );
        }
    }
}, 10, 1 );
