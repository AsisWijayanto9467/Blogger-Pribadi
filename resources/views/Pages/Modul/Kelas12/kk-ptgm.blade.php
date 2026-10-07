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

    /* ============ ACID BADGE ============ */
    .acid-badge {
        display: inline-block;
        font-family: 'JetBrains Mono', monospace;
        font-size: 13px;
        font-weight: 700;
        padding: 4px 12px;
        border: 2px solid #1c1b1b;
        background: #ffd167;
        box-shadow: 2px 2px 0px #1c1b1b;
        text-transform: uppercase;
    }
    .acid-a { background: #ffdbc8; }
    .acid-c { background: #c9e6ff; }
    .acid-i { background: #a7f3a0; }
    .acid-d { background: #ffb4ae; }

    /* ============ ERD CARD ============ */
    .erd-card {
        border: 2px solid #1c1b1b;
        background: #fcf9f8;
        box-shadow: 3px 3px 0px #1c1b1b;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        overflow: hidden;
        margin: 0 auto;
        max-width: 220px;
    }
    .erd-header {
        background: #1c1b1b;
        color: #ffd167;
        padding: 6px 10px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 11px;
        letter-spacing: 0.05em;
        text-align: center;
    }
    .erd-body {
        padding: 8px 10px;
    }
    .erd-row {
        padding: 3px 0;
        border-bottom: 1px dashed #e0c0af;
    }
    .erd-row:last-child { border-bottom: none; }
    .erd-pk { color: #994700; font-weight: 700; }
    .erd-fk { color: #006491; font-weight: 700; }

    /* ============ APP FORM MOCKUP ============ */
    .app-window {
        border: 2px solid #1c1b1b;
        background: #fcf9f8;
        box-shadow: 4px 4px 0px #1c1b1b;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        max-width: 320px;
        margin: 0 auto;
    }
    .app-titlebar {
        background: #1c1b1b;
        color: #ffd167;
        padding: 4px 10px;
        font-weight: 700;
        text-transform: uppercase;
        font-size: 11px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .app-body {
        padding: 12px;
    }
    .app-input {
        border: 1px solid #1c1b1b;
        background: #ffffff;
        padding: 3px 6px;
        margin: 3px 0;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
    }
    .app-btn {
        border: 2px solid #1c1b1b;
        background: #ffd167;
        padding: 3px 12px;
        font-weight: 700;
        font-size: 11px;
        display: inline-block;
        box-shadow: 2px 2px 0px #1c1b1b;
        margin-top: 6px;
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
            <span class="font-bold text-on-surface">R3 — KK PTGM</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">R3</span>
                    <span class="badge-semester s2">KEJURUAN</span>
                    <span class="badge-semester s3">KELAS XII</span>
                    <span class="badge-semester s4">DESKTOP</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    KK Pemrograman Teks,<br>Grafis &amp; Multimedia
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap <strong>Aplikasi Desktop + Database</strong>: Authentication, CRUD,
                    Database Connection, Transaction (ACID), Report, <strong>UML</strong>, <strong>Flowchart</strong>,
                    <strong>DFD</strong>, <strong>ERD</strong>, Primary/Foreign Key, Relasi Database,
                    hingga <strong>Proposal &amp; Urutan Pengerjaan</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Topik</div>
                    <div class="font-headline-sm text-headline-sm font-bold">18 Topik</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~20 Jam</div>
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
                {{-- BAGIAN 1: PENGERTIAN APLIKASI DESKTOP --}}
                {{-- ===================================================== --}}
                <div id="pengertian" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">computer</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Pengertian Aplikasi Desktop
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Aplikasi desktop</strong> adalah aplikasi yang dijalankan langsung pada
                            komputer/laptop melalui sistem operasi seperti Windows.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Sistem Kasir</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Sistem Rental</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Perpustakaan</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Inventaris</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Pengelolaan Siswa</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Penggajian</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Arsitektur Umum</h4>
                        <div class="diagram-box mb-space-md">User → Aplikasi Desktop → Database

Contoh:
Admin
  ↓
Aplikasi Desktop (C# / Java / VB)
  ↓
MySQL</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Fitur Umum</h4>
                        <div class="flex flex-wrap gap-1">
                            <span class="badge-semester">Login</span>
                            <span class="badge-semester s2">Tampil data</span>
                            <span class="badge-semester s3">Tambah data</span>
                            <span class="badge-semester s4">Ubah data</span>
                            <span class="badge-semester s5">Hapus data</span>
                            <span class="badge-semester">Cari data</span>
                            <span class="badge-semester s2">Transaksi</span>
                            <span class="badge-semester s3">Laporan</span>
                            <span class="badge-semester s4">Cetak</span>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 2: AUTHENTICATION --}}
                {{-- ===================================================== --}}
                <div id="auth" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">lock</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Authentication
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Authentication</strong> = proses memastikan seseorang benar-benar memiliki akun
                            yang digunakan untuk masuk ke aplikasi.
                        </p>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Mockup Form Login</h4>
                        <div class="app-window mb-space-md">
                            <div class="app-titlebar">
                                <span>LOGIN SYSTEM</span>
                                <span>✕</span>
                            </div>
                            <div class="app-body">
                                <div>Username:</div>
                                <div class="app-input">admin</div>
                                <div>Password:</div>
                                <div class="app-input">********</div>
                                <div style="text-align:center;margin-top:8px;">
                                    <span class="app-btn">LOGIN</span>
                                </div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Alur Login</h4>
                        <div class="diagram-box mb-space-md">User
 ↓
Masukkan username & password
 ↓
Aplikasi
 ↓
Database
 ↓
Cek username/password
 ↓
Benar?
 ├── Ya → Dashboard
 └── Tidak → Pesan Login Gagal</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Role &amp; Hak Akses</h4>
                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Role</th><th>Hak Akses</th></tr></thead>
                            <tbody>
                                <tr><td><strong>Admin</strong></td><td>Mengelola seluruh data</td></tr>
                                <tr><td><strong>Petugas</strong></td><td>Mengelola transaksi</td></tr>
                                <tr><td><strong>User</strong></td><td>Menggunakan layanan tertentu</td></tr>
                            </tbody>
                        </table>

                        <div class="bg-error-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">⚠ PENTING:</span>
                            <span class="font-body-sm"> Password <strong>JANGAN</strong> disimpan dalam bentuk teks biasa. Gunakan <strong>hashing</strong> (bcrypt/argon2).</span>
                        </div>

                        <div class="code-block mt-space-md"><code>password asli
      ↓
   hashing
      ↓
$2y$10$........</code></div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 3: CRUD --}}
                {{-- ===================================================== --}}
                <div id="crud" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">sync_alt</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 3</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                CRUD — Create, Read, Update, Delete
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Operasi dasar untuk mengelola data.
                        </p>

                        <div class="space-y-space-md">
                            <details class="accordion-card" open>
                                <summary>C — CREATE (Tambah Data)</summary>
                                <div class="p-space-md">
                                    <div class="font-label-sm uppercase font-bold mb-1 text-primary">Contoh Input:</div>
                                    <div class="diagram-box mb-2">Nama Alat : Excavator
Harga     : 500000
Stok      : 3</div>
                                    <div class="font-label-sm uppercase font-bold mb-1 text-primary">SQL:</div>
                                    <div class="code-block"><code>INSERT INTO alat
(nama_alat, harga, stok)
VALUES
('Excavator', 500000, 3);</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>R — READ (Tampil Data)</summary>
                                <div class="p-space-md">
                                    <div class="code-block mb-2"><code>SELECT * FROM alat;</code></div>
                                    <div class="font-label-sm uppercase font-bold mb-1 text-primary">Hasil ditampilkan di:</div>
                                    <div class="flex flex-wrap gap-1">
                                        <span class="badge-semester">DataGridView</span>
                                        <span class="badge-semester s2">Table</span>
                                        <span class="badge-semester s3">List</span>
                                        <span class="badge-semester s4">Form Pencarian</span>
                                    </div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>U — UPDATE (Ubah Data)</summary>
                                <div class="p-space-md">
                                    <div class="code-block mb-2"><code>UPDATE alat
SET harga = 600000
WHERE id = 1;</code></div>
                                    <div class="diagram-box">Excavator
Harga lama : Rp500.000
Harga baru : Rp600.000</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>D — DELETE (Hapus Data)</summary>
                                <div class="p-space-md">
                                    <div class="code-block mb-2"><code>DELETE FROM alat
WHERE id = 1;</code></div>
                                    <div class="diagram-box">Apakah Anda yakin ingin menghapus data?
        [Ya]    [Tidak]</div>
                                </div>
                            </details>
                        </div>

                        <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <span class="font-label-sm uppercase font-bold">💡 Kesimpulan:</span>
                            <span class="font-body-sm"> CREATE → Tambah · READ → Tampil · UPDATE → Ubah · DELETE → Hapus</span>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 4: DATABASE CONNECTION --}}
                {{-- ===================================================== --}}
                <div id="connection" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">cable</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 4</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Connection Desktop → Database
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <div class="diagram-box mb-space-md">C# Desktop
     ↓
MySQL Connector
     ↓
MySQL Server
     ↓
Database</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Bahasa yang Didukung</h4>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">C# → MySQL</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Java → MySQL</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">VB.NET → MySQL</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Python → MySQL</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Komponen Connection</h4>
                        <div class="code-block mb-space-md"><code>Host     = localhost
Port     = 3306
Database = db_rental
Username = root
Password =</code></div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Connection String</h4>
                        <div class="code-block mb-space-md"><code>Server=localhost;
Port=3306;
Database=db_rental;
Uid=root;
Pwd=;</code></div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Alur Koneksi</h4>
                        <div class="diagram-box">Aplikasi Desktop
       ↓
Membuat Connection
       ↓
MySQL Server
       ↓
Database
       ↓
Connection berhasil?
    ↙       ↘
   Ya       Tidak
   ↓          ↓
Query       Error</div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 5: QUERY & TRANSACTION --}}
                {{-- ===================================================== --}}
                <div id="transaction" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">swap_horiz</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 5</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Query &amp; Transaction
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm">Query Flow</h4>
                        <div class="diagram-box mb-space-md">C# / Java
   ↓
SQL Query
   ↓
MySQL
   ↓
Hasil Query
   ↓
Aplikasi</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Contoh Ketika Tombol Simpan</h4>
                        <div class="diagram-box mb-space-md">Klik Simpan
     ↓
Ambil data dari TextBox
     ↓
Buat INSERT
     ↓
Kirim ke MySQL
     ↓
Data tersimpan
     ↓
Refresh tabel</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-lg mb-space-sm">Transaction</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-sm">
                            Proses bisnis yang melibatkan satu/beberapa operasi database untuk hasil yang utuh.
                        </p>

                        <div class="diagram-box mb-space-md">Pelanggan menyewa alat
        ↓
Buat data penyewaan
        ↓
Buat detail penyewaan
        ↓
Kurangi stok alat
        ↓
Simpan pembayaran</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Konsep ACID</h4>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="acid-badge acid-a mb-2">A — Atomicity</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Semua operasi berhasil atau semuanya dibatalkan.</p>
                                <div class="diagram-box mt-2">Operasi 1 ✓
Operasi 2 ✓
Operasi 3 ✗
→ Rollback</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="acid-badge acid-c mb-2">C — Consistency</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Data harus tetap valid sesuai aturan database.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="acid-badge acid-i mb-2">I — Isolation</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Transaction yang berjalan tidak mengganggu transaction lain.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="acid-badge acid-d mb-2">D — Durability</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Jika commit berhasil, data tetap tersimpan.</p>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Commit &amp; Rollback</h4>
                        <div class="diagram-box">BEGIN TRANSACTION
       ↓
Proses database
       ↓
Semua berhasil?
   ↙          ↘
 Ya           Tidak
 ↓              ↓
COMMIT       ROLLBACK
 ↓              ↓
Simpan       Batalkan</div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 6: REPORT --}}
                {{-- ===================================================== --}}
                <div id="report" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">description</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 6</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Report / Laporan
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Fitur untuk menghasilkan informasi dari database dalam bentuk yang mudah dibaca.
                        </p>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Lap. Pengguna</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Lap. Alat</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Lap. Transaksi</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Lap. Pembayaran</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Lap. Pengembalian</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Lap. Denda</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Lap. Stok</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Contoh Laporan</h4>
                        <div class="db-table" style="overflow-x:auto;">
                            <div class="db-table-header">LAPORAN TRANSAKSI RENTAL</div>
                            <table>
                                <tr><th>No</th><th>Pelanggan</th><th>Alat</th><th>Lama</th><th>Total</th></tr>
                                <tr><td>1</td><td>Budi</td><td>Excavator</td><td>3</td><td>Rp1.500.000</td></tr>
                                <tr><td>2</td><td>Andi</td><td>Bulldozer</td><td>2</td><td>Rp2.000.000</td></tr>
                            </table>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Fitur Laporan</h4>
                        <div class="flex flex-wrap gap-1">
                            <span class="badge-semester">Filter tanggal</span>
                            <span class="badge-semester s2">Search</span>
                            <span class="badge-semester s3">Cetak</span>
                            <span class="badge-semester s4">Export PDF</span>
                            <span class="badge-semester s5">Export Excel</span>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 7: UML --}}
                {{-- ===================================================== --}}
                <div id="uml" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">schema</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 7</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                UML — Unified Modeling Language
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Bahasa pemodelan untuk menggambarkan struktur &amp; perilaku sistem.
                        </p>

                        <div class="space-y-space-md">
                            <details class="accordion-card" open>
                                <summary>1. Use Case Diagram</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Hubungan antara aktor &amp; sistem.</p>
                                    <div class="diagram-box">         Sistem Rental
              |
   ┌──────────┼──────────┐
   ↓          ↓          ↓
 Login      Rental     Laporan
   ↑          ↑          ↑
 Admin      Petugas    Admin</div>
                                    <div class="flex flex-wrap gap-1 mt-2">
                                        <span class="badge-semester">Admin</span>
                                        <span class="badge-semester s2">Petugas</span>
                                        <span class="badge-semester s3">User</span>
                                    </div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>2. Class Diagram</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Class, atribut, method, hubungan.</p>
                                    <div class="diagram-box">+------------------+
