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

    /* ============ PRINCIPLE CARD (SILA) ============ */
    .sila-card {
        background: #fcf9f8;
        border: 2px solid #1c1b1b;
        border-left: 8px solid #57a8dd;
        padding: 0.75rem 1rem;
        font-family: 'DM Sans', sans-serif;
        font-size: 14px;
        line-height: 1.7;
        box-shadow: 3px 3px 0px #1c1b1b;
    }
    .sila-card::before {
        content: '★';
        color: #57a8dd;
        font-size: 18px;
        font-weight: 900;
        margin-right: 6px;
        vertical-align: middle;
    }

    /* ============ LAW / CONSTITUTION BLOCK ============ */
    .law-block {
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
    .law-block::before {
        content: '⚖';
        position: absolute;
        top: 4px;
        right: 10px;
        color: #57a8dd;
        font-size: 16px;
        font-weight: 900;
    }
    .law-block .boxed {
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

    /* ============ SWOT GRID ============ */
    .swot-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.75rem;
    }
    @media (max-width: 640px) { .swot-grid { grid-template-columns: 1fr; } }
    .swot-box {
        border: 2px solid #1c1b1b;
        padding: 1rem;
        box-shadow: 3px 3px 0px #1c1b1b;
    }
    .swot-s { background: #a7f3a0; }
    .swot-w { background: #ffdad6; }
    .swot-o { background: #c9e6ff; }
    .swot-t { background: #ffdbc8; }

    @media (max-width: 1023px) {
        .toc-sidebar { position: static; max-height: none; }
    }
</style>
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
            <span class="font-bold text-on-surface">A2 — Pendidikan Pancasila</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">A2</span>
                    <span class="badge-semester s2">UMUM</span>
                    <span class="badge-semester s3">KELAS XII</span>
                    <span class="badge-semester s4">PPKN</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    Pendidikan<br>Pancasila
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap yang membahas <strong>Ber-Pancasila dalam keseharian</strong>,
                    <strong>demokrasi &amp; konstitusi UUD NRI 1945</strong>, <strong>tantangan global Pancasila</strong>,
                    <strong>Bhinneka Tunggal Ika</strong>, <strong>sistem hukum &amp; penegakan keadilan</strong>,
                    <strong>hubungan internasional</strong>, hingga <strong>proyek kewarganegaraan &amp; etos kerja</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Bab</div>
                    <div class="font-headline-sm text-headline-sm font-bold">7 Bab</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~14 Jam</div>
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
                        <span class="material-symbols-outlined text-tertiary text-[32px]">flag</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Pancasila, Demokrasi &amp; Tantangan Global
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAB 1: BER-PANCASILA ============ --}}
                    <article id="bab-1" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 1</div>
                            <div class="font-headline-sm uppercase">Ber-Pancasila dalam Keseharian di Masyarakat</div>
                        </div>

                        {{-- A. Pengertian --}}
                        <h3 id="bab1-pengertian" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pengertian Pancasila
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            <strong>Pancasila</strong> adalah dasar negara, ideologi negara, pandangan hidup bangsa,
                            dan sumber nilai dalam kehidupan bermasyarakat, berbangsa, dan bernegara.
                        </p>

                        <div class="space-y-2 mb-space-md">
                            <div class="sila-card"><strong>Sila 1:</strong> Ketuhanan Yang Maha Esa</div>
                            <div class="sila-card"><strong>Sila 2:</strong> Kemanusiaan yang Adil dan Beradab</div>
                            <div class="sila-card"><strong>Sila 3:</strong> Persatuan Indonesia</div>
                            <div class="sila-card"><strong>Sila 4:</strong> Kerakyatan yang Dipimpin oleh Hikmat Kebijaksanaan dalam Permusyawaratan/Perwakilan</div>
                            <div class="sila-card"><strong>Sila 5:</strong> Keadilan Sosial bagi Seluruh Rakyat Indonesia</div>
                        </div>

                        <div class="quote-block">
                            Pancasila tidak hanya dihafalkan, tetapi harus <strong>diterapkan dalam kehidupan sehari-hari</strong>.
                        </div>

                        {{-- B. Identitas Nasional --}}
                        <h3 id="bab1-identitas" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Pancasila sebagai Identitas Nasional
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Identitas nasional</strong> adalah ciri khas yang membedakan suatu bangsa dengan bangsa lainnya.
                            Pancasila menjadi identitas bangsa Indonesia karena nilai-nilainya berasal dari
                            <strong>kehidupan dan kebudayaan masyarakat Indonesia</strong>.
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Gotong royong</span>
                            <span class="badge-semester s2">Musyawarah</span>
                            <span class="badge-semester s3">Toleransi</span>
                            <span class="badge-semester s4">Kekeluargaan</span>
                            <span class="badge-semester s5">Saling membantu</span>
                            <span class="badge-semester">Menghargai perbedaan</span>
                            <span class="badge-semester s2">Kehidupan beragama</span>
                        </div>

                        {{-- C. Nilai Setiap Sila --}}
                        <h3 id="bab1-nilai-sila" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Nilai-Nilai dalam Setiap Sila
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Ketuhanan Yang Maha Esa</summary>
                                <div class="p-space-md">
                                    <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Nilai Utama:</div>
                                    <ul class="font-code-inline text-code-inline space-y-1 mb-3">
                                        <li>› Percaya dan bertakwa kepada Tuhan</li>
                                        <li>› Menjalankan agama masing-masing</li>
                                        <li>› Menghormati agama lain</li>
                                        <li>› Tidak memaksakan agama</li>
                                        <li>› Menjaga kerukunan antarumat beragama</li>
                                    </ul>
                                    <div class="quote-block"><strong>Contoh:</strong> Menghormati teman yang sedang menjalankan ibadah.</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>2. Kemanusiaan yang Adil dan Beradab</summary>
                                <div class="p-space-md">
                                    <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Nilai Utama:</div>
                                    <ul class="font-code-inline text-code-inline space-y-1 mb-3">
                                        <li>› Menghargai manusia</li>
                                        <li>› Menjunjung persamaan derajat</li>
                                        <li>› Bersikap adil</li>
                                        <li>› Menghormati hak orang lain</li>
                                        <li>› Tidak melakukan diskriminasi</li>
                                        <li>› Membantu orang yang membutuhkan</li>
                                    </ul>
                                    <div class="quote-block"><strong>Contoh:</strong> Tidak melakukan <em>bullying</em> terhadap teman.</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>3. Persatuan Indonesia</summary>
                                <div class="p-space-md">
                                    <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Nilai Utama:</div>
                                    <ul class="font-code-inline text-code-inline space-y-1 mb-3">
                                        <li>› Mencintai bangsa Indonesia</li>
                                        <li>› Menjaga persatuan</li>
                                        <li>› Mengutamakan kepentingan bangsa</li>
                                        <li>› Menghargai keberagaman</li>
                                        <li>› Tidak mudah terprovokasi</li>
                                    </ul>
                                    <div class="quote-block"><strong>Contoh:</strong> Bekerja sama tanpa membedakan suku, agama, atau daerah asal.</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>4. Kerakyatan yang Dipimpin oleh Hikmat Kebijaksanaan</summary>
                                <div class="p-space-md">
                                    <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Nilai Utama:</div>
                                    <ul class="font-code-inline text-code-inline space-y-1 mb-3">
                                        <li>› Musyawarah</li>
                                        <li>› Menghargai pendapat</li>
                                        <li>› Tidak memaksakan kehendak</li>
                                        <li>› Menerima keputusan bersama</li>
                                        <li>› Bertanggung jawab</li>
                                    </ul>
                                    <div class="quote-block"><strong>Contoh:</strong> Menentukan ketua kelompok melalui musyawarah.</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>5. Keadilan Sosial bagi Seluruh Rakyat Indonesia</summary>
                                <div class="p-space-md">
                                    <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Nilai Utama:</div>
                                    <ul class="font-code-inline text-code-inline space-y-1 mb-3">
                                        <li>› Bersikap adil</li>
                                        <li>› Menghargai hak orang lain</li>
                                        <li>› Bekerja keras</li>
                                        <li>› Membantu sesama</li>
                                        <li>› Tidak mengambil hak orang lain</li>
                                        <li>› Menciptakan kesejahteraan bersama</li>
                                    </ul>
                                </div>
                            </details>
                        </div>

                        {{-- D. Gotong Royong --}}
                        <h3 id="bab1-gotong" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Gotong Royong
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Gotong royong</strong> adalah bekerja bersama untuk mencapai tujuan bersama.
                            Gotong royong mencerminkan nilai Pancasila, terutama:
                        </p>
                        <div class="flex flex-wrap gap-1 mb-space-sm">
                            <span class="badge-semester">Persatuan</span>
                            <span class="badge-semester s2">Kemanusiaan</span>
                            <span class="badge-semester s3">Musyawarah</span>
                            <span class="badge-semester s4">Keadilan sosial</span>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kerja bakti</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bersih sekolah</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bantu korban bencana</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kegiatan masyarakat</div>
                        </div>

                        {{-- E. Musyawarah --}}
                        <h3 id="bab1-musyawarah" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">E</span>
                            Musyawarah
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Proses membahas suatu persoalan bersama untuk mencapai keputusan yang dapat diterima bersama.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kepentingan bersama</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menghargai pendapat</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tidak memaksa</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Alasan baik</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menerima keputusan</div>
                        </div>

                        {{-- F. Portofolio --}}
                        <h3 id="bab1-portofolio" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">F</span>
                            Portofolio Proyek Kewarganegaraan
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Kumpulan dokumentasi kegiatan yang menunjukkan <strong>proses dan hasil penerapan nilai Pancasila</strong>.
                        </p>
                        <div class="diagram-box mb-space-md">ALUR PROYEK KEWARGANEGARAAN:
Masalah → Perencanaan → Pelaksanaan → Dokumentasi → Evaluasi → Presentasi</div>

                        <div class="quote-block mb-space-md">
                            <strong>Contoh:</strong> Masalah sampah di sekolah → membuat program kebersihan → bekerja sama
                            membersihkan lingkungan → mendokumentasikan kegiatan → mengevaluasi hasil → mempresentasikan laporan.
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 1</div>
                            <p class="font-body-sm">
                                Ber-Pancasila berarti menjadikan nilai Pancasila sebagai <strong>pedoman nyata</strong>
                                dalam berpikir, bersikap, dan bertindak.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 2: DEMOKRASI & KONSTITUSI ============ --}}
                    <article id="bab-2" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 2</div>
                            <div class="font-headline-sm uppercase">Demokrasi &amp; Konstitusi UUD NRI 1945</div>
                        </div>

                        <h3 id="bab2-demokrasi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pengertian Demokrasi
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Berasal dari bahasa Yunani:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mb-space-md">
                            <div class="law-block"><span class="boxed">Demos = rakyat</span></div>
                            <div class="law-block"><span class="boxed">Kratos/Kratein = kekuasaan</span></div>
                        </div>
                        <div class="quote-block mb-space-md">
                            Demokrasi = <strong>pemerintahan dari rakyat, oleh rakyat, dan untuk rakyat</strong>.
                            Rakyat berperan menentukan arah pemerintahan, baik langsung maupun melalui wakil.
                        </div>

                        <h3 id="bab2-demokrasi-pancasila" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Demokrasi Pancasila
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Nilai Ketuhanan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kemanusiaan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Persatuan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Musyawarah</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Keadilan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Hak &amp; kewajiban</div>
                        </div>
                        <div class="quote-block mb-space-md">
                            Demokrasi Indonesia tidak hanya menekankan <strong>kebebasan</strong>,
                            tetapi juga <strong>tanggung jawab</strong> dan <strong>kepentingan bersama</strong>.
                        </div>

                        <h3 id="bab2-perkembangan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Perkembangan Demokrasi Indonesia
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Demokrasi Parlementer / Liberal</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Berlaku pada masa awal kemerdekaan.</p>
                                    <ul class="font-code-inline text-code-inline space-y-1">
                                        <li>› Sistem parlementer</li>
                                        <li>› Kabinet sering berganti</li>
                                        <li>› Partai politik berperan besar</li>
                                    </ul>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Demokrasi Terpimpin</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Berkembang pada masa Presiden Soekarno. Kekuasaan politik menjadi lebih terpusat
                                        dan peran presiden semakin kuat.
                                    </p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Demokrasi Pancasila Masa Orde Baru</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Pemerintah menekankan Pancasila sebagai dasar kehidupan bernegara,
                                        tetapi praktik politiknya mengalami berbagai persoalan, termasuk keterbatasan kebebasan politik.
                                    </p>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>4. Demokrasi Era Reformasi (1998–sekarang)</summary>
                                <div class="p-space-md">
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">Pemilu kompetitif</span>
                                        <span class="badge-semester s2">Kebebasan pers</span>
                                        <span class="badge-semester s3">Kebebasan berpendapat</span>
                                        <span class="badge-semester s4">Penguatan lembaga negara</span>
                                        <span class="badge-semester s5">Desentralisasi</span>
                                        <span class="badge-semester">Perlindungan HAM</span>
                                    </div>
                                </div>
                            </details>
                        </div>

                        <h3 id="bab2-konstitusi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Konstitusi
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Konstitusi</strong> adalah hukum dasar yang menjadi landasan penyelenggaraan negara.
                            Konstitusi Indonesia: <strong>UUD NRI Tahun 1945</strong>.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bentuk negara</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Sistem pemerintahan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Lembaga negara</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Hak &amp; kewajiban</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Hubungan pemerintah–warga</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Prinsip penyelenggaraan</div>
                        </div>

                        <h3 id="bab2-hubungan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">E</span>
                            Hubungan Pancasila &amp; UUD NRI 1945
                        </h3>
                        <div class="diagram-box mb-space-md">PANCASILA  →  Dasar negara & sumber nilai
     ↓
UUD NRI 1945  →  Hukum dasar yang menjabarkan nilai-nilai Pancasila
                 dalam penyelenggaraan negara

Pancasila tercantum dalam Pembukaan UUD NRI 1945, alinea ke-4.</div>

                        <h3 id="bab2-lembaga" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">F</span>
                            Lembaga Negara
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">MPR</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">DPR</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">DPD</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Presiden</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">BPK</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">MA</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">MK</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">KY</div>
                        </div>

                        <h3 id="bab2-pelanggaran" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">G</span>
                            Pelanggaran Konstitusi
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Terjadi apabila tindakan atau kebijakan <strong>bertentangan dengan UUD NRI Tahun 1945</strong>.
                            Penyelesaiannya dapat dilakukan melalui:
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Mekanisme hukum</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Lembaga berwenang</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pengadilan</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Musyawarah</div>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 2</div>
                            <p class="font-body-sm">
                                Demokrasi Indonesia harus dilaksanakan berdasarkan <strong>Pancasila, UUD NRI 1945,
                                hukum, HAM, musyawarah, dan tanggung jawab warga negara</strong>.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 3: PANCASILA & GLOBALISASI ============ --}}
                    <article id="bab-3" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 3</div>
                            <div class="font-headline-sm uppercase">Peluang &amp; Tantangan Pancasila dalam Kehidupan Global</div>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Globalisasi membuat hubungan antarnegara semakin terbuka. Teknologi internet membuat
                            informasi, budaya, ekonomi, dan ideologi dari berbagai negara masuk dengan cepat.
                            Karena itu, Pancasila diperlukan sebagai <strong>pedoman dan penyaring</strong>.
                        </p>

                        <h3 id="bab3-tantangan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Tantangan Global
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Individualisme Ekstrem</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Mengutamakan kepentingan diri sendiri dan mengabaikan kepentingan masyarakat.
                                    </p>
                                    <div class="quote-block">
                                        Pancasila mengajarkan: kepentingan pribadi harus <strong>diseimbangkan</strong>
                                        dengan kepentingan bersama.
                                    </div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Intoleransi</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Tidak menghargai perbedaan agama, suku, budaya, atau pendapat.
                                    </p>
                                    <div class="quote-block">
                                        Pancasila mengajarkan: <strong>menghargai keberagaman dan menjaga persatuan</strong>.
                                    </div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Radikalisme</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Paham atau tindakan yang menggunakan cara ekstrem dan bertentangan dengan
                                        kehidupan damai serta konstitusional.
                                    </p>
                                    <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Pencegahan:</div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">Pendidikan</span>
                                        <span class="badge-semester s2">Literasi</span>
                                        <span class="badge-semester s3">Dialog</span>
                                        <span class="badge-semester s4">Toleransi</span>
                                        <span class="badge-semester s5">Pemahaman Pancasila</span>
                                    </div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>4. Perubahan Iklim</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                        Persoalan global yang membutuhkan kerja sama.
                                    </p>
                                    <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Nilai Pancasila:</div>
                                    <ul class="font-code-inline text-code-inline space-y-1">
                                        <li>› Menjaga lingkungan</li>
                                        <li>› Mengurangi pencemaran</li>
                                        <li>› Menggunakan sumber daya secara bertanggung jawab</li>
                                        <li>› Gotong royong menjaga alam</li>
                                    </ul>
                                </div>
                            </details>
                        </div>

                        <h3 id="bab3-solusi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Pancasila sebagai Solusi
                        </h3>

                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Tantangan</th><th>Nilai Pancasila</th></tr></thead>
                            <tbody>
                                <tr><td>Individualisme</td><td>Gotong royong</td></tr>
                                <tr><td>Intoleransi</td><td>Toleransi &amp; kemanusiaan</td></tr>
                                <tr><td>Radikalisme</td><td>Persatuan &amp; musyawarah</td></tr>
                                <tr><td>Kesenjangan</td><td>Keadilan sosial</td></tr>
                                <tr><td>Kerusakan lingkungan</td><td>Tanggung jawab bersama</td></tr>
                                <tr><td>Konflik sosial</td><td>Musyawarah</td></tr>
                            </tbody>
                        </table>

                        <h3 id="bab3-swot" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Analisis SWOT Indonesia
                        </h3>

                        <div class="law-block mb-space-md">
                            <span class="boxed">SWOT</span> = Strength · Weakness · Opportunity · Threat
                        </div>

                        <div class="swot-grid mb-space-md">
                            <div class="swot-box swot-s">
                                <div class="font-label-sm uppercase font-bold mb-2">💪 S — Kekuatan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Sumber daya alam melimpah</li>
                                    <li>› Jumlah penduduk besar</li>
                                    <li>› Bonus demografi</li>
                                    <li>› Keberagaman budaya</li>
                                    <li>› Posisi geografis strategis</li>
                                    <li>› Pasar domestik besar</li>
                                    <li>› Kekayaan laut</li>
                                    <li>› SDM berkembang</li>
                                </ul>
                            </div>
                            <div class="swot-box swot-w">
                                <div class="font-label-sm uppercase font-bold mb-2">⚠ W — Kelemahan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Korupsi</li>
                                    <li>› Kesenjangan ekonomi</li>
                                    <li>› Kesenjangan pembangunan antarwilayah</li>
                                    <li>› Kualitas pendidikan belum merata</li>
                                    <li>› Masalah infrastruktur</li>
                                    <li>› Persoalan birokrasi</li>
                                </ul>
                            </div>
                            <div class="swot-box swot-o">
                                <div class="font-label-sm uppercase font-bold mb-2">🚀 O — Peluang</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Kekuatan ekonomi besar</li>
                                    <li>› Industri halal</li>
                                    <li>› Ekonomi digital</li>
                                    <li>› Industri kreatif</li>
                                    <li>› Bonus demografi</li>
                                    <li>› Peningkatan ekspor</li>
                                    <li>› Pengembangan teknologi</li>
                                </ul>
                            </div>
                            <div class="swot-box swot-t">
                                <div class="font-label-sm uppercase font-bold mb-2">🔥 T — Ancaman</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Ideologi bertentangan Pancasila</li>
                                    <li>› Radikalisme</li>
                                    <li>› Intoleransi</li>
                                    <li>› Kejahatan siber</li>
                                    <li>› Krisis moral</li>
                                    <li>› Konflik sosial</li>
                                    <li>› Perubahan iklim</li>
                                    <li>› Persaingan ekonomi global</li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 3</div>
                            <p class="font-body-sm">
                                Pancasila berfungsi sebagai <strong>pedoman dalam menghadapi perubahan global</strong>
                                sekaligus <strong>penyaring terhadap pengaruh yang tidak sesuai dengan nilai bangsa</strong>.
                            </p>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- SEMESTER 2 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-2" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">public</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Bhinneka, Hukum, Diplomasi &amp; Aksi Nyata
                            </h2>
                        </div>
                    </div>

                    {{-- ============ BAB 4: BHINNEKA TUNGGAL IKA ============ --}}
                    <article id="bab-4" class="scroll-mt-24 mb-space-xl">
                        <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 4</div>
                            <div class="font-headline-sm uppercase">Bhinneka Tunggal Ika: Menjaga Harmoni dalam Keberagaman</div>
                        </div>

                        <h3 id="bab4-makna" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Makna Bhinneka Tunggal Ika
                        </h3>
                        <div class="law-block mb-space-md">
                            <span class="boxed">Bhinneka Tunggal Ika</span> = Berbeda-beda tetapi tetap satu
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Menggambarkan kondisi Indonesia yang memiliki keberagaman tetapi tetap menjadi satu bangsa.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Agama</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Suku</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Ras</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bahasa</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Budaya</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Adat istiadat</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Daerah</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pekerjaan &amp; pendapat</div>
                        </div>

                        <h3 id="bab4-manfaat" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Manfaat Keberagaman
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Memperkaya budaya</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Meningkatkan kreativitas</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Memperluas wawasan</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menciptakan tradisi</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Memperkuat identitas</div>
                        </div>
                        <div class="quote-block mb-space-md">
                            Namun, keberagaman juga dapat menimbulkan konflik jika <strong>tidak dikelola dengan baik</strong>.
                        </div>

                        <h3 id="bab4-konflik" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Potensi Konflik
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-error-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Intoleransi</div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Diskriminasi</div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Fanatisme</div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Prasangka</div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Hoaks</div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kesenjangan sosial</div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Beda kepentingan</div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Provokasi</div>
                        </div>

                        <h3 id="bab4-harmoni" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Cara Menjaga Harmoni
                        </h3>
                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Toleransi</summary>
                                <div class="p-space-md"><p class="font-body-sm">Menghormati perbedaan tanpa harus kehilangan keyakinan sendiri.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Dialog</summary>
                                <div class="p-space-md"><p class="font-body-sm">Menyelesaikan perbedaan melalui komunikasi.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Musyawarah</summary>
                                <div class="p-space-md"><p class="font-body-sm">Mencari solusi bersama.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>4. Gotong Royong</summary>
                                <div class="p-space-md"><p class="font-body-sm">Bekerja sama tanpa membedakan latar belakang.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>5. Anti-Diskriminasi</summary>
                                <div class="p-space-md"><p class="font-body-sm">Tidak memperlakukan seseorang secara tidak adil karena identitasnya.</p></div>
                            </details>
                        </div>

                        <h3 id="bab4-generasi-muda" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">E</span>
                            Peran Generasi Muda
                        </h3>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-primary-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tidak bullying</div>
                            <div class="bg-primary-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tidak sebar hoaks</div>
                            <div class="bg-primary-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Hargai teman berbeda</div>
                            <div class="bg-primary-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bijak bermedsos</div>
                            <div class="bg-primary-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bekerja sama</div>
                            <div class="bg-primary-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tolak diskriminasi</div>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 4</div>
                            <p class="font-body-sm">
                                Keberagaman <strong>bukan alasan untuk terpecah</strong>, tetapi kekuatan yang harus
                                dikelola melalui toleransi, solidaritas, dan persatuan.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 5: SISTEM HUKUM ============ --}}
                    <article id="bab-5" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 5</div>
                            <div class="font-headline-sm uppercase">Sistem Hukum &amp; Penegakan Keadilan di Indonesia</div>
                        </div>

                        <h3 id="bab5-hukum" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pengertian Hukum
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            <strong>Hukum</strong> adalah seperangkat aturan yang mengatur kehidupan masyarakat dan
                            bersifat <strong>mengikat serta memiliki sanksi</strong>.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menciptakan ketertiban</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Memberikan keadilan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kepastian hukum</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Melindungi masyarakat</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menciptakan keamanan</div>
                        </div>

                        <h3 id="bab5-ciri" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Ciri-Ciri Hukum
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">1. Mengikat</div>
                                <p class="font-body-sm">Setiap orang dalam wilayah hukum wajib menaati aturan.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">2. Memaksa</div>
                                <p class="font-body-sm">Hukum dapat memaksa seseorang untuk menaati aturan.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">3. Memiliki Sanksi</div>
                                <p class="font-body-sm">Pelanggaran hukum dapat menyebabkan sanksi.</p>
                            </div>
                        </div>

                        <h3 id="bab5-perlindungan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Perlindungan Hukum
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Upaya melindungi hak dan kepentingan seseorang melalui aturan dan mekanisme hukum.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Korban kejahatan</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Hak warga negara</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bantuan hukum</div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Peradilan adil</div>
                        </div>

                        <h3 id="bab5-lembaga" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Lembaga Penegak Hukum
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Kepolisian Negara Republik Indonesia (Polri)</summary>
                                <div class="p-space-md">
                                    <ul class="font-code-inline text-code-inline space-y-1">
                                        <li>› Menjaga keamanan</li>
                                        <li>› Menjaga ketertiban</li>
                                        <li>› Menegakkan hukum</li>
                                        <li>› Melakukan penyelidikan &amp; penyidikan</li>
                                        <li>› Memberikan perlindungan &amp; pelayanan</li>
                                    </ul>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Kejaksaan</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm">Berperan dalam penuntutan dan pelaksanaan kewenangan hukum lainnya.</p>
                                    <div class="quote-block mt-2">
                                        <strong>Catatan:</strong> UU No. 16 Tahun 2004 dalam materi kamu telah mengalami perubahan.
                                        Untuk ujian sekolah, tetap ikuti bahan ajar/guru.
                                    </div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Hakim / Lembaga Peradilan</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2">Bertugas memeriksa, mengadili, dan memutus perkara berdasarkan hukum.</p>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">Adil</span>
                                        <span class="badge-semester s2">Independen</span>
                                        <span class="badge-semester s3">Objektif</span>
                                        <span class="badge-semester s4">Tidak memihak</span>
                                    </div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>4. Advokat</summary>
                                <div class="p-space-md">
                                    <ul class="font-code-inline text-code-inline space-y-1">
                                        <li>› Konsultasi hukum</li>
                                        <li>› Mendampingi klien</li>
                                        <li>› Membela kepentingan hukum klien</li>
                                        <li>› Membantu masyarakat mendapat keadilan</li>
                                    </ul>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>5. Komisi Pemberantasan Korupsi (KPK)</summary>
                                <div class="p-space-md">
                                    <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">Upaya Pemberantasan Korupsi:</div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">Pencegahan</span>
                                        <span class="badge-semester s2">Pendidikan antikorupsi</span>
                                        <span class="badge-semester s3">Koordinasi</span>
                                        <span class="badge-semester s4">Monitoring</span>
                                        <span class="badge-semester s5">Penindakan</span>
                                    </div>
                                </div>
                            </details>
                        </div>

                        <h3 id="bab5-pelanggaran" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">E</span>
                            Pelanggaran Hak &amp; Pengingkaran Kewajiban
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">Pelanggaran Hak</div>
                                <p class="font-body-sm mb-2">Hak seseorang tidak diberikan atau dirampas.</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Diskriminasi</li>
                                    <li>› Kekerasan</li>
                                    <li>› Menghalangi hak orang</li>
                                </ul>
                            </div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">Pengingkaran Kewajiban</div>
                                <p class="font-body-sm mb-2">Kewajiban tidak dijalankan.</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Tidak menaati hukum</li>
                                    <li>› Merusak fasilitas umum</li>
                                    <li>› Tidak hormati hak orang lain</li>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">⚖ PRINSIP PENTING</div>
                            <p class="font-body-sm">
                                Hak dan kewajiban harus berjalan <strong>seimbang</strong>.
                                Jangan hanya menuntut hak tetapi melupakan kewajiban.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 6: HUBUNGAN INTERNASIONAL ============ --}}
                    <article id="bab-6" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 6</div>
                            <div class="font-headline-sm uppercase">Peran Indonesia dalam Hubungan Internasional</div>
                        </div>

                        <h3 id="bab6-pengertian" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Pengertian Hubungan Internasional
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Hubungan yang dilakukan suatu negara dengan negara lain atau organisasi internasional
                            untuk mencapai <strong>kepentingan bersama</strong>.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Politik</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Ekonomi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pendidikan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Sosial</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Keamanan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Budaya</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Lingkungan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kemanusiaan</div>
                        </div>

                        <h3 id="bab6-bebas-aktif" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Politik Luar Negeri Bebas Aktif
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">BEBAS</div>
                                <p class="font-body-sm">
                                    Tidak memihak secara otomatis kepada kekuatan atau blok tertentu.
                                    Indonesia bebas menentukan sikap berdasarkan kepentingan nasional dan prinsip yang dianut.
                                </p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-tertiary">AKTIF</div>
                                <p class="font-body-sm">
                                    Indonesia aktif ikut menciptakan perdamaian dan menyelesaikan masalah internasional.
                                </p>
                            </div>
                        </div>
                        <div class="quote-block mb-space-md">
                            <strong>Bebas ≠ pasif.</strong> Indonesia tetap aktif dalam berbagai kerja sama internasional.
                        </div>

                        <h3 id="bab6-landasan" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Landasan Politik Luar Negeri
                        </h3>
                        <div class="law-block mb-space-md">
                            Pembukaan UUD NRI 1945 → Indonesia ikut melaksanakan <strong>ketertiban dunia</strong>
                            yang berdasarkan <span class="boxed">kemerdekaan, perdamaian abadi, &amp; keadilan sosial</span>.
                        </div>

                        <h3 id="bab6-peran" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Peran Indonesia di Dunia
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">🌏 ASEAN</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Negara pendiri</li>
                                    <li>› Stabilitas kawasan</li>
                                    <li>› Kerja sama ekonomi</li>
                                    <li>› Pendidikan &amp; budaya</li>
                                    <li>› Penyelesaian konflik damai</li>
                                </ul>
                            </div>
                            <div class="bg-secondary-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">🕊 PBB</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Mendukung perdamaian</li>
                                    <li>› Misi perdamaian</li>
                                    <li>› Isu kemanusiaan</li>
                                    <li>› Konflik damai</li>
                                </ul>
                            </div>
                            <div class="bg-primary-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2">💼 G20</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Tuan rumah 2022</li>
                                    <li>› Ekonomi global</li>
                                    <li>› Pembangunan</li>
                                    <li>› Kesehatan &amp; energi</li>
                                    <li>› Perubahan iklim</li>
                                    <li>› Transformasi digital</li>
                                </ul>
                            </div>
                        </div>

                        <h3 id="bab6-diplomasi" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">E</span>
                            Diplomasi
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Usaha suatu negara untuk mencapai <strong>kepentingan nasional</strong> melalui komunikasi,
                            negosiasi, dan hubungan dengan negara lain.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Selesaikan konflik</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Tingkatkan kerja sama</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Lindungi warga</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Perkuat ekonomi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Bangun hubungan</div>
                        </div>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 6</div>
                            <p class="font-body-sm">
                                Indonesia menjalankan politik luar negeri <strong>bebas aktif</strong>, yaitu bebas
                                menentukan sikap dan aktif berkontribusi dalam perdamaian serta kerja sama internasional.
                            </p>
                        </div>
                    </article>

                    {{-- ============ BAB 7: PROYEK KEWARGANEGARAAN ============ --}}
                    <article id="bab-7" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-secondary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">BAB 7</div>
                            <div class="font-headline-sm uppercase">Proyek Kewarganegaraan &amp; Aksi Nyata</div>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Bab ini menghubungkan teori Pancasila dengan <strong>tindakan nyata</strong>.
                        </p>

                        <h3 id="bab7-pjbl" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Project-Based Learning (PjBL)
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Pembelajaran melalui pengerjaan suatu proyek untuk <strong>menyelesaikan masalah nyata</strong>.
                        </p>
                        <div class="diagram-box mb-space-md">ALUR PjBL:
Identifikasi Masalah → Perencanaan → Pelaksanaan → Dokumentasi → Evaluasi → Presentasi</div>

                        <h3 id="bab7-contoh" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Contoh Proyek Kewarganegaraan
                        </h3>

                        <div class="space-y-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Penghijauan</summary>
                                <div class="p-space-md">
                                    <div class="font-label-sm uppercase font-bold mb-1 text-tertiary">Masalah:</div>
                                    <p class="font-body-sm mb-2">Lingkungan sekolah kurang hijau.</p>
                                    <div class="font-label-sm uppercase font-bold mb-1 text-tertiary">Solusi:</div>
                                    <p class="font-body-sm mb-2">Menanam dan merawat tanaman bersama.</p>
                                    <div class="font-label-sm uppercase font-bold mb-1 text-tertiary">Nilai Pancasila:</div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">Gotong royong</span>
                                        <span class="badge-semester s2">Tanggung jawab</span>
                                        <span class="badge-semester s3">Kepedulian lingkungan</span>
                                    </div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Kebersihan Lingkungan</summary>
                                <div class="p-space-md">
                                    <div class="font-label-sm uppercase font-bold mb-1 text-tertiary">Kegiatan:</div>
                                    <ul class="font-code-inline text-code-inline space-y-1 mb-2">
                                        <li>› Membersihkan lingkungan</li>
                                        <li>› Memilah sampah</li>
                                        <li>› Membuat tempat sampah</li>
                                        <li>› Kampanye kebersihan</li>
                                    </ul>
                                    <div class="font-label-sm uppercase font-bold mb-1 text-tertiary">Nilai:</div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">Persatuan</span>
                                        <span class="badge-semester s2">Gotong royong</span>
                                        <span class="badge-semester s3">Tanggung jawab</span>
                                    </div>
                                </div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Kampanye Kesadaran Hukum Digital</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm mb-2">Membuat poster atau konten edukasi tentang:</p>
                                    <ul class="font-code-inline text-code-inline space-y-1 mb-2">
                                        <li>› Bahaya hoaks</li>
                                        <li>› Cyberbullying</li>
                                        <li>› Penipuan online</li>
                                        <li>› Menjaga data pribadi</li>
                                        <li>› Etika bermedia sosial</li>
                                    </ul>
                                    <div class="font-label-sm uppercase font-bold mb-1 text-tertiary">Nilai:</div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">Tanggung jawab</span>
                                        <span class="badge-semester s2">Kemanusiaan</span>
                                        <span class="badge-semester s3">Kesadaran hukum</span>
                                    </div>
                                </div>
                            </details>
                        </div>

                        <h3 id="bab7-sosial" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Donor Darah &amp; Kegiatan Sosial
                        </h3>
                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">Kepedulian</span>
                            <span class="badge-semester s2">Solidaritas</span>
                            <span class="badge-semester s3">Kemanusiaan</span>
                            <span class="badge-semester s4">Gotong royong</span>
                        </div>
                        <div class="quote-block mb-space-md">
                            Untuk pelajar, kegiatan harus dilakukan sesuai <strong>usia, kondisi, aturan sekolah,
                            dan ketentuan penyelenggara</strong>.
                        </div>

                        <h3 id="bab7-etos-kerja" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Etos Kerja Profesional
                        </h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Sebagai siswa SMK, nilai Pancasila harus diterapkan ketika memasuki
                            <strong>Dunia Kerja, Dunia Usaha, dan Dunia Industri (DUDI)</strong>.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                            <details class="accordion-card" open>
                                <summary>1. Disiplin</summary>
                                <div class="p-space-md"><p class="font-body-sm">Datang tepat waktu dan menyelesaikan pekerjaan sesuai jadwal.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>2. Tanggung Jawab</summary>
                                <div class="p-space-md"><p class="font-body-sm">Menyelesaikan tugas dengan baik.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>3. Jujur</summary>
                                <div class="p-space-md"><p class="font-body-sm">Tidak memalsukan data atau hasil pekerjaan.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>4. Profesional</summary>
                                <div class="p-space-md"><p class="font-body-sm">Bekerja sesuai standar dan kompetensi.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>5. Kerja Sama</summary>
                                <div class="p-space-md"><p class="font-body-sm">Mampu bekerja dalam tim.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>6. Kreatif &amp; Inovatif</summary>
                                <div class="p-space-md"><p class="font-body-sm">Mencari solusi yang lebih baik.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>7. Adaptif</summary>
                                <div class="p-space-md"><p class="font-body-sm">Mampu menyesuaikan diri dengan teknologi dan perubahan dunia kerja.</p></div>
                            </details>
                            <details class="accordion-card">
                                <summary>8. Integritas</summary>
                                <div class="p-space-md"><p class="font-body-sm">Tetap melakukan hal yang benar meskipun tidak diawasi.</p></div>
                            </details>
                        </div>

                        <h3 id="bab7-pancasila-kerja" class="scroll-mt-24 font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm mt-space-lg flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">E</span>
                            Hubungan Pancasila &amp; Dunia Kerja
                        </h3>

                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Nilai Pancasila</th><th>Contoh di Dunia Kerja</th></tr></thead>
                            <tbody>
                                <tr><td>Ketuhanan</td><td>Menghormati keyakinan rekan kerja</td></tr>
                                <tr><td>Kemanusiaan</td><td>Tidak melakukan diskriminasi</td></tr>
                                <tr><td>Persatuan</td><td>Bekerja sama dalam tim</td></tr>
                                <tr><td>Musyawarah</td><td>Berdiskusi menyelesaikan masalah</td></tr>
                                <tr><td>Keadilan sosial</td><td>Bersikap adil dan menghargai hak pekerja</td></tr>
                            </tbody>
                        </table>

                        <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">💡 INTI BAB 7</div>
                            <p class="font-body-sm">
                                Pelajar Pancasila bukan hanya <strong>memahami teori</strong>, tetapi mampu mengubah
                                nilai Pancasila menjadi <strong>tindakan nyata dan etos kerja profesional</strong>.
                            </p>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- RINGKASAN CEPAT + GLOSARIUM --}}
                {{-- ===================================================== --}}
                <div id="ringkasan-cepat" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary-container text-[32px]">bolt</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bonus</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Ringkasan Cepat 7 Bab
                            </h2>
                        </div>
                    </div>

                    <table class="brutal-table mb-space-xl">
                        <thead><tr><th>Bab</th><th>Topik</th><th>Kata Kunci</th></tr></thead>
                        <tbody>
                            <tr><td>1</td><td>Ber-Pancasila dalam Keseharian</td><td>5 Sila · Identitas · Gotong royong · Musyawarah</td></tr>
                            <tr><td>2</td><td>Demokrasi &amp; Konstitusi</td><td>Demos-Kratos · Demokrasi Pancasila · UUD 1945 · Lembaga Negara</td></tr>
                            <tr><td>3</td><td>Pancasila &amp; Globalisasi</td><td>Individualisme · Intoleransi · Radikalisme · SWOT</td></tr>
                            <tr><td>4</td><td>Bhinneka Tunggal Ika</td><td>Keberagaman · Toleransi · Dialog · Anti-diskriminasi</td></tr>
                            <tr><td>5</td><td>Sistem Hukum</td><td>Polri · Kejaksaan · Hakim · Advokat · KPK · HAM</td></tr>
                            <tr><td>6</td><td>Hubungan Internasional</td><td>Bebas Aktif · ASEAN · PBB · G20 · Diplomasi</td></tr>
                            <tr><td>7</td><td>Proyek Kewarganegaraan</td><td>PjBL · Etos Kerja · Disiplin · Integritas · DUDI</td></tr>
                        </tbody>
                    </table>

                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary-container text-[32px]">menu_book</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Referensi</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Glosarium Istilah
                            </h2>
                        </div>
                    </div>

                    <table class="brutal-table">
                        <thead><tr><th>Istilah</th><th>Arti</th></tr></thead>
                        <tbody>
                            <tr><td>Pancasila</td><td>Dasar negara &amp; ideologi Indonesia yang terdiri dari 5 sila</td></tr>
                            <tr><td>Identitas Nasional</td><td>Ciri khas yang membedakan suatu bangsa dengan bangsa lain</td></tr>
                            <tr><td>Demokrasi</td><td>Pemerintahan dari, oleh, dan untuk rakyat</td></tr>
                            <tr><td>Konstitusi</td><td>Hukum dasar penyelenggaraan negara</td></tr>
                            <tr><td>Bhinneka Tunggal Ika</td><td>Berbeda-beda tetapi tetap satu</td></tr>
                            <tr><td>Wasathiyah</td><td>Sikap tengah, seimbang, adil, tidak berlebihan</td></tr>
                            <tr><td>SWOT</td><td>Strength, Weakness, Opportunity, Threat — analisis strategis</td></tr>
                            <tr><td>HAM</td><td>Hak Asasi Manusia</td></tr>
                            <tr><td>PjBL</td><td>Project-Based Learning — pembelajaran berbasis proyek</td></tr>
                            <tr><td>DUDI</td><td>Dunia Usaha, Dunia Industri</td></tr>
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
                            <div class="flex justify-between"><span>Kode:</span><strong>A2</strong></div>
                            <div class="flex justify-between"><span>Bab:</span><strong>7</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~14 Jam</strong></div>
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
                            <a href="#bab-1" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 1 — Ber-Pancasila</a>
                            <a href="#bab1-pengertian" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pengertian</a>
                            <a href="#bab1-identitas" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Identitas Nasional</a>
                            <a href="#bab1-nilai-sila" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Nilai 5 Sila</a>
                            <a href="#bab1-gotong" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Gotong Royong</a>
                            <a href="#bab1-musyawarah" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Musyawarah</a>
                            <a href="#bab1-portofolio" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Portofolio</a>

                            <a href="#bab-2" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 2 — Demokrasi &amp; Konstitusi</a>
                            <a href="#bab2-demokrasi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pengertian</a>
                            <a href="#bab2-demokrasi-pancasila" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Demokrasi Pancasila</a>
                            <a href="#bab2-perkembangan" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Perkembangan</a>
                            <a href="#bab2-konstitusi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Konstitusi</a>
                            <a href="#bab2-lembaga" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Lembaga Negara</a>

                            <a href="#bab-3" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 3 — Pancasila &amp; Globalisasi</a>
                            <a href="#bab3-tantangan" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Tantangan Global</a>
                            <a href="#bab3-solusi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pancasila Solusi</a>
                            <a href="#bab3-swot" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Analisis SWOT</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2</div>
                            <a href="#bab-4" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 4 — Bhinneka Tunggal Ika</a>
                            <a href="#bab4-makna" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Makna</a>
                            <a href="#bab4-konflik" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Potensi Konflik</a>
                            <a href="#bab4-harmoni" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Menjaga Harmoni</a>

                            <a href="#bab-5" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 5 — Sistem Hukum</a>
                            <a href="#bab5-hukum" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Pengertian Hukum</a>
                            <a href="#bab5-lembaga" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Lembaga Hukum</a>
                            <a href="#bab5-pelanggaran" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Hak &amp; Kewajiban</a>

                            <a href="#bab-6" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 6 — Hubungan Internasional</a>
                            <a href="#bab6-bebas-aktif" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Bebas Aktif</a>
                            <a href="#bab6-peran" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Peran Indonesia</a>
                            <a href="#bab6-diplomasi" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Diplomasi</a>

                            <a href="#bab-7" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">BAB 7 — Proyek Kewarganegaraan</a>
                            <a href="#bab7-contoh" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Contoh Proyek</a>
                            <a href="#bab7-etos-kerja" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">Etos Kerja</a>

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
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">AKSI NYATA</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Pancasila bukan Slogan, tetapi Tindakan
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai <strong>7 bab Pendidikan Pancasila</strong> — dari nilai-nilai Pancasila,
                    demokrasi, konstitusi, tantangan global, Bhinneka Tunggal Ika, sistem hukum, hubungan
                    internasional, hingga proyek kewarganegaraan — siswa diharapkan mampu
                    <strong>mengamalkan nilai-nilai tersebut dalam kehidupan sehari-hari</strong>,
                    baik di sekolah, masyarakat, maupun dunia kerja (DUDI).
                </p>
            </div>
            <div class="md:col-span-4 flex md:justify-end">
                <a href="{{ route('contact') }}"
                    class="font-label-lg text-label-lg uppercase font-bold px-6 py-4 bg-on-background text-inverse-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#57a8dd] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#57a8dd] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-2">
                    LATIHAN SOAL
                    <span class="material-symbols-outlined">gavel</span>
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

        console.log('%c⚖ Modul A2 — Pendidikan Pancasila XII Loaded', 'background:#c9e6ff;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
