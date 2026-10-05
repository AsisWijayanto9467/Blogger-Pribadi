@extends('layouts.main')

@section('style')
@endsection

@section('main')
     <!-- Top Technical Breadcrumb & Live Ticker Bar -->
    <div class="w-full bg-surface-container-high border-b-[3px] border-on-background">
        <div
            class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xs flex flex-wrap items-center justify-between gap-space-sm font-label-sm text-label-sm uppercase">
            <div class="flex items-center gap-space-xs">
                <span class="inline-block w-2.5 h-2.5 bg-primary-container border-[1.5px] border-on-background"></span>
                <span class="font-bold text-on-surface">PORTAL // COMM-CHANNEL_05</span>
                <span class="text-outline">/</span>
                <span class="text-on-surface-variant">STUDENT_DEVELOPER_DISPATCH</span>
            </div>
            <div class="flex items-center gap-space-md text-on-surface-variant">
                <span class="hidden sm:inline-flex items-center gap-1">
                    <span class="material-symbols-outlined text-[15px]">schedule</span>
                    TIMEZONE: WIB (UTC+7)
                </span>
                <span class="inline-flex items-center gap-1 font-bold text-on-surface">
                    <span class="w-2 h-2 rounded-full bg-primary-container animate-ping mr-1"></span>
                    RECEPTOR: READY
                </span>
            </div>
        </div>
    </div>
    <!-- Main Content Wrap with Technical Graph Accents -->
    <div class="relative w-full overflow-hidden bg-surface py-space-xl md:py-space-xl">
        <!-- Ambient Graph Paper Rule Backdrop -->
        <div
            class="absolute inset-0 opacity-[0.045] pointer-events-none bg-[radial-gradient(#1c1b1b_1.5px,transparent_1.5px)] [background-size:24px_24px]">
        </div>
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin relative z-10">
            <!-- SECTION 1: HEADER & HERO -->
            <div class="mb-space-xl">
                <div
                    class="inline-flex items-center gap-space-xs px-3 py-1 bg-primary-container text-on-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-label-md text-label-md uppercase mb-space-sm">
                    <span class="material-symbols-outlined text-[16px]">sensors</span>
                    GET IN TOUCH
                </div>
                <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-lg">
                    <div>
                        <h1
                            class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none">
                            LET'S
                            <span
                                class="bg-secondary-container px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">CONNECT.</span>
                        </h1>
                        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                            Have a question, idea, project
                            collaboration, or want to discuss RPL
                            learning materials? Jangan ragu untuk
                            menyapa! Saluran komunikasi aktif untuk
                            siswa, guru, komunitas, dan partner
                            industri.
                        </p>
                    </div>
                    <!-- Quick Telemetry Chip Box -->
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-space-sm flex items-center gap-space-md self-start lg:self-auto">
                        <div
                            class="w-12 h-12 bg-primary-container border-[2px] border-on-background flex items-center justify-center">
                            <span class="material-symbols-outlined text-[26px] text-on-surface">forum</span>
                        </div>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">
                                COMM CHANNEL ENCRYPTION
                            </div>
                            <div class="font-label-md text-label-md text-on-surface font-bold">
                                DIRECT P2P DISCUSSIONS
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION 2: PRIMARY CONTACT METHOD (WHATSAPP HERO ACTION) -->
            <div class="mb-space-xl">
                <div
                    class="relative bg-primary-container text-on-surface border-[4px] border-on-background shadow-[8px_8px_0px_#1c1b1b] p-space-lg md:p-space-xl overflow-hidden">
                    <!-- Background Architectural Watermark -->
                    <div
                        class="absolute -right-8 -bottom-10 pointer-events-none select-none opacity-15 font-headline-xl text-[140px] uppercase font-black text-on-surface leading-none tracking-tighter">
                        CHAT
                    </div>
                    <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-space-lg">
                        <div class="max-w-2xl">
                            <div
                                class="inline-flex items-center gap-2 bg-surface text-on-surface font-label-sm text-label-sm uppercase px-3 py-1 border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] mb-space-sm">
                                <span class="w-2.5 h-2.5 bg-secondary-container border border-on-background"></span>
                                PRIMARY &amp; FASTEST RESPONSE
                            </div>
                            <h2
                                class="font-headline-lg text-headline-lg uppercase text-on-surface tracking-tight mt-1 mb-space-xs">
                                HUBUNGI LANGSUNG VIA WHATSAPP
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface font-medium max-w-xl mb-space-md">
                                Tanya jawab materi web programming,
                                diskusi proyek akhir RPL, atau
                                tawaran magang / kolaborasi teknis
                                langsung ke WhatsApp pribadi saya.
                            </p>
                            <!-- Phone preview & badge pill -->
                            <div class="flex flex-wrap items-center gap-space-sm mb-space-xs">
                                <div
                                    class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-1.5 shadow-[2px_2px_0px_#1c1b1b] flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[18px] text-primary">smartphone</span>
                                    <span class="font-label-md text-label-md text-on-surface font-bold tracking-wider">+62
                                        812-3456-7890</span>
                                    <span class="text-on-surface-variant font-label-sm text-label-sm">(Ahmad Fauzan)</span>
                                </div>
                                <div
                                    class="bg-secondary-fixed text-on-secondary-fixed border-[2px] border-on-background px-3 py-1.5 shadow-[2px_2px_0px_#1c1b1b] font-label-sm text-label-sm flex items-center gap-1 font-semibold">
                                    <span class="material-symbols-outlined text-[16px]">bolt</span>
                                    ⚡ Biasanya membalas dalam
                                    beberapa jam
                                </div>
                            </div>
                        </div>
                        <!-- CTA Action -->
                        <div
                            class="flex flex-col sm:flex-row lg:flex-col gap-space-sm items-start lg:items-end justify-center shrink-0">
                            <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-xs bg-surface-container-lowest text-on-surface font-headline-sm text-label-lg uppercase px-6 py-4 border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#1c1b1b] active:translate-x-[3px] active:translate-y-[3px] active:shadow-none transition-all"
                                href="https://wa.me/6281234567890?text=Halo%20Ahmad%2C%20saya%20tertarik%20dengan%20portal%20belajar%20RPL"
                                rel="noopener noreferrer" target="_blank">
                                <span class="material-symbols-outlined text-[24px] text-primary">chat</span>
                                CONTACT ME ON WHATSAPP →
                            </a>
                            <span class="font-label-sm text-label-sm uppercase text-on-surface font-semibold tracking-wide">
                                [ OPEN DIRECT LINK • DESKTOP •
                                MOBILE ]
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION 3: ALTERNATIVE PLATFORMS & SOCIAL PROFILES -->
            <div class="mb-space-xl">
                <div class="flex items-center justify-between border-b-[3px] border-on-background pb-space-xs mb-space-lg">
                    <div class="flex items-center gap-space-xs">
                        <span class="font-label-lg text-label-lg font-bold uppercase text-on-surface">&lt;/&gt; ALTERNATIVE
                            PLATFORMS</span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">// TECHNICAL
                            NODES</span>
                    </div>
                    <span
                        class="font-label-sm text-label-sm uppercase px-2 py-0.5 bg-surface-container-high border-[1.5px] border-on-background text-on-surface">3
                        ACTIVE HUBS</span>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
                    <!-- Card 1: GITHUB -->
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[6px_6px_0px_#1c1b1b] flex flex-col justify-between hover:translate-y-[-3px] transition-transform">
                        <div>
                            <!-- Header Bar -->
                            <div
                                class="bg-tertiary-container text-on-tertiary-container border-b-[2px] border-on-background px-space-md py-space-xs flex items-center justify-between">
                                <span class="font-label-sm text-label-sm font-bold uppercase tracking-wider">DEV REPO //
                                    CODE</span>
                                <span class="material-symbols-outlined text-[18px]">terminal</span>
                            </div>
                            <!-- Card Body -->
                            <div class="p-space-md">
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-xs">
                                    GITHUB REPOSITORY
                                </h3>
                                <div
                                    class="inline-block font-label-sm text-label-sm text-tertiary font-bold bg-surface-container border-[1.5px] border-on-background px-2 py-1 mb-space-sm">
                                    github.com/fauzan-rpl
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Lihat source code proyek akhir,
                                    materi praktikum, arsitektur
                                    database, dan eksperimen kode
                                    terbuka.
                                </p>
                            </div>
                        </div>
                        <!-- Card Action Footer -->
                        <div class="p-space-md pt-0">
                            <a class="w-full inline-flex items-center justify-between bg-surface text-on-surface font-label-md text-label-md uppercase px-4 py-2.5 border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-tertiary-fixed hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all"
                                href="https://github.com" rel="noopener noreferrer" target="_blank">
                                <span>BUKA GITHUB</span>
                                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                    <!-- Card 2: EMAIL -->
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[6px_6px_0px_#1c1b1b] flex flex-col justify-between hover:translate-y-[-3px] transition-transform">
                        <div>
                            <!-- Header Bar -->
                            <div
                                class="bg-secondary-container text-on-secondary-container border-b-[2px] border-on-background px-space-md py-space-xs flex items-center justify-between">
                                <span class="font-label-sm text-label-sm font-bold uppercase tracking-wider">ACADEMIC //
                                    DISPATCH</span>
                                <span class="material-symbols-outlined text-[18px]">alternate_email</span>
                            </div>
                            <!-- Card Body -->
                            <div class="p-space-md">
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-xs">
                                    OFFICIAL EMAIL
                                </h3>
                                <div
                                    class="inline-block font-label-sm text-label-sm text-primary font-bold bg-surface-container border-[1.5px] border-on-background px-2 py-1 mb-space-sm">
                                    ahmad.fauzan.dev@smk.sch.id
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Untuk urusan formal akademik,
                                    pengantar magang sekolah,
                                    verifikasi sertifikasi
                                    kompetensi, dan surat resmi.
                                </p>
                            </div>
                        </div>
                        <!-- Card Action Footer -->
                        <div class="p-space-md pt-0">
                            <a class="w-full inline-flex items-center justify-between bg-surface text-on-surface font-label-md text-label-md uppercase px-4 py-2.5 border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-fixed hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all"
                                href="mailto:ahmad.fauzan.dev@smk.sch.id">
                                <span>KIRIM EMAIL</span>
                                <span class="material-symbols-outlined text-[18px]">mail</span>
                            </a>
                        </div>
                    </div>
                    <!-- Card 3: SOCIAL & NETWORKING -->
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[6px_6px_0px_#1c1b1b] flex flex-col justify-between hover:translate-y-[-3px] transition-transform">
                        <div>
                            <!-- Header Bar -->
                            <div
                                class="bg-primary-fixed-dim text-on-primary-container border-b-[2px] border-on-background px-space-md py-space-xs flex items-center justify-between">
                                <span class="font-label-sm text-label-sm font-bold uppercase tracking-wider">NETWORKS //
                                    SOCIAL</span>
                                <span class="material-symbols-outlined text-[18px]">hub</span>
                            </div>
                            <!-- Card Body -->
                            <div class="p-space-md">
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-xs">
                                    SOCIAL &amp; NETWORKING
                                </h3>
                                <div
                                    class="inline-block font-label-sm text-label-sm text-on-surface font-bold bg-surface-container border-[1.5px] border-on-background px-2 py-1 mb-space-sm truncate max-w-full">
                                    @fauzan.rpl • in/ahmadfauzan-dev
                                </div>
                                <p class="font-body-md text-body-md text-on-surface-variant">
                                    Update seputar kegiatan sekolah,
                                    workshop teknologi, sertifikasi
                                    BNSP, dan kehidupan produktif
                                    siswa RPL.
                                </p>
                            </div>
                        </div>
                        <!-- Card Action Footer -->
                        <div class="p-space-md pt-0">
                            <a class="w-full inline-flex items-center justify-between bg-surface text-on-surface font-label-md text-label-md uppercase px-4 py-2.5 border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-primary-fixed hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all"
                                href="#">
                                <span>LIHAT PROFIL</span>
                                <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION 4: AVAILABILITY & STUDENT STATUS CARD -->
            <div class="mb-space-xl">
                <div
                    class="bg-surface-container-low border-[3px] border-on-background shadow-[6px_6px_0px_#1c1b1b] p-space-md md:p-space-lg">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
                        <!-- Left Info Block -->
                        <div class="lg:col-span-7 flex flex-col gap-space-sm">
                            <div
                                class="inline-flex items-center gap-2 bg-surface-container-lowest text-on-surface font-label-md text-label-md uppercase px-3 py-1.5 border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] self-start">
                                <span class="w-3 h-3 rounded-full bg-emerald-500 border border-on-background"></span>
                                <span>CURRENT STATUS: AKTIF KELAS XII
                                    • TERBUKA UNTUK PRAKERIN /
                                    PROYEK</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">
                                INFORMASI KETERSEDIAAN &amp;
                                KESIAPAN DISKUSI
                            </h3>
                            <div
                                class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm text-body-md text-on-surface-variant pt-space-xs">
                                <div
                                    class="flex items-start gap-2 bg-surface p-space-sm border-[2px] border-on-background">
                                    <span class="material-symbols-outlined text-[20px] text-primary">pin_drop</span>
                                    <div>
                                        <strong class="font-label-sm text-label-sm uppercase block text-on-surface">Lokasi
                                            Domisili</strong>
                                        Cimahi / Bandung, Jawa
                                        Barat, ID
                                    </div>
                                </div>
                                <div
                                    class="flex items-start gap-2 bg-surface p-space-sm border-[2px] border-on-background">
                                    <span class="material-symbols-outlined text-[20px] text-tertiary">school</span>
                                    <div>
                                        <strong
                                            class="font-label-sm text-label-sm uppercase block text-on-surface">Institusi
                                            Vokasi</strong>
                                        SMK Rekayasa Perangkat Lunak
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Schedule Block -->
                        <div
                            class="lg:col-span-5 bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                            <div
                                class="flex items-center justify-between border-b-[2px] border-on-background pb-space-xs mb-space-sm">
                                <span
                                    class="font-label-sm text-label-sm uppercase font-bold text-on-surface flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[16px] text-primary">timelapse</span>
                                    JAM DISKUSI BELAJAR (WIB)
                                </span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant font-bold">ONLINE</span>
                            </div>
                            <div class="space-y-space-sm font-label-md text-label-md">
                                <div class="flex items-center justify-between border-b border-surface-variant pb-space-xs">
                                    <span class="text-on-surface font-semibold">Senin – Jumat</span>
                                    <span
                                        class="bg-surface-container px-2 py-0.5 border border-on-background font-bold text-primary">15.00
                                        – 21.00 WIB</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-on-surface font-semibold">Sabtu – Minggu</span>
                                    <span
                                        class="bg-surface-container px-2 py-0.5 border border-on-background font-bold text-tertiary">10.00
                                        – 20.00 WIB</span>
                                </div>
                            </div>
                            <div
                                class="mt-space-md bg-secondary-fixed/50 p-space-xs border border-on-background text-on-secondary-fixed font-body-sm text-body-sm flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px] text-secondary">info</span>
                                Di luar jam tersebut pesan WhatsApp
                                tetap masuk dan direspons bertahap.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SECTION 5: QUICK FAQ ACCORDION BOX -->
            <div class="mb-space-xl">
                <div class="flex items-center gap-space-xs border-b-[3px] border-on-background pb-space-xs mb-space-lg">
                    <span class="font-label-lg text-label-lg font-bold uppercase text-on-surface">[FAQ] TANYA JAWAB
                        SINGKAT</span>
                    <span class="font-label-sm text-label-sm text-on-surface-variant uppercase">// FAQ_MODULE.JSON</span>
                </div>
                <div class="space-y-space-md">
                    <!-- FAQ Item 1 -->
                    <div
                        class="faq-card bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] transition-all">
                        <button
                            class="faq-toggle w-full text-left p-space-md flex items-center justify-between gap-space-md hover:bg-surface-container-high transition-colors cursor-pointer select-none"
                            type="button">
                            <span
                                class="font-headline-sm text-headline-sm uppercase text-on-surface flex items-center gap-space-sm">
                                <span
                                    class="font-label-md text-label-md px-2 py-0.5 bg-primary-container text-on-surface border-[2px] border-on-background font-bold">Q1</span>
                                Apakah semua materi dan dokumen
                                PDF/PPT di portal ini gratis?
                            </span>
                            <span
                                class="faq-icon material-symbols-outlined text-[24px] text-on-surface transition-transform duration-200">add</span>
                        </button>
                        <div
                            class="faq-answer px-space-md pb-space-md pt-0 text-on-surface border-t-[2px] border-on-background bg-surface-container-low hidden">
                            <p class="font-body-md text-body-md text-on-surface pt-space-sm">
                                <strong>Ya, 100% Gratis!</strong>
                                Seluruh materi, ringkasan capaian
                                pembelajaran ATP, dan dokumen dapat
                                diunduh dan dipelajari secara bebas
                                untuk tujuan pendidikan vokasi serta
                                pengembangan skill rekan-rekan siswa
                                RPL lainnya.
                            </p>
                        </div>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div
                        class="faq-card bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] transition-all">
                        <button
                            class="faq-toggle w-full text-left p-space-md flex items-center justify-between gap-space-md hover:bg-surface-container-high transition-colors cursor-pointer select-none"
                            type="button">
                            <span
                                class="font-headline-sm text-headline-sm uppercase text-on-surface flex items-center gap-space-sm">
                                <span
                                    class="font-label-md text-label-md px-2 py-0.5 bg-secondary-container text-on-surface border-[2px] border-on-background font-bold">Q2</span>
                                Bolehkah mengadopsi struktur proyek
                                akhir ini?
                            </span>
                            <span
                                class="faq-icon material-symbols-outlined text-[24px] text-on-surface transition-transform duration-200">add</span>
                        </button>
                        <div
                            class="faq-answer px-space-md pb-space-md pt-0 text-on-surface border-t-[2px] border-on-background bg-surface-container-low hidden">
                            <p class="font-body-md text-body-md text-on-surface pt-space-sm">
                                <strong>Tentu sangat
                                    diperbolehkan!</strong>
                                Jadikan arsitektur dan struktur
                                proyek ini sebagai bahan referensi
                                belajar, eksperimen kelas, atau
                                basis proyek Anda. Jangan lupa tetap
                                menyertakan atribusi sumber (credit
                                link) untuk etika open-source.
                            </p>
                        </div>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div
                        class="faq-card bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] transition-all">
                        <button
                            class="faq-toggle w-full text-left p-space-md flex items-center justify-between gap-space-md hover:bg-surface-container-high transition-colors cursor-pointer select-none"
                            type="button">
                            <span
                                class="font-headline-sm text-headline-sm uppercase text-on-surface flex items-center gap-space-sm">
                                <span
                                    class="font-label-md text-label-md px-2 py-0.5 bg-tertiary-container text-on-surface border-[2px] border-on-background font-bold">Q3</span>
                                Bagaimana jika ingin mengajak kerja
                                sama proyek atau magang (PKL)?
                            </span>
                            <span
                                class="faq-icon material-symbols-outlined text-[24px] text-on-surface transition-transform duration-200">add</span>
                        </button>
                        <div
                            class="faq-answer px-space-md pb-space-md pt-0 text-on-surface border-t-[2px] border-on-background bg-surface-container-low hidden">
                            <p class="font-body-md text-body-md text-on-surface pt-space-sm">
                                Silakan hubungi melalui
                                <strong>WhatsApp</strong> untuk
                                respon cepat atau kirimkan Term of
                                Reference (TOR) resmi via
                                <strong>Official Email</strong>.
                                Saya menyertakan CV, portofolio
                                proyek lengkap, serta berkas
                                administrasi sekolah bila
                                dibutuhkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Quick Interactive Terminal Status Bar -->
            <div
                class="border-[3px] border-on-background bg-inverse-surface text-inverse-on-surface p-space-md shadow-[6px_6px_0px_#1c1b1b] flex flex-col md:flex-row items-start md:items-center justify-between gap-space-sm">
                <div class="flex items-center gap-2 font-code-inline text-code-inline">
                    <span class="text-primary-container font-bold">$</span>
                    <span>ping -c 1 fauzan-rpl.dev/contact • 0%
                        packet loss • latency: 18ms</span>
                </div>
                <div class="font-label-sm text-label-sm text-inverse-primary tracking-widest uppercase">
                    READY_FOR_TRANSMISSION
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
