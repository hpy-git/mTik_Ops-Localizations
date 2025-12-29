<?php
////////////////////////////////////////////////////////////////////////
// Tagalog translations for mTik_Ops                           
// Version: Next-Generation
// Translator: Kiesia Joy Aynaga                                           
////////////////////////////////////////////////////////////////////////
return [
    // Start of Translations
    // Global
    'language-changed' => 'Nagbago ang wika sa {lang}',
    'language-search-placeholder' => 'Maghanap...',

    // Global Search
    'search.title' => 'Paghahanap',
    'search.instructions' => 'I-type ang keyword o parirala para maghanap sa site.',
    'search.results_header' => 'Mga Resulta ng Paghahanap para sa "{query}"',
    'search.placeholder' => 'Mag-type upang maghanap...',
    'search.no_results' => 'Walang nahanap',
    'search.results' => 'Mga Resulta',
    'search.button' => 'Hanapin',
    'search.hint' => 'Mag-type para makita ang mga instant na mungkahi.',
    'search.quick_links' => 'Mabilis na Link',
    'search.show' => 'Ipakita ang Paghahanap',

    
    // Site title and tagline
    'site.title' => 'mTik_Ops', // DO NOT TRANSLATE
    'site.tagline' => 'Sentralisadong Pamamahala ng Router',

    // Authentication
    'nav.login' => 'Mag-login',
    'nav.logout' => 'Mag-logout',
    'auth.logging_in' => 'Nagla-log in',
    'auth.logging_out' => 'Nagla-log out',

    // nav-brand.php
    'nav.brand.user_greeting'=> 'Kumusta!',

    // nav.php
    'lang.label'=> 'Wika',
    'nav.about' => 'Tungkol',
    'nav.features' => 'Mga Tampok',
    'nav.our_team' => 'Aming Koponan',
    'nav.contact' => 'Makipag-ugnayan',
    'nav.menu' => 'Menu',
    'nav.dashboard' => 'Dashboard',
    'nav.hotspot' => 'Hotspot',
    'nav.ip' => 'IP',
    'nav.ppp' => 'PPP',
    'nav.queues' => 'Mga Pila',
    'nav.settings' => 'Mga Setting',
    'nav.downloads' => 'Mga Download',

    // index.php
    // Index Page - About Section
    'about.title' => 'Gawa para sa MikroTik',
    'about.desc' => 'Ang mTikOps ay isang browser-based na plataporma para pamahalaan ang mga MikroTik router at hotspot. Kasama rito ang remote access, pamamahala ng hotspot — pag-print, PPPoE, at iba pa. Lahat sa isang mabilis na sistema.',
    'about.about_us_button' => 'Tungkol sa Amin',
    'about.our_team_button' => 'Aming Koponan',

    // Index Page - Features Section
    'features.remote.title' => 'Malayuang Pamamahala ng Network',
    'features.remote.desc' => 'Subaybayan at pamahalaan ang mga remote na router, tingnan ang katayuan ng interface, mag-reboot, at i-deploy ang mga pagbabago sa configuration nang ligtas mula sa isang console.',
    'features.hotspot.title' => 'Pamamahala ng Hotspot',
    'features.hotspot.desc' => 'Lumikha at pamahalaan ang mga server ng hotspot at profile ng user, mag-isyu ng mga voucher, subaybayan ang aktibong mga user at session, at gumawa ng accounting at reporting.',
    'features.troubleshoot.title' => 'Pag-troubleshoot at Pag-configure',
    'features.troubleshoot.desc' => 'I-deploy at i-audit ang mga pagbabago sa configuration, magpatakbo ng diagnostics, tingnan ang mga log, at ayusin ang mga isyu sa konektividad gamit ang mga integrated na tool.',

    // Index Page - Signup Section
    'signup.title' => 'Magsimula sa mTikOps',
    'signup.desc' => 'Gumawa ng account para pamahalaan ang mga router, hotspot at magpatakbo ng diagnostics mula sa isang dashboard.',
    'signup.cta' => 'Mag-sign Up',

    // Index Page - Contact Section
    'contact.hq' => 'Punong-tanggapan',
    'contact.email' => 'Email',
    'contact.contact' => 'Makipag-ugnayan',
    'contact.hq_address' => 'Taguig City, PH 1630',
    'contact.email_addr' => 'noc@mtikops.com',
    'contact.phone' => '+63 (962) 660-6116',

    // Index Page - Footer Section
    'footer.copyright' => 'Copyright &copy; mTikOps {year}',
    'footer.powered' => 'Powered by HPY™',
    'modal.confirm.title' => 'Kumpirmahin',
    'modal.confirm.body' => 'Sigurado ka ba?',
    'modal.confirm.cancel' => 'Kanselahin',
    'modal.confirm.ok' => 'Kumpirmahin',

    // Login Page
    'login.title' => 'Mag-login',
    'login.desc' => 'Mag-access sa iyong account ng mTik_Ops para pamahalaan ang MikroTik routers at hotspot mula sa isang sentralisadong dashboard.',
    'login.form.title' => 'Mag-login sa Iyong Account',
    'login.form.host'=> 'Host',
    'login.form.username'=> 'Username',
    'login.form.password'=> 'Password',
    'login.form.connection_type'=> 'Uri ng Koneksyon',
    'login.form.connection_type_yes'=> 'Secure API',
    'login.form.connection_type_no'=> 'Standard API',
    'login.form.port'=> 'Port',
    'login.form.remember'=> 'Tandaan Ako',
    'login.form.connect'=> 'Kumonekta',
    'login.form.cancel'=> 'Kanselahin',

    // Login Page Placeholders
    'login.form.host_placeholder'=> 'IP ng Router o Hostname',
    'login.form.username_placeholder'=> 'Ilagay ang iyong username',
    'login.form.password_placeholder'=> 'Ilagay ang iyong password',

 // Login Page Messages
     'login.error.invalid_submission'=> 'Hindi wastong pagsusumite ng form. Pakisubukang muli.',
     'login.error.missing_fields'=> 'Kinakailangan ang Host, Username at Password.',
     'login.error.unable_connect'=> 'Hindi makakonekta! — Suriin ang iyong mga kredensyal at subukang muli.',
     'login.success.connected'=> 'Matagumpay na nakakonekta sa router.',
     'login.success.remembered'=> 'Naalala ang detalye ng koneksyon para sa mga susunod na pag-login.',
     'login.info.session_expired'=> 'Nag-expire ang iyong session. Mangyaring mag-login muli.',
     'login.info.logged_out'=> 'Matagumpay kang naka-logout.',
     'login.info.please_login'=> 'Mangyaring mag-login upang magpatuloy.',
     'login.button.forgot_password'=> 'Nakalimutan ang Password?',
     'login.try_again'=> 'Subukang muli?',

    // Downloads Page
    'downloads.title' => 'Mga Download',
    'downloads.desc' => 'I-download ang mga installer at package para sa suportadong mga platform.',
    'downloads.available' => 'Mga Available na Download',
    'downloads.coming_soon' => 'Darating na',
    'downloads.download' => 'I-download',
    'downloads.note' => 'I-upload ang mga installer sa folder /downloads para maging available.',
    
    // about-us.php
    // About Us Page
    'about-us.title' => 'Tungkol sa Amin',
    'about-us.desc' => 'Alamin pa ang tungkol sa mTik_Ops, ang aming misyon, at ang koponang nasa likod ng plataporma.',
    'about-us.overview'=> 'Pangkalahatang-ideya',
    'about-us.vision'=> 'Pananaw',
    'about-us.features'=> 'Mga Tampok',
    'about-us.tutorials'=> 'Mga Gabay',
    'about-us.faqs'=> 'Mga Madalas na Tanong',
    'about-us.requirements'=> 'Mga Kinakailangan',

    // about-us.php
    // About Us Page Descriptions
    'about-us.overview.desc'=> 'Get a quick introduction to mTikOps and its core capabilities.',
    'about-us.vision.desc'=> 'Learn about our mission and long-term goals for the project.',
    'about-us.features.desc'=> 'See the main features available in mTikOps.',
    'about-us.tutorials.desc'=> 'Step-by-step guides and example workflows.',
    'about-us.faqs.desc'=> 'Common questions and answers about mTikOps.',
    'about-us.requirements.desc'=> 'Prerequisites and RouterOS requirements for running mTikOps.',

    // about-us.php
    // About Us Page Buttons
    'about-us.open.overview'=> 'Buksan ang Pangkalahatang-ideya',
    'about-us.open.vision'=> 'Buksan ang Pananaw',
    'about-us.open.features'=> 'Buksan ang Mga Tampok',
    'about-us.open.tutorials'=> 'Buksan ang Mga Gabay',
    'about-us.open.faqs'=> 'Buksan ang FAQ',
    'about-us.open.requirements'=> 'Buksan ang Mga Kinakailangan',

    // About Us - Back Button
    'about-us.back-to-about'=> 'Bumalik sa Tungkol sa Amin',

    // About Us - Overview Page
    'about-us.overview-page.title'=> 'Pangkalahatang-ideya',
    'about-us.overview-page.desc'=> 'Ang mTikOps ay isang magaan na web platform para pamahalaan ang MikroTik routers at serbisyo ng hotspot mula sa browser.',

    // About Us - Vision Page
    'about-us.vision-page.title'=> 'Pananaw',
    'about-us.vision-page.desc'=> 'Layunin naming pasimplehin ang operasyon ng network para sa mga gumagamit ng MikroTik gamit ang madaling-gamitin na interface at mga tool sa awtomasyon.',

    // About Us - Features Page
    'about-us.features-page.title'=> 'Features',
    'about-us.features-page.desc'=> 'Explore core features of mTikOps.',

    // About Us - Tutorials Page
    'about-us.tutorials-page.title'=> 'Tutorials',
    'about-us.tutorials-page.desc'=> 'Guides and how-tos for common tasks.',

    // About Us - FAQs Page
    'about-us.faqs-page.title'=> 'FAQs',
    'about-us.faqs-page.desc'=> 'Frequently asked questions and answers.',

    // About Us - Requirements Page
    'about-us.requirements-page.title'=> 'Prerequisites',
    'about-us.requirements-page.desc'=> 'Minimum requirements and compatibility notes.',

    // our-team.php
    // Our Team Page
    'our-team.title'=> 'Aming Koponan',
    'our-team.desc'=> 'Kilalanin ang mga taong nasa likod ng mTikOps — mga developer, kontribyutor at tagapagpanatili.',
    'our-team.leadership'=> 'Pamumuno',
    'our-team.developers'=> 'Mga Developer',
    'our-team.contributors'=> 'Mga Kontribyutor',
    'our-team.advisors'=> 'Mga Tagapayo',
    'our-team.careers'=> 'Sumali sa Amin',
    'our-team.contact'=> 'Makipag-ugnayan',

    // Our Team Page Descriptions
    'our-team.leadership.desc'=> 'Core maintainers and project leads driving mTikOps forward.',
    'our-team.developers.desc'=> 'Engineers and contributors building features and fixes.', 
    'our-team.contributors.desc'=> 'Community contributors who help with documentation, testing and code.',
    'our-team.advisors.desc'=> 'Advisors and subject-matter experts supporting the project.',
    'our-team.careers.desc'=> 'Open roles and ways to join the team.',
    'our-team.contact.desc'=> 'Get in touch with the team for questions or collaboration.',

    // Our Team Page Buttons
    'our-team.open.leadership'=> 'Tingnan ang Pamumuno',
    'our-team.open.developers'=> 'Tingnan ang Mga Developer',
    'our-team.open.contributors'=> 'Tingnan ang Mga Kontribyutor',
    'our-team.open.advisors'=> 'Tingnan ang Mga Tagapayo',
    'our-team.open.careers'=> 'Sumali sa Amin',
    'our-team.open.contact'=> 'Makipag-ugnayan sa Koponan',

    // Our Team - Back Button
    'our-team.back-to-team'=> 'Back to Our Team',

    // Our Team - Leadership Page
    'our-team.leadership-page.title'=> 'Leadership',
    'our-team.leadership-page.desc'=> 'Meet the core maintainers and project leads behind mTikOps.',

    // Our Team - Developers Page
    'our-team.developers-page.title'=> 'Developers',
    'our-team.developers-page.desc'=> 'Profiles and responsibilities of the developers contributing to mTikOps.',

    // Our Team - Contributors Page
    'our-team.contributors-page.title'=> 'Contributors',
    'our-team.contributors-page.desc'=> 'Recognizing community contributors and how to get involved.',

    // Our Team - Advisors Page
    'our-team.advisors-page.title'=> 'Advisors',
    'our-team.advisors-page.desc'=> 'Advisors and experts who provide guidance to the project.',

    // Our Team - Join Us Page
    'our-team.join-us-page.title'=> 'Join Us',
    'our-team.join-us-page.desc'=> 'Explore open roles and how to contribute to mTikOps.',  

    // Our Team - Contact Page
    'our-team.contact-page.title'=> 'Contact',
    'our-team.contact-page.desc'=> 'Ways to contact the mTikOps team for collaboration or support.',

    // Dashboard Page
    'dashboard.title'=> 'Dashboard',
    'dashboard.desc'=> 'Suite para sa Pagmo-monitor at Pag-log ng Operasyon ng Network',

    // Dashboard Buttons
    'dashboard.show'=> 'Ipakita ang Dashboard',
    'dashboard.button.refresh'=> 'I-refresh',
    'dashboard.button.prev'=> 'Nakaraan',
    'dashboard.button.next'=> 'Susunod',

    // Dashboard Network Monitoring
    'dashboard.monitoring.title'=> 'Pagmo-monitor ng Network',
    'dashboard.monitoring.desc'=> 'Real-time na pagmo-monitor ng performance ng network, uptime, at katayuan ng mga device sa iyong MikroTik infrastructure.',
    'dashboard.fullscreen'=> 'Buong Screen',
    'dashboard.loading'=> 'Naglo-load ng data...',
    'dashboard.not-monitoring'=> 'Hindi naka-monitor',

    // Dashboard System Logging
    'dashboard.logging.title'=> 'System Logging',
    'dashboard.logging.desc'=> 'Centralized logging and alerting for system events, errors',
    'dashboard.system.logs'=> 'System Logs',
    'dashboard.critical.logs'=> 'Critical Logs',

    // Dashboard Device Information
    'dashboard.device.info.title'=> 'Device Information',
    'dashboard.system.resources'=> 'System Resources',
    'dashboard.system.information'=> 'System Information',
    'dashboard.system.platform'=> 'RouterBOARD Information',

    // Device info JS strings
    'device.system_identity' => 'Pangalan ng Sistema',
    'device.routeros_version' => 'Bersyon ng RouterOS',
    'device.uptime' => 'Oras ng Pagtakbo',
    'device.board' => 'Board',
    'device.health' => 'Kalusugan',
    'device.temp_label' => 'Temp.:',
    'device.voltage_label' => 'Boltahe:',
    'device.unknown' => 'Hindi Kilala',
    'device.na' => 'n/a',
    'device.cpu' => 'CPU',
    'device.memory' => 'Memory',
    'device.disk' => 'Disk',
    'device.board_model' => 'Modelo ng Board',
    'device.serial' => 'Serial',
    'device.architecture' => 'Arkitektura',
    'device.cpu_label' => 'CPU',
    'device.cores' => 'cores',
    'device.build' => 'Build',
    'device.failed_load' => 'Nabigong kunin ang impormasyon ng sistema',
    // Generate users preview JS strings
    'generate.generating' => 'Gumagawa...',
    'generate.print_fetch_failed' => 'Nabigong kunin ang data para sa pag-print: %s',
    'generate.network_not_ok' => 'Hindi maayos ang tugon ng network: %s',
    'generate.generation_failed' => 'Nabigo ang pag-generate: %s',
    'generate.unknown_error' => 'Hindi kilalang error',
    'generate.preview_not_available' => 'Walang magagamit na paunang-tingin',
    'generate.failed_print_dialog' => 'Nabigo buksan ang native print dialog: %s',
    'generate.cached_cleared' => 'Na-clear ang naka-cache na batch',
    'generate.failed_clear_cached' => 'Nabigo i-clear ang naka-cache na batch',
    'generate.preview_failed' => 'Nabigo ang paunang-tingin',
    'generate.preview' => 'Paunang-tingin',
    'generate.unexpected_error' => 'Hindi inaasahang error: %s',
    'generate.generated' => 'Nagawa ang %s user',
    'generate.request_failed' => 'Nabigo ang request habang gumagawa ng mga voucher.',
    'generate.generate' => 'Gumawa',

    // Dashboard Hotspot Active Sessions
    'dashboard.hotspot.as.title'=> 'Aktibong Mga Session ng Hotspot',
    'dashboard.ppp.as.title'=> 'Aktibong PPPoE Session',
    // JS dashboard strings (used by client-side locale export)
    'dashboard.no_active_sessions' => 'Walang aktibong session',
    'dashboard.no_ppp_active_sessions' => 'Walang aktibong PPP session',
    'dashboard.active_session' => 'aktibong session',
    'dashboard.active_sessions' => 'mga aktibong session',
    'dashboard.name' => 'Pangalan',
    'dashboard.address' => 'Address',
    'dashboard.uptime' => 'Oras ng Pagtakbo',
    'dashboard.service' => 'Serbisyo',
    'dashboard.not_monitoring' => 'Hindi Naka-monitor',
    'dashboard.more_format' => '... at %d pa',
    'dashboard.unable_load_active' => 'Hindi mai-load ang mga aktibong session',
    'dashboard.unable_load_ppp' => 'Hindi mai-load ang mga aktibong PPP session',

    // hotspot.php
    // Hotspot Page
    'hotspot.title'=> 'Pamamahala ng Hotspot',
    'hotspot.desc'=> 'Pamahalaan ang mga user ng hotspot, mga profile ng user, aktibong session at mga host.',
    'hotspot.users'=> 'Mga User',
    'hotspot.profiles'=> 'Mga Profile',
    'hotspot.active'=> 'Aktibo',
    'hotspot.hosts'=> 'Mga Host',

    // Hotspot Page Descriptions
    'hotspot.users.desc'=> 'Lumikha, i-edit at pamahalaan ang indibidwal na mga account ng hotspot.',
    'hotspot.profiles.desc'=> 'Pamahalaan ang bandwidth, session at mga rate-limit na profile para sa mga user.',
    'hotspot.active.desc'=> 'Tingnan at i-disconnect ang kasalukuyang aktibong mga session ng hotspot.',
    'hotspot.hosts.desc'=> 'Suriin at pamahalaan ang mga device na nakakonekta sa hotspot.',

    // Hotspot Page Buttons
    'hotspot.open.users'=> 'Buksan ang Mga User',
    'hotspot.open.profiles'=> 'Buksan ang Mga Profile',
    'hotspot.open.active'=> 'Buksan ang Aktibo',
    'hotspot.open.hosts'=> 'Buksan ang Mga Host',

    // Hotspot - Back Button
    'hotspot.back-to-hotspot'=> 'Bumalik sa Pamamahala ng Hotspot',

    // Hotspot General Buttons
    'hotspot.action.button'=> 'Mga Aksyon',
    'hotspot.generate.button'=> 'Gumawa',
    'hotspot.add-user.button'=> 'Magdagdag ng User',
    'hotspot.enable.button'=> 'Paganahin',
    'hotspot.add-profile.button'=> 'Magdagdag ng Profile',
    'hotspot.edit.button'=> 'I-edit',
    'hotspot.remove.button'=> 'Alisin',
    'hotspot.disable.button'=> 'I-disable',
    'hotspot.export.users'=> 'I-export ang Mga User',
    'hotspot.export.button'=> 'Export',
    'hotspot.button.refresh'=> 'Refresh',
    'hotspot.button.prev'=> 'Prev',
    'hotspot.button.next'=> 'Next',
    'hotspot.sort.by'=> 'Sort by',
    'hotspot.sort.profiles'=> 'Sort by Profile',
    'hotspot.sort.comments'=> 'Sort by Comments',

    // Hotspot Table Headers
    'hotspot.table.th.select'=> 'Piliin Lahat',
    'hotspot.table.th.server'=> 'Pangalan ng Server',
    'hotspot.table.th.user'=> 'User',
    'hotspot.table.th.name'=> 'Pangalan',
    'hotspot.table.th.address'=> 'Address',
    'hotspot.table.th.mac'=> 'MAC Address',
    'hotspot.table.th.profile'=> 'Profile',
    'hotspot.table.th.uptime'=> 'Oras ng Pagtakbo',
    'hotspot.table.th.bytes-in'=> 'Bytes In',
    'hotspot.table.th.bytes-out'=> 'Bytes Out',
    'hotspot.table.th.comment'=> 'Komento',
    'hotspot.table.th.to-address'=> 'To Address',
    'hotspot.table.th.last-seen'=> 'Huling Nakita',
    'hotspot.status.loading'=> 'Naglo-load ng Mga User ng Hotspot...',

    // Hotspot JS: hosts, profiles, users, modals
    // Hosts list
    'hotspot.hosts.no_hosts' => 'Walang host',
    'hotspot.hosts.loading' => 'Naglo-load...',
    'hotspot.hosts.failed_to_contact_api' => 'Nabigong makipag-ugnayan sa API',
    'hotspot.hosts.page_info' => 'Pahina %s / %s (%s)',

    // Profiles list
    'hotspot.profiles.no_profiles' => 'Walang profile',
    'hotspot.profiles.loading' => 'Naglo-load...',
    'hotspot.profiles.failed_to_load' => 'Nabigong i-load ang mga profile',
    'hotspot.profiles.failed_to_contact_api' => 'Nabigong makipag-ugnayan sa API',
    'hotspot.profiles.no_pools' => '(walang pools)',
    'hotspot.profiles.no_queues' => '(walang queues)',
    'hotspot.profiles.no_types' => '(walang types)',
    'hotspot.profiles.select' => 'Piliin...',
    'hotspot.profiles.default' => 'default',
    'hotspot.profiles.no_profiles_option' => '(walang profile)',
    'hotspot.profiles.page_info' => 'Pahina %s / %s (%s)',
    'hotspot.profiles.name_required' => 'Kinakailangan ang pangalan',
    'hotspot.profiles.added' => 'Nagdagdag ng profile',
    'hotspot.profiles.add_failed' => 'Nabigong dagdagan ang profile: %s',
    'hotspot.profiles.server_contact_failed' => 'Nabigong makipag-ugnayan sa server',
    'hotspot.profiles.id_missing' => 'Nawawala ang profile id',
    'hotspot.profiles.updated' => 'Na-update ang profile',
    'hotspot.profiles.update_failed' => 'Nabigong i-update ang profile: %s',
    'hotspot.profiles.removed' => 'Tinanggal ang profile',
    'hotspot.profiles.remove_failed' => 'Nabigong alisin ang profile: %s',
    'hotspot.profiles.select_remove' => 'Pumili ng profile na aalisin',
    'hotspot.profiles.remove_confirm' => 'Sigurado ka bang nais mong alisin ang napiling profile?',
    'hotspot.profiles.remove_confirm_title' => 'Kumpirmahin',
    
    // Admin Control Panel translations
    'admin.title' => 'Panel ng Administrasyon',
    'admin.desc' => 'Sentro ng Kontrol',
    'admin.maintenance' => 'Maintenance',
    'admin.maintenance.desc' => 'I-on o i-off ang paunawa ng maintenance para sa mga bisita.',
    'admin.page_access' => 'Mga Kontrol sa Pag-access ng Pahina',
    'admin.page_access.desc' => 'Payagan o ipagbawal ang mga user na ma-access ang buong seksyon ng app.',
    'admin.view_logs' => 'Tingnan ang Mga Log',
    'admin.logs.title' => 'Mga Log ng Access ng Admin',
    'admin.save' => 'I-save',
    'admin.saved' => 'Nai-save',
    'admin.save_failed' => 'Nabigo ang pag-save',
    'admin.save_error' => 'Nabigong i-save ang mga setting',
    'admin.load_logs_failed' => 'Nabigong i-load ang mga log',
    'admin.access_denied' => 'Wala kang pahintulot na ma-access ang Admin Control Panel.',
    'access.restricted.title' => 'Limitadong Pag-access',
    'access.restricted.desc' => 'Ang seksyon na ito ay kasalukuyang hindi pinagana',
    'admin.section_disabled' => 'Seksyon na hindi pinagana ng admin',
    'nav.disabled' => 'Hindi Pinagana',
    // Maintenance toggle JS strings
    'maintenance.toast' => 'Mode ng Maintenance' . '<br/><br/>' . 'Limitado ang mga function habang naka-enable ang maintenance mode.',
    'maintenance.set_failed' => 'Nabigong itakda ang estado ng Maintenance Mode',

    // Users modals and export
    'hotspot.modals.no_servers' => '(walang server)',
    'hotspot.modals.no_profiles' => '(walang profile)',
    'hotspot.modals.please_select_export' => 'Pumili ng isa o higit pang user upang i-export',
    'hotspot.modals.select_at_least_one_field' => 'Pumili ng kahit isang field upang i-export',
    'hotspot.modals.no_users_selected' => 'Walang napiling user',
    'hotspot.modals.no_data_to_export' => 'Walang data na ie-export',
    'hotspot.modals.export_started' => 'Nagsimula ang pag-export',
    'hotspot.modals.export_failed' => 'Nabigo ang pag-export',
    'hotspot.modals.add_user_title' => 'Magdagdag ng User ng Hotspot',
    'hotspot.modals.edit_user_title' => 'I-edit ang User ng Hotspot',
    'hotspot.modals.create_button' => 'Gumawa',
    'hotspot.modals.update_button' => 'I-update',
    'hotspot.modals.failed_load_user' => 'Nabigong i-load ang data ng user',
    'hotspot.modals.select_one_to_edit' => 'Pumili nang eksakto ng isang user upang i-edit',
    'hotspot.modals.user_updated' => 'Na-update ang user',
    'hotspot.modals.user_created' => 'Nalikha ang user',
    'hotspot.modals.create_update_failed' => 'Nabigo ang paglikha/pag-update',
    'hotspot.modals.create_request_failed' => 'Nabigo ang request para lumikha',

    // Users list
    'hotspot.users.no_users' => 'Walang user',
    'hotspot.users.loading' => 'Naglo-load...',
    'hotspot.users.empty_response' => 'Walang tugon',
    'hotspot.users.failed_to_contact_api' => 'Nabigong makipag-ugnayan sa API',
    'hotspot.users.select_one_or_more' => 'Pumili ng isa o higit pang user.',
    'hotspot.users.remove_confirm' => 'Alisin ang napiling mga user? Hindi na ito maibabalik.',
    'hotspot.users.action_completed' => 'Nagawa ang aksyon "%s". Tagumpay: %s/%s',
    'hotspot.users.action_failed' => 'Nabigo ang aksyon: %s',
    'hotspot.users.request_failed' => 'Nabigo ang request',
    'hotspot.users.sort_profiles' => 'I-sort ang Mga Profile',
    'hotspot.users.sort_comments' => 'I-sort ang Mga Komento',
    'hotspot.users.select_profiles_placeholder' => 'I-sort ang Mga Profile',
    'hotspot.users.select_comments_placeholder' => 'I-sort ang Mga Komento',

    // Hotspot JS helper strings
    'hotspot.no_active_entries' => 'Walang aktibong entry',
    'hotspot.loading' => 'Naglo-load...',
    'hotspot.failed_to_contact_api' => 'Nabigong makipag-ugnayan sa API',
    'hotspot.page_info' => 'Pahina %s / %s (%s)',

    // Hotspot Modal Tabs and Titles
    'hotspot.modal.title.generate'=> 'Gumawa ng Mga User / Voucher',
    'hotspot.modal.general.tab'=> 'Pangkalahatan',
    'hotspot.modal.printing.tab'=> 'Pag-print',
    'hotspot.modal.stats.tab'=> 'Statistika',
    'hotspot.modal.queueing.tab'=> 'Pag-pila',
    'hotspot.modal.scripts.tab'=> 'Mga Script',

    // Hotspot Modal Form Generate / Add User - General Tab
    'hotspot.modal.form.qty'=> 'Dami',
    'hotspot.modal.form.server'=> 'Server ng Hotspot',
    'hotspot.modal.form.username'=> 'Username',
    'hotspot.modal.form.password'=> 'Password',
    'hotspot.modal.form.user-type'=> 'Uri ng User',
    'hotspot.modal.form.code-length'=> 'Haba ng Code',
    'hotspot.modal.form.characters'=> 'Mga Character',
    'hotspot.modal.form.user-profile'=> 'Profile ng User',
    'hotspot.modal.form.comment'=> 'Komento',
    'hotspot.modal.form.optional-comment'=> 'Opsyonal na Komento',
    'hotspot.modal.form.mac-address'=>  'MAC Address',
    'hotspot.modal.form.time-limit'=>  'Limitasyon ng Oras',
    'hotspot.modal.form.data-limit'=>  'Limitasyon ng Data',

    // Hotspot Modal Form Generate - Printing Tab
    'hotspot.modal.form.hotspot-name'=> 'Pangalan ng Hotspot',
    'hotspot.modal.form.hotspot-dns'=> 'DNS',
    'hotspot.modal.form.hotspot-currency'=> 'Currency',
    'hotspot.modal.form.hotspot-select-currency'=> 'Piliin ang Currency',
    'hotspot.modal.form.hotspot-price'=> 'Presyo',
    'hotspot.modal.form.hotspot-include-comment'=> 'Isama ang Komento',
    'hotspot.modal.form.hotspot-include-comment-desc'=> 'Isama ang nabuong komento sa naka-print na voucher',
    'hotspot.modal.form.hotspot-template'=> 'Template',

    // Hotspot Modal Form Generate - Printing Placeholders
    'hotspot.modal.form.hotspot-name-placeholder'=> 'Aking Hotspot',
    'hotspot.modal.form.hotspot-dns-placeholder'=> 'hotspot.mtikops.com',
    'hotspot.modal.form.hotspot-price-placeholder'=> 'Presyo kada Voucher',

    // Hotspot Modal Form Generate - User-Type
    'hotspot.modal.form.user-type-regular'=> 'Username & Password',
    'hotspot.modal.form.user-type-voucher'=> 'Username = Password',

    // Hotspot Modal Form Generate - Characters
    'hotspot.modal.form.characters-lower'=> 'abcd (lowercase)',
    'hotspot.modal.form.characters-upper'=> 'ABCD (UPPERCASE)',
    'hotspot.modal.form.characters-mixed'=> 'AbCd (Mixed)',
    'hotspot.modal.form.characters-num'=> '1234 (Numbers)',
    'hotspot.modal.form.characters-lower-num'=> 'a1b2 (lowercase & Numbers)',
    'hotspot.modal.form.characters-upper-num'=> 'A1B2 (UPPERCASE & Numbers)',
    'hotspot.modal.form.characters-mixed-num'=> 'aA1bB2 (Mixed & Numbers',

    // Hotspot Modal Form Stats - Stats Tab
    'hotspot.modal.form.stats.uptime'=> 'Oras ng Pagtakbo',
    'hotspot.modal.form.stats.bytes_in'=> 'Bytes In',
    'hotspot.modal.form.stats.bytes_out'=> 'Bytes Out',
    'hotspot.modal.form.stats.limit-uptime'=> 'Limitasyon ng Oras',
    'hotspot.modal.form.stats.limit-bytes_total'=> 'Limitasyon ng Kabuuang Bytes',
    'hotspot.modal.form.stats.user-code'=> 'User Code',
    'hotspot.modal.form.stats.expire-date'=> 'Petsa ng Pag-expire',

    // Hotspot Modal Form Misc
    'hotspot.modal.form.loading' => 'Naglo-load ng data...',

    // Hotspot Modal Form Buttons
    'hotspot.modal.form.button.generate-print'=> 'Gumawa at I-print',
    'hotspot.modal.form.button.generate'=> 'Gumawa Lamang',
    'hotspot.modal.form.button.clear-cached-batch'=> 'I-clear ang naka-cache na batch',
    'hotspot.modal.form.button.close'=> 'Isara',
    'hotspot.modal.form.button.create'=> 'Lumikha',
    'hotspot.modal.form.button.cancel'=> 'Kanselahin',

    // profiles.php
    // Hotspot User Profiles Page
    'hotspot.user.profiles.title'=> 'Profiles',
    'hotspot.user.profiles.desc'=> 'Manage bandwidth, session and rate-limit profiles for users.',

    // Hotspot User Profiles Table Headers
    'hotspot.user.profiles.th.name'=> 'Name',
    'hotspot.user.profiles.th.shared-users'=> 'Shared Users',
    'hotspot.user.profiles.th.rate-limit'=> 'Rate Limit',
    'hotspot.user.profiles.th.idle-timeout'=> 'Idle Timeout',
    'hotspot.user.profiles.th.keepalive-timeout'=> 'Keepalive Timeout',
    'hotspot.user.profiles.th.queue-type'=> 'Queue Type',

    // Hotspot User Profiles Modal Form
    'hotspot.user.profiles.modal.title.add-profile'=> 'Add Profile',

    // Hotspot User Profile Form Fields - General Tab
    'hotspot.user.profiles.form.name'=> 'Profile Name',
    'hotspot.user.profiles.form.pool'=> 'Address Pool',
    'hotspot.user.profiles.form.rate-limit-rx'=> 'Rate Limit (RX)',
    'hotspot.user.profiles.form.rate-limit-tx'=> 'Rate Limit (TX)',
    'hotspot.user.profiles.form.shared-users'=> 'Shared Users',
    'hotspot.user.profiles.form.expiry-mode'=> 'Expiry Mode',
    'hotspot.user.profiles.form.expiry-duration'=> 'Expiry Duration',
    'hotspot.user.profiles.form.lock-device'=> 'Lock to Device',
    'hotspot.user.profiles.form.lock-server'=> 'Lock to Server',
    'hotspot.user.profiles.form.comment'=> 'Comment',

    // Expiry Mode Options
    'hotspot.user.profiles.form.expiry-mode_none'=> 'None',
    'hotspot.user.profiles.form.expiry-mode_remove'=> 'Remove',
    'hotspot.user.profiles.form.expiry-mode_notice'=> 'Notice',
    'hotspot.user.profiles.form.expiry-mode_remove_record'=> 'Remove and Record',
    'hotspot.user.profiles.form.expiry-mode_remove_notice'=> 'Remove and Notice',

    // Hotspot User Profile Form Fields - Queue Tab
    'hotspot.user.profiles.form.parent-queue'=> 'Parent Queue',
    'hotspot.user.profiles.form.queue-type'=> 'Queue Type',

    // Hotspot User Profiles Form Fields - Scripts Tab
    'hotspot.user.profiles.form.on-login-script'=> 'On Login Script',
    'hotspot.user.profiles.form.on-login-script_placeholder'=> 'Optional script to run on login',
    'hotspot.user.profiles.form.on-logout-script'=> 'On Logout Script',
    'hotspot.user.profiles.form.on-logout-script_placeholder'=> 'Optional script to run on logout',

    // Hotspot User Profile Modal - Edit Profile
    'hotspot.user.profile.edit'=> 'Edit Profile',
    'hotspot.user.profile.select.profile'=> 'Select Profile',
    'hotspot.user.profile.select.profile.desc'=> 'Choose a profile to edit. After selection the full editor will open.',
    'hotspot.user.profile.button.cancel'=> 'Kanselahin',
    'hotspot.user.profile.button.save'=> 'Save',

    // Hotspot User Profile Modal - Remove Profile
    'hotspot.user.profiles.remove'=> 'Remove Profile',
    'hotspot.user.profiles.remove-select'=> 'Select Profile to Remove',
    'hotspot.user.profiles.remove-warning'=> 'This action cannot be undone. Be sure you want to remove the selected profile.',
    'hotspot.user.profiles.remove.button-cancel'=> 'Kanselahin',
    'hotspot.user.profiles.remove.button-remove'=> 'Remove',

    // Hotspot Export Users Modal
    'hotspot.export.user.desc'=> 'Select which fields to include in the export. Only selected users will be exported.',
    'hotspot.export.user.name'=> 'Name',
    'hotspot.export.user.price'=> 'Price',
    'hotspot.export.user.password'=> 'Password',
    'hotspot.export.user.profile'=> 'Profile',
    'hotspot.export.user.comment'=> 'Comment',
    'hotspot.export.user.inc-header'=> 'Include Headers',
    'hotspot.export.user.column-order'=> 'Column Order',
    'hotspot.export.user.column-up'=> 'Up',
    'hotspot.export.user.column-down'=> 'Down',
    'hotspot.export.user.column-desc'=> 'Select a field and use Up/Down to change column order.',
    'hotspot.export.user.button-cancel'=> 'Kanselahin',
    'hotspot.export.user.button-download'=> 'I-download ang CSV',

    // Hotspot Print Preview Modal
    'hotspot.print.preview.title'=> 'Paunang-tingin ng Pag-print',
    'hotspot.print.preview.desc'=> 'I-preview ang mga napiling user bago mag-print.',
    'hotspot.print.preview.button-cancel'=> 'Kanselahin',
    'hotspot.print.preview.button-close'=> 'Isara',
    'hotspot.print.preview.button-print'=> 'I-save at I-print',
    

    // active.php
    // Hotspot Active Sessions Page

    // hosts.php
    // Hotspot Hosts Page

    // settings.php
    // Hotspot Settings Page
    'settings.title'=> 'Settings',
    'settings.desc'=> 'Configure device identity, system services and maintenance actions.',
    'settings.identity'=> 'Identity',
    'settings.ntp'=> 'NTP',
    'settings.files'=> 'Files',
    'settings.users'=> 'Users',
    'settings.scheduler'=> 'Scheduler',
    'settings.scripts'=> 'Scripts',
    'settings.reset'=> 'Reset',
    'settings.reboot'=> 'Reboot',
    'settings.shutdown'=> 'Shutdown',

    // Settings Page Buttons
    //'settings.open.identity'=> 'Open Identity',
    //'settings.open.ntp'=> 'Open NTP',
    'settings.open.files'=> 'Open Files',
    'settings.open.users'=> 'Manage Users',
    'settings.open.scheduler'=> 'Open Scheduler',
    'settings.open.scripts'=> 'Open Scripts',
    //'settings.open.reset'=> 'Reset',
    //'settings.open.reboot'=> 'Reboot',
    //'settings.open.shutdown'=> 'Shutdown',

    // SETTINGS GENERAL BUTTONS
    'settings.buttons.upload'=> 'Upload',
    'settings.buttons.delete'=> 'Delete',
    'settings.buttons.refresh'=> 'Refresh',
    'settings.buttons.save'=> 'Save',
    'settings.buttons.cancel'=> 'Kanselahin',
    'settings.buttons.close'=> 'Isara',
    'settings.buttons.edit'=> 'Edit',
    'settings.buttons.add'=> 'Add',
    'settings.buttons.remove'=> 'Remove',
    'settings.buttons.prev'=> 'Prev',
    'settings.buttons.next'=> 'Next',
    'settings.sort.by'=> 'Sort by',
    'settings.sort' => 'Sort',

    // Settings Page - Back Button
    'settings.back-to-settings'=> 'Back to Settings',

    // Settings Page - Actions
    'settings.actions'=> 'Actions',

    // Settings Page - Loading
    'settings.loading'=> 'Loading Settings...',

    // Settings Page Descriptions
    'settings.identity.desc'=> 'View and edit the device identity and basic system information.',
    'settings.ntp.desc'=> 'Configure network time protocol (NTP) settings for accurate timekeeping.',
    'settings.files.desc'=> 'Manage uploaded files and scripts stored on the device.',
    'settings.users.desc'=> 'Manage system users and their access rights.',
    'settings.scheduler.desc'=> 'Create scheduled tasks for maintenance and automation.',
    'settings.scripts.desc'=> 'Manage and run custom scripts on the device.',
    'settings.reset.desc'=> 'Reset configuration to defaults. Use with caution.',
    'settings.reboot.desc'=> 'Restart the device remotely. Ensure all changes are saved before rebooting.',
    'settings.shutdown.desc'=> 'Shut down the device remotely and safely. Use with caution.',

    // Settings Table Headers
    'settings.table.th.name'=> 'Name',
    'settings.table.th.group'=> 'Group',
    'settings.table.th.last-login'=> 'Last Login',
    'settings.table.th.comment'=> 'Comment',
    'settings.table.th.role'=> 'Role',
    'settings.table.th.select'=> 'Select All',
    'settings.table.th.username'=> 'Username',
    'settings.table.th.password'=> 'Password',
    'settings.table.th.actions'=> 'Actions',
    'settings.table.th.next-run'=> 'Next Run',
    'settings.table.th.interval'=> 'Interval',
    'settings.table.th.enabled'=> 'Enabled',
    'settings.table.th.size'=> 'Size',
    'settings.table.th.owner'=> 'Owner',
    'settings.table.th.date'=> 'Date',

   
    // Settings Page - Identity
    'settings.identity.placeholder'=> 'Enter system identity',
    'settings.identity.caption'=> 'This is the name shown in logs and network identification.',

    // Settings Page - Identity Buttons
    'settings.identity.save'=> 'Save Identity',
    'settings.identity.refresh'=> 'Refresh',

    // Settings Page - NTP Modal
    'settings.ntp.enabled'=> 'Enabled',
    'settings.ntp.enabled-yes'=> 'Enabled',
    'settings.ntp.enabled-no'=> 'Disabled',
    'settings.ntp.mode'=> 'Mode',
    'settings.ntp.mode-broadcast'=> 'Broadcast',
    'settings.ntp.mode-manycast'=> 'Manycast',
    'settings.ntp.mode-multicast'=> 'Multicast',
    'settings.ntp.mode-unicast'=> 'Unicast',
    'settings.ntp.server'=> 'NTP Servers',
    'settings.ntp.server-add'=> 'Add Server',
    'settings.ntp.server-refresh'=> 'Refresh',
    'settings.ntp.server-save'=> 'Save',

    // Settings Page - NTP Status
    'settings.ntp.status'=> 'Status',
    'settings.ntp.freq.drift'=> 'Frequency Drift',
    'settings.ntp.synced.server'=> 'Synced Server',
    'settings.ntp.synced.stratum'=> 'Synced Stratum',
    'settings.ntp.system.offset'=> 'System Offset',

    // Settings Page - Files
    'settings.files.title'=> 'Files Manager',
    'settings.files.desc'=> 'I-upload, i-download at pamahalaan ang mga file na naka-imbak sa device.',


    // Settings Page - Users
    'settings.users.title'=> 'User Manager',
    'settings.users.desc'=> 'Create, edit and manage system users and their access rights.',

    // Settings Page - Scheduler
    'settings.scheduler.title'=> 'Scheduler',
    'settings.scheduler.desc'=> 'Create and manage scheduled tasks for maintenance and automation.',

    // Settings Page - Scripts
    'settings.scripts.title'=> 'Scripts',
    'settings.scripts.desc'=> 'Create, edit and run custom scripts on the device.',

    // Settings Page - Reset
    // Reset Modal
    'settings.reset.type'=> 'Reset Type',
    'settings.reset.config'=> 'Reset Configuration (keep user files)',
    'settings.reset.all'=> 'Factory Reset (erase all, reload defaults)',
    'settings.reset.delay'=> 'Delay (seconds)',
    'settings.reset.delay.desc'=> 'Set to 0 to perform immediately when using the Schedule button, or click "Reset Now" to run immediately.',

    //Reset Buttons
    'settings.reset.button.schedule'=> 'Schedule Reset',
    'settings.reset.button.reset-now'=> 'Reset Now',

    // Settings Page - Reboot
    // Reboot Modal
    'settings.reboot.delay'=> 'Delay (seconds)',
    'settings.reboot.delay.desc'=> 'Set to 0 to reboot immediately when using the Schedule button, or click "Reboot Now" to force immediate reboot.',

    // Reboot Buttons
    'settings.reboot.button.schedule'=> 'Schedule Reboot',
    'settings.reboot.button.reboot-now'=> 'Reboot Now',

    // Settings Page - Shutdown
    // Shutdown Modal
    'settings.shutdown.delay'=> 'Delay (seconds)',
    'settings.shutdown.delay.desc'=> 'Set to 0 to shutdown immediately when using the Schedule button, or click "Shutdown Now" to force immediate shutdown.',

    // Shutdown Buttons
    'settings.shutdown.button.schedule'=> 'Schedule Shutdown',
    'settings.shutdown.button.shutdown-now'=> 'Shutdown Now',


    // queues.php
    // Queues Page
    'queues.title'=> 'Pamamahala ng Mga Pila',
    'queues.desc'=> 'Pamahalaan ang Simple queues, Tree queues at mga Uri ng Queue.',

    'queues.simple'=> 'Simple',
    'queues.tree'=> 'Tree',
    'queues.types'=> 'Mga Uri',
    'queues.simple-queue'=> 'Simple Queues',
    'queues.queue-tree'=> 'Queue Trees',
    'queues.queue-types'=> 'Mga Uri ng Queue',

    // Queues Page Descriptions
    'queues.simple.desc'=> 'Lumikha at pamahalaan ang simpleng queues bawat host/o target.',
    'queues.tree.desc'=> 'Pamahalaan ang hierarchical queue trees para sa advanced na traffic shaping.',
    'queues.types.desc'=> 'Tukuyin at pamahalaan ang mga queue type at packet classifier.',

    // Queues Page Buttons
    'queues.open.simple'=> 'Buksan ang Simple Queue',
    'queues.open.tree'=> 'Buksan ang Queue Tree',
    'queues.open.types'=> 'Buksan ang Mga Uri ng Queue',

    // Queues Page - Back Button
    'queues.back-to-queues'=> 'Bumalik sa Pamamahala ng Mga Pila',

    // Queues General Buttons
    'queues.button.new'=> 'Bago',
    'queues.button.edit'=> 'I-edit',
    'queues.button.enable'=> 'Paganahin',
    'queues.button.disable'=> 'I-disable',
    'queues.button.remove'=> 'Alisin',
    'queues.button.refresh'=> 'I-refresh',
    'queues.button.pause-polling'=> 'Itigil ang Polling',
    'queues.sort.by'=> 'I-sort ayon sa',
    'queues.sort'=> 'I-sort',
    'queues.select.all'=> 'Piliin Lahat',
    'queues.button.prev'=> 'Nakaraan',
    'queues.button.next'=> 'Susunod',
    'queues.button.save'=> 'I-save',
    'queues.button.cancel'=> 'Kanselahin',
    'queues.button.create'=> 'Gumawa',


    // Queues Loading Status
    'queues.status.loading'=> 'Naglo-load ng Mga Pila...',

    // simple.php
    // Simple Queues Page


    // Simple Queues Action Buttons
    'queues.simple.actions'=> 'Actions',
    'queues.simple.actions.desc'=> 'Perform actions on selected queues.',

    // Queues Table Headers
    'queues.table.th.name'=> 'Pangalan',
    'queues.table.th.number'=> 'Number',
    'queues.table.th.target'=> 'Target',
    'queues.table.th.upload-limit'=> 'Limitasyon ng Upload',
    'queues.table.th.download-limit'=> 'Limitasyon ng Download',
    'queues.table.th.download-avg-rate'=> 'Average Rate ng Download',
    'queues.table.th.max-limit'=> 'Max Limit',
    'queues.table.th.queue-type'=> 'Uri ng Queue',
    'queues.table.th.limit-at'=> 'Limit Sa',
    'queues.table.th.bytes'=> 'Bytes',
    'queues.table.th.avg.rate'=> 'Average Rate',
    'queues.table.th.kind'=> 'Uri',

    // Queues Modal Form - Tabs
    'queues.tab.main'=> 'Main',
    'queues.tab.advanced'=> 'Advanced',
    'queues.tab.queueing'=> 'Queueing',

    // Queues Modal Form Tab
    'queues.modal.form.new.simple'=> 'Bagong Simple Queue',
    'queue.modal.form.edit.simple'=> 'I-edit ang Simple Queue',
    'queues.modal.form.enabled'=> 'Paganahin',
    'queues.modal.form.name'=> 'Pangalan',
    'queues.modal.form.target'=> 'Target',
    'queues.modal.form.target-select-iface'=> 'Piliin ang Interface',
    'queues.modal.form.dst'=> 'Destination',
    'queues.modal.form.dst-select-iface'=> 'Piliin ang Interface',
    'queues.modal.form.target.dst-caption'=> 'Pumili ng interface o maglagay ng custom na target sa ibaba.',
    'queues.modal.form.placeholder'=> 'o maglagay ng IP (hal. 192.168.10.0/24 o 10.0.0.5)',
    'queues.modal.form.target.upload'=> 'Target Upload',
    'queues.modal.form.max-limit'=> 'Max Limit',
    'queues.modal.form.target.download'=> 'Target na Download',
    'queues.modal.form.pkt-marks'=> 'Packet Marks',
    'queues.modal.form.limit-at'=> 'Limit Sa',
    'queues.modal.form.burst-limit'=> 'Burst Limit',
    'queues.modal.form.burst-threshold'=> 'Burst Threshold',
    'queues.modal.form.burst-time'=> 'Burst Time',
    'queues.modal.form.priority'=> 'Prayoridad',
    'queues.modal.form.bucket-size'=> 'Bucket Size',
    'queues.modal.form.parent-queue'=> 'Parent Queue',
    'queues.modal.form.queue-type'=> 'Uri ng Queue',
    'queues.modal.form.comment'=> 'Komento',
    'queues.modal.form.comment-placeholder'=> 'Opsyonal na komento',
    'queues.modal.form.clear-parent'=> 'Linisin ang parent (alisin ang parent relationship)',

    // tree.php
    // Queue Tree Page

    // Queue Tree Action Buttons
    'queues.tree.actions'=> 'Actions',
    'queues.tree.action.desc'=> 'Perform actions on selected queue tree entries.',

    // Queue Tree Modal Form - Tabs
    'queues.tree.create.title'=> 'Create Queue Tree Entry',
    'queue.tree.tab.general'=> 'General',
    'queue.tree.tab.rate-limit'=> 'Rate Limit',


    // types.php
    // Queue Types Page
  
    // Queue Types Action 
    'queues.types.actions'=> 'Actions',
    'queues.types.action.desc'=> 'Perform actions on selected queue types.',


    // ppp.php
    // PPP Page
    'ppp.title'=> 'Tagapamahala ng PPPoE',
    'ppp.desc'=> 'Pamahalaan ang PPPoE Servers, Secrets at Profiles.',

    
    'ppp.pppoe.servers'=> 'PPPoE Servers',
    'ppp.servers'=> 'Mga Server',
    'ppp.secrets'=> 'Mga Secret',
    'ppp.profiles'=> 'Mga Profile',
    'ppp.active'=> 'Aktibong Session',
    
    // PPP Page Descriptions
    'ppp.servers.desc'=> 'Tingnan at pamahalaan ang mga PPPoE server instances at bindings.',
    'ppp.secrets.desc'=> 'Pamahalaan ang mga PPPoE secret (mga kredensyal ng user).',
    'ppp.profiles.desc'=> 'Lumikha at pamahalaan ang mga PPPoE profile.',
    'ppp.active.desc'=> 'Tingnan at i-disconnect ang mga aktibong PPPoE session.',

    'ppp.open.servers'=> 'Buksan ang PPPoE Servers',
    'ppp.open.secrets'=> 'Buksan ang Mga Secret',
    'ppp.open.profiles'=> 'Buksan ang Mga Profile',
    'ppp.open.active'=> 'Buksan ang Aktibong Session',

    // PPP Page - Back Button
    'ppp.back-to-ppp'=> 'Bumalik sa Pamamahala ng PPPoE',

    // PPP Actions
    'ppp.actions'=> 'Mga Aksyon',

    // PPP General Buttons
    'ppp.buttons.new'=> 'Bago',
    'ppp.buttons.edit'=> 'I-edit',
    'ppp.buttons.enable'=> 'Paganahin',
    'ppp.buttons.disable'=> 'I-disable',
    'ppp.buttons.remove'=> 'Alisin',
    'ppp.buttons.refresh'=> 'I-refresh',
    'ppp.sort.by'=> 'I-sort ayon sa',
    'ppp.sort'=> 'I-sort',
    'ppp.select.all'=> '',
    'ppp.buttons.prev'=> 'Nakaraan',
    'ppp.buttons.next'=> 'Susunod',
    'ppp.buttons.clear'=> 'Linisin',
    'ppp.buttons.cancel'=> 'Kanselahin',
    'ppp.buttons.create'=> 'Gumawa',
    'ppp.buttons.save'=> 'I-save',
    'ppp.buttons.proceed'=> 'Magpatuloy',

    // PPP Loading Status
    'ppp.status.loading'=> 'Naglo-load ng PPPoE Data...',

    // PPP Secrets Table Headers
    'ppp.table.th.service-name'=> 'Pangalan ng Serbisyo',
    'ppp.table.th.iface'=> 'Interface',
    'ppp.table.th.keepalive'=> 'Keepalive Timeout',
    'ppp.table.th.profile'=> 'Profile',
    'ppp.table.th.one-session-host'=> 'Isang Session bawat Host',
    'ppp.table.th.authentication'=> 'Authentication',
    'ppp.table.th.name'=> 'Pangalan',
    'ppp.table.th.password'=> 'Password',
    'ppp.table.th.service'=> 'Serbisyo',
    'ppp.table.th.address'=> 'Address',
    'ppp.table.th.caller-id'=> 'Caller ID',
    'ppp.table.th.local-address'=> 'Local Address',
    'ppp.table.th.remote-address'=> '',
    'ppp.table.th.last-logged-out'=> 'Huling Pag-login Lumabas',
    'ppp.table.th.last-disc-reason'=> 'Dahilan ng Diskonek',
    'ppp.table.th.last-called-id'=> 'Huling Tinawag na ID',
    'ppp.table.th.rate-limit'=> 'Rate Limit',
    'ppp.table.th.only-one'=> 'Only One',
    'ppp.table.th.uptime'=> 'Oras ng Pagtakbo',
    'ppp.table.th.bytes-in'=> 'Bytes In',
    'ppp.table.th.bytes-out'=> 'Bytes Out',

    // PPP Add Server Modal Form
    'ppp.modal.form.title'=> 'Magdagdag ng PPPoE Server',
    'ppp.modal.form.enabled'=> 'Paganahin',
    'ppp.modal.form.one-session-per-host'=> 'Isang Session bawat Host',
    'ppp.modal.form.accept-empty-services'=> 'Tanggapin ang Empty Services',
    'ppp.modal.form.accept-untagged'=> 'Tanggapin ang Untagged',
    'ppp.modal.form.service-name'=> 'Pangalan ng Serbisyo',
    'ppp.modal.form.service-name_placeholder'=> 'Pangalan ng PPPoE',
    'ppp.modal.form.interface'=> 'Interface',
    'ppp.modal.form.placeholder'=> 'Default',
    'ppp.modal.form.max-mtu'=> 'Max MTU',
    'ppp.modal.form.max-mru'=> 'Max MRU',
    'ppp.modal.form.mrru'=> 'MRRU',
    'ppp.modal.form.keepalive-timeout'=> 'Keepalive Timeout',
    'ppp.modal.form.profile'=> 'Profile',
    'ppp.modal.form.max-sessions'=> 'Max Sessions',
    'ppp.modal.form.auth-methods'=> 'Mga Paraan ng Authentication',
    'ppp.modal.form.auth-mschapv2'=> 'msChapv2',
    'ppp.modal.form.auth-mschapv1'=> 'msChapv1',
    'ppp.modal.form.auth-chap'=> 'Chap',
    'ppp.modal.form.auth-pap'=> 'PaP',

    // PPP Add/Edit Secret Modal Form
    'ppp.modal.form.secret.name'=> 'Pangalan',
    'ppp.modal.form.secret.password'=> 'Password',
    'ppp.modal.form.secret.service-type'=> 'Serbisyo',
    'ppp.modal.form.secret.local-address'=> 'Local Address',
    'ppp.modal.form.secret.remote-address'=> 'Remote Address',

    // secrets.php
    // Modal Titles
    'ppp.modal.form.add.ppp-secret'=> 'Magdagdag ng PPPoE Secret',
    'ppp.modal.form.edit.ppp-secret'=> 'I-edit ang PPPoE Secret',

    // PPP Secrets Page Modal Tabs
    'ppp.secrets.tab.general'=> 'Pangkalahatan',  
    'ppp.secrets.tab.details'=> 'Detalye',

    // profiles.php
    // PPP Profiles Page

    // PPP Profiles Modal Titles
    'ppp.modal.form.add.ppp-profile'=> 'Magdagdag ng PPPoE Profile',
    'ppp.modal.form.edit.ppp-profile'=> 'I-edit ang PPPoE Profile',


    // PPP Profiles Modal Tabs
    'ppp.profiles.tab.general'=> 'Pangkalahatan',
    'ppp.profiles.tab.protocols'=> 'Protocols',
    'ppp.profiles.tab.limits'=> 'Limitasyon',
    'ppp.profiles.tab.queue'=> 'Queue',
    'ppp.profiles.tab.scripts'=> 'Mga Script',

    // PPP Profiles Modal Form Fields
    'ppp.modal.form.profile.name'=> 'Pangalan',
    'ppp.modal.form.profile.local-address'=> 'Local Address',
    'ppp.modal.form.profile.remote-address'=> 'Remote Address',
    'ppp.modal.form.profile.use-ipv6'=> 'Gamitin ang IPv6',
    'ppp.modal.form.profile.use-mpls'=> 'Gamitin ang MPLS',
    'ppp.modal.form.profile.use-comp'=> 'Gamitin ang Compression',
    'ppp.modal.form.profile.use-enc'=> 'Gamitin ang Encryption',
    'ppp.modal.form.profile.sess-timeout'=> 'Session Timeout',
    'ppp.modal.form.profile.idle-timeout'=> 'Idle Timeout',
    'ppp.modal.form.profile.rate-limit'=> 'Rate Limit',
    'ppp.modal.form.profile.only-one'=> 'Only One',
    'ppp.modal.form.profile.parent-queue'=> 'Parent Queue',
    'ppp.modal.form.profile.queue-type-rx'=> 'Uri ng Queue (Downloads)',
    'ppp.modal.form.profile.queue-type-tx'=> 'Uri ng Queue (Uploads)',
    'ppp.modal.form.profile.script-onup'=> 'On Up',
    'ppp.modal.form.profile.script-ondown'=> 'On Down',
    'ppp.modal.form.profile.script-placeholder'=> 'Isasagawang script kapag na-trigger ang event',
    'ppp.modal.form.migration.confirm'=> 'Kumpirmahin ang Paglilipat ng Profile',
    'ppp.modal.form.migration.caption'=> 'Ang paglilinis ng Parent Queue o Queue Type para sa profile na ito ay maaaring mangailangan ng muling paggawa ng profile at muling pagtatalaga ng mga kaugnay na PPP secret. Maaaring maging mapanira ang operasyon na ito. Nais mo bang magpatuloy?',

    // ip.php
    // IP Page
    'ip.title'=> 'IP Manager',
    'ip.desc'=> 'Manage ARP, Addresses, DHCP, DNS, Pools and related IP services.',

    'ip.arp'=> 'ARP',
    'ip.addresses'=> 'Addresses',
    'ip.cloud'=> 'Cloud',
    'ip.dhcp.client'=> 'DHCP Client',
    'ip.dhcp.server'=> 'DHCP Server',
    'ip.dns'=> 'DNS',
    'ip.pool'=> 'Pool',
    'ip.services'=> 'Services',
    'ip.upnp'=> 'UPnP',
    'ip.settings'=> 'Settings',
    
    'ip.arp.desc'=> 'View and manage the ARP table entries.',
    'ip.addresses.desc'=> 'Manage IP addresses assigned to interfaces.',
    'ip.cloud.desc'=> 'Cloud/DDNS settings. Values are read from the router.',
    'ip.dhcp.client.desc'=> 'View and manage DHCP clients.',
    'ip.dhcp.server.desc'=> 'Configure DHCP server and leases.',
    'ip.dns.desc'=> 'Manage DNS settings and static entries.',
    'ip.pool.desc'=> 'Manage address pools for DHCP and other services.',
    'ip.services.desc'=> 'Enable or disable IP-related services.',
    'ip.upnp.desc'=> 'Universal Plug and Play settings. Values are read from the router.',
    'ip.settings.desc'=> 'General IP subsystem settings.',

    'ip.open.arp'=> 'Open ARP',
    'ip.open.addresses'=> 'Open Addresses',
    'ip.open.cloud'=> 'Buksan ang Cloud',
    'ip.open.dhcp.client'=> 'Buksan ang DHCP Client',
    'ip.open.dhcp.server'=> 'Buksan ang DHCP Server',
    'ip.open.dns'=> 'Buksan ang DNS',
    'ip.open.pool'=> 'Buksan ang Pool',
    'ip.open.services'=> 'Buksan ang Mga Serbisyo',
    'ip.open.upnp'=> 'Buksan ang UPnP',
    'ip.open.settings'=> 'Buksan ang Mga Setting',

    // IP Page - Back Button
    'ip.back-to-ip'=> 'Bumalik sa IP Manager',

    // IP JS strings
    // Addresses
    'ip.addresses.no_addresses' => 'Walang address',
    'ip.addresses.loading' => 'Naglo-load...',
    'ip.addresses.failed_to_contact_api' => 'Nabigong makipag-ugnayan sa API',
    'ip.addresses.please_select_one_or_more' => 'Pumili ng isa o higit pang mga entry',
    'ip.addresses.select_one_to_edit' => 'Piliin ang eksaktong isang address upang i-edit',
    'ip.addresses.action_completed' => 'Natapos ang aksyon %s',
    'ip.addresses.action_failed' => 'Nabigo ang aksyon: %s',
    'ip.addresses.request_failed' => 'Nabigong kahilingan: %s',
    'ip.addresses.address_added' => 'Nagdagdag ng address',
    'ip.addresses.address_updated' => 'Na-update ang address',
    'ip.addresses.add_failed' => 'Nabigo ang pagdaragdag: %s',
    'ip.addresses.update_failed' => 'Nabigo ang pag-update: %s',
    'ip.addresses.page_info' => 'Pahina %s / %s (%s)',

    // ARP
    'ip.arp.no_arp_entries' => 'Walang ARP entries',
    'ip.arp.loading' => 'Naglo-load...',
    'ip.arp.failed_to_contact_api' => 'Nabigong makipag-ugnayan sa API',
    'ip.arp.please_select_one_or_more' => 'Pumili ng isa o higit pang mga entry',
    'ip.arp.enable_confirm' => 'I-enable ang napiling ARP entries?',
    'ip.arp.disable_confirm' => 'I-disable ang napiling ARP entries?',
    'ip.arp.remove_confirm' => 'Alisin ang napiling ARP entries?',
    'ip.arp.page_info' => 'Pahina %s / %s (%s)',

    // Cloud
    'ip.cloud.failed_to_load' => 'Nabigong i-load ang cloud settings: %s',
    'ip.cloud.reverted' => 'Naibalik ang mga pagbabago',
    'ip.cloud.applied' => 'Naipatupad ang cloud settings',
    'ip.cloud.apply_failed' => 'Nabigo ang paglalapat: %s',

    // DHCP Client
    'ip.dhcp.client.no_clients' => 'Walang DHCP clients',
    'ip.dhcp.client.failed_to_load' => 'Nabigong i-load ang DHCP clients: %s',
    'ip.dhcp.client.please_select_interface' => 'Pumili ng interface',
    'ip.dhcp.client.created' => 'Nagawa ang DHCP Client',
    'ip.dhcp.client.create_failed' => 'Nabigo ang paglikha: %s',
    'ip.dhcp.client.no_entries_selected' => 'Walang piniling entry',
    'ip.dhcp.client.enable_completed' => 'Matagumpay na na-enable',
    'ip.dhcp.client.enable_failed' => 'Nabigo ang pag-enable: %s',
    'ip.dhcp.client.disable_completed' => 'Matagumpay na na-disable',
    'ip.dhcp.client.disable_failed' => 'Nabigo ang pag-disable: %s',
    'ip.dhcp.client.remove_confirm' => 'Alisin ang mga napiling DHCP clients?',
    'ip.dhcp.client.option_name_code_required' => 'Kailangan ang Pangalan at Code',
    'ip.dhcp.client.option_created' => 'Nagawa ang option',
    'ip.dhcp.client.option_create_failed' => 'Nabigo ang paglikha: %s',
    'ip.dhcp.client.no_options' => 'Walang options',

    // DHCP Networks
    'ip.dhcp.networks.no_networks' => 'Walang DHCP networks',
    'ip.dhcp.networks.loading' => 'Naglo-load...',
    'ip.dhcp.networks.select_one_to_edit' => 'Pumili ng isang network upang i-edit',
    'ip.dhcp.networks.create_not_implemented' => 'Gumawa ng bagong network: hindi pa ipinapatupad',
    'ip.dhcp.networks.please_select_remove' => 'Pumili ng isa o higit pang mga network upang alisin',
    'ip.dhcp.networks.remove_confirm' => 'Alisin ang napiling mga network?',
    'ip.dhcp.networks.removed' => 'Inalis',
    'ip.dhcp.networks.remove_failed' => 'Nabigo ang pag-alis: %s',
    'ip.dhcp.networks.page_info' => 'Pahina %s / %s (%s)',

    // DNS
    'ip.dns.add_server_placeholder' => 'Magdagdag ng DNS server (IP)',
    'ip.dns.remove' => 'Alisin',
    'ip.dns.loading' => 'Naglo-load...',
    'ip.dns.failed_to_contact_api' => 'Nabigong makipag-ugnayan sa API',
    'ip.dns.error_loading' => 'Nabigong i-load ang DNS settings',
    'ip.dns.dns_saved' => 'Na-save ang DNS settings',
    'ip.dns.failed_to_save' => 'Nabigo ang pag-save: %s',
    'ip.dns.save_confirm' => 'I-save ang DNS settings?',
    'ip.dns.no_static_entries' => 'Walang static entries',
    'ip.dns.static_added' => 'Nagdagdag ng static DNS',
    'ip.dns.static_add_failed' => 'Nabigo ang pagdaragdag ng static',
    'ip.dns.performing_action' => 'Isinasagawa ang %s...',
    'ip.dns.invalid_json' => 'Hindi wastong JSON na tugon',
    'ip.dns.request_failed' => 'Nabigong kahilingan: %s',
    'ip.dns.flush_cache_confirm' => 'I-flush ang buong DNS cache?',
    'ip.dns.cache_flushed' => 'Na-clear ang cache',
    'ip.dns.failed_flush_cache' => 'Nabigo ang pag-flush ng cache: %s',
    'ip.dns.no_cache_entries' => 'Walang cache entries',

    // Pool
    'ip.pool.no_pools' => 'Walang pools',
    'ip.pool.please_select_one_or_more' => 'Pumili ng isa o higit pang pools',
    'ip.pool.select_one_to_edit' => 'Piliin ang eksaktong isang pool upang i-edit',
    'ip.pool.name_and_address_required' => 'Kailangan ang Pangalan at Address',
    'ip.pool.pool_created' => 'Nagawa ang pool',
    'ip.pool.create_failed' => 'Nabigo ang paglikha: %s',
    'ip.pool.pool_updated' => 'Na-update ang pool',
    'ip.pool.update_failed' => 'Nabigo ang pag-update: %s',
    'ip.pool.remove_confirm' => 'Alisin ang napiling pool(s)?',
    'ip.pool.action_completed' => 'Natapos ang aksyon %s',
    'ip.pool.action_failed' => 'Nabigo ang aksyon: %s',
    'ip.pool.request_failed' => 'Nabigong kahilingan: %s',
    'ip.pool.none' => '(wala)',
    'ip.pool.loading' => 'Naglo-load...',
    'ip.pool.failed_to_contact_api' => 'Nabigong makipag-ugnayan sa API',
    'ip.pool.page_info' => 'Pahina %s / %s (%s)',

    // IP Settings
    'ip.settings.refreshing_settings' => 'I-rerefresh ang settings...',
    'ip.settings.no_settings_found' => 'Walang IP settings na natagpuan',
    'ip.settings.failed_to_load' => 'Nabigong i-load ang IP settings',
    'ip.settings.updated' => 'Na-update ang IP settings',
    'ip.settings.update_failed' => 'Nabigo ang pag-update: %s',

    // IP Page - Loading Status
    'ip.loading'=> 'Nilo-load ang IP Data...',

    // IP Page Actions
    'ip.actions'=> 'Mga Aksyon',

    // IP Page General Buttons
    'ip.buttons.new'=> 'Magdagdag',
    'ip.buttons.edit'=> 'I-edit',
    'ip.buttons.refresh'=> 'I-refresh',
    'ip.buttons.create'=> 'Lumikha',
    'ip.buttons.save'=> 'I-save',
    'ip.buttons.cancel'=> 'Kanselahin',
    'ip.buttons.enable'=> 'Enable',
    'ip.buttons.disable'=> 'Disable',
    'ip.buttons.remove'=> 'Remove',
    'ip.buttons.prev'=> 'Prev',
    'ip.buttons.next'=> 'Next',
    'ip.sort.by'=> 'Sort by',
    'ip.sort'=> 'Sort',
    'ip.select.all'=> 'Select All',
    'ip.buttons.flush.cache'=> 'Flush Cache',
    'ip.buttons.add.dns.server'=> 'Add DNS Server',


    // IP UPnP Page
    'ip.upnp.enabled'=> 'Enabled',
    'ip.upnp.allow-disable-external-iface'=> 'Allow disable external interface',
    'ip.upnp.show-dummy-rule'=> 'Show dummy rule',

    // arp.php
    // IP ARP Page

    // addresses.php
    // IP Addresses Page

    // IP Table Headers
    'ip.table.th.address'=> 'Address',
    'ip.table.th.network'=> 'Network',
    'ip.table.th.iface'=> 'Interface',
    'ip.table.th.comment'=> 'Comment',
    'ip.table.th.dhcp.client.name' => 'Name',
    'ip.table.th.dhcp.client.code-value' => 'Code Value',
    'ip.table.th.dhcp.client.client-value' => 'Client Value',
    'ip.table.th.dns.name'=> 'Name',
    'ip.table.th.dns.regexp'=> 'Regexp',
    'ip.table.th.dns.type'=> 'Type',
    'ip.table.th.dns.value'=> 'Value',
    'ip.table.th.dns.ttl'=> 'TTL',
    'ip.table.th.dns.data'=> 'Data',

    // IP Address Modal Titles
    'ip.modal.form.add.address'=> 'Add IP Address',
    'ip.modal.form.edit.address'=> 'Edit IP Address',

    // IP Address Modal Form
    'ip.modal.form.ip.address-mask'=> 'IP Address / Mask',
    'ip.modal.form.ip.network'=> 'Network',
    'ip.modal.form.iface'=> 'Interface',
    'ip.modal.form.comment'=> 'Comment',
    

    // cloud.php
    // IP Cloud Page

    // IP Cloud Modal Form
    'ip.cloud.enabled'=> 'DDNS Enabled',
    'ip.cloud.ddns.update.interval'=> 'DDNS Update Interval',
    'ip.cloud.update.time'=> 'Update Time',
    'ip.cloud.public.ipv4'=> 'Public IPv4',
    'ip.cloud.public.ipv6'=> 'Public IPv6',
    'ip.cloud.dns.name' => 'DNS Name',
    'ip.cloud.use-router-defaults'=> 'Use Router Defaults',
    'ip.cloud.yes'=> 'Yes',
    'ip.cloud.no'=> 'No',

    // dhcp-client.php
    // IP DHCP Client Page
    'ip.dhcp.client.options'=> 'DHCP Client',
    'ip.dhcp.client.modal.form.interface'=> 'Interface',
    'ip.dhcp.client.modal.form.enabled'=> 'Enabled',
    'ip.dhcp.client.modal.form.use-peer-dns'=> 'Use Peer DNS',
    'ip.dhcp.client.modal.form.use-peer-ntp'=> 'Use Peer NTP',
    'ip.dhcp.client.modal.form.add-default-route'=> 'Add Default Route',
    'ip.dhcp.client.modal.form.default-route-distance'=> 'Default Route Distance',
    'ip.dhcp.client.options2'=> 'DHCP Client Options',
    'ip.dhcp.client.modal.form.name'=> 'Name',
    'ip.dhcp.client.modal.form.code'=> 'Code',
    'ip.dhcp.client.modal.form.value'=> 'Value',

   
    // dns.php
    // IP DNS Page

    // IP DNS - Modal Form
    'ip.dns.form.servers'=> 'DNS Servers',
    'ip.dns.form.dynamic-servers'=> 'Dynamic Servers',
    'ip.dns.form.use.doh.servers'=> 'Use DoH Servers',
    'ip.dns.form.doh.max.server.conn'=> 'DoH Max Server Connections',
    'ip.dns.form.doh.max.concurrent.queries'=> 'DoH Max Concurrent Queries',
    'ip.dns.form.doh.timeout'=> 'DoH Timeout (seconds)',
    'ip.dns.form.allow-remote.requests'=> 'Allow Remote Requests',

    'ip.dns.form.cache.size'=> 'Cache Size (KB)',
    'ip.dns.form.cache.max-ttl'=> 'Cache Max TTL (seconds)',
    'ip.dns.form.cache.min-ttl'=> 'Cache Min TTL (seconds)',
    'ip.dns.form.max.concurrent.queries'=> 'Max Concurrent Queries',
    'ip.dns.form.max.concurrent.tcp'=> 'Max Concurrent TCP Connections',
    'ip.dns.form.query.timeout'=> 'Query Timeout (seconds)',
    'ip.dns.form.cache.used'=> 'Cache Used (read-only)',

    'ip.dns.form.add.static.entry'=> 'Add Static DNS Entry',
    'ip.dns.form.add.static.name'=> 'Name',
    'ip.dns.form.add.static.type'=> 'Type',
    'ip.dns.form.add.static.value'=> 'Value',
    'ip.dns.form.add.static.ttl'=> 'TTL',
    'ip.dns.form.add.static.regexp'=> 'Regexp',

    // IP DNS - Static DNS
    'ip.dns.static'=> 'Static DNS',
    'ip.dns.static.desc'=> 'Manage static DNS entries that override dynamic DNS resolution.',

    // IP DNS - Cache Settings
    'ip.dns.cache'=> 'DNS Cache Settings',

    // pool.php
    // IP Pool Page

    // IP Pool Table Headers
    'ip.pool.table.th.name'=> 'Name',
    'ip.pool.table.th.ranges'=> 'Ranges',
    'ip.pool.table.th.comment'=> 'Comment',
    'ip.pool.table.th.total-addresses'=> 'Total Addresses',
    'ip.pool.table.th.used'=> 'Used',
    'ip.pool.table.th.available'=> 'Available',

    // IP Pool Modal Form
    'ip.pool.modal.form.create.title'=> 'Create IP Pool',
    'ip.pool.modal.form.edit.title'=> 'Edit IP Pool',
    'ip.pool.modal.form.name'=> 'Name',
    'ip.pool.modal.form.ranges'=> 'Address Ranges',
    'ip.pool.modal.form.ranges-placeholder'=> 'e.g. 192.168.1.100-192.168.1.200 or 10.0.0.0/24',
    'ip.pool.modal.form.comment'=> 'Comment',
    'ip.pool.modal.form.next-address'=> 'Next Address',
    'ip.pool.modal.form.total-addresses'=> 'Total Addresses',
    'ip.pool.modal.form.used'=> 'Used',
    'ip.pool.modal.form.available'=> 'Available',

    // services.php
    // IP Services Page

    // IP Services Table Headers
    'ip.services.table.th.name'=> 'Name',
    'ip.services.table.th.port'=> 'Port',
    'ip.services.table.th.available-from'=> 'Available From',
    'ip.services.table.th.max-sessions'=> 'Max Sessions',
    'ip.services.table.th.protocol'=> 'Protocol',
    'ip.services.table.th.remote'=> 'Remote',
    'ip.services.table.th.local'=> 'Local',

    // IP Services Modal Form
    'ip.services.modal.form.edit.title'=> 'Edit IP Service',
    'ip.services.modal.form.name'=> 'Name',
    'ip.services.modal.form.port'=> 'Port',
    'ip.services.modal.form.available-from'=> 'Available From',
    'ip.services.modal.form.max-sessions'=> 'Max Sessions',
    'ip.services.modal.form.protocol'=> 'Protocol',
    'ip.services.modal.form.remote.address'=> 'Remote Address',
    'ip.services.modal.form.remote.port'=> 'Remote Port',
    'ip.services.modal.form.local.address'=> 'Local Address',

    // settings.php
    // IP Settings Page

    // IP Settings Modal Form
    'ip.settings.modal.form.ip-forward'=> 'IP Forwarding Enabled',
    'ip.settings.modal.form.ip-send-redirects'=> 'Send Redirects Enabled',
    'ip.settings.modal.form.ip-accept-redirects'=> 'Accept Redirects Enabled',
    'ip.settings.modal.form.ip-secure-redirects'=> 'Secure Redirects Enabled',
    'ip.settings.modal.form.ip-accept-source-route'=> 'Accept Source Route Enabled',
    'ip.settings.modal.form.ip-allow-fast-path'=> 'Allow Fast Path Enabled',
    'ip.settings.modal.form.ip-tcp-syncookies'=> 'TCP Syncookies Enabled',
    'ip.settings.modal.form.ip-tcp-timestamps'=> 'TCP Timestamps',
    'ip.settings.modal.form.ip-max-neighbors'=> 'Max Neighbors',
    'ip.settings.modal.form.ip-icmp-rate-limit'=> 'ICMP Rate Limit',
    'ip.settings.modal.form.ip-arp-timeout'=> 'ARP Timeout (seconds)',
    'ip.settings.modal.form.ip-arp-timeout-help'=> 'Enter RouterOS timeout format (e.g. 10m, 1h, or 00:10:00). Leave empty for default.',

    // Error pages
    'errors.404.title' => 'Hindi Natagpuan ang Pahina',
    'errors.404.desc' => 'Hindi matagpuan ang pahinang hiniling mo.',
    'errors.403.title' => 'Ipinagbabawal',
    'errors.403.desc' => 'Wala kang pahintulot na i-access ang resource na ito.',
    'errors.500.title' => 'Error sa Server',
    'errors.500.desc' => 'Nagkaroon ng internal na error sa server.',
    'errors.back_home' => 'Bumalik sa Homepage',
    'errors.more_info' => 'Ano ang nangyari',
    'errors.contact_admin' => 'Kung sa palagay mo ito ay isang error, makipag-ugnayan sa administrator ng site.',

]; 