|      User        |
+------------------+
| id               |
| nama             |
| username         |
| password         |
+------------------+
| login()          |
| logout()         |
+------------------+</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>3. Activity Diagram</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Alur aktivitas sistem.</p>
                                    <div class="diagram-box">Start
 ↓
Input username/password
 ↓
Validasi
 ↓
Benar?
 ├── Tidak → Pesan Error
 └── Ya → Dashboard
 ↓
End</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>4. Sequence Diagram</summary>
                                <div class="p-space-md">
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Urutan komunikasi pengguna-aplikasi-database.</p>
                                    <div class="diagram-box">User → Form Login
       ↓
Form → Database
       ↓
Database → Form
       ↓
Form → Dashboard</div>
                                </div>
                            </details>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 8: FLOWCHART, DFD, ERD --}}
                {{-- ===================================================== --}}
                <div id="diagram" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">account_tree</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 8</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Flowchart, DFD &amp; ERD
                            </h2>
                        </div>
                    </div>

                    {{-- FLOWCHART --}}
                    <article id="flowchart" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Flowchart
                        </h3>

                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Simbol</th><th>Fungsi</th></tr></thead>
                            <tbody>
                                <tr><td>Oval</td><td>Start/End</td></tr>
                                <tr><td>Persegi panjang</td><td>Proses</td></tr>
                                <tr><td>Belah ketupat</td><td>Decision</td></tr>
                                <tr><td>Jajar genjang</td><td>Input/Output</td></tr>
                                <tr><td>Panah</td><td>Alur</td></tr>
                            </tbody>
                        </table>

                        <div class="diagram-box">   START
     ↓
