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

    /* ============ HTTP METHOD BADGES ============ */
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

    /* ============ STATUS CODE BADGE ============ */
    .status-badge {
        display: inline-block;
        font-family: 'JetBrains Mono', monospace;
        font-size: 11px;
        font-weight: 700;
        padding: 3px 10px;
        border: 2px solid #1c1b1b;
        text-transform: uppercase;
    }
    .status-2xx { background: #a7f3a0; }
    .status-4xx { background: #ffdf9b; }
    .status-5xx { background: #ffb4ae; }

    /* ============ FILE TREE ============ */
    .file-tree {
        background: #1c1b1b;
        color: #f3f0ef;
        padding: 1rem;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        line-height: 1.6;
        box-shadow: 4px 4px 0px #ff7a00;
        white-space: pre;
        overflow-x: auto;
    }
    .file-tree .folder { color: #ffd167; font-weight: 700; }
    .file-tree .file { color: #c9e6ff; }

    @media (max-width: 1023px) {
        .toc-sidebar { position: static; max-height: none; }
    }
</style>
@endsection

@section("main")

<!-- ==================== READING PROGRESS ==================== -->
<div id="readingProgress"></div>

<!-- ==================== HERO / BREADCRUMB ==================== -->
<section class="w-full bg-primary-fixed-dim border-b-[3px] border-on-background relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.07] pointer-events-none bg-[radial-gradient(#1c1b1b_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">

        <nav class="flex items-center flex-wrap gap-2 font-label-sm text-label-sm uppercase mb-space-md">
            <a href="/" class="hover:text-primary transition-colors">HOME</a>
            <span class="text-on-surface-variant">/</span>
            <a href="/pembelajaran" class="hover:text-primary transition-colors">PEMBELAJARAN</a>
            <span class="text-on-surface-variant">/</span>
            <span class="text-on-surface-variant">KELAS XI</span>
            <span class="text-on-surface-variant">/</span>
            <span class="font-bold text-on-surface">B9R1 — MP Basis Data</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">B9R1</span>
                    <span class="badge-semester s2">PILIHAN</span>
                    <span class="badge-semester s3">KELAS XI</span>
                    <span class="badge-semester s4">LARAVEL API</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    MP Basis Data<br>&amp; Laravel API
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap yang membahas <strong>templating Blade Laravel</strong> (layout, yield, section, component, include),
                    <strong>REST API</strong> dengan Laravel, <strong>CRUD API</strong> (GET, POST, PUT, DELETE),
                    <strong>API Resource</strong>, pengujian dengan <strong>Postman</strong>, hingga
                    <strong>Authentication API</strong> menggunakan <strong>Sanctum</strong>.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Materi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">56 Topik</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~16 Jam</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== MAIN CONTENT + SIDEBAR ==================== -->
<section class="w-full bg-surface">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">

            <!-- ============ MAIN ARTICLE ============ -->
            <div class="lg:col-span-9 space-y-space-xl">

                <!-- ===================================================== -->
                <!-- BAGIAN A: BLADE TEMPLATING -->
                <!-- ===================================================== -->
                <div id="bagian-a" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">palette</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian A</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Templating Style Website di Laravel
                            </h2>
                        </div>
                    </div>

                    <!-- 1. Apa Itu Templating? -->
                    <article id="pengenalan-templating" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Apa Itu Templating?
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Templating</strong> adalah teknik membuat struktur halaman website menggunakan
                            sebuah template yang dapat digunakan kembali oleh banyak halaman.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-red-600">❌ Tanpa Templating</div>
                                <div class="code-block"><code>home.blade.php     → ada navbar
about.blade.php    → ada navbar
contact.blade.php  → ada navbar
produk.blade.php   → ada navbar</code></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Navbar berubah → ubah banyak file!</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-green-700">✔ Dengan Templating</div>
                                <div class="diagram-box">       TEMPLATE
          │
   ┌──────┼──────┐
   ↓      ↓      ↓
 Home  Produk  About</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Ubah 1 template → semua halaman update!</p>
                            </div>
                        </div>
                    </article>

                    <!-- 2. Apa Itu Blade? -->
                    <article id="pengenalan-blade" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Apa Itu Blade?
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Blade</strong> adalah templating engine bawaan Laravel untuk membuat tampilan website.
                            File Blade menggunakan ekstensi <code>.blade.php</code> dan disimpan di <code>resources/views</code>.
                        </p>
                        <div class="file-tree mb-space-md"><span class="folder">resources/</span>
└── <span class="folder">views/</span>
    ├── <span class="file">home.blade.php</span>
    ├── <span class="file">about.blade.php</span>
    └── <span class="folder">products/</span>
        ├── <span class="file">index.blade.php</span>
        └── <span class="file">detail.blade.php</span></div>
                    </article>

                    <!-- 3. Cara Menampilkan Blade -->
                    <article id="menampilkan-blade" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Cara Menampilkan Blade
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="code-block"><code>// resources/views/home.blade.php
&lt;h1&gt;Halo Laravel&lt;/h1&gt;</code></div>
                            <div class="code-block"><code>// routes/web.php
Route::get('/', function () {
    return view('home');
});</code></div>
                        </div>
                        <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm uppercase font-bold">🌐 Akses:</span>
                            <span class="font-body-sm"> http://127.0.0.1:8000 → menampilkan <em>"Halo Laravel"</em></span>
                        </div>
                    </article>

                    <!-- 4. Kirim Data Route ke Blade -->
                    <article id="kirim-data" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Mengirim Data dari Route ke Blade
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="code-block"><code>Route::get('/', function () {
    return view('home', [
        'nama' => 'Asis',
        'kelas' => 'XII RPL'
    ]);
});</code></div>
                            <div class="code-block"><code>&lt;h1&gt;Halo, &#123;&#123; $nama &#125;&#125;&lt;/h1&gt;
&lt;p&gt;Kelas: &#123;&#123; $kelas &#125;&#125;&lt;/p&gt;

Output:
Halo, Asis
Kelas: XII RPL</code></div>
                        </div>
                    </article>

                    <!-- 5. Blade Echo -->
                    <article id="blade-echo" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Blade Echo
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="code-block"><code>&lt;h1&gt;&#123;&#123; $judul &#125;&#125;&lt;/h1&gt;

// Jika $judul = "Daftar Produk"
// Output: Daftar Produk</code></div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-primary">💡 Kenapa pakai kurung kurawal ganda?</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Blade melakukan <strong>escaping otomatis</strong> terhadap output sehingga membantu
                                    mengurangi risiko <strong>XSS</strong> saat menampilkan data dari pengguna.
                                </p>
                            </div>
                        </div>
                    </article>

                    <!-- 6. Blade If -->
                    <article id="blade-if" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Blade If — Percabangan
                        </h3>
                        <div class="code-block"><code>&#64;if ($umur &gt;= 17)
    &lt;p&gt;Sudah memenuhi umur.&lt;/p&gt;
&#64;else
    &lt;p&gt;Belum memenuhi umur.&lt;/p&gt;
&#64;endif

&#64;if ($role === 'admin')
    &lt;p&gt;Halaman Admin&lt;/p&gt;
&#64;elseif ($role === 'petugas')
    &lt;p&gt;Halaman Petugas&lt;/p&gt;
&#64;else
    &lt;p&gt;Halaman User&lt;/p&gt;
&#64;endif</code></div>
                    </article>

                    <!-- 7. Blade Loop -->
                    <article id="blade-loop" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            Blade Loop &amp; Forelse
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="code-block"><code>&#64;foreach ($produk as $item)
    &lt;p&gt;&#123;&#123; $item-&gt;nama &#125;&#125;&lt;/p&gt;
&#64;endforeach

Output:
Laptop
Mouse
Keyboard</code></div>
                            <div class="code-block"><code>&#64;forelse ($produk as $item)
    &lt;p&gt;&#123;&#123; $item-&gt;nama &#125;&#125;&lt;/p&gt;
&#64;empty
    &lt;p&gt;Belum ada produk.&lt;/p&gt;
&#64;endforelse</code></div>
                        </div>
                        <div class="code-block"><code>&#64;foreach ($produk as $item)
    &lt;p&gt;&#123;&#123; $loop-&gt;iteration &#125;&#125;. &#123;&#123; $item-&gt;nama &#125;&#125;&lt;/p&gt;
&#64;endforeach

Output:
1. Laptop
2. Mouse
3. Keyboard</code></div>
                    </article>

                    <!-- 10-12. Layout Blade -->
                    <article id="layout-blade" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">10</span>
                            Layout Blade — Master Template
                        </h3>
                        <div class="file-tree mb-space-md"><span class="folder">resources/views/</span>
├── <span class="folder">layouts/</span>
│   └── <span class="file">app.blade.php</span>
├── <span class="file">home.blade.php</span>
├── <span class="file">about.blade.php</span>
└── <span class="folder">products/</span>
    └── <span class="file">index.blade.php</span></div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>Master Layout — layouts/app.blade.php</summary>
                            <div class="p-space-md">
                                <div class="code-block"><code>&lt;!DOCTYPE html&gt;
&lt;html lang="id"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;&#64;yield('title')&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;header&gt;
        &lt;h1&gt;Website Saya&lt;/h1&gt;
        &lt;nav&gt;
            &lt;a href="/"&gt;Home&lt;/a&gt;
            &lt;a href="/produk"&gt;Produk&lt;/a&gt;
        &lt;/nav&gt;
    &lt;/header&gt;

    &lt;main&gt;
        &#64;yield('content')
    &lt;/main&gt;

    &lt;footer&gt;
        &lt;p&gt;© 2026 Website Saya&lt;/p&gt;
    &lt;/footer&gt;
&lt;/body&gt;
&lt;/html&gt;</code></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                                    Directive <code>&#64;yield()</code> adalah tempat yang nantinya diisi oleh halaman anak.
                                </p>
                            </div>
                        </details>

                        <details class="accordion-card">
                            <summary>Menggunakan Layout — home.blade.php</summary>
                            <div class="p-space-md">
                                <div class="code-block"><code>&#64;extends('layouts.app')

&#64;section('title', 'Home')

&#64;section('content')
    &lt;h2&gt;Selamat Datang&lt;/h2&gt;
    &lt;p&gt;Ini halaman home.&lt;/p&gt;
&#64;endsection</code></div>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-2 mt-3">
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">&#64;extends</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Gunakan layout utama</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">&#64;section</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Isi bagian &#64;yield</p>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-code-inline font-bold mb-1">&#64;yield</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Tempat isi section</p>
                                    </div>
                                </div>
                            </div>
                        </details>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mt-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">&#64;extends</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menggunakan layout utama</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">&#64;include</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Memasukkan file Blade lain</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">&lt;x-... /&gt;</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Blade Component (reusable UI)</p>
                            </div>
                        </div>
                    </article>

                    <!-- 14-16. Components & Include -->
                    <article id="components-include" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">14</span>
                            Blade Components &amp; Include
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <details class="accordion-card" open>
                                <summary>Components — Reusable UI</summary>
                                <div class="p-space-md">
                                    <div class="file-tree mb-2"><span class="folder">resources/views/components/</span>
└── <span class="file">alert.blade.php</span></div>
                                    <div class="code-block"><code>&lt;div class="alert"&gt;
    &#123;&#123; $message &#125;&#125;
&lt;/div&gt;</code></div>
                                    <div class="font-label-sm uppercase font-bold mt-3 mb-1 text-primary">Dipakai:</div>
                                    <div class="code-block"><code>&lt;x-alert message="Data berhasil disimpan!" /&gt;</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>&#64;include — Potongan Sederhana</summary>
                                <div class="p-space-md">
                                    <div class="file-tree mb-2"><span class="folder">resources/views/</span>
├── <span class="folder">layouts/</span>
│   ├── <span class="file">navbar.blade.php</span>
│   └── <span class="file">footer.blade.php</span>
└── <span class="file">home.blade.php</span></div>
                                    <div class="code-block"><code>&#64;include('layouts.navbar')
&lt;h1&gt;Home&lt;/h1&gt;
&#64;include('layouts.footer')</code></div>
                                </div>
                            </details>
                        </div>

                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface mt-space-md mb-space-sm">Layout vs Include vs Component</h4>
                        <table class="brutal-table">
                            <thead><tr><th>Fitur</th><th>Fungsi</th></tr></thead>
                            <tbody>
                                <tr><td><code>&#64;extends</code></td><td>Menggunakan layout utama</td></tr>
                                <tr><td><code>&#64;yield</code></td><td>Menentukan tempat isi</td></tr>
                                <tr><td><code>&#64;section</code></td><td>Mengisi bagian layout</td></tr>
                                <tr><td><code>&#64;include</code></td><td>Memasukkan file Blade lain</td></tr>
                                <tr><td><strong>Component</strong></td><td>Membuat komponen UI reusable</td></tr>
                            </tbody>
                        </table>
                    </article>

                    <!-- 18-19. Struktur -->
                    <article id="struktur-templating" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">18</span>
                            Struktur Templating yang Disarankan
                        </h3>
                        <div class="file-tree"><span class="folder">resources/views/</span>
│
├── <span class="folder">layouts/</span>
│   └── <span class="file">app.blade.php</span>
│
├── <span class="folder">components/</span>
│   ├── <span class="file">navbar.blade.php</span>
│   ├── <span class="file">footer.blade.php</span>
│   └── <span class="file">alert.blade.php</span>
│
├── <span class="file">home.blade.php</span>
│
├── <span class="folder">products/</span>
│   ├── <span class="file">index.blade.php</span>
│   ├── <span class="file">create.blade.php</span>
│   ├── <span class="file">edit.blade.php</span>
│   └── <span class="file">show.blade.php</span>
│
└── <span class="folder">auth/</span>
    ├── <span class="file">login.blade.php</span>
    └── <span class="file">register.blade.php</span></div>
                    </article>
                </div>

                <!-- ===================================================== -->
                <!-- BAGIAN B: API -->
                <!-- ===================================================== -->
                <div id="bagian-b" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-tertiary text-[32px]">api</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian B</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                API &amp; REST API
                            </h2>
                        </div>
                    </div>

                    <article id="pengenalan-api" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pengertian API
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>API (Application Programming Interface)</strong> memungkinkan satu aplikasi
                            berkomunikasi dengan aplikasi/sistem lain.
                        </p>
                        <div class="diagram-box mb-space-md">Frontend / Mobile App
        ↓
       API
        ↓
    Laravel
        ↓
    Database</div>

                        <details class="accordion-card" open>
                            <summary>Contoh — Flutter Mengambil Data Produk</summary>
                            <div class="p-space-md space-y-space-sm">
                                <div class="code-block"><code>// Flutter request:
GET /api/products</code></div>
                                <div class="code-block"><code>// Laravel response:
[
    {
        "id": 1,
        "nama": "Laptop",
        "harga": 8000000
    }
]</code></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Flutter kemudian menampilkan data tersebut.</p>
                            </div>
                        </details>
                    </article>

                    <article id="kenapa-api" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Kenapa Menggunakan API?
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            API memungkinkan <strong>backend &amp; frontend dipisahkan</strong>. Satu backend dapat melayani beberapa client.
                        </p>
                        <div class="diagram-box">    Laravel (API)
         │
    ┌────┼────┬────┬────┐
    ↓    ↓    ↓    ↓    ↓
Website Flutter React Android Lain</div>
                    </article>

                    <article id="rest-api" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            REST API
                        </h3>

                        <table class="brutal-table mb-space-md">
                            <thead><tr><th>Method</th><th>Fungsi</th></tr></thead>
                            <tbody>
                                <tr><td><span class="method-badge method-get">GET</span></td><td>Mengambil data</td></tr>
                                <tr><td><span class="method-badge method-post">POST</span></td><td>Membuat data</td></tr>
                                <tr><td><span class="method-badge method-put">PUT</span></td><td>Mengganti/memperbarui data</td></tr>
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

                    <article id="endpoint-json" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Endpoint, JSON, Request &amp; Response
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Endpoint</div>
                                <div class="code-block"><code>http://127.0.0.1:8000/api/products

base URL:  http://127.0.0.1:8000
path:      /api/products</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">JSON</div>
                                <div class="code-block"><code>{
    "id": 1,
    "nama": "Laptop",
    "harga": 8000000
}

// key : value</code></div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Request</div>
                                <div class="code-block"><code>POST /api/products

{
    "nama": "Laptop",
    "harga": 8000000
}</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Response</div>
                                <div class="code-block"><code>{
    "message": "Produk berhasil dibuat"
}</code></div>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- ===================================================== -->
                <!-- BAGIAN C: MEMBUAT API DI LARAVEL -->
                <!-- ===================================================== -->
                <div id="bagian-c" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[32px]">construction</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian C</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Membuat API di Laravel
                            </h2>
                        </div>
                    </div>

                    <article id="setup-api" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Mengaktifkan API Laravel
                        </h3>
                        <div class="code-block mb-space-md"><code>php artisan install:api</code></div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                            Perintah ini memasang <strong>Sanctum</strong> &amp; menyiapkan <code>routes/api.php</code>.
                        </p>

                        <div class="file-tree mb-3"><span class="folder">routes/</span>
├── <span class="file">web.php</span>      (untuk website — HTML)
└── <span class="file">api.php</span>      (untuk API — JSON)</div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">web.php — HTML</div>
                                <div class="code-block"><code>Route::get('/produk', function () {
    return view('products.index');
});</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">api.php — JSON</div>
                                <div class="code-block"><code>Route::get('/products', function () {
    return response()->json([
        'message' => 'Hello API'
    ]);
});</code></div>
                            </div>
                        </div>
                    </article>

                    <article id="api-sederhana" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Membuat API Sederhana
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="code-block"><code>// routes/api.php
Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello API Laravel'
    ]);
});</code></div>
                            <div class="code-block"><code>// Buka di browser:
http://127.0.0.1:8000/api/hello

// Response:
{
    "message": "Hello API Laravel"
}</code></div>
                        </div>
                    </article>

                    <article id="controller-model" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Controller, Model &amp; Migration
                        </h3>

                        <div class="code-block mb-space-md"><code>php artisan make:controller Api/ProductController
php artisan make:model Product -m</code></div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>Controller — Api/ProductController.php</summary>
                            <div class="p-space-md">
                                <div class="code-block"><code>namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Daftar produk'
        ]);
    }
}</code></div>
                                <div class="code-block mt-3"><code>// routes/api.php
