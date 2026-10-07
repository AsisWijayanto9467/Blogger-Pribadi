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
        box-shadow: 4px 4px 0px #ff7a00;
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
        color: #ff7a00;
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

    /* ============ ACCORDION ============ */
    details.accordion-card {
        border: 2px solid #1c1b1b;
        background: #ffffff;
        box-shadow: 3px 3px 0px #1c1b1b;
        transition: all 0.2s ease;
    }
    details.accordion-card[open] { box-shadow: 5px 5px 0px #ff7a00; }
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
        background: #ff7a00;
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
    .badge-semester.s2 { background: #c9e6ff; }
    .badge-semester.s3 { background: #ffdbc8; }
    .badge-semester.s4 { background: #a7f3a0; }

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

    /* ============ SQL KEYWORD BADGES ============ */
    .sql-badge {
        display: inline-block;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        font-weight: 700;
        padding: 2px 8px;
        border: 2px solid #1c1b1b;
        text-transform: uppercase;
    }
    .sql-ddl    { background: #c9e6ff; } /* DDL biru */
    .sql-dml    { background: #a7f3a0; } /* DML hijau */
    .sql-dql    { background: #ffdf9b; } /* DQL kuning */
    .sql-dcl    { background: #ffb4ae; } /* DCL merah */
    .sql-join   { background: #ffdbc8; } /* JOIN oranye */
    .sql-agg    { background: #e0c0af; } /* Aggregasi */

    /* ============ DATABASE TABLE MOCKUP ============ */
    .db-table {
        border: 2px solid #1c1b1b;
        background: #fcf9f8;
        box-shadow: 3px 3px 0px #1c1b1b;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        overflow: hidden;
    }
    .db-table-header {
        background: #1c1b1b;
        color: #ffd167;
        padding: 6px 10px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 11px;
        letter-spacing: 0.05em;
    }
    .db-table table {
        width: 100%;
        border-collapse: collapse;
    }
    .db-table th, .db-table td {
        padding: 5px 10px;
        border-bottom: 1px solid #e0c0af;
        text-align: left;
    }
    .db-table th {
        background: #ffd167;
        font-weight: 700;
        color: #1c1b1b;
        text-transform: uppercase;
        font-size: 10px;
    }
    .db-table tr:last-child td { border-bottom: none; }
    .pk-icon { color: #994700; font-weight: 900; margin-right: 4px; }
    .fk-icon { color: #006491; font-weight: 900; margin-right: 4px; }

    @media (max-width: 1023px) {
        .toc-sidebar { position: static; max-height: none; }
    }
</style>
@endsection

@section("main")

{{-- ==================== READING PROGRESS ==================== --}}
<div id="readingProgress"></div>

{{-- ==================== HERO / BREADCRUMB ==================== --}}
<section class="w-full bg-primary-fixed border-b-[3px] border-on-background relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.07] pointer-events-none bg-[radial-gradient(#1c1b1b_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">

        <nav class="flex items-center flex-wrap gap-2 font-label-sm text-label-sm uppercase mb-space-md">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">HOME</a>
            <span class="text-on-surface-variant">/</span>
            <a href="{{ route('pembelajaran') }}" class="hover:text-primary transition-colors">PEMBELAJARAN</a>
            <span class="text-on-surface-variant">/</span>
            <span class="text-on-surface-variant">KELAS XI</span>
            <span class="text-on-surface-variant">/</span>
            <span class="font-bold text-on-surface">R6 — BD</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">R6</span>
                    <span class="badge-semester s2">KEJURUAN</span>
                    <span class="badge-semester s3">KELAS XI</span>
                    <span class="badge-semester s4">SQL</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    Basis Data
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap yang membahas <strong>konsep dasar data &amp; informasi</strong>, hierarki basis data,
                    perancangan <strong>ERD</strong>, <strong>keys</strong>, <strong>normalisasi (1NF–3NF)</strong>,
                    penggunaan <strong>DBMS</strong> (MySQL, PostgreSQL, SQLite), bahasa <strong>SQL</strong>
                    (<strong>DDL, DML, DQL, DCL</strong>), <strong>query lanjutan</strong>, <strong>JOIN</strong>,
                    <strong>agregasi</strong>, keamanan database, hingga <strong>backup &amp; restore</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Materi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">35+ Topik</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~12 Jam</div>
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
                {{-- BAGIAN A: SEMESTER 1 — KONSEP DASAR --}}
                {{-- ===================================================== --}}
                <div id="semester-1" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">lightbulb</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Konsep &amp; Perancangan Basis Data
                            </h2>
                        </div>
                    </div>

                    {{-- Alur Semester 1 --}}
                    <div class="diagram-box mb-space-lg">Dunia Nyata
    ↓
Analisis Data
    ↓
Entitas &amp; Atribut
    ↓
ERD
    ↓
Menentukan Primary Key &amp; Foreign Key
    ↓
Normalisasi
    ↓
Rancangan Database</div>

                    {{-- 1. Pengenalan Konsep Basis Data --}}
                    <article id="konsep-basis-data" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pengenalan Konsep Basis Data
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Data</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Fakta/nilai mentah yang belum diolah.
                                </p>
                                <div class="code-block"><code>001
Asis
XII RPL
85</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Basis Data</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Kumpulan data terstruktur &amp; saling berhubungan.
                                </p>
                                <div class="diagram-box">Database Sekolah
├── siswa
├── guru
├── kelas
├── mapel
└── nilai</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Informasi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Data yang sudah diolah &amp; bermakna.
                                </p>
                                <div class="diagram-box">"Asis memperoleh nilai 85 pada mata pelajaran Pemrograman Web"</div>
                            </div>
                        </div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>Perbedaan Data vs Informasi</summary>
                            <div class="p-space-md">
                                <table class="brutal-table">
                                    <thead><tr><th>Data</th><th>Informasi</th></tr></thead>
                                    <tbody>
                                        <tr><td>Fakta mentah</td><td>Data yang sudah diolah</td></tr>
                                        <tr><td>Belum memiliki konteks lengkap</td><td>Memiliki makna</td></tr>
                                        <tr><td>Contoh: 85</td><td>Contoh: Nilai Asis adalah 85</td></tr>
                                        <tr><td>Bahan pengolahan</td><td>Untuk pengambilan keputusan</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </details>

                        <details class="accordion-card mb-space-md">
                            <summary>Tujuan Basis Data</summary>
                            <div class="p-space-md">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">1. Memudahkan penyimpanan</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">2. Memudahkan pencarian (query)</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">3. Mengurangi redundansi</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">4. Meningkatkan keamanan</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">5. Menjaga konsistensi</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm font-code-inline text-code-inline">6. Memudahkan pengolahan</div>
                                </div>
                                <div class="diagram-box mt-3">Contoh Redundansi (BURUK):
Siswa: Asis  | XII RPL | Wali: Pak Budi
Siswa: Andi  | XII RPL | Wali: Pak Budi
Siswa: Sinta | XII RPL | Wali: Pak Budi
     ↑ info wali kelas berulang!</div>
                            </div>
                        </details>

                        <details class="accordion-card">
                            <summary>Komponen Sistem Basis Data</summary>
                            <div class="p-space-md">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">1. Hardware</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Komputer, Server, HDD/SSD, RAM, Jaringan</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">2. Software</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">MySQL, PostgreSQL, Oracle, SQLite</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">3. DBMS</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Software pengelola database</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">4. Sistem Operasi</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Windows, Linux, macOS</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm md:col-span-2">
                                        <div class="font-code-inline font-bold mb-1">5. User</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">DBA, Programmer, Operator, End User</p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </article>

                    {{-- 2. Hierarki Basis Data --}}
                    <article id="hierarki" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Hierarki Basis Data
                        </h3>
                        <div class="diagram-box mb-space-md">Character
   ↓
Field / Atribut
   ↓
Record / Tuple
   ↓
Table / File
   ↓
Database</div>

                        <div class="space-y-space-sm">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">A. Character</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Satu karakter — huruf, angka, atau simbol. Contoh: <code>A</code>, <code>7</code>, <code>@</code>. Kata "Asis" terdiri dari 4 character: <code>A-s-i-s</code></p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">B. Field / Atribut</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Kolom pada tabel — mewakili satu jenis informasi.</p>
                                <div class="db-table">
                                    <div class="db-table-header">Tabel: siswa</div>
                                    <table>
                                        <tr><th>id</th><th>nama</th><th>kelas</th><th>nilai</th></tr>
                                        <tr><td>1</td><td>Asis</td><td>XII RPL</td><td>90</td></tr>
                                    </table>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Field: <code>id</code>, <code>nama</code>, <code>kelas</code>, <code>nilai</code></p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">C. Record / Tuple</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Satu baris data.</p>
                                <div class="db-table">
                                    <div class="db-table-header">Record</div>
                                    <table>
                                        <tr><th>id</th><th>nama</th><th>kelas</th><th>nilai</th></tr>
                                        <tr style="background:#ffd167;"><td>1</td><td>Asis</td><td>XII RPL</td><td>90</td></tr>
                                    </table>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">D. Table / File</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Kumpulan record dengan struktur field yang sama.</p>
                                <div class="db-table">
                                    <div class="db-table-header">Tabel: siswa</div>
                                    <table>
                                        <tr><th>id</th><th>nama</th><th>kelas</th></tr>
                                        <tr><td>1</td><td>Asis</td><td>XII RPL</td></tr>
                                        <tr><td>2</td><td>Budi</td><td>XII RPL</td></tr>
                                        <tr><td>3</td><td>Sinta</td><td>XII RPL</td></tr>
                                    </table>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">E. Database</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Kumpulan tabel yang saling berhubungan.</p>
                                <div class="diagram-box">db_sekolah
│
├── siswa
├── guru
├── kelas
├── mapel
└── nilai</div>
                            </div>
                        </div>
                    </article>

                    {{-- 3. ERD --}}
                    <article id="erd" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Entity Relationship Diagram (ERD)
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>ERD</strong> adalah diagram untuk menggambarkan struktur data &amp; hubungan
                            antarentitas dalam suatu sistem. ERD dibuat <em>sebelum</em> database dibuat.
                        </p>

                        <div class="diagram-box mb-space-md">     SISWA
        │
        │ memiliki
        ↓
      NILAI
        ↑
        │ untuk
        │
 MATA_PELAJARAN</div>

                        {{-- Entitas, Atribut, Relasi --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">A. Entitas</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Objek yang datanya ingin disimpan.
                                </p>
                                <div class="font-code-inline text-code-inline">Siswa, Guru<br>Kelas, Mapel<br>Nilai</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">B. Atribut</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Karakteristik entitas.
                                </p>
                                <div class="font-code-inline text-code-inline">SISWA:<br>├─ id_siswa<br>├─ nama<br>├─ alamat<br>└─ kelas</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">C. Relasi</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Hubungan antarentitas.
                                </p>
                                <div class="font-code-inline text-code-inline">Siswa ── memiliki ── Nilai</div>
                            </div>
                        </div>

                        {{-- Kardinalitas --}}
                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">D. Kardinalitas</h4>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">1 : 1 — One-to-One</div>
                                <div class="diagram-box">Orang ─── KTP

1 Orang ↔ 1 KTP</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">1 : N — One-to-Many</div>
                                <div class="diagram-box">Kelas → Siswa

XII RPL:
├── Asis
├── Budi
└── Sinta</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">M : N — Many-to-Many</div>
                                <div class="diagram-box">Siswa ↕ Mapel

(butuh tabel pivot: nilai)</div>
                            </div>
                        </div>

                        <details class="accordion-card mt-space-md">
                            <summary>E. Business Rules</summary>
                            <div class="p-space-md">
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Aturan yang berlaku dalam sistem, menentukan hubungan antar entitas.
                                </p>
                                <div class="diagram-box">Contoh:
"Satu pelanggan dapat melakukan banyak transaksi penyewaan."
     ↓
Pelanggan 1 ─── N Penyewaan
     ↓
Penyewaan 1 ─── N Detail_Penyewaan</div>
                            </div>
                        </details>
                    </article>

                    {{-- 4. Database Keys --}}
                    <article id="keys" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Database Keys
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary"><span class="pk-icon">🔑</span> A. Primary Key (PK)</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Kolom identitas unik setiap record.
                                </p>
                                <div class="db-table">
                                    <table>
                                        <tr><th>id_siswa 🔑</th><th>nama</th></tr>
                                        <tr><td>1</td><td>Asis</td></tr>
                                        <tr><td>2</td><td>Budi</td></tr>
                                        <tr><td>3</td><td>Sinta</td></tr>
                                    </table>
                                </div>
                                <ul class="font-code-inline text-code-inline mt-2 space-y-1">
                                    <li>› Nilainya unik</li>
                                    <li>› Tidak boleh NULL</li>
                                    <li>› Identitas berbeda setiap record</li>
                                </ul>
                            </div>

                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary"><span class="fk-icon">🔗</span> B. Foreign Key (FK)</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Kolom penghubung ke tabel lain.
                                </p>
                                <div class="db-table">
                                    <table>
                                        <tr><th>id_siswa</th><th>nama</th><th>id_kelas 🔗</th></tr>
                                        <tr><td>1</td><td>Asis</td><td>1</td></tr>
                                        <tr><td>2</td><td>Budi</td><td>1</td></tr>
                                    </table>
                                </div>
                                <div class="diagram-box mt-2">kelas (id_kelas)
  │
  │ FK
  ↓
siswa (id_kelas)</div>
                            </div>

                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">C. Candidate Key</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Atribut yang <em>mampu</em> menjadi PK karena unik.
                                </p>
                                <div class="db-table">
                                    <table>
                                        <tr><th>id</th><th>username</th><th>email</th></tr>
                                        <tr><td>1</td><td>asis</td><td>asis@mail</td></tr>
                                        <tr><td>2</td><td>budi</td><td>budi@mail</td></tr>
                                    </table>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Ketiganya unik → semua bisa jadi Candidate Key.</p>
                            </div>

                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">D. Alternate Key</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Candidate Key yang <em>tidak</em> dipilih sebagai PK.
                                </p>
                                <div class="diagram-box">Primary Key  = id
Alternate Key = username, email</div>
                            </div>

                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b] md:col-span-2">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">E. Composite Key</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Key yang terdiri dari 2+ kolom.
                                </p>
                                <div class="db-table">
                                    <div class="db-table-header">Tabel: detail_nilai</div>
                                    <table>
                                        <tr><th>id_siswa 🔑</th><th>id_mapel 🔑</th><th>nilai</th></tr>
                                        <tr><td>1</td><td>101</td><td>85</td></tr>
                                        <tr><td>1</td><td>102</td><td>90</td></tr>
                                        <tr><td>2</td><td>101</td><td>88</td></tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 5. Normalisasi --}}
                    <article id="normalisasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Normalisasi Database
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Normalisasi</strong> adalah proses menyusun struktur tabel agar lebih terorganisir
                            &amp; mengurangi masalah redundansi, inkonsistensi, dan anomali.
                        </p>

                        <div class="diagram-box mb-space-md">UNF → 1NF → 2NF → 3NF
(Belum) (Atomik) (Full Dep.) (No Transitive)</div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>UNF — Unnormalized Form</summary>
                            <div class="p-space-md">
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Kondisi data yang belum dinormalisasi — satu field berisi beberapa nilai.
                                </p>
                                <div class="db-table">
                                    <table>
                                        <tr><th>siswa</th><th>mata_pelajaran</th></tr>
                                        <tr><td>Asis</td><td>Web, Database, PBO</td></tr>
                                    </table>
                                </div>
                            </div>
                        </details>

                        <details class="accordion-card mb-space-md">
                            <summary>1NF — First Normal Form</summary>
                            <div class="p-space-md">
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Setiap field memiliki nilai <strong>atomik</strong> (satu nilai per field).
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                    <div>
                                        <div class="font-label-sm uppercase font-bold mb-1 text-red-600">❌ Sebelum</div>
                                        <div class="db-table">
                                            <table>
                                                <tr><th>siswa</th><th>mapel</th></tr>
                                                <tr><td>Asis</td><td>Web, Database</td></tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="font-label-sm uppercase font-bold mb-1 text-green-700">✔ Sesudah</div>
                                        <div class="db-table">
                                            <table>
                                                <tr><th>siswa</th><th>mapel</th></tr>
                                                <tr><td>Asis</td><td>Web</td></tr>
                                                <tr><td>Asis</td><td>Database</td></tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </details>

                        <details class="accordion-card mb-space-md">
                            <summary>2NF — Second Normal Form</summary>
                            <div class="p-space-md">
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    1NF + setiap atribut non-key bergantung <strong>sepenuhnya</strong> pada PK.
                                    Masalah utama: <strong>partial dependency</strong> pada Composite Key.
                                </p>
                                <div class="diagram-box">Masalah:
(id_siswa + id_mapel) sebagai PK
   ↓
nama_siswa hanya bergantung pada id_siswa
   → PARTIAL DEPENDENCY

Solusi:
Pisahkan ke tabel tersendiri
├── siswa
├── mata_pelajaran
└── nilai</div>
                            </div>
                        </details>

                        <details class="accordion-card mb-space-md">
                            <summary>3NF — Third Normal Form</summary>
                            <div class="p-space-md">
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    2NF + tidak ada <strong>transitive dependency</strong>.
                                </p>
                                <div class="diagram-box">Masalah:
id_siswa → id_kelas → nama_kelas
   ↑ transitive: nama_kelas tidak langsung bergantung id_siswa

Solusi:
Pisahkan tabel kelas
├── siswa (id_siswa, nama, id_kelas)
└── kelas (id_kelas, nama_kelas)</div>
                            </div>
                        </details>

                        <details class="accordion-card">
                            <summary>Anomali Database</summary>
                            <div class="p-space-md">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">Insert Anomaly</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Kesulitan menambah data karena struktur tabel.</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">Update Anomaly</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Data yang sama harus diubah di banyak tempat.</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">Delete Anomaly</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Menghapus 1 data menyebabkan info lain hilang.</p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN B: SEMESTER 2 — DBMS & SQL --}}
                {{-- ===================================================== --}}
                <div id="semester-2" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[32px]">terminal</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Implementasi DBMS &amp; SQL
                            </h2>
                        </div>
                    </div>

                    <div class="diagram-box mb-space-lg">Database Design
      ↓
DBMS → CREATE DATABASE → CREATE TABLE
      ↓
INSERT DATA
      ↓
SELECT DATA
      ↓
UPDATE / DELETE
      ↓
JOIN / QUERY
      ↓
Backup &amp; Security</div>

                    {{-- 6. DBMS --}}
                    <article id="dbms" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            DBMS — Database Management System
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Software yang digunakan untuk membuat, menyimpan, mengelola, &amp; mengakses database.
                        </p>
                        <div class="diagram-box mb-space-md">User / Programmer
        ↓
       DBMS
        ↓
     Database</div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">MySQL</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">DBMS populer untuk web development.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">PostgreSQL</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Open-source, fitur lengkap.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Oracle</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Untuk lingkungan enterprise.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">SQLite</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Ringan — cocok mobile/lokal.</p>
                            </div>
                        </div>

                        <details class="accordion-card mt-space-md">
                            <summary>MySQL vs phpMyAdmin — Beda!</summary>
                            <div class="p-space-md">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                    <div class="bg-secondary-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">MySQL</div>
                                        <p class="font-body-sm text-body-sm">= Database Engine</p>
                                    </div>
                                    <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">phpMyAdmin</div>
                                        <p class="font-body-sm text-body-sm">= Interface web untuk MySQL</p>
                                    </div>
                                </div>
                                <div class="diagram-box mt-3">XAMPP
├── Apache
└── MySQL
      ↓
  phpMyAdmin</div>
                            </div>
                        </details>
                    </article>

                    {{-- 7. SQL --}}
                    <article id="sql" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            SQL &amp; Tipe Data MySQL
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>SQL (Structured Query Language)</strong> adalah bahasa komunikasi dengan database relasional.
                        </p>

                        <table class="brutal-table">
                            <thead><tr><th>Tipe Data</th><th>Fungsi</th><th>Contoh</th></tr></thead>
                            <tbody>
                                <tr><td><strong>INT</strong></td><td>Bilangan bulat</td><td><code>umur INT</code> → 17, 20, 100</td></tr>
                                <tr><td><strong>VARCHAR(n)</strong></td><td>Teks panjang tetap</td><td><code>nama VARCHAR(100)</code></td></tr>
                                <tr><td><strong>TEXT</strong></td><td>Teks panjang</td><td>deskripsi produk, isi artikel</td></tr>
                                <tr><td><strong>DATE</strong></td><td>Tanggal</td><td><code>2026-10-07</code></td></tr>
                                <tr><td><strong>DECIMAL(p,s)</strong></td><td>Angka desimal presisi</td><td><code>harga DECIMAL(12,2)</code> → 1500000.00</td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- 8. DDL --}}
                    <article id="ddl" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            DDL — Data Definition Language
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Untuk mendefinisikan / mengubah struktur database.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-space-md">
                            <span class="sql-badge sql-ddl">CREATE</span>
                            <span class="sql-badge sql-ddl">ALTER</span>
                            <span class="sql-badge sql-ddl">DROP</span>
                        </div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>A. CREATE — Membuat Database &amp; Tabel</summary>
                            <div class="p-space-md space-y-space-sm">
                                <div class="code-block"><code>CREATE DATABASE sekolah;
USE sekolah;

CREATE TABLE siswa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100),
    kelas VARCHAR(20)
);</code></div>
                            </div>
                        </details>

                        <details class="accordion-card mb-space-md">
                            <summary>B. ALTER — Mengubah Struktur Tabel</summary>
                            <div class="p-space-md">
                                <div class="code-block"><code>ALTER TABLE siswa
ADD alamat VARCHAR(200);</code></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Tabel sekarang memiliki kolom: <code>id</code>, <code>nama</code>, <code>kelas</code>, <code>alamat</code>.</p>
                            </div>
                        </details>

                        <details class="accordion-card">
                            <summary>C. DROP — Menghapus Objek (Hati-hati!)</summary>
                            <div class="p-space-md">
                                <div class="code-block"><code>DROP TABLE siswa;
DROP DATABASE sekolah;</code></div>
                                <div class="bg-error-container border-[2px] border-on-background p-space-sm mt-2">
                                    <span class="font-label-sm uppercase font-bold">⚠ Peringatan:</span>
                                    <span class="font-body-sm">DROP menghapus struktur <strong>dan</strong> data!</span>
                                </div>
                            </div>
                        </details>
                    </article>

                    {{-- 9. DML --}}
                    <article id="dml" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            DML — Data Manipulation Language
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Untuk mengelola isi/data dalam tabel.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-space-md">
                            <span class="sql-badge sql-dml">INSERT</span>
                            <span class="sql-badge sql-dml">SELECT</span>
                            <span class="sql-badge sql-dml">UPDATE</span>
                            <span class="sql-badge sql-dml">DELETE</span>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">INSERT</div>
                                <div class="code-block"><code>INSERT INTO siswa (nama, kelas)
VALUES ('Asis', 'XII RPL');</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">SELECT</div>
                                <div class="code-block"><code>SELECT * FROM siswa;
SELECT nama, kelas FROM siswa;</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">UPDATE</div>
                                <div class="code-block"><code>UPDATE siswa
SET kelas = 'XII PPLG'
WHERE id = 1;</code></div>
                                <div class="bg-error-container border-[2px] border-on-background p-space-sm mt-2">
                                    <span class="font-body-sm"><strong>⚠ WHERE wajib!</strong> Tanpa WHERE, semua baris akan berubah.</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">DELETE</div>
                                <div class="code-block"><code>DELETE FROM siswa
WHERE id = 1;</code></div>
                            </div>
                        </div>
                    </article>

                    {{-- 10. Query Lanjutan --}}
                    <article id="query-lanjutan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Query Lanjutan
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <details class="accordion-card" open>
                                <summary>WHERE — Filter Data</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>SELECT * FROM siswa
WHERE kelas = 'XII RPL';</code></div>
                                </div>
                            </details>

                            <details class="accordion-card" open>
                                <summary>ORDER BY — Urutkan</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>ORDER BY nama ASC;   -- naik
ORDER BY nama DESC;  -- turun</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>LIMIT — Batasi</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>SELECT * FROM siswa
LIMIT 5;</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>LIKE — Pola Teks</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>SELECT * FROM siswa
WHERE nama LIKE 'A%';
-- Asis, Andi, Agus</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>BETWEEN — Rentang</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>SELECT * FROM nilai
WHERE nilai BETWEEN 80 AND 100;</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>IN — Beberapa Nilai</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>SELECT * FROM siswa
WHERE kelas IN ('XII RPL', 'XII TKJ');</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>AND / OR / NOT</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>-- AND (keduanya)
WHERE kelas = 'XII RPL' AND nilai >= 80

-- OR (salah satu)
WHERE kelas = 'XII RPL' OR kelas = 'XII TKJ'

-- NOT (kebalikan)
WHERE NOT kelas = 'XII RPL'</code></div>
                                </div>
                            </details>
                        </div>
                    </article>

                    {{-- 11. Fungsi Agregasi --}}
                    <article id="agregasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Fungsi Agregasi
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Fungsi untuk melakukan perhitungan terhadap sekumpulan data.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-5 gap-3 mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] text-center">
                                <div class="font-label-lg uppercase font-bold text-primary">COUNT</div>
                                <p class="font-body-sm text-body-sm">Hitung jumlah</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] text-center">
                                <div class="font-label-lg uppercase font-bold text-primary">SUM</div>
                                <p class="font-body-sm text-body-sm">Total</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] text-center">
                                <div class="font-label-lg uppercase font-bold text-primary">AVG</div>
                                <p class="font-body-sm text-body-sm">Rata-rata</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] text-center">
                                <div class="font-label-lg uppercase font-bold text-primary">MAX</div>
                                <p class="font-body-sm text-body-sm">Terbesar</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] text-center">
                                <div class="font-label-lg uppercase font-bold text-primary">MIN</div>
                                <p class="font-body-sm text-body-sm">Terkecil</p>
                            </div>
                        </div>

                        <div class="code-block"><code>SELECT COUNT(*) FROM siswa;
SELECT SUM(harga) FROM produk;
SELECT AVG(nilai) FROM nilai;
SELECT MAX(nilai) FROM nilai;
SELECT MIN(nilai) FROM nilai;</code></div>
                    </article>

                    {{-- 12. GROUP BY & HAVING --}}
                    <article id="group-by" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            GROUP BY &amp; HAVING
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">GROUP BY</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mengelompokkan data berdasarkan kolom.</p>
                                <div class="code-block"><code>SELECT kelas, COUNT(*) AS jumlah
FROM siswa
GROUP BY kelas;</code></div>
                                <div class="db-table mt-2">
                                    <table>
                                        <tr><th>kelas</th><th>jumlah</th></tr>
                                        <tr><td>X RPL</td><td>32</td></tr>
                                        <tr><td>XI RPL</td><td>30</td></tr>
                                        <tr><td>XII RPL</td><td>28</td></tr>
                                    </table>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">HAVING</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Kondisi pada hasil GROUP BY.</p>
                                <div class="code-block"><code>SELECT kelas, COUNT(*) AS jumlah
FROM siswa
GROUP BY kelas
HAVING COUNT(*) > 30;</code></div>
                            </div>
                        </div>

                        <div class="diagram-box mt-space-md">WHERE
  ↓
Menyaring baris SEBELUM pengelompokan

HAVING
  ↓
Menyaring hasil SETELAH GROUP BY</div>
                    </article>

                    {{-- 13. JOIN --}}
                    <article id="join" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">8</span>
                            JOIN — Menggabungkan Tabel
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>JOIN</strong> digunakan untuk menggabungkan data dari 2+ tabel berdasarkan kolom
                            yang berhubungan.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="db-table">
                                <div class="db-table-header">Tabel: siswa</div>
                                <table>
                                    <tr><th>id</th><th>nama</th><th>id_kelas</th></tr>
                                    <tr><td>1</td><td>Asis</td><td>1</td></tr>
                                    <tr><td>2</td><td>Budi</td><td>2</td></tr>
                                </table>
                            </div>
                            <div class="db-table">
                                <div class="db-table-header">Tabel: kelas</div>
                                <table>
                                    <tr><th>id</th><th>nama_kelas</th></tr>
                                    <tr><td>1</td><td>XII RPL</td></tr>
                                    <tr><td>2</td><td>XII TKJ</td></tr>
                                </table>
                            </div>
                        </div>

                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">Target hasil JOIN:</p>
                        <div class="db-table mb-space-md">
                            <table>
                                <tr><th>nama</th><th>nama_kelas</th></tr>
                                <tr><td>Asis</td><td>XII RPL</td></tr>
                                <tr><td>Budi</td><td>XII TKJ</td></tr>
                            </table>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <details class="accordion-card" open>
                                <summary>INNER JOIN</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Hanya data yang <strong>berpasangan</strong> di kedua tabel.</p>
                                    <div class="code-block"><code>SELECT siswa.nama, kelas.nama_kelas
FROM siswa
INNER JOIN kelas
ON siswa.id_kelas = kelas.id;</code></div>
                                    <div class="diagram-box mt-2">A ∩ B</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>LEFT JOIN</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Semua data dari tabel <strong>kiri</strong>.</p>
                                    <div class="code-block"><code>SELECT siswa.nama, kelas.nama_kelas
FROM siswa
LEFT JOIN kelas
ON siswa.id_kelas = kelas.id;</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>RIGHT JOIN</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Semua data dari tabel <strong>kanan</strong>.</p>
                                    <div class="code-block"><code>SELECT siswa.nama, kelas.nama_kelas
FROM siswa
RIGHT JOIN kelas
ON siswa.id_kelas = kelas.id;</code></div>
                                </div>
                            </details>
                        </div>
                    </article>

                    {{-- 14. Keamanan Database (DCL) --}}
                    <article id="dcl" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">9</span>
                            DCL — Keamanan Database
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>DCL (Data Control Language)</strong> digunakan untuk mengatur hak akses pengguna.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-space-md">
                            <span class="sql-badge sql-dcl">GRANT</span>
                            <span class="sql-badge sql-dcl">REVOKE</span>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">GRANT — Beri Akses</div>
                                <div class="code-block"><code>GRANT SELECT
ON sekolah.siswa
TO 'user'@'localhost';</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">REVOKE — Cabut Akses</div>
                                <div class="code-block"><code>REVOKE SELECT
ON sekolah.siswa
FROM 'user'@'localhost';</code></div>
                            </div>
                        </div>
                    </article>

                    {{-- 15. Backup & Restore --}}
                    <article id="backup-restore" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">10</span>
                            Backup &amp; Restore
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Backup</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Membuat salinan database untuk mengantisipasi kehilangan data.
                                </p>
                                <div class="diagram-box">db_sekolah
    ↓
db_sekolah.sql</div>
                                <p class="font-label-sm uppercase font-bold mt-2 mb-1 text-on-surface-variant">Isi file .sql:</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Struktur database</li>
                                    <li>› Struktur tabel</li>
                                    <li>› Data</li>
                                    <li>› Query CREATE</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Restore</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Mengembalikan database dari file backup.
                                </p>
                                <div class="diagram-box">Database
   ↓
Backup → database.sql
   ↓
Restore
   ↓
Database kembali</div>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- ==================== CHEAT SHEET SQL ==================== --}}
                <div id="cheat-sheet" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary-container text-[32px]">bolt</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bonus</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Cheat Sheet SQL
                            </h2>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-lg uppercase font-bold mb-2 text-primary">Kategori SQL</div>
                            <div class="space-y-2">
                                <div><span class="sql-badge sql-ddl">DDL</span> <span class="font-body-sm">CREATE, ALTER, DROP</span></div>
                                <div><span class="sql-badge sql-dml">DML</span> <span class="font-body-sm">INSERT, UPDATE, DELETE</span></div>
                                <div><span class="sql-badge sql-dql">DQL</span> <span class="font-body-sm">SELECT</span></div>
                                <div><span class="sql-badge sql-dcl">DCL</span> <span class="font-body-sm">GRANT, REVOKE</span></div>
                                <div><span class="sql-badge sql-join">JOIN</span> <span class="font-body-sm">INNER, LEFT, RIGHT</span></div>
                                <div><span class="sql-badge sql-agg">AGG</span> <span class="font-body-sm">COUNT, SUM, AVG, MAX, MIN</span></div>
                            </div>
                        </div>

                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-lg uppercase font-bold mb-2 text-primary">Filter &amp; Urut</div>
                            <div class="space-y-1">
                                <div><span class="sql-badge sql-dql">WHERE</span> <span class="font-body-sm">Filter baris</span></div>
                                <div><span class="sql-badge sql-dql">ORDER BY</span> <span class="font-body-sm">Urutkan (ASC/DESC)</span></div>
                                <div><span class="sql-badge sql-dql">LIMIT</span> <span class="font-body-sm">Batasi jumlah</span></div>
                                <div><span class="sql-badge sql-dql">LIKE</span> <span class="font-body-sm">Pola teks</span></div>
                                <div><span class="sql-badge sql-dql">BETWEEN</span> <span class="font-body-sm">Rentang</span></div>
                                <div><span class="sql-badge sql-dql">IN</span> <span class="font-body-sm">Beberapa nilai</span></div>
                                <div><span class="sql-badge sql-dql">AND / OR / NOT</span> <span class="font-body-sm">Kombinasi kondisi</span></div>
                                <div><span class="sql-badge sql-agg">GROUP BY</span> <span class="font-body-sm">Kelompokkan</span></div>
                                <div><span class="sql-badge sql-agg">HAVING</span> <span class="font-body-sm">Filter hasil GROUP BY</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- ==================== NAVIGASI BAWAH ==================== --}}
                <div class="border-t-[3px] border-on-background pt-space-lg flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-md">
                    <a href="{{ route('pembelajaran') }}"
                        class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
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
                    <div class="bg-primary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">info</span>
                            INFO MODUL
                        </div>
                        <div class="font-body-sm text-body-sm space-y-1">
                            <div class="flex justify-between"><span>Kelas:</span><strong>XI RPL</strong></div>
                            <div class="flex justify-between"><span>Kode:</span><strong>R6</strong></div>
                            <div class="flex justify-between"><span>Topik:</span><strong>35+</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~12 Jam</strong></div>
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

                            <div class="font-label-sm uppercase font-bold text-secondary pt-2 pb-1">◢ Semester 1 — Konsep</div>
                            <a href="#konsep-basis-data" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Konsep Basis Data</a>
                            <a href="#hierarki" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Hierarki Data</a>
                            <a href="#erd" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. ERD</a>
                            <a href="#keys" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. Database Keys</a>
                            <a href="#normalisasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. Normalisasi</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2 — SQL</div>
                            <a href="#dbms" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. DBMS</a>
                            <a href="#sql" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. SQL &amp; Tipe Data</a>
                            <a href="#ddl" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. DDL</a>
                            <a href="#dml" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. DML</a>
                            <a href="#query-lanjutan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. Query Lanjutan</a>
                            <a href="#agregasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">6. Fungsi Agregasi</a>
                            <a href="#group-by" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">7. GROUP BY &amp; HAVING</a>
                            <a href="#join" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">8. JOIN</a>
                            <a href="#dcl" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">9. DCL &amp; Keamanan</a>
                            <a href="#backup-restore" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">10. Backup &amp; Restore</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Bonus</div>
                            <a href="#cheat-sheet" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">SQL Cheat Sheet</a>
                        </nav>
                    </div>

                    {{-- Quick Action --}}
                    <div class="mt-space-md bg-primary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-2">QUICK ACTION</div>
                        <a href="{{ route('contact') }}"
                            class="block w-full text-center font-label-sm uppercase font-bold py-2 bg-on-background text-inverse-on-surface border-[2px] border-on-background shadow-[2px_2px_0px_#ff7a00] hover:shadow-[4px_4px_0px_#ff7a00] transition-all">
                            KONSULTASI →
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

{{-- ==================== CAPSTONE PROJECT CTA ==================== --}}
<section class="w-full bg-primary-fixed border-y-[3px] border-on-background">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-lg items-center">
            <div class="md:col-span-8">
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">CAPSTONE PROJECT</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Bangun Sistem Database Sekolah
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai ERD, normalisasi, SQL (DDL/DML), JOIN, dan DCL, siswa diharapkan mampu
                    merancang &amp; membangun database nyata: <strong>Sistem Akademik Sekolah</strong>,
                    <strong>Database Rental</strong>, atau <strong>Database E-Commerce</strong> — lengkap dengan
                    <strong>ERD</strong>, <strong>normalisasi 3NF</strong>, <strong>query kompleks</strong>, dan
                    <strong>backup</strong> yang siap digunakan di MySQL / PostgreSQL.
                </p>
            </div>
            <div class="md:col-span-4 flex md:justify-end">
                <a href="{{ route('contact') }}"
                    class="font-label-lg text-label-lg uppercase font-bold px-6 py-4 bg-on-background text-inverse-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#ff7a00] hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[7px_7px_0px_#ff7a00] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-2">
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

        console.log('%c🗄️ Modul R6 — Basis Data Loaded', 'background:#ffdbc8;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
