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

    /* ============ METHOD BADGES (HTTP) ============ */
    .method-badge {
        display: inline-block;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        font-weight: 700;
        padding: 2px 8px;
        border: 2px solid #1c1b1b;
        text-transform: uppercase;
    }
    .method-get    { background: #c9e6ff; }
    .method-post   { background: #a7f3a0; }
    .method-put    { background: #ffdf9b; }
    .method-patch  { background: #ffdbc8; }
    .method-delete { background: #ffb4ae; }

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
            <span class="text-on-surface-variant">KELAS XI</span>
            <span class="text-on-surface-variant">/</span>
            <span class="font-bold text-on-surface">R4 — PW</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">R4</span>
                    <span class="badge-semester s2">KEJURUAN</span>
                    <span class="badge-semester s3">KELAS XI</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    Pemrograman Web
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap yang membahas <strong>dasar pengembangan web</strong>, penggunaan
                    <strong>Laragon</strong> sebagai local server, bahasa <strong>PHP</strong>, dependency manager
                    <strong>Composer</strong>, framework <strong>CodeIgniter</strong> &amp; <strong>Laravel</strong>
                    dengan pola <strong>MVC</strong>, hingga pembuatan <strong>REST API</strong> dengan
                    <strong>JSON</strong>, <strong>authentication</strong>, dan integrasi <strong>MySQL</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Materi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">40 Topik</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~10 Jam</div>
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
                {{-- BAGIAN A: DASAR PENGEMBANGAN WEB --}}
                {{-- ===================================================== --}}
                <div id="dasar-web" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">language</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Fondasi</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Dasar Pengembangan Web
                            </h2>
                        </div>
                    </div>

                    {{-- 1. Dasar Pengembangan Web --}}
                    <article id="pengenalan-web" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pengenalan Web Development
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Pengembangan web adalah proses membuat aplikasi yang dapat diakses melalui
                            <strong>browser</strong>, baik untuk menampilkan informasi maupun menjalankan proses tertentu.
                            Secara umum terdapat dua bagian utama: <strong>Frontend</strong> dan <strong>Backend</strong>.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg text-label-lg uppercase font-bold mb-2 text-primary">Frontend</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                    Bagian yang dilihat dan digunakan pengguna.
                                </p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› <strong>HTML</strong> → struktur halaman</li>
                                    <li>› <strong>CSS</strong> → tampilan dan desain</li>
                                    <li>› <strong>JavaScript</strong> → interaksi &amp; logika browser</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg text-label-lg uppercase font-bold mb-2 text-primary">Backend</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                    Bagian yang berjalan di server &amp; menangani proses di belakang layar.
                                </p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Login, Registrasi, CRUD</li>
                                    <li>› Validasi data &amp; Autentikasi</li>
                                    <li>› Pengolahan database &amp; API</li>
                                </ul>
                            </div>
                        </div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>Bahasa / Framework Backend Populer</summary>
                            <div class="p-space-md">
                                <div class="grid grid-cols-2 md:grid-cols-5 gap-2">
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">PHP</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Laravel</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">CodeIgniter</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Node.js</div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Django</div>
                                </div>
                            </div>
                        </details>
                    </article>

                    {{-- 2. Server & Local Development --}}
                    <article id="server-lokal" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Server &amp; Local Development
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Untuk membuat aplikasi web PHP di komputer sendiri, kita membutuhkan
                            <strong>lingkungan server lokal</strong>.
                        </p>
                        <div class="diagram-box">Browser
   ↓
Web Server
   ↓
PHP
   ↓
Database

Contoh: http://localhost</div>
                    </article>

                    {{-- 3. Laragon --}}
                    <article id="laragon" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Laragon
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Laragon</strong> adalah lingkungan pengembangan lokal (local development environment)
                            untuk membuat &amp; menjalankan aplikasi web secara lokal. Laragon sangat populer untuk
                            pengembangan PHP karena menyediakan berbagai komponen dalam satu lingkungan.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Komponen Laragon</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› PHP</li>
                                    <li>› Web Server (Apache / Nginx)</li>
                                    <li>› MySQL / MariaDB</li>
                                    <li>› Node.js</li>
                                    <li>› Composer</li>
                                    <li>› Git</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Fungsi Laragon</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Menjalankan server lokal</li>
                                    <li>› Menjalankan aplikasi PHP</li>
                                    <li>› Membuat &amp; mengelola database</li>
                                    <li>› Mengelola versi PHP</li>
                                    <li>› Menjalankan project Laravel/CI</li>
                                    <li>› Menggunakan Composer, Node.js, Git</li>
                                </ul>
                            </div>
                        </div>

                        <details class="accordion-card mt-space-md">
                            <summary>Struktur Folder Laragon</summary>
                            <div class="p-space-md">
                                <div class="diagram-box">C:\laragon\www\
├── project1
├── project2
└── laravel-app

Project diakses via: http://project1.test</div>
                            </div>
                        </details>
                    </article>

                    {{-- 4. Web Server --}}
                    <article id="web-server" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Web Server
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Web server</strong> adalah software yang menerima request dari browser
                            kemudian memberikan response. Contoh: <strong>Apache</strong> dan <strong>Nginx</strong>.
                        </p>
                        <div class="diagram-box">Browser
   │ Request
   ↓
Web Server
   │
   ↓
PHP Application
   │
   ↓
Database
   │
   ↓
Response
   ↓
Browser</div>
                    </article>

                    {{-- 5. PHP --}}
                    <article id="php" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            PHP
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>PHP (PHP: Hypertext Preprocessor)</strong> adalah bahasa pemrograman
                            server-side yang banyak digunakan untuk membuat aplikasi web.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">PHP dapat:</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Memproses form</li>
                                    <li>› Mengakses database</li>
                                    <li>› Melakukan login</li>
                                    <li>› Mengolah data</li>
                                    <li>› Membuat API</li>
                                    <li>› Menghasilkan HTML</li>
                                </ul>
                            </div>
                            <div class="code-block">
<code>&lt;?php

$nama = "Asis";

echo "Halo, $nama";</code>
                            </div>
                        </div>
                    </article>

                    {{-- 6. Composer --}}
                    <article id="composer" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Composer
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Composer</strong> adalah dependency manager untuk PHP.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Kegunaan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Menginstal library</li>
                                    <li>› Mengelola dependency</li>
                                    <li>› Menginstal framework</li>
                                    <li>› Mengelola package PHP</li>
                                </ul>
                                <div class="code-block mt-3"><code>composer install</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">File Penting</div>
                                <div class="space-y-2">
                                    <div>
                                        <div class="font-code-inline text-code-inline font-bold">composer.json</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Berisi daftar dependency project.</p>
                                    </div>
                                    <div>
                                        <div class="font-code-inline text-code-inline font-bold">composer.lock</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Menyimpan versi dependency agar instalasi konsisten.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 7. Framework --}}
                    <article id="framework" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            Framework
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Framework</strong> adalah kerangka kerja yang menyediakan struktur, aturan,
                            library, dan fitur untuk membantu programmer membuat aplikasi.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-on-surface-variant">Tanpa Framework</div>
                                <div class="diagram-box">Programmer
    ↓
Membangun banyak hal dari awal</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-primary">Dengan Framework</div>
                                <div class="diagram-box">Framework
    ↓
Struktur + Library + Fitur
    ↓
Programmer fokus pada aplikasi</div>
                            </div>
                        </div>
                        <div class="mt-space-md bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Keuntungan:</span>
                            <span class="font-body-sm text-body-sm"> Pengembangan lebih cepat • Struktur teratur • Banyak fitur siap pakai • Mudah dipelihara • Mempermudah kerja tim</span>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN B: CODEIGNITER --}}
                {{-- ===================================================== --}}
                <div id="codeigniter" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[32px]">code_blocks</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Framework PHP</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                CodeIgniter &amp; MVC
                            </h2>
                        </div>
                    </div>

                    {{-- 9. CodeIgniter --}}
                    <article id="pengenalan-ci" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            CodeIgniter
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>CodeIgniter</strong> adalah framework PHP yang <em>ringan</em> dan digunakan
                            untuk membuat aplikasi web. CodeIgniter menggunakan konsep <strong>MVC</strong>.
                        </p>
                        <div class="diagram-box">Model
  ↓
Controller
  ↓
View</div>
                    </article>

                    {{-- 10. MVC pada CI --}}
                    <article id="mvc-ci" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            MVC pada CodeIgniter
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Model</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Bertanggung jawab terhadap data &amp; interaksi database.
                                </p>
                                <div class="font-code-inline text-code-inline">UserModel<br>ProductModel<br>StudentModel</div>
                                <div class="font-label-sm uppercase font-bold mt-2 mb-1 text-on-surface-variant">Tugas:</div>
                                <ul class="font-code-inline text-code-inline space-y-0.5">
                                    <li>› Mengambil data</li>
                                    <li>› Menambah data</li>
                                    <li>› Mengubah data</li>
                                    <li>› Menghapus data</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">View</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Bagian yang ditampilkan ke pengguna.
                                </p>
                                <div class="font-code-inline text-code-inline">dashboard.php<br>login.php<br>users.php</div>
                                <div class="font-label-sm uppercase font-bold mt-2 mb-1 text-on-surface-variant">Isi:</div>
                                <ul class="font-code-inline text-code-inline space-y-0.5">
                                    <li>› HTML</li>
                                    <li>› CSS</li>
                                    <li>› Form &amp; Table</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Controller</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Penghubung request, model, dan view.
                                </p>
                                <div class="font-code-inline text-code-inline">UserController<br>ProductController<br>LoginController</div>
                            </div>
                        </div>
                        <div class="mt-space-md diagram-box">User
 ↓
Controller
 ↓
Model
 ↓
Database
 ↓
Controller
 ↓View
 ↓
User</div>
                    </article>

                    {{-- 11. Routing --}}
                    <article id="routing-ci" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Routing
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Routing menentukan URL mana yang akan menjalankan fungsi atau controller tertentu.
                        </p>
                        <div class="diagram-box mb-space-sm">GET /users
        ↓
UserController
        ↓
index()</div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">/users</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">/products</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">/login</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">/dashboard</div>
                        </div>
                    </article>

                    {{-- 12. CRUD --}}
                    <article id="crud" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            CRUD
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>CRUD</strong> adalah operasi dasar pengolahan data.
                        </p>
                        <table class="brutal-table">
                            <thead><tr><th>CRUD</th><th>Operasi</th><th>Contoh</th></tr></thead>
                            <tbody>
                                <tr><td><strong>Create</strong></td><td>Membuat data</td><td>Tambah siswa</td></tr>
                                <tr><td><strong>Read</strong></td><td>Membaca data</td><td>Lihat siswa</td></tr>
                                <tr><td><strong>Update</strong></td><td>Mengubah data</td><td>Edit siswa</td></tr>
                                <tr><td><strong>Delete</strong></td><td>Menghapus data</td><td>Hapus siswa</td></tr>
                            </tbody>
                        </table>
                        <div class="mt-space-sm diagram-box">Data Siswa
├── Tambah
├── Lihat
├── Edit
└── Hapus</div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN C: LARAVEL --}}
                {{-- ===================================================== --}}
                <div id="laravel" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary-container text-[32px]">rocket_launch</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Framework PHP Modern</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Laravel
                            </h2>
                        </div>
                    </div>

                    {{-- 13. Laravel --}}
                    <article id="pengenalan-laravel" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pengenalan Laravel
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Laravel</strong> adalah framework PHP modern yang digunakan untuk membangun
                            aplikasi web. Laravel menyediakan banyak fitur siap pakai.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Routing</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">MVC</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Database</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Eloquent ORM</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Migration</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Seeder</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Middleware</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Validation</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Authentication</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">API</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Queue</div>
                            <div class="bg-surface-container border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Blade</div>
                        </div>
                    </article>

                    {{-- 14. Struktur Laravel --}}
                    <article id="struktur-laravel" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Struktur Dasar Laravel
                        </h3>
                        <div class="diagram-box mb-space-md">project/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── vendor/