use App\Http\Controllers\Api\ProductController;

Route::get('/products', [ProductController::class, 'index']);</code></div>
                            </div>
                        </details>

                        <details class="accordion-card">
                            <summary>Migration — create_products_table</summary>
                            <div class="p-space-md">
                                <div class="code-block"><code>Schema::create('products', function (Blueprint $table) {
    $table->id();
    $table->string('nama');
    $table->decimal('harga', 12, 2);
    $table->timestamps();
});</code></div>
                                <div class="code-block mt-3"><code>php artisan migrate</code></div>
                            </div>
                        </details>
                    </article>

                    <article id="crud-api" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            CRUD API Laravel
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <details class="accordion-card" open>
                                <summary>GET — Semua Data</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>use App\Models\Product;

public function index()
{
    $products = Product::all();

    return response()->json([
        'success' => true,
        'data' => $products
    ]);
}</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>GET — Satu Data</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>Route::get('/products/{id}',
    [ProductController::class, 'show']);

public function show($id)
{
    $product = Product::findOrFail($id);

    return response()->json([
        'success' => true,
        'data' => $product
    ]);
}</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>POST — Tambah Data</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'harga' => 'required|numeric|min:0'
    ]);

    $product = Product::create([
        'nama' => $request->nama,
        'harga' => $request->harga
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Produk berhasil dibuat',
        'data' => $product
    ], 201);
}</code></div>
                                    <div class="code-block mt-3"><code>// Model: Product.php
