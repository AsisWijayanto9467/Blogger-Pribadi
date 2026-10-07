@extends("layouts.main")

@section("style")
<style>
    /* ============ SIDEBAR STICKY ============ */
    .toc-sidebar {
        position: sticky;
        top: 6rem;
        max-height: calc(100vh - 8rem);
        overflow-y: auto;
    }
    .toc-sidebar::-webkit-scrollbar { width: 6px; }
    .toc-sidebar::-webkit-scrollbar-thumb { background: #1c1b1b; border: 1px solid #1c1b1b; }
    .toc-sidebar::-webkit-scrollbar-track { background: #f0edec; }

    /* ============ ACTIVE TOC LINK ============ */
    .toc-link.active {
        background: #c9e6ff;
        color: #1c1b1b;
        font-weight: 700;
        transform: translateX(4px);
        box-shadow: 3px 3px 0px #1c1b1b;
    }

    /* ============ SCROLL BEHAVIOR ============ */
    html { scroll-behavior: smooth; scroll-padding-top: 6rem; }

    /* ============ AKSARA JAWA BLOCK ============ */
    .aksara-block {
        background: #fcf9f8;
        border: 2px solid #1c1b1b;
        border-left: 8px solid #57a8dd;
        padding: 1rem 1.25rem;
        font-family: 'Noto Sans Javanese', 'Javanese Text', 'DM Sans', serif;
        font-size: 32px;
        line-height: 1.6;
        text-align: center;
        box-shadow: 3px 3px 0px #1c1b1b;
        color: #1c1b1b;
        letter-spacing: 0.3em;
    }

    /* ============ TEMBANG / VERSE BLOCK ============ */
    .tembang-block {
        background: #1c1b1b;
        color: #c9e6ff;
        padding: 1.25rem 1.5rem;
        border: 3px solid #1c1b1b;
        box-shadow: 5px 5px 0px #57a8dd;
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        line-height: 1.8;
        margin: 0.5rem 0;
        position: relative;
    }
    .tembang-block::before {
        content: '♪';
        position: absolute;
        top: 4px;
        right: 10px;
        color: #57a8dd;
        font-size: 16px;
        font-weight: 900;
    }
    .tembang-block .boxed {
        display: inline-block;
        border: 2px solid #ffd167;
        padding: 4px 12px;
        color: #ffd167;
        font-weight: 700;
    }

    /* ============ QUOTE BLOCK ============ */
    .quote-block {
        background: #fcf9f8;
        border: 2px solid #1c1b1b;
        border-left: 8px solid #57a8dd;
        padding: 0.75rem 1rem;
        font-family: 'DM Sans', sans-serif;
        font-size: 14px;
        line-height: 1.7;
        box-shadow: 3px 3px 0px #1c1b1b;
    }
    .quote-block::before {
        content: '❝';
        color: #57a8dd;
        font-size: 22px;
        font-weight: 900;
        margin-right: 6px;
        vertical-align: middle;
    }

    /* ============ DIAGRAM BOX ============ */
    .diagram-box {
        background: #fcf9f8;
        border: 2px solid #1c1b1b;
        padding: 1rem;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        line-height: 1.6;
        overflow-x: auto;
        white-space: pre;
        box-shadow: 3px 3px 0px #1c1b1b;
    }

    /* ============ ACCORDION ============ */
    details.accordion-card {
        border: 2px solid #1c1b1b;
        background: #ffffff;
        box-shadow: 3px 3px 0px #1c1b1b;
        transition: all 0.2s ease;
    }
    details.accordion-card[open] { box-shadow: 5px 5px 0px #57a8dd; }
    details.accordion-card summary {
        cursor: pointer;
        list-style: none;
        padding: 0.85rem 1rem;
        font-family: 'JetBrains Mono', monospace;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 0.05em;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #c9e6ff;
        border-bottom: 2px solid transparent;
    }
    details.accordion-card[open] summary { border-bottom: 2px solid #1c1b1b; }
    details.accordion-card summary::-webkit-details-marker { display: none; }
    details.accordion-card summary::after {
        content: '+';
        font-size: 18px;
        font-weight: 900;
        transition: transform 0.2s;
    }
    details.accordion-card[open] summary::after { content: '−'; }

    /* ============ PROGRESS BAR ============ */
    #readingProgress {
        position: fixed;
        top: 80px;
        left: 0;
        height: 4px;
        background: #57a8dd;
        z-index: 60;
        width: 0%;
        transition: width 0.1s ease;
        border-right: 2px solid #1c1b1b;
    }

    /* ============ BADGE ============ */
    .badge-semester {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        padding: 3px 10px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        border: 2px solid #1c1b1b;
        background: #c9e6ff;
        box-shadow: 2px 2px 0px #1c1b1b;
    }
    .badge-semester.s2 { background: #ffd167; }
    .badge-semester.s3 { background: #ffdbc8; }
    .badge-semester.s4 { background: #a7f3a0; }
    .badge-semester.s5 { background: #ffb4ae; }

    /* ============ TABLE ============ */
    .brutal-table {
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #1c1b1b;
        font-size: 13px;
    }
    .brutal-table th {
        background: #1c1b1b;
        color: #f3f0ef;
        padding: 10px 12px;
        text-align: left;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        border: 2px solid #1c1b1b;
    }
    .brutal-table td {
        padding: 10px 12px;
        border: 2px solid #1c1b1b;
        background: #ffffff;
        vertical-align: top;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
    }
    .brutal-table tr:nth-child(even) td { background: #f6f3f2; }

    /* ============ AKSARA GRID ============ */
    .aksara-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
        gap: 0.5rem;
    }
    .aksara-cell {
        background: #ffffff;
        border: 2px solid #1c1b1b;
        padding: 0.75rem 0.5rem;
        text-align: center;
        box-shadow: 2px 2px 0px #1c1b1b;
        transition: all 0.15s ease;
    }
    .aksara-cell:hover {
        background: #c9e6ff;
        transform: translate(-1px, -1px);
        box-shadow: 3px 3px 0px #1c1b1b;
    }
    .aksara-cell .glyph {
        font-family: 'Noto Sans Javanese', 'Javanese Text', serif;
        font-size: 28px;
        line-height: 1.2;
        display: block;
        margin-bottom: 4px;
    }
    .aksara-cell .latin {
        font-family: 'JetBrains Mono', monospace;
        font-size: 10px;
        text-transform: uppercase;
        color: #584235;
        letter-spacing: 0.05em;
    }

    @media (max-width: 1023px) {
        .toc-sidebar { position: static; max-height: none; }
    }
</style>

{{-- Google Font untuk Aksara Jawa --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Javanese:wght@400;600;700&display=swap" rel="stylesheet">
@endsection

@section("main")

{{-- ==================== READING PROGRESS ==================== --}}
<div id="readingProgress"></div>

{{-- ==================== HERO / BREADCRUMB ==================== --}}
<section class="w-full bg-tertiary-fixed border-b-[3px] border-on-background relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.07] pointer-events-none bg-[radial-gradient(#1c1b1b_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">

        <nav class="flex items-center flex-wrap gap-2 font-label-sm text-label-sm uppercase mb-space-md">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">HOME</a>
            <span class="text-on-surface-variant">/</span>
            <a href="{{ route('pembelajaran') }}" class="hover:text-primary transition-colors">PEMBELAJARAN</a>
            <span class="text-on-surface-variant">/</span>
            <span class="text-on-surface-variant">KELAS XII</span>
            <span class="text-on-surface-variant">/</span>
            <span class="font-bold text-on-surface">ML — Bahasa Jawa</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">ML</span>
                    <span class="badge-semester s2">MULOK</span>
                    <span class="badge-semester s3">KELAS XII</span>
                    <span class="badge-semester s4">JAWA</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    Muatan Lokal<br>Bahasa Jawa
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap yang membahas <strong>tembang macapat</strong>, <strong>geguritan</strong>,
                    <strong>busana Jawa</strong>, <strong>gamelan &amp; karawitan</strong>, <strong>aksara Jawa</strong>,
                    <strong>Serat Tripama</strong>, <strong>eksposisi budaya</strong>, <strong>unggah-ungguh basa</strong>,
                    <strong>sandiwara &amp; pariwara</strong>, hingga <strong>aksara Jawa lengkap</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Bab</div>
                    <div class="font-headline-sm text-headline-sm font-bold">10 Bab</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~18 Jam</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ==================== MAIN CONTENT + SIDEBAR ==================== --}}
<section class="w-full bg-surface">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">

            {{-- ============ MAIN ARTICLE ============ --}}
            <div class="lg:col-span-9 space-y-space-xl">

                {{-- ===================================================== --}}
                {{-- SEMESTER 1 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-1" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-tertiary text-[32px]">auto_stories</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Tembang, Geguritan, Busana, Gamelan &amp; Aksara
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAB 1: TEMBANG MACAPAT ============ --}}
                    <article id="bab-1" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 1</div>
                            <div class="font-headline-sm uppercase">Tembang Macapat — Serat Wedhatama Pupuh Kinanthi</div>
                        </div>

                        <h3 id="bab1-pangerten" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pangerten Tembang Macapat
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Tembang macapat</strong> yaiku salah sawijining jinis tembang tradisional Jawa sing kaiket dening
                            <strong>paugeran</strong> tartamtu, yaiku <strong>guru gatra</strong>, <strong>guru wilangan</strong>,
                            lan <strong>guru lagu</strong>.
                        </p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Tembang macapat ora mung kanggo hiburan, nanging uga digunakake kanggo nyampekake:
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Piwulang</span>
                            <span class="badge-semester s2">Nasihat</span>
                            <span class="badge-semester s3">Crita</span>
                            <span class="badge-semester s4">Filsafat urip</span>
                            <span class="badge-semester s5">Tuntunan moral</span>
                            <span class="badge-semester">Nilai budi pekerti</span>
                        </div>

                        <h3 id="bab1-paugeran" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Paugeran Tembang Kinanthi
                        </h3>

                        <div class="space-y-space-sm mb-space-md">
                            <details class="accordion-card" open>
                                <summary>1. Guru Gatra</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2"><strong>Guru gatra</strong> yaiku cacahing larik utawa baris ing saben pada.</p>
                                    <div class="tembang-block">
                                        Tembang Kinanthi nduweni <span class="boxed">6 gatra</span> saben pada.
                                    </div>
                                    <p class="font-body-sm text-on-surface-variant">Dadi, saben bait tembang Kinanthi dumadi saka enem baris.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Guru Wilangan</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm"><strong>Guru wilangan</strong> yaiku cacahing wanda utawa suku kata ing saben gatra.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Guru Lagu</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm"><strong>Guru lagu</strong> yaiku swara vokal ing pungkasan saben gatra.</p>
                                </div>
                            </details>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">Paugeran Kinanthi</h4>
                        <div class="tembang-block mb-space-md">
                            <span class="boxed">8u, 8i, 8a, 8i, 8a, 8i</span>
                        </div>

                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Gatra</th><th>Guru Wilangan</th><th>Guru Lagu</th></tr></thead>
                            <tbody>
                                <tr><td>1</td><td>8</td><td>u</td></tr>
                                <tr><td>2</td><td>8</td><td>i</td></tr>
                                <tr><td>3</td><td>8</td><td>a</td></tr>
                                <tr><td>4</td><td>8</td><td>i</td></tr>
                                <tr><td>5</td><td>8</td><td>a</td></tr>
                                <tr><td>6</td><td>8</td><td>i</td></tr>
                            </tbody>
                        </table>

                        <div class="quote-block mb-space-md">
                            <strong>Cara gampang ngelingi:</strong> Kinanthi = 6 gatra, <strong>8u-8i-8a-8i-8a-8i</strong>.
                        </div>

                        <h3 id="bab1-watak" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Watak Tembang Kinanthi
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Seneng</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tresna</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Asih</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Nuntun</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menehi pitutur</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kebak tuladha</div>
                        </div>
                        <div class="quote-block mb-space-md">
                            Tembang iki cocok kanggo menehi <strong>tuntunan</strong> marang wong supaya tumindak becik.
                        </div>

                        <h3 id="bab1-wedhatama" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Serat Wedhatama
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Serat Wedhatama</strong> yaiku karya sastra Jawa sing ngemot <strong>piwulang luhur</strong>
                            kanggo nggayuh urip sing becik. Salah sijining pupuhe yaiku <strong>Pupuh Kinanthi</strong>.
                        </p>

                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Piwulang utama sing bisa dijupuk yaiku supaya manungsa:
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Budi pekerti luhur</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Ngendhaleni hawa nepsu</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Ngajeni wong liya</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Sregep sinau</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tata krama</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Manungsa utama</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Manungsa Utama</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Manungsa utama</strong> yaiku wong sing nduweni:
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Budi pekerti luhur</span>
                            <span class="badge-semester s2">Tata krama</span>
                            <span class="badge-semester s3">Kawruh</span>
                            <span class="badge-semester s4">Tanggung jawab</span>
                            <span class="badge-semester s5">Andhap asor</span>
                            <span class="badge-semester">Bisa mbedakake becik &amp; ala</span>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 1</div>
                            <p class="font-body-sm">
                                Tembang Kinanthi digunakake kanggo menehi <strong>tuntunan lan piwulang</strong>
                                supaya manungsa nduweni budi pekerti luhur lan bisa dadi manungsa utama.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 2: GEGURITAN ============ --}}
                    <article id="bab-2" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 2</div>
                            <div class="font-headline-sm uppercase">Geguritan</div>
                        </div>

                        <h3 id="bab2-pangerten" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pangerten Geguritan
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Geguritan</strong> yaiku karya sastra Jawa awujud puisi sing digunakake kanggo ngandharake:
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Gagasan</span>
                            <span class="badge-semester s2">Rasa</span>
                            <span class="badge-semester s3">Pengalaman</span>
                            <span class="badge-semester s4">Kritik</span>
                            <span class="badge-semester s5">Nasihat</span>
                            <span class="badge-semester">Pangarep-arep</span>
                        </div>
                        <div class="quote-block mb-space-md">
                            Geguritan modern luwih <strong>bebas</strong> amarga ora kudu kaiket paugeran tembang macapat.
                        </div>

                        <h3 id="bab2-unsur" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Unsur Intrinsik Geguritan
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Tema</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2"><strong>Tema</strong> yaiku gagasan pokok utawa perkara utama sing dirembug ing geguritan.</p>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">Katresnan</span>
                                        <span class="badge-semester s2">Kulawarga</span>
                                        <span class="badge-semester s3">Pendidikan</span>
                                        <span class="badge-semester s4">Lingkungan</span>
                                        <span class="badge-semester s5">Perjuangan</span>
                                        <span class="badge-semester">Sosial</span>
                                    </div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Amanat</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2"><strong>Amanat</strong> yaiku pesen utawa piwulang sing arep diwenehake panganggit marang pamaca.</p>
                                    <div class="quote-block">
                                        Yen geguritan nyritakake wong tuwa sing ngopeni anak, amanate bisa:
                                        <strong>anak kudu ngajeni wong tuwa lan kudu sinau mandiri</strong>.
                                    </div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Pangindran / Citraan</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2"><strong>Pangindran</strong> yaiku gambaran sing bisa nuwuhake kesan marang pancaindra pamaca.</p>
                                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                                        <div class="bg-surface-container p-space-sm border-[2px] border-on-background text-center font-code-inline text-code-inline">Pandeleng</div>
                                        <div class="bg-surface-container p-space-sm border-[2px] border-on-background text-center font-code-inline text-code-inline">Pangrungu</div>
                                        <div class="bg-surface-container p-space-sm border-[2px] border-on-background text-center font-code-inline text-code-inline">Pangambu</div>
                                        <div class="bg-surface-container p-space-sm border-[2px] border-on-background text-center font-code-inline text-code-inline">Pangrasa</div>
                                        <div class="bg-surface-container p-space-sm border-[2px] border-on-background text-center font-code-inline text-code-inline">Gerak</div>
                                    </div>
                                </div>
                            </details>
                        </div>

                        <h3 id="bab2-diksi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Diksi
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Diksi</strong> yaiku pilihan tembung sing digunakake dening panganggit.
                            Ing geguritan, pilihan tembung dipilih kanthi teliti supaya:
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Endah</span>
                            <span class="badge-semester s2">Makna jero</span>
                            <span class="badge-semester s3">Cocog karo suasana</span>
                            <span class="badge-semester s4">Nuwuhake rasa</span>
                        </div>

                        <h3 id="bab2-basa-rinengga" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Basa Rinengga
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Basa rinengga</strong> yaiku basa sing dipaes utawa digawe luwih endah supaya nduweni daya tarik.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Plutan</div>
                                <p class="font-body-sm">Tembung sing dipendhekake utawa diowahi supaya cocog karo kabutuhan basa utawa irama.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Wancahan</div>
                                <p class="font-body-sm">Tembung sing dicekak.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Dasanama</div>
                                <p class="font-body-sm">Sawijining tembung nduweni akeh jeneng utawa sinonim.</p>
                            </div>
                        </div>

                        <div class="quote-block mb-space-md">
                            <strong>Tuladha Dasanama:</strong> tembung <em>srengenge</em> bisa nduweni sebutan liyane kaya
                            <strong>surya</strong> utawa <strong>bagaskara</strong>.
                        </div>

                        <h3 id="bab2-purwakanthi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">E</span>
                            Purwakanthi
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Purwakanthi</strong> yaiku pangulangan swara utawa tembung tartamtu supaya ukara dadi luwih endah.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Guru Swara</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Guru Sastra</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Lumaksita</div>
                        </div>
                        <div class="quote-block mb-space-md">
                            Tujuane: nggawe geguritan luwih <strong>merdu, endah, lan gampang dielingi</strong>.
                        </div>

                        <h3 id="bab2-analisis" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">F</span>
                            Analisis Geguritan "Dakkudange Anakku"
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Geguritan <strong>"Dakkudange Anakku"</strong> nggambarake rasa tresna lan pangarep-arep
                            wong tuwa marang anak.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Wong tuwa tresna</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Masa depan apik</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Anak kudu sinau</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Urip mandiri</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Katresnan kulawarga</div>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 2</div>
                            <p class="font-body-sm">
                                Geguritan minangka karya sastra kanggo ngandharake rasa lan gagasan kanthi basa sing endah.
                                Kanggo nganalisis geguritan kudu ngerti <strong>tema, amanat, diksi, citraan, basa rinengga,
                                purwakanthi</strong>, lan unsur liyane.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 3: BUSANA JAWA ============ --}}
                    <article id="bab-3" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 3</div>
                            <div class="font-headline-sm uppercase">Busana Jawa</div>
                        </div>

                        <h3 id="bab3-pangerten" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pangerten Busana Jawa
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Busana Jawa</strong> yaiku sandhangan tradisional masyarakat Jawa sing ora mung nduweni
                            fungsi kanggo nutupi awak, nanging uga nduweni <strong>nilai budaya, tata krama, lan filosofi</strong>.
                        </p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">Busana Jawa beda-beda miturut:</p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Jinis kelamin</span>
                            <span class="badge-semester s2">Acara</span>
                            <span class="badge-semester s3">Status</span>
                            <span class="badge-semester s4">Daerah</span>
                            <span class="badge-semester s5">Tradhisi</span>
                        </div>

                        <h3 id="bab3-kelengkapan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Kelengkapan Busana Jawa
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Udheng / Iket</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2">Penutup sirah kanggo wong lanang.</p>
                                    <div class="font-label-sm uppercase font-bold mb-1 text-tertiary">Makna Filosofis:</div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">Pikiran</span>
                                        <span class="badge-semester s2">Kawicaksanan</span>
                                        <span class="badge-semester s3">Ngendhaleni pikiran</span>
                                    </div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Rasukan</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2">Sandhangan kanggo awak.</p>
                                    <div class="font-label-sm uppercase font-bold mb-1 text-tertiary">Tuladhane:</div>
                                    <ul class="font-code-inline text-code-inline space-y-1 mb-2">
                                        <li>› <strong>Beskap</strong> kanggo wong lanang</li>
                                        <li>› <strong>Kebaya</strong> kanggo wong wadon</li>
                                    </ul>
                                    <div class="font-label-sm uppercase font-bold mb-1 text-tertiary">Nuduhake:</div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">Kesopanan</span>
                                        <span class="badge-semester s2">Tata krama</span>
                                        <span class="badge-semester s3">Kaurmatan</span>
                                    </div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Benik</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm">Kancing ing rasukan. Filosofine supaya manungsa bisa
                                    <strong>ngiket utawa ngendhaleni hawa nepsu lan tumindak</strong>.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>4. Sabuk</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm">Digunakake kanggo ngiket jarik utawa sandhangan. Filosofine gegayutan
                                    karo <strong>ngiket diri supaya bisa ngendhaleni tumindak</strong>.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>5. Epek</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm">Salah sawijining piranti sandhangan sing ana ing pinggang.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>6. Timang</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm">Pengunci utawa gesper ing epek.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>7. Jarik</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2">Kain dawa sing digunakake minangka sandhangan ngisor. Biasane nduweni motif batik.</p>
                                    <div class="font-label-sm uppercase font-bold mb-1 text-tertiary">Wiru:</div>
                                    <p class="font-body-sm">Lipatan ing sisih ngarep jarik. Kudu digawe rapi amarga kalebu unsur tata busana Jawa.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>8. Bebed</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm">Kain utawa sandhangan ngisor sing umum digunakake dening wong lanang.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>9. Canela</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm">Alas kaki tradisional Jawa.</p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>10. Curiga-Warangka</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm"><strong>Curiga</strong> yaiku keris, dene <strong>warangka</strong> yaiku sarung utawa wadah keris.
                                    Keris nduweni nilai budaya lan filosofi, ora mung minangka senjata.</p>
                                </div>
                            </details>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 3</div>
                            <p class="font-body-sm">
                                Busana Jawa minangka bagian saka <strong>identitas budaya</strong> sing ngemot
                                tata krama, kesopanan, kaendahan, lan nilai filosofi.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 4: GAMELAN ============ --}}
                    <article id="bab-4" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 4</div>
                            <div class="font-headline-sm uppercase">Seni Pertunjukan &amp; Gamelan</div>
                        </div>

                        <h3 id="bab4-pangerten" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pangerten Gamelan
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Gamelan</strong> yaiku seperangkat piranti musik tradisional Jawa sing dimainake bebarengan
                            kanggo ngasilake musik <strong>karawitan</strong>.
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Seni</span>
                            <span class="badge-semester s2">Budaya</span>
                            <span class="badge-semester s3">Sosial</span>
                            <span class="badge-semester s4">Filosofi</span>
                            <span class="badge-semester s5">Pendidikan</span>
                        </div>

                        <h3 id="bab4-laras" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Laras Gamelan
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">1. Slendro</div>
                                <p class="font-body-sm mb-2">Sistem nada sing umume dumadi saka <strong>lima nada pokok</strong>.</p>
                                <div class="font-label-sm uppercase font-bold mb-1 text-tertiary">Watak:</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester">Entheng</span>
                                    <span class="badge-semester s2">Luwes</span>
                                    <span class="badge-semester s3">Sederhana</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">2. Pelog</div>
                                <p class="font-body-sm mb-2">Sistem nada kanthi <strong>pitung nada pokok</strong>, panggunaane bisa disusun manut pathet &amp; gendhing.</p>
                                <div class="font-label-sm uppercase font-bold mb-1 text-tertiary">Watak:</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester s4">Kompleks</span>
                                    <span class="badge-semester s4">Agung</span>
                                    <span class="badge-semester s4">Maneka warna</span>
                                </div>
                            </div>
                        </div>

                        <h3 id="bab4-piranti" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Piranti Gamelan
                        </h3>

                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Piranti</th><th>Fungsi</th></tr></thead>
                            <tbody>
                                <tr><td>Kendhang</td><td>Ngatur irama</td></tr>
                                <tr><td>Gong</td><td>Menehi tandha struktur gedhe ing gendhing</td></tr>
                                <tr><td>Kenong</td><td>Menehi tandha struktur gendhing</td></tr>
                                <tr><td>Kethuk</td><td>Mbantu pola irama</td></tr>
                                <tr><td>Kempyang</td><td>Nguatake pola irama</td></tr>
                                <tr><td>Bonang</td><td>Nggawe pola melodi</td></tr>
                                <tr><td>Saron</td><td>Nggawa melodi balungan</td></tr>
                                <tr><td>Demung</td><td>Instrumen balungan ukuran gedhe</td></tr>
                                <tr><td>Slenthem</td><td>Swara ngisor nyengkuyung balungan</td></tr>
                                <tr><td>Gender</td><td>Piranti bilah kanthi karakter swara khas</td></tr>
                                <tr><td>Rebab</td><td>Instrumen gesek</td></tr>
                                <tr><td>Suling</td><td>Instrumen tiup</td></tr>
                            </tbody>
                        </table>

                        <h3 id="bab4-nilai" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Nilai Karawitan
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kerja sama</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Disiplin</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Konsentrasi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Keselarasan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Gotong royong</div>
                        </div>
                        <div class="quote-block mb-space-md">
                            Saben pemain kudu <strong>ngrungokake pemain liyane</strong> supaya musik bisa laras lan harmonis.
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 4</div>
                            <p class="font-body-sm">
                                Gamelan minangka warisan budaya Jawa sing nduweni <strong>nilai estetika, sosial, lan filosofi</strong>.
                                Ana rong laras utama: <strong>slendro</strong> lan <strong>pelog</strong>.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 5: AKSARA SWARA ============ --}}
                    <article id="bab-5" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 5</div>
                            <div class="font-headline-sm uppercase">Aksara Jawa — Aksara Swara</div>
                        </div>

                        <h3 id="bab5-pangerten" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pangerten Aksara Jawa
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Aksara Jawa</strong> yaiku sistem tulisan tradisional Jawa sing digunakake kanggo nulis
                            basa Jawa lan tembung-tembung tartamtu. Aksara Jawa dhasare yaiku <strong>aksara nglegena / carakan</strong>.
                        </p>

                        <h3 id="bab5-swara" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Aksara Swara
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Aksara swara</strong> yaiku aksara khusus kanggo nulis swara vokal A, I, U, E, O,
                            utamane nalika vokal kasebut dadi wiwitan tembung utawa jeneng tartamtu.
                        </p>

                        <div class="aksara-grid mb-space-md">
                            <div class="aksara-cell">
                                <span class="glyph">ꦄ</span>
                                <span class="latin">A</span>
                            </div>
                            <div class="aksara-cell">
                                <span class="glyph">ꦆ</span>
                                <span class="latin">I</span>
                            </div>
                            <div class="aksara-cell">
                                <span class="glyph">ꦈ</span>
                                <span class="latin">U</span>
                            </div>
                            <div class="aksara-cell">
                                <span class="glyph">ꦌ</span>
                                <span class="latin">E</span>
                            </div>
                            <div class="aksara-cell">
                                <span class="glyph">ꦎ</span>
                                <span class="latin">O</span>
                            </div>
                        </div>

                        <div class="quote-block mb-space-md">
                            Aksara swara penting nalika nulis tembung utawa jeneng sing <strong>diwiwiti swara vokal</strong>.
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 5</div>
                            <p class="font-body-sm">
                                Aksara swara digunakake kanggo nulis swara vokal A, I, U, E, O,
                                utamane ing <strong>wiwitan tembung utawa jeneng tartamtu</strong>.
                            </p>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- SEMESTER 2 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-2" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">theater_comedy</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Serat, Unggah-Ungguh, Sandiwara &amp; Aksara Lengkap
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAB 1 SEM 2: SERAT TRIPAMA ============ --}}
                    <article id="bab-6" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 1 — SEMESTER 2</div>
                            <div class="font-headline-sm uppercase">Serat Tripama Pupuh Dhandhanggula</div>
                        </div>

                        <h3 id="bab6-pangerten" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pangerten Serat Tripama
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Serat Tripama</strong> yaiku karya sastra Jawa dening <strong>KGPAA Mangkunegara IV</strong>
                            sing ngemot piwulang babagan tuladha saka tokoh-tokoh ing crita wayang.
                        </p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">Telu tokoh utama sing dadi tuladha yaiku:</p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Kumbakarna</span>
                            <span class="badge-semester s2">Basukarna / Adipati Karna</span>
                            <span class="badge-semester s3">Patih Suwanda / Bambang Sumantri</span>
                        </div>
                        <div class="quote-block mb-space-md">
                            Piwulang kasebut gegayutan karo <strong>etika, kesetiaan, tanggung jawab, lan pengabdian</strong>.
                        </div>

                        <h3 id="bab6-kumbakarna" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Kumbakarna
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Tokoh ing crita <strong>Ramayana</strong>. Kumbakarna dikenal nduweni sikap <strong>bela negara</strong>.
                        </p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Sanajan dheweke ngerti yen tumindake Rahwana akeh sing salah, Kumbakarna tetep maju perang
                            amarga dheweke nduweni <strong>rasa tanggung jawab marang negarane</strong>.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Watak Utama</div>
                                <p class="font-body-sm">Bela negara lan tanggung jawab marang bangsa.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Piwulange</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Tresna marang negara</li>
                                    <li>› Wani mbela bangsa</li>
                                    <li>› Ora gampang ninggalake tanggung jawab</li>
                                    <li>› Nduweni keberanian</li>
                                </ul>
                            </div>
                        </div>
                        <div class="quote-block mb-space-md">
                            <strong>Cathetan kritis:</strong> setya marang negara <strong>ora ateges kudu mbenerake tumindak sing salah</strong>.
                        </div>

                        <h3 id="bab6-karna" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Basukarna / Adipati Karna
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Tokoh ing crita <strong>Mahabharata</strong>.
                        </p>
                        <div class="tembang-block mb-space-md">
                            <span class="boxed">Setya marang sedya</span><br><br>
                            Tegese: setya marang janji, tekad, lan komitmen.
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Karna tetep setya marang Duryudana amarga rumangsa nduweni <strong>utang budi</strong>.
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Setya</span>
                            <span class="badge-semester s2">Netepi janji</span>
                            <span class="badge-semester s3">Tanggung jawab</span>
                            <span class="badge-semester s4">Ora ngingkari komitmen</span>
                        </div>

                        <h3 id="bab6-suwanda" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Patih Suwanda / Bambang Sumantri
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Tokoh sing nduweni telung watak utama: <strong>Guna, Kaya, Purun</strong>.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">Guna</div>
                                <p class="font-body-sm">Nduweni kawruh lan kaprigelan → <strong>trampil</strong>.</p>
                            </div>
                            <div class="bg-secondary-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">Kaya</div>
                                <p class="font-body-sm">Nduweni daya guna → <strong>migunani</strong>.</p>
                            </div>
                            <div class="bg-primary-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">Purun</div>
                                <p class="font-body-sm">Wani, gelem, sanggup → <strong>wani nindakake</strong>.</p>
                            </div>
                        </div>

                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Tokoh</th><th>Nilai Utama</th></tr></thead>
                            <tbody>
                                <tr><td>Kumbakarna</td><td>Bela negara</td></tr>
                                <tr><td>Basukarna / Karna</td><td>Setya marang sedya</td></tr>
                                <tr><td>Patih Suwanda</td><td>Guna, Kaya, Purun</td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- ============ BAB 2 SEM 2: EKSPOSISI BUDAYA ============ --}}
                    <article id="bab-7" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 2 — SEMESTER 2</div>
                            <div class="font-headline-sm uppercase">Eksposisi Budaya &amp; Kearifan Lokal</div>
                        </div>

                        <h3 id="bab7-eksposisi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pangerten Teks Eksposisi
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Teks eksposisi</strong> yaiku teks sing nduweni tujuan kanggo nerangake informasi utawa
                            gagasan kanthi jelas lan adhedhasar fakta/argumentasi.
                        </p>

                        <div class="diagram-box mb-space-md">STRUKTUR TEKS EKSPOSISI:
Tesis        → gagasan utama
      ↓
Argumentasi  → alasan utawa bukti sing ndhukung
      ↓
Penegasan ulang → kesimpulan utawa penguatan maneh</div>

                        <h3 id="bab7-wewaler" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Wewaler
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Wewaler</strong> yaiku larangan utawa pantangan sing ana ing masyarakat Jawa.
                        </p>
                        <div class="quote-block mb-space-md">
                            <strong>Tuladha:</strong> <em>Aja lungguh ing ngarep lawang, mengko angel oleh jodho.</em>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Wewaler kaya ngono bisa nduweni maksud pendidikan utawa sosial, sanajan ora kabeh kudu dimaknai
                            kanthi harfiah.
                        </p>
                        <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Tujuane bisa kanggo:</div>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Ngajari sopan santun</span>
                            <span class="badge-semester s2">Njaga tata tertib</span>
                            <span class="badge-semester s3">Menehi peringatan</span>
                            <span class="badge-semester s4">Ngajari supaya ora tumindak sembarangan</span>
                        </div>

                        <h3 id="bab7-gugon" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Gugon Tuhon
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Gugon tuhon</strong> yaiku kapercayan masyarakat marang perkara tartamtu sing diwarisake
                            turun-temurun.
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Keberuntungan</span>
                            <span class="badge-semester s2">Kesialan</span>
                            <span class="badge-semester s3">Akibat tartamtu</span>
                        </div>
                        <div class="quote-block mb-space-md">
                            Nalika sinau gugon tuhon, kudu bisa mbedakake antarane
                            <strong>nilai budaya/pendidikan</strong> lan <strong>kapercayan sing ora kudu dipercaya minangka fakta ilmiah</strong>.
                        </div>

                        <h3 id="bab7-filosofis" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Nilai Filosofis
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Wewaler lan gugon tuhon bisa ditliti saka nilai sing ana ing mburine.
                            Tuladhane larangan tumindak ora sopan bisa nduweni nilai:
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Tata krama</span>
                            <span class="badge-semester s2">Ngajeni wong liya</span>
                            <span class="badge-semester s3">Disiplin</span>
                            <span class="badge-semester s4">Tanggung jawab</span>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 2 (SEM 2)</div>
                            <p class="font-body-sm">
                                Wewaler lan gugon tuhon minangka bagian saka budaya Jawa sing kudu dipahami
                                kanthi <strong>kritis</strong> kanthi ndeleng nilai moral, sosial, lan filosofis sing ana ing njero.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 3 SEM 2: UNGGAH-UNGGUH BASA ============ --}}
                    <article id="bab-8" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 3 — SEMESTER 2</div>
                            <div class="font-headline-sm uppercase">Unggah-Ungguh Basa &amp; Pacelathon</div>
                        </div>

                        <h3 id="bab8-pangerten" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pangerten Unggah-Ungguh Basa
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Unggah-ungguh basa</strong> yaiku aturan nggunakake basa Jawa sing disesuaikan karo:
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Sapa sing diajak ngomong</span>
                            <span class="badge-semester s2">Umur</span>
                            <span class="badge-semester s3">Status</span>
                            <span class="badge-semester s4">Hubungan sosial</span>
                            <span class="badge-semester s5">Kahanan</span>
                            <span class="badge-semester">Panggonan</span>
                        </div>
                        <div class="quote-block mb-space-md">
                            Tujuane supaya komunikasi tetep <strong>sopan lan ngajeni wong liya</strong>.
                        </div>

                        <h3 id="bab8-tingkatan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Tingkatan Basa Jawa
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Ngoko Lugu</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2">Digunakake marang:</p>
                                    <ul class="font-code-inline text-code-inline space-y-1 mb-2">
                                        <li>› Kanca akrab</li>
                                        <li>› Wong sing wis cedhak</li>
                                        <li>› Wong sing umure padha ing kahanan santai</li>
                                    </ul>
                                    <div class="quote-block"><strong>Tuladha:</strong> "Kowe wis mangan durung?"</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Ngoko Alus</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2">Basa dhasare ngoko nanging dicampuri tembung krama inggil kanggo ngajeni.</p>
                                    <div class="quote-block"><strong>Tuladha:</strong> "Bapak wis dhahar durung?"</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Krama Lugu</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2">Digunakake ing kahanan sing luwih sopan.</p>
                                    <div class="quote-block"><strong>Tuladha:</strong> "Sampeyan sampun nedha?"</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>4. Krama Alus / Krama Inggil</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2">Tingkat basa sing luwih ngajeni. Biasane digunakake marang:</p>
                                    <div class="flex flex-wrap gap-1 mb-2">
                                        <span class="badge-semester">Wong tuwa</span>
                                        <span class="badge-semester s2">Guru</span>
                                        <span class="badge-semester s3">Pimpinan</span>
                                        <span class="badge-semester s4">Tamu</span>
                                        <span class="badge-semester s5">Wong sing kudu diajeni</span>
                                    </div>
                                    <div class="quote-block"><strong>Tuladha:</strong> "Panjenengan sampun dhahar?"</div>
                                </div>
                            </details>
                        </div>

                        <h3 id="bab8-pacelathon" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Pacelathon
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Pacelathon</strong> yaiku dialog utawa percakapan antarane loro wong utawa luwih.
                        </p>
                        <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Pacelathon sing apik kudu:</div>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Nggunakake unggah-ungguh bener</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Cocog karo kahanan</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Jelas</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Ora nyinggung</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Nggunakake tembung sopan</div>
                        </div>

                        <h3 id="bab8-pkl" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Unggah-Ungguh ing Dunia Kerja / PKL
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Nalika PKL, siswa kudu bisa nggunakake basa sing luwih sopan marang:
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Pembimbing</span>
                            <span class="badge-semester s2">Pimpinan</span>
                            <span class="badge-semester s3">Karyawan senior</span>
                            <span class="badge-semester s4">Pelanggan</span>
                            <span class="badge-semester s5">Mitra kerja</span>
                        </div>
                        <div class="quote-block mb-space-md">
                            <strong>Tuladha nalika njaluk tulung marang pembimbing:</strong><br>
                            <em>"Pak/Bu, nyuwun pangapunten, kula badhe nyuwun pirsa babagan tugas menika."</em>
                        </div>
                        <div class="quote-block">
                            <strong>Aja</strong> nggunakake basa sing terlalu santai marang pimpinan utawa pelanggan.
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 3 (SEM 2)</div>
                            <p class="font-body-sm">
                                Unggah-ungguh basa minangka wujud <strong>tata krama lan rasa ngajeni</strong>.
                                Siswa SMK kudu bisa nyesuaikake basa nalika komunikasi ing sekolah lan dunia kerja.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 4 SEM 2: SANDIWARA & PARIWARA ============ --}}
                    <article id="bab-9" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 4 — SEMESTER 2</div>
                            <div class="font-headline-sm uppercase">Sandiwara Jawa &amp; Pariwara</div>
                        </div>

                        <h3 id="bab9-sandiwara" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Sandiwara Jawa
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Sandiwara</strong> yaiku karya drama sing diwujudake liwat dialog lan tumindak para paraga.
                            Sandiwara Jawa nggunakake <strong>basa Jawa, budaya Jawa, karakter masyarakat Jawa, lan latar Jawa</strong>.
                        </p>

                        <h3 id="bab9-unsur" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Unsur Intrinsik Sandiwara
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Tema</summary>
                                <div class="p-space-md"><p class="font-body-sm">Gagasan pokok crita.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Paraga</summary>
                                <div class="p-space-md"><p class="font-body-sm">Tokoh sing ana ing crita.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Watak</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2">Sifat utawa karakter paraga.</p>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">Sabar</span>
                                        <span class="badge-semester s2">Jujur</span>
                                        <span class="badge-semester s3">Sombong</span>
                                        <span class="badge-semester s4">Wani</span>
                                    </div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>4. Alur</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2">Urutan kedadeyan ing crita.</p>
                                    <div class="diagram-box">Pambuka → Konflik → Klimaks → Penyelesaian</div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>5. Latar</summary>
                                <div class="p-space-md"><p class="font-body-sm">Panggonan, wektu, lan suasana kedadeyan.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>6. Dialog</summary>
                                <div class="p-space-md"><p class="font-body-sm">Pacelathon antarane paraga.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>7. Amanat</summary>
                                <div class="p-space-md"><p class="font-body-sm">Pesen moral sing arep diwenehake marang penonton utawa pamaca.</p></div>
                            </details>
                        </div>

                        <h3 id="bab9-pitutur" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Pitutur Luhur
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Pitutur luhur</strong> yaiku nasihat utawa nilai moral sing apik.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kudu jujur</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tanggung jawab</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Aja sombong</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Ngajeni wong tuwa</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Gotong royong</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Netepi janji</div>
                        </div>

                        <h3 id="bab9-pariwara" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Pariwara
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Pariwara</strong> yaiku iklan sing tujuane kanggo mengenalake, nawakake, utawa promosi
                            barang, jasa, kegiatan, utawa gagasan.
                        </p>

                        <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Pariwara kudu:</div>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menarik</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Jelas</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Ringkes</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Gampang dielingi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Informatif</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Persuasif</div>
                        </div>

                        <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Unsur Pariwara:</div>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Jeneng produk</span>
                            <span class="badge-semester s2">Informasi produk</span>
                            <span class="badge-semester s3">Keunggulan</span>
                            <span class="badge-semester s4">Ajakan</span>
                            <span class="badge-semester s5">Kontak</span>
                            <span class="badge-semester">Gambar / ilustrasi</span>
                            <span class="badge-semester s2">Slogan</span>
                        </div>

                        <div class="quote-block mb-space-md">
                            <strong>Tuladha ukara pariwara:</strong><br>
                            <em>"Ayo nggunakake produk lokal kanggo ndhukung UMKM Jawa!"</em>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Ukara kasebut nduweni sifat <strong>persuasif</strong>, yaiku ngajak pamaca supaya nindakake sesuatu.
                        </p>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 4 (SEM 2)</div>
                            <p class="font-body-sm">
                                Sandiwara ngemot crita lan pitutur luhur, dene pariwara digunakake kanggo
                                menginformasikake lan ngajak masyarakat babagan produk, jasa, utawa gagasan.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 5 SEM 2: AKSARA JAWA LENGKAP ============ --}}
                    <article id="bab-10" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 5 — SEMESTER 2</div>
                            <div class="font-headline-sm uppercase">Aksara Jawa Lengkap &amp; Tanda Wacan / Pada</div>
                        </div>

                        <h3 id="bab10-nglegena" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Aksara Nglegena
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Aksara Jawa dhasar utawa carakan nduweni <strong>20 aksara</strong>:
                        </p>

                        <div class="aksara-grid mb-space-sm">
                            <div class="aksara-cell"><span class="glyph">ꦲ</span><span class="latin">Ha</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦤ</span><span class="latin">Na</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦕ</span><span class="latin">Ca</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦫ</span><span class="latin">Ra</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦏ</span><span class="latin">Ka</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦢ</span><span class="latin">Da</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦠ</span><span class="latin">Ta</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦱ</span><span class="latin">Sa</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦮ</span><span class="latin">Wa</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦭ</span><span class="latin">La</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦥ</span><span class="latin">Pa</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦝ</span><span class="latin">Dha</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦗ</span><span class="latin">Ja</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦪ</span><span class="latin">Ya</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦚ</span><span class="latin">Nya</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦩ</span><span class="latin">Ma</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦒ</span><span class="latin">Ga</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦧ</span><span class="latin">Ba</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦛ</span><span class="latin">Tha</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦔ</span><span class="latin">Nga</span></div>
                        </div>

                        <div class="diagram-box mb-space-md">HA-NA-CA-RA-KA
