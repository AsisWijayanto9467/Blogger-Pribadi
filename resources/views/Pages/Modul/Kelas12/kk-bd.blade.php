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
        background: #ffdbc8;
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
        background: #ffdbc8;
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
        background: #ffdbc8;
        box-shadow: 2px 2px 0px #1c1b1b;
    }
    .badge-semester.s2 { background: #ffd167; }
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
    .sql-ddl    { background: #c9e6ff; }
    .sql-dml    { background: #a7f3a0; }
    .sql-dql    { background: #ffdf9b; }
    .sql-dcl    { background: #ffb4ae; }
    .sql-join   { background: #ffdbc8; }
    .sql-agg    { background: #e0c0af; }

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

    /* ============ JOIN DIAGRAM ============ */
    .join-diagram {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 1rem;
        padding: 1rem;
        background: #fcf9f8;
        border: 2px solid #1c1b1b;
        box-shadow: 3px 3px 0px #1c1b1b;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
    }
    .join-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: 2px solid #1c1b1b;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        background: #ffdbc8;
    }
    .join-circle.active { background: #ff7a00; color: #fcf9f8; }

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
            <span class="text-on-surface-variant">KELAS XII</span>
            <span class="text-on-surface-variant">/</span>
            <span class="font-bold text-on-surface">R6 — KK Basis Data</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">R6</span>
                    <span class="badge-semester s2">KEJURUAN</span>
                    <span class="badge-semester s3">KELAS XII</span>
                    <span class="badge-semester s4">DATABASE</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    KK Basis Data<br>Kelas XII
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lanjutan yang membahas <strong>Advanced SQL</strong> (Subquery, Aggregate, JOIN kompleks),
                    <strong>View, Stored Procedure, Function &amp; Trigger</strong>, <strong>arsitektur database</strong>,
                    <strong>keamanan</strong> (SQL Injection, Privileges, Enkripsi), <strong>backup &amp; restore</strong>,
                    <strong>indexing</strong>, hingga <strong>Capstone Project</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Topik</div>
                    <div class="font-headline-sm text-headline-sm font-bold">35 Topik</div>
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
                        <span class="material-symbols-outlined text-primary text-[32px]">database</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Pengolahan Data Lanjutan &amp; SQL Kompleks
                            </h2>
                        </div>
                    </div>

                    {{-- ============ 1. SUBQUERY ============ --}}
                    <article id="subquery" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Subquery / Nested Query
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Subquery</strong> adalah query yang berada di dalam query lainnya.
                            Query utama membutuhkan hasil dari query lain.
                        </p>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Contoh Database</h4>
                        <div class="db-table mb-space-md">
                            <div class="db-table-header">Tabel: siswa</div>
                            <table>
                                <tr><th>id</th><th>nama</th><th>nilai</th></tr>
                                <tr><td>1</td><td>Andi</td><td>80</td></tr>
                                <tr><td>2</td><td>Budi</td><td>90</td></tr>
                                <tr><td>3</td><td>Citra</td><td>75</td></tr>
                            </table>
                        </div>

                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Cari siswa dengan nilai di atas rata-rata:
                        </p>
                        <div class="code-block mb-space-md"><code>SELECT nama, nilai
FROM siswa
WHERE nilai > (
    SELECT AVG(nilai)
    FROM siswa
);</code></div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Scalar Subquery</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menghasilkan 1 nilai.</p>
                                <div class="code-block"><code>AVG(nilai)</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Row Subquery</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menghasilkan 1 baris, beberapa kolom.</p>
                                <div class="code-block"><code>(kelas, nilai) = (...)</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Table Subquery</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menghasilkan tabel sementara.</p>
                                <div class="code-block"><code>FROM (...) AS temp</code></div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1 mt-3">
                            <span class="sql-badge sql-dql">IN</span>
                            <span class="sql-badge sql-dql">EXISTS</span>
                            <span class="sql-badge sql-dql">ANY</span>
                            <span class="sql-badge sql-dql">ALL</span>
                        </div>
                    </article>

                    {{-- ============ 2. AGGREGATE & GROUPING ============ --}}
                    <article id="aggregate" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Aggregate Functions &amp; Grouping
                        </h3>

                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Fungsi</th><th>Kegunaan</th></tr></thead>
                            <tbody>
                                <tr><td><strong>COUNT()</strong></td><td>Menghitung jumlah data</td></tr>
                                <tr><td><strong>SUM()</strong></td><td>Menjumlahkan data</td></tr>
                                <tr><td><strong>AVG()</strong></td><td>Menghitung rata-rata</td></tr>
                                <tr><td><strong>MIN()</strong></td><td>Mencari nilai terkecil</td></tr>
                                <tr><td><strong>MAX()</strong></td><td>Mencari nilai terbesar</td></tr>
                            </tbody>
                        </table>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="code-block"><code>SELECT COUNT(*) AS jumlah_siswa
FROM siswa;

-- Output: 30</code></div>
                            <div class="code-block"><code>SELECT AVG(nilai) AS rata_rata
FROM siswa;</code></div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">GROUP BY</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Mengelompokkan data berdasarkan kolom tertentu.
                        </p>

                        <div class="db-table mb-space-md">
                            <div class="db-table-header">Tabel: penjualan</div>
                            <table>
                                <tr><th>id</th><th>produk</th><th>kategori</th><th>harga</th></tr>
                                <tr><td>1</td><td>Laptop</td><td>Elektronik</td><td>7000000</td></tr>
                                <tr><td>2</td><td>Mouse</td><td>Elektronik</td><td>200000</td></tr>
                                <tr><td>3</td><td>Meja</td><td>Furniture</td><td>1000000</td></tr>
                                <tr><td>4</td><td>Kursi</td><td>Furniture</td><td>500000</td></tr>
                            </table>
                        </div>

                        <div class="code-block mb-space-md"><code>SELECT kategori, COUNT(*) AS jumlah
FROM penjualan
GROUP BY kategori;

-- Output:
-- Elektronik | 2
-- Furniture  | 2</code></div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">HAVING</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Menyaring hasil <strong>setelah</strong> GROUP BY.
                        </p>
                        <div class="code-block mb-space-md"><code>SELECT kategori, COUNT(*) AS jumlah
FROM penjualan
GROUP BY kategori
HAVING COUNT(*) > 1;</code></div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">WHERE vs HAVING</h4>
                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>WHERE</th><th>HAVING</th></tr></thead>
                            <tbody>
                                <tr><td>Menyaring baris</td><td>Menyaring kelompok</td></tr>
                                <tr><td>Sebelum GROUP BY</td><td>Setelah GROUP BY</td></tr>
                                <tr><td>Umumnya data biasa</td><td>Umumnya bersama aggregate</td></tr>
                            </tbody>
                        </table>

                        <div class="diagram-box">Urutan Logika Query:
FROM
 ↓
WHERE
 ↓
GROUP BY
 ↓
HAVING
 ↓
SELECT
 ↓
ORDER BY</div>
                    </article>

                    {{-- ============ 3. STRING & DATE FUNCTIONS ============ --}}
                    <article id="functions" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            String &amp; Date Functions
                        </h3>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">String Functions</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">CONCAT()</div>
                                <div class="code-block"><code>SELECT CONCAT(nama_depan, ' ', nama_belakang)
AS nama_lengkap FROM siswa;
-- "Andi" + "Wijaya" = "Andi Wijaya"</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">SUBSTRING()</div>
                                <div class="code-block"><code>SELECT SUBSTRING(nama, 1, 3) FROM siswa;
-- "ANDI" → "AND"</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">UPPER()</div>
                                <div class="code-block"><code>SELECT UPPER(nama) FROM siswa;
-- "andi" → "ANDI"</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">LOWER()</div>
                                <div class="code-block"><code>SELECT LOWER(nama) FROM siswa;
-- "ANDI" → "andi"</code></div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1 mb-space-md">
                            <span class="badge-semester">LENGTH()</span>
                            <span class="badge-semester s2">TRIM()</span>
                            <span class="badge-semester s3">REPLACE()</span>
                            <span class="badge-semester s4">LEFT()</span>
                            <span class="badge-semester s5">RIGHT()</span>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Date &amp; Time Functions</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">NOW()</div>
                                <div class="code-block"><code>SELECT NOW();
-- 2026-10-07 14:30:00</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">DATE_FORMAT()</div>
                                <div class="code-block"><code>DATE_FORMAT(tgl, '%d-%m-%Y')
-- 2026-10-07 → 07-10-2026</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">DATEDIFF()</div>
                                <div class="code-block"><code>DATEDIFF(selesai, mulai)
-- 10 Okt - 7 Okt = 3 hari</code></div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Format Tanggal Umum</h4>
                        <table class="brutal-table">
                            <thead><tr><th>Format</th><th>Arti</th></tr></thead>
                            <tbody>
                                <tr><td>%d</td><td>Hari</td></tr>
                                <tr><td>%m</td><td>Bulan</td></tr>
                                <tr><td>%Y</td><td>Tahun 4 digit</td></tr>
                                <tr><td>%H</td><td>Jam</td></tr>
                                <tr><td>%i</td><td>Menit</td></tr>
                                <tr><td>%s</td><td>Detik</td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- ============ 4. JOIN ============ --}}
                    <article id="join" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            JOIN — Penggabungan Tabel
                        </h3>

                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>JOIN</strong> menggabungkan data dari 2 tabel atau lebih berdasarkan hubungan tertentu.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="db-table">
                                <div class="db-table-header">Tabel: siswa</div>
                                <table>
                                    <tr><th>id</th><th>nama</th><th>kelas_id</th></tr>
                                    <tr><td>1</td><td>Andi</td><td>1</td></tr>
                                    <tr><td>2</td><td>Budi</td><td>2</td></tr>
                                </table>
                            </div>
                            <div class="db-table">
                                <div class="db-table-header">Tabel: kelas</div>
                                <table>
                                    <tr><th>id</th><th>nama_kelas</th></tr>
                                    <tr><td>1</td><td>XII RPL 1</td></tr>
                                    <tr><td>2</td><td>XII RPL 2</td></tr>
                                </table>
                            </div>
                        </div>

                        <div class="space-y-space-md">
                            <details class="accordion-card" open>
                                <summary>INNER JOIN — Cocok di Kedua Tabel</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>SELECT siswa.nama, kelas.nama_kelas
FROM siswa
INNER JOIN kelas
    ON siswa.kelas_id = kelas.id;</code></div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                                        <strong>A ∩ B</strong> — hanya data yang cocok.
                                    </p>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>LEFT JOIN — Semua dari Kiri</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>SELECT siswa.nama, kelas.nama_kelas
FROM siswa
LEFT JOIN kelas
    ON siswa.kelas_id = kelas.id;</code></div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                                        Siswa tanpa kelas tetap muncul dengan nilai <code>NULL</code>.
                                    </p>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>RIGHT JOIN — Semua dari Kanan</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>SELECT siswa.nama, kelas.nama_kelas
FROM siswa
RIGHT JOIN kelas
    ON siswa.kelas_id = kelas.id;</code></div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                                        Kelas tanpa siswa tetap muncul.
                                    </p>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>FULL OUTER JOIN — Semua Data</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>-- MySQL tidak punya FULL OUTER JOIN
-- Simulasi dengan UNION:

SELECT *
FROM siswa
LEFT JOIN kelas
    ON siswa.kelas_id = kelas.id

UNION

SELECT *
FROM siswa
RIGHT JOIN kelas
    ON siswa.kelas_id = kelas.id;</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>SELF JOIN — Tabel Bergabung dengan Dirinya</summary>
                                <div class="p-space-md">
                                    <div class="db-table mb-3">
                                        <div class="db-table-header">Tabel: pegawai</div>
                                        <table>
                                            <tr><th>id</th><th>nama</th><th>atasan_id</th></tr>
                                            <tr><td>1</td><td>Budi</td><td>NULL</td></tr>
                                            <tr><td>2</td><td>Andi</td><td>1</td></tr>
                                            <tr><td>3</td><td>Citra</td><td>1</td></tr>
                                        </table>
                                    </div>
                                    <div class="code-block"><code>SELECT
    pegawai.nama AS pegawai,
    atasan.nama AS atasan
FROM pegawai
LEFT JOIN pegawai AS atasan
    ON pegawai.atasan_id = atasan.id;</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>CROSS JOIN — Kombinasi Semua Baris</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>SELECT *
FROM warna
CROSS JOIN ukuran;</code></div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                                        3 warna × 3 ukuran = 9 kombinasi.
                                    </p>
                                    <div class="diagram-box mt-2">Merah S · Merah M · Merah L
Biru S  · Biru M  · Biru L</div>
                                </div>
                            </details>
                        </div>
                    </article>

                    {{-- ============ 5. VIEW, PROCEDURE, FUNCTION ============ --}}
                    <article id="view" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            View, Stored Procedure &amp; Function
                        </h3>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">VIEW — Tabel Virtual</h4>
                        <div class="code-block mb-space-md"><code>CREATE VIEW view_siswa_kelas AS
SELECT siswa.nama, kelas.nama_kelas
FROM siswa
JOIN kelas
    ON siswa.kelas_id = kelas.id;

-- Panggil:
SELECT * FROM view_siswa_kelas;

-- Hapus:
DROP VIEW view_siswa_kelas;</code></div>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Sederhanakan query</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Keamanan kolom</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Reusable</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Mempermudah app</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-lg mb-space-sm">STORED PROCEDURE — Blok SQL Tersimpan</h4>
                        <div class="code-block mb-space-md"><code>DELIMITER //
CREATE PROCEDURE tampil_siswa()
BEGIN
    SELECT * FROM siswa;
END //
DELIMITER ;

-- Panggil:
CALL tampil_siswa();

-- Dengan parameter:
DELIMITER //
CREATE PROCEDURE cari_siswa(IN id_siswa INT)
BEGIN
    SELECT * FROM siswa WHERE id = id_siswa;
END //
DELIMITER ;

CALL cari_siswa(1);</code></div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-lg mb-space-sm">STORED FUNCTION — Mengembalikan Nilai</h4>
                        <div class="code-block mb-space-md"><code>DELIMITER //
CREATE FUNCTION tambah_pajak(harga DECIMAL(10,2))
RETURNS DECIMAL(10,2)
DETERMINISTIC
BEGIN
    RETURN harga * 1.11;
END //
DELIMITER ;

-- Panggil:
SELECT tambah_pajak(100000);</code></div>

                        <table class="brutal-table">
                            <thead><tr><th>Procedure</th><th>Function</th></tr></thead>
                            <tbody>
                                <tr><td>Dipanggil dengan CALL</td><td>Dapat dipanggil dalam ekspresi</td></tr>
                                <tr><td>Tidak harus mengembalikan nilai</td><td>Mengembalikan nilai</td></tr>
                                <tr><td>Cocok untuk proses</td><td>Cocok untuk perhitungan</td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- ============ 6. TRIGGER ============ --}}
                    <article id="trigger" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            TRIGGER — Aksi Otomatis
                        </h3>

                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Program yang <strong>otomatis dijalankan</strong> ketika terjadi INSERT, UPDATE, atau DELETE.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">BEFORE INSERT</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">AFTER INSERT</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">BEFORE UPDATE</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">AFTER UPDATE</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">BEFORE DELETE</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">AFTER DELETE</div>
                        </div>

                        <div class="code-block mb-space-md"><code>CREATE TRIGGER sebelum_tambah_siswa
BEFORE INSERT ON siswa
FOR EACH ROW
SET NEW.nama = UPPER(NEW.nama);

-- Saat:
INSERT INTO siswa (nama) VALUES ('andi');

-- Tersimpan sebagai: ANDI</code></div>

                        <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Kegunaan Trigger:</span>
                            <span class="font-body-sm"> Audit log · Update otomatis · Konsistensi data · Perhitungan otomatis</span>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- SEMESTER 2 HEADER --}}
                {{-- ===================================================== --}}
                <div id="semester-2" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">security</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Administrasi, Keamanan &amp; Sistem Basis Data
                            </h2>
                        </div>
                    </div>

                    {{-- ============ 7. ARSITEKTUR ============ --}}
                    <article id="arsitektur" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Arsitektur Basis Data
                        </h3>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">Client-Server</h4>
                        <div class="diagram-box mb-space-md">CLIENT
   ↓ REQUEST
DATABASE SERVER
   ↓ DATA
CLIENT</div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Client</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Perangkat/aplikasi yang meminta data.</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester">Laravel</span>
                                    <span class="badge-semester s2">Java</span>
                                    <span class="badge-semester s3">Python</span>
                                    <span class="badge-semester s4">phpMyAdmin</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Server</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menyimpan database &amp; memproses request.</p>
                                <div class="flex flex-wrap gap-1">
                                    <span class="badge-semester s4">MySQL</span>
                                    <span class="badge-semester">PostgreSQL</span>
                                    <span class="badge-semester s2">Oracle</span>
                                    <span class="badge-semester s3">SQL Server</span>
                                </div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-lg mb-space-sm">Centralized vs Distributed</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Centralized</div>
                                <div class="diagram-box mb-2">Komputer 1 ──┐
Komputer 2 ──┼──> DB Server
Komputer 3 ──┘</div>
                                <div class="font-label-sm uppercase font-bold mb-1 text-green-700">✓ Kelebihan:</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mudah dikelola · Data terpusat · Backup terpusat</p>
                                <div class="font-label-sm uppercase font-bold mb-1 text-red-600">✗ Kekurangan:</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Server utama jadi titik kritis</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Distributed</div>
                                <div class="diagram-box mb-2">Server Jakarta
       ↕
Server Bandung
       ↕
Server Surabaya</div>
                                <div class="font-label-sm uppercase font-bold mb-1 text-green-700">✓ Kelebihan:</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Beban dibagi · Dekat pengguna · High availability</p>
                                <div class="font-label-sm uppercase font-bold mb-1 text-red-600">✗ Kekurangan:</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Sinkronisasi kompleks</p>
                            </div>
                        </div>
                    </article>

                    {{-- ============ 8. INSTALASI & KONFIGURASI ============ --}}
                    <article id="instalasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Instalasi &amp; Konfigurasi DBMS
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Laragon</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Apache / Nginx</li>
                                    <li>› PHP</li>
                                    <li>› MySQL / MariaDB</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">XAMPP</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Apache</li>
                                    <li>› MySQL / MariaDB</li>
                                    <li>› PHP + phpMyAdmin</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">Koneksi MySQL</h4>
                        <div class="code-block"><code>Host     : 127.0.0.1
Port     : 3306
Username : root
Database : sekolah</code></div>
                    </article>

                    {{-- ============ 9. KEAMANAN DATABASE ============ --}}
                    <article id="keamanan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Keamanan Database
                        </h3>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Authentication</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Authorization</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Encryption</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Backup</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">SQL Injection Prevention</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Access Control</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Manajemen User &amp; Privileges</h4>

                        <div class="code-block mb-space-md"><code>-- Buat user
CREATE USER 'user_app'@'localhost'
IDENTIFIED BY 'passwordku';

-- Beri akses
GRANT SELECT, INSERT
ON sekolah.*
TO 'user_app'@'localhost';

-- Cabut akses
REVOKE INSERT
ON sekolah.*
FROM 'user_app'@'localhost';</code></div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Privilege</h4>
                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Privilege</th><th>Fungsi</th></tr></thead>
                            <tbody>
                                <tr><td>SELECT</td><td>Membaca data</td></tr>
                                <tr><td>INSERT</td><td>Menambah data</td></tr>
                                <tr><td>UPDATE</td><td>Mengubah data</td></tr>
                                <tr><td>DELETE</td><td>Menghapus data</td></tr>
                                <tr><td>CREATE</td><td>Membuat objek</td></tr>
                                <tr><td>DROP</td><td>Menghapus objek</td></tr>
                                <tr><td>ALTER</td><td>Mengubah struktur</td></tr>
                                <tr><td>ALL PRIVILEGES</td><td>Semua hak</td></tr>
                            </tbody>
                        </table>

                        <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Principle of Least Privilege:</span>
                            <span class="font-body-sm"> Berikan user hanya hak akses yang <strong>benar-benar dibutuhkan</strong>.</span>
                        </div>
                    </article>

                    {{-- ============ 10. ENKRIPSI & SQL INJECTION ============ --}}
                    <article id="sql-injection" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Enkripsi &amp; SQL Injection
                        </h3>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">Enkripsi Data</h4>
                        <div class="diagram-box mb-space-md">Data Asli
    ↓
Encryption
    ↓
Data Terlindungi</div>

                        <div class="bg-error-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                            <span class="font-label-sm uppercase font-bold">⚠ PENTING:</span>
                            <span class="font-body-sm"> Password → <strong>HASHING</strong> (bcrypt/argon2), <strong>BUKAN</strong> enkripsi biasa. Password asli <strong>tidak boleh</strong> disimpan.</span>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">SQL Injection</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Serangan memanipulasi SQL melalui input pengguna.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-red-600">✗ RENTAN</div>
                                <div class="code-block"><code>// JANGAN!
$sql = "SELECT * FROM users
WHERE email = '$email'";</code></div>
                            </div>
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-green-700">✓ AMAN</div>
                                <div class="code-block"><code>// Prepared Statement
$stmt = $pdo->prepare(
    "SELECT * FROM users WHERE email = ?"
);
$stmt->execute([$email]);</code></div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-1">
                            <span class="badge-semester s4">Prepared Statement</span>
                            <span class="badge-semester s4">Parameterized Query</span>
                            <span class="badge-semester s4">ORM (Eloquent)</span>
                            <span class="badge-semester s4">Validasi Input</span>
                            <span class="badge-semester s4">Hak Akses Terbatas</span>
                        </div>
                    </article>

                    {{-- ============ 11. BACKUP & RESTORE ============ --}}
                    <article id="backup" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Backup &amp; Restore
                        </h3>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">Jenis Backup</h4>
                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Jenis</th><th>Isi</th></tr></thead>
                            <tbody>
                                <tr><td><strong>Full</strong></td><td>Semua data</td></tr>
                                <tr><td><strong>Incremental</strong></td><td>Perubahan sejak backup terakhir</td></tr>
                                <tr><td><strong>Differential</strong></td><td>Perubahan sejak full backup</td></tr>
                            </tbody>
                        </table>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">mysqldump</h4>
                        <div class="code-block mb-space-md"><code>mysqldump -u root -p sekolah > sekolah.sql

# Penjelasan:
# -u root   → user
# -p        → minta password
# sekolah   → nama DB
# > file    → output ke file</code></div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Restore</h4>
                        <div class="code-block"><code>mysql -u root -p sekolah < sekolah.sql</code></div>
                    </article>

                    {{-- ============ 12. INDEXING ============ --}}
                    <article id="indexing" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Indexing &amp; EXPLAIN
                        </h3>

                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Index</strong> mempercepat pencarian data seperti daftar isi pada buku.
                        </p>

                        <div class="diagram-box mb-space-md">Tanpa Index:
Cari data → periksa banyak baris

Dengan Index:
Cari data → pakai index → lebih cepat</div>

                        <div class="code-block mb-space-md"><code>CREATE INDEX idx_nama ON siswa(nama);</code></div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Kelebihan &amp; Kekurangan Index</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-tertiary-fixed border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-green-700">✓ Kelebihan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Mempercepat pencarian</li>
                                    <li>› Bantu query tertentu</li>
                                    <li>› Bagus untuk kolom sering dicari</li>
                                </ul>
                            </div>
                            <div class="bg-error-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-red-600">✗ Kekurangan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Butuh storage</li>
                                    <li>› Beban INSERT/UPDATE/DELETE</li>
                                    <li>› Terlalu banyak index = lambat</li>
                                </ul>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">EXPLAIN</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Melihat rencana eksekusi query.
                        </p>
                        <div class="code-block"><code>EXPLAIN
SELECT * FROM siswa
WHERE nama = 'Andi';</code></div>
                    </article>

                    {{-- ============ 13. MAINTENANCE ============ --}}
                    <article id="maintenance" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            Maintenance Database
                        </h3>

                        <div class="diagram-box mb-space-md">Backup
 ↓
Pemeriksaan tabel
 ↓
Optimasi
 ↓
Monitoring
 ↓
Perbaikan jika diperlukan</div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">REPAIR TABLE</div>
                                <div class="code-block mb-2"><code>REPAIR TABLE siswa;</code></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Untuk storage engine tertentu (MyISAM). Bukan rutin.
                                </p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">OPTIMIZE TABLE</div>
                                <div class="code-block mb-2"><code>OPTIMIZE TABLE siswa;</code></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Optimasi tabel. Efeknya tergantung storage engine.
                                </p>
                            </div>
                        </div>
                    </article>

                    {{-- ============ 14. CAPSTONE PROJECT ============ --}}
                    <article id="capstone" class="scroll-mt-24 mb-space-xl border-t-[3px] border-on-background pt-space-lg">
                        <div class="bg-primary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold">CAPSTONE PROJECT</div>
                            <div class="font-headline-sm uppercase">Proyek Akhir Basis Data</div>
                        </div>

                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
                            Membuat sistem database lengkap yang siap digunakan aplikasi.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Sistem Rental</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Perpustakaan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Kasir</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Akademik</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Inventaris</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">E-Commerce</div>
                        </div>

                        <div class="space-y-space-md">
                            <details class="accordion-card" open>
                                <summary>Tahap 1–5: Analisis &amp; Desain</summary>
                                <div class="p-space-md space-y-space-sm">
                                    <div><strong>Tahap 1 — Analisis Kebutuhan:</strong> Tentukan pengguna, data, proses, aturan bisnis, laporan.</div>
                                    <div><strong>Tahap 2 — ERD:</strong></div>
                                    <div class="diagram-box">users
  │ 1:N
  ↓
penyewaan
  │ 1:N
  ↓
detail_penyewaan</div>
                                    <div><strong>Tahap 3 — Entitas:</strong> users, buku, kategori, peminjaman, detail_peminjaman</div>
                                    <div><strong>Tahap 4 — Primary Key:</strong> id_user, id_buku, id_peminjaman</div>
                                    <div><strong>Tahap 5 — Foreign Key:</strong> peminjaman.user_id → users.id</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>Tahap 6–7: Normalisasi &amp; Implementasi</summary>
                                <div class="p-space-md space-y-space-sm">
                                    <div class="diagram-box">1NF
 ↓
2NF
 ↓
3NF</div>
                                    <div class="code-block"><code>CREATE DATABASE perpustakaan;
USE perpustakaan;

CREATE TABLE buku (
    id INT PRIMARY KEY AUTO_INCREMENT,
    judul VARCHAR(150),
    penulis VARCHAR(100)
);</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>Tahap 8–9: Integrasi &amp; Pengujian</summary>
                                <div class="p-space-md space-y-space-sm">
                                    <div class="diagram-box">User
 ↓
Frontend
 ↓
Backend/API
 ↓
Database</div>
                                    <div><strong>Uji:</strong> CRUD, Relasi, Validasi, Keamanan</div>
                                </div>
                            </details>
                        </div>
                    </article>
                </div>

                {{-- ==================== NAVIGASI BAWAH ==================== --}}
                <div class="border-t-[3px] border-on-background pt-space-lg flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-md">
                    <a href="{{ route('pembelajaran') }}"
                        class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-primary-fixed hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-2">
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
                            <div class="flex justify-between"><span>Kelas:</span><strong>XII RPL</strong></div>
                            <div class="flex justify-between"><span>Kode:</span><strong>R6</strong></div>
                            <div class="flex justify-between"><span>Topik:</span><strong>35</strong></div>
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
                            <a href="#subquery" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">1. Subquery / Nested Query</a>
                            <a href="#aggregate" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">2. Aggregate &amp; Grouping</a>
                            <a href="#functions" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">3. String &amp; Date Functions</a>
                            <a href="#join" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">4. JOIN (Semua Jenis)</a>
                            <a href="#view" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">5. View, Procedure, Function</a>
                            <a href="#trigger" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">6. Trigger</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2</div>
                            <a href="#arsitektur" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">1. Arsitektur Database</a>
                            <a href="#instalasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">2. Instalasi DBMS</a>
                            <a href="#keamanan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">3. Keamanan Database</a>
                            <a href="#sql-injection" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">4. Enkripsi &amp; SQL Injection</a>
                            <a href="#backup" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">5. Backup &amp; Restore</a>
                            <a href="#indexing" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">6. Indexing &amp; EXPLAIN</a>
                            <a href="#maintenance" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">7. Maintenance</a>
                            <a href="#capstone" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">8. Capstone Project</a>
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
                    Bangun Sistem Database Production-Ready
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai <strong>Advanced SQL</strong>, <strong>JOIN kompleks</strong>,
                    <strong>View, Procedure &amp; Trigger</strong>, <strong>keamanan</strong>, <strong>backup</strong>,
                    hingga <strong>indexing</strong>, siswa diharapkan mampu merancang &amp; membangun
                    sistem database nyata yang <strong>aman</strong>, <strong>teroptimasi</strong>, dan siap
                    diintegrasikan dengan aplikasi.
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

        console.log('%c🗄️ Modul R6 — KK Basis Data XII Loaded', 'background:#ff7a00;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
