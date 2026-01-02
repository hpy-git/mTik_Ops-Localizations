<?php
////////////////////////////////////////////////////////////////////////
// Ilocano translations for mTik_Ops                           
// Version: Next-Generation                                           
////////////////////////////////////////////////////////////////////////

return [
    // Start of Translations
    // Global
    'language-changed' => 'Nabaliwan ti pagsasao iti {lang}',
    'language-search-placeholder' => 'Agsapsap...',

    // Global Search
    'search.title' => 'Panagsapol',
    'search.instructions' => 'Itype ti sarita wenno sao a pangsapsapol iti sitio.',
    'search.results_header' => 'Dagiti Resulta para iti "{query}"',
    'search.placeholder' => 'Itype para agsapsap...',
    'search.no_results' => 'Awan ti nasarakan',
    'search.results' => 'Resulta',
    'search.button' => 'Sapsapol',
    'search.hint' => 'Itype tapno makita dagiti suggestion iti agad.',
    'search.quick_links' => 'Dagus a Link',
    'search.show' => 'Ipakita ti Panagsapol',

    
    // Site title and tagline
    'site.title' => 'mTik_Ops', // DO NOT TRANSLATE
    'site.tagline' => 'Sentralisado a Panangipaay ti Router',

    // Authentication
    'nav.login' => 'Ag-log in',
    'nav.logout' => 'Ag-log out',
    'auth.logging_in' => 'Agle-log in',
    'auth.logging_out' => 'Agle-log out',
    'nav.quick_login' => 'Dagus a Login',

    // nav-brand.php
    'nav.brand.user_greeting'=> 'Kumusta!',

    // nav.php
    'lang.label'=> 'Pagsasao',
    'nav.about' => 'Maipanggep',
    'nav.features' => 'Fitur',
    'nav.our_team' => 'Tattao ti Grupo',
    'nav.contact' => 'Kontak',
    'nav.menu' => 'Menu',
    'nav.dashboard' => 'Dashboard',
    'nav.hotspot' => 'Hotspot',
    'nav.ip' => 'IP',
    'nav.firewall' => 'Firewall',
    'nav.ppp' => 'PPP',
    'nav.queues' => 'Queues',
    'nav.settings' => 'Setings',
    'nav.downloads' => 'Downloads',
    'nav.scripting' => 'Scripting',

    // index.php
    // Index Page - About Section
    'about.title' => 'Inaramid para iti MikroTik',
    'about.desc' => 'Ti mTikOps ket plataforma a mabirukan iti browser para iti panangidaulo kadagiti MikroTik router ken hotspot. Adda remote access, panangidaulo ti hotspot — panagimprinta, PPPoE, ken ad-adu pay. Amin iti maysa a napardas a sistema.',
    'about.about_us_button' => 'Maipanggep Kadakami',
    'about.our_team_button' => 'Tattao ti Grupo',

    // Index Page - Features Section
    'features.remote.title' => 'Panangidaulo ti Remote a Network',
    'features.remote.desc' => 'Subli ken idar-ay dagiti remote a router, kitaen ti estado ti interface, ag-reboot, ken itulod dagiti configuration a nabileg iti entero a fleet manipud iti maysa a console.',
    'features.hotspot.title' => 'Panangidaulo ti Hotspot',
    'features.hotspot.desc' => 'Agaramid ken idar-ay dagiti hotspot server ken user profile, mangipablaak ti voucher, subli dagiti aktibo a user ken session, ken agaramid ti accounting ken report.',
    'features.troubleshoot.title' => 'Panangsolbar ti Problema ken Konfigurasyon',
    'features.troubleshoot.desc' => 'Itulod ken i-audit dagiti panagbaliw ti konfigurasyon, patarayen dagiti diagnostic, kitaen dagiti log, ken solbaren dagiti problema ti konektividad nga adda dagiti integradong gamit ken log.',

    // Index Page - Signup Section
    'signup.title' => 'Agpagtakder iti mTikOps',
    'signup.desc' => 'Agaramid ti account tapno mangidaulo iti router, hotspot ken mangpataray ti diagnostics iti entero a network manipud iti maysa a dashboard.',
    'signup.cta' => 'Agparehistro',

    // Index Page - Contact Section
    'contact.hq' => 'HQ',
    'contact.email' => 'Email',
    'contact.contact' => 'Kontak',
    'contact.hq_address' => 'Taguig City, PH 1630',
    'contact.email_addr' => 'noc@mtikops.com',
    'contact.phone' => '+63 (962) 660-6116',

    // Index Page - Footer Section
    'footer.copyright' => 'Copyright &copy; mTikOps {year}',
    'footer.powered' => 'Pinapatalged ti HPY™',
    'modal.confirm.title' => 'Kumpirma',
    'modal.confirm.body' => 'Sigurado ka kadi?',
    'modal.confirm.cancel' => 'Ikansela',
    'modal.confirm.ok' => 'Kumpirma',

    // Login Page
    'login.title' => 'Ag-log in',
    'login.desc' => 'Aksesaren ti account mo iti mTik_Ops tapno mangidaulo kadagiti MikroTik router ken hotspot manipud iti sentralisado a dashboard.',
    'login.form.title' => 'Ag-log in iti Account mo',
    'login.form.host'=> 'Host',
    'login.form.username'=> 'Nagan ti Ag-Usar',
    'login.form.password'=> 'Password',
    'login.form.connection_type'=> 'Klas ti Koneksyon',
    'login.form.connection_type_yes'=> 'Secure API',
    'login.form.connection_type_no'=> 'Standard API',
    'login.form.connection_type_help'=> 'Usaren ti 8728 kadagiti kaaduan a kaso malaksid no adda partikular a rason a usaren ti 8729 (kas iti nu naipatakder ti SSL certificate iti router).',
    'login.form.port'=> 'Port',
    'login.form.remember'=> 'Irekordo Ak',
    'login.form.connect'=> 'Ikonektar',
    'login.form.cancel'=> 'Ikansela',

    // Login Page Placeholders
    'login.form.host_placeholder'=> 'IP ti Router wenno Hostname',
    'login.form.username_placeholder'=> 'Ipatik ti nagan ti ag-usar',
    'login.form.password_placeholder'=> 'Ipatik ti password mo',

 // Login Page Messages
     'login.error.invalid_submission'=> 'Saan a wagas ti panagsumitir ti forma. Pakisubli manen.',
     'login.error.missing_fields'=> 'Masapul ti Host, Username ken Password.',
     'login.error.unable_connect'=> 'Saan a maikonekta! — Sursuruten dagiti kredensial ken sublian manen.',
     'login.success.connected'=> 'Naka-konektar ti router.',
     'login.success.remembered'=> 'Naala dagiti detalye ti koneksyon para iti sumaruno a pag-login.',
     'login.info.session_expired'=> 'Napasardeng ti sesion mo. Mangngegka manen.',
     'login.info.logged_out'=> 'Naka-logout ka.',
     'login.info.please_login'=> 'Mangngegka tapno agpadayon.',
     'login.button.forgot_password'=> 'Nakalimot iti Password?',
     'login.try_again'=> 'Subliam manen?',

    // Downloads Page
    'downloads.title' => 'Downloads',
    'downloads.desc' => 'I-download dagiti installer ken pakete para kadagiti suportado a platform.',
    'downloads.available' => 'Dagiti Available a Downloads',
    'downloads.coming_soon' => 'Agsapa',
    'downloads.download' => 'I-download',
    'downloads.note' => 'I-upload dagiti installer iti /downloads a folder tapno mausar da.',
    'downloads.note' => 'I-upload dagiti installer idiay /downloads a folder tapno magun-odda.',
    'downloads.changelog' => 'Tala ti panagbaliw',
    'downloads.changelog.loading' => 'Agnaload...',
    'downloads.changelog.no_file' => 'Awan tala ti panagbaliw para iti daytoy a file.',

    // about-us.php
    // About Us Page
    'about-us.title' => 'Maipanggep Kadakami',
    'about-us.desc' => 'Ammuem pay ti maipanggep iti mTik_Ops, ti misyon mi, ken ti grupo a mangted iti plataforma.',
    'about-us.overview'=> 'Panggep ken Panakaammo',
    'about-us.vision'=> 'Panggep',
    'about-us.features'=> 'Fitur',
    'about-us.tutorials'=> 'Tutorial',
    'about-us.faqs'=> 'FAQs',
    'about-us.requirements'=> 'Kkinakailangan',

    // about-us.php
    // About Us Page Descriptions
    'about-us.overview.desc'=> 'Kitaen ti maysa a dagup a pannakaammo iti mTikOps ken dagiti kangrunaan a kabaelan na.',
    'about-us.vision.desc'=> 'Kitaen ti misyon mi ken dagiti pangmatagal a panggep para iti proyekto.',
    'about-us.features.desc'=> 'Kitaen dagiti kangrunaan a fitur a mabiruken iti mTikOps.',
    'about-us.tutorials.desc'=> 'Dagiti paso-paso a giya ken ejemplo a workflow.',
    'about-us.faqs.desc'=> 'Dagiti kapipintas a saludsod ken sungbat maipanggep iti mTikOps.',
    'about-us.requirements.desc'=> 'Dagiti kasapulan ken RouterOS nga requirement tapno mapatakder ti mTikOps.',

    // about-us.php
    // About Us Page Buttons
    'about-us.open.overview'=> 'Buksan ti Dagup',
    'about-us.open.vision'=> 'Buksan ti Panggep',
    'about-us.open.features'=> 'Buksan ti Fitur',
    'about-us.open.tutorials'=> 'Buksan ti Tutorial',
    'about-us.open.faqs'=> 'Buksan ti FAQs',
    'about-us.open.requirements'=> 'Buksan ti Requirements',

    // About Us - Back Button
    'about-us.back-to-about'=> 'Agturong Manen iti Maipanggep Kadakami',

    // About Us - Overview Page
    'about-us.overview-page.title'=> 'Dagup',
    'about-us.overview-page.desc'=> 'Ti mTikOps ket maysa a magaan a web platform para iti panangidaulo kadagiti MikroTik router ken hotspot a serbisyo manipud iti browser.',

    // About Us - Vision Page
    'about-us.vision-page.title'=> 'Panggep',
    'about-us.vision-page.desc'=> 'Panggep mi a pasimplehon dagiti operasyon ti network para kadagiti MikroTik a users babaen iti naurnos ken nasaysayaat a management interface ken automation a gamit.',

    // About Us - Features Page
    'about-us.features-page.title'=> 'Fitur',
    'about-us.features-page.desc'=> 'Sukisukimaten dagiti kangrunaan a fitur ti mTikOps.',

    // About Us - Tutorials Page
    'about-us.tutorials-page.title'=> 'Tutorial',
    'about-us.tutorials-page.desc'=> 'Dagiti giya ken kasano a ramiden para kadagiti kasagarang ar-aramiden.',

    // About Us - FAQs Page
    'about-us.faqs-page.title'=> 'FAQs',
    'about-us.faqs-page.desc'=> 'Dagiti kasagarang saludsod ken dagiti sungbat da.',

    // About Us - Requirements Page
    'about-us.requirements-page.title'=> 'Kasapulan',
    'about-us.requirements-page.desc'=> 'Minimum a kasapulan ken nota maipanggep iti compatibility.',

    // our-team.php
    // Our Team Page
    'our-team.title'=> 'Tattao ti Grupo',
    'our-team.desc'=> 'Kilalaen dagiti tao a mangted iti mTikOps — developers, contributors ken maintainers.',
    'our-team.leadership'=> 'Pangulo',
    'our-team.developers'=> 'Dagiti Developers',
    'our-team.contributors'=> 'Dagiti Kontribyutor',
    'our-team.advisors'=> 'Advisors',
    'our-team.careers'=> 'Sumali Kadakami',
    'our-team.contact'=> 'Kontak',

    // Our Team Page Descriptions
    'our-team.leadership.desc'=> 'Dagiti core maintainers ken project leads a mangiturong iti mTikOps.',
    'our-team.developers.desc'=> 'Dagiti engineers ken contributors a mangporma kadagiti fitur ken panag-ayos.', 
    'our-team.contributors.desc'=> 'Dagiti community contributors a tumulong iti dokumentasion, panagtest ken code.',
    'our-team.advisors.desc'=> 'Dagiti tagapayo ken eksperto a mangted iti suporta iti proyekto.',
    'our-team.careers.desc'=> 'Dagiti bukas a posision ken wagas a makisali iti grupo.',
    'our-team.contact.desc'=> 'Agtaray iti kontak kadagiti miembro ti grupo para iti saludsod wenno kolaborasion.',

    // Our Team Page Buttons
    'our-team.open.leadership'=> 'Kitaen ti Liderato',
    'our-team.open.developers'=> 'Kitaen dagiti Developers',
    'our-team.open.contributors'=> 'Kitaen dagiti Contributors',
    'our-team.open.advisors'=> 'Kitaen dagiti Tagapayo',
    'our-team.open.careers'=> 'Sumali Kadakami',
    'our-team.open.contact'=> 'Kontakon ti Grupo',

    // Our Team - Back Button
    'our-team.back-to-team'=> 'Agturong Manen iti Tattao ti Grupo',

    // Our Team - Leadership Page
    'our-team.leadership-page.title'=> 'Pangulo',
    'our-team.leadership-page.desc'=> 'Kilalaen dagiti core maintainers ken project leads a mangturay ken mangsagrap iti mTikOps.',

    // Our Team - Developers Page
    'our-team.developers-page.title'=> 'Developers',
    'our-team.developers-page.desc'=> 'Dagiti profile ken responsibilidad dagiti developers a mangkontribuer iti mTikOps.',

    // Our Team - Contributors Page
    'our-team.contributors-page.title'=> 'Kontribyutor',
    'our-team.contributors-page.desc'=> 'Panangilala kadagiti community contributors ken wagas a makipaset iti proyekto.',

    // Our Team - Advisors Page
    'our-team.advisors-page.title'=> 'Tagapayo',
    'our-team.advisors-page.desc'=> 'Dagiti tagapayo ken eksperto a mangted iti pagguidar iti proyekto.',

    // Our Team - Join Us Page
    'our-team.join-us-page.title'=> 'Sumali Kadakami',
    'our-team.join-us-page.desc'=> 'Sukisukimat dagiti bukas a posision ken kasano a makapagkontribuer iti mTikOps.',  

    // Our Team - Contact Page
    'our-team.contact-page.title'=> 'Kontak',
    'our-team.contact-page.desc'=> 'Wagas a makigapu iti mTikOps a grupo para iti kolaborasion wenno suporta.',

    // Dashboard Page
    'dashboard.title'=> 'Dashboard',
    'dashboard.desc'=> 'Monitoring ken Logging para iti Network Operations',

    // Dashboard Buttons
    'dashboard.show'=> 'Ipakita ti Dashboard',
    'dashboard.button.refresh'=> 'Rinfreskan',
    'dashboard.button.prev'=> 'Iti Napan',
    'dashboard.button.next'=> 'Sumaruno',

    // Dashboard Network Monitoring
    'dashboard.monitoring.title'=> 'Panagmonitor ti Network',
    'dashboard.monitoring.desc'=> 'Panagmonitor iti real-time nga performance ti network, uptime, ken estado dagiti device iti entero a MikroTik infrastruktura.',
    'dashboard.fullscreen'=> 'Puno a Screen',
    'dashboard.loading'=> 'Agloload ti Data...',
    'dashboard.not-monitoring'=> 'Saan a Nakamonitor',

    // Dashboard System Logging
    'dashboard.logging.title'=> 'System Logging',
    'dashboard.logging.desc'=> 'Sentralisado a logging ken alert para iti pasamak ti sistema ken error',
    'dashboard.system.logs'=> 'System Logs',
    'dashboard.critical.logs'=> 'Critical Logs',

    // Dashboard Device Information
    'dashboard.device.info.title'=> 'Impormasion ti Device',
    'dashboard.system.resources'=> 'Rekurso ti Sistema',
    'dashboard.system.information'=> 'Impormasion ti Sistema',
    'dashboard.system.platform'=> 'Impormasion ti RouterBOARD',

    // Device info JS strings
    'device.system_identity' => 'Identidad ti Sistema',
    'device.routeros_version' => 'Bersion ti RouterOS',
    'device.uptime' => 'Uptime',
    'device.board' => 'Board',
    'device.health' => 'Kasar-saritaan ti Salun-at',
    'device.temp_label' => 'Temperatura:',
    'device.voltage_label' => 'Boltahe:',
    'device.unknown' => 'Saan a Ammuan',
    'device.na' => 'n/a',
    'device.cpu' => 'CPU',
    'device.memory' => 'Memorya',
    'device.disk' => 'Disk',
    'device.board_model' => 'Modelo ti Board',
    'device.serial' => 'Serial',
    'device.architecture' => 'Arkitektura',
    'device.cpu_label' => 'CPU',
    'device.cores' => 'cores',
    'device.build' => 'Build',
    'device.failed_load' => 'Napanawag a mang-load ti impormasion ti sistema',
    // Generate users preview JS strings
    'generate.generating' => 'Agpar-partuat...',
    'generate.print_fetch_failed' => 'Napalpak ti panagkuha ti imprinta: %s',
    'generate.network_not_ok' => 'Saan nasayaat ti response ti network: %s',
    'generate.generation_failed' => 'Napalpak ti panagpartuat: %s',
    'generate.unknown_error' => 'Saan ammo a error',
    'generate.preview_not_available' => 'Saan a magun-od ti preview',
    'generate.failed_print_dialog' => 'Napalpak a bukaen ti native print dialog: %s',
    'generate.cached_cleared' => 'Nalinawan ti naka-cache a batch',
    'generate.failed_clear_cached' => 'Napalpak a linawan ti naka-cache a batch',
    'generate.preview_failed' => 'Napalpak ti preview',
    'generate.preview' => 'Panagkita',
    'generate.unexpected_error' => 'Saan a naasahan a error: %s',
    'generate.generated' => 'Naaramid nga %s a users',
    'generate.request_failed' => 'Napalpak ti request bayat ti panagpartuat ti vouchers.',
    'generate.generate' => 'Partuat',

    // Dashboard Hotspot Active Sessions
    'dashboard.hotspot.as.title'=> 'Aktibo a Session ti Hotspot',
    'dashboard.ppp.as.title'=> 'Aktibo a PPPoE Session',
    // JS dashboard strings (used by client-side locale export)
    'dashboard.no_active_sessions' => 'Awan aktibo a session',
    'dashboard.no_ppp_active_sessions' => 'Awan aktibo a PPP session',
    'dashboard.active_session' => 'aktibo a session',
    'dashboard.active_sessions' => 'aktibo a session(s)',
    'dashboard.name' => 'Nagan',
    'dashboard.address' => 'Address',
    'dashboard.uptime' => 'Uptime',
    'dashboard.service' => 'Serbisyo',
    'dashboard.not_monitoring' => 'Saan a Nakamonitor',
    'dashboard.more_format' => '... ken %d pay',
    'dashboard.unable_load_active' => 'Saan a ma-load dagiti aktibo a session',
    'dashboard.unable_load_ppp' => 'Saan a ma-load dagiti aktibo a PPP session',

    // hotspot.php
    // Hotspot Page
    'hotspot.title'=> 'Manadjir ti Hotspot',
    'hotspot.desc'=> 'Idar-ay dagiti hotspot Users, User Profile, aktibo a session ken Hosts.',
    'hotspot.users'=> 'Users',
    'hotspot.profiles'=> 'Profile',
    'hotspot.active'=> 'Aktibo',
    'hotspot.hosts'=> 'Hosts',

    // Hotspot Page Descriptions
    'hotspot.users.desc'=> 'Agaramid, editar ken idar-ay dagiti individual a hotspot user account.',
    'hotspot.profiles.desc'=> 'Idar-ay ti bandwidth, session ken rate-limit a profile para kadagiti user.',
    'hotspot.active.desc'=> 'Kitaen ken ikonektar dagiti agtultuloy a aktibo a hotspot session.',
    'hotspot.hosts.desc'=> 'Sukisukimat ken idar-ay dagiti device a nakaikonekta iti hotspot.',

    // Hotspot Page Buttons
    'hotspot.open.users'=> 'Buksan ti Users',
    'hotspot.open.profiles'=> 'Buksan ti Profiles',
    'hotspot.open.active'=> 'Buksan ti Aktibo',
    'hotspot.open.hosts'=> 'Buksan ti Hosts',

    // firewall.php
    'firewall.title' => 'Firewall',
    'firewall.desc' => 'Manage firewall rules, NAT, mangle, and traffic inspection tools.',
    'firewall.filter' => 'Filter Rules',
    'firewall.nat' => 'NAT',
    'firewall.mangle' => 'Mangle',
    'firewall.raw' => 'Raw',
    'firewall.connections' => 'Connections',
    'firewall.address' => 'Address Lists',
    'firewall.layer7' => 'Layer7 Protocols',
    'firewall.filter.desc' => 'Create and organize packet filtering rules for traffic control.',
    'firewall.nat.desc' => 'Configure source and destination NAT policies for your network.',
    'firewall.mangle.desc' => 'Mark packets and connections for advanced routing and QoS.',
    'firewall.raw.desc' => 'Apply raw prerouting filters before connection tracking.',
    'firewall.connections.desc' => 'Inspect current firewall connection tracking entries.',
    'firewall.address.desc' => 'Maintain reusable address lists for rule matching.',
    'firewall.layer7.desc' => 'Manage Layer7 protocol patterns for deep packet inspection.',
    'firewall.open.filter' => 'Open Filter Rules',
    'firewall.open.nat' => 'Open NAT',
    'firewall.open.mangle' => 'Open Mangle',
    'firewall.open.raw' => 'Open Raw',
    'firewall.open.connections' => 'Open Connections',
    'firewall.open.address' => 'Open Address Lists',
    'firewall.open.layer7' => 'Open Layer7 Protocols',
    'firewall.back-to-firewall' => 'Back to Firewall',

    // Hotspot - Back Button
    'hotspot.back-to-hotspot'=> 'Agturong Manen iti Hotspot Manager',

    // Hotspot General Buttons
    'hotspot.action.button'=> 'Aramid',
    'hotspot.generate.button'=> 'Agaramid',
    'hotspot.add-user.button'=> 'Agaramid ti User',
    'hotspot.enable.button'=> 'Ipatungpal',
    'hotspot.add-profile.button'=> 'Agaramid ti Profile',
    'hotspot.edit.button'=> 'Editar',
    'hotspot.remove.button'=> 'Ikkat',
    'hotspot.disable.button'=> 'Ikkaten',
    'hotspot.export.users'=> 'I-export ti Users',
    'hotspot.export.button'=> 'I-export',
    'hotspot.button.refresh'=> 'Rinfreskan',
    'hotspot.button.prev'=> 'Iti Napan',
    'hotspot.button.next'=> 'Sumaruno',
    'hotspot.sort.by'=> 'Isort babaen',
    'hotspot.sort.profiles'=> 'Isort babaen ti Profile',
    'hotspot.sort.comments'=> 'Isort babaen ti Comment',

    // Hotspot Table Headers
    'hotspot.table.th.select'=> 'Pilia Amin',
    'hotspot.table.th.server'=> 'Nagan ti Server',
    'hotspot.table.th.user'=> 'User',
    'hotspot.table.th.name'=> 'Nagan',
    'hotspot.table.th.address'=> 'Address',
    'hotspot.table.th.mac'=> 'MAC Address',
    'hotspot.table.th.profile'=> 'Profile',
    'hotspot.table.th.uptime'=> 'Uptime',
    'hotspot.table.th.bytes-in'=> 'Bytes In',
    'hotspot.table.th.bytes-out'=> 'Bytes Out',
    'hotspot.table.th.comment'=> 'Komento',
    'hotspot.table.th.to-address'=> 'Pakay a Address',
    'hotspot.table.th.last-seen'=> 'Nakita Idi',
    'hotspot.status.loading'=> 'Agloload ti Hotspot Users...',

    // Hotspot JS: hosts, profiles, users, modals
    // Hosts list
    'hotspot.hosts.no_hosts' => 'Awan hosts',
    'hotspot.hosts.loading' => 'Agloload...',
    'hotspot.hosts.failed_to_contact_api' => 'Napalpak ti panagkonektar iti API',
    'hotspot.hosts.page_info' => 'Pahina %s / %s (%s)',

    // Profiles list
    'hotspot.profiles.no_profiles' => 'Awan profile',
    'hotspot.profiles.loading' => 'Agloload...',
    'hotspot.profiles.failed_to_load' => 'Napalpak ti panag-load ti profile',
    'hotspot.profiles.failed_to_contact_api' => 'Napalpak ti panagkonektar iti API',
    'hotspot.profiles.no_pools' => '(awan pool)',
    'hotspot.profiles.no_queues' => '(awan queue)',
    'hotspot.profiles.no_types' => '(awan type)',
    'hotspot.profiles.select' => 'Pilia...',
    'hotspot.profiles.default' => 'default',
    'hotspot.profiles.no_profiles_option' => '(awan profile)',
    'hotspot.profiles.page_info' => 'Pahina %s / %s (%s)',
    'hotspot.profiles.name_required' => 'Masapul ti Nagan',
    'hotspot.profiles.added' => 'Naidagdag ti Profile',
    'hotspot.profiles.add_failed' => 'Napalpak ti panagdugang ti profile: %s',
    'hotspot.profiles.server_contact_failed' => 'Napalpak ti panagkonektar iti server',
    'hotspot.profiles.id_missing' => 'Awan ti profile id',
    'hotspot.profiles.updated' => 'Na-update ti Profile',
    'hotspot.profiles.update_failed' => 'Napalpak ti panag-update ti profile: %s',
    'hotspot.profiles.removed' => 'Naikkat ti Profile',
    'hotspot.profiles.remove_failed' => 'Napalpak ti panag-ikkat ti profile: %s',
    'hotspot.profiles.select_remove' => 'Pilia ti profile a ikkat',
    'hotspot.profiles.remove_confirm' => 'Sigurado ka kadi a kayat mo nga ikkat ti napili a profile?',
    'hotspot.profiles.remove_confirm_title' => 'Kumpirma',
    
    // Admin Control Panel translations
    'admin.title' => 'Panel ti Admin',
    'admin.desc' => 'Sentro ti Kontrol ti Misyon',
    'admin.maintenance' => 'Maintenance',
    'admin.maintenance.desc' => 'I-toggle ti site-wide maintenance a pakakitaan para kadagiti bisita.',
    'admin.page_access' => 'Kontrol ti Akses ti Pahina',
    'admin.page_access.desc' => 'Pangabak wenno ipalubos dagiti users a makapasok iti dadduma a sektion ti app.',
    'admin.view_logs' => 'Kitaen ti Logs',
    'admin.logs.title' => 'Admin Access Logs',
    'admin.save' => 'I-save',
    'admin.saved' => 'Naisalbar',
    'admin.save_failed' => 'Napalpak ti panag-save',
    'admin.save_error' => 'Napalpak ti panag-save ti setings',
    'admin.load_logs_failed' => 'Napalpak ti panag-load ti logs',
    'admin.access_denied' => 'Awan karbengam a makapasok iti Admin Control Panel.',
    'access.restricted.title' => 'Naikeddeng ti Akses',
    'access.restricted.desc' => 'Daytoy a sektion ket kasalukuyan a naka-disable',
    'admin.section_disabled' => 'Sektion nga in-disable ti admin',
    'nav.disabled' => 'Naka-disable',
    // Maintenance toggle JS strings
    'maintenance.toast' => 'Modo ti Maintenance' . '<br/><br/>' . 'Naikid dagiti funciones bayat a naka-enable ti modo ti maintenance.',
    'maintenance.update_toast' => 'Modo ti Panag-upgrade ti Sistema' . '<br/><br/>' . 'Adda agdama a panag-update ti sistema. Sabali a features mabalin nga saan a magun-od.',
    'maintenance.set_failed' => 'Napalpak a iset ti estado ti modo ti maintenance',

    // Users modals and export
    'hotspot.modals.no_servers' => '(awan server)',
    'hotspot.modals.no_profiles' => '(awan profile)',
    'hotspot.modals.please_select_export' => 'Pilia ti maysa wenno ad-adu a user a i-export',
    'hotspot.modals.select_at_least_one_field' => 'Pilia iti maysa a field a i-export',
    'hotspot.modals.no_users_selected' => 'Awan a napili a users',
    'hotspot.modals.no_data_to_export' => 'Awan data a ma-export',
    'hotspot.modals.export_started' => 'Nangrugi ti export',
    'hotspot.modals.export_failed' => 'Napalpak ti export',
    'hotspot.modals.add_user_title' => 'Agaramid ti Hotspot User',
    'hotspot.modals.edit_user_title' => 'Editar ti Hotspot User',
    'hotspot.modals.create_button' => 'Agaramid',
    'hotspot.modals.update_button' => 'I-update',
    'hotspot.modals.failed_load_user' => 'Napalpak ti panag-load ti data ti user',
    'hotspot.modals.select_one_to_edit' => 'Pilia ti maysa laeng a user a i-edit',
    'hotspot.modals.user_updated' => 'Na-update ti User',
    'hotspot.modals.user_created' => 'Naaramid ti User',
    'hotspot.modals.create_update_failed' => 'Napalpak ti panag-aramid/wenno update',
    'hotspot.modals.create_request_failed' => 'Napalpak ti create request',

    // Users list
    'hotspot.users.no_users' => 'Awan users',
    'hotspot.users.loading' => 'Agloload...',
    'hotspot.users.empty_response' => 'Awan a response',
    'hotspot.users.failed_to_contact_api' => 'Napalpak ti panagkonektar iti API',
    'hotspot.users.select_one_or_more' => 'Pilia maysa wenno ad-adu a users.',
    'hotspot.users.remove_confirm' => 'Ikkaten dagiti napili a users? Saan a mabalin a balikenn.',
    'hotspot.users.action_completed' => 'Naisayangkat ti " %s ". Naurnos: %s/%s',
    'hotspot.users.action_failed' => 'Napalpak ti aramid: %s',
    'hotspot.users.request_failed' => 'Napalpak ti request',
    'hotspot.users.sort_profiles' => 'Isort ti Profile',
    'hotspot.users.sort_comments' => 'Isort ti Comment',
    'hotspot.users.select_profiles_placeholder' => 'Isort ti Profile',
    'hotspot.users.select_comments_placeholder' => 'Isort ti Comment',

    // Hotspot JS helper strings
    'hotspot.no_active_entries' => 'Awan aktibo a entry',
    'hotspot.loading' => 'Agloload...',
    'hotspot.failed_to_contact_api' => 'Napalpak ti panagkonektar iti API',
    'hotspot.page_info' => 'Pahina %s / %s (%s)',

    // Hotspot Modal Tabs and Titles
    'hotspot.modal.title.generate'=> 'Agaramid ti Users / Vouchers',
    'hotspot.modal.general.tab'=> 'General',
    'hotspot.modal.printing.tab'=> 'Panagimprinta',
    'hotspot.modal.stats.tab'=> 'Estadistika',
    'hotspot.modal.queueing.tab'=> 'Queueing',
    'hotspot.modal.scripts.tab'=> 'Scripts',

    // Hotspot Modal Form Generate / Add User - General Tab
    'hotspot.modal.form.qty'=> 'Bilang',
    'hotspot.modal.form.server'=> 'Hotspot Server',
    'hotspot.modal.form.qty.help'=> 'Bilang ti vouchers / token codes a mabukel.',
    'hotspot.modal.form.username'=> 'Nagan ti Ag-Usar',
    'hotspot.modal.form.password'=> 'Password',
    'hotspot.modal.form.user-type'=> 'Klase ti User',
    'hotspot.modal.form.user-type.help'=> 'Username & Password - Agaramid ti random a username ken sabali a password (para iti regular a login).<br/>Username = Password - Agaramid ti random a username a kapareho ti password (para iti voucher).',
    'hotspot.modal.form.code-length'=> 'Kaunggan ti Kodigo',
    'hotspot.modal.form.characters'=> 'Karakter',
    'hotspot.modal.form.user-profile'=> 'Profile ti User',
    'hotspot.modal.form.comment'=> 'Komento',
    'hotspot.modal.form.optional-comment'=> 'Optional a Comment',
    'hotspot.modal.form.mac-address'=>  'MAC Address',
    'hotspot.modal.form.time-limit'=>  'Limitasyon ti Oras',
    'hotspot.modal.form.time-limit.help'=> 'Maawat a pormat:<br/>m - Minuto<br/>h - Oras<br/>d - Aldaw<br/><br/>Ma-disallow ti user no maabot ti time limit.<br/><br/>Dagiti Nota:<br/>1. No naisett ti Time Limit ken Data Limit, ma-disallow ti user no maabot ti maysa kadagiti limit.<br/>2. No awan ti naiset a limit, agtalinunod a aktibo ti user agingga nga madiaktibar wenno maikkat manually.<br/>3. Mabalin nga usarenn ti Time Limit ken Data Limit nga agkakaduwa tapno mas kontrolado dagiti session ti user.<br/>4. Siguradua a nasayaat ti pormat tapno maliklikan ti error iti panangaramid ti user.<br/>5. Dagiti ejemplo: 30m (30 minuto), 2h (2 oras), 1d (1 aldaw).',
    'hotspot.modal.form.data-limit'=>  'Limitasyon ti Data',
    'hotspot.modal.form.data-limit.help'=> 'Maawat a pormat:<br/>M - Megabit<br/>G - Gigabit<br/><br/>Ma-disallow ti user no maabot ti data limit.<br/><br/>Dagiti Nota:<br/>1. No naisett ti Time Limit ken Data Limit, ma-disallow ti user no maabot ti maysa kadagiti limit.<br/>2. No awan ti naiset a limit, agtalinunod a aktibo ti user agingga nga madiaktibar wenno maikkat manually.<br/>3. Mabalin nga usarenn ti Time Limit ken Data Limit nga agkakaduwa tapno mas kontrolado dagiti session ti user.<br/>4. Siguradua a nasayaat ti pormat tapno maliklikan ti error iti panangaramid ti user.<br/>5. Dagiti ejemplo: 500M (500 Megabit), 2G (2 Gigabit).',

    // Hotspot Modal Form Generate - Printing Tab
    'hotspot.modal.form.hotspot-name'=> 'Nagan ti Hotspot',
    'hotspot.modal.form.hotspot-dns'=> 'DNS',
    'hotspot.modal.form.hotspot-currency'=> 'Kwartada',
    'hotspot.modal.form.hotspot-select-currency'=> 'Pilia ti Kwartada',
    'hotspot.modal.form.hotspot-price'=> 'Presio',
    'hotspot.modal.form.hotspot-include-comment'=> 'Ikkabil ti Comment',
    'hotspot.modal.form.hotspot-include-comment-desc'=> 'Ikkabil ti nagpartuat a comment iti naimprinta a voucher',
    'hotspot.modal.form.hotspot-template'=> 'Templete',

    // Hotspot Modal Form Generate - Printing Placeholders
    'hotspot.modal.form.hotspot-name-placeholder'=> 'Hotspot Ko',
    'hotspot.modal.form.hotspot-dns-placeholder'=> 'hotspot.mtikops.com',
    'hotspot.modal.form.hotspot-price-placeholder'=> 'Presio tunggal kada Voucher',

    // Hotspot Modal Form Generate - User-Type
    'hotspot.modal.form.user-type-regular'=> 'Username & Password',
    'hotspot.modal.form.user-type-voucher'=> 'Username = Password',

    // Hotspot Modal Form Generate - Characters
    'hotspot.modal.form.characters-lower'=> 'abcd (bassit a letra)',
    'hotspot.modal.form.characters-upper'=> 'ABCD (Nangato a letra)',
    'hotspot.modal.form.characters-mixed'=> 'AbCd (Mixed)',
    'hotspot.modal.form.characters-num'=> '1234 (Numero)',
    'hotspot.modal.form.characters-lower-num'=> 'a1b2 (bassit a letra & Numero)',
    'hotspot.modal.form.characters-upper-num'=> 'A1B2 (Nangato a letra & Numero)',
    'hotspot.modal.form.characters-mixed-num'=> 'aA1bB2 (Mixed & Numero)',

    // Hotspot Modal Form Stats - Stats Tab
    'hotspot.modal.form.stats.uptime'=> 'Uptime',
    'hotspot.modal.form.stats.bytes_in'=> 'Bytes In',
    'hotspot.modal.form.stats.bytes_out'=> 'Bytes Out',
    'hotspot.modal.form.stats.limit-uptime'=> 'Limitasyon ti Uptime',
    'hotspot.modal.form.stats.limit-bytes_total'=> 'Limitasyon ti Amin a Bytes',
    'hotspot.modal.form.stats.user-code'=> 'Kodigo ti User',
    'hotspot.modal.form.stats.expire-date'=> 'Petsa ti Panag-expire',

    // Hotspot Modal Form Misc
    'hotspot.modal.form.loading' => 'Agloload ti data...',

    // Hotspot Modal Form Buttons
    'hotspot.modal.form.button.generate-print'=> 'Agaramid & I-imprinta',
    'hotspot.modal.form.button.generate'=> 'Agaramid Laeng',
    'hotspot.modal.form.button.clear-cached-batch'=> 'Linawan ti Naka-cache a Batch',
    'hotspot.modal.form.button.close'=> 'Sardeng',
    'hotspot.modal.form.button.create'=> 'Agaramid',
    'hotspot.modal.form.button.cancel'=> 'Ikansela',

    // profiles.php
    // Hotspot User Profiles Page
    'hotspot.user.profiles.title'=> 'Profile',
    'hotspot.user.profiles.desc'=> 'Idar-ay ti bandwidth, session ken rate-limit a profile para kadagiti user.',

    // Hotspot User Profiles Table Headers
    'hotspot.user.profiles.th.name'=> 'Nagan',
    'hotspot.user.profiles.th.shared-users'=> 'Shared Users',
    'hotspot.user.profiles.th.rate-limit'=> 'Rate Limit',
    'hotspot.user.profiles.th.idle-timeout'=> 'Idle Timeout',
    'hotspot.user.profiles.th.keepalive-timeout'=> 'Keepalive Timeout',
    'hotspot.user.profiles.th.queue-type'=> 'Klase ti Queue',

    // Hotspot User Profiles Modal Form
    'hotspot.user.profiles.modal.title.add-profile'=> 'Agaramid ti Profile',

    // Hotspot User Profile Form Fields - General Tab
    'hotspot.user.profiles.form.name'=> 'Nagan ti Profile',
    'hotspot.user.profiles.form.pool'=> 'Address Pool',
    'hotspot.user.profiles.form.rate-limit-rx'=> 'Rate Limit (RX)',
    'hotspot.user.profiles.form.rate-limit-tx'=> 'Rate Limit (TX)',
    'hotspot.user.profiles.form.shared-users'=> 'Shared Users',
    'hotspot.user.profiles.form.expiry-mode'=> 'Klase ti Panag-expire',
    'hotspot.user.profiles.form.expiry-duration'=> 'Kadawyan ti Panag-expire',
    'hotspot.user.profiles.form.lock-device'=> 'I-lock iti Device',
    'hotspot.user.profiles.form.lock-server'=> 'I-lock iti Server',
    'hotspot.user.profiles.form.comment'=> 'Komento',

    // Expiry Mode Options
    'hotspot.user.profiles.form.expiry-mode_none'=> 'Awan',
    'hotspot.user.profiles.form.expiry-mode_remove'=> 'Ikkaten',
    'hotspot.user.profiles.form.expiry-mode_notice'=> 'Abiso',
    'hotspot.user.profiles.form.expiry-mode_remove_record'=> 'Ikkaten ken Irekord',
    'hotspot.user.profiles.form.expiry-mode_remove_notice'=> 'Ikkaten ken Abisuan',
    'hotspot.user.profiles.form.expiry-mode_help'=> 'Piliin no kasano ti panangtaripato iti panag-expire ti user para iti daytoy a profile.<br/><br/>Pagpilian:<br/>Awan - Awan expiration.<br/>Ikkaten - Ikkaten ti user iti expiration nga automatico.<br/>Abiso - Ipaammo ti user iti expiration ngem saan a ikkaten.<br/>Ikkaten ken Irekord - Ikkaten ti user ken irekord ti pannakaitaliaw.<br/>Abisuan ken Ikkaten - Ipaammo ti user ken saka ikkaten iti expiration.',

    // Hotspot User Profile Form Fields - Queue Tab
    'hotspot.user.profiles.form.parent-queue'=> 'Parent Queue',
    'hotspot.user.profiles.form.queue-type'=> 'Klase ti Queue',

    // Hotspot User Profiles Form Fields - Scripts Tab
    'hotspot.user.profiles.form.on-login-script'=> 'Script iti Panag-login',
    'hotspot.user.profiles.form.on-login-script_placeholder'=> 'Optional a script a mapatakder iti panag-login',
    'hotspot.user.profiles.form.on-logout-script'=> 'Script iti Panag-logout',
    'hotspot.user.profiles.form.on-logout-script_placeholder'=> 'Optional a script a mapatakder iti panag-logout',

    // Hotspot User Profile Modal - Edit Profile
    'hotspot.user.profile.edit'=> 'Editar ti Profile',
    'hotspot.user.profile.select.profile'=> 'Pilia ti Profile',
    'hotspot.user.profile.select.profile.desc'=> 'Pilia ti profile a i-edit. Kalpasan ti panagpili, agbukas ti entero a editor.',
    'hotspot.user.profile.button.cancel'=> 'Ikansela',
    'hotspot.user.profile.button.save'=> 'I-save',

    // Hotspot User Profile Modal - Remove Profile
    'hotspot.user.profiles.remove'=> 'Ikkaten ti Profile',
    'hotspot.user.profiles.remove-select'=> 'Pilia ti Profile a Ikkaten',
    'hotspot.user.profiles.remove-warning'=> 'Saan a maibalik daytoy a gundaway. Sigurado a kayat mo a ikkaten ti napili a profile.',
    'hotspot.user.profiles.remove.button-cancel'=> 'Ikansela',
    'hotspot.user.profiles.remove.button-remove'=> 'Ikkaten',

    // Hotspot Export Users Modal
    'hotspot.export.user.desc'=> 'Pilia dagiti field a kayat mo nga ikabil iti export. Dagiti napili laeng a users ti ma-export.',
    'hotspot.export.user.name'=> 'Nagan',
    'hotspot.export.user.price'=> 'Presio',
    'hotspot.export.user.password'=> 'Password',
    'hotspot.export.user.profile'=> 'Profile',
    'hotspot.export.user.comment'=> 'Komento',
    'hotspot.export.user.inc-header'=> 'Ikkabil ti Header',
    'hotspot.export.user.column-order'=> 'Urnos ti Kolumna',
    'hotspot.export.user.column-up'=> 'Iangat',
    'hotspot.export.user.column-down'=> 'Ibungbong',
    'hotspot.export.user.column-desc'=> 'Pilia ti field ken usarin ti Iangat/Ibungbong tapno mabaliwan ti urnos ti kolumna.',
    'hotspot.export.user.button-cancel'=> 'Ikansela',
    'hotspot.export.user.button-download'=> 'I-download ti CSV',
    'hotspot.export.user.button-move-up'=> 'I-alsa',
    'hotspot.export.user.button-move-down'=> 'Ipaaba',
    'hotspot.export.user.column-order-desc'=> 'Pilia ti field ken usarin dagiti boton a I-alsa/Ipaaba tapno mabaliwan ti urnos dagiti kolumna.',

    // Hotspot Print Preview Modal
    'hotspot.print.preview.title'=> 'Panagkita ti Imprinta',
    'hotspot.print.preview.desc'=> 'Kitaen ti napili a users sakbay ti panag-imprinta.',
    'hotspot.print.preview.button-cancel'=> 'Ikansela',
    'hotspot.print.preview.button-close'=> 'Sardeng',
    'hotspot.print.preview.button-print'=> 'I-save & Imprinta',
    

    // active.php
    // Hotspot Active Sessions Page

    // hosts.php
    // Hotspot Hosts Page

    // settings.php
    // Hotspot Settings Page
    'settings.title'=> 'Setings',
    'settings.desc'=> 'I-configure ti identidad ti device, serbisyo ti sistema ken aksion ti maintenance.',
    'settings.identity'=> 'Identidad',
    'settings.ntp'=> 'NTP',
    'settings.files'=> 'File',
    'settings.users'=> 'Users',
    'settings.scheduler'=> 'Scheduler',
    'settings.scripts'=> 'Scripts',
    'settings.reset'=> 'Reset',
    'settings.reboot'=> 'Reboot',
    'settings.shutdown'=> 'Shutdown',

    // Settings Page Buttons
    //'settings.open.identity'=> 'Open Identity',
    //'settings.open.ntp'=> 'Open NTP',
    'settings.open.files'=> 'Buksan ti File',
    'settings.open.users'=> 'Idar-ay dagiti Users',
    'settings.open.scheduler'=> 'Buksan ti Scheduler',
    'settings.open.scripts'=> 'Buksan ti Scripts',
    //'settings.open.reset'=> 'Reset',
    //'settings.open.reboot'=> 'Reboot',
    //'settings.open.shutdown'=> 'Shutdown',

    // SETTINGS GENERAL BUTTONS
    'settings.buttons.upload'=> 'I-upload',
    'settings.buttons.delete'=> 'Ikkat',
    'settings.buttons.refresh'=> 'Rinfreskan',
    'settings.buttons.save'=> 'I-save',
    'settings.buttons.cancel'=> 'Ikansela',
    'settings.buttons.close'=> 'Sardeng',
    'settings.buttons.edit'=> 'Editar',
    'settings.buttons.add'=> 'Agaramid',
    'settings.buttons.remove'=> 'Ikkat',
    'settings.buttons.prev'=> 'Iti Napan',
    'settings.buttons.next'=> 'Sumaruno',
    'settings.sort.by'=> 'Isort babaen',
    'settings.sort' => 'Isort',

    // Settings Page - Back Button
    'settings.back-to-settings'=> 'Agturong Manen iti Setings',

    // Settings Page - Actions
    'settings.actions'=> 'Aramid',

    // Settings Page - Loading
    'settings.loading'=> 'Agloload ti Setings...',

    // Settings Page Descriptions
    'settings.identity.desc'=> 'Kitaen ken editar ti identidad ti device ken kangrunaan a impormasion ti sistema.',
    'settings.ntp.desc'=> 'I-configure dagiti NTP a seting para iti nasayaat a pagilasin ti oras.',
    'settings.files.desc'=> 'Idar-ay dagiti in-upload a file ken script a nakatago iti device.',
    'settings.users.desc'=> 'Idar-ay dagiti system users ken dagiti karbengan da.',
    'settings.scheduler.desc'=> 'Agaramid ken idar-ay dagiti naka-iskedyul a task para iti maintenance ken automation.',
    'settings.scripts.desc'=> 'Idar-ay ken ipataray dagiti custom a script iti device.',
    'settings.reset.desc'=> 'I-reset ti konfigurasyon iti default. Agar-aramid nga agtalinaed.',
    'settings.reboot.desc'=> 'I-restart ti device manipud remoto. Siguraduen a naisalbar amin a panagbaliw sakbay ti reboot.',
    'settings.shutdown.desc'=> 'I-shutdown ti device manipud remoto ken nawaya. Agar-aramid nga agtalinaed.',

    // Settings Table Headers
    'settings.table.th.name'=> 'Nagan',
    'settings.table.th.group'=> 'Grupo',
    'settings.table.th.last-login'=> 'Urayenne a Log-in',
    'settings.table.th.comment'=> 'Komento',
    'settings.table.th.role'=> 'Trabaho',
    'settings.table.th.select'=> 'Pilia Amin',
    'settings.table.th.username'=> 'Nagan ti Ag-Usar',
    'settings.table.th.password'=> 'Password',
    'settings.table.th.actions'=> 'Aramid',
    'settings.table.th.next-run'=> 'Sumaruno a Pataray',
    'settings.table.th.interval'=> 'Interbalo',
    'settings.table.th.enabled'=> 'Naka-enable',
    'settings.table.th.size'=> 'Kadakkel',
    'settings.table.th.owner'=> 'Agar-ari',
    'settings.table.th.date'=> 'Petsa',

   
    // Settings Page - Identity
    'settings.identity.placeholder'=> 'Ipakat ti identidad ti sistema',
    'settings.identity.caption'=> 'Daytoy ti nagan a makita iti logs ken panagkilala ti network.',

    // Settings Page - Identity Buttons
    'settings.identity.save'=> 'I-save ti Identidad',
    'settings.identity.refresh'=> 'Rinfreskan',

    // Settings Page - NTP Modal
    'settings.ntp.enabled'=> 'Naka-enable',
    'settings.ntp.enabled-yes'=> 'Naka-enable',
    'settings.ntp.enabled-no'=> 'Naka-disable',
    'settings.ntp.mode'=> 'Modo',
    'settings.ntp.mode-broadcast'=> 'Broadcast',
    'settings.ntp.mode-manycast'=> 'Manycast',
    'settings.ntp.mode-multicast'=> 'Multicast',
    'settings.ntp.mode-unicast'=> 'Unicast',
    'settings.ntp.server'=> 'NTP Server',
    'settings.ntp.server-add'=> 'Agaramid ti Server',
    'settings.ntp.server-refresh'=> 'Rinfreskan',
    'settings.ntp.server-save'=> 'I-save',

    // Settings Page - NTP Status
    'settings.ntp.status'=> 'Estado',
    'settings.ntp.freq.drift'=> 'Pannakabalbaleg ti Frequency',
    'settings.ntp.synced.server'=> 'Nakasinkron a Server',
    'settings.ntp.synced.stratum'=> 'Nakasinkron a Stratum',
    'settings.ntp.system.offset'=> 'Offset ti Sistema',

    // Settings Page - Files
    'settings.files.title'=> 'Manadjir ti File',
    'settings.files.desc'=> 'I-upload, i-download ken idar-ay dagiti file a nakatago iti device.',


    // Settings Page - Users
    'settings.users.title'=> 'Manadjir ti User',
    'settings.users.desc'=> 'Agaramid, editar ken idar-ay dagiti system users ken dagiti karbengan da.',

    // Settings Page - Scheduler
    'settings.scheduler.title'=> 'Scheduler',
    'settings.scheduler.desc'=> 'Agaramid ken idar-ay dagiti naka-iskedyul a task para iti maintenance ken automation.',

    // Settings Page - Scripts
    'settings.scripts.title'=> 'Scripts',
    'settings.scripts.desc'=> 'Agaramid, editar ken patarayen dagiti custom a script iti device.',

    // Settings Page - Reset
    // Reset Modal
    'settings.reset.type'=> 'Klase ti Reset',
    'settings.reset.config'=> 'Reset ti Konfigurasyon (saganaen dagiti user file)',
    'settings.reset.all'=> 'Factory Reset (ikkaten amin, ibalik ti default)',
    'settings.reset.delay'=> 'Urayen (segundo)',
    'settings.reset.delay.desc'=> 'Iset iti 0 tapno maipatpataray daytoy iti ngay-nga oras no usaren ti Schedule a boton, wenno pinduten ti "Reset Now" tapno agpartuat ngay-nga oras.',

    //Reset Buttons
    'settings.reset.button.schedule'=> 'Iskedjul ti Reset',
    'settings.reset.button.reset-now'=> 'Reset Ita',

    // Settings Page - Reboot
    // Reboot Modal
    'settings.reboot.delay'=> 'Urayen (segundo)',
    'settings.reboot.delay.desc'=> 'Iset iti 0 tapno ma-reboot ngay-nga oras no usaren ti Schedule a boton, wenno pinduten ti "Reboot Now" tapno ag-reboot ngay-nga oras.',

    // Reboot Buttons
    'settings.reboot.button.schedule'=> 'Iskedjul ti Reboot',
    'settings.reboot.button.reboot-now'=> 'Reboot Ita',

    // Settings Page - Shutdown
    // Shutdown Modal
    'settings.shutdown.delay'=> 'Urayen (segundo)',
    'settings.shutdown.delay.desc'=> 'Iset iti 0 tapno ma-shutdown ngay-nga oras no usaren ti Schedule a boton, wenno pinduten ti "Shutdown Now" tapno ag-shutdown ngay-nga oras.',

    // Shutdown Buttons
    'settings.shutdown.button.schedule'=> 'Iskedjul ti Shutdown',
    'settings.shutdown.button.shutdown-now'=> 'Shutdown Ita',


    // queues.php
    // Queues Page
    'queues.title'=> 'Manadjir ti Queues',
    'queues.desc'=> 'Idar-ay dagiti Simple queues, Tree queues ken Klase ti Queue.',

    'queues.simple'=> 'Simple',
    'queues.tree'=> 'Tree',
    'queues.types'=> 'Klase',
    'queues.simple-queue'=> 'Simple Queues',
    'queues.queue-tree'=> 'Queue Trees',
    'queues.queue-types'=> 'Klase ti Queue',

    // Queues Page Descriptions
    'queues.simple.desc'=> 'Agaramid ken idar-ay dagiti simple a per-host/per-target a queue.',
    'queues.tree.desc'=> 'Idar-ay dagiti hierarchical a queue trees para iti naurnos a traffic shaping.',
    'queues.types.desc'=> 'Idefine ken idar-ay dagiti klase ti queue ken packet classifier.',

    // Queues Page Buttons
    'queues.open.simple'=> 'Buksan ti Simple Queue',
    'queues.open.tree'=> 'Buksan ti Queue Tree',
    'queues.open.types'=> 'Buksan ti Klase ti Queue',

    // Queues Page - Back Button
    'queues.back-to-queues'=> 'Agturong Manen iti Queues Manager',

    // Queues General Buttons
    'queues.button.new'=> 'Baro',
    'queues.button.edit'=> 'Editar',
    'queues.button.enable'=> 'Ipatungpal',
    'queues.button.disable'=> 'Ikkaten',
    'queues.button.remove'=> 'Ikkat',
    'queues.button.refresh'=> 'Rinfreskan',
    'queues.button.pause-polling'=> 'Pausen ti Polling',
    'queues.sort.by'=> 'Isort babaen',
    'queues.sort'=> 'Isort',
    'queues.select.all'=> 'Pilia Amin',
    'queues.button.prev'=> 'Iti Napan',
    'queues.button.next'=> 'Sumaruno',
    'queues.button.save'=> 'I-save',
    'queues.button.cancel'=> 'Ikansela',
    'queues.button.create'=> 'Agaramid',


    // Queues Loading Status
    'queues.status.loading'=> 'Agloload dagiti Queues...',

    // simple.php
    // Simple Queues Page


    // Simple Queues Action Buttons
    'queues.simple.actions'=> 'Aramid',
    'queues.simple.actions.desc'=> 'Aramiden dagiti aramid kadagiti napili a queue.',

    // Queues Table Headers
    'queues.table.th.name'=> 'Nagan',
    'queues.table.th.number'=> 'Numero',
    'queues.table.th.target'=> 'Pakay',
    'queues.table.th.upload-limit'=> 'Limit ti Upload',
    'queues.table.th.download-limit'=> 'Limit ti Download',
    'queues.table.th.download-avg-rate'=> 'Average Rate ti Download',
    'queues.table.th.max-limit'=> 'Kadakkel a Limit',
    'queues.table.th.queue-type'=> 'Klase ti Queue',
    'queues.table.th.limit-at'=> 'Limit Idiay',
    'queues.table.th.bytes'=> 'Bytes',
    'queues.table.th.avg.rate'=> 'Average Rate',
    'queues.table.th.kind'=> 'Klase',

    // Queues Modal Form - Tabs
    'queues.tab.main'=> 'Main',
    'queues.tab.advanced'=> 'Advanced',
    'queues.tab.queueing'=> 'Queueing',

    // Queues Modal Form Tab
    'queues.modal.form.new.simple'=> 'Baro a Simple Queue',
    'queue.modal.form.edit.simple'=> 'Editar ti Simple Queue',
    'queues.modal.form.enabled'=> 'Naka-enable',
    'queues.modal.form.name'=> 'Nagan',
    'queues.modal.form.target'=> 'Pakay',
    'queues.modal.form.target-select-iface'=> 'Pilia ti Interface',
    'queues.modal.form.dst'=> 'Pagnaedan',
    'queues.modal.form.dst-select-iface'=> 'Pilia ti Interface',
    'queues.modal.form.target.dst-caption'=> 'Pilia ti interface wenno ilista ti custom a pakay idiay baba.',
    'queues.modal.form.placeholder'=> 'wenno ilista ti IP (e.g. 192.168.10.0/24 or 10.0.0.5)',
    'queues.modal.form.target.upload'=> 'Target Upload',
    'queues.modal.form.max-limit'=> 'Kadakkel a Limit',
    'queues.modal.form.target.download'=> 'Target Download',
    'queues.modal.form.pkt-marks'=> 'Packet Marks',
    'queues.modal.form.limit-at'=> 'Limit Idiay',
    'queues.modal.form.burst-limit'=> 'Burst Limit',
    'queues.modal.form.burst-threshold'=> 'Burst Threshold',
    'queues.modal.form.burst-time'=> 'Burst Time',
    'queues.modal.form.priority'=> 'Prayoridad',
    'queues.modal.form.bucket-size'=> 'Kadakkel ti Bucket',
    'queues.modal.form.parent-queue'=> 'Parent Queue',
    'queues.modal.form.queue-type'=> 'Klase ti Queue',
    'queues.modal.form.comment'=> 'Komento',
    'queues.modal.form.comment-placeholder'=> 'Optional a comment',
    'queues.modal.form.clear-parent'=> 'Linawan ti parent (ikkaten ti parent a relasyon)',

    // tree.php
    // Queue Tree Page

    // Queue Tree Action Buttons
    'queues.tree.actions'=> 'Aramid',
    'queues.tree.action.desc'=> 'Aramiden dagiti aramid kadagiti napili a queue tree entry.',

    // Queue Tree Modal Form - Tabs
    'queues.tree.create.title'=> 'Agaramid ti Queue Tree Entry',
    'queue.tree.tab.general'=> 'General',
    'queue.tree.tab.rate-limit'=> 'Rate Limit',


    // types.php
    // Queue Types Page
  
    // Queue Types Action 
    'queues.types.actions'=> 'Aramid',
    'queues.types.action.desc'=> 'Aramiden dagiti aramid kadagiti napili a klase ti queue.',


    // ppp.php
    // PPP Page
    'ppp.title'=> 'Manadjir ti PPPoE',
    'ppp.desc'=> 'Idar-ay dagiti PPPoE Server, Secret ken Profile.',

    
    'ppp.pppoe.servers'=> 'PPPoE Server',
    'ppp.servers'=> 'Server',
    'ppp.secrets'=> 'Sekreto',
    'ppp.profiles'=> 'Profile',
    'ppp.active'=> 'Aktibo a Session',
    
    // PPP Page Descriptions
    'ppp.servers.desc'=> 'Kitaen ken idar-ay dagiti PPPoE server instance ken binding.',
    'ppp.secrets.desc'=> 'Idar-ay dagiti PPPoE secreto (credential ti user).',
    'ppp.profiles.desc'=> 'Agaramid ken idar-ay dagiti PPPoE profile.',
    'ppp.active.desc'=> 'Kitaen ken i-disconnect dagiti aktibo a PPPoE session.',

    'ppp.open.servers'=> 'Buksan ti PPPoE Server',
    'ppp.open.secrets'=> 'Buksan ti Sekreto',
    'ppp.open.profiles'=> 'Buksan ti Profile',
    'ppp.open.active'=> 'Buksan ti Aktibo a Session',

    // PPP Page - Back Button
    'ppp.back-to-ppp'=> 'Agturong Manen iti PPPoE Manager',

    // PPP Actions
    'ppp.actions'=> 'Aramid',

    // PPP General Buttons
    'ppp.buttons.new'=> 'Baro',
    'ppp.buttons.edit'=> 'Editar',
    'ppp.buttons.enable'=> 'Ipatungpal',
    'ppp.buttons.disable'=> 'Ikkaten',
    'ppp.buttons.remove'=> 'Ikkaten',
    'ppp.buttons.refresh'=> 'Rinfreskan',
    'ppp.sort.by'=> 'Isort babaen',
    'ppp.sort'=> 'Isort',
    'ppp.select.all'=> '',
    'ppp.buttons.prev'=> 'Iti Napan',
    'ppp.buttons.next'=> 'Sumaruno',
    'ppp.buttons.clear'=> 'Linawan',
    'ppp.buttons.cancel'=> 'Ikansela',
    'ppp.buttons.create'=> 'Agaramid',
    'ppp.buttons.save'=> 'I-save',
    'ppp.buttons.proceed'=> 'Agpada',

    // PPP Loading Status
    'ppp.status.loading'=> 'Agloload ti PPPoE Data...',

    // PPP Secrets Table Headers
    'ppp.table.th.service-name'=> 'Nagan ti Serbisyo',
    'ppp.table.th.iface'=> 'Interface',
    'ppp.table.th.keepalive'=> 'Keepalive Timeout',
    'ppp.table.th.profile'=> 'Profile',
    'ppp.table.th.one-session-host'=> 'Maysa a Session kada Host',
    'ppp.table.th.authentication'=> 'Pang-authenticate',
    'ppp.table.th.name'=> 'Nagan',
    'ppp.table.th.password'=> 'Password',
    'ppp.table.th.service'=> 'Serbisyo',
    'ppp.table.th.address'=> 'Address',
    'ppp.table.th.caller-id'=> 'Caller ID',
    'ppp.table.th.local-address'=> 'Local Address',
    'ppp.table.th.remote-address'=> '',
    'ppp.table.th.last-logged-out'=> 'Urayenne a Naglog-out',
    'ppp.table.th.last-disc-reason'=> 'Rason ti Diskonekt',
    'ppp.table.th.last-called-id'=> 'Urayenne a Naawagan a ID',
    'ppp.table.th.rate-limit'=> 'Rate Limit',
    'ppp.table.th.only-one'=> 'Maysa Laeng',
    'ppp.table.th.uptime'=> 'Uptime',
    'ppp.table.th.bytes-in'=> 'Bytes In',
    'ppp.table.th.bytes-out'=> 'Bytes Out',

    // PPP Add Server Modal Form
    'ppp.modal.form.title'=> 'Agaramid ti PPPoE Server',
    'ppp.modal.form.enabled'=> 'Naka-enable',
    'ppp.modal.form.one-session-per-host'=> 'Maysa a Session kada Host',
    'ppp.modal.form.accept-empty-services'=> 'Palubosen dagiti Awan Serbisyo',
    'ppp.modal.form.accept-untagged'=> 'Palubosen ti Untagged',
    'ppp.modal.form.service-name'=> 'Nagan ti Serbisyo',
    'ppp.modal.form.service-name_placeholder'=> 'Nagan ti PPPoE',
    'ppp.modal.form.interface'=> 'Interface',
    'ppp.modal.form.placeholder'=> 'Default',
    'ppp.modal.form.max-mtu'=> 'Max MTU',
    'ppp.modal.form.max-mru'=> 'Max MRU',
    'ppp.modal.form.mrru'=> 'MRRU',
    'ppp.modal.form.keepalive-timeout'=> 'Keepalive Timeout',
    'ppp.modal.form.profile'=> 'Profile',
    'ppp.modal.form.max-sessions'=> 'Max Sessions',
    'ppp.modal.form.auth-methods'=> 'Parikut ti Authentication',
    'ppp.modal.form.auth-mschapv2'=> 'msChapv2',
    'ppp.modal.form.auth-mschapv1'=> 'msChapv1',
    'ppp.modal.form.auth-chap'=> 'Chap',
    'ppp.modal.form.auth-pap'=> 'PaP',

    // PPP Add/Edit Secret Modal Form
    'ppp.modal.form.secret.name'=> 'Nagan',
    'ppp.modal.form.secret.password'=> 'Password',
    'ppp.modal.form.secret.service-type'=> 'Serbisyo',
    'ppp.modal.form.secret.local-address'=> 'Local Address',
    'ppp.modal.form.secret.remote-address'=> 'Remote Address',

    // secrets.php
    // Modal Titles
    'ppp.modal.form.add.ppp-secret'=> 'Agaramid ti PPPoE Sekreto',
    'ppp.modal.form.edit.ppp-secret'=> 'Editar ti PPPoE Sekreto',

    // PPP Secrets Page Modal Tabs
    'ppp.secrets.tab.general'=> 'General',  
    'ppp.secrets.tab.details'=> 'Detalye',

    // profiles.php
    // PPP Profiles Page

    // PPP Profiles Modal Titles
    'ppp.modal.form.add.ppp-profile'=> 'Agaramid ti PPPoE Profile',
    'ppp.modal.form.edit.ppp-profile'=> 'Editar ti PPPoE Profile',


    // PPP Profiles Modal Tabs
    'ppp.profiles.tab.general'=> 'General',
    'ppp.profiles.tab.protocols'=> 'Protocol',
    'ppp.profiles.tab.limits'=> 'Limit',
    'ppp.profiles.tab.queue'=> 'Queue',
    'ppp.profiles.tab.scripts'=> 'Scripts',

    // PPP Profiles Modal Form Fields
    'ppp.modal.form.profile.name'=> 'Nagan',
    'ppp.modal.form.profile.local-address'=> 'Local Address',
    'ppp.modal.form.profile.remote-address'=> 'Remote Address',
    'ppp.modal.form.profile.use-ipv6'=> 'Usaren ti IPv6',
    'ppp.modal.form.profile.use-mpls'=> 'Usaren ti MPLS',
    'ppp.modal.form.profile.use-comp'=> 'Usaren ti Compression',
    'ppp.modal.form.profile.use-enc'=> 'Usaren ti Encryption',
    'ppp.modal.form.profile.sess-timeout'=> 'Session Timeout',
    'ppp.modal.form.profile.idle-timeout'=> 'Idle Timeout',
    'ppp.modal.form.profile.rate-limit'=> 'Rate Limit',
    'ppp.modal.form.profile.only-one'=> 'Maysa Laeng',
    'ppp.modal.form.profile.parent-queue'=> 'Parent Queue',
    'ppp.modal.form.profile.queue-type-rx'=> 'Klase ti Queue (Downloads)',
    'ppp.modal.form.profile.queue-type-tx'=> 'Klase ti Queue (Uploads)',
    'ppp.modal.form.profile.script-onup'=> 'Ipataray iti Panag-up',
    'ppp.modal.form.profile.script-ondown'=> 'Ipataray iti Panag-down',
    'ppp.modal.form.profile.script-placeholder'=> 'Maipataray ti script no mapukaw ti pasamak',
    'ppp.modal.form.migration.confirm'=> 'Kumpirma ti Migrasion ti Profile',
    'ppp.modal.form.migration.caption'=> 'Ti panaglinis ti Parent Queue wenno Klase ti Queue para iti daytoy a profile mabalin a mangkasapulan ti panagaramid manen iti profile ken panagpabaw ti naugnay a PPP secreto. Mabalin a disruptive daytoy. Kayat mo kadi nga agtuloy?',

    // ip.php
    // IP Page
    'ip.title'=> 'Manadjir ti IP',
    'ip.desc'=> 'Idar-ay ti ARP, Address, DHCP, DNS, Pool ken dadduma pay a serbisyo ti IP.',

    'ip.arp'=> 'ARP',
    'ip.addresses'=> 'Address',
    'ip.cloud'=> 'Cloud',
    'ip.dhcp.client'=> 'DHCP Client',
    'ip.dhcp.server'=> 'DHCP Server',
    'ip.dns'=> 'DNS',
    'ip.pool'=> 'Pool',
    'ip.services'=> 'Serbisyo',
    'ip.upnp'=> 'UPnP',
    'ip.settings'=> 'Setings',
    
    'ip.arp.desc'=> 'Kitaen ken idar-ay dagiti ARP table entries.',
    'ip.addresses.desc'=> 'Idar-ay dagiti IP address a naka-assign iti interface.',
    'ip.cloud.desc'=> 'Seting ti Cloud/DDNS. Basaan dagiti value manipud iti router.',
    'ip.dhcp.client.desc'=> 'Kitaen ken idar-ay dagiti DHCP client.',
    'ip.dhcp.server.desc'=> 'I-configure ti DHCP server ken dagiti lease.',
    'ip.dns.desc'=> 'Idar-ay dagiti DNS seting ken static a entry.',
    'ip.pool.desc'=> 'Idar-ay dagiti address pool para iti DHCP ken dadduma a serbisyo.',
    'ip.services.desc'=> 'I-enable wenno i-disable dagiti serbisyo a maipanggep iti IP.',
    'ip.upnp.desc'=> 'Seting ti Universal Plug and Play. Basaan dagiti value manipud iti router.',
    'ip.settings.desc'=> 'Kangrunaan a seting ti IP subsystem.',

    'ip.open.arp'=> 'Buksan ti ARP',
    'ip.open.addresses'=> 'Buksan ti Address',
    'ip.open.cloud'=> 'Buksan ti Cloud',
    'ip.open.dhcp.client'=> 'Buksan ti DHCP Client',
    'ip.open.dhcp.server'=> 'Buksan ti DHCP Server',
    'ip.open.dns'=> 'Buksan ti DNS',
    'ip.open.pool'=> 'Buksan ti Pool',
    'ip.open.services'=> 'Buksan ti Serbisyo',
    'ip.open.upnp'=> 'Buksan ti UPnP',
    'ip.open.settings'=> 'Buksan ti Setings',

    // IP Page - Back Button
    'ip.back-to-ip'=> 'Agturong Manen iti IP Manager',

    // IP JS strings
    // Addresses
    'ip.addresses.no_addresses' => 'Awan address',
    'ip.addresses.loading' => 'Agloload...',
    'ip.addresses.failed_to_contact_api' => 'Napalpak ti panagkonektar iti API',
    'ip.addresses.please_select_one_or_more' => 'Pilia maysa wenno ad-adu a entry',
    'ip.addresses.select_one_to_edit' => 'Pilia ti maysa laeng a address a i-edit',
    'ip.addresses.action_completed' => 'Naisayangkat ti aramid %s',
    'ip.addresses.action_failed' => 'Napalpak ti aramid: %s',
    'ip.addresses.request_failed' => 'Napalpak ti request: %s',
    'ip.addresses.address_added' => 'Naidagdag ti Address',
    'ip.addresses.address_updated' => 'Na-update ti Address',
    'ip.addresses.add_failed' => 'Napalpak ti panagdugang: %s',
    'ip.addresses.update_failed' => 'Napalpak ti panag-update: %s',
    'ip.addresses.page_info' => 'Pahina %s / %s (%s)',

    // ARP
    'ip.arp.no_arp_entries' => 'Awan ARP entry',
    'ip.arp.loading' => 'Agloload...',
    'ip.arp.failed_to_contact_api' => 'Napalpak ti panagkonektar iti API',
    'ip.arp.please_select_one_or_more' => 'Pilia maysa wenno ad-adu a entry',
    'ip.arp.enable_confirm' => 'Ipatungpal dagiti napili a ARP entry?',
    'ip.arp.disable_confirm' => 'Ikkaten dagiti napili a ARP entry?',
    'ip.arp.remove_confirm' => 'Ikkaten dagiti napili a ARP entry?',
    'ip.arp.page_info' => 'Pahina %s / %s (%s)',

    // Cloud
    'ip.cloud.failed_to_load' => 'Napalpak ti panag-load ti cloud seting: %s',
    'ip.cloud.reverted' => 'Naibusor dagiti nabaliwan',
    'ip.cloud.applied' => 'Naipatarus dagiti cloud seting',
    'ip.cloud.apply_failed' => 'Napalpak ti panag-aplikar: %s',

    // DHCP Client
    'ip.dhcp.client.no_clients' => 'Awan DHCP client',
    'ip.dhcp.client.failed_to_load' => 'Napalpak ti panag-load ti DHCP client: %s',
    'ip.dhcp.client.please_select_interface' => 'Pilia ti maysa a interface',
    'ip.dhcp.client.created' => 'Naaramid ti DHCP Client',
    'ip.dhcp.client.create_failed' => 'Napalpak ti panag-aramid: %s',
    'ip.dhcp.client.no_entries_selected' => 'Awan a napili a entry',
    'ip.dhcp.client.enable_completed' => 'Naisangkat ti panag-enable',
    'ip.dhcp.client.enable_failed' => 'Napalpak ti panag-enable: %s',
    'ip.dhcp.client.disable_completed' => 'Naisangkat ti panag-disable',
    'ip.dhcp.client.disable_failed' => 'Napalpak ti panag-disable: %s',
    'ip.dhcp.client.remove_confirm' => 'Ikkaten dagiti napili a DHCP client?',
    'ip.dhcp.client.option_name_code_required' => 'Masapul ti Nagan ken Kodigo',
    'ip.dhcp.client.option_created' => 'Naaramid ti Option',
    'ip.dhcp.client.option_create_failed' => 'Napalpak ti panag-aramid: %s',
    'ip.dhcp.client.no_options' => 'Awan option',

    // DHCP Networks
    'ip.dhcp.networks.no_networks' => 'Awan DHCP network',
    'ip.dhcp.networks.loading' => 'Agloload...',
    'ip.dhcp.networks.select_one_to_edit' => 'Pilia ti maysa a network a i-edit',
    'ip.dhcp.networks.create_not_implemented' => 'Panag-aramid ti baro a network: saan pay a naipatumpal',
    'ip.dhcp.networks.please_select_remove' => 'Pilia maysa wenno ad-adu a network a i-ikkat',
    'ip.dhcp.networks.remove_confirm' => 'Ikkaten dagiti napili a network?',
    'ip.dhcp.networks.removed' => 'Naikkat',
    'ip.dhcp.networks.remove_failed' => 'Napalpak ti panag-ikkat: %s',
    'ip.dhcp.networks.page_info' => 'Pahina %s / %s (%s)',

    // DNS
    'ip.dns.add_server_placeholder' => 'Ikkabil ti DNS server (IP)',
    'ip.dns.remove' => 'Ikkat',
    'ip.dns.loading' => 'Agloload...',
    'ip.dns.failed_to_contact_api' => 'Napalpak ti panagkonektar iti API',
    'ip.dns.error_loading' => 'Error iti panag-load ti DNS seting',
    'ip.dns.dns_saved' => 'Naisalbar dagiti DNS seting',
    'ip.dns.failed_to_save' => 'Napalpak ti panag-save: %s',
    'ip.dns.save_confirm' => 'I-save dagiti DNS seting?',
    'ip.dns.no_static_entries' => 'Awan static a entry',
    'ip.dns.static_added' => 'Naidagdag ti Static DNS',
    'ip.dns.static_add_failed' => 'Napalpak ti panagdugang ti static',
    'ip.dns.performing_action' => 'Agaramid iti %s...',
    'ip.dns.invalid_json' => 'Saan a wagas a JSON a response',
    'ip.dns.request_failed' => 'Napalpak ti request: %s',
    'ip.dns.flush_cache_confirm' => 'Linawan amin a DNS cache?',
    'ip.dns.cache_flushed' => 'Nalinis ti cache',
    'ip.dns.failed_flush_cache' => 'Napalpak ti panaglinis ti cache: %s',
    'ip.dns.no_cache_entries' => 'Awan cache entry',

    // Pool
    'ip.pool.no_pools' => 'Awan pool',
    'ip.pool.please_select_one_or_more' => 'Pilia maysa wenno ad-adu a pool',
    'ip.pool.select_one_to_edit' => 'Pilia ti maysa laeng a pool a i-edit',
    'ip.pool.name_and_address_required' => 'Masapul ti Nagan ken Address',
    'ip.pool.pool_created' => 'Naaramid ti Pool',
    'ip.pool.create_failed' => 'Napalpak ti panag-aramid: %s',
    'ip.pool.pool_updated' => 'Na-update ti Pool',
    'ip.pool.update_failed' => 'Napalpak ti panag-update: %s',
    'ip.pool.remove_confirm' => 'Ikkaten dagiti napili a pool?',
    'ip.pool.action_completed' => 'Naisayangkat ti aramid %s',
    'ip.pool.action_failed' => 'Napalpak ti aramid: %s',
    'ip.pool.request_failed' => 'Napalpak ti request: %s',
    'ip.pool.none' => '(awan)',
    'ip.pool.loading' => 'Agloload...',
    'ip.pool.failed_to_contact_api' => 'Napalpak ti panagkonektar iti API',
    'ip.pool.page_info' => 'Pahina %s / %s (%s)',

    // IP Settings
    'ip.settings.refreshing_settings' => 'Agar-aramid ti panag-rinfres ti seting...',
    'ip.settings.no_settings_found' => 'Awan a nasarakan a IP seting',
    'ip.settings.failed_to_load' => 'Napalpak ti panag-load ti IP seting',
    'ip.settings.updated' => 'Na-update dagiti IP seting',
    'ip.settings.update_failed' => 'Napalpak ti panag-update: %s',

    // IP Page - Loading Status
    'ip.loading'=> 'Agloload ti IP Data...',

    // IP Page Actions
    'ip.actions'=> 'Aramid',

    // IP Page General Buttons
    'ip.buttons.new'=> 'Ikkabil',
    'ip.buttons.edit'=> 'Editar',
    'ip.buttons.refresh'=> 'Rinfreskan',
    'ip.buttons.create'=> 'Agaramid',
    'ip.buttons.save'=> 'I-save',
    'ip.buttons.cancel'=> 'Ikansela',
    'ip.buttons.enable'=> 'Ipatungpal',
    'ip.buttons.disable'=> 'Ikkaten',
    'ip.buttons.remove'=> 'Ikkat',
    'ip.buttons.prev'=> 'Iti Napan',
    'ip.buttons.next'=> 'Sumaruno',
    'ip.sort.by'=> 'Isort babaen',
    'ip.sort'=> 'Isort',
    'ip.select.all'=> 'Pilia Amin',
    'ip.buttons.flush.cache'=> 'Linawan ti Cache',
    'ip.buttons.add.dns.server'=> 'Agaramid ti DNS Server',


    // IP UPnP Page
    'ip.upnp.enabled'=> 'Naka-enable',
    'ip.upnp.allow-disable-external-iface'=> 'Palubosen ti panaka-disable ti external interface',
    'ip.upnp.show-dummy-rule'=> 'Ipakita ti dummy a paglinteg',

    // arp.php
    // IP ARP Page

    // addresses.php
    // IP Addresses Page

    // IP Table Headers
    'ip.table.th.address'=> 'Address',
    'ip.table.th.network'=> 'Network',
    'ip.table.th.iface'=> 'Interface',
    'ip.table.th.comment'=> 'Komento',
    'ip.table.th.dhcp.client.name' => 'Nagan',
    'ip.table.th.dhcp.client.code-value' => 'Code Value',
    'ip.table.th.dhcp.client.client-value' => 'Client Value',
    'ip.table.th.dns.name'=> 'Nagan',
    'ip.table.th.dns.regexp'=> 'Regexp',
    'ip.table.th.dns.type'=> 'Tipo',
    'ip.table.th.dns.value'=> 'Value',
    'ip.table.th.dns.ttl'=> 'TTL',
    'ip.table.th.dns.data'=> 'Data',

    // IP Address Modal Titles
    'ip.modal.form.add.address'=> 'Agaramid ti IP Address',
    'ip.modal.form.edit.address'=> 'Editar ti IP Address',

    // IP Address Modal Form
    'ip.modal.form.ip.address-mask'=> 'IP Address / Mask',
    'ip.modal.form.ip.network'=> 'Network',
    'ip.modal.form.iface'=> 'Interface',
    'ip.modal.form.comment'=> 'Komento',
    
    
    // cloud.php
    // IP Cloud Page

    // IP Cloud Modal Form
    'ip.cloud.enabled'=> 'Naka-enable ti DDNS',
    'ip.cloud.ddns.update.interval'=> 'Interbalo ti DDNS Update',
    'ip.cloud.update.time'=> 'Oras ti Update',
    'ip.cloud.public.ipv4'=> 'Publiko a IPv4',
    'ip.cloud.public.ipv6'=> 'Publiko a IPv6',
    'ip.cloud.dns.name' => 'Nagan ti DNS',
    'ip.cloud.use-router-defaults'=> 'Usaren dagiti Router Defaults',
    'ip.cloud.yes'=> 'Wen',
    'ip.cloud.no'=> 'Saan',

    // dhcp-client.php
    // IP DHCP Client Page
    'ip.dhcp.client.options'=> 'DHCP Client',
    'ip.dhcp.client.modal.form.interface'=> 'Interface',
    'ip.dhcp.client.modal.form.enabled'=> 'Naka-enable',
    'ip.dhcp.client.modal.form.use-peer-dns'=> 'Usaren ti Peer DNS',
    'ip.dhcp.client.modal.form.use-peer-ntp'=> 'Usaren ti Peer NTP',
    'ip.dhcp.client.modal.form.add-default-route'=> 'Agaramid ti Default Route',
    'ip.dhcp.client.modal.form.default-route-distance'=> 'Distansia ti Default Route',
    'ip.dhcp.client.options2'=> 'Opciones ti DHCP Client',
    'ip.dhcp.client.modal.form.name'=> 'Nagan',
    'ip.dhcp.client.modal.form.code'=> 'Kodigo',
    'ip.dhcp.client.modal.form.value'=> 'Value',

   
    // dns.php
    // IP DNS Page

    // IP DNS - Modal Form
    'ip.dns.form.servers'=> 'DNS Server',
    'ip.dns.form.dynamic-servers'=> 'Dynamic Server',
    'ip.dns.form.use.doh.servers'=> 'Usaren ti DoH Server',
    'ip.dns.form.doh.max.server.conn'=> 'DoH Max Server Connections',
    'ip.dns.form.doh.max.concurrent.queries'=> 'DoH Max Concurrent Queries',
    'ip.dns.form.doh.timeout'=> 'DoH Timeout (segundo)',
    'ip.dns.form.allow-remote.requests'=> 'Palubosen ti Remote Request',

    'ip.dns.form.cache.size'=> 'Kadakkel ti Cache (KB)',
    'ip.dns.form.cache.max-ttl'=> 'Cache Max TTL (segundo)',
    'ip.dns.form.cache.min-ttl'=> 'Cache Min TTL (segundo)',
    'ip.dns.form.max.concurrent.queries'=> 'Max Concurrent Queries',
    'ip.dns.form.max.concurrent.tcp'=> 'Max Concurrent TCP Connections',
    'ip.dns.form.query.timeout'=> 'Query Timeout (segundo)',
    'ip.dns.form.cache.used'=> 'Nag-usar ti Cache (read-only)',

    'ip.dns.form.add.static.entry'=> 'Agaramid ti Static DNS Entry',
    'ip.dns.form.add.static.name'=> 'Nagan',
    'ip.dns.form.add.static.type'=> 'Tipo',
    'ip.dns.form.add.static.value'=> 'Value',
    'ip.dns.form.add.static.ttl'=> 'TTL',
    'ip.dns.form.add.static.regexp'=> 'Regexp',

    // IP DNS - Static DNS
    'ip.dns.static'=> 'Static DNS',
    'ip.dns.static.desc'=> 'Idar-ay dagiti static a DNS entry a mangpaltog iti dynamic a DNS resolution.',

    // IP DNS - Cache Settings
    'ip.dns.cache'=> 'Seting ti DNS Cache',

    // pool.php
    // IP Pool Page

    // IP Pool Table Headers
    'ip.pool.table.th.name'=> 'Nagan',
    'ip.pool.table.th.ranges'=> 'Range',
    'ip.pool.table.th.comment'=> 'Komento',
    'ip.pool.table.th.total-addresses'=> 'Amin a Address',
    'ip.pool.table.th.used'=> 'Nag-usar',
    'ip.pool.table.th.available'=> 'Magun-od',

    // IP Pool Modal Form
    'ip.pool.modal.form.create.title'=> 'Agaramid ti IP Pool',
    'ip.pool.modal.form.edit.title'=> 'Editar ti IP Pool',
    'ip.pool.modal.form.name'=> 'Nagan',
    'ip.pool.modal.form.ranges'=> 'Range ti Address',
    'ip.pool.modal.form.ranges-placeholder'=> 'e.g. 192.168.1.100-192.168.1.200 or 10.0.0.0/24',
    'ip.pool.modal.form.comment'=> 'Komento',
    'ip.pool.modal.form.next-address'=> 'Sumaruno a Address',
    'ip.pool.modal.form.total-addresses'=> 'Amin a Address',
    'ip.pool.modal.form.used'=> 'Nag-usar',
    'ip.pool.modal.form.available'=> 'Magun-od',

    // services.php
    // IP Services Page

    // IP Services Table Headers
    'ip.services.table.th.name'=> 'Nagan',
    'ip.services.table.th.port'=> 'Port',
    'ip.services.table.th.available-from'=> 'Available From',
    'ip.services.table.th.max-sessions'=> 'Max Sessions',
    'ip.services.table.th.protocol'=> 'Protocol',
    'ip.services.table.th.remote'=> 'Remote',
    'ip.services.table.th.local'=> 'Local',

    // IP Services Modal Form
    'ip.services.modal.form.edit.title'=> 'Editar ti IP Service',
    'ip.services.modal.form.name'=> 'Nagan',
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
    'ip.settings.modal.form.ip-forward'=> 'IP Forwarding Naka-enable',
    'ip.settings.modal.form.ip-send-redirects'=> 'Send Redirects Naka-enable',
    'ip.settings.modal.form.ip-accept-redirects'=> 'Accept Redirects Naka-enable',
    'ip.settings.modal.form.ip-secure-redirects'=> 'Secure Redirects Naka-enable',
    'ip.settings.modal.form.ip-accept-source-route'=> 'Accept Source Route Naka-enable',
    'ip.settings.modal.form.ip-allow-fast-path'=> 'Allow Fast Path Naka-enable',
    'ip.settings.modal.form.ip-tcp-syncookies'=> 'TCP Syncookies Naka-enable',
    'ip.settings.modal.form.ip-tcp-timestamps'=> 'TCP Timestamps',
    'ip.settings.modal.form.ip-max-neighbors'=> 'Max Neighbors',
    'ip.settings.modal.form.ip-icmp-rate-limit'=> 'ICMP Rate Limit',
    'ip.settings.modal.form.ip-arp-timeout'=> 'ARP Timeout (segundo)',
    'ip.settings.modal.form.ip-arp-timeout-help'=> 'Ipatik ti RouterOS a format ti timeout (e.g. 10m, 1h, or 00:10:00). Iwaras a bakante para iti default.',

    // DHCP additions (from English)
    'dashboard.ltmg.title'=> 'Grafiko ti Live Traffic Monitoring',
    'downloads.instructions' => 'Pinduten ti buton a Download tapno ag-download. Dagiti file a naka-"Coming soon" saan pay a magun-odan.',

    'ip.dhcp.leases.title'=> 'DHCP Leases',
    'ip.dhcp.leases.desc'=> 'Kitaen ken idar-ay dagiti aktibo a DHCP leases',

    'ip.dhcp.networks.title'=> 'DHCP Networks',
    'ip.dhcp.networks.desc'=> 'Agaramid ken idar-ay dagiti DHCP networks',

    'ip.dhcp.server.title'=> 'DHCP Manager',
    'ip.dhcp.server.back-to-dhcp'=> 'Mapan Idiay DHCP Manager',
    'ip.dhcp.server.dhcp'=> 'DHCP',
    'ip.dhcp.server.dhcp.desc'=> 'Konfiguraren dagiti setting ti DHCP server.',
    'ip.dhcp.server.dhcp.leases'=> 'Leases',
    'ip.dhcp.server.dhcp.leases.desc'=> 'Kitaen dagiti aktibo a DHCP leases.',
    'ip.dhcp.server.dhcp.networks'=> 'Networks',
    'ip.dhcp.server.dhcp.networks.desc'=> 'Idaray dagiti DHCP networks.',

    'ip.open.dhcp.leases' => 'Buklen ti DHCP Leases',
    'ip.open.dhcp.networks' => 'Buklen ti DHCP Networks',

    'status.title' => 'Panel ti Status',
    'status.desc' => 'Panagmonitor ti live nga estado ti sistema ken uptime',

    // Error pages
    'errors.404.title' => 'Saan a Nasarakan ti Pahina',
    'errors.404.desc' => 'Saan a nasarakan ti in-request a pahina.',
    'errors.403.title' => 'Naiparang',
    'errors.403.desc' => 'Awan ti permiso mo a mang-access iti daytoy a resource.',
    'errors.500.title' => 'Sala ti Server',
    'errors.500.desc' => 'Adda internal a sala iti server.',
    'errors.back_home' => 'Agturong Idiay Home',
    'errors.more_info' => 'Ania ti napasamak',
    'errors.contact_admin' => 'No pagbasam a sala daytoy, kontaken ti administrador ti site.',

]; 