DA-TA-SA-WA-LA
PA-DHA-JA-YA-NYA
MA-GA-BA-THA-NGA</div>

                        <h3 id="bab10-swara" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Aksara Swara
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Digunakake kanggo swara vokal: A, I, U, E, O.
                        </p>

                        <div class="aksara-grid mb-space-md">
                            <div class="aksara-cell"><span class="glyph">ꦄ</span><span class="latin">A</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦆ</span><span class="latin">I</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦈ</span><span class="latin">U</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦌ</span><span class="latin">E</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦎ</span><span class="latin">O</span></div>
                        </div>

                        <h3 id="bab10-murda" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Aksara Murda
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Aksara khusus sing digunakake ing kahanan tartamtu, utamane kanggo nulis <strong>jeneng utawa
                            tembung sing perlu diajeni</strong>, kalebu jeneng wong, panggonan, utawa gelar.
                        </p>

                        <div class="aksara-grid mb-space-sm">
                            <div class="aksara-cell"><span class="glyph">ꦟ</span><span class="latin">Na</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦑ</span><span class="latin">Ka</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦡ</span><span class="latin">Ta</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦯ</span><span class="latin">Sa</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦦ</span><span class="latin">Pa</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦘ</span><span class="latin">Nya</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦗ</span><span class="latin">Ja</span></div>
                            <div class="aksara-cell"><span class="glyph">ꦓ</span><span class="latin">Ga</span></div>
                        </div>

                        <div class="quote-block mb-space-md">
                            Panganggone kudu disesuaikan karo <strong>aturan aksara Jawa</strong>.
                        </div>

                        <h3 id="bab10-rekan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Aksara Rekan
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Digunakake kanggo nulis swara saka basa manca, utamane swara sing ora ana ing aksara Jawa asli.
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Fa</span>
                            <span class="badge-semester s2">Za</span>
                            <span class="badge-semester s3">Kha</span>
                            <span class="badge-semester s4">Dza</span>
                            <span class="badge-semester s5">Gha</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Aksara rekan penting kanggo nulis tembung serapan saka <strong>basa Arab</strong> utawa basa manca liyane.
                        </p>

                        <h3 id="bab10-angka" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">E</span>
                            Aksara Angka
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Aksara Jawa uga nduweni angka dhewe.
                        </p>

                        <div class="aksara-grid mb-space-md">
                            <div class="aksara-cell"><span class="glyph">꧐</span><span class="latin">0</span></div>
                            <div class="aksara-cell"><span class="glyph">꧑</span><span class="latin">1</span></div>
                            <div class="aksara-cell"><span class="glyph">꧒</span><span class="latin">2</span></div>
                            <div class="aksara-cell"><span class="glyph">꧓</span><span class="latin">3</span></div>
                            <div class="aksara-cell"><span class="glyph">꧔</span><span class="latin">4</span></div>
                            <div class="aksara-cell"><span class="glyph">꧕</span><span class="latin">5</span></div>
                            <div class="aksara-cell"><span class="glyph">꧖</span><span class="latin">6</span></div>
                            <div class="aksara-cell"><span class="glyph">꧗</span><span class="latin">7</span></div>
                            <div class="aksara-cell"><span class="glyph">꧘</span><span class="latin">8</span></div>
                            <div class="aksara-cell"><span class="glyph">꧙</span><span class="latin">9</span></div>
                        </div>

                        <h3 id="bab10-pada" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">F</span>
                            Pada / Tandha Wacan
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Pada</strong> yaiku tandha wacan ing aksara Jawa.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="aksara-block" style="font-size: 36px; margin-bottom: 8px;">꧈</div>
                                <div class="font-label-sm uppercase font-bold text-center">Pada Lingsa</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="aksara-block" style="font-size: 36px; margin-bottom: 8px;">꧉</div>
                                <div class="font-label-sm uppercase font-bold text-center">Pada Lungsi</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="aksara-block" style="font-size: 36px; margin-bottom: 8px;">꧋</div>
                                <div class="font-label-sm uppercase font-bold text-center">Adeg-Adeg</div>
                            </div>
                        </div>

                        <div class="quote-block mb-space-md">
                            Fungsine padha karo tandha wacan ing tulisan Latin, kayata kanggo menehi tandha
                            <strong>mandheg, pamisah ukara, wiwitan teks, pungkasan ukara</strong>.
                        </div>

                        <h3 id="bab10-paragraf" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">G</span>
                            Nulis Paragraf Aksara Jawa
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Nalika nulis paragraf aksara Jawa, kudu nggatekake:
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Aksara nglegena</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Sandhangan</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pasangan</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Aksara swara</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Aksara murda</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Aksara rekan</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Aksara angka</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pada / tandha wacan</div>
                        </div>

                        <div class="quote-block mb-space-md">
                            Dadi, nalika ujian maca utawa nulis aksara Jawa, <strong>ora cukup mung apal Hanacaraka</strong>,
                            nanging kudu bisa nggunakake piranti aksara Jawa kanthi lengkap.
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 5 (SEM 2)</div>
                            <p class="font-body-sm">
                                Aksara Jawa lengkap ora mung aksara nglegena, nanging uga kalebu
                                <strong>sandhangan, pasangan, aksara swara, murda, rekan, angka, lan pada</strong>.
                            </p>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- RINGKASAN CEPAT --}}
                {{-- ===================================================== --}}
                <div id="ringkasan-cepat" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary-container text-[32px]">bolt</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bonus</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Ringkasan Cepat 10 Bab
                            </h2>
                        </div>
                    </div>

                    <table class="brutal-table mb-space-xl">
                        <thead><tr><th>Bab</th><th>Topik</th><th>Kata Kunci</th></tr></thead>
                        <tbody>
                            <tr><td>1</td><td>Tembang Macapat — Kinanthi</td><td>Guru gatra · Guru wilangan · Guru lagu · Serat Wedhatama</td></tr>
                            <tr><td>2</td><td>Geguritan</td><td>Tema · Amanat · Diksi · Citraan · Purwakanthi · Basa rinengga</td></tr>
                            <tr><td>3</td><td>Busana Jawa</td><td>Udheng · Beskap · Kebaya · Jarik · Wiru · Keris</td></tr>
                            <tr><td>4</td><td>Gamelan &amp; Karawitan</td><td>Slendro · Pelog · Kendhang · Gong · Saron · Gender</td></tr>
                            <tr><td>5</td><td>Aksara Swara</td><td>A · I · U · E · O</td></tr>
                            <tr><td>6</td><td>Serat Tripama</td><td>Kumbakarna · Karna · Patih Suwanda · Guna-Kaya-Purun</td></tr>
                            <tr><td>7</td><td>Eksposisi Budaya</td><td>Tesis · Argumentasi · Wewaler · Gugon tuhon</td></tr>
                            <tr><td>8</td><td>Unggah-Ungguh Basa</td><td>Ngoko lugu · Ngoko alus · Krama lugu · Krama alus</td></tr>
                            <tr><td>9</td><td>Sandiwara &amp; Pariwara</td><td>Tema · Paraga · Alur · Pitutur luhur · Persuasif</td></tr>
                            <tr><td>10</td><td>Aksara Jawa Lengkap</td><td>Nglegena · Swara · Murda · Rekan · Angka · Pada</td></tr>
                        </tbody>
                    </table>

                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary-container text-[32px]">menu_book</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Referensi</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Glosarium Istilah Jawa
                            </h2>
                        </div>
                    </div>

                    <table class="brutal-table">
                        <thead><tr><th>Istilah</th><th>Arti</th></tr></thead>
                        <tbody>
                            <tr><td>Guru Gatra</td><td>Cacahing larik saben pada ing tembang</td></tr>
                            <tr><td>Guru Wilangan</td><td>Cacahing wanda saben gatra</td></tr>
                            <tr><td>Guru Lagu</td><td>Swara vokal pungkasan saben gatra</td></tr>
                            <tr><td>Paugeran</td><td>Aturan utawa pathokan</td></tr>
                            <tr><td>Geguritan</td><td>Puisi Jawa (tradisional utawa modern)</td></tr>
                            <tr><td>Amanat</td><td>Pesen sing arep diwenehake panganggit</td></tr>
                            <tr><td>Basa Rinengga</td><td>Basa sing dipaes supaya luwih endah</td></tr>
                            <tr><td>Purwakanthi</td><td>Pangulangan swara supaya endah</td></tr>
                            <tr><td>Wewaler</td><td>Larangan utawa pantangan ing masyarakat Jawa</td></tr>
                            <tr><td>Gugon Tuhon</td><td>Kapercayan turun-temurun</td></tr>
                            <tr><td>Unggah-Ungguh Basa</td><td>Aturan nggunakake basa Jawa miturut kahanan</td></tr>
                            <tr><td>Pacelathon</td><td>Dialog utawa percakapan</td></tr>
                            <tr><td>Pariwara</td><td>Iklan utawa promosi</td></tr>
                            <tr><td>Sandiwara</td><td>Karya drama</td></tr>
                            <tr><td>Aksara Nglegena</td><td>Aksara dhasar Jawa (carakan)</td></tr>
                            <tr><td>Aksara Murda</td><td>Aksara khusus kanggo jeneng / gelar</td></tr>
                            <tr><td>Aksara Rekan</td><td>Aksara kanggo swara saka basa manca</td></tr>
                            <tr><td>Pada</td><td>Tandha wacan ing aksara Jawa</td></tr>
                        </tbody>
                    </table>
                </div>

                {{-- ==================== NAVIGASI BAWAH ==================== --}}
                <div class="border-t-[3px] border-on-background pt-space-lg flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-md">
                    <a href="{{ route('pembelajaran') }}"
                        class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-tertiary-fixed hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                        KEMBALI KE PEMBELAJARAN
                    </a>
                    <div class="flex gap-2">
                        <button onclick="window.scrollTo({top:0,behavior:'smooth'})"
                            class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container transition-all flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">arrow_upward</span>
                            KE ATAS
                        </button>
                        <a href="{{ route('contact') }}"
                            class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-primary-container border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] transition-all flex items-center justify-center gap-2">
                            TANYA MENTOR
                            <span class="material-symbols-outlined text-[18px]">support_agent</span>
                        </a>
                    </div>
                </div>
            </div>

            {{-- ============ SIDEBAR — TABLE OF CONTENTS ============ --}}
            <aside class="lg:col-span-3">
                <div class="toc-sidebar">
                    {{-- Info Card --}}
                    <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">info</span>
                            INFO MODUL
                        </div>
                        <div class="font-body-sm text-body-sm space-y-1">
                            <div class="flex justify-between"><span>Kelas:</span><strong>XII</strong></div>
                            <div class="flex justify-between"><span>Kode:</span><strong>ML</strong></div>
                            <div class="flex justify-between"><span>Bab:</span><strong>10</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~18 Jam</strong></div>
                        </div>
                    </div>

                    {{-- TOC --}}
                    <div class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">
                        <div class="p-space-sm border-b-[2px] border-on-background bg-on-background">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-inverse-on-surface flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">list</span>
                                DAFTAR MATERI
                            </div>
                        </div>
                        <nav class="p-space-sm space-y-1 font-code-inline text-code-inline" id="tocNav">

                            <div class="font-label-sm uppercase font-bold text-secondary pt-2 pb-1">◢ Semester 1</div>
                            <a href="#bab-1" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 1 — Tembang Kinanthi</a>
                            <a href="#bab1-pangerten" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pangerten</a>
                            <a href="#bab1-paugeran" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Paugeran</a>
                            <a href="#bab1-watak" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Watak</a>
                            <a href="#bab1-wedhatama" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Serat Wedhatama</a>

                            <a href="#bab-2" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 2 — Geguritan</a>
                            <a href="#bab2-pangerten" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pangerten</a>
                            <a href="#bab2-unsur" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Unsur Intrinsik</a>
                            <a href="#bab2-diksi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Diksi</a>
                            <a href="#bab2-basa-rinengga" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Basa Rinengga</a>
                            <a href="#bab2-purwakanthi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Purwakanthi</a>
                            <a href="#bab2-analisis" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Analisis Geguritan</a>

                            <a href="#bab-3" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 3 — Busana Jawa</a>
                            <a href="#bab-4" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 4 — Gamelan</a>
                            <a href="#bab-5" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 5 — Aksara Swara</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2</div>
                            <a href="#bab-6" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 1 — Serat Tripama</a>
                            <a href="#bab6-kumbakarna" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Kumbakarna</a>
                            <a href="#bab6-karna" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Karna</a>
                            <a href="#bab6-suwanda" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Patih Suwanda</a>

                            <a href="#bab-7" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 2 — Eksposisi Budaya</a>
                            <a href="#bab7-eksposisi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Teks Eksposisi</a>
                            <a href="#bab7-wewaler" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Wewaler</a>
                            <a href="#bab7-gugon" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Gugon Tuhon</a>

                            <a href="#bab-8" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 3 — Unggah-Ungguh Basa</a>
                            <a href="#bab8-tingkatan" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Tingkatan Basa</a>
                            <a href="#bab8-pacelathon" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pacelathon</a>
                            <a href="#bab8-pkl" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Basa ing PKL</a>

                            <a href="#bab-9" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 4 — Sandiwara &amp; Pariwara</a>
                            <a href="#bab9-sandiwara" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Sandiwara Jawa</a>
                            <a href="#bab9-unsur" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Unsur Intrinsik</a>
                            <a href="#bab9-pariwara" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pariwara</a>

                            <a href="#bab-10" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 5 — Aksara Jawa Lengkap</a>
                            <a href="#bab10-nglegena" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Nglegena</a>
                            <a href="#bab10-swara" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Swara</a>
                            <a href="#bab10-murda" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Murda</a>
                            <a href="#bab10-rekan" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Rekan</a>
                            <a href="#bab10-angka" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Angka</a>
                            <a href="#bab10-pada" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pada</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Bonus</div>
                            <a href="#ringkasan-cepat" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">Ringkasan &amp; Glosarium</a>
                        </nav>
                    </div>

                    {{-- Quick Action --}}
                    <div class="mt-space-md bg-primary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-2">QUICK ACTION</div>
                        <a href="{{ route('contact') }}"
                            class="block w-full text-center font-label-sm uppercase font-bold py-2 bg-on-background text-inverse-on-surface border-[2px] border-on-background shadow-[2px_2px_0px_#57a8dd] hover:shadow-[4px_4px_0px_#57a8dd] transition-all">
                            KONSULTASI →
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

