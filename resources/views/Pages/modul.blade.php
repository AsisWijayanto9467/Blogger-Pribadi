@extends('layouts.main')

@section('title', $modul['kode'] . ' ' . $modul['judul_penuh'] . ' - Rangkuman Modul | VEKTOR RPL.DEV')

@section('style')
@endsection

@section('main')
    {{-- ==================== MODULE TOP ANCHOR ==================== --}}
    <div id="modul-top"></div>

    {{-- ==================== BREADCRUMB BAR ==================== --}}
    <div class="w-full border-b-[3px] border-on-background bg-surface-container">
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-sm">
            <nav aria-label="Breadcrumb" class="flex flex-wrap items-center gap-2 font-code-inline text-code-inline">
                <a class="text-on-surface-variant hover:text-primary uppercase transition-colors"
                    data-path="home" href="{{ route('home') }}">HOME</a>
                <span class="text-outline">/</span>
                <a class="text-on-surface-variant hover:text-primary uppercase transition-colors"
                    data-path="pembelajaran" href="{{ route('pembelajaran') }}">PEMBELAJARAN</a>
                <span class="text-outline">/</span>
                <span class="text-on-surface font-bold uppercase">MODUL {{ $modul['kode'] }}</span>
            </nav>
        </div>
    </div>

    {{-- ==================== MODULE HERO ==================== --}}
    <section class="w-full border-b-[3px] border-on-background bg-surface-container-low relative overflow-hidden">
        <div
            class="absolute inset-0 opacity-[0.06] pointer-events-none bg-[radial-gradient(#1c1b1b_1.5px,transparent_1.5px)] [background-size:20px_20px]">
        </div>
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-lg">
                <div class="max-w-3xl">
                    <div
                        class="inline-flex items-center gap-space-xs px-3 py-1 bg-primary-container text-on-surface border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] font-label-sm text-label-sm uppercase mb-space-sm font-bold">
                        <span class="w-2 h-2 bg-on-background"></span>
                        MODULE DOSSIER // {{ $modul['kode'] }}
                    </div>

                    <div class="flex items-start gap-space-md">
                        <div
                            class="w-16 h-16 md:w-20 md:h-20 bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                            <span
                                class="material-symbols-outlined text-primary text-[36px] md:text-[44px]">{{ $modul['icon'] }}</span>
                        </div>
                        <div>
                            <h1
                                class="font-headline-xl text-headline-xl-mobile md:text-headline-xl uppercase tracking-tighter text-on-surface leading-none mb-space-xs">
                                {{ $modul['kode'] }}
                                <span
                                    class="bg-secondary-container px-2 border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">PAI</span>
                            </h1>
                            <p class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                                {{ $modul['judul'] }}
                            </p>
                        </div>
                    </div>

                    <p class="font-body-lg text-body-lg text-on-surface-variant mt-space-md">
                        {{ $modul['deskripsi'] }}
                    </p>

                    <div class="flex flex-wrap gap-2 mt-space-md">
                        <span
                            class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                            {{ $modul['kelas'] }}
                        </span>
                        <span
                            class="font-label-sm text-label-sm uppercase px-3 py-1 bg-tertiary-fixed text-on-tertiary-fixed border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                            {{ $modul['jenjang'] }}
                        </span>
                        <span
                            class="font-label-sm text-label-sm uppercase px-3 py-1 bg-secondary-container border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                            {{ $modul['kategori'] }}
                        </span>
                        <span
                            class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] font-bold">
                            {{ $modul['level'] }}
                        </span>
                    </div>
                </div>

                {{-- ==================== SPEC PANEL ==================== --}}
                <div
                    class="shrink-0 w-full lg:w-[380px] bg-surface border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b]">
                    <div
                        class="px-space-md py-space-xs bg-inverse-surface border-b-[3px] border-on-background flex items-center justify-between">
                        <span class="font-label-sm text-label-sm uppercase text-inverse-on-surface font-bold tracking-wider">
                            MODULE SPEC
                        </span>
                        <div class="flex gap-1.5">
                            <span class="w-2.5 h-2.5 bg-error border border-on-background"></span>
                            <span class="w-2.5 h-2.5 bg-secondary-container border border-on-background"></span>
                            <span class="w-2.5 h-2.5 bg-tertiary-container border border-on-background"></span>
                        </div>
                    </div>

                    <div class="p-space-md grid grid-cols-2 gap-2">
                        @foreach ($modul['statistik'] as $stat)
                            @php
                                $warna = match ($stat['warna']) {
                                    'primary-container' => 'bg-primary-container',
                                    'secondary-container' => 'bg-secondary-container',
                                    'tertiary-fixed' => 'bg-tertiary-fixed',
                                    default => 'bg-surface-container',
                                };
                            @endphp
                            <div class="{{ $warna }} border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] p-space-sm">
                                <span
                                    class="font-headline-md text-headline-md font-bold text-on-surface block leading-none">
                                    {{ $stat['nilai'] }}
                                </span>
                                <span
                                    class="font-label-sm text-label-sm uppercase text-on-surface-variant font-bold block mt-1">
                                    {{ $stat['label'] }}
                                </span>
                            </div>
                        @endforeach
                    </div>

                    <div
                        class="px-space-md py-space-sm border-t-[2px] border-on-background bg-surface-container-low">
                        <span class="font-label-sm text-label-sm uppercase text-on-surface-variant font-bold block mb-2">
                            TOPIC KEYWORDS
                        </span>
                        <div class="flex flex-wrap gap-1.5">
                            @foreach ($modul['kunci'] as $index => $kunci)
                                <span
                                    class="font-code-inline text-code-inline px-2 py-0.5 bg-surface-container-lowest border-[2px] border-on-surface-variant text-on-surface">
                                    {{ $kunci }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- ==================== RINGKASAN STRIP ==================== --}}
            <div
                class="mt-space-lg bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] p-space-md flex flex-col md:flex-row items-start md:items-center gap-space-md">
                <span
                    class="font-label-sm text-label-sm uppercase font-bold text-primary shrink-0 md:border-r-[2px] md:border-on-background md:pr-space-md">
                    RINGKASAN MODUL
                </span>
                <p class="font-body-md text-body-md text-on-surface">
                    {{ $modul['ringkasan'] }}
                </p>
            </div>
        </div>
    </section>

    {{-- ==================== BODY: TOC + CONTENT ==================== --}}
    <div
        class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">

        {{-- ==================== DAFTAR ISI (STICKY) ==================== --}}
        <aside class="lg:col-span-3 lg:sticky lg:top-24 order-2 lg:order-1">
            <nav aria-label="Daftar Isi Modul"
                class="bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b]">
                <div
                    class="px-space-md py-space-xs bg-secondary-container border-b-[3px] border-on-background flex items-center justify-between">
                    <span class="font-label-md text-label-md uppercase font-bold text-on-surface flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">format_list_bulleted</span>
                        DAFTAR ISI
                    </span>
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">10 BAB</span>
                </div>

                <div class="p-space-sm flex flex-col gap-space-md">
                    @foreach ($modul['semester'] as $semester)
                        @php $semesterIndex = $loop->iteration; @endphp
                        <div>
                            <div
                                class="font-label-sm text-label-sm uppercase text-on-surface font-bold mb-2 flex items-center gap-1.5">
                                <span
                                    class="w-2.5 h-2.5 {{ $semesterIndex === 1 ? 'bg-primary-container' : 'bg-secondary-container' }} border border-on-background"></span>
                                {{ $semester['nama'] }} — {{ $semester['label'] }}
                            </div>
                            <ul class="flex flex-col gap-1">
                                @foreach ($semester['bab'] as $bab)
                                    <li>
                                        <a class="toc-link group flex items-start gap-2 px-2 py-1.5 border-[2px] border-transparent hover:border-on-background hover:bg-surface-container transition-all"
                                            data-bab="bab-{{ $bab['nomor'] }}"
                                            href="#bab-{{ $bab['nomor'] }}">
                                            <span
                                                class="font-code-inline text-code-inline font-bold text-primary group-hover:text-primary shrink-0 min-w-[26px]">
                                                {{ str_pad($bab['nomor'], 2, '0', STR_PAD_LEFT) }}
                                            </span>
                                            <span
                                                class="font-body-sm text-body-sm text-on-surface-variant group-hover:text-on-surface leading-snug line-clamp-2">
                                                {{ \Illuminate\Support\Str::limit($bab['judul'], 46) }}
                                            </span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>

                <div class="p-space-sm border-t-[3px] border-on-background bg-surface-container-low">
                    <a class="w-full font-label-sm text-label-sm uppercase font-bold text-center px-3 py-2 bg-surface border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] hover:bg-secondary-container active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-1"
                        data-path="pembelajaran" href="{{ route('pembelajaran') }}">
                        <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                        KEMBALI KE DAFTAR
                    </a>
                </div>
            </nav>
        </aside>

        {{-- ==================== RANGKUMAN MATERI ==================== --}}
        <div class="lg:col-span-9 order-1 lg:order-2 flex flex-col gap-space-xl">

            @foreach ($modul['semester'] as $semester)
                @php
                    $semesterIndex = $loop->iteration;
                    $accent = $semesterIndex === 1 ? 'bg-primary-container' : 'bg-secondary-container';
                    $nomorBox = $semesterIndex === 1 ? 'bg-primary' : 'bg-secondary';
                @endphp

                <section class="flex flex-col gap-space-lg">

                    {{-- ==================== SEMESTER HEADER ==================== --}}
                    <div
                        class="border-[3px] border-on-background shadow-[5px_5px_0px_#1c1b1b] overflow-hidden">
                        <div
                            class="px-space-md py-space-sm {{ $accent }} border-b-[3px] border-on-background flex flex-wrap items-center justify-between gap-2">
                            <h2
                                class="font-headline-md text-headline-md uppercase text-on-surface font-bold flex items-center gap-2">
                                <span
                                    class="w-9 h-9 {{ $nomorBox }} border-[3px] border-on-background shadow-[2px_2px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-[20px] text-on-primary">calendar_month</span>
                                </span>
                                {{ $semester['nama'] }}
                            </h2>
                            <span
                                class="font-headline-sm text-label-lg uppercase bg-surface-container-lowest border-[2px] border-on-background shadow-[3px_3px_0px_#1c1b1b] px-3 py-1">
                                {{ $semester['label'] }}
                            </span>
                        </div>
                        <div class="bg-surface-container-lowest p-space-md">
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                {{ $semester['deskripsi'] }}
                            </p>
                        </div>
                    </div>

                    {{-- ==================== BAB LIST ==================== --}}
                    <div class="flex flex-col gap-space-lg">
                        @foreach ($semester['bab'] as $bab)
                            <article id="bab-{{ $bab['nomor'] }}"
                                class="bab-item scroll-mt-28 bg-surface-container-lowest border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] flex flex-col transition-shadow">

                                {{-- Bab head --}}
                                <div
                                    class="px-space-md py-space-sm {{ $accent }} border-b-[3px] border-on-background flex flex-wrap items-center justify-between gap-2">
                                    <div class="flex items-center gap-space-sm">
                                        <span
                                            class="font-headline-sm text-headline-sm font-bold text-on-surface bg-surface-container-lowest border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] px-3 py-1 leading-none">
                                            BAB {{ str_pad($bab['nomor'], 2, '0', STR_PAD_LEFT) }}
                                        </span>
                                        <span
                                            class="font-code-inline text-code-inline uppercase text-on-surface-variant font-bold">
                                            {{ $semester['nama'] }} // {{ $semester['label'] }}
                                        </span>
                                    </div>
                                    <a class="font-label-sm text-label-sm uppercase text-on-surface bg-surface-container-lowest border-[2px] border-on-background shadow-[2px_2px_0px_#1c1b1b] px-2 py-1 hover:bg-secondary-container transition-all flex items-center gap-1"
                                        href="#modul-top">
                                        <span class="material-symbols-outlined text-[14px]">top</span>
                                        ATAS
                                    </a>
                                </div>

                                <div class="p-space-md md:p-space-lg flex flex-col gap-space-md">

                                    <h3 class="font-headline-md text-headline-md uppercase text-on-surface leading-tight">
                                        {{ $bab['judul'] }}
                                    </h3>

                                    @if (count($bab['dasar_hukum']) > 0)
                                        <div class="border-[2px] border-on-background bg-surface-container-low">
                                            <div
                                                class="px-space-sm py-space-xs border-b-[2px] border-on-background bg-surface-container flex items-center justify-between">
                                                <span
                                                    class="font-label-sm text-label-sm uppercase text-on-surface font-bold flex items-center gap-1.5">
                                                    <span class="material-symbols-outlined text-[16px]">gavel</span>
                                                    DASAR HUKUM
                                                </span>
                                                <span
                                                    class="font-code-inline text-code-inline text-on-surface-variant">
                                                    {{ count($bab['dasar_hukum']) }} REF
                                                </span>
                                            </div>
                                            <ul class="p-space-sm flex flex-col gap-1.5">
                                                @foreach ($bab['dasar_hukum'] as $ref)
                                                    <li
                                                        class="font-code-inline text-code-inline text-on-surface flex items-start gap-2">
                                                        <span class="text-primary font-bold shrink-0">▸</span>
                                                        <span>{{ $ref }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div>
                                        <div
                                            class="font-label-sm text-label-sm uppercase text-primary font-bold flex items-center gap-1.5 mb-2">
                                            <span class="material-symbols-outlined text-[16px]">checklist</span>
                                            INTI MATERI
                                        </div>
                                        <ul class="flex flex-col gap-2">
                                            @foreach ($bab['inti'] as $poin)
                                                <li
                                                    class="flex items-start gap-2 p-space-sm bg-surface-container-low border-[2px] border-on-background border-l-[5px] border-l-primary hover:bg-surface-container transition-colors">
                                                    <span
                                                        class="font-label-sm text-label-sm uppercase font-bold text-primary shrink-0 mt-0.5">
                                                        ›
                                                    </span>
                                                    <span class="font-body-sm text-body-sm text-on-surface">
                                                        {{ $poin }}
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                                <div
                                    class="px-space-md py-space-sm border-t-[2px] border-on-background bg-surface-container-low flex flex-wrap items-center justify-between gap-2">
                                    <span
                                        class="font-label-sm text-label-sm uppercase text-on-surface-variant">
                                        {{ count($bab['inti']) }} POIN INTI
                                        @if (count($bab['dasar_hukum']) > 0)
                                            • {{ count($bab['dasar_hukum']) }} DASAR HUKUM
                                        @endif
                                    </span>
                                    <span class="font-code-inline text-code-inline text-on-surface-variant">
                                        REF: {{ $modul['kode'] }}-B{{ str_pad($bab['nomor'], 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            @endforeach

            {{-- ==================== NEXT STEP / CLOSING ==================== --}}
            <section
                class="bg-surface border-[4px] border-on-background shadow-[8px_8px_0px_#1c1b1b] p-space-md md:p-space-lg flex flex-col md:flex-row items-center justify-between gap-space-lg">
                <div class="flex items-start gap-space-md">
                    <div
                        class="w-14 h-14 bg-secondary-container border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[32px] text-on-surface">task_alt</span>
                    </div>
                    <div>
                        <div class="font-label-sm text-label-sm text-primary font-bold uppercase tracking-wider">
                            RANGKUMAN SELESAI
                        </div>
                        <h4 class="font-headline-sm text-headline-sm uppercase text-on-surface font-bold">
                            LANJUTKAN BELAJAR ATAU KEMBALI KE ARSIP
                        </h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant max-w-xl">
                            Modul ini adalah rangkuman materi ringkas. Kembalilah ke halaman pembelajaran untuk
                            membuka mata pelajaran lain dalam kurikulum yang sama.
                        </p>
                    </div>
                </div>
                <a class="w-full md:w-auto shrink-0 font-headline-sm text-label-lg uppercase bg-secondary-container text-on-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] px-6 py-4 hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[6px_6px_0px_#1c1b1b] active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center justify-center gap-space-xs text-center"
                    data-path="pembelajaran" href="{{ route('pembelajaran') }}">
                    <span class="material-symbols-outlined text-[20px]">library_books</span>
                    BUKA MAT PELAJARAN LAIN →
                </a>
            </section>

            {{-- ==================== TERMINAL META STRIP ==================== --}}
            <div class="bg-inverse-surface text-inverse-on-surface border-[3px] border-on-background shadow-[4px_4px_0px_#1c1b1b] font-label-sm text-label-sm">
                <div
                    class="flex items-center justify-between px-space-md py-space-xs border-b border-surface-variant">
                    <span class="text-secondary-container">modul/{{ $modul['slug'] }}.md</span>
                    <div class="flex gap-1.5">
                        <span class="w-2.5 h-2.5 bg-error"></span>
                        <span class="w-2.5 h-2.5 bg-secondary-container"></span>
                        <span class="w-2.5 h-2.5 bg-tertiary-container"></span>
                    </div>
                </div>
                <pre class="px-space-md py-space-sm font-code-inline text-code-inline leading-relaxed overflow-x-auto"><code><span class="text-outline-variant">// document ref</span>
DOC_REF : <span class="text-primary-container">MOD-{{ $modul['kode'] }}-10</span>
LEVEL   : <span class="text-secondary-fixed-dim">{{ $modul['kelas'] }}</span>
SEMESTER : <span class="text-tertiary-fixed-dim">01 + 02</span>
BAB      : <span class="text-inverse-primary">10</span>
STATUS   : <span class="text-tertiary-fixed-dim">COMPLETE</span></code></pre>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // ================= SCROLL SPY DAFTAR ISI =================
        document.addEventListener('DOMContentLoaded', () => {
            const links = Array.from(document.querySelectorAll('.toc-link'));
            const sections = links
                .map(link => document.getElementById(link.dataset.bab))
                .filter(Boolean);

            if (!sections.length) return;

            const activate = id => {
                links.forEach(link => {
                    const isActive = link.dataset.bab === id;
                    link.classList.toggle('bg-secondary-container', isActive);
                    link.classList.toggle('border-on-background', isActive);
                    link.classList.toggle('shadow-[2px_2px_0px_#1c1b1b]', isActive);
                });
            };

            activate(sections[0].id);

            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) activate(entry.target.id);
                });
            }, {
                rootMargin: '-25% 0px -65% 0px',
                threshold: 0
            });

            sections.forEach(section => observer.observe(section));
        });
    </script>
@endsection