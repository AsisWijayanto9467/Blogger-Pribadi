@extends("layouts.main")

@section("style")
<style>
    /* ============ SIDEBAR STICKY & SCROLL ============ */
    .toc-sidebar {
        position: sticky;
        top: 6rem;
        max-height: calc(100vh - 8rem);
        overflow-y: auto;
    }

    .toc-sidebar::-webkit-scrollbar {
        width: 6px;
    }

    .toc-sidebar::-webkit-scrollbar-thumb {
        background: #1c1b1b;
        border: 1px solid #1c1b1b;
    }

    .toc-sidebar::-webkit-scrollbar-track {
        background: #f0edec;
    }

    /* ============ ACTIVE TOC LINK ============ */
    .toc-link.active {
        background: #ffd167;
        color: #1c1b1b;
        font-weight: 700;
        transform: translateX(4px);
        box-shadow: 3px 3px 0px #1c1b1b;
    }

    /* ============ SCROLL BEHAVIOR ============ */
    html {
        scroll-behavior: smooth;
        scroll-padding-top: 6rem;
    }

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

    .code-block code {
        display: block;
        margin-top: 14px;
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

    /* ============ ACCORDION DETAILS ============ */
    details.accordion-card {
        border: 2px solid #1c1b1b;
        background: #ffffff;
        box-shadow: 3px 3px 0px #1c1b1b;
        transition: all 0.2s ease;
    }

    details.accordion-card[open] {
        box-shadow: 5px 5px 0px #ff7a00;
    }

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

    details.accordion-card[open] summary {
        border-bottom: 2px solid #1c1b1b;
    }

    details.accordion-card summary::-webkit-details-marker {
        display: none;
    }

    details.accordion-card summary::after {
        content: '+';
        font-size: 18px;
        font-weight: 900;
        transition: transform 0.2s;
    }

    details.accordion-card[open] summary::after {
        content: '−';
    }

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

    .badge-semester.s2 {
        background: #c9e6ff;
    }

    .badge-semester.s3 {
        background: #ffdbc8;
    }

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

    .brutal-table tr:nth-child(even) td {
        background: #f6f3f2;
    }

    /* ============ RESPONSIVE ============ */
    @media (max-width: 1023px) {
        .toc-sidebar {
            position: static;
            max-height: none;
        }
    }
</style>
@endsection

@section("main")

{{-- ==================== READING PROGRESS ==================== --}}
<div id="readingProgress"></div>

{{-- ==================== HERO / BREADCRUMB ==================== --}}
<section class="w-full bg-secondary-container border-b-[3px] border-on-background relative overflow-hidden">
    <div class="absolute inset-0 opacity-[0.07] pointer-events-none bg-[radial-gradient(#1c1b1b_1px,transparent_1px)] [background-size:16px_16px]"></div>
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">

        {{-- Breadcrumb --}}
        <nav class="flex items-center flex-wrap gap-2 font-label-sm text-label-sm uppercase mb-space-md">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">HOME</a>
            <span class="text-on-surface-variant">/</span>
            <a href="{{ route('pembelajaran') }}" class="hover:text-primary transition-colors">PEMBELAJARAN</a>
            <span class="text-on-surface-variant">/</span>
            <span class="text-on-surface-variant">KELAS XI</span>
            <span class="text-on-surface-variant">/</span>
            <span class="font-bold text-on-surface">R3 — PTGM</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-end">
            <div class="lg:col-span-8">
                <div class="flex flex-wrap items-center gap-2 mb-space-sm">
                    <span class="badge-semester">R3</span>
                    <span class="badge-semester s2">KEJURUAN</span>
                    <span class="badge-semester s3">KELAS XI</span>
                </div>
                <h1 class="font-headline-xl-mobile md:font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase text-on-surface mb-space-sm">
                    Pemrograman Teks,<br>Grafis &amp; Multimedia
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    Modul lengkap yang membahas paradigma <strong>Object-Oriented Programming (OOP)</strong>,
                    <strong>pemodelan perangkat lunak dengan UML</strong>, pembuatan
                    <strong>GUI &amp; Event-Driven Programming</strong>, integrasi
                    <strong>grafis, audio, dan video</strong>, hingga penerapan
                    <strong>Project-Based Learning</strong> untuk membangun aplikasi multimedia interaktif.
                </p>
            </div>
            <div class="lg:col-span-4 flex flex-wrap lg:justify-end gap-2">
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Total Materi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">17 Topik</div>
                </div>
                <div class="bg-surface-container-lowest border-[2px] border-on-background px-3 py-2 shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm text-on-surface-variant uppercase">Estimasi</div>
                    <div class="font-headline-sm text-headline-sm font-bold">~6 Jam</div>
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
                {{-- BAGIAN A: SEMESTER 1 — OOP & PEMODELAN --}}
                {{-- ===================================================== --}}
                <div id="semester-1" class="scroll-mt-24">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary text-[32px]">school</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 1</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                OOP &amp; Pemodelan Perangkat Lunak
                            </h2>
                        </div>
                    </div>

                    {{-- ===== 1. KONSEP DASAR OOP ===== --}}
                    <article id="konsep-oop" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Konsep Dasar OOP
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Pemrograman Berorientasi Objek (Object-Oriented Programming/OOP)</strong>
                            adalah paradigma pemrograman yang menjadikan <em>objek</em> sebagai bagian utama
                            dalam penyusunan program. Objek dapat menggambarkan sesuatu di dunia nyata —
                            misalnya <strong>Mobil, Siswa, Produk, Karyawan,</strong> atau <strong>Buku</strong>.
                            Setiap objek memiliki <em>data</em> (state) dan <em>perilaku</em> (behavior).
                        </p>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm text-label-sm uppercase text-primary mb-2">Contoh Objek — Mobil</div>
                                <div class="font-code-inline text-code-inline space-y-1">
                                    <div><span class="text-secondary font-bold">Data:</span> warna, merek, kecepatan</div>
                                    <div><span class="text-secondary font-bold">Perilaku:</span> berjalan(), berhenti(), mempercepat()</div>
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm text-label-sm uppercase text-primary mb-2">Alur Prosedural</div>
                                <div class="font-code-inline text-code-inline">
                                    Input data → Proses → Hitung hasil → Tampilkan
                                </div>
                            </div>
                        </div>

                        <details class="accordion-card mb-space-md" open>
                            <summary>Perbandingan Prosedural vs OOP</summary>
                            <div class="p-space-md">
                                <table class="brutal-table">
                                    <thead>
                                        <tr><th>Aspek</th><th>Prosedural</th><th>OOP</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>Fokus</td><td>Fungsi / prosedur</td><td>Objek</td></tr>
                                        <tr><td>Data &amp; Fungsi</td><td>Cenderung terpisah</td><td>Digabung dalam class</td></tr>
                                        <tr><td>Cocok untuk</td><td>Program sederhana</td><td>Program kompleks</td></tr>
                                        <tr><td>Reusability</td><td>Lebih terbatas</td><td>Tinggi</td></tr>
                                        <tr><td>Pemeliharaan</td><td>Dapat sulit</td><td>Lebih mudah dikembangkan</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </details>
                    </article>

                    {{-- ===== 2. CLASS & OBJECT ===== --}}
                    <article id="class-object" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Class &amp; Object
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Class</strong> adalah cetakan / blueprint untuk membuat objek.
                            <strong>Object</strong> adalah hasil nyata dari sebuah class.
                        </p>
                        <div class="diagram-box mb-space-md">Class: Mobil
├── Atribut:  warna, merek, kecepatan
└── Method:   maju(), berhenti(), rem()

Class  = cetakan (blueprint)
Object = hasil dari cetakan

Object 1 = Mobil Toyota
Object 2 = Mobil Honda
Object 3 = Mobil Suzuki</div>
                    </article>

                    {{-- ===== 3. ATRIBUT & METHOD ===== --}}
                    <article id="atribut-method" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Atribut &amp; Method
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg text-label-lg uppercase font-bold mb-2 text-primary">Atribut</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Data / karakteristik yang dimiliki objek.
                                </p>
                                <div class="font-code-inline text-code-inline">
                                    class Siswa:<br>
                                    &nbsp;&nbsp;nama<br>
                                    &nbsp;&nbsp;nis<br>
                                    &nbsp;&nbsp;kelas<br>
                                    &nbsp;&nbsp;umur
                                </div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg text-label-lg uppercase font-bold mb-2 text-primary">Method</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Fungsi di dalam class — perilaku objek.
                                </p>
                                <div class="font-code-inline text-code-inline">
                                    tambahData()<br>
                                    tampilkanData()<br>
                                    hitungNilai()<br>
                                    cetakKartu()
                                </div>
                            </div>
                        </div>
                        <div class="mt-space-md bg-secondary-container border-[2px] border-on-background p-space-sm shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="font-label-sm text-label-sm uppercase font-bold">💡 Kesimpulan:</span>
                            <span class="font-body-sm text-body-sm"> Atribut = apa yang <em>dimiliki</em> objek &nbsp;•&nbsp; Method = apa yang dapat <em>dilakukan</em> objek.</span>
                        </div>
                    </article>

                    {{-- ===== 4. INSTANSIASI ===== --}}
                    <article id="instansiasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Deklarasi &amp; Instansiasi Object
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>Instansiasi</strong> adalah proses membuat object berdasarkan sebuah class.
                            Satu class dapat digunakan untuk membuat banyak object dengan nilai atribut berbeda.
                        </p>
                        <div class="code-block"><code>Mobil mobil1;
Mobil mobil2;
Mobil mobil3;</code></div>
                    </article>

                    {{-- ===== 5. EMPAT PILAR OOP ===== --}}
                    <article id="pilar-oop" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-md flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Empat Pilar Utama OOP
                        </h3>

                        {{-- A. Encapsulation --}}
                        <details class="accordion-card mb-space-md" open>
                            <summary>A. Encapsulation — Enkapsulasi</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Membungkus data &amp; method dalam sebuah class serta membatasi akses langsung
                                    terhadap data tertentu. Tujuannya: melindungi data, mengontrol akses,
                                    mencegah perubahan sembarangan, dan membuat kode lebih aman.
                                </p>
                                <table class="brutal-table">
                                    <thead><tr><th>Modifier</th><th>Akses</th></tr></thead>
                                    <tbody>
                                        <tr><td><code>public</code></td><td>Dapat diakses dari berbagai bagian program</td></tr>
                                        <tr><td><code>private</code></td><td>Hanya dapat diakses di dalam class</td></tr>
                                        <tr><td><code>protected</code></td><td>Dapat diakses class tersebut dan turunannya</td></tr>
                                    </tbody>
                                </table>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-label-sm text-label-sm uppercase font-bold mb-1 text-primary">Getter</div>
                                        <div class="font-code-inline text-code-inline">getNama()<br>getSaldo()<br>getUmur()</div>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-label-sm text-label-sm uppercase font-bold mb-1 text-primary">Setter</div>
                                        <div class="font-code-inline text-code-inline">setNama()<br>setSaldo()<br>setUmur()</div>
                                    </div>
                                </div>
                            </div>
                        </details>

                        {{-- B. Inheritance --}}
                        <details class="accordion-card mb-space-md">
                            <summary>B. Inheritance — Pewarisan</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Mekanisme ketika sebuah class mewarisi atribut &amp; method dari class lain.
                                    Class yang diwarisi = <strong>Superclass / Parent</strong>, class penerima = <strong>Subclass / Child</strong>.
                                </p>
                                <div class="diagram-box">       Kendaraan
           ↓
    ┌──────┴──────┐
   Mobil        Motor

Kendaraan : merk, warna, kecepatan, berjalan()
Mobil     : + jumlahPintu
Motor     : + jenisMotor</div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm mt-space-sm">
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-label-sm text-label-sm uppercase font-bold mb-1 text-primary">Keuntungan</div>
                                        <ul class="font-code-inline text-code-inline space-y-0.5">
                                            <li>› Mengurangi duplikasi kode</li>
                                            <li>› Mempermudah pengembangan</li>
                                            <li>› Reusable code</li>
                                            <li>› Hubungan antar-class terstruktur</li>
                                        </ul>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-label-sm text-label-sm uppercase font-bold mb-1 text-primary">Overriding</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                                            Subclass membuat ulang method dari superclass dengan implementasi berbeda. Contoh:
                                            <code>Kendaraan.suara()</code> → di-<em>override</em> oleh
                                            <code>Mobil.suara()</code> dan <code>Motor.suara()</code>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </details>

                        {{-- C. Polymorphism --}}
                        <details class="accordion-card mb-space-md">
                            <summary>C. Polymorphism — Polimorfisme</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Satu bentuk dapat memiliki banyak bentuk perilaku. Method/objek yang sama dapat
                                    menghasilkan perilaku berbeda tergantung konteks.
                                </p>
                                <div class="diagram-box">Hewan
   suara()

Kucing → suara() → "mengeong"
Anjing → suara() → "menggonggong"</div>
                                <table class="brutal-table">
                                    <thead><tr><th>Aspek</th><th>Overloading</th><th>Overriding</th></tr></thead>
                                    <tbody>
                                        <tr><td>Lokasi</td><td>Biasanya dalam class yang sama</td><td>Melibatkan inheritance</td></tr>
                                        <tr><td>Parameter</td><td>Berbeda</td><td>Method diwarisi diimplementasikan kembali</td></tr>
                                        <tr><td>Tujuan</td><td>Menambah variasi method</td><td>Mengubah perilaku method</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </details>

                        {{-- D. Abstraction --}}
                        <details class="accordion-card mb-space-md">
                            <summary>D. Abstraction — Abstraksi</summary>
                            <div class="p-space-md space-y-space-sm">
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Menyembunyikan detail implementasi yang kompleks dan hanya menampilkan
                                    bagian penting kepada pengguna. Contoh: mengendarai mobil cukup tahu
                                    gas &amp; rem — tanpa perlu tahu mekanisme mesin.
                                </p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm">
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-label-sm text-label-sm uppercase font-bold mb-1 text-primary">Abstract Class</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-1">
                                            Class dasar dengan method abstract yang harus diimplementasikan.
                                        </p>
                                        <div class="font-code-inline text-code-inline">abstract class Hewan<br>&nbsp;&nbsp;abstract suara()</div>
                                    </div>
                                    <div class="bg-surface-container border-[2px] border-on-background p-space-sm">
                                        <div class="font-label-sm text-label-sm uppercase font-bold mb-1 text-primary">Interface</div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-1">
                                            Kontrak/aturan yang harus diterapkan oleh class pengguna.
                                        </p>
                                        <div class="font-code-inline text-code-inline">Interface Kendaraan<br>&nbsp;&nbsp;nyalakan()<br>&nbsp;&nbsp;matikan()</div>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </article>

                    {{-- ===== 6. UML & CLASS DIAGRAM ===== --}}
                    <article id="uml" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            UML &amp; Class Diagram
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>UML (Unified Modeling Language)</strong> adalah bahasa pemodelan untuk
                            menggambarkan &amp; merancang sistem perangkat lunak. Salah satu diagram penting
                            dalam OOP adalah <strong>Class Diagram</strong>.
                        </p>
                        <div class="diagram-box mb-space-md">┌─────────────────────┐
│       Siswa         │
├─────────────────────┤
│ - nama              │
│ - nis               │
│ - kelas             │
├─────────────────────┤
│ + belajar()         │
│ + ujian()           │
└─────────────────────┘</div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-sm">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm text-center">
                                <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian Atas</div>
                                <div class="font-headline-sm font-bold">Nama Class</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm text-center">
                                <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian Tengah</div>
                                <div class="font-headline-sm font-bold">Atribut</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm text-center">
                                <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Bagian Bawah</div>
                                <div class="font-headline-sm font-bold">Method</div>
                            </div>
                        </div>
                        <div class="mt-space-sm bg-surface-container border-[2px] border-on-background p-space-sm flex flex-wrap gap-4">
                            <div class="font-code-inline text-code-inline"><span class="font-bold text-primary">+</span> public</div>
                            <div class="font-code-inline text-code-inline"><span class="font-bold text-primary">−</span> private</div>
                            <div class="font-code-inline text-code-inline"><span class="font-bold text-primary">#</span> protected</div>
                        </div>
                    </article>

                    {{-- ===== 7. RELASI ANTAR-CLASS ===== --}}
                    <article id="relasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-primary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            Relasi Antar-Class
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">A. Association</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Hubungan umum antara dua class.</p>
                                <div class="font-code-inline text-code-inline">Guru ─── mengajar ─── Siswa</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">B. Aggregation</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Hubungan "memiliki" — bagian dapat berdiri sendiri.</p>
                                <div class="font-code-inline text-code-inline">Kelas ◇──── Siswa</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">C. Composition</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Hubungan "memiliki" kuat — bagian bergantung pada objek utama.</p>
                                <div class="font-code-inline text-code-inline">Rumah ◆──── Ruangan</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">D. Dependency</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Class bergantung / menggunakan class lain.</p>
                                <div class="font-code-inline text-code-inline">Laporan ─ ─ ─ &gt; Printer</div>
                            </div>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN B: SEMESTER 2 — GUI & MULTIMEDIA --}}
                {{-- ===================================================== --}}
                <div id="semester-2" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[32px]">dashboard</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                GUI &amp; Multimedia
                            </h2>
                        </div>
                    </div>

                    {{-- ===== 1. GUI ===== --}}
                    <article id="gui" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Pemrograman Antarmuka Grafis (GUI)
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            <strong>GUI (Graphical User Interface)</strong> adalah antarmuka program yang
                            memungkinkan pengguna berinteraksi melalui elemen visual — tombol, form, menu,
                            kotak teks, checkbox, radio button, ComboBox, dan window.
                        </p>
                        <div class="diagram-box">┌─────────────────────────┐
