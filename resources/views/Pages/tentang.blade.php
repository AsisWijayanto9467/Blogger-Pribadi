@extends('layouts.main')

@section('style')
@endsection

@section('main')
    <div class="flex flex-col w-full">
        <div class="w-full relative overflow-hidden bg-surface py-space-xl border-b-[3px] border-on-background">
            <div
                class="absolute inset-0 opacity-[0.07] pointer-events-none bg-[radial-gradient(#1c1b1b_1.5px,transparent_1.5px)] [background-size:24px_24px]">
            </div>
            <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin relative z-10">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 bg-primary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-4">
                    <span class="font-code-inline text-code-inline font-bold">DIR: /ABOUT &amp; VISION</span>
                </div>
                <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md">
                    <div class="max-w-3xl">
                        <h1
                            class="font-headline-xl text-headline-xl-mobile md:text-headline-xl text-on-surface uppercase tracking-tight leading-none mb-3">
                            TENTANG WEBSITE &amp; PROFIL
                        </h1>
                        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                            Mengenal visi portal dokumentasi
                            pembelajaran dan profil siswa pengembang di
                            balik platform arsip teknis vokasi ini.
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <div
                            class="px-4 py-2 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-left">
                            <span
                                class="block font-label-sm text-label-sm uppercase text-on-surface-variant">CURRICULUM</span>
                            <span class="font-code-inline text-code-inline font-bold text-on-surface">KURIKULUM
                                MERDEKA</span>
                        </div>
                        <div
                            class="px-4 py-2 bg-secondary-container border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-left">
                            <span class="block font-label-sm text-label-sm uppercase text-on-surface-variant">STATUS</span>
                            <span class="font-code-inline text-code-inline font-bold text-on-surface">V.2.4
                                PRODUCTION</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="w-full py-space-xl bg-surface-container-low border-b-[3px] border-on-background">
            <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin">
                <div class="flex items-center gap-3 mb-space-md">
                    <span class="w-4 h-4 bg-primary-container border-[2px] border-on-background"></span>
                    <h2 class="font-headline-md text-headline-md uppercase text-on-surface tracking-tight">
                        01. TUJUAN &amp; VISI WEBSITE
                    </h2>
                </div>
                <div
                    class="w-full bg-surface-container-lowest border-[3px] border-on-background shadow-[6px_6px_0px_#1c1b1b] p-space-md md:p-space-lg mb-space-lg relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 bg-primary text-on-primary font-label-md text-label-md px-4 py-1 border-b-[2px] border-l-[2px] border-on-background uppercase tracking-wider">
                        PRIMARY DIRECTIVE
                    </div>
                    <p class="font-body-lg text-body-lg text-on-surface max-w-4xl mt-3 md:mt-0 font-medium">
                        Website ini merupakan portal pembelajaran
                        pribadi yang digunakan untuk mendokumentasikan
                        materi pembelajaran RPL/PPLG dari kelas X sampai
                        kelas XII serta mendokumentasikan lima materi
                        utama Pemrograman Web Kelas XII.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-md">
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-space-md hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between border-b-[2px] border-on-background pb-2 mb-3">
                                <span class="font-code-inline text-code-inline font-bold text-primary">01 / ARCHIVE</span>
                                <span class="material-symbols-outlined text-on-surface text-[20px]">menu_book</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-2">
                                DOKUMENTASI PEMBELAJARAN
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Mencatat setiap materi dan eksperimen
                                kode secara sistematis dari semester
                                awal hingga akhir.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm">
                            <span>SCOPE: SEMESTER 1-6</span>
                            <span class="text-primary-container font-bold">SYNTAX READY</span>
                        </div>
                    </div>
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-space-md hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between border-b-[2px] border-on-background pb-2 mb-3">
                                <span class="font-code-inline text-code-inline font-bold text-primary">02 / REPO</span>
                                <span class="material-symbols-outlined text-on-surface text-[20px]">inventory_2</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-2">
                                ARSIP MATERI
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Penyimpanan handout, modul teori,
                                rangkuman, dan tautan referensi
                                terpercaya yang tervalidasi kurikulum.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm">
                            <span>FORMAT: PDF + REPO</span>
                            <span class="text-primary-container font-bold">INDEXED</span>
                        </div>
                    </div>
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-space-md hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between border-b-[2px] border-on-background pb-2 mb-3">
                                <span class="font-code-inline text-code-inline font-bold text-primary">03 / TRACK</span>
                                <span class="material-symbols-outlined text-on-surface text-[20px]">rocket_launch</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-2">
                                DOKUMENTASI PROYEK
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Rekam jejak pembuatan aplikasi dari ide,
                                arsitektur basis data, wireframe, hingga
                                pipeline deployment.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm">
                            <span>LIFECYCLE: SDLC</span>
                            <span class="text-primary-container font-bold">VERIFIED</span>
                        </div>
                    </div>
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-space-md hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between border-b-[2px] border-on-background pb-2 mb-3">
                                <span class="font-code-inline text-code-inline font-bold text-primary">04 / OPEN</span>
                                <span class="material-symbols-outlined text-on-surface text-[20px]">group</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-2">
                                MEDIA BELAJAR MANDIRI
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Sumber belajar terbuka untuk teman
                                sekelas dan sesama siswa vokasi yang
                                membutuhkan panduan pemrograman praktis.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm">
                            <span>ACCESS: PUBLIC FOSS</span>
                            <span class="text-primary-container font-bold">PEER-STUDY</span>
                        </div>
                    </div>
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-space-md hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between border-b-[2px] border-on-background pb-2 mb-3">
                                <span class="font-code-inline text-code-inline font-bold text-primary">05 / CAPSTONE</span>
                                <span class="material-symbols-outlined text-on-surface text-[20px]">terminal</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-2">
                                DOKUMENTASI PROYEK AKHIR
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Portofolio utama capstone terintegrasi
                                sebagai pemenuhan syarat uji kompetensi
                                keahlian dan kelulusan SMK.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm">
                            <span>TARGET: GRADE XII</span>
                            <span class="text-primary-container font-bold">UKK READY</span>
                        </div>
                    </div>
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-space-md hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all flex flex-col justify-between">
                        <div>
                            <div class="flex items-center justify-between border-b-[2px] border-on-background pb-2 mb-3">
                                <span class="font-code-inline text-code-inline font-bold text-primary">06 / INDUSTRY</span>
                                <span class="material-symbols-outlined text-on-surface text-[20px]">badge</span>
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-2">
                                PORTOFOLIO TEKNIS
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Bukti nyata kapabilitas coding untuk
                                persiapan magang industri (PKL),
                                interview rekruter, dan jenjang karir.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant flex justify-between items-center text-on-surface-variant font-label-sm text-label-sm">
                            <span>TARGET: PKL &amp; CAREER</span>
                            <span class="text-primary-container font-bold">SHOWCASE</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full py-space-xl bg-surface border-b-[3px] border-on-background">
            <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin">
                <div class="flex items-center gap-3 mb-space-md">
                    <span class="w-4 h-4 bg-secondary-container border-[2px] border-on-background"></span>
                    <h2 class="font-headline-md text-headline-md uppercase text-on-surface tracking-tight">
                        02. LEARNING TIMELINE JOURNEY
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-5 gap-space-sm relative">
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-4 flex flex-col justify-between">
                        <div>
                            <div
                                class="bg-surface-container-high px-2 py-1 font-label-sm text-label-sm uppercase font-bold text-on-surface border border-on-background mb-3 inline-block">
                                PHASE 01
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-2">
                                KELAS X
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                Foundation &amp; Logika Dasar
                                Pemrograman Algoritmik.
                            </p>
                            <div class="flex flex-wrap gap-1 mb-4">
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">C++</span>
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">HTML/CSS</span>
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">Basis
                                    Data</span>
                            </div>
                        </div>
                        <div
                            class="font-code-inline text-code-inline font-bold text-primary-container flex items-center gap-1">
                            <span>COMPLETED</span>
                            <span class="material-symbols-outlined text-[16px]">check_circle</span>
                        </div>
                    </div>
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-4 flex flex-col justify-between">
                        <div>
                            <div
                                class="bg-surface-container-high px-2 py-1 font-label-sm text-label-sm uppercase font-bold text-on-surface border border-on-background mb-3 inline-block">
                                PHASE 02
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-2">
                                KELAS XI
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                Development &amp; Object-Oriented Web
                                Application.
                            </p>
                            <div class="flex flex-wrap gap-1 mb-4">
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">PHP
                                    Native</span>
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">MySQL</span>
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">JavaScript</span>
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">UI/UX</span>
                            </div>
                        </div>
                        <div
                            class="font-code-inline text-code-inline font-bold text-primary-container flex items-center gap-1">
                            <span>COMPLETED</span>
                            <span class="material-symbols-outlined text-[16px]">check_circle</span>
                        </div>
                    </div>
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-4 flex flex-col justify-between">
                        <div>
                            <div
                                class="bg-surface-container-high px-2 py-1 font-label-sm text-label-sm uppercase font-bold text-on-surface border border-on-background mb-3 inline-block">
                                PHASE 03
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-2">
                                KELAS XII
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                Advanced Web Architecture &amp;
                                Enterprise Framework.
                            </p>
                            <div class="flex flex-wrap gap-1 mb-4">
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">Laravel
                                    11</span>
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">React.js</span>
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">CI/CD</span>
                            </div>
                        </div>
                        <div class="font-code-inline text-code-inline font-bold text-secondary flex items-center gap-1">
                            <span>IN PROGRESS</span>
                            <span class="material-symbols-outlined text-[16px]">sync</span>
                        </div>
                    </div>
                    <div
                        class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-4 flex flex-col justify-between">
                        <div>
                            <div
                                class="bg-secondary-container px-2 py-1 font-label-sm text-label-sm uppercase font-bold text-on-surface border border-on-background mb-3 inline-block">
                                PHASE 04
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-2">
                                ATP 01–05
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-4">
                                Lima Alur Tujuan Pembelajaran Inti
                                Berstandar Industri.
                            </p>
                            <div class="flex flex-wrap gap-1 mb-4">
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">Arsitektur</span>
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">REST
                                    API</span>
                                <span
                                    class="px-2 py-0.5 bg-surface-container border border-on-background font-code-inline text-[11px]">Database
                                    Opt</span>
                            </div>
                        </div>
                        <div class="font-code-inline text-code-inline font-bold text-primary flex items-center gap-1">
                            <span>ACTIVE FOCUS</span>
                            <span class="material-symbols-outlined text-[16px]">play_circle</span>
                        </div>
                    </div>
                    <div
                        class="bg-primary-container border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-4 flex flex-col justify-between text-on-surface">
                        <div>
                            <div
                                class="bg-surface-container-lowest px-2 py-1 font-label-sm text-label-sm uppercase font-bold text-on-surface border border-on-background mb-3 inline-block">
                                MILESTONE
                            </div>
                            <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-2">
                                CAPSTONE
                            </h3>
                            <p class="font-body-sm text-body-sm text-on-surface mb-4 font-medium">
                                Proyek Akhir Fullstack Terintegrasi UKK
                                &amp; Portofolio Kerja.
                            </p>
                            <div class="flex flex-wrap gap-1 mb-4">
                                <span
                                    class="px-2 py-0.5 bg-surface-container-lowest border border-on-background font-code-inline text-[11px]">Fullstack</span>
                                <span
                                    class="px-2 py-0.5 bg-surface-container-lowest border border-on-background font-code-inline text-[11px]">Production</span>
                            </div>
                        </div>
                        <div class="font-code-inline text-code-inline font-bold text-on-surface flex items-center gap-1">
                            <span>GRADUATION GATE</span>
                            <span class="material-symbols-outlined text-[16px]">flag</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full py-space-xl bg-surface-container-low border-b-[3px] border-on-background">
            <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin">
                <div class="flex items-center gap-3 mb-space-md">
                    <span class="w-4 h-4 bg-tertiary-container border-[2px] border-on-background"></span>
                    <h2 class="font-headline-md text-headline-md uppercase text-on-surface tracking-tight">
                        03. PROFIL SISWA PENGEMBANG
                    </h2>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
                    <div
                        class="lg:col-span-5 bg-surface-container-lowest border-[3px] border-on-background shadow-[6px_6px_0px_#1c1b1b] p-space-md md:p-space-lg relative">
                        <div
                            class="absolute -top-3 -right-3 bg-secondary-container px-3 py-1 font-label-sm text-label-sm uppercase font-bold border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            DEV BADGE
                        </div>
                        <div
                            class="w-full h-48 bg-surface-container border-[2px] border-on-background mb-4 overflow-hidden relative">
                            <img class="w-full h-full object-cover"
                                data-alt="Close up editorial portrait of an Indonesian vocational high school student developer in casual dark workwear smiling slightly inside a computer lab with monitors in the background, sharp brutalist natural light style with orange and warm cream tones"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7ZIu1ocAMI60YjdUEmnV3I3OrHi2NnKgoWIUgkJ9E2j18Caq4f_zljBRVqlognqbFMl4z_O9hju3K_3T66OmkCKOq-7o9ZFq8ZxFe8AoPBmY1MbAm5mWrBt4cU1r_AmrQ4mQC_3HaX0QBqn97C2pB1VULuIlFR86JYWcVhJ-2JtEGK2zdV6p97o14ENak6B17doSsqNzEABuqlKM5mZA6hlkj539Fy4nqr123WbdwtF78uergSDsP" />
                            <div
                                class="absolute bottom-2 left-2 bg-on-background text-surface px-2 py-0.5 font-code-inline text-code-inline">
                                SYS::ID: 222310492
                            </div>
                        </div>
                        <div class="border-b-[2px] border-on-background pb-3 mb-4">
                            <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">NAME /
                                OPERATOR</span>
                            <h3
                                class="font-headline-md text-headline-md uppercase text-on-surface tracking-tight leading-tight">
                                AHMAD FAUZAN PRATAMA
                            </h3>
                        </div>
                        <div class="space-y-3 font-label-md text-label-md text-on-surface">
                            <div class="flex justify-between items-center border-b border-surface-variant pb-2">
                                <span class="text-on-surface-variant">NIS / NISN:</span>
                                <span class="font-code-inline font-bold">222310492 / 0068493021</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-surface-variant pb-2">
                                <span class="text-on-surface-variant">KELAS:</span>
                                <span class="font-bold">XII RPL 1</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-surface-variant pb-2">
                                <span class="text-on-surface-variant">JURUSAN:</span>
                                <span class="font-bold text-right">Rekayasa Perangkat Lunak
                                    (PPLG)</span>
                            </div>
                            <div class="flex justify-between items-center border-b border-surface-variant pb-2">
                                <span class="text-on-surface-variant">SEKOLAH:</span>
                                <span class="font-bold">SMK Negeri 1 Cimahi</span>
                            </div>
                            <div class="flex justify-between items-start pt-1">
                                <span class="text-on-surface-variant">STATUS:</span>
                                <span class="font-code-inline text-right text-primary font-bold">Student Developer / Open
                                    for
                                    Internship &amp; Collaboration</span>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-7 flex flex-col gap-space-md">
                        <div
                            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[6px_6px_0px_#1c1b1b] p-space-md md:p-space-lg">
                            <span
                                class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider mb-2 block">BIOGRAPHY
                                &amp; STATEMENT</span>
                            <p class="font-body-lg text-body-lg text-on-surface leading-relaxed mb-4">
                                Saya adalah siswa SMK jurusan Rekayasa
                                Perangkat Lunak yang memiliki
                                ketertarikan mendalam pada arsitektur
                                web modern, clean code, dan desain
                                antarmuka berbasis neo-brutalisme.
                                Portal ini saya bangun sebagai sarana
                                pembuktian kompetensi sekaligus arsip
                                digital bagi perjalanan belajar saya.
                            </p>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Fokus pembelajaran harian saya mencakup
                                penguasaan backend frameworks,
                                optimalisasi performa basis data
                                relasional, pengujian kode, serta
                                implementasi standard industri software
                                development lifecycle (SDLC).
                            </p>
                        </div>
                        <div
                            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[6px_6px_0px_#1c1b1b] p-space-md md:p-space-lg">
                            <span
                                class="font-label-sm text-label-sm uppercase text-on-surface font-bold tracking-wider mb-4 block">EDUCATION
                                &amp; ACHIEVEMENTS</span>
                            <div class="space-y-3">
                                <div
                                    class="p-3 bg-surface-container border-[2px] border-on-background flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary text-[24px] mt-0.5">trophy</span>
                                    <div>
                                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface">
                                            LKS WEB TECHNOLOGIES TINGKAT
                                            KOTA
                                        </h4>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                                            Peserta &amp; Finalis Lomba
                                            Kompetensi Siswa (LKS)
                                            Bidang Web Technologies SMK
                                            Tingkat Kota.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="p-3 bg-surface-container border-[2px] border-on-background flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary text-[24px] mt-0.5">verified</span>
                                    <div>
                                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface">
                                            SERTIFIKASI BNSP JUNIOR WEB
                                            DEVELOPER
                                        </h4>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                                            Tersertifikasi Kompeten
                                            melalui Lembaga Sertifikasi
                                            Profesi (LSP) P1 SMK.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="p-3 bg-surface-container border-[2px] border-on-background flex items-start gap-3">
                                    <span
                                        class="material-symbols-outlined text-primary text-[24px] mt-0.5">code_blocks</span>
                                    <div>
                                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface">
                                            OPEN-SOURCE SCHOOL
                                            CONTRIBUTOR
                                        </h4>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                                            Kontributor aktif mini
                                            project dan modul lab
                                            pembelajaran open-source
                                            internal sekolah.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full py-space-xl bg-surface border-b-[3px] border-on-background">
            <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin">
                <div class="flex items-center gap-3 mb-space-md">
                    <span class="w-4 h-4 bg-primary border-[2px] border-on-background"></span>
                    <h2 class="font-headline-md text-headline-md uppercase text-on-surface tracking-tight">
                        04. TECHNOLOGY STACK &amp; TOOLING MATRIX
                    </h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-space-sm">
                    <div
                        class="p-4 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span
                                    class="font-code-inline text-[11px] uppercase bg-secondary-container px-2 py-0.5 border border-on-background">CORE</span>
                                <span class="font-code-inline text-[11px] font-bold text-primary">95%</span>
                            </div>
                            <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-1">
                                HTML5 &amp; CSS3
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Semantic HTML, Modern Flexbox/Grid, CSS
                                Modules.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant font-label-sm text-label-sm font-bold text-on-surface uppercase">
                            LEVEL: ADVANCED
                        </div>
                    </div>
                    <div
                        class="p-4 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span
                                    class="font-code-inline text-[11px] uppercase bg-secondary-container px-2 py-0.5 border border-on-background">SCRIPT</span>
                                <span class="font-code-inline text-[11px] font-bold text-primary">85%</span>
                            </div>
                            <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-1">
                                JAVASCRIPT ES6+
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Async/Await, Fetch API, DOM
                                Manipulation, Modules.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant font-label-sm text-label-sm font-bold text-on-surface uppercase">
                            LEVEL: INTERMEDIATE+
                        </div>
                    </div>
                    <div
                        class="p-4 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span
                                    class="font-code-inline text-[11px] uppercase bg-secondary-container px-2 py-0.5 border border-on-background">BACKEND</span>
                                <span class="font-code-inline text-[11px] font-bold text-primary">90%</span>
                            </div>
                            <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-1">
                                PHP 8.X
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                OOP, MVC Pattern, Composer, PDO &amp;
                                Security Best Practices.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant font-label-sm text-label-sm font-bold text-on-surface uppercase">
                            LEVEL: ADVANCED
                        </div>
                    </div>
                    <div
                        class="p-4 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span
                                    class="font-code-inline text-[11px] uppercase bg-secondary-container px-2 py-0.5 border border-on-background">FRAMEWORK</span>
                                <span class="font-code-inline text-[11px] font-bold text-primary">85%</span>
                            </div>
                            <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-1">
                                LARAVEL 11
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Eloquent ORM, Blade, Routing,
                                Middleware, REST APIs.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant font-label-sm text-label-sm font-bold text-on-surface uppercase">
                            LEVEL: INTERMEDIATE+
                        </div>
                    </div>
                    <div
                        class="p-4 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span
                                    class="font-code-inline text-[11px] uppercase bg-secondary-container px-2 py-0.5 border border-on-background">LIBRARY</span>
                                <span class="font-code-inline text-[11px] font-bold text-primary">78%</span>
                            </div>
                            <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-1">
                                REACT.JS
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Hooks, State Management, Component
                                Architecture, Vite.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant font-label-sm text-label-sm font-bold text-on-surface uppercase">
                            LEVEL: INTERMEDIATE
                        </div>
                    </div>
                    <div
                        class="p-4 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span
                                    class="font-code-inline text-[11px] uppercase bg-secondary-container px-2 py-0.5 border border-on-background">DATABASE</span>
                                <span class="font-code-inline text-[11px] font-bold text-primary">90%</span>
                            </div>
                            <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-1">
                                MYSQL / MARIADB
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Normalisasi Data, Relasi FK, Triggers,
                                Query Optimization.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant font-label-sm text-label-sm font-bold text-on-surface uppercase">
                            LEVEL: ADVANCED
                        </div>
                    </div>
                    <div
                        class="p-4 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span
                                    class="font-code-inline text-[11px] uppercase bg-secondary-container px-2 py-0.5 border border-on-background">CSS
                                    ENGINE</span>
                                <span class="font-code-inline text-[11px] font-bold text-primary">92%</span>
                            </div>
                            <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-1">
                                TAILWIND CSS
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Design Tokens, Responsive Utility,
                                Brutalist Aesthetics.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant font-label-sm text-label-sm font-bold text-on-surface uppercase">
                            LEVEL: ADVANCED
                        </div>
                    </div>
                    <div
                        class="p-4 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span
                                    class="font-code-inline text-[11px] uppercase bg-secondary-container px-2 py-0.5 border border-on-background">VERSIONING</span>
                                <span class="font-code-inline text-[11px] font-bold text-primary">82%</span>
                            </div>
                            <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-1">
                                GIT &amp; GITHUB
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Branching Workflow, Pull Requests,
                                Semantic Commits.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant font-label-sm text-label-sm font-bold text-on-surface uppercase">
                            LEVEL: INTERMEDIATE
                        </div>
                    </div>
                    <div
                        class="p-4 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span
                                    class="font-code-inline text-[11px] uppercase bg-secondary-container px-2 py-0.5 border border-on-background">SYSADMIN</span>
                                <span class="font-code-inline text-[11px] font-bold text-primary">75%</span>
                            </div>
                            <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-1">
                                LINUX &amp; DEPLOY
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Ubuntu CLI, NGINX Web Server, VPS
                                Hosting, SSH Keys.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant font-label-sm text-label-sm font-bold text-on-surface uppercase">
                            LEVEL: INTERMEDIATE
                        </div>
                    </div>
                    <div
                        class="p-4 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-center mb-2">
                                <span
                                    class="font-code-inline text-[11px] uppercase bg-secondary-container px-2 py-0.5 border border-on-background">DESIGN</span>
                                <span class="font-code-inline text-[11px] font-bold text-primary">80%</span>
                            </div>
                            <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-1">
                                FIGMA &amp; UI DESIGN
                            </h4>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Wireframing, Wireflow, Design System
                                &amp; Asset Export.
                            </p>
                        </div>
                        <div
                            class="mt-4 pt-2 border-t border-surface-variant font-label-sm text-label-sm font-bold text-on-surface uppercase">
                            LEVEL: INTERMEDIATE
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full py-space-xl bg-surface-container-high">
            <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin">
                <div
                    class="bg-surface-container-lowest border-[4px] border-on-background shadow-[8px_8px_0px_#1c1b1b] p-space-lg md:p-space-xl flex flex-col md:flex-row items-center justify-between gap-space-lg">
                    <div class="max-w-2xl">
                        <div
                            class="inline-block px-3 py-1 bg-secondary-container font-label-sm text-label-sm uppercase font-bold border-[2px] border-on-background mb-3">
                            NEXT STEP / COLLABORATION
                        </div>
                        <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface tracking-tight mb-2">
                            EKSPLORASI ARSIP ATAU MULAI KONEKSI
                        </h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Akses seluruh silabus pembelajaran RPL kelas
                            X hingga XII, atau buka ruang komunikasi
                            langsung untuk peluang magang dan proyek
                            kolaboratif.
                        </p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-space-sm w-full md:w-auto">
                        <a class="font-headline-sm text-label-lg uppercase bg-primary-container text-on-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] px-6 py-4 hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2"
                            data-path="pembelajaran" href="#">
                            LIHAT PEMBELAJARAN →
                        </a>
                        <a class="font-headline-sm text-label-lg uppercase bg-secondary-container text-on-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] px-6 py-4 hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2"
                            href="https://wa.me/6281234567890" rel="noopener noreferrer" target="_blank">
                            HUBUNGI VIA WHATSAPP →
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
@endsection