Input Username
Password
     ↓
Validasi
     ↓
  [Benar?]
   ↙    ↘
 Tidak    Ya
  ↓       ↓
Error   Dashboard
  ↓       ↓
  └──→  END</div>
                    </article>

                    {{-- DFD --}}
                    <article id="dfd" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            DFD — Data Flow Diagram
                        </h3>

                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 mb-space-md">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">External Entity</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Process</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Data Store</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Data Flow</div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Context Diagram (DFD Level 0)</h4>
                        <div class="diagram-box mb-space-md">             Admin
               ↓
        ┌───────────────┐
        │ Sistem Rental │
        └───────────────┘
          ↑           ↑
       Petugas       User</div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">DFD Level 1</h4>
                        <div class="diagram-box">              Sistem Rental
                    |
     ┌──────────────┼──────────────┐
     ↓              ↓              ↓
  1.0 Login     2.0 Master     3.0 Transaksi
                    Data</div>
                    </article>

                    {{-- ERD --}}
                    <article id="erd" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            ERD — Entity Relationship Diagram
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-md mb-space-md">
                            <div class="erd-card">
                                <div class="erd-header">USERS</div>
                                <div class="erd-body">
                                    <div class="erd-row"><span class="erd-pk">PK</span> id</div>
                                    <div class="erd-row">nama</div>
                                    <div class="erd-row">username</div>
                                    <div class="erd-row">password</div>
                                    <div class="erd-row">role</div>
                                </div>
                            </div>
                            <div class="erd-card">
                                <div class="erd-header">PENYEWAAN</div>
                                <div class="erd-body">
                                    <div class="erd-row"><span class="erd-pk">PK</span> id</div>
                                    <div class="erd-row"><span class="erd-fk">FK</span> user_id</div>
                                    <div class="erd-row">tanggal</div>
                                    <div class="erd-row">total</div>
                                    <div class="erd-row">status</div>
                                </div>
                            </div>
                            <div class="erd-card">
                                <div class="erd-header">DETAIL_PENYEWAAN</div>
                                <div class="erd-body">
                                    <div class="erd-row"><span class="erd-pk">PK</span> id</div>
                                    <div class="erd-row"><span class="erd-fk">FK</span> penyewaan_id</div>
                                    <div class="erd-row"><span class="erd-fk">FK</span> alat_id</div>
                                    <div class="erd-row">jumlah</div>
                                    <div class="erd-row">subtotal</div>
                                </div>
                            </div>
                            <div class="erd-card">
                                <div class="erd-header">ALAT</div>
                                <div class="erd-body">
                                    <div class="erd-row"><span class="erd-pk">PK</span> id</div>
                                    <div class="erd-row">nama</div>
                                    <div class="erd-row">harga</div>
                                    <div class="erd-row">stok</div>
                                </div>
                            </div>
                        </div>

                        <div class="diagram-box mb-space-md">USERS
  1
  |
  | N
  ↓