protected $fillable = ['nama', 'harga'];</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>PUT — Update Data</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'harga' => 'required|numeric|min:0'
    ]);

    $product = Product::findOrFail($id);

    $product->update([
        'nama' => $request->nama,
        'harga' => $request->harga
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Produk berhasil diperbarui',
        'data' => $product
    ]);
}</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>DELETE — Hapus Data</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return response()->json([
        'success' => true,
        'message' => 'Produk berhasil dihapus'
    ]);
}</code></div>
                                </div>
                            </details>
                        </div>

                        <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-md">
                            <span class="font-label-sm uppercase font-bold">💡 API CRUD Lengkap:</span>
                            <span class="font-body-sm"> <code>CREATE</code> → POST • <code>READ</code> → GET • <code>UPDATE</code> → PUT/PATCH • <code>DELETE</code> → DELETE</span>
                        </div>
                    </article>

                    <article id="api-resource" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            API Resource
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>API Resource</strong> membantu mengontrol bentuk data JSON yang dikembalikan API.
                        </p>
                        <div class="code-block mb-space-sm"><code>php artisan make:resource ProductResource</code></div>
                        <div class="code-block"><code>public function toArray($request): array
{
    return [
        'id' => $this->id,
        'nama' => $this->nama,
        'harga' => $this->harga,
    ];
}

