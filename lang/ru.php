<?php
////////////////////////////////////////////////////////////////////////
// Russian translations for mTik_Ops                           
// Author: HPY™                                                         
////////////////////////////////////////////////////////////////////////
return [
    // Start of Translations
    // Global
    'language-changed' => 'Язык сменён на {lang}',
    'language-search-placeholder' => 'Поиск...',

        // Missing from previous sync: core site/nav/search/signup/status/footer
        'site.title' => 'mTik_Ops', // DO NOT TRANSLATE
        'site.tagline' => 'Централизованное управление маршрутизаторами',

        'nav.brand.user_greeting'=> 'Привет!',
        'nav.login' => 'Вход',
        'nav.logout' => 'Выход',
        'lang.label'=> 'Язык',
        'nav.about' => 'О нас',
        'nav.features' => 'Функции',
        'nav.our_team' => 'Наша команда',
        'nav.contact' => 'Контакты',
        'nav.menu' => 'Меню',
        'nav.dashboard' => 'Панель',
        'nav.hotspot' => 'Hotspot',
        'nav.ip' => 'IP',
        'nav.ppp' => 'PPP',
        'nav.queues' => 'Очереди',
        'nav.settings' => 'Настройки',
        'nav.downloads' => 'Загрузки',

        'search.title' => 'Поиск',
        'search.instructions' => 'Введите ключевое слово или фразу для поиска по сайту.',
        'search.results_header' => 'Результаты поиска для "{query}"',
        'search.placeholder' => 'Начните ввод...',
        'search.no_results' => 'Результаты не найдены',
        'search.results' => 'Результаты',
        'search.button' => 'Искать',
        'search.hint' => 'Начните ввод, чтобы увидеть подсказки.',
        'search.quick_links' => 'Быстрые ссылки',
        'search.show' => 'Показать поиск',

        'about.title' => 'Создано для MikroTik',
        'about.desc' => 'mTikOps — веб‑платформа для управления маршрутизаторами MikroTik и хотспотами. Включает удалённый доступ, управление хотспотом, печать, PPPoE и многое другое.',
        'about.about_us_button' => 'О нас',
        'about.our_team_button' => 'Наша команда',

        'features.remote.title' => 'Удалённое управление сетью',
        'features.remote.desc' => 'Мониторинг и управление удалёнными маршрутизаторами, просмотр состояния интерфейсов, перезагрузки и безопасное распространение конфигураций из единой консоли.',
        'features.hotspot.title' => 'Управление Hotspot',
        'features.hotspot.desc' => 'Создание и управление hotspot‑серверами и профилями пользователей, выдача ваучеров, мониторинг активных пользователей и сессий, отчёты и учёт.',
        'features.troubleshoot.title' => 'Диагностика и конфигурация',
        'features.troubleshoot.desc' => 'Применение и аудит изменений конфигурации, запуск диагностик, просмотр логов и устранение неполадок с интегрированными инструментами.',

        'signup.title' => 'Начните с mTikOps',
        'signup.desc' => 'Создайте аккаунт для управления маршрутизаторами, хотспотами и запуска диагностики из единой панели.',
        'signup.cta' => 'Зарегистрироваться',

        'contact.hq' => 'Штаб-квартира',
        'contact.hq_address' => 'Taguig City, PH 1630',
        'contact.email' => 'Электронная почта',
        'contact.email_addr' => 'noc@mtikops.com',
        'contact.phone' => '+63 (962) 660-6116',
        'contact.contact' => 'Контакты',

        'footer.copyright' => 'Авторские права &copy; mTikOps {year}',
        'footer.powered' => 'Работает на HPY™',

        'modal.confirm.title' => 'Подтвердите',
        'modal.confirm.body' => 'Вы уверены?',
        'modal.confirm.cancel' => 'Отмена',
        'modal.confirm.ok' => 'Подтвердить',

        'auth.logging_in' => 'Вход в систему',
        'auth.logging_out' => 'Выход из системы',

        'status.title' => 'Статус системы',
        'status.desc' => 'Просмотр статуса системы и служб',

        'maintenance.update_toast' => 'Система обновлена. Перезапустите при необходимости.',

    // Global Search

    // ip.php
    // IP Page
    'ip.title'=> 'Управление IP',
    'ip.desc'=> 'Управление IP-адресами, ARP, DHCP, DNS и сервисами.',

    'ip.addresses'=> 'IP-адреса',
    'ip.arp'=> 'ARP',
    'ip.dhcp'=> 'DHCP',
    'ip.dhcp.leases'=> 'DHCP аренды',
    'ip.dhcp.networks'=> 'DHCP сети',
    'ip.dhcp.options'=> 'DHCP опции',
    'ip.dns'=> 'DNS',
    'ip.dns.static'=> 'Статические записи DNS',
    'ip.dns.cache'=> 'Кэш DNS',
    'ip.pools'=> 'IP пулы',
    'ip.services'=> 'IP сервисы',

    'ip.open.addresses'=> 'Открыть IP-адреса',
    'ip.open.arp'=> 'Открыть ARP',
    'ip.open.dhcp'=> 'Открыть DHCP',
    'ip.open.dns'=> 'Открыть DNS',
    'ip.open.pools'=> 'Открыть пулы',
    'ip.open.services'=> 'Открыть сервисы',

    // IP Page Descriptions
    'ip.addresses.desc'=> 'Управление IP-адресами, назначенными интерфейсам.',
    'ip.arp.desc'=> 'Просмотр и управление таблицей ARP.',
    'ip.dhcp.desc'=> 'Управление DHCP-сервером, арендами и сетями.',
    'ip.dns.desc'=> 'Управление статическими записями DNS и просмотр кэша DNS.',
    'ip.pools.desc'=> 'Управление пулами адресов для динамического назначения.',
    'ip.services.desc'=> 'Управление IP-уровневыми сервисами (например, NAT, firewall helpers).',

    // IP Table Headers
    'ip.table.th.address'=> 'Адрес',
    'ip.table.th.interface'=> 'Интерфейс',
    'ip.table.th.network'=> 'Сеть',
    'ip.table.th.gateway'=> 'Шлюз',
    'ip.table.th.type'=> 'Тип',
    'ip.table.th.disabled'=> 'Отключено',
    'ip.table.th.comment'=> 'Комментарий',
    'ip.table.th.active'=> 'Активно',

    // IP Buttons
    'ip.buttons.add'=> 'Добавить адрес',
    'ip.buttons.release'=> 'Освободить',
    'ip.buttons.renew'=> 'Обновить',
    'ip.buttons.clear-leases'=> 'Очистить аренды',

    // DHCP Modal Fields
    'ip.dhcp.modal.add.title'=> 'Добавить DHCP сеть',
    'ip.dhcp.modal.network'=> 'Сеть',
    'ip.dhcp.modal.placeholder'=> 'например 192.168.1.0/24',
    'ip.dhcp.modal.gateway'=> 'Шлюз',
    'ip.dhcp.modal.dns'=> 'DNS-серверы (через запятую)',
    'ip.dhcp.modal.lease-time'=> 'Время аренды',
    'ip.dhcp.modal.leases'=> 'Аренды',
    'ip.dhcp.modal.options'=> 'Опции',

    // DHCP Lease Table
    'ip.dhcp.table.th.address'=> 'Адрес',
    'ip.dhcp.table.th.mac'=> 'MAC',
    'ip.dhcp.table.th.server'=> 'Сервер',
    'ip.dhcp.table.th.expires'=> 'Истекает',
    'ip.dhcp.table.th.status'=> 'Статус',

    // DNS Modal
    'ip.dns.modal.add.title'=> 'Добавить статическую запись DNS',
    'ip.dns.modal.hostname'=> 'Имя хоста',
    'ip.dns.modal.address'=> 'Адрес',
    'ip.dns.modal.ttl'=> 'TTL',

    // Pools Modal
    'ip.pools.modal.add.title'=> 'Добавить IP-пул',
    'ip.pools.modal.name'=> 'Имя',
    'ip.pools.modal.ranges'=> 'Диапазоны (через запятую)',
    'ip.pools.modal.placeholder'=> 'например 192.168.1.100-192.168.1.200,10.0.0.1-10.0.0.50',
    'login.title' => 'Вход',
    'login.desc' => 'Войдите в аккаунт mTik_Ops для управления маршрутизаторами MikroTik и хотспотами из централизованной панели.',
    'login.form.title' => 'Вход в аккаунт',
    'login.form.host'=> 'Хост',
    'login.form.username'=> 'Имя пользователя',
    'login.form.password'=> 'Пароль',
    'login.form.connection_type'=> 'Тип подключения',
    'login.form.connection_type_yes'=> 'Secure API',
    'login.form.connection_type_no'=> 'Standard API',
    'login.form.connection_type_help'=> 'Используйте порт 8728 в большинстве случаев, если у вас нет особой причины использовать 8729 (например, если на маршрутизаторе установлен SSL-сертификат).',
    'login.form.port'=> 'Порт',
    'login.form.remember'=> 'Запомнить меня',
    'login.form.connect'=> 'Подключиться',
    'login.form.cancel'=> 'Отмена',

    // Login Page Placeholders
    'login.form.host_placeholder'=> 'IP или имя хоста маршрутизатора',
    'login.form.username_placeholder'=> 'Введите имя пользователя',
    'login.form.password_placeholder'=> 'Введите пароль',

     // Login Page Messages
     'login.error.invalid_submission'=> 'Неверная отправка формы. Пожалуйста, попробуйте ещё раз.',
     'login.error.missing_fields'=> 'Требуются Хост, Имя пользователя и Пароль.',
     'login.error.unable_connect'=> 'Не удалось подключиться — проверьте учётные данные и попробуйте снова.',
     'login.success.connected'=> 'Успешно подключено к маршрутизатору.',
     'login.success.remembered'=> 'Данные подключения сохранены для будущих входов.',
     'login.info.session_expired'=> 'Время вашей сессии истекло. Пожалуйста, войдите снова.',
     'login.info.logged_out'=> 'Вы успешно вышли из системы.',
     'login.info.please_login'=> 'Пожалуйста, войдите, чтобы продолжить.',
     'login.button.forgot_password'=> 'Забыли пароль?',
     'login.try_again'=> 'Попробовать снова?',

    // Downloads Page
    'downloads.title' => 'Загрузки',
    'downloads.desc' => 'Скачайте установщики и пакеты для поддерживаемых платформ.',
    'downloads.available' => 'Доступные загрузки',
    'downloads.coming_soon' => 'Скоро',
    'downloads.download' => 'Скачать',
    'downloads.note' => 'Загрузите установщики в папку /downloads, чтобы сделать их доступными.',
    'downloads.changelog' => 'Журнал изменений',
    'downloads.changelog.loading' => 'Загрузка...',
    'downloads.changelog.no_file' => 'Для этого файла нет журнала изменений.',

    // about-us.php
    // About Us Page
    'about-us.title' => 'О проекте',
    'about-us.desc' => 'Узнайте о mTik_Ops, нашей миссии и команде, стоящей за платформой.',
    'about-us.overview'=> 'Обзор',
    'about-us.vision'=> 'Видение',
    'about-us.features'=> 'Функции',
    'about-us.tutorials'=> 'Руководства',
    'about-us.faqs'=> 'Часто задаваемые вопросы',
    'about-us.requirements'=> 'Требования',

    // about-us.php
    // About Us Page Descriptions
    'about-us.overview.desc'=> 'Краткое введение в mTikOps и его ключевые возможности.',
    'about-us.vision.desc'=> 'О нашей миссии и долгосрочных целях проекта.',
    'about-us.features.desc'=> 'Основные возможности mTikOps.',
    'about-us.tutorials.desc'=> 'Пошаговые инструкции и примеры рабочих процессов.',
    'about-us.faqs.desc'=> 'Частые вопросы и ответы о mTikOps.',
    'about-us.requirements.desc'=> 'Требования и совместимость с RouterOS для запуска mTikOps.',

    // about-us.php
    // About Us Page Buttons
    'about-us.open.overview'=> 'Открыть обзор',
    'about-us.open.vision'=> 'Открыть видение',
    'about-us.open.features'=> 'Открыть функции',
    'about-us.open.tutorials'=> 'Открыть руководства',
    'about-us.open.faqs'=> 'Открыть FAQ',
    'about-us.open.requirements'=> 'Открыть требования',

    // About Us - Back Button
    'about-us.back-to-about'=> 'Назад',

    // About Us - Overview Page
    'about-us.overview-page.title'=> 'Обзор',
    'about-us.overview-page.desc'=> 'mTikOps — лёгкая веб‑платформа для управления маршрутизаторами MikroTik и сервисами хотспота через браузер.',

    // About Us - Vision Page
    'about-us.vision-page.title'=> 'Видение',
    'about-us.vision-page.desc'=> 'Мы стремимся упростить сетевые операции для пользователей MikroTik с помощью интуитивного интерфейса и инструментов автоматизации.',

    // About Us - Features Page
    'about-us.features-page.title'=> 'Функции',
    'about-us.features-page.desc'=> 'Основные возможности mTikOps.',

    // About Us - Tutorials Page
    'about-us.tutorials-page.title'=> 'Руководства',
    'about-us.tutorials-page.desc'=> 'Руководства и инструкции для распространённых задач.',

    // About Us - FAQs Page
    'about-us.faqs-page.title'=> 'FAQ',
    'about-us.faqs-page.desc'=> 'Часто задаваемые вопросы и ответы.',

    // About Us - Requirements Page
    'about-us.requirements-page.title'=> 'Требования',
    'about-us.requirements-page.desc'=> 'Минимальные требования и заметки по совместимости.',

    // our-team.php
    // Our Team Page
    'our-team.title'=> 'Наша команда',
    'our-team.desc'=> 'Познакомьтесь с людьми, стоящими за mTikOps — разработчиками, участниками и сопровождающими.',
    'our-team.leadership'=> 'Руководство',
    'our-team.developers'=> 'Разработчики',
    'our-team.contributors'=> 'Участники',
    'our-team.advisors'=> 'Советники',
    'our-team.careers'=> 'Присоединяйтесь',
    'our-team.contact'=> 'Связаться',

    // Our Team Page Descriptions
    'our-team.leadership.desc'=> 'Ключевые сопровождающие и проектные лидеры, развивающие mTikOps.',
    'our-team.developers.desc'=> 'Инженеры и участники, создающие функции и исправления.', 
    'our-team.contributors.desc'=> 'Участники сообщества, помогающие с документацией, тестированием и кодом.',
    'our-team.advisors.desc'=> 'Советники и эксперты, поддерживающие проект.',
    'our-team.careers.desc'=> 'Открытые вакансии и способы присоединиться к команде.',
    'our-team.contact.desc'=> 'Свяжитесь с командой по вопросам или для сотрудничества.',

    // Our Team Page Buttons
    'our-team.open.leadership'=> 'Показать руководство',
    'our-team.open.developers'=> 'Показать разработчиков',
    'our-team.open.contributors'=> 'Показать участников',
    'our-team.open.advisors'=> 'Показать советников',
    'our-team.open.careers'=> 'Присоединиться',
    'our-team.open.contact'=> 'Связаться с командой',

    // Our Team - Back Button
    'our-team.back-to-team'=> 'Назад к команде',

    // Our Team - Leadership Page
    'our-team.leadership-page.title'=> 'Руководство',
    'our-team.leadership-page.desc'=> 'Познакомьтесь с ключевыми сопровождающими и лидерами проекта mTikOps.',

    // Our Team - Developers Page
    'our-team.developers-page.title'=> 'Разработчики',
    'our-team.developers-page.desc'=> 'Профили и обязанности разработчиков, вносящих вклад в mTikOps.',

    // Our Team - Contributors Page
    'our-team.contributors-page.title'=> 'Участники',
    'our-team.contributors-page.desc'=> 'Признание участников сообщества и информация о том, как присоединиться.',

    // Our Team - Advisors Page
    'our-team.advisors-page.title'=> 'Советники',
    'our-team.advisors-page.desc'=> 'Советники и эксперты, которые консультируют проект.',

    // Our Team - Join Us Page
    'our-team.join-us-page.title'=> 'Присоединяйтесь',
    'our-team.join-us-page.desc'=> 'Ознакомьтесь с открытыми ролями и способами вклада в mTikOps.',  

    // Our Team - Contact Page
    'our-team.contact-page.title'=> 'Контакты',
    'our-team.contact-page.desc'=> 'Способы связаться с командой mTikOps для сотрудничества или поддержки.',

    // Dashboard Page
    'dashboard.title'=> 'Панель',
    'dashboard.desc'=> 'Набор инструментов для мониторинга и логирования сетевых операций',

    // Dashboard Buttons
    'dashboard.show'=> 'Показать панель',
    'dashboard.button.refresh'=> 'Обновить',
    'dashboard.button.prev'=> 'Назад',
    'dashboard.button.next'=> 'Вперед',

    // Dashboard Network Monitoring
    'dashboard.monitoring.title'=> 'Мониторинг сети',
    'dashboard.monitoring.desc'=> 'Мониторинг производительности сети, времени работы и состояния устройств MikroTik в реальном времени.',
    'dashboard.ltmg.title'=> 'График живого трафика',
    'dashboard.fullscreen'=> 'На весь экран',
    'dashboard.loading'=> 'Загрузка данных...',
    'dashboard.not-monitoring'=> 'Не мониторится',

    // Dashboard System Logging
    'dashboard.logging.title'=> 'Системные логи',
    'dashboard.logging.desc'=> 'Централизованное логирование и оповещения о системных событиях и ошибках',
    'dashboard.system.logs'=> 'Системные логи',
    'dashboard.critical.logs'=> 'Критические логи',

    // Dashboard Device Information
    'dashboard.device.info.title'=> 'Информация об устройстве',
    'dashboard.system.resources'=> 'Ресурсы системы',
    'dashboard.system.information'=> 'Информация о системе',
    'dashboard.system.platform'=> 'Информация о RouterBOARD',

    // Device info JS strings
    'device.system_identity' => 'Идентификатор системы',
    'device.routeros_version' => 'Версия RouterOS',
    'device.uptime' => 'Время работы',
    'device.board' => 'Плата',
    'device.health' => 'Состояние',
    'device.temp_label' => 'Темп.:',
    'device.voltage_label' => 'Напряж.:',
    'device.unknown' => 'Неизвестно',
    'device.na' => 'н/д',
    'device.cpu' => 'CPU',
    'device.memory' => 'Память',
    'device.disk' => 'Диск',
    'device.board_model' => 'Модель платы',
    'device.serial' => 'Серийный номер',
    'device.architecture' => 'Архитектура',
    'device.cpu_label' => 'CPU',
    'device.cores' => 'ядер',
    'device.build' => 'Сборка',
    'device.failed_load' => 'Не удалось загрузить информацию о системе',
    // Generate users preview JS strings
    'generate.generating' => 'Генерация...',
    'generate.print_fetch_failed' => 'Не удалось получить данные для печати: %s',
    'generate.network_not_ok' => 'Неверный сетевой ответ: %s',
    'generate.generation_failed' => 'Генерация не удалась: %s',
    'generate.unknown_error' => 'Неизвестная ошибка',
    'generate.preview_not_available' => 'Превью недоступно',
    'generate.failed_print_dialog' => 'Не удалось открыть системный диалог печати: %s',
    'generate.cached_cleared' => 'Кэшированная партия очищена',
    'generate.failed_clear_cached' => 'Не удалось очистить кэшированную партию',
    'generate.preview_failed' => 'Не удалось показать превью',
    'generate.preview' => 'Превью',
    'generate.unexpected_error' => 'Непредвиденная ошибка: %s',
    'generate.generated' => 'Сгенерировано %s пользователей',
    'generate.request_failed' => 'Запрос не удался при генерации ваучеров.',
    'generate.generate' => 'Генерировать',

    // Dashboard Hotspot Active Sessions
    'dashboard.hotspot.as.title'=> 'Активные сессии хотспота',
    'dashboard.ppp.as.title'=> 'Активные PPPoE-сессии',
    // JS dashboard strings (used by client-side locale export)
    'dashboard.no_active_sessions' => 'Нет активных сессий',
    'dashboard.no_ppp_active_sessions' => 'Нет активных PPP-сессий',
    'dashboard.active_session' => 'активная сессия',
    'dashboard.active_sessions' => 'активные сессии',
    'dashboard.name' => 'Имя',
    'dashboard.address' => 'Адрес',
    'dashboard.uptime' => 'Время работы',
    'dashboard.service' => 'Сервис',
    'dashboard.not_monitoring' => 'Не мониторится',
    'dashboard.more_format' => '... и ещё %d',
    'dashboard.unable_load_active' => 'Не удалось загрузить активные сессии',
    'dashboard.unable_load_ppp' => 'Не удалось загрузить активные PPP-сессии',

    // hotspot.php
    // Hotspot Page
    'hotspot.title'=> 'Управление хотспотом',
    'hotspot.desc'=> 'Управление пользователями хотспота, профилями, активными сессиями и хостами.',
    'hotspot.users'=> 'Пользователи',
    'hotspot.profiles'=> 'Профили',
    'hotspot.active'=> 'Активные',
    'hotspot.hosts'=> 'Хосты',

    // Hotspot Page Descriptions
    'hotspot.users.desc'=> 'Создавайте, редактируйте и управляйте аккаунтами пользователей хотспота.',
    'hotspot.profiles.desc'=> 'Управление профилями скорости, сессий и ограничений для пользователей.',
    'hotspot.active.desc'=> 'Просмотр и отключение текущих активных сессий хотспота.',
    'hotspot.hosts.desc'=> 'Просмотр и управление устройствами, подключёнными к хотспоту.',

    // Hotspot Page Buttons
    'hotspot.open.users'=> 'Открыть пользователей',
    'hotspot.open.profiles'=> 'Открыть профили',
    'hotspot.open.active'=> 'Открыть активные',
    'hotspot.open.hosts'=> 'Открыть хосты',

    // Hotspot - Back Button
    'hotspot.back-to-hotspot'=> 'Назад к управлению хотспотом',

    // Hotspot General Buttons
    'hotspot.action.button'=> 'Действия',
    'hotspot.generate.button'=> 'Генерировать',
    'hotspot.add-user.button'=> 'Добавить пользователя',
    'hotspot.enable.button'=> 'Включить',
    'hotspot.add-profile.button'=> 'Добавить профиль',
    'hotspot.edit.button'=> 'Редактировать',
    'hotspot.remove.button'=> 'Удалить',
    'hotspot.disable.button'=> 'Отключить',
    'hotspot.export.users'=> 'Экспорт пользователей',
    'hotspot.export.button'=> 'Экспорт',
    'hotspot.button.refresh'=> 'Обновить',
    'hotspot.button.prev'=> 'Назад',
    'hotspot.button.next'=> 'Вперед',
    'hotspot.sort.by'=> 'Сортировать по',
    'hotspot.sort.profiles'=> 'Сортировать по профилю',
    'hotspot.sort.comments'=> 'Сортировать по комментариям',

    // Hotspot Table Headers
    'hotspot.table.th.select'=> 'Выбрать всё',
    'hotspot.table.th.server'=> 'Имя сервера',
    'hotspot.table.th.user'=> 'Пользователь',
    'hotspot.table.th.name'=> 'Имя',
    'hotspot.table.th.address'=> 'Адрес',
    'hotspot.table.th.mac'=> 'MAC-адрес',
    'hotspot.table.th.profile'=> 'Профиль',
    'hotspot.table.th.uptime'=> 'Время работы',
    'hotspot.table.th.bytes-in'=> 'Байты вход.',
    'hotspot.table.th.bytes-out'=> 'Байты исход.',
    'hotspot.table.th.comment'=> 'Комментарий',
    'hotspot.table.th.to-address'=> 'К адресу',
    'hotspot.table.th.last-seen'=> 'Последняя активность',
    'hotspot.status.loading'=> 'Загрузка пользователей хотспота...',

    // Hotspot JS: hosts, profiles, users, modals
    // Hosts list
    'hotspot.hosts.no_hosts' => 'Хостов нет',
    'hotspot.hosts.loading' => 'Загрузка...',
    'hotspot.hosts.failed_to_contact_api' => 'Не удалось связаться с API',
    'hotspot.hosts.page_info' => 'Страница %s / %s (%s)',

    // Profiles list
    'hotspot.profiles.no_profiles' => 'Профилей нет',
    'hotspot.profiles.loading' => 'Загрузка...',
    'hotspot.profiles.failed_to_load' => 'Не удалось загрузить профили',
    'hotspot.profiles.failed_to_contact_api' => 'Не удалось связаться с API',
    'hotspot.profiles.no_pools' => '(пулов нет)',
    'hotspot.profiles.no_queues' => '(очередей нет)',
    'hotspot.profiles.no_types' => '(типов нет)',
    'hotspot.profiles.select' => 'Выбрать...',
    'hotspot.profiles.default' => 'по умолчанию',
    'hotspot.profiles.no_profiles_option' => '(профилей нет)',
    'hotspot.profiles.page_info' => 'Страница %s / %s (%s)',
    'hotspot.profiles.name_required' => 'Требуется имя',
    'hotspot.profiles.added' => 'Профиль добавлен',
    'hotspot.profiles.add_failed' => 'Не удалось добавить профиль: %s',
    'hotspot.profiles.server_contact_failed' => 'Не удалось связаться с сервером',
    'hotspot.profiles.id_missing' => 'ID профиля отсутствует',
    'hotspot.profiles.updated' => 'Профиль обновлён',
    'hotspot.profiles.update_failed' => 'Не удалось обновить профиль: %s',
    'hotspot.profiles.removed' => 'Профиль удалён',
    'hotspot.profiles.remove_failed' => 'Не удалось удалить профиль: %s',
    'hotspot.profiles.select_remove' => 'Выберите профиль для удаления',
    'hotspot.profiles.remove_confirm' => 'Вы уверены, что хотите удалить выбранный профиль?',
    'hotspot.profiles.remove_confirm_title' => 'Подтверждение',
    
    // Admin Control Panel translations
    'admin.title' => 'Панель администратора',
    'admin.desc' => 'Центр управления',
    'admin.maintenance' => 'Технические работы',
    'admin.maintenance.desc' => 'Включение/отключение уведомления о технических работах для посетителей.',
    'admin.page_access' => 'Управление доступом к страницам',
    'admin.page_access.desc' => 'Разрешение или запрет доступа пользователей к разделам приложения.',
    'admin.view_logs' => 'Просмотр логов',
    'admin.logs.title' => 'Логи доступа администратора',
    'admin.save' => 'Сохранить',
    'admin.saved' => 'Сохранено',
    'admin.save_failed' => 'Ошибка сохранения',
    'admin.save_error' => 'Не удалось сохранить настройки',
    'admin.load_logs_failed' => 'Не удалось загрузить логи',
    'admin.access_denied' => 'У вас нет прав для доступа к панели администратора.',
    'access.restricted.title' => 'Доступ ограничен',
    'access.restricted.desc' => 'Этот раздел в настоящее время отключён',
    'admin.section_disabled' => 'Раздел отключён администратором',
    'nav.disabled' => 'Отключено',
    // Maintenance toggle JS strings
    'maintenance.toast' => 'Режим обслуживания' . '<br/><br/>' . 'Функции ограничены, когда режим обслуживания включён.',
    'maintenance.update_toast' => 'Режим обновления системы' . '<br/><br/>' . 'Выполняются обновления системы. Некоторые функции могут быть недоступны.',
    'maintenance.set_failed' => 'Не удалось изменить состояние режима обслуживания',

    // Users modals and export
    'hotspot.modals.no_servers' => '(серверов нет)',
    'hotspot.modals.no_profiles' => '(профилей нет)',
    'hotspot.modals.please_select_export' => 'Выберите одного или нескольких пользователей для экспорта',
    'hotspot.modals.select_at_least_one_field' => 'Выберите хотя бы одно поле для экспорта',
    'hotspot.modals.no_users_selected' => 'Пользователи не выбраны',
    'hotspot.modals.no_data_to_export' => 'Нет данных для экспорта',
    'hotspot.modals.export_started' => 'Экспорт начат',
    'hotspot.modals.export_failed' => 'Не удалось экспортировать',
    'hotspot.modals.add_user_title' => 'Добавить пользователя хотспота',
    'hotspot.modals.edit_user_title' => 'Редактировать пользователя хотспота',
    'hotspot.modals.create_button' => 'Создать',
    'hotspot.modals.update_button' => 'Обновить',
    'hotspot.modals.failed_load_user' => 'Не удалось загрузить данные пользователя',
    'hotspot.modals.select_one_to_edit' => 'Выберите ровно одного пользователя для редактирования',
    'hotspot.modals.user_updated' => 'Пользователь обновлён',
    'hotspot.modals.user_created' => 'Пользователь создан',
    'hotspot.modals.create_update_failed' => 'Не удалось создать/обновить',
    'hotspot.modals.create_request_failed' => 'Запрос на создание не удался',

    // Users list
    'hotspot.users.no_users' => 'Пользователей нет',
    'hotspot.users.loading' => 'Загрузка...',
    'hotspot.users.empty_response' => 'Пустой ответ',
    'hotspot.users.failed_to_contact_api' => 'Не удалось связаться с API',
    'hotspot.users.select_one_or_more' => 'Выберите одного или нескольких пользователей.',
    'hotspot.users.remove_confirm' => 'Удалить выбранных пользователей? Это действие необратимо.',
    'hotspot.users.action_completed' => 'Действие "%s" выполнено. Успех: %s/%s',
    'hotspot.users.action_failed' => 'Действие не удалось: %s',
    'hotspot.users.request_failed' => 'Запрос не удался',
    'hotspot.users.sort_profiles' => 'Сортировать профили',
    'hotspot.users.sort_comments' => 'Сортировать комментарии',
    'hotspot.users.select_profiles_placeholder' => 'Сортировать профили',
    'hotspot.users.select_comments_placeholder' => 'Сортировать комментарии',

    // Hotspot JS helper strings
    'hotspot.no_active_entries' => 'Активных записей нет',
    'hotspot.loading' => 'Загрузка...',
    'hotspot.failed_to_contact_api' => 'Не удалось связаться с API',
    'hotspot.page_info' => 'Страница %s / %s (%s)',

    // Hotspot Modal Tabs and Titles
    'hotspot.modal.title.generate'=> 'Генерация пользователей / ваучеров',
    'hotspot.modal.general.tab'=> 'Общие',
    'hotspot.modal.printing.tab'=> 'Печать',
    'hotspot.modal.stats.tab'=> 'Статистика',
    'hotspot.modal.queueing.tab'=> 'Очереди',
    'hotspot.modal.scripts.tab'=> 'Скрипты',

    // Hotspot Modal Form Generate / Add User - General Tab
    'hotspot.modal.form.qty'=> 'Количество',
    'hotspot.modal.form.server'=> 'Сервер хотспота',
    'hotspot.modal.form.qty.help'=> 'Количество ваучеров/токенов, которые будут созданы.',
    'hotspot.modal.form.username'=> 'Имя пользователя',
    'hotspot.modal.form.password'=> 'Пароль',
    'hotspot.modal.form.user-type'=> 'Тип пользователя',
    'hotspot.modal.form.user-type.help'=> 'Имя пользователя и пароль — создаёт случайное имя пользователя и другой пароль (позволяет обычный вход).<br/>Имя пользователя = Пароль — создаёт случайное имя пользователя, пароль совпадает с именем (для ваучеров).',
    'hotspot.modal.form.code-length'=> 'Длина кода',
    'hotspot.modal.form.characters'=> 'Символы',
    'hotspot.modal.form.user-profile'=> 'Профиль пользователя',
    'hotspot.modal.form.comment'=> 'Комментарий',
    'hotspot.modal.form.optional-comment'=> 'Доп. комментарий',
    'hotspot.modal.form.mac-address'=>  'MAC-адрес',
    'hotspot.modal.form.time-limit'=>  'Ограничение по времени',
    'hotspot.modal.form.time-limit.help'=> 'Допустимые форматы:<br/>m - Минуты<br/>h - Часы<br/>d - Дни<br/><br/>Пользователь будет отключен при достижении временного лимита.<br/><br/>Примечания:<br/>1. Если установлены и Временной лимит, и Лимит данных, пользователь будет отключен при достижении любого из них.<br/>2. Если ни один лимит не установлен, пользователь останется активным до его ручного отключения или удаления.<br/>3. Временной лимит и Лимит данных можно использовать вместе для более точного контроля сессий.<br/>4. Убедитесь, что формат правильный, чтобы избежать ошибок при создании пользователя.<br/>5. Примеры: 30m (30 минут), 2h (2 часа), 1d (1 день).',
    'hotspot.modal.form.data-limit'=>  'Ограничение по трафику',
    'hotspot.modal.form.data-limit.help'=> 'Допустимые форматы:<br/>M - Мегабиты<br/>G - Гигабиты<br/><br/>Пользователь будет отключен при достижении лимита данных.<br/><br/>Примечания:<br/>1. Если установлены и Временной лимит, и Лимит данных, пользователь будет отключен при достижении любого из них.<br/>2. Если ни один лимит не установлен, пользователь останется активным до его ручного отключения или удаления.<br/>3. Временной лимит и Лимит данных можно использовать вместе для более точного контроля сессий.<br/>4. Убедитесь, что формат правильный, чтобы избежать ошибок при создании пользователя.<br/>5. Примеры: 500M (500 Мегабит), 2G (2 Гигабит).',

    // Hotspot Modal Form Generate - Printing Tab
    'hotspot.modal.form.hotspot-name'=> 'Название хотспота',
    'hotspot.modal.form.hotspot-dns'=> 'DNS',
    'hotspot.modal.form.hotspot-currency'=> 'Валюта',
    'hotspot.modal.form.hotspot-select-currency'=> 'Выбрать валюту',
    'hotspot.modal.form.hotspot-price'=> 'Цена',
    'hotspot.modal.form.hotspot-include-comment'=> 'Включить комментарий',
    'hotspot.modal.form.hotspot-include-comment-desc'=> 'Включить сгенерированный комментарий в печатный ваучер',
    'hotspot.modal.form.hotspot-template'=> 'Шаблон',

    // Hotspot Modal Form Generate - Printing Placeholders
    'hotspot.modal.form.hotspot-name-placeholder'=> 'Мой хотспот',
    'hotspot.modal.form.hotspot-dns-placeholder'=> 'hotspot.mtikops.com',
    'hotspot.modal.form.hotspot-price-placeholder'=> 'Цена за ваучер',

    // Hotspot Modal Form Generate - User-Type
    'hotspot.modal.form.user-type-regular'=> 'Имя пользователя и пароль',
    'hotspot.modal.form.user-type-voucher'=> 'Имя пользователя = Пароль',

    // Hotspot Modal Form Generate - Characters
    'hotspot.modal.form.characters-lower'=> 'abcd (строчные)',
    'hotspot.modal.form.characters-upper'=> 'ABCD (ЗАГЛАВНЫЕ)',
    'hotspot.modal.form.characters-mixed'=> 'AbCd (Смешанные)',
    'hotspot.modal.form.characters-num'=> '1234 (Цифры)',
    'hotspot.modal.form.characters-lower-num'=> 'a1b2 (строчные и цифры)',
    'hotspot.modal.form.characters-upper-num'=> 'A1B2 (ЗАГЛАВНЫЕ и цифры)',
    'hotspot.modal.form.characters-mixed-num'=> 'aA1bB2 (Смешанные и цифры)',

    // Hotspot Modal Form Stats - Stats Tab
    'hotspot.modal.form.stats.uptime'=> 'Время работы',
    'hotspot.modal.form.stats.bytes_in'=> 'Байты вход.',
    'hotspot.modal.form.stats.bytes_out'=> 'Байты исход.',
    'hotspot.modal.form.stats.limit-uptime'=> 'Ограничение по времени работы',
    'hotspot.modal.form.stats.limit-bytes_total'=> 'Ограничение по общему объёму',
    'hotspot.modal.form.stats.user-code'=> 'Код пользователя',
    'hotspot.modal.form.stats.expire-date'=> 'Дата окончания',

    // Hotspot Modal Form Misc
    'hotspot.modal.form.loading' => 'Загрузка данных...',

    // Hotspot Modal Form Buttons
    'hotspot.modal.form.button.generate-print'=> 'Генерировать и печатать',
    'hotspot.modal.form.button.generate'=> 'Только генерировать',
    'hotspot.modal.form.button.clear-cached-batch'=> 'Очистить кэшированную партию',
    'hotspot.modal.form.button.close'=> 'Закрыть',
    'hotspot.modal.form.button.create'=> 'Создать',
    'hotspot.modal.form.button.cancel'=> 'Отмена',

    // profiles.php
    // Hotspot User Profiles Page
    'hotspot.user.profiles.title'=> 'Профили',
    'hotspot.user.profiles.desc'=> 'Управление профилями скорости, сессий и ограничений для пользователей.',

    // Hotspot User Profiles Table Headers
    'hotspot.user.profiles.th.name'=> 'Имя',
    'hotspot.user.profiles.th.shared-users'=> 'Совместные пользователи',
    'hotspot.user.profiles.th.rate-limit'=> 'Ограничение скорости',
    'hotspot.user.profiles.th.idle-timeout'=> 'Таймаут простоя',
    'hotspot.user.profiles.th.keepalive-timeout'=> 'Таймаут keepalive',
    'hotspot.user.profiles.th.queue-type'=> 'Тип очереди',

    // Hotspot User Profiles Modal Form
    'hotspot.user.profiles.modal.title.add-profile'=> 'Добавить профиль',

    // Hotspot User Profile Form Fields - General Tab
    'hotspot.user.profiles.form.name'=> 'Имя профиля',
    'hotspot.user.profiles.form.pool'=> 'Пул адресов',
    'hotspot.user.profiles.form.rate-limit-rx'=> 'Ограничение (RX)',
    'hotspot.user.profiles.form.rate-limit-tx'=> 'Ограничение (TX)',
    'hotspot.user.profiles.form.shared-users'=> 'Совместные пользователи',
    'hotspot.user.profiles.form.expiry-mode'=> 'Режим истечения',
    'hotspot.user.profiles.form.expiry-duration'=> 'Период истечения',
    'hotspot.user.profiles.form.lock-device'=> 'Привязать к устройству',
    'hotspot.user.profiles.form.lock-server'=> 'Привязать к серверу',
    'hotspot.user.profiles.form.comment'=> 'Комментарий',

    // Expiry Mode Options
    'hotspot.user.profiles.form.expiry-mode_none'=> 'Нет',
    'hotspot.user.profiles.form.expiry-mode_remove'=> 'Удалить',
    'hotspot.user.profiles.form.expiry-mode_notice'=> 'Уведомление',
    'hotspot.user.profiles.form.expiry-mode_remove_record'=> 'Удалить и записать',
    'hotspot.user.profiles.form.expiry-mode_remove_notice'=> 'Удалить и уведомить',
    'hotspot.user.profiles.form.expiry-mode_help'=> 'Выберите способ обработки истечения срока действия пользователя для этого профиля.<br/><br/>Варианты:<br/>Нет - Без истечения срока.<br/>Удалить - Автоматически удалить пользователя при истечении.<br/>Уведомить - Уведомить пользователя о истечении, но не удалять.<br/>Удалить и записать - Удалить пользователя и зафиксировать событие.<br/>Уведомить и удалить - Уведомить пользователя, а затем удалить при истечении.',

    // Hotspot User Profile Form Fields - Queue Tab
    'hotspot.user.profiles.form.parent-queue'=> 'Родительская очередь',
    'hotspot.user.profiles.form.queue-type'=> 'Тип очереди',

    // Hotspot User Profiles Form Fields - Scripts Tab
    'hotspot.user.profiles.form.on-login-script'=> 'Скрипт при входе',
    'hotspot.user.profiles.form.on-login-script_placeholder'=> 'Дополнительный скрипт для выполнения при входе',
    'hotspot.user.profiles.form.on-logout-script'=> 'Скрипт при выходе',
    'hotspot.user.profiles.form.on-logout-script_placeholder'=> 'Дополнительный скрипт для выполнения при выходе',

    // Hotspot User Profile Modal - Edit Profile
    'hotspot.user.profile.edit'=> 'Редактировать профиль',
    'hotspot.user.profile.select.profile'=> 'Выберите профиль',
    'hotspot.user.profile.select.profile.desc'=> 'Выберите профиль для редактирования. После выбора откроется полный редактор.',
    'hotspot.user.profile.button.cancel'=> 'Отмена',
    'hotspot.user.profile.button.save'=> 'Сохранить',

    // Hotspot User Profile Modal - Remove Profile
    'hotspot.user.profiles.remove'=> 'Удалить профиль',
    'hotspot.user.profiles.remove-select'=> 'Выберите профиль для удаления',
    'hotspot.user.profiles.remove-warning'=> 'Это действие необратимо. Убедитесь, что хотите удалить выбранный профиль.',
    'hotspot.user.profiles.remove.button-cancel'=> 'Отмена',
    'hotspot.user.profiles.remove.button-remove'=> 'Удалить',

    // Hotspot Export Users Modal
    'hotspot.export.user.desc'=> 'Выберите поля для экспорта. Экспортируются только выбранные пользователи.',
    'hotspot.export.user.name'=> 'Имя',
    'hotspot.export.user.price'=> 'Цена',
    'hotspot.export.user.password'=> 'Пароль',
    'hotspot.export.user.profile'=> 'Профиль',
    'hotspot.export.user.comment'=> 'Комментарий',
    'hotspot.export.user.inc-header'=> 'Включить заголовки',
    'hotspot.export.user.column-order'=> 'Порядок колонок',
    'hotspot.export.user.column-up'=> 'Вверх',
    'hotspot.export.user.column-down'=> 'Вниз',
    'hotspot.export.user.column-desc'=> 'Выберите поле и используйте Вверх/Вниз для изменения порядка колонок.',
    'hotspot.export.user.button-cancel'=> 'Отмена',
    'hotspot.export.user.button-download'=> 'Скачать CSV',
    'hotspot.export.user.button-move-up'=> 'Переместить вверх',
    'hotspot.export.user.button-move-down'=> 'Переместить вниз',
    'hotspot.export.user.column-order-desc'=> 'Выберите поле и используйте кнопки Переместить вверх/Переместить вниз для изменения порядка столбцов.',

    // Hotspot Print Preview Modal
    'hotspot.print.preview.title'=> 'Предпросмотр печати',
    'hotspot.print.preview.desc'=> 'Предпросмотрите выбранных пользователей перед печатью.',
    'hotspot.print.preview.button-cancel'=> 'Отмена',
    'hotspot.print.preview.button-close'=> 'Закрыть',
    'hotspot.print.preview.button-print'=> 'Сохранить и печатать',
    

    // active.php
    // Hotspot Active Sessions Page

    // hosts.php
    // Hotspot Hosts Page

    // settings.php
    // Hotspot Settings Page
    'settings.title'=> 'Настройки',
    'settings.desc'=> 'Настройка идентификации устройства, системных служб и действий обслуживания.',
    'settings.identity'=> 'Идентификатор',
    'settings.ntp'=> 'NTP',
    'settings.files'=> 'Файлы',
    'settings.users'=> 'Пользователи',
    'settings.scheduler'=> 'Планировщик',
    'settings.scripts'=> 'Скрипты',
    'settings.reset'=> 'Сброс',
    'settings.reboot'=> 'Перезагрузка',
    'settings.shutdown'=> 'Выключение',

    // Settings Page Buttons
    //'settings.open.identity'=> 'Open Identity',
    //'settings.open.ntp'=> 'Open NTP',
    'settings.open.files'=> 'Открыть файлы',
    'settings.open.users'=> 'Управление пользователями',
    'settings.open.scheduler'=> 'Открыть планировщик',
    'settings.open.scripts'=> 'Открыть скрипты',
    //'settings.open.reset'=> 'Reset',
    //'settings.open.reboot'=> 'Reboot',
    //'settings.open.shutdown'=> 'Shutdown',

    // SETTINGS GENERAL BUTTONS
    'settings.buttons.upload'=> 'Загрузить',
    'settings.buttons.delete'=> 'Удалить',
    'settings.buttons.refresh'=> 'Обновить',
    'settings.buttons.save'=> 'Сохранить',
    'settings.buttons.cancel'=> 'Отмена',
    'settings.buttons.close'=> 'Закрыть',
    'settings.buttons.edit'=> 'Редактировать',
    'settings.buttons.add'=> 'Добавить',
    'settings.buttons.remove'=> 'Удалить',
    'settings.buttons.prev'=> 'Назад',
    'settings.buttons.next'=> 'Вперед',
    'settings.sort.by'=> 'Сортировать по',
    'settings.sort' => 'Сортировать',

    // Settings Page - Back Button
    'settings.back-to-settings'=> 'Назад к настройкам',

    // Settings Page - Actions
    'settings.actions'=> 'Действия',

    // Settings Page - Loading
    'settings.loading'=> 'Загрузка настроек...',

    // Settings Page Descriptions
    'settings.identity.desc'=> 'Просмотр и редактирование идентификатора устройства и основной информации о системе.',
    'settings.ntp.desc'=> 'Настройка протокола сетевого времени (NTP) для точного времени.',
    'settings.files.desc'=> 'Управление загруженными файлами и скриптами на устройстве.',
    'settings.users.desc'=> 'Управление системными пользователями и их правами доступа.',
    'settings.scheduler.desc'=> 'Создание запланированных задач для обслуживания и автоматизации.',
    'settings.scripts.desc'=> 'Управление и запуск пользовательских скриптов на устройстве.',
    'settings.reset.desc'=> 'Сброс конфигурации к значениям по умолчанию. Используйте с осторожностью.',
    'settings.reboot.desc'=> 'Перезагрузка устройства удалённо. Убедитесь, что все изменения сохранены перед перезагрузкой.',
    'settings.shutdown.desc'=> 'Безопасное удалённое выключение устройства. Используйте с осторожностью.',

    // Settings Table Headers
    'settings.table.th.name'=> 'Имя',
    'settings.table.th.group'=> 'Группа',
    'settings.table.th.last-login'=> 'Последний вход',
    'settings.table.th.comment'=> 'Комментарий',
    'settings.table.th.role'=> 'Роль',
    'settings.table.th.select'=> 'Выбрать всё',
    'settings.table.th.username'=> 'Имя пользователя',
    'settings.table.th.password'=> 'Пароль',
    'settings.table.th.actions'=> 'Действия',
    'settings.table.th.next-run'=> 'След. запуск',
    'settings.table.th.interval'=> 'Интервал',
    'settings.table.th.enabled'=> 'Включено',
    'settings.table.th.size'=> 'Размер',
    'settings.table.th.owner'=> 'Владелец',
    'settings.table.th.date'=> 'Дата',

   
    // Settings Page - Identity
    'settings.identity.placeholder'=> 'Введите идентификатор системы',
    'settings.identity.caption'=> 'Это имя отображается в логах и в сетевой идентификации.',

    // Settings Page - Identity Buttons
    'settings.identity.save'=> 'Сохранить идентификатор',
    'settings.identity.refresh'=> 'Обновить',

    // Settings Page - NTP Modal
    'settings.ntp.enabled'=> 'Включено',
    'settings.ntp.enabled-yes'=> 'Включено',
    'settings.ntp.enabled-no'=> 'Отключено',
    'settings.ntp.mode'=> 'Режим',
    'settings.ntp.mode-broadcast'=> 'Broadcast',
    'settings.ntp.mode-manycast'=> 'Manycast',
    'settings.ntp.mode-multicast'=> 'Multicast',
    'settings.ntp.mode-unicast'=> 'Unicast',
    'settings.ntp.server'=> 'NTP серверы',
    'settings.ntp.server-add'=> 'Добавить сервер',
    'settings.ntp.server-refresh'=> 'Обновить',
    'settings.ntp.server-save'=> 'Сохранить',

    // Settings Page - NTP Status
    'settings.ntp.status'=> 'Состояние',
    'settings.ntp.freq.drift'=> 'Дрейф частоты',
    'settings.ntp.synced.server'=> 'Синхронизированный сервер',
    'settings.ntp.synced.stratum'=> 'Синхронизированный stratum',
    'settings.ntp.system.offset'=> 'Смещение системы',

    // Settings Page - Files
    'settings.files.title'=> 'Менеджер файлов',
    'settings.files.desc'=> 'Загрузка, скачивание и управление файлами, хранящимися на устройстве.',


    // Settings Page - Users
    'settings.users.title'=> 'Управление пользователями',
    'settings.users.desc'=> 'Создание, редактирование и управление системными пользователями и их правами.',

    // Settings Page - Scheduler
    'settings.scheduler.title'=> 'Планировщик',
    'settings.scheduler.desc'=> 'Создание и управление запланированными задачами для обслуживания и автоматизации.',

    // Settings Page - Scripts
    'settings.scripts.title'=> 'Скрипты',
    'settings.scripts.desc'=> 'Создание, редактирование и запуск пользовательских скриптов на устройстве.',

    // Settings Page - Reset
    // Reset Modal
    'settings.reset.type'=> 'Тип сброса',
    'settings.reset.config'=> 'Сброс конфигурации (сохранить файлы пользователя)',
    'settings.reset.all'=> 'Сброс до заводских настроек (стереть всё, загрузить значения по умолчанию)',
    'settings.reset.delay'=> 'Задержка (секунды)',
    'settings.reset.delay.desc'=> 'Установите 0 для немедленного выполнения при использовании кнопки Планировать, или нажмите "Сбросить сейчас" для немедленного выполнения.',

    //Reset Buttons
    'settings.reset.button.schedule'=> 'Запланировать сброс',
    'settings.reset.button.reset-now'=> 'Сбросить сейчас',

    // Settings Page - Reboot
    // Reboot Modal
    'settings.reboot.delay'=> 'Задержка (секунды)',
    'settings.reboot.delay.desc'=> 'Установите 0 для немедленной перезагрузки при использовании кнопки Планировать, или нажмите "Перезагрузить сейчас" для принудительной немедленной перезагрузки.',

    // Reboot Buttons
    'settings.reboot.button.schedule'=> 'Запланировать перезагрузку',
    'settings.reboot.button.reboot-now'=> 'Перезагрузить сейчас',

    // Settings Page - Shutdown
    // Shutdown Modal
    'settings.shutdown.delay'=> 'Задержка (секунды)',
    'settings.shutdown.delay.desc'=> 'Установите 0 для немедленного выключения при использовании кнопки Планировать, или нажмите "Выключить сейчас" для принудительного немедленного выключения.',

    // Shutdown Buttons
    'settings.shutdown.button.schedule'=> 'Запланировать выключение',
    'settings.shutdown.button.shutdown-now'=> 'Выключить сейчас',


    // queues.php
    // Queues Page
    'queues.title'=> 'Управление очередями',
    'queues.desc'=> 'Управление простыми очередями, деревьями очередей и типами очередей.',

    'queues.simple'=> 'Простые',
    'queues.tree'=> 'Дерево',
    'queues.types'=> 'Типы',
    'queues.simple-queue'=> 'Простые очереди',
    'queues.queue-tree'=> 'Деревья очередей',
    'queues.queue-types'=> 'Типы очередей',

    // Queues Page Descriptions
    'queues.simple.desc'=> 'Создание и управление простыми очередями для хостов/целевых адресов.',
    'queues.tree.desc'=> 'Управление иерархическими деревьями очередей для продвинутого формирования трафика.',
    'queues.types.desc'=> 'Определение и управление типами очередей и классификаторами пакетов.',

    // Queues Page Buttons
    'queues.open.simple'=> 'Открыть простые очереди',
    'queues.open.tree'=> 'Открыть дерево очередей',
    'queues.open.types'=> 'Открыть типы очередей',

    // Queues Page - Back Button
    'queues.back-to-queues'=> 'Назад к очередям',

    // Queues General Buttons
    'queues.button.new'=> 'Создать',
    'queues.button.edit'=> 'Редактировать',
    'queues.button.enable'=> 'Включить',
    'queues.button.disable'=> 'Отключить',
    'queues.button.remove'=> 'Удалить',
    'queues.button.refresh'=> 'Обновить',
    'queues.button.pause-polling'=> 'Приостановить опрос',
    'queues.sort.by'=> 'Сортировать по',
    'queues.sort'=> 'Сортировать',
    'queues.select.all'=> 'Выбрать всё',
    'queues.button.prev'=> 'Назад',
    'queues.button.next'=> 'Вперед',
    'queues.button.save'=> 'Сохранить',
    'queues.button.cancel'=> 'Отмена',
    'queues.button.create'=> 'Создать',


    // Queues Loading Status
    'queues.status.loading'=> 'Загрузка очередей...',

    // simple.php
    // Simple Queues Page


    // Simple Queues Action Buttons
    'queues.simple.actions'=> 'Действия',
    'queues.simple.actions.desc'=> 'Выполнить действия для выбранных очередей.',

    // Queues Table Headers
    'queues.table.th.name'=> 'Имя',
    'queues.table.th.number'=> 'Номер',
    'queues.table.th.target'=> 'Цель',
    'queues.table.th.upload-limit'=> 'Лимит загрузки',
    'queues.table.th.download-limit'=> 'Лимит скачивания',
    'queues.table.th.download-avg-rate'=> 'Сред. скорость загрузки',
    'queues.table.th.max-limit'=> 'Макс. лимит',
    'queues.table.th.queue-type'=> 'Тип очереди',
    'queues.table.th.limit-at'=> 'Ограничение в',
    'queues.table.th.bytes'=> 'Байты',
    'queues.table.th.avg.rate'=> 'Сред. скорость',
    'queues.table.th.kind'=> 'Тип',

    // Queues Modal Form - Tabs
    'queues.tab.main'=> 'Основные',
    'queues.tab.advanced'=> 'Дополнительно',
    'queues.tab.queueing'=> 'Очереди',

    // Queues Modal Form Tab
    'queues.modal.form.new.simple'=> 'Новая простая очередь',
    'queue.modal.form.edit.simple'=> 'Редактировать простую очередь',
    'queues.modal.form.enabled'=> 'Включено',
    'queues.modal.form.name'=> 'Имя',
    'queues.modal.form.target'=> 'Цель',
    'queues.modal.form.target-select-iface'=> 'Выбрать интерфейс',
    'queues.modal.form.dst'=> 'Назначение',
    'queues.modal.form.dst-select-iface'=> 'Выбрать интерфейс',
    'queues.modal.form.target.dst-caption'=> 'Выберите интерфейс или введите пользовательскую цель ниже.',
    'queues.modal.form.placeholder'=> 'или введите IP (например: 192.168.10.0/24 или 10.0.0.5)',
    'queues.modal.form.target.upload'=> 'Целевой загрузка',
    'queues.modal.form.max-limit'=> 'Макс. лимит',
    'queues.modal.form.target.download'=> 'Целевой скачивание',
    'queues.modal.form.pkt-marks'=> 'Метки пакетов',
    'queues.modal.form.limit-at'=> 'Ограничение в',
    'queues.modal.form.burst-limit'=> 'Burst лимит',
    'queues.modal.form.burst-threshold'=> 'Порог burst',
    'queues.modal.form.burst-time'=> 'Время burst',
    'queues.modal.form.priority'=> 'Приоритет',
    'queues.modal.form.bucket-size'=> 'Размер корзины',
    'queues.modal.form.parent-queue'=> 'Родительская очередь',
    'queues.modal.form.queue-type'=> 'Тип очереди',
    'queues.modal.form.comment'=> 'Комментарий',
    'queues.modal.form.comment-placeholder'=> 'Дополнительный комментарий',
    'queues.modal.form.clear-parent'=> 'Очистить родителя (удалить родительскую связь)',

    // tree.php
    // Queue Tree Page

    // Queue Tree Action Buttons
    'queues.tree.actions'=> 'Действия',
    'queues.tree.action.desc'=> 'Выполнить действия для выбранных записей дерева очередей.',

    // Queue Tree Modal Form - Tabs
    'queues.tree.create.title'=> 'Создать запись в дереве очередей',
    'queue.tree.tab.general'=> 'Основные',
    'queue.tree.tab.rate-limit'=> 'Ограничение скорости',


    // types.php
    // Queue Types Page
  
    // Queue Types Action 
    'queues.types.actions'=> 'Действия',
    'queues.types.action.desc'=> 'Выполнить действия для выбранных типов очередей.',


    // ppp.php
    // PPP Page
    'ppp.title'=> 'Управление PPPoE',
    'ppp.desc'=> 'Управление серверами PPPoE, секретами и профилями.',

    
    'ppp.pppoe.servers'=> 'Сервера PPPoE',
    'ppp.servers'=> 'Сервера',
    'ppp.secrets'=> 'Секреты',
    'ppp.profiles'=> 'Профили',
    'ppp.active'=> 'Активные сессии',
    
    // PPP Page Descriptions
    'ppp.servers.desc'=> 'Просмотр и управление экземплярами серверов PPPoE и привязками.',
    'ppp.secrets.desc'=> 'Управление секретами PPPoE (учётные данные пользователей).',
    'ppp.profiles.desc'=> 'Создание и управление профилями PPPoE.',
    'ppp.active.desc'=> 'Просмотр и отключение активных PPPoE сессий.',

    'ppp.open.servers'=> 'Открыть сервера PPPoE',
    'ppp.open.secrets'=> 'Открыть секреты',
    'ppp.open.profiles'=> 'Открыть профили',
    'ppp.open.active'=> 'Открыть активные сессии',

    // PPP Page - Back Button
    'ppp.back-to-ppp'=> 'Назад к управлению PPPoE',

    // PPP Actions
    'ppp.actions'=> 'Действия',

    // PPP General Buttons
    'ppp.buttons.new'=> 'Создать',
    'ppp.buttons.edit'=> 'Редактировать',
    'ppp.buttons.enable'=> 'Включить',
    'ppp.buttons.disable'=> 'Отключить',
    'ppp.buttons.remove'=> 'Удалить',
    'ppp.buttons.refresh'=> 'Обновить',
    'ppp.sort.by'=> 'Сортировать по',
    'ppp.sort'=> 'Сортировать',
    'ppp.select.all'=> 'Выбрать всё',
    'ppp.buttons.prev'=> 'Назад',
    'ppp.buttons.next'=> 'Вперед',
    'ppp.buttons.clear'=> 'Очистить',
    'ppp.buttons.cancel'=> 'Отмена',
    'ppp.buttons.create'=> 'Создать',
    'ppp.buttons.save'=> 'Сохранить',
    'ppp.buttons.proceed'=> 'Продолжить',

    // PPP Loading Status
    'ppp.status.loading'=> 'Загрузка данных PPPoE...',

    // PPP Secrets Table Headers
    'ppp.table.th.service-name'=> 'Имя сервиса',
    'ppp.table.th.iface'=> 'Интерфейс',
    'ppp.table.th.keepalive'=> 'Таймаут keepalive',
    'ppp.table.th.profile'=> 'Профиль',
    'ppp.table.th.one-session-host'=> 'Одна сессия на хост',
    'ppp.table.th.authentication'=> 'Аутентификация',
    'ppp.table.th.name'=> 'Имя',
    'ppp.table.th.password'=> 'Пароль',
    'ppp.table.th.service'=> 'Сервис',
    'ppp.table.th.address'=> 'Адрес',
    'ppp.table.th.caller-id'=> 'Caller ID',
    'ppp.table.th.local-address'=> 'Локальный адрес',
    'ppp.table.th.remote-address'=> 'Удалённый адрес',
    'ppp.table.th.last-logged-out'=> 'Последний выход',
    'ppp.table.th.last-disc-reason'=> 'Причина отключения',
    'ppp.table.th.last-called-id'=> 'Последний вызываемый ID',
    'ppp.table.th.rate-limit'=> 'Ограничение скорости',
    'ppp.table.th.only-one'=> 'Только один',
    'ppp.table.th.uptime'=> 'Время работы',
    'ppp.table.th.bytes-in'=> 'Байты вход.',
    'ppp.table.th.bytes-out'=> 'Байты исх.',

    // PPP Add Server Modal Form
    'ppp.modal.form.title'=> 'Добавить сервер PPPoE',
    'ppp.modal.form.enabled'=> 'Включено',
    'ppp.modal.form.one-session-per-host'=> 'Одна сессия на хост',
    'ppp.modal.form.accept-empty-services'=> 'Разрешить пустые сервисы',
    'ppp.modal.form.accept-untagged'=> 'Разрешить без тега',
    'ppp.modal.form.service-name'=> 'Имя сервиса',
    'ppp.modal.form.service-name_placeholder'=> 'Имя PPPoE',
    'ppp.modal.form.interface'=> 'Интерфейс',
    'ppp.modal.form.placeholder'=> 'По умолчанию',
    'ppp.modal.form.max-mtu'=> 'Max MTU',
    'ppp.modal.form.max-mru'=> 'Max MRU',
    'ppp.modal.form.mrru'=> 'MRRU',
    'ppp.modal.form.keepalive-timeout'=> 'Таймаут keepalive',
    'ppp.modal.form.profile'=> 'Профиль',
    'ppp.modal.form.max-sessions'=> 'Макс. сессий',
    'ppp.modal.form.auth-methods'=> 'Методы аутентификации',
    'ppp.modal.form.auth-mschapv2'=> 'MS-CHAPv2',
    'ppp.modal.form.auth-mschapv1'=> 'MS-CHAPv1',
    'ppp.modal.form.auth-chap'=> 'CHAP',
    'ppp.modal.form.auth-pap'=> 'PAP',

    // PPP Add/Edit Secret Modal Form
    'ppp.modal.form.secret.name'=> 'Имя',
    'ppp.modal.form.secret.password'=> 'Пароль',
    'ppp.modal.form.secret.service-type'=> 'Сервис',
    'ppp.modal.form.secret.local-address'=> 'Локальный адрес',
    'ppp.modal.form.secret.remote-address'=> 'Удалённый адрес',

    // secrets.php
    // Modal Titles
    'ppp.modal.form.add.ppp-secret'=> 'Добавить секрет PPPoE',
    'ppp.modal.form.edit.ppp-secret'=> 'Редактировать секрет PPPoE',

    // PPP Secrets Page Modal Tabs
    'ppp.secrets.tab.general'=> 'Общие',  
    'ppp.secrets.tab.details'=> 'Детали',

    // profiles.php
    // PPP Profiles Page

    // PPP Profiles Modal Titles
    'ppp.modal.form.add.ppp-profile'=> 'Добавить профиль PPPoE',
    'ppp.modal.form.edit.ppp-profile'=> 'Редактировать профиль PPPoE',


    // PPP Profiles Modal Tabs
    'ppp.profiles.tab.general'=> 'Общие',
    'ppp.profiles.tab.protocols'=> 'Протоколы',
    'ppp.profiles.tab.limits'=> 'Ограничения',
    'ppp.profiles.tab.queue'=> 'Очередь',
    'ppp.profiles.tab.scripts'=> 'Скрипты',

    // PPP Profiles Modal Form Fields
    'ppp.modal.form.profile.name'=> 'Имя',
    'ppp.modal.form.profile.local-address'=> 'Локальный адрес',
    'ppp.modal.form.profile.remote-address'=> 'Удалённый адрес',
    'ppp.modal.form.profile.use-ipv6'=> 'Использовать IPv6',
    'ppp.modal.form.profile.use-mpls'=> 'Использовать MPLS',
    'ppp.modal.form.profile.use-comp'=> 'Использовать сжатие',
    'ppp.modal.form.profile.use-enc'=> 'Использовать шифрование',
    'ppp.modal.form.profile.sess-timeout'=> 'Таймаут сессии',
    'ppp.modal.form.profile.idle-timeout'=> 'Таймаут простоя',
    'ppp.modal.form.profile.rate-limit'=> 'Ограничение скорости',
    'ppp.modal.form.profile.only-one'=> 'Только один',
    'ppp.modal.form.profile.parent-queue'=> 'Родительская очередь',
    'ppp.modal.form.profile.queue-type-rx'=> 'Тип очереди (загрузка)',
    'ppp.modal.form.profile.queue-type-tx'=> 'Тип очереди (скачивание)',
    'ppp.modal.form.profile.script-onup'=> 'При поднятии',
    'ppp.modal.form.profile.script-ondown'=> 'При опускании',
    'ppp.modal.form.profile.script-placeholder'=> 'Скрипт будет выполнен при срабатывании события',
    'ppp.modal.form.migration.confirm'=> 'Подтвердите миграцию профиля',
    'ppp.modal.form.migration.caption'=> 'Очистка родительской очереди или типа очереди для этого профиля может потребовать воссоздания профиля и переназначения связанных секретов PPP. Эта операция может быть разрушительной. Продолжить?',

    // ip.php
    // IP Page (extended)
    'ip.title'=> 'Управление IP',
    'ip.desc'=> 'Управление ARP, адресами, DHCP, DNS, пулами и связанными IP-сервисами.',

    'ip.arp'=> 'ARP',
    'ip.addresses'=> 'IP-адреса',
    'ip.cloud'=> 'Облако',
    'ip.dhcp.client'=> 'DHCP-клиент',
    'ip.dhcp.server'=> 'DHCP-сервер',
    'ip.dns'=> 'DNS',
    'ip.pool'=> 'Пулы',
    'ip.services'=> 'Сервисы',
    'ip.upnp'=> 'UPnP',
    'ip.settings'=> 'Настройки',
    
    'ip.arp.desc'=> 'Просмотр и управление записями таблицы ARP.',
    'ip.addresses.desc'=> 'Управление IP-адресами, назначенными интерфейсам.',
    'ip.cloud.desc'=> 'Настройки Cloud/DDNS. Значения читаются с маршрутизатора.',
    'ip.dhcp.client.desc'=> 'Просмотр и управление DHCP-клиентами.',
    'ip.dhcp.server.desc'=> 'Настройка DHCP-сервера и аренды.',
    'ip.dns.desc'=> 'Управление настройками DNS и статическими записями.',
    'ip.pool.desc'=> 'Управление пулами адресов для DHCP и других сервисов.',
    'ip.services.desc'=> 'Включение или отключение IP-сервисов.',
    'ip.upnp.desc'=> 'Настройки UPnP (Universal Plug and Play). Значения читаются с маршрутизатора.',
    'ip.settings.desc'=> 'Общие настройки подсистемы IP.',

    'ip.open.arp'=> 'Открыть ARP',
    'ip.open.addresses'=> 'Открыть адреса',
    'ip.open.cloud'=> 'Открыть облако',
    'ip.open.dhcp.client'=> 'Открыть DHCP-клиента',
    'ip.open.dhcp.server'=> 'Открыть DHCP-сервер',
    'ip.open.dns'=> 'Открыть DNS',
    'ip.open.pool'=> 'Открыть пул',
    'ip.open.services'=> 'Открыть сервисы',
    'ip.open.upnp'=> 'Открыть UPnP',
    'ip.open.settings'=> 'Открыть настройки',

    // IP Page - Back Button
    'ip.back-to-ip'=> 'Назад к управлению IP',

    // IP JS strings
    // Addresses
    'ip.addresses.no_addresses' => 'Адресов нет',
    'ip.addresses.loading' => 'Загрузка...',
    'ip.addresses.failed_to_contact_api' => 'Не удалось связаться с API',
    'ip.addresses.please_select_one_or_more' => 'Пожалуйста, выберите одну или несколько записей',
    'ip.addresses.select_one_to_edit' => 'Выберите ровно один адрес для редактирования',
    'ip.addresses.action_completed' => 'Действие %s выполнено',
    'ip.addresses.action_failed' => 'Действие не удалось: %s',
    'ip.addresses.request_failed' => 'Запрос не удался: %s',
    'ip.addresses.address_added' => 'Адрес добавлен',
    'ip.addresses.address_updated' => 'Адрес обновлён',
    'ip.addresses.add_failed' => 'Не удалось добавить: %s',
    'ip.addresses.update_failed' => 'Не удалось обновить: %s',
    'ip.addresses.page_info' => 'Страница %s / %s (%s)',

    // ARP
    'ip.arp.no_arp_entries' => 'Записей ARP нет',
    'ip.arp.loading' => 'Загрузка...',
    'ip.arp.failed_to_contact_api' => 'Не удалось связаться с API',
    'ip.arp.please_select_one_or_more' => 'Пожалуйста, выберите одну или несколько записей',
    'ip.arp.enable_confirm' => 'Включить выбранные записи ARP?',
    'ip.arp.disable_confirm' => 'Отключить выбранные записи ARP?',
    'ip.arp.remove_confirm' => 'Удалить выбранные записи ARP?',
    'ip.arp.page_info' => 'Страница %s / %s (%s)',

    // Cloud
    'ip.cloud.failed_to_load' => 'Не удалось загрузить настройки облака: %s',
    'ip.cloud.reverted' => 'Изменения отменены',
    'ip.cloud.applied' => 'Настройки облака применены',
    'ip.cloud.apply_failed' => 'Не удалось применить: %s',

    // DHCP Client
    'ip.dhcp.client.no_clients' => 'DHCP-клиенты отсутствуют',
    'ip.dhcp.client.failed_to_load' => 'Не удалось загрузить DHCP-клиентов: %s',
    'ip.dhcp.client.please_select_interface' => 'Пожалуйста, выберите интерфейс',
    'ip.dhcp.client.created' => 'DHCP-клиент создан',
    'ip.dhcp.client.create_failed' => 'Не удалось создать: %s',
    'ip.dhcp.client.no_entries_selected' => 'Записи не выбраны',
    'ip.dhcp.client.enable_completed' => 'Включение выполнено',
    'ip.dhcp.client.enable_failed' => 'Не удалось включить: %s',
    'ip.dhcp.client.disable_completed' => 'Отключение выполнено',
    'ip.dhcp.client.disable_failed' => 'Не удалось отключить: %s',
    'ip.dhcp.client.remove_confirm' => 'Удалить выбранные DHCP-клиенты?',
    'ip.dhcp.client.option_name_code_required' => 'Требуются имя и код',
    'ip.dhcp.client.option_created' => 'Опция создана',
    'ip.dhcp.client.option_create_failed' => 'Не удалось создать: %s',
    'ip.dhcp.client.no_options' => 'Опции отсутствуют',

    // DHCP Networks
    'ip.dhcp.networks.no_networks' => 'DHCP-сети отсутствуют',
    'ip.dhcp.networks.loading' => 'Загрузка...',
    'ip.dhcp.networks.select_one_to_edit' => 'Пожалуйста, выберите одну сеть для редактирования',
    'ip.dhcp.networks.create_not_implemented' => 'Создание новой сети: не реализовано',
    'ip.dhcp.networks.please_select_remove' => 'Пожалуйста, выберите одну или несколько сетей для удаления',
    'ip.dhcp.networks.remove_confirm' => 'Удалить выбранные сети?',
    'ip.dhcp.networks.removed' => 'Удалено',
    'ip.dhcp.networks.remove_failed' => 'Не удалось удалить: %s',
    'ip.dhcp.networks.page_info' => 'Страница %s / %s (%s)',

    // DNS
    'ip.dns.add_server_placeholder' => 'Добавить DNS-сервер (IP)',
    'ip.dns.remove' => 'Удалить',
    'ip.dns.loading' => 'Загрузка...',
    'ip.dns.failed_to_contact_api' => 'Не удалось связаться с API',
    'ip.dns.error_loading' => 'Ошибка при загрузке настроек DNS',
    'ip.dns.dns_saved' => 'Настройки DNS сохранены',
    'ip.dns.failed_to_save' => 'Не удалось сохранить: %s',
    'ip.dns.save_confirm' => 'Сохранить настройки DNS?',
    'ip.dns.no_static_entries' => 'Статических записей нет',
    'ip.dns.static_added' => 'Статическая запись добавлена',
    'ip.dns.static_add_failed' => 'Не удалось добавить статическую запись',
    'ip.dns.performing_action' => 'Выполняется %s...',
    'ip.dns.invalid_json' => 'Неверный JSON-ответ',
    'ip.dns.request_failed' => 'Запрос не удался: %s',
    'ip.dns.flush_cache_confirm' => 'Очистить весь кэш DNS?',
    'ip.dns.cache_flushed' => 'Кэш очищен',
    'ip.dns.failed_flush_cache' => 'Не удалось очистить кэш: %s',
    'ip.dns.no_cache_entries' => 'Кэш-позиций нет',

    // Pool
    'ip.pool.no_pools' => 'Пулов нет',
    'ip.pool.please_select_one_or_more' => 'Пожалуйста, выберите один или несколько пулов',
    'ip.pool.select_one_to_edit' => 'Выберите ровно один пул для редактирования',
    'ip.pool.name_and_address_required' => 'Требуются имя и адрес',
    'ip.pool.pool_created' => 'Пул создан',
    'ip.pool.create_failed' => 'Не удалось создать: %s',
    'ip.pool.pool_updated' => 'Пул обновлён',
    'ip.pool.update_failed' => 'Не удалось обновить: %s',
    'ip.pool.remove_confirm' => 'Удалить выбранный(е) пул(ы)?',
    'ip.pool.action_completed' => 'Действие %s выполнено',
    'ip.pool.action_failed' => 'Действие не удалось: %s',
    'ip.pool.request_failed' => 'Запрос не удался: %s',
    'ip.pool.none' => '(нет)',
    'ip.pool.loading' => 'Загрузка...',
    'ip.pool.failed_to_contact_api' => 'Не удалось связаться с API',
    'ip.pool.page_info' => 'Страница %s / %s (%s)',

    // IP Settings
    'ip.settings.refreshing_settings' => 'Обновление настроек...',
    'ip.settings.no_settings_found' => 'Настройки IP не найдены',
    'ip.settings.failed_to_load' => 'Не удалось загрузить настройки IP',
    'ip.settings.updated' => 'Настройки IP обновлены',
    'ip.settings.update_failed' => 'Не удалось обновить: %s',

    // IP Page - Loading Status
    'ip.loading'=> 'Загрузка данных IP...',

    // IP Page Actions
    'ip.actions'=> 'Действия',

    // IP Page General Buttons
    'ip.buttons.new'=> 'Добавить',
    'ip.buttons.edit'=> 'Редактировать',
    'ip.buttons.refresh'=> 'Обновить',
    'ip.buttons.create'=> 'Создать',
    'ip.buttons.save'=> 'Сохранить',
    'ip.buttons.cancel'=> 'Отмена',
    'ip.buttons.enable'=> 'Включить',
    'ip.buttons.disable'=> 'Отключить',
    'ip.buttons.remove'=> 'Удалить',
    'ip.buttons.prev'=> 'Назад',
    'ip.buttons.next'=> 'Вперед',
    'ip.sort.by'=> 'Сортировать по',
    'ip.sort'=> 'Сортировать',
    'ip.select.all'=> 'Выбрать всё',
    'ip.buttons.flush.cache'=> 'Очистить кэш',
    'ip.buttons.add.dns.server'=> 'Добавить DNS-сервер',


    // IP UPnP Page
    'ip.upnp.enabled'=> 'Включено',
    'ip.upnp.allow-disable-external-iface'=> 'Разрешить отключение внешнего интерфейса',
    'ip.upnp.show-dummy-rule'=> 'Показать фиктивное правило',

    // arp.php
    // IP ARP Page

    // addresses.php
    // IP Addresses Page

    // IP Table Headers
    'ip.table.th.address'=> 'Адрес',
    'ip.table.th.network'=> 'Сеть',
    'ip.table.th.iface'=> 'Интерфейс',
    'ip.table.th.comment'=> 'Комментарий',
    'ip.table.th.dhcp.client.name' => 'Имя',
    'ip.table.th.dhcp.client.code-value' => 'Значение кода',
    'ip.table.th.dhcp.client.client-value' => 'Значение клиента',
    'ip.table.th.dns.name'=> 'Имя',
    'ip.table.th.dns.regexp'=> 'Регулярное выражение',
    'ip.table.th.dns.type'=> 'Тип',
    'ip.table.th.dns.value'=> 'Значение',
    'ip.table.th.dns.ttl'=> 'TTL',
    'ip.table.th.dns.data'=> 'Данные',

    // IP Address Modal Titles
    'ip.modal.form.add.address'=> 'Добавить IP-адрес',
    'ip.modal.form.edit.address'=> 'Редактировать IP-адрес',

    // IP Address Modal Form
    'ip.modal.form.ip.address-mask'=> 'IP-адрес / Маска',
    'ip.modal.form.ip.network'=> 'Сеть',
    'ip.modal.form.iface'=> 'Интерфейс',
    'ip.modal.form.comment'=> 'Комментарий',
    
    // cloud.php
    // IP Cloud Page

    // IP Cloud Modal Form
    'ip.cloud.enabled'=> 'DDNS включён',
    'ip.cloud.ddns.update.interval'=> 'Интервал обновления DDNS',
    'ip.cloud.update.time'=> 'Время обновления',
    'ip.cloud.public.ipv4'=> 'Публичный IPv4',
    'ip.cloud.public.ipv6'=> 'Публичный IPv6',
    'ip.cloud.dns.name' => 'Имя DNS',
    'ip.cloud.use-router-defaults'=> 'Использовать значения маршрутизатора по умолчанию',
    'ip.cloud.yes'=> 'Да',
    'ip.cloud.no'=> 'Нет',

    // dhcp-client.php
    // IP DHCP Client Page
    'ip.dhcp.client.options'=> 'Опции DHCP-клиента',
    'ip.dhcp.client.modal.form.interface'=> 'Интерфейс',
    'ip.dhcp.client.modal.form.enabled'=> 'Включено',
    'ip.dhcp.client.modal.form.use-peer-dns'=> 'Использовать DNS пира',
    'ip.dhcp.client.modal.form.use-peer-ntp'=> 'Использовать NTP пира',
    'ip.dhcp.client.modal.form.add-default-route'=> 'Добавить маршрут по умолчанию',
    'ip.dhcp.client.modal.form.default-route-distance'=> 'Метрика маршрута по умолчанию',
    'ip.dhcp.client.options2'=> 'Опции DHCP-клиента',
    'ip.dhcp.client.modal.form.name'=> 'Имя',
    'ip.dhcp.client.modal.form.code'=> 'Код',
    'ip.dhcp.client.modal.form.value'=> 'Значение',

   
    // dns.php
    // IP DNS Page

    // IP DNS - Modal Form
    'ip.dns.form.servers'=> 'DNS-серверы',
    'ip.dns.form.dynamic-servers'=> 'Динамические серверы',
    'ip.dns.form.use.doh.servers'=> 'Использовать DoH-серверы',
    'ip.dns.form.doh.max.server.conn'=> 'Макс. соединений с DoH-сервером',
    'ip.dns.form.doh.max.concurrent.queries'=> 'Макс. параллельных DoH-запросов',
    'ip.dns.form.doh.timeout'=> 'Таймаут DoH (секунды)',
    'ip.dns.form.allow-remote.requests'=> 'Разрешить удалённые запросы',

    'ip.dns.form.cache.size'=> 'Размер кэша (КБ)',
    'ip.dns.form.cache.max-ttl'=> 'Макс. TTL кэша (секунды)',
    'ip.dns.form.cache.min-ttl'=> 'Мин. TTL кэша (секунды)',
    'ip.dns.form.max.concurrent.queries'=> 'Макс. параллельных запросов',
    'ip.dns.form.max.concurrent.tcp'=> 'Макс. параллельных TCP-соединений',
    'ip.dns.form.query.timeout'=> 'Таймаут запроса (секунды)',
    'ip.dns.form.cache.used'=> 'Использование кэша (только чтение)',

    'ip.dns.form.add.static.entry'=> 'Добавить статическую запись DNS',
    'ip.dns.form.add.static.name'=> 'Имя',
    'ip.dns.form.add.static.type'=> 'Тип',
    'ip.dns.form.add.static.value'=> 'Значение',
    'ip.dns.form.add.static.ttl'=> 'TTL',
    'ip.dns.form.add.static.regexp'=> 'Регулярное выражение',

    // IP DNS - Static DNS
    'ip.dns.static'=> 'Статические DNS',
    'ip.dns.static.desc'=> 'Управление статическими записями DNS, переопределяющими динамическое разрешение.',

    // IP DNS - Cache Settings
    'ip.dns.cache'=> 'Настройки кэша DNS',

    // pool.php
    // IP Pool Page

    // IP Pool Table Headers
    'ip.pool.table.th.name'=> 'Имя',
    'ip.pool.table.th.ranges'=> 'Диапазоны',
    'ip.pool.table.th.comment'=> 'Комментарий',
    'ip.pool.table.th.total-addresses'=> 'Всего адресов',
    'ip.pool.table.th.used'=> 'Использовано',
    'ip.pool.table.th.available'=> 'Доступно',

    // IP Pool Modal Form
    'ip.pool.modal.form.create.title'=> 'Создать пул IP-адресов',
    'ip.pool.modal.form.edit.title'=> 'Редактировать пул IP-адресов',
    'ip.pool.modal.form.name'=> 'Имя',
    'ip.pool.modal.form.ranges'=> 'Диапазоны адресов',
    'ip.pool.modal.form.ranges-placeholder'=> 'например 192.168.1.100-192.168.1.200 или 10.0.0.0/24',
    'ip.pool.modal.form.comment'=> 'Комментарий',
    'ip.pool.modal.form.next-address'=> 'Следующий адрес',
    'ip.pool.modal.form.total-addresses'=> 'Всего адресов',
    'ip.pool.modal.form.used'=> 'Использовано',
    'ip.pool.modal.form.available'=> 'Доступно',

    // services.php
    // IP Services Page

    // IP Services Table Headers
    'ip.services.table.th.name'=> 'Имя',
    'ip.services.table.th.port'=> 'Порт',
    'ip.services.table.th.available-from'=> 'Доступно от',
    'ip.services.table.th.max-sessions'=> 'Макс. сессий',
    'ip.services.table.th.protocol'=> 'Протокол',
    'ip.services.table.th.remote'=> 'Удалённо',
    'ip.services.table.th.local'=> 'Локально',

    // IP Services Modal Form
    'ip.services.modal.form.edit.title'=> 'Редактировать IP-сервис',
    'ip.services.modal.form.name'=> 'Имя',
    'ip.services.modal.form.port'=> 'Порт',
    'ip.services.modal.form.available-from'=> 'Доступно от',
    'ip.services.modal.form.max-sessions'=> 'Макс. сессий',
    'ip.services.modal.form.protocol'=> 'Протокол',
    'ip.services.modal.form.remote.address'=> 'Удалённый адрес',
    'ip.services.modal.form.remote.port'=> 'Удалённый порт',
    'ip.services.modal.form.local.address'=> 'Локальный адрес',

    // settings.php
    // IP Settings Page

    // IP Settings Modal Form
    'ip.settings.modal.form.ip-forward'=> 'Перенаправление IP включено',
    'ip.settings.modal.form.ip-send-redirects'=> 'Отправка Redirects включена',
    'ip.settings.modal.form.ip-accept-redirects'=> 'Принимать Redirects',
    'ip.settings.modal.form.ip-secure-redirects'=> 'Защищённые Redirects включены',
    'ip.settings.modal.form.ip-accept-source-route'=> 'Принимать Source Route',
    'ip.settings.modal.form.ip-allow-fast-path'=> 'Разрешить Fast Path',
    'ip.settings.modal.form.ip-tcp-syncookies'=> 'TCP Syncookies включены',
    'ip.settings.modal.form.ip-tcp-timestamps'=> 'TCP Timestamps',
    'ip.settings.modal.form.ip-max-neighbors'=> 'Макс. соседей',
    'ip.settings.modal.form.ip-icmp-rate-limit'=> 'Лимит ICMP',
    'ip.settings.modal.form.ip-arp-timeout'=> 'Таймаут ARP (секунды)',
    'ip.settings.modal.form.ip-arp-timeout-help'=> 'Введите формат таймаута RouterOS (например: 10m, 1h, или 00:10:00). Оставьте пустым для значения по умолчанию.',

    // DHCP additions (from English)
    'downloads.instructions' => 'Нажмите кнопку "Загрузить", чтобы скачать. Файлы, помеченные "Coming soon", ещё недоступны для скачивания.',

    'ip.dhcp.leases.title'=> 'DHCP аренды',
    'ip.dhcp.leases.desc'=> 'Просмотр и управление активными DHCP-арендами',

    'ip.dhcp.networks.title'=> 'DHCP-сети',
    'ip.dhcp.networks.desc'=> 'Создавайте и управляйте DHCP-сетями',

    'ip.dhcp.server.title'=> 'Менеджер DHCP',
    'ip.dhcp.server.back-to-dhcp'=> 'Вернуться к менеджеру DHCP',
    'ip.dhcp.server.dhcp'=> 'DHCP',
    'ip.dhcp.server.dhcp.desc'=> 'Настройте параметры DHCP-сервера.',
    'ip.dhcp.server.dhcp.leases'=> 'Аренды',
    'ip.dhcp.server.dhcp.leases.desc'=> 'Просмотр активных DHCP-аренд.',
    'ip.dhcp.server.dhcp.networks'=> 'Сети',
    'ip.dhcp.server.dhcp.networks.desc'=> 'Управление DHCP-сетями.',

    'ip.open.dhcp.leases' => 'Открыть DHCP-аренды',
    'ip.open.dhcp.networks' => 'Открыть DHCP-сети',

    // Error pages
    'errors.404.title' => 'Страница не найдена',
    'errors.404.desc' => 'Запрошенная страница не найдена.',
    'errors.403.title' => 'Доступ запрещён',
    'errors.403.desc' => 'У вас нет прав для доступа к этому ресурсу.',
    'errors.500.title' => 'Ошибка сервера',
    'errors.500.desc' => 'Произошла внутренняя ошибка сервера.',
    'errors.back_home' => 'Вернуться на главную',
    'errors.more_info' => 'Что произошло',
    'errors.contact_admin' => 'Если вы считаете, что это ошибка, свяжитесь с администратором сайта.',

]; 
