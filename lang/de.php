<?php
////////////////////////////////////////////////////////////////////////
// Deutsch-Übersetzungen für mTik_Ops
// Version: Next-Generation
////////////////////////////////////////////////////////////////////////
return [
    // Start of Translations
    // Global
    'language-changed' => 'Sprache auf {lang} geändert',
    'language-search-placeholder' => 'Suche...',

    // Global Search
    'search.title' => 'Suche',
    'search.instructions' => 'Geben Sie ein Stichwort oder einen Ausdruck ein, um die Seite zu durchsuchen.',
    'search.results_header' => 'Suchergebnisse für "{query}"',
    'search.placeholder' => 'Zum Suchen eingeben...',
    'search.no_results' => 'Keine Ergebnisse gefunden',
    'search.results' => 'Ergebnisse',
    'search.button' => 'Suchen',
    'search.hint' => 'Tippen, um sofort Vorschläge zu sehen.',
    'search.quick_links' => 'Schnellzugriffe',
    'search.show' => 'Suche anzeigen',

    
    // Site title and tagline
    'site.title' => 'mTik_Ops', // DO NOT TRANSLATE
    'site.tagline' => 'Zentrales Router-Management',

    // Authentication
    'nav.login' => 'Anmelden',
    'nav.logout' => 'Abmelden',
    'auth.logging_in' => 'Anmeldung...',
    'auth.logging_out' => 'Abmeldung...',

    // nav-brand.php
    'nav.brand.user_greeting'=> 'Hallo!',

    // nav.php
    'lang.label'=> 'Sprache',
    'nav.about' => 'Über',
    'nav.features' => 'Funktionen',
    'nav.our_team' => 'Unser Team',
    'nav.contact' => 'Kontakt',
    'nav.menu' => 'Menü',
    'nav.dashboard' => 'Dashboard',
    'nav.hotspot' => 'Hotspot',
    'nav.ip' => 'IP',
    'nav.ppp' => 'PPP',
    'nav.queues' => 'Queues',
    'nav.settings' => 'Einstellungen',
    'nav.downloads' => 'Downloads',

    // index.php
    // Index Page - About Section
    'about.title' => 'Für MikroTik entwickelt',
    'about.desc' => 'mTikOps ist eine browserbasierte Plattform zur Verwaltung von MikroTik-Routern und Hotspots. Sie bietet Fernzugriff, Hotspot-Verwaltung (inkl. Drucken), PPPoE und mehr — alles in einem schnellen System.',
    'about.about_us_button' => 'Über uns',
    'about.our_team_button' => 'Unser Team',

    // Index Page - Features Section
    'features.remote.title' => 'Fernverwaltung des Netzwerks',
    'features.remote.desc' => 'Remote-Router überwachen und verwalten, Schnittstellenstatus anzeigen, Neustarts ausführen und Konfigurationsänderungen sicher über die gesamte Flotte aus einer Konsole verteilen.',
    'features.hotspot.title' => 'Hotspot-Verwaltung',
    'features.hotspot.desc' => 'Hotspot-Server und Benutzerprofile erstellen und verwalten, Voucher ausgeben, aktive Nutzer und Sitzungen überwachen sowie Abrechnung und Berichte erstellen.',
    'features.troubleshoot.title' => 'Fehlerbehebung & Konfiguration',
    'features.troubleshoot.desc' => 'Konfigurationsänderungen ausrollen und prüfen, Diagnosen ausführen, Logs einsehen und Verbindungsprobleme mit integrierten Werkzeugen untersuchen.',

    // Index Page - Signup Section
    'signup.title' => 'Mit mTikOps starten',
    'signup.desc' => 'Erstellen Sie ein Konto, um Router und Hotspots zu verwalten und Diagnosen im gesamten Netzwerk von einem Dashboard aus durchzuführen.',
    'signup.cta' => 'Registrieren',

    // Index Page - Contact Section
    'contact.hq' => 'HQ',
    'contact.email' => 'E-Mail',
    'contact.contact' => 'Kontakt',
    'contact.hq_address' => 'Taguig City, PH 1630',
    'contact.email_addr' => 'noc@mtikops.com',
    'contact.phone' => '+63 (962) 660-6116',

    // Index Page - Footer Section
    'footer.copyright' => 'Copyright &copy; mTikOps {year}',
    'footer.powered' => 'Bereitgestellt von HPY™',
    'modal.confirm.title' => 'Bestätigen',
    'modal.confirm.body' => 'Sind Sie sicher?',
    'modal.confirm.cancel' => 'Abbrechen',
    'modal.confirm.ok' => 'Bestätigen',

    // Login Page
    'login.title' => 'Anmelden',
    'login.desc' => 'Melden Sie sich bei Ihrem mTik_Ops-Konto an, um MikroTik-Router und Hotspots von einem zentralen Dashboard aus zu verwalten.',
    'login.form.title' => 'Bei Ihrem Konto anmelden',
    'login.form.host'=> 'Host',
    'login.form.username'=> 'Benutzername',
    'login.form.password'=> 'Passwort',
    'login.form.connection_type'=> 'Verbindungstyp',
    'login.form.connection_type_yes'=> 'Secure API',
    'login.form.connection_type_no'=> 'Standard API',
    'login.form.port'=> 'Port',
    'login.form.remember'=> 'Angemeldet bleiben',
    'login.form.connect'=> 'Verbinden',
    'login.form.cancel'=> 'Abbrechen',

    // Login Page Placeholders
    'login.form.host_placeholder'=> 'Router-IP oder Hostname',
    'login.form.username_placeholder'=> 'Benutzernamen eingeben',
    'login.form.password_placeholder'=> 'Passwort eingeben',

 // Login Page Messages
     'login.error.invalid_submission'=> 'Ungültige Formularübermittlung. Bitte versuche es erneut.',
     'login.error.missing_fields'=> 'Host, Benutzername und Passwort sind erforderlich.',
     'login.error.unable_connect'=> 'Verbindung nicht möglich! — Überprüfen Sie Ihre Zugangsdaten und versuchen Sie es erneut.',
     'login.success.connected'=> 'Erfolgreich mit dem Router verbunden.',
     'login.success.remembered'=> 'Verbindungsdaten für zukünftige Anmeldungen gespeichert.',
     'login.info.session_expired'=> 'Ihre Sitzung ist abgelaufen. Bitte melden Sie sich erneut an.',
     'login.info.logged_out'=> 'Sie wurden erfolgreich abgemeldet.',
     'login.info.please_login'=> 'Bitte melden Sie sich an, um fortzufahren.',
     'login.button.forgot_password'=> 'Passwort vergessen?',
     'login.try_again'=> 'Erneut versuchen?',

    // Downloads Page
    'downloads.title' => 'Downloads',
    'downloads.desc' => 'Laden Sie Installer und Pakete für unterstützte Plattformen herunter.',
    'downloads.available' => 'Verfügbare Downloads',
    'downloads.coming_soon' => 'Demnächst',
    'downloads.download' => 'Herunterladen',
    'downloads.note' => 'Laden Sie Installer in den Ordner /downloads hoch, um sie verfügbar zu machen.',
    
    // about-us.php
    // About Us Page
    'about-us.title' => 'Über uns',
    'about-us.desc' => 'Erfahren Sie mehr über mTik_Ops, unsere Mission und das Team hinter der Plattform.',
    'about-us.overview'=> 'Überblick',
    'about-us.vision'=> 'Vision',
    'about-us.features'=> 'Funktionen',
    'about-us.tutorials'=> 'Anleitungen',
    'about-us.faqs'=> 'FAQs',
    'about-us.requirements'=> 'Anforderungen',

    // about-us.php
    // About Us Page Descriptions
    'about-us.overview.desc'=> 'Kurze Einführung in mTikOps und seine wichtigsten Funktionen.',
    'about-us.vision.desc'=> 'Erfahren Sie mehr über unsere Mission und langfristigen Ziele für das Projekt.',
    'about-us.features.desc'=> 'Übersicht der Hauptfunktionen von mTikOps.',
    'about-us.tutorials.desc'=> 'Schritt-für-Schritt-Anleitungen und Beispiel-Workflows.',
    'about-us.faqs.desc'=> 'Häufig gestellte Fragen und Antworten zu mTikOps.',
    'about-us.requirements.desc'=> 'Voraussetzungen und RouterOS-Anforderungen für den Betrieb von mTikOps.',

    // about-us.php
    // About Us Page Buttons
    'about-us.open.overview'=> 'Überblick öffnen',
    'about-us.open.vision'=> 'Vision öffnen',
    'about-us.open.features'=> 'Funktionen öffnen',
    'about-us.open.tutorials'=> 'Anleitungen öffnen',
    'about-us.open.faqs'=> 'FAQs öffnen',
    'about-us.open.requirements'=> 'Anforderungen öffnen',

    // About Us - Back Button
    'about-us.back-to-about'=> 'Zurück zu Über uns',

    // About Us - Overview Page
    'about-us.overview-page.title'=> 'Überblick',
    'about-us.overview-page.desc'=> 'mTikOps ist eine schlanke Webplattform zur Verwaltung von MikroTik-Routern und Hotspot-Diensten im Browser.',

    // About Us - Vision Page
    'about-us.vision-page.title'=> 'Vision',
    'about-us.vision-page.desc'=> 'Wir wollen Netzwerkbetrieb für MikroTik-Nutzer vereinfachen — mit einer intuitiven Verwaltungsoberfläche und Automatisierungstools.',

    // About Us - Features Page
    'about-us.features-page.title'=> 'Features',
    'about-us.features-page.desc'=> 'Entdecken Sie die Kernfunktionen von mTikOps.',

    // About Us - Tutorials Page
    'about-us.tutorials-page.title'=> 'Tutorials',
    'about-us.tutorials-page.desc'=> 'Anleitungen und How-tos für gängige Aufgaben.',

    // About Us - FAQs Page
    'about-us.faqs-page.title'=> 'FAQs',
    'about-us.faqs-page.desc'=> 'Häufig gestellte Fragen und Antworten.',

    // About Us - Requirements Page
    'about-us.requirements-page.title'=> 'Voraussetzungen',
    'about-us.requirements-page.desc'=> 'Mindestanforderungen und Hinweise zur Kompatibilität.',

    // our-team.php
    // Our Team Page
    'our-team.title'=> 'Unser Team',
    'our-team.desc'=> 'Lernen Sie die Menschen hinter mTikOps kennen — Entwickler, Mitwirkende und Maintainer.',
    'our-team.leadership'=> 'Projektleitung',
    'our-team.developers'=> 'Entwickler',
    'our-team.contributors'=> 'Mitwirkende',
    'our-team.advisors'=> 'Berater',
    'our-team.careers'=> 'Mitmachen',
    'our-team.contact'=> 'Kontakt',

    // Our Team Page Descriptions
    'our-team.leadership.desc'=> 'Kern-Maintainer und Projektleiter, die mTikOps vorantreiben.',
    'our-team.developers.desc'=> 'Ingenieure und Mitwirkende, die Funktionen entwickeln und Fehler beheben.',
    'our-team.contributors.desc'=> 'Community-Mitwirkende, die bei Dokumentation, Tests und Code helfen.',
    'our-team.advisors.desc'=> 'Berater und Experten, die das Projekt unterstützen.',
    'our-team.careers.desc'=> 'Offene Stellen und Möglichkeiten, Teil des Teams zu werden.',
    'our-team.contact.desc'=> 'Kontaktieren Sie das Team für Fragen oder Zusammenarbeit.',

    // Our Team Page Buttons
    'our-team.open.leadership'=> 'Projektleitung ansehen',
    'our-team.open.developers'=> 'Entwickler ansehen',
    'our-team.open.contributors'=> 'Mitwirkende ansehen',
    'our-team.open.advisors'=> 'Berater ansehen',
    'our-team.open.careers'=> 'Mitmachen',
    'our-team.open.contact'=> 'Team kontaktieren',

    // Our Team - Back Button
    'our-team.back-to-team'=> 'Zurück zum Team',

    // Our Team - Leadership Page
    'our-team.leadership-page.title'=> 'Leadership',
    'our-team.leadership-page.desc'=> 'Lernen Sie die Kern-Maintainer und Projektleiter von mTikOps kennen.',

    // Our Team - Developers Page
    'our-team.developers-page.title'=> 'Developers',
    'our-team.developers-page.desc'=> 'Profile und Zuständigkeiten der Entwickler, die zu mTikOps beitragen.',

    // Our Team - Contributors Page
    'our-team.contributors-page.title'=> 'Contributors',
    'our-team.contributors-page.desc'=> 'Anerkennung der Community-Mitwirkenden und Hinweise zur Beteiligung.',

    // Our Team - Advisors Page
    'our-team.advisors-page.title'=> 'Advisors',
    'our-team.advisors-page.desc'=> 'Berater und Experten, die dem Projekt fachliche Orientierung geben.',

    // Our Team - Join Us Page
    'our-team.join-us-page.title'=> 'Mitmachen',
    'our-team.join-us-page.desc'=> 'Offene Rollen erkunden und erfahren, wie Sie zu mTikOps beitragen können.',  

    // Our Team - Contact Page
    'our-team.contact-page.title'=> 'Kontakt',
    'our-team.contact-page.desc'=> 'Möglichkeiten, das mTikOps-Team für Zusammenarbeit oder Support zu kontaktieren.',

    // Dashboard Page
    'dashboard.title'=> 'Dashboard',
    'dashboard.desc'=> 'Monitoring- und Logging-Suite für Netzwerkbetrieb',

    // Dashboard Buttons
    'dashboard.show'=> 'Dashboard anzeigen',
    'dashboard.button.refresh'=> 'Aktualisieren',
    'dashboard.button.prev'=> 'Zurück',
    'dashboard.button.next'=> 'Weiter',

    // Dashboard Network Monitoring
    'dashboard.monitoring.title'=> 'Netzwerküberwachung',
    'dashboard.monitoring.desc'=> 'Echtzeitüberwachung der Netzwerkleistung, Verfügbarkeit und Gerätezustände in Ihrer MikroTik-Infrastruktur.',
    'dashboard.ltmg.title'=> 'Echtzeit-Verkehrsdiagramm',
    'dashboard.fullscreen'=> 'Vollbild',
    'dashboard.loading'=> 'Daten werden geladen...',
    'dashboard.not-monitoring'=> 'Keine Überwachung',

    // Dashboard System Logging
    'dashboard.logging.title'=> 'Systemprotokollierung',
    'dashboard.logging.desc'=> 'Zentrale Protokollierung und Benachrichtigung für Systemereignisse und Fehler',
    'dashboard.system.logs'=> 'Systemprotokolle',
    'dashboard.critical.logs'=> 'Kritische Protokolle',

    // Dashboard Device Information
    'dashboard.device.info.title'=> 'Geräteinformationen',
    'dashboard.system.resources'=> 'Systemressourcen',
    'dashboard.system.information'=> 'Systeminformationen',
    'dashboard.system.platform'=> 'RouterBOARD-Informationen',

    // Device info JS strings
    'device.system_identity' => 'System-Identität',
    'device.routeros_version' => 'RouterOS-Version',
    'device.uptime' => 'Laufzeit',
    'device.board' => 'Board',
    'device.health' => 'Zustand',
    'device.temp_label' => 'Temperatur:',
    'device.voltage_label' => 'Spannung:',
    'device.unknown' => 'Unbekannt',
    'device.na' => 'n/a',
    'device.cpu' => 'CPU',
    'device.memory' => 'Speicher',
    'device.disk' => 'Festplatte',
    'device.board_model' => 'Board-Modell',
    'device.serial' => 'Seriennr.',
    'device.architecture' => 'Architektur',
    'device.cpu_label' => 'CPU',
    'device.cores' => 'Kerne',
    'device.build' => 'Build',
    'device.failed_load' => 'Systeminformationen konnten nicht geladen werden',
    // Generate users preview JS strings
    'generate.generating' => 'Erzeuge...',
    'generate.print_fetch_failed' => 'Drucken konnte nicht geladen werden: %s',
    'generate.network_not_ok' => 'Netzwerkantwort nicht in Ordnung: %s',
    'generate.generation_failed' => 'Erzeugung fehlgeschlagen: %s',
    'generate.unknown_error' => 'Unbekannter Fehler',
    'generate.preview_not_available' => 'Vorschau nicht verfügbar',
    'generate.failed_print_dialog' => 'Druckdialog konnte nicht geöffnet werden: %s',
    'generate.cached_cleared' => 'Zwischengespeicherte Charge gelöscht',
    'generate.failed_clear_cached' => 'Löschen der zwischengespeicherten Charge fehlgeschlagen',
    'generate.preview_failed' => 'Vorschau fehlgeschlagen',
    'generate.preview' => 'Vorschau',
    'generate.unexpected_error' => 'Unerwarteter Fehler: %s',
    'generate.generated' => '%s Benutzer generiert',
    'generate.request_failed' => 'Anfrage beim Erzeugen der Voucher fehlgeschlagen.',
    'generate.generate' => 'Generieren',

    // Dashboard Hotspot Active Sessions
    'dashboard.hotspot.as.title'=> 'Aktive Hotspot-Sitzungen',
    'dashboard.ppp.as.title'=> 'Aktive PPPoE-Sitzungen',
    // JS dashboard strings (used by client-side locale export)
    'dashboard.no_active_sessions' => 'Keine aktiven Sitzungen',
    'dashboard.no_ppp_active_sessions' => 'Keine aktiven PPP-Sitzungen',
    'dashboard.active_session' => 'aktive Sitzung',
    'dashboard.active_sessions' => 'aktive Sitzungen',
    'dashboard.name' => 'Name',
    'dashboard.address' => 'Adresse',
    'dashboard.uptime' => 'Laufzeit',
    'dashboard.service' => 'Dienst',
    'dashboard.not_monitoring' => 'Nicht überwacht',
    'dashboard.more_format' => '... und %d weitere',
    'dashboard.unable_load_active' => 'Aktive Sitzungen konnten nicht geladen werden',
    'dashboard.unable_load_ppp' => 'Aktive PPP-Sitzungen konnten nicht geladen werden',

    // hotspot.php
    // Hotspot Page
    'hotspot.title'=> 'Hotspot-Manager',
    'hotspot.desc'=> 'Verwalten Sie Hotspot-Benutzer, Benutzerprofile, aktive Sitzungen und Hosts.',
    'hotspot.users'=> 'Benutzer',
    'hotspot.profiles'=> 'Profile',
    'hotspot.active'=> 'Aktiv',
    'hotspot.hosts'=> 'Hosts',

    // Hotspot Page Descriptions
    'hotspot.users.desc'=> 'Hotspot-Benutzerkonten erstellen, bearbeiten und verwalten.',
    'hotspot.profiles.desc'=> 'Bandwidth-, Sitzungs- und Rate-Limit-Profile für Benutzer verwalten.',
    'hotspot.active.desc'=> 'Aktuelle aktive Hotspot-Sitzungen anzeigen und trennen.',
    'hotspot.hosts.desc'=> 'Geräte überprüfen und verwalten, die mit dem Hotspot verbunden sind.',

    // Hotspot Page Buttons
    'hotspot.open.users'=> 'Benutzer öffnen',
    'hotspot.open.profiles'=> 'Profile öffnen',
    'hotspot.open.active'=> 'Aktive öffnen',
    'hotspot.open.hosts'=> 'Hosts öffnen',

    // Hotspot - Back Button
    'hotspot.back-to-hotspot'=> 'Zurück zum Hotspot-Manager',

    // Hotspot General Buttons
    'hotspot.action.button'=> 'Aktionen',
    'hotspot.generate.button'=> 'Generieren',
    'hotspot.add-user.button'=> 'Benutzer hinzufügen',
    'hotspot.enable.button'=> 'Aktivieren',
    'hotspot.add-profile.button'=> 'Profil hinzufügen',
    'hotspot.edit.button'=> 'Bearbeiten',
    'hotspot.remove.button'=> 'Entfernen',
    'hotspot.disable.button'=> 'Deaktivieren',
    'hotspot.export.users'=> 'Benutzer exportieren',
    'hotspot.export.button'=> 'Exportieren',
    'hotspot.button.refresh'=> 'Aktualisieren',
    'hotspot.button.prev'=> 'Zurück',
    'hotspot.button.next'=> 'Weiter',
    'hotspot.sort.by'=> 'Sortieren nach',
    'hotspot.sort.profiles'=> 'Nach Profil sortieren',
    'hotspot.sort.comments'=> 'Nach Kommentar sortieren',

    // Hotspot Table Headers
    'hotspot.table.th.select'=> 'Alle auswählen',
    'hotspot.table.th.server'=> 'Server-Name',
    'hotspot.table.th.user'=> 'Benutzer',
    'hotspot.table.th.name'=> 'Name',
    'hotspot.table.th.address'=> 'Adresse',
    'hotspot.table.th.mac'=> 'MAC-Adresse',
    'hotspot.table.th.profile'=> 'Profil',
    'hotspot.table.th.uptime'=> 'Laufzeit',
    'hotspot.table.th.bytes-in'=> 'Empfangene Bytes',
    'hotspot.table.th.bytes-out'=> 'Gesendete Bytes',
    'hotspot.table.th.comment'=> 'Kommentar',
    'hotspot.table.th.to-address'=> 'Zieladresse',
    'hotspot.table.th.last-seen'=> 'Zuletzt gesehen',
    'hotspot.status.loading'=> 'Hotspot-Benutzer werden geladen...',

    // Hotspot JS: hosts, profiles, users, modals
    // Hosts list
    'hotspot.hosts.no_hosts' => 'Keine Hosts',
    'hotspot.hosts.loading' => 'Wird geladen...',
    'hotspot.hosts.failed_to_contact_api' => 'API konnte nicht erreicht werden',
    'hotspot.hosts.page_info' => 'Seite %s / %s (%s)',

    // Profiles list
    'hotspot.profiles.no_profiles' => 'Keine Profile',
    'hotspot.profiles.loading' => 'Wird geladen...',
    'hotspot.profiles.failed_to_load' => 'Profile konnten nicht geladen werden',
    'hotspot.profiles.failed_to_contact_api' => 'API konnte nicht erreicht werden',
    'hotspot.profiles.no_pools' => '(keine Pools)',
    'hotspot.profiles.no_queues' => '(keine Queues)',
    'hotspot.profiles.no_types' => '(keine Typen)',
    'hotspot.profiles.select' => 'Auswählen...',
    'hotspot.profiles.default' => 'Standard',
    'hotspot.profiles.no_profiles_option' => '(keine Profile)',
    'hotspot.profiles.page_info' => 'Seite %s / %s (%s)',
    'hotspot.profiles.name_required' => 'Name ist erforderlich',
    'hotspot.profiles.added' => 'Profil hinzugefügt',
    'hotspot.profiles.add_failed' => 'Profil konnte nicht hinzugefügt werden: %s',
    'hotspot.profiles.server_contact_failed' => 'Server konnte nicht erreicht werden',
    'hotspot.profiles.id_missing' => 'Profil-ID fehlt',
    'hotspot.profiles.updated' => 'Profil aktualisiert',
    'hotspot.profiles.update_failed' => 'Profil konnte nicht aktualisiert werden: %s',
    'hotspot.profiles.removed' => 'Profil entfernt',
    'hotspot.profiles.remove_failed' => 'Profil konnte nicht entfernt werden: %s',
    'hotspot.profiles.select_remove' => 'Wählen Sie ein zu entfernendes Profil',
    'hotspot.profiles.remove_confirm' => 'Sind Sie sicher, dass Sie das ausgewählte Profil entfernen möchten?',
    'hotspot.profiles.remove_confirm_title' => 'Bestätigen',
    
    // Admin Control Panel translations
    'admin.title' => 'Admin-Bereich',
    'admin.desc' => 'Zentrale Verwaltungsoberfläche',
    'admin.maintenance' => 'Wartung',
    'admin.maintenance.desc' => 'Wartungsnachricht für Besucher seitenweit ein-/ausschalten.',
    'admin.page_access' => 'Zugriffskontrollen',
    'admin.page_access.desc' => 'Benutzern den Zugriff auf ganze Bereiche der Anwendung erlauben oder verweigern.',
    'admin.view_logs' => 'Protokolle anzeigen',
    'admin.logs.title' => 'Admin-Zugriffsprotokolle',
    'admin.save' => 'Speichern',
    'admin.saved' => 'Gespeichert',
    'admin.save_failed' => 'Speichern fehlgeschlagen',
    'admin.save_error' => 'Einstellungen konnten nicht gespeichert werden',
    'admin.load_logs_failed' => 'Protokolle konnten nicht geladen werden',
    'admin.access_denied' => 'Sie haben keine Berechtigung, auf das Admin-Panel zuzugreifen.',
    'access.restricted.title' => 'Zugriff eingeschränkt',
    'access.restricted.desc' => 'Dieser Bereich ist derzeit deaktiviert',
    'admin.section_disabled' => 'Bereich durch Admin deaktiviert',
    'nav.disabled' => 'Deaktiviert',
    // Maintenance toggle JS strings
    'maintenance.toast' => 'Wartungsmodus' . '<br/><br/>' . 'Funktionen sind eingeschränkt, solange der Wartungsmodus aktiviert ist.',
    'maintenance.set_failed' => 'Setzen des Wartungsmodus fehlgeschlagen',

    // Users modals and export
    'hotspot.modals.no_servers' => '(keine Server)',
    'hotspot.modals.no_profiles' => '(keine Profile)',
    'hotspot.modals.please_select_export' => 'Bitte wählen Sie einen oder mehrere Benutzer zum Export aus',
    'hotspot.modals.select_at_least_one_field' => 'Wählen Sie mindestens ein Feld für den Export aus',
    'hotspot.modals.no_users_selected' => 'Keine Benutzer ausgewählt',
    'hotspot.modals.no_data_to_export' => 'Keine Daten zum Exportieren',
    'hotspot.modals.export_started' => 'Export gestartet',
    'hotspot.modals.export_failed' => 'Export fehlgeschlagen',
    'hotspot.modals.add_user_title' => 'Hotspot-Benutzer hinzufügen',
    'hotspot.modals.edit_user_title' => 'Hotspot-Benutzer bearbeiten',
    'hotspot.modals.create_button' => 'Erstellen',
    'hotspot.modals.update_button' => 'Aktualisieren',
    'hotspot.modals.failed_load_user' => 'Benutzerdaten konnten nicht geladen werden',
    'hotspot.modals.select_one_to_edit' => 'Bitte wählen Sie genau einen Benutzer zum Bearbeiten aus',
    'hotspot.modals.user_updated' => 'Benutzer aktualisiert',
    'hotspot.modals.user_created' => 'Benutzer erstellt',
    'hotspot.modals.create_update_failed' => 'Erstellen/Aktualisieren fehlgeschlagen',
    'hotspot.modals.create_request_failed' => 'Erstellungsanfrage fehlgeschlagen',

    // Users list
    'hotspot.users.no_users' => 'Keine Benutzer',
    'hotspot.users.loading' => 'Wird geladen...',
    'hotspot.users.empty_response' => 'Leere Antwort',
    'hotspot.users.failed_to_contact_api' => 'API konnte nicht erreicht werden',
    'hotspot.users.select_one_or_more' => 'Bitte wählen Sie einen oder mehrere Benutzer aus.',
    'hotspot.users.remove_confirm' => 'Ausgewählte Benutzer entfernen? Dies kann nicht rückgängig gemacht werden.',
    'hotspot.users.action_completed' => 'Aktion "%s" abgeschlossen. Erfolgreich: %s/%s',
    'hotspot.users.action_failed' => 'Aktion fehlgeschlagen: %s',
    'hotspot.users.request_failed' => 'Anfrage fehlgeschlagen',
    'hotspot.users.sort_profiles' => 'Profile sortieren',
    'hotspot.users.sort_comments' => 'Kommentare sortieren',
    'hotspot.users.select_profiles_placeholder' => 'Profile sortieren',
    'hotspot.users.select_comments_placeholder' => 'Kommentare sortieren',

    // Hotspot JS helper strings
    'hotspot.no_active_entries' => 'Keine aktiven Einträge',
    'hotspot.loading' => 'Wird geladen...',
    'hotspot.failed_to_contact_api' => 'API konnte nicht erreicht werden',
    'hotspot.page_info' => 'Seite %s / %s (%s)',

    // Hotspot Modal Tabs and Titles
    'hotspot.modal.title.generate'=> 'Benutzer / Voucher erzeugen',
    'hotspot.modal.general.tab'=> 'Allgemein',
    'hotspot.modal.printing.tab'=> 'Drucken',
    'hotspot.modal.stats.tab'=> 'Statistiken',
    'hotspot.modal.queueing.tab'=> 'Warteschlange',
    'hotspot.modal.scripts.tab'=> 'Skripte',

    // Hotspot Modal Form Generate / Add User - General Tab
    'hotspot.modal.form.qty'=> 'Anzahl',
    'hotspot.modal.form.server'=> 'Hotspot-Server',
    'hotspot.modal.form.username'=> 'Benutzername',
    'hotspot.modal.form.password'=> 'Passwort',
    'hotspot.modal.form.user-type'=> 'Benutzertyp',
    'hotspot.modal.form.code-length'=> 'Code-Länge',
    'hotspot.modal.form.characters'=> 'Zeichen',
    'hotspot.modal.form.user-profile'=> 'Benutzerprofil',
    'hotspot.modal.form.comment'=> 'Kommentar',
    'hotspot.modal.form.optional-comment'=> 'Optionaler Kommentar',
    'hotspot.modal.form.mac-address'=>  'MAC-Adresse',
    'hotspot.modal.form.time-limit'=>  'Zeitlimit',
    'hotspot.modal.form.data-limit'=>  'Datenlimit',

    // Hotspot Modal Form Generate - Printing Tab
    'hotspot.modal.form.hotspot-name'=> 'Hotspot-Name',
    'hotspot.modal.form.hotspot-dns'=> 'DNS',
    'hotspot.modal.form.hotspot-currency'=> 'Währung',
    'hotspot.modal.form.hotspot-select-currency'=> 'Währung wählen',
    'hotspot.modal.form.hotspot-price'=> 'Preis',
    'hotspot.modal.form.hotspot-include-comment'=> 'Kommentar einfügen',
    'hotspot.modal.form.hotspot-include-comment-desc'=> 'Generierten Kommentar auf dem gedruckten Voucher einfügen',
    'hotspot.modal.form.hotspot-template'=> 'Vorlage',

    // Hotspot Modal Form Generate - Printing Placeholders
    'hotspot.modal.form.hotspot-name-placeholder'=> 'Mein Hotspot',
    'hotspot.modal.form.hotspot-dns-placeholder'=> 'hotspot.mtikops.com',
    'hotspot.modal.form.hotspot-price-placeholder'=> 'Preis pro Voucher',

    // Hotspot Modal Form Generate - User-Type
    'hotspot.modal.form.user-type-regular'=> 'Benutzername & Passwort',
    'hotspot.modal.form.user-type-voucher'=> 'Benutzername = Passwort',

    // Hotspot Modal Form Generate - Characters
    'hotspot.modal.form.characters-lower'=> 'abcd (Kleinbuchstaben)',
    'hotspot.modal.form.characters-upper'=> 'ABCD (GROSSBUCHSTABEN)',
    'hotspot.modal.form.characters-mixed'=> 'AbCd (Gemischt)',
    'hotspot.modal.form.characters-num'=> '1234 (Zahlen)',
    'hotspot.modal.form.characters-lower-num'=> 'a1b2 (Kleinbuchstaben & Zahlen)',
    'hotspot.modal.form.characters-upper-num'=> 'A1B2 (GROSSBUCHSTABEN & Zahlen)',
    'hotspot.modal.form.characters-mixed-num'=> 'aA1bB2 (Gemischt & Zahlen)',

    // Hotspot Modal Form Stats - Stats Tab
    'hotspot.modal.form.stats.uptime'=> 'Laufzeit',
    'hotspot.modal.form.stats.bytes_in'=> 'Empfangene Bytes',
    'hotspot.modal.form.stats.bytes_out'=> 'Gesendete Bytes',
    'hotspot.modal.form.stats.limit-uptime'=> 'Laufzeit-Limit',
    'hotspot.modal.form.stats.limit-bytes_total'=> 'Gesamt-Bytes-Limit',
    'hotspot.modal.form.stats.user-code'=> 'Benutzer-Code',
    'hotspot.modal.form.stats.expire-date'=> 'Ablaufdatum',

    // Hotspot Modal Form Misc
    'hotspot.modal.form.loading' => 'Daten werden geladen...',

    // Hotspot Modal Form Buttons
    'hotspot.modal.form.button.generate-print'=> 'Generieren & Drucken',
    'hotspot.modal.form.button.generate'=> 'Nur generieren',
    'hotspot.modal.form.button.clear-cached-batch'=> 'Zwischengespeicherte Charge löschen',
    'hotspot.modal.form.button.close'=> 'Schließen',
    'hotspot.modal.form.button.create'=> 'Erstellen',
    'hotspot.modal.form.button.cancel'=> 'Abbrechen',

    // profiles.php
    // Hotspot User Profiles Page
    'hotspot.user.profiles.title'=> 'Profile',
    'hotspot.user.profiles.desc'=> 'Bandbreiten-, Sitzungs- und Rate-Limit-Profile für Benutzer verwalten.',

    // Hotspot User Profiles Table Headers
    'hotspot.user.profiles.th.name'=> 'Name',
    'hotspot.user.profiles.th.shared-users'=> 'Geteilte Benutzer',
    'hotspot.user.profiles.th.rate-limit'=> 'Rate-Limit',
    'hotspot.user.profiles.th.idle-timeout'=> 'Leerlaufzeit',
    'hotspot.user.profiles.th.keepalive-timeout'=> 'Keepalive-Timeout',
    'hotspot.user.profiles.th.queue-type'=> 'Queue-Typ',

    // Hotspot User Profiles Modal Form
    'hotspot.user.profiles.modal.title.add-profile'=> 'Profil hinzufügen',

    // Hotspot User Profile Form Fields - General Tab
    'hotspot.user.profiles.form.name'=> 'Profilname',
    'hotspot.user.profiles.form.pool'=> 'Adresspool',
    'hotspot.user.profiles.form.rate-limit-rx'=> 'Rate-Limit (RX)',
    'hotspot.user.profiles.form.rate-limit-tx'=> 'Rate-Limit (TX)',
    'hotspot.user.profiles.form.shared-users'=> 'Geteilte Benutzer',
    'hotspot.user.profiles.form.expiry-mode'=> 'Ablaufmodus',
    'hotspot.user.profiles.form.expiry-duration'=> 'Ablaufdauer',
    'hotspot.user.profiles.form.lock-device'=> 'An Gerät binden',
    'hotspot.user.profiles.form.lock-server'=> 'An Server binden',
    'hotspot.user.profiles.form.comment'=> 'Kommentar',

    // Expiry Mode Options
    'hotspot.user.profiles.form.expiry-mode_none'=> 'Keine',
    'hotspot.user.profiles.form.expiry-mode_remove'=> 'Entfernen',
    'hotspot.user.profiles.form.expiry-mode_notice'=> 'Benachrichtigen',
    'hotspot.user.profiles.form.expiry-mode_remove_record'=> 'Entfernen und protokollieren',
    'hotspot.user.profiles.form.expiry-mode_remove_notice'=> 'Entfernen und benachrichtigen',

    // Hotspot User Profile Form Fields - Queue Tab
    'hotspot.user.profiles.form.parent-queue'=> 'Übergeordnete Queue',
    'hotspot.user.profiles.form.queue-type'=> 'Queue-Typ',

    // Hotspot User Profiles Form Fields - Scripts Tab
    'hotspot.user.profiles.form.on-login-script'=> 'Skript bei Login',
    'hotspot.user.profiles.form.on-login-script_placeholder'=> 'Optionales Skript, das beim Login ausgeführt wird',
    'hotspot.user.profiles.form.on-logout-script'=> 'Skript bei Logout',
    'hotspot.user.profiles.form.on-logout-script_placeholder'=> 'Optionales Skript, das beim Logout ausgeführt wird',

    // Hotspot User Profile Modal - Edit Profile
    'hotspot.user.profile.edit'=> 'Profil bearbeiten',
    'hotspot.user.profile.select.profile'=> 'Profil auswählen',
    'hotspot.user.profile.select.profile.desc'=> 'Wählen Sie ein Profil zum Bearbeiten. Nach der Auswahl öffnet sich der vollständige Editor.',
    'hotspot.user.profile.button.cancel'=> 'Abbrechen',
    'hotspot.user.profile.button.save'=> 'Speichern',

    // Hotspot User Profile Modal - Remove Profile
    'hotspot.user.profiles.remove'=> 'Profil entfernen',
    'hotspot.user.profiles.remove-select'=> 'Zu entfernendes Profil auswählen',
    'hotspot.user.profiles.remove-warning'=> 'Diese Aktion kann nicht rückgängig gemacht werden. Stellen Sie sicher, dass Sie das ausgewählte Profil entfernen möchten.',
    'hotspot.user.profiles.remove.button-cancel'=> 'Abbrechen',
    'hotspot.user.profiles.remove.button-remove'=> 'Entfernen',

    // Hotspot Export Users Modal
    'hotspot.export.user.desc'=> 'Wählen Sie, welche Felder in den Export aufgenommen werden sollen. Es werden nur ausgewählte Benutzer exportiert.',
    'hotspot.export.user.name'=> 'Name',
    'hotspot.export.user.price'=> 'Preis',
    'hotspot.export.user.password'=> 'Passwort',
    'hotspot.export.user.profile'=> 'Profil',
    'hotspot.export.user.comment'=> 'Kommentar',
    'hotspot.export.user.inc-header'=> 'Header einschließen',
    'hotspot.export.user.column-order'=> 'Spaltenreihenfolge',
    'hotspot.export.user.column-up'=> 'Nach oben',
    'hotspot.export.user.column-down'=> 'Nach unten',
    'hotspot.export.user.column-desc'=> 'Wählen Sie ein Feld und verwenden Sie Nach oben/Nach unten, um die Spaltenreihenfolge zu ändern.',
    'hotspot.export.user.button-cancel'=> 'Abbrechen',
    'hotspot.export.user.button-download'=> 'CSV herunterladen',

    // Hotspot Print Preview Modal
    'hotspot.print.preview.title'=> 'Druckvorschau',
    'hotspot.print.preview.desc'=> 'Vorschau der ausgewählten Benutzer vor dem Drucken.',
    'hotspot.print.preview.button-cancel'=> 'Abbrechen',
    'hotspot.print.preview.button-close'=> 'Schließen',
    'hotspot.print.preview.button-print'=> 'Speichern & Drucken',
    

    // active.php
    // Hotspot Active Sessions Page

    // hosts.php
    // Hotspot Hosts Page

    // settings.php
    // Hotspot Settings Page
    'settings.title'=> 'Einstellungen',
    'settings.desc'=> 'Geräte-Identität, Systemdienste und Wartungsaktionen konfigurieren.',
    'settings.identity'=> 'Identität',
    'settings.ntp'=> 'NTP',
    'settings.files'=> 'Dateien',
    'settings.users'=> 'Benutzer',
    'settings.scheduler'=> 'Zeitplan',
    'settings.scripts'=> 'Skripte',
    'settings.reset'=> 'Zurücksetzen',
    'settings.reboot'=> 'Neustart',
    'settings.shutdown'=> 'Herunterfahren',

    // Settings Page Buttons
    //'settings.open.identity'=> 'Open Identity',
    //'settings.open.ntp'=> 'Open NTP',
    'settings.open.files'=> 'Dateien öffnen',
    'settings.open.users'=> 'Benutzer verwalten',
    'settings.open.scheduler'=> 'Zeitplan öffnen',
    'settings.open.scripts'=> 'Skripte öffnen',
    //'settings.open.reset'=> 'Reset',
    //'settings.open.reboot'=> 'Reboot',
    //'settings.open.shutdown'=> 'Shutdown',

    // SETTINGS GENERAL BUTTONS
    'settings.buttons.upload'=> 'Hochladen',
    'settings.buttons.delete'=> 'Löschen',
    'settings.buttons.refresh'=> 'Aktualisieren',
    'settings.buttons.save'=> 'Speichern',
    'settings.buttons.cancel'=> 'Abbrechen',
    'settings.buttons.close'=> 'Schließen',
    'settings.buttons.edit'=> 'Bearbeiten',
    'settings.buttons.add'=> 'Hinzufügen',
    'settings.buttons.remove'=> 'Entfernen',
    'settings.buttons.prev'=> 'Zurück',
    'settings.buttons.next'=> 'Weiter',
    'settings.sort.by'=> 'Sortieren nach',
    'settings.sort' => 'Sortieren',

    // Settings Page - Back Button
    'settings.back-to-settings'=> 'Zurück zu den Einstellungen',

    // Settings Page - Actions
    'settings.actions'=> 'Aktionen',

    // Settings Page - Loading
    'settings.loading'=> 'Einstellungen werden geladen...',

    // Settings Page Descriptions
    'settings.identity.desc'=> 'Geräte-Identität und grundlegende Systeminformationen anzeigen und bearbeiten.',
    'settings.ntp.desc'=> 'NTP-Einstellungen (Network Time Protocol) zur genauen Zeithaltung konfigurieren.',
    'settings.files.desc'=> 'Hochgeladene Dateien und Skripte auf dem Gerät verwalten.',
    'settings.users.desc'=> 'Systembenutzer und deren Zugriffsrechte verwalten.',
    'settings.scheduler.desc'=> 'Geplante Aufgaben für Wartung und Automatisierung erstellen und verwalten.',
    'settings.scripts.desc'=> 'Benutzerdefinierte Skripte verwalten und ausführen.',
    'settings.reset.desc'=> 'Konfiguration auf Werkseinstellungen zurücksetzen. Mit Vorsicht verwenden.',
    'settings.reboot.desc'=> 'Gerät remote neu starten. Stellen Sie sicher, dass alle Änderungen gespeichert sind.',
    'settings.shutdown.desc'=> 'Gerät remote und sicher herunterfahren. Mit Vorsicht verwenden.',

    // Settings Table Headers
    'settings.table.th.name'=> 'Name',
    'settings.table.th.group'=> 'Gruppe',
    'settings.table.th.last-login'=> 'Letzte Anmeldung',
    'settings.table.th.comment'=> 'Kommentar',
    'settings.table.th.role'=> 'Rolle',
    'settings.table.th.select'=> 'Alle auswählen',
    'settings.table.th.username'=> 'Benutzername',
    'settings.table.th.password'=> 'Passwort',
    'settings.table.th.actions'=> 'Aktionen',
    'settings.table.th.next-run'=> 'Nächste Ausführung',
    'settings.table.th.interval'=> 'Intervall',
    'settings.table.th.enabled'=> 'Aktiviert',
    'settings.table.th.size'=> 'Größe',
    'settings.table.th.owner'=> 'Besitzer',
    'settings.table.th.date'=> 'Datum',

   
    // Settings Page - Identity
    'settings.identity.placeholder'=> 'Systemidentität eingeben',
    'settings.identity.caption'=> 'Dies ist der Name, der in Logs und zur Netzwerkidentifikation angezeigt wird.',

    // Settings Page - Identity Buttons
    'settings.identity.save'=> 'Identität speichern',
    'settings.identity.refresh'=> 'Aktualisieren',

    // Settings Page - NTP Modal
    'settings.ntp.enabled'=> 'Aktiviert',
    'settings.ntp.enabled-yes'=> 'Aktiviert',
    'settings.ntp.enabled-no'=> 'Deaktiviert',
    'settings.ntp.mode'=> 'Modus',
    'settings.ntp.mode-broadcast'=> 'Broadcast',
    'settings.ntp.mode-manycast'=> 'Manycast',
    'settings.ntp.mode-multicast'=> 'Multicast',
    'settings.ntp.mode-unicast'=> 'Unicast',
    'settings.ntp.server'=> 'NTP-Server',
    'settings.ntp.server-add'=> 'Server hinzufügen',
    'settings.ntp.server-refresh'=> 'Aktualisieren',
    'settings.ntp.server-save'=> 'Speichern',

    // Settings Page - NTP Status
    'settings.ntp.status'=> 'Status',
    'settings.ntp.freq.drift'=> 'Frequenzdrift',
    'settings.ntp.synced.server'=> 'Synchronisierter Server',
    'settings.ntp.synced.stratum'=> 'Synchronisiertes Stratum',
    'settings.ntp.system.offset'=> 'Systemoffset',

    // Settings Page - Files
    'settings.files.title'=> 'Dateimanager',
    'settings.files.desc'=> 'Dateien hochladen, herunterladen und auf dem Gerät verwalten.',


    // Settings Page - Users
    'settings.users.title'=> 'Benutzerverwaltung',
    'settings.users.desc'=> 'Systembenutzer erstellen, bearbeiten und deren Zugriffsrechte verwalten.',

    // Settings Page - Scheduler
    'settings.scheduler.title'=> 'Zeitplan',
    'settings.scheduler.desc'=> 'Geplante Aufgaben für Wartung und Automatisierung erstellen und verwalten.',

    // Settings Page - Scripts
    'settings.scripts.title'=> 'Skripte',
    'settings.scripts.desc'=> 'Benutzerdefinierte Skripte erstellen, bearbeiten und ausführen.',

    // Settings Page - Reset
    // Reset Modal
    'settings.reset.type'=> 'Reset-Typ',
    'settings.reset.config'=> 'Konfiguration zurücksetzen (Benutzerdaten behalten)',
    'settings.reset.all'=> 'Werkseinstellungen (alles löschen, Standardwerte laden)',
    'settings.reset.delay'=> 'Verzögerung (Sekunden)',
    'settings.reset.delay.desc'=> 'Auf 0 setzen, um die Aktion sofort auszuführen, wenn die Schaltfläche „Planen" verwendet wird, oder auf „Jetzt zurücksetzen" klicken, um sofort auszuführen.',

    //Reset Buttons
    'settings.reset.button.schedule'=> 'Reset planen',
    'settings.reset.button.reset-now'=> 'Jetzt zurücksetzen',

    // Settings Page - Reboot
    // Reboot Modal
    'settings.reboot.delay'=> 'Verzögerung (Sekunden)',
    'settings.reboot.delay.desc'=> 'Auf 0 setzen, um sofort neu zu starten, wenn die Schaltfläche „Planen" verwendet wird, oder auf „Jetzt neu starten" klicken, um sofort zu starten.',

    // Reboot Buttons
    'settings.reboot.button.schedule'=> 'Neustart planen',
    'settings.reboot.button.reboot-now'=> 'Jetzt neu starten',

    // Settings Page - Shutdown
    // Shutdown Modal
    'settings.shutdown.delay'=> 'Verzögerung (Sekunden)',
    'settings.shutdown.delay.desc'=> 'Auf 0 setzen, um sofort herunterzufahren, wenn die Schaltfläche „Planen" verwendet wird, oder auf „Jetzt herunterfahren" klicken, um sofort auszuführen.',

    // Shutdown Buttons
    'settings.shutdown.button.schedule'=> 'Herunterfahren planen',
    'settings.shutdown.button.shutdown-now'=> 'Jetzt herunterfahren',


    // queues.php
    // Queues Page
    'queues.title'=> 'Queues-Manager',
    'queues.desc'=> 'Verwalten Sie Simple Queues, Queue Trees und Queue Types.',

    'queues.simple'=> 'Simple',
    'queues.tree'=> 'Tree',
    'queues.types'=> 'Typen',
    'queues.simple-queue'=> 'Simple Queues',
    'queues.queue-tree'=> 'Queue Trees',
    'queues.queue-types'=> 'Queue Types',

    // Queues Page Descriptions
    'queues.simple.desc'=> 'Einfache pro Host/Ziel Queues erstellen und verwalten.',
    'queues.tree.desc'=> 'Hierarchische Queue Trees für fortgeschrittenes Traffic-Shaping verwalten.',
    'queues.types.desc'=> 'Queue-Typen und Paket-Klassifizierer definieren und verwalten.',

    // Queues Page Buttons
    'queues.open.simple'=> 'Simple Queue öffnen',
    'queues.open.tree'=> 'Queue Tree öffnen',
    'queues.open.types'=> 'Queue Types öffnen',

    // Queues Page - Back Button
    'queues.back-to-queues'=> 'Zurück zum Queues-Manager',

    // Queues General Buttons
    'queues.button.new'=> 'Neu',
    'queues.button.edit'=> 'Bearbeiten',
    'queues.button.enable'=> 'Aktivieren',
    'queues.button.disable'=> 'Deaktivieren',
    'queues.button.remove'=> 'Entfernen',
    'queues.button.refresh'=> 'Aktualisieren',
    'queues.button.pause-polling'=> 'Polling pausieren',
    'queues.sort.by'=> 'Sortieren nach',
    'queues.sort'=> 'Sortieren',
    'queues.select.all'=> 'Alle auswählen',
    'queues.button.prev'=> 'Zurück',
    'queues.button.next'=> 'Weiter',
    'queues.button.save'=> 'Speichern',
    'queues.button.cancel'=> 'Abbrechen',
    'queues.button.create'=> 'Erstellen',


    // Queues Loading Status
    'queues.status.loading'=> 'Queues werden geladen...',

    // simple.php
    // Simple Queues Page


    // Simple Queues Action Buttons
    'queues.simple.actions'=> 'Aktionen',
    'queues.simple.actions.desc'=> 'Aktionen für ausgewählte Queues ausführen.',

    // Queues Table Headers
    'queues.table.th.name'=> 'Name',
    'queues.table.th.number'=> 'Nummer',
    'queues.table.th.target'=> 'Ziel',
    'queues.table.th.upload-limit'=> 'Upload-Limit',
    'queues.table.th.download-limit'=> 'Download-Limit',
    'queues.table.th.download-avg-rate'=> 'Durchschnittl. Download-Rate',
    'queues.table.th.max-limit'=> 'Max. Limit',
    'queues.table.th.queue-type'=> 'Queue-Typen',
    'queues.table.th.limit-at'=> 'Limit bei',
    'queues.table.th.bytes'=> 'Bytes',
    'queues.table.th.avg.rate'=> 'Durchschn. Rate',
    'queues.table.th.kind'=> 'Art',

    // Queues Modal Form - Tabs
    'queues.tab.main'=> 'Allgemein',
    'queues.tab.advanced'=> 'Erweitert',
    'queues.tab.queueing'=> 'Warteschlange',

    // Queues Modal Form Tab
    'queues.modal.form.new.simple'=> 'Neue Simple Queue',
    'queue.modal.form.edit.simple'=> 'Simple Queue bearbeiten',
    'queues.modal.form.enabled'=> 'Aktiviert',
    'queues.modal.form.name'=> 'Name',
    'queues.modal.form.target'=> 'Ziel',
    'queues.modal.form.target-select-iface'=> 'Schnittstelle auswählen',
    'queues.modal.form.dst'=> 'Zieladresse',
    'queues.modal.form.dst-select-iface'=> 'Schnittstelle auswählen',
    'queues.modal.form.target.dst-caption'=> 'Wählen Sie eine Schnittstelle oder geben Sie unten ein benutzerdefiniertes Ziel ein.',
    'queues.modal.form.placeholder'=> 'oder IP eingeben (z. B. 192.168.10.0/24 oder 10.0.0.5)',
    'queues.modal.form.target.upload'=> 'Upload-Ziel',
    'queues.modal.form.max-limit'=> 'Max. Limit',
    'queues.modal.form.target.download'=> 'Download-Ziel',
    'queues.modal.form.pkt-marks'=> 'Packet Marks',
    'queues.modal.form.limit-at'=> 'Limit bei',
    'queues.modal.form.burst-limit'=> 'Burst-Limit',
    'queues.modal.form.burst-threshold'=> 'Burst-Schwelle',
    'queues.modal.form.burst-time'=> 'Burst-Zeit',
    'queues.modal.form.priority'=> 'Priorität',
    'queues.modal.form.bucket-size'=> 'Bucket-Größe',
    'queues.modal.form.parent-queue'=> 'Übergeordnete Queue',
    'queues.modal.form.queue-type'=> 'Queue-Typ',
    'queues.modal.form.comment'=> 'Kommentar',
    'queues.modal.form.comment-placeholder'=> 'Optionaler Kommentar',
    'queues.modal.form.clear-parent'=> 'Übergeordnete Beziehung entfernen',

    // tree.php
    // Queue Tree Page

    // Queue Tree Action Buttons
    'queues.tree.actions'=> 'Aktionen',
    'queues.tree.action.desc'=> 'Aktionen für ausgewählte Queue-Tree-Einträge ausführen.',

    // Queue Tree Modal Form - Tabs
    'queues.tree.create.title'=> 'Queue-Tree-Eintrag erstellen',
    'queue.tree.tab.general'=> 'Allgemein',
    'queue.tree.tab.rate-limit'=> 'Rate-Limit',


    // types.php
    // Queue Types Page
  
    // Queue Types Action 
    'queues.types.actions'=> 'Aktionen',
    'queues.types.action.desc'=> 'Aktionen für ausgewählte Queue-Typen ausführen.',


    // ppp.php
    // PPP Page
    'ppp.title'=> 'PPPoE-Manager',
    'ppp.desc'=> 'PPPoE-Server, Secrets und Profile verwalten.',

    
    'ppp.pppoe.servers'=> 'PPPoE-Server',
    'ppp.servers'=> 'Server',
    'ppp.secrets'=> 'Secrets',
    'ppp.profiles'=> 'Profile',
    'ppp.active'=> 'Aktive Sitzungen',
    
    // PPP Page Descriptions
    'ppp.servers.desc'=> 'PPPoE-Serverinstanzen und Bindings anzeigen und verwalten.',
    'ppp.secrets.desc'=> 'PPPoE-Secrets (Benutzeranmeldeinformationen) verwalten.',
    'ppp.profiles.desc'=> 'PPPoE-Profile erstellen und verwalten.',
    'ppp.active.desc'=> 'Aktive PPPoE-Sitzungen anzeigen und trennen.',

    'ppp.open.servers'=> 'PPPoE-Server öffnen',
    'ppp.open.secrets'=> 'Secrets öffnen',
    'ppp.open.profiles'=> 'Profile öffnen',
    'ppp.open.active'=> 'Aktive Sitzungen öffnen',

    // PPP Page - Back Button
    'ppp.back-to-ppp'=> 'Zurück zum PPPoE-Manager',

    // PPP Actions
    'ppp.actions'=> 'Aktionen',

    // PPP General Buttons
    'ppp.buttons.new'=> 'Neu',
    'ppp.buttons.edit'=> 'Bearbeiten',
    'ppp.buttons.enable'=> 'Aktivieren',
    'ppp.buttons.disable'=> 'Deaktivieren',
    'ppp.buttons.remove'=> 'Entfernen',
    'ppp.buttons.refresh'=> 'Aktualisieren',
    'ppp.sort.by'=> 'Sortieren nach',
    'ppp.sort'=> 'Sortieren',
    'ppp.select.all'=> 'Alle auswählen',
    'ppp.buttons.prev'=> 'Zurück',
    'ppp.buttons.next'=> 'Weiter',
    'ppp.buttons.clear'=> 'Löschen',
    'ppp.buttons.cancel'=> 'Abbrechen',
    'ppp.buttons.create'=> 'Erstellen',
    'ppp.buttons.save'=> 'Speichern',
    'ppp.buttons.proceed'=> 'Fortfahren',

    // PPP Loading Status
    'ppp.status.loading'=> 'PPPoE-Daten werden geladen...',

    // PPP Secrets Table Headers
    'ppp.table.th.service-name'=> 'Dienstname',
    'ppp.table.th.iface'=> 'Schnittstelle',
    'ppp.table.th.keepalive'=> 'Keepalive-Timeout',
    'ppp.table.th.profile'=> 'Profil',
    'ppp.table.th.one-session-host'=> 'Eine Sitzung pro Host',
    'ppp.table.th.authentication'=> 'Authentifizierung',
    'ppp.table.th.name'=> 'Name',
    'ppp.table.th.password'=> 'Passwort',
    'ppp.table.th.service'=> 'Dienst',
    'ppp.table.th.address'=> 'Adresse',
    'ppp.table.th.caller-id'=> 'Caller-ID',
    'ppp.table.th.local-address'=> 'Lokale Adresse',
    'ppp.table.th.remote-address'=> 'Remote-Adresse',
    'ppp.table.th.last-logged-out'=> 'Zuletzt abgemeldet',
    'ppp.table.th.last-disc-reason'=> 'Trennungsgrund',
    'ppp.table.th.last-called-id'=> 'Zuletzt angerufene ID',
    'ppp.table.th.rate-limit'=> 'Rate-Limit',
    'ppp.table.th.only-one'=> 'Nur eine',
    'ppp.table.th.uptime'=> 'Laufzeit',
    'ppp.table.th.bytes-in'=> 'Empfangene Bytes',
    'ppp.table.th.bytes-out'=> 'Gesendete Bytes',

    // PPP Add Server Modal Form
    'ppp.modal.form.title'=> 'PPPoE-Server hinzufügen',
    'ppp.modal.form.enabled'=> 'Aktiviert',
    'ppp.modal.form.one-session-per-host'=> 'Eine Sitzung pro Host',
    'ppp.modal.form.accept-empty-services'=> 'Leere Dienste akzeptieren',
    'ppp.modal.form.accept-untagged'=> 'Untagged akzeptieren',
    'ppp.modal.form.service-name'=> 'Dienstname',
    'ppp.modal.form.service-name_placeholder'=> 'PPPoE-Name',
    'ppp.modal.form.interface'=> 'Schnittstelle',
    'ppp.modal.form.placeholder'=> 'Standard',
    'ppp.modal.form.max-mtu'=> 'Max. MTU',
    'ppp.modal.form.max-mru'=> 'Max. MRU',
    'ppp.modal.form.mrru'=> 'MRRU',
    'ppp.modal.form.keepalive-timeout'=> 'Keepalive-Timeout',
    'ppp.modal.form.profile'=> 'Profil',
    'ppp.modal.form.max-sessions'=> 'Max. Sitzungen',
    'ppp.modal.form.auth-methods'=> 'Authentifizierungsmethoden',
    'ppp.modal.form.auth-mschapv2'=> 'msChapv2',
    'ppp.modal.form.auth-mschapv1'=> 'msChapv1',
    'ppp.modal.form.auth-chap'=> 'CHAP',
    'ppp.modal.form.auth-pap'=> 'PAP',

    // PPP Add/Edit Secret Modal Form
    'ppp.modal.form.secret.name'=> 'Name',
    'ppp.modal.form.secret.password'=> 'Passwort',
    'ppp.modal.form.secret.service-type'=> 'Dienst',
    'ppp.modal.form.secret.local-address'=> 'Lokale Adresse',
    'ppp.modal.form.secret.remote-address'=> 'Remote-Adresse',

    // secrets.php
    // Modal Titles
    'ppp.modal.form.add.ppp-secret'=> 'PPPoE-Secret hinzufügen',
    'ppp.modal.form.edit.ppp-secret'=> 'PPPoE-Secret bearbeiten',

    // PPP Secrets Page Modal Tabs
    'ppp.secrets.tab.general'=> 'Allgemein',  
    'ppp.secrets.tab.details'=> 'Details',

    // profiles.php
    // PPP Profiles Page

    // PPP Profiles Modal Titles
    'ppp.modal.form.add.ppp-profile'=> 'PPPoE-Profil hinzufügen',
    'ppp.modal.form.edit.ppp-profile'=> 'PPPoE-Profil bearbeiten',


    // PPP Profiles Modal Tabs
    'ppp.profiles.tab.general'=> 'Allgemein',
    'ppp.profiles.tab.protocols'=> 'Protokolle',
    'ppp.profiles.tab.limits'=> 'Limits',
    'ppp.profiles.tab.queue'=> 'Queue',
    'ppp.profiles.tab.scripts'=> 'Skripte',

    // PPP Profiles Modal Form Fields
    'ppp.modal.form.profile.name'=> 'Name',
    'ppp.modal.form.profile.local-address'=> 'Lokale Adresse',
    'ppp.modal.form.profile.remote-address'=> 'Remote-Adresse',
    'ppp.modal.form.profile.use-ipv6'=> 'IPv6 verwenden',
    'ppp.modal.form.profile.use-mpls'=> 'MPLS verwenden',
    'ppp.modal.form.profile.use-comp'=> 'Kompression verwenden',
    'ppp.modal.form.profile.use-enc'=> 'Verschlüsselung verwenden',
    'ppp.modal.form.profile.sess-timeout'=> 'Session-Timeout',
    'ppp.modal.form.profile.idle-timeout'=> 'Idle-Timeout',
    'ppp.modal.form.profile.rate-limit'=> 'Rate-Limit',
    'ppp.modal.form.profile.only-one'=> 'Nur eine',
    'ppp.modal.form.profile.parent-queue'=> 'Übergeordnete Queue',
    'ppp.modal.form.profile.queue-type-rx'=> 'Queue-Typ (Downloads)',
    'ppp.modal.form.profile.queue-type-tx'=> 'Queue-Typ (Uploads)',
    'ppp.modal.form.profile.script-onup'=> 'Bei Verbindung',
    'ppp.modal.form.profile.script-ondown'=> 'Bei Trennung',
    'ppp.modal.form.profile.script-placeholder'=> 'Skript wird beim Auslösen des Ereignisses ausgeführt',
    'ppp.modal.form.migration.confirm'=> 'Profilmigration bestätigen',
    'ppp.modal.form.migration.caption'=> 'Das Löschen der übergeordneten Queue oder des Queue-Typs für dieses Profil kann erforderlich machen, das Profil neu zu erstellen und zugehörige PPP-Secrets neu zuzuweisen. Dieser Vorgang kann störend sein. Möchten Sie fortfahren?',

    // ip.php
    // IP Page
    'ip.title'=> 'IP-Manager',
    'ip.desc'=> 'ARP, Adressen, DHCP, DNS, Pools und zugehörige IP-Dienste verwalten.',

    'ip.arp'=> 'ARP',
    'ip.addresses'=> 'Adressen',
    'ip.cloud'=> 'Cloud',
    'ip.dhcp.client'=> 'DHCP-Client',
    'ip.dhcp.server'=> 'DHCP-Server',
    'ip.dns'=> 'DNS',
    'ip.pool'=> 'Pool',
    'ip.services'=> 'Dienste',
    'ip.upnp'=> 'UPnP',
    'ip.settings'=> 'Einstellungen',
    
    'ip.arp.desc'=> 'ARP-Tabelleneinträge anzeigen und verwalten.',
    'ip.addresses.desc'=> 'IP-Adressen verwalten, die Schnittstellen zugewiesen sind.',
    'ip.cloud.desc'=> 'Cloud/DDNS-Einstellungen. Werte werden vom Router gelesen.',
    'ip.dhcp.client.desc'=> 'DHCP-Clients anzeigen und verwalten.',
    'ip.dhcp.server.desc'=> 'DHCP-Server und Leases konfigurieren.',
    'ip.dns.desc'=> 'DNS-Einstellungen und statische Einträge verwalten.',
    'ip.pool.desc'=> 'Adresspools für DHCP und andere Dienste verwalten.',
    'ip.services.desc'=> 'IP-bezogene Dienste aktivieren oder deaktivieren.',
    'ip.upnp.desc'=> 'Universal Plug and Play-Einstellungen. Werte werden vom Router gelesen.',
    'ip.settings.desc'=> 'Allgemeine IP-Subsystem-Einstellungen.',

    'ip.open.arp'=> 'ARP öffnen',
    'ip.open.addresses'=> 'Adressen öffnen',
    'ip.open.cloud'=> 'Cloud öffnen',
    'ip.open.dhcp.client'=> 'DHCP-Client öffnen',
    'ip.open.dhcp.server'=> 'DHCP-Server öffnen',
    'ip.open.dns'=> 'DNS öffnen',
    'ip.open.pool'=> 'Pool öffnen',
    'ip.open.services'=> 'Dienste öffnen',
    'ip.open.upnp'=> 'UPnP öffnen',
    'ip.open.settings'=> 'Einstellungen öffnen',

    // IP Page - Back Button
    'ip.back-to-ip'=> 'Zurück zum IP-Manager',

    // IP JS strings
    // Addresses
    'ip.addresses.no_addresses' => 'Keine Adressen',
    'ip.addresses.loading' => 'Wird geladen...',
    'ip.addresses.failed_to_contact_api' => 'API konnte nicht erreicht werden',
    'ip.addresses.please_select_one_or_more' => 'Bitte wählen Sie einen oder mehrere Einträge aus',
    'ip.addresses.select_one_to_edit' => 'Wählen Sie genau eine Adresse zum Bearbeiten aus',
    'ip.addresses.action_completed' => 'Aktion %s abgeschlossen',
    'ip.addresses.action_failed' => 'Aktion fehlgeschlagen: %s',
    'ip.addresses.request_failed' => 'Anfrage fehlgeschlagen: %s',
    'ip.addresses.address_added' => 'Adresse hinzugefügt',
    'ip.addresses.address_updated' => 'Adresse aktualisiert',
    'ip.addresses.add_failed' => 'Hinzufügen fehlgeschlagen: %s',
    'ip.addresses.update_failed' => 'Aktualisierung fehlgeschlagen: %s',
    'ip.addresses.page_info' => 'Seite %s / %s (%s)',

    // ARP
    'ip.arp.no_arp_entries' => 'Keine ARP-Einträge',
    'ip.arp.loading' => 'Wird geladen...',
    'ip.arp.failed_to_contact_api' => 'API konnte nicht erreicht werden',
    'ip.arp.please_select_one_or_more' => 'Bitte wählen Sie einen oder mehrere Einträge aus',
    'ip.arp.enable_confirm' => 'Ausgewählte ARP-Einträge aktivieren?',
    'ip.arp.disable_confirm' => 'Ausgewählte ARP-Einträge deaktivieren?',
    'ip.arp.remove_confirm' => 'Ausgewählte ARP-Einträge entfernen?',
    'ip.arp.page_info' => 'Seite %s / %s (%s)',

    // Cloud
    'ip.cloud.failed_to_load' => 'Cloud-Einstellungen konnten nicht geladen werden: %s',
    'ip.cloud.reverted' => 'Änderungen rückgängig gemacht',
    'ip.cloud.applied' => 'Cloud-Einstellungen angewendet',
    'ip.cloud.apply_failed' => 'Anwenden fehlgeschlagen: %s',

    // DHCP Client
    'ip.dhcp.client.no_clients' => 'Keine DHCP-Clients',
    'ip.dhcp.client.failed_to_load' => 'DHCP-Clients konnten nicht geladen werden: %s',
    'ip.dhcp.client.please_select_interface' => 'Bitte wählen Sie eine Schnittstelle aus',
    'ip.dhcp.client.created' => 'DHCP-Client erstellt',
    'ip.dhcp.client.create_failed' => 'Erstellung fehlgeschlagen: %s',
    'ip.dhcp.client.no_entries_selected' => 'Keine Einträge ausgewählt',
    'ip.dhcp.client.enable_completed' => 'Aktivierung abgeschlossen',
    'ip.dhcp.client.enable_failed' => 'Aktivierung fehlgeschlagen: %s',
    'ip.dhcp.client.disable_completed' => 'Deaktivierung abgeschlossen',
    'ip.dhcp.client.disable_failed' => 'Deaktivierung fehlgeschlagen: %s',
    'ip.dhcp.client.remove_confirm' => 'Ausgewählte DHCP-Clients entfernen?',
    'ip.dhcp.client.option_name_code_required' => 'Name und Code erforderlich',
    'ip.dhcp.client.option_created' => 'Option erstellt',
    'ip.dhcp.client.option_create_failed' => 'Erstellung fehlgeschlagen: %s',
    'ip.dhcp.client.no_options' => 'Keine Optionen',

    // DHCP Networks
    'ip.dhcp.networks.no_networks' => 'Keine DHCP-Netzwerke',
    'ip.dhcp.networks.loading' => 'Wird geladen...',
    'ip.dhcp.networks.select_one_to_edit' => 'Bitte wählen Sie ein Netzwerk zum Bearbeiten aus',
    'ip.dhcp.networks.create_not_implemented' => 'Neues Netzwerk erstellen: noch nicht implementiert',
    'ip.dhcp.networks.please_select_remove' => 'Bitte wählen Sie ein oder mehrere Netzwerke zum Entfernen aus',
    'ip.dhcp.networks.remove_confirm' => 'Ausgewählte Netzwerke entfernen?',
    'ip.dhcp.networks.removed' => 'Entfernt',
    'ip.dhcp.networks.remove_failed' => 'Entfernen fehlgeschlagen: %s',
    'ip.dhcp.networks.page_info' => 'Seite %s / %s (%s)',

    // DNS
    'ip.dns.add_server_placeholder' => 'DNS-Server hinzufügen (IP)',
    'ip.dns.remove' => 'Entfernen',
    'ip.dns.loading' => 'Wird geladen...',
    'ip.dns.failed_to_contact_api' => 'API konnte nicht erreicht werden',
    'ip.dns.error_loading' => 'Fehler beim Laden der DNS-Einstellungen',
    'ip.dns.dns_saved' => 'DNS-Einstellungen gespeichert',
    'ip.dns.failed_to_save' => 'Speichern fehlgeschlagen: %s',
    'ip.dns.save_confirm' => 'DNS-Einstellungen speichern?',
    'ip.dns.no_static_entries' => 'Keine statischen Einträge',
    'ip.dns.static_added' => 'Statischer DNS-Eintrag hinzugefügt',
    'ip.dns.static_add_failed' => 'Hinzufügen des statischen Eintrags fehlgeschlagen',
    'ip.dns.performing_action' => '%s wird ausgeführt...',
    'ip.dns.invalid_json' => 'Ungültige JSON-Antwort',
    'ip.dns.request_failed' => 'Anfrage fehlgeschlagen: %s',
    'ip.dns.flush_cache_confirm' => 'Gesamten DNS-Cache leeren?',
    'ip.dns.cache_flushed' => 'Cache geleert',
    'ip.dns.failed_flush_cache' => 'Cache-Leeren fehlgeschlagen: %s',
    'ip.dns.no_cache_entries' => 'Keine Cache-Einträge',

    // Pool
    'ip.pool.no_pools' => 'Keine Pools',
    'ip.pool.please_select_one_or_more' => 'Bitte wählen Sie einen oder mehrere Pools aus',
    'ip.pool.select_one_to_edit' => 'Wählen Sie genau einen Pool zum Bearbeiten aus',
    'ip.pool.name_and_address_required' => 'Name und Adresse sind erforderlich',
    'ip.pool.pool_created' => 'Pool erstellt',
    'ip.pool.create_failed' => 'Erstellung fehlgeschlagen: %s',
    'ip.pool.pool_updated' => 'Pool aktualisiert',
    'ip.pool.update_failed' => 'Aktualisierung fehlgeschlagen: %s',
    'ip.pool.remove_confirm' => 'Ausgewählte Pools entfernen?',
    'ip.pool.action_completed' => 'Aktion %s abgeschlossen',
    'ip.pool.action_failed' => 'Aktion fehlgeschlagen: %s',
    'ip.pool.request_failed' => 'Anfrage fehlgeschlagen: %s',
    'ip.pool.none' => '(keiner)',
    'ip.pool.loading' => 'Wird geladen...',
    'ip.pool.failed_to_contact_api' => 'API konnte nicht erreicht werden',
    'ip.pool.page_info' => 'Seite %s / %s (%s)',

    // IP Settings
    'ip.settings.refreshing_settings' => 'Einstellungen werden aktualisiert...',
    'ip.settings.no_settings_found' => 'Keine IP-Einstellungen gefunden',
    'ip.settings.failed_to_load' => 'IP-Einstellungen konnten nicht geladen werden',
    'ip.settings.updated' => 'IP-Einstellungen aktualisiert',
    'ip.settings.update_failed' => 'Aktualisierung fehlgeschlagen: %s',

    // IP Page - Loading Status
    'ip.loading'=> 'IP-Daten werden geladen...',

    // IP Page Actions
    'ip.actions'=> 'Aktionen',

    // IP Page General Buttons
    'ip.buttons.new'=> 'Hinzufügen',
    'ip.buttons.edit'=> 'Bearbeiten',
    'ip.buttons.refresh'=> 'Aktualisieren',
    'ip.buttons.create'=> 'Erstellen',
    'ip.buttons.save'=> 'Speichern',
    'ip.buttons.cancel'=> 'Abbrechen',
    'ip.buttons.enable'=> 'Aktivieren',
    'ip.buttons.disable'=> 'Deaktivieren',
    'ip.buttons.remove'=> 'Entfernen',
    'ip.buttons.prev'=> 'Zurück',
    'ip.buttons.next'=> 'Weiter',
    'ip.sort.by'=> 'Sortieren nach',
    'ip.sort'=> 'Sortieren',
    'ip.select.all'=> 'Alle auswählen',
    'ip.buttons.flush.cache'=> 'Cache leeren',
    'ip.buttons.add.dns.server'=> 'DNS-Server hinzufügen',


    // IP UPnP Page
    'ip.upnp.enabled'=> 'Aktiviert',
    'ip.upnp.allow-disable-external-iface'=> 'Deaktivierung externer Schnittstelle erlauben',
    'ip.upnp.show-dummy-rule'=> 'Dummy-Regel anzeigen',

    // arp.php
    // IP ARP Page

    // addresses.php
    // IP Addresses Page

    // IP Table Headers
    'ip.table.th.address'=> 'Adresse',
    'ip.table.th.network'=> 'Netzwerk',
    'ip.table.th.iface'=> 'Schnittstelle',
    'ip.table.th.comment'=> 'Kommentar',
    'ip.table.th.dhcp.client.name' => 'Name',
    'ip.table.th.dhcp.client.code-value' => 'Code-Wert',
    'ip.table.th.dhcp.client.client-value' => 'Client-Wert',
    'ip.table.th.dns.name'=> 'Name',
    'ip.table.th.dns.regexp'=> 'Regexp',
    'ip.table.th.dns.type'=> 'Typ',
    'ip.table.th.dns.value'=> 'Wert',
    'ip.table.th.dns.ttl'=> 'TTL',
    'ip.table.th.dns.data'=> 'Daten',

    // IP Address Modal Titles
    'ip.modal.form.add.address'=> 'IP-Adresse hinzufügen',
    'ip.modal.form.edit.address'=> 'IP-Adresse bearbeiten',

    // IP Address Modal Form
    'ip.modal.form.ip.address-mask'=> 'IP-Adresse / Maske',
    'ip.modal.form.ip.network'=> 'Netzwerk',
    'ip.modal.form.iface'=> 'Schnittstelle',
    'ip.modal.form.comment'=> 'Kommentar',
    

    // cloud.php
    // IP Cloud Page

    // IP Cloud Modal Form
    'ip.cloud.enabled'=> 'DDNS aktiviert',
    'ip.cloud.ddns.update.interval'=> 'DDNS-Aktualisierungsintervall',
    'ip.cloud.update.time'=> 'Aktualisierungszeit',
    'ip.cloud.public.ipv4'=> 'Öffentliche IPv4',
    'ip.cloud.public.ipv6'=> 'Öffentliche IPv6',
    'ip.cloud.dns.name' => 'DNS-Name',
    'ip.cloud.use-router-defaults'=> 'Router-Standardwerte verwenden',
    'ip.cloud.yes'=> 'Ja',
    'ip.cloud.no'=> 'Nein',

    // dhcp-client.php
    // IP DHCP Client Page
    'ip.dhcp.client.options'=> 'DHCP-Client',
    'ip.dhcp.client.modal.form.interface'=> 'Schnittstelle',
    'ip.dhcp.client.modal.form.enabled'=> 'Aktiviert',
    'ip.dhcp.client.modal.form.use-peer-dns'=> 'Peer-DNS verwenden',
    'ip.dhcp.client.modal.form.use-peer-ntp'=> 'Peer-NTP verwenden',
    'ip.dhcp.client.modal.form.add-default-route'=> 'Standardroute hinzufügen',
    'ip.dhcp.client.modal.form.default-route-distance'=> 'Standardroute-Distanz',
    'ip.dhcp.client.options2'=> 'DHCP-Client-Optionen',
    'ip.dhcp.client.modal.form.name'=> 'Name',
    'ip.dhcp.client.modal.form.code'=> 'Code',
    'ip.dhcp.client.modal.form.value'=> 'Wert',

   
    // dns.php
    // IP DNS Page

    // IP DNS - Modal Form
    'ip.dns.form.servers'=> 'DNS-Server',
    'ip.dns.form.dynamic-servers'=> 'Dynamische Server',
    'ip.dns.form.use.doh.servers'=> 'DoH-Server verwenden',
    'ip.dns.form.doh.max.server.conn'=> 'DoH Max. Server-Verbindungen',
    'ip.dns.form.doh.max.concurrent.queries'=> 'DoH Max. gleichzeitige Anfragen',
    'ip.dns.form.doh.timeout'=> 'DoH-Timeout (Sekunden)',
    'ip.dns.form.allow-remote.requests'=> 'Remote-Anfragen erlauben',

    'ip.dns.form.cache.size'=> 'Cache-Größe (KB)',
    'ip.dns.form.cache.max-ttl'=> 'Max. TTL des Caches (Sekunden)',
    'ip.dns.form.cache.min-ttl'=> 'Min. TTL des Caches (Sekunden)',
    'ip.dns.form.max.concurrent.queries'=> 'Max. gleichzeitige Anfragen',
    'ip.dns.form.max.concurrent.tcp'=> 'Max. gleichzeitige TCP-Verbindungen',
    'ip.dns.form.query.timeout'=> 'Abfrage-Timeout (Sekunden)',
    'ip.dns.form.cache.used'=> 'Cache verwendet (nur Lesen)',

    'ip.dns.form.add.static.entry'=> 'Statischen DNS-Eintrag hinzufügen',
    'ip.dns.form.add.static.name'=> 'Name',
    'ip.dns.form.add.static.type'=> 'Typ',
    'ip.dns.form.add.static.value'=> 'Wert',
    'ip.dns.form.add.static.ttl'=> 'TTL',
    'ip.dns.form.add.static.regexp'=> 'Regexp',

    // IP DNS - Static DNS
    'ip.dns.static'=> 'Statischer DNS',
    'ip.dns.static.desc'=> 'Statische DNS-Einträge verwalten, die die dynamische Auflösung überschreiben.',

    // IP DNS - Cache Settings
    'ip.dns.cache'=> 'DNS-Cache-Einstellungen',

    // pool.php
    // IP Pool Page

    // IP Pool Table Headers
    'ip.pool.table.th.name'=> 'Name',
    'ip.pool.table.th.ranges'=> 'Bereiche',
    'ip.pool.table.th.comment'=> 'Kommentar',
    'ip.pool.table.th.total-addresses'=> 'Gesamtanzahl Adressen',
    'ip.pool.table.th.used'=> 'Verwendet',
    'ip.pool.table.th.available'=> 'Verfügbar',

    // IP Pool Modal Form
    'ip.pool.modal.form.create.title'=> 'IP-Pool erstellen',
    'ip.pool.modal.form.edit.title'=> 'IP-Pool bearbeiten',
    'ip.pool.modal.form.name'=> 'Name',
    'ip.pool.modal.form.ranges'=> 'Adressbereiche',
    'ip.pool.modal.form.ranges-placeholder'=> 'z. B. 192.168.1.100-192.168.1.200 oder 10.0.0.0/24',
    'ip.pool.modal.form.comment'=> 'Kommentar',
    'ip.pool.modal.form.next-address'=> 'Nächste Adresse',
    'ip.pool.modal.form.total-addresses'=> 'Gesamtanzahl Adressen',
    'ip.pool.modal.form.used'=> 'Verwendet',
    'ip.pool.modal.form.available'=> 'Verfügbar',

    // services.php
    // IP Services Page

    // IP Services Table Headers
    'ip.services.table.th.name'=> 'Name',
    'ip.services.table.th.port'=> 'Port',
    'ip.services.table.th.available-from'=> 'Verfügbar ab',
    'ip.services.table.th.max-sessions'=> 'Max. Sitzungen',
    'ip.services.table.th.protocol'=> 'Protokoll',
    'ip.services.table.th.remote'=> 'Remote',
    'ip.services.table.th.local'=> 'Lokal',

    // IP Services Modal Form
    'ip.services.modal.form.edit.title'=> 'IP-Dienst bearbeiten',
    'ip.services.modal.form.name'=> 'Name',
    'ip.services.modal.form.port'=> 'Port',
    'ip.services.modal.form.available-from'=> 'Verfügbar ab',
    'ip.services.modal.form.max-sessions'=> 'Max. Sitzungen',
    'ip.services.modal.form.protocol'=> 'Protokoll',
    'ip.services.modal.form.remote.address'=> 'Remote-Adresse',
    'ip.services.modal.form.remote.port'=> 'Remote-Port',
    'ip.services.modal.form.local.address'=> 'Lokale Adresse',

    // settings.php
    // IP Settings Page

    // IP Settings Modal Form
    'ip.settings.modal.form.ip-forward'=> 'IP-Forwarding aktiviert',
    'ip.settings.modal.form.ip-send-redirects'=> 'Senden von Redirects aktiviert',
    'ip.settings.modal.form.ip-accept-redirects'=> 'Akzeptieren von Redirects aktiviert',
    'ip.settings.modal.form.ip-secure-redirects'=> 'Sichere Redirects aktiviert',
    'ip.settings.modal.form.ip-accept-source-route'=> 'Accept Source Route aktiviert',
    'ip.settings.modal.form.ip-allow-fast-path'=> 'Fast Path erlauben',
    'ip.settings.modal.form.ip-tcp-syncookies'=> 'TCP Syncookies aktiviert',
    'ip.settings.modal.form.ip-tcp-timestamps'=> 'TCP-Timestamps',
    'ip.settings.modal.form.ip-max-neighbors'=> 'Max. Nachbarn',
    'ip.settings.modal.form.ip-icmp-rate-limit'=> 'ICMP-Rate-Limit',
    'ip.settings.modal.form.ip-arp-timeout'=> 'ARP-Timeout (Sekunden)',
    'ip.settings.modal.form.ip-arp-timeout-help'=> 'Geben Sie das RouterOS-Timeout-Format ein (z. B. 10m, 1h oder 00:10:00). Leer lassen für Standard.',

    // Error pages
    'errors.404.title' => 'Seite nicht gefunden',
    'errors.404.desc' => 'Die angeforderte Seite konnte nicht gefunden werden.',
    'errors.403.title' => 'Verboten',
    'errors.403.desc' => 'Sie haben keine Berechtigung, auf diese Ressource zuzugreifen.',
    'errors.500.title' => 'Serverfehler',
    'errors.500.desc' => 'Auf dem Server ist ein interner Fehler aufgetreten.',
    'errors.back_home' => 'Zurück zur Startseite',
    'errors.more_info' => 'Was ist passiert',
    'errors.contact_admin' => 'Wenn Sie der Meinung sind, dass dies ein Fehler ist, kontaktieren Sie den Administrator der Website.',

]; 