// Controller:
return ProductResource::collection(Product::all());</code></div>
                        <div class="bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b] mt-space-sm">
                            <span class="font-label-sm uppercase font-bold">🎯 Keuntungan:</span>
                            <span class="font-body-sm"> Kita dapat menentukan field apa saja yang boleh dikirim ke client.</span>
                        </div>
                    </article>
                </div>

                <!-- ===================================================== -->
                <!-- BAGIAN D: POSTMAN -->
                <!-- ===================================================== -->
                <div id="bagian-d" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary-container text-[32px]">send</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian D</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Postman — Testing API
                            </h2>
                        </div>
                    </div>

                    <article id="pengenalan-postman" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Apa Itu Postman?
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Postman</strong> adalah aplikasi untuk membuat, mengirim, menguji, dan memeriksa
                            HTTP/API request. Postman dapat mengatur: URL, HTTP method, Parameters, Headers, Body,
                            Authorization, dan Response.
                        </p>
                        <div class="diagram-box">Postman
   ↓
HTTP Request
   ↓
Laravel API
   ↓
Controller → Database
   ↓
JSON Response
   ↓
Postman</div>
                    </article>

                    <article id="testing-postman" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Testing Semua HTTP Method
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <details class="accordion-card" open>
                                <summary>GET — Ambil Data</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>GET http://127.0.0.1:8000/api/products