PENYEWAAN
  1
  |
  | N
  ↓
DETAIL_PENYEWAAN
  N
  |
  | 1
  ↓
ALAT</div>

                        <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Artinya:</span>
                            <span class="font-body-sm"> 1 user → banyak penyewaan · 1 penyewaan → banyak detail · 1 alat → muncul di banyak detail</span>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 9: KEY & RELASI --}}
                {{-- ===================================================== --}}
                <div id="key-relasi" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">key</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 9</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Primary Key, Foreign Key &amp; Relasi
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary"><span class="erd-pk">🔑</span> Primary Key</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Identitas unik setiap data.</p>
                                <div class="code-block"><code>users
---------
id ← PRIMARY KEY
nama
username</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary"><span class="erd-fk">🔗</span> Foreign Key</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menghubungkan tabel.</p>
                                <div class="code-block"><code>users (id)
   ↑
penyewaan (user_id) ← FK</code></div>
                            </div>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Relasi Database</h4>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">1 : 1</div>
                                <div class="diagram-box">User ──── Profile
 1          1</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">1 : N</div>
                                <div class="diagram-box">User
 1
 |
 N
Penyewaan</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">N : M</div>
                                <div class="diagram-box">Penyewaan
    N
    |
Detail
    |
    N
  Alat</div>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN 10: HUBUNGAN & PROPOSAL --}}
                {{-- ===================================================== --}}
                <div id="proposal" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">description</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian 10</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Hubungan Sistem &amp; Proposal
                            </h2>
                        </div>
                    </div>

                    {{-- Hubungan Semua --}}
                    <article id="hubungan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">A</span>
                            Hubungan Sistem Desktop + Database
                        </h3>

                        <div class="diagram-box">             USER
               ↓
       ┌────────────────┐
       │ Desktop App    │
       │ C# / Java      │
       └────────────────┘
               ↓
       Database Connection
               ↓
       ┌────────────────┐
       │ MySQL Server   │
       └────────────────┘
               ↓
       ┌────────────────┐
       │ Database       │
       │ users          │
       │ alat           │
       │ transaksi      │
       │ pembayaran     │
       └────────────────┘</div>

                        <div class="diagram-box mt-space-md">Form Login
