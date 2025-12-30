<?php
////////////////////////////////////////////////////////////////////////
// Cebuano translations for mTik_Ops                                                                                  
// Version: Next-Generation                                           
////////////////////////////////////////////////////////////////////////
return [
    // Start of Translations
    // Global
    'language-changed' => 'Nausab ang pinulongan ngadto sa {lang}',
    'language-search-placeholder' => 'Pangitaa...',

    // Global Search
    'search.title' => 'Pangita',
    'search.instructions' => 'Isulat ang usa ka pulong o hugpong sa mga pulong aron pangitaon ang site.',
    'search.results_header' => 'Mga resulta sa "{query}"',
    'search.placeholder' => 'Pagsugod sa pag-type...',
    'search.no_results' => 'Walay nadeskobrehan',
    'search.results' => 'Mga resulta',
    'search.button' => 'Pangita',
    'search.hint' => 'Isulat aron makita ang dali nga mga sugyot.',
    'search.quick_links' => 'Dali nga mga link',
    'search.show' => 'Ipakita ang Pangita',

    
    // Site title and tagline
    'site.title' => 'mTik_Ops', // DO NOT TRANSLATE
    'site.tagline' => 'Sentralisadong Pagdumala sa mga Router',

    // Authentication
    'nav.login' => 'Mag-log in',
    'nav.logout' => 'Mag-log out',
    'auth.logging_in' => 'Naga-log in',
    'auth.logging_out' => 'Naga-log out',
    'nav.quick_login' => 'Dali nga Pag-login',

    // nav-brand.php
    'nav.brand.user_greeting'=> 'Kumusta!',

    // nav.php
    'lang.label'=> 'Pinulongan',
    'nav.about' => 'Mahitungod',
    'nav.features' => 'Mga bahin',
    'nav.our_team' => 'Ang Aming Team',
    'nav.contact' => 'Kontak',
    'nav.menu' => 'Menu',
    'nav.dashboard' => 'Dashboard',
    'nav.hotspot' => 'Hotspot',
    'nav.ip' => 'IP',
    'nav.ppp' => 'PPP',
    'nav.queues' => 'Mga Queue',
    'nav.settings' => 'Mga Setting',
    'nav.downloads' => 'Downloads',

    // index.php
    // Index Page - About Section
    'about.title' => 'Gihimo para sa MikroTik',
    'about.desc' => 'Ang mTikOps usa ka plataporma sa browser alang sa pagdumala sa MikroTik routers ug hotspots. Naglakip kini og remote access, hotspot management — pag-print, PPPoE, ug uban pa. Tanan sa usa ka paspas nga sistema.',
    'about.about_us_button' => 'Mahitungod Kanato',
    'about.our_team_button' => 'Ang Aming Team',

    // Index Page - Features Section
    'features.remote.title' => 'Layo nga Pagdumala sa Network',
    'features.remote.desc' => 'I-monitor ug dumala ang layo nga mga router, tan-awa ang kahimtang sa interface, mag-reboot, ug i-push ang mga kausaban sa konfigurasyon nga segurado sa tibuok fleet gikan sa usa ka console.',
    'features.hotspot.title' => 'Pagdumala sa Hotspot',
    'features.hotspot.desc' => 'Paghimo ug pagdumala sa mga hotspot server ug user profile, mag-isyu og voucher, i-monitor ang mga aktibo nga tiggamit ug sesyon, ug maghimo sa accounting ug reporting.',
    'features.troubleshoot.title' => 'Pagtul-id ug Konfigurasyon',
    'features.troubleshoot.desc' => 'I-push ug i-audit ang mga kausaban sa konfigurasyon, padagana ang diagnostics, tan-awa ang mga log, ug sulbara ang mga problema sa konektividad gamit ang napasibo nga mga himan ug log.',

    // Index Page - Signup Section
    'signup.title' => 'Sugdi ang paggamit sa mTikOps',
    'signup.desc' => 'Paghimo og account aron dumalahan ang mga router, hotspots ug magpadagan og diagnostics sa imong network gikan sa usa ka dashboard.',
    'signup.cta' => 'Magparehistro',

    // Index Page - Contact Section
    'contact.hq' => 'HQ',
    'contact.email' => 'Email',
    'contact.contact' => 'Kontak',
    'contact.hq_address' => 'Taguig City, PH 1630',
    'contact.email_addr' => 'noc@mtikops.com',
    'contact.phone' => '+63 (962) 660-6116',

    // Index Page - Footer Section
    'footer.copyright' => 'Copyright &copy; mTikOps {year}',
    'footer.powered' => 'Gipatuyok sa HPY™',
    'modal.confirm.title' => 'Kumpirma',
    'modal.confirm.body' => 'Sigurado ka ba?',
    'modal.confirm.cancel' => 'Kanselahon',
    'modal.confirm.ok' => 'Kumpirma',

    // Login Page
    'login.title' => 'Mag-log in',
    'login.desc' => 'Sulod sa imong mTik_Ops account aron dumalahan ang MikroTik routers ug hotspots gikan sa sentralisadong dashboard.',
    'login.form.title' => 'Mag-log in sa Imong Account',
    'login.form.host'=> 'Host',
    'login.form.username'=> 'Ngalan sa Tiggamit',
    'login.form.password'=> 'Password',
    'login.form.connection_type'=> 'Tipo sa Koneksyon',
    'login.form.connection_type_yes'=> 'Secure API',
    'login.form.connection_type_no'=> 'Standard API',
    'login.form.connection_type_help'=> 'Gamita ang 8728 sa kadaghanan sa mga kaso gawas kon adunay ka espesyal nga rason nga gamiton ang 8729 (pananglitan kung ang SSL certificate gi-aplikar sa router).',
    'login.form.port'=> 'Port',
    'login.form.remember'=> 'Hinumdumi Ko',
    'login.form.connect'=> 'Konektar',
    'login.form.cancel'=> 'Kanselahon',

    // Login Page Placeholders
    'login.form.host_placeholder'=> 'IP sa Router o Hostname',
    'login.form.username_placeholder'=> 'Isulod ang imong ngalan sa tiggamit',
    'login.form.password_placeholder'=> 'Isulod ang imong password',
 // Login Page Messages
     'login.error.invalid_submission'=> 'Sayop ang pagsumite sa porma. Palihug sulayi pag-usab.',
     'login.error.missing_fields'=> 'Kinahanglan ang Host, Ngalan sa Tiggamit ug Password.',
     'login.error.unable_connect'=> 'Dili makakonekta! — Susihi ang imong mga kredensyal ug sulayi pag-usab.',
     'login.success.connected'=> 'Malampusong nakonektar sa router.',
     'login.success.remembered'=> 'Girecord ang detalye sa koneksyon para sa umaabot nga mga pag-login.',
     'login.info.session_expired'=> 'Nawagtang ang imong sesyon. Palihug pag-login pag-usab.',
     'login.info.logged_out'=> 'Malampusong naka-logout.',
     'login.info.please_login'=> 'Palihug pag-login aron magpadayon.',
     'login.button.forgot_password'=> 'Nakalimot sa Password?',
     'login.try_again'=> 'Sulayi pag-usab?',

    // Downloads Page
    'downloads.title' => 'Mga Download',
    'downloads.desc' => 'I-download ang mga installer ug package para sa mga suportadong platform.',
    'downloads.available' => 'Mga Available nga Download',
    'downloads.coming_soon' => 'Paabot sa Kaugmaon',
    'downloads.download' => 'I-download',
    'downloads.note' => 'I-upload ang mga installer ngadto sa folder /downloads aron mahimong available.',
    'downloads.changelog' => 'Tala sa mga kausaban',
    'downloads.changelog.loading' => 'Nag-load...',
    'downloads.changelog.no_file' => 'Walay tala sa mga kausaban para niini nga file.',

    // about-us.php
    // About Us Page
    'about-us.title' => 'Mahitungod Kanato',
    'about-us.desc' => 'Hibaloa pa ang bahin sa mTik_Ops, among misyon, ug ang team nga nagpaluyo sa plataporma.',
    'about-us.overview'=> 'Pangkalahatan',
    'about-us.vision'=> 'Panglantaw',
    'about-us.features'=> 'Mga bahin',
    'about-us.tutorials'=> 'Mga Tutorial',
    'about-us.faqs'=> 'FAQs',
    'about-us.requirements'=> 'Kinahanglanon',

    // about-us.php
    // About Us Page Descriptions
    'about-us.overview.desc'=> 'Mubo nga pasinabot sa mTikOps ug sa mga punoang kapasidad niini.',
    'about-us.vision.desc'=> 'Hibaloa ang among misyon ug dugay nga tumong para sa proyekto.',
    'about-us.features.desc'=> 'Tan-awa ang mga nag-unang bahin nga anaa sa mTikOps.',
    'about-us.tutorials.desc'=> 'Mga lakang-lakang nga giya ug pananglitan sa workflow.',
    'about-us.faqs.desc'=> 'Kasagarang mga pangutana ug tubag bahin sa mTikOps.',
    'about-us.requirements.desc'=> 'Mga kinahanglanon ug kompatibilidad sa RouterOS para sa pagdagan sa mTikOps.',

    // about-us.php
    // About Us Page Buttons
    'about-us.open.overview'=> 'Ablihi ang Pangkalahatan',
    'about-us.open.vision'=> 'Ablihi ang Panglantaw',
    'about-us.open.features'=> 'Ablihi ang Mga Bahin',
    'about-us.open.tutorials'=> 'Ablihi ang Mga Tutorial',
    'about-us.open.faqs'=> 'Ablihi ang FAQs',
    'about-us.open.requirements'=> 'Ablihi ang Kinahanglanon',

    // About Us - Back Button
    'about-us.back-to-about'=> 'Balik sa Mahitungod Kanato',

    // About Us - Overview Page
    'about-us.overview-page.title'=> 'Pangkalahatan',
    'about-us.overview-page.desc'=> 'Ang mTikOps usa ka magaan nga web plataporma alang sa pagdumala sa MikroTik routers ug hotspot services gikan sa browser.',

    // About Us - Vision Page
    'about-us.vision-page.title'=> 'Panglantaw',
    'about-us.vision-page.desc'=> 'Gitinguha namo nga pasayonon ang operasyon sa network para sa mga MikroTik user pinaagi sa usa ka sayon sabton nga interface ug mga himan sa awtomasyon.',

    // About Us - Features Page
    'about-us.features-page.title'=> 'Mga Bahin',
    'about-us.features-page.desc'=> 'Susiha ang mga punoang bahin sa mTikOps.',

    // About Us - Tutorials Page
    'about-us.tutorials-page.title'=> 'Mga Tutorial',
    'about-us.tutorials-page.desc'=> 'Mga giya ug paagi sa kasagarang buluhaton.',

    // About Us - FAQs Page
    'about-us.faqs-page.title'=> 'FAQs',
    'about-us.faqs-page.desc'=> 'Kasagaran pangutana ug tubag.',

    // About Us - Requirements Page
    'about-us.requirements-page.title'=> 'Kinahanglanon',
    'about-us.requirements-page.desc'=> 'Pinakamubo nga kinahanglanon ug tala sa kompatibilidad.',

    // our-team.php
    // Our Team Page
    'our-team.title'=> 'Ang Aming Team',
    'our-team.desc'=> 'Ilaila ang mga tawo nga nagpaluyo sa mTikOps — mga developer, contributors ug maintainers.',
    'our-team.leadership'=> 'Pamunoan',
    'our-team.developers'=> 'Mga Developer',
    'our-team.contributors'=> 'Mga Kontribyutor',
    'our-team.advisors'=> 'Mga Tigabay',
    'our-team.careers'=> 'Apil Kanamo',
    'our-team.contact'=> 'Kontak',

    // Our Team Page Descriptions
    'our-team.leadership.desc'=> 'Panguna nga mga maintainer ug mga lider sa proyekto nga nagpadagan sa mTikOps.',
    'our-team.developers.desc'=> 'Mga engineer ug mga kontribyutor nga nagmugna sa mga bahin ug pagsulbad sa mga isyu.',
    'our-team.contributors.desc'=> 'Mga kontribyutor sa komunidad nga tabang sa dokumentasyon, testing ug code.',
    'our-team.advisors.desc'=> 'Mga tigabay ug eksperto nga nagasuporta sa proyekto.',
    'our-team.careers.desc'=> 'Mga bakanteng posisyon ug paagi sa pag-apil sa team.',
    'our-team.contact.desc'=> 'Kontaka ang team alang sa mga pangutana o kolaborasyon.',

    // Our Team Page Buttons
    'our-team.open.leadership'=> 'Tan-awa ang Pamunoan',
    'our-team.open.developers'=> 'Tan-awa ang Mga Developer',
    'our-team.open.contributors'=> 'Tan-awa ang Mga Kontribyutor',
    'our-team.open.advisors'=> 'Tan-awa ang Mga Tigabay',
    'our-team.open.careers'=> 'Apil Kanamo',
    'our-team.open.contact'=> 'Kontaka ang Team',

    // Our Team - Back Button
    'our-team.back-to-team'=> 'Balik sa Aming Team',

    // Our Team - Leadership Page
    'our-team.leadership-page.title'=> 'Leadership',
    'our-team.leadership-page.desc'=> 'Meet the core maintainers and project leads behind mTikOps.',

    // Our Team - Developers Page
    'our-team.developers-page.title'=> 'Developers',
    'our-team.developers-page.desc'=> 'Mga profile ug responsibilidad sa mga developer nga nagkontribyut sa mTikOps.',

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
    'dashboard.desc'=> 'Monitoring ug Logging Suite para sa Network Operations',

    // Dashboard Buttons
    'dashboard.show'=> 'Ipakita ang Dashboard',
    'dashboard.button.refresh'=> 'I-refresh',
    'dashboard.button.prev'=> 'Miuna',
    'dashboard.button.next'=> 'Sunod',

    // Dashboard Network Monitoring
    'dashboard.monitoring.title'=> 'Pag-monitor sa Network',
    'dashboard.monitoring.desc'=> 'Real-time nga pag-monitor sa performance sa network, uptime, ug kahimtang sa device sa imong MikroTik infrastructure.',
    'dashboard.ltmg.title'=> 'Grapiko sa Real-time nga Trapiko',
    'dashboard.fullscreen'=> 'Tibuok Ekran',
    'dashboard.loading'=> 'Nag-load sa Data...',
    'dashboard.not-monitoring'=> 'Wala Gi-monitor',

    // Dashboard System Logging
    'dashboard.logging.title'=> 'Pag-log sa Sistema',
    'dashboard.logging.desc'=> 'Sentralisadong pag-log ug alerto para sa mga event sa sistema ug sayop',
    'dashboard.system.logs'=> 'Mga Log sa Sistema',
    'dashboard.critical.logs'=> 'Mga Kritikal nga Log',

    // Dashboard Device Information
    'dashboard.device.info.title'=> 'Impormasyon sa Device',
    'dashboard.system.resources'=> 'System Resources',
    'dashboard.system.information'=> 'System Information',
    'dashboard.system.platform'=> 'RouterBOARD Information',

    // Device info JS strings
    'device.system_identity' => 'Identity sa Sistema',
    'device.routeros_version' => 'Bersyon sa RouterOS',
    'device.uptime' => 'Oras nga Nagdagan',
    'device.board' => 'Board',
    'device.health' => 'Kahimsog',
    'device.temp_label' => 'Temperatura:',
    'device.voltage_label' => 'Boltage:',
    'device.unknown' => 'Wala mailhi',
    'device.na' => 'n/a',
    'device.cpu' => 'CPU',
    'device.memory' => 'Memorya',
    'device.disk' => 'Disk',
    'device.board_model' => 'Modelo sa Board',
    'device.serial' => 'Serial',
    'device.architecture' => 'Arkitektura',
    'device.cpu_label' => 'CPU',
    'device.cores' => 'Cores',
    'device.build' => 'Build',
    'device.failed_load' => 'Napakyas sa pag-load sa impormasyon sa system',
    // Generate users preview JS strings
    'generate.generating' => 'Nagahimo...',
    'generate.print_fetch_failed' => 'Napakyas pagkuha sa pag-print: %s',
    'generate.network_not_ok' => 'Dili maayong tubag gikan sa network: %s',
    'generate.generation_failed' => 'Napakyas ang paghimo: %s',
    'generate.unknown_error' => 'Wala mailhing sayop',
    'generate.preview_not_available' => 'Wala ang preview',
    'generate.failed_print_dialog' => 'Napakyas pagbukas sa native print dialog: %s',
    'generate.cached_cleared' => 'Gi-clear ang naka-cache nga batch',
    'generate.failed_clear_cached' => 'Napakyas pag-clear sa naka-cache nga batch',
    'generate.preview_failed' => 'Napakyas ang preview',
    'generate.preview' => 'Tan-awa',
    'generate.unexpected_error' => 'Walay gilauman nga sayop: %s',
    'generate.generated' => 'Nakahimo og %s ka tiggamit',
    'generate.request_failed' => 'Napakyas ang hangyo samtang nagahimo og mga voucher.',
    'generate.generate' => 'Himoa',

    // Dashboard Hotspot Active Sessions
    'dashboard.hotspot.as.title'=> 'Aktibong Hotspot nga Sesyon',
    'dashboard.ppp.as.title'=> 'Aktibong PPPoE nga Sesyon',
    // JS dashboard strings (used by client-side locale export)
    'dashboard.no_active_sessions' => 'Walay aktibong sesyon',
    'dashboard.no_ppp_active_sessions' => 'Walay aktibong PPP sesyon',
    'dashboard.active_session' => 'aktibong sesyon',
    'dashboard.active_sessions' => 'mga aktibong sesyon',
    'dashboard.name' => 'Ngalan',
    'dashboard.address' => 'Address',
    'dashboard.uptime' => 'Uptime',
    'dashboard.service' => 'Serbisyo',
    'dashboard.not_monitoring' => 'Wala Gi-monitor',
    'dashboard.more_format' => '... ug %d pa',
    'dashboard.unable_load_active' => 'Dili makarga ang aktibong mga sesyon',
    'dashboard.unable_load_ppp' => 'Dili makarga ang aktibong PPP nga mga sesyon',

    // hotspot.php
    // Hotspot Page
    'hotspot.title'=> 'Tagdumala sa Hotspot',
    'hotspot.desc'=> 'Dumala ang mga hotspot nga tiggamit, profile sa tiggamit, aktibong sesyon ug mga host.',
    'hotspot.users'=> 'Mga Tiggamit',
    'hotspot.profiles'=> 'Mga Profile',
    'hotspot.active'=> 'Aktibo',
    'hotspot.hosts'=> 'Mga Host',

    // Hotspot Page Descriptions
    'hotspot.users.desc'=> 'Paghimo, pag-edit ug pagdumala sa tagsa-tagsa nga hotspot user account.',
    'hotspot.profiles.desc'=> 'Dumala ang bandwidth, session ug rate-limit nga mga profile alang sa mga tiggamit.',
    'hotspot.active.desc'=> 'Tan-awa ug i-disconnect ang kasamtangang aktibong hotspot nga mga sesyon.',
    'hotspot.hosts.desc'=> 'Susiha ug dumala ang mga device nga nakakonektar sa hotspot.',

    // Hotspot Page Buttons
    'hotspot.open.users'=> 'Ablihi ang Mga Tiggamit',
    'hotspot.open.profiles'=> 'Ablihi ang Mga Profile',
    'hotspot.open.active'=> 'Ablihi ang Aktibo',
    'hotspot.open.hosts'=> 'Ablihi ang Mga Host',

    // Hotspot - Back Button
    'hotspot.back-to-hotspot'=> 'Balik sa Tagdumala sa Hotspot',

    // Hotspot General Buttons
    'hotspot.action.button'=> 'Mga Aksyon',
    'hotspot.generate.button'=> 'Himoa',
    'hotspot.add-user.button'=> 'Dugang Tiggamit',
    'hotspot.enable.button'=> 'I-enable',
    'hotspot.add-profile.button'=> 'Dugang Profile',
    'hotspot.edit.button'=> 'I-edit',
    'hotspot.remove.button'=> 'Kuhaa',
    'hotspot.disable.button'=> 'I-disable',
    'hotspot.export.users'=> 'I-export ang Mga Tiggamit',
    'hotspot.export.button'=> 'I-export',
    'hotspot.button.refresh'=> 'I-refresh',
    'hotspot.button.prev'=> 'Miuna',
    'hotspot.button.next'=> 'Sunod',
    'hotspot.sort.by'=> 'Isort pinaagi sa',
    'hotspot.sort.profiles'=> 'Isort pinaagi sa Profile',
    'hotspot.sort.comments'=> 'Isort pinaagi sa Komento',

    // Hotspot Table Headers
    'hotspot.table.th.select'=> 'Pili-a Tanan',
    'hotspot.table.th.server'=> 'Ngalan sa Server',
    'hotspot.table.th.user'=> 'Tiggamit',
    'hotspot.table.th.name'=> 'Ngalan',
    'hotspot.table.th.address'=> 'Address',
    'hotspot.table.th.mac'=> 'MAC Address',
    'hotspot.table.th.profile'=> 'Profile',
    'hotspot.table.th.uptime'=> 'Uptime',
    'hotspot.table.th.bytes-in'=> 'Bytes Sulod',
    'hotspot.table.th.bytes-out'=> 'Bytes Gawas',
    'hotspot.table.th.comment'=> 'Komento',
    'hotspot.table.th.to-address'=> 'Padulong nga Address',
    'hotspot.table.th.last-seen'=> 'Karon ang Nakita',
    'hotspot.status.loading'=> 'Nag-load sa Mga Tiggamit sa Hotspot...',

    // Hotspot JS: hosts, profiles, users, modals
    // Hosts list
    'hotspot.hosts.no_hosts' => 'Walay host',
    'hotspot.hosts.loading' => 'Nag-load...',
    'hotspot.hosts.failed_to_contact_api' => 'Napakyas sa pagkontak sa API',
    'hotspot.hosts.page_info' => 'Panid %s / %s (%s)',

    // Profiles list
    'hotspot.profiles.no_profiles' => 'Walay profile',
    'hotspot.profiles.loading' => 'Nag-load...',
    'hotspot.profiles.failed_to_load' => 'Napakyas sa pag-load sa mga profile',
    'hotspot.profiles.failed_to_contact_api' => 'Napakyas sa pagkontak sa API',
    'hotspot.profiles.no_pools' => '(walay pools)',
    'hotspot.profiles.no_queues' => '(walay queues)',
    'hotspot.profiles.no_types' => '(walay types)',
    'hotspot.profiles.select' => 'Pili-a...',
    'hotspot.profiles.default' => 'default',
    'hotspot.profiles.no_profiles_option' => '(walay profile)',
    'hotspot.profiles.page_info' => 'Panid %s / %s (%s)',
    'hotspot.profiles.name_required' => 'Kinahanglan ang ngalan',
    'hotspot.profiles.added' => 'Nadugang ang profile',
    'hotspot.profiles.add_failed' => 'Napakyas pagdugang sa profile: %s',
    'hotspot.profiles.server_contact_failed' => 'Napakyas sa pagkontak sa server',
    'hotspot.profiles.id_missing' => 'Wala ang profile id',
    'hotspot.profiles.updated' => 'Na-update ang profile',
    'hotspot.profiles.update_failed' => 'Napakyas pag-update sa profile: %s',
    'hotspot.profiles.removed' => 'Gikuha ang profile',
    'hotspot.profiles.remove_failed' => 'Napakyas pagtangtang sa profile: %s',
    'hotspot.profiles.select_remove' => 'Pili-a ang profile nga tangtangon',
    'hotspot.profiles.remove_confirm' => 'Sigurado ka ba nga gusto nimong tangtangon ang napiling profile?',
    'hotspot.profiles.remove_confirm_title' => 'Kumpirma',
    
    // Admin Control Panel translations
    'admin.title' => 'Panel sa Administrasyon',
    'admin.desc' => 'Sentro sa Kontrol sa Misyon',
    'admin.maintenance' => 'Maintenance',
    'admin.maintenance.desc' => 'I-toggle ang site-wide maintenance notice para sa mga bisita.',
    'admin.page_access' => 'Pagkontrol sa Access sa Panid',
    'admin.page_access.desc' => 'Tugoti o dili tugoti ang mga tiggamit nga maka-access sa tibuok seksyon sa app.',
    'admin.view_logs' => 'Tan-awa ang Logs',
    'admin.logs.title' => 'Admin Access Logs',
    'admin.save' => 'I-save',
    'admin.saved' => 'Nasulod',
    'admin.save_failed' => 'Napakyas ang pag-save',
    'admin.save_error' => 'Napakyas sa pag-save sa mga setting',
    'admin.load_logs_failed' => 'Napakyas sa pag-load sa mga log',
    'admin.access_denied' => 'Wala ka’y permiso sa pag-access sa Admin Control Panel.',
    'access.restricted.title' => 'Gipugngan ang Access',
    'access.restricted.desc' => 'Kini nga seksyon kasamtangang gi-disable',
    'admin.section_disabled' => 'Seksyon gi-disable sa admin',
    'nav.disabled' => 'Gi-disable',
    // Maintenance toggle JS strings
    'maintenance.toast' => 'Maintenance Mode' . '<br/><br/>' . 'Ang mga function limitado samtang naka-enable ang maintenance mode.',
    'maintenance.update_toast' => 'Mode sa Pag-update sa Sistema' . '<br/><br/>' . 'Nagpadayon ang mga pag-update sa sistema. Ang pipila ka mga feature mahimong dili magamit.',
    'maintenance.set_failed' => 'Napakyas sa pag-set sa estado sa Maintenance Mode',

    // Users modals and export
    'hotspot.modals.no_servers' => '(walay servers)',
    'hotspot.modals.no_profiles' => '(walay profiles)',
    'hotspot.modals.please_select_export' => 'Palihug pili-a ang usa o labaw pa ka tiggamit aron i-export',
    'hotspot.modals.select_at_least_one_field' => 'Pilia bisan usa ka field aron i-export',
    'hotspot.modals.no_users_selected' => 'Walay napiling tiggamit',
    'hotspot.modals.no_data_to_export' => 'Walay data nga i-export',
    'hotspot.modals.export_started' => 'Nagsugod ang pag-export',
    'hotspot.modals.export_failed' => 'Napakyas ang pag-export',
    'hotspot.modals.add_user_title' => 'Dugang Hotspot User',
    'hotspot.modals.edit_user_title' => 'I-edit ang Hotspot User',
    'hotspot.modals.create_button' => 'Paghimo',
    'hotspot.modals.update_button' => 'I-update',
    'hotspot.modals.failed_load_user' => 'Napakyas sa pag-load sa datos sa tiggamit',
    'hotspot.modals.select_one_to_edit' => 'Palihug pili-a ang eksaktong usa ka tiggamit aron i-edit',
    'hotspot.modals.user_updated' => 'Na-update ang tiggamit',
    'hotspot.modals.user_created' => 'Nakahimo og tiggamit',
    'hotspot.modals.create_update_failed' => 'Napakyas ang paghimo/pag-update',
    'hotspot.modals.create_request_failed' => 'Napakyas ang create request',

    // Users list
    'hotspot.users.no_users' => 'Walay tiggamit',
    'hotspot.users.loading' => 'Nag-load...',
    'hotspot.users.empty_response' => 'Walay sulod ang tubag',
    'hotspot.users.failed_to_contact_api' => 'Napakyas sa pagkontak sa API',
    'hotspot.users.select_one_or_more' => 'Palihug pili-a ang usa o daghan pa ka tiggamit.',
    'hotspot.users.remove_confirm' => 'Tangtangon ang napiling mga tiggamit? Dili na kini mabawi.',
    'hotspot.users.action_completed' => 'Aksyon "%s" nahuman. Malampuson: %s/%s',
    'hotspot.users.action_failed' => 'Napakyas ang aksyon: %s',
    'hotspot.users.request_failed' => 'Napakyas ang hangyo',
    'hotspot.users.sort_profiles' => 'Isort ang Mga Profile',
    'hotspot.users.sort_comments' => 'Isort ang Mga Komento',
    'hotspot.users.select_profiles_placeholder' => 'Isort ang Mga Profile',
    'hotspot.users.select_comments_placeholder' => 'Isort ang Mga Komento',

    // Hotspot JS helper strings
    'hotspot.no_active_entries' => 'Walay aktibong entry',
    'hotspot.loading' => 'Nag-load...',
    'hotspot.failed_to_contact_api' => 'Napakyas sa pagkontak sa API',
    'hotspot.page_info' => 'Panid %s / %s (%s)',

    // Hotspot Modal Tabs and Titles
    'hotspot.modal.title.generate'=> 'Paghimo sa Mga Tiggamit / Voucher',
    'hotspot.modal.general.tab'=> 'Kinauyokan',
    'hotspot.modal.printing.tab'=> 'Pag-print',
    'hotspot.modal.stats.tab'=> 'Estadistika',
    'hotspot.modal.queueing.tab'=> 'Pag-queue',
    'hotspot.modal.scripts.tab'=> 'Mga Script',

    // Hotspot Modal Form Generate / Add User - General Tab
    'hotspot.modal.form.qty'=> 'Kantidad',
    'hotspot.modal.form.server'=> 'Hotspot Server',
    'hotspot.modal.form.qty.help'=> 'Gidaghanon sa mga voucher / token code nga pagahimoon.',
    'hotspot.modal.form.username'=> 'Ngalan sa Tiggamit',
    'hotspot.modal.form.password'=> 'Password',
    'hotspot.modal.form.user-type'=> 'Tipo sa Tiggamit',
    'hotspot.modal.form.user-type.help'=> 'Username & Password - Mughimo og random username ug lahi nga password (para sa regular user login).<br/>Username = Password - Mughimo og random username nga pareho ang password (para sa voucher).',
    'hotspot.modal.form.code-length'=> 'Gitas-on sa Code',
    'hotspot.modal.form.characters'=> 'Mga karakter',
    'hotspot.modal.form.user-profile'=> 'User Profile',
    'hotspot.modal.form.comment'=> 'Komento',
    'hotspot.modal.form.optional-comment'=> 'Opsyonal nga Komento',
    'hotspot.modal.form.mac-address'=>  'MAC Address',
    'hotspot.modal.form.time-limit'=>  'Gitas-on sa Oras',
    'hotspot.modal.form.time-limit.help'=> 'Mga dawaton nga format:<br/>m - Minuto<br/>h - Oras<br/>d - Adlaw<br/><br/>I-disable ang tiggamit kung maabot ang limit sa oras.<br/><br/>Mga Nota:<br/>1. Kung ang Limit sa Oras ug Limit sa Data pareho nga gitakda, i-disable ang tiggamit kung maabot ang bisan usa sa mga limit.<br/>2. Kung wala’y bisan usa ka limit nga gitakda, magpabilin nga aktibo ang tiggamit hangtod kini manu-mano i-disable o tangtangon.<br/>3. Ang Limit sa Oras ug Limit sa Data puwede gamiton kauban aron mas kontrolado ang mga sesyon sa tiggamit.<br/>4. Siguraduhang husto ang format aron malikayan ang mga sayop sa paghimo sa tiggamit.<br/>5. Mga pananglitan: 30m (30 ka minuto), 2h (2 ka oras), 1d (1 ka adlaw).',
    'hotspot.modal.form.data-limit'=>  'Limit sa Data',
    'hotspot.modal.form.data-limit.help'=> 'Mga dawaton nga format:<br/>M - Megabit<br/>G - Gigabit<br/><br/>I-disable ang tiggamit kung maabot ang limit sa data.<br/><br/>Mga Nota:<br/>1. Kung ang Limit sa Oras ug Limit sa Data pareho nga gitakda, i-disable ang tiggamit kung maabot ang bisan usa sa mga limit.<br/>2. Kung wala’y bisan usa ka limit nga gitakda, magpabilin nga aktibo ang tiggamit hangtod kini manu-mano i-disable o tangtangon.<br/>3. Ang Limit sa Oras ug Limit sa Data puwede gamiton kauban aron mas kontrolado ang mga sesyon sa tiggamit.<br/>4. Siguraduhang husto ang format aron malikayan ang mga sayop sa paghimo sa tiggamit.<br/>5. Mga pananglitan: 500M (500 Megabit), 2G (2 Gigabit).',

    // Hotspot Modal Form Generate - Printing Tab
    'hotspot.modal.form.hotspot-name'=> 'Ngalan sa Hotspot',
    'hotspot.modal.form.hotspot-dns'=> 'DNS',
    'hotspot.modal.form.hotspot-currency'=> 'Salapi',
    'hotspot.modal.form.hotspot-select-currency'=> 'Pilia ang Salapi',
    'hotspot.modal.form.hotspot-price'=> 'Presyo',
    'hotspot.modal.form.hotspot-include-comment'=> 'Apil ang Komento',
    'hotspot.modal.form.hotspot-include-comment-desc'=> 'Apili ang gihimong komento sa gi-print nga voucher',
    'hotspot.modal.form.hotspot-template'=> 'Template',

    // Hotspot Modal Form Generate - Printing Placeholders
    'hotspot.modal.form.hotspot-name-placeholder'=> 'Ang Akong Hotspot',
    'hotspot.modal.form.hotspot-dns-placeholder'=> 'hotspot.mtikops.com',
    'hotspot.modal.form.hotspot-price-placeholder'=> 'Presyo Kada Voucher',

    // Hotspot Modal Form Generate - User-Type
    'hotspot.modal.form.user-type-regular'=> 'Ngalan sa Tiggamit & Password',
    'hotspot.modal.form.user-type-voucher'=> 'Ngalan sa Tiggamit = Password',

    // Hotspot Modal Form Generate - Characters
    'hotspot.modal.form.characters-lower'=> 'abcd (mubo nga letra)',
    'hotspot.modal.form.characters-upper'=> 'ABCD (DAGKONG LETRA)',
    'hotspot.modal.form.characters-mixed'=> 'AbCd (Halo)',
    'hotspot.modal.form.characters-num'=> '1234 (Numero)',
    'hotspot.modal.form.characters-lower-num'=> 'a1b2 (mubo nga letra & Numero)',
    'hotspot.modal.form.characters-upper-num'=> 'A1B2 (DAGKONG LETRA & Numero)',
    'hotspot.modal.form.characters-mixed-num'=> 'aA1bB2 (Halo & Numero',

    // Hotspot Modal Form Stats - Stats Tab
    'hotspot.modal.form.stats.uptime'=> 'Uptime',
    'hotspot.modal.form.stats.bytes_in'=> 'Bytes Sulod',
    'hotspot.modal.form.stats.bytes_out'=> 'Bytes Gawas',
    'hotspot.modal.form.stats.limit-uptime'=> 'Limit sa Uptime',
    'hotspot.modal.form.stats.limit-bytes_total'=> 'Limit sa Total nga Bytes',
    'hotspot.modal.form.stats.user-code'=> 'User Code',
    'hotspot.modal.form.stats.expire-date'=> 'Petsa sa Pag-expire',

    // Hotspot Modal Form Misc
    'hotspot.modal.form.loading' => 'Nag-load sa data...',

    // Hotspot Modal Form Buttons
    'hotspot.modal.form.button.generate-print'=> 'Himoa & I-print',
    'hotspot.modal.form.button.generate'=> 'Himoa Lang',
    'hotspot.modal.form.button.clear-cached-batch'=> 'I-clear ang Cached Batch',
    'hotspot.modal.form.button.close'=> 'Isara',
    'hotspot.modal.form.button.create'=> 'Paghimo',
    'hotspot.modal.form.button.cancel'=> 'Kanselahon',

    // profiles.php
    // Hotspot User Profiles Page
    'hotspot.user.profiles.title'=> 'Mga Profile',
    'hotspot.user.profiles.desc'=> 'Dumala ang bandwidth, session ug rate-limit nga mga profile alang sa mga tiggamit.',

    // Hotspot User Profiles Table Headers
    'hotspot.user.profiles.th.name'=> 'Ngalan',
    'hotspot.user.profiles.th.shared-users'=> 'Gipaambit nga Tiggamit',
    'hotspot.user.profiles.th.rate-limit'=> 'Rate Limit',
    'hotspot.user.profiles.th.idle-timeout'=> 'Idle Timeout',
    'hotspot.user.profiles.th.keepalive-timeout'=> 'Keepalive Timeout',
    'hotspot.user.profiles.th.queue-type'=> 'Queue Type',

    // Hotspot User Profiles Modal Form
    'hotspot.user.profiles.modal.title.add-profile'=> 'Dugang Profile',

    // Hotspot User Profile Form Fields - General Tab
    'hotspot.user.profiles.form.name'=> 'Ngalan sa Profile',
    'hotspot.user.profiles.form.pool'=> 'Pool sa Address',
    'hotspot.user.profiles.form.rate-limit-rx'=> 'Rate Limit (RX)',
    'hotspot.user.profiles.form.rate-limit-tx'=> 'Rate Limit (TX)',
    'hotspot.user.profiles.form.shared-users'=> 'Gipaambit nga Tiggamit',
    'hotspot.user.profiles.form.expiry-mode'=> 'Paagi sa Pag-expire',
    'hotspot.user.profiles.form.expiry-duration'=> 'Gidugayon sa Pag-expire',
    'hotspot.user.profiles.form.lock-device'=> 'I-lock sa Device',
    'hotspot.user.profiles.form.lock-server'=> 'I-lock sa Server',
    'hotspot.user.profiles.form.comment'=> 'Komento',

    // Expiry Mode Options
    'hotspot.user.profiles.form.expiry-mode_none'=> 'Wala',
    'hotspot.user.profiles.form.expiry-mode_remove'=> 'Kuhaa',
    'hotspot.user.profiles.form.expiry-mode_notice'=> 'Pahibalo',
    'hotspot.user.profiles.form.expiry-mode_remove_record'=> 'Kuhaa ug Irekord',
    'hotspot.user.profiles.form.expiry-mode_remove_notice'=> 'Kuhaa ug Pahibalo',
    'hotspot.user.profiles.form.expiry-mode_help'=> 'Pilia kung giunsa pagdumala ang pag-expire sa user alang niining profile.<br/><br/>Mga Kapilian:<br/>Wala - Walay pag-expire.<br/>Kuhaa - Awtomatik nga tangtangon ang user sa pag-expire.<br/>Pahibalo - Ipahibalo ang user sa pag-expire apan dili tangtangon.<br/>Kuhaa ug Irekord - Kuhaa ang user ug irekord ang panghitabo.<br/>Pahibalo ug Kuhaa - Pahibaloha ang user unya kuhaa sa pag-expire.',

    // Hotspot User Profile Form Fields - Queue Tab
    'hotspot.user.profiles.form.parent-queue'=> 'Parent Queue',
    'hotspot.user.profiles.form.queue-type'=> 'Queue Type',

    // Hotspot User Profiles Form Fields - Scripts Tab
    'hotspot.user.profiles.form.on-login-script'=> 'Script sa Pag-login',
    'hotspot.user.profiles.form.on-login-script_placeholder'=> 'Opsyonal nga script pag-login',
    'hotspot.user.profiles.form.on-logout-script'=> 'Script sa Pag-logout',
    'hotspot.user.profiles.form.on-logout-script_placeholder'=> 'Opsyonal nga script pag-logout',

    // Hotspot User Profile Modal - Edit Profile
    'hotspot.user.profile.edit'=> 'I-edit ang Profile',
    'hotspot.user.profile.select.profile'=> 'Pili-a ang Profile',
    'hotspot.user.profile.select.profile.desc'=> 'Pilia ang profile nga i-edit. Human pagpili mohimo ang bug-os nga editor.',
    'hotspot.user.profile.button.cancel'=> 'Kanselahon',
    'hotspot.user.profile.button.save'=> 'I-save',

    // Hotspot User Profile Modal - Remove Profile
    'hotspot.user.profiles.remove'=> 'Kuhaa ang Profile',
    'hotspot.user.profiles.remove-select'=> 'Pili-a ang Profile nga Kuhaon',
    'hotspot.user.profiles.remove-warning'=> 'Dili na kini mabawi. Siguradoha nga gusto nimo kuhaon ang napiling profile.',
    'hotspot.user.profiles.remove.button-cancel'=> 'Kanselahon',
    'hotspot.user.profiles.remove.button-remove'=> 'Kuhaa',

    // Hotspot Export Users Modal
    'hotspot.export.user.desc'=> 'Pilia ang mga field nga i-apil sa export. Mga napiling tiggamit ra ang i-export.',
    'hotspot.export.user.name'=> 'Ngalan',
    'hotspot.export.user.price'=> 'Presyo',
    'hotspot.export.user.password'=> 'Password',
    'hotspot.export.user.profile'=> 'Profile',
    'hotspot.export.user.comment'=> 'Komento',
    'hotspot.export.user.inc-header'=> 'Apili ang Headers',
    'hotspot.export.user.column-order'=> 'Han-ay sa Column',
    'hotspot.export.user.column-up'=> 'I-alsa',
    'hotspot.export.user.column-down'=> 'I-ubos',
    'hotspot.export.user.column-desc'=> 'Pilia ang usa ka field ug gamita ang I-alsa/I-ubos aron usbon ang han-ay sa column.',
    'hotspot.export.user.button-cancel'=> 'Kanselahon',
    'hotspot.export.user.button-download'=> 'I-download ang CSV',
    'hotspot.export.user.button-move-up'=> 'Ibalhin Pataas',
    'hotspot.export.user.button-move-down'=> 'Ibalhin Pababa',
    'hotspot.export.user.column-order-desc'=> 'Pilia ang usa ka field ug gamita ang mga buton nga Ibalhin Pataas/Pababa aron usbon ang han-ay sa mga kolum.',

    // Hotspot Print Preview Modal
    'hotspot.print.preview.title'=> 'Preview sa Pag-print',
    'hotspot.print.preview.desc'=> 'Tan-awa ang napiling mga tiggamit sa wala pa pag-print.',
    'hotspot.print.preview.button-cancel'=> 'Kanselahon',
    'hotspot.print.preview.button-close'=> 'Isara',
    'hotspot.print.preview.button-print'=> 'I-save & I-print',
    

    // active.php
    // Hotspot Active Sessions Page

    // hosts.php
    // Hotspot Hosts Page

    // settings.php
    // Hotspot Settings Page
    'settings.title'=> 'Mga Setting',
    'settings.desc'=> 'I-configure ang identity sa device, system services ug mga aksyon sa maintenance.',
    'settings.identity'=> 'Identity',
    'settings.ntp'=> 'NTP',
    'settings.files'=> 'Mga File',
    'settings.users'=> 'Mga Tiggamit',
    'settings.scheduler'=> 'Scheduler',
    'settings.scripts'=> 'Mga Script',
    'settings.reset'=> 'Reset',
    'settings.reboot'=> 'Reboot',
    'settings.shutdown'=> 'Shutdown',

    // Settings Page Buttons
    //'settings.open.identity'=> 'Open Identity',
    //'settings.open.ntp'=> 'Open NTP',
    'settings.open.files'=> 'Ablihi ang Mga File',
    'settings.open.users'=> 'Dumala ang Mga Tiggamit',
    'settings.open.scheduler'=> 'Ablihi ang Scheduler',
    'settings.open.scripts'=> 'Ablihi ang Mga Script',
    //'settings.open.reset'=> 'Reset',
    //'settings.open.reboot'=> 'Reboot',
    //'settings.open.shutdown'=> 'Shutdown',

    // SETTINGS GENERAL BUTTONS
    'settings.buttons.upload'=> 'I-upload',
    'settings.buttons.delete'=> 'I-delete',
    'settings.buttons.refresh'=> 'I-refresh',
    'settings.buttons.save'=> 'I-save',
    'settings.buttons.cancel'=> 'Kanselahon',
    'settings.buttons.close'=> 'Isara',
    'settings.buttons.edit'=> 'I-edit',
    'settings.buttons.add'=> 'Dugang',
    'settings.buttons.remove'=> 'Kuhaa',
    'settings.buttons.prev'=> 'Miuna',
    'settings.buttons.next'=> 'Sunod',
    'settings.sort.by'=> 'Isort pinaagi sa',
    'settings.sort' => 'Isort',

    // Settings Page - Back Button
    'settings.back-to-settings'=> 'Balik sa Mga Setting',

    // Settings Page - Actions
    'settings.actions'=> 'Mga Aksyon',

    // Settings Page - Loading
    'settings.loading'=> 'Nag-load sa Mga Setting...',

    // Settings Page Descriptions
    'settings.identity.desc'=> 'Tan-awa ug i-edit ang identity sa device ug batakang impormasyon sa system.',
    'settings.ntp.desc'=> 'I-configure ang network time protocol (NTP) settings alang sa tukma nga oras.',
    'settings.files.desc'=> 'Dumala ang na-upload nga mga file ug mga script nga naka-store sa device.',
    'settings.users.desc'=> 'Dumala ang mga system user ug ilang mga katungod sa access.',
    'settings.scheduler.desc'=> 'Paghimo og mga naka-schedule nga buluhaton alang sa maintenance ug awtomasyon.',
    'settings.scripts.desc'=> 'Dumala ug padagana ang custom nga mga script sa device.',
    'settings.reset.desc'=> 'I-reset ang konfigurasyon ngadto sa default. Gamita uban ang pag-amping.',
    'settings.reboot.desc'=> 'I-restart ang device remotely. Siguraduha nga nasave ang tanan nga kausaban una mag-reboot.',
    'settings.shutdown.desc'=> 'I-shutdown ang device remotely ug luwas. Gamita uban ang pag-amping.',

    // Settings Table Headers
    'settings.table.th.name'=> 'Ngalan',
    'settings.table.th.group'=> 'Grupo',
    'settings.table.th.last-login'=> 'Kahuman sa Pag-login',
    'settings.table.th.comment'=> 'Komento',
    'settings.table.th.role'=> 'Role',
    'settings.table.th.select'=> 'Pili-a Tanan',
    'settings.table.th.username'=> 'Ngalan sa Tiggamit',
    'settings.table.th.password'=> 'Password',
    'settings.table.th.actions'=> 'Mga Aksyon',
    'settings.table.th.next-run'=> 'Sunod nga Daganan',
    'settings.table.th.interval'=> 'Interval',
    'settings.table.th.enabled'=> 'Gi-enable',
    'settings.table.th.size'=> 'Gitas-on',
    'settings.table.th.owner'=> 'Tag-iya',
    'settings.table.th.date'=> 'Petsa',

   
    // Settings Page - Identity
    'settings.identity.placeholder'=> 'Isulod ang identity sa system',
    'settings.identity.caption'=> 'Mao kini ang ngalan nga makita sa mga log ug network identification.',

    // Settings Page - Identity Buttons
    'settings.identity.save'=> 'I-save ang Identity',
    'settings.identity.refresh'=> 'I-refresh',

    // Settings Page - NTP Modal
    'settings.ntp.enabled'=> 'Gi-enable',
    'settings.ntp.enabled-yes'=> 'Gi-enable',
    'settings.ntp.enabled-no'=> 'Dili Gi-enable',
    'settings.ntp.mode'=> 'Modo',
    'settings.ntp.mode-broadcast'=> 'Broadcast',
    'settings.ntp.mode-manycast'=> 'Manycast',
    'settings.ntp.mode-multicast'=> 'Multicast',
    'settings.ntp.mode-unicast'=> 'Unicast',
    'settings.ntp.server'=> 'NTP Servers',
    'settings.ntp.server-add'=> 'Dugang Server',
    'settings.ntp.server-refresh'=> 'I-refresh',
    'settings.ntp.server-save'=> 'I-save',

    // Settings Page - NTP Status
    'settings.ntp.status'=> 'Status',
    'settings.ntp.freq.drift'=> 'Frequency Drift',
    'settings.ntp.synced.server'=> 'Synced Server',
    'settings.ntp.synced.stratum'=> 'Synced Stratum',
    'settings.ntp.system.offset'=> 'System Offset',

    // Settings Page - Files
    'settings.files.title'=> 'Tagdumala sa Mga File',
    'settings.files.desc'=> 'I-upload, i-download ug dumala ang mga file nga naka-store sa device.',


    // Settings Page - Users
    'settings.users.title'=> 'Tagdumala sa Mga Tiggamit',
    'settings.users.desc'=> 'Paghimo, pag-edit ug pagdumala sa mga system user ug ilang mga katungod sa access.',

    // Settings Page - Scheduler
    'settings.scheduler.title'=> 'Scheduler',
    'settings.scheduler.desc'=> 'Paghimo ug pagdumala sa mga naka-schedule nga buluhaton alang sa maintenance ug awtomasyon.',

    // Settings Page - Scripts
    'settings.scripts.title'=> 'Mga Script',
    'settings.scripts.desc'=> 'Paghimo, pag-edit ug pagdagan sa custom nga mga script sa device.',

    // Settings Page - Reset
    // Reset Modal
    'settings.reset.type'=> 'Tipo sa Reset',
    'settings.reset.config'=> 'I-reset ang Konfigurasyon (panag-iya ang user files)',
    'settings.reset.all'=> 'Factory Reset (i-erase tanan, i-reload ang defaults)',
    'settings.reset.delay'=> 'Paglangan (segundo)',
    'settings.reset.delay.desc'=> 'I-set sa 0 aron buhaton dayon kung gamiton ang Schedule button, o i-klik ang "Reset Now" aron patuman dayon.',

    //Reset Buttons
    'settings.reset.button.schedule'=> 'I-schedule ang Reset',
    'settings.reset.button.reset-now'=> 'I-reset Karon',

    // Settings Page - Reboot
    // Reboot Modal
    'settings.reboot.delay'=> 'Paglangan (segundo)',
    'settings.reboot.delay.desc'=> 'I-set sa 0 aron i-reboot dayon kung gamiton ang Schedule button, o i-klik ang "Reboot Now" aron pwersahon ang dayon nga reboot.',

    // Reboot Buttons
    'settings.reboot.button.schedule'=> 'I-schedule ang Reboot',
    'settings.reboot.button.reboot-now'=> 'I-reboot Karon',

    // Settings Page - Shutdown
    // Shutdown Modal
    'settings.shutdown.delay'=> 'Paglangan (segundo)',
    'settings.shutdown.delay.desc'=> 'I-set sa 0 aron i-shutdown dayon kung gamiton ang Schedule button, o i-klik ang "Shutdown Now" aron pwersahon ang dayon nga shutdown.',

    // Shutdown Buttons
    'settings.shutdown.button.schedule'=> 'I-schedule ang Shutdown',
    'settings.shutdown.button.shutdown-now'=> 'I-shutdown Karon',


    // queues.php
    // Queues Page
    'queues.title'=> 'Tagdumala sa Mga Queue',
    'queues.desc'=> 'Dumala ang Simple queues, Tree queues ug Queue Types.',

    'queues.simple'=> 'Simple',
    'queues.tree'=> 'Tree',
    'queues.types'=> 'Types',
    'queues.simple-queue'=> 'Simple Queues',
    'queues.queue-tree'=> 'Queue Trees',
    'queues.queue-types'=> 'Queue Types',

    // Queues Page Descriptions
    'queues.simple.desc'=> 'Paghimo ug pagdumala sa simple per-host/per-target nga mga queue.',
    'queues.tree.desc'=> 'Dumala ang hierarchical nga queue trees alang sa advanced traffic shaping.',
    'queues.types.desc'=> 'Pag-definir ug pagdumala sa queue types ug packet classifiers.',

    // Queues Page Buttons
    'queues.open.simple'=> 'Ablihi ang Simple Queue',
    'queues.open.tree'=> 'Ablihi ang Queue Tree',
    'queues.open.types'=> 'Ablihi ang Queue Types',

    // Queues Page - Back Button
    'queues.back-to-queues'=> 'Balik sa Tagdumala sa Mga Queue',

    // Queues General Buttons
    'queues.button.new'=> 'Bag-o',
    'queues.button.edit'=> 'I-edit',
    'queues.button.enable'=> 'I-enable',
    'queues.button.disable'=> 'I-disable',
    'queues.button.remove'=> 'Kuhaa',
    'queues.button.refresh'=> 'I-refresh',
    'queues.button.pause-polling'=> 'I-pausa ang Polling',
    'queues.sort.by'=> 'Isort pinaagi sa',
    'queues.sort'=> 'Isort',
    'queues.select.all'=> 'Pili-a Tanan',
    'queues.button.prev'=> 'Miuna',
    'queues.button.next'=> 'Sunod',
    'queues.button.save'=> 'I-save',
    'queues.button.cancel'=> 'Kanselahon',
    'queues.button.create'=> 'Paghimo',


    // Queues Loading Status
    'queues.status.loading'=> 'Nag-load sa Queues...',

    // simple.php
    // Simple Queues Page


    // Simple Queues Action Buttons
    'queues.simple.actions'=> 'Mga Aksyon',
    'queues.simple.actions.desc'=> 'Paghimo og mga aksyon sa napiling mga queue.',

    // Queues Table Headers
    'queues.table.th.name'=> 'Ngalan',
    'queues.table.th.number'=> 'Numero',
    'queues.table.th.target'=> 'Target',
    'queues.table.th.upload-limit'=> 'Upload Limit',
    'queues.table.th.download-limit'=> 'Download Limit',
    'queues.table.th.download-avg-rate'=> 'Average Download Rate',
    'queues.table.th.max-limit'=> 'Max Limit',
    'queues.table.th.queue-type'=> 'Queue Types',
    'queues.table.th.limit-at'=> 'Limit Sa',
    'queues.table.th.bytes'=> 'Bytes',
    'queues.table.th.avg.rate'=> 'Average Rate',
    'queues.table.th.kind'=> 'Klase',

    // Queues Modal Form - Tabs
    'queues.tab.main'=> 'Main',
    'queues.tab.advanced'=> 'Advanced',
    'queues.tab.queueing'=> 'Pag-queue',

    // Queues Modal Form Tab
    'queues.modal.form.new.simple'=> 'Bag-ong Simple Queue',
    'queue.modal.form.edit.simple'=> 'I-edit ang Simple Queue',
    'queues.modal.form.enabled'=> 'Gi-enable',
    'queues.modal.form.name'=> 'Ngalan',
    'queues.modal.form.target'=> 'Target',
    'queues.modal.form.target-select-iface'=> 'Pili-a ang Interface',
    'queues.modal.form.dst'=> 'Destination',
    'queues.modal.form.dst-select-iface'=> 'Pili-a ang Interface',
    'queues.modal.form.target.dst-caption'=> 'Pili-a ang interface o isulod ang custom target sa ubos.',
    'queues.modal.form.placeholder'=> 'o isulod ang IP (pananglitan 192.168.10.0/24 o 10.0.0.5)',
    'queues.modal.form.target.upload'=> 'Target Upload',
    'queues.modal.form.max-limit'=> 'Max Limit',
    'queues.modal.form.target.download'=> 'Target Download',
    'queues.modal.form.pkt-marks'=> 'Packet Marks',
    'queues.modal.form.limit-at'=> 'Limit Sa',
    'queues.modal.form.burst-limit'=> 'Burst Limit',
    'queues.modal.form.burst-threshold'=> 'Burst Threshold',
    'queues.modal.form.burst-time'=> 'Burst Time',
    'queues.modal.form.priority'=> 'Priority',
    'queues.modal.form.bucket-size'=> 'Bucket Size',
    'queues.modal.form.parent-queue'=> 'Parent Queue',
    'queues.modal.form.queue-type'=> 'Queue Type',
    'queues.modal.form.comment'=> 'Komento',
    'queues.modal.form.comment-placeholder'=> 'Opsyonal nga komento',
    'queues.modal.form.clear-parent'=> 'I-clear ang parent (kuhaa ang parent relationship)',

    // tree.php
    // Queue Tree Page

    // Queue Tree Action Buttons
    'queues.tree.actions'=> 'Mga Aksyon',
    'queues.tree.action.desc'=> 'Paghimo og mga aksyon sa napiling queue tree entries.',

    // Queue Tree Modal Form - Tabs
    'queues.tree.create.title'=> 'Paghimo og Queue Tree Entry',
    'queue.tree.tab.general'=> 'General',
    'queue.tree.tab.rate-limit'=> 'Rate Limit',


    // types.php
    // Queue Types Page
  
    // Queue Types Action 
    'queues.types.actions'=> 'Mga Aksyon',
    'queues.types.action.desc'=> 'Paghimo og mga aksyon sa napiling queue types.',


    // ppp.php
    // PPP Page
    'ppp.title'=> 'Tagdumala sa PPPoE',
    'ppp.desc'=> 'Dumala ang PPPoE Servers, Secrets ug Profiles.',

    
    'ppp.pppoe.servers'=> 'PPPoE Servers',
    'ppp.servers'=> 'Mga Server',
    'ppp.secrets'=> 'Secrets',
    'ppp.profiles'=> 'Mga Profile',
    'ppp.active'=> 'Aktibong Sesyon',
    
    // PPP Page Descriptions
    'ppp.servers.desc'=> 'Tan-awa ug dumala ang PPPoE server instances ug bindings.',
    'ppp.secrets.desc'=> 'Dumala ang PPPoE secrets (mga kredensyal sa tiggamit).',
    'ppp.profiles.desc'=> 'Paghimo ug pagdumala sa PPPoE profiles.',
    'ppp.active.desc'=> 'Tan-awa ug i-disconnect ang aktibong PPPoE nga mga sesyon.',

    'ppp.open.servers'=> 'Ablihi ang PPPoE Servers',
    'ppp.open.secrets'=> 'Ablihi ang Secrets',
    'ppp.open.profiles'=> 'Ablihi ang Mga Profile',
    'ppp.open.active'=> 'Ablihi ang Aktibong Sesyon',

    // PPP Page - Back Button
    'ppp.back-to-ppp'=> 'Balik sa Tagdumala sa PPPoE',

    // PPP Actions
    'ppp.actions'=> 'Mga Aksyon',

    // PPP General Buttons
    'ppp.buttons.new'=> 'Bag-o',
    'ppp.buttons.edit'=> 'I-edit',
    'ppp.buttons.enable'=> 'I-enable',
    'ppp.buttons.disable'=> 'I-disable',
    'ppp.buttons.remove'=> 'Kuhaa',
    'ppp.buttons.refresh'=> 'I-refresh',
    'ppp.sort.by'=> 'Isort pinaagi sa',
    'ppp.sort'=> 'Isort',
    'ppp.select.all'=> 'Pili-a Tanan',
    'ppp.buttons.prev'=> 'Miuna',
    'ppp.buttons.next'=> 'Sunod',
    'ppp.buttons.clear'=> 'I-clear',
    'ppp.buttons.cancel'=> 'Kanselahon',
    'ppp.buttons.create'=> 'Paghimo',
    'ppp.buttons.save'=> 'I-save',
    'ppp.buttons.proceed'=> 'Padayon',

    // PPP Loading Status
    'ppp.status.loading'=> 'Nag-load sa PPPoE Data...',

    // PPP Secrets Table Headers
    'ppp.table.th.service-name'=> 'Ngalan sa Serbisyo',
    'ppp.table.th.iface'=> 'Interface',
    'ppp.table.th.keepalive'=> 'Keepalive Timeout',
    'ppp.table.th.profile'=> 'Profile',
    'ppp.table.th.one-session-host'=> 'One Session Host',
    'ppp.table.th.authentication'=> 'Authentication',
    'ppp.table.th.name'=> 'Ngalan',
    'ppp.table.th.password'=> 'Password',
    'ppp.table.th.service'=> 'Serbisyo',
    'ppp.table.th.address'=> 'Address',
    'ppp.table.th.caller-id'=> 'Caller ID',
    'ppp.table.th.local-address'=> 'Lokal nga Address',
    'ppp.table.th.remote-address'=> 'Layo nga Address',
    'ppp.table.th.last-logged-out'=> 'Kahuman sa Pag-log Out',
    'ppp.table.th.last-disc-reason'=> 'Rason sa Diskonek',
    'ppp.table.th.last-called-id'=> 'Last Called ID',
    'ppp.table.th.rate-limit'=> 'Rate Limit',
    'ppp.table.th.only-one'=> 'Usa Lang',
    'ppp.table.th.uptime'=> 'Uptime',
    'ppp.table.th.bytes-in'=> 'Bytes Sulod',
    'ppp.table.th.bytes-out'=> 'Bytes Gawas',

    // PPP Add Server Modal Form
    'ppp.modal.form.title'=> 'Dugang PPPoE Server',
    'ppp.modal.form.enabled'=> 'Gi-enable',
    'ppp.modal.form.one-session-per-host'=> 'One Session Per Host',
    'ppp.modal.form.accept-empty-services'=> 'Accept Empty Services',
    'ppp.modal.form.accept-untagged'=> 'Accept Untagged',
    'ppp.modal.form.service-name'=> 'Ngalan sa Serbisyo',
    'ppp.modal.form.service-name_placeholder'=> 'Ngalan sa PPPoE',
    'ppp.modal.form.interface'=> 'Interface',
    'ppp.modal.form.placeholder'=> 'Default',
    'ppp.modal.form.max-mtu'=> 'Max MTU',
    'ppp.modal.form.max-mru'=> 'Max MRU',
    'ppp.modal.form.mrru'=> 'MRRU',
    'ppp.modal.form.keepalive-timeout'=> 'Keepalive Timeout',
    'ppp.modal.form.profile'=> 'Profile',
    'ppp.modal.form.max-sessions'=> 'Max Sessions',
    'ppp.modal.form.auth-methods'=> 'Authentication Methods',
    'ppp.modal.form.auth-mschapv2'=> 'msChapv2',
    'ppp.modal.form.auth-mschapv1'=> 'msChapv1',
    'ppp.modal.form.auth-chap'=> 'Chap',
    'ppp.modal.form.auth-pap'=> 'PaP',

    // PPP Add/Edit Secret Modal Form
    'ppp.modal.form.secret.name'=> 'Ngalan',
    'ppp.modal.form.secret.password'=> 'Password',
    'ppp.modal.form.secret.service-type'=> 'Serbisyo',
    'ppp.modal.form.secret.local-address'=> 'Lokal nga Address',
    'ppp.modal.form.secret.remote-address'=> 'Layo nga Address',

    // secrets.php
    // Modal Titles
    'ppp.modal.form.add.ppp-secret'=> 'Dugang PPPoE Secret',
    'ppp.modal.form.edit.ppp-secret'=> 'I-edit ang PPPoE Secret',

    // PPP Secrets Page Modal Tabs
    'ppp.secrets.tab.general'=> 'General',  
    'ppp.secrets.tab.details'=> 'Detalye',

    // profiles.php
    // PPP Profiles Page

    // PPP Profiles Modal Titles
    'ppp.modal.form.add.ppp-profile'=> 'Dugang PPPoE Profile',
    'ppp.modal.form.edit.ppp-profile'=> 'I-edit ang PPPoE Profile',


    // PPP Profiles Modal Tabs
    'ppp.profiles.tab.general'=> 'General',
    'ppp.profiles.tab.protocols'=> 'Protocols',
    'ppp.profiles.tab.limits'=> 'Limits',
    'ppp.profiles.tab.queue'=> 'Queue',
    'ppp.profiles.tab.scripts'=> 'Mga Script',

    // PPP Profiles Modal Form Fields
    'ppp.modal.form.profile.name'=> 'Ngalan',
    'ppp.modal.form.profile.local-address'=> 'Lokal nga Address',
    'ppp.modal.form.profile.remote-address'=> 'Layo nga Address',
    'ppp.modal.form.profile.use-ipv6'=> 'Gamiton ang IPv6',
    'ppp.modal.form.profile.use-mpls'=> 'Gamiton ang MPLS',
    'ppp.modal.form.profile.use-comp'=> 'Gamiton ang Compression',
    'ppp.modal.form.profile.use-enc'=> 'Gamiton ang Encryption',
    'ppp.modal.form.profile.sess-timeout'=> 'Session Timeout',
    'ppp.modal.form.profile.idle-timeout'=> 'Idle Timeout',
    'ppp.modal.form.profile.rate-limit'=> 'Rate Limit',
    'ppp.modal.form.profile.only-one'=> 'Usa Lang',
    'ppp.modal.form.profile.parent-queue'=> 'Parent Queue',
    'ppp.modal.form.profile.queue-type-rx'=> 'Queue Type (Downloads)',
    'ppp.modal.form.profile.queue-type-tx'=> 'Queue Type (Uploads)',
    'ppp.modal.form.profile.script-onup'=> 'On Up',
    'ppp.modal.form.profile.script-ondown'=> 'On Down',
    'ppp.modal.form.profile.script-placeholder'=> 'Ang script pagadaganon kung moukay ang event',
    'ppp.modal.form.migration.confirm'=> 'Kumpirma ang Pagbalhin sa Profile',
    'ppp.modal.form.migration.caption'=> 'Ang pag-clear sa Parent Queue o Queue Type alang niining profile mahimong magkinahanglan sa pag-usab sa profile ug pag-reassign sa mga PPP secret nga nalakip. Kini nga operasyon mahimong makalilisang. Gusto ka ba mosugot?',

    // ip.php
    // IP Page
    'ip.title'=> 'Tagdumala sa IP',
    'ip.desc'=> 'Dumala ang ARP, Addresses, DHCP, DNS, Pools ug mga may kalabutan nga IP services.',

    'ip.arp'=> 'ARP',
    'ip.addresses'=> 'Addresses',
    'ip.cloud'=> 'Cloud',
    'ip.dhcp.client'=> 'DHCP Client',
    'ip.dhcp.server'=> 'DHCP Server',
    'ip.dns'=> 'DNS',
    'ip.pool'=> 'Pool',
    'ip.services'=> 'Mga Serbisyo',
    'ip.upnp'=> 'UPnP',
    'ip.settings'=> 'Mga Setting',
    
    'ip.arp.desc'=> 'Tan-awa ug dumala ang mga entry sa ARP table.',
    'ip.addresses.desc'=> 'Dumala ang mga IP address nga nakahatag sa mga interface.',
    'ip.cloud.desc'=> 'Cloud/DDNS nga mga setting. Gibasa ang mga value gikan sa router.',
    'ip.dhcp.client.desc'=> 'Tan-awa ug dumala ang DHCP clients.',
    'ip.dhcp.server.desc'=> 'I-configure ang DHCP server ug leases.',
    'ip.dns.desc'=> 'Dumala ang DNS settings ug static entries.',
    'ip.pool.desc'=> 'Dumala ang address pools para sa DHCP ug uban pang serbisyo.',
    'ip.services.desc'=> 'I-enable o i-disable ang mga IP-related nga serbisyo.',
    'ip.upnp.desc'=> 'Universal Plug and Play settings. Gibasa ang mga value gikan sa router.',
    'ip.settings.desc'=> 'Kinauyokan nga IP subsystem settings.',

    'ip.open.arp'=> 'Ablihi ang ARP',
    'ip.open.addresses'=> 'Ablihi ang Addresses',
    'ip.open.cloud'=> 'Ablihi ang Cloud',
    'ip.open.dhcp.client'=> 'Ablihi ang DHCP Client',
    'ip.open.dhcp.server'=> 'Ablihi ang DHCP Server',
    'ip.open.dns'=> 'Ablihi ang DNS',
    'ip.open.pool'=> 'Ablihi ang Pool',
    'ip.open.services'=> 'Ablihi ang Mga Serbisyo',
    'ip.open.upnp'=> 'Ablihi ang UPnP',
    'ip.open.settings'=> 'Ablihi ang Mga Setting',

    // IP Page - Back Button
    'ip.back-to-ip'=> 'Balik sa Tagdumala sa IP',

    // IP JS strings
    // Addresses
    'ip.addresses.no_addresses' => 'Walay address',
    'ip.addresses.loading' => 'Nag-load...',
    'ip.addresses.failed_to_contact_api' => 'Napakyas sa pagkontak sa API',
    'ip.addresses.please_select_one_or_more' => 'Palihug pili-a ang usa o daghan pa ka entry',
    'ip.addresses.select_one_to_edit' => 'Pili-a ang usa ka address nga i-edit',
    'ip.addresses.action_completed' => 'Aksyon %s nahuman',
    'ip.addresses.action_failed' => 'Napakyas ang aksyon: %s',
    'ip.addresses.request_failed' => 'Napakyas ang hangyo: %s',
    'ip.addresses.address_added' => 'Nadugang ang address',
    'ip.addresses.address_updated' => 'Na-update ang address',
    'ip.addresses.add_failed' => 'Napakyas ang pagdugang: %s',
    'ip.addresses.update_failed' => 'Napakyas ang pag-update: %s',
    'ip.addresses.page_info' => 'Panid %s / %s (%s)',

    // ARP
    'ip.arp.no_arp_entries' => 'Walay ARP entry',
    'ip.arp.loading' => 'Nag-load...',
    'ip.arp.failed_to_contact_api' => 'Napakyas sa pagkontak sa API',
    'ip.arp.please_select_one_or_more' => 'Palihug pili-a ang usa o daghan pa ka entry',
    'ip.arp.enable_confirm' => 'I-enable ang napiling ARP entries?',
    'ip.arp.disable_confirm' => 'I-disable ang napiling ARP entries?',
    'ip.arp.remove_confirm' => 'Kuhaa ang napiling ARP entries?',
    'ip.arp.page_info' => 'Panid %s / %s (%s)',

    // Cloud
    'ip.cloud.failed_to_load' => 'Napakyas sa pag-load sa cloud settings: %s',
    'ip.cloud.reverted' => 'Gibalikan ang mga kausaban',
    'ip.cloud.applied' => 'Giatag ang cloud settings',
    'ip.cloud.apply_failed' => 'Napakyas ang pag-aplikar: %s',

    // DHCP Client
    'ip.dhcp.client.no_clients' => 'Walay DHCP client',
    'ip.dhcp.client.failed_to_load' => 'Napakyas sa pag-load sa DHCP clients: %s',
    'ip.dhcp.client.please_select_interface' => 'Palihug pili-a ang interface',
    'ip.dhcp.client.created' => 'Nakahimo og DHCP Client',
    'ip.dhcp.client.create_failed' => 'Napakyas sa paghimo: %s',
    'ip.dhcp.client.no_entries_selected' => 'Walay napiling entry',
    'ip.dhcp.client.enable_completed' => 'Na-enable na',
    'ip.dhcp.client.enable_failed' => 'Napakyas ang pag-enable: %s',
    'ip.dhcp.client.disable_completed' => 'Na-disable na',
    'ip.dhcp.client.disable_failed' => 'Napakyas ang pag-disable: %s',
    'ip.dhcp.client.remove_confirm' => 'Kuhaa ang napiling DHCP clients?',
    'ip.dhcp.client.option_name_code_required' => 'Kinahanglan ang Ngalan ug Code',
    'ip.dhcp.client.option_created' => 'Nakahimo og option',
    'ip.dhcp.client.option_create_failed' => 'Napakyas sa paghimo: %s',
    'ip.dhcp.client.no_options' => 'Walay option',

    // DHCP Networks
    'ip.dhcp.networks.no_networks' => 'Walay DHCP network',
    'ip.dhcp.networks.loading' => 'Nag-load...',
    'ip.dhcp.networks.select_one_to_edit' => 'Palihug pili-a ang usa ka network nga i-edit',
    'ip.dhcp.networks.create_not_implemented' => 'Paghimo og bag-ong network: wala pa maimplementar',
    'ip.dhcp.networks.please_select_remove' => 'Palihug pili-a ang usa o daghan pa ka network nga tangtangon',
    'ip.dhcp.networks.remove_confirm' => 'Kuhaa ang napiling mga network?',
    'ip.dhcp.networks.removed' => 'Gikuha na',
    'ip.dhcp.networks.remove_failed' => 'Napakyas ang pagtangtang: %s',
    'ip.dhcp.networks.page_info' => 'Panid %s / %s (%s)',

    // DNS
    'ip.dns.add_server_placeholder' => 'Idugang ang DNS server (IP)',
    'ip.dns.remove' => 'Kuhaa',
    'ip.dns.loading' => 'Nag-load...',
    'ip.dns.failed_to_contact_api' => 'Napakyas sa pagkontak sa API',
    'ip.dns.error_loading' => 'Sayop sa pag-load sa DNS settings',
    'ip.dns.dns_saved' => 'Na-save ang DNS settings',
    'ip.dns.failed_to_save' => 'Napakyas sa pag-save: %s',
    'ip.dns.save_confirm' => 'I-save ang DNS settings?',
    'ip.dns.no_static_entries' => 'Walay static entry',
    'ip.dns.static_added' => 'Nadugang ang static DNS',
    'ip.dns.static_add_failed' => 'Napakyas pagdugang sa static',
    'ip.dns.performing_action' => 'Nagbuhat og %s...',
    'ip.dns.invalid_json' => 'Invalid nga JSON nga tubag',
    'ip.dns.request_failed' => 'Napakyas ang hangyo: %s',
    'ip.dns.flush_cache_confirm' => 'I-flush ang tibuok DNS cache?',
    'ip.dns.cache_flushed' => 'Na-flush ang cache',
    'ip.dns.failed_flush_cache' => 'Napakyas ang pag-flush sa cache: %s',
    'ip.dns.no_cache_entries' => 'Walay cache entry',

    // Pool
    'ip.pool.no_pools' => 'Walay pool',
    'ip.pool.please_select_one_or_more' => 'Palihug pili-a ang usa o daghan pa ka pool',
    'ip.pool.select_one_to_edit' => 'Pili-a ang usa ka pool nga i-edit',
    'ip.pool.name_and_address_required' => 'Kinahanglan ang Ngalan ug Address',
    'ip.pool.pool_created' => 'Nakahimo og pool',
    'ip.pool.create_failed' => 'Napakyas sa paghimo: %s',
    'ip.pool.pool_updated' => 'Na-update ang pool',
    'ip.pool.update_failed' => 'Napakyas ang pag-update: %s',
    'ip.pool.remove_confirm' => 'Kuhaa ang napiling pool(s)?',
    'ip.pool.action_completed' => 'Aksyon %s nahuman',
    'ip.pool.action_failed' => 'Napakyas ang aksyon: %s',
    'ip.pool.request_failed' => 'Napakyas ang hangyo: %s',
    'ip.pool.none' => '(wala)',
    'ip.pool.loading' => 'Nag-load...',
    'ip.pool.failed_to_contact_api' => 'Napakyas sa pagkontak sa API',
    'ip.pool.page_info' => 'Panid %s / %s (%s)',

    // IP Settings
    'ip.settings.refreshing_settings' => 'Nag-refresh sa mga setting...',
    'ip.settings.no_settings_found' => 'Walay makit-ang IP settings',
    'ip.settings.failed_to_load' => 'Napakyas sa pag-load sa IP settings',
    'ip.settings.updated' => 'Na-update ang IP settings',
    'ip.settings.update_failed' => 'Napakyas ang pag-update: %s',

    // IP Page - Loading Status
    'ip.loading'=> 'Nag-load sa IP Data...',

    // IP Page Actions
    'ip.actions'=> 'Mga Aksyon',

    // IP Page General Buttons
    'ip.buttons.new'=> 'Dugang',
    'ip.buttons.edit'=> 'I-edit',
    'ip.buttons.refresh'=> 'I-refresh',
    'ip.buttons.create'=> 'Paghimo',
    'ip.buttons.save'=> 'I-save',
    'ip.buttons.cancel'=> 'Kanselahon',
    'ip.buttons.enable'=> 'I-enable',
    'ip.buttons.disable'=> 'I-disable',
    'ip.buttons.remove'=> 'Kuhaa',
    'ip.buttons.prev'=> 'Miuna',
    'ip.buttons.next'=> 'Sunod',
    'ip.sort.by'=> 'Isort pinaagi sa',
    'ip.sort'=> 'Isort',
    'ip.select.all'=> 'Pili-a Tanan',
    'ip.buttons.flush.cache'=> 'I-flush ang Cache',
    'ip.buttons.add.dns.server'=> 'Dugang DNS Server',


    // IP UPnP Page
    'ip.upnp.enabled'=> 'Gi-enable',
    'ip.upnp.allow-disable-external-iface'=> 'Tugoti ang pag-disable sa external nga interface',
    'ip.upnp.show-dummy-rule'=> 'Ipakita ang dummy nga lagda',

    // arp.php
    // IP ARP Page

    // addresses.php
    // IP Addresses Page

    // IP Table Headers
    'ip.table.th.address'=> 'Address',
    'ip.table.th.network'=> 'Network',
    'ip.table.th.iface'=> 'Interface',
    'ip.table.th.comment'=> 'Komento',
    'ip.table.th.dhcp.client.name' => 'Ngalan',
    'ip.table.th.dhcp.client.code-value' => 'Balor sa Code',
    'ip.table.th.dhcp.client.client-value' => 'Balor sa Client',
    'ip.table.th.dns.name'=> 'Ngalan',
    'ip.table.th.dns.regexp'=> 'Regexp',
    'ip.table.th.dns.type'=> 'Tipo',
    'ip.table.th.dns.value'=> 'Bili',
    'ip.table.th.dns.ttl'=> 'TTL',
    'ip.table.th.dns.data'=> 'Data',

    // IP Address Modal Titles
    'ip.modal.form.add.address'=> 'Dugang IP Address',
    'ip.modal.form.edit.address'=> 'I-edit ang IP Address',

    // IP Address Modal Form
    'ip.modal.form.ip.address-mask'=> 'IP Address / Mask',
    'ip.modal.form.ip.network'=> 'Network',
    'ip.modal.form.iface'=> 'Interface',
    'ip.modal.form.comment'=> 'Komento',
    

    // cloud.php
    // IP Cloud Page

    // IP Cloud Modal Form
    'ip.cloud.enabled'=> 'Gi-enable ang DDNS',
    'ip.cloud.ddns.update.interval'=> 'Interval sa Pag-update sa DDNS',
    'ip.cloud.update.time'=> 'Panahon sa Pag-update',
    'ip.cloud.public.ipv4'=> 'Public IPv4',
    'ip.cloud.public.ipv6'=> 'Public IPv6',
    'ip.cloud.dns.name' => 'Ngalan sa DNS',
    'ip.cloud.use-router-defaults'=> 'Gamiton ang Default sa Router',
    'ip.cloud.yes'=> 'Oo',
    'ip.cloud.no'=> 'Dili',

    // dhcp-client.php
    // IP DHCP Client Page
    'ip.dhcp.client.options'=> 'DHCP Client',
    'ip.dhcp.client.modal.form.interface'=> 'Interface',
    'ip.dhcp.client.modal.form.enabled'=> 'Gi-enable',
    'ip.dhcp.client.modal.form.use-peer-dns'=> 'Gamiton ang Peer DNS',
    'ip.dhcp.client.modal.form.use-peer-ntp'=> 'Gamiton ang Peer NTP',
    'ip.dhcp.client.modal.form.add-default-route'=> 'Idugang ang Default Route',
    'ip.dhcp.client.modal.form.default-route-distance'=> 'Gilay-on sa Default Route',
    'ip.dhcp.client.options2'=> 'Mga Opsyon sa DHCP Client',
    'ip.dhcp.client.modal.form.name'=> 'Ngalan',
    'ip.dhcp.client.modal.form.code'=> 'Code',
    'ip.dhcp.client.modal.form.value'=> 'Bili',

   

    // dns.php
    // IP DNS Page

    // IP DNS - Modal Form
    'ip.dns.form.servers'=> 'Mga DNS Server',
    'ip.dns.form.dynamic-servers'=> 'Dynamic Servers',
    'ip.dns.form.use.doh.servers'=> 'Gamiton ang DoH Servers',
    'ip.dns.form.doh.max.server.conn'=> 'DoH Max Server Connections',
    'ip.dns.form.doh.max.concurrent.queries'=> 'DoH Max Concurrent Queries',
    'ip.dns.form.doh.timeout'=> 'DoH Timeout (segundo)',
    'ip.dns.form.allow-remote.requests'=> 'Tugoti ang Remote Requests',

    'ip.dns.form.cache.size'=> 'Kadak-on sa Cache (KB)',
    'ip.dns.form.cache.max-ttl'=> 'Max TTL sa Cache (segundo)',
    'ip.dns.form.cache.min-ttl'=> 'Min TTL sa Cache (segundo)',
    'ip.dns.form.max.concurrent.queries'=> 'Max Concurrent Queries',
    'ip.dns.form.max.concurrent.tcp'=> 'Max Concurrent TCP Connections',
    'ip.dns.form.query.timeout'=> 'Query Timeout (segundo)',
    'ip.dns.form.cache.used'=> 'Gigamit sa Cache (read-only)',

    'ip.dns.form.add.static.entry'=> 'Dugang Static DNS Entry',
    'ip.dns.form.add.static.name'=> 'Ngalan',
    'ip.dns.form.add.static.type'=> 'Tipo',
    'ip.dns.form.add.static.value'=> 'Bili',
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
    'ip.pool.table.th.name'=> 'Ngalan',
    'ip.pool.table.th.ranges'=> 'Mga Sakop (Ranges)',
    'ip.pool.table.th.comment'=> 'Komento',
    'ip.pool.table.th.total-addresses'=> 'Tibuok nga Address',
    'ip.pool.table.th.used'=> 'Gigamit',
    'ip.pool.table.th.available'=> 'Magamit',

    // IP Pool Modal Form
    'ip.pool.modal.form.create.title'=> 'Paghimo og IP Pool',
    'ip.pool.modal.form.edit.title'=> 'I-edit ang IP Pool',
    'ip.pool.modal.form.name'=> 'Ngalan',
    'ip.pool.modal.form.ranges'=> 'Address Ranges',
    'ip.pool.modal.form.ranges-placeholder'=> 'pananglitan 192.168.1.100-192.168.1.200 o 10.0.0.0/24',
    'ip.pool.modal.form.comment'=> 'Komento',
    'ip.pool.modal.form.next-address'=> 'Sunod nga Address',
    'ip.pool.modal.form.total-addresses'=> 'Tibuok nga Address',
    'ip.pool.modal.form.used'=> 'Gigamit',
    'ip.pool.modal.form.available'=> 'Magamit',

    // services.php
    // IP Services Page

    // IP Services Table Headers
    'ip.services.table.th.name'=> 'Ngalan',
    'ip.services.table.th.port'=> 'Port',
    'ip.services.table.th.available-from'=> 'Magamit Gikan Sa',
    'ip.services.table.th.max-sessions'=> 'Max Sessions',
    'ip.services.table.th.protocol'=> 'Protocol',
    'ip.services.table.th.remote'=> 'Remote',
    'ip.services.table.th.local'=> 'Local',

    // IP Services Modal Form
    'ip.services.modal.form.edit.title'=> 'I-edit ang IP Service',
    'ip.services.modal.form.name'=> 'Ngalan',
    'ip.services.modal.form.port'=> 'Port',
    'ip.services.modal.form.available-from'=> 'Magamit Gikan Sa',
    'ip.services.modal.form.max-sessions'=> 'Max Sessions',
    'ip.services.modal.form.protocol'=> 'Protocol',
    'ip.services.modal.form.remote.address'=> 'Layo nga Address',
    'ip.services.modal.form.remote.port'=> 'Remote Port',
    'ip.services.modal.form.local.address'=> 'Lokal nga Address',

    // settings.php
    // IP Settings Page

    // IP Settings Modal Form
    'ip.settings.modal.form.ip-forward'=> 'Gi-enable ang IP Forwarding',
    'ip.settings.modal.form.ip-send-redirects'=> 'Gi-enable ang Pagpadala sa Redirects',
    'ip.settings.modal.form.ip-accept-redirects'=> 'Gi-enable ang Pagdawat sa Redirects',
    'ip.settings.modal.form.ip-secure-redirects'=> 'Gi-enable ang Secure Redirects',
    'ip.settings.modal.form.ip-accept-source-route'=> 'Gi-enable ang Pagdawat sa Source Route',
    'ip.settings.modal.form.ip-allow-fast-path'=> 'Gi-allow ang Fast Path',
    'ip.settings.modal.form.ip-tcp-syncookies'=> 'Gi-enable ang TCP Syncookies',
    'ip.settings.modal.form.ip-tcp-timestamps'=> 'TCP Timestamps',
    'ip.settings.modal.form.ip-max-neighbors'=> 'Max Neighbors',
    'ip.settings.modal.form.ip-icmp-rate-limit'=> 'ICMP Rate Limit',
    'ip.settings.modal.form.ip-arp-timeout'=> 'ARP Timeout (segundo)',
    'ip.settings.modal.form.ip-arp-timeout-help'=> 'Isulod ang RouterOS timeout format (pananglitan 10m, 1h, o 00:10:00). Pabilin nga walay sulod para sa default.',

    // DHCP additions (from English)
    'downloads.instructions' => 'I-klik ang buton na Download aron mag-download. Ang mga file nga gimarkahan og "Coming soon" wala pa magamit.',

    'ip.dhcp.leases.title'=> 'DHCP Leases',
    'ip.dhcp.leases.desc'=> 'Tan-awa ug dumala ang aktibo nga DHCP leases',

    'ip.dhcp.networks.title'=> 'DHCP Networks',
    'ip.dhcp.networks.desc'=> 'Paghimo ug pagdumala sa DHCP network',

    'ip.dhcp.server.title'=> 'DHCP Manager',
    'ip.dhcp.server.back-to-dhcp'=> 'Balik sa DHCP Manager',
    'ip.dhcp.server.dhcp'=> 'DHCP',
    'ip.dhcp.server.dhcp.desc'=> 'I-configure ang mga setting sa DHCP server.',
    'ip.dhcp.server.dhcp.leases'=> 'Leases',
    'ip.dhcp.server.dhcp.leases.desc'=> 'Tan-awa ang aktibo nga DHCP leases.',
    'ip.dhcp.server.dhcp.networks'=> 'Networks',
    'ip.dhcp.server.dhcp.networks.desc'=> 'Pagdumala sa mga DHCP network.',

    'ip.open.dhcp.leases' => 'Ablihi ang DHCP Leases',
    'ip.open.dhcp.networks' => 'Ablihi ang DHCP Networks',

    'status.title' => 'Panel sa Status',
    'status.desc' => 'Pag-monitor sa kahimtang sa sistema ug uptime sa tinuod nga oras',

    // Error pages
    'errors.404.title' => 'Wala Makit-i ang Panid',
    'errors.404.desc' => 'Ang panid nga imong gipangayo wala makit-i.',
    'errors.403.title' => 'Gidili',
    'errors.403.desc' => 'Wala kay permiso sa pag-access niini nga resource.',
    'errors.500.title' => 'Sayup sa Server',
    'errors.500.desc' => 'Nahitabo ang internal nga sayup sa server.',
    'errors.back_home' => 'Balik sa Home',
    'errors.more_info' => 'Unsa ang nahitabo',
    'errors.contact_admin' => 'Kung nagtuo ka nga sayup kini, kontaka ang administrador sa site.',

]; 