Response:
{
    "success": true,
    "data": [
        { "id": 1, "nama": "Laptop", "harga": 8000000 }
    ]
}</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>POST — Buat Data</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>POST http://127.0.0.1:8000/api/products

Body → raw → JSON:
{
    "nama": "Keyboard Mechanical",
    "harga": 750000
}

Headers:
Content-Type: application/json
Accept: application/json</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>PUT — Update Data</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>PUT http://127.0.0.1:8000/api/products/1

Body:
{
    "nama": "Keyboard Mechanical RGB",
    "harga": 850000
}</code></div>
                                </div>
                            </details>

                            <details class="accordion-card">
                                <summary>DELETE — Hapus Data</summary>
                                <div class="p-space-md">
                                    <div class="code-block"><code>DELETE http://127.0.0.1:8000/api/products/1

Response:
{
    "success": true,
    "message": "Produk berhasil dihapus"
}</code></div>
                                </div>
                            </details>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mt-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Query Parameter</div>
                                <div class="code-block"><code>/api/products?search=laptop
/api/products?limit=10
/api/products?search=laptop&limit=10</code></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Pakai tab <strong>Params</strong> di Postman.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Path Parameter</div>
                                <div class="code-block"><code>/api/products/15

// 15 = ID produk
Route::get('/products/{id}', ...);</code></div>
                            </div>
                        </div>
                    </article>

                    <article id="status-code" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            HTTP Status Code
                        </h3>
                        <table class="brutal-table">
                            <thead><tr><th>Status</th><th>Arti</th></tr></thead>
                            <tbody>
                                <tr><td><span class="status-badge status-2xx">200</span></td><td>Berhasil</td></tr>
                                <tr><td><span class="status-badge status-2xx">201</span></td><td>Data berhasil dibuat</td></tr>
                                <tr><td><span class="status-badge status-4xx">400</span></td><td>Request tidak valid</td></tr>
                                <tr><td><span class="status-badge status-4xx">401</span></td><td>Belum terautentikasi</td></tr>
                                <tr><td><span class="status-badge status-4xx">403</span></td><td>Tidak memiliki izin</td></tr>
                                <tr><td><span class="status-badge status-4xx">404</span></td><td>Data tidak ditemukan</td></tr>
                                <tr><td><span class="status-badge status-4xx">422</span></td><td>Validasi gagal</td></tr>
                                <tr><td><span class="status-badge status-5xx">500</span></td><td>Kesalahan server</td></tr>
                            </tbody>
                        </table>

                        <div class="code-block mt-space-md"><code>return response()->json([
    'message' => 'Produk berhasil dibuat'
], 201);</code></div>
                    </article>
                </div>

                <!-- ===================================================== -->
                <!-- BAGIAN E: SANCTUM AUTH -->
                <!-- ===================================================== -->
                <div id="bagian-e" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-tertiary text-[32px]">lock</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian E</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Authentication API dengan Sanctum
                            </h2>
                        </div>
                    </div>

                    <article id="sanctum" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Authentication &amp; Token
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Authentication</strong> = proses memastikan siapa pengguna yang mengakses sistem.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Flow Login</div>
                                <div class="diagram-box">Email + Password
   ↓