Form Master Data
Form Transaksi
Form Laporan
       ↓
Database Connection
       ↓
MySQL</div>
                    </article>

                    {{-- Proposal --}}
                    <article id="proposal-app" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">B</span>
                            Proposal Aplikasi
                        </h3>

                        <div class="space-y-space-md">
                            <details class="accordion-card" open>
                                <summary>1. Judul &amp; Latar Belakang</summary>
                                <div class="p-space-md space-y-space-sm">
                                    <div class="font-label-sm uppercase font-bold mb-1 text-primary">Judul:</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Proposal Pengembangan Sistem Informasi Rental Alat Proyek Berbasis Desktop
                                    </p>
                                    <div class="font-label-sm uppercase font-bold mb-1 text-primary">Latar Belakang:</div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Pengelolaan data penyewaan alat proyek secara manual dapat menyebabkan kesalahan pencatatan, kesulitan mencari data, serta lambatnya pembuatan laporan. Oleh karena itu, diperlukan aplikasi desktop yang dapat membantu proses pengelolaan data secara terkomputerisasi.
                                    </p>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>2. Rumusan Masalah &amp; Tujuan</summary>
                                <div class="p-space-md space-y-space-sm">
                                    <div class="font-label-sm uppercase font-bold mb-1 text-primary">Rumusan Masalah:</div>
                                    <ul class="font-code-inline text-code-inline space-y-1">
                                        <li>› Bagaimana mengelola data alat proyek?</li>
                                        <li>› Bagaimana mengelola data pelanggan?</li>
                                        <li>› Bagaimana melakukan transaksi penyewaan?</li>
                                        <li>› Bagaimana menghasilkan laporan transaksi?</li>
                                        <li>› Bagaimana menjaga keamanan akses aplikasi?</li>
                                    </ul>
                                    <div class="font-label-sm uppercase font-bold mb-1 mt-3 text-primary">Tujuan:</div>
                                    <ul class="font-code-inline text-code-inline space-y-1">
                                        <li>› Membuat aplikasi pengelolaan rental</li>
                                        <li>› Mempermudah pengelolaan data</li>
                                        <li>› Mempercepat transaksi</li>
                                        <li>› Mengurangi kesalahan pencatatan</li>
                                        <li>› Mempermudah pembuatan laporan</li>
                                    </ul>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>3. Fitur Aplikasi</summary>
                                <div class="p-space-md">
                                    <div class="diagram-box">Authentication
      ↓