├── .env
├── artisan
└── composer.json</div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>Penjelasan Folder Penting</summary>
                            <div class="p-space-md space-y-space-sm">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">app/</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Kode utama aplikasi (Models, Http/Controllers, Middleware, Requests).</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">routes/</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Definisi route: <code>web.php</code>, <code>api.php</code>.</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">resources/</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Blade template, CSS, JavaScript.</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">database/</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Migration, Seeder, Factory.</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">public/</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Document root: index.php, favicon, asset.</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">.env</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Konfigurasi environment (DB, APP_KEY, dll). <strong>Jangan commit ke repo publik!</strong></p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </article>

                    {{-- 15. Artisan --}}
                    <article id="artisan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Artisan CLI
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Artisan</strong> adalah command-line interface milik Laravel.
                        </p>
                        <div class="code-block"><code>php artisan serve                          # Jalankan dev server
php artisan route:list                     # Lihat daftar route
php artisan make:controller UserController # Buat controller
php artisan make:model User                # Buat model
php artisan make:migration create_products_table
php artisan migrate                        # Jalankan migration
php artisan make:seeder UserSeeder         # Buat seeder
php artisan db:seed                        # Jalankan seeder</code></div>
                    </article>

                    {{-- 16. Migration --}}
                    <article id="migration" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Migration
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Migration</strong> digunakan untuk mengelola struktur database melalui kode.
                        </p>
                        <div class="diagram-box mb-space-md">Migration
   ↓
