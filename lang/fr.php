<?php
////////////////////////////////////////////////////////////////////////
// French translations for mTik_Ops                           
// Author: HPY™                                                         
// Version: Next-Generation                                           
////////////////////////////////////////////////////////////////////////

///////////////////////////////////////////////////////////////////////
// [ Instructions ]                                                     
// Copy this file to create other language files in the same format.    
// Translate the strings on the right side of the => operator.         
// Use the same key names for all languages.                            
// IMPORTANT: REMOVE THIS INSTRUCTION COMMENT BLOCK BEFORE COMMITING!
////////////////////////////////////////////////////////////////////////
return [
    // Start of Translations
    // Global
    'language-changed' => 'Langue changée en {lang}',
    'language-search-placeholder' => 'Recherche...',

    // Global Search
    'search.title' => 'Recherche',
    'search.instructions' => 'Tapez un mot-clé ou une phrase pour chercher sur le site.',
    'search.results_header' => 'Résultats de recherche pour "{query}"',
    'search.placeholder' => 'Tapez pour rechercher...',
    'search.no_results' => 'Aucun résultat',
    'search.results' => 'Résultats',
    'search.button' => 'Rechercher',
    'search.hint' => 'Tapez pour voir des suggestions instantanées.',
    'search.quick_links' => 'Liens rapides',
    'search.show' => 'Afficher la recherche',

    
    // Site title and tagline
    'site.title' => 'mTik_Ops', // DO NOT TRANSLATE
    'site.tagline' => 'Gestion centralisée des routeurs',

    // Authentication
    'nav.login' => 'Connexion',
    'nav.logout' => 'Déconnexion',
    'auth.logging_in' => 'Connexion en cours',
    'auth.logging_out' => 'Déconnexion en cours',

    // nav-brand.php
    'nav.brand.user_greeting'=> 'Salut !',

    // nav.php
    'lang.label'=> 'Langue',
    'nav.about' => 'À propos',
    'nav.features' => 'Fonctionnalités',
    'nav.our_team' => 'Équipe',
    'nav.contact' => 'Contact',
    'nav.menu' => 'Menu',
    'nav.dashboard' => 'Tableau de bord',
    'nav.hotspot' => 'Hotspot',
    'nav.ip' => 'IP',
    'nav.ppp' => 'PPP',
    'nav.queues' => 'Files d\'attente',
    'nav.settings' => 'Paramètres',
    'nav.downloads' => 'Téléchargements',

    // index.php
    // Index Page - About Section
    'about.title' => 'Conçu pour MikroTik',
    'about.desc' => 'mTikOps est une plateforme basée sur le navigateur pour gérer les routeurs MikroTik et les hotspots. Elle inclut l\'accès à distance, la gestion des hotspots - impression, PPPoE, et plus encore. Tout dans un système rapide et centralisé.',
    'about.about_us_button' => 'À propos',
    'about.our_team_button' => 'Notre équipe',

    // Index Page - Features Section
    'features.remote.title' => 'Gestion à distance du réseau',
    'features.remote.desc' => 'Surveillez et gérez des routeurs distants, consultez l\'état des interfaces, effectuez des redémarrages et déployez des changements de configuration de manière sécurisée depuis une console unique.',
    'features.hotspot.title' => 'Gestion des hotspots',
    'features.hotspot.desc' => 'Créez et gérez des serveurs hotspot et des profils utilisateurs, émettez des vouchers, surveillez les utilisateurs et sessions actives, et effectuez comptabilité et rapports.',
    'features.troubleshoot.title' => 'Dépannage et configuration',
    'features.troubleshoot.desc' => 'Appliquez et auditez les changements de configuration, exécutez des diagnostics, consultez les journaux et résolvez les problèmes de connectivité avec des outils intégrés.',

    // Index Page - Signup Section
    'signup.title' => 'Commencez avec mTikOps',
    'signup.desc' => 'Créez un compte pour gérer les routeurs, les hotspots et lancer des diagnostics sur votre réseau depuis un seul tableau de bord.',
    'signup.cta' => 'S\'inscrire',

    // Index Page - Contact Section
    'contact.hq' => 'Siège',
    'contact.email' => 'Email',
    'contact.contact' => 'Contact',
    'contact.hq_address' => 'Taguig City, PH 1630',
    'contact.email_addr' => 'noc@mtikops.com',
    'contact.phone' => '+63 (962) 660-6116',

    // Index Page - Footer Section
    'footer.copyright' => 'Copyright &copy; mTikOps {year}',
    'footer.powered' => 'Propulsé par HPY™',
    'modal.confirm.title' => 'Confirmer',
    'modal.confirm.body' => 'Êtes-vous sûr ?',
    'modal.confirm.cancel' => 'Annuler',
    'modal.confirm.ok' => 'Confirmer',

    // Login Page
    'login.title' => 'Connexion',
    'login.desc' => 'Accédez à votre compte mTik_Ops pour gérer les routeurs MikroTik et les hotspots depuis un tableau de bord centralisé.',
    'login.form.title' => 'Connexion à votre compte',
    'login.form.host'=> 'Hôte',
    'login.form.username'=> 'Nom d\'utilisateur',
    'login.form.password'=> 'Mot de passe',
    'login.form.connection_type'=> 'Type de connexion',
    'login.form.connection_type_yes'=> 'Oui (API sécurisée)',
    'login.form.connection_type_no'=> 'Non (API standard)',
    'login.form.port'=> 'Port',
    'login.form.remember'=> 'Se souvenir de moi',
    'login.form.connect'=> 'Se connecter',
    'login.form.cancel'=> 'Annuler',

    // Login Page Placeholders
    'login.form.host_placeholder'=> 'IP du routeur ou nom d\'hôte',
    'login.form.username_placeholder'=> 'Entrez votre nom d\'utilisateur',
    'login.form.password_placeholder'=> 'Entrez votre mot de passe',
    // Login Page Messages
    'login.error.invalid_submission'=> 'Invalid form submission. Please try again.',
    'login.error.missing_fields'=> 'Host, Username and Password are required.',
    'login.error.unable_connect'=> 'Unable to Connect! — Check your credentials and try again.',
    'login.success.connected'=> 'Successfully connected to the router.',
    'login.success.remembered'=> 'Connection details remembered for future logins.',
    'login.info.session_expired'=> 'Your session has expired. Please log in again.',
    'login.info.logged_out'=> 'You have been logged out successfully.',
    'login.info.please_login'=> 'Please log in to continue.',
    'login.button.forgot_password'=> 'Forgot Password?',
    'login.try_again'=> 'Try Again?',

    // Downloads Page
    'downloads.title' => 'Téléchargements',
    'downloads.desc' => 'Téléchargez les installateurs et packages pour les plateformes prises en charge.',
    'downloads.available' => 'Téléchargements disponibles',
    'downloads.coming_soon' => 'Bientôt disponible',
    'downloads.download' => 'Télécharger',
    'downloads.note' => 'Téléversez les installateurs dans le dossier /downloads pour les rendre disponibles.',
    
    // about-us.php
    // About Us Page
    'about-us.title' => 'À propos de nous',
    'about-us.desc' => 'En savoir plus sur mTik_Ops, notre mission et l\'équipe derrière la plateforme.',
    'about-us.overview'=> 'Aperçu',
    'about-us.vision'=> 'Vision',
    'about-us.features'=> 'Fonctionnalités',
    'about-us.tutorials'=> 'Tutoriels',
    'about-us.faqs'=> 'FAQ',
    'about-us.requirements'=> 'Exigences',

    // about-us.php
    // About Us Page Descriptions
    'about-us.overview.desc'=> 'Introduction rapide à mTikOps et ses principales fonctionnalités.',
    'about-us.vision.desc'=> 'Découvrez notre mission et nos objectifs à long terme pour le projet.',
    'about-us.features.desc'=> 'Découvrez les principales fonctionnalités de mTikOps.',
    'about-us.tutorials.desc'=> 'Guides étape par étape et exemples de workflows.',
    'about-us.faqs.desc'=> 'Questions fréquentes et réponses sur mTikOps.',
    'about-us.requirements.desc'=> 'Prérequis et exigences RouterOS pour exécuter mTikOps.',

    // about-us.php
    // About Us Page Buttons
    'about-us.open.overview'=> 'Ouvrir l\'aperçu',
    'about-us.open.vision'=> 'Ouvrir la vision',
    'about-us.open.features'=> 'Ouvrir les fonctionnalités',
    'about-us.open.tutorials'=> 'Ouvrir les tutoriels',
    'about-us.open.faqs'=> 'Ouvrir la FAQ',
    'about-us.open.requirements'=> 'Ouvrir les exigences',

    // About Us - Back Button
    'about-us.back-to-about'=> 'Retour à "À propos de nous"',

    // About Us - Overview Page
    'about-us.overview-page.title'=> 'Aperçu',
    'about-us.overview-page.desc'=> 'mTikOps est une plateforme web légère pour gérer les routeurs MikroTik et les services hotspot depuis un navigateur.',

    // About Us - Vision Page
    'about-us.vision-page.title'=> 'Vision',
    'about-us.vision-page.desc'=> 'Nous visons à simplifier les opérations réseau pour les utilisateurs MikroTik grâce à une interface de gestion intuitive et des outils d\'automatisation.',

    // About Us - Features Page
    'about-us.features-page.title'=> 'Fonctionnalités',
    'about-us.features-page.desc'=> 'Découvrez les fonctionnalités principales de mTikOps.',

    // About Us - Tutorials Page
    'about-us.tutorials-page.title'=> 'Tutoriels',
    'about-us.tutorials-page.desc'=> 'Guides et procédures pour les tâches courantes.',

    // About Us - FAQs Page
    'about-us.faqs-page.title'=> 'FAQ',
    'about-us.faqs-page.desc'=> 'Questions fréquentes et réponses.',

    // About Us - Requirements Page
    'about-us.requirements-page.title'=> 'Prérequis',
    'about-us.requirements-page.desc'=> 'Minimum requirements and compatibility notes.',

    // our-team.php
    // Our Team Page
    'our-team.title'=> 'Notre équipe',
    'our-team.desc'=> 'Rencontrez les personnes derrière mTikOps — développeurs, contributeurs et mainteneurs.',
    'our-team.leadership'=> 'Direction',
    'our-team.developers'=> 'Développeurs',
    'our-team.contributors'=> 'Contributeurs',
    'our-team.advisors'=> 'Conseillers',
    'our-team.careers'=> 'Rejoignez-nous',
    'our-team.contact'=> 'Contact',

    // Our Team Page Descriptions
    'our-team.leadership.desc'=> 'Mainteneurs principaux et responsables du projet qui font avancer mTikOps.',
    'our-team.developers.desc'=> 'Ingénieurs et contributeurs développant des fonctionnalités et des correctifs.', 
    'our-team.contributors.desc'=> 'Contributeurs de la communauté aidant à la documentation, aux tests et au code.',
    'our-team.advisors.desc'=> 'Conseillers et experts soutenant le projet.',
    'our-team.careers.desc'=> 'Postes ouverts et façons de rejoindre l\'équipe.',
    'our-team.contact.desc'=> 'Contactez l\'équipe pour des questions ou une collaboration.',

    // Our Team Page Buttons
    'our-team.open.leadership'=> 'Voir la direction',
    'our-team.open.developers'=> 'Voir les développeurs',
    'our-team.open.contributors'=> 'Voir les contributeurs',
    'our-team.open.advisors'=> 'Voir les conseillers',
    'our-team.open.careers'=> 'Rejoignez-nous',
    'our-team.open.contact'=> 'Contacter l\'équipe',

    // Our Team - Back Button
    'our-team.back-to-team'=> 'Retour à "Notre équipe"',

    // Our Team - Leadership Page
    'our-team.leadership-page.title'=> 'Direction',
    'our-team.leadership-page.desc'=> 'Rencontrez les mainteneurs principaux et les responsables du projet derrière mTikOps.',

    // Our Team - Developers Page
    'our-team.developers-page.title'=> 'Développeurs',
    'our-team.developers-page.desc'=> 'Profils et responsabilités des développeurs contribuant à mTikOps.',

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
    'dashboard.title'=> 'Tableau de bord',
    'dashboard.desc'=> 'Suite de surveillance et journalisation des opérations réseau',

    // Dashboard Buttons
    'dashboard.show'=> 'Afficher le tableau de bord',
    'dashboard.button.refresh'=> 'Actualiser',
    'dashboard.button.prev'=> 'Précédent',
    'dashboard.button.next'=> 'Suivant',

    // Dashboard Network Monitoring
    'dashboard.monitoring.title'=> 'Surveillance réseau',
    'dashboard.monitoring.desc'=> 'Surveillance en temps réel des performances réseau, du temps de fonctionnement et de l\'état des appareils sur votre infrastructure MikroTik.',
    'dashboard.ltmg.title'=> 'Graphique de surveillance du trafic en direct',
    'dashboard.fullscreen'=> 'Plein écran',
    'dashboard.loading'=> 'Chargement des données...',
    'dashboard.not-monitoring'=> 'Non surveillé',

    // Dashboard System Logging
    'dashboard.logging.title'=> 'Journalisation système',
    'dashboard.logging.desc'=> 'Journalisation centralisée et alertes pour les événements système et erreurs',
    'dashboard.system.logs'=> 'Journaux système',
    'dashboard.critical.logs'=> 'Journaux critiques',

    // Dashboard Device Information
    'dashboard.device.info.title'=> 'Informations sur l\'appareil',
    'dashboard.system.resources'=> 'Ressources système',
    'dashboard.system.information'=> 'Informations système',
    'dashboard.system.platform'=> 'Informations RouterBOARD',

    // Device info JS strings
    'device.system_identity' => 'Identité système',
    'device.routeros_version' => 'Version RouterOS',
    'device.uptime' => 'Temps d\'activité',
    'device.board' => 'Carte',
    'device.health' => 'État',
    'device.temp_label' => 'Temp :',
    'device.voltage_label' => 'Tension :',
    'device.unknown' => 'Inconnu',
    'device.na' => 'n/d',
    'device.cpu' => 'CPU',
    'device.memory' => 'Mémoire',
    'device.disk' => 'Disque',
    'device.board_model' => 'Modèle de carte',
    'device.serial' => 'Numéro de série',
    'device.architecture' => 'Architecture',
    'device.cpu_label' => 'CPU',
    'device.cores' => 'cœurs',
    'device.build' => 'Build',
    'device.failed_load' => 'Échec du chargement des informations système',
    // Generate users preview JS strings
    'generate.generating' => 'Génération en cours...',
    'generate.print_fetch_failed' => 'Échec de récupération d\'impression : %s',
    'generate.network_not_ok' => 'Réponse réseau incorrecte : %s',
    'generate.generation_failed' => 'Échec de la génération : %s',
    'generate.unknown_error' => 'Erreur inconnue',
    'generate.preview_not_available' => 'Aperçu non disponible',
    'generate.failed_print_dialog' => 'Échec de l\'ouverture de la boîte d\'impression native : %s',
    'generate.cached_cleared' => 'Lot mis en cache effacé',
    'generate.failed_clear_cached' => 'Échec de la suppression du lot mis en cache',
    'generate.preview_failed' => 'Échec de l\'aperçu',
    'generate.preview' => 'Aperçu',
    'generate.unexpected_error' => 'Erreur inattendue : %s',
    'generate.generated' => '%s utilisateurs générés',
    'generate.request_failed' => 'Échec de la requête lors de la génération des vouchers.',
    'generate.generate' => 'Générer',

    // Dashboard Hotspot Active Sessions
    'dashboard.hotspot.as.title'=> 'Sessions Hotspot actives',
    'dashboard.ppp.as.title'=> 'Sessions PPPoE actives',
    // JS dashboard strings (used by client-side locale export)
    'dashboard.no_active_sessions' => 'Aucune session active',
    'dashboard.no_ppp_active_sessions' => 'Aucune session PPP active',
    'dashboard.active_session' => 'session active',
    'dashboard.active_sessions' => 'sessions actives',
    'dashboard.name' => 'Nom',
    'dashboard.address' => 'Adresse',
    'dashboard.uptime' => 'Temps d\'activité',
    'dashboard.service' => 'Service',
    'dashboard.not_monitoring' => 'Non surveillé',
    'dashboard.more_format' => '... et %d de plus',
    'dashboard.unable_load_active' => 'Impossible de charger les sessions actives',
    'dashboard.unable_load_ppp' => 'Impossible de charger les sessions PPP actives',

    // hotspot.php
    // Hotspot Page
    'hotspot.title'=> 'Gestionnaire Hotspot',
    'hotspot.desc'=> 'Gérer les utilisateurs hotspot, les profils, les sessions actives et les hôtes.',
    'hotspot.users'=> 'Utilisateurs',
    'hotspot.profiles'=> 'Profils',
    'hotspot.active'=> 'Actives',
    'hotspot.hosts'=> 'Hôtes',

    // Hotspot Page Descriptions
    'hotspot.users.desc'=> 'Créer, modifier et gérer les comptes utilisateur hotspot.',
    'hotspot.profiles.desc'=> 'Gérer les profils de bande passante, de session et de limitation de débit pour les utilisateurs.',
    'hotspot.active.desc'=> 'Afficher et déconnecter les sessions hotspot actives.',
    'hotspot.hosts.desc'=> 'Inspecter et gérer les appareils connectés au hotspot.',

    // Hotspot Page Buttons
    'hotspot.open.users'=> 'Ouvrir les utilisateurs',
    'hotspot.open.profiles'=> 'Ouvrir les profils',
    'hotspot.open.active'=> 'Ouvrir les actives',
    'hotspot.open.hosts'=> 'Ouvrir les hôtes',

    // Hotspot - Back Button
    'hotspot.back-to-hotspot'=> 'Retour au gestionnaire Hotspot',

    // Hotspot General Buttons
    'hotspot.action.button'=> 'Actions',
    'hotspot.generate.button'=> 'Générer',
    'hotspot.add-user.button'=> 'Ajouter un utilisateur',
    'hotspot.enable.button'=> 'Activer',
    'hotspot.add-profile.button'=> 'Ajouter un profil',
    'hotspot.edit.button'=> 'Modifier',
    'hotspot.remove.button'=> 'Supprimer',
    'hotspot.disable.button'=> 'Désactiver',
    'hotspot.export.users'=> 'Exporter les utilisateurs',
    'hotspot.export.button'=> 'Exporter',
    'hotspot.button.refresh'=> 'Actualiser',
    'hotspot.button.prev'=> 'Précédent',
    'hotspot.button.next'=> 'Suivant',
    'hotspot.sort.by'=> 'Trier par',
    'hotspot.sort.profiles'=> 'Trier par profil',
    'hotspot.sort.comments'=> 'Trier par commentaires',

    // Hotspot Table Headers
    'hotspot.table.th.select'=> 'Tout sélectionner',
    'hotspot.table.th.server'=> 'Nom du serveur',
    'hotspot.table.th.user'=> 'Utilisateur',
    'hotspot.table.th.name'=> 'Nom',
    'hotspot.table.th.address'=> 'Adresse',
    'hotspot.table.th.mac'=> 'Adresse MAC',
    'hotspot.table.th.profile'=> 'Profil',
    'hotspot.table.th.uptime'=> 'Temps d\'activité',
    'hotspot.table.th.bytes-in'=> 'Octets entrants',
    'hotspot.table.th.bytes-out'=> 'Octets sortants',
    'hotspot.table.th.comment'=> 'Commentaire',
    'hotspot.table.th.to-address'=> 'Vers l\'adresse',
    'hotspot.table.th.last-seen'=> 'Dernière visite',
    'hotspot.status.loading'=> 'Chargement des utilisateurs Hotspot...',

    // Hotspot JS: hosts, profiles, users, modals
    // Hosts list
    'hotspot.hosts.no_hosts' => 'Aucun hôte',
    'hotspot.hosts.loading' => 'Chargement...',
    'hotspot.hosts.failed_to_contact_api' => 'Échec de contact avec l\'API',
    'hotspot.hosts.page_info' => 'Page %s / %s (%s)',

    // Profiles list
    'hotspot.profiles.no_profiles' => 'Aucun profil',
    'hotspot.profiles.loading' => 'Chargement...',
    'hotspot.profiles.failed_to_load' => 'Échec du chargement des profils',
    'hotspot.profiles.failed_to_contact_api' => 'Échec de contact avec l\'API',
    'hotspot.profiles.no_pools' => '(aucun pool)',
    'hotspot.profiles.no_queues' => '(aucune file)',
    'hotspot.profiles.no_types' => '(aucun type)',
    'hotspot.profiles.select' => 'Sélectionner...',
    'hotspot.profiles.default' => 'par défaut',
    'hotspot.profiles.no_profiles_option' => '(aucun profil)',
    'hotspot.profiles.page_info' => 'Page %s / %s (%s)',
    'hotspot.profiles.name_required' => 'Le nom est requis',
    'hotspot.profiles.added' => 'Profil ajouté',
    'hotspot.profiles.add_failed' => 'Échec de l\'ajout du profil : %s',
    'hotspot.profiles.server_contact_failed' => 'Échec de contact avec le serveur',
    'hotspot.profiles.id_missing' => 'ID du profil manquant',
    'hotspot.profiles.updated' => 'Profil mis à jour',
    'hotspot.profiles.update_failed' => 'Échec de la mise à jour du profil : %s',
    'hotspot.profiles.removed' => 'Profil supprimé',
    'hotspot.profiles.remove_failed' => 'Échec de la suppression du profil : %s',
    'hotspot.profiles.select_remove' => 'Sélectionnez un profil à supprimer',
    'hotspot.profiles.remove_confirm' => 'Êtes-vous sûr de vouloir supprimer le profil sélectionné ?',
    'hotspot.profiles.remove_confirm_title' => 'Confirmer',
    
    // Admin Control Panel translations
    'admin.title' => 'Panneau d\'administration',
    'admin.desc' => 'Centre de contrôle',
    'admin.maintenance' => 'Maintenance',
    'admin.maintenance.desc' => 'Activer/désactiver l\'avertissement de maintenance pour les visiteurs.',
    'admin.page_access' => 'Contrôles d\'accès aux pages',
    'admin.page_access.desc' => 'Autoriser ou interdire l\'accès des utilisateurs à des sections entières de l\'application.',
    'admin.view_logs' => 'Voir les journaux',
    'admin.logs.title' => 'Journaux d\'accès admin',
    'admin.save' => 'Enregistrer',
    'admin.saved' => 'Enregistré',
    'admin.save_failed' => 'Échec de l\'enregistrement',
    'admin.save_error' => 'Échec de la sauvegarde des paramètres',
    'admin.load_logs_failed' => 'Échec du chargement des journaux',
    'admin.access_denied' => 'Vous n\'avez pas la permission d\'accéder au panneau d\'administration.',
    'access.restricted.title' => 'Accès restreint',
    'access.restricted.desc' => 'Cette section est actuellement désactivée',
    'admin.section_disabled' => 'Section désactivée par l\'administrateur',
    'nav.disabled' => 'Désactivé',
    // Maintenance toggle JS strings
    'maintenance.toast' => 'Mode maintenance' . '<br/><br/>' . 'Les fonctions sont limitées lorsque le mode maintenance est activé.',
    'maintenance.set_failed' => 'Échec du paramétrage du mode maintenance',

    // Users modals and export
    'hotspot.modals.no_servers' => '(aucun serveur)',
    'hotspot.modals.no_profiles' => '(aucun profil)',
    'hotspot.modals.please_select_export' => 'Veuillez sélectionner un ou plusieurs utilisateurs à exporter',
    'hotspot.modals.select_at_least_one_field' => 'Sélectionnez au moins un champ à exporter',
    'hotspot.modals.no_users_selected' => 'Aucun utilisateur sélectionné',
    'hotspot.modals.no_data_to_export' => 'Aucune donnée à exporter',
    'hotspot.modals.export_started' => 'Exportation démarrée',
    'hotspot.modals.export_failed' => 'Échec de l\'exportation',
    'hotspot.modals.add_user_title' => 'Ajouter un utilisateur Hotspot',
    'hotspot.modals.edit_user_title' => 'Modifier l\'utilisateur Hotspot',
    'hotspot.modals.create_button' => 'Créer',
    'hotspot.modals.update_button' => 'Mettre à jour',
    'hotspot.modals.failed_load_user' => 'Échec du chargement des données utilisateur',
    'hotspot.modals.select_one_to_edit' => 'Veuillez sélectionner exactement un utilisateur à modifier',
    'hotspot.modals.user_updated' => 'Utilisateur mis à jour',
    'hotspot.modals.user_created' => 'Utilisateur créé',
    'hotspot.modals.create_update_failed' => 'Échec création/mise à jour',
    'hotspot.modals.create_request_failed' => 'Échec de la requête de création',

    // Users list
    'hotspot.users.no_users' => 'Aucun utilisateur',
    'hotspot.users.loading' => 'Chargement...',
    'hotspot.users.empty_response' => 'Réponse vide',
    'hotspot.users.failed_to_contact_api' => 'Échec de contact avec l\'API',
    'hotspot.users.select_one_or_more' => 'Veuillez sélectionner un ou plusieurs utilisateurs.',
    'hotspot.users.remove_confirm' => 'Supprimer les utilisateurs sélectionnés ? Cette action est irréversible.',
    'hotspot.users.action_completed' => 'Action "%s" terminée. Succès : %s/%s',
    'hotspot.users.action_failed' => 'Action échouée : %s',
    'hotspot.users.request_failed' => 'Requête échouée',
    'hotspot.users.sort_profiles' => 'Trier les profils',
    'hotspot.users.sort_comments' => 'Trier les commentaires',
    'hotspot.users.select_profiles_placeholder' => 'Trier les profils',
    'hotspot.users.select_comments_placeholder' => 'Trier les commentaires',

    // Hotspot JS helper strings
    'hotspot.no_active_entries' => 'Aucune entrée active',
    'hotspot.loading' => 'Chargement...',
    'hotspot.failed_to_contact_api' => 'Échec de contact avec l\'API',
    'hotspot.page_info' => 'Page %s / %s (%s)',

    // Hotspot Modal Tabs and Titles
    'hotspot.modal.title.generate'=> 'Générer utilisateurs / bons',
    'hotspot.modal.general.tab'=> 'Général',
    'hotspot.modal.printing.tab'=> 'Impression',
    'hotspot.modal.stats.tab'=> 'Statistiques',
    'hotspot.modal.queueing.tab'=> 'Mise en file',
    'hotspot.modal.scripts.tab'=> 'Scripts',

    // Hotspot Modal Form Generate / Add User - General Tab
    'hotspot.modal.form.qty'=> 'Quantité',
    'hotspot.modal.form.server'=> 'Serveur Hotspot',
    'hotspot.modal.form.username'=> 'Nom d\'utilisateur',
    'hotspot.modal.form.password'=> 'Mot de passe',
    'hotspot.modal.form.user-type'=> 'Type d\'utilisateur',
    'hotspot.modal.form.code-length'=> 'Longueur du code',
    'hotspot.modal.form.characters'=> 'Caractères',
    'hotspot.modal.form.user-profile'=> 'Profil utilisateur',
    'hotspot.modal.form.comment'=> 'Commentaire',
    'hotspot.modal.form.optional-comment'=> 'Commentaire optionnel',
    'hotspot.modal.form.mac-address'=>  'Adresse MAC',
    'hotspot.modal.form.time-limit'=>  'Limite de temps',
    'hotspot.modal.form.data-limit'=>  'Limite de données',

    // Hotspot Modal Form Generate - Printing Tab
    'hotspot.modal.form.hotspot-name'=> 'Nom du hotspot',
    'hotspot.modal.form.hotspot-dns'=> 'DNS',
    'hotspot.modal.form.hotspot-currency'=> 'Devise',
    'hotspot.modal.form.hotspot-select-currency'=> 'Sélectionner la devise',
    'hotspot.modal.form.hotspot-price'=> 'Prix',
    'hotspot.modal.form.hotspot-include-comment'=> 'Inclure le commentaire',
    'hotspot.modal.form.hotspot-include-comment-desc'=> 'Inclure le commentaire généré sur le bon imprimé',
    'hotspot.modal.form.hotspot-template'=> 'Modèle',

    // Hotspot Modal Form Generate - Printing Placeholders
    'hotspot.modal.form.hotspot-name-placeholder'=> 'Mon Hotspot',
    'hotspot.modal.form.hotspot-dns-placeholder'=> 'hotspot.mtikops.com',
    'hotspot.modal.form.hotspot-price-placeholder'=> 'Prix par bon',

    // Hotspot Modal Form Generate - User-Type
    'hotspot.modal.form.user-type-regular'=> 'Nom d\'utilisateur & mot de passe',
    'hotspot.modal.form.user-type-voucher'=> 'Nom d\'utilisateur = Mot de passe',

    // Hotspot Modal Form Generate - Characters
    'hotspot.modal.form.characters-lower'=> 'abcd (minuscules)',
    'hotspot.modal.form.characters-upper'=> 'ABCD (MAJUSCULES)',
    'hotspot.modal.form.characters-mixed'=> 'AbCd (Mixte)',
    'hotspot.modal.form.characters-num'=> '1234 (Chiffres)',
    'hotspot.modal.form.characters-lower-num'=> 'a1b2 (minuscules & chiffres)',
    'hotspot.modal.form.characters-upper-num'=> 'A1B2 (MAJUSCULES & chiffres)',
    'hotspot.modal.form.characters-mixed-num'=> 'aA1bB2 (Mixte & chiffres)',

    // Hotspot Modal Form Stats - Stats Tab
    'hotspot.modal.form.stats.uptime'=> 'Temps d\'activité',
    'hotspot.modal.form.stats.bytes_in'=> 'Octets entrants',
    'hotspot.modal.form.stats.bytes_out'=> 'Octets sortants',
    'hotspot.modal.form.stats.limit-uptime'=> 'Limite de temps d\'activité',
    'hotspot.modal.form.stats.limit-bytes_total'=> 'Limite octets totale',
    'hotspot.modal.form.stats.user-code'=> 'Code utilisateur',
    'hotspot.modal.form.stats.expire-date'=> 'Date d\'expiration',

    // Hotspot Modal Form Misc
    'hotspot.modal.form.loading' => 'Chargement des données...',

    // Hotspot Modal Form Buttons
    'hotspot.modal.form.button.generate-print'=> 'Générer et imprimer',
    'hotspot.modal.form.button.generate'=> 'Générer seulement',
    'hotspot.modal.form.button.clear-cached-batch'=> 'Effacer le lot mis en cache',
    'hotspot.modal.form.button.close'=> 'Fermer',
    'hotspot.modal.form.button.create'=> 'Créer',
    'hotspot.modal.form.button.cancel'=> 'Annuler',

    // profiles.php
    // Hotspot User Profiles Page
    'hotspot.user.profiles.title'=> 'Profils utilisateurs',
    'hotspot.user.profiles.desc'=> 'Gérer les profils de bande passante, de session et de limitation pour les utilisateurs.',

    // Hotspot User Profiles Table Headers
    'hotspot.user.profiles.th.name'=> 'Nom',
    'hotspot.user.profiles.th.shared-users'=> 'Utilisateurs partagés',
    'hotspot.user.profiles.th.rate-limit'=> 'Limite de débit',
    'hotspot.user.profiles.th.idle-timeout'=> 'Délai d\'inactivité',
    'hotspot.user.profiles.th.keepalive-timeout'=> 'Délai Keepalive',
    'hotspot.user.profiles.th.queue-type'=> 'Type de file',

    // Hotspot User Profiles Modal Form
    'hotspot.user.profiles.modal.title.add-profile'=> 'Ajouter un profil',

    // Hotspot User Profile Form Fields - General Tab
    'hotspot.user.profiles.form.name'=> 'Nom du profil',
    'hotspot.user.profiles.form.pool'=> 'Pool d\'adresses',
    'hotspot.user.profiles.form.rate-limit-rx'=> 'Limite (RX)',
    'hotspot.user.profiles.form.rate-limit-tx'=> 'Limite (TX)',
    'hotspot.user.profiles.form.shared-users'=> 'Utilisateurs partagés',
    'hotspot.user.profiles.form.expiry-mode'=> 'Mode d\'expiration',
    'hotspot.user.profiles.form.expiry-duration'=> 'Durée d\'expiration',
    'hotspot.user.profiles.form.lock-device'=> 'Verrouiller sur l\'appareil',
    'hotspot.user.profiles.form.lock-server'=> 'Verrouiller sur le serveur',
    'hotspot.user.profiles.form.comment'=> 'Commentaire',

    // Expiry Mode Options
    'hotspot.user.profiles.form.expiry-mode_none'=> 'Aucun',
    'hotspot.user.profiles.form.expiry-mode_remove'=> 'Supprimer',
    'hotspot.user.profiles.form.expiry-mode_notice'=> 'Avertir',
    'hotspot.user.profiles.form.expiry-mode_remove_record'=> 'Supprimer et enregistrer',
    'hotspot.user.profiles.form.expiry-mode_remove_notice'=> 'Supprimer et avertir',

    // Hotspot User Profile Form Fields - Queue Tab
    'hotspot.user.profiles.form.parent-queue'=> 'File parente',
    'hotspot.user.profiles.form.queue-type'=> 'Type de file',

    // Hotspot User Profiles Form Fields - Scripts Tab
    'hotspot.user.profiles.form.on-login-script'=> 'Script à la connexion',
    'hotspot.user.profiles.form.on-login-script_placeholder'=> 'Script optionnel à exécuter à la connexion',
    'hotspot.user.profiles.form.on-logout-script'=> 'Script à la déconnexion',
    'hotspot.user.profiles.form.on-logout-script_placeholder'=> 'Script optionnel à exécuter à la déconnexion',

    // Hotspot User Profile Modal - Edit Profile
    'hotspot.user.profile.edit'=> 'Modifier le profil',
    'hotspot.user.profile.select.profile'=> 'Sélectionner un profil',
    'hotspot.user.profile.select.profile.desc'=> 'Choisissez un profil à modifier. Après sélection, l\'éditeur complet s\'ouvrira.',
    'hotspot.user.profile.button.cancel'=> 'Annuler',
    'hotspot.user.profile.button.save'=> 'Enregistrer',

    // Hotspot User Profile Modal - Remove Profile
    'hotspot.user.profiles.remove'=> 'Supprimer le profil',
    'hotspot.user.profiles.remove-select'=> 'Sélectionner le profil à supprimer',
    'hotspot.user.profiles.remove-warning'=> 'Cette action est irréversible. Assurez-vous de vouloir supprimer le profil sélectionné.',
    'hotspot.user.profiles.remove.button-cancel'=> 'Annuler',
    'hotspot.user.profiles.remove.button-remove'=> 'Supprimer',

    // Hotspot Export Users Modal
    'hotspot.export.user.desc'=> 'Sélectionnez les champs à inclure dans l\'export. Seuls les utilisateurs sélectionnés seront exportés.',
    'hotspot.export.user.name'=> 'Nom',
    'hotspot.export.user.price'=> 'Prix',
    'hotspot.export.user.password'=> 'Mot de passe',
    'hotspot.export.user.profile'=> 'Profil',
    'hotspot.export.user.comment'=> 'Commentaire',
    'hotspot.export.user.inc-header'=> 'Inclure les en-têtes',
    'hotspot.export.user.column-order'=> 'Ordre des colonnes',
    'hotspot.export.user.column-up'=> 'Haut',
    'hotspot.export.user.column-down'=> 'Bas',
    'hotspot.export.user.column-desc'=> 'Sélectionnez un champ et utilisez Haut/Bas pour changer l\'ordre des colonnes.',
    'hotspot.export.user.button-cancel'=> 'Annuler',
    'hotspot.export.user.button-download'=> 'Télécharger CSV',

    // Hotspot Print Preview Modal
    'hotspot.print.preview.title'=> 'Aperçu avant impression',
    'hotspot.print.preview.desc'=> 'Aperçu des utilisateurs sélectionnés avant impression.',
    'hotspot.print.preview.button-cancel'=> 'Annuler',
    'hotspot.print.preview.button-close'=> 'Fermer',
    'hotspot.print.preview.button-print'=> 'Enregistrer et imprimer',
    

    // active.php
    // Hotspot Active Sessions Page

    // hosts.php
    // Hotspot Hosts Page

    // settings.php
    // Hotspot Settings Page
    'settings.title'=> 'Paramètres',
    'settings.desc'=> 'Configurer l\'identité de l\'appareil, les services système et les actions de maintenance.',
    'settings.identity'=> 'Identité',
    'settings.ntp'=> 'NTP',
    'settings.files'=> 'Fichiers',
    'settings.users'=> 'Utilisateurs',
    'settings.scheduler'=> 'Planificateur',
    'settings.scripts'=> 'Scripts',
    'settings.reset'=> 'Réinitialiser',
    'settings.reboot'=> 'Redémarrer',
    'settings.shutdown'=> 'Arrêter',

    // Settings Page Buttons
    //'settings.open.identity'=> 'Ouvrir l\'identité',
    //'settings.open.ntp'=> 'Ouvrir NTP',
    'settings.open.files'=> 'Ouvrir les fichiers',
    'settings.open.users'=> 'Gérer les utilisateurs',
    'settings.open.scheduler'=> 'Ouvrir le planificateur',
    'settings.open.scripts'=> 'Ouvrir les scripts',
    //'settings.open.reset'=> 'Reset',
    //'settings.open.reboot'=> 'Reboot',
    //'settings.open.shutdown'=> 'Shutdown',

    // SETTINGS GENERAL BUTTONS
    'settings.buttons.upload'=> 'Téléverser',
    'settings.buttons.delete'=> 'Supprimer',
    'settings.buttons.refresh'=> 'Actualiser',
    'settings.buttons.save'=> 'Enregistrer',
    'settings.buttons.cancel'=> 'Annuler',
    'settings.buttons.close'=> 'Fermer',
    'settings.buttons.edit'=> 'Modifier',
    'settings.buttons.add'=> 'Ajouter',
    'settings.buttons.remove'=> 'Supprimer',
    'settings.buttons.prev'=> 'Précédent',
    'settings.buttons.next'=> 'Suivant',
    'settings.sort.by'=> 'Trier par',
    'settings.sort' => 'Trier',

    // Settings Page - Back Button
    'settings.back-to-settings'=> 'Retour aux paramètres',

    // Settings Page - Actions
    'settings.actions'=> 'Actions',

    // Settings Page - Loading
    'settings.loading'=> 'Chargement des paramètres...',

    // Settings Page Descriptions
    'settings.identity.desc'=> 'Afficher et modifier l\'identité de l\'appareil et les informations système de base.',
    'settings.ntp.desc'=> 'Configurer les paramètres NTP pour une synchronisation horaire précise.',
    'settings.files.desc'=> 'Gérer les fichiers et scripts téléversés sur l\'appareil.',
    'settings.users.desc'=> 'Gérer les utilisateurs système et leurs droits d\'accès.',
    'settings.scheduler.desc'=> 'Créer des tâches planifiées pour la maintenance et l\'automatisation.',
    'settings.scripts.desc'=> 'Gérer et exécuter des scripts personnalisés sur l\'appareil.',
    'settings.reset.desc'=> 'Réinitialiser la configuration aux valeurs par défaut. À utiliser avec prudence.',
    'settings.reboot.desc'=> 'Redémarrer l\'appareil à distance. Assurez-vous que tous les changements sont enregistrés.',
    'settings.shutdown.desc'=> 'Arrêter l\'appareil à distance en toute sécurité. À utiliser avec prudence.',

    // Settings Table Headers
    'settings.table.th.name'=> 'Nom',
    'settings.table.th.group'=> 'Groupe',
    'settings.table.th.last-login'=> 'Dernière connexion',
    'settings.table.th.comment'=> 'Commentaire',
    'settings.table.th.role'=> 'Rôle',
    'settings.table.th.select'=> 'Tout sélectionner',
    'settings.table.th.username'=> 'Nom d\'utilisateur',
    'settings.table.th.password'=> 'Mot de passe',
    'settings.table.th.actions'=> 'Actions',
    'settings.table.th.next-run'=> 'Prochaine exécution',
    'settings.table.th.interval'=> 'Intervalle',
    'settings.table.th.enabled'=> 'Activé',
    'settings.table.th.size'=> 'Taille',
    'settings.table.th.owner'=> 'Propriétaire',
    'settings.table.th.date'=> 'Date',

   
    // Settings Page - Identity
    'settings.identity.placeholder'=> 'Entrez l\'identité du système',
    'settings.identity.caption'=> 'Ceci est le nom affiché dans les journaux et pour l\'identification réseau.',

    // Settings Page - Identity Buttons
    'settings.identity.save'=> 'Enregistrer l\'identité',
    'settings.identity.refresh'=> 'Actualiser',

    // Settings Page - NTP Modal
    'settings.ntp.enabled'=> 'Activé',
    'settings.ntp.enabled-yes'=> 'Activé',
    'settings.ntp.enabled-no'=> 'Désactivé',
    'settings.ntp.mode'=> 'Mode',
    'settings.ntp.mode-broadcast'=> 'Diffusion',
    'settings.ntp.mode-manycast'=> 'Manycast',
    'settings.ntp.mode-multicast'=> 'Multidiffusion',
    'settings.ntp.mode-unicast'=> 'Unicast',
    'settings.ntp.server'=> 'Serveurs NTP',
    'settings.ntp.server-add'=> 'Ajouter un serveur',
    'settings.ntp.server-refresh'=> 'Actualiser',
    'settings.ntp.server-save'=> 'Enregistrer',

    // Settings Page - NTP Status
    'settings.ntp.status'=> 'État',
    'settings.ntp.freq.drift'=> 'Dérive de fréquence',
    'settings.ntp.synced.server'=> 'Serveur synchronisé',
    'settings.ntp.synced.stratum'=> 'Stratum synchronisé',
    'settings.ntp.system.offset'=> 'Décalage système',

    // Settings Page - Files
    'settings.files.title'=> 'Gestionnaire de fichiers',
    'settings.files.desc'=> 'Téléverser, télécharger et gérer les fichiers stockés sur l\'appareil.',


    // Settings Page - Users
    'settings.users.title'=> 'Gestion des utilisateurs',
    'settings.users.desc'=> 'Créer, modifier et gérer les utilisateurs système et leurs droits d\'accès.',

    // Settings Page - Scheduler
    'settings.scheduler.title'=> 'Planificateur',
    'settings.scheduler.desc'=> 'Créer et gérer des tâches planifiées pour la maintenance et l\'automatisation.',

    // Settings Page - Scripts
    'settings.scripts.title'=> 'Scripts',
    'settings.scripts.desc'=> 'Créer, modifier et exécuter des scripts personnalisés sur l\'appareil.',

    // Settings Page - Reset
    // Reset Modal
    'settings.reset.type'=> 'Type de réinitialisation',
    'settings.reset.config'=> 'Réinitialiser la configuration (conserver les fichiers utilisateur)',
    'settings.reset.all'=> 'Réinitialisation d\'usine (effacer tout, recharger les valeurs par défaut)',
    'settings.reset.delay'=> 'Délai (secondes)',
    'settings.reset.delay.desc'=> 'Mettez 0 pour exécuter immédiatement avec le bouton Programmer, ou cliquez sur "Réinitialiser maintenant" pour exécuter immédiatement.',

    //Reset Buttons
    'settings.reset.button.schedule'=> 'Planifier la réinitialisation',
    'settings.reset.button.reset-now'=> 'Réinitialiser maintenant',

    // Settings Page - Reboot
    // Reboot Modal
    'settings.reboot.delay'=> 'Délai (secondes)',
    'settings.reboot.delay.desc'=> 'Mettez 0 pour redémarrer immédiatement avec le bouton Programmer, ou cliquez sur "Redémarrer maintenant" pour forcer le redémarrage immédiat.',

    // Reboot Buttons
    'settings.reboot.button.schedule'=> 'Planifier le redémarrage',
    'settings.reboot.button.reboot-now'=> 'Redémarrer maintenant',

    // Settings Page - Shutdown
    // Shutdown Modal
    'settings.shutdown.delay'=> 'Délai (secondes)',
    'settings.shutdown.delay.desc'=> 'Mettez 0 pour arrêter immédiatement avec le bouton Programmer, ou cliquez sur "Arrêter maintenant" pour forcer l\'arrêt immédiat.',

    // Shutdown Buttons
    'settings.shutdown.button.schedule'=> 'Planifier l\'arrêt',
    'settings.shutdown.button.shutdown-now'=> 'Arrêter maintenant',


    // queues.php
    // Queues Page
    'queues.title'=> 'Gestion des files d\'attente',
    'queues.desc'=> 'Gérer les files simples, les arbres de files et les types de files.',

    'queues.simple'=> 'Simple',
    'queues.tree'=> 'Arbre',
    'queues.types'=> 'Types',
    'queues.simple-queue'=> 'Files simples',
    'queues.queue-tree'=> 'Arbres de files',
    'queues.queue-types'=> 'Types de files',

    // Queues Page Descriptions
    'queues.simple.desc'=> 'Créer et gérer des files simples par hôte/cible.',
    'queues.tree.desc'=> 'Gérer des arbres de files hiérarchiques pour le shaping avancé.',
    'queues.types.desc'=> 'Définir et gérer les types de files et les classificateurs de paquets.',

    // Queues Page Buttons
    'queues.open.simple'=> 'Ouvrir les files simples',
    'queues.open.tree'=> 'Ouvrir les arbres de files',
    'queues.open.types'=> 'Ouvrir les types de files',

    // Queues Page - Back Button
    'queues.back-to-queues'=> 'Retour au gestionnaire de files d\'attente',

    // Queues General Buttons
    'queues.button.new'=> 'Nouveau',
    'queues.button.edit'=> 'Modifier',
    'queues.button.enable'=> 'Activer',
    'queues.button.disable'=> 'Désactiver',
    'queues.button.remove'=> 'Supprimer',
    'queues.button.refresh'=> 'Actualiser',
    'queues.button.pause-polling'=> 'Suspendre le sondage',
    'queues.sort.by'=> 'Trier par',
    'queues.sort'=> 'Trier',
    'queues.select.all'=> 'Tout sélectionner',
    'queues.button.prev'=> 'Précédent',
    'queues.button.next'=> 'Suivant',
    'queues.button.save'=> 'Enregistrer',
    'queues.button.cancel'=> 'Annuler',
    'queues.button.create'=> 'Créer',


    // Queues Loading Status
    'queues.status.loading'=> 'Chargement des files...',

    // simple.php
    // Simple Queues Page


    // Simple Queues Action Buttons
    'queues.simple.actions'=> 'Actions',
    'queues.simple.actions.desc'=> 'Effectuer des actions sur les files sélectionnées.',

    // Queues Table Headers
    'queues.table.th.name'=> 'Nom',
    'queues.table.th.number'=> 'Numéro',
    'queues.table.th.target'=> 'Cible',
    'queues.table.th.upload-limit'=> 'Limite d\'envoi',
    'queues.table.th.download-limit'=> 'Limite de réception',
    'queues.table.th.download-avg-rate'=> 'Débit moyen (réception)',
    'queues.table.th.max-limit'=> 'Limite max',
    'queues.table.th.queue-type'=> 'Types de file',
    'queues.table.th.limit-at'=> 'Limite à',
    'queues.table.th.bytes'=> 'Octets',
    'queues.table.th.avg.rate'=> 'Débit moyen',
    'queues.table.th.kind'=> 'Type',

    // Queues Modal Form - Tabs
    'queues.tab.main'=> 'Principal',
    'queues.tab.advanced'=> 'Avancé',
    'queues.tab.queueing'=> 'Mise en file',

    // Queues Modal Form Tab
    'queues.modal.form.new.simple'=> 'Nouvelle file simple',
    'queue.modal.form.edit.simple'=> 'Modifier la file simple',
    'queues.modal.form.enabled'=> 'Activé',
    'queues.modal.form.name'=> 'Nom',
    'queues.modal.form.target'=> 'Cible',
    'queues.modal.form.target-select-iface'=> 'Sélectionner une interface',
    'queues.modal.form.dst'=> 'Destination',
    'queues.modal.form.dst-select-iface'=> 'Sélectionner une interface',
    'queues.modal.form.target.dst-caption'=> 'Sélectionnez une interface ou saisissez une cible personnalisée ci-dessous.',
    'queues.modal.form.placeholder'=> 'ou entrez une IP (p.ex. 192.168.10.0/24 ou 10.0.0.5)',
    'queues.modal.form.target.upload'=> 'Limite d\'envoi cible',
    'queues.modal.form.max-limit'=> 'Limite max',
    'queues.modal.form.target.download'=> 'Limite de réception cible',
    'queues.modal.form.pkt-marks'=> 'Marques de paquets',
    'queues.modal.form.limit-at'=> 'Limite à',
    'queues.modal.form.burst-limit'=> 'Limite de rafale',
    'queues.modal.form.burst-threshold'=> 'Seuil de rafale',
    'queues.modal.form.burst-time'=> 'Durée de rafale',
    'queues.modal.form.priority'=> 'Priorité',
    'queues.modal.form.bucket-size'=> 'Taille du seau',
    'queues.modal.form.parent-queue'=> 'File parente',
    'queues.modal.form.queue-type'=> 'Type de file',
    'queues.modal.form.comment'=> 'Commentaire',
    'queues.modal.form.comment-placeholder'=> 'Commentaire optionnel',
    'queues.modal.form.clear-parent'=> 'Supprimer la parenté (retirer la relation parent)',

    // tree.php
    // Queue Tree Page

    // Queue Tree Action Buttons
    'queues.tree.actions'=> 'Actions',
    'queues.tree.action.desc'=> 'Effectuer des actions sur les entrées sélectionnées de l\'arbre de files.',

    // Queue Tree Modal Form - Tabs
    'queues.tree.create.title'=> 'Créer une entrée d\'arbre de files',
    'queue.tree.tab.general'=> 'Général',
    'queue.tree.tab.rate-limit'=> 'Limite de débit',


    // types.php
    // Queue Types Page
  
    // Queue Types Action 
    'queues.types.actions'=> 'Actions',
    'queues.types.action.desc'=> 'Effectuer des actions sur les types de files sélectionnés.',


    // ppp.php
    // PPP Page
    'ppp.title'=> 'Gestionnaire PPPoE',
    'ppp.desc'=> 'Gérer les serveurs PPPoE, les secrets et les profils.',

    'ppp.pppoe.servers'=> 'Serveurs PPPoE',
    'ppp.servers'=> 'Serveurs',
    'ppp.secrets'=> 'Secrets',
    'ppp.profiles'=> 'Profils',
    'ppp.active'=> 'Sessions actives',

    // PPP Page Descriptions
    'ppp.servers.desc'=> 'Afficher et gérer les instances de serveurs PPPoE et leurs liaisons.',
    'ppp.secrets.desc'=> 'Gérer les secrets PPPoE (identifiants utilisateur).',
    'ppp.profiles.desc'=> 'Créer et gérer les profils PPPoE.',
    'ppp.active.desc'=> 'Afficher et déconnecter les sessions PPPoE actives.',

    'ppp.open.servers'=> 'Ouvrir les serveurs PPPoE',
    'ppp.open.secrets'=> 'Ouvrir les secrets',
    'ppp.open.profiles'=> 'Ouvrir les profils',
    'ppp.open.active'=> 'Ouvrir les sessions actives',

    // PPP Page - Back Button
    'ppp.back-to-ppp'=> 'Retour au gestionnaire PPPoE',

    // PPP Actions
    'ppp.actions'=> 'Actions',

    // PPP General Buttons
    'ppp.buttons.new'=> 'Nouveau',
    'ppp.buttons.edit'=> 'Modifier',
    'ppp.buttons.enable'=> 'Activer',
    'ppp.buttons.disable'=> 'Désactiver',
    'ppp.buttons.remove'=> 'Supprimer',
    'ppp.buttons.refresh'=> 'Actualiser',
    'ppp.sort.by'=> 'Trier par',
    'ppp.sort'=> 'Trier',
    'ppp.select.all'=> '',
    'ppp.buttons.prev'=> 'Précédent',
    'ppp.buttons.next'=> 'Suivant',
    'ppp.buttons.clear'=> 'Effacer',
    'ppp.buttons.cancel'=> 'Annuler',
    'ppp.buttons.create'=> 'Créer',
    'ppp.buttons.save'=> 'Enregistrer',
    'ppp.buttons.proceed'=> 'Procéder',

    // PPP Loading Status
    'ppp.status.loading'=> 'Chargement des données PPPoE...',

    // PPP Secrets Table Headers
    'ppp.table.th.service-name'=> 'Nom du service',
    'ppp.table.th.iface'=> 'Interface',
    'ppp.table.th.keepalive'=> 'Délai Keepalive',
    'ppp.table.th.profile'=> 'Profil',
    'ppp.table.th.one-session-host'=> 'Une session par hôte',
    'ppp.table.th.authentication'=> 'Authentification',
    'ppp.table.th.name'=> 'Nom',
    'ppp.table.th.password'=> 'Mot de passe',
    'ppp.table.th.service'=> 'Service',
    'ppp.table.th.address'=> 'Adresse',
    'ppp.table.th.caller-id'=> 'ID appelant',
    'ppp.table.th.local-address'=> 'Adresse locale',
    'ppp.table.th.remote-address'=> 'Adresse distante',
    'ppp.table.th.last-logged-out'=> 'Dernière déconnexion',
    'ppp.table.th.last-disc-reason'=> 'Raison déconnexion',
    'ppp.table.th.last-called-id'=> 'Dernier ID appelé',
    'ppp.table.th.rate-limit'=> 'Limite de débit',
    'ppp.table.th.only-one'=> 'Unique',
    'ppp.table.th.uptime'=> 'Temps d\'activité',
    'ppp.table.th.bytes-in'=> 'Octets entrants',
    'ppp.table.th.bytes-out'=> 'Octets sortants',

    // PPP Add Server Modal Form
    'ppp.modal.form.title'=> 'Ajouter un serveur PPPoE',
    'ppp.modal.form.enabled'=> 'Activé',
    'ppp.modal.form.one-session-per-host'=> 'Une session par hôte',
    'ppp.modal.form.accept-empty-services'=> 'Accepter les services vides',
    'ppp.modal.form.accept-untagged'=> 'Accepter non tagué',
    'ppp.modal.form.service-name'=> 'Nom du service',
    'ppp.modal.form.service-name_placeholder'=> 'Nom PPPoE',
    'ppp.modal.form.interface'=> 'Interface',
    'ppp.modal.form.placeholder'=> 'Par défaut',
    'ppp.modal.form.max-mtu'=> 'MTU max',
    'ppp.modal.form.max-mru'=> 'MRU max',
    'ppp.modal.form.mrru'=> 'MRRU',
    'ppp.modal.form.keepalive-timeout'=> 'Délai Keepalive',
    'ppp.modal.form.profile'=> 'Profil',
    'ppp.modal.form.max-sessions'=> 'Sessions max',
    'ppp.modal.form.auth-methods'=> 'Méthodes d\'authentification',
    'ppp.modal.form.auth-mschapv2'=> 'msChapv2',
    'ppp.modal.form.auth-mschapv1'=> 'msChapv1',
    'ppp.modal.form.auth-chap'=> 'CHAP',
    'ppp.modal.form.auth-pap'=> 'PAP',

    // PPP Add/Edit Secret Modal Form
    'ppp.modal.form.secret.name'=> 'Nom',
    'ppp.modal.form.secret.password'=> 'Mot de passe',
    'ppp.modal.form.secret.service-type'=> 'Service',
    'ppp.modal.form.secret.local-address'=> 'Adresse locale',
    'ppp.modal.form.secret.remote-address'=> 'Adresse distante',

    // secrets.php
    // Modal Titles
    'ppp.modal.form.add.ppp-secret'=> 'Ajouter un secret PPPoE',
    'ppp.modal.form.edit.ppp-secret'=> 'Modifier le secret PPPoE',

    // PPP Secrets Page Modal Tabs
    'ppp.secrets.tab.general'=> 'Général',  
    'ppp.secrets.tab.details'=> 'Détails',

    // profiles.php
    // PPP Profiles Page

    // PPP Profiles Modal Titles
    'ppp.modal.form.add.ppp-profile'=> 'Ajouter un profil PPPoE',
    'ppp.modal.form.edit.ppp-profile'=> 'Modifier le profil PPPoE',


    // PPP Profiles Modal Tabs
    'ppp.profiles.tab.general'=> 'Général',
    'ppp.profiles.tab.protocols'=> 'Protocoles',
    'ppp.profiles.tab.limits'=> 'Limites',
    'ppp.profiles.tab.queue'=> 'File',
    'ppp.profiles.tab.scripts'=> 'Scripts',

    // PPP Profiles Modal Form Fields
    'ppp.modal.form.profile.name'=> 'Nom',
    'ppp.modal.form.profile.local-address'=> 'Adresse locale',
    'ppp.modal.form.profile.remote-address'=> 'Adresse distante',
    'ppp.modal.form.profile.use-ipv6'=> 'Utiliser IPv6',
    'ppp.modal.form.profile.use-mpls'=> 'Utiliser MPLS',
    'ppp.modal.form.profile.use-comp'=> 'Utiliser la compression',
    'ppp.modal.form.profile.use-enc'=> 'Utiliser le chiffrement',
    'ppp.modal.form.profile.sess-timeout'=> 'Délai de session',
    'ppp.modal.form.profile.idle-timeout'=> 'Délai d\'inactivité',
    'ppp.modal.form.profile.rate-limit'=> 'Limite de débit',
    'ppp.modal.form.profile.only-one'=> 'Unique',
    'ppp.modal.form.profile.parent-queue'=> 'File parente',
    'ppp.modal.form.profile.queue-type-rx'=> 'Type de file (Téléchargements)',
    'ppp.modal.form.profile.queue-type-tx'=> 'Type de file (Envois)',
    'ppp.modal.form.profile.script-onup'=> 'On Up',
    'ppp.modal.form.profile.script-ondown'=> 'On Down',
    'ppp.modal.form.profile.script-placeholder'=> 'Le script sera exécuté lorsque l\'événement est déclenché',
    'ppp.modal.form.migration.confirm'=> 'Confirmer la migration du profil',
    'ppp.modal.form.migration.caption'=> 'La suppression de la file parente ou du type de file pour ce profil peut nécessiter la recréation du profil et la réaffectation des secrets PPP associés. Cette opération peut être disruptive. Voulez-vous continuer ?',

    // ip.php
    // IP Page
    'ip.title'=> 'Gestionnaire IP',
    'ip.desc'=> 'Gérer ARP, Adresses, DHCP, DNS, Pools et services IP associés.',

    'ip.arp'=> 'ARP',
    'ip.addresses'=> 'Adresses',
    'ip.cloud'=> 'Cloud',
    'ip.dhcp.client'=> 'Client DHCP',
    'ip.dhcp.server'=> 'Serveur DHCP',
    'ip.dns'=> 'DNS',
    'ip.pool'=> 'Pool',
    'ip.services'=> 'Services',
    'ip.upnp'=> 'UPnP',
    'ip.settings'=> 'Paramètres IP',
    
    'ip.arp.desc'=> 'Afficher et gérer les entrées de la table ARP.',
    'ip.addresses.desc'=> 'Gérer les adresses IP assignées aux interfaces.',
    'ip.cloud.desc'=> 'Paramètres Cloud/DDNS. Les valeurs sont lues depuis le routeur.',
    'ip.dhcp.client.desc'=> 'Afficher et gérer les clients DHCP.',
    'ip.dhcp.server.desc'=> 'Configurer le serveur DHCP et les baux.',
    'ip.dns.desc'=> 'Gérer les paramètres DNS et les entrées statiques.',
    'ip.pool.desc'=> 'Gérer les pools d\'adresses pour DHCP et autres services.',
    'ip.services.desc'=> 'Activer ou désactiver les services liés à IP.',
    'ip.upnp.desc'=> 'Paramètres Universal Plug and Play. Les valeurs sont lues depuis le routeur.',
    'ip.settings.desc'=> 'Paramètres généraux du sous-système IP.',

    'ip.open.arp'=> 'Ouvrir ARP',
    'ip.open.addresses'=> 'Ouvrir les adresses',
    'ip.open.cloud'=> 'Ouvrir Cloud',
    'ip.open.dhcp.client'=> 'Ouvrir le client DHCP',
    'ip.open.dhcp.server'=> 'Ouvrir le serveur DHCP',
    'ip.open.dns'=> 'Ouvrir DNS',
    'ip.open.pool'=> 'Ouvrir le pool',
    'ip.open.services'=> 'Ouvrir les services',
    'ip.open.upnp'=> 'Ouvrir UPnP',
    'ip.open.settings'=> 'Ouvrir les paramètres IP',

    // IP Page - Back Button
    'ip.back-to-ip'=> 'Retour au gestionnaire IP',

    // IP JS strings
    // Addresses
    'ip.addresses.no_addresses' => 'Aucune adresse',
    'ip.addresses.loading' => 'Chargement...',
    'ip.addresses.failed_to_contact_api' => 'Échec de contact avec l\'API',
    'ip.addresses.please_select_one_or_more' => 'Veuillez sélectionner une ou plusieurs entrées',
    'ip.addresses.select_one_to_edit' => 'Sélectionnez exactement une adresse à modifier',
    'ip.addresses.action_completed' => 'Action %s terminée',
    'ip.addresses.action_failed' => 'Action échouée : %s',
    'ip.addresses.request_failed' => 'Requête échouée : %s',
    'ip.addresses.address_added' => 'Adresse ajoutée',
    'ip.addresses.address_updated' => 'Adresse mise à jour',
    'ip.addresses.add_failed' => 'Échec de l\'ajout : %s',
    'ip.addresses.update_failed' => 'Échec de la mise à jour : %s',
    'ip.addresses.page_info' => 'Page %s / %s (%s)',

    // ARP
    'ip.arp.no_arp_entries' => 'Aucune entrée ARP',
    'ip.arp.loading' => 'Chargement...',
    'ip.arp.failed_to_contact_api' => 'Échec de contact avec l\'API',
    'ip.arp.please_select_one_or_more' => 'Veuillez sélectionner une ou plusieurs entrées',
    'ip.arp.enable_confirm' => 'Activer les entrées ARP sélectionnées ?',
    'ip.arp.disable_confirm' => 'Désactiver les entrées ARP sélectionnées ?',
    'ip.arp.remove_confirm' => 'Supprimer les entrées ARP sélectionnées ?',
    'ip.arp.page_info' => 'Page %s / %s (%s)',

    // Cloud
    'ip.cloud.failed_to_load' => 'Échec du chargement des paramètres Cloud : %s',
    'ip.cloud.reverted' => 'Modifications annulées',
    'ip.cloud.applied' => 'Paramètres Cloud appliqués',
    'ip.cloud.apply_failed' => 'Échec de l\'application : %s',

    // DHCP Client
    'ip.dhcp.client.no_clients' => 'Aucun client DHCP',
    'ip.dhcp.client.failed_to_load' => 'Échec du chargement des clients DHCP : %s',
    'ip.dhcp.client.please_select_interface' => 'Veuillez sélectionner une interface',
    'ip.dhcp.client.created' => 'Client DHCP créé',
    'ip.dhcp.client.create_failed' => 'Échec de la création : %s',
    'ip.dhcp.client.no_entries_selected' => 'Aucune entrée sélectionnée',
    'ip.dhcp.client.enable_completed' => 'Activation terminée',
    'ip.dhcp.client.enable_failed' => 'Échec de l\'activation : %s',
    'ip.dhcp.client.disable_completed' => 'Désactivation terminée',
    'ip.dhcp.client.disable_failed' => 'Échec de la désactivation : %s',
    'ip.dhcp.client.remove_confirm' => 'Supprimer les clients DHCP sélectionnés ?',
    'ip.dhcp.client.option_name_code_required' => 'Nom et code requis',
    'ip.dhcp.client.option_created' => 'Option créée',
    'ip.dhcp.client.option_create_failed' => 'Échec de la création : %s',
    'ip.dhcp.client.no_options' => 'Aucune option',

    // DHCP Networks
    'ip.dhcp.networks.no_networks' => 'Aucun réseau DHCP',
    'ip.dhcp.networks.loading' => 'Chargement...',
    'ip.dhcp.networks.select_one_to_edit' => 'Veuillez sélectionner un seul réseau à modifier',
    'ip.dhcp.networks.create_not_implemented' => 'Créer un nouveau réseau : non implémenté',
    'ip.dhcp.networks.please_select_remove' => 'Veuillez sélectionner un ou plusieurs réseaux à supprimer',
    'ip.dhcp.networks.remove_confirm' => 'Supprimer les réseaux sélectionnés ?',
    'ip.dhcp.networks.removed' => 'Supprimé',
    'ip.dhcp.networks.remove_failed' => 'Échec de la suppression : %s',
    'ip.dhcp.networks.page_info' => 'Page %s / %s (%s)',

    // DNS
    'ip.dns.add_server_placeholder' => 'Ajouter un serveur DNS (IP)',
    'ip.dns.remove' => 'Supprimer',
    'ip.dns.loading' => 'Chargement...',
    'ip.dns.failed_to_contact_api' => 'Échec de contact avec l\'API',
    'ip.dns.error_loading' => 'Erreur lors du chargement des paramètres DNS',
    'ip.dns.dns_saved' => 'Paramètres DNS enregistrés',
    'ip.dns.failed_to_save' => 'Échec de l\'enregistrement : %s',
    'ip.dns.save_confirm' => 'Enregistrer les paramètres DNS ?',
    'ip.dns.no_static_entries' => 'Aucune entrée statique',
    'ip.dns.static_added' => 'DNS statique ajouté',
    'ip.dns.static_add_failed' => 'Échec de l\'ajout statique',
    'ip.dns.performing_action' => 'Exécution de %s...',
    'ip.dns.invalid_json' => 'Réponse JSON invalide',
    'ip.dns.request_failed' => 'Requête échouée : %s',
    'ip.dns.flush_cache_confirm' => 'Vider tout le cache DNS ?',
    'ip.dns.cache_flushed' => 'Cache vidé',
    'ip.dns.failed_flush_cache' => 'Échec du vidage du cache : %s',
    'ip.dns.no_cache_entries' => 'Aucune entrée de cache',

    // Pool
    'ip.pool.no_pools' => 'Aucun pool',
    'ip.pool.please_select_one_or_more' => 'Veuillez sélectionner un ou plusieurs pools',
    'ip.pool.select_one_to_edit' => 'Sélectionnez exactement un pool à modifier',
    'ip.pool.name_and_address_required' => 'Le nom et l\'adresse sont requis',
    'ip.pool.pool_created' => 'Pool créé',
    'ip.pool.create_failed' => 'Échec de la création : %s',
    'ip.pool.pool_updated' => 'Pool mis à jour',
    'ip.pool.update_failed' => 'Échec de la mise à jour : %s',
    'ip.pool.remove_confirm' => 'Supprimer le(s) pool(s) sélectionné(s) ?',
    'ip.pool.action_completed' => 'Action %s terminée',
    'ip.pool.action_failed' => 'Action échouée : %s',
    'ip.pool.request_failed' => 'Requête échouée : %s',
    'ip.pool.none' => '(aucun)',
    'ip.pool.loading' => 'Chargement...',
    'ip.pool.failed_to_contact_api' => 'Échec de contact avec l\'API',
    'ip.pool.page_info' => 'Page %s / %s (%s)',

    // IP Settings
    'ip.settings.refreshing_settings' => 'Actualisation des paramètres...',
    'ip.settings.no_settings_found' => 'Aucun paramètre IP trouvé',
    'ip.settings.failed_to_load' => 'Échec du chargement des paramètres IP',
    'ip.settings.updated' => 'Paramètres IP mis à jour',
    'ip.settings.update_failed' => 'Échec de la mise à jour : %s',

    // IP Page - Loading Status
    'ip.loading'=> 'Chargement des données IP...',

    // IP Page Actions
    'ip.actions'=> 'Actions',

    // IP Page General Buttons
    'ip.buttons.new'=> 'Ajouter',
    'ip.buttons.edit'=> 'Modifier',
    'ip.buttons.refresh'=> 'Actualiser',
    'ip.buttons.create'=> 'Créer',
    'ip.buttons.save'=> 'Enregistrer',
    'ip.buttons.cancel'=> 'Annuler',
    'ip.buttons.enable'=> 'Activer',
    'ip.buttons.disable'=> 'Désactiver',
    'ip.buttons.remove'=> 'Supprimer',
    'ip.buttons.prev'=> 'Précédent',
    'ip.buttons.next'=> 'Suivant',
    'ip.sort.by'=> 'Trier par',
    'ip.sort'=> 'Trier',
    'ip.select.all'=> 'Tout sélectionner',
    'ip.buttons.flush.cache'=> 'Vider le cache',
    'ip.buttons.add.dns.server'=> 'Ajouter un serveur DNS',


    // IP UPnP Page
    'ip.upnp.enabled'=> 'Activé',
    'ip.upnp.allow-disable-external-iface'=> 'Autoriser la désactivation de l\'interface externe',
    'ip.upnp.show-dummy-rule'=> 'Afficher la règle factice',

    // arp.php
    // IP ARP Page

    // addresses.php
    // IP Addresses Page

    // IP Table Headers
    'ip.table.th.address'=> 'Adresse',
    'ip.table.th.network'=> 'Réseau',
    'ip.table.th.iface'=> 'Interface',
    'ip.table.th.comment'=> 'Commentaire',
    'ip.table.th.dhcp.client.name' => 'Nom',
    'ip.table.th.dhcp.client.code-value' => 'Valeur du code',
    'ip.table.th.dhcp.client.client-value' => 'Valeur du client',
    'ip.table.th.dns.name'=> 'Nom',
    'ip.table.th.dns.regexp'=> 'Expression',
    'ip.table.th.dns.type'=> 'Type',
    'ip.table.th.dns.value'=> 'Valeur',
    'ip.table.th.dns.ttl'=> 'TTL',
    'ip.table.th.dns.data'=> 'Données',

    // IP Address Modal Titles
    'ip.modal.form.add.address'=> 'Ajouter une adresse IP',
    'ip.modal.form.edit.address'=> 'Modifier une adresse IP',

    // IP Address Modal Form
    'ip.modal.form.ip.address-mask'=> 'Adresse IP / Masque',
    'ip.modal.form.ip.network'=> 'Réseau',
    'ip.modal.form.iface'=> 'Interface',
    'ip.modal.form.comment'=> 'Commentaire',
    

    // cloud.php
    // IP Cloud Page

    // IP Cloud Modal Form
    'ip.cloud.enabled'=> 'DDNS activé',
    'ip.cloud.ddns.update.interval'=> 'Intervalle de mise à jour DDNS',
    'ip.cloud.update.time'=> 'Heure de mise à jour',
    'ip.cloud.public.ipv4'=> 'IPv4 publique',
    'ip.cloud.public.ipv6'=> 'IPv6 publique',
    'ip.cloud.dns.name' => 'Nom DNS',
    'ip.cloud.use-router-defaults'=> 'Utiliser les paramètres par défaut du routeur',
    'ip.cloud.yes'=> 'Oui',
    'ip.cloud.no'=> 'Non',

    // dhcp-client.php
    // IP DHCP Client Page
    'ip.dhcp.client.options'=> 'Client DHCP',
    'ip.dhcp.client.modal.form.interface'=> 'Interface',
    'ip.dhcp.client.modal.form.enabled'=> 'Activé',
    'ip.dhcp.client.modal.form.use-peer-dns'=> 'Utiliser DNS du pair',
    'ip.dhcp.client.modal.form.use-peer-ntp'=> 'Utiliser NTP du pair',
    'ip.dhcp.client.modal.form.add-default-route'=> 'Ajouter la route par défaut',
    'ip.dhcp.client.modal.form.default-route-distance'=> 'Distance de la route par défaut',
    'ip.dhcp.client.options2'=> 'Options du client DHCP',
    'ip.dhcp.client.modal.form.name'=> 'Nom',
    'ip.dhcp.client.modal.form.code'=> 'Code',
    'ip.dhcp.client.modal.form.value'=> 'Valeur',

   
    // dns.php
    // IP DNS Page

    // IP DNS - Modal Form
    'ip.dns.form.servers'=> 'Serveurs DNS',
    'ip.dns.form.dynamic-servers'=> 'Serveurs dynamiques',
    'ip.dns.form.use.doh.servers'=> 'Utiliser les serveurs DoH',
    'ip.dns.form.doh.max.server.conn'=> 'Connexions max serveur DoH',
    'ip.dns.form.doh.max.concurrent.queries'=> 'Requêtes DoH simultanées max',
    'ip.dns.form.doh.timeout'=> 'Timeout DoH (secondes)',
    'ip.dns.form.allow-remote.requests'=> 'Autoriser les requêtes distantes',

    'ip.dns.form.cache.size'=> 'Taille du cache (KB)',
    'ip.dns.form.cache.max-ttl'=> 'TTL max du cache (secondes)',
    'ip.dns.form.cache.min-ttl'=> 'TTL min du cache (secondes)',
    'ip.dns.form.max.concurrent.queries'=> 'Requêtes simultanées max',
    'ip.dns.form.max.concurrent.tcp'=> 'Connexions TCP simultanées max',
    'ip.dns.form.query.timeout'=> 'Timeout requête (secondes)',
    'ip.dns.form.cache.used'=> 'Cache utilisé (lecture seule)',

    'ip.dns.form.add.static.entry'=> 'Ajouter une entrée DNS statique',
    'ip.dns.form.add.static.name'=> 'Nom',
    'ip.dns.form.add.static.type'=> 'Type',
    'ip.dns.form.add.static.value'=> 'Valeur',
    'ip.dns.form.add.static.ttl'=> 'TTL',
    'ip.dns.form.add.static.regexp'=> 'Expression',

    // IP DNS - Static DNS
    'ip.dns.static'=> 'Static DNS',
    'ip.dns.static.desc'=> 'Manage static DNS entries that override dynamic DNS resolution.',

    // IP DNS - Cache Settings
    'ip.dns.cache'=> 'DNS Cache Settings',

    // pool.php
    // IP Pool Page

    // IP Pool Table Headers
    'ip.pool.table.th.name'=> 'Nom',
    'ip.pool.table.th.ranges'=> 'Plages',
    'ip.pool.table.th.comment'=> 'Commentaire',
    'ip.pool.table.th.total-addresses'=> 'Adresses totales',
    'ip.pool.table.th.used'=> 'Utilisées',
    'ip.pool.table.th.available'=> 'Disponibles',

    // IP Pool Modal Form
    'ip.pool.modal.form.create.title'=> 'Créer un pool IP',
    'ip.pool.modal.form.edit.title'=> 'Modifier le pool IP',
    'ip.pool.modal.form.name'=> 'Nom',
    'ip.pool.modal.form.ranges'=> 'Plages d\'adresses',
    'ip.pool.modal.form.ranges-placeholder'=> 'p.ex. 192.168.1.100-192.168.1.200 ou 10.0.0.0/24',
    'ip.pool.modal.form.comment'=> 'Commentaire',
    'ip.pool.modal.form.next-address'=> 'Adresse suivante',
    'ip.pool.modal.form.total-addresses'=> 'Adresses totales',
    'ip.pool.modal.form.used'=> 'Utilisées',
    'ip.pool.modal.form.available'=> 'Disponibles',

    // services.php
    // IP Services Page

    // IP Services Table Headers
    'ip.services.table.th.name'=> 'Nom',
    'ip.services.table.th.port'=> 'Port',
    'ip.services.table.th.available-from'=> 'Disponible depuis',
    'ip.services.table.th.max-sessions'=> 'Sessions max',
    'ip.services.table.th.protocol'=> 'Protocole',
    'ip.services.table.th.remote'=> 'Distant',
    'ip.services.table.th.local'=> 'Local',

    // IP Services Modal Form
    'ip.services.modal.form.edit.title'=> 'Modifier le service IP',
    'ip.services.modal.form.name'=> 'Nom',
    'ip.services.modal.form.port'=> 'Port',
    'ip.services.modal.form.available-from'=> 'Disponible depuis',
    'ip.services.modal.form.max-sessions'=> 'Sessions max',
    'ip.services.modal.form.protocol'=> 'Protocole',
    'ip.services.modal.form.remote.address'=> 'Adresse distante',
    'ip.services.modal.form.remote.port'=> 'Port distant',
    'ip.services.modal.form.local.address'=> 'Adresse locale',

    // settings.php
    // IP Settings Page

    // IP Settings Modal Form
    'ip.settings.modal.form.ip-forward'=> 'Transfert IP activé',
    'ip.settings.modal.form.ip-send-redirects'=> 'Envoi de redirections activé',
    'ip.settings.modal.form.ip-accept-redirects'=> 'Acceptation des redirections activée',
    'ip.settings.modal.form.ip-secure-redirects'=> 'Redirections sécurisées activées',
    'ip.settings.modal.form.ip-accept-source-route'=> 'Acceptation du routage source activée',
    'ip.settings.modal.form.ip-allow-fast-path'=> 'Autoriser Fast Path activé',
    'ip.settings.modal.form.ip-tcp-syncookies'=> 'TCP Syncookies activé',
    'ip.settings.modal.form.ip-tcp-timestamps'=> 'Horodatages TCP',
    'ip.settings.modal.form.ip-max-neighbors'=> 'Nombre max de voisins',
    'ip.settings.modal.form.ip-icmp-rate-limit'=> 'Limite de débit ICMP',
    'ip.settings.modal.form.ip-arp-timeout'=> 'Timeout ARP (secondes)',
    'ip.settings.modal.form.ip-arp-timeout-help'=> 'Entrez le format de timeout de RouterOS (p.ex. 10m, 1h ou 00:10:00). Laisser vide pour la valeur par défaut.',

    // Error pages
    'errors.404.title' => 'Page Not Found',
    'errors.404.desc' => 'The page you requested could not be found.',
    'errors.403.title' => 'Forbidden',
    'errors.403.desc' => 'You don\'t have permission to access this resource.',
    'errors.500.title' => 'Server Error',
    'errors.500.desc' => 'An internal server error occurred.',
    'errors.back_home' => 'Return Home',
    'errors.more_info' => 'What happened',
    'errors.contact_admin' => 'If you believe this is an error, contact the site administrator.',

]; 