│      LOGIN SYSTEM       │
│                         │
│ Username: [__________]  │
│ Password: [__________]  │
│                         │
│       [ LOGIN ]         │
└─────────────────────────┘</div>
                    </article>

                    {{-- ===== 2. EVENT-DRIVEN ===== --}}
                    <article id="event-driven" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Event-Driven Programming
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Program bekerja berdasarkan <em>kejadian/event</em> yang dilakukan pengguna:
                            tombol diklik, keyboard ditekan, mouse digerakkan, data dimasukkan, checkbox dipilih,
                            form ditutup.
                        </p>
                        <div class="diagram-box mb-space-sm">User klik tombol Login
        ↓
Event Click terjadi
        ↓
Program menjalankan method login()
        ↓
Validasi username dan password</div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Program tidak hanya berjalan berurutan dari awal sampai akhir, tetapi juga menunggu
                            dan merespons event.
                        </p>
                    </article>

                    {{-- ===== 3. LIBRARY GUI ===== --}}
                    <article id="library-gui" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Library GUI
                        </h3>
                        <table class="brutal-table">
                            <thead><tr><th>Bahasa</th><th>Library / Framework</th></tr></thead>
                            <tbody>
                                <tr><td>Python</td><td>Tkinter</td></tr>
                                <tr><td>Java</td><td>Swing / JavaFX</td></tr>
                                <tr><td>C#</td><td>Windows Forms / WPF</td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- ===== 4. KOMPONEN DASAR GUI ===== --}}
                    <article id="komponen-gui" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Komponen Dasar GUI
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">Button</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Tombol yang dapat ditekan, biasanya memicu event.</p>
                                <div class="font-code-inline text-code-inline">[ SIMPAN ]  [ HAPUS ]  [ LOGIN ]</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">Label</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menampilkan teks / informasi.</p>
                                <div class="font-code-inline text-code-inline">Nama Lengkap:<br>Username:</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">Text Field</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Menerima input teks dari pengguna.</p>
                                <div class="font-code-inline text-code-inline">Nama: [____________]</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">Checkbox</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Memilih satu atau beberapa pilihan.</p>
                                <div class="font-code-inline text-code-inline">☑ HTML  ☑ CSS  ☐ JavaScript</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">Radio Button</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Memilih satu dari beberapa pilihan.</p>
                                <div class="font-code-inline text-code-inline">(●) Laki-laki  ( ) Perempuan</div>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">ComboBox</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Memilih data dari daftar.</p>
                                <div class="font-code-inline text-code-inline">Kelas: [ XII RPL ▼ ]</div>
                            </div>
                        </div>
                    </article>

                    {{-- ===== 5. LAYOUT MANAGER ===== --}}
                    <article id="layout" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Layout Manager
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Mengatur posisi dan ukuran komponen GUI agar tersusun rapi, tidak bertumpuk,
                            menyesuaikan ukuran window, dan mudah digunakan.
                        </p>
                        <div class="diagram-box">┌──────────────────────────┐
