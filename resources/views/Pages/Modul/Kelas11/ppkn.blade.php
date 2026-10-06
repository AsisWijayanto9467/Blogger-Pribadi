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
                <span class="text-on-surface font-bold uppercase">A2 — PPKn</span>
            </nav>

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <!-- Badge -->
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-secondary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MAPEL UMUM • KELAS XI
                    </div>

                    <!-- Title -->
                    <h1
                        class="font-headline-xl text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                        PENDIDIKAN
                        <span
                            class="bg-secondary-container px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">PANCASILA</span>
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-space-sm">
                        Dinamika Demokrasi, Sistem Hukum, HAM, dan Geopolitik Indonesia — Membangun
                        warga negara kritis, taat hukum, dan berkarakter Pancasila.
                    </p>
                </div>

                <!-- Info Box -->
                <div
                    class="flex flex-col gap-2 p-space-sm bg-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] shrink-0">
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">TOTAL BAB</span>
                        <span
                            class="font-label-sm text-label-sm bg-tertiary-fixed text-on-tertiary-fixed px-2 py-0.5 border border-on-background font-bold">2
                            BAB</span>
                    </div>
                    <div class="flex items-center justify-between gap-space-md border-b-[2px] border-on-background pb-1">
                        <span class="font-label-sm text-label-sm text-on-surface uppercase font-bold">FOKUS</span>
                        <span
                            class="font-label-sm text-label-sm bg-surface-container-lowest text-on-surface px-2 py-0.5 border border-on-background">Pancasila &amp; UUD</span>
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
                    MULAI BAB 1
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

        <!-- ==================== BAB 1 — PANCASILA ==================== -->
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
                            BAB SATU • IDEOLOGI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            Pancasila — Sejarah, Kedudukan &amp; Implementasi
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    PANCASILA
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Peta Pemikiran -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">groups</span>
                        1. PETA PEMIKIRAN PENDIRI BANGSA
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Perumusan Pancasila tidak langsung menghasilkan rumusan yang sekarang. Para pendiri bangsa
                            memiliki gagasan yang berbeda mengenai dasar negara Indonesia.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <!-- Moh. Yamin -->
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">person</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Mr. Moh. Yamin</div>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">5 ASAS</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">1.</span> Peri Kebangsaan<br>
                                <span class="text-primary font-bold">2.</span> Peri Kemanusiaan<br>
                                <span class="text-primary font-bold">3.</span> Peri Ketuhanan<br>
                                <span class="text-primary font-bold">4.</span> Peri Kerakyatan<br>
                                <span class="text-primary font-bold">5.</span> Kesejahteraan Rakyat
                            </div>
                            <div class="mt-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Menekankan <strong>nasionalisme, kemanusiaan, ketuhanan, demokrasi</strong>,
                                    dan <strong>kesejahteraan</strong>.
                                </p>
                            </div>
                        </div>

                        <!-- Soepomo -->
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">balance</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Prof. Dr. Soepomo</div>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">NEGARA INTEGRALISTIK</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">1.</span> Persatuan<br>
                                <span class="text-primary font-bold">2.</span> Kekeluargaan<br>
                                <span class="text-primary font-bold">3.</span> Keseimbangan lahir batin<br>
                                <span class="text-primary font-bold">4.</span> Musyawarah<br>
                                <span class="text-primary font-bold">5.</span> Keadilan rakyat
                            </div>
                            <div class="mt-2 p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <p class="font-body-sm text-body-sm text-on-surface-variant">
                                    Negara harus mengutamakan <strong>persatuan</strong> dan
                                    <strong>kepentingan bersama</strong>.
                                </p>
                            </div>
                        </div>

                        <!-- Soekarno -->
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[32px] mb-2">campaign</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Ir. Soekarno</div>
                            <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">1 JUNI 1945</div>
                            <div class="font-code-inline text-code-inline text-on-surface mb-3">
                                <span class="text-primary font-bold">1.</span> Kebangsaan Indonesia<br>
                                <span class="text-primary font-bold">2.</span> Internasionalisme<br>
                                <span class="text-primary font-bold">3.</span> Mufakat / Demokrasi<br>
                                <span class="text-primary font-bold">4.</span> Kesejahteraan Sosial<br>
                                <span class="text-primary font-bold">5.</span> Ketuhanan Berkebudayaan
                            </div>

                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background mb-2">
                                <div class="font-label-sm text-label-sm uppercase font-bold text-primary mb-1">TRISILA</div>
                                <div class="font-code-inline text-code-inline text-on-surface">
                                    › Sosio-nasionalisme<br>
                                    › Sosio-demokrasi<br>
                                    › Ketuhanan
                                </div>
                            </div>
                            <div class="p-2 bg-primary-container border-[2px] border-on-background">
                                <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">EKASILA</div>
                                <div class="font-headline-sm text-headline-sm font-bold text-on-surface text-center">
                                    GOTONG ROYONG
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">check_circle</span>
                            KESIMPULAN
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            Walaupun terdapat perbedaan gagasan, para pendiri bangsa memiliki <strong>tujuan yang
                            sama</strong>: membentuk negara Indonesia yang <strong>merdeka, bersatu, adil, dan
                            sejahtera</strong>.
                        </p>
                    </div>
                </div>

                <!-- 2. Perdebatan Agama - Negara -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">forum</span>
                        2. PERDEBATAN HUBUNGAN AGAMA &amp; NEGARA
                    </div>
                    <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            Terdapat perbedaan pandangan antara kelompok yang menginginkan dasar negara lebih
                            menonjolkan <strong>identitas keagamaan</strong> dengan kelompok yang menginginkan negara
                            berdasarkan <strong>persatuan seluruh rakyat</strong> dengan latar belakang agama dan
                            golongan yang beragam.
                        </p>
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">handshake</span>
                            SOLUSI
                        </div>
                        <p class="font-body-md text-body-md text-on-surface">
                            Perbedaan diselesaikan melalui <strong>musyawarah dan kompromi</strong> agar Indonesia
                            dapat diterima oleh seluruh daerah dan kelompok masyarakat.
                        </p>
                    </div>
                </div>

                <!-- 3. Piagam Jakarta & Perubahan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">history_edu</span>
                        3. PIAGAM JAKARTA &amp; PERUBAHAN RUMUSAN
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-2">22 JUNI 1945</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">PIAGAM JAKARTA</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Hasil Panitia Sembilan. Sila pertama memuat:
                            </p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface italic">
                                "...dengan kewajiban menjalankan syariat Islam bagi pemeluk-pemeluknya."
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-code-inline text-code-inline font-bold text-on-surface mb-2">18 AGUSTUS 1945</div>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">PANCASILA DISAHKAN</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Rumusan sila pertama diubah menjadi:
                            </p>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface italic">
                                "Ketuhanan Yang Maha Esa."
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">
                                Perubahan ini merupakan bentuk <strong>kompromi</strong> untuk menjaga persatuan.
                            </p>
                        </div>
                    </div>

                    <div class="mt-space-md p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">HAL PENTING DIINGAT</div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            22 Juni 1945 = Piagam Jakarta • 18 Agustus 1945 = Pancasila dalam UUD 1945
                        </div>
                    </div>
                </div>

                <!-- 4. Tiga Tataran Nilai Pancasila -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">stairs</span>
                        4. TIGA TATARAN NILAI PANCASILA (MOERDIONO)
                    </div>
                    <div class="overflow-x-auto mb-space-md">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Jenis Nilai</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Pengertian</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Nilai Dasar</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Nilai pokok yang bersifat tetap dan abstrak</td>
                                    <td class="p-space-md">Lima sila Pancasila</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Nilai Instrumental</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Penjabaran nilai dasar dalam aturan</td>
                                    <td class="p-space-md">UUD 1945, UU, Peraturan</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Nilai Praksis</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Pelaksanaan nilai dalam kehidupan nyata</td>
                                    <td class="p-space-md">Gotong royong, musyawarah, toleransi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">lightbulb</span>
                            CONTOH
                        </div>
                        <div class="font-code-inline text-code-inline text-on-surface">
                            <strong class="text-primary">Nilai Dasar:</strong> Keadilan sosial.<br>
                            ↓<br>
                            <strong class="text-primary">Nilai Instrumental:</strong> Peraturan yang menjamin keadilan dan hak warga negara.<br>
                            ↓<br>
                            <strong class="text-primary">Nilai Praksis:</strong> Bersikap adil kepada teman dan tidak membeda-bedakan orang.
                        </div>
                    </div>
                </div>

                <!-- 5. Implementasi Pancasila -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">checklist</span>
                        5. IMPLEMENTASI PANCASILA DALAM KEHIDUPAN
                    </div>
                    <div class="flex flex-col gap-2">

                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">1</span>
                                </div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                                    Ketuhanan Yang Maha Esa
                                </div>
                            </div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                › Beribadah sesuai agama<br>
                                › Menghormati agama lain<br>
                                › Tidak memaksakan agama
                            </div>
                        </div>

                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">2</span>
                                </div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                                    Kemanusiaan yang Adil dan Beradab
                                </div>
                            </div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                › Menghormati hak orang lain<br>
                                › Tidak melakukan kekerasan atau diskriminasi<br>
                                › Membantu orang yang membutuhkan
                            </div>
                        </div>

                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">3</span>
                                </div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                                    Persatuan Indonesia
                                </div>
                            </div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                › Menjaga persatuan<br>
                                › Menghargai keberagaman<br>
                                › Tidak menyebarkan konflik antarkelompok
                            </div>
                        </div>

                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">4</span>
                                </div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                                    Kerakyatan yang Dipimpin oleh Hikmat Kebijaksanaan
                                </div>
                            </div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                › Bermusyawarah<br>
                                › Menghargai pendapat<br>
                                › Tidak memaksakan kehendak
                            </div>
                        </div>

                        <div class="p-space-md bg-surface-container-low border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="font-headline-sm text-headline-sm font-bold">5</span>
                                </div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                                    Keadilan Sosial bagi Seluruh Rakyat Indonesia
                                </div>
                            </div>
                            <div class="font-code-inline text-code-inline text-on-surface-variant">
                                › Bersikap adil<br>
                                › Menghargai hak orang lain<br>
                                › Melaksanakan kewajiban<br>
                                › Membantu menciptakan kesejahteraan bersama
                            </div>
                        </div>

                    </div>
                </div>

                <!-- 6. Tantangan Penerapan Pancasila -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-error">warning</span>
                        6. TANTANGAN PENERAPAN PANCASILA
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md mb-space-md">
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Radikalisme</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Paham yang menginginkan perubahan secara ekstrem dan dapat mengancam kehidupan berbangsa.
                            </p>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Ekstremisme</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Pandangan/tindakan yang sangat ekstrem dan menolak nilai toleransi &amp; keberagaman.
                            </p>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Terorisme</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Penggunaan kekerasan untuk mencapai tujuan tertentu dan menimbulkan ketakutan.
                            </p>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Hoaks</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Informasi palsu atau menyesatkan yang dapat memicu konflik.
                            </p>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] md:col-span-2">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Post-Truth</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Situasi ketika emosi dan keyakinan pribadi lebih memengaruhi opini daripada fakta yang sebenarnya.
                            </p>
                        </div>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">healing</span>
                            CARA MENGHADAPI
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Periksa kebenaran informasi
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Tidak mudah percaya berita viral
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Menghargai perbedaan
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Menolak kekerasan
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Medsos bertanggung jawab
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Utamakan persatuan
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>

        <!-- ==================== BAB 2 — UUD NRI 1945 ==================== -->
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
                            BAB DUA • KONSTITUSI
                        </div>
                        <h2 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                            UUD Negara Republik Indonesia Tahun 1945
                        </h2>
                    </div>
                </div>
                <span
                    class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background font-bold shadow-[2px_2px_0px_#1c1b1b] self-start md:self-auto">
                    UUD 1945
                </span>
            </header>

            <div class="p-space-md md:p-space-lg flex flex-col gap-space-lg">

                <!-- 1. Pengertian Konstitusi -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">description</span>
                        1. PENGERTIAN KONSTITUSI
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Konstitusi</strong> adalah hukum dasar yang menjadi landasan dalam
                            penyelenggaraan negara.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">article</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Konstitusi Tertulis</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Berupa <strong>UUD</strong>.</p>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">history</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Konstitusi Tidak Tertulis</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Berupa <strong>kebiasaan</strong> atau <strong>konvensi ketatanegaraan</strong>.</p>
                        </div>
                    </div>

                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">functions</span>
                            FUNGSI KONSTITUSI
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Dasar penyelenggaraan negara
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Mengatur lembaga negara
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Mengatur hubungan negara &amp; warga
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Menjamin hak warga negara
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface md:col-span-2">
                                <span class="text-primary font-bold">›</span> Membatasi kekuasaan pemerintah agar tidak sewenang-wenang
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2. Perancangan & Pengesahan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">timeline</span>
                        2. PERANCANGAN &amp; PENGESAHAN UUD 1945
                    </div>

                    <div class="flex flex-col gap-2 mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">01</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">BPUPK / BPUPKI</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Membahas dasar negara dan rancangan Undang-Undang Dasar.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">02</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">Proklamasi Kemerdekaan</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">17 Agustus 1945.</p>
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-start gap-3">
                            <span class="font-code-inline text-code-inline font-bold text-on-surface shrink-0 mt-1">03</span>
                            <div>
                                <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-1">PPKI</div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">Mengesahkan UUD 1945 pada <strong>18 Agustus 1945</strong>:</p>
                                <div class="font-code-inline text-code-inline text-on-surface">
                                    <span class="text-primary font-bold">›</span> Memilih Soekarno sebagai Presiden<br>
                                    <span class="text-primary font-bold">›</span> Memilih Mohammad Hatta sebagai Wakil Presiden<br>
                                    <span class="text-primary font-bold">›</span> Membentuk pemerintahan awal
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. Kedudukan UUD 1945 -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">workspace_premium</span>
                        3. KEDUDUKAN UUD 1945
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            UUD 1945 merupakan <strong>hukum dasar tertulis tertinggi</strong> dalam sistem hukum
                            Indonesia. Peraturan yang berada di bawahnya harus <strong>sesuai dan tidak boleh
                            bertentangan</strong> dengan UUD 1945.
                        </p>
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] text-center">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-1">SECARA SEDERHANA</div>
                        <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            UUD 1945 → Dasar Pembentukan Peraturan di Bawahnya
                        </div>
                    </div>
                </div>

                <!-- 4. Norma dalam Kehidupan -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">rule</span>
                        4. NORMA DALAM KEHIDUPAN
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Norma</strong> adalah aturan atau pedoman yang mengatur perilaku manusia dalam
                            kehidupan masyarakat.
                        </p>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full border-[3px] border-on-background bg-surface-container-lowest shadow-[3px_3px_0px_#1c1b1b]">
                            <thead class="bg-on-background text-inverse-on-surface">
                                <tr>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Norma</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-r-[2px] border-on-background">Sumber</th>
                                    <th class="p-space-md text-left font-label-md text-label-md uppercase font-bold border-b-[2px] border-on-background">Contoh</th>
                                </tr>
                            </thead>
                            <tbody class="font-body-sm text-body-sm text-on-surface-variant">
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Agama</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Ajaran Tuhan/agama</td>
                                    <td class="p-space-md">Beribadah, tidak mencuri</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Kesusilaan</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Hati nurani</td>
                                    <td class="p-space-md">Jujur, tidak berbohong</td>
                                </tr>
                                <tr class="border-b-[2px] border-on-background">
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Kesopanan</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Kebiasaan masyarakat</td>
                                    <td class="p-space-md">Menghormati orang lain</td>
                                </tr>
                                <tr>
                                    <td class="p-space-md font-bold text-on-surface border-r-[2px] border-on-background">Hukum</td>
                                    <td class="p-space-md border-r-[2px] border-on-background">Negara/peraturan</td>
                                    <td class="p-space-md">Mematuhi lalu lintas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-space-md p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">star</span>
                            PERBEDAAN UTAMA
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 font-body-sm text-body-sm text-on-surface">
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <strong class="text-primary">Norma Agama:</strong> berkaitan dengan ajaran agama
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <strong class="text-primary">Norma Kesusilaan:</strong> berasal dari hati nurani
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <strong class="text-primary">Norma Kesopanan:</strong> dari kebiasaan masyarakat
                            </div>
                            <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background">
                                <strong class="text-primary">Norma Hukum:</strong> memiliki sanksi dari negara
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. Kepatuhan Hukum -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">gavel</span>
                        5. KEPATUHAN TERHADAP HUKUM
                    </div>
                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Kepatuhan hukum</strong> berarti menaati aturan yang berlaku, baik karena
                            kesadaran maupun karena kewajiban sebagai warga negara.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Contoh Kepatuhan</div>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Mematuhi aturan lalu lintas<br>
                                <span class="text-primary font-bold">›</span> Tidak melakukan kekerasan<br>
                                <span class="text-primary font-bold">›</span> Tidak mencuri<br>
                                <span class="text-primary font-bold">›</span> Menghormati hak orang lain<br>
                                <span class="text-primary font-bold">›</span> Mematuhi peraturan sekolah
                            </div>
                        </div>
                        <div class="p-space-md bg-error-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">⚠ Konsekuensi Pelanggaran</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Pelanggaran hukum dapat menyebabkan <strong>sanksi sesuai peraturan</strong> yang
                                berlaku.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 6. Hukum Positif & KUHP -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">policy</span>
                        6. HUKUM POSITIF &amp; KUHP
                    </div>
                    <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] mb-space-md">
                        <p class="font-body-md text-body-md text-on-surface">
                            <strong>Hukum positif</strong> adalah hukum yang berlaku secara resmi pada suatu negara
                            dan waktu tertentu.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">KUHP</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                <strong>Kitab Undang-Undang Hukum Pidana</strong> mengatur berbagai tindak pidana
                                dan sanksinya.
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Pencurian<br>
                                <span class="text-primary font-bold">›</span> Penganiayaan<br>
                                <span class="text-primary font-bold">›</span> Penipuan<br>
                                <span class="text-primary font-bold">›</span> Perusakan
                            </div>
                        </div>
                        <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Analisis Kasus Hukum</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Dalam menganalisis kasus hukum, perlu melihat:
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">1.</span> Perbuatan<br>
                                <span class="text-primary font-bold">2.</span> Aturan yang dilanggar<br>
                                <span class="text-primary font-bold">3.</span> Unsur pelanggaran<br>
                                <span class="text-primary font-bold">4.</span> Akibat/sanksi
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 7. Hak & Kewajiban Warga Negara -->
                <div>
                    <div class="font-label-lg text-label-lg uppercase font-bold text-on-surface mb-3 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">balance</span>
                        7. HAK &amp; KEWAJIBAN WARGA NEGARA
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mb-space-md">
                        <div class="p-space-md bg-primary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">verified_user</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Hak</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Sesuatu yang seharusnya diperoleh atau diterima seseorang.
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Hak memperoleh pendidikan<br>
                                <span class="text-primary font-bold">›</span> Hak perlindungan hukum<br>
                                <span class="text-primary font-bold">›</span> Hak beragama<br>
                                <span class="text-primary font-bold">›</span> Hak menyampaikan pendapat
                            </div>
                        </div>
                        <div class="p-space-md bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                            <span class="material-symbols-outlined text-on-surface text-[28px] mb-2">assignment_turned_in</span>
                            <div class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold mb-2">Kewajiban</div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-2">
                                Sesuatu yang harus dilakukan dengan tanggung jawab.
                            </p>
                            <div class="font-code-inline text-code-inline text-on-surface">
                                <span class="text-primary font-bold">›</span> Menaati hukum<br>
                                <span class="text-primary font-bold">›</span> Menghormati hak orang lain<br>
                                <span class="text-primary font-bold">›</span> Membela negara<br>
                                <span class="text-primary font-bold">›</span> Mengikuti pendidikan dasar
                            </div>
                        </div>
                    </div>

                    <div class="p-space-md bg-tertiary-fixed border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b]">
                        <div class="font-label-sm text-label-sm uppercase font-bold text-on-surface mb-2 flex items-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">balance</span>
                            HUBUNGAN HAK &amp; KEWAJIBAN
                        </div>
                        <p class="font-body-md text-body-md text-on-surface mb-2">
                            Hak dan kewajiban harus <strong>seimbang</strong>.
                        </p>
                        <div class="p-2 bg-surface-container-lowest border-[2px] border-on-background font-code-inline text-code-inline text-on-surface mb-2">
                            <strong class="text-primary">Contoh:</strong> Kita memiliki hak menggunakan fasilitas
                            sekolah, tetapi juga memiliki kewajiban menjaga fasilitas tersebut.
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant text-center">
                            <strong>Jangan hanya menuntut hak</strong> tetapi mengabaikan kewajiban.
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
                        Kembali ke halaman pembelajaran untuk menjelajahi modul Bahasa Indonesia,
                        PJOK, Matematika, dan mata pelajaran Kelas XI lainnya.
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