Dashboard
      ↓
Master Data
 ├── User
 ├── Alat
 ├── Kategori
 └── Pelanggan
      ↓
Transaksi
 ├── Penyewaan
 ├── Pembayaran
 └── Pengembalian
      ↓
Laporan</div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>4. Teknologi</summary>
                                <div class="p-space-md">
                                    <table class="brutal-table">
                                        <thead><tr><th>Komponen</th><th>Teknologi</th></tr></thead>
                                        <tbody>
                                            <tr><td>Bahasa</td><td>C#</td></tr>
                                            <tr><td>Framework</td><td>.NET / WinForms</td></tr>
                                            <tr><td>Database</td><td>MySQL</td></tr>
                                            <tr><td>DBMS</td><td>MySQL Server</td></tr>
                                            <tr><td>IDE</td><td>Visual Studio</td></tr>
                                            <tr><td>Perancangan</td><td>UML, DFD, ERD</td></tr>
                                            <tr><td>Laporan</td><td>Report Viewer / PDF</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </details>
                        </div>
                    </article>

                    {{-- Urutan Pengerjaan --}}
                    <article id="urutan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">C</span>
                            Urutan Pengerjaan Aplikasi Desktop
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="space-y-2">
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">01.</strong> Analisis Masalah
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">02.</strong> Menentukan Kebutuhan
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">03.</strong> Membuat Proposal
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">04.</strong> Membuat Flowchart
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">05.</strong> Membuat DFD
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">06.</strong> Membuat ERD
                                </div>
                                <div class="bg-primary-fixed border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-primary">07.</strong> Membuat UML
                                </div>
                            </div>
                            <div class="space-y-2">
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">08.</strong> Membuat Database
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">09.</strong> Membuat Connection
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">10.</strong> Membuat Authentication
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">11.</strong> Membuat CRUD
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">12.</strong> Membuat Transaction
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">13.</strong> Membuat Report
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">14.</strong> Testing
                                </div>
                                <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] font-code-inline text-code-inline">
                                    <strong class="text-secondary">15.</strong> Dokumentasi
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- Hubungan Semua Materi --}}
                    <article id="hubungan-semua" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">D</span>
                            Hubungan Semua Materi
                        </h3>

                        <div class="diagram-box">              PROPOSAL
                  ↓
           ANALISIS SISTEM
                  ↓
       ┌──────────┼──────────┐
       ↓          ↓          ↓
   Flowchart     DFD        UML
       │          │          │
       └──────────┼──────────┘
                  ↓
                 ERD
                  ↓
              DATABASE
                  ↓
        DATABASE CONNECTION
                  ↓
          APLIKASI DESKTOP
                  ↓
      ┌───────────┼───────────┐
      ↓           ↓           ↓