Login
   ↓
Server memeriksa
   ↓
Berhasil → Token</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Header Authorization</div>
                                <div class="code-block"><code>Authorization:
Bearer TOKEN</code></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Dikirim pada setiap request berikutnya.</p>
                            </div>
                        </div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>Route yang Dilindungi</summary>
                            <div class="p-space-md">
                                <div class="code-block"><code>Route::middleware('auth:sanctum')->group(function () {

    Route::get('/profile', function (Request $request) {
        return $request->user();
    });

});</code></div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                                    Hanya user terautentikasi yang dapat mengakses route ini.
                                </p>
                            </div>
                        </details>

                        <details class="accordion-card">
                            <summary>Contoh Login API</summary>
                            <div class="p-space-md">
                                <div class="code-block"><code>POST /api/login

Body:
{
    "email": "user@example.com",
    "password": "password"
}

Response:
{
    "message": "Login berhasil",
    "token": "..."
}</code></div>
                                <div class="font-label-sm uppercase font-bold mt-3 mb-1 text-primary">Request berikutnya:</div>
                                <div class="code-block"><code>Authorization: Bearer &lt;token&gt;</code></div>
                            </div>
                        </details>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mt-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Authentication</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2"><em>"Siapa kamu?"</em></p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Contoh: user berhasil login.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Authorization</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2"><em>"Apa yang boleh kamu lakukan?"</em></p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Contoh: user biasa tidak boleh hapus produk.</p>
                            </div>
                        </div>

                        <details class="accordion-card mt-space-md">
                            <summary>Testing Token di Postman</summary>
                            <div class="p-space-md">
                                <div class="code-block"><code>Tab: Authorization
Type: Bearer Token
Token: &lt;paste token&gt;

// Postman akan kirim:
Authorization: Bearer TOKEN</code></div>
                            </div>
                        </details>
                    </article>
                </div>

                <!-- ===================================================== -->
                <!-- BAGIAN F-G: ALUR LENGKAP & STRUKTUR -->
                <!-- ===================================================== -->
                <div id="bagian-f" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[32px]">account_tree</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian F–G</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Alur Lengkap &amp; Struktur Project
                            </h2>
                        </div>
                    </div>

                    <article class="scroll-mt-24 mb-space-xl">
                        <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                            <div class="font-label-sm uppercase font-bold mb-space-xs">📦 PROYEK CONTOH</div>
                            <div class="font-headline-sm uppercase">Sistem Produk API</div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">1. Database</div>
                                <div class="code-block"><code>products
├── id
├── nama
├── harga
├── created_at
└── updated_at</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">2. Model</div>
                                <div class="code-block"><code>Product</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">3. Controller</div>
                                <div class="code-block"><code>ProductController</code></div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">4. Routes</div>
                                <div class="code-block"><code>GET    /api/products
GET    /api/products/{id}
POST   /api/products
PUT    /api/products/{id}
DELETE /api/products/{id}</code></div>
                            </div>
                        </div>

                        <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-lg uppercase font-bold mb-2 text-primary">5. Testing dengan Postman</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Uji semua endpoint di atas satu per satu. Pastikan status code &amp; response JSON sesuai.</p>
                        </div>
                    </article>

                    <article id="struktur-project" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Struktur Project Laravel
                        </h3>
                        <div class="file-tree"><span class="folder">laravel-project/</span>
