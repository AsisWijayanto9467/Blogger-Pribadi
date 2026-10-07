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
        background: #ffd167;
        color: #1c1b1b;
        font-weight: 700;
        transform: translateX(4px);
        box-shadow: 3px 3px 0px #1c1b1b;
    }

    /* ============ SCROLL BEHAVIOR ============ */
    html { scroll-behavior: smooth; scroll-padding-top: 6rem; }

    /* ============ CODE BLOCK ============ */
    .code-block {
        background: #1c1b1b;
        color: #f3f0ef;
        padding: 1rem 1.25rem;
        border: 2px solid #1c1b1b;
        box-shadow: 4px 4px 0px #ffd167;
        overflow-x: auto;
        font-family: 'JetBrains Mono', monospace;
        font-size: 13px;
        line-height: 1.7;
        white-space: pre;
        position: relative;
    }
    .code-block::before {
        content: '● ● ●';
        position: absolute;
        top: 6px;
        left: 12px;
        color: #ffd167;
        font-size: 10px;
        letter-spacing: 3px;
    }
    .code-block code { display: block; margin-top: 14px; }

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

    /* ============ FORMULA BLOCK ============ */
    .formula-block {
        background: #1c1b1b;
        color: #ffd167;
        padding: 1.25rem 1.5rem;
        border: 3px solid #1c1b1b;
        box-shadow: 5px 5px 0px #ffd167;
        font-family: 'JetBrains Mono', monospace;
        font-size: 15px;
        text-align: center;
        letter-spacing: 0.05em;
        margin: 0.5rem 0;
        position: relative;
    }
    .formula-block::before {
        content: '∑';
        position: absolute;
        top: 4px;
        right: 10px;
        color: #ffd167;
        font-size: 14px;
        font-weight: 900;
    }
    .formula-block .boxed {
        display: inline-block;
        border: 2px solid #ffd167;
        padding: 4px 12px;
        color: #ffd167;
        font-weight: 700;
    }

    /* ============ ACCORDION ============ */
    details.accordion-card {
        border: 2px solid #1c1b1b;
        background: #ffffff;
        box-shadow: 3px 3px 0px #1c1b1b;
        transition: all 0.2s ease;
    }
    details.accordion-card[open] { box-shadow: 5px 5px 0px #ffd167; }
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
        background: #ffd167;
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
        background: #ffd167;
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
        background: #ffd167;
        box-shadow: 2px 2px 0px #1c1b1b;
    }
    .badge-semester.s2 { background: #ffdbc8; }
    .badge-semester.s3 { background: #c9e6ff; }
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
    }
    .brutal-table tr:nth-child(even) td { background: #f6f3f2; }

    /* ============ SWOT CARDS ============ */
    .swot-card {
        border: 3px solid #1c1b1b;
        padding: 1rem;
        box-shadow: 4px 4px 0px #1c1b1b;
        transition: all 0.2s ease;
    }
    .swot-card:hover {
        transform: translate(-2px, -2px);
        box-shadow: 6px 6px 0px #1c1b1b;
    }
    .swot-s { background: #a7f3a0; }
    .swot-w { background: #ffb4ae; }
    .swot-o { background: #c9e6ff; }
    .swot-t { background: #ffdf9b; }

    /* ============ STAGE BLOCKS ============ */
    .stage-block {
        background: #fcf9f8;
        border: 2px solid #1c1b1b;
        padding: 1rem;
        box-shadow: 3px 3px 0px #1c1b1b;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
    }

    /* ============ REPORT MOCKUP ============ */
    .report-page {
        border: 2px solid #1c1b1b;
        background: #ffffff;
        box-shadow: 4px 4px 0px #1c1b1b;
        padding: 1.5rem;
        font-family: 'DM Sans', sans-serif;
        font-size: 13px;
        line-height: 1.8;
    }
    .report-page .title {
        text-align: center;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid #1c1b1b;
    }
    .report-page .bab-title {
        font-weight: 700;
        text-transform: uppercase;
        margin: 1rem 0 0.5rem;
        font-size: 14px;
    }
    .report-page .subbab {
        font-weight: 600;
        margin-left: 0.5rem;
        margin-top: 0.5rem;
    }
    .report-page .content {
        margin-left: 1.5rem;
        color: #584235;
    }

    @media (max-width: 1023px) {
        .toc-sidebar { position: static; max-height: none; }
    }
</style>
@endsection

@section("main")

{{-- ==================== READING PROGRESS ==================== --}}
<div id="readingProgress"></div>

{{-- ==================== HERO / BREADCRUMB ==================== --}}
<section class="w-full bg-secondary-fixed border-b-[3px] border-on-background relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.07] pointer-events-none bg-[radial-gradient(#1c1b1b_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">

        <nav class="flex items-center flex-wrap gap-2 font-label-sm text-label-sm uppercase mb-space-md">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">HOME</a>
            <span class="text-on-surface-variant">/</span>
            <a href="{{ route('pembelajaran') }}" class="hover:text-primary transition-colors">PEMBELAJARAN</a>
            <span class="text-on-surface-variant">/</span>
            <span class="text-on-surface-variant">KELAS XII</span>
            <span class="text-on-surface-variant">/</span>
            <span class="font-bold text-on-surface">B7R — PKK</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">B7R</span>
                    <span class="badge-semester s2">KEJURUAN</span>
                    <span class="badge-semester s3">KELAS XII</span>
                    <span class="badge-semester s4">FINAL</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    PKK — Kreativitas,<br>Inovasi &amp; Kewirausahaan
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul final yang membahas <strong>kreativitas &amp; inovasi</strong>, <strong>produksi massal</strong>,
                    <strong>HPP &amp; BEP</strong>, <strong>strategi pemasaran (STP, 4P/7P)</strong>, <strong>digital marketing</strong>,
                    <strong>HKI</strong>, <strong>SWOT</strong>, <strong>laporan keuangan</strong>, hingga
                    <strong>Proposal &amp; Laporan Kewirausahaan</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Topik</div>
                    <div class="font-headline-sm text-headline-sm font-bold">48 Topik</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~24 Jam</div>
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
                        <span class="material-symbols-outlined text-secondary text-[32px]">lightbulb</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Kreativitas, Inovasi &amp; Produksi
                            </h2>
                        </div>
                    </div>

                    {{-- ============ 1. KREATIVITAS & INOVASI ============ --}}
                    <article id="kreativitas" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Hakikat Kreativitas &amp; Inovasi
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">🎨 Kreativitas</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Kemampuan menghasilkan <strong>ide, gagasan, konsep, atau cara baru</strong> yang memiliki manfaat.
                                </p>
                                <div class="bg-secondary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">
                                    Kreativitas = Menghasilkan ide baru
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">💡 Inovasi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Penerapan ide kreatif menjadi sesuatu yang memberikan <strong>nilai tambah</strong>.
                                </p>
                                <div class="bg-secondary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">
                                    Inovasi = Menerapkan ide
                                </div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-md">Ciri Orang Kreatif</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Rasa ingin tahu</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Suka coba hal baru</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Berani risiko</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Sudut pandang beda</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tak mudah menyerah</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Banyak alternatif</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Terbuka kritik</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Belajar dari salah</div>
                        </div>
                    </article>

                    {{-- ============ PROSES KREATIVITAS ============ --}}
                    <article id="proses-kreativitas" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Proses Kreativitas (4 Tahap)
                        </h3>

                        <div class="diagram-box mb-space-md">Persiapan
    ↓
Inkubasi
    ↓
Iluminasi
    ↓
Evaluasi & Implementasi</div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-secondary">1. Persiapan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Mengumpulkan informasi &amp; memahami masalah.
                                </p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-secondary">2. Inkubasi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Ide dikembangkan &amp; dicari alternatif solusi.
                                </p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-secondary">3. Iluminasi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Muncul ide atau solusi.
                                </p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-secondary">4. Evaluasi &amp; Implementasi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Ide diuji, diterapkan, diperbaiki, &amp; diluncurkan.
                                </p>
                            </div>
                        </div>
                    </article>

                    {{-- ============ JENIS INOVASI ============ --}}
                    <article id="jenis-inovasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Jenis-Jenis Inovasi
                        </h3>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Inovasi Produk</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Inovasi Proses</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Inovasi Pasar</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Inovasi Sumber Bahan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Inovasi Organisasi</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Kreativitas vs Inovasi</h4>
                        <table class="brutal-table">
                            <thead><tr><th>Kreativitas</th><th>Inovasi</th></tr></thead>
                            <tbody>
                                <tr><td>Menghasilkan ide</td><td>Menerapkan ide</td></tr>
                                <tr><td>Fokus pada gagasan</td><td>Fokus pada penerapan</td></tr>
                                <tr><td>Thinking new things</td><td>Doing new things</td></tr>
                                <tr><td>Belum tentu untung</td><td>Diharapkan nilai tambah</td></tr>
                                <tr><td>Contoh: ide aplikasi</td><td>Contoh: aplikasi dibuat</td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- ============ PRODUKSI MASSAL ============ --}}
                    <article id="produksi-massal" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Perencanaan Produksi Massal
                        </h3>

                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Produksi massal</strong> = menghasilkan produk dalam jumlah besar dengan spesifikasi &amp; kualitas relatif sama.
                        </p>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Karakteristik</h4>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Jumlah besar</span>
                            <span class="badge-semester s2">Standar sama</span>
                            <span class="badge-semester s3">Lini produksi</span>
                            <span class="badge-semester s4">Biaya per unit rendah</span>
                            <span class="badge-semester s5">Butuh perencanaan</span>
                            <span class="badge-semester">Ada QC</span>
                            <span class="badge-semester s2">Persediaan</span>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">5 Tahap Produksi Massal</h4>
                        <div class="diagram-box mb-space-md">PRD (Product Requirements Document)
 ↓
EVT (Engineering Verification Test)
 ↓
DVT (Design Verification Test)
 ↓
PVT (Production Verification Test)
 ↓
Mass Production</div>
                    </article>

                    {{-- ============ QUALITY CONTROL ============ --}}
                    <article id="qc" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Quality Control (QC)
                        </h3>

                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Proses pemeriksaan untuk memastikan produk memenuhi standar kualitas.
                        </p>

                        <div class="diagram-box mb-space-md">Produk
 ↓
Pemeriksaan
 ↓
Sesuai standar?
 ↙          ↘
Ya          Tidak
↓             ↓
Lulus       Perbaikan/Ditolak</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Tujuan QC</h4>
                        <div class="flex flex-wrap gap-1">
                            <span class="badge-semester s4">Kurangi produk cacat</span>
                            <span class="badge-semester s4">Konsisten kualitas</span>
                            <span class="badge-semester s4">Kepuasan pelanggan</span>
                            <span class="badge-semester s4">Kurangi kerugian</span>
                        </div>
                    </article>

                    {{-- ============ PROTOTIPE ============ --}}
                    <article id="prototipe" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Prototipe Produk
                        </h3>

                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Prototipe</strong> = model awal produk sebelum produk final.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">📦 Prototipe Fisik</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Mock-up produk</li>
                                    <li>› Model 3D</li>
                                    <li>› Miniatur</li>
                                    <li>› Kemasan</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">💻 Prototipe Digital</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Wireframe</li>
                                    <li>› UI/UX Design</li>
                                    <li>› Prototype Figma</li>
                                    <li>› Mockup Website</li>
                                </ul>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1">
                            <span class="badge-semester s3">Uji ide</span>
                            <span class="badge-semester s3">Temukan kesalahan awal</span>
                            <span class="badge-semester s3">Uji fungsi</span>
                            <span class="badge-semester s3">Uji desain</span>
                            <span class="badge-semester s3">Feedback</span>
                            <span class="badge-semester s3">Kurangi risiko</span>
                        </div>
                    </article>

                    {{-- ============ BIAYA PRODUKSI & HPP ============ --}}
                    <article id="hpp" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            Biaya Produksi, HPP &amp; Harga Jual
                        </h3>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">Fixed Cost vs Variable Cost</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">🏢 Fixed Cost</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Biaya tetap (tidak berubah terhadap jumlah produksi).</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Sewa tempat</li>
                                    <li>› Penyusutan peralatan</li>
                                    <li>› Biaya internet bulanan</li>
                                    <li>› Gaji tetap</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">📦 Variable Cost</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Biaya variabel (berubah sesuai jumlah produksi).</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Bahan baku</li>
                                    <li>› Kemasan</li>
                                    <li>› Upah per produksi</li>
                                    <li>› Biaya kirim tertentu</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Harga Pokok Produksi (HPP)</h4>
                        <div class="formula-block">
                            <span class="boxed">HPP = Total Biaya Produksi / Jumlah Produk</span>
                        </div>
                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mt-space-sm mb-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2 text-secondary">Contoh:</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Total biaya = Rp1.000.000, Jumlah produk = 100 unit
                            </p>
                            <div class="font-code-inline text-code-inline mt-2">
                                HPP = 1.000.000 / 100 = <strong>Rp10.000/unit</strong>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Harga Jual</h4>
                        <div class="formula-block">
                            <span class="boxed">Harga Jual = HPP + Keuntungan</span>
                        </div>
                        <div class="formula-block mt-2">
                            <span class="boxed">Harga Jual = HPP + (HPP × Margin)</span>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Break Even Point (BEP)</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Kondisi ketika pendapatan = total biaya (tidak untung, tidak rugi).
                        </p>
                        <div class="formula-block">
                            <span class="boxed">BEP = Biaya Tetap / (Harga Jual per Unit − Biaya Variabel per Unit)</span>
                        </div>
                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mt-space-sm">
                            <div class="font-label-sm uppercase font-bold mb-2 text-secondary">Contoh:</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Biaya tetap = Rp1.000.000, Harga jual = Rp20.000, Biaya variabel = Rp10.000
                            </p>
                            <div class="font-code-inline text-code-inline mt-2">
                                BEP = 1.000.000 / (20.000 − 10.000) = <strong>100 unit</strong>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- SEMESTER 2 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-2" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[32px]">storefront</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Pemasaran, HKI &amp; Scaling Up
                            </h2>
                        </div>
                    </div>

                    {{-- ============ STP ============ --}}
                    <article id="stp" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            STP — Segmentation, Targeting, Positioning
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">S — Segmentation</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Membagi pasar menjadi kelompok.</p>
                                <div class="font-code-inline text-code-inline space-y-1">
                                    <div>› Demografis: usia, gender, pendidikan</div>
                                    <div>› Geografis: kota, provinsi, negara</div>
                                    <div>› Psikografis: gaya hidup, minat</div>
                                    <div>› Perilaku: kebiasaan beli</div>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">T — Targeting</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menentukan kelompok sasaran utama.</p>
                                <div class="diagram-box mt-2">Contoh:
Siswa SMK usia 15-18 tahun
yang butuh alat tulis</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">P — Positioning</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menentukan persepsi produk.</p>
                                <div class="diagram-box mt-2">"Aplikasi rental alat
yang mudah digunakan
dan otomatis"</div>
                            </div>
                        </div>
                    </article>

                    {{-- ============ MARKETING MIX ============ --}}
                    <article id="marketing-mix" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Marketing Mix — 4P &amp; 7P
                        </h3>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-md text-center shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-headline-sm font-bold text-secondary">Product</div>
                                <p class="font-body-sm text-body-sm mt-1">Apa yang dijual?</p>
                            </div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-md text-center shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-headline-sm font-bold text-secondary">Price</div>
                                <p class="font-body-sm text-body-sm mt-1">Berapa harganya?</p>
                            </div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-md text-center shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-headline-sm font-bold text-secondary">Place</div>
                                <p class="font-body-sm text-body-sm mt-1">Di mana dijual?</p>
                            </div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-md text-center shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-headline-sm font-bold text-secondary">Promotion</div>
                                <p class="font-body-sm text-body-sm mt-1">Bagaimana promosi?</p>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Tambahan untuk Jasa (7P)</h4>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="bg-secondary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">People</div>
                            <div class="bg-secondary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Process</div>
                            <div class="bg-secondary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Physical Evidence</div>
                        </div>
                    </article>

                    {{-- ============ DIGITAL MARKETING ============ --}}
                    <article id="digital-marketing" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Digital Marketing &amp; E-Commerce
                        </h3>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Instagram</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">TikTok</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Website</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Marketplace</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">WhatsApp</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Google &amp; Email</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Strategi Digital</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">Content Marketing</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Membuat konten menarik &amp; informatif.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">Copywriting</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Tulisan pendorong aksi: <em>"Pesan sekarang!"</em></p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">Social Media Marketing</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Bangun awareness &amp; pelanggan.</p>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Alur E-Commerce</h4>
                        <div class="diagram-box">Promosi
 ↓
Pelanggan lihat produk
 ↓
Pilih produk
 ↓
Checkout
 ↓
Pembayaran
 ↓
Pengiriman
 ↓
Produk diterima</div>
                    </article>

                    {{-- ============ HKI ============ --}}
                    <article id="hki" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Hak Kekayaan Intelektual (HKI)
                        </h3>

                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Hak hukum atas hasil karya intelektual.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">© Hak Cipta</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Melindungi buku, musik, film, foto, <strong>software</strong>, tulisan, desain grafis.</p>
                                <div class="bg-secondary-fixed border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">
                                    Contoh RPL: source code &amp; dokumentasi software
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">™ Merek</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Melindungi identitas produk/jasa.</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Nama brand</li>
                                    <li>› Logo</li>
                                    <li>› Slogan</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">⚙️ Paten</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Melindungi invensi teknologi yang memenuhi syarat hukum.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">🎨 Desain Industri</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Melindungi tampilan estetis produk.</p>
                            </div>
                        </div>
                    </article>

                    {{-- ============ SWOT ============ --}}
                    <article id="swot" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Analisis SWOT
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="swot-card swot-s">
                                <div class="font-label-lg uppercase font-bold mb-2">S — Strength</div>
                                <p class="font-body-sm mb-2"><strong>Kekuatan internal</strong></p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Sistem digital</li>
                                    <li>› Data lebih terorganisasi</li>
                                </ul>
                            </div>
                            <div class="swot-card swot-w">
                                <div class="font-label-lg uppercase font-bold mb-2">W — Weakness</div>
                                <p class="font-body-sm mb-2"><strong>Kelemahan internal</strong></p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Butuh komputer</li>
                                    <li>› Butuh pengguna paham aplikasi</li>
                                </ul>
                            </div>
                            <div class="swot-card swot-o">
                                <div class="font-label-lg uppercase font-bold mb-2">O — Opportunity</div>
                                <p class="font-body-sm mb-2"><strong>Peluang eksternal</strong></p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Banyak rental mulai digitalisasi</li>
                                </ul>
                            </div>
                            <div class="swot-card swot-t">
                                <div class="font-label-lg uppercase font-bold mb-2">T — Threat</div>
                                <p class="font-body-sm mb-2"><strong>Ancaman eksternal</strong></p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Kompetitor pakai sistem serupa</li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    {{-- ============ LAPORAN KEUANGAN ============ --}}
                    <article id="laporan-keuangan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Laporan Keuangan
                        </h3>

                        <div class="space-y-space-md">
                            <details class="accordion-card" open>
                                <summary>Laporan Laba Rugi</summary>
                                <div class="p-space-md">
                                    <div class="diagram-box mb-2">Pendapatan
- Beban
---------
Laba / Rugi</div>
                                    <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm">
                                        <div class="font-label-sm uppercase font-bold mb-1 text-secondary">Contoh:</div>
                                        <div class="font-code-inline text-code-inline">
                                            Pendapatan: Rp5.000.000<br>
                                            Beban: Rp3.000.000<br>
                                            Laba: <strong>Rp2.000.000</strong>
                                        </div>
                                    </div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>Neraca</summary>
                                <div class="p-space-md">
                                    <div class="formula-block"><span class="boxed">Aset = Liabilitas + Ekuitas</span></div>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-3">
                                        <div class="bg-secondary-fixed border-[2px] border-on-background p-space-sm">
                                            <div class="font-label-sm uppercase font-bold mb-1">Aset</div>
                                            <p class="font-body-sm text-body-sm">Kas, peralatan, persediaan</p>
                                        </div>
                                        <div class="bg-secondary-fixed border-[2px] border-on-background p-space-sm">
                                            <div class="font-label-sm uppercase font-bold mb-1">Liabilitas</div>
                                            <p class="font-body-sm text-body-sm">Utang / kewajiban</p>
                                        </div>
                                        <div class="bg-secondary-fixed border-[2px] border-on-background p-space-sm">
                                            <div class="font-label-sm uppercase font-bold mb-1">Ekuitas</div>
                                            <p class="font-body-sm text-body-sm">Modal / hak pemilik</p>
                                        </div>
                                    </div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>Arus Kas</summary>
                                <div class="p-space-md">
                                    <div class="diagram-box">Kas masuk
 + Penjualan
 + Modal
      ↓
Kas keluar
 - Bahan
 - Transportasi
 - Operasional
      ↓
Saldo kas</div>
                                </div>
                            </details>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Rumus Laba</h4>
                        <div class="formula-block">
                            <span class="boxed">Laba = Pendapatan − Total Biaya</span>
                        </div>
                    </article>

                    {{-- ============ SCALING UP ============ --}}
                    <article id="scaling" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            Scaling Up
                        </h3>

                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Scaling up</strong> = mengembangkan usaha ke skala lebih besar.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tambah produk</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tambah karyawan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Buka cabang</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Perluas pasar</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tambah reseller</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Gunakan teknologi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kerja sama</div>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- PROPOSAL & LAPORAN ===================================================== --}}
                {{-- ===================================================== --}}
                <div id="proposal" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[32px]">description</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian Penting</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Proposal &amp; Laporan Kewirausahaan
                            </h2>
                        </div>
                    </div>

                    {{-- Struktur Proposal --}}
                    <article id="struktur-proposal" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Struktur Proposal Kewirausahaan
                        </h3>

                        <div class="report-page mb-space-md">
                            <div class="title">PROPOSAL KEWIRAUSAHAAN</div>
                            <div style="text-align:center;font-weight:600;">COVER · KATA PENGANTAR · DAFTAR ISI</div>

                            <div class="bab-title">BAB I — PENDAHULUAN</div>
                            <div class="subbab">1.1 Latar Belakang</div>
                            <div class="subbab">1.2 Rumusan Masalah</div>
                            <div class="subbab">1.3 Tujuan</div>
                            <div class="subbab">1.4 Manfaat</div>

                            <div class="bab-title">BAB II — GAMBARAN USAHA</div>
                            <div class="subbab">2.1 Nama Usaha</div>
                            <div class="subbab">2.2 Deskripsi Produk</div>
                            <div class="subbab">2.3 Target Pasar</div>
                            <div class="subbab">2.4 Analisis SWOT</div>
                            <div class="subbab">2.5 Strategi Pemasaran</div>

                            <div class="bab-title">BAB III — PERENCANAAN PRODUKSI</div>
                            <div class="subbab">3.1 Bahan</div>
                            <div class="subbab">3.2 Alat</div>
                            <div class="subbab">3.3 Proses Produksi</div>
                            <div class="subbab">3.4 Kapasitas Produksi</div>
                            <div class="subbab">3.5 Quality Control</div>

                            <div class="bab-title">BAB IV — RENCANA BIAYA</div>
                            <div class="subbab">4.1 Modal</div>
                            <div class="subbab">4.2 Biaya Produksi</div>
                            <div class="subbab">4.3 HPP</div>
                            <div class="subbab">4.4 Harga Jual</div>
                            <div class="subbab">4.5 BEP</div>
                            <div class="subbab">4.6 Perkiraan Keuntungan</div>

                            <div class="bab-title">BAB V — PENUTUP</div>
                            <div class="subbab">5.1 Kesimpulan</div>
                            <div class="subbab">5.2 Saran</div>

                            <div style="text-align:center;font-weight:600;margin-top:1rem;">DAFTAR PUSTAKA · LAMPIRAN</div>
                        </div>
                    </article>

                    {{-- Latar Belakang --}}
                    <article id="latar-belakang" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Latar Belakang yang Baik
                        </h3>

                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Susun dengan pola: <strong>masalah → kondisi → solusi → produk → alasan usaha</strong>
                        </p>

                        <div class="diagram-box mb-space-md">Contoh Pola:
Perkembangan teknologi telah memberikan peluang ...
Namun, masih terdapat permasalahan ....
Oleh karena itu, diperlukan ....
Berdasarkan permasalahan tersebut, kelompok kami mengembangkan ....
Produk tersebut diharapkan dapat ....</div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-red-600">❌ Hindari</div>
                                <p class="font-body-sm text-body-sm"><em>"Kami ingin membuat usaha karena ingin mendapatkan keuntungan."</em></p>
                            </div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-green-700">✔ Sebaiknya</div>
                                <p class="font-body-sm text-body-sm">Ada masalah &amp; alasan yang jelas didukung data/kondisi nyata.</p>
                            </div>
                        </div>
                    </article>

                    {{-- Proposal vs Laporan --}}
                    <article id="proposal-vs-laporan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Proposal vs Laporan Kegiatan
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">📋 Proposal</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Dibuat <strong>sebelum</strong> kegiatan.</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Isi: <strong>rencana kegiatan</strong>.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">📊 Laporan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Dibuat <strong>setelah</strong> kegiatan.</p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Isi: <strong>hasil pelaksanaan</strong>.</p>
                            </div>
                        </div>

                        <div class="diagram-box mt-space-md">PROPOSAL
"Rencana Penjualan Produk X"
       ↓
Kegiatan dilaksanakan
       ↓
LAPORAN
"Hasil Kegiatan Penjualan Produk X"</div>
                    </article>

                    {{-- Struktur Laporan --}}
                    <article id="struktur-laporan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Struktur Laporan Kegiatan
                        </h3>

                        <div class="report-page">
                            <div class="title">LAPORAN KEGIATAN KEWIRAUSAHAAN</div>
                            <div style="text-align:center;font-weight:600;">COVER · LEMBAR PENGESAHAN · KATA PENGANTAR · DAFTAR ISI</div>

                            <div class="bab-title">BAB I — PENDAHULUAN</div>
                            <div class="subbab">1.1 Latar Belakang</div>
                            <div class="subbab">1.2 Tujuan</div>
                            <div class="subbab">1.3 Manfaat</div>

                            <div class="bab-title">BAB II — PROFIL USAHA</div>
                            <div class="subbab">2.1 Nama Usaha</div>
                            <div class="subbab">2.2 Deskripsi Produk</div>
                            <div class="subbab">2.3 Struktur Tim</div>
                            <div class="subbab">2.4 Target Konsumen</div>

                            <div class="bab-title">BAB III — PELAKSANAAN</div>
                            <div class="subbab">3.1 Waktu dan Tempat</div>
                            <div class="subbab">3.2 Alat dan Bahan</div>
                            <div class="subbab">3.3 Proses Produksi</div>
                            <div class="subbab">3.4 Proses Pemasaran</div>
                            <div class="subbab">3.5 Pembagian Tugas</div>

                            <div class="bab-title">BAB IV — HASIL DAN PEMBAHASAN</div>
                            <div class="subbab">4.1 Hasil Produksi</div>
                            <div class="subbab">4.2 Hasil Penjualan</div>
                            <div class="subbab">4.3 Biaya Produksi</div>
                            <div class="subbab">4.4 Pendapatan</div>
                            <div class="subbab">4.5 Keuntungan / Kerugian</div>
                            <div class="subbab">4.6 Kendala</div>
                            <div class="subbab">4.7 Solusi</div>
                            <div class="subbab">4.8 Evaluasi</div>

                            <div class="bab-title">BAB V — PENUTUP</div>
                            <div class="subbab">5.1 Kesimpulan</div>
                            <div class="subbab">5.2 Saran</div>

                            <div style="text-align:center;font-weight:600;margin-top:1rem;">DAFTAR PUSTAKA · LAMPIRAN</div>
                        </div>
                    </article>

                    {{-- FORMAT LAPORAN --}}
                    <article id="format-laporan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">E</span>
                            Format Laporan (Standar Sekolah)
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">📄 Kertas &amp; Margin</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Kertas: A4 (21 × 29,7 cm)</li>
                                    <li>› Kiri: 4 cm</li>
                                    <li>› Atas: 3 cm</li>
                                    <li>› Kanan: 3 cm</li>
                                    <li>› Bawah: 3 cm</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">🅰️ Font</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Font: Times New Roman</li>
                                    <li>› Isi: 12 pt</li>
                                    <li>› Judul BAB: 14–16 pt</li>
                                    <li>› Subbab: 12–14 pt</li>
                                    <li>› Max 1–2 jenis font</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">📏 Spasi &amp; Paragraf</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Spasi isi: 1,5</li>
                                    <li>› Indentasi paragraf: 1,25 cm</li>
                                    <li>› Alignment: Justify</li>
                                    <li>› Judul: Center</li>
                                    <li>› Jangan pakai banyak spasi manual</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">🔢 Penomoran</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Bagian awal: Romawi (i, ii, iii)</li>
                                    <li>› Isi: Angka (1, 2, 3)</li>
                                    <li>› Posisi: Kanan bawah / tengah</li>
                                    <li>› BAB: Kapital, Bold, Center</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Contoh Tabel yang Benar</h4>
                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2">Tabel 3.1 Biaya Produksi</div>
                            <table class="brutal-table">
                                <thead><tr><th>No</th><th>Nama</th><th>Jumlah</th><th>Biaya</th></tr></thead>
                                <tbody>
                                    <tr><td>1</td><td>Bahan A</td><td>10</td><td>Rp50.000</td></tr>
                                    <tr><td>2</td><td>Bahan B</td><td>5</td><td>Rp30.000</td></tr>
                                    <tr><td colspan="3" style="text-align:right;"><strong>Total</strong></td><td><strong>Rp80.000</strong></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </article>

                    {{-- CHECKLIST --}}
                    <article id="checklist" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">F</span>
                            Checklist Sebelum Kumpul
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">📐 Format</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>☑ Kertas A4</li>
                                    <li>☑ Margin sesuai</li>
                                    <li>☑ Font konsisten</li>
                                    <li>☑ Ukuran font konsisten</li>
                                    <li>☑ Spasi konsisten</li>
                                    <li>☑ Paragraf rapi</li>
                                    <li>☑ Nomor halaman benar</li>
                                    <li>☑ Heading konsisten</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">📝 Isi</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>☑ Cover</li>
                                    <li>☑ Kata pengantar</li>
                                    <li>☑ Daftar isi</li>
                                    <li>☑ Pendahuluan</li>
                                    <li>☑ Profil usaha</li>
                                    <li>☑ Proses kegiatan</li>
                                    <li>☑ HPP &amp; Harga jual</li>
                                    <li>☑ Keuntungan/rugi</li>
                                    <li>☑ SWOT &amp; Evaluasi</li>
                                    <li>☑ Kesimpulan &amp; Saran</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">🎨 Visual</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>☑ Foto jelas</li>
                                    <li>☑ Tabel rapi</li>
                                    <li>☑ Gambar ada keterangan</li>
                                    <li>☑ Tidak ada teks terpotong</li>
                                    <li>☑ Tidak ada halaman kosong</li>
                                    <li>☑ Tidak ada spasi berlebihan</li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    {{-- RUMUS --}}
                    <article id="rumus" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">G</span>
                            Rumus Wajib Hafal
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">HPP</div>
                                <div class="formula-block">HPP = Total Biaya Produksi / Jumlah Produk</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">Harga Jual</div>
                                <div class="formula-block">Harga Jual = HPP + Keuntungan</div>
                                <div class="formula-block">Harga Jual = HPP + (HPP × Margin)</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">Laba</div>
                                <div class="formula-block">Laba = Pendapatan − Total Biaya</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">BEP Unit</div>
                                <div class="formula-block">BEP = Biaya Tetap / (Harga Jual − Biaya Variabel)</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] md:col-span-2">
                                <div class="font-label-lg uppercase font-bold mb-2 text-secondary">Persamaan Neraca</div>
                                <div class="formula-block">Aset = Liabilitas + Ekuitas</div>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- ==================== NAVIGASI BAWAH ==================== --}}
                <div class="border-t-[3px] border-on-background pt-space-lg flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-md">
                    <a href="{{ route('pembelajaran') }}"
                        class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-fixed hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
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
                            class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-secondary-container border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-primary-container hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] transition-all flex items-center justify-center gap-2">
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
                    <div class="bg-secondary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">info</span>
                            INFO MODUL
                        </div>
                        <div class="font-body-sm text-body-sm space-y-1">
                            <div class="flex justify-between"><span>Kelas:</span><strong>XII RPL</strong></div>
                            <div class="flex justify-between"><span>Kode:</span><strong>B7R</strong></div>
                            <div class="flex justify-between"><span>Topik:</span><strong>48</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~24 Jam</strong></div>
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
                            <a href="#kreativitas" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">1. Kreativitas &amp; Inovasi</a>
                            <a href="#proses-kreativitas" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Proses Kreativitas</a>
                            <a href="#jenis-inovasi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Jenis Inovasi</a>
                            <a href="#produksi-massal" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">2. Produksi Massal</a>
                            <a href="#qc" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">3. Quality Control</a>
                            <a href="#prototipe" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">4. Prototipe</a>
                            <a href="#hpp" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">5. HPP &amp; BEP</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2</div>
                            <a href="#stp" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">1. STP</a>
                            <a href="#marketing-mix" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">2. Marketing Mix</a>
                            <a href="#digital-marketing" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">3. Digital Marketing</a>
                            <a href="#hki" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">4. HKI</a>
                            <a href="#swot" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">5. SWOT</a>
                            <a href="#laporan-keuangan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">6. Laporan Keuangan</a>
                            <a href="#scaling" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">7. Scaling Up</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Proposal &amp; Laporan</div>
                            <a href="#struktur-proposal" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">A. Struktur Proposal</a>
                            <a href="#latar-belakang" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">B. Latar Belakang</a>
                            <a href="#proposal-vs-laporan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">C. Proposal vs Laporan</a>
                            <a href="#struktur-laporan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">D. Struktur Laporan</a>
                            <a href="#format-laporan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">E. Format Laporan</a>
                            <a href="#checklist" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">F. Checklist</a>
                            <a href="#rumus" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">G. Rumus Wajib</a>
                        </nav>
                    </div>

                    {{-- Quick Action --}}
                    <div class="mt-space-md bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-2">QUICK ACTION</div>
                        <a href="{{ route('contact') }}"
                            class="block w-full text-center font-label-sm uppercase font-bold py-2 bg-on-background text-inverse-on-surface border-[2px] border-on-background shadow-[2px_2px_0px_#ffd167] hover:shadow-[4px_4px_0px_#ffd167] transition-all">
                            KONSULTASI →
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

