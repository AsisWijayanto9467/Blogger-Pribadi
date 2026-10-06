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
                <a href="{{ route('pembelajaran') }}#section-kelas-x" class="hover:text-primary transition-colors uppercase">KELAS X</a>
                <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                <span class="text-on-surface font-bold uppercase">A5 — SEJARAH INDONESIA</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MAPEL UMUM • KELAS X
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        SEJARAH
                        <span
                            class="bg-tertiary-fixed px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">INDONESIA</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Menelusuri perjalanan panjang bangsa Indonesia dari masa praaksara, masuknya
                        Hindu-Buddha, berkembangnya Islam, hingga membangun kesadaran sejarah
                        dan berpikir kritis.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL BAB</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">5
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 1</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">3
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">SEMESTER 2</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">2
                            BAB</span>
                    </div>
                    <div class="font-code-inline text-code-inline text-on-surface-variant">
                        KURIKULUM MERDEKA • SMK
                    </div>
                </div>
            </div>

            <!-- Quick Action -->
            <div class="flex flex-wrap gap-2 pt-space-sm mt-space-md border-t-[2px] border-on-background">
                <a href="#bab-1"
                    class="font-label-md text-label-md uppercase px-4 py-2 border-[2px] border-on-background bg-primary-container text-on-surface shadow-[3px_3px_0px_#1c1b1b] hover:bg-secondary-container transition-all flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">menu_book</span>
                    MULAI DARI BAB 1
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

        <!-- ==================== SEMESTER 1 HEADER ==================== -->
        <section class="w-full">
            <div
                class="bg-tertiary-fixed text-on-tertiary-fixed border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🟠 SEMESTER 1 / GANJIL
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        BAB 1 — BAB 3
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JULI — DESEMBER
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 1 — PENGANTAR ILMU SEJARAH ==================== -->
        <article id="bab-1"
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
                            BAB SATU • DASAR ILMU SEJARAH
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Pengantar Dasar Ilmu Sejarah
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PENGANTAR
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Pengertian -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">menu_book</span>
                        1. PENGERTIAN SEJARAH
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Kata <strong>sejarah</strong> sering dikaitkan dengan bahasa Arab <em>syajarah</em> yang
                            berarti pohon atau silsilah/keturunan. Secara umum, sejarah adalah ilmu yang mempelajari
                            peristiwa kehidupan manusia pada masa lalu berdasarkan bukti dan sumber yang dapat
                            dipertanggungjawabkan.
                        </p>
                    </div>

                    <!-- 3 Unsur Utama -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">person</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">UNSUR 01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Manusia</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pelaku atau pihak yang mengalami peristiwa.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">place</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">UNSUR 02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Ruang</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tempat terjadinya peristiwa.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">schedule</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">UNSUR 03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Waktu</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Kapan peristiwa terjadi.</p>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-code-inline text-code-inline uppercase text-on-surface-variant mb-1">RUMUS SEJARAH</div>
                        <div class="font-headline-md text-headline-md uppercase text-on-surface font-bold">
                            MANUSIA + RUANG + WAKTU
                        </div>
                    </div>
                </div>

                <!-- 2. Konsep Berpikir Sejarah -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">psychology</span>
                        2. KONSEP BERPIKIR SEJARAH
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-on-surface text-[24px]">timeline</span>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Diakronik</div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                Cara berpikir yang melihat peristiwa <strong>memanjang dalam waktu</strong> dan
                                memperhatikan proses perkembangannya.
                            </p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> Penjajahan → Proklamasi 1945 → Orde Lama → Orde Baru → Reformasi
                            </div>
                            <div class="mt-2 font-label-sm text-label-sm uppercase text-on-surface-variant">
                                <span class="font-bold text-primary">Ciri:</span> Kronologis, memanjang dalam waktu
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-on-surface text-[24px]">public</span>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Sinkronik</div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-3">
                                Cara berpikir yang melihat suatu peristiwa pada <strong>suatu waktu tertentu</strong>
                                secara luas dalam ruang/aspek kehidupan.
                            </p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                <strong class="text-primary">Contoh:</strong> Kondisi Indonesia 1945 dari aspek politik, ekonomi, sosial.
                            </div>
                            <div class="mt-2 font-label-sm text-label-sm uppercase text-on-surface-variant">
                                <span class="font-bold text-primary">Ciri:</span> Meluas dalam ruang, waktu terbatas
                            </div>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">lightbulb</span>
                            MUDAH DIINGAT
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Diakronik</strong> = waktu panjang • <strong>Sinkronik</strong> = ruang/aspek luas
                        </p>
                    </div>
                </div>

                <!-- 3. Konsep Waktu -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">schedule</span>
                        3. KONSEP WAKTU DALAM SEJARAH
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">sync_alt</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Perubahan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Masyarakat berbeda dari masa sebelumnya.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">link</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Kesinambungan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Unsur tertentu tetap berlangsung dari masa ke masa.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">replay</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pengulangan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Peristiwa/pola dengan kemiripan terulang kembali.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">trending_up</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Perkembangan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Perubahan bertahap menuju keadaan tertentu.</p>
                        </div>
                    </div>
                </div>

                <!-- 4. Hakikat Sejarah -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">auto_awesome</span>
                        4. HAKIKAT SEJARAH
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-on-surface text-[24px]">event</span>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Sejarah sebagai Peristiwa</div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Peristiwa nyata yang benar-benar terjadi di masa lalu.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-on-surface text-[24px]">forum</span>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Sejarah sebagai Kisah</div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Cerita atau hasil penyampaian kembali mengenai peristiwa masa lalu.</p>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-on-surface text-[24px]">science</span>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Sejarah sebagai Ilmu</div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Memiliki metode penelitian, sumber, bukti, dan prosedur ilmiah.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="material-symbols-outlined text-primary text-[24px]">palette</span>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">Sejarah sebagai Seni</div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Penulisan sejarah butuh kemampuan menyusun cerita agar menarik tanpa menghilangkan fakta.</p>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 2 — PENELITIAN & SUMBER SEJARAH ==================== -->
        <article id="bab-2"
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
                            BAB DUA • METODE PENELITIAN
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Penelitian dan Sumber Sejarah
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    METODE
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Sumber Sejarah -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">source</span>
                        1. SUMBER SEJARAH
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Sumber sejarah adalah segala sesuatu yang memberikan informasi mengenai peristiwa masa lalu.
                        </p>
                    </div>

                    <!-- Berdasarkan Kedekatan -->
                    <div class="mb-space-md">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">distance</span>
                            BERDASARKAN KEDEKATAN
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">verified</span>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sumber Primer</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Berasal langsung dari zaman atau pelaku peristiwa.
                                </p>
                                <div class="font-code-inline text-code-inline text-on-surface">
                                    <span class="text-primary font-bold">›</span> Dokumen asli<br>
                                    <span class="text-primary font-bold">›</span> Prasasti<br>
                                    <span class="text-primary font-bold">›</span> Foto asli<br>
                                    <span class="text-primary font-bold">›</span> Surat<br>
                                    <span class="text-primary font-bold">›</span> Kesaksian pelaku
                                </div>
                            </div>
                            <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">library_books</span>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Sumber Sekunder</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                    Dibuat berdasarkan penelitian atau informasi dari sumber lain.
                                </p>
                                <div class="font-code-inline text-code-inline text-on-surface">
                                    <span class="text-primary font-bold">›</span> Buku sejarah<br>
                                    <span class="text-primary font-bold">›</span> Artikel penelitian<br>
                                    <span class="text-primary font-bold">›</span> Kajian sejarawan
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Berdasarkan Bentuk -->
                    <div>
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">category</span>
                            BERDASARKAN BENTUK
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-primary text-[28px] mb-2">edit_document</span>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tertulis</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Prasasti, surat, arsip, koran.</p>
                            </div>
                            <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-primary text-[28px] mb-2">record_voice_over</span>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Lisan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Wawancara, kesaksian, cerita dari pelaku.</p>
                            </div>
                            <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                                <span class="material-symbols-outlined text-primary text-[28px] mb-2">temple_buddhist</span>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Benda</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Candi, senjata, fosil, artefak.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Metode Penelitian -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">science</span>
                        2. METODE PENELITIAN SEJARAH
                    </div>
                    <div class="flex flex-col gap-2">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[20px]">search</span>
                                    Heuristik
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Tahap mencari &amp; mengumpulkan sumber sejarah.</p>
                                <div class="font-code-inline text-code-inline text-on-surface-variant">
                                    <strong class="text-primary">Contoh:</strong> Mencari arsip, prasasti, buku, foto, atau wawancara.
                                </div>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[20px]">fact_check</span>
                                    Kritik
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Tahap memeriksa keaslian &amp; kredibilitas sumber.</p>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                                    <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                        <strong class="text-primary">Eksternal:</strong> Memeriksa keaslian fisik sumber.
                                    </div>
                                    <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface-variant">
                                        <strong class="text-primary">Internal:</strong> Memeriksa isi &amp; kredibilitas informasi.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[20px]">psychology</span>
                                    Interpretasi
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menafsirkan &amp; menghubungkan fakta-fakta sejarah sehingga dapat dipahami hubungan antarperistiwa.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">04</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1 flex items-center gap-2">
                                    <span class="material-symbols-outlined text-[20px]">edit_note</span>
                                    Historiografi
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Menuliskan hasil penelitian sejarah menjadi sebuah karya sejarah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            WAJIB HAFAL
                        </div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold text-center">
                            Heuristik → Kritik → Interpretasi → Historiografi
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 3 — ASAL-USUL NENEK MOYANG ==================== -->
        <article id="bab-3"
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
                            BAB TIGA • PRAAKSARA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Asal-Usul Nenek Moyang Bangsa Indonesia
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PRAAKSARA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Teori Asal-Usul -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">public</span>
                        1. TEORI ASAL-USUL
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">flight_takeoff</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Out of Africa</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Manusia modern (<em>Homo sapiens</em>) berasal dari <strong>Afrika</strong>, kemudian
                                bermigrasi ke berbagai wilayah dunia, termasuk Asia dan Nusantara.
                            </p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">travel_explore</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Out of Taiwan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Sebagian nenek moyang penutur <strong>Austronesia</strong> bermigrasi dari
                                <strong>Taiwan</strong> melalui Filipina menuju Nusantara.
                            </p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">home</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Teori Nusantara</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Nenek moyang bangsa Indonesia berasal dan berkembang dari
                                <strong>wilayah Nusantara sendiri</strong>.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 2. Gelombang Migrasi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">groups</span>
                        2. GELOMBANG MIGRASI
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[32px] mb-2">waves</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Melanesoid</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Kelompok yang datang lebih awal, berkembang di <strong>Papua</strong> &amp; Indonesia timur.
                            </p>
                        </div>
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">elderly</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Proto Melayu</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                <strong>Melayu Tua</strong>, diperkirakan datang lebih awal dibanding Deutero Melayu.
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Dayak<br>
                                <span class="text-primary font-bold">›</span> Toraja<br>
                                <span class="text-primary font-bold">›</span> Batak
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">person_celebrate</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Deutero Melayu</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                <strong>Melayu Muda</strong>, datang setelah Proto Melayu dengan kebudayaan lebih berkembang.
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Jawa<br>
                                <span class="text-primary font-bold">›</span> Melayu<br>
                                <span class="text-primary font-bold">›</span> Bugis<br>
                                <span class="text-primary font-bold">›</span> Minangkabau
                            </div>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">lightbulb</span>
                            MUDAH DIINGAT
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Proto</strong> = Melayu Tua • <strong>Deutero</strong> = Melayu Muda
                        </p>
                    </div>
                </div>

                <!-- 3. Kehidupan Praaksara -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">history</span>
                        3. KEHIDUPAN MASA PRAAKSARA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">hiking</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">TAHAP 01</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Berburu &amp; Meramu</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Bergantung pada alam</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Berpindah-pindah (nomaden)</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Berburu &amp; mengumpulkan makanan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Alat sederhana dari batu &amp; tulang</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">agriculture</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">TAHAP 02</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Bercocok Tanam</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Mulai menghasilkan makanan sendiri</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Mulai hidup menetap</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Mengenal pertanian &amp; peternakan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kehidupan masyarakat lebih teratur</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">hardware</span>
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-1">TAHAP 03</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Masa Perundagian</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Masyarakat sudah memiliki keterampilan khusus, terutama pembuatan benda dari <strong>logam</strong>.
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Nekara<br>
                                <span class="text-primary font-bold">›</span> Kapak corong<br>
                                <span class="text-primary font-bold">›</span> Perhiasan logam
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== SEMESTER 2 HEADER ==================== -->
        <section class="w-full">
            <div
                class="bg-secondary-container text-on-surface border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] p-space-md md:p-space-lg">
                <div class="flex flex-wrap items-center gap-space-sm">
                    <span
                        class="px-3 py-1 bg-surface-container-lowest text-on-surface border-[2px] border-on-background font-label-sm text-label-sm font-bold uppercase shadow-[2px_2px_0px_#1c1b1b]">
                        🔵 SEMESTER 2 / GENAP
                    </span>
                    <span class="font-headline-md text-headline-md uppercase tracking-tight">
                        BAB 4 — BAB 5
                    </span>
                    <span
                        class="ml-auto font-code-inline text-code-inline bg-surface-container-lowest px-3 py-1 border-[2px] border-on-background font-bold flex items-center gap-1 shadow-[2px_2px_0px_#1c1b1b]">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        JANUARI — JUNI
                    </span>
                </div>
            </div>
        </section>

        <!-- ==================== BAB 4 — JALUR REMPAH & HINDU-BUDDHA ==================== -->
        <article id="bab-4"
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
                            BAB EMPAT • HINDU-BUDDHA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Jalur Rempah dan Masuknya Hindu-Buddha
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    HINDU-BUDDHA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Jalur Rempah -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">local_florist</span>
                        1. JALUR REMPAH
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            Nusantara memiliki posisi strategis dalam perdagangan karena berada di antara
                            <strong>jalur perdagangan Asia dan dunia</strong>.
                        </p>
                        <div class="font-code-inline text-code-inline text-on-surface-variant">
                            <span class="text-primary font-bold">›</span> Cengkih &amp; pala menjadi komoditas penting<br>
                            <span class="text-primary font-bold">›</span> Menarik pedagang dari berbagai wilayah<br>
                            <span class="text-primary font-bold">›</span> Membantu pertukaran barang, budaya, bahasa, dan agama
                        </div>
                    </div>
                </div>

                <!-- 2. Teori Masuknya Hindu-Buddha -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">temple_hindu</span>
                        2. TEORI MASUKNYA HINDU-BUDDHA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">storefront</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Teori Waisya</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Dibawa oleh <strong>pedagang dari India</strong> yang melakukan perdagangan di Nusantara.
                            </p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">shield</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Teori Ksatria</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Dibawa oleh golongan <strong>ksatria/bangsawan</strong> atau prajurit dari India.
                            </p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">auto_stories</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Teori Brahmana</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Dibawa oleh kaum <strong>Brahmana</strong>, terutama melalui kegiatan keagamaan dan
                                hubungan dengan penguasa lokal.
                            </p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">swap_horiz</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Teori Arus Balik</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Masyarakat Nusantara <strong>pergi ke India</strong> untuk mempelajari agama &amp;
                                kebudayaan Hindu-Buddha, kemudian kembali &amp; menyebarkannya.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 3. Kerajaan Hindu-Buddha -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">castle</span>
                        3. KERAJAAN HINDU-BUDDHA
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">temple_buddhist</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🗿 Kutai</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kalimantan Timur</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Salah satu kerajaan Hindu tertua</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Bukti: <strong>Prasasti Yupa</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Raja terkenal: <strong>Mulawarman</strong></li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">water</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🏛️ Tarumanegara</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Jawa Barat</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Bercorak Hindu</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Raja terkenal: <strong>Purnawarman</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Bukti: <strong>Prasasti Ciaruteun</strong></li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">sailing</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">⚓ Sriwijaya</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Berpusat di <strong>Sumatra</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kerajaan <strong>maritim</strong> &amp; pusat perdagangan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Pusat pembelajaran <strong>agama Buddha</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Menguasai jalur perdagangan Asia Tenggara</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">account_balance</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🛕 Mataram Kuno</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Jawa Tengah &amp; Jawa Timur</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Dinasti Hindu &amp; Buddha</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Peninggalan: <strong>Candi Borobudur</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Peninggalan: <strong>Candi Prambanan</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 4. Akulturasi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">merge</span>
                        4. AKULTURASI BUDAYA HINDU-BUDDHA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Akulturasi</strong> adalah perpaduan dua kebudayaan tanpa menghilangkan seluruh
                            unsur budaya asli.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">temple_buddhist</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Arsitektur</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pembangunan candi dengan unsur lokal &amp; Hindu-Buddha.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">translate</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Aksara</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Aksara <strong>Pallawa</strong> &amp; bahasa <strong>Sanskerta</strong>.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">crown</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pemerintahan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Sistem kerajaan dengan raja sebagai penguasa.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">brush</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Seni</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Seni ukir, relief, &amp; sastra bercorak Hindu-Buddha.</p>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 5 — MASUKNYA ISLAM ==================== -->
        <article id="bab-5"
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
                            BAB LIMA • ISLAM NUSANTARA
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Masuk dan Berkembangnya Islam di Nusantara
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    ISLAM
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Teori Masuknya Islam -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">mosque</span>
                        1. TEORI MASUKNYA ISLAM
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">flag</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🇮🇳 Teori Gujarat</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Islam masuk melalui <strong>pedagang dari Gujarat, India</strong>.
                            </p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">castle</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🇮🇷 Teori Persia</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Islam memiliki hubungan dengan <strong>Persia (Iran)</strong>. Didukung adanya
                                kesamaan tradisi &amp; budaya Islam.
                            </p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">travel_explore</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🇸🇦 Teori Arab</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Islam datang langsung dari <strong>pedagang atau masyarakat Arab</strong> melalui jalur perdagangan.
                            </p>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Ketiga teori tersebut menjelaskan kemungkinan jalur masuk Islam; para sejarawan masih
                            membahas bukti dan bobot masing-masing teori.
                        </p>
                    </div>
                </div>

                <!-- 2. Saluran Penyebaran -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">share</span>
                        2. SALURAN PENYEBARAN ISLAM
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">shopping_bag</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Perdagangan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pedagang Muslim berinteraksi &amp; menyebarkan Islam.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">favorite</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Perkawinan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Perkawinan pedagang Muslim dengan masyarakat lokal.</p>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-1">self_improvement</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Tasawuf</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Ajaran spiritual mudah berinteraksi dengan tradisi lokal.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-1">school</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Pendidikan</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pesantren &amp; lembaga pendidikan sebagai pusat penyebaran.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-1">campaign</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Dakwah</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Ulama &amp; tokoh agama menyampaikan ajaran Islam.</p>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-1">theater_comedy</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Kesenian</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Pertunjukan, sastra, &amp; tradisi lokal.</p>
                        </div>
                    </div>
                </div>

                <!-- 3. Kerajaan Islam -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">castle</span>
                        3. KERAJAAN-KERAJAAN ISLAM
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">anchor</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">⚓ Samudra Pasai</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Aceh</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kerajaan Islam awal di Nusantara</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Pusat perdagangan</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">mosque</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🕌 Demak</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Jawa</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kerajaan Islam penting di Jawa</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Berperan dalam perkembangan Islam di Jawa</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">water</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🌊 Aceh Darussalam</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Sumatra bagian utara</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Pusat perdagangan &amp; keilmuan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Puncak: <strong>Sultan Iskandar Muda</strong></li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">castle</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🏰 Banten</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Jawa Barat</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Pusat perdagangan penting</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Berkaitan dengan perdagangan <strong>lada</strong></li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">sailing</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">⛵ Gowa-Tallo</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Sulawesi Selatan</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Pusat perdagangan &amp; penyebaran Islam</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Kawasan timur Nusantara</li>
                            </ul>
                        </div>
                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-primary text-[28px] mb-2">island</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">🏝️ Ternate &amp; Tidore</div>
                            <ul class="space-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Maluku</li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Berkembang karena perdagangan <strong>rempah</strong></li>
                                <li class="flex items-start gap-2"><span class="text-primary font-bold">›</span> Pusat perdagangan wilayah timur</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 4. Jaringan Keilmuan & Perdagangan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">hub</span>
                        4. JARINGAN KEILMUAN &amp; PERDAGANGAN
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface mb-3">
                            Perdagangan antarpulau menyebabkan berbagai wilayah Nusantara saling terhubung.
                        </p>
                        <div class="p-space-md bg-surface-container-lowest border-[2px] border-on-background">
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2">JALUR PERDAGANGAN</div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant text-center">
                                Pedagang → Pelabuhan → Pusat Kerajaan → Masyarakat Lokal
                            </div>
                        </div>
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">sync_alt</span>
                            YANG DIBERIKAN JALUR PERDAGANGAN
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-5 gap-2">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Agama</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Bahasa</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Pengetahuan</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Budaya</div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background text-center font-headline-sm text-headline-sm uppercase font-bold text-on-surface">Teknologi</div>
                        </div>
                    </div>
                    <div class="mt-space-md p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Ulama</strong> memiliki peran penting dalam mengembangkan pendidikan dan keilmuan
                            Islam. Pesantren dan pusat-pusat pendidikan menjadi tempat belajar agama serta berbagai ilmu.
                        </p>
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul Seni Budaya,
                        Matematika, Bahasa Inggris, dan mata pelajaran lainnya.
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
