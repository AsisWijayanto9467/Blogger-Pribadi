@extends('layouts.main')

@section('style')
@endsection

@section('main')
    <div class="w-full border-b-[3px] border-on-background bg-surface-container-low relative overflow-hidden">
        <div
            class="absolute inset-0 opacity-[0.05] pointer-events-none bg-[radial-gradient(#1c1b1b_1px,transparent_1px)] [background-size:20px_20px]">
        </div>
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg mb-space-lg">
                <div class="max-w-3xl">
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-primary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        DOCUMENTATION ARCHIVE
                    </div>
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        PEMBELAJARAN
                        <span
                            class="bg-secondary-container px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">RPL</span>
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Dokumentasi komprehensif materi pembelajaran kejuruan dari Kelas X hingga Kelas XII
                        Rekayasa Perangkat Lunak (RPL / PPLG). Terstruktur, berbasis artefak kode, dan
                        berorientasi standar industri software modern.
                    </p>
                </div>
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL MATA
                            PELAJARAN</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">39
                            MAPEL</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">KELAS X</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">12
                            MAPEL</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">KELAS XI</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">13
                            MAPEL</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">KELAS XII</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">14
                            MAPEL</span>
                    </div>
                    <div class="font-code-inline text-code-inline text-on-surface-variant">
                        SMK KURIKULUM MERDEKA • PPLG
                    </div>
                </div>
            </div>

            <!-- ================= SEARCHBAR ================= -->
            <div class="mb-space-md">
                <form onsubmit="event.preventDefault(); applyFilters();" class="flex flex-col md:flex-row gap-2 w-full">
                    <div class="relative flex-1">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface text-[22px] pointer-events-none">
                            search
                        </span>
                        <input type="text" id="search-input" oninput="handleSearch(this.value)"
                            placeholder="Cari mata pelajaran, modul, atau topik... (misal: laravel, mobile, basis data)"
                            class="w-full pl-12 pr-12 py-3 bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/60 focus:outline-none focus:shadow-[6px_6px_0px_#1c1b1b] focus:translate-x-[-2px] focus:translate-y-[-2px] transition-all" />
                        <button type="button" id="clear-search" onclick="clearSearch()"
                            class="hidden absolute right-3 top-1/2 -translate-y-1/2 w-8 h-8 flex items-center justify-center bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all">
                            <span class="material-symbols-outlined text-[16px]">close</span>
                        </button>
                    </div>
                    <button type="submit"
                        class="font-label-md text-label-md uppercase font-bold px-6 py-3 bg-primary-container text-on-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2 whitespace-nowrap">
                        <span class="material-symbols-outlined text-[20px]">search</span>
                        CARI MODUL
                    </button>
                </form>
                <div id="search-result-info"
                    class="hidden mt-2 font-code-inline text-code-inline text-on-surface-variant">
                    <!-- Dynamic result info -->
                </div>
            </div>

            <!-- Quick Filter Bar -->
            <div class="flex flex-wrap gap-2 pt-space-sm border-t-[2px] border-on-background" id="filter-container">
                <button
                    class="filter-btn active-filter font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-on-background text-inverse-on-surface shadow-[3px_3px_0px_#1c1b1b] transition-all flex items-center gap-2"
                    data-filter="all" onclick="filterCurriculum('all')">
                    <span class="material-symbols-outlined text-[16px]">view_agenda</span>
                    SEMUA TINGKAT <span class="filter-count">[39]</span>
                </button>
                <button
                    class="filter-btn font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-surface-container-lowest text-on-surface hover:bg-secondary-container shadow-[3px_3px_0px_#1c1b1b] transition-all flex items-center gap-2"
                    data-filter="kelas-x" onclick="filterCurriculum('kelas-x')">
                    <span class="w-3 h-3 bg-tertiary border border-on-background"></span>
                    KELAS X (DASAR) <span class="filter-count">[12]</span>
                </button>
                <button
                    class="filter-btn font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-surface-container-lowest text-on-surface hover:bg-secondary-container shadow-[3px_3px_0px_#1c1b1b] transition-all flex items-center gap-2"
                    data-filter="kelas-xi" onclick="filterCurriculum('kelas-xi')">
                    <span class="w-3 h-3 bg-secondary-container border border-on-background"></span>
                    KELAS XI (PENGEMBANGAN) <span class="filter-count">[13]</span>
                </button>
                <button
                    class="filter-btn font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-surface-container-lowest text-on-surface hover:bg-secondary-container shadow-[3px_3px_0px_#1c1b1b] transition-all flex items-center gap-2"
                    data-filter="kelas-xii" onclick="filterCurriculum('kelas-xii')">
                    <span class="w-3 h-3 bg-primary-container border border-on-background"></span>
                    KELAS XII (LANJUTAN) <span class="filter-count">[14]</span>
                </button>
            </div>
        </div>
    </div>

    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl flex flex-col gap-space-xl">

        <!-- ================= SECTION KELAS X ================= -->
        <section class="curriculum-tier flex flex-col gap-space-lg" id="section-kelas-x" data-tier="kelas-x">
            <div
                class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg relative">
                <div
                    class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md border-b-[2px] border-on-background pb-space-md mb-space-md">
                    <div class="flex flex-wrap items-center gap-space-sm">
                        <span
                            class="px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                            LEVEL 01 / FOUNDATION
                        </span>
                        <span class="font-headline-md text-headline-md uppercase tracking-tight text-on-surface">
                            KELAS X — DASAR PEMROGRAMAN &amp; KOMPUTASI
                        </span>
                    </div>
                    <span class="font-code-inline text-code-inline text-on-surface-variant flex items-center gap-1">
                        <span class="material-symbols-outlined text-[16px]">folder_zip</span>
                        ARCHIVE STATUS: 12 MODULES COMPLETE
                    </span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-4xl mb-space-md">
                    Membangun pondasi logika algoritma, pemahaman arsitektur komputer, dasar sistem operasi,
                    dan pembuatan web statis semantik murni tanpa framework abstraksi. Termasuk mata pelajaran
                    umum (A1-A7), kelompok B (B1-B4), dan kejuruan R2 (DDPK PPLG).
                </p>
                <!-- Info Kategori Kelas X -->
                <div class="flex flex-wrap gap-2">
                    <span
                        class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                        7 MAPEL UMUM (A1-A7)
                    </span>
                    <span
                        class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                        4 MAPEL KELOMPOK B (B1-B4)
                    </span>
                    <span
                        class="font-label-sm text-label-sm uppercase px-3 py-1 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                        1 MAPEL KEJURUAN (R2)
                    </span>
                    <span
                        class="font-label-sm text-label-sm uppercase px-3 py-1 bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                        TOTAL: 12 MAPEL
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg" id="grid-kelas-x">

                <!-- ===== A1 – Pendidikan Agama dan Budi Pekerti ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-x" data-subject="A1 – Pendidikan Agama dan Budi Pekerti"
                    data-keywords="agama budi pekerti akhlak moral etika spiritual karakter">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A1</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">menu_book</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Pend. Agama &amp;
                                    Budi Pekerti</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Pembentukan karakter, akhlak mulia, etika spiritual, dan pengamalan nilai keagamaan dalam
                                kehidupan sehari-hari.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Akhlak
                                    &amp; Moral</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Etika
                                    Sosial</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Praktik
                                    Ibadah</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A2 – PPKn ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-x" data-subject="A2 – Pendidikan Pancasila dan Kewarganegaraan (PPKn)"
                    data-keywords="ppkn pancasila kewarganegaraan nkri uud ham demokrasi">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A2</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">gavel</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">PPKn</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Memahami Pancasila, UUD 1945, NKRI, HAM, demokrasi, dan wawasan kebangsaan dalam konteks
                                global.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Pancasila &amp; UUD 1945</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> HAM
                                    &amp; Demokrasi</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Wawasan
                                    Nusantara</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A3 – Bahasa Indonesia ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-x" data-subject="A3 – Bahasa Indonesia"
                    data-keywords="bahasa indonesia literasi teks eksposisi negosiasi debat">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A3</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">translate</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Bahasa Indonesia
                                </h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Literasi membaca &amp; menulis teks eksposisi, negosiasi, debat, dan karya ilmiah sesuai
                                kaidah bahasa.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Teks
                                    Eksposisi</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Negosiasi &amp; Debat</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Karya
                                    Ilmiah</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A4 – PJOK ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-x" data-subject="A4 – Pendidikan Jasmani, Olah Raga & Kesehatan (PJOK)"
                    data-keywords="pjok olahraga jasmani kesehatan kebugaran bola atletik">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A4</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">sports_soccer</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">PJOK</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Pengembangan kebugaran jasmani, keterampilan olahraga, sportivitas, dan pola hidup sehat.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Kebugaran Jasmani</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Permainan Bola</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Atletik
                                    Dasar</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A5 – Sejarah Indonesia ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-x" data-subject="A5 – Sejarah Indonesia"
                    data-keywords="sejarah indonesia hindu buddha islam kolonial kemerdekaan">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A5</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">history_edu</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Sejarah Indonesia
                                </h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Menelusuri perjalanan bangsa dari masa Hindu-Buddha, Islam, kolonialisme, hingga
                                kemerdekaan.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Hindu-Buddha &amp; Islam</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Kolonialisme</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Pergerakan Nasional</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A6 – Seni Budaya ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-x" data-subject="A6 – Seni Budaya"
                    data-keywords="seni budaya musik tari rupa teater estetika">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A6</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">palette</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Seni Budaya</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Apresiasi dan ekspresi seni melalui musik, tari, seni rupa, dan teater sebagai wujud budaya
                                bangsa.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Seni
                                    Musik</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Seni
                                    Tari</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Seni
                                    Rupa &amp; Teater</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A7 – Bahasa Jawa (Muatan Lokal) ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-x" data-subject="A7 – Bahasa Jawa (Muatan Lokal)"
                    data-keywords="bahasa jawa muatan lokal aksara jawa unggah ungguh budaya jawa">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A7</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">MULOK</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">language</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Bahasa Jawa</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Pelestarian bahasa &amp; budaya Jawa: aksara, unggah-ungguh, tembang, dan sastra Jawa.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Aksara
                                    Jawa</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Unggah-Ungguh</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Tembang
                                    &amp; Sastra</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MUATAN LOKAL</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== B1 – Matematika ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-x" data-subject="B1 – Matematika"
                    data-keywords="matematika aljabar trigonometri logika vektor statistik">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">B1</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">KELOMPOK
                                B</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-tertiary text-[24px]">calculate</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Matematika</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Aljabar, fungsi, trigonometri, vektor, logika matematika, dan statistika dasar untuk
                                komputasi.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Aljabar &amp; Fungsi</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Trigonometri</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span> Logika
                                    &amp; Statistika</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">KELOMPOK B</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== B2 – Bahasa Inggris ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-x" data-subject="B2 – Bahasa Inggris"
                    data-keywords="bahasa inggris english reading writing listening speaking grammar">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">B2</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">KELOMPOK
                                B</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-tertiary text-[24px]">abc</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Bahasa Inggris</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Keterampilan membaca, menulis, mendengar, dan berbicara bahasa Inggris teknis &amp;
                                sehari-hari.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Reading &amp; Writing</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Listening &amp; Speaking</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Technical English</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">KELOMPOK B</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== B3 – Informatika ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-x" data-subject="B3 – Informatika"
                    data-keywords="informatika tik komputer berpikir komputasional jaringan analisis data">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">B3</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">KELOMPOK
                                B</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-tertiary text-[24px]">computer</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Informatika</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Berpikir komputasional, sistem komputer, jaringan, analisis data, dan dampak sosial
                                teknologi.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Berpikir Komputasional</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span> Sistem
                                    &amp; Jaringan</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Analisis Data</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">KELOMPOK B</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== B4 – PIPAS ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-x" data-subject="B4 – PIPAS (Projek IPA & IPS)"
                    data-keywords="pipas ipa ips projek sains sosial ilmiah observasi">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">B4</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">KELOMPOK
                                B</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-tertiary text-[24px]">science</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">PIPAS</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Projek interdisipliner IPA &amp; IPS: metode ilmiah, observasi, dan pemecahan masalah
                                kontekstual.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span> Metode
                                    Ilmiah</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Observasi &amp; Eksperimen</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span> Projek
                                    Kontekstual</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">KELOMPOK B</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== R2 – DDPK / Dasar-dasar Keahlian PPLG ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all ring-2 ring-primary ring-offset-2"
                    data-kelas="kelas-x"
                    data-subject="R2 – DDPK / Dasar-dasar Keahlian PPLG (Pemrograman Berorientasi Objek)"
                    data-keywords="ddpk pplg rpl pemrograman berorientasi objek oop class object inheritance polymorphism encapsulation algoritma flowchart">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-primary-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">R2</span>
                            <span
                                class="px-2 py-0.5 bg-on-background text-inverse-on-surface border border-on-background font-label-sm text-label-sm font-bold">KEJURUAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">code_blocks</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">DDPK / Dasar
                                    Keahlian PPLG</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Fondasi kejuruan PPLG: algoritma, flowchart, dasar PBO (class, object, inheritance,
                                polymorphism, encapsulation).
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Algoritma &amp; Flowchart</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Class,
                                    Object &amp; Method</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Inheritance, Polymorphism, Encapsulation</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MATA PELAJARAN
                            KEJURUAN</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

            </div>
        </section>

        <!-- ================= SECTION KELAS XI ================= -->
        <section class="curriculum-tier flex flex-col gap-space-lg" id="section-kelas-xi" data-tier="kelas-xi">
            <div
                class="bg-surface-container border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg relative">
                <div
                    class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md border-b-[2px] border-on-background pb-space-md mb-space-md">
                    <div class="flex flex-wrap items-center gap-space-sm">
                        <span
                            class="px-3 py-1 bg-secondary-container text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                            LEVEL 02 / DEVELOPMENT
                        </span>
                        <span class="font-headline-md text-headline-md uppercase tracking-tight text-on-surface">
                            KELAS XI — PENGEMBANGAN WEB &amp; APLIKASI TERSTRUKTUR
                        </span>
                    </div>
                    <span class="font-code-inline text-code-inline text-on-surface-variant flex items-center gap-1">
                        <span class="material-symbols-outlined text-[16px]">account_tree</span>
                        ARCHIVE STATUS: 13 MODULES COMPLETE
                    </span>
                </div>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-4xl mb-space-md">
                    Pengembangan web dinamis, paradigma OOP, basis data, pemrograman mobile, dan multimedia.
                    Mata pelajaran umum (A1-A7, B1-B2) + kelompok kejuruan RPL/PPLG (R3-R6, B7R, B9R1).
                </p>
                <!-- Info Kategori Kelas XI -->
                <div class="flex flex-wrap gap-2">
                    <span
                        class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                        5 MAPEL UMUM (A1, A2, A3, A4, A7)
                    </span>
                    <span
                        class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                        2 MAPEL KELOMPOK B (B1, B2)
                    </span>
                    <span
                        class="font-label-sm text-label-sm uppercase px-3 py-1 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                        6 MAPEL KEJURUAN (R3-R6, B7R, B9R1)
                    </span>
                    <span
                        class="font-label-sm text-label-sm uppercase px-3 py-1 bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                        TOTAL: 13 MAPEL
                    </span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg" id="grid-kelas-xi">

                <!-- ===== A1 – Pendidikan Agama ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xi" data-subject="A1 – Pendidikan Agama dan Budi Pekerti (Kelas XI)"
                    data-keywords="agama budi pekerti akhlak moral etika spiritual karakter kelas 11">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A1</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">menu_book</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Pend. Agama &amp;
                                    Budi Pekerti</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Pendalaman akhlak, etika profesional, toleransi, dan pengamalan nilai keagamaan di dunia
                                kerja.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Etika
                                    Profesi</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Toleransi Beragama</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Akhlak
                                    di Dunia Kerja</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A2 – PPKn ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xi" data-subject="A2 – Pendidikan Pancasila dan Kewarganegaraan (PPKn) (Kelas XI)"
                    data-keywords="ppkn pancasila kewarganegaraan nkri uud ham demokrasi kelas 11">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A2</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">gavel</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">PPKn</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Dinamika demokrasi, sistem hukum, HAM, dan geopolitik Indonesia dalam perspektif global.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Dinamika Demokrasi</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Sistem
                                    Hukum &amp; HAM</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Geopolitik Indonesia</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A3 – Bahasa Indonesia ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xi" data-subject="A3 – Bahasa Indonesia (Kelas XI)"
                    data-keywords="bahasa indonesia literasi teks prosedur eksplanasi ceramah karya ilmiah kelas 11">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A3</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">translate</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Bahasa Indonesia
                                </h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Teks prosedur, eksplanasi, ceramah, dan penyusunan karya ilmiah dengan penalaran kritis.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Teks
                                    Prosedur &amp; Eksplanasi</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Teks
                                    Ceramah</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Karya
                                    Ilmiah</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A4 – PJOK ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xi" data-subject="A4 – Pendidikan Jasmani, Olah Raga & Kesehatan (PJOK) (Kelas XI)"
                    data-keywords="pjok olahraga jasmani kesehatan kebugaran bola atletik beladiri kelas 11">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A4</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">sports_soccer</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">PJOK</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Kebugaran lanjutan, olahraga tim, beladiri, dan penerapan pola hidup sehat aktif.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Kebugaran Lanjutan</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Olahraga Tim</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Beladiri &amp; Senam</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A7 – Bahasa Jawa ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xi" data-subject="A7 – Bahasa Jawa (Muatan Lokal) (Kelas XI)"
                    data-keywords="bahasa jawa muatan lokal aksara jawa unggah ungguh budaya jawa tembang kelas 11">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A7</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">MULOK</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">language</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Bahasa Jawa</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Sastra Jawa klasik &amp; modern, pidato adat, dan pelestarian budaya Jawa di era digital.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Sastra
                                    Jawa Klasik</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Pidato
                                    Adat</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Budaya
                                    Jawa Digital</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MUATAN LOKAL</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== B1 – Matematika ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xi" data-subject="B1 – Matematika (Kelas XI)"
                    data-keywords="matematika aljabar trigonometri logika vektor statistik limit turunan kelas 11">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">B1</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">KELOMPOK
                                B</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-tertiary text-[24px]">calculate</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Matematika</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Limit fungsi, turunan, matriks, barisan-deret, dan penerapannya dalam pemecahan masalah.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span> Limit
                                    &amp; Turunan</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Matriks</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Barisan &amp; Deret</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">KELOMPOK B</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== B2 – Bahasa Inggris ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xi" data-subject="B2 – Bahasa Inggris (Kelas XI)"
                    data-keywords="bahasa inggris english reading writing listening speaking grammar analytical exposition kelas 11">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">B2</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">KELOMPOK
                                B</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-tertiary text-[24px]">abc</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Bahasa Inggris</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Analytical exposition, hortatory, dan English for specific purposes (technical writing).
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Analytical Exposition</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Hortatory Exposition</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Technical Writing</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">KELOMPOK B</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== R3 – KK Pemrograman Basis Teks, Grafis & Multimedia ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all ring-2 ring-secondary ring-offset-2"
                    data-kelas="kelas-xi" data-subject="R3 – KK Pemrograman Basis Teks, Grafis & Multimedia"
                    data-keywords="r3 multimedia grafis teks pemrograman c++ python manipulasi gambar audio video animasi">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-secondary-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">R3</span>
                            <span
                                class="px-2 py-0.5 bg-on-background text-inverse-on-surface border border-on-background font-label-sm text-label-sm font-bold">KEJURUAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-secondary text-[24px]">graphic_eq</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Pemrograman Teks,
                                    Grafis &amp; Multimedia</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Manipulasi teks, grafis 2D, audio, dan video melalui pemrograman console &amp; GUI.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span>
                                    Manipulasi Teks &amp; String</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span>
                                    Grafis 2D &amp; Canvas</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> Audio
                                    &amp; Video Processing</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MATA PELAJARAN
                            KEJURUAN</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-primary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== R4 – KK Pemrograman Web ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all ring-2 ring-secondary ring-offset-2"
                    data-kelas="kelas-xi" data-subject="R4 – KK Pemrograman Web"
                    data-keywords="r4 pemrograman web php mysql laravel codeigniter html css javascript frontend backend">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-secondary-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">R4</span>
                            <span
                                class="px-2 py-0.5 bg-on-background text-inverse-on-surface border border-on-background font-label-sm text-label-sm font-bold">KEJURUAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-secondary text-[24px]">web</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Pemrograman Web
                                </h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Pengembangan web dinamis: HTML, CSS, JS, PHP, MySQL, dan framework MVC dasar.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> HTML,
                                    CSS &amp; JavaScript</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> PHP
                                    &amp; MySQL</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span>
                                    Framework MVC Dasar</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MATA PELAJARAN
                            KEJURUAN</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-primary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== R5 – KK Pemrograman Perangkat Bergerak ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all ring-2 ring-secondary ring-offset-2"
                    data-kelas="kelas-xi" data-subject="R5 – KK Pemrograman Perangkat Bergerak"
                    data-keywords="r5 mobile pemrograman perangkat bergerak android flutter react native kotlin dart">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-secondary-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">R5</span>
                            <span
                                class="px-2 py-0.5 bg-on-background text-inverse-on-surface border border-on-background font-label-sm text-label-sm font-bold">KEJURUAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-secondary text-[24px]">smartphone</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Pemrograman
                                    Perangkat Bergerak</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Pengembangan aplikasi mobile Android/iOS: UI native, state management, dan API integration.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span>
                                    Android / Flutter Dasar</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> UI
                                    Mobile &amp; Navigation</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> REST
                                    API Integration</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MATA PELAJARAN
                            KEJURUAN</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-primary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== R6 – KK Basis Data ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all ring-2 ring-secondary ring-offset-2"
                    data-kelas="kelas-xi" data-subject="R6 – KK Basis Data"
                    data-keywords="r6 basis data database mysql postgresql normalization sql query erd relational">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-secondary-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">R6</span>
                            <span
                                class="px-2 py-0.5 bg-on-background text-inverse-on-surface border border-on-background font-label-sm text-label-sm font-bold">KEJURUAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-secondary text-[24px]">database</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Basis Data</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Perancangan &amp; pengelolaan basis data relasional: ERD, normalisasi, query kompleks,
                                indexing.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> ERD
                                    &amp; Normalisasi</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> Query
                                    Kompleks &amp; JOIN</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span>
                                    Indexing &amp; Optimization</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MATA PELAJARAN
                            KEJURUAN</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-primary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== B7R – Proyek Kreatif dan Kewirausahaan (PKK) ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all ring-2 ring-secondary ring-offset-2"
                    data-kelas="kelas-xi" data-subject="B7R – Proyek Kreatif dan Kewirausahaan (PKK)"
                    data-keywords="pkk proyek kreatif kewirausahaan bisnis startup produk wirausaha ide bisnis digital">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-secondary-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">B7R</span>
                            <span
                                class="px-2 py-0.5 bg-on-background text-inverse-on-surface border border-on-background font-label-sm text-label-sm font-bold">KEJURUAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-secondary text-[24px]">lightbulb</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Proyek Kreatif
                                    &amp; Kewirausahaan</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Merancang ide bisnis digital, validasi produk, business model canvas, dan pitching.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> Ide
                                    &amp; Validasi Produk</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span>
                                    Business Model Canvas</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span>
                                    Pitching &amp; Presentasi</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MATA PELAJARAN
                            KEJURUAN</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-primary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== B9R1 – MP Basis Data (Pilihan Kejuruan) ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all ring-2 ring-secondary ring-offset-2"
                    data-kelas="kelas-xi" data-subject="B9R1 – MP Basis Data (Mata Pelajaran Pilihan Kejuruan)"
                    data-keywords="b9r1 basis data lanjutan database nosql mongodb redis big data data warehouse">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-secondary-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">B9R1</span>
                            <span
                                class="px-2 py-0.5 bg-on-background text-inverse-on-surface border border-on-background font-label-sm text-label-sm font-bold">PILIHAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-secondary text-[24px]">storage</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">MP Basis Data
                                    Lanjutan</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Basis data lanjutan: NoSQL, MongoDB, Redis, data warehouse, dan konsep big data.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> NoSQL
                                    &amp; MongoDB</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> Redis
                                    &amp; Caching</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> Data
                                    Warehouse &amp; Big Data</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MATA PELAJARAN
                            PILIHAN</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-primary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

            </div>
        </section>

        <!-- ================= SECTION KELAS XII ================= -->
        <section class="curriculum-tier flex flex-col gap-space-lg" id="section-kelas-xii" data-tier="kelas-xii">
            <!-- Header Kelas XII -->
            <div
                class="bg-primary-container text-on-surface border-[4px] border-on-background shadow-[6px_6px_0px_#1c1b1b] p-space-md md:p-space-lg relative">
                <div
                    class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md border-b-[3px] border-on-background pb-space-md mb-space-md">
                    <div class="flex flex-wrap items-center gap-space-sm">
                        <span
                            class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                            LEVEL 03 / ADVANCED (CAPSTONE)
                        </span>
                        <span class="font-headline-md text-headline-md uppercase tracking-tight text-on-surface">
                            KELAS XII — KOMPETENSI KEAHLIAN &amp; KESIAPAN INDUSTRI
                        </span>
                    </div>
                    <span
                        class="font-code-inline text-code-inline text-on-surface bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-primary text-[18px]">verified</span>
                        INDUSTRY-READY GRADUATE
                    </span>
                </div>
                <p class="font-body-md text-body-md text-on-surface max-w-4xl font-medium mb-space-md">
                    Tahun puncak pemantapan kompetensi keahlian RPL/PPLG: pengembangan sistem informasi, aplikasi mobile,
                    web production-ready, multimedia lanjutan, kewirausahaan digital, dan portofolio siap industri.
                    Termasuk mata pelajaran umum, muatan lokal, serta kegiatan penunjang pengembangan diri.
                </p>
                <!-- Info Kategori Kelas XII -->
                <div class="flex flex-wrap gap-2">
                    <span
                        class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                        6 MAPEL KEJURUAN (R3-R6, B7R, B9R2)
                    </span>
                    <span
                        class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                        6 MAPEL UMUM &amp; MULOK (A1, A2, A3, B1, B2, ML)
                    </span>
                    <span
                        class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                        2 KEGIATAN PENUNJANG (BK, KEG)
                    </span>
                    <span
                        class="font-label-sm text-label-sm uppercase px-3 py-1 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                        TOTAL: 14 MAPEL
                    </span>
                </div>
            </div>

            <!-- Grid Kelas XII -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg" id="grid-kelas-xii">

                <!-- ============ KELOMPOK KEJURUAN RPL ============ -->
                <div class="col-span-full flex items-center gap-3 pt-space-sm">
                    <span
                        class="px-3 py-1 bg-on-background text-inverse-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        KELOMPOK KEJURUAN RPL
                    </span>
                    <div class="flex-1 h-[3px] bg-on-background"></div>
                </div>

                <!-- ===== R6 – KK Basis Data ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[4px] border-on-background shadow-[6px_6px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[8px_8px_0px_#1c1b1b] transition-all ring-2 ring-primary ring-offset-2"
                    data-kelas="kelas-xii" data-subject="R6 – KK Basis Data (Kelas XII)"
                    data-keywords="r6 basis data database lanjutan mysql postgresql big data data warehouse etl bi analytics nosql kelas 12">
                    <div>
                        <div
                            class="p-space-sm border-b-[3px] border-on-background bg-on-background text-inverse-on-surface flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-primary-fixed">R6 •
                                CORE</span>
                            <span
                                class="px-2 py-0.5 bg-primary-container text-on-surface border border-on-background font-label-sm text-label-sm font-bold">KEJURUAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[28px]">storage</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">KK Basis
                                    Data</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Perancangan &amp; pengelolaan database lanjutan: normalisasi, query kompleks, ETL pipeline,
                                data warehouse, dan Business Intelligence.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-on-background pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Normalisasi &amp; ERD Kompleks</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> ETL
                                    &amp; Data Warehouse</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Business Intelligence</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[3px] border-on-background bg-surface-container-high flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">KEJURUAN CORE</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== R5 – KK Pemrograman Perangkat Bergerak ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[4px] border-on-background shadow-[6px_6px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[8px_8px_0px_#1c1b1b] transition-all ring-2 ring-primary ring-offset-2"
                    data-kelas="kelas-xii" data-subject="R5 – KK Pemrograman Perangkat Bergerak (Kelas XII)"
                    data-keywords="r5 mobile android flutter react native kotlin firebase push notification playstore publishing kelas 12">
                    <div>
                        <div
                            class="p-space-sm border-b-[3px] border-on-background bg-on-background text-inverse-on-surface flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-primary-fixed">R5 •
                                CORE</span>
                            <span
                                class="px-2 py-0.5 bg-primary-container text-on-surface border border-on-background font-label-sm text-label-sm font-bold">KEJURUAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[28px]">smartphone</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">KK
                                    Pemrograman Perangkat Bergerak</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Pengembangan aplikasi Android/Mobile production-ready: UI/UX mobile, state management,
                                integrasi API, &amp; publishing.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-on-background pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Flutter
                                    / React Native</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Firebase &amp; Push Notif</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Publishing Play Store</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[3px] border-on-background bg-surface-container-high flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">KEJURUAN CORE</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== R4 – KK Pemrograman Web ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[4px] border-on-background shadow-[6px_6px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[8px_8px_0px_#1c1b1b] transition-all ring-2 ring-primary ring-offset-2"
                    data-kelas="kelas-xii" data-subject="R4 – KK Pemrograman Web (Kelas XII)"
                    data-keywords="r4 pemrograman web lanjutan laravel react rest api fullstack deployment docker ci cd devops kelas 12">
                    <div>
                        <div
                            class="p-space-sm border-b-[3px] border-on-background bg-on-background text-inverse-on-surface flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-primary-fixed">R4 •
                                CORE</span>
                            <span
                                class="px-2 py-0.5 bg-primary-container text-on-surface border border-on-background font-label-sm text-label-sm font-bold">KEJURUAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[28px]">web</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">KK
                                    Pemrograman Web</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Pembuatan website/web application production-ready: fullstack framework, REST API, auth, dan
                                deployment.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-on-background pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Fullstack Laravel + React</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> REST
                                    API &amp; Auth</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Docker
                                    &amp; CI/CD Deploy</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[3px] border-on-background bg-surface-container-high flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">KEJURUAN CORE</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== R3 – KK Pemrograman Basis Teks, Grafis & Multimedia ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[4px] border-on-background shadow-[6px_6px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[8px_8px_0px_#1c1b1b] transition-all ring-2 ring-primary ring-offset-2"
                    data-kelas="kelas-xii" data-subject="R3 – KK Pemrograman Basis Teks, Grafis & Multimedia (Kelas XII)"
                    data-keywords="r3 multimedia grafis teks pemrograman lanjutan 3d animasi game engine pipeline konten digital kelas 12">
                    <div>
                        <div
                            class="p-space-sm border-b-[3px] border-on-background bg-on-background text-inverse-on-surface flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-primary-fixed">R3 •
                                CORE</span>
                            <span
                                class="px-2 py-0.5 bg-primary-container text-on-surface border border-on-background font-label-sm text-label-sm font-bold">KEJURUAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[28px]">graphic_eq</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">KK
                                    Pemrograman Teks, Grafis &amp; Multimedia</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Pengembangan software berbasis teks, grafis, dan multimedia: grafis 3D, animasi, game
                                engine, &amp; pipeline produksi konten.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-on-background pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Grafis
                                    3D &amp; Animasi</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Game
                                    Engine Dasar</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Pipeline Konten Digital</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[3px] border-on-background bg-surface-container-high flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">KEJURUAN CORE</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== B7R – PKK ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[4px] border-on-background shadow-[6px_6px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[8px_8px_0px_#1c1b1b] transition-all ring-2 ring-secondary ring-offset-2"
                    data-kelas="kelas-xii" data-subject="B7R – Kreativitas, Inovasi & Kewirausahaan (PKK) (Kelas XII)"
                    data-keywords="pkk pkk kewirausahaan kreativitas inovasi produk kreatif bisnis digital startup pitching monetisasi kelas 12">
                    <div>
                        <div
                            class="p-space-sm border-b-[3px] border-on-background bg-on-background text-inverse-on-surface flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-secondary-fixed">B7R •
                                FINAL</span>
                            <span
                                class="px-2 py-0.5 bg-secondary-container text-on-surface border border-on-background font-label-sm text-label-sm font-bold">KEJURUAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-secondary text-[28px]">rocket_launch</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">PKK —
                                    Kreativitas, Inovasi &amp; Kewirausahaan</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Produk kreatif &amp; kewirausahaan bidang IT: validasi ide, business model, monetisasi, dan
                                pitching startup.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-on-background pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span>
                                    Produk Kreatif IT</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span>
                                    Business Model &amp; Monetisasi</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span>
                                    Pitching &amp; Scale-Up</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[3px] border-on-background bg-surface-container-high flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">KEJURUAN FINAL</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-primary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== B9R2 – MP Sistem Informasi ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[4px] border-on-background shadow-[6px_6px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[8px_8px_0px_#1c1b1b] transition-all ring-2 ring-secondary ring-offset-2"
                    data-kelas="kelas-xii" data-subject="B9R2 – MP Sistem Informasi (Mata Pelajaran Pilihan Kejuruan)"
                    data-keywords="b9r2 sistem informasi enterprise erp crm business process analyst system design uml kelas 12">
                    <div>
                        <div
                            class="p-space-sm border-b-[3px] border-on-background bg-on-background text-inverse-on-surface flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-secondary-fixed">B9R2 •
                                PILIHAN</span>
                            <span
                                class="px-2 py-0.5 bg-secondary-container text-on-surface border border-on-background font-label-sm text-label-sm font-bold">PILIHAN</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-secondary text-[28px]">insights</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">MP Sistem
                                    Informasi</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Konsep sistem informasi enterprise: analisis proses bisnis, perancangan sistem (UML), ERP,
                                &amp; CRM.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-on-background pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span>
                                    Business Process Analyst</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> UML
                                    &amp; System Design</div>
                                <div class="flex items-center gap-2"><span class="text-secondary font-bold">›</span> ERP
                                    &amp; CRM Konsep</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[3px] border-on-background bg-surface-container-high flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase font-bold text-on-surface">MATA PELAJARAN
                            PILIHAN</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-primary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ============ KELOMPOK MATA PELAJARAN UMUM ============ -->
                <div class="col-span-full flex items-center gap-3 pt-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        KELOMPOK MATA PELAJARAN UMUM
                    </span>
                    <div class="flex-1 h-[3px] bg-on-background"></div>
                </div>

                <!-- ===== B1 – Matematika ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xii" data-subject="B1 – Matematika (Kelas XII)"
                    data-keywords="matematika integral peluang statistika inferensial aplikasi teknologi kelas 12">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">B1</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-tertiary text-[24px]">calculate</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Matematika</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Integral, peluang, statistika inferensial, dan aplikasi matematika dalam teknologi.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Integral</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Peluang &amp; Statistika</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Aplikasi Teknologi</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== B2 – Bahasa Inggris ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xii" data-subject="B2 – Bahasa Inggris (Kelas XII)"
                    data-keywords="bahasa inggris english job application cv interview professional communication kelas 12">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">B2</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-tertiary text-[24px]">abc</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Bahasa Inggris</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Job application, CV, interview, dan English for professional communication.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span> Job
                                    Application &amp; CV</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Interview English</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Professional Communication</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A3 – Bahasa Indonesia ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xii" data-subject="A3 – Bahasa Indonesia (Kelas XII)"
                    data-keywords="bahasa indonesia surat lamaran kritik sastra teks editorial karya ilmiah kelas 12">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A3</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">translate</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Bahasa Indonesia
                                </h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Surat lamaran kerja, teks editorial, kritik sastra, dan karya ilmiah sebagai bekal karier.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Surat
                                    Lamaran Kerja</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Teks
                                    Editorial</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Kritik
                                    &amp; Esai Sastra</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A1 – Pendidikan Agama ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xii" data-subject="A1 – Pendidikan Agama dan Budi Pekerti (Kelas XII)"
                    data-keywords="agama budi pekerti akhlak moral etika spiritual refleksi kelas 12">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A1</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">menu_book</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Pend. Agama &amp;
                                    Budi Pekerti</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Refleksi spiritual, tanggung jawab sosial, dan etika profesi sebagai bekal dunia kerja.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Refleksi Spiritual</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Etika
                                    Profesi</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Tanggung Jawab Sosial</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== A2 – Pendidikan Pancasila ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xii" data-subject="A2 – Pendidikan Pancasila (Kelas XII)"
                    data-keywords="ppkn pancasila kewarganegaraan nkri uud ham demokrasi ketatanegaraan kelas 12">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">A2</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">UMUM</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">gavel</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Pendidikan
                                    Pancasila</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Dinamika ketatanegaraan, integrasi nasional, dan peran Indonesia di kancah global.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Ketatanegaraan</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Integrasi Nasional</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Peran
                                    Global Indonesia</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MAPEL UMUM</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== ML – Muatan Lokal Bahasa Jawa ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xii" data-subject="ML – Muatan Lokal Bahasa Jawa (Kelas XII)"
                    data-keywords="mulok bahasa jawa muatan lokal aksara jawa unggah ungguh budaya jawa sastra pewayangan kelas 12">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">ML</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">MULOK</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">language</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Muatan Lokal —
                                    Bahasa Jawa</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Sastra Jawa modern, pewayangan, dan preservasi budaya Jawa di era industri 4.0.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Sastra
                                    Jawa Modern</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span>
                                    Pewayangan</div>
                                <div class="flex items-center gap-2"><span class="text-primary font-bold">›</span> Budaya
                                    Jawa 4.0</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">MUATAN LOKAL</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ============ KEGIATAN PENUNJANG ============ -->
                <div class="col-span-full flex items-center gap-3 pt-space-sm">
                    <span
                        class="px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        KEGIATAN PENUNJANG &amp; PENGEMBANGAN DIRI
                    </span>
                    <div class="flex-1 h-[3px] bg-on-background"></div>
                </div>

                <!-- ===== Bimbingan Konseling (BK) ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xii" data-subject="Bimbingan Konseling (BK)"
                    data-keywords="bk bimbingan konseling karier psikologi konseling pengembangan diri mental health">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-tertiary-fixed flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">BK</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">PENUNJANG</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-tertiary text-[24px]">psychology</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Bimbingan Konseling
                                </h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Pendampingan karier, konseling pribadi, dan pengembangan mental health siswa.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Konseling Karier</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Konseling Pribadi</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span> Mental
                                    Health</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">PENUNJANG</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

                <!-- ===== Upacara, Literasi, Rabu Bersih/Sehat ===== -->
                <article
                    class="subject-card bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col justify-between hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] transition-all"
                    data-kelas="kelas-xii" data-subject="Upacara Bendera, Literasi & Rabu Bersih/Sehat"
                    data-keywords="upacara bendera literasi rabu bersih sehat kebersihan karakter disiplin nasionalisme">
                    <div>
                        <div
                            class="p-space-sm border-b-[2px] border-on-background bg-tertiary-fixed flex items-center justify-between">
                            <span class="font-label-sm text-label-sm font-bold uppercase text-on-surface">KEG</span>
                            <span
                                class="px-2 py-0.5 bg-surface text-on-surface border border-on-background font-label-sm text-label-sm">PENUNJANG</span>
                        </div>
                        <div class="p-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-tertiary text-[24px]">flag</span>
                                <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface">Upacara, Literasi
                                    &amp; Rabu Bersih</h3>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Kegiatan rutin pembentuk karakter: nasionalisme, literasi, kebersihan, dan kesehatan.
                            </p>
                            <div
                                class="space-y-1.5 border-t-[2px] border-surface-container-highest pt-space-sm font-code-inline text-code-inline text-on-surface">
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Upacara Bendera</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span>
                                    Literasi Pagi</div>
                                <div class="flex items-center gap-2"><span class="text-tertiary font-bold">›</span> Rabu
                                    Bersih/Sehat</div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="p-space-md border-t-[2px] border-on-background bg-surface-container-low flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">PENUNJANG</span>
                        <button
                            class="font-label-sm text-label-sm uppercase font-bold px-3 py-1.5 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-1">
                            BUKA MODUL <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                        </button>
                    </div>
                </article>

            </div>

            <!-- Prominent Summary Banner -->
            <div
                class="bg-surface border-[4px] border-on-background shadow-[8px_8px_0px_#1c1b1b] p-space-md md:p-space-lg flex flex-col md:flex-row items-center justify-between gap-space-lg mt-space-md">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-14 h-14 bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[32px] text-on-surface">workspace_premium</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider">
                            CAPSTONE KELAS XII
                        </div>
                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            SIAP KERJA DI INDUSTRI SOFTWARE?
                        </h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant max-w-xl">
                            Kelas XII memfokuskan pada proyek akhir berskala produksi, portofolio digital,
                            dan persiapan PKL untuk memasuki industri teknologi.
                        </p>
                    </div>
                </div>
                <a class="w-full md:w-auto font-headline-sm text-label-lg uppercase bg-secondary-container text-on-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] px-6 py-4 hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-space-xs text-center shrink-0"
                    data-path="capstone" href="#">
                    LIHAT PROYEK CAPSTONE →
                </a>
            </div>
        </section>

        <!-- Technical Statistics Matrix -->
        <section
            class="border-[3px] border-on-background bg-surface-container-low p-space-md shadow-[4px_4px_0px_#1c1b1b]">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md text-center">
                <div class="p-space-sm bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                    <span class="font-headline-lg text-headline-lg text-primary font-bold block">03</span>
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant font-bold">TAHUN LEVEL
                        TINGKAT</span>
                </div>
                <div class="p-space-sm bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                    <span class="font-headline-lg text-headline-lg text-on-surface font-bold block">39</span>
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant font-bold">TOTAL MATA
                        PELAJARAN</span>
                </div>
                <div class="p-space-sm bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                    <span class="font-headline-lg text-headline-lg text-tertiary font-bold block">100%</span>
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant font-bold">DOKUMENTASI KODE
                        LENGKAP</span>
                </div>
                <div class="p-space-sm bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                    <span class="font-headline-lg text-headline-lg text-secondary font-bold block">05</span>
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant font-bold">PILAR INTI ATP
                        RESMI</span>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        // ================= STATE =================
        let currentFilter = 'all';
        let currentSearch = '';

        // ================= FILTER KELAS =================
        function filterCurriculum(filter) {
            currentFilter = filter;

            // Update tombol aktif
            document.querySelectorAll('.filter-btn').forEach(btn => {
                const isActive = btn.dataset.filter === filter;
                btn.classList.toggle('active-filter', isActive);
                btn.classList.toggle('bg-on-background', isActive);
                btn.classList.toggle('text-inverse-on-surface', isActive);
                btn.classList.toggle('bg-surface-container-lowest', !isActive);
                btn.classList.toggle('text-on-surface', !isActive);
                btn.classList.toggle('hover:bg-secondary-container', !isActive);
            });

            applyFilters();
        }

        // ================= SEARCH =================
        function handleSearch(value) {
            currentSearch = value.toLowerCase().trim();
            document.getElementById('clear-search').classList.toggle('hidden', !currentSearch);
            applyFilters();
        }

        function clearSearch() {
            document.getElementById('search-input').value = '';
            currentSearch = '';
            document.getElementById('clear-search').classList.add('hidden');
            applyFilters();
        }

        // ================= APPLY FILTERS =================
        function applyFilters() {
            const sections = document.querySelectorAll('.curriculum-tier');
            let totalVisible = 0;

            sections.forEach(section => {
                const tier = section.dataset.tier;
                const cards = section.querySelectorAll('.subject-card');
                let visibleInSection = 0;

                cards.forEach(card => {
                    const matchKelas = currentFilter === 'all' || card.dataset.kelas === currentFilter;
                    const searchable = (card.dataset.subject + ' ' + card.dataset.keywords).toLowerCase();
                    const matchSearch = !currentSearch || searchable.includes(currentSearch);

                    if (matchKelas && matchSearch) {
                        card.style.display = '';
                        visibleInSection++;
                        totalVisible++;
                    } else {
                        card.style.display = 'none';
                    }
                });

                // Tampilkan/sembunyikan section
                section.style.display = visibleInSection > 0 ? '' : 'none';
            });

            // Info hasil pencarian
            const info = document.getElementById('search-result-info');
            if (currentSearch) {
                info.classList.remove('hidden');
                info.textContent = `// Menampilkan ${totalVisible} mata pelajaran untuk pencarian: "${currentSearch}"`;
            } else {
                info.classList.add('hidden');
            }
        }

        // ================= INISIALISASI =================
        document.addEventListener('DOMContentLoaded', () => {
            applyFilters();
        });
    </script>
@endsection