Database
   ↓
Table (users, products, categories, orders)</div>
                        <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Keuntungan:</span>
                            <span class="font-body-sm text-body-sm"> Struktur DB terdokumentasi • Dapat dipakai tim • Dapat dijalankan ulang di environment lain • Perubahan terorganisir</span>
                        </div>
                    </article>

                    {{-- 17. Seeder --}}
                    <article id="seeder" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Seeder
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Seeder</strong> digunakan untuk memasukkan data awal / data contoh ke database.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Contoh Data Seeder</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Admin</li>
                                    <li>› User</li>
                                    <li>› Kategori</li>
                                    <li>› Produk</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Perbedaan</div>
                                <div class="font-code-inline text-code-inline space-y-2">
                                    <div><span class="font-bold">Migration</span> = struktur DB</div>
                                    <div><span class="font-bold">Seeder</span> = data ke DB</div>
                                </div>
                            </div>
                        </div>
                    </article>

                    {{-- 18. Eloquent ORM --}}
                    <article id="eloquent" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Eloquent ORM
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Eloquent</strong> adalah ORM (Object-Relational Mapping) milik Laravel. Eloquent
                            memungkinkan programmer berinteraksi dengan database menggunakan <strong>model</strong>,
                            alih-alih menulis SQL secara langsung.
                        </p>
                        <div class="diagram-box">Product
   ↓
