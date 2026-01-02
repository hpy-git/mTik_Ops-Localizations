<?php
////////////////////////////////////////////////////////////////////////
// Italian translations for mTik_Ops                                                                          
// Version: Next-Generation                                           
////////////////////////////////////////////////////////////////////////

return [
    // Start of Translations
    // Global
    'language-changed' => 'Lingua cambiata in {lang}',
    'language-search-placeholder' => 'Cerca...',

    // Global Search
    'search.title' => 'Ricerca',
    'search.instructions' => 'Digita una parola chiave o una frase per cercare nel sito.',
    'search.results_header' => 'Risultati per "{query}"',
    'search.placeholder' => 'Digita per cercare...',
    'search.no_results' => 'Nessun risultato trovato',
    'search.results' => 'Risultati',
    'search.button' => 'Cerca',
    'search.hint' => 'Digita per vedere suggerimenti immediati.',
    'search.quick_links' => 'Link rapidi',
    'search.show' => 'Mostra ricerca',

    
    // Site title and tagline
    'site.title' => 'mTik_Ops', // DO NOT TRANSLATE
    'site.tagline' => 'Gestione centralizzata dei router',

    // Authentication
    'nav.login' => 'Accedi',
    'nav.logout' => 'Disconnetti',
    'auth.logging_in' => 'Accesso in corso',
    'auth.logging_out' => 'Uscita in corso',
    'nav.quick_login' => 'Accesso rapido',

    // nav-brand.php
    'nav.brand.user_greeting'=> 'Ciao!',

    // nav.php
    'lang.label'=> 'Lingua',
    'nav.about' => 'Informazioni',
    'nav.features' => 'Funzionalità',
    'nav.our_team' => 'Team',
    'nav.contact' => 'Contatti',
    'nav.menu' => 'Menu',
    'nav.dashboard' => 'Dashboard',
    'nav.hotspot' => 'Hotspot',
    'nav.ip' => 'IP',
    'nav.firewall' => 'Firewall',
    'nav.ppp' => 'PPP',
    'nav.queues' => 'Code',
    'nav.settings' => 'Impostazioni',
    'nav.downloads' => 'Download',
    'nav.scripting' => 'Script',

    // index.php
    // Index Page - About Section
    'about.title' => 'Creato per MikroTik',
    'about.desc' => 'mTikOps è una piattaforma accessibile via browser per gestire router e hotspot MikroTik. Include accesso remoto, gestione hotspot — stampa, PPPoE e altro. Tutto in un unico sistema rapido.',
    'about.about_us_button' => 'Chi siamo',
    'about.our_team_button' => 'Il team',

    // Index Page - Features Section
    'features.remote.title' => 'Gestione remota della rete',
    'features.remote.desc' => 'Monitora e gestisci router remoti, visualizza lo stato delle interfacce, esegui riavvii e distribuisci modifiche di configurazione in sicurezza su tutta la flotta da un’unica console.',
    'features.hotspot.title' => 'Gestione Hotspot',
    'features.hotspot.desc' => 'Crea e gestisci server hotspot e profili utente, emetti voucher, monitora utenti attivi e sessioni, ed esegui contabilità e report.',
    'features.troubleshoot.title' => 'Risoluzione problemi e configurazione',
    'features.troubleshoot.desc' => 'Applica e verifica modifiche alla configurazione, esegui diagnostica, visualizza i log e risolvi problemi di connettività con strumenti integrati.',

    // Index Page - Signup Section
    'signup.title' => 'Inizia con mTikOps',
    'signup.desc' => 'Crea un account per gestire router, hotspot ed eseguire diagnostica sulla tua rete da una singola dashboard.',
    'signup.cta' => 'Registrati',

    // Index Page - Contact Section
    'contact.hq' => 'Sede',
    'contact.email' => 'Email',
    'contact.contact' => 'Contatto',
    'contact.hq_address' => 'Taguig City, PH 1630',
    'contact.email_addr' => 'noc@mtikops.com',
    'contact.phone' => '+63 (962) 660-6116',

    // Index Page - Footer Section
    'footer.copyright' => 'Copyright &copy; mTikOps {year}',
    'footer.powered' => 'Powered by HPY™',
    'modal.confirm.title' => 'Conferma',
    'modal.confirm.body' => 'Sei sicuro?',
    'modal.confirm.cancel' => 'Annulla',
    'modal.confirm.ok' => 'Conferma',

    // Login Page
    'login.title' => 'Accesso',
    'login.desc' => 'Accedi al tuo account mTik_Ops per gestire router e hotspot MikroTik da una dashboard centralizzata.',
    'login.form.title' => 'Accedi al tuo account',
    'login.form.host'=> 'Host',
    'login.form.username'=> 'Nome utente',
    'login.form.password'=> 'Password',
    'login.form.connection_type'=> 'Tipo di connessione',
    'login.form.connection_type_yes'=> 'API sicura',
    'login.form.connection_type_no'=> 'API standard',
    'login.form.connection_type_help'=> 'Utilizzare 8728 nella maggior parte dei casi, a meno che non ci sia un motivo specifico per usare 8729 (ad esempio se è stato applicato un certificato SSL al router).',
    'login.form.port'=> 'Porta',
    'login.form.remember'=> 'Ricordami',
    'login.form.connect'=> 'Connetti',
    'login.form.cancel'=> 'Annulla',

    // Login Page Placeholders
    'login.form.host_placeholder'=> 'IP del router o nome host',
    'login.form.username_placeholder'=> 'Inserisci il tuo nome utente',
    'login.form.password_placeholder'=> 'Inserisci la tua password',
    'login.form.requirements_check' => 'Problemi con l\'accesso? Controlla %s.',
    'login.form.requirements_link_text' => 'i requisiti',

    // Login Page Messages
    'login.error.invalid_submission'=> 'Invio del modulo non valido. Per favore riprova.',
    'login.error.missing_fields'=> 'Host, nome utente e password sono obbligatori.',
    'login.error.unable_connect'=> 'Impossibile connettersi! — Controlla le tue credenziali e riprova.',
    'login.success.connected'=> 'Connesso con successo al router.',
    'login.success.remembered'=> 'Dettagli di connessione salvati per futuri accessi.',
    'login.info.session_expired'=> 'La tua sessione è scaduta. Effettua di nuovo il login.',
    'login.info.logged_out'=> 'Sei stato disconnesso con successo.',
    'login.info.please_login'=> 'Effettua il login per continuare.',
    'login.button.forgot_password'=> 'Password dimenticata?',
    'login.try_again'=> 'Riprova?',

    // Downloads Page
    'downloads.title' => 'Download',
    'downloads.desc' => 'Scarica installer e pacchetti per le piattaforme supportate.',
    'downloads.available' => 'Download disponibili',
    'downloads.coming_soon' => 'Presto disponibile',
    'downloads.download' => 'Scarica',
    'downloads.note' => 'Carica gli installer nella cartella /downloads per renderli disponibili.',
    'downloads.changelog' => 'Registro delle modifiche',
    'downloads.changelog.loading' => 'Caricamento...',
    'downloads.changelog.no_file' => 'Nessun registro delle modifiche disponibile per questo file.',

    // about-us.php
    // About Us Page
    'about-us.title' => 'Chi siamo',
    'about-us.desc' => 'Scopri di più su mTik_Ops, la nostra missione e il team che sviluppa la piattaforma.',
    'about-us.overview'=> 'Panoramica',
    'about-us.vision'=> 'Visione',
    'about-us.features'=> 'Funzionalità',
    'about-us.tutorials'=> 'Tutorial',
    'about-us.faqs'=> 'FAQ',
    'about-us.requirements'=> 'Requisiti',

    // about-us.php
    // About Us Page Descriptions
    'about-us.overview.desc'=> 'Introduzione rapida a mTikOps e alle sue capacità principali.',
    'about-us.vision.desc'=> 'Scopri la nostra missione e gli obiettivi a lungo termine del progetto.',
    'about-us.features.desc'=> 'Visualizza le funzionalità principali disponibili in mTikOps.',
    'about-us.tutorials.desc'=> 'Guide passo passo ed esempi di workflow.',
    'about-us.faqs.desc'=> 'Domande frequenti e risposte su mTikOps.',
    'about-us.requirements.desc'=> 'Prerequisiti e requisiti RouterOS per eseguire mTikOps.',

    // about-us.php
    // About Us Page Buttons
    'about-us.open.overview'=> 'Apri panoramica',
    'about-us.open.vision'=> 'Apri visione',
    'about-us.open.features'=> 'Apri funzionalità',
    'about-us.open.tutorials'=> 'Apri tutorial',
    'about-us.open.faqs'=> 'Apri FAQ',
    'about-us.open.requirements'=> 'Apri requisiti',

    // About Us - Back Button
    'about-us.back-to-about'=> 'Torna a Chi siamo',

    // About Us - Overview Page
    'about-us.overview-page.title'=> 'Panoramica',
    'about-us.overview-page.desc'=> 'mTikOps è una piattaforma web leggera per gestire router MikroTik e servizi hotspot dal browser.',

    // About Us - Vision Page
    'about-us.vision-page.title'=> 'Visione',
    'about-us.vision-page.desc'=> 'Miriamo a semplificare le operazioni di rete per gli utenti MikroTik con un’interfaccia intuitiva e strumenti di automazione.',

    // About Us - Features Page
    'about-us.features-page.title'=> 'Funzionalità',
    'about-us.features-page.desc'=> 'Esplora le funzionalità principali di mTikOps.',

    // About Us - Tutorials Page
    'about-us.tutorials-page.title'=> 'Tutorial',
    'about-us.tutorials-page.desc'=> 'Guide e how-to per attività comuni.',

    // About Us - FAQs Page
    'about-us.faqs-page.title'=> 'FAQ',
    'about-us.faqs-page.desc'=> 'Domande frequenti e risposte.',

    // About Us - Requirements Page
    'about-us.requirements-page.title'=> 'Prerequisiti',
    'about-us.requirements-page.desc'=> 'Requisiti minimi e note di compatibilità.',

    // our-team.php
    // Our Team Page
    'our-team.title'=> 'Il team',
    'our-team.desc'=> 'Conosci le persone dietro mTikOps — sviluppatori, contributori e manutentori.',
    'our-team.leadership'=> 'Direzione',
    'our-team.developers'=> 'Sviluppatori',
    'our-team.contributors'=> 'Contributori',
    'our-team.advisors'=> 'Consulenti',
    'our-team.careers'=> 'Lavora con noi',
    'our-team.contact'=> 'Contatto',

    // Our Team Page Descriptions
    'our-team.leadership.desc'=> 'Manutentori principali e responsabili del progetto che guidano mTikOps.',
    'our-team.developers.desc'=> 'Ingegneri e contributori che sviluppano funzionalità e correzioni.', 
    'our-team.contributors.desc'=> 'Contributori della comunità che aiutano con documentazione, test e codice.',
    'our-team.advisors.desc'=> 'Consulenti ed esperti che supportano il progetto.',
    'our-team.careers.desc'=> 'Ruoli aperti e come unirsi al team.',
    'our-team.contact.desc'=> 'Contatta il team per domande o collaborazioni.',

    // Our Team Page Buttons
    'our-team.open.leadership'=> 'Visualizza direzione',
    'our-team.open.developers'=> 'Visualizza sviluppatori',
    'our-team.open.contributors'=> 'Visualizza contributori',
    'our-team.open.advisors'=> 'Visualizza consulenti',
    'our-team.open.careers'=> 'Lavora con noi',
    'our-team.open.contact'=> 'Contatta il team',

    // Our Team - Back Button
    'our-team.back-to-team'=> 'Torna al team',

    // Our Team - Leadership Page
    'our-team.leadership-page.title'=> 'Direzione',
    'our-team.leadership-page.desc'=> 'Incontra i manutentori principali e i responsabili del progetto dietro mTikOps.',

    // Our Team - Developers Page
    'our-team.developers-page.title'=> 'Sviluppatori',
    'our-team.developers-page.desc'=> 'Profili e responsabilità degli sviluppatori che contribuiscono a mTikOps.',

    // Our Team - Contributors Page
    'our-team.contributors-page.title'=> 'Contributori',
    'our-team.contributors-page.desc'=> 'Riconoscere i contributori della comunità e come partecipare.',

    // Our Team - Advisors Page
    'our-team.advisors-page.title'=> 'Consulenti',
    'our-team.advisors-page.desc'=> 'Consulenti ed esperti che forniscono indicazioni al progetto.',

    // Our Team - Join Us Page
    'our-team.join-us-page.title'=> 'Lavora con noi',
    'our-team.join-us-page.desc'=> 'Scopri i ruoli aperti e come contribuire a mTikOps.',  

    // Our Team - Contact Page
    'our-team.contact-page.title'=> 'Contatto',
    'our-team.contact-page.desc'=> 'Modi per contattare il team mTikOps per collaborazione o supporto.',

    // Dashboard Page
    'dashboard.title'=> 'Dashboard',
    'dashboard.desc'=> 'Pannello di monitoraggio e registrazione delle operazioni di rete',

    // Dashboard Buttons
    'dashboard.show'=> 'Mostra dashboard',
    'dashboard.button.refresh'=> 'Aggiorna',
    'dashboard.button.prev'=> 'Prec',
    'dashboard.button.next'=> 'Succ',

    // Dashboard Network Monitoring
    'dashboard.monitoring.title'=> 'Monitoraggio della rete',
    'dashboard.monitoring.desc'=> 'Monitoraggio in tempo reale delle prestazioni di rete, tempo di attività e stato dei dispositivi nella tua infrastruttura MikroTik.',
    'dashboard.ltmg.title'=> 'Grafico traffico in tempo reale',
    'dashboard.fullscreen'=> 'Schermo intero',
    'dashboard.loading'=> 'Caricamento dati...',
    'dashboard.not-monitoring'=> 'Non in monitoraggio',

    // Dashboard System Logging
    'dashboard.logging.title'=> 'Registrazione di sistema',
    'dashboard.logging.desc'=> 'Registrazione centralizzata e avvisi per eventi di sistema ed errori',
    'dashboard.system.logs'=> 'Log di sistema',
    'dashboard.critical.logs'=> 'Log critici',

    // Dashboard Device Information
    'dashboard.device.info.title'=> 'Informazioni dispositivo',
    'dashboard.system.resources'=> 'Risorse di sistema',
    'dashboard.system.information'=> 'Informazioni di sistema',
    'dashboard.system.platform'=> 'Informazioni RouterBOARD',

    // Device info JS strings
    'device.system_identity' => 'Identità sistema',
    'device.routeros_version' => 'Versione RouterOS',
    'device.uptime' => 'Tempo di attività',
    'device.board' => 'Scheda',
    'device.health' => 'Stato',
    'device.temp_label' => 'Temp:',
    'device.voltage_label' => 'Tensione:',
    'device.unknown' => 'Sconosciuto',
    'device.na' => 'n/d',
    'device.cpu' => 'CPU',
    'device.memory' => 'Memoria',
    'device.disk' => 'Disco',
    'device.board_model' => 'Modello scheda',
    'device.serial' => 'Seriale',
    'device.architecture' => 'Architettura',
    'device.cpu_label' => 'CPU',
    'device.cores' => 'core',
    'device.build' => 'Build',
    'device.failed_load' => 'Impossibile caricare le informazioni del sistema',
    // Generate users preview JS strings
    'generate.generating' => 'Generazione in corso...',
    'generate.print_fetch_failed' => 'Recupero stampa fallito: %s',
    'generate.network_not_ok' => 'Risposta di rete non valida: %s',
    'generate.generation_failed' => 'Generazione fallita: %s',
    'generate.unknown_error' => 'Errore sconosciuto',
    'generate.preview_not_available' => 'Anteprima non disponibile',
    'generate.failed_print_dialog' => 'Apertura della finestra di stampa nativa fallita: %s',
    'generate.cached_cleared' => 'Batch memorizzato cancellato',
    'generate.failed_clear_cached' => 'Cancellazione batch memorizzato fallita',
    'generate.preview_failed' => 'Anteprima fallita',
    'generate.preview' => 'Anteprima',
    'generate.unexpected_error' => 'Errore imprevisto: %s',
    'generate.generated' => 'Generati %s utenti',
    'generate.request_failed' => 'Richiesta fallita durante la generazione dei voucher.',
    'generate.generate' => 'Genera',

    // Dashboard Hotspot Active Sessions
    'dashboard.hotspot.as.title'=> 'Sessioni attive Hotspot',
    'dashboard.ppp.as.title'=> 'Sessioni attive PPPoE',
    // JS dashboard strings (used by client-side locale export)
    'dashboard.no_active_sessions' => 'Nessuna sessione attiva',
    'dashboard.no_ppp_active_sessions' => 'Nessuna sessione PPP attiva',
    'dashboard.active_session' => 'sessione attiva',
    'dashboard.active_sessions' => 'sessioni attive',
    'dashboard.name' => 'Nome',
    'dashboard.address' => 'Indirizzo',
    'dashboard.uptime' => 'Tempo attivo',
    'dashboard.service' => 'Servizio',
    'dashboard.not_monitoring' => 'Non in monitoraggio',
    'dashboard.more_format' => '... e altri %d',
    'dashboard.unable_load_active' => 'Impossibile caricare le sessioni attive',
    'dashboard.unable_load_ppp' => 'Impossibile caricare le sessioni PPP attive',

    // hotspot.php
    // Hotspot Page
    'hotspot.title'=> 'Gestione Hotspot',
    'hotspot.desc'=> 'Gestisci utenti Hotspot, profili utente, sessioni attive e host.',
    'hotspot.users'=> 'Utenti',
    'hotspot.profiles'=> 'Profili',
    'hotspot.active'=> 'Attivi',
    'hotspot.hosts'=> 'Host',

    // Hotspot Page Descriptions
    'hotspot.users.desc'=> 'Crea, modifica e gestisci singoli account utente Hotspot.',
    'hotspot.profiles.desc'=> 'Gestisci larghezza di banda, sessioni e profili di rate-limit per gli utenti.',
    'hotspot.active.desc'=> 'Visualizza e disconnetti le sessioni Hotspot attive.',
    'hotspot.hosts.desc'=> 'Ispeziona e gestisci i dispositivi connessi all\'Hotspot.',

    // Hotspot Page Buttons
    'hotspot.open.users'=> 'Apri utenti',
    'hotspot.open.profiles'=> 'Apri profili',
    'hotspot.open.active'=> 'Apri attivi',
    'hotspot.open.hosts'=> 'Apri host',

    // firewall.php
    'firewall.title' => 'Firewall',
    'firewall.desc' => 'Gestisci le regole del firewall, NAT, mangle e gli strumenti di ispezione del traffico.',
    'firewall.filter' => 'Regole di filtro',
    'firewall.desc' => 'Manage firewall rules, NAT, mangle, and traffic inspection tools.',
    'firewall.filter' => 'Filter Rules',
    'firewall.nat' => 'NAT',
    'firewall.mangle' => 'Mangle',
    'firewall.raw' => 'Raw',
    'firewall.connections' => 'Connessioni',
    'firewall.address' => 'Liste di indirizzi',
    'firewall.layer7' => 'Protocolli Layer7',
    'firewall.filter.desc' => 'Crea e organizza regole di filtraggio pacchetti per il controllo del traffico.',
    'firewall.filter.actions' => 'Azioni',
    'firewall.filter.new' => 'Nuovo',
    'firewall.filter.edit' => 'Modifica',
    'firewall.filter.enable' => 'Abilita',
    'firewall.filter.disable' => 'Disabilita',
    'firewall.filter.remove' => 'Rimuovi',
    'firewall.filter.sort.by' => 'Ordina per',
    'firewall.filter.sort' => 'Ordina',
    'firewall.filter.prev' => 'Prec.',
    'firewall.filter.next' => 'Succ.',
    'firewall.filter.loading' => 'Caricamento...',
    'firewall.filter.none' => 'Nessuna voce trovata',
    'firewall.filter.failed_to_load' => 'Caricamento non riuscito',
    'firewall.filter.confirm_remove' => 'Rimuovere gli elementi selezionati?',
    'firewall.filter.confirm_title' => 'Conferma',
    'firewall.filter.enable_success' => 'Abilitato',
    'firewall.filter.disable_success' => 'Disabilitato',
    'firewall.filter.remove_success' => 'Rimosso',
    'firewall.filter.action_failed' => 'Azione non riuscita: %s',
    'firewall.filter.action_failed_short' => 'Azione non riuscita',
    'firewall.filter.not_implemented' => 'Non ancora implementato',
    'firewall.filter.badge_disabled' => 'Disabilitato',
    'firewall.filter.badge_dynamic' => 'Dinamico',
    'firewall.filter.badge_invalid' => 'Non valido',
    'firewall.filter.table.select' => 'Seleziona',
    'firewall.connections' => 'Connections',
    'firewall.address' => 'Address Lists',
    'firewall.layer7' => 'Layer7 Protocols',
    'firewall.filter.desc' => 'Create and organize packet filtering rules for traffic control.',
    'firewall.filter.actions' => 'Actions',
    'firewall.filter.new' => 'New',
    'firewall.filter.edit' => 'Edit',
    'firewall.filter.enable' => 'Enable',
    'firewall.filter.disable' => 'Disable',
    'firewall.filter.remove' => 'Remove',
    'firewall.filter.sort.by' => 'Sort by',
    'firewall.filter.sort' => 'Sort',
    'firewall.filter.prev' => 'Prev',
    'firewall.filter.next' => 'Next',
    'firewall.filter.loading' => 'Loading...',
    'firewall.filter.none' => 'No entries found',
    'firewall.filter.failed_to_load' => 'Failed to load',
    'firewall.filter.confirm_remove' => 'Remove selected item(s)?',
    'firewall.filter.confirm_title' => 'Confirm',
    'firewall.filter.enable_success' => 'Enabled',
    'firewall.filter.disable_success' => 'Disabled',
    'firewall.filter.remove_success' => 'Removed',
    'firewall.filter.action_failed' => 'Action failed: %s',
    'firewall.filter.action_failed_short' => 'Action failed',
    'firewall.filter.not_implemented' => 'Not implemented yet',
    'firewall.filter.badge_disabled' => 'Disabled',
    'firewall.filter.badge_dynamic' => 'Dynamic',
    'firewall.filter.badge_invalid' => 'Invalid',
    'firewall.filter.table.select' => 'Select',
    'firewall.filter.table.number' => '#',
    'firewall.filter.table.flag' => 'Flag',
    'firewall.filter.table.action' => 'Azione',
    'firewall.filter.table.chain' => 'Catena',
    'firewall.filter.table.src_address' => 'Indirizzo sorgente',
    'firewall.filter.table.dst_address' => 'Indirizzo destinazione',
    'firewall.filter.table.protocol' => 'Protocollo',
    'firewall.filter.table.src_port' => 'Porta sorgente',
    'firewall.filter.table.dst_port' => 'Porta destinazione',
    'firewall.filter.table.in_interface' => 'Interfaccia in ingresso',
    'firewall.filter.table.out_interface' => 'Interfaccia in uscita',
    'firewall.filter.table.src_address_list' => 'Lista indirizzi sorgente',
    'firewall.filter.table.dst_address_list' => 'Lista indirizzi destinazione',
    'firewall.filter.table.bytes' => 'Byte',
    'firewall.filter.table.packets' => 'Pacchetti',
    'firewall.nat.desc' => 'Configura le politiche NAT di origine e destinazione per la tua rete.',
    'firewall.nat.actions' => 'Azioni',
    'firewall.nat.new' => 'Nuovo',
    'firewall.nat.edit' => 'Modifica',
    'firewall.nat.enable' => 'Abilita',
    'firewall.nat.disable' => 'Disabilita',
    'firewall.nat.remove' => 'Rimuovi',
    'firewall.nat.sort.by' => 'Ordina per',
    'firewall.nat.sort' => 'Ordina',
    'firewall.nat.prev' => 'Prec.',
    'firewall.nat.next' => 'Succ.',
    'firewall.nat.loading' => 'Caricamento...',
    'firewall.nat.none' => 'Nessuna voce trovata',
    'firewall.nat.failed_to_load' => 'Caricamento non riuscito',
    'firewall.nat.confirm_remove' => 'Rimuovere gli elementi selezionati?',
    'firewall.nat.confirm_title' => 'Conferma',
    'firewall.nat.enable_success' => 'Abilitato',
    'firewall.nat.disable_success' => 'Disabilitato',
    'firewall.nat.remove_success' => 'Rimosso',
    'firewall.nat.action_failed' => 'Azione non riuscita: %s',
    'firewall.nat.action_failed_short' => 'Azione non riuscita',
    'firewall.nat.not_implemented' => 'Non ancora implementato',
    'firewall.nat.badge_disabled' => 'Disabilitato',
    'firewall.nat.badge_dynamic' => 'Dinamico',
    'firewall.nat.badge_invalid' => 'Non valido',
    'firewall.nat.table.select' => 'Seleziona',
    'firewall.filter.table.action' => 'Action',
    'firewall.filter.table.chain' => 'Chain',
    'firewall.filter.table.src_address' => 'Src. Address',
    'firewall.filter.table.dst_address' => 'Dst. Address',
    'firewall.filter.table.protocol' => 'Protocol',
    'firewall.filter.table.src_port' => 'Src. Port',
    'firewall.filter.table.dst_port' => 'Dst. Port',
    'firewall.filter.table.in_interface' => 'In. Interface',
    'firewall.filter.table.out_interface' => 'Out. Interface',
    'firewall.filter.table.src_address_list' => 'Src. Address List',
    'firewall.filter.table.dst_address_list' => 'Dst. Address List',
    'firewall.filter.table.bytes' => 'Bytes',
    'firewall.filter.table.packets' => 'Packets',
    'firewall.nat.desc' => 'Configure source and destination NAT policies for your network.',
    'firewall.nat.actions' => 'Actions',
    'firewall.nat.new' => 'New',
    'firewall.nat.edit' => 'Edit',
    'firewall.nat.enable' => 'Enable',
    'firewall.nat.disable' => 'Disable',
    'firewall.nat.remove' => 'Remove',
    'firewall.nat.sort.by' => 'Sort by',
    'firewall.nat.sort' => 'Sort',
    'firewall.nat.prev' => 'Prev',
    'firewall.nat.next' => 'Next',
    'firewall.nat.loading' => 'Loading...',
    'firewall.nat.none' => 'No entries found',
    'firewall.nat.failed_to_load' => 'Failed to load',
    'firewall.nat.confirm_remove' => 'Remove selected item(s)?',
    'firewall.nat.confirm_title' => 'Confirm',
    'firewall.nat.enable_success' => 'Enabled',
    'firewall.nat.disable_success' => 'Disabled',
    'firewall.nat.remove_success' => 'Removed',
    'firewall.nat.action_failed' => 'Action failed: %s',
    'firewall.nat.action_failed_short' => 'Action failed',
    'firewall.nat.not_implemented' => 'Not implemented yet',
    'firewall.nat.badge_disabled' => 'Disabled',
    'firewall.nat.badge_dynamic' => 'Dynamic',
    'firewall.nat.badge_invalid' => 'Invalid',
    'firewall.nat.table.select' => 'Select',
    'firewall.nat.table.number' => '#',
    'firewall.nat.table.flag' => 'Flag',
    'firewall.nat.table.action' => 'Azione',
    'firewall.nat.table.chain' => 'Catena',
    'firewall.nat.table.src_address' => 'Ind. sorgente',
    'firewall.nat.table.dst_address' => 'Ind. destinazione',
    'firewall.nat.table.protocol' => 'Protocollo',
    'firewall.nat.table.src_port' => 'Porta sorgente',
    'firewall.nat.table.dst_port' => 'Porta destinazione',
    'firewall.nat.table.in_interface' => 'Interfaccia in ingresso',
    'firewall.nat.table.out_interface' => 'Interfaccia in uscita',
    'firewall.nat.table.bytes' => 'Byte',
    'firewall.nat.table.packets' => 'Pacchetti',
    'firewall.mangle.desc' => 'Marca i pacchetti e le connessioni per il routing avanzato e la QoS.',
    'firewall.mangle.actions' => 'Azioni',
    'firewall.mangle.new' => 'Nuovo',
    'firewall.mangle.edit' => 'Modifica',
    'firewall.mangle.enable' => 'Abilita',
    'firewall.mangle.disable' => 'Disabilita',
    'firewall.mangle.remove' => 'Rimuovi',
    'firewall.mangle.sort.by' => 'Ordina per',
    'firewall.mangle.sort' => 'Ordina',
    'firewall.mangle.prev' => 'Prec.',
    'firewall.mangle.next' => 'Succ.',
    'firewall.mangle.loading' => 'Caricamento...',
    'firewall.mangle.none' => 'Nessuna voce trovata',
    'firewall.mangle.failed_to_load' => 'Caricamento non riuscito',
    'firewall.mangle.confirm_remove' => 'Rimuovere gli elementi selezionati?',
    'firewall.mangle.confirm_title' => 'Conferma',
    'firewall.mangle.enable_success' => 'Abilitato',
    'firewall.mangle.disable_success' => 'Disabilitato',
    'firewall.mangle.remove_success' => 'Rimosso',
    'firewall.mangle.action_failed' => 'Azione non riuscita: %s',
    'firewall.mangle.action_failed_short' => 'Azione non riuscita',
    'firewall.mangle.not_implemented' => 'Non ancora implementato',
    'firewall.mangle.badge_disabled' => 'Disabilitato',
    'firewall.mangle.badge_dynamic' => 'Dinamico',
    'firewall.mangle.badge_invalid' => 'Non valido',
    'firewall.mangle.table.select' => 'Seleziona',
    'firewall.nat.table.action' => 'Action',
    'firewall.nat.table.chain' => 'Chain',
    'firewall.nat.table.src_address' => 'Src. Add',
    'firewall.nat.table.dst_address' => 'Dst. Add',
    'firewall.nat.table.protocol' => 'Protocol',
    'firewall.nat.table.src_port' => 'Src. Port',
    'firewall.nat.table.dst_port' => 'Dst. Port',
    'firewall.nat.table.in_interface' => 'In Interface',
    'firewall.nat.table.out_interface' => 'Out Interface',
    'firewall.nat.table.bytes' => 'Bytes',
    'firewall.nat.table.packets' => 'Packets',
    'firewall.mangle.desc' => 'Mark packets and connections for advanced routing and QoS.',
    'firewall.mangle.actions' => 'Actions',
    'firewall.mangle.new' => 'New',
    'firewall.mangle.edit' => 'Edit',
    'firewall.mangle.enable' => 'Enable',
    'firewall.mangle.disable' => 'Disable',
    'firewall.mangle.remove' => 'Remove',
    'firewall.mangle.sort.by' => 'Sort by',
    'firewall.mangle.sort' => 'Sort',
    'firewall.mangle.prev' => 'Prev',
    'firewall.mangle.next' => 'Next',
    'firewall.mangle.loading' => 'Loading...',
    'firewall.mangle.none' => 'No entries found',
    'firewall.mangle.failed_to_load' => 'Failed to load',
    'firewall.mangle.confirm_remove' => 'Remove selected item(s)?',
    'firewall.mangle.confirm_title' => 'Confirm',
    'firewall.mangle.enable_success' => 'Enabled',
    'firewall.mangle.disable_success' => 'Disabled',
    'firewall.mangle.remove_success' => 'Removed',
    'firewall.mangle.action_failed' => 'Action failed: %s',
    'firewall.mangle.action_failed_short' => 'Action failed',
    'firewall.mangle.not_implemented' => 'Not implemented yet',
    'firewall.mangle.badge_disabled' => 'Disabled',
    'firewall.mangle.badge_dynamic' => 'Dynamic',
    'firewall.mangle.badge_invalid' => 'Invalid',
    'firewall.mangle.table.select' => 'Select',
    'firewall.mangle.table.number' => '#',
    'firewall.mangle.table.flag' => 'Flag',
    'firewall.mangle.table.action' => 'Azione',
    'firewall.mangle.table.chain' => 'Catena',
    'firewall.mangle.table.bytes' => 'Byte',
    'firewall.mangle.table.packets' => 'Pacchetti',
    'firewall.mangle.table.src_address' => 'Indirizzo sorgente',
    'firewall.mangle.table.dst_address' => 'Indirizzo destinazione',
    'firewall.mangle.table.src_address_list' => 'Lista indirizzi sorgente',
    'firewall.mangle.table.dst_address_list' => 'Lista indirizzi destinazione',
    'firewall.mangle.table.protocol' => 'Protocollo',
    'firewall.mangle.table.src_port' => 'Porta sorgente',
    'firewall.mangle.table.dst_port' => 'Porta destinazione',
    'firewall.mangle.table.in_interface' => 'Interfaccia in ingresso',
    'firewall.mangle.table.out_interface' => 'Interfaccia in uscita',
    'firewall.raw.desc' => 'Applica filtri raw di pre-routing prima del tracciamento delle connessioni.',
    'firewall.raw.actions' => 'Azioni',
    'firewall.raw.new' => 'Nuovo',
    'firewall.raw.edit' => 'Modifica',
    'firewall.raw.enable' => 'Abilita',
    'firewall.raw.disable' => 'Disabilita',
    'firewall.raw.remove' => 'Rimuovi',
    'firewall.raw.sort.by' => 'Ordina per',
    'firewall.raw.sort' => 'Ordina',
    'firewall.raw.prev' => 'Prec.',
    'firewall.raw.next' => 'Succ.',
    'firewall.raw.loading' => 'Caricamento...',
    'firewall.raw.none' => 'Nessuna voce trovata',
    'firewall.raw.failed_to_load' => 'Caricamento non riuscito',
    'firewall.raw.confirm_remove' => 'Rimuovere gli elementi selezionati?',
    'firewall.raw.confirm_title' => 'Conferma',
    'firewall.raw.enable_success' => 'Abilitato',
    'firewall.raw.disable_success' => 'Disabilitato',
    'firewall.raw.remove_success' => 'Rimosso',
    'firewall.raw.action_failed' => 'Azione non riuscita: %s',
    'firewall.raw.action_failed_short' => 'Azione non riuscita',
    'firewall.raw.not_implemented' => 'Non ancora implementato',
    'firewall.raw.badge_disabled' => 'Disabilitato',
    'firewall.raw.badge_dynamic' => 'Dinamico',
    'firewall.raw.badge_invalid' => 'Non valido',
    'firewall.raw.table.select' => 'Seleziona',
    'firewall.mangle.table.action' => 'Action',
    'firewall.mangle.table.chain' => 'Chain',
    'firewall.mangle.table.bytes' => 'Bytes',
    'firewall.mangle.table.packets' => 'Packets',
    'firewall.mangle.table.src_address' => 'Src. Address',
    'firewall.mangle.table.dst_address' => 'Dst. Address',
    'firewall.mangle.table.src_address_list' => 'Src. Address List',
    'firewall.mangle.table.dst_address_list' => 'Dst. Address List',
    'firewall.mangle.table.protocol' => 'Protocol',
    'firewall.mangle.table.src_port' => 'Src. Port',
    'firewall.mangle.table.dst_port' => 'Dst. Port',
    'firewall.mangle.table.in_interface' => 'In. Interface',
    'firewall.mangle.table.out_interface' => 'Out. Interface',
    'firewall.raw.desc' => 'Apply raw prerouting filters before connection tracking.',
    'firewall.raw.actions' => 'Actions',
    'firewall.raw.new' => 'New',
    'firewall.raw.edit' => 'Edit',
    'firewall.raw.enable' => 'Enable',
    'firewall.raw.disable' => 'Disable',
    'firewall.raw.remove' => 'Remove',
    'firewall.raw.sort.by' => 'Sort by',
    'firewall.raw.sort' => 'Sort',
    'firewall.raw.prev' => 'Prev',
    'firewall.raw.next' => 'Next',
    'firewall.raw.loading' => 'Loading...',
    'firewall.raw.none' => 'No entries found',
    'firewall.raw.failed_to_load' => 'Failed to load',
    'firewall.raw.confirm_remove' => 'Remove selected item(s)?',
    'firewall.raw.confirm_title' => 'Confirm',
    'firewall.raw.enable_success' => 'Enabled',
    'firewall.raw.disable_success' => 'Disabled',
    'firewall.raw.remove_success' => 'Removed',
    'firewall.raw.action_failed' => 'Action failed: %s',
    'firewall.raw.action_failed_short' => 'Action failed',
    'firewall.raw.not_implemented' => 'Not implemented yet',
    'firewall.raw.badge_disabled' => 'Disabled',
    'firewall.raw.badge_dynamic' => 'Dynamic',
    'firewall.raw.badge_invalid' => 'Invalid',
    'firewall.raw.table.select' => 'Select',
    'firewall.raw.table.flag' => 'Flag',
    'firewall.raw.table.action' => 'Azione',
    'firewall.raw.table.chain' => 'Catena',
    'firewall.raw.table.src_address' => 'Indirizzo sorgente',
    'firewall.raw.table.dst_address' => 'Indirizzo destinazione',
    'firewall.raw.table.src_address_list' => 'Lista indirizzi sorgente',
    'firewall.raw.table.dst_address_list' => 'Lista indirizzi destinazione',
    'firewall.raw.table.protocol' => 'Protocollo',
    'firewall.connections.desc' => 'Ispeziona le voci correnti di tracciamento connessioni del firewall.',
    'firewall.address.desc' => 'Mantieni liste di indirizzi riutilizzabili per la corrispondenza delle regole.',
    'firewall.address.actions' => 'Azioni',
    'firewall.address.new' => 'Nuovo',
    'firewall.address.enable' => 'Abilita',
    'firewall.address.disable' => 'Disabilita',
    'firewall.address.remove' => 'Rimuovi',
    'firewall.address.refresh' => 'Aggiorna',
    'firewall.address.sort.by' => 'Ordina per',
    'firewall.address.sort' => 'Ordina',
    'firewall.address.prev' => 'Prec.',
    'firewall.address.next' => 'Succ.',
    'firewall.address.loading' => 'Caricamento...',
    'firewall.address.none' => 'Nessuna voce trovata',
    'firewall.address.failed_to_load' => 'Caricamento non riuscito',
    'firewall.address.confirm_remove' => 'Rimuovere gli elementi selezionati?',
    'firewall.address.confirm_title' => 'Conferma',
    'firewall.address.enable_success' => 'Abilitato',
    'firewall.address.disable_success' => 'Disabilitato',
    'firewall.address.remove_success' => 'Rimosso',
    'firewall.address.action_failed' => 'Azione non riuscita: %s',
    'firewall.address.action_failed_short' => 'Azione non riuscita',
    'firewall.address.not_implemented' => 'Non ancora implementato',
    'firewall.address.table.select' => 'Seleziona',
    'firewall.address.table.list' => 'Lista',
    'firewall.address.table.address' => 'Indirizzo',
    'firewall.address.table.time' => 'Ora',
    'firewall.address.table.creation' => 'Creazione',
    'firewall.address.edit' => 'Modifica',
    'firewall.address.modal.title_new' => 'Aggiungi lista indirizzi',
    'firewall.address.modal.title_edit' => 'Modifica lista indirizzi',
    'firewall.address.modal.enabled' => 'Abilitato',
    'firewall.address.modal.list' => 'Lista',
    'firewall.address.modal.list_placeholder' => 'Inserisci nome lista',
    'firewall.address.modal.list_select_placeholder' => 'Seleziona una lista di indirizzi esistente',
    'firewall.address.modal.address' => 'Indirizzo',
    'firewall.raw.table.action' => 'Action',
    'firewall.raw.table.chain' => 'Chain',
    'firewall.raw.table.src_address' => 'Src. Address',
    'firewall.raw.table.dst_address' => 'Dst. Address',
    'firewall.raw.table.src_address_list' => 'Src. Address List',
    'firewall.raw.table.dst_address_list' => 'Dst. Address List',
    'firewall.raw.table.protocol' => 'Protocol',
    'firewall.connections.desc' => 'Inspect current firewall connection tracking entries.',
    'firewall.address.desc' => 'Maintain reusable address lists for rule matching.',
    'firewall.address.actions' => 'Actions',
    'firewall.address.new' => 'New',
    'firewall.address.enable' => 'Enable',
    'firewall.address.disable' => 'Disable',
    'firewall.address.remove' => 'Remove',
    'firewall.address.refresh' => 'Refresh',
    'firewall.address.sort.by' => 'Sort by',
    'firewall.address.sort' => 'Sort',
    'firewall.address.prev' => 'Prev',
    'firewall.address.next' => 'Next',
    'firewall.address.loading' => 'Loading...',
    'firewall.address.none' => 'No entries found',
    'firewall.address.failed_to_load' => 'Failed to load',
    'firewall.address.confirm_remove' => 'Remove selected item(s)?',
    'firewall.address.confirm_title' => 'Confirm',
    'firewall.address.enable_success' => 'Enabled',
    'firewall.address.disable_success' => 'Disabled',
    'firewall.address.remove_success' => 'Removed',
    'firewall.address.action_failed' => 'Action failed: %s',
    'firewall.address.action_failed_short' => 'Action failed',
    'firewall.address.not_implemented' => 'Not implemented yet',
    'firewall.address.table.select' => 'Select',
    'firewall.address.table.list' => 'List',
    'firewall.address.table.address' => 'Address',
    'firewall.address.table.time' => 'Time',
    'firewall.address.table.creation' => 'Creation',
    'firewall.address.edit' => 'Edit',
    'firewall.address.modal.title_new' => 'Add Address List',
    'firewall.address.modal.title_edit' => 'Edit Address List',
    'firewall.address.modal.enabled' => 'Enabled',
    'firewall.address.modal.list' => 'List',
    'firewall.address.modal.list_placeholder' => 'Enter list name',
    'firewall.address.modal.list_select_placeholder' => 'Select existing address list',
    'firewall.address.modal.address' => 'Address',
    'firewall.address.modal.timeout' => 'Timeout',
    'firewall.address.modal.creation' => 'Ora di creazione',
    'firewall.address.modal.comment' => 'Commento',
    'firewall.address.modal.cancel' => 'Annulla',
    'firewall.address.modal.create' => 'Crea',
    'firewall.address.modal.update' => 'Aggiorna',
    'firewall.address.modal.list_required' => 'La lista è obbligatoria',
    'firewall.address.modal.address_required' => 'L\'indirizzo è obbligatorio',
    'firewall.address.modal.add_success' => 'Lista indirizzi creata',
    'firewall.address.modal.update_success' => 'Lista indirizzi aggiornata',
    'firewall.address.modal.save_failed' => 'Salvataggio non riuscito: %s',
    'firewall.address.modal.request_failed' => 'Richiesta non riuscita',
    'firewall.address.modal.creation_auto' => 'Verrà impostato automaticamente',
    'firewall.layer7.desc' => 'Gestisci i modelli di protocollo Layer7 per l\'ispezione profonda dei pacchetti.',
    'firewall.layer7.actions' => 'Azioni',
    'firewall.layer7.new' => 'Nuovo',
    'firewall.layer7.edit' => 'Modifica',
    'firewall.layer7.remove' => 'Rimuovi',
    'firewall.layer7.sort.by' => 'Ordina per',
    'firewall.layer7.sort' => 'Ordina',
    'firewall.layer7.prev' => 'Prec.',
    'firewall.layer7.next' => 'Succ.',
    'firewall.layer7.loading' => 'Caricamento...',
    'firewall.layer7.none' => 'Nessuna voce trovata',
    'firewall.layer7.failed_to_load' => 'Caricamento non riuscito',
    'firewall.layer7.confirm_remove' => 'Rimuovere gli elementi selezionati?',
    'firewall.layer7.confirm_title' => 'Conferma',
    'firewall.layer7.remove_success' => 'Rimosso',
    'firewall.layer7.remove_failed' => 'Rimozione non riuscita: %s',
    'firewall.layer7.remove_failed_short' => 'Rimozione non riuscita',
    'firewall.layer7.not_implemented' => 'Non ancora implementato',
    'firewall.layer7.table.select' => 'Seleziona',
    'firewall.layer7.table.name' => 'Nome',
    'firewall.address.modal.creation' => 'Creation Time',
    'firewall.address.modal.comment' => 'Comment',
    'firewall.address.modal.cancel' => 'Cancel',
    'firewall.address.modal.create' => 'Create',
    'firewall.address.modal.update' => 'Update',
    'firewall.address.modal.list_required' => 'List is required',
    'firewall.address.modal.address_required' => 'Address is required',
    'firewall.address.modal.add_success' => 'Address list created',
    'firewall.address.modal.update_success' => 'Address list updated',
    'firewall.address.modal.save_failed' => 'Save failed: %s',
    'firewall.address.modal.request_failed' => 'Request failed',
    'firewall.address.modal.creation_auto' => 'Will be set automatically',
    'firewall.layer7.desc' => 'Manage Layer7 protocol patterns for deep packet inspection.',
    'firewall.layer7.actions' => 'Actions',
    'firewall.layer7.new' => 'New',
    'firewall.layer7.edit' => 'Edit',
    'firewall.layer7.remove' => 'Remove',
    'firewall.layer7.sort.by' => 'Sort by',
    'firewall.layer7.sort' => 'Sort',
    'firewall.layer7.prev' => 'Prev',
    'firewall.layer7.next' => 'Next',
    'firewall.layer7.loading' => 'Loading...',
    'firewall.layer7.none' => 'No entries found',
    'firewall.layer7.failed_to_load' => 'Failed to load',
    'firewall.layer7.confirm_remove' => 'Remove selected item(s)?',
    'firewall.layer7.confirm_title' => 'Confirm',
    'firewall.layer7.remove_success' => 'Removed',
    'firewall.layer7.remove_failed' => 'Remove failed: %s',
    'firewall.layer7.remove_failed_short' => 'Remove failed',
    'firewall.layer7.not_implemented' => 'Not implemented yet',
    'firewall.layer7.table.select' => 'Select',
    'firewall.layer7.table.name' => 'Name',
    'firewall.layer7.table.regexp' => 'Regexp',
    'firewall.layer7.modal.title_new' => 'Aggiungi protocollo Layer7',
    'firewall.layer7.modal.title_edit' => 'Modifica protocollo Layer7',
    'firewall.layer7.modal.name' => 'Nome',
    'firewall.layer7.modal.title_new' => 'Add Layer7 Protocol',
    'firewall.layer7.modal.title_edit' => 'Edit Layer7 Protocol',
    'firewall.layer7.modal.name' => 'Name',
    'firewall.layer7.modal.regexp' => 'Regexp',
    'firewall.layer7.modal.comment' => 'Commento',
    'firewall.layer7.modal.cancel' => 'Annulla',
    'firewall.layer7.modal.create' => 'Crea',
    'firewall.layer7.modal.update' => 'Aggiorna',
    'firewall.layer7.modal.name_required' => 'Il nome è obbligatorio',
    'firewall.layer7.modal.regexp_required' => 'Il regexp è obbligatorio',
    'firewall.layer7.modal.add_success' => 'Protocollo Layer7 creato',
    'firewall.layer7.modal.update_success' => 'Protocollo Layer7 aggiornato',
    'firewall.layer7.modal.save_failed' => 'Salvataggio non riuscito: %s',
    'firewall.layer7.modal.request_failed' => 'Richiesta non riuscita',
    'firewall.open.filter' => 'Apri regole di filtro',
    'firewall.open.nat' => 'Apri NAT',
    'firewall.open.mangle' => 'Apri Mangle',
    'firewall.open.raw' => 'Apri Raw',
    'firewall.open.connections' => 'Apri connessioni',
    'firewall.open.address' => 'Apri liste di indirizzi',
    'firewall.open.layer7' => 'Apri protocolli Layer7',
    'firewall.back-to-firewall' => 'Torna al firewall',
    'firewall.connections.actions' => 'Azioni',
    'firewall.connections.remove' => 'Rimuovi',
    'firewall.connections.refresh' => 'Aggiorna',
    'firewall.connections.sort.by' => 'Ordina per',
    'firewall.connections.sort' => 'Ordina',
    'firewall.connections.prev' => 'Prec.',
    'firewall.connections.next' => 'Succ.',
    'firewall.connections.loading' => 'Caricamento connessioni...',
    'firewall.connections.none' => 'Nessuna connessione trovata',
    'firewall.connections.failed_to_load' => 'Caricamento non riuscito',
    'firewall.connections.confirm_remove' => 'Rimuovere le connessioni selezionate?',
    'firewall.connections.confirm_title' => 'Conferma',
    'firewall.connections.remove_success' => 'Connessioni rimosse',
    'firewall.connections.remove_failed' => 'Rimozione non riuscita: %s',
    'firewall.connections.remove_failed_short' => 'Rimozione non riuscita',
    'firewall.connections.table.select' => 'Seleziona',
    'firewall.layer7.modal.comment' => 'Comment',
    'firewall.layer7.modal.cancel' => 'Cancel',
    'firewall.layer7.modal.create' => 'Create',
    'firewall.layer7.modal.update' => 'Update',
    'firewall.layer7.modal.name_required' => 'Name is required',
    'firewall.layer7.modal.regexp_required' => 'Regexp is required',
    'firewall.layer7.modal.add_success' => 'Layer7 protocol created',
    'firewall.layer7.modal.update_success' => 'Layer7 protocol updated',
    'firewall.layer7.modal.save_failed' => 'Save failed: %s',
    'firewall.layer7.modal.request_failed' => 'Request failed',
    'firewall.open.filter' => 'Open Filter Rules',
    'firewall.open.nat' => 'Open NAT',
    'firewall.open.mangle' => 'Open Mangle',
    'firewall.open.raw' => 'Open Raw',
    'firewall.open.connections' => 'Open Connections',
    'firewall.open.address' => 'Open Address Lists',
    'firewall.open.layer7' => 'Open Layer7 Protocols',
    'firewall.back-to-firewall' => 'Back to Firewall',
    'firewall.connections.actions' => 'Actions',
    'firewall.connections.remove' => 'Remove',
    'firewall.connections.refresh' => 'Refresh',
    'firewall.connections.sort.by' => 'Sort by',
    'firewall.connections.sort' => 'Sort',
    'firewall.connections.prev' => 'Prev',
    'firewall.connections.next' => 'Next',
    'firewall.connections.loading' => 'Loading connections...',
    'firewall.connections.none' => 'No connections found',
    'firewall.connections.failed_to_load' => 'Failed to load',
    'firewall.connections.confirm_remove' => 'Remove selected connection(s)?',
    'firewall.connections.confirm_title' => 'Confirm',
    'firewall.connections.remove_success' => 'Connections removed',
    'firewall.connections.remove_failed' => 'Remove failed: %s',
    'firewall.connections.remove_failed_short' => 'Remove failed',
    'firewall.connections.table.select' => 'Select',
    'firewall.connections.table.flags' => 'Flag',
    'firewall.connections.table.protocol' => 'Protocollo',
    'firewall.connections.table.src_address' => 'Indirizzo sorgente',
    'firewall.connections.table.src_port' => 'Porta sorgente',
    'firewall.connections.table.dst_address' => 'Indirizzo destinazione',
    'firewall.connections.table.dst_port' => 'Porta destinazione',
    'firewall.connections.table.conn_mark' => 'Marca connessione',
    'firewall.connections.table.state' => 'Stato',
    'firewall.connections.table.protocol' => 'Protocol',
    'firewall.connections.table.src_address' => 'Src. Address',
    'firewall.connections.table.src_port' => 'Src. Port',
    'firewall.connections.table.dst_address' => 'Dst. Address',
    'firewall.connections.table.dst_port' => 'Dst. Port',
    'firewall.connections.table.conn_mark' => 'Connection mark',
    'firewall.connections.table.state' => 'State',

    // Hotspot - Back Button
    'hotspot.back-to-hotspot'=> 'Torna a Gestione Hotspot',

    // Hotspot General Buttons
    'hotspot.action.button'=> 'Azioni',
    'hotspot.generate.button'=> 'Genera',
    'hotspot.add-user.button'=> 'Aggiungi utente',
    'hotspot.enable.button'=> 'Abilita',
    'hotspot.add-profile.button'=> 'Aggiungi profilo',
    'hotspot.edit.button'=> 'Modifica',
    'hotspot.remove.button'=> 'Rimuovi',
    'hotspot.disable.button'=> 'Disabilita',
    'hotspot.export.users'=> 'Esporta utenti',
    'hotspot.export.button'=> 'Esporta',
    'hotspot.button.refresh'=> 'Aggiorna',
    'hotspot.button.prev'=> 'Prec',
    'hotspot.button.next'=> 'Succ',
    'hotspot.sort.by'=> 'Ordina per',
    'hotspot.sort.profiles'=> 'Ordina per profilo',
    'hotspot.sort.comments'=> 'Ordina per commenti',

    // Hotspot Table Headers
    'hotspot.table.th.select'=> 'Seleziona tutto',
    'hotspot.table.th.server'=> 'Nome server',
    'hotspot.table.th.user'=> 'Utente',
    'hotspot.table.th.name'=> 'Nome',
    'hotspot.table.th.address'=> 'Indirizzo',
    'hotspot.table.th.mac'=> 'Indirizzo MAC',
    'hotspot.table.th.profile'=> 'Profilo',
    'hotspot.table.th.uptime'=> 'Tempo attivo',
    'hotspot.table.th.bytes-in'=> 'Byte in',
    'hotspot.table.th.bytes-out'=> 'Byte out',
    'hotspot.table.th.comment'=> 'Commento',
    'hotspot.table.th.to-address'=> 'Indirizzo destinazione',
    'hotspot.table.th.last-seen'=> 'Ultimo rilevamento',
    'hotspot.status.loading'=> 'Caricamento utenti hotspot...',

    // Hotspot JS: hosts, profiles, users, modals
    // Hosts list
    'hotspot.hosts.no_hosts' => 'Nessun host',
    'hotspot.hosts.loading' => 'Caricamento host...',
    'hotspot.hosts.failed_to_contact_api' => 'Impossibile contattare l\'API',
    'hotspot.hosts.page_info' => 'Pagina %s / %s (%s)',

    // Profiles list
    'hotspot.profiles.no_profiles' => 'Nessun profilo',
    'hotspot.profiles.loading' => 'Caricamento profili...',
    'hotspot.profiles.failed_to_load' => 'Impossibile caricare i profili',
    'hotspot.profiles.failed_to_contact_api' => 'Impossibile contattare l\'API',
    'hotspot.profiles.no_pools' => '(nessun pool)',
    'hotspot.profiles.no_queues' => '(nessuna coda)',
    'hotspot.profiles.no_types' => '(nessun tipo)',
    'hotspot.profiles.select' => 'Seleziona...',
    'hotspot.profiles.default' => 'predefinito',
    'hotspot.profiles.no_profiles_option' => '(nessun profilo)',
    'hotspot.profiles.page_info' => 'Pagina %s / %s (%s)',
    'hotspot.profiles.name_required' => 'Il nome è obbligatorio',
    'hotspot.profiles.added' => 'Profilo aggiunto',
    'hotspot.profiles.add_failed' => 'Aggiunta profilo fallita: %s',
    'hotspot.profiles.server_contact_failed' => 'Impossibile contattare il server',
    'hotspot.profiles.id_missing' => 'ID profilo mancante',
    'hotspot.profiles.updated' => 'Profilo aggiornato',
    'hotspot.profiles.update_failed' => 'Aggiornamento profilo fallito: %s',
    'hotspot.profiles.removed' => 'Profilo rimosso',
    'hotspot.profiles.remove_failed' => 'Rimozione profilo fallita: %s',
    'hotspot.profiles.select_remove' => 'Seleziona un profilo da rimuovere',
    'hotspot.profiles.remove_confirm' => 'Sei sicuro di voler rimuovere il profilo selezionato?',
    'hotspot.profiles.remove_confirm_title' => 'Conferma',
    
    // Admin Control Panel translations
    'admin.title' => 'Pannello di amministrazione',
    'admin.desc' => 'Centro di controllo amministrativo',
    'admin.maintenance' => 'Manutenzione',
    'admin.maintenance.desc' => 'Abilita o disabilita l\'avviso di manutenzione per i visitatori.',
    'admin.page_access' => 'Controlli accesso pagine',
    'admin.page_access.desc' => 'Consenti o vieta agli utenti l\'accesso a intere sezioni dell\'app.',
    'admin.view_logs' => 'Visualizza log',
    'admin.logs.title' => 'Log accesso admin',
    'admin.save' => 'Salva',
    'admin.saved' => 'Salvato',
    'admin.save_failed' => 'Salvataggio fallito',
    'admin.save_error' => 'Impossibile salvare le impostazioni',
    'admin.load_logs_failed' => 'Impossibile caricare i log',
    'admin.access_denied' => 'Non hai il permesso per accedere al pannello di amministrazione.',
    'access.restricted.title' => 'Accesso ristretto',
    'access.restricted.desc' => 'Questa sezione è attualmente disabilitata',
    'admin.section_disabled' => 'Sezione disabilitata dall\'amministratore',
    'nav.disabled' => 'Disabilitato',
    // Maintenance toggle JS strings
    'maintenance.toast' => 'Modalità manutenzione' . '<br/><br/>' . 'Le funzioni sono limitate mentre la modalità manutenzione è attiva.',
    'maintenance.update_toast' => 'Modalità aggiornamento di sistema' . '<br/><br/>' . 'Sono in corso aggiornamenti di sistema. Alcune funzionalità potrebbero non essere disponibili.',
    'maintenance.set_failed' => 'Impossibile impostare lo stato della modalità manutenzione',

    // Users modals and export
    'hotspot.modals.no_servers' => '(nessun server)',
    'hotspot.modals.no_profiles' => '(nessun profilo)',
    'hotspot.modals.please_select_export' => 'Seleziona uno o più utenti da esportare',
    'hotspot.modals.select_at_least_one_field' => 'Seleziona almeno un campo da esportare',
    'hotspot.modals.no_users_selected' => 'Nessun utente selezionato',
    'hotspot.modals.no_data_to_export' => 'Nessun dato da esportare',
    'hotspot.modals.export_started' => 'Esportazione avviata',
    'hotspot.modals.export_failed' => 'Esportazione fallita',
    'hotspot.modals.add_user_title' => 'Aggiungi utente Hotspot',
    'hotspot.modals.edit_user_title' => 'Modifica utente Hotspot',
    'hotspot.modals.create_button' => 'Crea',
    'hotspot.modals.update_button' => 'Aggiorna',
    'hotspot.modals.failed_load_user' => 'Impossibile caricare i dati utente',
    'hotspot.modals.select_one_to_edit' => 'Seleziona esattamente un utente da modificare',
    'hotspot.modals.user_updated' => 'Utente aggiornato',
    'hotspot.modals.user_created' => 'Utente creato',
    'hotspot.modals.create_update_failed' => 'Creazione/Aggiornamento fallito',
    'hotspot.modals.create_request_failed' => 'Richiesta di creazione fallita',

    // Users list
    'hotspot.users.no_users' => 'Nessun utente',
    'hotspot.users.loading' => 'Caricamento...',
    'hotspot.users.empty_response' => 'Risposta vuota',
    'hotspot.users.failed_to_contact_api' => 'Impossibile contattare l\'API',
    'hotspot.users.select_one_or_more' => 'Seleziona uno o più utenti.',
    'hotspot.users.remove_confirm' => 'Rimuovere gli utenti selezionati? Questa azione non può essere annullata.',
    'hotspot.users.action_completed' => 'Azione "%s" completata. Successo: %s/%s',
    'hotspot.users.action_failed' => 'Azione fallita: %s',
    'hotspot.users.request_failed' => 'Richiesta fallita',
    'hotspot.users.sort_profiles' => 'Ordina profili',
    'hotspot.users.sort_comments' => 'Ordina commenti',
    'hotspot.users.select_profiles_placeholder' => 'Ordina profili',
    'hotspot.users.select_comments_placeholder' => 'Ordina commenti',

    // Hotspot JS helper strings
    'hotspot.no_active_entries' => 'Nessuna voce attiva',
    'hotspot.loading' => 'Caricamento...',
    'hotspot.failed_to_contact_api' => 'Impossibile contattare l\'API',
    'hotspot.page_info' => 'Pagina %s / %s (%s)',

    // Hotspot Modal Tabs and Titles
    'hotspot.modal.title.generate'=> 'Genera utenti / voucher',
    'hotspot.modal.general.tab'=> 'Generale',
    'hotspot.modal.printing.tab'=> 'Stampa',
    'hotspot.modal.stats.tab'=> 'Statistiche',
    'hotspot.modal.queueing.tab'=> 'Accodamento',
    'hotspot.modal.scripts.tab'=> 'Script',

    // Hotspot Modal Form Generate / Add User - General Tab
    'hotspot.modal.form.qty'=> 'Quantità',
    'hotspot.modal.form.server'=> 'Server Hotspot',
    'hotspot.modal.form.qty.help'=> 'Numero di voucher / codici token che verranno creati.',
    'hotspot.modal.form.username'=> 'Nome utente',
    'hotspot.modal.form.password'=> 'Password',
    'hotspot.modal.form.user-type'=> 'Tipo utente',
    'hotspot.modal.form.user-type.help'=> 'Username & Password - Crea uno username casuale e una password diversa (consente il login utente ordinario).<br/>Username = Password - Crea uno username casuale con password uguale allo username (per uso voucher).',
    'hotspot.modal.form.code-length'=> 'Lunghezza codice',
    'hotspot.modal.form.characters'=> 'Caratteri',
    'hotspot.modal.form.user-profile'=> 'Profilo utente',
    'hotspot.modal.form.comment'=> 'Commento',
    'hotspot.modal.form.optional-comment'=> 'Commento facoltativo',
    'hotspot.modal.form.mac-address'=>  'Indirizzo MAC',
    'hotspot.modal.form.time-limit'=>  'Limite di tempo',
    'hotspot.modal.form.time-limit.help'=> 'Formati accettati:<br/>m - Minuti<br/>h - Ore<br/>d - Giorni<br/><br/>L\'utente viene disabilitato quando il limite di tempo è raggiunto.<br/><br/>Note:<br/>1. Se sono impostati sia il Limite di Tempo sia il Limite di Dati, l\'utente verrà disabilitato quando uno qualsiasi dei limiti sarà raggiunto.<br/>2. Se nessun limite è impostato, l\'utente rimarrà attivo fino a quando non verrà disabilitato o rimosso manualmente.<br/>3. Limite di Tempo e Limite di Dati possono essere usati insieme per un maggiore controllo delle sessioni.<br/>4. Assicurarsi che il formato sia corretto per evitare errori durante la creazione dell\'utente.<br/>5. Esempi: 30m (30 minuti), 2h (2 ore), 1d (1 giorno).',
    'hotspot.modal.form.data-limit'=>  'Limite dati',
    'hotspot.modal.form.data-limit.help'=> 'Formati accettati:<br/>M - Megabit<br/>G - Gigabit<br/><br/>L\'utente viene disabilitato quando il limite di dati è raggiunto.<br/><br/>Note:<br/>1. Se sono impostati sia il Limite di Tempo sia il Limite di Dati, l\'utente verrà disabilitato quando uno qualsiasi dei limiti sarà raggiunto.<br/>2. Se nessun limite è impostato, l\'utente rimarrà attivo fino a quando non verrà disabilitato o rimosso manualmente.<br/>3. Limite di Tempo e Limite di Dati possono essere usati insieme per un maggiore controllo delle sessioni.<br/>4. Assicurarsi che il formato sia corretto per evitare errori durante la creazione dell\'utente.<br/>5. Esempi: 500M (500 Megabit), 2G (2 Gigabit).',

    // Hotspot Modal Form Generate - Printing Tab
    'hotspot.modal.form.hotspot-name'=> 'Nome Hotspot',
    'hotspot.modal.form.hotspot-dns'=> 'DNS',
    'hotspot.modal.form.hotspot-currency'=> 'Valuta',
    'hotspot.modal.form.hotspot-select-currency'=> 'Seleziona valuta',
    'hotspot.modal.form.hotspot-price'=> 'Prezzo',
    'hotspot.modal.form.hotspot-include-comment'=> 'Includi commento',
    'hotspot.modal.form.hotspot-include-comment-desc'=> 'Includi il commento generato sul voucher stampato',
    'hotspot.modal.form.hotspot-template'=> 'Modello',

    // Hotspot Modal Form Generate - Printing Placeholders
    'hotspot.modal.form.hotspot-name-placeholder'=> 'Il mio Hotspot',
    'hotspot.modal.form.hotspot-dns-placeholder'=> 'hotspot.mtikops.com',
    'hotspot.modal.form.hotspot-price-placeholder'=> 'Prezzo per voucher',

    // Hotspot Modal Form Generate - User-Type
    'hotspot.modal.form.user-type-regular'=> 'Nome utente e password',
    'hotspot.modal.form.user-type-voucher'=> 'Nome utente = Password',

    // Hotspot Modal Form Generate - Characters
    'hotspot.modal.form.characters-lower'=> 'abcd (minuscolo)',
    'hotspot.modal.form.characters-upper'=> 'ABCD (MAIUSCOLO)',
    'hotspot.modal.form.characters-mixed'=> 'AbCd (Misto)',
    'hotspot.modal.form.characters-num'=> '1234 (Numeri)',
    'hotspot.modal.form.characters-lower-num'=> 'a1b2 (minuscolo & numeri)',
    'hotspot.modal.form.characters-upper-num'=> 'A1B2 (MAIUSCOLO & numeri)',
    'hotspot.modal.form.characters-mixed-num'=> 'aA1bB2 (Misto & numeri)',

    // Hotspot Modal Form Stats - Stats Tab
    'hotspot.modal.form.stats.uptime'=> 'Tempo di attività',
    'hotspot.modal.form.stats.bytes_in'=> 'Byte in ingresso',
    'hotspot.modal.form.stats.bytes_out'=> 'Byte in uscita',
    'hotspot.modal.form.stats.limit-uptime'=> 'Limite tempo attività',
    'hotspot.modal.form.stats.limit-bytes_total'=> 'Limite byte totale',
    'hotspot.modal.form.stats.user-code'=> 'Codice utente',
    'hotspot.modal.form.stats.expire-date'=> 'Data di scadenza',

    // Hotspot Modal Form Misc
    'hotspot.modal.form.loading' => 'Caricamento dati...',

    // Hotspot Modal Form Buttons
    'hotspot.modal.form.button.generate-print'=> 'Genera e stampa',
    'hotspot.modal.form.button.generate'=> 'Solo genera',
    'hotspot.modal.form.button.clear-cached-batch'=> 'Svuota batch memorizzato',
    'hotspot.modal.form.button.close'=> 'Chiudi',
    'hotspot.modal.form.button.create'=> 'Crea',
    'hotspot.modal.form.button.cancel'=> 'Annulla',

    // profiles.php
    // Hotspot User Profiles Page
    'hotspot.user.profiles.title'=> 'Profili',
    'hotspot.user.profiles.desc'=> 'Gestisci profili di larghezza di banda, sessione e limitazione velocità per gli utenti.',

    // Hotspot User Profiles Table Headers
    'hotspot.user.profiles.th.name'=> 'Nome',
    'hotspot.user.profiles.th.shared-users'=> 'Utenti condivisi',
    'hotspot.user.profiles.th.rate-limit'=> 'Limite velocità',
    'hotspot.user.profiles.th.idle-timeout'=> 'Timeout inattività',
    'hotspot.user.profiles.th.keepalive-timeout'=> 'Timeout keepalive',
    'hotspot.user.profiles.th.queue-type'=> 'Tipo di coda',

    // Hotspot User Profiles Modal Form
    'hotspot.user.profiles.modal.title.add-profile'=> 'Aggiungi profilo',

    // Hotspot User Profile Form Fields - General Tab
    'hotspot.user.profiles.form.name'=> 'Nome profilo',
    'hotspot.user.profiles.form.pool'=> 'Pool indirizzi',
    'hotspot.user.profiles.form.rate-limit-rx'=> 'Limite (RX)',
    'hotspot.user.profiles.form.rate-limit-tx'=> 'Limite (TX)',
    'hotspot.user.profiles.form.shared-users'=> 'Utenti condivisi',
    'hotspot.user.profiles.form.expiry-mode'=> 'Modalità scadenza',
    'hotspot.user.profiles.form.expiry-duration'=> 'Durata scadenza',
    'hotspot.user.profiles.form.lock-device'=> 'Blocca a dispositivo',
    'hotspot.user.profiles.form.lock-server'=> 'Blocca a server',
    'hotspot.user.profiles.form.comment'=> 'Commento',

    // Expiry Mode Options
    'hotspot.user.profiles.form.expiry-mode_none'=> 'Nessuna',
    'hotspot.user.profiles.form.expiry-mode_remove'=> 'Rimuovi',
    'hotspot.user.profiles.form.expiry-mode_notice'=> 'Avviso',
    'hotspot.user.profiles.form.expiry-mode_remove_record'=> 'Rimuovi e registra',
    'hotspot.user.profiles.form.expiry-mode_remove_notice'=> 'Rimuovi e avvisa',
    'hotspot.user.profiles.form.expiry-mode_help'=> 'Seleziona come gestire la scadenza utente per questo profilo.<br/><br/>Opzioni:<br/>Nessuna - Nessuna scadenza.<br/>Rimuovi - Rimuovi automaticamente l\'utente alla scadenza.<br/>Avviso - Notifica l\'utente alla scadenza ma non rimuovere.<br/>Rimuovi e registra - Rimuovi l\'utente e registra l\'evento.<br/>Avvisa e rimuovi - Notifica l\'utente e poi rimuovi alla scadenza.',

    // Hotspot User Profile Form Fields - Queue Tab
    'hotspot.user.profiles.form.parent-queue'=> 'Coda principale',
    'hotspot.user.profiles.form.queue-type'=> 'Tipo di coda',

    // Hotspot User Profiles Form Fields - Scripts Tab
    'hotspot.user.profiles.form.on-login-script'=> 'Script all\'accesso',
    'hotspot.user.profiles.form.on-login-script_placeholder'=> 'Script facoltativo da eseguire all\'accesso',
    'hotspot.user.profiles.form.on-logout-script'=> 'Script alla disconnessione',
    'hotspot.user.profiles.form.on-logout-script_placeholder'=> 'Script facoltativo da eseguire alla disconnessione',

    // Hotspot User Profile Modal - Edit Profile
    'hotspot.user.profile.edit'=> 'Modifica profilo',
    'hotspot.user.profile.select.profile'=> 'Seleziona profilo',
    'hotspot.user.profile.select.profile.desc'=> 'Scegli un profilo da modificare. Dopo la selezione si aprirà l\'editor completo.',
    'hotspot.user.profile.button.cancel'=> 'Annulla',
    'hotspot.user.profile.button.save'=> 'Salva',

    // Hotspot User Profile Modal - Remove Profile
    'hotspot.user.profiles.remove'=> 'Rimuovi profilo',
    'hotspot.user.profiles.remove-select'=> 'Seleziona profilo da rimuovere',
    'hotspot.user.profiles.remove-warning'=> 'Questa azione non può essere annullata. Assicurati di voler rimuovere il profilo selezionato.',
    'hotspot.user.profiles.remove.button-cancel'=> 'Annulla',
    'hotspot.user.profiles.remove.button-remove'=> 'Rimuovi',

    // Hotspot Export Users Modal
    'hotspot.export.user.desc'=> 'Seleziona i campi da includere nell\'esportazione. Verranno esportati solo gli utenti selezionati.',
    'hotspot.export.user.name'=> 'Nome',
    'hotspot.export.user.price'=> 'Prezzo',
    'hotspot.export.user.password'=> 'Password',
    'hotspot.export.user.profile'=> 'Profilo',
    'hotspot.export.user.comment'=> 'Commento',
    'hotspot.export.user.inc-header'=> 'Includi intestazioni',
    'hotspot.export.user.column-order'=> 'Ordine colonne',
    'hotspot.export.user.column-up'=> 'Su',
    'hotspot.export.user.column-down'=> 'Giù',
    'hotspot.export.user.column-desc'=> 'Seleziona un campo e usa Su/Giù per cambiare l\'ordine delle colonne.',
    'hotspot.export.user.button-cancel'=> 'Annulla',
    'hotspot.export.user.button-download'=> 'Scarica CSV',
    'hotspot.export.user.button-move-up'=> 'Sposta su',
    'hotspot.export.user.button-move-down'=> 'Sposta giù',
    'hotspot.export.user.column-order-desc'=> 'Seleziona un campo e usa i pulsanti Sposta su/Sposta giù per cambiare l\'ordine delle colonne.',

    // Hotspot Print Preview Modal
    'hotspot.print.preview.title'=> 'Anteprima stampa',
    'hotspot.print.preview.desc'=> 'Anteprima degli utenti selezionati prima della stampa.',
    'hotspot.print.preview.button-cancel'=> 'Annulla',
    'hotspot.print.preview.button-close'=> 'Chiudi',
    'hotspot.print.preview.button-print'=> 'Salva e stampa',
    

    // active.php
    // Hotspot Active Sessions Page

    // hosts.php
    // Hotspot Hosts Page

    // settings.php
    // Hotspot Settings Page
    'settings.title'=> 'Impostazioni',
    'settings.desc'=> 'Configura identità dispositivo, servizi di sistema e azioni di manutenzione.',
    'settings.identity'=> 'Identità',
    'settings.ntp'=> 'NTP',
    'settings.files'=> 'File',
    'settings.users'=> 'Utenti',
    'settings.scheduler'=> 'Schedulatore',
    'settings.scripts'=> 'Script',
    'settings.reset'=> 'Reset',
    'settings.reboot'=> 'Riavvia',
    'settings.shutdown'=> 'Spegni',

    // Settings Page Buttons
    //'settings.open.identity'=> 'Apri identità',
    //'settings.open.ntp'=> 'Apri NTP',
    'settings.open.files'=> 'Apri file',
    'settings.open.users'=> 'Gestisci utenti',
    'settings.open.scheduler'=> 'Apri scheduler',
    'settings.open.scripts'=> 'Apri script',
    //'settings.open.reset'=> 'Reset',
    //'settings.open.reboot'=> 'Riavvia',
    //'settings.open.shutdown'=> 'Spegni',

    // SETTINGS GENERAL BUTTONS
    'settings.buttons.upload'=> 'Carica',
    'settings.buttons.delete'=> 'Elimina',
    'settings.buttons.refresh'=> 'Aggiorna',
    'settings.buttons.save'=> 'Salva',
    'settings.buttons.cancel'=> 'Annulla',
    'settings.buttons.close'=> 'Chiudi',
    'settings.buttons.edit'=> 'Modifica',
    'settings.buttons.add'=> 'Aggiungi',
    'settings.buttons.remove'=> 'Rimuovi',
    'settings.buttons.prev'=> 'Prec',
    'settings.buttons.next'=> 'Succ',
    'settings.sort.by'=> 'Ordina per',
    'settings.sort' => 'Ordina',

    // Settings Page - Back Button
    'settings.back-to-settings'=> 'Torna alle impostazioni',

    // Settings Page - Actions
    'settings.actions'=> 'Azioni',

    // Settings Page - Loading
    'settings.loading'=> 'Caricamento impostazioni...',

    // Settings Page Descriptions
    'settings.identity.desc'=> 'Visualizza e modifica l\'identità del dispositivo e le informazioni di base del sistema.',
    'settings.ntp.desc'=> 'Configura le impostazioni NTP per una precisa sincronizzazione dell\'orologio.',
    'settings.reset.desc'=> 'Ripristina la configurazione ai valori predefiniti. Usare con cautela.',
    'settings.reboot.desc'=> 'Riavvia il dispositivo da remoto. Assicurati che tutte le modifiche siano salvate prima del riavvio.',
    'settings.shutdown.desc'=> 'Spegni il dispositivo da remoto in modo sicuro. Usare con cautela.',

    // Settings Table Headers
    'settings.table.th.name'=> 'Nome',
    'settings.table.th.group'=> 'Gruppo',
    'settings.table.th.last-login'=> 'Ultimo accesso',
    'settings.table.th.comment'=> 'Commento',
    'settings.table.th.role'=> 'Ruolo',
    'settings.table.th.select'=> 'Seleziona tutto',
    'settings.table.th.username'=> 'Nome utente',
    'settings.table.th.password'=> 'Password',
    'settings.table.th.actions'=> 'Azioni',
    'settings.table.th.next-run'=> 'Prossima esecuzione',
    'settings.table.th.interval'=> 'Intervallo',
    'settings.table.th.enabled'=> 'Abilitato',
    'settings.table.th.size'=> 'Dimensione',
    'settings.table.th.owner'=> 'Proprietario',
    'settings.table.th.date'=> 'Data',

   
    // Settings Page - Identity
    'settings.identity.placeholder'=> 'Inserisci l\'identità del sistema',
    'settings.identity.caption'=> 'Questo è il nome mostrato nei log e per l\'identificazione in rete.',

    // Settings Page - Identity Buttons
    'settings.identity.save'=> 'Salva identità',
    'settings.identity.refresh'=> 'Aggiorna',

    // Settings Page - NTP Modal
    'settings.ntp.enabled'=> 'Abilitato',
    'settings.ntp.enabled-yes'=> 'Abilitato',
    'settings.ntp.enabled-no'=> 'Disabilitato',
    'settings.ntp.mode'=> 'Modalità',
    'settings.ntp.mode-broadcast'=> 'Broadcast',
    'settings.ntp.mode-manycast'=> 'Manycast',
    'settings.ntp.mode-multicast'=> 'Multicast',
    'settings.ntp.mode-unicast'=> 'Unicast',
    'settings.ntp.server'=> 'Server NTP',
    'settings.ntp.server-add'=> 'Aggiungi server',
    'settings.ntp.server-refresh'=> 'Aggiorna',
    'settings.ntp.server-save'=> 'Salva',

    // Settings Page - NTP Status
    'settings.ntp.status'=> 'Stato',
    'settings.ntp.freq.drift'=> 'Deriva di frequenza',
    'settings.ntp.synced.server'=> 'Server sincronizzato',
    'settings.ntp.synced.stratum'=> 'Stratum sincronizzato',
    'settings.ntp.system.offset'=> 'Offset di sistema',

    // Settings Page - Files
    'settings.files.title'=> 'Gestione file',
    'settings.files.desc'=> 'Carica, scarica e gestisci i file memorizzati sul dispositivo.',


    // Settings Page - Users
    'settings.users.title'=> 'Gestione utenti',
    'settings.users.desc'=> 'Crea, modifica e gestisci gli utenti di sistema e i loro diritti di accesso.',

    // Settings Page - Scheduler
    'settings.scheduler.title'=> 'Schedulatore',
    'settings.scheduler.desc'=> 'Crea e gestisci attività pianificate per manutenzione e automazione.',

    // Settings Page - Scripts
    'settings.scripts.title'=> 'Script',
    'settings.scripts.desc'=> 'Crea, modifica ed esegui script personalizzati sul dispositivo.',

    // Settings Page - Reset
    // Reset Modal
    'settings.reset.type'=> 'Tipo di reset',
    'settings.reset.config'=> 'Reset configurazione (mantieni file utente)',
    'settings.reset.all'=> 'Ripristino di fabbrica (cancella tutto, ripristina impostazioni predefinite)',
    'settings.reset.delay'=> 'Ritardo (secondi)',
    'settings.reset.delay.desc'=> 'Imposta 0 per eseguire subito usando il pulsante Pianifica, oppure clicca "Reset ora" per eseguire subito.',

    //Reset Buttons
    'settings.reset.button.schedule'=> 'Pianifica reset',
    'settings.reset.button.reset-now'=> 'Reset ora',

    // Settings Page - Reboot
    // Reboot Modal
    'settings.reboot.delay'=> 'Ritardo (secondi)',
    'settings.reboot.delay.desc'=> 'Imposta 0 per riavviare subito usando il pulsante Pianifica, oppure clicca "Riavvia ora" per forzare il riavvio.',

    // Reboot Buttons
    'settings.reboot.button.schedule'=> 'Pianifica riavvio',
    'settings.reboot.button.reboot-now'=> 'Riavvia ora',

    // Settings Page - Shutdown
    // Shutdown Modal
    'settings.shutdown.delay'=> 'Ritardo (secondi)',
    'settings.shutdown.delay.desc'=> 'Imposta 0 per spegnere subito usando il pulsante Pianifica, oppure clicca "Spegni ora" per forzare lo spegnimento.',

    // Shutdown Buttons
    'settings.shutdown.button.schedule'=> 'Pianifica spegnimento',
    'settings.shutdown.button.shutdown-now'=> 'Spegni ora',


    // queues.php
    // Queues Page
    'queues.title'=> 'Gestione code',
    'queues.desc'=> 'Gestisci Simple queues, Queue trees e tipi di coda.',

    'queues.simple'=> 'Semplice',
    'queues.tree'=> 'Albero',
    'queues.types'=> 'Tipi',
    'queues.simple-queue'=> 'Code semplici',
    'queues.queue-tree'=> 'Alberi di coda',
    'queues.queue-types'=> 'Tipi di coda',

    // Queues Page Descriptions
    'queues.simple.desc'=> 'Crea e gestisci code semplici per host/target.',
    'queues.tree.desc'=> 'Gestisci queue tree gerarchiche per shaping avanzato del traffico.',
    'queues.types.desc'=> 'Definisci e gestisci tipi di coda e classificatori di pacchetti.',

    // Queues Page Buttons
    'queues.open.simple'=> 'Apri Simple Queue',
    'queues.open.tree'=> 'Apri Queue Tree',
    'queues.open.types'=> 'Apri tipi di coda',

    // Queues Page - Back Button
    'queues.back-to-queues'=> 'Torna a Gestione code',

    // Queues General Buttons
    'queues.button.new'=> 'Nuovo',
    'queues.button.edit'=> 'Modifica',
    'queues.button.enable'=> 'Abilita',
    'queues.button.disable'=> 'Disabilita',
    'queues.button.remove'=> 'Rimuovi',
    'queues.button.refresh'=> 'Aggiorna',
    'queues.button.pause-polling'=> 'Pausa polling',
    'queues.sort.by'=> 'Ordina per',
    'queues.sort'=> 'Ordina',
    'queues.select.all'=> 'Seleziona tutto',
    'queues.button.prev'=> 'Prec',
    'queues.button.next'=> 'Succ',
    'queues.button.save'=> 'Salva',
    'queues.button.cancel'=> 'Annulla',
    'queues.button.create'=> 'Crea',


    // Queues Loading Status
    'queues.status.loading'=> 'Caricamento code...',

    // simple.php
    // Simple Queues Page


    // Simple Queues Action Buttons
    'queues.simple.actions'=> 'Azioni',
    'queues.simple.actions.desc'=> 'Esegui azioni sulle code selezionate.',

    // Queues Table Headers
    'queues.table.th.name'=> 'Nome',
    'queues.table.th.number'=> 'Numero',
    'queues.table.th.target'=> 'Destinazione',
    'queues.table.th.upload-limit'=> 'Limite upload',
    'queues.table.th.download-limit'=> 'Limite download',
    'queues.table.th.download-avg-rate'=> 'Vel. media download',
    'queues.table.th.max-limit'=> 'Limite massimo',
    'queues.table.th.queue-type'=> 'Tipo di coda',
    'queues.table.th.limit-at'=> 'Limit At',
    'queues.table.th.bytes'=> 'Byte',
        'queues.table.th.limit-at'=> 'Limite a',
    'queues.table.th.avg.rate'=> 'Vel. media',
    'queues.table.th.kind'=> 'Tipo',

    // Queues Modal Form - Tabs
    'queues.tab.main'=> 'Principale',
    'queues.tab.advanced'=> 'Avanzate',
        'queues.tab.queueing'=> 'Accodamento',

    // Queues Modal Form Tab
    'queues.modal.form.new.simple'=> 'Nuova Simple Queue',
    'queue.modal.form.edit.simple'=> 'Modifica Simple Queue',
    'queues.modal.form.enabled'=> 'Abilitato',
    'queues.modal.form.name'=> 'Nome',
    'queues.modal.form.target'=> 'Destinazione',
    'queues.modal.form.target-select-iface'=> 'Seleziona interfaccia',
    'queues.modal.form.dst'=> 'Destinazione',
    'queues.modal.form.dst-select-iface'=> 'Seleziona interfaccia',
    'queues.modal.form.target.dst-caption'=> 'Seleziona un\'interfaccia o inserisci un target personalizzato qui sotto.',
    'queues.modal.form.placeholder'=> 'o inserisci IP (es. 192.168.10.0/24 o 10.0.0.5)',
    'queues.modal.form.target.upload'=> 'Upload target',
    'queues.modal.form.max-limit'=> 'Limite massimo',
    'queues.modal.form.target.download'=> 'Download target',
    'queues.modal.form.pkt-marks'=> 'Marcature pacchetto',
    'queues.modal.form.limit-at'=> 'Limit At',
        'queues.modal.form.limit-at'=> 'Limite a',
    'queues.modal.form.burst-limit'=> 'Limite burst',
    'queues.modal.form.burst-threshold'=> 'Soglia burst',
    'queues.modal.form.burst-time'=> 'Tempo burst',
    'queues.modal.form.priority'=> 'Priorità',
    'queues.modal.form.bucket-size'=> 'Dimensione bucket',
    'queues.modal.form.parent-queue'=> 'Coda principale',
    'queues.modal.form.queue-type'=> 'Tipo di coda',
    'queues.modal.form.comment'=> 'Commento',
    'queues.modal.form.comment-placeholder'=> 'Commento opzionale',
    'queues.modal.form.clear-parent'=> 'Rimuovi parent (toglie relazione parent)',

    // tree.php
    // Queue Tree Page

    // Queue Tree Action Buttons
    'queues.tree.actions'=> 'Azioni',
    'queues.tree.action.desc'=> 'Esegui azioni sulle voci selezionate della queue tree.',

    // Queue Tree Modal Form - Tabs
    'queues.tree.create.title'=> 'Crea voce albero di coda',
    'queue.tree.tab.general'=> 'Generale',
    'queue.tree.tab.rate-limit'=> 'Limite velocità',


    // types.php
    // Queue Types Page
  
    // Queue Types Action 
    'queues.types.actions'=> 'Azioni',
    'queues.types.action.desc'=> 'Esegui azioni sui tipi di coda selezionati.',


    // ppp.php
    // PPP Page
    'ppp.title'=> 'Gestione PPPoE',
    'ppp.desc'=> 'Gestisci server PPPoE, segreti e profili.',

    'ppp.pppoe.servers'=> 'Server PPPoE',
    'ppp.servers'=> 'Server',
    'ppp.secrets'=> 'Segreti',
    'ppp.profiles'=> 'Profili',
    'ppp.active'=> 'Sessioni attive',
    
    // PPP Page Descriptions
    'ppp.servers.desc'=> 'Visualizza e gestisci istanze e binding dei server PPPoE.',
    'ppp.secrets.desc'=> 'Gestisci i segreti PPPoE (credenziali utente).',
    'ppp.profiles.desc'=> 'Crea e gestisci i profili PPPoE.',
    'ppp.active.desc'=> 'Visualizza e disconnetti le sessioni PPPoE attive.',

    'ppp.open.servers'=> 'Apri server PPPoE',
    'ppp.open.secrets'=> 'Apri segreti',
    'ppp.open.profiles'=> 'Apri profili',
    'ppp.open.active'=> 'Apri sessioni attive',

    // PPP Page - Back Button
    'ppp.back-to-ppp'=> 'Torna a Gestione PPPoE',

    // PPP Actions
    'ppp.actions'=> 'Azioni',

    // PPP General Buttons
    'ppp.buttons.new'=> 'Nuovo',
    'ppp.buttons.edit'=> 'Modifica',
    'ppp.buttons.enable'=> 'Abilita',
    'ppp.buttons.disable'=> 'Disabilita',
    'ppp.buttons.remove'=> 'Rimuovi',
    'ppp.buttons.refresh'=> 'Aggiorna',
    'ppp.sort.by'=> 'Ordina per',
    'ppp.sort'=> 'Ordina',
    'ppp.select.all'=> 'Seleziona tutto',
    'ppp.buttons.prev'=> 'Prec',
    'ppp.buttons.next'=> 'Succ',
    'ppp.buttons.clear'=> 'Svuota',
    'ppp.buttons.cancel'=> 'Annulla',
    'ppp.buttons.create'=> 'Crea',
    'ppp.buttons.save'=> 'Salva',
    'ppp.buttons.proceed'=> 'Procedi',

    // PPP Loading Status
    'ppp.status.loading'=> 'Caricamento dati PPPoE...',

    // PPP Secrets Table Headers
    'ppp.table.th.service-name'=> 'Servizio',
    'ppp.table.th.iface'=> 'Interfaccia',
    'ppp.table.th.keepalive'=> 'Timeout keepalive',
    'ppp.table.th.profile'=> 'Profilo',
    'ppp.table.th.one-session-host'=> 'Una sessione per host',
    'ppp.table.th.authentication'=> 'Autenticazione',
    'ppp.table.th.name'=> 'Nome',
    'ppp.table.th.password'=> 'Password',
    'ppp.table.th.service'=> 'Servizio',
    'ppp.table.th.address'=> 'Indirizzo',
    'ppp.table.th.caller-id'=> 'ID chiamante',
    'ppp.table.th.local-address'=> 'Indirizzo locale',
    'ppp.table.th.remote-address'=> 'Indirizzo remoto',
    'ppp.table.th.last-logged-out'=> 'Ultima disconnessione',
    'ppp.table.th.last-disc-reason'=> 'Motivo disc.',
    'ppp.table.th.last-called-id'=> 'Ultimo ID chiamato',
    'ppp.table.th.rate-limit'=> 'Limite velocità',
    'ppp.table.th.only-one'=> 'Solo uno',
    'ppp.table.th.uptime'=> 'Tempo di attività',
    'ppp.table.th.bytes-in'=> 'Byte in',
    'ppp.table.th.bytes-out'=> 'Byte out',

    // PPP Add Server Modal Form
    'ppp.modal.form.title'=> 'Aggiungi server PPPoE',
    'ppp.modal.form.enabled'=> 'Abilitato',
    'ppp.modal.form.one-session-per-host'=> 'Una sessione per host',
    'ppp.modal.form.accept-empty-services'=> 'Accetta servizi vuoti',
    'ppp.modal.form.accept-untagged'=> 'Accetta non taggato',
    'ppp.modal.form.service-name'=> 'Nome servizio',
    'ppp.modal.form.service-name_placeholder'=> 'Nome PPPoE',
    'ppp.modal.form.interface'=> 'Interfaccia',
    'ppp.modal.form.placeholder'=> 'Predefinito',
    'ppp.modal.form.max-mtu'=> 'Max MTU',
    'ppp.modal.form.max-mru'=> 'Max MRU',
    'ppp.modal.form.mrru'=> 'MRRU',
    'ppp.modal.form.keepalive-timeout'=> 'Timeout keepalive',
    'ppp.modal.form.profile'=> 'Profile',
    'ppp.modal.form.max-sessions'=> 'Sessioni massime',
    'ppp.modal.form.auth-methods'=> 'Metodi di autenticazione',
    'ppp.modal.form.auth-mschapv2'=> 'msChapv2',
    'ppp.modal.form.auth-mschapv1'=> 'msChapv1',
    'ppp.modal.form.auth-chap'=> 'Chap',
    'ppp.modal.form.auth-pap'=> 'PaP',

    // PPP Add/Edit Secret Modal Form
    'ppp.modal.form.secret.name'=> 'Nome',
    'ppp.modal.form.secret.password'=> 'Password',
    'ppp.modal.form.secret.service-type'=> 'Servizio',
    'ppp.modal.form.secret.local-address'=> 'Indirizzo locale',
    'ppp.modal.form.secret.remote-address'=> 'Indirizzo remoto',

    // secrets.php
    // Modal Titles
    'ppp.modal.form.add.ppp-secret'=> 'Aggiungi segreto PPPoE',
    'ppp.modal.form.edit.ppp-secret'=> 'Modifica segreto PPPoE',

    // PPP Secrets Page Modal Tabs
    'ppp.secrets.tab.general'=> 'Generale',  
    'ppp.secrets.tab.details'=> 'Dettagli',

    // profiles.php
    // PPP Profiles Page

    // PPP Profiles Modal Titles
    'ppp.modal.form.add.ppp-profile'=> 'Aggiungi profilo PPPoE',
    'ppp.modal.form.edit.ppp-profile'=> 'Modifica profilo PPPoE',


    // PPP Profiles Modal Tabs
    'ppp.profiles.tab.general'=> 'Generale',
    'ppp.profiles.tab.protocols'=> 'Protocolli',
    'ppp.profiles.tab.limits'=> 'Limiti',
    'ppp.profiles.tab.queue'=> 'Coda',
    'ppp.profiles.tab.scripts'=> 'Script',

    // PPP Profiles Modal Form Fields
    'ppp.modal.form.profile.name'=> 'Nome',
    'ppp.modal.form.profile.local-address'=> 'Indirizzo locale',
    'ppp.modal.form.profile.remote-address'=> 'Indirizzo remoto',
    'ppp.modal.form.profile.use-ipv6'=> 'Usa IPv6',
    'ppp.modal.form.profile.use-mpls'=> 'Usa MPLS',
    'ppp.modal.form.profile.use-comp'=> 'Usa compressione',
    'ppp.modal.form.profile.use-enc'=> 'Usa cifratura',
    'ppp.modal.form.profile.sess-timeout'=> 'Timeout sessione',
    'ppp.modal.form.profile.idle-timeout'=> 'Timeout inattività',
    'ppp.modal.form.profile.rate-limit'=> 'Limite velocità',
    'ppp.modal.form.profile.only-one'=> 'Solo uno',
    'ppp.modal.form.profile.parent-queue'=> 'Coda padre',
    'ppp.modal.form.profile.queue-type-rx'=> 'Tipo coda (download)',
    'ppp.modal.form.profile.queue-type-tx'=> 'Tipo coda (upload)',
    'ppp.modal.form.profile.script-onup'=> 'All\'attivazione',
    'ppp.modal.form.profile.script-ondown'=> 'Alla disconnessione',
    'ppp.modal.form.profile.script-placeholder'=> 'Lo script verrà eseguito quando l\'evento si attiva',
    'ppp.modal.form.migration.confirm'=> 'Conferma migrazione profilo',
    'ppp.modal.form.migration.caption'=> 'Cancellare la coda padre o il tipo coda per questo profilo può richiedere di ricreare il profilo e riassegnare i segreti PPP associati. Questa operazione può essere disruptiva. Vuoi continuare?',

    // ip.php
    // IP Page
    'ip.title'=> 'Gestione IP',
    'ip.desc'=> 'Gestisci ARP, indirizzi, DHCP, DNS, pool e i servizi IP correlati.',

    'ip.arp'=> 'ARP',
    'ip.addresses'=> 'Indirizzi',
    'ip.cloud'=> 'Cloud',
    'ip.dhcp.client'=> 'Client DHCP',
    'ip.dhcp.server'=> 'Server DHCP',
    'ip.dns'=> 'DNS',
    'ip.pool'=> 'Pool',
    'ip.services'=> 'Servizi',
    'ip.upnp'=> 'UPnP',
    'ip.settings'=> 'Impostazioni',

    'ip.arp.desc'=> 'Visualizza e gestisci le voci della tabella ARP.',
    'ip.addresses.desc'=> 'Gestisci gli indirizzi IP assegnati alle interfacce.',
    'ip.cloud.desc'=> 'Impostazioni Cloud/DDNS. I valori sono letti dal router.',
    'ip.dhcp.client.desc'=> 'Visualizza e gestisci i client DHCP.',
    'ip.dhcp.server.desc'=> 'Configura il server DHCP e i lease.',
    'ip.dns.desc'=> 'Gestisci le impostazioni DNS e le voci statiche.',
    'ip.pool.desc'=> 'Gestisci i pool di indirizzi per DHCP e altri servizi.',
    'ip.services.desc'=> 'Abilita o disabilita i servizi relativi all\'IP.',
    'ip.upnp.desc'=> 'Impostazioni Universal Plug and Play. I valori sono letti dal router.',
    'ip.settings.desc'=> 'Impostazioni generali del sottosistema IP.',

    'ip.open.arp'=> 'Apri ARP',
    'ip.open.addresses'=> 'Apri indirizzi',
    'ip.open.cloud'=> 'Apri Cloud',
    'ip.open.dhcp.client'=> 'Apri DHCP Client',
    'ip.open.dhcp.server'=> 'Apri DHCP Server',
    'ip.open.dns'=> 'Apri DNS',
    'ip.open.pool'=> 'Apri Pool',
    'ip.open.services'=> 'Apri servizi',
    'ip.open.upnp'=> 'Apri UPnP',
    'ip.open.settings'=> 'Apri impostazioni',

    // IP Page - Back Button
    'ip.back-to-ip'=> 'Torna a Gestione IP',

    // IP JS strings
    // Addresses
    'ip.addresses.no_addresses' => 'Nessun indirizzo',
    'ip.addresses.loading' => 'Caricamento...',
    'ip.addresses.failed_to_contact_api' => 'Impossibile contattare l\'API',
    'ip.addresses.please_select_one_or_more' => 'Seleziona una o più voci',
    'ip.addresses.select_one_to_edit' => 'Seleziona esattamente un indirizzo da modificare',
    'ip.addresses.action_completed' => 'Azione %s completata',
    'ip.addresses.action_failed' => 'Azione fallita: %s',
    'ip.addresses.request_failed' => 'Richiesta fallita: %s',
    'ip.addresses.address_added' => 'Indirizzo aggiunto',
    'ip.addresses.address_updated' => 'Indirizzo aggiornato',
    'ip.addresses.add_failed' => 'Aggiunta fallita: %s',
    'ip.addresses.update_failed' => 'Aggiornamento fallito: %s',
    'ip.addresses.page_info' => 'Pagina %s / %s (%s)',

    // ARP
    'ip.arp.no_arp_entries' => 'Nessuna voce ARP',
    'ip.arp.loading' => 'Caricamento...',
    'ip.arp.failed_to_contact_api' => 'Impossibile contattare l\'API',
    'ip.arp.please_select_one_or_more' => 'Seleziona una o più voci',
    'ip.arp.enable_confirm' => 'Abilitare le voci ARP selezionate?',
    'ip.arp.disable_confirm' => 'Disabilitare le voci ARP selezionate?',
    'ip.arp.remove_confirm' => 'Rimuovere le voci ARP selezionate?',
    'ip.arp.page_info' => 'Pagina %s / %s (%s)',

    // Cloud
    'ip.cloud.failed_to_load' => 'Impossibile caricare le impostazioni cloud: %s',
    'ip.cloud.reverted' => 'Modifiche ripristinate',
    'ip.cloud.applied' => 'Impostazioni cloud applicate',
    'ip.cloud.apply_failed' => 'Applicazione fallita: %s',

    // DHCP Client
    'ip.dhcp.client.no_clients' => 'Nessun client DHCP',
    'ip.dhcp.client.failed_to_load' => 'Impossibile caricare i client DHCP: %s',
    'ip.dhcp.client.please_select_interface' => 'Seleziona un\'interfaccia',
    'ip.dhcp.client.created' => 'DHCP Client creato',
    'ip.dhcp.client.create_failed' => 'Creazione fallita: %s',
    'ip.dhcp.client.no_entries_selected' => 'Nessuna voce selezionata',
    'ip.dhcp.client.enable_completed' => 'Abilitazione completata',
    'ip.dhcp.client.enable_failed' => 'Abilitazione fallita: %s',
    'ip.dhcp.client.disable_completed' => 'Disabilitazione completata',
    'ip.dhcp.client.disable_failed' => 'Disabilitazione fallita: %s',
    'ip.dhcp.client.remove_confirm' => 'Rimuovere i client DHCP selezionati?',
    'ip.dhcp.client.option_name_code_required' => 'Nome e codice obbligatori',
    'ip.dhcp.client.option_created' => 'Opzione creata',
    'ip.dhcp.client.option_create_failed' => 'Creazione opzione fallita: %s',
    'ip.dhcp.client.no_options' => 'Nessuna opzione',

    // DHCP Networks
    'ip.dhcp.networks.no_networks' => 'Nessuna rete DHCP',
    'ip.dhcp.networks.loading' => 'Caricamento...',
    'ip.dhcp.networks.select_one_to_edit' => 'Seleziona una singola rete da modificare',
    'ip.dhcp.networks.create_not_implemented' => 'Creazione nuova rete: non implementata',
    'ip.dhcp.networks.please_select_remove' => 'Seleziona una o più reti da rimuovere',
    'ip.dhcp.networks.remove_confirm' => 'Rimuovere le reti selezionate?',
    'ip.dhcp.networks.removed' => 'Rimosso',
    'ip.dhcp.networks.remove_failed' => 'Rimozione fallita: %s',
    'ip.dhcp.networks.page_info' => 'Pagina %s / %s (%s)',

    // DNS
    'ip.dns.add_server_placeholder' => 'Aggiungi server DNS (IP)',
    'ip.dns.remove' => 'Rimuovi',
    'ip.dns.loading' => 'Caricamento...',
    'ip.dns.failed_to_contact_api' => 'Impossibile contattare l\'API',
    'ip.dns.error_loading' => 'Errore caricamento impostazioni DNS',
    'ip.dns.dns_saved' => 'Impostazioni DNS salvate',
    'ip.dns.failed_to_save' => 'Salvataggio fallito: %s',
    'ip.dns.save_confirm' => 'Salvare impostazioni DNS?',
    'ip.dns.no_static_entries' => 'Nessuna voce statica',
    'ip.dns.static_added' => 'DNS statico aggiunto',
    'ip.dns.static_add_failed' => 'Aggiunta statica fallita',
    'ip.dns.performing_action' => 'Esecuzione %s...',
    'ip.dns.invalid_json' => 'Risposta JSON non valida',
    'ip.dns.request_failed' => 'Richiesta fallita: %s',
    'ip.dns.flush_cache_confirm' => 'Svuotare l\'intera cache DNS?',
    'ip.dns.cache_flushed' => 'Cache svuotata',
    'ip.dns.failed_flush_cache' => 'Svuotamento cache fallito: %s',
    'ip.dns.no_cache_entries' => 'Nessuna voce nella cache',

    // Pool
    'ip.pool.no_pools' => 'Nessun pool',
    'ip.pool.please_select_one_or_more' => 'Seleziona uno o più pool',
    'ip.pool.select_one_to_edit' => 'Seleziona esattamente un pool da modificare',
    'ip.pool.name_and_address_required' => 'Nome e indirizzo obbligatori',
    'ip.pool.pool_created' => 'Pool creato',
    'ip.pool.create_failed' => 'Creazione fallita: %s',
    'ip.pool.pool_updated' => 'Pool aggiornato',
    'ip.pool.update_failed' => 'Aggiornamento fallito: %s',
    'ip.pool.remove_confirm' => 'Rimuovere il/i pool selezionato/i?',
    'ip.pool.action_completed' => 'Azione %s completata',
    'ip.pool.action_failed' => 'Azione fallita: %s',
    'ip.pool.request_failed' => 'Richiesta fallita: %s',
    'ip.pool.none' => '(nessuno)',
    'ip.pool.loading' => 'Caricamento...',
    'ip.pool.failed_to_contact_api' => 'Impossibile contattare l\'API',
    'ip.pool.page_info' => 'Pagina %s / %s (%s)',

    // IP Settings
    'ip.settings.refreshing_settings' => 'Aggiornamento impostazioni...',
    'ip.settings.no_settings_found' => 'Nessuna impostazione IP trovata',
    'ip.settings.failed_to_load' => 'Impossibile caricare le impostazioni IP',
    'ip.settings.updated' => 'Impostazioni IP aggiornate',
    'ip.settings.update_failed' => 'Aggiornamento fallito: %s',

    // IP Page - Loading Status
    'ip.loading'=> 'Caricamento dati IP...',

    // IP Page Actions
    'ip.actions'=> 'Azioni',

    // IP Page General Buttons
    'ip.buttons.new'=> 'Aggiungi',
    'ip.buttons.edit'=> 'Modifica',
    'ip.buttons.refresh'=> 'Aggiorna',
    'ip.buttons.create'=> 'Crea',
    'ip.buttons.save'=> 'Salva',
    'ip.buttons.cancel'=> 'Annulla',
    'ip.buttons.enable'=> 'Abilita',
    'ip.buttons.disable'=> 'Disabilita',
    'ip.buttons.remove'=> 'Rimuovi',
    'ip.buttons.prev'=> 'Prec',
    'ip.buttons.next'=> 'Succ',
    'ip.sort.by'=> 'Ordina per',
    'ip.sort'=> 'Ordina',
    'ip.select.all'=> 'Seleziona tutto',
    'ip.buttons.flush.cache'=> 'Svuota cache',
    'ip.buttons.add.dns.server'=> 'Aggiungi server DNS',


    // IP UPnP Page
    'ip.upnp.enabled'=> 'Abilitato',
    'ip.upnp.allow-disable-external-iface'=> 'Permetti disabilitazione interfaccia esterna',
    'ip.upnp.show-dummy-rule'=> 'Mostra regola fittizia',

    // arp.php
    // IP ARP Page

    // addresses.php
    // IP Addresses Page

    // IP Table Headers
    'ip.table.th.address'=> 'Indirizzo',
    'ip.table.th.network'=> 'Rete',
    'ip.table.th.iface'=> 'Interfaccia',
    'ip.table.th.comment'=> 'Commento',
    'ip.table.th.dhcp.client.name' => 'Nome',
    'ip.table.th.dhcp.client.code-value' => 'Valore codice',
    'ip.table.th.dhcp.client.client-value' => 'Valore client',
    'ip.table.th.dns.name'=> 'Nome',
    'ip.table.th.dns.regexp'=> 'Regexp',
    'ip.table.th.dns.type'=> 'Tipo',
    'ip.table.th.dns.value'=> 'Valore',
    'ip.table.th.dns.ttl'=> 'TTL',
    'ip.table.th.dns.data'=> 'Dati',

    // IP Address Modal Titles
    'ip.modal.form.add.address'=> 'Aggiungi indirizzo IP',
    'ip.modal.form.edit.address'=> 'Modifica indirizzo IP',

    // IP Address Modal Form
    'ip.modal.form.ip.address-mask'=> 'Indirizzo IP / Maschera',
    'ip.modal.form.ip.network'=> 'Rete',
    'ip.modal.form.iface'=> 'Interfaccia',
    'ip.modal.form.comment'=> 'Commento',
    

    // cloud.php
    // IP Cloud Page

    // IP Cloud Modal Form
    'ip.cloud.enabled'=> 'DDNS abilitato',
    'ip.cloud.ddns.update.interval'=> 'Intervallo aggiornamento DDNS',
    'ip.cloud.update.time'=> 'Orario aggiornamento',
    'ip.cloud.public.ipv4'=> 'IPv4 pubblica',
    'ip.cloud.public.ipv6'=> 'IPv6 pubblica',
    'ip.cloud.dns.name' => 'Nome DNS',
    'ip.cloud.use-router-defaults'=> 'Usa impostazioni predefinite del router',
    'ip.cloud.yes'=> 'Sì',
    'ip.cloud.no'=> 'No',

    // dhcp-client.php
    // IP DHCP Client Page
    'ip.dhcp.client.options'=> 'Client DHCP',
    'ip.dhcp.client.modal.form.interface'=> 'Interfaccia',
    'ip.dhcp.client.modal.form.enabled'=> 'Abilitato',
    'ip.dhcp.client.modal.form.use-peer-dns'=> 'Usa DNS del peer',
    'ip.dhcp.client.modal.form.use-peer-ntp'=> 'Usa NTP del peer',
    'ip.dhcp.client.modal.form.add-default-route'=> 'Aggiungi route predefinita',
    'ip.dhcp.client.modal.form.default-route-distance'=> 'Distanza route predefinita',
    'ip.dhcp.client.options2'=> 'Opzioni DHCP Client',
    'ip.dhcp.client.modal.form.name'=> 'Nome',
    'ip.dhcp.client.modal.form.code'=> 'Codice',
    'ip.dhcp.client.modal.form.value'=> 'Valore',

   
    // dns.php
    // IP DNS Page

    // IP DNS - Modal Form
    'ip.dns.form.servers'=> 'Server DNS',
    'ip.dns.form.dynamic-servers'=> 'Server dinamici',
    'ip.dns.form.use.doh.servers'=> 'Usa server DoH',
    'ip.dns.form.doh.max.server.conn'=> 'Connessioni max server DoH',
    'ip.dns.form.doh.max.concurrent.queries'=> 'Query concorrenti max DoH',
    'ip.dns.form.doh.timeout'=> 'Timeout DoH (secondi)',
    'ip.dns.form.allow-remote.requests'=> 'Consenti richieste remote',

    'ip.dns.form.cache.size'=> 'Dimensione cache (KB)',
    'ip.dns.form.cache.max-ttl'=> 'TTL max cache (secondi)',
    'ip.dns.form.cache.min-ttl'=> 'TTL min cache (secondi)',
    'ip.dns.form.max.concurrent.queries'=> 'Query concorrenti max',
    'ip.dns.form.max.concurrent.tcp'=> 'Connessioni TCP concorrenti max',
    'ip.dns.form.query.timeout'=> 'Timeout query (secondi)',
    'ip.dns.form.cache.used'=> 'Cache usata (sola lettura)',

    'ip.dns.form.add.static.entry'=> 'Aggiungi voce DNS statica',
    'ip.dns.form.add.static.name'=> 'Nome',
    'ip.dns.form.add.static.type'=> 'Tipo',
    'ip.dns.form.add.static.value'=> 'Valore',
    'ip.dns.form.add.static.ttl'=> 'TTL',
    'ip.dns.form.add.static.regexp'=> 'Regexp',

    // IP DNS - Static DNS
    'ip.dns.static'=> 'DNS statico',
    'ip.dns.static.desc'=> 'Gestisci voci DNS statiche che sovrascrivono la risoluzione DNS dinamica.',

    // IP DNS - Cache Settings
    'ip.dns.cache'=> 'Impostazioni cache DNS',

    // pool.php
    // IP Pool Page

    // IP Pool Table Headers
    'ip.pool.table.th.name'=> 'Nome',
    'ip.pool.table.th.ranges'=> 'Intervalli',
    'ip.pool.table.th.comment'=> 'Commento',
    'ip.pool.table.th.total-addresses'=> 'Totale indirizzi',
    'ip.pool.table.th.used'=> 'Usati',
    'ip.pool.table.th.available'=> 'Disponibili',

    // IP Pool Modal Form
    'ip.pool.modal.form.create.title'=> 'Crea pool IP',
    'ip.pool.modal.form.edit.title'=> 'Modifica pool IP',
    'ip.pool.modal.form.name'=> 'Nome',
    'ip.pool.modal.form.ranges'=> 'Intervalli indirizzi',
    'ip.pool.modal.form.ranges-placeholder'=> 'es. 192.168.1.100-192.168.1.200 o 10.0.0.0/24',
    'ip.pool.modal.form.comment'=> 'Commento',
    'ip.pool.modal.form.next-address'=> 'Prossimo indirizzo',
    'ip.pool.modal.form.total-addresses'=> 'Totale indirizzi',
    'ip.pool.modal.form.used'=> 'Usati',
    'ip.pool.modal.form.available'=> 'Disponibili',

    // services.php
    // IP Services Page

    // IP Services Table Headers
    'ip.services.table.th.name'=> 'Nome',
    'ip.services.table.th.port'=> 'Porta',
    'ip.services.table.th.available-from'=> 'Disponibile da',
    'ip.services.table.th.max-sessions'=> 'Sessioni max',
    'ip.services.table.th.protocol'=> 'Protocollo',
    'ip.services.table.th.remote'=> 'Remoto',
    'ip.services.table.th.local'=> 'Locale',

    // IP Services Modal Form
    'ip.services.modal.form.edit.title'=> 'Modifica servizio IP',
    'ip.services.modal.form.name'=> 'Nome',
    'ip.services.modal.form.port'=> 'Porta',
    'ip.services.modal.form.available-from'=> 'Disponibile da',
    'ip.services.modal.form.max-sessions'=> 'Sessioni max',
    'ip.services.modal.form.protocol'=> 'Protocollo',
    'ip.services.modal.form.remote.address'=> 'Indirizzo remoto',
    'ip.services.modal.form.remote.port'=> 'Porta remota',
    'ip.services.modal.form.local.address'=> 'Indirizzo locale',

    // settings.php
    // IP Settings Page

    // IP Settings Modal Form
    'ip.settings.modal.form.ip-forward'=> 'Inoltro IP abilitato',
    'ip.settings.modal.form.ip-send-redirects'=> 'Invio redirect abilitato',
    'ip.settings.modal.form.ip-accept-redirects'=> 'Accetta redirect abilitato',
    'ip.settings.modal.form.ip-secure-redirects'=> 'Redirect sicuri abilitati',
    'ip.settings.modal.form.ip-accept-source-route'=> 'Accetta source-route abilitato',
    'ip.settings.modal.form.ip-allow-fast-path'=> 'Consenti Fast Path abilitato',
    'ip.settings.modal.form.ip-tcp-syncookies'=> 'TCP Syncookies abilitati',
    'ip.settings.modal.form.ip-tcp-timestamps'=> 'Timestamp TCP',
    'ip.settings.modal.form.ip-max-neighbors'=> 'Max vicini',
    'ip.settings.modal.form.ip-icmp-rate-limit'=> 'Limite ICMP',
    'ip.settings.modal.form.ip-arp-timeout'=> 'Timeout ARP (secondi)',
    'ip.settings.modal.form.ip-arp-timeout-help'=> 'Inserisci il formato timeout di RouterOS (es. 10m, 1h, o 00:10:00). Lascia vuoto per il valore predefinito.',

    // DHCP additions (from English)
    'downloads.instructions' => 'Fare clic sul pulsante Download per scaricare. I file contrassegnati come "Coming soon" non sono ancora disponibili per il download.',

    'ip.dhcp.leases.title'=> 'Lease DHCP',
    'ip.dhcp.leases.desc'=> 'Visualizza e gestisci i lease DHCP attivi',

    'ip.dhcp.networks.title'=> 'Reti DHCP',
    'ip.dhcp.networks.desc'=> 'Crea e gestisci le reti DHCP',

    'ip.dhcp.server.title'=> 'Gestore DHCP',
    'ip.dhcp.server.back-to-dhcp'=> 'Torna al gestore DHCP',
    'ip.dhcp.server.dhcp'=> 'DHCP',
    'ip.dhcp.server.dhcp.desc'=> 'Configura le impostazioni del server DHCP.',
    'ip.dhcp.server.dhcp.leases'=> 'Lease',
    'ip.dhcp.server.dhcp.leases.desc'=> 'Visualizza i lease DHCP attivi.',
    'ip.dhcp.server.dhcp.networks'=> 'Reti',
    'ip.dhcp.server.dhcp.networks.desc'=> 'Gestisci le reti DHCP.',

    'ip.open.dhcp.leases' => 'Apri Lease DHCP',
    'ip.open.dhcp.networks' => 'Apri Reti DHCP',

    'status.title' => 'Pannello di stato',
    'status.desc' => 'Monitoraggio in tempo reale dello stato del sistema e dell\'uptime',

    // Error pages
    'errors.404.title' => 'Pagina non trovata',
    'errors.404.desc' => 'La pagina richiesta non è stata trovata.',
    'errors.403.title' => 'Vietato',
    'errors.403.desc' => 'Non hai il permesso di accedere a questa risorsa.',
    'errors.500.title' => 'Errore del server',
    'errors.500.desc' => 'Si è verificato un errore interno del server.',
    'errors.back_home' => 'Torna alla home',
    'errors.more_info' => 'Cosa è successo',
    'errors.contact_admin' => 'Se ritieni che questo sia un errore, contatta l\'amministratore del sito.',

];