│ Username: [___________]  │
│ Password: [___________]  │
│                          │
│       [ LOGIN ]          │
└──────────────────────────┘</div>
                    </article>

                    {{-- ===== 6. NAVIGASI ===== --}}
                    <article id="navigasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">6</span>
                            Navigasi Antar-Form / Window
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Aplikasi GUI sering memiliki lebih dari satu halaman/window.
                        </p>
                        <div class="diagram-box">Login
  ↓
Dashboard
  ↓
Data Siswa
  ↓
Form Tambah Siswa</div>
                    </article>

                    {{-- ===== 7. PENGOLAHAN GRAFIS ===== --}}
                    <article id="grafis" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">7</span>
                            Pengolahan Grafis / Gambar
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">Menampilkan Gambar</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Digunakan sebagai logo, background, icon, ilustrasi, atau konten aplikasi.
                                </p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">Resizing</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Mengubah ukuran gambar. Contoh: 1920×1080 → 800×450.
                                </p>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-lg uppercase font-bold mb-1 text-primary">Rendering</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Proses menampilkan objek/gambar ke layar sehingga dapat dilihat pengguna.
                                </p>
                            </div>
                        </div>
                    </article>

                    {{-- ===== 8. AUDIO ===== --}}
                    <article id="audio" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">8</span>
                            Integrasi Audio
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-primary">Contoh Penggunaan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Musik</li>
                                    <li>› Efek tombol</li>
                                    <li>› Suara notifikasi</li>
                                    <li>› Suara dalam game</li>
                                    <li>› Audio pembelajaran</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-primary">Operasi Dasar</div>
                                <div class="diagram-box">User klik tombol
      ↓