│
├── <span class="folder">app/</span>
│   ├── <span class="folder">Http/Controllers/Api/</span>
│   │   └── <span class="file">ProductController.php</span>
│   └── <span class="folder">Models/</span>
│       └── <span class="file">Product.php</span>
│
├── <span class="folder">database/migrations/</span>
│   └── <span class="file">create_products_table.php</span>
│
├── <span class="folder">resources/views/</span>
│   ├── <span class="folder">layouts/</span>
│   │   └── <span class="file">app.blade.php</span>
│   ├── <span class="folder">components/</span>
│   │   └── <span class="file">navbar.blade.php</span>
│   └── <span class="folder">products/</span>
│       ├── <span class="file">index.blade.php</span>
│       ├── <span class="file">create.blade.php</span>
│       ├── <span class="file">edit.blade.php</span>
│       └── <span class="file">show.blade.php</span>
│
└── <span class="folder">routes/</span>
    ├── <span class="file">web.php</span>
    └── <span class="file">api.php</span></div>
                    </article>
                </div>

                <!-- ===================================================== -->
                <!-- BAGIAN H-J: ARSITEKTUR MODERN -->
                <!-- ===================================================== -->
                <div id="bagian-h" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">architecture</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian H–J</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Blade vs API &amp; Arsitektur Modern
                            </h2>
                        </div>
                    </div>

                    <article id="blade-vs-api" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Blade vs API
                        </h3>
                        <table class="brutal-table">
                            <thead><tr><th>Blade</th><th>API</th></tr></thead>
                            <tbody>
                                <tr><td>Membuat tampilan website</td><td>Menyediakan data/layanan</td></tr>
                                <tr><td>Menghasilkan HTML</td><td>Umumnya menghasilkan JSON</td></tr>
                                <tr><td>Digunakan browser</td><td>Digunakan frontend/client</td></tr>
                                <tr><td><code>.blade.php</code></td><td>Endpoint API</td></tr>
                                <tr><td><code>resources/views</code></td><td><code>routes/api.php</code></td></tr>
                                <tr><td>Cocok website Laravel</td><td>Cocok Flutter / React / mobile</td></tr>
                                <tr><td><code>&#64;foreach</code></td><td>JSON response</td></tr>
                                <tr><td><code>&#64;extends</code></td><td>HTTP request</td></tr>
                            </tbody>
                        </table>
                    </article>

                    <article id="dua-pendekatan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Dua Pendekatan Arsitektur
                        </h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">1 — Blade Frontend</div>
                                <div class="diagram-box">Browser
   ↓
Laravel Route → Controller
   ↓
Model → Database
   ↓
Blade → HTML
   ↓
Browser</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Cocok untuk website Laravel tradisional.</p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">2 — API Backend</div>
                                <div class="diagram-box">Flutter / React
   ↓
API
   ↓
Laravel
   ↓
