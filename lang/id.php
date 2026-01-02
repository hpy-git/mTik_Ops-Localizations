<?php
////////////////////////////////////////////////////////////////////////
// Indonesian translations for mTik_Ops                           
// Version: Next-Generation                                           
////////////////////////////////////////////////////////////////////////
return [
    // Start of Translations
    // Global
    'language-changed' => 'Bahasa diubah ke {lang}',
    'language-search-placeholder' => 'Cari...',

    // Global Search
    'search.title' => 'Cari',
    'search.instructions' => 'Ketik kata kunci atau frasa untuk mencari situs.',
    'search.results_header' => 'Hasil Pencarian untuk "{query}"',
    'search.placeholder' => 'Ketik untuk mencari...',
    'search.no_results' => 'Tidak ada hasil',
    'search.results' => 'Hasil',
    'search.button' => 'Cari',
    'search.hint' => 'Ketik untuk melihat saran instan.',
    'search.quick_links' => 'Tautan Cepat',
    'search.show' => 'Tampilkan Pencarian',

    
    // Site title and tagline
    'site.title' => 'mTik_Ops', // DO NOT TRANSLATE
    'site.tagline' => 'Manajemen Router Terpusat',

    // Authentication
    'nav.login' => 'Masuk',
    'nav.logout' => 'Keluar',
    'auth.logging_in' => 'Masuk...',
    'auth.logging_out' => 'Keluar...',
    'nav.quick_login' => 'Login Cepat',

    // nav-brand.php
    'nav.brand.user_greeting'=> 'Hai!',

    // nav.php
    'lang.label'=> 'Bahasa',
    'nav.about' => 'Tentang',
    'nav.features' => 'Fitur',
    'nav.our_team' => 'Tim Kami',
    'nav.contact' => 'Kontak',
    'nav.menu' => 'Menu',
    'nav.dashboard' => 'Dasbor',
    'nav.hotspot' => 'Hotspot',
    'nav.ip' => 'IP',
    'nav.firewall' => 'Firewall',
    'nav.ppp' => 'PPP',
    'nav.queues' => 'Antrian',
    'nav.settings' => 'Pengaturan',
    'nav.downloads' => 'Unduhan',
    'nav.scripting' => 'Skrip',

    // index.php
    // Index Page - About Section
    'about.title' => 'Dirancang untuk MikroTik',
    'about.desc' => 'mTikOps adalah platform berbasis peramban untuk mengelola router dan hotspot MikroTik. Menyediakan akses jarak jauh, manajemen hotspot, pencetakan voucher, PPPoE, dan lainnya dalam satu sistem yang cepat.',
    'about.about_us_button' => 'Tentang Kami',
    'about.our_team_button' => 'Tim Kami',

    // Index Page - Features Section
    'features.remote.title' => 'Manajemen Jaringan Jarak Jauh',
    'features.remote.desc' => 'Pantau dan kelola router jarak jauh, lihat status antarmuka, lakukan reboot, dan terapkan perubahan konfigurasi secara aman dari satu konsol.',
    'features.hotspot.title' => 'Manajemen Hotspot',
    'features.hotspot.desc' => 'Buat dan kelola server hotspot dan profil pengguna, terbitkan voucher, pantau pengguna aktif dan sesi, serta lakukan akuntansi dan pelaporan.',
    'features.troubleshoot.title' => 'Pemecahan Masalah dan Konfigurasi',
    'features.troubleshoot.desc' => 'Terapkan dan audit perubahan konfigurasi, jalankan diagnostik, pantau log, dan selesaikan masalah konektivitas dengan alat terintegrasi.',

    // Index Page - Signup Section
    'signup.title' => 'Mulai dengan mTikOps',
    'signup.desc' => 'Buat akun untuk mengelola router, hotspot, dan menjalankan diagnostik jaringan dari satu dasbor.',
    'signup.cta' => 'Daftar',

    // Index Page - Contact Section
    'contact.hq' => 'Kantor Pusat',
    'contact.email' => 'Email',
    'contact.contact' => 'Kontak',
    'contact.hq_address' => 'Taguig City, PH 1630',
    'contact.email_addr' => 'noc@mtikops.com',
    'contact.phone' => '+63 (962) 660-6116',

    // Index Page - Footer Section
    'footer.copyright' => 'Hak Cipta &copy; mTikOps {year}',
    'footer.powered' => 'Didukung oleh HPY™',
    'modal.confirm.title' => 'Konfirmasi',
    'modal.confirm.body' => 'Apakah Anda yakin?',
    'modal.confirm.cancel' => 'Batal',
    'modal.confirm.ok' => 'Konfirmasi',

    // Login Page
    'login.title' => 'Masuk',
    'login.desc' => 'Akses akun mTik_Ops Anda untuk mengelola router dan hotspot MikroTik dari satu dasbor.',
    'login.form.title' => 'Masuk ke Akun Anda',
    'login.form.host'=> 'Host',
    'login.form.username'=> 'Nama Pengguna',
    'login.form.password'=> 'Kata Sandi',
    'login.form.connection_type'=> 'Jenis Koneksi',
    'login.form.connection_type_yes'=> 'API Aman',
    'login.form.connection_type_no'=> 'API Standar',
    'login.form.connection_type_help'=> 'Gunakan 8728 dalam kebanyakan kasus kecuali Anda memiliki alasan khusus untuk menggunakan 8729 (mis. sertifikat SSL telah diterapkan pada router).',
    'login.form.port'=> 'Port',
    'login.form.remember'=> 'Ingat Saya',
    'login.form.connect'=> 'Hubungkan',
    'login.form.cancel'=> 'Batal',

    // Login Page Placeholders
    'login.form.host_placeholder'=> 'IP Router atau Nama Host',
    'login.form.username_placeholder'=> 'Masukkan nama pengguna Anda',
    'login.form.password_placeholder'=> 'Masukkan kata sandi Anda',
 // Login Page Messages
     'login.error.invalid_submission'=> 'Pengiriman formulir tidak valid. Silakan coba lagi.',
     'login.error.missing_fields'=> 'Host, Username dan Password diperlukan.',
     'login.error.unable_connect'=> 'Tidak dapat terhubung! — Periksa kredensial Anda dan coba lagi.',
     'login.success.connected'=> 'Berhasil terhubung ke router.',
     'login.success.remembered'=> 'Detail koneksi disimpan untuk login di masa mendatang.',
     'login.info.session_expired'=> 'Sesi Anda telah berakhir. Silakan masuk kembali.',
     'login.info.logged_out'=> 'Anda telah berhasil keluar.',
     'login.info.please_login'=> 'Silakan masuk untuk melanjutkan.',
     'login.button.forgot_password'=> 'Lupa Password?',
     'login.try_again'=> 'Coba lagi?',

    // Downloads Page
    'downloads.title' => 'Unduhan',
    'downloads.desc' => 'Unduh penginstal dan paket untuk platform yang didukung.',
    'downloads.available' => 'Unduhan Tersedia',
    'downloads.coming_soon' => 'Segera hadir',
    'downloads.download' => 'Unduh',
    'downloads.note' => 'Unggah installer ke folder /downloads untuk menjadikannya tersedia.',
    'downloads.changelog' => 'Catatan perubahan',
    'downloads.changelog.loading' => 'Memuat...',
    'downloads.changelog.no_file' => 'Tidak ada catatan perubahan untuk file ini.',
    
    // about-us.php
    // About Us Page
    'about-us.title' => 'Tentang Kami',
    'about-us.desc' => 'Pelajari lebih lanjut tentang mTik_Ops, misi kami, dan tim di balik platform ini.',
    'about-us.overview'=> 'Ikhtisar',
    'about-us.vision'=> 'Visi',
    'about-us.features'=> 'Fitur',
    'about-us.tutorials'=> 'Tutorial',
    'about-us.faqs'=> 'FAQ',
    'about-us.requirements'=> 'Persyaratan',

    // about-us.php
    // About Us Page Descriptions
    'about-us.overview.desc'=> 'Dapatkan pengenalan singkat mengenai mTikOps dan fitur utamanya.',
    'about-us.vision.desc'=> 'Pelajari misi kami dan tujuan jangka panjang proyek ini.',
    'about-us.features.desc'=> 'Lihat fitur utama yang tersedia di mTikOps.',
    'about-us.tutorials.desc'=> 'Panduan langkah demi langkah dan contoh alur kerja.',
    'about-us.faqs.desc'=> 'Pertanyaan yang sering diajukan dan jawabannya tentang mTikOps.',
    'about-us.requirements.desc'=> 'Prasyarat dan persyaratan RouterOS untuk menjalankan mTikOps.',

    // about-us.php
    // About Us Page Buttons
    'about-us.open.overview'=> 'Buka Ikhtisar',
    'about-us.open.vision'=> 'Buka Visi',
    'about-us.open.features'=> 'Buka Fitur',
    'about-us.open.tutorials'=> 'Buka Tutorial',
    'about-us.open.faqs'=> 'Buka FAQ',
    'about-us.open.requirements'=> 'Buka Persyaratan',

    // About Us - Back Button
    'about-us.back-to-about'=> 'Kembali ke Tentang Kami',

    // About Us - Overview Page
    'about-us.overview-page.title'=> 'Ikhtisar',
    'about-us.overview-page.desc'=> 'mTikOps adalah platform web ringan untuk mengelola router MikroTik dan layanan hotspot dari peramban.',

    // About Us - Vision Page
    'about-us.vision-page.title'=> 'Visi',
    'about-us.vision-page.desc'=> 'Kami bertujuan menyederhanakan operasi jaringan bagi pengguna MikroTik dengan antarmuka manajemen yang intuitif dan alat otomasi.',

    // About Us - Features Page
    'about-us.features-page.title'=> 'Fitur',
    'about-us.features-page.desc'=> 'Jelajahi fitur inti mTikOps.',

    // About Us - Tutorials Page
    'about-us.tutorials-page.title'=> 'Tutorial',
    'about-us.tutorials-page.desc'=> 'Panduan dan langkah-langkah untuk tugas umum.',

    // About Us - FAQs Page
    'about-us.faqs-page.title'=> 'FAQ',
    'about-us.faqs-page.desc'=> 'Pertanyaan yang sering diajukan dan jawabannya.',

    // About Us - Requirements Page
    'about-us.requirements-page.title'=> 'Prasyarat',
    'about-us.requirements-page.desc'=> 'Persyaratan minimum dan catatan kompatibilitas.',

    // our-team.php
    // Our Team Page
    'our-team.title'=> 'Tim Kami',
    'our-team.desc'=> 'Temui orang-orang di balik mTikOps — pengembang, kontributor, dan pemelihara.',
    'our-team.leadership'=> 'Pimpinan',
    'our-team.developers'=> 'Pengembang',
    'our-team.contributors'=> 'Kontributor',
    'our-team.advisors'=> 'Penasihat',
    'our-team.careers'=> 'Bergabunglah',
    'our-team.contact'=> 'Kontak',

    // Our Team Page Descriptions
    'our-team.leadership.desc'=> 'Pemelihara inti dan pemimpin proyek yang mendorong mTikOps ke depan.',
    'our-team.developers.desc'=> 'Insinyur dan kontributor yang membangun fitur dan perbaikan.',
    'our-team.contributors.desc'=> 'Kontributor komunitas yang membantu dokumentasi, pengujian, dan kode.',
    'our-team.advisors.desc'=> 'Penasihat dan ahli yang memberikan panduan untuk proyek.',
    'our-team.careers.desc'=> 'Posisi terbuka dan cara bergabung dengan tim.',
    'our-team.contact.desc'=> 'Hubungi tim untuk pertanyaan atau kolaborasi.',

    // Our Team Page Buttons
    'our-team.open.leadership'=> 'Lihat Pimpinan',
    'our-team.open.developers'=> 'Lihat Pengembang',
    'our-team.open.contributors'=> 'Lihat Kontributor',
    'our-team.open.advisors'=> 'Lihat Penasihat',
    'our-team.open.careers'=> 'Bergabunglah',
    'our-team.open.contact'=> 'Kontak Tim',

    // Our Team - Back Button
    'our-team.back-to-team'=> 'Kembali ke Tim Kami',

    // Our Team - Leadership Page
    'our-team.leadership-page.title'=> 'Kepemimpinan',
    'our-team.leadership-page.desc'=> 'Temui pemelihara inti dan pemimpin proyek di balik mTikOps.',

    // Our Team - Developers Page
    'our-team.developers-page.title'=> 'Pengembang',
    'our-team.developers-page.desc'=> 'Profil dan tanggung jawab pengembang yang berkontribusi pada mTikOps.',

    // Our Team - Contributors Page
    'our-team.contributors-page.title'=> 'Kontributor',
    'our-team.contributors-page.desc'=> 'Mengakui kontributor komunitas dan cara terlibat.',

    // Our Team - Advisors Page
    'our-team.advisors-page.title'=> 'Penasihat',
    'our-team.advisors-page.desc'=> 'Penasihat dan ahli yang memberikan arahan untuk proyek ini.',

    // Our Team - Join Us Page
    'our-team.join-us-page.title'=> 'Bergabunglah',
    'our-team.join-us-page.desc'=> 'Jelajahi posisi terbuka dan cara berkontribusi ke mTikOps.',

    // Our Team - Contact Page
    'our-team.contact-page.title'=> 'Kontak',
    'our-team.contact-page.desc'=> 'Cara menghubungi tim mTikOps untuk kolaborasi atau dukungan.',

    // Dashboard Page
    'dashboard.title'=> 'Dasbor',
    'dashboard.desc'=> 'Suite Pemantauan & Pencatatan Operasi Jaringan',

    // Dashboard Buttons
    'dashboard.show'=> 'Tampilkan Dasbor',
    'dashboard.button.refresh'=> 'Segarkan',
    'dashboard.button.prev'=> 'Sebelumnya',
    'dashboard.button.next'=> 'Berikutnya',

    // Dashboard Network Monitoring
    'dashboard.monitoring.title'=> 'Pemantauan Jaringan',
    'dashboard.monitoring.desc'=> 'Pemantauan kinerja jaringan, uptime, dan status perangkat secara real-time di infrastruktur MikroTik Anda.',
    'dashboard.ltmg.title'=> 'Grafik Pemantauan Lalu Lintas Real-time',
    'dashboard.fullscreen'=> 'Layar Penuh',
    'dashboard.loading'=> 'Memuat Data...',
    'dashboard.not-monitoring'=> 'Tidak Dipantau',

    // Dashboard System Logging
    'dashboard.logging.title'=> 'Pencatatan Sistem',
    'dashboard.logging.desc'=> 'Pencatatan terpusat dan pemberitahuan untuk event sistem dan kesalahan',
    'dashboard.system.logs'=> 'Log Sistem',
    'dashboard.critical.logs'=> 'Log Kritis',

    // Dashboard Device Information
    'dashboard.device.info.title'=> 'Informasi Perangkat',
    'dashboard.system.resources'=> 'Sumber Daya Sistem',
    'dashboard.system.information'=> 'Informasi Sistem',
    'dashboard.system.platform'=> 'Informasi RouterBOARD',

    // Device info JS strings
    'device.system_identity' => 'Identitas Sistem',
    'device.routeros_version' => 'Versi RouterOS',
    'device.uptime' => 'Waktu Aktif',
    'device.board' => 'Papan',
    'device.health' => 'Kesehatan',
    'device.temp_label' => 'Suhu:',
    'device.voltage_label' => 'Tegangan:',
    'device.unknown' => 'Tidak diketahui',
    'device.na' => 'n/a',
    'device.cpu' => 'CPU',
    'device.memory' => 'Memori',
    'device.disk' => 'Disk',
    'device.board_model' => 'Model Board',
    'device.serial' => 'Serial',
    'device.architecture' => 'Arsitektur',
    'device.cpu_label' => 'CPU',
    'device.cores' => 'inti',
    'device.build' => 'Kompilasi',
    'device.failed_load' => 'Gagal memuat informasi sistem',
    // Generate users preview JS strings
    'generate.generating' => 'Sedang membuat...',
    'generate.print_fetch_failed' => 'Gagal mengambil cetak: %s',
    'generate.network_not_ok' => 'Respon jaringan tidak baik: %s',
    'generate.generation_failed' => 'Pembuatan gagal: %s',
    'generate.unknown_error' => 'Kesalahan tidak diketahui',
    'generate.preview_not_available' => 'Pratinjau tidak tersedia',
    'generate.failed_print_dialog' => 'Gagal membuka dialog cetak: %s',
    'generate.cached_cleared' => 'Batch cache dibersihkan',
    'generate.failed_clear_cached' => 'Gagal membersihkan batch cache',
    'generate.preview_failed' => 'Pratinjau gagal',
    'generate.preview' => 'Pratinjau',
    'generate.unexpected_error' => 'Kesalahan tak terduga: %s',
    'generate.generated' => 'Tersedia %s pengguna',
    'generate.request_failed' => 'Permintaan gagal saat membuat voucher.',
    'generate.generate' => 'Buat',

    // Dashboard Hotspot Active Sessions
    'dashboard.hotspot.as.title'=> 'Sesi Aktif Hotspot',
    'dashboard.ppp.as.title'=> 'Sesi Aktif PPPoE',
    // JS dashboard strings (used by client-side locale export)
    'dashboard.no_active_sessions' => 'Tidak ada sesi aktif',
    'dashboard.no_ppp_active_sessions' => 'Tidak ada sesi PPP aktif',
    'dashboard.active_session' => 'sesi aktif',
    'dashboard.active_sessions' => 'sesi aktif',
    'dashboard.name' => 'Nama',
    'dashboard.address' => 'Alamat',
    'dashboard.uptime' => 'Waktu Aktif',
    'dashboard.service' => 'Layanan',
    'dashboard.not_monitoring' => 'Tidak Dipantau',
    'dashboard.more_format' => '... dan %d lainnya',
    'dashboard.unable_load_active' => 'Gagal memuat sesi aktif',
    'dashboard.unable_load_ppp' => 'Gagal memuat sesi PPP aktif',

    // hotspot.php
    // Hotspot Page
    'hotspot.title'=> 'Manajer Hotspot',
    'hotspot.desc'=> 'Kelola pengguna hotspot, profil pengguna, sesi aktif, dan host.',
    'hotspot.users'=> 'Pengguna',
    'hotspot.profiles'=> 'Profil',
    'hotspot.active'=> 'Aktif',
    'hotspot.hosts'=> 'Host',

    // Hotspot Page Descriptions
    'hotspot.users.desc'=> 'Buat, sunting, dan kelola akun pengguna hotspot secara individu.',
    'hotspot.profiles.desc'=> 'Kelola profil bandwidth, sesi, dan pembatasan kecepatan untuk pengguna.',
    'hotspot.active.desc'=> 'Lihat dan putuskan sesi hotspot aktif saat ini.',
    'hotspot.hosts.desc'=> 'Periksa dan kelola perangkat yang terhubung ke hotspot.',

    // Hotspot Page Buttons
    'hotspot.open.users'=> 'Buka Pengguna',
    'hotspot.open.profiles'=> 'Buka Profil',
    'hotspot.open.active'=> 'Buka Aktif',
    'hotspot.open.hosts'=> 'Buka Host',

    // firewall.php
    'firewall.title' => 'Firewall',
    'firewall.desc' => 'Kelola aturan firewall, NAT, mangle, dan alat inspeksi lalu lintas.',
    'firewall.filter' => 'Aturan Filter',
    'firewall.nat' => 'NAT',
    'firewall.mangle' => 'Mangle',
    'firewall.raw' => 'Raw',
    'firewall.connections' => 'Koneksi',
    'firewall.address' => 'Daftar Alamat',
    'firewall.layer7' => 'Protokol Layer7',
    'firewall.filter.desc' => 'Buat dan atur aturan penyaringan paket untuk kontrol lalu lintas.',
    'firewall.filter.actions' => 'Aksi',
    'firewall.filter.new' => 'Baru',
    'firewall.filter.edit' => 'Ubah',
    'firewall.filter.enable' => 'Aktifkan',
    'firewall.filter.disable' => 'Nonaktifkan',
    'firewall.filter.remove' => 'Hapus',
    'firewall.filter.sort.by' => 'Urutkan berdasarkan',
    'firewall.filter.sort' => 'Urutkan',
    'firewall.filter.prev' => 'Sebelumnya',
    'firewall.filter.next' => 'Berikutnya',
    'firewall.filter.loading' => 'Memuat...',
    'firewall.filter.none' => 'Tidak ada entri',
    'firewall.filter.failed_to_load' => 'Gagal memuat',
    'firewall.filter.confirm_remove' => 'Hapus item terpilih?',
    'firewall.filter.confirm_title' => 'Konfirmasi',
    'firewall.filter.enable_success' => 'Diaktifkan',
    'firewall.filter.disable_success' => 'Dinonaktifkan',
    'firewall.filter.remove_success' => 'Dihapus',
    'firewall.filter.action_failed' => 'Aksi gagal: %s',
    'firewall.filter.action_failed_short' => 'Aksi gagal',
    'firewall.filter.not_implemented' => 'Belum diimplementasikan',
    'firewall.filter.badge_disabled' => 'Dinonaktifkan',
    'firewall.filter.badge_dynamic' => 'Dinamis',
    'firewall.filter.badge_invalid' => 'Tidak valid',
    'firewall.filter.table.select' => 'Pilih',
    'firewall.filter.table.number' => '#',
    'firewall.filter.table.flag' => 'Bendera',
    'firewall.filter.table.action' => 'Aksi',
    'firewall.filter.table.chain' => 'Rantai',
    'firewall.filter.table.src_address' => 'Alamat Sumber',
    'firewall.filter.table.dst_address' => 'Alamat Tujuan',
    'firewall.filter.table.protocol' => 'Protokol',
    'firewall.filter.table.src_port' => 'Port Sumber',
    'firewall.filter.table.dst_port' => 'Port Tujuan',
    'firewall.filter.table.in_interface' => 'Antarmuka Masuk',
    'firewall.filter.table.out_interface' => 'Antarmuka Keluar',
    'firewall.filter.table.src_address_list' => 'Daftar Alamat Sumber',
    'firewall.filter.table.dst_address_list' => 'Daftar Alamat Tujuan',
    'firewall.filter.table.bytes' => 'Byte',
    'firewall.filter.table.packets' => 'Paket',
    'firewall.nat.desc' => 'Konfigurasikan kebijakan NAT sumber dan tujuan untuk jaringan Anda.',
    'firewall.nat.actions' => 'Aksi',
    'firewall.nat.new' => 'Baru',
    'firewall.nat.edit' => 'Ubah',
    'firewall.nat.enable' => 'Aktifkan',
    'firewall.nat.disable' => 'Nonaktifkan',
    'firewall.nat.remove' => 'Hapus',
    'firewall.nat.sort.by' => 'Urutkan berdasarkan',
    'firewall.nat.sort' => 'Urutkan',
    'firewall.nat.prev' => 'Sebelumnya',
    'firewall.nat.next' => 'Berikutnya',
    'firewall.nat.loading' => 'Memuat...',
    'firewall.nat.none' => 'Tidak ada entri',
    'firewall.nat.failed_to_load' => 'Gagal memuat',
    'firewall.nat.confirm_remove' => 'Hapus item terpilih?',
    'firewall.nat.confirm_title' => 'Konfirmasi',
    'firewall.nat.enable_success' => 'Diaktifkan',
    'firewall.nat.disable_success' => 'Dinonaktifkan',
    'firewall.nat.remove_success' => 'Dihapus',
    'firewall.nat.action_failed' => 'Aksi gagal: %s',
    'firewall.nat.action_failed_short' => 'Aksi gagal',
    'firewall.nat.not_implemented' => 'Belum diimplementasikan',
    'firewall.nat.badge_disabled' => 'Dinonaktifkan',
    'firewall.nat.badge_dynamic' => 'Dinamis',
    'firewall.nat.badge_invalid' => 'Tidak valid',
    'firewall.nat.table.select' => 'Pilih',
    'firewall.nat.table.number' => '#',
    'firewall.nat.table.flag' => 'Bendera',
    'firewall.nat.table.action' => 'Aksi',
    'firewall.nat.table.chain' => 'Rantai',
    'firewall.nat.table.src_address' => 'Alamat Sumber',
    'firewall.nat.table.dst_address' => 'Alamat Tujuan',
    'firewall.nat.table.protocol' => 'Protokol',
    'firewall.nat.table.src_port' => 'Port Sumber',
    'firewall.nat.table.dst_port' => 'Port Tujuan',
    'firewall.nat.table.in_interface' => 'Antarmuka Masuk',
    'firewall.nat.table.out_interface' => 'Antarmuka Keluar',
    'firewall.nat.table.bytes' => 'Byte',
    'firewall.nat.table.packets' => 'Paket',
    'firewall.mangle.desc' => 'Tandai paket dan koneksi untuk routing lanjutan dan QoS.',
    'firewall.mangle.actions' => 'Aksi',
    'firewall.mangle.new' => 'Baru',
    'firewall.mangle.edit' => 'Ubah',
    'firewall.mangle.enable' => 'Aktifkan',
    'firewall.mangle.disable' => 'Nonaktifkan',
    'firewall.mangle.remove' => 'Hapus',
    'firewall.mangle.sort.by' => 'Urutkan berdasarkan',
    'firewall.mangle.sort' => 'Urutkan',
    'firewall.mangle.prev' => 'Sebelumnya',
    'firewall.mangle.next' => 'Berikutnya',
    'firewall.mangle.loading' => 'Memuat...',
    'firewall.mangle.none' => 'Tidak ada entri',
    'firewall.mangle.failed_to_load' => 'Gagal memuat',
    'firewall.mangle.confirm_remove' => 'Hapus item terpilih?',
    'firewall.mangle.confirm_title' => 'Konfirmasi',
    'firewall.mangle.enable_success' => 'Diaktifkan',
    'firewall.mangle.disable_success' => 'Dinonaktifkan',
    'firewall.mangle.remove_success' => 'Dihapus',
    'firewall.mangle.action_failed' => 'Aksi gagal: %s',
    'firewall.mangle.action_failed_short' => 'Aksi gagal',
    'firewall.mangle.not_implemented' => 'Belum diimplementasikan',
    'firewall.mangle.badge_disabled' => 'Dinonaktifkan',
    'firewall.mangle.badge_dynamic' => 'Dinamis',
    'firewall.mangle.badge_invalid' => 'Tidak valid',
    'firewall.mangle.table.select' => 'Pilih',
    'firewall.mangle.table.number' => '#',
    'firewall.mangle.table.flag' => 'Bendera',
    'firewall.mangle.table.action' => 'Aksi',
    'firewall.mangle.table.chain' => 'Rantai',
    'firewall.mangle.table.bytes' => 'Byte',
    'firewall.mangle.table.packets' => 'Paket',
    'firewall.mangle.table.src_address' => 'Alamat Sumber',
    'firewall.mangle.table.dst_address' => 'Alamat Tujuan',
    'firewall.mangle.table.src_address_list' => 'Daftar Alamat Sumber',
    'firewall.mangle.table.dst_address_list' => 'Daftar Alamat Tujuan',
    'firewall.mangle.table.protocol' => 'Protokol',
    'firewall.mangle.table.src_port' => 'Port Sumber',
    'firewall.mangle.table.dst_port' => 'Port Tujuan',
    'firewall.mangle.table.in_interface' => 'Antarmuka Masuk',
    'firewall.mangle.table.out_interface' => 'Antarmuka Keluar',
    'firewall.raw.desc' => 'Terapkan filter raw prerouting sebelum pelacakan koneksi.',
    'firewall.raw.actions' => 'Aksi',
    'firewall.raw.new' => 'Baru',
    'firewall.raw.edit' => 'Ubah',
    'firewall.raw.enable' => 'Aktifkan',
    'firewall.raw.disable' => 'Nonaktifkan',
    'firewall.raw.remove' => 'Hapus',
    'firewall.raw.sort.by' => 'Urutkan berdasarkan',
    'firewall.raw.sort' => 'Urutkan',
    'firewall.raw.prev' => 'Sebelumnya',
    'firewall.raw.next' => 'Berikutnya',
    'firewall.raw.loading' => 'Memuat...',
    'firewall.raw.none' => 'Tidak ada entri',
    'firewall.raw.failed_to_load' => 'Gagal memuat',
    'firewall.raw.confirm_remove' => 'Hapus item terpilih?',
    'firewall.raw.confirm_title' => 'Konfirmasi',
    'firewall.raw.enable_success' => 'Diaktifkan',
    'firewall.raw.disable_success' => 'Dinonaktifkan',
    'firewall.raw.remove_success' => 'Dihapus',
    'firewall.raw.action_failed' => 'Aksi gagal: %s',
    'firewall.raw.action_failed_short' => 'Aksi gagal',
    'firewall.raw.not_implemented' => 'Belum diimplementasikan',
    'firewall.raw.badge_disabled' => 'Dinonaktifkan',
    'firewall.raw.badge_dynamic' => 'Dinamis',
    'firewall.raw.badge_invalid' => 'Tidak valid',
    'firewall.raw.table.select' => 'Pilih',
    'firewall.raw.table.flag' => 'Bendera',
    'firewall.raw.table.action' => 'Aksi',
    'firewall.raw.table.chain' => 'Rantai',
    'firewall.raw.table.src_address' => 'Alamat Sumber',
    'firewall.raw.table.dst_address' => 'Alamat Tujuan',
    'firewall.raw.table.src_address_list' => 'Daftar Alamat Sumber',
    'firewall.raw.table.dst_address_list' => 'Daftar Alamat Tujuan',
    'firewall.raw.table.protocol' => 'Protokol',
    'firewall.connections.desc' => 'Periksa entri pelacakan koneksi firewall saat ini.',
    'firewall.address.desc' => 'Kelola daftar alamat yang dapat digunakan ulang untuk pencocokan aturan.',
    'firewall.address.actions' => 'Aksi',
    'firewall.address.new' => 'Baru',
    'firewall.address.enable' => 'Aktifkan',
    'firewall.address.disable' => 'Nonaktifkan',
    'firewall.address.remove' => 'Hapus',
    'firewall.address.refresh' => 'Segarkan',
    'firewall.address.sort.by' => 'Urutkan berdasarkan',
    'firewall.address.sort' => 'Urutkan',
    'firewall.address.prev' => 'Sebelumnya',
    'firewall.address.next' => 'Berikutnya',
    'firewall.address.loading' => 'Memuat...',
    'firewall.address.none' => 'Tidak ada entri',
    'firewall.address.failed_to_load' => 'Gagal memuat',
    'firewall.address.confirm_remove' => 'Hapus item terpilih?',
    'firewall.address.confirm_title' => 'Konfirmasi',
    'firewall.address.enable_success' => 'Diaktifkan',
    'firewall.address.disable_success' => 'Dinonaktifkan',
    'firewall.address.remove_success' => 'Dihapus',
    'firewall.address.action_failed' => 'Aksi gagal: %s',
    'firewall.address.action_failed_short' => 'Aksi gagal',
    'firewall.address.not_implemented' => 'Belum diimplementasikan',
    'firewall.address.table.select' => 'Pilih',
    'firewall.address.table.list' => 'Daftar',
    'firewall.address.table.address' => 'Alamat',
    'firewall.address.table.time' => 'Waktu',
    'firewall.address.table.creation' => 'Pembuatan',
    'firewall.address.edit' => 'Ubah',
    'firewall.address.modal.title_new' => 'Tambah Daftar Alamat',
    'firewall.address.modal.title_edit' => 'Edit Daftar Alamat',
    'firewall.address.modal.enabled' => 'Diaktifkan',
    'firewall.address.modal.list' => 'Daftar',
    'firewall.address.modal.list_placeholder' => 'Masukkan nama daftar',
    'firewall.address.modal.list_select_placeholder' => 'Pilih daftar alamat yang sudah ada',
    'firewall.address.modal.address' => 'Alamat',
    'firewall.address.modal.timeout' => 'Batas waktu',
    'firewall.address.modal.creation' => 'Waktu pembuatan',
    'firewall.address.modal.comment' => 'Komentar',
    'firewall.address.modal.cancel' => 'Batal',
    'firewall.address.modal.create' => 'Buat',
    'firewall.address.modal.update' => 'Perbarui',
    'firewall.address.modal.list_required' => 'Daftar wajib diisi',
    'firewall.address.modal.address_required' => 'Alamat wajib diisi',
    'firewall.address.modal.add_success' => 'Daftar alamat dibuat',
    'firewall.address.modal.update_success' => 'Daftar alamat diperbarui',
    'firewall.address.modal.save_failed' => 'Gagal menyimpan: %s',
    'firewall.address.modal.request_failed' => 'Permintaan gagal',
    'firewall.address.modal.creation_auto' => 'Akan diatur otomatis',
    'firewall.layer7.desc' => 'Kelola pola protokol Layer7 untuk inspeksi paket mendalam.',
    'firewall.layer7.actions' => 'Aksi',
    'firewall.layer7.new' => 'Baru',
    'firewall.layer7.edit' => 'Ubah',
    'firewall.layer7.remove' => 'Hapus',
    'firewall.layer7.sort.by' => 'Urutkan berdasarkan',
    'firewall.layer7.sort' => 'Urutkan',
    'firewall.layer7.prev' => 'Sebelumnya',
    'firewall.layer7.next' => 'Berikutnya',
    'firewall.layer7.loading' => 'Memuat...',
    'firewall.layer7.none' => 'Tidak ada entri',
    'firewall.layer7.failed_to_load' => 'Gagal memuat',
    'firewall.layer7.confirm_remove' => 'Hapus item terpilih?',
    'firewall.layer7.confirm_title' => 'Konfirmasi',
    'firewall.layer7.remove_success' => 'Dihapus',
    'firewall.layer7.remove_failed' => 'Gagal menghapus: %s',
    'firewall.layer7.remove_failed_short' => 'Gagal menghapus',
    'firewall.layer7.not_implemented' => 'Belum diimplementasikan',
    'firewall.layer7.table.select' => 'Pilih',
    'firewall.layer7.table.name' => 'Nama',
    'firewall.layer7.table.regexp' => 'Regexp',
    'firewall.layer7.modal.title_new' => 'Tambah Protokol Layer7',
    'firewall.layer7.modal.title_edit' => 'Edit Protokol Layer7',
    'firewall.layer7.modal.name' => 'Nama',
    'firewall.layer7.modal.regexp' => 'Regexp',
    'firewall.layer7.modal.comment' => 'Komentar',
    'firewall.layer7.modal.cancel' => 'Batal',
    'firewall.layer7.modal.create' => 'Buat',
    'firewall.layer7.modal.update' => 'Perbarui',
    'firewall.layer7.modal.name_required' => 'Nama wajib diisi',
    'firewall.layer7.modal.regexp_required' => 'Regexp wajib diisi',
    'firewall.layer7.modal.add_success' => 'Protokol Layer7 dibuat',
    'firewall.layer7.modal.update_success' => 'Protokol Layer7 diperbarui',
    'firewall.layer7.modal.save_failed' => 'Gagal menyimpan: %s',
    'firewall.layer7.modal.request_failed' => 'Permintaan gagal',
    'firewall.open.filter' => 'Buka Aturan Filter',
    'firewall.open.nat' => 'Buka NAT',
    'firewall.open.mangle' => 'Buka Mangle',
    'firewall.open.raw' => 'Buka Raw',
    'firewall.open.connections' => 'Buka Koneksi',
    'firewall.open.address' => 'Buka Daftar Alamat',
    'firewall.open.layer7' => 'Buka Protokol Layer7',
    'firewall.back-to-firewall' => 'Kembali ke Firewall',
    'firewall.connections.actions' => 'Aksi',
    'firewall.connections.remove' => 'Hapus',
    'firewall.connections.refresh' => 'Segarkan',
    'firewall.connections.sort.by' => 'Urutkan berdasarkan',
    'firewall.connections.sort' => 'Urutkan',
    'firewall.connections.prev' => 'Sebelumnya',
    'firewall.connections.next' => 'Berikutnya',
    'firewall.connections.loading' => 'Memuat koneksi...',
    'firewall.connections.none' => 'Tidak ada koneksi ditemukan',
    'firewall.connections.failed_to_load' => 'Gagal memuat',
    'firewall.connections.confirm_remove' => 'Hapus koneksi yang dipilih?',
    'firewall.connections.confirm_title' => 'Konfirmasi',
    'firewall.connections.remove_success' => 'Koneksi dihapus',
    'firewall.connections.remove_failed' => 'Gagal menghapus: %s',
    'firewall.connections.remove_failed_short' => 'Gagal menghapus',
    'firewall.connections.table.select' => 'Pilih',
    'firewall.connections.table.flags' => 'Bendera',
    'firewall.connections.table.protocol' => 'Protokol',
    'firewall.connections.table.src_address' => 'Alamat Sumber',
    'firewall.connections.table.src_port' => 'Port Sumber',
    'firewall.connections.table.dst_address' => 'Alamat Tujuan',
    'firewall.connections.table.dst_port' => 'Port Tujuan',
    'firewall.connections.table.conn_mark' => 'Tanda koneksi',
    'firewall.connections.table.state' => 'Status',

    // Hotspot - Back Button
    'hotspot.back-to-hotspot'=> 'Kembali ke Manajer Hotspot',

    // Hotspot General Buttons
    'hotspot.action.button'=> 'Aksi',
    'hotspot.generate.button'=> 'Buat',
    'hotspot.add-user.button'=> 'Tambah Pengguna',
    'hotspot.enable.button'=> 'Aktifkan',
    'hotspot.add-profile.button'=> 'Tambah Profil',
    'hotspot.edit.button'=> 'Sunting',
    'hotspot.remove.button'=> 'Hapus',
    'hotspot.disable.button'=> 'Nonaktifkan',
    'hotspot.export.users'=> 'Ekspor Pengguna',
    'hotspot.export.button'=> 'Ekspor',
    'hotspot.button.refresh'=> 'Segarkan',
    'hotspot.button.prev'=> 'Sebelumnya',
    'hotspot.button.next'=> 'Berikutnya',
    'hotspot.sort.by'=> 'Urutkan berdasarkan',
    'hotspot.sort.profiles'=> 'Urutkan berdasarkan Profil',
    'hotspot.sort.comments'=> 'Urutkan berdasarkan Komentar',

    // Hotspot Table Headers
    'hotspot.table.th.select'=> 'Pilih Semua',
    'hotspot.table.th.server'=> 'Nama Server',
    'hotspot.table.th.user'=> 'Pengguna',
    'hotspot.table.th.name'=> 'Nama',
    'hotspot.table.th.address'=> 'Alamat',
    'hotspot.table.th.mac'=> 'Alamat MAC',
    'hotspot.table.th.profile'=> 'Profil',
    'hotspot.table.th.uptime'=> 'Waktu Aktif',
    'hotspot.table.th.bytes-in'=> 'Bytes Masuk',
    'hotspot.table.th.bytes-out'=> 'Bytes Keluar',
    'hotspot.table.th.comment'=> 'Komentar',
    'hotspot.table.th.to-address'=> 'Alamat Tujuan',
    'hotspot.table.th.last-seen'=> 'Terakhir Dilihat',
    'hotspot.status.loading'=> 'Memuat Pengguna Hotspot...',

    // Hotspot JS: hosts, profiles, users, modals
    // Hosts list
    'hotspot.hosts.no_hosts' => 'Tidak ada host',
    'hotspot.hosts.loading' => 'Memuat...',
    'hotspot.hosts.failed_to_contact_api' => 'Gagal menghubungi API',
    'hotspot.hosts.page_info' => 'Halaman %s / %s (%s)',

    // Profiles list
    'hotspot.profiles.no_profiles' => 'Tidak ada profil',
    'hotspot.profiles.loading' => 'Memuat...',
    'hotspot.profiles.failed_to_load' => 'Gagal memuat profil',
    'hotspot.profiles.failed_to_contact_api' => 'Gagal menghubungi API',
    'hotspot.profiles.no_pools' => '(tidak ada pool)',
    'hotspot.profiles.no_queues' => '(tidak ada antrian)',
    'hotspot.profiles.no_types' => '(tidak ada tipe)',
    'hotspot.profiles.select' => 'Pilih...',
    'hotspot.profiles.default' => 'default',
    'hotspot.profiles.no_profiles_option' => '(tidak ada profil)',
    'hotspot.profiles.page_info' => 'Halaman %s / %s (%s)',
    'hotspot.profiles.name_required' => 'Nama wajib diisi',
    'hotspot.profiles.added' => 'Profil ditambahkan',
    'hotspot.profiles.add_failed' => 'Gagal menambahkan profil: %s',
    'hotspot.profiles.server_contact_failed' => 'Gagal menghubungi server',
    'hotspot.profiles.id_missing' => 'ID profil hilang',
    'hotspot.profiles.updated' => 'Profil diperbarui',
    'hotspot.profiles.update_failed' => 'Gagal memperbarui profil: %s',
    'hotspot.profiles.removed' => 'Profil dihapus',
    'hotspot.profiles.remove_failed' => 'Gagal menghapus profil: %s',
    'hotspot.profiles.select_remove' => 'Pilih profil untuk dihapus',
    'hotspot.profiles.remove_confirm' => 'Anda yakin ingin menghapus profil yang dipilih?',
    'hotspot.profiles.remove_confirm_title' => 'Konfirmasi',
    
    // Admin Control Panel translations
    'admin.title' => 'Panel Admin',
    'admin.desc' => 'Pusat Kontrol',
    'admin.maintenance' => 'Pemeliharaan',
    'admin.maintenance.desc' => 'Aktifkan pemberitahuan pemeliharaan situs untuk pengunjung.',
    'admin.page_access' => 'Kontrol Akses Halaman',
    'admin.page_access.desc' => 'Izinkan atau blokir pengguna mengakses bagian tertentu dari aplikasi.',
    'admin.view_logs' => 'Lihat Log',
    'admin.logs.title' => 'Log Akses Admin',
    'admin.save' => 'Simpan',
    'admin.saved' => 'Tersimpan',
    'admin.save_failed' => 'Gagal menyimpan',
    'admin.save_error' => 'Gagal menyimpan pengaturan',
    'admin.load_logs_failed' => 'Gagal memuat log',
    'admin.access_denied' => 'Anda tidak memiliki izin untuk mengakses Panel Administrasi.',
    'access.restricted.title' => 'Akses Terbatas',
    'access.restricted.desc' => 'Bagian ini saat ini dinonaktifkan',
    'admin.section_disabled' => 'Bagian dinonaktifkan oleh admin',
    'nav.disabled' => 'Dinonaktifkan',
    // Maintenance toggle JS strings
    'maintenance.toast' => 'Mode Pemeliharaan' . '<br/><br/>' . 'Fungsi terbatas saat mode pemeliharaan diaktifkan.',
    'maintenance.update_toast' => 'Mode Pembaruan Sistem' . '<br/><br/>' . 'Pembaruan sistem sedang berlangsung. Beberapa fitur mungkin tidak tersedia.',
    'maintenance.set_failed' => 'Gagal mengatur status Mode Pemeliharaan',

    // Users modals and export
    'hotspot.modals.no_servers' => '(tidak ada server)',
    'hotspot.modals.no_profiles' => '(tidak ada profil)',
    'hotspot.modals.please_select_export' => 'Pilih satu atau lebih pengguna untuk diekspor',
    'hotspot.modals.select_at_least_one_field' => 'Pilih setidaknya satu bidang untuk diekspor',
    'hotspot.modals.no_users_selected' => 'Tidak ada pengguna yang dipilih',
    'hotspot.modals.no_data_to_export' => 'Tidak ada data untuk diekspor',
    'hotspot.modals.export_started' => 'Ekspor dimulai',
    'hotspot.modals.export_failed' => 'Ekspor gagal',
    'hotspot.modals.add_user_title' => 'Tambah Pengguna Hotspot',
    'hotspot.modals.edit_user_title' => 'Sunting Pengguna Hotspot',
    'hotspot.modals.create_button' => 'Buat',
    'hotspot.modals.update_button' => 'Perbarui',
    'hotspot.modals.failed_load_user' => 'Gagal memuat data pengguna',
    'hotspot.modals.select_one_to_edit' => 'Pilih tepat satu pengguna untuk disunting',
    'hotspot.modals.user_updated' => 'Pengguna diperbarui',
    'hotspot.modals.user_created' => 'Pengguna dibuat',
    'hotspot.modals.create_update_failed' => 'Pembuatan/Perbaruan gagal',
    'hotspot.modals.create_request_failed' => 'Permintaan pembuatan gagal',

    // Users list
    'hotspot.users.no_users' => 'Tidak ada pengguna',
    'hotspot.users.loading' => 'Memuat...',
    'hotspot.users.badge_disabled' => 'Dinonaktifkan',
    'hotspot.users.empty_response' => 'Respon kosong',
    'hotspot.users.failed_to_contact_api' => 'Gagal menghubungi API',
    'hotspot.users.select_one_or_more' => 'Pilih satu atau lebih pengguna.',
    'hotspot.users.remove_confirm' => 'Hapus pengguna yang dipilih? Tindakan ini tidak dapat dibatalkan.',
    'hotspot.users.action_completed' => 'Aksi "%s" selesai. Berhasil: %s/%s',
    'hotspot.users.action_failed' => 'Aksi gagal: %s',
    'hotspot.users.request_failed' => 'Permintaan gagal',
    'hotspot.users.sort_profiles' => 'Urutkan Profil',
    'hotspot.users.sort_comments' => 'Urutkan Komentar',
    'hotspot.users.select_profiles_placeholder' => 'Urutkan Profil',
    'hotspot.users.select_comments_placeholder' => 'Urutkan Komentar',

    // Hotspot JS helper strings
    'hotspot.no_active_entries' => 'Tidak ada entri aktif',
    'hotspot.loading' => 'Memuat...',
    'hotspot.failed_to_contact_api' => 'Gagal menghubungi API',
    'hotspot.page_info' => 'Halaman %s / %s (%s)',

    // Hotspot Modal Tabs and Titles
    'hotspot.modal.title.generate'=> 'Buat Pengguna / Voucher',
    'hotspot.modal.general.tab'=> 'Umum',
    'hotspot.modal.printing.tab'=> 'Pencetakan',
    'hotspot.modal.stats.tab'=> 'Statistik',
    'hotspot.modal.queueing.tab'=> 'Antrian',
    'hotspot.modal.scripts.tab'=> 'Skrip',

    // Hotspot Modal Form Generate / Add User - General Tab
    'hotspot.modal.form.qty'=> 'Jumlah',
    'hotspot.modal.form.server'=> 'Server Hotspot',
    'hotspot.modal.form.qty.help'=> 'Jumlah voucher / kode token yang akan dibuat.',
    'hotspot.modal.form.username'=> 'Nama pengguna',
    'hotspot.modal.form.password'=> 'Kata sandi',
    'hotspot.modal.form.user-type'=> 'Jenis pengguna',
    'hotspot.modal.form.user-type.help'=> 'Username & Password - Membuat username acak dan password berbeda (mengizinkan login pengguna biasa).<br/>Username = Password - Membuat username acak yang passwordnya sama dengan username (untuk voucher).',
    'hotspot.modal.form.code-length'=> 'Panjang kode',
    'hotspot.modal.form.characters'=> 'Characters',
    'hotspot.modal.form.user-profile'=> 'Profil pengguna',
    'hotspot.modal.form.comment'=> 'Komentar',
    'hotspot.modal.form.optional-comment'=> 'Komentar opsional',
    'hotspot.modal.form.mac-address'=>  'Alamat MAC',
    'hotspot.modal.form.time-limit'=>  'Batas waktu',
    'hotspot.modal.form.time-limit.help'=> 'Format yang diterima:<br/>m - Menit<br/>h - Jam<br/>d - Hari<br/><br/>Pengguna dinonaktifkan ketika batas waktu tercapai.<br/><br/>Catatan:<br/>1. Jika Batas Waktu dan Batas Data keduanya diatur, pengguna akan dinonaktifkan ketika salah satu batas tercapai.<br/>2. Jika tidak ada batas yang diatur, pengguna akan tetap aktif sampai dinonaktifkan atau dihapus secara manual.<br/>3. Batas Waktu dan Batas Data dapat digunakan bersama untuk kontrol sesi pengguna yang lebih baik.<br/>4. Pastikan format benar agar tidak terjadi kesalahan saat membuat pengguna.<br/>5. Contoh: 30m (30 menit), 2h (2 jam), 1d (1 hari).',
    'hotspot.modal.form.data-limit'=>  'Batas data',
    'hotspot.modal.form.data-limit.help'=> 'Format yang diterima:<br/>M - Megabit<br/>G - Gigabit<br/><br/>Pengguna dinonaktifkan ketika batas data tercapai.<br/><br/>Catatan:<br/>1. Jika Batas Waktu dan Batas Data keduanya diatur, pengguna akan dinonaktifkan ketika salah satu batas tercapai.<br/>2. Jika tidak ada batas yang diatur, pengguna akan tetap aktif sampai dinonaktifkan atau dihapus secara manual.<br/>3. Batas Waktu dan Batas Data dapat digunakan bersama untuk kontrol sesi pengguna yang lebih baik.<br/>4. Pastikan format benar agar tidak terjadi kesalahan saat membuat pengguna.<br/>5. Contoh: 500M (500 Megabit), 2G (2 Gigabit).',

    // Hotspot Modal Form Generate - Printing Tab
    'hotspot.modal.form.hotspot-name'=> 'Nama Hotspot',
    'hotspot.modal.form.hotspot-dns'=> 'DNS',
    'hotspot.modal.form.hotspot-currency'=> 'Mata Uang',
    'hotspot.modal.form.hotspot-select-currency'=> 'Pilih Mata Uang',
    'hotspot.modal.form.hotspot-price'=> 'Harga',
    'hotspot.modal.form.hotspot-include-comment'=> 'Sertakan Komentar',
    'hotspot.modal.form.hotspot-include-comment-desc'=> 'Sertakan komentar yang dihasilkan pada voucher yang dicetak',
    'hotspot.modal.form.hotspot-template'=> 'Template',

    // Hotspot Modal Form Generate - Printing Placeholders
    'hotspot.modal.form.hotspot-name-placeholder'=> 'Hotspot Saya',
    'hotspot.modal.form.hotspot-dns-placeholder'=> 'hotspot.mtikops.com',
    'hotspot.modal.form.hotspot-price-placeholder'=> 'Harga Per Voucher',

    // Hotspot Modal Form Generate - User-Type
    'hotspot.modal.form.user-type-regular'=> 'Nama Pengguna & Kata Sandi',
    'hotspot.modal.form.user-type-voucher'=> 'Nama Pengguna = Kata Sandi',

    // Hotspot Modal Form Generate - Characters
    'hotspot.modal.form.characters'=> 'Karakter',
    'hotspot.modal.form.characters-lower'=> 'abcd (huruf kecil)',
    'hotspot.modal.form.characters-upper'=> 'ABCD (HURUF BESAR)',
    'hotspot.modal.form.characters-mixed'=> 'AbCd (Campuran)',
    'hotspot.modal.form.characters-num'=> '1234 (Angka)',
    'hotspot.modal.form.characters-lower-num'=> 'a1b2 (huruf kecil & angka)',
    'hotspot.modal.form.characters-upper-num'=> 'A1B2 (HURUF BESAR & Angka)',
    'hotspot.modal.form.characters-mixed-num'=> 'aA1bB2 (Campuran & Angka)',

    // Hotspot Modal Form Stats - Stats Tab
    'hotspot.modal.form.stats.uptime'=> 'Waktu aktif',
    'hotspot.modal.form.stats.bytes_in'=> 'Byte masuk',
    'hotspot.modal.form.stats.bytes_out'=> 'Byte keluar',
    'hotspot.modal.form.stats.limit-uptime'=> 'Batas waktu aktif',
    'hotspot.modal.form.stats.limit-bytes_total'=> 'Batas total byte',
    'hotspot.modal.form.stats.user-code'=> 'Kode pengguna',
    'hotspot.modal.form.stats.expire-date'=> 'Tanggal kedaluwarsa',

    // Hotspot Modal Form Misc
    'hotspot.modal.form.loading' => 'Memuat data...',

    // Hotspot Modal Form Buttons
    'hotspot.modal.form.button.generate-print'=> 'Buat & Cetak',
    'hotspot.modal.form.button.generate'=> 'Hanya Buat',
    'hotspot.modal.form.button.clear-cached-batch'=> 'Bersihkan Batch Cache',
    'hotspot.modal.form.button.close'=> 'Tutup',
    'hotspot.modal.form.button.create'=> 'Buat',
    'hotspot.modal.form.button.cancel'=> 'Batal',

    // profiles.php
    // Hotspot User Profiles Page
    'hotspot.user.profiles.title'=> 'Profil',
    'hotspot.user.profiles.desc'=> 'Kelola profil bandwidth, sesi, dan batas laju untuk pengguna.',

    // Hotspot User Profiles Table Headers
    'hotspot.user.profiles.th.name'=> 'Nama',
    'hotspot.user.profiles.th.shared-users'=> 'Pengguna bersama',
    'hotspot.user.profiles.th.rate-limit'=> 'Batas laju',
    'hotspot.user.profiles.th.idle-timeout'=> 'Batas waktu idle',
    'hotspot.user.profiles.th.keepalive-timeout'=> 'Batas waktu keepalive',
    'hotspot.user.profiles.th.queue-type'=> 'Tipe antrian',

    // Hotspot User Profiles Modal Form
    'hotspot.user.profiles.modal.title.add-profile'=> 'Tambah Profil',

    // Hotspot User Profile Form Fields - General Tab
    'hotspot.user.profiles.form.name'=> 'Nama Profil',
    'hotspot.user.profiles.form.pool'=> 'Pool Alamat',
    'hotspot.user.profiles.form.rate-limit-rx'=> 'Batas Kecepatan (RX)',
    'hotspot.user.profiles.form.rate-limit-tx'=> 'Batas Kecepatan (TX)',
    'hotspot.user.profiles.form.shared-users'=> 'Pengguna Bersama',
    'hotspot.user.profiles.form.expiry-mode'=> 'Mode Kadaluarsa',
    'hotspot.user.profiles.form.expiry-duration'=> 'Durasi Kadaluarsa',
    'hotspot.user.profiles.form.lock-device'=> 'Kunci ke Perangkat',
    'hotspot.user.profiles.form.lock-server'=> 'Kunci ke Server',
    'hotspot.user.profiles.form.comment'=> 'Komentar',

    // Expiry Mode Options
    'hotspot.user.profiles.form.expiry-mode_none'=> 'Tidak Ada',
    'hotspot.user.profiles.form.expiry-mode_remove'=> 'Hapus',
    'hotspot.user.profiles.form.expiry-mode_notice'=> 'Pemberitahuan',
    'hotspot.user.profiles.form.expiry-mode_remove_record'=> 'Hapus dan Catat',
    'hotspot.user.profiles.form.expiry-mode_remove_notice'=> 'Hapus dan Beri Tahu',
    'hotspot.user.profiles.form.expiry-mode_help'=> 'Pilih bagaimana menangani kedaluwarsa pengguna untuk profil ini.<br/><br/>Opsi:<br/>Tidak ada - Tidak ada kedaluwarsa.<br/>Hapus - Secara otomatis menghapus pengguna saat kedaluwarsa.<br/>Pemberitahuan - Memberi tahu pengguna saat kedaluwarsa tetapi tidak menghapusnya.<br/>Hapus dan Catat - Hapus pengguna dan catat peristiwa tersebut.<br/>Beri Tahu dan Hapus - Beri tahu pengguna lalu hapus saat kedaluwarsa.',

    // Hotspot User Profile Form Fields - Queue Tab
    'hotspot.user.profiles.form.parent-queue'=> 'Antrian Induk',
    'hotspot.user.profiles.form.queue-type'=> 'Tipe Antrian',

    // Hotspot User Profiles Form Fields - Scripts Tab
    'hotspot.user.profiles.form.on-login-script'=> 'Skrip Saat Login',
    'hotspot.user.profiles.form.on-login-script_placeholder'=> 'Skrip opsional untuk dijalankan saat login',
    'hotspot.user.profiles.form.on-logout-script'=> 'Skrip Saat Logout',
    'hotspot.user.profiles.form.on-logout-script_placeholder'=> 'Skrip opsional untuk dijalankan saat logout',

    // Hotspot User Profile Modal - Edit Profile
    'hotspot.user.profile.edit'=> 'Sunting Profil',
    'hotspot.user.profile.select.profile'=> 'Pilih Profil',
    'hotspot.user.profile.select.profile.desc'=> 'Pilih profil untuk disunting. Setelah dipilih, editor penuh akan terbuka.',
    'hotspot.user.profile.button.cancel'=> 'Batal',
    'hotspot.user.profile.button.save'=> 'Simpan',

    // Hotspot User Profile Modal - Remove Profile
    'hotspot.user.profiles.remove'=> 'Hapus Profil',
    'hotspot.user.profiles.remove-select'=> 'Pilih Profil untuk Dihapus',
    'hotspot.user.profiles.remove-warning'=> 'Tindakan ini tidak dapat dibatalkan. Pastikan Anda ingin menghapus profil yang dipilih.',
    'hotspot.user.profiles.remove.button-cancel'=> 'Batal',
    'hotspot.user.profiles.remove.button-remove'=> 'Hapus',

    // Hotspot Export Users Modal
    'hotspot.export.user.desc'=> 'Pilih bidang yang akan disertakan dalam ekspor. Hanya pengguna yang dipilih akan diekspor.',
    'hotspot.export.user.name'=> 'Nama',
    'hotspot.export.user.price'=> 'Harga',
    'hotspot.export.user.password'=> 'Kata Sandi',
    'hotspot.export.user.profile'=> 'Profil',
    'hotspot.export.user.comment'=> 'Komentar',
    'hotspot.export.user.inc-header'=> 'Sertakan Header',
    'hotspot.export.user.column-order'=> 'Urutan Kolom',
    'hotspot.export.user.column-up'=> 'Atas',
    'hotspot.export.user.column-down'=> 'Bawah',
    'hotspot.export.user.column-desc'=> 'Pilih bidang dan gunakan Atas/Bawah untuk mengubah urutan kolom.',
    'hotspot.export.user.button-cancel'=> 'Batal',
    'hotspot.export.user.button-download'=> 'Unduh CSV',
    'hotspot.export.user.button-move-up'=> 'Pindah ke atas',
    'hotspot.export.user.button-move-down'=> 'Pindah ke bawah',
    'hotspot.export.user.column-order-desc'=> 'Pilih sebuah kolom dan gunakan tombol Pindah ke atas/Pindah ke bawah untuk mengubah urutan kolom.',

    // Hotspot Print Preview Modal
    'hotspot.print.preview.title'=> 'Pratinjau Cetak',
    'hotspot.print.preview.desc'=> 'Pratinjau pengguna terpilih sebelum mencetak.',
    'hotspot.print.preview.button-cancel'=> 'Batal',
    'hotspot.print.preview.button-close'=> 'Tutup',
    'hotspot.print.preview.button-print'=> 'Simpan & Cetak',
    

    // active.php
    // Hotspot Active Sessions Page

    // hosts.php
    // Hotspot Hosts Page

    // settings.php
    // Hotspot Settings Page
    'settings.title'=> 'Pengaturan',
    'settings.desc'=> 'Konfigurasikan identitas perangkat, layanan sistem, dan tindakan pemeliharaan.',
    'settings.identity'=> 'Identitas',
    'settings.ntp'=> 'NTP',
    'settings.files'=> 'Berkas',
    'settings.users'=> 'Pengguna',
    'settings.scheduler'=> 'Penjadwal',
    'settings.scripts'=> 'Skrip',
    'settings.reset'=> 'Reset',
    'settings.reboot'=> 'Reboot',
    'settings.shutdown'=> 'Matikan',

    // Settings Page Buttons
    //'settings.open.identity'=> 'Buka Identitas',
    //'settings.open.ntp'=> 'Buka NTP',
    'settings.open.files'=> 'Buka Berkas',
    'settings.open.users'=> 'Kelola Pengguna',
    'settings.open.scheduler'=> 'Buka Penjadwal',
    'settings.open.scripts'=> 'Buka Skrip',
    //'settings.open.reset'=> 'Reset',
    //'settings.open.reboot'=> 'Reboot',
    //'settings.open.shutdown'=> 'Matikan',

    // SETTINGS GENERAL BUTTONS
    'settings.buttons.upload'=> 'Unggah',
    'settings.buttons.delete'=> 'Hapus',
    'settings.buttons.refresh'=> 'Segarkan',
    'settings.buttons.save'=> 'Simpan',
    'settings.buttons.cancel'=> 'Batal',
    'settings.buttons.close'=> 'Tutup',
    'settings.buttons.edit'=> 'Sunting',
    'settings.buttons.add'=> 'Tambah',
    'settings.buttons.remove'=> 'Hapus',
    'settings.buttons.prev'=> 'Sebelumnya',
    'settings.buttons.next'=> 'Berikutnya',
    'settings.sort.by'=> 'Urutkan berdasarkan',
    'settings.sort' => 'Urutkan',

    // Settings Page - Back Button
    'settings.back-to-settings'=> 'Kembali ke Pengaturan',

    // Settings Page - Actions
    'settings.actions'=> 'Aksi',

    // Settings Page - Loading
    'settings.loading'=> 'Memuat Pengaturan...',

    // Settings Page Descriptions
    'settings.identity.desc'=> 'Lihat dan sunting identitas perangkat serta informasi sistem dasar.',
    'settings.ntp.desc'=> 'Konfigurasikan pengaturan Network Time Protocol (NTP) untuk pencatatan waktu yang akurat.',
    'settings.files.desc'=> 'Kelola file yang diunggah dan skrip yang tersimpan di perangkat.',
    'settings.users.desc'=> 'Kelola pengguna sistem dan hak akses mereka.',
    'settings.scheduler.desc'=> 'Buat tugas terjadwal untuk pemeliharaan dan otomatisasi.',
    'settings.scripts.desc'=> 'Kelola dan jalankan skrip kustom pada perangkat.',
    'settings.reset.desc'=> 'Reset konfigurasi ke default. Gunakan dengan hati-hati.',
    'settings.reboot.desc'=> 'Nyalakan ulang perangkat secara jarak jauh. Pastikan semua perubahan disimpan sebelum reboot.',
    'settings.shutdown.desc'=> 'Matikan perangkat secara jarak jauh dan aman. Gunakan dengan hati-hati.',

    // Settings Table Headers
    'settings.table.th.name'=> 'Nama',
    'settings.table.th.group'=> 'Grup',
    'settings.table.th.last-login'=> 'Login Terakhir',
    'settings.table.th.comment'=> 'Komentar',
    'settings.table.th.role'=> 'Peran',
    'settings.table.th.select'=> 'Pilih Semua',
    'settings.table.th.username'=> 'Nama Pengguna',
    'settings.table.th.password'=> 'Kata Sandi',
    'settings.table.th.actions'=> 'Aksi',
    'settings.table.th.next-run'=> 'Jalankan Berikutnya',
    'settings.table.th.interval'=> 'Interval',
    'settings.table.th.enabled'=> 'Diaktifkan',
    'settings.table.th.size'=> 'Ukuran',
    'settings.table.th.owner'=> 'Pemilik',
    'settings.table.th.date'=> 'Tanggal',

   
    // Settings Page - Identity
    'settings.identity.placeholder'=> 'Masukkan identitas sistem',
    'settings.identity.caption'=> 'Ini adalah nama yang ditampilkan di log dan identifikasi jaringan.',

    // Settings Page - Identity Buttons
    'settings.identity.save'=> 'Simpan Identitas',
    'settings.identity.refresh'=> 'Segarkan',

    // Settings Page - NTP Modal
    'settings.ntp.enabled'=> 'Diaktifkan',
    'settings.ntp.enabled-yes'=> 'Diaktifkan',
    'settings.ntp.enabled-no'=> 'Dinonaktifkan',
    'settings.ntp.mode'=> 'Mode',
    'settings.ntp.mode-broadcast'=> 'Broadcast',
    'settings.ntp.mode-manycast'=> 'Manycast',
    'settings.ntp.mode-multicast'=> 'Multicast',
    'settings.ntp.mode-unicast'=> 'Unicast',
    'settings.ntp.server'=> 'Server NTP',
    'settings.ntp.server-add'=> 'Tambah Server',
    'settings.ntp.server-refresh'=> 'Segarkan',
    'settings.ntp.server-save'=> 'Simpan',

    // Settings Page - NTP Status
    'settings.ntp.status'=> 'Status',
    'settings.ntp.freq.drift'=> 'Pergeseran frekuensi',
    'settings.ntp.synced.server'=> 'Server tersinkron',
    'settings.ntp.synced.stratum'=> 'Stratum tersinkron',
    'settings.ntp.system.offset'=> 'Offset sistem',

    // Settings Page - Files
    'settings.files.title'=> 'Manajer Berkas',
    'settings.files.desc'=> 'Unggah, unduh, at kelola file yang tersimpan di perangkat.',


    // Settings Page - Users
    'settings.users.title'=> 'Manajer Pengguna',
    'settings.users.desc'=> 'Buat, edit, dan kelola pengguna sistem serta hak aksesnya.',

    // Settings Page - Scheduler
    'settings.scheduler.title'=> 'Penjadwal',
    'settings.scheduler.desc'=> 'Buat dan kelola tugas terjadwal untuk pemeliharaan dan otomasi.',

    // Settings Page - Scripts
    'settings.scripts.title'=> 'Skrip',
    'settings.scripts.desc'=> 'Buat, edit, dan jalankan skrip khusus pada perangkat.',

    // Settings Page - Reset
    // Reset Modal
    'settings.reset.type'=> 'Jenis reset',
    'settings.reset.config'=> 'Reset konfigurasi (simpan berkas pengguna)',
    'settings.reset.all'=> 'Reset pabrik (hapus semua, muat ulang default)',
    'settings.reset.delay'=> 'Tunda (detik)',
    'settings.reset.delay.desc'=> 'Setel 0 untuk menjalankan segera saat menggunakan tombol Jadwalkan, atau klik "Reset Sekarang" untuk menjalankan segera.',

    //Reset Buttons
    'settings.reset.button.schedule'=> 'Jadwalkan reset',
    'settings.reset.button.reset-now'=> 'Reset sekarang',

    // Settings Page - Reboot
    // Reboot Modal
    'settings.reboot.delay'=> 'Tunda (detik)',
    'settings.reboot.delay.desc'=> 'Setel 0 untuk reboot segera saat menggunakan tombol Jadwalkan, atau klik "Reboot Sekarang" untuk memaksa reboot segera.',

    // Reboot Buttons
    'settings.reboot.button.schedule'=> 'Jadwalkan reboot',
    'settings.reboot.button.reboot-now'=> 'Reboot sekarang',

    // Settings Page - Shutdown
    // Shutdown Modal
    'settings.shutdown.delay'=> 'Tunda (detik)',
    'settings.shutdown.delay.desc'=> 'Setel 0 untuk shutdown segera saat menggunakan tombol Jadwalkan, atau klik "Shutdown Sekarang" untuk memaksa shutdown segera.',

    // Shutdown Buttons
    'settings.shutdown.button.schedule'=> 'Jadwalkan shutdown',
    'settings.shutdown.button.shutdown-now'=> 'Shutdown sekarang',


    // queues.php
    // Queues Page
    'queues.title'=> 'Manajer Antrian',
    'queues.desc'=> 'Kelola antrian sederhana, pohon antrian, dan tipe antrian.',

    'queues.simple'=> 'Sederhana',
    'queues.tree'=> 'Pohon',
    'queues.types'=> 'Tipe',
    'queues.simple-queue'=> 'Antrian sederhana',
    'queues.queue-tree'=> 'Pohon antrian',
    'queues.queue-types'=> 'Tipe antrian',

    // Queues Page Descriptions
    'queues.simple.desc'=> 'Buat dan kelola antrian sederhana per-host/per-target.',
    'queues.tree.desc'=> 'Kelola pohon antrian hierarkis untuk pembentukan lalu lintas tingkat lanjut.',
    'queues.types.desc'=> 'Tentukan dan kelola tipe antrian serta pengklasifikasi paket.',

    // Queues Page Buttons
    'queues.open.simple'=> 'Buka Antrian Sederhana',
    'queues.open.tree'=> 'Buka Pohon Antrian',
    'queues.open.types'=> 'Buka Tipe Antrian',

    // Queues Page - Back Button
    'queues.back-to-queues'=> 'Kembali ke Manajer Antrian',

    // Queues General Buttons
    'queues.button.new'=> 'Baru',
    'queues.button.edit'=> 'Ubah',
    'queues.button.enable'=> 'Aktifkan',
    'queues.button.disable'=> 'Nonaktifkan',
    'queues.button.remove'=> 'Hapus',
    'queues.button.refresh'=> 'Segarkan',
    'queues.button.pause-polling'=> 'Jeda polling',
    'queues.sort.by'=> 'Urutkan berdasarkan',
    'queues.sort'=> 'Urutkan',
    'queues.select.all'=> 'Pilih Semua',
    'queues.button.prev'=> 'Sebelumnya',
    'queues.button.next'=> 'Berikutnya',
    'queues.button.save'=> 'Simpan',
    'queues.button.cancel'=> 'Batal',
    'queues.button.create'=> 'Buat',


    // Queues Loading Status
    'queues.status.loading'=> 'Memuat antrian...',

    // simple.php
    // Simple Queues Page


    // Simple Queues Action Buttons
    'queues.simple.actions'=> 'Aksi',
    'queues.simple.actions.desc'=> 'Lakukan aksi pada antrian yang dipilih.',

    // Queues Table Headers
    'queues.table.th.name'=> 'Nama',
    'queues.table.th.number'=> 'Nomor',
    'queues.table.th.target'=> 'Target',
    'queues.table.th.upload-limit'=> 'Batas Unggah',
    'queues.table.th.download-limit'=> 'Batas Unduh',
    'queues.table.th.download-avg-rate'=> 'Rerata Kecepatan Unduh',
    'queues.table.th.max-limit'=> 'Batas Maks',
    'queues.table.th.queue-type'=> 'Tipe Antrian',
    'queues.table.th.limit-at'=> 'Batas Pada',
    'queues.table.th.bytes'=> 'Byte',
    'queues.table.th.avg.rate'=> 'Rerata Kecepatan',
    'queues.table.th.kind'=> 'Jenis',

    // Queues Modal Form - Tabs
    'queues.tab.main'=> 'Utama',
    'queues.tab.advanced'=> 'Lanjutan',
    'queues.tab.queueing'=> 'Antrian',

    // Queues Modal Form Tab
    'queues.modal.form.new.simple'=> 'Antrian Sederhana Baru',
    'queue.modal.form.edit.simple'=> 'Sunting Antrian Sederhana',
    'queues.modal.form.enabled'=> 'Diaktifkan',
    'queues.modal.form.name'=> 'Nama',
    'queues.modal.form.target'=> 'Target',
    'queues.modal.form.target-select-iface'=> 'Pilih Antarmuka',
    'queues.modal.form.dst'=> 'Tujuan',
    'queues.modal.form.dst-select-iface'=> 'Pilih Antarmuka',
    'queues.modal.form.target.dst-caption'=> 'Pilih antarmuka atau masukkan target khusus di bawah.',
    'queues.modal.form.placeholder'=> 'atau masukkan IP (mis. 192.168.10.0/24 atau 10.0.0.5)',
    'queues.modal.form.target.upload'=> 'Target Unggahan',
    'queues.modal.form.max-limit'=> 'Batas Maks',
    'queues.modal.form.target.download'=> 'Target Unduhan',
    'queues.modal.form.pkt-marks'=> 'Tanda Paket',
    'queues.modal.form.limit-at'=> 'Batas Pada',
    'queues.modal.form.burst-limit'=> 'Batas Burst',
    'queues.modal.form.burst-threshold'=> 'Ambang Burst',
    'queues.modal.form.burst-time'=> 'Waktu Burst',
    'queues.modal.form.priority'=> 'Prioritas',
    'queues.modal.form.bucket-size'=> 'Ukuran Bucket',
    'queues.modal.form.parent-queue'=> 'Antrian Induk',
    'queues.modal.form.queue-type'=> 'Tipe Antrian',
    'queues.modal.form.comment'=> 'Komentar',
    'queues.modal.form.comment-placeholder'=> 'Komentar opsional',
    'queues.modal.form.clear-parent'=> 'Hapus induk (hapus hubungan induk)',

    // tree.php
    // Queue Tree Page

    // Queue Tree Action Buttons
    'queues.tree.actions'=> 'Aksi',
    'queues.tree.action.desc'=> 'Lakukan aksi pada entri queue tree yang dipilih.',

    // Queue Tree Modal Form - Tabs
    'queues.tree.create.title'=> 'Buat entri pohon antrian',
    'queue.tree.tab.general'=> 'Umum',
    'queue.tree.tab.rate-limit'=> 'Batas laju',


    // types.php
    // Queue Types Page
  
    // Queue Types Action 
    'queues.types.actions'=> 'Aksi',
    'queues.types.action.desc'=> 'Lakukan aksi pada tipe antrian yang dipilih.',


    // ppp.php
    // PPP Page
    'ppp.title'=> 'Manajer PPPoE',
    'ppp.desc'=> 'Kelola server PPPoE, rahasia, dan profil.',

    
    'ppp.pppoe.servers'=> 'Server PPPoE',
    'ppp.servers'=> 'Server',
    'ppp.secrets'=> 'Rahasia',
    'ppp.profiles'=> 'Profil',
    'ppp.active'=> 'Sesi aktif',
    
    // PPP Page Descriptions
    'ppp.servers.desc'=> 'Lihat dan kelola instance server PPPoE serta binding.',
    'ppp.secrets.desc'=> 'Kelola rahasia PPPoE (kredensial pengguna).',
    'ppp.profiles.desc'=> 'Buat dan kelola profil PPPoE.',
    'ppp.active.desc'=> 'Lihat dan putuskan sesi PPPoE aktif.',

    'ppp.open.servers'=> 'Buka Server PPPoE',
    'ppp.open.secrets'=> 'Buka Secrets',
    'ppp.open.profiles'=> 'Buka Profil',
    'ppp.open.active'=> 'Buka Sesi Aktif',

    // PPP Page - Back Button
    'ppp.back-to-ppp'=> 'Kembali ke Manajer PPPoE',

    // PPP Actions
    'ppp.actions'=> 'Aksi',

    // PPP General Buttons
    'ppp.buttons.new'=> 'Baru',
    'ppp.buttons.edit'=> 'Sunting',
    'ppp.buttons.enable'=> 'Aktifkan',
    'ppp.buttons.disable'=> 'Nonaktifkan',
    'ppp.buttons.remove'=> 'Hapus',
    'ppp.buttons.refresh'=> 'Segarkan',
    'ppp.sort.by'=> 'Urutkan berdasarkan',
    'ppp.sort'=> 'Urutkan',
    'ppp.select.all'=> '',
    'ppp.buttons.prev'=> 'Sebelumnya',
    'ppp.buttons.next'=> 'Berikutnya',
    'ppp.buttons.clear'=> 'Bersihkan',
    'ppp.buttons.cancel'=> 'Batal',
    'ppp.buttons.create'=> 'Buat',
    'ppp.buttons.save'=> 'Simpan',
    'ppp.buttons.proceed'=> 'Lanjut',

    // PPP Loading Status
    'ppp.status.loading'=> 'Memuat Data PPPoE...',

    // PPP Secrets Table Headers
    'ppp.table.th.service-name'=> 'Nama layanan',
    'ppp.table.th.iface'=> 'Antarmuka',
    'ppp.table.th.keepalive'=> 'Batas waktu keepalive',
    'ppp.table.th.profile'=> 'Profil',
    'ppp.table.th.one-session-host'=> 'Satu sesi per host',
    'ppp.table.th.authentication'=> 'Otentikasi',
    'ppp.table.th.name'=> 'Nama',
    'ppp.table.th.password'=> 'Kata sandi',
    'ppp.table.th.service'=> 'Layanan',
    'ppp.table.th.address'=> 'Alamat',
    'ppp.table.th.caller-id'=> 'ID pemanggil',
    'ppp.table.th.local-address'=> 'Alamat lokal',
    'ppp.table.th.remote-address'=> '',
    'ppp.table.th.last-logged-out'=> 'Terakhir keluar',
    'ppp.table.th.last-disc-reason'=> 'Alasan putus',
    'ppp.table.th.last-called-id'=> 'ID panggilan terakhir',
    'ppp.table.th.rate-limit'=> 'Batas laju',
    'ppp.table.th.only-one'=> 'Hanya satu',
    'ppp.table.th.uptime'=> 'Waktu aktif',
    'ppp.table.th.bytes-in'=> 'Byte masuk',
    'ppp.table.th.bytes-out'=> 'Byte keluar',

    // PPP Add Server Modal Form
    'ppp.modal.form.title'=> 'Tambah Server PPPoE',
    'ppp.modal.form.enabled'=> 'Diaktifkan',
    'ppp.modal.form.one-session-per-host'=> 'Satu sesi per host',
    'ppp.modal.form.accept-empty-services'=> 'Terima layanan kosong',
    'ppp.modal.form.accept-untagged'=> 'Terima tanpa tag',
    'ppp.modal.form.service-name'=> 'Nama layanan',
    'ppp.modal.form.service-name_placeholder'=> 'Nama PPPoE',
    'ppp.modal.form.interface'=> 'Antarmuka',
    'ppp.modal.form.placeholder'=> 'Default',
    'ppp.modal.form.max-mtu'=> 'Max MTU',
    'ppp.modal.form.max-mru'=> 'Max MRU',
    'ppp.modal.form.mrru'=> 'MRRU',
    'ppp.modal.form.keepalive-timeout'=> 'Batas waktu keepalive',
    'ppp.modal.form.profile'=> 'Profil',
    'ppp.modal.form.max-sessions'=> 'Maksimum sesi',
    'ppp.modal.form.auth-methods'=> 'Metode otentikasi',
    'ppp.modal.form.auth-mschapv2'=> 'msChapv2',
    'ppp.modal.form.auth-mschapv1'=> 'msChapv1',
    'ppp.modal.form.auth-chap'=> 'Chap',
    'ppp.modal.form.auth-pap'=> 'PaP',

    // PPP Add/Edit Secret Modal Form
    'ppp.modal.form.secret.name'=> 'Nama',
    'ppp.modal.form.secret.password'=> 'Kata sandi',
    'ppp.modal.form.secret.service-type'=> 'Layanan',
    'ppp.modal.form.secret.local-address'=> 'Alamat lokal',
    'ppp.modal.form.secret.remote-address'=> 'Alamat jarak jauh',

    // secrets.php
    // Modal Titles
    'ppp.modal.form.add.ppp-secret'=> 'Tambah Secret PPPoE',
    'ppp.modal.form.edit.ppp-secret'=> 'Edit Rahasia PPPoE',

    // PPP Secrets Page Modal Tabs
    'ppp.secrets.tab.general'=> 'Umum',  
    'ppp.secrets.tab.details'=> 'Detail',

    // profiles.php
    // PPP Profiles Page

    // PPP Profiles Modal Titles
    'ppp.modal.form.add.ppp-profile'=> 'Tambah Profil PPPoE',
    'ppp.modal.form.edit.ppp-profile'=> 'Sunting Profil PPPoE',


    // PPP Profiles Modal Tabs
    'ppp.profiles.tab.general'=> 'Umum',
    'ppp.profiles.tab.protocols'=> 'Protokol',
    'ppp.profiles.tab.limits'=> 'Batas',
    'ppp.profiles.tab.queue'=> 'Antrian',
    'ppp.profiles.tab.scripts'=> 'Skrip',

    // PPP Profiles Modal Form Fields
    'ppp.modal.form.profile.name'=> 'Nama',
    'ppp.modal.form.profile.local-address'=> 'Alamat Lokal',
    'ppp.modal.form.profile.remote-address'=> 'Alamat Jauh',
    'ppp.modal.form.profile.use-ipv6'=> 'Gunakan IPv6',
    'ppp.modal.form.profile.use-mpls'=> 'Gunakan MPLS',
    'ppp.modal.form.profile.use-comp'=> 'Gunakan Kompresi',
    'ppp.modal.form.profile.use-enc'=> 'Gunakan Enkripsi',
    'ppp.modal.form.profile.sess-timeout'=> 'Batas Waktu Sesi',
    'ppp.modal.form.profile.idle-timeout'=> 'Batas Waktu Idle',
    'ppp.modal.form.profile.rate-limit'=> 'Batas Kecepatan',
    'ppp.modal.form.profile.only-one'=> 'Hanya Satu',
    'ppp.modal.form.profile.parent-queue'=> 'Antrian Induk',
    'ppp.modal.form.profile.queue-type-rx'=> 'Tipe Antrian (Unduhan)',
    'ppp.modal.form.profile.queue-type-tx'=> 'Tipe Antrian (Unggahan)',
    'ppp.modal.form.profile.script-onup'=> 'Saat Naik',
    'ppp.modal.form.profile.script-ondown'=> 'Saat Turun',
    'ppp.modal.form.profile.script-placeholder'=> 'Skrip akan dijalankan saat peristiwa dipicu',
    'ppp.modal.form.migration.confirm'=> 'Konfirmasi Migrasi Profil',
    'ppp.modal.form.migration.caption'=> 'Mengosongkan Antrian Induk atau Tipe Antrian untuk profil ini mungkin memerlukan pembuatan ulang profil dan penugasan ulang secret PPP terkait. Operasi ini berpotensi mengganggu. Lanjutkan?',

    // ip.php
    // IP Page
    'ip.title'=> 'Manajer IP',
    'ip.desc'=> 'Kelola ARP, Alamat, DHCP, DNS, Pool dan layanan IP terkait.',

    'ip.arp'=> 'ARP',
    'ip.addresses'=> 'Alamat',
    'ip.cloud'=> 'Cloud',
    'ip.dhcp.client'=> 'Klien DHCP',
    'ip.dhcp.server'=> 'Server DHCP',
    'ip.dns'=> 'DNS',
    'ip.pool'=> 'Pool',
    'ip.services'=> 'Layanan',
    'ip.upnp'=> 'UPnP',
    'ip.settings'=> 'Pengaturan',
    
    'ip.arp.desc'=> 'Lihat dan kelola entri tabel ARP.',
    'ip.addresses.desc'=> 'Kelola alamat IP yang ditugaskan ke antarmuka.',
    'ip.cloud.desc'=> 'Pengaturan Cloud/DDNS. Nilai dibaca dari router.',
    'ip.dhcp.client.desc'=> 'Lihat dan kelola klien DHCP.',
    'ip.dhcp.server.desc'=> 'Konfigurasikan server DHCP dan lease.',
    'ip.dns.desc'=> 'Kelola pengaturan DNS dan entri statis.',
    'ip.pool.desc'=> 'Kelola pool alamat untuk DHCP dan layanan lain.',
    'ip.services.desc'=> 'Aktifkan atau nonaktifkan layanan terkait IP.',
    'ip.upnp.desc'=> 'Pengaturan Universal Plug and Play. Nilai dibaca dari router.',
    'ip.settings.desc'=> 'Pengaturan subsistem IP umum.',

    'ip.open.arp'=> 'Buka ARP',
    'ip.open.addresses'=> 'Buka Alamat',
    'ip.open.cloud'=> 'Buka Cloud',
    'ip.open.dhcp.client'=> 'Buka Klien DHCP',
    'ip.open.dhcp.server'=> 'Buka Server DHCP',
    'ip.open.dns'=> 'Buka DNS',
    'ip.open.pool'=> 'Buka Pool',
    'ip.open.services'=> 'Buka Layanan',
    'ip.open.upnp'=> 'Buka UPnP',
    'ip.open.settings'=> 'Buka Pengaturan',

    // IP Page - Back Button
    'ip.back-to-ip'=> 'Kembali ke Manajer IP',

    // IP JS strings
    // Addresses
    'ip.addresses.no_addresses' => 'Tidak ada alamat',
    'ip.addresses.loading' => 'Memuat...',
    'ip.addresses.failed_to_contact_api' => 'Gagal menghubungi API',
    'ip.addresses.please_select_one_or_more' => 'Pilih satu atau lebih entri',
    'ip.addresses.select_one_to_edit' => 'Pilih tepat satu alamat untuk disunting',
    'ip.addresses.action_completed' => 'Aksi %s selesai',
    'ip.addresses.action_failed' => 'Aksi gagal: %s',
    'ip.addresses.request_failed' => 'Permintaan gagal: %s',
    'ip.addresses.address_added' => 'Alamat ditambahkan',
    'ip.addresses.address_updated' => 'Alamat diperbarui',
    'ip.addresses.add_failed' => 'Gagal menambahkan: %s',
    'ip.addresses.update_failed' => 'Gagal memperbarui: %s',
    'ip.addresses.page_info' => 'Halaman %s / %s (%s)',

    // ARP
    'ip.arp.no_arp_entries' => 'Tidak ada entri ARP',
    'ip.arp.loading' => 'Memuat...',
    'ip.arp.failed_to_contact_api' => 'Gagal menghubungi API',
    'ip.arp.please_select_one_or_more' => 'Pilih satu atau lebih entri',
    'ip.arp.enable_confirm' => 'Aktifkan entri ARP yang dipilih?',
    'ip.arp.disable_confirm' => 'Nonaktifkan entri ARP yang dipilih?',
    'ip.arp.remove_confirm' => 'Hapus entri ARP yang dipilih?',
    'ip.arp.page_info' => 'Halaman %s / %s (%s)',

    // Cloud
    'ip.cloud.failed_to_load' => 'Gagal memuat pengaturan cloud: %s',
    'ip.cloud.reverted' => 'Perubahan dikembalikan',
    'ip.cloud.applied' => 'Pengaturan Cloud diterapkan',
    'ip.cloud.apply_failed' => 'Gagal menerapkan: %s',

    // DHCP Client
    'ip.dhcp.client.no_clients' => 'Tidak ada klien DHCP',
    'ip.dhcp.client.failed_to_load' => 'Gagal memuat klien DHCP: %s',
    'ip.dhcp.client.please_select_interface' => 'Pilih sebuah antarmuka',
    'ip.dhcp.client.created' => 'Klien DHCP dibuat',
    'ip.dhcp.client.create_failed' => 'Gagal membuat: %s',
    'ip.dhcp.client.no_entries_selected' => 'Tidak ada entri yang dipilih',
    'ip.dhcp.client.enable_completed' => 'Aktivasi selesai',
    'ip.dhcp.client.enable_failed' => 'Gagal mengaktifkan: %s',
    'ip.dhcp.client.disable_completed' => 'Penonaktifan selesai',
    'ip.dhcp.client.disable_failed' => 'Gagal menonaktifkan: %s',
    'ip.dhcp.client.remove_confirm' => 'Hapus klien DHCP yang dipilih?',
    'ip.dhcp.client.option_name_code_required' => 'Nama dan Kode diperlukan',
    'ip.dhcp.client.option_created' => 'Opsi dibuat',
    'ip.dhcp.client.option_create_failed' => 'Gagal membuat: %s',
    'ip.dhcp.client.no_options' => 'Tidak ada opsi',

    // DHCP Networks
    'ip.dhcp.networks.no_networks' => 'Tidak ada jaringan DHCP',
    'ip.dhcp.networks.loading' => 'Memuat...',
    'ip.dhcp.networks.select_one_to_edit' => 'Pilih satu jaringan untuk disunting',
    'ip.dhcp.networks.create_not_implemented' => 'Buat jaringan baru: belum diimplementasikan',
    'ip.dhcp.networks.please_select_remove' => 'Pilih satu atau lebih jaringan untuk dihapus',
    'ip.dhcp.networks.remove_confirm' => 'Hapus jaringan yang dipilih?',
    'ip.dhcp.networks.removed' => 'Dihapus',
    'ip.dhcp.networks.remove_failed' => 'Gagal menghapus: %s',
    'ip.dhcp.networks.page_info' => 'Halaman %s / %s (%s)',

    // DNS
    'ip.dns.add_server_placeholder' => 'Tambah server DNS (IP)',
    'ip.dns.remove' => 'Hapus',
    'ip.dns.loading' => 'Memuat...',
    'ip.dns.failed_to_contact_api' => 'Gagal menghubungi API',
    'ip.dns.error_loading' => 'Kesalahan memuat pengaturan DNS',
    'ip.dns.dns_saved' => 'Pengaturan DNS tersimpan',
    'ip.dns.failed_to_save' => 'Gagal menyimpan: %s',
    'ip.dns.save_confirm' => 'Simpan pengaturan DNS?',
    'ip.dns.no_static_entries' => 'Tidak ada entri statis',
    'ip.dns.static_added' => 'DNS statis ditambahkan',
    'ip.dns.static_add_failed' => 'Gagal menambahkan statis',
    'ip.dns.performing_action' => 'Menjalankan %s...',
    'ip.dns.invalid_json' => 'Respon JSON tidak valid',
    'ip.dns.request_failed' => 'Permintaan gagal: %s',
    'ip.dns.flush_cache_confirm' => 'Bersihkan seluruh cache DNS?',
    'ip.dns.cache_flushed' => 'Cache dibersihkan',
    'ip.dns.failed_flush_cache' => 'Gagal membersihkan cache: %s',
    'ip.dns.no_cache_entries' => 'Tidak ada entri cache',

    // Pool
    'ip.pool.no_pools' => 'Tidak ada pool',
    'ip.pool.please_select_one_or_more' => 'Pilih satu atau lebih pool',
    'ip.pool.select_one_to_edit' => 'Pilih tepat satu pool untuk disunting',
    'ip.pool.name_and_address_required' => 'Nama dan Alamat diperlukan',
    'ip.pool.pool_created' => 'Pool dibuat',
    'ip.pool.create_failed' => 'Gagal membuat: %s',
    'ip.pool.pool_updated' => 'Pool diperbarui',
    'ip.pool.update_failed' => 'Gagal memperbarui: %s',
    'ip.pool.remove_confirm' => 'Hapus pool yang dipilih?',
    'ip.pool.action_completed' => 'Aksi %s selesai',
    'ip.pool.action_failed' => 'Aksi gagal: %s',
    'ip.pool.request_failed' => 'Permintaan gagal: %s',
    'ip.pool.none' => '(tidak ada)',
    'ip.pool.loading' => 'Memuat...',
    'ip.pool.failed_to_contact_api' => 'Gagal menghubungi API',
    'ip.pool.page_info' => 'Halaman %s / %s (%s)',

    // IP Settings
    'ip.settings.refreshing_settings' => 'Menyegarkan pengaturan...',
    'ip.settings.no_settings_found' => 'Tidak ada pengaturan IP ditemukan',
    'ip.settings.failed_to_load' => 'Gagal memuat pengaturan IP',
    'ip.settings.updated' => 'Pengaturan IP diperbarui',
    'ip.settings.update_failed' => 'Gagal memperbarui: %s',

    // IP Page - Loading Status
    'ip.loading'=> 'Memuat Data IP...',

    // IP Page Actions
    'ip.actions'=> 'Aksi',

    // IP Page General Buttons
    'ip.buttons.new'=> 'Tambah',
    'ip.buttons.edit'=> 'Sunting',
    'ip.buttons.refresh'=> 'Segarkan',
    'ip.buttons.create'=> 'Buat',
    'ip.buttons.save'=> 'Simpan',
    'ip.buttons.cancel'=> 'Batal',
    'ip.buttons.enable'=> 'Aktifkan',
    'ip.buttons.disable'=> 'Nonaktifkan',
    'ip.buttons.remove'=> 'Hapus',
    'ip.buttons.prev'=> 'Sebelumnya',
    'ip.buttons.next'=> 'Berikutnya',
    'ip.sort.by'=> 'Urutkan berdasarkan',
    'ip.sort'=> 'Urutkan',
    'ip.select.all'=> 'Pilih Semua',
    'ip.buttons.flush.cache'=> 'Bersihkan Cache',
    'ip.buttons.add.dns.server'=> 'Tambah Server DNS',


    // IP UPnP Page
    'ip.upnp.enabled'=> 'Diaktifkan',
    'ip.upnp.allow-disable-external-iface'=> 'Izinkan menonaktifkan antarmuka eksternal',
    'ip.upnp.show-dummy-rule'=> 'Tampilkan aturan dummy',

    // arp.php
    // IP ARP Page

    // addresses.php
    // IP Addresses Page

    // IP Table Headers
    'ip.table.th.address'=> 'Alamat',
    'ip.table.th.network'=> 'Jaringan',
    'ip.table.th.iface'=> 'Antarmuka',
    'ip.table.th.comment'=> 'Komentar',
    'ip.table.th.dhcp.client.name' => 'Nama',
    'ip.table.th.dhcp.client.code-value' => 'Nilai Kode',
    'ip.table.th.dhcp.client.client-value' => 'Nilai Klien',
    'ip.table.th.dns.name'=> 'Nama',
    'ip.table.th.dns.regexp'=> 'Regexp',
    'ip.table.th.dns.type'=> 'Tipe',
    'ip.table.th.dns.value'=> 'Nilai',
    'ip.table.th.dns.ttl'=> 'TTL',
    'ip.table.th.dns.data'=> 'Data',

    // IP Address Modal Titles
    'ip.modal.form.add.address'=> 'Tambah Alamat IP',
    'ip.modal.form.edit.address'=> 'Sunting Alamat IP',

    // IP Address Modal Form
    'ip.modal.form.ip.address-mask'=> 'Alamat IP / Mask',
    'ip.modal.form.ip.network'=> 'Jaringan',
    'ip.modal.form.iface'=> 'Antarmuka',
    'ip.modal.form.comment'=> 'Komentar',
    

    // cloud.php
    // IP Cloud Page

    // IP Cloud Modal Form
    'ip.cloud.enabled'=> 'DDNS Diaktifkan',
    'ip.cloud.ddns.update.interval'=> 'Interval Pembaruan DDNS',
    'ip.cloud.update.time'=> 'Waktu Pembaruan',
    'ip.cloud.public.ipv4'=> 'IPv4 Publik',
    'ip.cloud.public.ipv6'=> 'IPv6 Publik',
    'ip.cloud.dns.name' => 'Nama DNS',
    'ip.cloud.use-router-defaults'=> 'Gunakan Default Router',
    'ip.cloud.yes'=> 'Ya',
    'ip.cloud.no'=> 'Tidak',

    // dhcp-client.php
    // IP DHCP Client Page
    'ip.dhcp.client.options'=> 'Klien DHCP',
    'ip.dhcp.client.modal.form.interface'=> 'Antarmuka',
    'ip.dhcp.client.modal.form.enabled'=> 'Diaktifkan',
    'ip.dhcp.client.modal.form.use-peer-dns'=> 'Gunakan DNS Peer',
    'ip.dhcp.client.modal.form.use-peer-ntp'=> 'Gunakan NTP Peer',
    'ip.dhcp.client.modal.form.add-default-route'=> 'Tambah Route Default',
    'ip.dhcp.client.modal.form.default-route-distance'=> 'Jarak Route Default',
    'ip.dhcp.client.options2'=> 'Opsi Klien DHCP',
    'ip.dhcp.client.modal.form.name'=> 'Nama',
    'ip.dhcp.client.modal.form.code'=> 'Kode',
    'ip.dhcp.client.modal.form.value'=> 'Nilai',

   
    // dns.php
    // IP DNS Page

    // IP DNS - Modal Form
    'ip.dns.form.servers'=> 'Server DNS',
    'ip.dns.form.dynamic-servers'=> 'Server Dinamis',
    'ip.dns.form.use.doh.servers'=> 'Gunakan Server DoH',
    'ip.dns.form.doh.max.server.conn'=> 'Koneksi Maks Server DoH',
    'ip.dns.form.doh.max.concurrent.queries'=> 'Kuiri Konkuren Maks DoH',
    'ip.dns.form.doh.timeout'=> 'Timeout DoH (detik)',
    'ip.dns.form.allow-remote.requests'=> 'Izinkan Permintaan Jarak Jauh',

    'ip.dns.form.cache.size'=> 'Ukuran Cache (KB)',
    'ip.dns.form.cache.max-ttl'=> 'TTL Maks Cache (detik)',
    'ip.dns.form.cache.min-ttl'=> 'TTL Min Cache (detik)',
    'ip.dns.form.max.concurrent.queries'=> 'Kuiri Konkuren Maks',
    'ip.dns.form.max.concurrent.tcp'=> 'Koneksi TCP Konkuren Maks',
    'ip.dns.form.query.timeout'=> 'Timeout Kuiri (detik)',
    'ip.dns.form.cache.used'=> 'Cache Digunakan (hanya baca)',

    'ip.dns.form.add.static.entry'=> 'Tambah Entri DNS Statis',
    'ip.dns.form.add.static.name'=> 'Nama',
    'ip.dns.form.add.static.type'=> 'Tipe',
    'ip.dns.form.add.static.value'=> 'Nilai',
    'ip.dns.form.add.static.ttl'=> 'TTL',
    'ip.dns.form.add.static.regexp'=> 'Regexp',

    // IP DNS - Static DNS
    'ip.dns.static'=> 'DNS Statis',
    'ip.dns.static.desc'=> 'Kelola entri DNS statis yang menimpa resolusi DNS dinamis.',

    // IP DNS - Cache Settings
    'ip.dns.cache'=> 'Pengaturan Cache DNS',

    // pool.php
    // IP Pool Page

    // IP Pool Table Headers
    'ip.pool.table.th.name'=> 'Nama',
    'ip.pool.table.th.ranges'=> 'Rentang',
    'ip.pool.table.th.comment'=> 'Komentar',
    'ip.pool.table.th.total-addresses'=> 'Total Alamat',
    'ip.pool.table.th.used'=> 'Terpakai',
    'ip.pool.table.th.available'=> 'Tersedia',

    // IP Pool Modal Form
    'ip.pool.modal.form.create.title'=> 'Buat IP Pool',
    'ip.pool.modal.form.edit.title'=> 'Sunting IP Pool',
    'ip.pool.modal.form.name'=> 'Nama',
    'ip.pool.modal.form.ranges'=> 'Rentang Alamat',
    'ip.pool.modal.form.ranges-placeholder'=> 'mis. 192.168.1.100-192.168.1.200 atau 10.0.0.0/24',
    'ip.pool.modal.form.comment'=> 'Komentar',
    'ip.pool.modal.form.next-address'=> 'Alamat Berikutnya',
    'ip.pool.modal.form.total-addresses'=> 'Total Alamat',
    'ip.pool.modal.form.used'=> 'Terpakai',
    'ip.pool.modal.form.available'=> 'Tersedia',

    // services.php
    // IP Services Page

    // IP Services Table Headers
    'ip.services.table.th.name'=> 'Nama',
    'ip.services.table.th.port'=> 'Port',
    'ip.services.table.th.available-from'=> 'Tersedia Dari',
    'ip.services.table.th.max-sessions'=> 'Sesi Maks',
    'ip.services.table.th.protocol'=> 'Protokol',
    'ip.services.table.th.remote'=> 'Jarak Jauh',
    'ip.services.table.th.local'=> 'Lokal',

    // IP Services Modal Form
    'ip.services.modal.form.edit.title'=> 'Sunting Layanan IP',
    'ip.services.modal.form.name'=> 'Nama',
    'ip.services.modal.form.port'=> 'Port',
    'ip.services.modal.form.available-from'=> 'Tersedia Dari',
    'ip.services.modal.form.max-sessions'=> 'Sesi Maks',
    'ip.services.modal.form.protocol'=> 'Protokol',
    'ip.services.modal.form.remote.address'=> 'Alamat Jarak Jauh',
    'ip.services.modal.form.remote.port'=> 'Port Jarak Jauh',
    'ip.services.modal.form.local.address'=> 'Alamat Lokal',

    // settings.php
    // IP Settings Page

    // IP Settings Modal Form
    'ip.settings.modal.form.ip-forward'=> 'IP Forwarding Diaktifkan',
    'ip.settings.modal.form.ip-send-redirects'=> 'Kirim Redirects Diaktifkan',
    'ip.settings.modal.form.ip-accept-redirects'=> 'Terima Redirects Diaktifkan',
    'ip.settings.modal.form.ip-secure-redirects'=> 'Secure Redirects Diaktifkan',
    'ip.settings.modal.form.ip-accept-source-route'=> 'Terima Source Route Diaktifkan',
    'ip.settings.modal.form.ip-allow-fast-path'=> 'Izinkan Fast Path Diaktifkan',
    'ip.settings.modal.form.ip-tcp-syncookies'=> 'TCP Syncookies Diaktifkan',
    'ip.settings.modal.form.ip-tcp-timestamps'=> 'Timestamp TCP',
    'ip.settings.modal.form.ip-max-neighbors'=> 'Maks Tetangga',
    'ip.settings.modal.form.ip-icmp-rate-limit'=> 'Batas Laju ICMP',
    'ip.settings.modal.form.ip-arp-timeout'=> 'Timeout ARP (detik)',
    'ip.settings.modal.form.ip-arp-timeout-help'=> 'Masukkan format timeout RouterOS (mis. 10m, 1h, atau 00:10:00). Biarkan kosong untuk default.',

    // DHCP additions (from English)
    'downloads.instructions' => 'Klik tombol Unduh untuk mengunduh. File yang diberi tanda "Coming soon" belum tersedia.',

    'ip.dhcp.leases.title'=> 'Lease DHCP',
    'ip.dhcp.leases.desc'=> 'Lihat dan kelola lease DHCP aktif',

    'ip.dhcp.networks.title'=> 'Jaringan DHCP',
    'ip.dhcp.networks.desc'=> 'Buat dan kelola jaringan DHCP',

    'ip.dhcp.server.title'=> 'Pengelola DHCP',
    'ip.dhcp.server.back-to-dhcp'=> 'Kembali ke Pengelola DHCP',
    'ip.dhcp.server.dhcp'=> 'DHCP',
    'ip.dhcp.server.dhcp.desc'=> 'Konfigurasi pengaturan server DHCP.',
    'ip.dhcp.server.dhcp.leases'=> 'Sewa',
    'ip.dhcp.server.dhcp.leases.desc'=> 'Lihat sewa DHCP aktif.',
    'ip.dhcp.server.dhcp.networks'=> 'Jaringan',
    'ip.dhcp.server.dhcp.networks.desc'=> 'Kelola jaringan DHCP.',

    'ip.open.dhcp.leases' => 'Buka Sewa DHCP',
    'ip.open.dhcp.networks' => 'Buka Jaringan DHCP',

    'status.title' => 'Panel Status',
    'status.desc' => 'Pemantauan status sistem dan uptime secara langsung',

    // Error pages
    'errors.404.title' => 'Halaman Tidak Ditemukan',
    'errors.404.desc' => 'Halaman yang Anda minta tidak dapat ditemukan.',
    'errors.403.title' => 'Terlarang',
    'errors.403.desc' => 'Anda tidak memiliki izin untuk mengakses sumber daya ini.',
    'errors.500.title' => 'Kesalahan Server',
    'errors.500.desc' => 'Terjadi kesalahan internal pada server.',
    'errors.back_home' => 'Kembali ke Beranda',
    'errors.more_info' => 'Apa yang terjadi',
    'errors.contact_admin' => 'Jika Anda yakin ini adalah kesalahan, hubungi administrator situs.',

]; 