Event Click
      ↓
Audio dimainkan</div>
                                <div class="font-code-inline text-code-inline mt-2">Play • Pause • Stop • Volume</div>
                            </div>
                        </div>
                    </article>

                    {{-- ===== 9. VIDEO ===== --}}
                    <article id="video" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">9</span>
                            Integrasi Video
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-primary">Contoh Penggunaan</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Aplikasi pembelajaran</li>
                                    <li>› Media player</li>
                                    <li>› Tutorial</li>
                                    <li>› Presentasi interaktif</li>
                                    <li>› Game / multimedia</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-primary">Fungsi Dasar</div>
                                <div class="font-code-inline text-code-inline">Play • Pause • Stop • Seek • Volume</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                                    Video membutuhkan library multimedia karena lebih kompleks daripada gambar.
                                </p>
                            </div>
                        </div>
                    </article>

                    {{-- ===== 10. INTERAKSI MULTIMEDIA ===== --}}
                    <article id="interaksi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-secondary-container border-[2px] border-on-background flex items-center justify-center font-bold text-sm">10</span>
                            Interaksi Multimedia dengan Event
                        </h3>
                        <div class="diagram-box mb-space-md">Klik Button
     ↓
Gambar berubah
     ↓
Suara dimainkan
     ↓
Animasi berjalan</div>
                        <div class="bg-secondary-container border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-label-sm uppercase font-bold mb-2">Contoh Alur Kuis Interaktif</div>
                            <div class="font-code-inline text-code-inline">
