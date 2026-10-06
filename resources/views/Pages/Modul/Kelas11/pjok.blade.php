@extends("layouts.main")

@section("style")
@endsection

@section("main")
    <!-- ==================== HERO HEADER ==================== -->
    <div class="w-full border-b-[3px] border-on-background bg-surface-container-low relative overflow-hidden">
        <div
            class="absolute inset-0 opacity-[0.05] pointer-events-none bg-[radial-gradient(#1c1b1b_1px,transparent_1px)] [background-size:20px_20px]">
        </div>
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">

            <!-- Breadcrumb -->
            <nav class="flex flex-wrap items-center gap-2 mb-space-md font-code-inline text-code-inline text-on-surface-variant">
                <a href="{{ route('pembelajaran') }}" class="hover:text-primary transition-colors uppercase">PEMBELAJARAN</a>
                <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                <a href="{{ route('pembelajaran') }}#section-kelas-xi" class="hover:text-primary transition-colors uppercase">KELAS XI</a>
                <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                <span class="text-on-surface font-bold uppercase">A4 — PJOK</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-primary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MAPEL UMUM • KELAS XI
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        PJOK
                        <span
                            class="bg-primary-container px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">XI</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Pendidikan Jasmani, Olahraga &amp; Kesehatan tingkat lanjut — Membangun kebugaran,
                        keterampilan olahraga tim, senam, dan pola hidup sehat tanpa narkoba.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL TOPIK</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">6
                            TOPIK</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">FOKUS</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">Bola &amp; Atletik</span>
                    </div>
                    <div class="font-code-inline text-code-inline text-on-surface-variant">
                        KURIKULUM MERDEKA • SMK
                    </div>
                </div>
            </div>

            <!-- Quick Action -->
            <div class="flex flex-wrap gap-2 pt-space-sm mt-space-md border-t-[2px] border-on-background">
                <a href="#topik-1"
                    class="font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-primary-container text-on-surface shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">menu_book</span>
                    MULAI TOPIK 1
                </a>
                <a href="{{ route('pembelajaran') }}"
                    class="font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-surface-container-lowest text-on-surface hover:bg-secondary-container shadow-[3px_3px_0px_#1c1b1b] transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                    KEMBALI
                </a>
            </div>
        </div>
    </div>

    <!-- ==================== MAIN CONTENT ==================== -->
    <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl flex flex-col gap-space-xl">

        <!-- ==================== TOPIK 1 — PERMAINAN INVASI ==================== -->
        <article id="topik-1"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">01</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK SATU • PERMAINAN INVASI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aktivitas Permainan Invasi (Bola Besar)
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    BOLA BESAR
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- A. Sepak Bola -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_soccer</span>
                        A. SEPAK BOLA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Permainan beregu yang bertujuan memasukkan bola ke gawang lawan sebanyak mungkin
                            dan mencegah lawan mencetak gol.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">TEKNIK DASAR</div>
                    <div class="overflow-x-auto mb-space-md">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Teknik</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Pengertian</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Passing</td>
                                    <td class="p-space-md">Mengoper bola kepada teman satu tim</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Controlling</td>
                                    <td class="p-space-md">Menghentikan atau menguasai bola</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Dribbling</td>
                                    <td class="p-space-md">Menggiring bola sambil bergerak</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Heading</td>
                                    <td class="p-space-md">Memainkan bola menggunakan kepala</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Shooting</td>
                                    <td class="p-space-md">Menendang bola ke arah gawang untuk mencetak gol</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Strategi Permainan</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> <strong>Penyerangan</strong>: operan, gerak tanpa bola, dribbling, shooting<br>
                                <span class="text-primary font-bold">›</span> <strong>Pertahanan</strong>: merebut bola &amp; cegah lawan mendekati gawang<br>
                                <span class="text-primary font-bold">›</span> <strong>Kerja sama</strong>: komunikasi &amp; pembagian posisi
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Peraturan Penting</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Durasi resmi: <strong>2 × 45 menit</strong><br>
                                <span class="text-primary font-bold">›</span> Ada pergantian babak di tengah pertandingan
                            </div>
                        </div>
                    </div>
                </div>

                <!-- B. Bola Basket -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_basketball</span>
                        B. BOLA BASKET
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Permainan beregu yang bertujuan memasukkan bola ke keranjang lawan dan mencegah
                            lawan mencetak angka.
                        </p>
                    </div>

                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">TEKNIK DASAR</div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Passing &amp; Catching</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Oper &amp; tangkap bola</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Chest Pass</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Operan dari dada</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Bounce Pass</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Bola dipantulkan</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Overhead Pass</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Operan dari atas kepala</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Dribbling</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menggiring dengan pantulan</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Shooting</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Memasukkan bola ke ring</p>
                        </div>
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Lay-up</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tembakan dekat ring</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Jump Shoot</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Menembak sambil lompat</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Rebound</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Ambil bola gagal masuk</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Pivot</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Berputar tanpa pelanggaran langkah</p>
                        </div>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">strategy</span>
                            STRATEGI
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <strong class="text-primary">Serangan:</strong> passing, gerakan, cari ruang, shooting
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <strong class="text-primary">Pertahanan:</strong> jaga lawan, tutup jalur
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <strong class="text-primary">Kunci:</strong> kerja sama tim
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== TOPIK 2 — PERMAINAN NET ==================== -->
        <article id="topik-2"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">02</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK DUA • PERMAINAN NET
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aktivitas Permainan Net
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    BOLA VOLI &amp; BULU TANGKIS
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- A. Bola Voli -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_volleyball</span>
                        A. BOLA VOLI
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Permainan beregu yang dimainkan dengan melewatkan bola melewati net untuk menjatuhkannya
                            di area lawan.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Teknik Dasar</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> <strong>Servis bawah</strong> — memukul bola dari bawah<br>
                                <span class="text-primary font-bold">›</span> <strong>Servis atas</strong> — memukul dari atas kepala<br>
                                <span class="text-primary font-bold">›</span> <strong>Passing bawah</strong> — pakai kedua lengan bawah<br>
                                <span class="text-primary font-bold">›</span> <strong>Passing atas</strong> — pakai jari di atas kepala<br>
                                <span class="text-primary font-bold">›</span> <strong>Smash/spike</strong> — pukulan keras menukik<br>
                                <span class="text-primary font-bold">›</span> <strong>Block</strong> — membendung smash di dekat net
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Peraturan Penting</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Lapangan: <strong>18 × 9 meter</strong><br>
                                <span class="text-primary font-bold">›</span> Sistem <strong>rally point</strong> — setiap reli menghasilkan poin<br>
                                <span class="text-primary font-bold">›</span> <strong>Rotasi</strong> saat tim dapat hak servis<br>
                                <span class="text-primary font-bold">›</span> Tujuan: jatuhkan bola di daerah lawan atau buat lawan salah
                            </div>
                        </div>
                    </div>
                </div>

                <!-- B. Bulu Tangkis -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_tennis</span>
                        B. BULU TANGKIS
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Permainan menggunakan raket dan shuttlecock yang dipisahkan oleh net.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Teknik Dasar</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> <strong>Grip</strong> — cara memegang raket<br>
                                <span class="text-primary font-bold">›</span> <strong>Servis</strong> — pukulan memulai permainan<br>
                                <span class="text-primary font-bold">›</span> <strong>Lob</strong> — pukulan tinggi jauh ke belakang<br>
                                <span class="text-primary font-bold">›</span> <strong>Drop shot</strong> — pukulan pelan jatuh dekat net<br>
                                <span class="text-primary font-bold">›</span> <strong>Smash</strong> — pukulan keras tajam
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Taktik</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> <strong>Tunggal</strong>: penempatan shuttlecock &amp; stamina<br>
                                <span class="text-primary font-bold">›</span> <strong>Ganda</strong>: komunikasi, posisi, kerja sama
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            <strong class="text-primary">Note:</strong> Jika sekolah menggunakan tenis meja, prinsip dasarnya
                            tetap meliputi <strong>grip, servis, pukulan menyerang/bertahan</strong>, serta
                            <strong>strategi menempatkan bola</strong>.
                        </p>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== TOPIK 3 — ATLETIK ==================== -->
        <article id="topik-3"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">03</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK TIGA • ATLETIK
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aktivitas Atletik
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    ATLETIK
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- A. Lari Jarak Pendek -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">directions_run</span>
                        A. LARI JARAK PENDEK (SPRINT)
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Lari dengan jarak tertentu menggunakan <strong>kecepatan maksimal</strong>.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Start Jongkok</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> <strong>Bunch start</strong> — posisi kaki lebih rapat<br>
                                <span class="text-primary font-bold">›</span> <strong>Medium start</strong> — jarak kaki sedang<br>
                                <span class="text-primary font-bold">›</span> <strong>Long start</strong> — jarak kaki lebih panjang
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Tahapan Sprint</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">1.</span> <strong>Start</strong> — start jongkok<br>
                                <span class="text-primary font-bold">2.</span> <strong>Berlari</strong> — badan condong ke depan, langkah cepat teratur<br>
                                <span class="text-primary font-bold">3.</span> <strong>Finish</strong> — jangan berhenti sebelum garis finis
                            </div>
                        </div>
                    </div>
                </div>

                <!-- B. Lari Estafet -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sprint</span>
                        B. LARI ESTAFET
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Perlombaan beregu dengan cara membawa dan menyerahkan <strong>tongkat estafet</strong>
                            kepada pelari berikutnya.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">visibility</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Cara Visual</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penerima melihat ke belakang saat menerima tongkat.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">visibility_off</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Cara Non-Visual</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penerima tidak melihat ke belakang, mengandalkan aba-aba dari pemberi.</p>
                        </div>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">KUNCI</div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            Kecepatan + Ketepatan Pergantian + Kerja Sama Tim
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== TOPIK 4 — KEBUGARAN JASMANI ==================== -->
        <article id="topik-4"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">04</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK EMPAT • KEBUGARAN
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aktivitas Kebugaran Jasmani
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    KEBUGARAN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Kebugaran jasmani</strong> adalah kemampuan tubuh melakukan aktivitas sehari-hari
                        dengan baik <strong>tanpa mengalami kelelahan berlebihan</strong>.
                    </p>
                </div>

                <!-- Komponen Utama -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">fitness_center</span>
                        KOMPONEN UTAMA
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Komponen</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Pengertian</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Strength</td>
                                    <td class="p-space-md">Kemampuan otot mengerahkan tenaga</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Speed</td>
                                    <td class="p-space-md">Kemampuan bergerak dalam waktu singkat</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Flexibility</td>
                                    <td class="p-space-md">Kemampuan persendian bergerak secara luas</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Endurance</td>
                                    <td class="p-space-md">Kemampuan tubuh bertahan dalam waktu lama</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Agility</td>
                                    <td class="p-space-md">Kemampuan mengubah arah dengan cepat dan tepat</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Contoh Latihan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">exercise</span>
                        CONTOH LATIHAN
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-5 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Kekuatan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">push-up, squat</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Kecepatan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">sprint</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Kelenturan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">stretching</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Daya Tahan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">jogging, lari jauh</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase font-bold text-on-surface mb-1">Kelincahan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">shuttle run</p>
                        </div>
                    </div>
                </div>

                <!-- Tes Kebugaran -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">assignment</span>
                        TES KEBUGARAN
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">TKJI</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                <strong>Tes Kesegaran Jasmani Indonesia</strong> — digunakan untuk mengetahui tingkat
                                kebugaran seseorang melalui beberapa jenis tes fisik.
                            </p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Bleep Test</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                <strong>Multi-stage Fitness Test</strong> — mengukur terutama kemampuan
                                <strong>daya tahan kardiorespirasi</strong>. Peserta berlari bolak-balik mengikuti
                                bunyi beep yang semakin cepat.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== TOPIK 5 — SENAM ==================== -->
        <article id="topik-5"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-surface-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">05</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-primary font-bold tracking-wider">
                            TOPIK LIMA • SENAM
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Aktivitas Senam — Senam Lantai
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    SENAM LANTAI
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">info</span>
                        PENGERTIAN
                    </div>
                    <p class="font-body-md text-body-md text-on-surface">
                        <strong>Senam lantai</strong> adalah aktivitas senam yang dilakukan di atas matras dengan
                        mengutamakan <strong>kekuatan, kelenturan, keseimbangan</strong>, dan <strong>koordinasi</strong>.
                    </p>
                </div>

                <!-- Gerakan Dasar -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">sports_gymnastics</span>
                        5 GERAKAN DASAR
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">GERAKAN 01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Guling Depan (Forward Roll)</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Menggulingkan tubuh ke depan dengan bagian tubuh melewati kepala secara terkontrol.
                            </p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">GERAKAN 02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Guling Belakang (Back Roll)</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Menggulingkan tubuh ke belakang dengan bantuan tangan untuk menjaga dan mendorong tubuh.
                            </p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">GERAKAN 03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Sikap Lilin</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Posisi tubuh terlentang dengan kedua kaki diluruskan ke atas dan pinggul ditopang oleh tangan.
                            </p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">GERAKAN 04</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Kayang</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Posisi tubuh melengkung ke belakang dengan kedua tangan dan kaki menjadi tumpuan.
                            </p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] md:col-span-2">
                            <div class="font-code-inline text-code-inline font-bold text-primary mb-1">GERAKAN 05</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Guling Lenting</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Gerakan mengguling ke depan yang diikuti tolakan sehingga tubuh dapat kembali berdiri.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Hal Penting -->
                <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">warning</span>
                        HAL PENTING SEBELUM SENAM
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Lakukan pemanasan terlebih dahulu
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Gunakan matras
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Perhatikan teknik &amp; keseimbangan
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">›</span> Gerakan sulit → dengan pengawasan guru
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== TOPIK 6 — KESEHATAN ==================== -->
        <article id="topik-6"
            class="bg-surface-container-lowest border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
            <header
                class="p-space-md md:p-space-lg bg-error-container flex flex-col md:flex-row md:items-center justify-between gap-space-sm border-b-[3px] border-on-background">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-16 h-16 shrink-0 bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center">
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">06</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm uppercase text-error font-bold tracking-wider">
                            TOPIK ENAM • KESEHATAN
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Kesehatan — Budaya Hidup Sehat
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-error-container border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    KESEHATAN
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- Bahaya Narkoba -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-error">dangerous</span>
                        BAHAYA NARKOTIKA &amp; PSIKOTROPIKA
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">medication</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Narkotika</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Zat yang dapat memengaruhi kesadaran, mengurangi/ menghilangkan rasa nyeri, &amp;
                                menyebabkan ketergantungan.
                            </p>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">psychology</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Psikotropika</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Zat/obat yang bekerja pada susunan saraf pusat, memengaruhi pikiran, suasana hati, &amp; perilaku.
                            </p>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">smoke_free</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Zat Adiktif</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Zat yang menimbulkan ketergantungan fisik/psikologis. Contoh: rokok, alkohol.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Dampak -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-error">report</span>
                        DAMPAK PENYALAHGUNAAN
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Fisik</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Gangguan fungsi otak &amp; organ tubuh<br>
                                <span class="text-primary font-bold">›</span> Menurunnya kondisi kesehatan<br>
                                <span class="text-primary font-bold">›</span> Risiko keracunan &amp; ketergantungan
                            </div>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Mental &amp; Sosial</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Gangguan konsentrasi &amp; emosi<br>
                                <span class="text-primary font-bold">›</span> Perubahan perilaku<br>
                                <span class="text-primary font-bold">›</span> Prestasi belajar menurun<br>
                                <span class="text-primary font-bold">›</span> Hubungan keluarga &amp; lingkungan terganggu
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pencegahan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">verified_user</span>
                        PENCEGAHAN
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="p-3 bg-primary-container border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">1.</span> Menolak ajakan mencoba narkoba
                        </div>
                        <div class="p-3 bg-secondary-container border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">2.</span> Memilih pergaulan yang sehat
                        </div>
                        <div class="p-3 bg-tertiary-fixed border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">3.</span> Mengisi waktu dengan kegiatan positif
                        </div>
                        <div class="p-3 bg-surface-container-low border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">4.</span> Meningkatkan pengetahuan bahaya narkoba
                        </div>
                        <div class="p-3 bg-surface-container-low border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">5.</span> Berani meminta bantuan jika tertekan
                        </div>
                        <div class="p-3 bg-surface-container-low border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <span class="text-primary font-bold">6.</span> Tidak menyimpan/menggunakan narkoba ilegal
                        </div>
                    </div>
                </div>

                <!-- UU -->
                <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                    <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">gavel</span>
                        DASAR HUKUM DI INDONESIA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <strong class="text-primary">›</strong> UU No. 35 Tahun 2009 — <strong>Narkotika</strong>
                        </div>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                            <strong class="text-primary">›</strong> UU No. 5 Tahun 1997 — <strong>Psikotropika</strong>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BACK TO PEMBELAJARAN ==================== -->
        <section
            class="bg-secondary-container border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg flex flex-col md:flex-row items-center justify-between gap-space-lg">
            <div class="flex items-start gap-space-md">
                <div
                    class="w-14 h-14 bg-surface-container-lowest border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[32px] text-on-surface">school</span>
                </div>
                <div>
                    <div class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider">
                        MODUL SELESAI
                    </div>
                    <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                        LANJUT KE MATA PELAJARAN LAIN?
                    </h4>
                    <p class="font-body-sm text-body-sm text-on-surface-variant max-w-xl">
                        Kembali ke halaman pembelajaran untuk menjelajahi modul Bahasa Jawa,
                        Matematika, Bahasa Inggris, dan mata pelajaran Kelas XI lainnya.
                    </p>
                </div>
            </div>
            <a href="{{ route('pembelajaran') }}"
                class="w-full md:w-auto font-headline-sm text-label-lg uppercase bg-primary-container text-on-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] px-6 py-4 hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-space-xs text-center shrink-0">
                ← KEMBALI KE PEMBELAJARAN
            </a>
        </section>
    </div>
@endsection

@section("script")
@endsection