Eloquent
   ↓
products table</div>
                    </article>

                    {{-- 19. Relasi Database --}}
                    <article id="relasi-db" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            Relasi Database
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">One-to-One</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Satu data memiliki satu data lainnya.</p>
                                <div class="diagram-box">User ─── Profile</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">One-to-Many</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Satu data memiliki banyak data.</p>
                                <div class="diagram-box">Category
   │
   ├── Product
   ├── Product
   └── Product</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Many-to-Many</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Banyak data berhubungan dengan banyak data.</p>
                                <div class="diagram-box">Students
    ↕
Courses

(butuh pivot table)</div>
                            </div>
                        </div>
                    </article>

                    {{-- 20. Validation --}}
                    <article id="validation" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">8</span>
                            Validation
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Validation</strong> digunakan untuk memastikan data yang dikirim pengguna sesuai aturan.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-primary">Contoh Aturan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Nama → wajib diisi</li>
                                    <li>› Email → harus valid</li>
                                    <li>› Password → minimal panjang tertentu</li>
                                    <li>› Harga → harus berupa angka</li>
                                </ul>
                            </div>
                            <div class="diagram-box">Input User
    ↓
Validation
    ↓
Valid?
 ┌──┴───┐
Ya     Tidak
 ↓       ↓
Proses  Error</div>
                        </div>
                    </article>

                    {{-- 21. Middleware --}}
                    <article id="middleware" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">9</span>
                            Middleware
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Middleware</strong> adalah lapisan yang memeriksa request sebelum mencapai tujuan akhirnya.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-primary">Kegunaan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Memeriksa login</li>
                                    <li>› Memeriksa role</li>
                                    <li>› Memeriksa permission</li>
                                    <li>› Memeriksa token</li>
                                </ul>
                            </div>
                            <div class="diagram-box">User
 ↓
Request
 ↓
Middleware
 ↓
Controller</div>
                        </div>
                    </article>

                    {{-- 22. Auth --}}
                    <article id="auth" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">10</span>
                            Authentication &amp; Authorization
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Authentication</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menjawab: <strong>"Siapa kamu?"</strong></p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Login</li>
                                    <li>› Username / email</li>
                                    <li>› Password</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Authorization</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menjawab: <strong>"Apa yang boleh kamu lakukan?"</strong></p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Admin → hapus user</li>
                                    <li>› Petugas → proses transaksi</li>
                                    <li>› User → lihat datanya</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-space-md bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">💡 Kesimpulan:</span>
                            <span class="font-body-sm text-body-sm"> Authentication = identitas &nbsp;•&nbsp; Authorization = hak akses.</span>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN D: API & REST --}}
                {{-- ===================================================== --}}
                <div id="api" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-tertiary text-[32px]">api</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Integrasi</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                API, REST &amp; JSON
                            </h2>
                        </div>
                    </div>

                    {{-- 23. API --}}
                    <article id="pengenalan-api" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            API
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>API (Application Programming Interface)</strong> adalah mekanisme yang
                            memungkinkan satu software berkomunikasi dengan software lain.
                        </p>
                        <div class="diagram-box mb-space-sm">Frontend
   ↓
API
   ↓
Backend
   ↓
Database</div>
                        <div class="code-block"><code>GET /api/products

// Response:
[
  {
    "id": 1,
    "name": "Laptop",
    "price": 5000000
  }
]</code></div>
                    </article>

                    {{-- 24. REST API --}}
                    <article id="rest-api" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            REST API
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>REST (Representational State Transfer)</strong> adalah gaya arsitektur
                            untuk membangun API berbasis HTTP.
                        </p>
                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Method</th><th>Fungsi</th></tr></thead>
                            <tbody>
                                <tr><td><span class="method-badge method-get">GET</span></td><td>Mengambil data</td></tr>
                                <tr><td><span class="method-badge method-post">POST</span></td><td>Membuat data</td></tr>
                                <tr><td><span class="method-badge method-put">PUT</span></td><td>Mengganti / memperbarui data</td></tr>
                                <tr><td><span class="method-badge method-patch">PATCH</span></td><td>Memperbarui sebagian data</td></tr>
                                <tr><td><span class="method-badge method-delete">DELETE</span></td><td>Menghapus data</td></tr>
                            </tbody>
                        </table>
                        <div class="code-block"><code>GET    /api/products