Model → Database</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Laravel tidak mengirim HTML, tapi JSON.</p>
                            </div>
                        </div>
                    </article>

                    <article id="arsitektur-modern" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Contoh Arsitektur Modern
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Misalnya membuat aplikasi <strong>Rental Alat Proyek</strong>.
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Frontend</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="method-badge method-get">React</span>
                                    <span class="method-badge method-get">Flutter</span>
                                    <span class="method-badge method-get">Blade</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Backend</div>
                                <div class="method-badge method-post">Laravel API</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-2 text-primary">Database &amp; Testing</div>
                                <div class="flex flex-wrap gap-1">
                                    <span class="method-badge method-put">MySQL</span>
                                    <span class="method-badge method-delete">Postman</span>
                                </div>
                            </div>
                        </div>

                        <div class="diagram-box">      ┌─────────────┐         ┌─────────────┐
      │   React     │         │   Flutter   │
      └──────┬──────┘         └──────┬──────┘
             │ HTTP/JSON             │ HTTP/JSON
             └───────────┬───────────┘
                         ↓
                 ┌─────────────┐
                 │   Laravel   │
                 │     API     │
                 └──────┬──────┘
                        ↓
                 ┌─────────────┐
                 │    MySQL    │
                 └─────────────┘

                 ┌─────────────┐
                 │   Postman   │──────→ Testing API
                 └─────────────┘</div>
                    </article>
                </div>

                <!-- ==================== NAVIGASI BAWAH ==================== -->
                <div class="border-t-[3px] border-on-background pt-space-lg flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-md">
                    <a href="/pembelajaran"
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
                        <a href="/contact"
                            class="font-label-sm text-label-sm uppercase font-bold px-4 py-3 bg-primary-container border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b] transition-all flex items-center justify-center gap-2">
                            TANYA MENTOR
                            <span class="material-symbols-outlined text-[18px]">support_agent</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- ============ SIDEBAR — TABLE OF CONTENTS ============ -->
            <aside class="lg:col-span-3">
                <div class="toc-sidebar">
                    <!-- Info Card -->
                    <div class="bg-primary-fixed-dim border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">info</span>
                            INFO MODUL
                        </div>
                        <div class="font-body-sm text-body-sm space-y-1">
                            <div class="flex justify-between"><span>Kelas:</span><strong>XI RPL</strong></div>
                            <div class="flex justify-between"><span>Kode:</span><strong>B9R1</strong></div>
                            <div class="flex justify-between"><span>Topik:</span><strong>56</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~16 Jam</strong></div>
                        </div>
                    </div>

                    <!-- TOC -->
                    <div class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">
                        <div class="p-space-sm border-b-[2px] border-on-background bg-on-background">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-inverse-on-surface flex items-center gap-2">
                                <span class="material-symbols-outlined text-[16px]">list</span>
                                DAFTAR MATERI
                            </div>
                        </div>
                        <nav class="p-space-sm space-y-1 font-code-inline text-code-inline" id="tocNav">

                            <div class="font-label-sm uppercase font-bold text-secondary pt-2 pb-1">◢ A — Blade Templating</div>
                            <a href="#pengenalan-templating" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Apa Itu Templating</a>
                            <a href="#pengenalan-blade" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Apa Itu Blade</a>
                            <a href="#menampilkan-blade" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Menampilkan Blade</a>
                            <a href="#kirim-data" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. Kirim Data</a>
                            <a href="#blade-echo" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. Blade Echo</a>
                            <a href="#blade-if" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">6. Blade If</a>
                            <a href="#blade-loop" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">7. Blade Loop</a>
                            <a href="#layout-blade" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">8. Layout Blade</a>
                            <a href="#components-include" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">9. Components &amp; Include</a>
                            <a href="#struktur-templating" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">10. Struktur Templating</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ B — API</div>
                            <a href="#pengenalan-api" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Pengertian API</a>
                            <a href="#kenapa-api" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Kenapa Pakai API</a>
                            <a href="#rest-api" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. REST API</a>
                            <a href="#endpoint-json" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. Endpoint &amp; JSON</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ C — Laravel API</div>
                            <a href="#setup-api" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Setup API</a>
                            <a href="#api-sederhana" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. API Sederhana</a>
                            <a href="#controller-model" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Controller &amp; Model</a>
                            <a href="#crud-api" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. CRUD API</a>
                            <a href="#api-resource" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. API Resource</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ D — Postman</div>
                            <a href="#pengenalan-postman" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Apa Itu Postman</a>
                            <a href="#testing-postman" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Testing Endpoints</a>
                            <a href="#status-code" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. HTTP Status Code</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ E — Sanctum</div>
                            <a href="#sanctum" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">Authentication &amp; Token</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ F–G — Alur &amp; Struktur</div>
                            <a href="#struktur-project" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">Struktur Project</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ H–J — Arsitektur Modern</div>
                            <a href="#blade-vs-api" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">Blade vs API</a>
                            <a href="#dua-pendekatan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">Dua Pendekatan</a>
                            <a href="#arsitektur-modern" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">Arsitektur Modern</a>
                        </nav>
                    </div>

                    <!-- Quick Action -->
                    <div class="mt-space-md bg-primary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-2">QUICK ACTION</div>
                        <a href="/contact"
                            class="block w-full text-center font-label-sm uppercase font-bold py-2 bg-on-background text-inverse-on-surface border-[2px] border-on-background shadow-[2px_2px_0px_#ff7a00] hover:shadow-[4px_4px_0px_#ff7a00] transition-all">
                            KONSULTASI →
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- ==================== CAPSTONE PROJECT CTA ==================== -->
<section class="w-full bg-primary-fixed-dim border-y-[3px] border-on-background">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-lg items-center">
            <div class="md:col-span-8">
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">CAPSTONE PROJECT</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Bangun REST API Produk Lengkap
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai <strong>Blade templating</strong>, <strong>REST API</strong>,
                    <strong>CRUD JSON</strong>, <strong>Postman</strong>, &amp; <strong>Sanctum Auth</strong>,
                    siswa diharapkan mampu membangun <strong>REST API</strong> lengkap:
                    <strong>CRUD Produk</strong>, <strong>Validasi</strong>, <strong>API Resource</strong>,
                    <strong>Login Token</strong>, dan <strong>Testing Postman</strong> — siap dikonsumsi oleh
                    <strong>React</strong> / <strong>Flutter</strong> / <strong>Mobile App</strong>.
                </p>
            </div>
            <div class="md:col-span-4 flex md:justify-end">
                <a href="/contact"
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

        console.log('%c🗂️ Modul B9R1 — Laravel API & Blade Loaded', 'background:#ffb68b;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