{{-- ==================== CAPSTONE PROJECT CTA ==================== --}}
<section class="w-full bg-secondary-fixed border-y-[3px] border-on-background">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-lg items-center">
            <div class="md:col-span-8">
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">CAPSTONE PROJECT</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Bangun Produk Kreatif &amp; Proposal Wirausaha
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai <strong>kreativitas</strong>, <strong>inovasi</strong>,
                    <strong>HPP &amp; BEP</strong>, <strong>marketing mix</strong>, <strong>HKI</strong>,
                    <strong>SWOT</strong>, dan <strong>laporan keuangan</strong>, siswa diharapkan
                    mampu menyusun <strong>Proposal Kewirausahaan</strong> yang lengkap + <strong>Laporan Kegiatan</strong>
                    dengan format standar — siap <strong>dipresentasikan</strong>.
                </p>
            </div>
            <div class="md:col-span-4 flex md:justify-end">
                <a href="{{ route('contact') }}"
                    class="font-label-lg text-label-lg uppercase font-bold px-6 py-4 bg-on-background text-inverse-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#ffd167] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#ffd167] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-2">
                    MULAI PROYEK
                    <span class="material-symbols-outlined">rocket_launch</span>
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

        console.log('%c🚀 Modul B7R — PKK XII Loaded', 'background:#ffd167;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