POST   /api/products
GET    /api/products/1
PUT    /api/products/1
DELETE /api/products/1</code></div>
                    </article>

                    {{-- 25. Endpoint --}}
                    <article id="endpoint" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Endpoint
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Endpoint</strong> adalah alamat tertentu untuk mengakses resource melalui API.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-code-inline text-code-inline font-bold mb-2">GET /api/products</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Mengambil semua data produk.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-code-inline text-code-inline font-bold mb-2">GET /api/products/10</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Mengambil produk dengan ID 10.</p>
                            </div>
                        </div>
                    </article>

                    {{-- 26. Request & Response --}}
                    <article id="request-response" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Request &amp; Response
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Request</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Permintaan dari client ke server.</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› URL</li>
                                    <li>› HTTP method</li>
                                    <li>› Header</li>
                                    <li>› Parameter</li>
                                    <li>› Body</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Response</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Jawaban server ke client.</p>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Status code</li>
                                    <li>› Header</li>
                                    <li>› Data</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-space-md diagram-box">Client
   │ Request
   ↓
Server/API
   │ Response
   ↓
Client</div>
                    </article>

                    {{-- 27. JSON --}}
                    <article id="json" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            JSON
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>JSON (JavaScript Object Notation)</strong> adalah format data yang sangat umum
                            digunakan dalam API.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="code-block"><code>{
  "id": 1,
  "nama": "Asis",
  "kelas": "XII RPL"
}</code></div>
                            <div class="code-block"><code>{
  "data": [
    { "id": 1, "nama": "Budi" },
    { "id": 2, "nama": "Andi" }
  ]
}</code></div>
                        </div>
                        <div class="mt-space-sm flex flex-wrap gap-2">
                            <span class="method-badge method-get">String</span>
                            <span class="method-badge method-post">Number</span>
                            <span class="method-badge method-put">Boolean</span>
                            <span class="method-badge method-patch">Array</span>
                            <span class="method-badge method-delete">Object</span>
                            <span class="method-badge">Null</span>
                        </div>
                    </article>

                    {{-- 28. HTTP Status Code --}}
                    <article id="http-status" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            HTTP Status Code
                        </h3>
                        <details class="accordion-card mb-space-md" open>
                            <summary>2xx — Berhasil</summary>
                            <div class="p-space-md space-y-2">
                                <div><span class="method-badge method-post">200 OK</span> <span class="font-body-sm">Request berhasil</span></div>
                                <div><span class="method-badge method-post">201 Created</span> <span class="font-body-sm">Data berhasil dibuat</span></div>
                                <div><span class="method-badge method-post">204 No Content</span> <span class="font-body-sm">Berhasil tapi tidak ada data dikembalikan</span></div>
                            </div>
                        </details>
                        <details class="accordion-card mb-space-md">
                            <summary>4xx — Kesalahan Client</summary>
                            <div class="p-space-md space-y-2">
                                <div><span class="method-badge method-patch">400 Bad Request</span> <span class="font-body-sm">Request tidak valid</span></div>
                                <div><span class="method-badge method-patch">401 Unauthorized</span> <span class="font-body-sm">Belum terautentikasi / token invalid</span></div>
                                <div><span class="method-badge method-patch">403 Forbidden</span> <span class="font-body-sm">Sudah dikenali tapi tidak punya izin</span></div>
                                <div><span class="method-badge method-patch">404 Not Found</span> <span class="font-body-sm">Resource tidak ditemukan</span></div>
                                <div><span class="method-badge method-patch">422 Unprocessable</span> <span class="font-body-sm">Gagal validasi</span></div>
                            </div>
                        </details>
                        <details class="accordion-card">
                            <summary>5xx — Kesalahan Server</summary>
                            <div class="p-space-md space-y-2">
                                <div><span class="method-badge method-delete">500 Internal Server Error</span> <span class="font-body-sm">Terjadi kesalahan pada server</span></div>
                            </div>
                        </details>
                    </article>

                    {{-- 29. API Authentication --}}
                    <article id="api-auth" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            API Authentication
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            API yang membutuhkan keamanan biasanya menggunakan authentication berbasis <strong>token</strong>.
                        </p>
                        <div class="diagram-box mb-space-md">Login
 ↓
Server memverifikasi user
 ↓
Token dibuat
 ↓
Client menyimpan token
 ↓
Token dikirim pada request berikutnya</div>
                        <div class="code-block"><code>Authorization: Bearer TOKEN</code></div>
                    </article>

                    {{-- 30. Laravel & API --}}
                    <article id="laravel-api" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">8</span>
                            Laravel &amp; API
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Laravel dapat digunakan sebagai backend API.
                        </p>
                        <div class="diagram-box mb-space-md">React / Flutter / Mobile App
          ↓
       REST API
          ↓
        Laravel
          ↓
       Eloquent
          ↓
        MySQL</div>
                        <div class="code-block"><code>GET    /api/products