{{-- ==================== CAPSTONE CTA ==================== --}}
<section class="w-full bg-tertiary-fixed border-y-[3px] border-on-background">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-lg items-center">
            <div class="md:col-span-8">
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">PRESERVASI BUDAYA</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Nglestarekake Budaya Jawa ing Era Digital
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai <strong>10 bab Bahasa Jawa</strong> — dari tembang macapat, geguritan,
                    busana, gamelan, aksara Jawa, Serat Tripama, unggah-ungguh basa, hingga sandiwara &amp; pariwara —
                    siswa diharapkan mampu <strong>nglestarekake (melestarikan)</strong> budaya Jawa
                    ing kehidupan sehari-hari lan ing era digital.
                </p>
            </div>
            <div class="md:col-span-4 flex md:justify-end">
                <a href="{{ route('contact') }}"
                    class="font-label-lg text-label-lg uppercase font-bold px-6 py-4 bg-on-background text-inverse-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#57a8dd] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#57a8dd] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-2">
                    LATIHAN SOAL
                    <span class="material-symbols-outlined">translate</span>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@section("script")
<script>
    document.addEventListener('DOMContentLoaded', function () {
        /* ============================================================
         * 1. READING PROGRESS BAR
         * ============================================================ */
        const progressBar = document.getElementById('readingProgress');
        const article = document.querySelector('section.bg-surface');

        function updateProgress() {
            if (!article) return;
            const rect = article.getBoundingClientRect();
            const total = rect.height - window.innerHeight;
            const scrolled = Math.max(0, -rect.top);
            const percent = total > 0 ? Math.min(100, (scrolled / total) * 100) : 0;
            progressBar.style.width = percent + '%';
        }
        window.addEventListener('scroll', updateProgress);
        updateProgress();

        /* ============================================================
         * 2. SCROLL SPY
         * ============================================================ */
        const tocLinks = document.querySelectorAll('.toc-link');
        const sections = Array.from(tocLinks).map(link => {
            const id = link.getAttribute('href').substring(1);
            return document.getElementById(id);
        }).filter(Boolean);

        function highlightTOC() {
            let current = null;
            const offset = 120;
            sections.forEach(section => {
                const top = section.getBoundingClientRect().top;
                if (top - offset <= 0) current = section;
            });
            tocLinks.forEach(link => link.classList.remove('active'));
            if (current) {
                const activeLink = document.querySelector(`.toc-link[href="#${current.id}"]`);
                if (activeLink) activeLink.classList.add('active');
            }
        }
        window.addEventListener('scroll', highlightTOC);
        highlightTOC();

        /* ============================================================
         * 3. SMOOTH SCROLL
         * ============================================================ */
        tocLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const yOffset = -100;
                    const y = target.getBoundingClientRect().top + window.pageYOffset + yOffset;
                    window.scrollTo({ top: y, behavior: 'smooth' });
                }
            });
        });

        /* ============================================================
         * 4. AUTO-CLOSE ACCORDION
         * ============================================================ */
        const allDetails = document.querySelectorAll('details.accordion-card');
        allDetails.forEach(detail => {
            detail.addEventListener('toggle', function () {
                if (this.open) {
                    const parentArticle = this.closest('article');
                    if (parentArticle) {
                        parentArticle.querySelectorAll('details.accordion-card').forEach(other => {
                            if (other !== this && other.open) other.open = false;
                        });
                    }
                }
            });
        });

        /* ============================================================
         * 5. KEYBOARD NAVIGATION
         * ============================================================ */
        document.addEventListener('keydown', function (e) {
            if (!e.altKey) return;
            if (e.key !== 'ArrowDown' && e.key !== 'ArrowUp') return;

            const ids = sections.map(s => s.id);
            let currentIndex = -1;
            sections.forEach((s, i) => {
                if (s.getBoundingClientRect().top - 120 <= 0) currentIndex = i;
            });

            let nextIndex = e.key === 'ArrowDown'
                ? Math.min(ids.length - 1, currentIndex + 1)
                : Math.max(0, currentIndex - 1);

            const nextSection = document.getElementById(ids[nextIndex]);
            if (nextSection) {
                const y = nextSection.getBoundingClientRect().top + window.pageYOffset - 100;
                window.scrollTo({ top: y, behavior: 'smooth' });
                e.preventDefault();
            }
        });

        console.log('%c🌿 Modul ML — Bahasa Jawa XII Loaded', 'background:#c9e6ff;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
