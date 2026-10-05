@extends('layouts.main')

@section('style')
@endsection

@section('main')
    <!-- SECTION 1: HERO SECTION -->
    <section class="relative w-full border-b-[3px] border-on-background bg-surface overflow-hidden">
        <!-- Graph paper ambient pattern -->
        <div
            class="absolute inset-0 opacity-[0.06] pointer-events-none bg-[radial-gradient(#1c1b1b_1.5px,transparent_1.5px)] [background-size:24px_24px]">
        </div>
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl md:py-20 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
                <!-- Left Side: Editorial Typography & Actions -->
                <div class="lg:col-span-7 flex flex-col items-start">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 bg-primary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <span class="inline-block w-2.5 h-2.5 bg-on-background animate-pulse"></span>
                        <span class="font-label-md text-label-md uppercase tracking-wider">HELLO, I'M A RPL STUDENT</span>
                    </div>
                    <h1
                        class="font-headline-xl text-[44px] sm:text-[60px] lg:text-[76px] leading-[0.92] uppercase font-bold text-on-surface tracking-tighter mb-space-md">
                        LEARN.<br />
                        <span
                            class="text-primary-container underline decoration-[6px] decoration-on-background underline-offset-4">BUILD.</span><br />
                        DOCUMENT.
                    </h1>
                    <div
                        class="inline-block bg-secondary-container px-3 py-1 border-[2px] border-on-background text-on-surface font-label-md text-label-md uppercase mb-space-sm shadow-[2px_2px_0px_#1c1b1b]">
                        PERJALANAN BELAJAR RPL / PPLG
                    </div>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mb-space-lg leading-relaxed">
                        Personal learning portal untuk
                        mendokumentasikan pembelajaran kurikuler,
                        materi teknis, eksplorasi kode, dan
                        portofolio rekayasa perangkat lunak dari
                        kelas X hingga kelas XII.
                    </p>
                    <!-- Buttons -->
                    <div class="flex flex-wrap items-center gap-space-sm w-full sm:w-auto mb-space-lg">
                        <a class="font-headline-sm text-label-lg uppercase bg-primary-container text-on-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] px-6 py-3 hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] active:translate-x-[4px] active:translate-y-[4px] active:shadow-none transition-all flex items-center gap-2"
                            href="#pembelajaran-grid">
                            MULAI BELAJAR
                            <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                        </a>
                        <a class="font-headline-sm text-label-lg uppercase bg-surface-container-lowest text-on-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] px-6 py-3 hover:bg-secondary-container hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] active:translate-x-[4px] active:translate-y-[4px] active:shadow-none transition-all flex items-center gap-2"
                            href="#atp-section">
                            LIHAT MATERI ATP
                            <span class="material-symbols-outlined text-[20px]">menu_book</span>
                        </a>
                    </div>
                    <!-- Social Quick Links -->
                    <div class="flex items-center gap-space-xs flex-wrap">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant mr-2">CHANNELS:</span>
                        <a class="font-label-sm text-label-sm uppercase px-3 py-1 border-[2px] border-on-background bg-surface-container-lowest text-on-surface hover:bg-secondary-fixed shadow-[2px_2px_0px_#1c1b1b] transition-all flex items-center gap-1"
                            href="https://github.com" rel="noopener noreferrer" target="_blank">
                            <span class="">$</span> GITHUB
                        </a>
                        <a class="font-label-sm text-label-sm uppercase px-3 py-1 border-[2px] border-on-background bg-surface-container-lowest text-on-surface hover:bg-tertiary-fixed shadow-[2px_2px_0px_#1c1b1b] transition-all flex items-center gap-1"
                            href="https://linkedin.com" rel="noopener noreferrer" target="_blank">
                            <span class="">in</span> LINKEDIN
                        </a>
                        <a class="font-label-sm text-label-sm uppercase px-3 py-1 border-[2px] border-on-background bg-surface-container-lowest text-on-surface hover:bg-secondary-container shadow-[2px_2px_0px_#1c1b1b] transition-all flex items-center gap-1"
                            href="https://wa.me" rel="noopener noreferrer" target="_blank">
                            <span class="">#</span> WHATSAPP
                        </a>
                    </div>
                </div>
                <!-- Right Side: Brutalist Developer Composition -->
                <div class="lg:col-span-5 relative mt-space-lg lg:mt-0 flex flex-col items-end">
                    <!-- Top Sub-Bar / Header Badges Container entirely within column -->
                    <div class="w-full flex items-center justify-between mb-2">
                        <div
                            class="bg-surface-container-lowest text-on-surface border-[2px] border-on-background shadow-[2px_2px_0px_#111111] px-2.5 py-1 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-secondary"></span>
                            <span class="font-label-sm text-[11px] uppercase font-bold">ATP 01—05 READY</span>
                        </div>
                        <div
                            class="bg-secondary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#111111] px-3 py-1">
                            <span
                                class="font-label-sm text-[11px] uppercase font-bold tracking-wider flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[15px]">terminal</span>
                                STUDENT DEVELOPER // ID: 222310492
                            </span>
                        </div>
                    </div>
                    <!-- Main Brutalist Framed Photo Card -->
                    <div
                        class="relative z-10 w-full bg-surface-container-lowest border-[3px] border-on-background shadow-[6px_6px_0px_#111111] overflow-hidden">
                        <!-- Header bar for the photo frame -->
                        <div
                            class="flex items-center justify-between px-3 py-2 bg-on-background border-b-[3px] border-on-background">
                            <div class="flex items-center gap-1.5">
                                <span class="w-3 h-3 bg-error inline-block border border-on-background"></span>
                                <span
                                    class="w-3 h-3 bg-secondary-container inline-block border border-on-background"></span>
                                <span class="w-3 h-3 bg-tertiary-container inline-block border border-on-background"></span>
                            </div>
                            <span
                                class="font-code-inline text-[12px] text-surface-bright font-bold tracking-wider">AHMAD_FAUZAN.JPG</span>
                            <span class="font-label-sm text-label-sm text-primary-container font-bold">XII RPL 1</span>
                        </div>
                        <!-- Portrait Image -->
                        <div class="relative w-full h-[360px] sm:h-[420px] bg-surface-container-high overflow-hidden">
                            <img alt="Indonesian vocational high school student Ahmad Fauzan smiling in modern coding lab"
                                class="w-full h-full object-cover"
                                src="https://lh3.googleusercontent.com/aida/AEtjO1UXI4xYt53RCFWCo-H8lV0F7CfkiMxm65u90FPEHW8Dehmsyt-HbF8n1EN2KfhLOPdrHh-tyC3GXg_MhKoyi4EYMBgkf1bm2C3hLqXu_72ifAb-h0AcHKETv8V6ak25ANRcFt98sGG8Ddgl9IZiyCZIzaNDG6MmfDZqFM3jYUJAqxUecfEkZeJ2uXaflIbjv7a_yxfbr2jGDl9c8kWEZK2JRBvusU-iS_skMWqxk2UfLOxvlzTZ8L3LEg" />
                            <!-- Bottom overlay strip inside photo -->
                            <div
                                class="absolute bottom-0 left-0 w-full bg-on-background/90 text-surface-bright px-4 py-2 border-t-[2px] border-on-background flex items-center justify-between backdrop-blur-xs">
                                <span class="font-code-inline text-[11px] text-secondary-fixed flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-primary-container animate-pulse"></span>
                                    DEV_STATUS: ONLINE
                                </span>
                                <span
                                    class="font-label-sm text-label-sm uppercase text-surface-variant tracking-widest">SMKN
                                    1 CIMAHI</span>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Status Badge anchored neatly within column -->
                    <div class="w-full flex justify-end mt-2">
                        <div
                            class="bg-primary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#111111] px-3.5 py-1.5 flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-on-surface text-[17px]">verified</span>
                            <span class="font-label-sm text-[12px] uppercase font-bold tracking-wider">FULLSTACK WEB
                                ARCHITECTURE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 2: STUDENT PROFILE & IDENTITY TICKER -->
    <section class="w-full bg-secondary-container border-b-[3px] border-on-background py-space-md overflow-x-auto">
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-space-sm">
                <!-- Item 1 -->
                <div class="bg-surface-container-lowest border-[2px] border-on-background p-3 shadow-[3px_3px_0px_#1c1b1b]">
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant block mb-1">NAMA SISWA</span>
                    <span class="font-headline-sm text-[16px] leading-tight uppercase font-bold text-on-surface block">Ahmad
                        Fauzan Pratama</span>
                </div>
                <!-- Item 2 -->
                <div class="bg-surface-container-lowest border-[2px] border-on-background p-3 shadow-[3px_3px_0px_#1c1b1b]">
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant block mb-1">TINGKAT /
                        KELAS</span>
                    <span class="font-headline-sm text-[16px] leading-tight uppercase font-bold text-primary block">XII RPL
                        1 (Semester Gasal)</span>
                </div>
                <!-- Item 3 -->
                <div class="bg-surface-container-lowest border-[2px] border-on-background p-3 shadow-[3px_3px_0px_#1c1b1b]">
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant block mb-1">KOMPETENSI
                        KEAHLIAN</span>
                    <span
                        class="font-headline-sm text-[16px] leading-tight uppercase font-bold text-on-surface block">Rekayasa
                        Perangkat Lunak</span>
                </div>
                <!-- Item 4 -->
                <div class="bg-surface-container-lowest border-[2px] border-on-background p-3 shadow-[3px_3px_0px_#1c1b1b]">
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant block mb-1">INSTITUSI</span>
                    <span class="font-headline-sm text-[16px] leading-tight uppercase font-bold text-on-surface block">SMKN
                        1 Cimahi Voc. Tech</span>
                </div>
                <!-- Item 5 -->
                <div
                    class="bg-surface-container-lowest border-[2px] border-on-background p-3 shadow-[3px_3px_0px_#1c1b1b] sm:col-span-2 lg:col-span-1">
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant block mb-1">AREA
                        PEMINATAN</span>
                    <span
                        class="font-headline-sm text-[16px] leading-tight uppercase font-bold text-tertiary block">Fullstack
                        • Web Architecture</span>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 3: MY LEARNING JOURNEY (3 ASYMMETRIC LARGE CARDS) -->
    <section class="w-full bg-surface py-space-xl border-b-[3px] border-on-background" id="pembelajaran-grid">
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin">
            <!-- Section header -->
            <div
                class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg pb-space-sm border-b-[2px] border-on-background gap-4">
                <div>
                    <span class="font-label-md text-label-md uppercase text-primary font-bold tracking-wider block mb-1">//
                        THREE YEAR TIMELINE</span>
                    <h2 class="font-headline-lg text-headline-lg uppercase font-bold text-on-surface tracking-tight">
                        MY LEARNING JOURNEY
                    </h2>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-md">
                    Evolusi pemahaman rekayasa perangkat lunak dari
                    fondasi logika dasar hingga perancangan
                    arsitektur sistem berskala enterprise.
                </p>
            </div>
            <!-- 3 Asymmetric Journey Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-space-lg items-stretch">
                <!-- CARD 01: KELAS X (Cream) -->
                <div
                    class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#1c1b1b] transition-all">
                    <div>
                        <div
                            class="p-space-md border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-lg text-label-lg font-bold uppercase text-on-surface">TAHUN
                                PERTAMA</span>
                            <span class="font-headline-md text-headline-md text-on-surface-variant font-bold">01</span>
                        </div>
                        <div class="p-space-md">
                            <div
                                class="inline-block px-2.5 py-0.5 bg-secondary-fixed text-on-secondary-fixed border-[2px] border-on-background font-label-sm text-label-sm uppercase font-bold mb-space-sm">
                                KELAS X — FOUNDATION
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-space-xs">
                                Logika &amp; Fondasi Pemrograman
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md leading-relaxed">
                                Pemahaman algoritma komputasional,
                                struktur data sederhana, pengenalan
                                sistem operasi Linux, jaringan
                                komputer dasar, dan semantik markup
                                web.
                            </p>
                            <div class="space-y-2 mb-space-md">
                                <span class="font-label-sm text-label-sm uppercase text-on-surface-variant block">MATERI
                                    KUNCI:</span>
                                <div class="flex flex-wrap gap-1.5">
                                    <span
                                        class="px-2 py-1 bg-surface-container-high border border-on-background font-code-inline text-[11px]">Algoritma
                                        Logika</span>
                                    <span
                                        class="px-2 py-1 bg-surface-container-high border border-on-background font-code-inline text-[11px]">C
                                        / Pascal Dasar</span>
                                    <span
                                        class="px-2 py-1 bg-surface-container-high border border-on-background font-code-inline text-[11px]">HTML5
                                        Semantics</span>
                                    <span
                                        class="px-2 py-1 bg-surface-container-high border border-on-background font-code-inline text-[11px]">CSS
                                        Box Model</span>
                                    <span
                                        class="px-2 py-1 bg-surface-container-high border border-on-background font-code-inline text-[11px]">Linux
                                        Terminal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-space-md pt-0">
                        <button
                            class="w-full font-headline-sm text-label-md uppercase bg-surface-container-high text-on-surface border-[2px] border-on-background py-2.5 shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
                            EXPLORE KELAS X →
                        </button>
                    </div>
                </div>
                <!-- CARD 02: KELAS XI (Charcoal) -->
                <div
                    class="bg-inverse-surface text-inverse-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#ff7a00] transition-all">
                    <div>
                        <div
                            class="p-space-md border-b-[2px] border-outline bg-on-background flex items-center justify-between">
                            <span class="font-label-lg text-label-lg font-bold uppercase text-secondary-container">TAHUN
                                KEDUA</span>
                            <span class="font-headline-md text-headline-md text-primary-container font-bold">02</span>
                        </div>
                        <div class="p-space-md">
                            <div
                                class="inline-block px-2.5 py-0.5 bg-tertiary-container text-on-tertiary-container border-[2px] border-inverse-on-surface font-label-sm text-label-sm uppercase font-bold mb-space-sm">
                                KELAS XI — DEVELOPMENT
                            </div>
                            <h3
                                class="font-headline-sm text-headline-sm uppercase font-bold text-inverse-on-surface mb-space-xs">
                                OOP &amp; Relational Databases
                            </h3>
                            <p class="font-body-sm text-body-sm text-surface-variant mb-space-md leading-relaxed">
                                Pemrograman berorientasi objek
                                (PBO), normalisasi basis data
                                relasional MySQL, script web dinamis
                                PHP, DOM manipulation JavaScript,
                                serta kolaborasi tim.
                            </p>
                            <div class="space-y-2 mb-space-md">
                                <span class="font-label-sm text-label-sm uppercase text-surface-variant block">MATERI
                                    KUNCI:</span>
                                <div class="flex flex-wrap gap-1.5">
                                    <span
                                        class="px-2 py-1 bg-on-background text-secondary-fixed border border-outline font-code-inline text-[11px]">OOP
                                        / PBO Java</span>
                                    <span
                                        class="px-2 py-1 bg-on-background text-secondary-fixed border border-outline font-code-inline text-[11px]">MySQL
                                        &amp; RDBMS</span>
                                    <span
                                        class="px-2 py-1 bg-on-background text-secondary-fixed border border-outline font-code-inline text-[11px]">PHP
                                        Native &amp; PDO</span>
                                    <span
                                        class="px-2 py-1 bg-on-background text-secondary-fixed border border-outline font-code-inline text-[11px]">JavaScript
                                        ES6</span>
                                    <span
                                        class="px-2 py-1 bg-on-background text-secondary-fixed border border-outline font-code-inline text-[11px]">Git
                                        Versioning</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-space-md pt-0">
                        <button
                            class="w-full font-headline-sm text-label-md uppercase bg-secondary-container text-on-surface border-[2px] border-inverse-on-surface py-2.5 shadow-[3px_3px_0px_#ffffff] hover:bg-primary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
                            EXPLORE KELAS XI →
                        </button>
                    </div>
                </div>
                <!-- CARD 03: KELAS XII (Vibrant Orange Emphasized) -->
                <div
                    class="bg-primary-container text-on-surface border-[4px] border-on-background shadow-[8px_8px_0px_#1c1b1b] flex flex-col justify-between relative transform lg:-translate-y-2 hover:translate-x-[-2px] hover:-translate-y-3 hover:shadow-[10px_10px_0px_#1c1b1b] transition-all">
                    <!-- Standout Pill -->
                    <div
                        class="absolute -top-3.5 right-4 bg-on-background text-surface-bright px-3 py-0.5 border-[2px] border-on-background font-label-sm text-label-sm uppercase font-bold tracking-widest">
                        CURRENT FOCUS 🔥
                    </div>
                    <div>
                        <div
                            class="p-space-md border-b-[3px] border-on-background bg-secondary-container flex items-center justify-between">
                            <span class="font-label-lg text-label-lg font-bold uppercase text-on-surface">TAHUN
                                KETIGA</span>
                            <span class="font-headline-md text-headline-md text-on-surface font-extrabold">03</span>
                        </div>
                        <div class="p-space-md">
                            <div
                                class="inline-block px-2.5 py-0.5 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm uppercase font-bold mb-space-sm shadow-[2px_2px_0px_#1c1b1b]">
                                KELAS XII — ADVANCED FULLSTACK
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-space-xs">
                                Modern Frameworks &amp; Capstone
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface mb-space-md leading-relaxed font-medium">
                                Penguasaan backend MVC modern,
                                reactive frontend component system,
                                autentikasi berbasis JWT/Sanctum,
                                CI/CD automated deployment, dan
                                integrasi proyek akhir skala
                                industri.
                            </p>
                            <div class="space-y-2 mb-space-md">
                                <span class="font-label-sm text-label-sm uppercase text-on-surface block font-bold">MATERI
                                    KUNCI &amp; ATP:</span>
                                <div class="flex flex-wrap gap-1.5">
                                    <span
                                        class="px-2 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[11px] font-bold">Laravel
                                        11 MVC</span>
                                    <span
                                        class="px-2 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[11px] font-bold">RESTful
                                        API Design</span>
                                    <span
                                        class="px-2 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[11px] font-bold">React.js
                                        &amp;
                                        Tailwind</span>
                                    <span
                                        class="px-2 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[11px] font-bold">OWASP
                                        Web Sec</span>
                                    <span
                                        class="px-2 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[11px] font-bold">Docker
                                        &amp; VPS
                                        CI/CD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-space-md pt-0">
                        <button
                            class="w-full font-headline-sm text-label-lg uppercase bg-on-background text-surface-bright border-[3px] border-on-background py-3 shadow-[4px_4px_0px_#ffffff] hover:bg-inverse-surface active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
                            EXPLORE KELAS XII →
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 4: WHAT I LEARN (BRUTALIST SKILL MATRIX) -->
    <section class="w-full bg-surface-container-low border-b-[3px] border-on-background py-space-lg">
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin">
            <div class="flex items-center gap-2 mb-space-md">
                <span class="font-label-md text-label-md uppercase text-primary font-bold"># TECHNICAL DOMAINS</span>
                <div class="h-0.5 flex-1 bg-on-background opacity-20"></div>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-space-sm">
                <!-- Skill 1 -->
                <div
                    class="bg-surface-container-lowest border-[2px] border-on-background p-3 shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between hover:bg-secondary-container transition-colors">
                    <span class="material-symbols-outlined text-primary text-[24px] mb-2">code</span>
                    <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">PROGRAMMING</span>
                    <span class="font-code-inline text-[10px] text-on-surface-variant mt-1">PHP • JS • Java</span>
                </div>
                <!-- Skill 2 -->
                <div
                    class="bg-surface-container-lowest border-[2px] border-on-background p-3 shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between hover:bg-secondary-container transition-colors">
                    <span class="material-symbols-outlined text-tertiary text-[24px] mb-2">database</span>
                    <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">DATABASE SYS</span>
                    <span class="font-code-inline text-[10px] text-on-surface-variant mt-1">MySQL • Eloquent</span>
                </div>
                <!-- Skill 3 -->
                <div
                    class="bg-surface-container-lowest border-[2px] border-on-background p-3 shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between hover:bg-secondary-container transition-colors">
                    <span class="material-symbols-outlined text-primary-container text-[24px] mb-2">web</span>
                    <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">WEB STACK</span>
                    <span class="font-code-inline text-[10px] text-on-surface-variant mt-1">Laravel • React</span>
                </div>
                <!-- Skill 4 -->
                <div
                    class="bg-surface-container-lowest border-[2px] border-on-background p-3 shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between hover:bg-secondary-container transition-colors">
                    <span class="material-symbols-outlined text-secondary text-[24px] mb-2">palette</span>
                    <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">UI / UX DESIGN</span>
                    <span class="font-code-inline text-[10px] text-on-surface-variant mt-1">Figma • Tailwind</span>
                </div>
                <!-- Skill 5 -->
                <div
                    class="bg-surface-container-lowest border-[2px] border-on-background p-3 shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between hover:bg-secondary-container transition-colors">
                    <span class="material-symbols-outlined text-on-surface text-[24px] mb-2">commit</span>
                    <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">GIT &amp; GITHUB</span>
                    <span class="font-code-inline text-[10px] text-on-surface-variant mt-1">Branches • PRs</span>
                </div>
                <!-- Skill 6 -->
                <div
                    class="bg-surface-container-lowest border-[2px] border-on-background p-3 shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between hover:bg-secondary-container transition-colors">
                    <span class="material-symbols-outlined text-error text-[24px] mb-2">cloud_sync</span>
                    <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">DEPLOYMENT</span>
                    <span class="font-code-inline text-[10px] text-on-surface-variant mt-1">VPS • CI/CD • Nginx</span>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 5: FEATURED 5 ATP — WEB PROGRAMMING KELAS XII -->
    <section class="w-full bg-surface py-space-xl border-b-[3px] border-on-background relative" id="atp-section">
        <div
            class="absolute inset-0 opacity-[0.04] pointer-events-none bg-[radial-gradient(#1c1b1b_1.5px,transparent_1.5px)] [background-size:20px_20px]">
        </div>
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin relative z-10">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-4">
                <div>
                    <div
                        class="inline-flex items-center gap-1.5 px-3 py-1 bg-on-background text-secondary-container font-label-sm text-label-sm uppercase font-bold mb-2">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        MANDATORY VOCATIONAL CURRICULUM
                    </div>
                    <h2 class="font-headline-lg text-headline-lg uppercase font-bold text-on-surface tracking-tight">
                        5 ATP — PEMROGRAMAN WEB KELAS XII
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-1">
                        Alur Tujuan Pembelajaran resmi konsentrasi
                        keahlian Rekayasa Perangkat Lunak untuk
                        Semester Gasal. Dilengkapi artefak modul,
                        code sandbox, dan dokumentasi implementasi.
                    </p>
                </div>
                <div class="flex items-center gap-2">
                    <span
                        class="font-label-sm text-label-sm uppercase bg-surface-container-high px-3 py-1.5 border border-on-background">
                        STATUS: 100% COVERED
                    </span>
                </div>
            </div>
            <!-- ATP Grid: ATP 01 to ATP 04 in 2x2 grid, ATP 05 as Hero Block below -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-lg mb-space-lg">
                <!-- ATP 01 -->
                <div
                    class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#1c1b1b] transition-all">
                    <div
                        class="p-space-md border-b-[2px] border-on-background bg-secondary-container flex items-center justify-between">
                        <span class="font-label-lg text-label-lg font-bold uppercase text-on-surface">ATP 01</span>
                        <span
                            class="font-label-sm text-label-sm uppercase px-2 py-0.5 bg-surface-container-lowest border border-on-background font-bold">BACKEND
                            CORE</span>
                    </div>
                    <div class="p-space-md">
                        <h3 class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-space-xs">
                            FRAMEWORK BACKEND LANJUTAN
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md leading-relaxed">
                            Penerapan arsitektur
                            Model-View-Controller (MVC) tingkat
                            lanjut dengan Laravel, konfigurasi
                            database migration, seeding fungsional,
                            relasi Eloquent ORM, dan perancangan
                            RESTful API lengkap dengan token-based
                            authentication (Sanctum).
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-space-md">
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">Authentication
                                JWT</span>
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">Eloquent
                                ORM</span>
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">Migration
                                &amp; Seeder</span>
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">REST
                                API Specs</span>
                        </div>
                    </div>
                    <div class="p-space-md pt-0">
                        <button
                            class="w-full font-headline-sm text-label-md uppercase bg-surface-container-lowest text-on-surface border-[2px] border-on-background py-2 hover:bg-primary-container shadow-[3px_3px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
                            VIEW MATERIAL ATP 01 →
                        </button>
                    </div>
                </div>
                <!-- ATP 02 -->
                <div
                    class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#1c1b1b] transition-all">
                    <div
                        class="p-space-md border-b-[2px] border-on-background bg-tertiary-fixed flex items-center justify-between">
                        <span class="font-label-lg text-label-lg font-bold uppercase text-on-surface">ATP 02</span>
                        <span
                            class="font-label-sm text-label-sm uppercase px-2 py-0.5 bg-surface-container-lowest border border-on-background font-bold">CLIENT
                            LOGIC</span>
                    </div>
                    <div class="p-space-md">
                        <h3 class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-space-xs">
                            FRAMEWORK FRONTEND LANJUTAN
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md leading-relaxed">
                            Membangun Single Page Application (SPA)
                            reaktif berbasis komponen menggunakan
                            React.js / Vue.js. Mengintegrasikan
                            Global State Management, asynchronous
                            fetch/Axios handling, routing navigasi
                            dinamis, dan sistem style Tailwind
                            modular.
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-space-md">
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">React
                                Hooks &amp; State</span>
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">Axios
                                Interceptors</span>
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">Client
                                Routing</span>
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">Tailwind
                                Modular</span>
                        </div>
                    </div>
                    <div class="p-space-md pt-0">
                        <button
                            class="w-full font-headline-sm text-label-md uppercase bg-surface-container-lowest text-on-surface border-[2px] border-on-background py-2 hover:bg-tertiary-container shadow-[3px_3px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
                            VIEW MATERIAL ATP 02 →
                        </button>
                    </div>
                </div>
                <!-- ATP 03 -->
                <div
                    class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#1c1b1b] transition-all">
                    <div
                        class="p-space-md border-b-[2px] border-on-background bg-secondary-fixed flex items-center justify-between">
                        <span class="font-label-lg text-label-lg font-bold uppercase text-on-surface">ATP 03</span>
                        <span
                            class="font-label-sm text-label-sm uppercase px-2 py-0.5 bg-surface-container-lowest border border-on-background font-bold">DEVOPS
                            &amp; SEC</span>
                    </div>
                    <div class="p-space-md">
                        <h3 class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-space-xs">
                            WEB SECURITY &amp; DEPLOYMENT
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md leading-relaxed">
                            Standar mitigasi celah keamanan
                            berdasarkan panduan OWASP Top 10 (SQL
                            Injection, XSS, CSRF). Konfigurasi
                            pipeline Continuous Integration /
                            Deployment (CI/CD) via GitHub Actions
                            menuju server produksi VPS Linux &amp;
                            Platform-as-a-Service.
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-space-md">
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">OWASP
                                Top 10</span>
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">GitHub
                                Actions CI/CD</span>
                            <span
                                class="px-2 py-1 bg-surface-container-lowest text-on-surface border border-on-background font-code-inline text-[11px]">Nginx
                                Reverse Proxy</span>
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">SSL
                                / HTTPS Config</span>
                        </div>
                    </div>
                    <div class="p-space-md pt-0">
                        <button
                            class="w-full font-headline-sm text-label-md uppercase bg-surface-container-lowest text-on-surface border-[2px] border-on-background py-2 hover:bg-secondary-container shadow-[3px_3px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
                            VIEW MATERIAL ATP 03 →
                        </button>
                    </div>
                </div>
                <!-- ATP 04 -->
                <div
                    class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#1c1b1b] transition-all">
                    <div
                        class="p-space-md border-b-[2px] border-on-background bg-surface-variant flex items-center justify-between">
                        <span class="font-label-lg text-label-lg font-bold uppercase text-on-surface">ATP 04</span>
                        <span
                            class="font-label-sm text-label-sm uppercase px-2 py-0.5 bg-surface-container-lowest border border-on-background font-bold">DOCUMENTATION</span>
                    </div>
                    <div class="p-space-md">
                        <h3 class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-space-xs">
                            PROJECT DOCUMENTATION &amp; SPECS
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md leading-relaxed">
                            Penyusunan standar dokumentasi teknis
                            rekayasa perangkat lunak: arsitektur
                            flowchart, Entity Relationship Diagram
                            (ERD), Use Case Diagram, spesifikasi
                            teknis README repository, hingga
                            penyusunan laporan proyek akhir dan
                            presentasi manajerial.
                        </p>
                        <div class="flex flex-wrap gap-1.5 mb-space-md">
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">ERD
                                &amp; Schema Spec</span>
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">Flowchart
                                Diagram</span>
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">README
                                Engineering</span>
                            <span
                                class="px-2 py-1 bg-surface-container text-on-surface border border-on-background font-code-inline text-[11px]">Slide
                                Presentation</span>
                        </div>
                    </div>
                    <div class="p-space-md pt-0">
                        <button
                            class="w-full font-headline-sm text-label-md uppercase bg-surface-container-lowest text-on-surface border-[2px] border-on-background py-2 hover:bg-surface-container-high shadow-[3px_3px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
                            VIEW MATERIAL ATP 04 →
                        </button>
                    </div>
                </div>
            </div>
            <!-- ATP 05: Prominent Large Hero Block -->
            <div
                class="w-full bg-primary-container text-on-surface border-[4px] border-on-background shadow-[8px_8px_0px_#1c1b1b] p-space-lg relative overflow-hidden">
                <div
                    class="absolute -right-12 -bottom-12 font-headline-xl text-[140px] font-bold text-on-surface opacity-10 select-none pointer-events-none">
                    05
                </div>
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-center">
                    <div class="lg:col-span-8">
                        <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                            <span
                                class="px-3 py-1 bg-on-background text-secondary-container font-label-md text-label-md uppercase font-bold">
                                ATP 05 — CAPSTONE HIGHLIGHT
                            </span>
                            <span
                                class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm uppercase font-bold">
                                FINAL INTEGRATION
                            </span>
                        </div>
                        <h3
                            class="font-headline-lg text-headline-lg uppercase font-bold text-on-surface mb-space-xs leading-tight">
                            FINAL FULLSTACK CAPSTONE PROJECT
                        </h3>
                        <p class="font-body-lg text-body-lg text-on-surface max-w-2xl mb-space-md font-medium">
                            Integrasi menyeluruh seluruh kompetensi
                            ATP 01 - 04 ke dalam satu produk
                            aplikasi digital nyata. Memenuhi studi
                            kasus riil industri, arsitektur database
                            teruji, otentikasi aman, pengujian
                            fungsional unit test, dan penerapan di
                            infrastruktur live server.
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span
                                class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[12px] font-bold">
                                Fullstack Monorepo / Decoupled
                            </span>
                            <span
                                class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[12px] font-bold">
                                Live Production Environment
                            </span>
                            <span
                                class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[12px] font-bold">
                                Assessed by Industry Mentors
                            </span>
                        </div>
                    </div>
                    <div class="lg:col-span-4 flex flex-col gap-3">
                        <div
                            class="bg-surface-container-lowest border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                            <span class="font-label-sm text-label-sm uppercase text-on-surface-variant block mb-1">PROYEK
                                TERPILIH:</span>
                            <span
                                class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface block mb-2">EduRPL
                                Management Hub</span>
                            <span
                                class="font-code-inline text-code-inline text-tertiary block mb-3">https://edurpl.dev-archive.sch.id</span>
                            <button
                                class="w-full font-headline-sm text-label-md uppercase bg-secondary-container text-on-surface border-[2px] border-on-background py-2.5 shadow-[3px_3px_0px_#1c1b1b] hover:bg-primary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
                                DETAIL CAPSTONE ATP 05 →
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 6: FEATURED LEARNING ARTICLES (GRADE 10-12 HIGHLIGHTS) -->
    <section class="w-full bg-surface-container-low py-space-xl border-b-[3px] border-on-background">
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin">
            <!-- Section header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-4">
                <div>
                    <span class="font-label-md text-label-md uppercase text-primary font-bold tracking-wider block mb-1">//
                        CURATED TECHNICAL LOGS</span>
                    <h2 class="font-headline-lg text-headline-lg uppercase font-bold text-on-surface tracking-tight">
                        FEATURED ARTICLES &amp; NOTES
                    </h2>
                </div>
                <a class="font-headline-sm text-label-md uppercase bg-surface-container-lowest text-on-surface border-[2px] border-on-background px-4 py-2 shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container transition-all flex items-center gap-1.5 self-start md:self-auto"
                    href="#">
                    SEMUA ARTIKEL [42] →
                </a>
            </div>
            <!-- 4 Brutalist Article Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
                <!-- Article 1: Kelas X -->
                <article
                    class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all">
                    <div>
                        <div
                            class="h-44 w-full border-b-[2px] border-on-background relative overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover"
                                data-alt="High contrast technical diagram showing HTML5 document structure and CSS Box model on architectural graph paper layout with sharp black lines and warm cream paper texture."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAx-IH4W2RnCWgZFSgSDlKxgtpYjbedQO0EGGDJtjtfyo-TnEvZDh_x6t42xchI5NMjtheQHJKjtNMG0raiVt_0Li-qV9fs4skm604DOODtWoKFCamQb4J-fECWku2BYTAT9C74U-jS1-8jz4Q0KsjbAIw6nArmx9bChI0rVPYqCzOmlh_m40747dwf4inqy35jcMHq8Y2nvw_EvYopscTxyDV1UhuD-GvPrLsTFt3-9tZJB8BjZt-J" />
                            <span
                                class="absolute top-2 left-2 bg-secondary-container text-on-surface border border-on-background px-2 py-0.5 font-label-sm text-[10px] uppercase font-bold">KELAS
                                X</span>
                        </div>
                        <div class="p-space-md">
                            <span class="font-code-inline text-[11px] text-on-surface-variant block mb-1">FOUNDATION • 12
                                MIN READ</span>
                            <h3 class="font-headline-sm text-[18px] leading-snug uppercase font-bold text-on-surface mb-2">
                                HTML &amp; CSS Fundamentals:
                                Semantics &amp; Box Model
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">
                                Memahami hierarki layout semantik,
                                perilaku margin collapsing, serta
                                implementasi flexbox modern tanpa
                                bergantung pada layout float lama.
                            </p>
                        </div>
                    </div>
                    <div class="p-space-md pt-0 border-t border-surface-variant mt-2 flex items-center justify-between">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">OCT 2023</span>
                        <a class="font-label-sm text-label-sm font-bold uppercase text-primary flex items-center hover:underline"
                            href="#">
                            BACA →
                        </a>
                    </div>
                </article>
                <!-- Article 2: Kelas XI -->
                <article
                    class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all">
                    <div>
                        <div
                            class="h-44 w-full border-b-[2px] border-on-background relative overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover"
                                data-alt="Database schema entity relationship diagram with bold neo-brutalist tables, keys, and foreign relational links rendered on bright cream background with clean ink lines."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAGY9CR-mFhepaerVdhY6PQJnd7vWWi4owBkWp9l_wLV7WRB4MpYYjv_2sZsbz3H89KkS4LcIbwoag1x6dfxT6XsD3BquKHN89JuOU6JQexRtUttlJ1Vt4TFBuZxNpDk4uuRfEr89PyXghwioSu6X2m4neLGNiEOmPx4OG9zg9izqYAbrRJdlq8-84fBMiYcv48H1XhI1aIOUs5XCtzxnse-NXBJgmVwqYyY2xOMrGInqIHnUgfyz6R" />
                            <span
                                class="absolute top-2 left-2 bg-tertiary-fixed text-on-surface border border-on-background px-2 py-0.5 font-label-sm text-[10px] uppercase font-bold">KELAS
                                XI</span>
                        </div>
                        <div class="p-space-md">
                            <span class="font-code-inline text-[11px] text-on-surface-variant block mb-1">RDBMS • 18 MIN
                                READ</span>
                            <h3 class="font-headline-sm text-[18px] leading-snug uppercase font-bold text-on-surface mb-2">
                                Database Normalization &amp; MySQL
                                Performance
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">
                                Panduan praktis normalisasi basis
                                data dari 1NF hingga 3NF, pembuatan
                                relasi foreign key terindeks, dan
                                optimasi query JOIN multi-tabel.
                            </p>
                        </div>
                    </div>
                    <div class="p-space-md pt-0 border-t border-surface-variant mt-2 flex items-center justify-between">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">MAY 2024</span>
                        <a class="font-label-sm text-label-sm font-bold uppercase text-primary flex items-center hover:underline"
                            href="#">
                            BACA →
                        </a>
                    </div>
                </article>
                <!-- Article 3: Kelas XII -->
                <article
                    class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all">
                    <div>
                        <div
                            class="h-44 w-full border-b-[2px] border-on-background relative overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover"
                                data-alt="Code editor terminal showing Laravel API routes, JSON response structures, and authorization headers with vibrant syntax highlighting and brutalist styling."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAmSUOjS1JJrehJIZPal8EXp5x0RIyj_J1grE4t9hf3rLjjDomjwl1UTp2219qecz4Y8uiglpk8e3Jj73ml2EJB3gwKOnfGER_ZoIAMZJCGWg47_yGnlrEeTdiUX6GrE5iy5lbbZeLBIcCnfUvirAGP5eDvKefGrEa1lMcz6hjQb8MxS67je46rCucV9_lsh6UDtbz4psmoaQFUchpXurZYusO9ZKG1UPk2CBW1_9vxMSHNF_2rkGp9" />
                            <span
                                class="absolute top-2 left-2 bg-primary-container text-on-surface border border-on-background px-2 py-0.5 font-label-sm text-[10px] uppercase font-bold">KELAS
                                XII</span>
                        </div>
                        <div class="p-space-md">
                            <span class="font-code-inline text-[11px] text-on-surface-variant block mb-1">BACKEND • 24 MIN
                                READ</span>
                            <h3 class="font-headline-sm text-[18px] leading-snug uppercase font-bold text-on-surface mb-2">
                                Building Secure REST API with
                                Laravel 11
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">
                                Implementasi API Resources, Form
                                Request Validation terpusat, rate
                                limiting, dan proteksi endpoint
                                menggunakan token Sanctum.
                            </p>
                        </div>
                    </div>
                    <div class="p-space-md pt-0 border-t border-surface-variant mt-2 flex items-center justify-between">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">NOV 2024</span>
                        <a class="font-label-sm text-label-sm font-bold uppercase text-primary flex items-center hover:underline"
                            href="#">
                            BACA →
                        </a>
                    </div>
                </article>
                <!-- Article 4: Kelas XII -->
                <article
                    class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all">
                    <div>
                        <div
                            class="h-44 w-full border-b-[2px] border-on-background relative overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover"
                                data-alt="React component tree diagram and state flow visual on graphic blueprint grid with component nodes and orange connection paths."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD79-ffIHrlk0ezsdZBRNUgdOZAy-fjRjm-Cbf0kILrAD6pjute5bdrlHNYZtYXxJXxtb67bUsu7D_kUxLoOSr0NUVqd_TLcLF8LQhWuwgSdtZhpwWIIXZh8pLEafouL1Nh_inKMVkvYi3-fkzvLpgfPsQiV9VsG7ciIGujjCmjZq7GHeECWxDRoKAX-EKj0t_O-bK4e0-8lJSFLpKAmt3diWzJdLKVanv0wk6ps5rbono3qtLQXSOd" />
                            <span
                                class="absolute top-2 left-2 bg-primary-container text-on-surface border border-on-background px-2 py-0.5 font-label-sm text-[10px] uppercase font-bold">KELAS
                                XII</span>
                        </div>
                        <div class="p-space-md">
                            <span class="font-code-inline text-[11px] text-on-surface-variant block mb-1">FRONTEND • 20 MIN
                                READ</span>
                            <h3 class="font-headline-sm text-[18px] leading-snug uppercase font-bold text-on-surface mb-2">
                                Component Architecture &amp; State
                                in React
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-3">
                                Pola dekomposisi komponen reusable,
                                custom hooks untuk logic separation,
                                dan pengelolaan global asynchronous
                                server state.
                            </p>
                        </div>
                    </div>
                    <div class="p-space-md pt-0 border-t border-surface-variant mt-2 flex items-center justify-between">
                        <span class="font-label-sm text-label-sm text-on-surface-variant">JAN 2025</span>
                        <a class="font-label-sm text-label-sm font-bold uppercase text-primary flex items-center hover:underline"
                            href="#">
                            BACA →
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- SECTION 7: FINAL PROJECT SHOWCASE FEATURE -->
    <section class="w-full bg-surface py-space-xl border-b-[3px] border-on-background">
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin">
            <!-- Section Tag -->
            <div
                class="inline-block px-3 py-1 bg-secondary-container text-on-surface border-[2px] border-on-background font-label-md text-label-md uppercase font-bold mb-space-md shadow-[2px_2px_0px_#1c1b1b]">
                FEATURED CAPSTONE ARTIFACT
            </div>
            <!-- Split Color-Blocked Showcase Card -->
            <div
                class="border-[4px] border-on-background shadow-[8px_8px_0px_#1c1b1b] grid grid-cols-1 lg:grid-cols-12 bg-on-background">
                <!-- Left: Mockup UI Frame -->
                <div
                    class="lg:col-span-7 p-space-md md:p-space-lg flex flex-col justify-center bg-inverse-surface border-b-[4px] lg:border-b-0 lg:border-r-[4px] border-on-background">
                    <!-- Mock Browser Container -->
                    <div
                        class="w-full bg-surface-container-lowest border-[3px] border-on-background shadow-[6px_6px_0px_#1c1b1b] overflow-hidden">
                        <!-- Mock browser top bar -->
                        <div
                            class="bg-surface-variant border-b-[2px] border-on-background px-3 py-2 flex items-center justify-between">
                            <div class="flex items-center gap-1.5">
                                <span class="w-3 h-3 rounded-full bg-error border border-on-background"></span>
                                <span
                                    class="w-3 h-3 rounded-full bg-secondary-container border border-on-background"></span>
                                <span
                                    class="w-3 h-3 rounded-full bg-tertiary-container border border-on-background"></span>
                            </div>
                            <div
                                class="bg-surface-container-lowest px-4 py-0.5 border border-on-background font-code-inline text-[11px] text-on-surface max-w-xs truncate">
                                https://edurpl.smkn1cimahi.sch.id/dashboard
                            </div>
                            <span class="material-symbols-outlined text-on-surface text-[18px]">lock</span>
                        </div>
                        <!-- Mock Preview Image -->
                        <div class="h-64 sm:h-80 w-full relative overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover"
                                data-alt="High fidelity fullstack web application dashboard interface for vocational school students with assignment tracking, code evaluation, kanban board, and grade matrix in sharp brutalist UI layout."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEUIau-UEw9zboxFXnQ8SnbSXdaFvOTHFlHn1cgrLuhkaNXB534k0PMnT-4bjcWqEpm2Ohefx8JwP13Jd194HwfCAsqUvz6Ipk9BgFdpr9R6AGf_Qauhaf5ghI15riu7bXRc8tUc3Y-V5QuptSbPVTmvrb4BjxdiCa5Y_EXfbl-98SFVc4UmkXzMGsf9n1Nbzft3fKTjVOfiW4yFvlMkS3aUB2C4r_7VOQMkpOoGr0wiREBMM3ZuoT" />
                        </div>
                    </div>
                </div>
                <!-- Right: Project Description & Stack Pills -->
                <div
                    class="lg:col-span-5 p-space-md md:p-space-lg flex flex-col justify-between bg-primary-container text-on-surface">
                    <div>
                        <div
                            class="inline-block px-2.5 py-0.5 bg-surface-container-lowest border-[2px] border-on-background font-label-sm text-label-sm uppercase font-bold mb-space-sm">
                            TAHUN PELAJARAN 2025/2026
                        </div>
                        <h3
                            class="font-headline-lg text-headline-lg uppercase font-bold text-on-surface leading-tight mb-space-xs">
                            EDURPL — LEARNING MANAGEMENT &amp;
                            ASSIGNMENT TRACKER
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface mb-space-md font-medium leading-relaxed">
                            Dokumentasi proyek akhir fullstack
                            sebagai penerapan komprehensif seluruh
                            materi Pemrograman Web Kelas XII.
                            Menyediakan modul tugas coding otomatis,
                            pelacakan alur belajar siswa,
                            autentikasi multi-role (Siswa, Guru,
                            Asisten Lab), dan live dashboard
                            monitoring.
                        </p>
                        <!-- Tech Stack Pills -->
                        <div class="mb-space-lg">
                            <span class="font-label-sm text-label-sm uppercase font-bold block mb-2 text-on-surface">
                                PRODUCTION TECH STACK:
                            </span>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-2.5 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[11px] font-bold shadow-[2px_2px_0px_#1c1b1b]">LARAVEL
                                    11</span>
                                <span
                                    class="px-2.5 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[11px] font-bold shadow-[2px_2px_0px_#1c1b1b]">REACT.JS</span>
                                <span
                                    class="px-2.5 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[11px] font-bold shadow-[2px_2px_0px_#1c1b1b]">MYSQL
                                    8.0</span>
                                <span
                                    class="px-2.5 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[11px] font-bold shadow-[2px_2px_0px_#1c1b1b]">TAILWIND
                                    CSS</span>
                                <span
                                    class="px-2.5 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[11px] font-bold shadow-[2px_2px_0px_#1c1b1b]">REST
                                    API</span>
                                <span
                                    class="px-2.5 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-code-inline text-[11px] font-bold shadow-[2px_2px_0px_#1c1b1b]">DOCKER
                                    &amp; VPS</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="pt-space-md border-t-[2px] border-on-background flex flex-col sm:flex-row items-center gap-3">
                        <button
                            class="w-full sm:w-auto flex-1 font-headline-sm text-label-md uppercase bg-on-background text-surface-bright border-[3px] border-on-background py-3 px-4 shadow-[4px_4px_0px_#ffffff] hover:bg-inverse-surface active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
                            VIEW PROJECT DETAILS →
                        </button>
                        <a class="w-full sm:w-auto font-label-md text-label-md uppercase bg-surface-container-lowest text-on-surface border-[3px] border-on-background py-3 px-4 shadow-[4px_4px_0px_#1c1b1b] hover:bg-secondary-container transition-all flex items-center justify-center gap-1.5"
                            href="https://github.com" rel="noopener noreferrer" target="_blank">
                            <span class="">&lt;/&gt;</span> REPO
                            GITHUB
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 8: LEARNING DOCUMENTATION ASSETS (4 BRUTALIST BLOCKS) -->
    <section class="w-full bg-surface-container-low py-space-xl border-b-[3px] border-on-background">
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin">
            <!-- Section header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-4">
                <div>
                    <span class="font-label-md text-label-md uppercase text-primary font-bold tracking-wider block mb-1">//
                        ASSET REPOSITORY</span>
                    <h2 class="font-headline-lg text-headline-lg uppercase font-bold text-on-surface tracking-tight">
                        LEARNING ARTIFACT ARCHIVES
                    </h2>
                </div>
                <p class="font-body-sm text-body-sm text-on-surface-variant max-w-sm">
                    Unduh dokumen pendukung, modul ajar resmi, slide
                    materi kelas, dan diagram alur sistem yang
                    digunakan selama masa pembelajaran.
                </p>
            </div>
            <!-- 4 Brutalist Archive Blocks -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
                <!-- Asset 1: PDF Modules -->
                <div
                    class="bg-surface-container-lowest border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all">
                    <div>
                        <div
                            class="w-10 h-10 bg-error text-surface-bright flex items-center justify-center border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-label-md font-bold mb-space-sm">
                            PDF
                        </div>
                        <h3 class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">
                            MODUL DOKUMENTASI
                        </h3>
                        <span class="font-code-inline text-[12px] text-primary block mb-2">5 BUKU PANDUAN LENGKAP</span>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Handout materi teoritis dan panduan
                            praktikum langkah-demi-langkah dari ATP
                            01 hingga ATP 05 dengan studi kasus
                            industri.
                        </p>
                    </div>
                    <button
                        class="w-full font-label-md text-label-md uppercase bg-surface-container text-on-surface border-[2px] border-on-background py-2 hover:bg-secondary-container shadow-[2px_2px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] transition-all flex items-center justify-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px]">download</span>
                        UNDUH PDF (.ZIP)
                    </button>
                </div>
                <!-- Asset 2: PPT Slides -->
                <div
                    class="bg-surface-container-lowest border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all">
                    <div>
                        <div
                            class="w-10 h-10 bg-primary-container text-on-surface flex items-center justify-center border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-label-md font-bold mb-space-sm">
                            PPT
                        </div>
                        <h3 class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">
                            SLIDE PRESENTASI
                        </h3>
                        <span class="font-code-inline text-[12px] text-primary block mb-2">5 DECK PRESENTASI KELAS</span>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Slide tayang visual yang digunakan untuk
                            presentasi proposal proyek, milestone
                            sprint, dan demonstrasi capstone akhir
                            di hadapan penguji.
                        </p>
                    </div>
                    <button
                        class="w-full font-label-md text-label-md uppercase bg-surface-container text-on-surface border-[2px] border-on-background py-2 hover:bg-secondary-container shadow-[2px_2px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] transition-all flex items-center justify-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px]">download</span>
                        UNDUH SLIDES (.PPTX)
                    </button>
                </div>
                <!-- Asset 3: Flowcharts & Diagrams -->
                <div
                    class="bg-surface-container-lowest border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all">
                    <div>
                        <div
                            class="w-10 h-10 bg-tertiary-container text-on-tertiary-container flex items-center justify-center border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-label-md font-bold mb-space-sm">
                            SVG
                        </div>
                        <h3 class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">
                            FLOWCHART &amp; ERD
                        </h3>
                        <span class="font-code-inline text-[12px] text-tertiary block mb-2">12 DIAGRAM SKEMA SISTEM</span>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Kumpulan diagram Entity Relationship
                            (ERD), Activity Diagram, dan pemetaan
                            arsitektur API micro-service beresolusi
                            tinggi.
                        </p>
                    </div>
                    <button
                        class="w-full font-label-md text-label-md uppercase bg-surface-container text-on-surface border-[2px] border-on-background py-2 hover:bg-secondary-container shadow-[2px_2px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] transition-all flex items-center justify-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px]">download</span>
                        UNDUH DIAGRAM (.ZIP)
                    </button>
                </div>
                <!-- Asset 4: README Specs -->
                <div
                    class="bg-surface-container-lowest border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all">
                    <div>
                        <div
                            class="w-10 h-10 bg-secondary-container text-on-surface flex items-center justify-center border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-label-md font-bold mb-space-sm">
                            MD
                        </div>
                        <h3 class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">
                            README &amp; SPECS
                        </h3>
                        <span class="font-code-inline text-[12px] text-secondary block mb-2">STANDAR REPO TEMPLATE</span>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Template dokumentasi repository standar
                            software engineer: environment setup,
                            changelog format, commit guidelines, dan
                            API documentation.
                        </p>
                    </div>
                    <button
                        class="w-full font-label-md text-label-md uppercase bg-surface-container text-on-surface border-[2px] border-on-background py-2 hover:bg-secondary-container shadow-[2px_2px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] transition-all flex items-center justify-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px]">download</span>
                        BUKA MARKDOWN GIST
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION 9: NEO-BRUTALIST FINAL CALL TO ACTION -->
    <section class="w-full bg-primary-container border-b-[3px] border-on-background py-space-xl relative overflow-hidden">
        <!-- Graph paper ambient pattern -->
        <div
            class="absolute inset-0 opacity-[0.08] pointer-events-none bg-[radial-gradient(#1c1b1b_1.5px,transparent_1.5px)] [background-size:24px_24px]">
        </div>
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin relative z-10">
            <div
                class="border-[4px] border-on-background bg-surface-container-lowest p-space-lg md:p-12 shadow-[8px_8px_0px_#1c1b1b] relative">
                <!-- Brutalist Decorative Corner Accents -->
                <div class="absolute top-2 left-2 font-code-inline text-xs text-on-surface-variant select-none">
                    [SEC:CALL_TO_ACTION]
                </div>
                <div class="absolute top-2 right-2 font-code-inline text-xs text-on-surface-variant select-none">
                    // VOCATIONAL_PORTAL
                </div>
                <div
                    class="absolute -bottom-4 right-8 bg-secondary-container border-[2px] border-on-background px-3 py-1 font-label-sm text-label-sm uppercase font-bold shadow-[2px_2px_0px_#1c1b1b] hidden sm:block">
                    STATUS: READY FOR PRODUCTION 🚀
                </div>
                <div class="max-w-3xl mx-auto text-center flex flex-col items-center">
                    <div
                        class="inline-block px-3 py-1 bg-secondary-container text-on-surface border-[2px] border-on-background font-label-sm text-label-sm uppercase font-bold mb-space-sm shadow-[2px_2px_0px_#1c1b1b]">
                        KURIKULUM MERDEKA REKAYASA PERANGKAT LUNAK
                    </div>
                    <h2
                        class="font-headline-xl text-[36px] sm:text-[48px] lg:text-[60px] leading-[0.95] uppercase font-bold text-on-surface tracking-tight mb-space-md">
                        KEEP LEARNING.<br />
                        <span
                            class="text-primary underline decoration-[6px] decoration-on-background underline-offset-4">KEEP
                            BUILDING.</span>
                    </h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mb-space-lg leading-relaxed">
                        Jelajahi seluruh materi pembelajaran,
                        dokumentasi praktikum laboratorium, dan
                        catatan teknis perjalanan belajar RPL dari
                        hulu ke hilir.
                    </p>
                    <div class="flex flex-wrap items-center justify-center gap-space-sm w-full sm:w-auto">
                        <a class="w-full sm:w-auto font-headline-sm text-label-lg uppercase bg-primary-container text-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] px-8 py-3.5 hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#1c1b1b] active:translate-x-[4px] active:translate-y-[4px] active:shadow-none transition-all flex items-center justify-center gap-2"
                            href="#">
                            JELAJAHI SEMUA PEMBELAJARAN
                            <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                        </a>
                        <a class="w-full sm:w-auto font-headline-sm text-label-lg uppercase bg-surface-container-high text-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] px-8 py-3.5 hover:bg-secondary-container hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#1c1b1b] active:translate-x-[4px] active:translate-y-[4px] active:shadow-none transition-all flex items-center justify-center gap-2"
                            href="#">
                            HUBUNGI SAYA
                            <span class="material-symbols-outlined text-[20px]">chat</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