POST   /api/products
GET    /api/products/{id}
PUT    /api/products/{id}
DELETE /api/products/{id}</code></div>
                    </article>

                    {{-- 31. Frontend-Backend Terpisah --}}
                    <article id="frontend-backend" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">9</span>
                            Frontend &amp; Backend Terpisah
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Dalam aplikasi modern, frontend &amp; backend dapat dibuat terpisah.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-red-600">❌ SALAH</div>
                                <div class="diagram-box">React → MySQL</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Frontend tidak boleh langsung mengakses database.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-green-700">✔ BENAR</div>
                                <div class="diagram-box">React → API → Laravel → MySQL</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Hanya backend yang mengakses database.</p>
                            </div>
                        </div>
                    </article>

                    {{-- 32. Axios --}}
                    <article id="axios" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">10</span>
                            Axios
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Axios</strong> adalah HTTP client untuk frontend JavaScript yang digunakan
                            mengirim request ke API.
                        </p>
                        <div class="diagram-box mb-space-md">React
 ↓
Axios
 ↓
GET /api/products
 ↓
Laravel
 ↓
JSON
 ↓
React</div>
                        <div class="flex flex-wrap gap-2">
                            <span class="method-badge method-get">GET</span>
                            <span class="method-badge method-post">POST</span>
                            <span class="method-badge method-put">PUT</span>
                            <span class="method-badge method-patch">PATCH</span>
                            <span class="method-badge method-delete">DELETE</span>
                        </div>
                    </article>

                    {{-- 33. Postman --}}
                    <article id="postman" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">11</span>
                            Postman
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Postman</strong> adalah tool untuk menguji API sebelum frontend dibuat.
                        </p>
                        <div class="code-block"><code>Method: GET
URL:    http://localhost:8000/api/products

// Response (JSON):
[
  { "id": 1, "name": "Laptop", "price": 5000000 }
]</code></div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN E: DATABASE MYSQL --}}
                {{-- ===================================================== --}}
                <div id="database" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">database</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Data Layer</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Database MySQL
                            </h2>
                        </div>
                    </div>

                    {{-- 34. MySQL --}}
                    <article id="mysql" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            MySQL
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>MySQL</strong> adalah sistem manajemen database relasional. Data disimpan
                            dalam bentuk tabel.
                        </p>
                        <div class="diagram-box mb-space-md">users
┌────┬────────┬─────────────┐
│ id │ nama   │ email       │
├────┼────────┼─────────────┤
│ 1  │ Budi   │ budi@mail   │
│ 2  │ Andi   │ andi@mail   │
└────┴────────┴─────────────┘</div>
                        <div class="flex flex-wrap gap-2">
                            <span class="method-badge">Database</span>
                            <span class="method-badge">Table</span>
                            <span class="method-badge">Row</span>
                            <span class="method-badge">Column</span>
                            <span class="method-badge method-put">Primary Key</span>
                            <span class="method-badge method-patch">Foreign Key</span>
                        </div>
                    </article>

                    {{-- 35. PK & FK --}}
                    <article id="key" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Primary Key &amp; Foreign Key
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Primary Key</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Kolom identitas unik setiap record. Contoh: <code>id</code>.
                                </p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Nilainya tidak boleh sama dalam satu tabel.
                                </p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Foreign Key</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Kolom untuk menghubungkan tabel.
                                </p>
                                <div class="diagram-box">categories
     │ category_id
     ↓
products</div>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN F: ALUR & PERBANDINGAN --}}
                {{-- ===================================================== --}}
                <div id="alur" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[32px]">account_tree</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Review</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Alur Lengkap &amp; Perbandingan
                            </h2>
                        </div>
                    </div>

                    {{-- 36. Alur Lengkap --}}
                    <article id="alur-lengkap" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Alur Lengkap Aplikasi Web
                        </h3>
                        <details class="accordion-card mb-space-md" open>
                            <summary>Aplikasi Web Tradisional (Server-side Rendering)</summary>
                            <div class="p-space-md">
                                <div class="diagram-box">1. User membuka website
          ↓
2. Browser mengirim request
          ↓
3. Route menerima request
          ↓
4. Controller dijalankan
          ↓
5. Controller memanggil Model
          ↓
6. Model mengambil data MySQL
          ↓
7. Data dikembalikan
          ↓
8. Controller menghasilkan response
          ↓
9. Browser menampilkan data</div>
                            </div>
                        </details>
                        <details class="accordion-card">
                            <summary>Aplikasi Modern (Frontend Terpisah)</summary>
                            <div class="p-space-md">
                                <div class="diagram-box">React
  ↓
Axios
  ↓
REST API
  ↓
Laravel Route
  ↓
Controller
  ↓
Model/Eloquent
  ↓
MySQL
  ↓
JSON Response
  ↓
Axios
  ↓
React
  ↓