Pertanyaan ditampilkan → User memilih jawaban → Event pilihan terjadi → Jawaban diperiksa → Benar → suara benar / Salah → suara salah
                            </div>
                        </div>
                    </article>
                </div>

                {{-- ===================================================== --}}
                {{-- BAGIAN C: SEMESTER 2 — PROJECT BASED LEARNING --}}
                {{-- ===================================================== --}}
                <div id="pbl" class="scroll-mt-24 border-t-[3px] border-on-background pt-space-xl">
                    <div class="flex items-center gap-3 mb-space-md">
                        <span class="material-symbols-outlined text-primary-container text-[32px]">construction</span>
                        <div>
                            <div class="font-label-sm text-label-sm uppercase text-on-surface-variant">Semester 2</div>
                            <h2 class="font-headline-md text-headline-md uppercase text-on-surface">
                                Project-Based Learning
                            </h2>
                        </div>
                    </div>

                    {{-- 1. Analisis Kebutuhan --}}
                    <article id="analisis" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">1</span>
                            Analisis Kebutuhan
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Sebelum membuat aplikasi, programmer harus mengetahui kebutuhan sistem.
                        </p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-primary">Pertanyaan Kunci</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Aplikasi dibuat untuk siapa?</li>
                                    <li>› Masalah apa yang ingin diselesaikan?</li>
                                    <li>› Fitur apa yang diperlukan?</li>
                                    <li>› Data apa yang dibutuhkan?</li>
                                    <li>› Bagaimana pengguna berinteraksi?</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[3px_3px_0px_#1c1b1b]">
                                <div class="font-label-sm uppercase font-bold mb-2 text-primary">Contoh: Aplikasi Kuis</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Menampilkan soal</li>
                                    <li>› Menampilkan gambar</li>
                                    <li>› Menyediakan pilihan jawaban</li>
                                    <li>› Memeriksa jawaban &amp; menghitung nilai</li>
                                    <li>› Memberikan suara/feedback</li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    {{-- 2. Perancangan --}}
                    <article id="perancangan" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">2</span>
                            Perancangan
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Sistem dirancang menggunakan <strong>Flowchart, UML, Class Diagram, Wireframe,</strong>
                            atau <strong>struktur navigasi</strong>.
                        </p>
                        <div class="diagram-box">Mulai
  ↓
Menu Utama
  ↓
Pilih Kuis
  ↓
Tampilkan Soal
  ↓
Pilih Jawaban
  ↓
Periksa Jawaban
  ↓
Tampilkan Nilai
  ↓
Selesai</div>
                    </article>

                    {{-- 3. Implementasi --}}
                    <article id="implementasi" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">3</span>
                            Implementasi
                        </h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-sm">
                            Rancangan diterjemahkan menjadi kode program.
                        </p>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-space-sm">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Membuat class</div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Membuat object</div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Membuat form GUI</div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menambahkan button</div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Menambahkan event</div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Memasukkan gambar</div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-sm text-center font-code-inline text-code-inline">Memasukkan audio/video</div>
                        </div>
                    </article>

                    {{-- 4. Pengujian --}}
                    <article id="pengujian" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">4</span>
                            Pengujian
                        </h3>
                        <table class="brutal-table">
                            <thead><tr><th>Pengujian</th><th>Hasil yang Diharapkan</th></tr></thead>
                            <tbody>
                                <tr><td>Klik Login</td><td>Login diproses</td></tr>
                                <tr><td>Password salah</td><td>Muncul pesan kesalahan</td></tr>
                                <tr><td>Klik Simpan</td><td>Data tersimpan</td></tr>
                                <tr><td>Klik Play</td><td>Audio/video berjalan</td></tr>
                                <tr><td>Pilih jawaban benar</td><td>Nilai bertambah</td></tr>
                            </tbody>
                        </table>
                    </article>

                    {{-- 5. Contoh Proyek Mini --}}
                    <article id="proyek" class="scroll-mt-24 mb-space-xl">
                        <h3 class="font-headline-sm text-headline-sm uppercase text-on-surface mb-space-sm flex items-center gap-2">
                            <span class="w-8 h-8 bg-tertiary-fixed border-[2px] border-on-background flex items-center justify-center font-bold text-sm">5</span>
                            Contoh Proyek Mini
                        </h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-primary text-[28px] mb-2">play_circle</span>
                                <div class="font-label-lg uppercase font-bold mb-2">Media Player Sederhana</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Play</li>
                                    <li>› Pause</li>
                                    <li>› Stop</li>
                                    <li>› Volume</li>
                                    <li>› Menampilkan gambar album</li>
                                    <li>› Memutar audio/video</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-primary text-[28px] mb-2">quiz</span>
                                <div class="font-label-lg uppercase font-bold mb-2">Kuis Interaktif</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› Pertanyaan</li>
                                    <li>› Gambar</li>
                                    <li>› Pilihan jawaban</li>
                                    <li>› Perhitungan skor</li>
                                    <li>› Suara benar/salah</li>
                                </ul>
                            </div>
                            <div class="bg-surface-container-lowest border-[2px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-primary text-[28px] mb-2">sports_esports</span>
                                <div class="font-label-lg uppercase font-bold mb-2">Game Edukasi Sederhana</div>
                                <ul class="font-code-inline text-code-inline space-y-1">
                                    <li>› GUI</li>
                                    <li>› Gambar</li>
                                    <li>› Animasi</li>
                                    <li>› Audio</li>
                                    <li>› Event keyboard/mouse</li>
                                    <li>› Sistem skor</li>
                                </ul>
                            </div>
                        </div>
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
                    <div class="bg-secondary-container border-[3px] border-on-background p-space-md shadow-[4px_4px_0px_#1c1b1b] mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px]">info</span>
                            INFO MODUL
                        </div>
                        <div class="font-body-sm text-body-sm space-y-1">
                            <div class="flex justify-between"><span>Kelas:</span><strong>XI RPL</strong></div>
                            <div class="flex justify-between"><span>Kode:</span><strong>R3</strong></div>
                            <div class="flex justify-between"><span>Topik:</span><strong>17</strong></div>
                            <div class="flex justify-between"><span>Estimasi:</span><strong>~6 Jam</strong></div>
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

                            <div class="font-label-sm uppercase font-bold text-secondary pt-2 pb-1">◢ Semester 1 — OOP</div>
                            <a href="#konsep-oop" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Konsep Dasar OOP</a>
                            <a href="#class-object" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Class &amp; Object</a>
                            <a href="#atribut-method" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Atribut &amp; Method</a>
                            <a href="#instansiasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. Instansiasi Object</a>
                            <a href="#pilar-oop" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. Empat Pilar OOP</a>
                            <a href="#uml" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">6. UML &amp; Class Diagram</a>
                            <a href="#relasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">7. Relasi Antar-Class</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2 — GUI</div>
                            <a href="#gui" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. GUI Dasar</a>
                            <a href="#event-driven" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Event-Driven</a>
                            <a href="#library-gui" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Library GUI</a>
                            <a href="#komponen-gui" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. Komponen GUI</a>
                            <a href="#layout" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. Layout Manager</a>
                            <a href="#navigasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">6. Navigasi Form</a>
                            <a href="#grafis" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">7. Pengolahan Grafis</a>
                            <a href="#audio" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">8. Integrasi Audio</a>
                            <a href="#video" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">9. Integrasi Video</a>
                            <a href="#interaksi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">10. Interaksi Multimedia</a>

                            <div class="font-label-sm uppercase font-bold text-secondary pt-3 pb-1">◢ Semester 2 — PBL</div>
                            <a href="#pbl" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">Project-Based Learning</a>
                            <a href="#analisis" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">1. Analisis Kebutuhan</a>
                            <a href="#perancangan" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">2. Perancangan</a>
                            <a href="#implementasi" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">3. Implementasi</a>
                            <a href="#pengujian" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">4. Pengujian</a>
                            <a href="#proyek" class="toc-link block px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all">5. Proyek Mini</a>
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

{{-- ==================== SECTION PROYEK AKHIR ==================== --}}
<section class="w-full bg-secondary-container border-y-[3px] border-on-background">
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-space-lg items-center">
            <div class="md:col-span-8">
                <div class="font-label-sm text-label-sm uppercase font-bold mb-space-xs">CAPSTONE PROJECT</div>
                <h2 class="font-headline-lg text-headline-lg uppercase text-on-surface mb-space-sm">
                    Bangun Aplikasi Multimedia Interaktif
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                    Setelah menguasai OOP, GUI, dan integrasi multimedia, siswa diharapkan mampu membangun
                    salah satu proyek nyata: <strong>Media Player</strong>, <strong>Kuis Interaktif</strong>,
                    atau <strong>Game Edukasi Sederhana</strong> — lengkap dengan GUI, event handling,
                    audio, video, dan sistem skor.
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
         * 2. SCROLL SPY — Highlight TOC aktif
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
         * 4. AUTO-CLOSE DETAILS LAIN SAAT SALAH SATU DIBUKA
         *    (khusus accordion dalam artikel yang sama)
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
         * 5. KEYBOARD NAVIGATION — Alt + ↑/↓ untuk pindah section
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

        /* ============================================================
         * 6. MICRO-INTERACTION untuk card artikel
         * ============================================================ */
        document.querySelectorAll('article').forEach(articleEl => {
            articleEl.addEventListener('mouseenter', function () {
                this.style.transition = 'transform 0.2s';
            });
        });

        console.log('%c📚 Modul R3 — PTGM Loaded', 'background:#ff7a00;color:#1c1b1b;padding:4px 8px;font-weight:bold;');
        console.log('%c💡 Tips: Tekan ALT + ↑/↓ untuk navigasi cepat antar materi', 'color:#785a00;font-size:12px;');
    });
</script>
@endsection
