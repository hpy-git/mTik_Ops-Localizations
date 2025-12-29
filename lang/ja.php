<?php
////////////////////////////////////////////////////////////////////////
// Japanese translations for mTik_Ops                                                                               
// Version: Next-Generation                                           
////////////////////////////////////////////////////////////////////////

return [
    // Start of Translations
    // Global
    'language-changed' => '{lang} に言語が変更されました',
    'language-search-placeholder' => '検索...',

    // Global Search
    'search.title' => '検索',
    'search.instructions' => 'サイト内を検索するキーワードまたはフレーズを入力してください。',
    'search.results_header' => '"{query}" の検索結果',
    'search.placeholder' => '検索語を入力...',
    'search.no_results' => '結果が見つかりません',
    'search.results' => '結果',
    'search.button' => '検索',
    'search.hint' => '入力すると候補が表示されます。',
    'search.quick_links' => 'クイックリンク',
    'search.show' => '検索を表示',

    
    // Site title and tagline
    'site.title' => 'mTik_Ops', // DO NOT TRANSLATE
    'site.tagline' => '集中型ルーター管理',

    // Authentication
    'nav.login' => 'ログイン',
    'nav.logout' => 'ログアウト',
    'auth.logging_in' => 'ログイン中',
    'auth.logging_out' => 'ログアウト中',

    // nav-brand.php
    'nav.brand.user_greeting'=> 'こんにちは！',

    // nav.php
    'lang.label'=> '言語',
    'nav.about' => '情報',
    'nav.features' => '機能',
    'nav.our_team' => 'チーム',
    'nav.contact' => 'お問い合わせ',
    'nav.menu' => 'メニュー',
    'nav.dashboard' => 'ダッシュボード',
    'nav.hotspot' => 'ホットスポット',
    'nav.ip' => 'IP（インターネットプロトコル）',
    'nav.ppp' => 'PPP（ポイント・ツー・ポイント）',
    'nav.queues' => 'キュー',
    'nav.settings' => '設定',
    'nav.downloads' => 'ダウンロード',

    // index.php
    // Index Page - About Section
    'about.title' => 'MikroTik向けに作られました',
    'about.desc' => 'mTikOpsは、MikroTikルーターとホットスポットをブラウザ上で管理するためのプラットフォームです。リモートアクセス、ホットスポット管理、印刷、PPPoEなどを備え、速い動作を提供します。',
    'about.about_us_button' => '概要',
    'about.our_team_button' => 'チーム',

    // Index Page - Features Section
    'features.remote.title' => 'リモートネットワーク管理',
    'features.remote.desc' => '遠隔ルーターを監視・管理し、インターフェースの状態確認、再起動、構成変更の配布を単一のコンソールから安全に行えます。',
    'features.hotspot.title' => 'ホットスポット管理',
    'features.hotspot.desc' => 'ホットスポットサーバーとユーザープロファイルの作成・管理、バウチャー発行、アクティブユーザーやセッションの監視、課金やレポート作成が行えます。',
    'features.troubleshoot.title' => 'トラブルシューティングと設定',
    'features.troubleshoot.desc' => '構成変更の適用・監査、診断の実行、ログの確認、統合ツールによる接続問題のトラブルシュートを行います。',

    // Index Page - Signup Section
    'signup.title' => 'mTikOps を始める',
    'signup.desc' => 'アカウントを作成して、単一のダッシュボードからルーターやホットスポットを管理し、ネットワーク全体の診断を行えます。',
    'signup.cta' => 'サインアップ',

    // Index Page - Contact Section
    'contact.hq' => '本社',
    'contact.email' => 'メール',
    'contact.contact' => 'お問い合わせ',
    'contact.hq_address' => 'Taguig City, PH 1630',
    'contact.email_addr' => 'noc@mtikops.com',
    'contact.phone' => '+63 (962) 660-6116',

    // Index Page - Footer Section
    'footer.copyright' => 'Copyright &copy; mTikOps {year}',
    'footer.powered' => 'Powered by HPY™',
    'modal.confirm.title' => '確認',
    'modal.confirm.body' => 'よろしいですか？',
    'modal.confirm.cancel' => 'キャンセル',
    'modal.confirm.ok' => '確認',

    // Login Page
    'login.title' => 'ログイン',
    'login.desc' => '集中ダッシュボードから MikroTik ルーターとホットスポットを管理するために mTik_Ops にアクセスします。',
    'login.form.title' => 'アカウントにログイン',
    'login.form.host'=> 'ホスト',
    'login.form.username'=> 'ユーザー名',
    'login.form.password'=> 'パスワード',
    'login.form.connection_type'=> '接続タイプ',
    'login.form.connection_type_yes'=> 'セキュアAPI',
    'login.form.connection_type_no'=> '標準API',
    'login.form.port'=> 'ポート',
    'login.form.remember'=> 'ログイン状態を保持する',
    'login.form.connect'=> '接続',
    'login.form.cancel'=> 'キャンセル',

    // Login Page Placeholders
    'login.form.host_placeholder'=> 'ルーターのIPまたはホスト名',
    'login.form.username_placeholder'=> 'ユーザー名を入力してください',
    'login.form.password_placeholder'=> 'パスワードを入力してください',

 // Login Page Messages
     'login.error.invalid_submission'=> '無効なフォーム送信です。もう一度お試しください。',
     'login.error.missing_fields'=> 'ホスト、ユーザー名、パスワードは必須です。',
     'login.error.unable_connect'=> '接続できません！ — 資格情報を確認して再試行してください。',
     'login.success.connected'=> 'ルーターに正常に接続しました。',
     'login.success.remembered'=> '接続情報を次回ログイン時に記憶しました。',
     'login.info.session_expired'=> 'セッションの有効期限が切れました。再度ログインしてください。',
     'login.info.logged_out'=> '正常にログアウトしました。',
     'login.info.please_login'=> '続行するにはログインしてください。',
     'login.button.forgot_password'=> 'パスワードを忘れた場合',
     'login.try_again'=> 'もう一度試しますか？',

    // Downloads Page
    'downloads.title' => 'ダウンロード',
    'downloads.desc' => 'サポートされているプラットフォームのインストーラーとパッケージをダウンロードします。',
    'downloads.available' => '利用可能なダウンロード',
    'downloads.coming_soon' => '近日公開',
    'downloads.download' => 'ダウンロード',
    'downloads.note' => 'インストーラーを /downloads フォルダにアップロードして利用可能にしてください。',

    // about-us.php
    // About Us Page
    'about-us.title' => '私たちについて',
    'about-us.desc' => 'mTik_Ops、私たちのミッション、プラットフォームの背後にいるチームについて詳しくご覧ください。',
    'about-us.overview'=> '概要',
    'about-us.vision'=> 'ビジョン',
    'about-us.features'=> '機能',
    'about-us.tutorials'=> 'チュートリアル',
    'about-us.faqs'=> 'よくある質問',
    'about-us.requirements'=> '要件',

    // about-us.php
    // About Us Page Descriptions
    'about-us.overview.desc'=> 'mTikOpsの概要とコア機能の紹介です。',
    'about-us.vision.desc'=> 'プロジェクトのミッションと長期目標について説明します。',
    'about-us.features.desc'=> 'mTikOpsで利用可能な主要な機能を確認してください。',
    'about-us.tutorials.desc'=> 'ステップバイステップのガイドとワークフローの例です。',
    'about-us.faqs.desc'=> 'よくある質問とその回答です。',
    'about-us.requirements.desc'=> 'mTikOpsを実行するための前提条件とRouterOSの要件。',

    // about-us.php
    // About Us Page Buttons
    'about-us.open.overview'=> '概要を開く',
    'about-us.open.vision'=> 'ビジョンを開く',
    'about-us.open.features'=> '機能を開く',
    'about-us.open.tutorials'=> 'チュートリアルを開く',
    'about-us.open.faqs'=> 'FAQを開く',
    'about-us.open.requirements'=> '要件を開く',

    // About Us - Back Button
    'about-us.back-to-about'=> '約に戻る',

    // About Us - Overview Page
    'about-us.overview-page.title'=> '概要',
    'about-us.overview-page.desc'=> 'mTikOpsはブラウザからMikroTikルーターとホットスポットサービスを管理するための軽量なウェブプラットフォームです。',

    // About Us - Vision Page
    'about-us.vision-page.title'=> 'ビジョン',
    'about-us.vision-page.desc'=> '直感的な管理インターフェースと自動化ツールで、MikroTikユーザーのネットワーク運用を簡素化することを目指しています。',

    // About Us - Features Page
    'about-us.features-page.title'=> '機能',
    'about-us.features-page.desc'=> 'mTikOpsの主要な機能をご覧ください。',

    // About Us - Tutorials Page
    'about-us.tutorials-page.title'=> 'チュートリアル',
    'about-us.tutorials-page.desc'=> '一般的な作業のためのガイドとハウツーです。',

    // About Us - FAQs Page
    'about-us.faqs-page.title'=> 'よくある質問',
    'about-us.faqs-page.desc'=> 'よくある質問とその回答です。',

    // About Us - Requirements Page
    'about-us.requirements-page.title'=> '前提条件',
    'about-us.requirements-page.desc'=> '最小要件と互換性に関する注意点。',

    // our-team.php
    // Our Team Page
    'our-team.title'=> 'チーム',
    'our-team.desc'=> 'mTikOpsを支える開発者、貢献者、メンテナの紹介です。',
    'our-team.leadership'=> 'リーダーシップ',
    'our-team.developers'=> '開発者',
    'our-team.contributors'=> '貢献者',
    'our-team.advisors'=> 'アドバイザー',
    'our-team.careers'=> '参加する',
    'our-team.contact'=> '連絡先',

    // Our Team Page Descriptions
    'our-team.leadership.desc'=> 'mTikOpsを前進させるコアメンテナとプロジェクトリード。',
    'our-team.developers.desc'=> '機能や修正を構築するエンジニアと貢献者。',
    'our-team.contributors.desc'=> 'ドキュメント、テスト、コードに貢献するコミュニティメンバー。',
    'our-team.advisors.desc'=> 'プロジェクトを支援するアドバイザーと専門家。',
    'our-team.careers.desc'=> '現在の募集とチーム参加方法。',
    'our-team.contact.desc'=> '質問や共同作業のためにチームに連絡してください。',

    // Our Team Page Buttons
    'our-team.open.leadership'=> 'リーダーを見る',
    'our-team.open.developers'=> '開発者を見る',
    'our-team.open.contributors'=> '貢献者を見る',
    'our-team.open.advisors'=> 'アドバイザーを見る',
    'our-team.open.careers'=> '参加する',
    'our-team.open.contact'=> 'チームに連絡',

    // Our Team - Back Button
    'our-team.back-to-team'=> 'チームに戻る',

    // Our Team - Leadership Page
    'our-team.leadership-page.title'=> 'リーダーシップ',
    'our-team.leadership-page.desc'=> 'mTikOpsを支えるコアメンテナとプロジェクトリードをご紹介します。',

    // Our Team - Developers Page
    'our-team.developers-page.title'=> '開発者',
    'our-team.developers-page.desc'=> 'mTikOpsに貢献する開発者のプロフィールと役割。',

    // Our Team - Contributors Page
    'our-team.contributors-page.title'=> '貢献者',
    'our-team.contributors-page.desc'=> 'コミュニティの貢献者と関わり方について。',

    // Our Team - Advisors Page
    'our-team.advisors-page.title'=> 'アドバイザー',
    'our-team.advisors-page.desc'=> 'プロジェクトに助言や専門知識を提供するアドバイザー。',

    // Our Team - Join Us Page
    'our-team.join-us-page.title'=> '参加する',
    'our-team.join-us-page.desc'=> '現在の募集とmTikOpsへの貢献方法。',  

    // Our Team - Contact Page
    'our-team.contact-page.title'=> '連絡先',
    'our-team.contact-page.desc'=> '協力やサポートのためにmTikOpsチームに連絡する方法。',

    // Dashboard Page
    'dashboard.title'=> 'ダッシュボード',
    'dashboard.desc'=> 'ネットワーク運用の監視・ログ統合',

    // Dashboard Buttons
    'dashboard.show'=> 'ダッシュボードを表示',
    'dashboard.button.refresh'=> '更新',
    'dashboard.button.prev'=> '前',
    'dashboard.button.next'=> '次',

    // Dashboard Network Monitoring
    'dashboard.monitoring.title'=> 'ネットワーク監視',
    'dashboard.monitoring.desc'=> 'MikroTikインフラ全体のネットワーク性能、稼働時間、デバイス状態をリアルタイムで監視します。',
    'dashboard.ltmg.title'=> 'ライブトラフィック監視グラフ',
    'dashboard.fullscreen'=> '全画面表示',
    'dashboard.loading'=> 'データ読み込み中...',
    'dashboard.not-monitoring'=> '監視されていません',

    // Dashboard System Logging
    'dashboard.logging.title'=> 'システムログ',
    'dashboard.logging.desc'=> 'システムイベントやエラーの集中ログとアラート機能',
    'dashboard.system.logs'=> 'システムログ',
    'dashboard.critical.logs'=> '重要ログ',

    // Dashboard Device Information
    'dashboard.device.info.title'=> 'デバイス情報',
    'dashboard.system.resources'=> 'システムリソース',
    'dashboard.system.information'=> 'システム情報',
    'dashboard.system.platform'=> 'RouterBOARD 情報',

    // Device info JS strings
    'device.system_identity' => 'システム識別子',
    'device.routeros_version' => 'RouterOS バージョン',
    'device.uptime' => '稼働時間',
    'device.board' => 'ボード',
    'device.health' => '状態',
    'device.temp_label' => '温度:',
    'device.voltage_label' => '電圧:',
    'device.unknown' => '不明',
    'device.na' => '該当なし',
    'device.cpu' => 'CPU',
    'device.memory' => 'メモリ',
    'device.disk' => 'ディスク',
    'device.board_model' => 'ボードモデル',
    'device.serial' => 'シリアル',
    'device.architecture' => 'アーキテクチャ',
    'device.cpu_label' => 'CPU',
    'device.cores' => 'コア',
    'device.build' => 'ビルド',
    'device.failed_load' => 'システム情報の読み込みに失敗しました',
    // Generate users preview JS strings
    'generate.generating' => '生成中...',
    'generate.print_fetch_failed' => '印刷データの取得に失敗しました: %s',
    'generate.network_not_ok' => 'ネットワーク応答が不正です: %s',
    'generate.generation_failed' => '生成に失敗しました: %s',
    'generate.unknown_error' => '不明なエラー',
    'generate.preview_not_available' => 'プレビューは利用できません',
    'generate.failed_print_dialog' => 'ネイティブ印刷ダイアログの起動に失敗しました: %s',
    'generate.cached_cleared' => 'キャッシュバッチをクリアしました',
    'generate.failed_clear_cached' => 'キャッシュバッチのクリアに失敗しました',
    'generate.preview_failed' => 'プレビューに失敗しました',
    'generate.preview' => 'プレビュー',
    'generate.unexpected_error' => '予期しないエラー: %s',
    'generate.generated' => '%s 件のユーザーを生成しました',
    'generate.request_failed' => 'バウチャー生成中にリクエストが失敗しました。',
    'generate.generate' => '生成',

    // Dashboard Hotspot Active Sessions
    'dashboard.hotspot.as.title'=> 'ホットスポットのアクティブセッション',
    'dashboard.ppp.as.title'=> 'PPPoEのアクティブセッション',
    // JS dashboard strings (used by client-side locale export)
    'dashboard.no_active_sessions' => 'アクティブなセッションはありません',
    'dashboard.no_ppp_active_sessions' => 'アクティブなPPPセッションはありません',
    'dashboard.active_session' => 'アクティブセッション',
    'dashboard.active_sessions' => 'アクティブセッション',
    'dashboard.name' => '名前',
    'dashboard.address' => 'アドレス',
    'dashboard.uptime' => '稼働時間',
    'dashboard.service' => 'サービス',
    'dashboard.not_monitoring' => '監視していません',
    'dashboard.more_format' => '... 他 %d 件',
    'dashboard.unable_load_active' => 'アクティブセッションの読み込みに失敗しました',
    'dashboard.unable_load_ppp' => 'PPPアクティブセッションの読み込みに失敗しました',

    // hotspot.php
    // Hotspot Page
    'hotspot.title'=> 'ホットスポット管理',
    'hotspot.desc'=> 'ホットスポットのユーザー、ユーザープロファイル、アクティブセッション、ホストを管理します。',
    'hotspot.users'=> 'ユーザー',
    'hotspot.profiles'=> 'プロファイル',
    'hotspot.active'=> 'アクティブ',
    'hotspot.hosts'=> 'ホスト',

    // Hotspot Page Descriptions
    'hotspot.users.desc'=> 'ホットスポットの個別ユーザーアカウントを作成・編集・管理します。',
    'hotspot.profiles.desc'=> 'ユーザーの帯域幅、セッション、レート制限プロファイルを管理します。',
    'hotspot.active.desc'=> '現在のアクティブなホットスポットセッションを表示・切断します。',
    'hotspot.hosts.desc'=> 'ホットスポットに接続されているデバイスを検査・管理します。',

    // Hotspot Page Buttons
    'hotspot.open.users'=> 'ユーザーを開く',
    'hotspot.open.profiles'=> 'プロファイルを開く',
    'hotspot.open.active'=> 'アクティブを開く',
    'hotspot.open.hosts'=> 'ホストを開く',

    // Hotspot - Back Button
    'hotspot.back-to-hotspot'=> 'ホットスポット管理に戻る',

    // Hotspot General Buttons
    'hotspot.action.button'=> '操作',
    'hotspot.generate.button'=> '生成',
    'hotspot.add-user.button'=> 'ユーザー追加',
    'hotspot.enable.button'=> '有効',
    'hotspot.add-profile.button'=> 'プロファイル追加',
    'hotspot.edit.button'=> '編集',
    'hotspot.remove.button'=> '削除',
    'hotspot.disable.button'=> '無効',
    'hotspot.export.users'=> 'ユーザーをエクスポート',
    'hotspot.export.button'=> 'エクスポート',
    'hotspot.button.refresh'=> '更新',
    'hotspot.button.prev'=> '前',
    'hotspot.button.next'=> '次',
    'hotspot.sort.by'=> '並べ替え',
    'hotspot.sort.profiles'=> 'プロファイルで並べ替え',
    'hotspot.sort.comments'=> 'コメントで並べ替え',

    // Hotspot Table Headers
    'hotspot.table.th.select'=> 'すべて選択',
    'hotspot.table.th.server'=> 'サーバー名',
    'hotspot.table.th.user'=> 'ユーザー',
    'hotspot.table.th.name'=> '名前',
    'hotspot.table.th.address'=> 'アドレス',
    'hotspot.table.th.mac'=> 'MACアドレス',
    'hotspot.table.th.profile'=> 'プロファイル',
    'hotspot.table.th.uptime'=> '稼働時間',
    'hotspot.table.th.bytes-in'=> '受信バイト',
    'hotspot.table.th.bytes-out'=> '送信バイト',
    'hotspot.table.th.comment'=> 'コメント',
    'hotspot.table.th.to-address'=> '送信先アドレス',
    'hotspot.table.th.last-seen'=> '最終確認',
    'hotspot.status.loading'=> 'ホットスポットユーザーを読み込み中...',

    // Hotspot JS: hosts, profiles, users, modals
    // Hosts list
    'hotspot.hosts.no_hosts' => 'ホストなし',
    'hotspot.hosts.loading' => '読み込み中...',
    'hotspot.hosts.failed_to_contact_api' => 'APIへの接続に失敗しました',
    'hotspot.hosts.page_info' => 'ページ %s / %s (%s)',

    // Profiles list
    'hotspot.profiles.no_profiles' => 'プロファイルなし',
    'hotspot.profiles.loading' => '読み込み中...',
    'hotspot.profiles.failed_to_load' => 'プロファイルの読み込みに失敗しました',
    'hotspot.profiles.failed_to_contact_api' => 'APIへの接続に失敗しました',
    'hotspot.profiles.no_pools' => '(プールなし)',
    'hotspot.profiles.no_queues' => '(キューなし)',
    'hotspot.profiles.no_types' => '(タイプなし)',
    'hotspot.profiles.select' => '選択...',
    'hotspot.profiles.default' => 'デフォルト',
    'hotspot.profiles.no_profiles_option' => '(プロファイルなし)',
    'hotspot.profiles.page_info' => 'ページ %s / %s (%s)',
    'hotspot.profiles.name_required' => '名前は必須です',
    'hotspot.profiles.added' => 'プロファイルを追加しました',
    'hotspot.profiles.add_failed' => 'プロファイルの追加に失敗しました: %s',
    'hotspot.profiles.server_contact_failed' => 'サーバーへの接続に失敗しました',
    'hotspot.profiles.id_missing' => 'プロファイルIDがありません',
    'hotspot.profiles.updated' => 'プロファイルを更新しました',
    'hotspot.profiles.update_failed' => 'プロファイルの更新に失敗しました: %s',
    'hotspot.profiles.removed' => 'プロファイルを削除しました',
    'hotspot.profiles.remove_failed' => 'プロファイルの削除に失敗しました: %s',
    'hotspot.profiles.select_remove' => '削除するプロファイルを選択してください',
    'hotspot.profiles.remove_confirm' => '選択したプロファイルを削除してもよろしいですか？',
    'hotspot.profiles.remove_confirm_title' => '確認',
    
    // Admin Control Panel translations
    'admin.title' => '管理パネル',
    'admin.desc' => '管理センター',
    'admin.maintenance' => 'メンテナンス',
    'admin.maintenance.desc' => '訪問者向けのサイト全体のメンテナンス通知を切り替えます。',
    'admin.page_access' => 'ページアクセス制御',
    'admin.page_access.desc' => 'アプリの特定セクションへのアクセスを許可または拒否します。',
    'admin.view_logs' => 'ログを表示',
    'admin.logs.title' => '管理アクセスログ',
    'admin.save' => '保存',
    'admin.saved' => '保存されました',
    'admin.save_failed' => '保存に失敗しました',
    'admin.save_error' => '設定の保存に失敗しました',
    'admin.load_logs_failed' => 'ログの読み込みに失敗しました',
    'admin.access_denied' => '管理パネルにアクセスする権限がありません。',
    'access.restricted.title' => 'アクセス制限',
    'access.restricted.desc' => 'このセクションは現在無効です',
    'admin.section_disabled' => '管理者によりセクションが無効化されています',
    'nav.disabled' => '無効',
    // Maintenance toggle JS strings
    'maintenance.toast' => 'メンテナンスモード' . '<br/><br/>' . 'メンテナンスモードが有効な間、一部の機能は制限されます。',
    'maintenance.set_failed' => 'メンテナンスモードの状態設定に失敗しました',

    // Users modals and export
    'hotspot.modals.no_servers' => '(サーバーなし)',
    'hotspot.modals.no_profiles' => '(プロファイルなし)',
    'hotspot.modals.please_select_export' => 'エクスポートするユーザーを1人以上選択してください',
    'hotspot.modals.select_at_least_one_field' => 'エクスポートするフィールドを少なくとも一つ選択してください',
    'hotspot.modals.no_users_selected' => 'ユーザーが選択されていません',
    'hotspot.modals.no_data_to_export' => 'エクスポートするデータがありません',
    'hotspot.modals.export_started' => 'エクスポートを開始しました',
    'hotspot.modals.export_failed' => 'エクスポートに失敗しました',
    'hotspot.modals.add_user_title' => 'ホットスポットユーザーを追加',
    'hotspot.modals.edit_user_title' => 'ホットスポットユーザーを編集',
    'hotspot.modals.create_button' => '作成',
    'hotspot.modals.update_button' => '更新',
    'hotspot.modals.failed_load_user' => 'ユーザーデータの読み込みに失敗しました',
    'hotspot.modals.select_one_to_edit' => '編集するユーザーを1人だけ選択してください',
    'hotspot.modals.user_updated' => 'ユーザーが更新されました',
    'hotspot.modals.user_created' => 'ユーザーが作成されました',
    'hotspot.modals.create_update_failed' => '作成/更新に失敗しました',
    'hotspot.modals.create_request_failed' => '作成リクエストに失敗しました',

    // Users list
    'hotspot.users.no_users' => 'ユーザーなし',
    'hotspot.users.loading' => '読み込み中...',
    'hotspot.users.empty_response' => '空のレスポンス',
    'hotspot.users.failed_to_contact_api' => 'APIへの接続に失敗しました',
    'hotspot.users.select_one_or_more' => '1人以上のユーザーを選択してください。',
    'hotspot.users.remove_confirm' => '選択したユーザーを削除しますか？この操作は元に戻せません。',
    'hotspot.users.action_completed' => '操作 "%s" が完了しました。成功: %s/%s',
    'hotspot.users.action_failed' => '操作に失敗しました: %s',
    'hotspot.users.request_failed' => 'リクエストに失敗しました',
    'hotspot.users.sort_profiles' => 'プロファイルで並べ替え',
    'hotspot.users.sort_comments' => 'コメントで並べ替え',
    'hotspot.users.select_profiles_placeholder' => 'プロファイルで並べ替え',
    'hotspot.users.select_comments_placeholder' => 'コメントで並べ替え',

    // Hotspot JS helper strings
    'hotspot.no_active_entries' => 'アクティブなエントリはありません',
    'hotspot.loading' => '読み込み中...',
    'hotspot.failed_to_contact_api' => 'APIへの接続に失敗しました',
    'hotspot.page_info' => 'ページ %s / %s (%s)',

    // Hotspot Modal Tabs and Titles
    'hotspot.modal.title.generate'=> 'ユーザー / バウチャーの生成',
    'hotspot.modal.general.tab'=> '全般',
    'hotspot.modal.printing.tab'=> '印刷',
    'hotspot.modal.stats.tab'=> '統計',
    'hotspot.modal.queueing.tab'=> 'キュー',
    'hotspot.modal.scripts.tab'=> 'スクリプト',

    // Hotspot Modal Form Generate / Add User - General Tab
    'hotspot.modal.form.qty'=> '数量',
    'hotspot.modal.form.server'=> 'Hotspot サーバー',
    'hotspot.modal.form.username'=> 'ユーザー名',
    'hotspot.modal.form.password'=> 'パスワード',
    'hotspot.modal.form.user-type'=> 'ユーザータイプ',
    'hotspot.modal.form.code-length'=> 'コード長',
    'hotspot.modal.form.characters'=> '文字種',
    'hotspot.modal.form.user-profile'=> 'ユーザープロファイル',
    'hotspot.modal.form.comment'=> 'コメント',
    'hotspot.modal.form.optional-comment'=> '任意コメント',
    'hotspot.modal.form.mac-address'=>  'MACアドレス',
    'hotspot.modal.form.time-limit'=>  '時間制限',
    'hotspot.modal.form.data-limit'=>  'データ制限',

    // Hotspot Modal Form Generate - Printing Tab
    'hotspot.modal.form.hotspot-name'=> 'Hotspot 名称',
    'hotspot.modal.form.hotspot-dns'=> 'DNS設定',
    'hotspot.modal.form.hotspot-currency'=> '通貨',
    'hotspot.modal.form.hotspot-select-currency'=> '通貨を選択',
    'hotspot.modal.form.hotspot-price'=> '価格',
    'hotspot.modal.form.hotspot-include-comment'=> 'コメントを含める',
    'hotspot.modal.form.hotspot-include-comment-desc'=> '印刷されるバウチャーに生成されたコメントを含めます',
    'hotspot.modal.form.hotspot-template'=> 'テンプレート',

    // Hotspot Modal Form Generate - Printing Placeholders
    'hotspot.modal.form.hotspot-name-placeholder'=> 'マイホットスポット',
    'hotspot.modal.form.hotspot-dns-placeholder'=> 'hotspot.mtikops.com',
    'hotspot.modal.form.hotspot-price-placeholder'=> 'バウチャーあたりの価格',

    // Hotspot Modal Form Generate - User-Type
    'hotspot.modal.form.user-type-regular'=> 'ユーザー名 & パスワード',
    'hotspot.modal.form.user-type-voucher'=> 'ユーザー名 = パスワード',

    // Hotspot Modal Form Generate - Characters
    'hotspot.modal.form.characters-lower'=> 'abcd（小文字）',
    'hotspot.modal.form.characters-upper'=> 'ABCD（大文字）',
    'hotspot.modal.form.characters-mixed'=> 'AbCd（混合）',
    'hotspot.modal.form.characters-num'=> '1234（数字）',
    'hotspot.modal.form.characters-lower-num'=> 'a1b2（小文字 & 数字）',
    'hotspot.modal.form.characters-upper-num'=> 'A1B2（大文字 & 数字）',
    'hotspot.modal.form.characters-mixed-num'=> 'aA1bB2（混合 & 数字）',

    // Hotspot Modal Form Stats - Stats Tab
    'hotspot.modal.form.stats.uptime'=> '稼働時間',
    'hotspot.modal.form.stats.bytes_in'=> '受信バイト',
    'hotspot.modal.form.stats.bytes_out'=> '送信バイト',
    'hotspot.modal.form.stats.limit-uptime'=> '稼働時間制限',
    'hotspot.modal.form.stats.limit-bytes_total'=> '合計バイト制限',
    'hotspot.modal.form.stats.user-code'=> 'ユーザーコード',
    'hotspot.modal.form.stats.expire-date'=> '有効期限',

    // Hotspot Modal Form Misc
    'hotspot.modal.form.loading' => 'データ読み込み中...',

    // Hotspot Modal Form Buttons
    'hotspot.modal.form.button.generate-print'=> '生成して印刷',
    'hotspot.modal.form.button.generate'=> '生成のみ',
    'hotspot.modal.form.button.clear-cached-batch'=> 'キャッシュバッチをクリア',
    'hotspot.modal.form.button.close'=> '閉じる',
    'hotspot.modal.form.button.create'=> '作成',
    'hotspot.modal.form.button.cancel'=> 'キャンセル',

    // profiles.php
    // Hotspot User Profiles Page
    'hotspot.user.profiles.title'=> 'プロファイル',
    'hotspot.user.profiles.desc'=> 'ユーザーの帯域幅、セッション、レート制限プロファイルを管理します。',

    // Hotspot User Profiles Table Headers
    'hotspot.user.profiles.th.name'=> '名前',
    'hotspot.user.profiles.th.shared-users'=> '共有ユーザー数',
    'hotspot.user.profiles.th.rate-limit'=> 'レート制限',
    'hotspot.user.profiles.th.idle-timeout'=> 'アイドルタイムアウト',
    'hotspot.user.profiles.th.keepalive-timeout'=> 'キープアライブタイムアウト',
    'hotspot.user.profiles.th.queue-type'=> 'キュータイプ',

    // Hotspot User Profiles Modal Form
    'hotspot.user.profiles.modal.title.add-profile'=> 'プロファイルを追加',

    // Hotspot User Profile Form Fields - General Tab
    'hotspot.user.profiles.form.name'=> 'プロファイル名',
    'hotspot.user.profiles.form.pool'=> 'アドレスプール',
    'hotspot.user.profiles.form.rate-limit-rx'=> 'レート制限 (RX)',
    'hotspot.user.profiles.form.rate-limit-tx'=> 'レート制限 (TX)',
    'hotspot.user.profiles.form.shared-users'=> '共有ユーザー数',
    'hotspot.user.profiles.form.expiry-mode'=> '有効期限モード',
    'hotspot.user.profiles.form.expiry-duration'=> '有効期限（期間）',
    'hotspot.user.profiles.form.lock-device'=> 'デバイスにロック',
    'hotspot.user.profiles.form.lock-server'=> 'サーバーにロック',
    'hotspot.user.profiles.form.comment'=> 'コメント',

    // Expiry Mode Options
    'hotspot.user.profiles.form.expiry-mode_none'=> 'なし',
    'hotspot.user.profiles.form.expiry-mode_remove'=> '削除',
    'hotspot.user.profiles.form.expiry-mode_notice'=> '通知',
    'hotspot.user.profiles.form.expiry-mode_remove_record'=> '削除して記録',
    'hotspot.user.profiles.form.expiry-mode_remove_notice'=> '削除して通知',

    // Hotspot User Profile Form Fields - Queue Tab
    'hotspot.user.profiles.form.parent-queue'=> '親キュー',
    'hotspot.user.profiles.form.queue-type'=> 'キュータイプ',

    // Hotspot User Profiles Form Fields - Scripts Tab
    'hotspot.user.profiles.form.on-login-script'=> 'ログイン時スクリプト',
    'hotspot.user.profiles.form.on-login-script_placeholder'=> 'ログイン時に実行する任意のスクリプト',
    'hotspot.user.profiles.form.on-logout-script'=> 'ログアウト時スクリプト',
    'hotspot.user.profiles.form.on-logout-script_placeholder'=> 'ログアウト時に実行する任意のスクリプト',

    // Hotspot User Profile Modal - Edit Profile
    'hotspot.user.profile.edit'=> 'プロファイルを編集',
    'hotspot.user.profile.select.profile'=> 'プロファイルを選択',
    'hotspot.user.profile.select.profile.desc'=> '編集するプロファイルを選択してください。選択後に完全なエディタが開きます。',
    'hotspot.user.profile.button.cancel'=> 'キャンセル',
    'hotspot.user.profile.button.save'=> '保存',

    // Hotspot User Profile Modal - Remove Profile
    'hotspot.user.profiles.remove'=> 'プロファイルを削除',
    'hotspot.user.profiles.remove-select'=> '削除するプロファイルを選択',
    'hotspot.user.profiles.remove-warning'=> 'この操作は元に戻せません。削除することを確認してください。',
    'hotspot.user.profiles.remove.button-cancel'=> 'キャンセル',
    'hotspot.user.profiles.remove.button-remove'=> '削除',

    // Hotspot Export Users Modal
    'hotspot.export.user.desc'=> 'エクスポートに含めるフィールドを選択してください。選択されたユーザーのみがエクスポートされます。',
    'hotspot.export.user.name'=> '名前',
    'hotspot.export.user.price'=> '価格',
    'hotspot.export.user.password'=> 'パスワード',
    'hotspot.export.user.profile'=> 'プロファイル',
    'hotspot.export.user.comment'=> 'コメント',
    'hotspot.export.user.inc-header'=> 'ヘッダーを含める',
    'hotspot.export.user.column-order'=> '列の順序',
    'hotspot.export.user.column-up'=> '上へ',
    'hotspot.export.user.column-down'=> '下へ',
    'hotspot.export.user.column-desc'=> 'フィールドを選択し、上/下を使って列の順序を変更します。',
    'hotspot.export.user.button-cancel'=> 'キャンセル',
    'hotspot.export.user.button-download'=> 'CSVをダウンロード',

    // Hotspot Print Preview Modal
    'hotspot.print.preview.title'=> '印刷プレビュー',
    'hotspot.print.preview.desc'=> '印刷する前に選択したユーザーをプレビューします。',
    'hotspot.print.preview.button-cancel'=> 'キャンセル',
    'hotspot.print.preview.button-close'=> '閉じる',
    'hotspot.print.preview.button-print'=> '保存して印刷',
    

    // active.php
    // Hotspot Active Sessions Page

    // hosts.php
    // Hotspot Hosts Page

    // settings.php
    // Hotspot Settings Page
    'settings.title'=> '設定',
    'settings.desc'=> 'デバイス識別、システムサービス、メンテナンス操作を構成します。',
    'settings.identity'=> '識別子',
    'settings.ntp'=> 'NTP（時刻同期）',
    'settings.files'=> 'ファイル',
    'settings.users'=> 'ユーザー',
    'settings.scheduler'=> 'スケジューラ',
    'settings.scripts'=> 'スクリプト',
    'settings.reset'=> 'リセット',
    'settings.reboot'=> '再起動',
    'settings.shutdown'=> 'シャットダウン',

    // Settings Page Buttons
    //'settings.open.identity'=> 'Open Identity',
    //'settings.open.ntp'=> 'Open NTP',
    'settings.open.files'=> 'ファイルを開く',
    'settings.open.users'=> 'ユーザーを管理',
    'settings.open.scheduler'=> 'スケジューラを開く',
    'settings.open.scripts'=> 'スクリプトを開く',
    //'settings.open.reset'=> 'Reset',
    //'settings.open.reboot'=> 'Reboot',
    //'settings.open.shutdown'=> 'Shutdown',

    // SETTINGS GENERAL BUTTONS
    'settings.buttons.upload'=> 'アップロード',
    'settings.buttons.delete'=> '削除',
    'settings.buttons.refresh'=> '更新',
    'settings.buttons.save'=> '保存',
    'settings.buttons.cancel'=> 'キャンセル',
    'settings.buttons.close'=> '閉じる',
    'settings.buttons.edit'=> '編集',
    'settings.buttons.add'=> '追加',
    'settings.buttons.remove'=> '削除',
    'settings.buttons.prev'=> '前',
    'settings.buttons.next'=> '次',
    'settings.sort.by'=> '並べ替え',
    'settings.sort' => '並べ替え',

    // Settings Page - Back Button
    'settings.back-to-settings'=> '設定に戻る',

    // Settings Page - Actions
    'settings.actions'=> '操作',

    // Settings Page - Loading
    'settings.loading'=> '設定を読み込み中...',

    // Settings Page Descriptions
    'settings.identity.desc'=> 'ログやネットワーク識別に表示される名前を表示・編集します。',
    'settings.ntp.desc'=> '正確な時刻を維持するためのNTP設定を構成します。',
    'settings.files.desc'=> 'デバイスに保存されたアップロード済みファイルやスクリプトを管理します。',
    'settings.users.desc'=> 'システムユーザーとそのアクセス権を管理します。',
    'settings.scheduler.desc'=> 'メンテナンスや自動化のためのスケジュールタスクを作成します。',
    'settings.scripts.desc'=> 'デバイス上で実行するカスタムスクリプトを管理・実行します。',
    'settings.reset.desc'=> '設定をデフォルトにリセットします。注意して使用してください。',
    'settings.reboot.desc'=> 'デバイスをリモートで再起動します。再起動前にすべての変更を保存してください。',
    'settings.shutdown.desc'=> 'デバイスをリモートで安全にシャットダウンします。注意して使用してください。',

    // Settings Table Headers
    'settings.table.th.name'=> '名前',
    'settings.table.th.group'=> 'グループ',
    'settings.table.th.last-login'=> '最終ログイン',
    'settings.table.th.comment'=> 'コメント',
    'settings.table.th.role'=> '役割',
    'settings.table.th.select'=> 'すべて選択',
    'settings.table.th.username'=> 'ユーザー名',
    'settings.table.th.password'=> 'パスワード',
    'settings.table.th.actions'=> '操作',
    'settings.table.th.next-run'=> '次回実行',
    'settings.table.th.interval'=> '間隔',
    'settings.table.th.enabled'=> '有効',
    'settings.table.th.size'=> 'サイズ',
    'settings.table.th.owner'=> '所有者',
    'settings.table.th.date'=> '日付',

   
    // Settings Page - Identity
    'settings.identity.placeholder'=> 'システム識別子を入力してください',
    'settings.identity.caption'=> 'これはログやネットワーク識別に表示される名前です。',

    // Settings Page - Identity Buttons
    'settings.identity.save'=> '識別子を保存',
    'settings.identity.refresh'=> '更新',

    // Settings Page - NTP Modal
    'settings.ntp.enabled'=> '有効',
    'settings.ntp.enabled-yes'=> '有効',
    'settings.ntp.enabled-no'=> '無効',
    'settings.ntp.mode'=> 'モード',
    'settings.ntp.mode-broadcast'=> 'ブロードキャスト',
    'settings.ntp.mode-manycast'=> 'メニィキャスト',
    'settings.ntp.mode-multicast'=> 'マルチキャスト',
    'settings.ntp.mode-unicast'=> 'ユニキャスト',
    'settings.ntp.server'=> 'NTPサーバー',
    'settings.ntp.server-add'=> 'サーバーを追加',
    'settings.ntp.server-refresh'=> '更新',
    'settings.ntp.server-save'=> '保存',

    // Settings Page - NTP Status
    'settings.ntp.status'=> 'ステータス',
    'settings.ntp.freq.drift'=> '周波数ドリフト',
    'settings.ntp.synced.server'=> '同期されたサーバー',
    'settings.ntp.synced.stratum'=> '同期ストラタム',
    'settings.ntp.system.offset'=> 'システムオフセット',

    // Settings Page - Files
    'settings.files.title'=> 'ファイルマネージャー',
    'settings.files.desc'=> 'デバイスに保存されたファイルのアップロード、ダウンロード、管理を行います。',


    // Settings Page - Users
    'settings.users.title'=> 'ユーザーマネージャー',
    'settings.users.desc'=> 'システムユーザーの作成、編集、管理とそのアクセス権を設定します。',

    // Settings Page - Scheduler
    'settings.scheduler.title'=> 'スケジューラ',
    'settings.scheduler.desc'=> 'メンテナンスや自動化のためのスケジュールタスクを作成・管理します。',

    // Settings Page - Scripts
    'settings.scripts.title'=> 'スクリプト',
    'settings.scripts.desc'=> 'デバイス上でカスタムスクリプトを作成、編集、実行します。',

    // Settings Page - Reset
    // Reset Modal
    'settings.reset.type'=> 'リセットタイプ',
    'settings.reset.config'=> '設定をリセット（ユーザーファイルを保持）',
    'settings.reset.all'=> '工場出荷時リセット（すべて消去、デフォルトに戻す）',
    'settings.reset.delay'=> '遅延（秒）',
    'settings.reset.delay.desc'=> 'スケジュールボタン使用時に即時実行するには0に設定、または「今すぐリセット」をクリックして即時実行します。',

    //Reset Buttons
    'settings.reset.button.schedule'=> 'リセットをスケジュール',
    'settings.reset.button.reset-now'=> '今すぐリセット',

    // Settings Page - Reboot
    // Reboot Modal
    'settings.reboot.delay'=> '遅延（秒）',
    'settings.reboot.delay.desc'=> 'スケジュールボタン使用時に即時再起動するには0に設定、または「今すぐ再起動」をクリックして強制的に即時再起動します。',

    // Reboot Buttons
    'settings.reboot.button.schedule'=> '再起動をスケジュール',
    'settings.reboot.button.reboot-now'=> '今すぐ再起動',

    // Settings Page - Shutdown
    // Shutdown Modal
    'settings.shutdown.delay'=> '遅延（秒）',
    'settings.shutdown.delay.desc'=> 'スケジュールボタン使用時に即時シャットダウンするには0に設定、または「今すぐシャットダウン」をクリックして強制的に即時シャットダウンします。',

    // Shutdown Buttons
    'settings.shutdown.button.schedule'=> 'シャットダウンをスケジュール',
    'settings.shutdown.button.shutdown-now'=> '今すぐシャットダウン',


    // queues.php
    // Queues Page
    'queues.title'=> 'キュー管理',
    'queues.desc'=> 'シンプルキュー、ツリーキュー、キュータイプを管理します。',

    'queues.simple'=> 'シンプル',
    'queues.tree'=> 'ツリー',
    'queues.types'=> 'タイプ',
    'queues.simple-queue'=> 'シンプルキュー',
    'queues.queue-tree'=> 'キューツリー',
    'queues.queue-types'=> 'キュータイプ',

    // Queues Page Descriptions
    'queues.simple.desc'=> 'ホスト/ターゲット単位のシンプルキューを作成・管理します。',
    'queues.tree.desc'=> '高度なトラフィックシェーピングのための階層的なキューツリーを管理します。',
    'queues.types.desc'=> 'キュータイプとパケット分類ルールを定義・管理します。',

    // Queues Page Buttons
    'queues.open.simple'=> 'シンプルキューを開く',
    'queues.open.tree'=> 'キューツリーを開く',
    'queues.open.types'=> 'キュータイプを開く',

    // Queues Page - Back Button
    'queues.back-to-queues'=> 'キュー管理に戻る',

    // Queues General Buttons
    'queues.button.new'=> '新規',
    'queues.button.edit'=> '編集',
    'queues.button.enable'=> '有効',
    'queues.button.disable'=> '無効',
    'queues.button.remove'=> '削除',
    'queues.button.refresh'=> '更新',
    'queues.button.pause-polling'=> 'ポーリングを一時停止',
    'queues.sort.by'=> '並べ替え',
    'queues.sort'=> '並べ替え',
    'queues.select.all'=> 'すべて選択',
    'queues.button.prev'=> '前',
    'queues.button.next'=> '次',
    'queues.button.save'=> '保存',
    'queues.button.cancel'=> 'キャンセル',
    'queues.button.create'=> '作成',


    // Queues Loading Status
    'queues.status.loading'=> 'キューを読み込み中...',

    // simple.php
    // Simple Queues Page


    // Simple Queues Action Buttons
    'queues.simple.actions'=> '操作',
    'queues.simple.actions.desc'=> '選択されたキューに対して操作を実行します。',

    // Queues Table Headers
    'queues.table.th.name'=> '名前',
    'queues.table.th.number'=> '番号',
    'queues.table.th.target'=> 'ターゲット',
    'queues.table.th.upload-limit'=> 'アップロード制限',
    'queues.table.th.download-limit'=> 'ダウンロード制限',
    'queues.table.th.download-avg-rate'=> 'ダウンロード平均レート',
    'queues.table.th.max-limit'=> '最大制限',
    'queues.table.th.queue-type'=> 'キュータイプ',
    'queues.table.th.limit-at'=> '制限点',
    'queues.table.th.bytes'=> 'バイト',
    'queues.table.th.avg.rate'=> '平均レート',
    'queues.table.th.kind'=> '種類',

    // Queues Modal Form - Tabs
    'queues.tab.main'=> 'メイン',
    'queues.tab.advanced'=> '詳細',
    'queues.tab.queueing'=> 'キュー',

    // Queues Modal Form Tab
    'queues.modal.form.new.simple'=> '新しいシンプルキュー',
    'queue.modal.form.edit.simple'=> 'シンプルキューを編集',
    'queues.modal.form.enabled'=> '有効',
    'queues.modal.form.name'=> '名前',
    'queues.modal.form.target'=> 'ターゲット',
    'queues.modal.form.target-select-iface'=> 'インターフェースを選択',
    'queues.modal.form.dst'=> '宛先',
    'queues.modal.form.dst-select-iface'=> 'インターフェースを選択',
    'queues.modal.form.target.dst-caption'=> 'インターフェースを選択するか、カスタムターゲットを入力してください。',
    'queues.modal.form.placeholder'=> 'またはIPを入力（例: 192.168.10.0/24 または 10.0.0.5）',
    'queues.modal.form.target.upload'=> 'ターゲットアップロード',
    'queues.modal.form.max-limit'=> '最大制限',
    'queues.modal.form.target.download'=> 'ターゲットダウンロード',
    'queues.modal.form.pkt-marks'=> 'パケットマーク',
    'queues.modal.form.limit-at'=> '制限点',
    'queues.modal.form.burst-limit'=> 'バースト制限',
    'queues.modal.form.burst-threshold'=> 'バースト閾値',
    'queues.modal.form.burst-time'=> 'バースト時間',
    'queues.modal.form.priority'=> '優先度',
    'queues.modal.form.bucket-size'=> 'バケットサイズ',
    'queues.modal.form.parent-queue'=> '親キュー',
    'queues.modal.form.queue-type'=> 'キュータイプ',
    'queues.modal.form.comment'=> 'コメント',
    'queues.modal.form.comment-placeholder'=> '任意のコメント',
    'queues.modal.form.clear-parent'=> '親をクリア（親関係を削除）',

    // tree.php
    // Queue Tree Page

    // Queue Tree Action Buttons
    'queues.tree.actions'=> '操作',
    'queues.tree.action.desc'=> '選択されたキューツリーエントリに対して操作を実行します。',

    // Queue Tree Modal Form - Tabs
    'queues.tree.create.title'=> 'キューツリーエントリを作成',
    'queue.tree.tab.general'=> '全般',
    'queue.tree.tab.rate-limit'=> 'レート制限',


    // types.php
    // Queue Types Page
  
    // Queue Types Action 
    'queues.types.actions'=> '操作',
    'queues.types.action.desc'=> '選択されたキュータイプに対して操作を実行します。',


    // ppp.php
    // PPP Page
    'ppp.title'=> 'PPPoE 管理',
    'ppp.desc'=> 'PPPoEサーバー、シークレット、プロファイルを管理します。',

    
    'ppp.pppoe.servers'=> 'PPPoEサーバー',
    'ppp.servers'=> 'サーバー',
    'ppp.secrets'=> 'シークレット',
    'ppp.profiles'=> 'プロファイル',
    'ppp.active'=> 'アクティブセッション',
    
    // PPP Page Descriptions
    'ppp.servers.desc'=> 'PPPoEサーバーのインスタンスとバインディングを表示・管理します。',
    'ppp.secrets.desc'=> 'PPPoEのシークレット（ユーザー認証情報）を管理します。',
    'ppp.profiles.desc'=> 'PPPoEプロファイルを作成・管理します。',
    'ppp.active.desc'=> 'アクティブなPPPoEセッションを表示・切断します。',

    'ppp.open.servers'=> 'PPPoEサーバーを開く',
    'ppp.open.secrets'=> 'シークレットを開く',
    'ppp.open.profiles'=> 'プロファイルを開く',
    'ppp.open.active'=> 'アクティブセッションを開く',

    // PPP Page - Back Button
    'ppp.back-to-ppp'=> 'PPPoE管理に戻る',

    // PPP Actions
    'ppp.actions'=> '操作',

    // PPP General Buttons
    'ppp.buttons.new'=> '新規',
    'ppp.buttons.edit'=> '編集',
    'ppp.buttons.enable'=> '有効',
    'ppp.buttons.disable'=> '無効',
    'ppp.buttons.remove'=> '削除',
    'ppp.buttons.refresh'=> '更新',
    'ppp.sort.by'=> '並べ替え',
    'ppp.sort'=> '並べ替え',
    'ppp.select.all'=> 'すべて選択',
    'ppp.buttons.prev'=> '前',
    'ppp.buttons.next'=> '次',
    'ppp.buttons.clear'=> 'クリア',
    'ppp.buttons.cancel'=> 'キャンセル',
    'ppp.buttons.create'=> '作成',
    'ppp.buttons.save'=> '保存',
    'ppp.buttons.proceed'=> '続行',

    // PPP Loading Status
    'ppp.status.loading'=> 'PPPoEデータを読み込み中...',

    // PPP Secrets Table Headers
    'ppp.table.th.service-name'=> 'サービス名',
    'ppp.table.th.iface'=> 'インターフェース',
    'ppp.table.th.keepalive'=> 'キープアライブタイムアウト',
    'ppp.table.th.profile'=> 'プロファイル',
    'ppp.table.th.one-session-host'=> 'ホストごとに1セッション',
    'ppp.table.th.authentication'=> '認証方式',
    'ppp.table.th.name'=> '名前',
    'ppp.table.th.password'=> 'パスワード',
    'ppp.table.th.service'=> 'サービス',
    'ppp.table.th.address'=> 'アドレス',
    'ppp.table.th.caller-id'=> '発信者ID',
    'ppp.table.th.local-address'=> 'ローカルアドレス',
    'ppp.table.th.remote-address'=> 'リモートアドレス',
    'ppp.table.th.last-logged-out'=> '最終ログアウト',
    'ppp.table.th.last-disc-reason'=> '切断理由',
    'ppp.table.th.last-called-id'=> '最終発信ID',
    'ppp.table.th.rate-limit'=> 'レート制限',
    'ppp.table.th.only-one'=> '単一セッションのみ',
    'ppp.table.th.uptime'=> '稼働時間',
    'ppp.table.th.bytes-in'=> '受信バイト',
    'ppp.table.th.bytes-out'=> '送信バイト',

    // PPP Add Server Modal Form
    'ppp.modal.form.title'=> 'PPPoEサーバーを追加',
    'ppp.modal.form.enabled'=> '有効',
    'ppp.modal.form.one-session-per-host'=> 'ホストごとに1セッション',
    'ppp.modal.form.accept-empty-services'=> '空のサービスを許可',
    'ppp.modal.form.accept-untagged'=> 'タグなしを許可',
    'ppp.modal.form.service-name'=> 'サービス名',
    'ppp.modal.form.service-name_placeholder'=> 'PPPoE名',
    'ppp.modal.form.interface'=> 'インターフェース',
    'ppp.modal.form.placeholder'=> 'デフォルト',
    'ppp.modal.form.max-mtu'=> '最大MTU',
    'ppp.modal.form.max-mru'=> '最大MRU',
    'ppp.modal.form.mrru'=> 'MRRU',
    'ppp.modal.form.keepalive-timeout'=> 'キープアライブタイムアウト',
    'ppp.modal.form.profile'=> 'プロファイル',
    'ppp.modal.form.max-sessions'=> '最大セッション数',
    'ppp.modal.form.auth-methods'=> '認証方式',
    'ppp.modal.form.auth-mschapv2'=> 'MS-CHAPv2',
    'ppp.modal.form.auth-mschapv1'=> 'MS-CHAPv1',
    'ppp.modal.form.auth-chap'=> 'CHAP',
    'ppp.modal.form.auth-pap'=> 'PAP',

    // PPP Add/Edit Secret Modal Form
    'ppp.modal.form.secret.name'=> '名前',
    'ppp.modal.form.secret.password'=> 'パスワード',
    'ppp.modal.form.secret.service-type'=> 'サービス',
    'ppp.modal.form.secret.local-address'=> 'ローカルアドレス',
    'ppp.modal.form.secret.remote-address'=> 'リモートアドレス',

    // secrets.php
    // Modal Titles
    'ppp.modal.form.add.ppp-secret'=> 'PPPoEシークレットを追加',
    'ppp.modal.form.edit.ppp-secret'=> 'PPPoEシークレットを編集',

    // PPP Secrets Page Modal Tabs
    'ppp.secrets.tab.general'=> '全般',  
    'ppp.secrets.tab.details'=> '詳細',

    // profiles.php
    // PPP Profiles Page

    // PPP Profiles Modal Titles
    'ppp.modal.form.add.ppp-profile'=> 'PPPoEプロファイルを追加',
    'ppp.modal.form.edit.ppp-profile'=> 'PPPoEプロファイルを編集',


    // PPP Profiles Modal Tabs
    'ppp.profiles.tab.general'=> '全般',
    'ppp.profiles.tab.protocols'=> 'プロトコル',
    'ppp.profiles.tab.limits'=> '制限',
    'ppp.profiles.tab.queue'=> 'キュー',
    'ppp.profiles.tab.scripts'=> 'スクリプト',

    // PPP Profiles Modal Form Fields
    'ppp.modal.form.profile.name'=> '名前',
    'ppp.modal.form.profile.local-address'=> 'ローカルアドレス',
    'ppp.modal.form.profile.remote-address'=> 'リモートアドレス',
    'ppp.modal.form.profile.use-ipv6'=> 'IPv6 を使用',
    'ppp.modal.form.profile.use-mpls'=> 'MPLS を使用',
    'ppp.modal.form.profile.use-comp'=> '圧縮を使用',
    'ppp.modal.form.profile.use-enc'=> '暗号化を使用',
    'ppp.modal.form.profile.sess-timeout'=> 'セッションタイムアウト',
    'ppp.modal.form.profile.idle-timeout'=> 'アイドルタイムアウト',
    'ppp.modal.form.profile.rate-limit'=> 'レート制限',
    'ppp.modal.form.profile.only-one'=> '単一セッションのみ',
    'ppp.modal.form.profile.parent-queue'=> '親キュー',
    'ppp.modal.form.profile.queue-type-rx'=> 'キュータイプ（ダウンロード）',
    'ppp.modal.form.profile.queue-type-tx'=> 'キュータイプ（アップロード）',
    'ppp.modal.form.profile.script-onup'=> '起動時',
    'ppp.modal.form.profile.script-ondown'=> '停止時',
    'ppp.modal.form.profile.script-placeholder'=> 'イベント発生時に実行されるスクリプト',
    'ppp.modal.form.migration.confirm'=> 'プロファイル移行の確認',
    'ppp.modal.form.migration.caption'=> 'このプロファイルの親キューまたはキュータイプをクリアすると、プロファイルの再作成や関連するPPPシークレットの再割り当てが必要になる場合があります。この操作は影響が大きい可能性があります。続行しますか？',

    // ip.php
    // IP Page
    'ip.title'=> 'IP 管理',
    'ip.desc'=> 'ARP、アドレス、DHCP、DNS、プールなどのIPサービスを管理します。',

    'ip.arp'=> 'ARP',
    'ip.addresses'=> 'アドレス',
    'ip.cloud'=> 'クラウド',
    'ip.dhcp.client'=> 'DHCP クライアント',
    'ip.dhcp.server'=> 'DHCP サーバー',
    'ip.dns'=> 'DNS',
    'ip.pool'=> 'プール',
    'ip.services'=> 'サービス',
    'ip.upnp'=> 'UPnP（ユニバーサルプラグアンドプレイ）',
    'ip.settings'=> '設定',
    
    'ip.arp.desc'=> 'ARPテーブルのエントリを表示・管理します。',
    'ip.addresses.desc'=> 'インターフェースに割り当てられたIPアドレスを管理します。',
    'ip.cloud.desc'=> 'クラウド/DDNS設定。値はルーターから読み取られます。',
    'ip.dhcp.client.desc'=> 'DHCPクライアントを表示・管理します。',
    'ip.dhcp.server.desc'=> 'DHCPサーバーとリースを構成します。',
    'ip.dns.desc'=> 'DNS設定と静的エントリを管理します。',
    'ip.pool.desc'=> 'DHCPや他のサービス用のアドレスプールを管理します。',
    'ip.services.desc'=> 'IP関連サービスを有効化または無効化します。',
    'ip.upnp.desc'=> 'Universal Plug and Play設定。値はルーターから読み取られます。',
    'ip.settings.desc'=> 'IPサブシステムの一般設定。',

    'ip.open.arp'=> 'ARPを開く',
    'ip.open.addresses'=> 'アドレスを開く',
    'ip.open.cloud'=> 'クラウドを開く',
    'ip.open.dhcp.client'=> 'DHCPクライアントを開く',
    'ip.open.dhcp.server'=> 'DHCPサーバーを開く',
    'ip.open.dns'=> 'DNSを開く',
    'ip.open.pool'=> 'プールを開く',
    'ip.open.services'=> 'サービスを開く',
    'ip.open.upnp'=> 'UPnPを開く',
    'ip.open.settings'=> '設定を開く',

    // IP Page - Back Button
    'ip.back-to-ip'=> 'IP管理に戻る',

    // IP JS strings
    // Addresses
    'ip.addresses.no_addresses' => 'アドレスなし',
    'ip.addresses.loading' => '読み込み中...',
    'ip.addresses.failed_to_contact_api' => 'APIへの接続に失敗しました',
    'ip.addresses.please_select_one_or_more' => '1つ以上のエントリを選択してください',
    'ip.addresses.select_one_to_edit' => '編集するアドレスを1つ選択してください',
    'ip.addresses.action_completed' => '操作 %s が完了しました',
    'ip.addresses.action_failed' => '操作に失敗しました: %s',
    'ip.addresses.request_failed' => 'リクエストに失敗しました: %s',
    'ip.addresses.address_added' => 'アドレスが追加されました',
    'ip.addresses.address_updated' => 'アドレスが更新されました',
    'ip.addresses.add_failed' => '追加に失敗しました: %s',
    'ip.addresses.update_failed' => '更新に失敗しました: %s',
    'ip.addresses.page_info' => 'ページ %s / %s (%s)',

    // ARP
    'ip.arp.no_arp_entries' => 'ARPエントリなし',
    'ip.arp.loading' => '読み込み中...',
    'ip.arp.failed_to_contact_api' => 'APIへの接続に失敗しました',
    'ip.arp.please_select_one_or_more' => '1つ以上のエントリを選択してください',
    'ip.arp.enable_confirm' => '選択したARPエントリを有効にしますか？',
    'ip.arp.disable_confirm' => '選択したARPエントリを無効にしますか？',
    'ip.arp.remove_confirm' => '選択したARPエントリを削除しますか？',
    'ip.arp.page_info' => 'ページ %s / %s (%s)',

    // Cloud
    'ip.cloud.failed_to_load' => 'クラウド設定の読み込みに失敗しました: %s',
    'ip.cloud.reverted' => '変更を元に戻しました',
    'ip.cloud.applied' => 'クラウド設定を適用しました',
    'ip.cloud.apply_failed' => '適用に失敗しました: %s',

    // DHCP Client
    'ip.dhcp.client.no_clients' => 'DHCPクライアントなし',
    'ip.dhcp.client.failed_to_load' => 'DHCPクライアントの読み込みに失敗しました: %s',
    'ip.dhcp.client.please_select_interface' => 'インターフェースを選択してください',
    'ip.dhcp.client.created' => 'DHCPクライアントが作成されました',
    'ip.dhcp.client.create_failed' => '作成に失敗しました: %s',
    'ip.dhcp.client.no_entries_selected' => 'エントリが選択されていません',
    'ip.dhcp.client.enable_completed' => '有効化が完了しました',
    'ip.dhcp.client.enable_failed' => '有効化に失敗しました: %s',
    'ip.dhcp.client.disable_completed' => '無効化が完了しました',
    'ip.dhcp.client.disable_failed' => '無効化に失敗しました: %s',
    'ip.dhcp.client.remove_confirm' => '選択したDHCPクライアントを削除しますか？',
    'ip.dhcp.client.option_name_code_required' => '名前とコードは必須です',
    'ip.dhcp.client.option_created' => 'オプションが作成されました',
    'ip.dhcp.client.option_create_failed' => '作成に失敗しました: %s',
    'ip.dhcp.client.no_options' => 'オプションなし',

    // DHCP Networks
    'ip.dhcp.networks.no_networks' => 'DHCPネットワークなし',
    'ip.dhcp.networks.loading' => '読み込み中...',
    'ip.dhcp.networks.select_one_to_edit' => '編集するネットワークを1つ選択してください',
    'ip.dhcp.networks.create_not_implemented' => '新しいネットワークの作成: 未実装',
    'ip.dhcp.networks.please_select_remove' => '削除するネットワークを1つ以上選択してください',
    'ip.dhcp.networks.remove_confirm' => '選択したネットワークを削除しますか？',
    'ip.dhcp.networks.removed' => '削除されました',
    'ip.dhcp.networks.remove_failed' => '削除に失敗しました: %s',
    'ip.dhcp.networks.page_info' => 'ページ %s / %s (%s)',

    // DNS
    'ip.dns.add_server_placeholder' => 'DNSサーバーを追加（IP）',
    'ip.dns.remove' => '削除',
    'ip.dns.loading' => '読み込み中...',
    'ip.dns.failed_to_contact_api' => 'APIへの接続に失敗しました',
    'ip.dns.error_loading' => 'DNS設定の読み込みエラー',
    'ip.dns.dns_saved' => 'DNS設定を保存しました',
    'ip.dns.failed_to_save' => '保存に失敗しました: %s',
    'ip.dns.save_confirm' => 'DNS設定を保存しますか？',
    'ip.dns.no_static_entries' => '静的エントリなし',
    'ip.dns.static_added' => '静的DNSを追加しました',
    'ip.dns.static_add_failed' => '静的追加に失敗しました',
    'ip.dns.performing_action' => '%s を実行中...',
    'ip.dns.invalid_json' => '無効なJSONレスポンス',
    'ip.dns.request_failed' => 'リクエストに失敗しました: %s',
    'ip.dns.flush_cache_confirm' => 'DNSキャッシュを全てフラッシュしますか？',
    'ip.dns.cache_flushed' => 'キャッシュをフラッシュしました',
    'ip.dns.failed_flush_cache' => 'キャッシュのフラッシュに失敗しました: %s',
    'ip.dns.no_cache_entries' => 'キャッシュエントリなし',

    // Pool
    'ip.pool.no_pools' => 'プールなし',
    'ip.pool.please_select_one_or_more' => '1つ以上のプールを選択してください',
    'ip.pool.select_one_to_edit' => '編集するプールを1つ選択してください',
    'ip.pool.name_and_address_required' => '名前とアドレスは必須です',
    'ip.pool.pool_created' => 'プールが作成されました',
    'ip.pool.create_failed' => '作成に失敗しました: %s',
    'ip.pool.pool_updated' => 'プールが更新されました',
    'ip.pool.update_failed' => '更新に失敗しました: %s',
    'ip.pool.remove_confirm' => '選択したプールを削除しますか？',
    'ip.pool.action_completed' => '操作 %s が完了しました',
    'ip.pool.action_failed' => '操作に失敗しました: %s',
    'ip.pool.request_failed' => 'リクエストに失敗しました: %s',
    'ip.pool.none' => '(なし)',
    'ip.pool.loading' => '読み込み中...',
    'ip.pool.failed_to_contact_api' => 'APIへの接続に失敗しました',
    'ip.pool.page_info' => 'ページ %s / %s (%s)',

    // IP Settings
    'ip.settings.refreshing_settings' => '設定を更新中...',
    'ip.settings.no_settings_found' => 'IP設定が見つかりません',
    'ip.settings.failed_to_load' => 'IP設定の読み込みに失敗しました',
    'ip.settings.updated' => 'IP設定を更新しました',
    'ip.settings.update_failed' => '更新に失敗しました: %s',

    // IP Page - Loading Status
    'ip.loading'=> 'IPデータを読み込み中...',

    // IP Page Actions
    'ip.actions'=> '操作',

    // IP Page General Buttons
    'ip.buttons.new'=> '追加',
    'ip.buttons.edit'=> '編集',
    'ip.buttons.refresh'=> '更新',
    'ip.buttons.create'=> '作成',
    'ip.buttons.save'=> '保存',
    'ip.buttons.cancel'=> 'キャンセル',
    'ip.buttons.enable'=> '有効',
    'ip.buttons.disable'=> '無効',
    'ip.buttons.remove'=> '削除',
    'ip.buttons.prev'=> '前',
    'ip.buttons.next'=> '次',
    'ip.sort.by'=> '並べ替え',
    'ip.sort'=> '並べ替え',
    'ip.select.all'=> 'すべて選択',
    'ip.buttons.flush.cache'=> 'キャッシュをフラッシュ',
    'ip.buttons.add.dns.server'=> 'DNSサーバーを追加',


    // IP UPnP Page
    'ip.upnp.enabled'=> '有効',
    'ip.upnp.allow-disable-external-iface'=> '外部インターフェースの無効化を許可',
    'ip.upnp.show-dummy-rule'=> 'ダミールールを表示',

    // arp.php
    // IP ARP Page

    // addresses.php
    // IP Addresses Page

    // IP Table Headers
    'ip.table.th.address'=> 'アドレス',
    'ip.table.th.network'=> 'ネットワーク',
    'ip.table.th.iface'=> 'インターフェース',
    'ip.table.th.comment'=> 'コメント',
    'ip.table.th.dhcp.client.name' => '名前',
    'ip.table.th.dhcp.client.code-value' => 'コード値',
    'ip.table.th.dhcp.client.client-value' => 'クライアント値',
    'ip.table.th.dns.name'=> '名前',
    'ip.table.th.dns.regexp'=> '正規表現',
    'ip.table.th.dns.type'=> 'タイプ',
    'ip.table.th.dns.value'=> '値',
    'ip.table.th.dns.ttl'=> 'TTL',
    'ip.table.th.dns.data'=> 'データ',

    // IP Address Modal Titles
    'ip.modal.form.add.address'=> 'IPアドレスを追加',
    'ip.modal.form.edit.address'=> 'IPアドレスを編集',

    // IP Address Modal Form
    'ip.modal.form.ip.address-mask'=> 'IPアドレス / マスク',
    'ip.modal.form.ip.network'=> 'ネットワーク',
    'ip.modal.form.iface'=> 'インターフェース',
    'ip.modal.form.comment'=> 'コメント',
    

    // cloud.php
    // IP Cloud Page

    // IP Cloud Modal Form
    'ip.cloud.enabled'=> 'DDNS 有効',
    'ip.cloud.ddns.update.interval'=> 'DDNS更新間隔',
    'ip.cloud.update.time'=> '更新時間',
    'ip.cloud.public.ipv4'=> '公開 IPv4',
    'ip.cloud.public.ipv6'=> '公開 IPv6',
    'ip.cloud.dns.name' => 'DNS名',
    'ip.cloud.use-router-defaults'=> 'ルーターのデフォルトを使用',
    'ip.cloud.yes'=> 'はい',
    'ip.cloud.no'=> 'いいえ',

    // dhcp-client.php
    // IP DHCP Client Page
    'ip.dhcp.client.options'=> 'DHCPクライアント',
    'ip.dhcp.client.modal.form.interface'=> 'インターフェース',
    'ip.dhcp.client.modal.form.enabled'=> '有効',
    'ip.dhcp.client.modal.form.use-peer-dns'=> 'ピアDNSを使用',
    'ip.dhcp.client.modal.form.use-peer-ntp'=> 'ピアNTPを使用',
    'ip.dhcp.client.modal.form.add-default-route'=> 'デフォルトルートを追加',
    'ip.dhcp.client.modal.form.default-route-distance'=> 'デフォルトルート距離',
    'ip.dhcp.client.options2'=> 'DHCPクライアントオプション',
    'ip.dhcp.client.modal.form.name'=> '名前',
    'ip.dhcp.client.modal.form.code'=> 'コード',
    'ip.dhcp.client.modal.form.value'=> '値',

   
    // dns.php
    // IP DNS Page

    // IP DNS - Modal Form
    'ip.dns.form.servers'=> 'DNSサーバー',
    'ip.dns.form.dynamic-servers'=> '動的サーバー',
    'ip.dns.form.use.doh.servers'=> 'DoHサーバーを使用',
    'ip.dns.form.doh.max.server.conn'=> 'DoH 最大サーバー接続数',
    'ip.dns.form.doh.max.concurrent.queries'=> 'DoH 最大同時クエリ数',
    'ip.dns.form.doh.timeout'=> 'DoHタイムアウト（秒）',
    'ip.dns.form.allow-remote.requests'=> 'リモートリクエストを許可',

    'ip.dns.form.cache.size'=> 'キャッシュサイズ（KB）',
    'ip.dns.form.cache.max-ttl'=> 'キャッシュ最大TTL（秒）',
    'ip.dns.form.cache.min-ttl'=> 'キャッシュ最小TTL（秒）',
    'ip.dns.form.max.concurrent.queries'=> '最大同時クエリ数',
    'ip.dns.form.max.concurrent.tcp'=> '最大同時TCP接続数',
    'ip.dns.form.query.timeout'=> 'クエリタイムアウト（秒）',
    'ip.dns.form.cache.used'=> 'キャッシュ使用量（読み取り専用）',

    'ip.dns.form.add.static.entry'=> '静的DNSエントリを追加',
    'ip.dns.form.add.static.name'=> '名前',
    'ip.dns.form.add.static.type'=> 'タイプ',
    'ip.dns.form.add.static.value'=> '値',
    'ip.dns.form.add.static.ttl'=> 'TTL',
    'ip.dns.form.add.static.regexp'=> '正規表現',

    // IP DNS - Static DNS
    'ip.dns.static'=> '静的DNS',
    'ip.dns.static.desc'=> '動的DNS解決を上書きする静的DNSエントリを管理します。',

    // IP DNS - Cache Settings
    'ip.dns.cache'=> 'DNSキャッシュ設定',

    // pool.php
    // IP Pool Page

    // IP Pool Table Headers
    'ip.pool.table.th.name'=> '名前',
    'ip.pool.table.th.ranges'=> '範囲',
    'ip.pool.table.th.comment'=> 'コメント',
    'ip.pool.table.th.total-addresses'=> '合計アドレス数',
    'ip.pool.table.th.used'=> '使用中',
    'ip.pool.table.th.available'=> '利用可能',

    // IP Pool Modal Form
    'ip.pool.modal.form.create.title'=> 'IPプールを作成',
    'ip.pool.modal.form.edit.title'=> 'IPプールを編集',
    'ip.pool.modal.form.name'=> '名前',
    'ip.pool.modal.form.ranges'=> 'アドレス範囲',
    'ip.pool.modal.form.ranges-placeholder'=> '例: 192.168.1.100-192.168.1.200 または 10.0.0.0/24',
    'ip.pool.modal.form.comment'=> 'コメント',
    'ip.pool.modal.form.next-address'=> '次のアドレス',
    'ip.pool.modal.form.total-addresses'=> '合計アドレス数',
    'ip.pool.modal.form.used'=> '使用中',
    'ip.pool.modal.form.available'=> '利用可能',

    // services.php
    // IP Services Page

    // IP Services Table Headers
    'ip.services.table.th.name'=> '名前',
    'ip.services.table.th.port'=> 'ポート',
    'ip.services.table.th.available-from'=> '利用可能元',
    'ip.services.table.th.max-sessions'=> '最大セッション数',
    'ip.services.table.th.protocol'=> 'プロトコル',
    'ip.services.table.th.remote'=> 'リモート',
    'ip.services.table.th.local'=> 'ローカル',

    // IP Services Modal Form
    'ip.services.modal.form.edit.title'=> 'IPサービスを編集',
    'ip.services.modal.form.name'=> '名前',
    'ip.services.modal.form.port'=> 'ポート',
    'ip.services.modal.form.available-from'=> '利用可能元',
    'ip.services.modal.form.max-sessions'=> '最大セッション数',
    'ip.services.modal.form.protocol'=> 'プロトコル',
    'ip.services.modal.form.remote.address'=> 'リモートアドレス',
    'ip.services.modal.form.remote.port'=> 'リモートポート',
    'ip.services.modal.form.local.address'=> 'ローカルアドレス',

    // settings.php
    // IP Settings Page

    // IP Settings Modal Form
    'ip.settings.modal.form.ip-forward'=> 'IPフォワーディングを有効にする',
    'ip.settings.modal.form.ip-send-redirects'=> 'リダイレクト送信を有効にする',
    'ip.settings.modal.form.ip-accept-redirects'=> 'リダイレクト受信を有効にする',
    'ip.settings.modal.form.ip-secure-redirects'=> 'セキュアリダイレクトを有効にする',
    'ip.settings.modal.form.ip-accept-source-route'=> 'ソースルート受信を有効にする',
    'ip.settings.modal.form.ip-allow-fast-path'=> 'Fast Path を許可する',
    'ip.settings.modal.form.ip-tcp-syncookies'=> 'TCP Syncookies を有効にする',
    'ip.settings.modal.form.ip-tcp-timestamps'=> 'TCPタイムスタンプ',
    'ip.settings.modal.form.ip-max-neighbors'=> '最大隣接数',
    'ip.settings.modal.form.ip-icmp-rate-limit'=> 'ICMPレート制限',
    'ip.settings.modal.form.ip-arp-timeout'=> 'ARPタイムアウト（秒）',
    'ip.settings.modal.form.ip-arp-timeout-help'=> 'RouterOSのタイムアウト形式を入力してください（例: 10m、1h、または00:10:00）。デフォルトを使用するには空欄にします。',

    // Error pages
    'errors.404.title' => 'ページが見つかりません',
    'errors.404.desc' => '要求されたページは見つかりませんでした。',
    'errors.403.title' => '禁止されています',
    'errors.403.desc' => 'このリソースにアクセスする権限がありません。',
    'errors.500.title' => 'サーバーエラー',
    'errors.500.desc' => 'サーバーで内部エラーが発生しました。',
    'errors.back_home' => 'ホームに戻る',
    'errors.more_info' => '何が起こったか',
    'errors.contact_admin' => 'これがエラーだと思う場合は、サイト管理者に連絡してください。',

]; 