Tampilan</div>
                            </div>
                        </details>
                    </article>

                    {{-- 37. Perbandingan CI vs Laravel --}}
                    <article id="perbandingan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            CodeIgniter vs Laravel
                        </h3>
                        <table class="brutal-table">
                            <thead><tr><th>Aspek</th><th>CodeIgniter</th><th>Laravel</th></tr></thead>
                            <tbody>
                                <tr><td>Bahasa</td><td>PHP</td><td>PHP</td></tr>
                                <tr><td>Jenis</td><td>Framework</td><td>Framework</td></tr>
                                <tr><td>MVC</td><td>Ya</td><td>Ya</td></tr>
                                <tr><td>ORM</td><td>Query Builder / Model</td><td>Eloquent</td></tr>
                                <tr><td>Routing</td><td>Ada</td><td>Ada</td></tr>
                                <tr><td>Migration</td><td>Ada</td><td>Ada</td></tr>
                                <tr><td>API</td><td>Bisa</td><td>Sangat umum digunakan</td></tr>
                                <tr><td>CLI</td><td>Spark</td><td>Artisan</td></tr>
                                <tr><td>Kompleksitas</td><td>Relatif ringan</td><td>Fitur lebih lengkap</td></tr>
                                <tr><td>Ekosistem</td><td>Lebih sederhana</td><td>Sangat luas</td></tr>
                                <tr><td>Cocok</td><td>Aplikasi ringan</td><td>Aplikasi modern kompleks</td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- 38. Laragon vs CI vs Laravel --}}
                    <article id="klarifikasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Klarifikasi: Laragon vs CI vs Laravel
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Bagian ini sering tertukar — mari kita pertegas:
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Laragon</div>
                                <div class="bg-secondary-container border-[2px] border-on-background px-2 py-1 font-label-sm uppercase font-bold inline-block mb-2">Environment</div>
                                <div class="font-code-inline text-code-inline">Web Server + PHP + MySQL + Node.js + Composer</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">CodeIgniter</div>
                                <div class="bg-tertiary-fixed border-[2px] border-on-background px-2 py-1 font-label-sm uppercase font-bold inline-block mb-2">Framework PHP</div>
                                <div class="font-code-inline text-code-inline">MVC + Routing + Database + Controller + Model + View</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Laravel</div>
                                <div class="bg-primary-fixed border-[2px] border-on-background px-2 py-1 font-label-sm uppercase font-bold inline-block mb-2">Framework PHP</div>
                                <div class="font-code-inline text-code-inline">MVC + Routing + Eloquent + Migration + Middleware + Validation + API + Auth</div>
                            </div>
                        </div>
                    </article>

                    {{-- 39. Istilah Wajib --}}
                    <article id="istilah" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Istilah Wajib Dipahami
                        </h3>
                        <table class="brutal-table">
                            <thead><tr><th>Istilah</th><th>Pengertian</th></tr></thead>
                            <tbody>
                                <tr><td><strong>Laragon</strong></td><td>Environment untuk development lokal</td></tr>
                                <tr><td><strong>PHP</strong></td><td>Bahasa pemrograman server-side</td></tr>
                                <tr><td><strong>Composer</strong></td><td>Dependency manager PHP</td></tr>
                                <tr><td><strong>Framework</strong></td><td>Kerangka kerja pengembangan aplikasi</td></tr>
                                <tr><td><strong>CodeIgniter</strong></td><td>Framework PHP</td></tr>
                                <tr><td><strong>Laravel</strong></td><td>Framework PHP</td></tr>
                                <tr><td><strong>MVC</strong></td><td>Pola pemisahan Model, View, Controller</td></tr>
                                <tr><td><strong>Model</strong></td><td>Mengelola data / database</td></tr>
                                <tr><td><strong>View</strong></td><td>Tampilan kepada user</td></tr>
                                <tr><td><strong>Controller</strong></td><td>Mengatur alur request dan proses</td></tr>
                                <tr><td><strong>Route</strong></td><td>Menentukan URL dan handler</td></tr>
                                <tr><td><strong>CRUD</strong></td><td>Create, Read, Update, Delete</td></tr>
                                <tr><td><strong>ORM</strong></td><td>Penghubung konsep object dengan database</td></tr>
                                <tr><td><strong>Eloquent</strong></td><td>ORM Laravel</td></tr>
                                <tr><td><strong>Migration</strong></td><td>Mengatur struktur database</td></tr>
                                <tr><td><strong>Seeder</strong></td><td>Mengisi data awal</td></tr>
                                <tr><td><strong>Middleware</strong></td><td>Memeriksa request sebelum diproses</td></tr>
                                <tr><td><strong>API</strong></td><td>Penghubung komunikasi antar aplikasi</td></tr>
                                <tr><td><strong>REST API</strong></td><td>API dengan prinsip REST</td></tr>
                                <tr><td><strong>Endpoint</strong></td><td>URL / resource yang tersedia melalui API</td></tr>
                                <tr><td><strong>JSON</strong></td><td>Format pertukaran data</td></tr>
                                <tr><td><strong>HTTP</strong></td><td>Protokol komunikasi web</td></tr>
                                <tr><td><strong>Postman</strong></td><td>Tool pengujian API</td></tr>
                                <tr><td><strong>Authentication</strong></td><td>Proses memverifikasi identitas</td></tr>
                                <tr><td><strong>Authorization</strong></td><td>Proses menentukan hak akses</td></tr>
                                <tr><td><strong>Token</strong></td><td>Data kredensial untuk mengakses resource/API</td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- 40. Alur Besar --}}
                    <article id="alur-besar" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Alur Besar yang Perlu Dihafalkan
                        </h3>
                        <div class="diagram-box">                  USER
                   │
                   ▼
                BROWSER
                   │
                   ▼
             HTTP REQUEST
                   │
                   ▼
            ┌──────────────┐
            │   LARAGON    │
            │              │
            │ Web Server   │
            │ PHP          │
            │ MySQL        │
            └──────┬───────┘
                   │
                   ▼
          ┌─────────────────┐
          │    LARAVEL      │
          │ / CODEIGNITER   │
          └────────┬────────┘
                   │
            ┌──────┴──────┐
            ▼             ▼
         ROUTING      MIDDLEWARE
            │             │
            └──────┬──────┘
                   ▼
               CONTROLLER
                   │
                   ▼
                 MODEL
                   │
                   ▼
                DATABASE
                 MySQL
                   │
                   ▼
                RESPONSE
                   │
                   ▼
               JSON / HTML</div>
                    </article>
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
                    <div class="bg-tertiary-fixed border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">info</span>
                            INFO MODUL
                        </div>
                        <div class="font-body-sm text-body-sm space-y-1">
                            <div class="flex justify-between"><span>Kelas:</span><strong>XI RPL</strong></div>
                            <div class="flex justify-between"><span>Kode:</span><strong>R4</strong></div>
                            <div class="flex justify-between"><span>Topik:</span><strong>40</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~10 Jam</strong></div>
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

                            <div class="font-label-sm uppercase font-bold text-secondary pt-2 pb-1">◢ Dasar Web</div>
                            <a href="#pengenalan-web" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Pengenalan Web</a>
                            <a href="#server-lokal" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Server &amp; Local Dev</a>
                            <a href="#laragon" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Laragon</a>
                            <a href="#web-server" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. Web Server</a>
                            <a href="#php" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. PHP</a>
                            <a href="#composer" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">6. Composer</a>
                            <a href="#framework" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">7. Framework</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ CodeIgniter</div>
                            <a href="#pengenalan-ci" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. CodeIgniter</a>
                            <a href="#mvc-ci" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. MVC</a>
                            <a href="#routing-ci" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Routing</a>
                            <a href="#crud" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. CRUD</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Laravel</div>
                            <a href="#pengenalan-laravel" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Pengenalan Laravel</a>
                            <a href="#struktur-laravel" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Struktur Laravel</a>
                            <a href="#artisan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Artisan</a>
                            <a href="#migration" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. Migration</a>
                            <a href="#seeder" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. Seeder</a>
                            <a href="#eloquent" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">6. Eloquent ORM</a>
                            <a href="#relasi-db" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">7. Relasi Database</a>
                            <a href="#validation" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">8. Validation</a>
                            <a href="#middleware" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">9. Middleware</a>
                            <a href="#auth" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">10. Auth</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ API &amp; REST</div>
                            <a href="#pengenalan-api" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. API</a>
                            <a href="#rest-api" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. REST API</a>
                            <a href="#endpoint" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Endpoint</a>
                            <a href="#request-response" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. Request/Response</a>
                            <a href="#json" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. JSON</a>
                            <a href="#http-status" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">6. HTTP Status</a>
                            <a href="#api-auth" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">7. API Auth</a>
                            <a href="#laravel-api" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">8. Laravel API</a>
                            <a href="#frontend-backend" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">9. FE/BE Terpisah</a>
                            <a href="#axios" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">10. Axios</a>
                            <a href="#postman" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">11. Postman</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Database</div>
                            <a href="#mysql" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. MySQL</a>
                            <a href="#key" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. PK &amp; FK</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Review</div>
                            <a href="#alur-lengkap" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Alur Lengkap</a>
                            <a href="#perbandingan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. CI vs Laravel</a>
                            <a href="#klarifikasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Laragon vs CI vs Laravel</a>
                            <a href="#istilah" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. Istilah Wajib</a>
                            <a href="#alur-besar" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. Alur Besar</a>
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

{{-- ==================== SECTION CAPSTONE PROJECT ==================== --}}
<section class="w-full bg-tertiary-fixed border-y-[3px] border-on-background">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-lg items-center">
            <div class="md:col-span-8">
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">CAPSTONE PROJECT</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Bangun Aplikasi Web Full-Stack
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai Laragon, PHP, Composer, MVC, Laravel, dan REST API, siswa diharapkan
                    mampu membangun aplikasi web nyata: <strong>CRUD Data Siswa</strong>,
                    <strong>REST API Produk</strong>, atau <strong>Dashboard Admin</strong> — lengkap dengan
                    autentikasi, validasi, migration, dan integrasi MySQL.
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
         * 3. SMOOTH SCROLL UNTUK TOC
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

        console.log('%c🌐 Modul R4 — Pemrograman Web Loaded', 'background:#57a8dd;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