Authentication   CRUD     Transaction
      │           │           │
      └───────────┼───────────┘
                  ↓
               REPORT
                  ↓
               TESTING
                  ↓
              APLIKASI</div>
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
                            <div class="flex justify-between"><span>Kode:</span><strong>R3</strong></div>
                            <div class="flex justify-between"><span>Topik:</span><strong>18</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~20 Jam</strong></div>
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

                            <div class="font-label-sm uppercase font-bold text-secondary pt-2 pb-1">◢ Fondasi</div>
                            <a href="#pengertian" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">1. Pengertian Desktop</a>
                            <a href="#auth" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">2. Authentication</a>
                            <a href="#crud" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">3. CRUD</a>
                            <a href="#connection" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">4. Database Connection</a>
                            <a href="#transaction" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">5. Query &amp; Transaction</a>
                            <a href="#report" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">6. Report</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Perancangan</div>
                            <a href="#uml" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">7. UML</a>
                            <a href="#flowchart" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">A. Flowchart</a>
                            <a href="#dfd" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">B. DFD</a>
                            <a href="#erd" class="toc-link block pl-6 pr-2 py-1 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all text-[12px]">C. ERD</a>
                            <a href="#key-relasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">9. Key &amp; Relasi</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Proyek</div>
                            <a href="#hubungan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">A. Hubungan Sistem</a>
                            <a href="#proposal-app" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">B. Proposal</a>
                            <a href="#urutan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">C. Urutan Pengerjaan</a>
                            <a href="#hubungan-semua" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all font-bold">D. Hubungan Semua</a>
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
                    Bangun Aplikasi Desktop + Database
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai <strong>Authentication</strong>, <strong>CRUD</strong>,
                    <strong>Database Connection</strong>, <strong>Transaction (ACID)</strong>,
                    <strong>Report</strong>, <strong>UML/DFD/ERD</strong>, dan <strong>Proposal</strong>,
                    siswa diharapkan mampu membangun aplikasi desktop nyata —
                    lengkap dengan <strong>dokumentasi</strong> dan siap <strong>dipresentasikan</strong>.
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

        console.log('%c🎨 Modul R3 — KK PTGM XII Loaded', 'background:#ff7a00;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
