<?php

namespace App\Support;

class ModulCatalog
{
    /**
     * @return array<string, array<string, mixed>>
     */
    public static function all(): array
    {
        return [
            'a1-pai' => self::a1Pai(),
        ];
    }

    /**
     * @return array<string, mixed>|null
     */
    public static function find(string $slug): ?array
    {
        return self::all()[$slug] ?? null;
    }

    /**
     * @return array<string, mixed>
     */
    private static function a1Pai(): array
    {
        return [
            'slug' => 'a1-pai',
            'kode' => 'A1',
            'kategori' => 'MAPEL UMUM',
            'kelas' => 'KELAS X',
            'jenjang' => 'SMK / PPLG',
            'level' => 'LEVEL 01 / FOUNDATION',
            'icon' => 'menu_book',
            'judul' => 'Pendidikan Agama & Budi Pekerti',
            'judul_penuh' => 'A1 – Pendidikan Agama dan Budi Pekerti',
            'deskripsi' => 'Pembentukan karakter, akhlak mulia, etika spiritual, dan pengamalan nilai keagamaan dalam kehidupan sehari-hari.',
            'ringkasan' => 'Modul ini membentuk karakter muslim yang utuh dalam dua semester penuh: mulai dari etos kerja dan berlomba dalam kebaikan, sampai menghayati keimanan, muamalah syariah, dakwah, serta akhlak mulia.',
            'kunci' => [
                'Etos Kerja',
                'Syu\'abul Iman',
                'Akhlak Mazmumah',
                'Muamalah Syariah',
                'Maqashid asy-Syari\'ah',
                'Wali Songo',
            ],
            'statistik' => [
                ['label' => 'SEMESTER', 'nilai' => '02', 'warna' => 'primary-container'],
                ['label' => 'TOTAL BAB', 'nilai' => '10', 'warna' => 'secondary-container'],
                ['label' => 'DASAR HUKUM', 'nilai' => '04', 'warna' => 'tertiary-fixed'],
                ['label' => 'STATUS', 'nilai' => 'LENGKAP', 'warna' => 'primary'],
            ],
            'semester' => [
                [
                    'nama' => 'SEMESTER 1',
                    'label' => 'GANJIL',
                    'deskripsi' => 'Fondasi etos kerja, keimanan, dan muamalah — Semester Gasal.',
                    'bab' => [
                        [
                            'nomor' => 1,
                            'judul' => 'Meraih Kes_Model with Competitiveness in Goodness and Work Ethic',
                            'dasar_hukum' => [
                                'Q.S. Al-Ma\'idah/5: 48 — Fastabiqul Khairat / berlomba-lomba dalam kebaikan.',
                                'Q.S. At-Taubah/9: 105 — Landasan etos kerja dan ketaatan kepada Allah SWT.',
                            ],
                            'inti' => [
                                'Memahami pentingnya berlomba-lomba dalam kebaikan tanpa menunda-nunda.',
                                'Membangun etos kerja yang tinggi, disiplin, mandiri, dan pantang menyerah sebagai wujud ibadah kepada Allah SWT.',
                                'Menerapkan perilaku kerja keras dan kerja cerdas dalam kehidupan sehari-hari.',
                            ],
                        ],
                        [
                            'nomor' => 2,
                            'judul' => 'Memahami Hakikat dan Cabang-Cabang Iman (Syu\'abul Iman)',
                            'dasar_hukum' => [],
                            'inti' => [
                                'Pengertian: Syu\'abul Iman adalah cabang-cabang iman yang berjumlah 77 cabang.',
                                'Pengelompokan 3 dimensi:',
                                'Ma\'rifatun bil qalbi — cabang iman yang berkaitan dengan niat, akidah, dan hati.',
                                'Iqrarun bil lisan — cabang iman yang berkaitan dengan lisan dan ucapan.',
                                'Amalun bil arkan — cabang iman yang berkaitan dengan perbuatan dan anggota badan.',
                                'Menerapkan pilar-pilar keimanan untuk membentuk karakter muslim yang utuh.',
                            ],
                        ],
                        [
                            'nomor' => 3,
                            'judul' => 'Menghindari Sifat Berfoya-Foya, Riya\', Sum\'ah, Takabur, dan Hasad',
                            'dasar_hukum' => [],
                            'inti' => [
                                'Mengidentifikasi dan mencegah penyakit hati (akhlak mazmumah):',
                                'Israf & Tabzir — sifat berfoya-foya dan menghamburkan harta secara berlebihan.',
                                'Riya\' — melakukan ibadah atau kebaikan agar dilihat dan dipuji orang lain.',
                                'Sum\'ah — melakukan kebaikan agar terdengar dan dibicarakan orang lain.',
                                'Takabur — menganggap diri lebih baik dan meremehkan orang lain (sombong).',
                                'Hasad — perasaan iri atau dengki atas kenikmatan yang diperoleh orang lain.',
                            ],
                        ],
                        [
                            'nomor' => 4,
                            'judul' => 'Asuransi, Bank, dan Koperasi Syariah (Fikih Muamalah)',
                            'dasar_hukum' => [],
                            'inti' => [
                                'Konsep dasar transaksi ekonomi syariah modern yang bebas dari bunga (riba).',
                                'Asuransi Syariah (Takaful) — usaha saling tolong-menolong (ta\'awun) dan melindungi di antara para peserta melalui akad Tabarru\'.',
                                'Perbankan Syariah — sistem perbankan bebas bunga (riba) dengan akad bagi hasil (Mudharabah dan Musyarakah) atau jual beli (Murabahah).',
                                'Koperasi Syariah — koperasi yang kegiatan usahanya bergerak di bidang pembiayaan, investasi, dan simpanan sesuai prinsip syariah.',
                            ],
                        ],
                        [
                            'nomor' => 5,
                            'judul' => 'Sejarah Masuknya Islam dan Peran Ulama Penyebar Islam di Indonesia',
                            'dasar_hukum' => [],
                            'inti' => [
                                'Teori-teori masuknya Islam ke Nusantara (Teori Gujarat, Makkah/Arab, Persia, dan China).',
                                'Strategi dakwah para ulama melalui jalur perdagangan, pernikahan, pendidikan (pesantren), kesenian, dan tasawuf.',
                                'Meneladani sifat gigih, santun, dan toleran dari para da\'i penyiap ajaran Islam di Indonesia.',
                            ],
                        ],
                    ],
                ],
                [
                    'nama' => 'SEMESTER 2',
                    'label' => 'GENAP',
                    'deskripsi' => 'Etika sosial, akhlak mulia, dan kaidah hukum Islam — Semester Genap.',
                    'bab' => [
                        [
                            'nomor' => 6,
                            'judul' => 'Menjauhi Pergaulan Bebas dan Zina demi Menjaga Martabat Manusia',
                            'dasar_hukum' => [
                                'Q.S. Al-Isra\'/17: 32 — Batas-batas pergaulan dalam Islam.',
                                'Q.S. An-Nur/24: 2 — Larangan mendekati dan melakukan zina.',
                            ],
                            'inti' => [
                                'Memahami batas-batas pergaulan dalam Islam dan bahaya pergaulan bebas.',
                                'Mengetahui larangan mendekati dan melakukan zina serta dampaknya secara fisik, psikologis, sosial, dan agama.',
                                'Menerapkan perilaku iffah (menjaga kehormatan diri) dan menundukkan pandangan (ghaddul bashar).',
                            ],
                        ],
                        [
                            'nomor' => 7,
                            'judul' => 'Menata Hidup dengan Khauf, Raja\', dan Tawakal kepada Allah SWT',
                            'dasar_hukum' => [],
                            'inti' => [
                                'Khauf — rasa takut kepada Allah SWT yang mendorong seseorang untuk menjauhi larangan-Nya.',
                                'Raja\' — rasa harap yang kuat akan rahmat, ampunan, dan pertolongan Allah SWT.',
                                'Tawakal — berserah diri sepenuhnya kepada Allah SWT setelah melakukan usaha (ikhtiar) yang maksimal.',
                                'Menyeimbangkan ketiga sifat ini dalam menghadapi ujian dan dinamika kehidupan.',
                            ],
                        ],
                        [
                            'nomor' => 8,
                            'judul' => 'Menumbuhkan Perilaku Mulia Melalui Akhlak Mahmudah dan Menghindari Akhlak Madzmumah',
                            'dasar_hukum' => [],
                            'inti' => [
                                'Akhlak Mahmudah (tergolong mulia) — sifat temperamental yang terkontrol (ghadhab yang terkendali).',
                                'Kontrol diri (mujahadah an-nafs) sebagai wujud akhlak mulia.',
                                'Syuja\'ah — berani membela kebenaran.',
                                'Akhlak Madzmumah (tergolong tercela) — sikap pemaaf yang dibuat-buat.',
                                'Pemarah tanpa alasan yang benar dan penakut dalam menegakkan keadilan.',
                            ],
                        ],
                        [
                            'nomor' => 9,
                            'judul' => 'Mengenal Prinsip Dasar Al-Kulliyatul Khamsah (Lima Prinsip Dasar Hukum Islam)',
                            'dasar_hukum' => [],
                            'inti' => [
                                'Memahami 5 tujuan utama disyariatkannya hukum Islam (Maqashid asy-Syari\'ah):',
                                'Hifzhu ad-Din — memelihara agama.',
                                'Hifzhu an-Nafs — memelihara jiwa/nyawa.',
                                'Hifzhu al-\'Aql — memelihara akal pikiran.',
                                'Hifzhu an-Nasl — memelihara keturunan dan kehormatan.',
                                'Hifzhu al-Mal — memelihara harta benda.',
                            ],
                        ],
                        [
                            'nomor' => 10,
                            'judul' => 'Keteladanan Dakwah Wali Songo di Nusantara',
                            'dasar_hukum' => [],
                            'inti' => [
                                'Mengenal tokoh-tokoh Wali Songo beserta peran dan wilayah dakwahnya di Pulau Jawa.',
                                'Metode dakwah akulturasi budaya yang ramah, bijaksana, dan tanpa kekerasan.',
                                'Penggunaan media wayang, tembang Jawa, dan tradisi lokal sebagai sarana dakwah.',
                                'Meneladani kearifan lokal Wali Songo dalam menjaga kerukunan dan menyebarkan kebaikan.',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }
}