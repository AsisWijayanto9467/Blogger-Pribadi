<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <title>@yield('title', 'VEKTOR RPL.DEV - Portal Pembelajaran RPL')</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&amp;family=Space+Grotesk:wght@300..700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main> :first-child {
                margin-top: 0 !important;
            }

            main> :last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    @yield('style')
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "inverse-on-surface": "#f3f0ef",
                        "on-secondary-fixed": "#251a00",
                        "on-tertiary-fixed-variant": "#004b6f",
                        "on-surface-variant": "#584235",
                        "on-background": "#1c1b1b",
                        "tertiary-fixed-dim": "#8aceff",
                        "surface-variant": "#e5e2e1",
                        "tertiary-container": "#57a8dd",
                        error: "#ba1a1a",
                        "error-container": "#ffdad6",
                        "inverse-surface": "#313030",
                        "on-primary-fixed-variant": "#753400",
                        "on-primary-container": "#5c2800",
                        "primary-container": "#ff7a00",
                        "inverse-primary": "#ffb68b",
                        tertiary: "#006491",
                        "on-surface": "#1c1b1b",
                        outline: "#8c7263",
                        "surface-bright": "#fcf9f8",
                        "on-error": "#ffffff",
                        "surface-container-high": "#ebe7e7",
                        "surface-container-highest": "#e5e2e1",
                        "primary-fixed-dim": "#ffb68b",
                        "on-primary-fixed": "#321200",
                        "outline-variant": "#e0c0af",
                        "on-tertiary-container": "#003b58",
                        surface: "#fcf9f8",
                        "surface-container-lowest": "#ffffff",
                        "surface-tint": "#994700",
                        "on-secondary-container": "#765900",
                        "secondary-fixed": "#ffdf9b",
                        "on-tertiary-fixed": "#001e2f",
                        "primary-fixed": "#ffdbc8",
                        "secondary-container": "#ffd167",
                        background: "#fcf9f8",
                        "surface-container": "#f0edec",
                        "surface-container-low": "#f6f3f2",
                        primary: "#994700",
                        "tertiary-fixed": "#c9e6ff",
                        "on-tertiary": "#ffffff",
                        "on-secondary-fixed-variant": "#5b4300",
                        "secondary-fixed-dim": "#edc157",
                        "on-primary": "#ffffff",
                        "surface-dim": "#dcd9d9",
                        "on-secondary": "#ffffff",
                        "on-error-container": "#93000a",
                        secondary: "#785a00",
                    },
                    borderRadius: {
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px",
                    },
                    spacing: {
                        "space-md": "1rem",
                        "gutter-mobile": "1rem",
                        "space-lg": "1.5rem",
                        "space-sm": "0.5rem",
                        "space-xl": "2.5rem",
                        "space-xs": "0.25rem",
                        margin: "3rem",
                        "margin-mobile": "1.25rem",
                        gutter: "1.5rem",
                    },
                    fontFamily: {
                        "body-md": ["DM Sans"],
                        "headline-lg-mobile": ["Space Grotesk"],
                        "headline-xl": ["Space Grotesk"],
                        "label-lg": ["JetBrains Mono"],
                        "headline-lg": ["Space Grotesk"],
                        "headline-md": ["Space Grotesk"],
                        "headline-xl-mobile": ["Space Grotesk"],
                        "body-lg": ["DM Sans"],
                        "headline-sm": ["Space Grotesk"],
                        "label-md": ["JetBrains Mono"],
                        "code-inline": ["JetBrains Mono"],
                        "label-sm": ["JetBrains Mono"],
                        "body-sm": ["DM Sans"],
                    },
                    fontSize: {
                        "body-md": [
                            "16px",
                            {
                                lineHeight: "24px",
                                letterSpacing: "0em",
                                fontWeight: "400",
                            },
                        ],
                        "headline-lg-mobile": [
                            "28px",
                            {
                                lineHeight: "36px",
                                letterSpacing: "-0.01em",
                                fontWeight: "700",
                            },
                        ],
                        "headline-xl": [
                            "56px",
                            {
                                lineHeight: "64px",
                                letterSpacing: "-0.03em",
                                fontWeight: "700",
                            },
                        ],
                        "label-lg": [
                            "14px",
                            {
                                lineHeight: "20px",
                                letterSpacing: "0.04em",
                                fontWeight: "600",
                            },
                        ],
                        "headline-lg": [
                            "40px",
                            {
                                lineHeight: "48px",
                                letterSpacing: "-0.02em",
                                fontWeight: "700",
                            },
                        ],
                        "headline-md": [
                            "28px",
                            {
                                lineHeight: "36px",
                                letterSpacing: "-0.01em",
                                fontWeight: "600",
                            },
                        ],
                        "headline-xl-mobile": [
                            "36px",
                            {
                                lineHeight: "44px",
                                letterSpacing: "-0.02em",
                                fontWeight: "700",
                            },
                        ],
                        "body-lg": [
                            "18px",
                            {
                                lineHeight: "28px",
                                letterSpacing: "0em",
                                fontWeight: "400",
                            },
                        ],
                        "headline-sm": [
                            "22px",
                            {
                                lineHeight: "30px",
                                letterSpacing: "0em",
                                fontWeight: "600",
                            },
                        ],
                        "label-md": [
                            "12px",
                            {
                                lineHeight: "16px",
                                letterSpacing: "0.05em",
                                fontWeight: "500",
                            },
                        ],
                        "code-inline": [
                            "13px",
                            {
                                lineHeight: "18px",
                                letterSpacing: "0em",
                                fontWeight: "400",
                            },
                        ],
                        "label-sm": [
                            "11px",
                            {
                                lineHeight: "14px",
                                letterSpacing: "0.06em",
                                fontWeight: "500",
                            },
                        ],
                        "body-sm": [
                            "14px",
                            {
                                lineHeight: "20px",
                                letterSpacing: "0em",
                                fontWeight: "400",
                            },
                        ],
                    },
                },
            },
        };
    </script>
    @yield('script')
</head>

<body class="bg-surface font-body-md text-body-md text-on-surface antialiased">
    <header class="fixed top-0 left-0 w-full z-50 bg-surface border-b-[3px] border-on-background">
        <div
            class="h-20 max-w-[1360px] mx-auto px-margin-mobile md:px-margin flex items-center justify-between gap-space-md">
            <div class="flex items-center gap-space-sm">
                <img alt="Vektor RPL Dev Logo" class="h-8 w-auto object-contain"
                    src="https://lh3.googleusercontent.com/aida/AEtjO1XWwmQjULgse9YINI1nsn9HlXvPv_ZrnUTpIusfFc2Nl7MPGkYOyc8xGwakKGPV0RbbkkdhxRmtCDgxBFSp14BUV8Cie08axg0HjQp9PSDGmhC-6BHm5pPwcNvmo9vyP50IuWKG2KpsYaxdialtG1B-RH5BP6fRgnQ4tPhIDKctIgdUS-Z-qXOQ6JcI3dqIJ-osBoaflchjk7eac8DCm_mFCz_UgVGY0x1MHoa0kjv2gifMzjnvZL05hz8" />
                <a class="flex flex-col text-left" data-path="home" href="{{ route('home') }}">
                    <span class="font-headline-sm text-headline-sm uppercase tracking-tight text-on-surface">VEKTOR
                        RPL<span class="text-primary-container">.DEV</span></span>
                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-on-surface-variant">SMK
                        Vocational Engineering</span>
                </a>
            </div>

            {{-- ==================== HEADER NAV ==================== --}}
            <nav class="hidden lg:flex items-center gap-space-xs"
                data-active-classes="bg-secondary-container text-on-surface shadow-[2px_2px_0px_#1c1b1b]">

                <a aria-current="{{ request()->routeIs('home') ? 'page' : 'false' }}"
                    class="font-label-md text-label-md uppercase px-3 py-2 border-[2px] border-on-background transition-all
                        {{ request()->routeIs('home')
                            ? 'bg-secondary-container text-on-surface shadow-[2px_2px_0px_#1c1b1b]'
                            : 'bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }}"
                    data-path="home" href="{{ route('home') }}">HOME</a>

                <a aria-current="{{ request()->routeIs('pembelajaran', 'modul.*') ? 'page' : 'false' }}"
                    class="font-label-md text-label-md uppercase px-3 py-2 border-[2px] border-on-background transition-all
                        {{ request()->routeIs('pembelajaran', 'modul.*')
                            ? 'bg-secondary-container text-on-surface shadow-[2px_2px_0px_#1c1b1b]'
                            : 'bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }}"
                    data-path="pembelajaran" href="{{ route('pembelajaran') }}">PEMBELAJARAN</a>

                <a aria-current="{{ request()->routeIs('materi') ? 'page' : 'false' }}"
                    class="font-label-md text-label-md uppercase px-3 py-2 border-[2px] border-on-background transition-all
                        {{ request()->routeIs('materi')
                            ? 'bg-secondary-container text-on-surface shadow-[2px_2px_0px_#1c1b1b]'
                            : 'bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }}"
                    data-path="materi-atp" href="{{ route('materi') }}">MATERI ATP</a>

                <a aria-current="{{ request()->routeIs('tentang') ? 'page' : 'false' }}"
                    class="font-label-md text-label-md uppercase px-3 py-2 border-[2px] border-on-background transition-all
                        {{ request()->routeIs('tentang')
                            ? 'bg-secondary-container text-on-surface shadow-[2px_2px_0px_#1c1b1b]'
                            : 'bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface' }}"
                    data-path="tentang" href="{{ route('tentang') }}">TENTANG</a>
            </nav>

            <div class="flex items-center gap-space-sm">
                {{-- ==================== HEADER CONTACT BUTTON ==================== --}}
                <a aria-current="{{ request()->routeIs('contact') ? 'page' : 'false' }}"
                    class="font-headline-sm text-label-lg uppercase border-[3px] border-on-background shadow-[3px_3px_0px_#1c1b1b] px-4 py-2
                        {{ request()->routeIs('contact')
                            ? 'bg-secondary-container text-on-surface translate-x-[2px] translate-y-[2px] shadow-none'
                            : 'bg-primary-container text-on-surface hover:translate-x-[-2px] hover:translate-y-[-2px] hover:shadow-[5px_5px_0px_#1c1b1b]' }}
                        active:translate-x-[2px] active:translate-y-[2px] active:shadow-none transition-all flex items-center gap-space-xs"
                    data-path="contact" href="{{ route('contact') }}">CONTACT ME →</a>

                <div
                    class="w-8 h-8 rounded-full bg-primary flex items-center justify-center border-[2px] border-on-background">
                    <span class="material-symbols-outlined text-on-primary text-[18px]">person</span>
                </div>
            </div>
        </div>
    </header>

    <main class="w-full pt-20 bg-surface min-h-[calc(100vh-200px)]">
        <div class="flex flex-col w-full">
            @yield('main')
        </div>
        <script>
            // Micro-interaction: Active ripple & interactive button sound trigger simulation
            document.addEventListener("DOMContentLoaded", () => {
                const buttons = document.querySelectorAll(
                    "button, a[data-path]",
                );
                buttons.forEach((btn) => {
                    btn.addEventListener("click", (e) => {
                        // Simple visual pulse on click for tactile neo-brutalist feel
                        btn.classList.add("scale-[0.98]");
                        setTimeout(() => {
                            btn.classList.remove("scale-[0.98]");
                        }, 120);
                    });
                });
            });
        </script>
    </main>

    <footer class="w-full border-t-[3px] border-on-background bg-surface-container-low relative overflow-hidden">
        <div
            class="absolute inset-0 opacity-[0.06] pointer-events-none bg-[radial-gradient(#1c1b1b_1px,transparent_1px)] [background-size:16px_16px]">
        </div>
        <div class="max-w-[1360px] mx-auto px-margin-mobile md:px-margin py-space-xl relative z-10">
            <div
                class="grid grid-cols-1 md:grid-cols-12 gap-space-lg items-start border-b-[2px] border-on-background pb-space-lg">
                <div class="md:col-span-4">
                    <div
                        class="font-label-lg text-label-lg font-bold text-on-surface uppercase mb-space-xs flex items-center gap-space-xs">
                        <span class="text-primary-container">&lt;/&gt;</span>
                        RPL LEARNING ARCHIVE
                    </div>
                    <p class="font-body-sm text-body-sm text-on-surface-variant max-w-sm">
                        Personal learning portal for RPL / PPLG student.
                        Documenting curriculum modules, code prototypes,
                        vocational standards, and technical artifacts.
                    </p>
                </div>

                {{-- ==================== FOOTER NAV ==================== --}}
                <div class="md:col-span-5 flex flex-wrap gap-2 items-center">

                    <a aria-current="{{ request()->routeIs('home') ? 'page' : 'false' }}"
                        class="font-label-sm text-label-sm uppercase px-3 py-1.5 border-[2px] border-on-background transition-colors shadow-[2px_2px_0px_#1c1b1b]
                            {{ request()->routeIs('home')
                                ? 'bg-secondary-container text-on-surface'
                                : 'bg-surface-container-lowest text-on-surface hover:bg-secondary-container' }}"
                        data-path="home" href="{{ route('home') }}">HOME</a>

                    <a aria-current="{{ request()->routeIs('pembelajaran', 'modul.*') ? 'page' : 'false' }}"
                        class="font-label-sm text-label-sm uppercase px-3 py-1.5 border-[2px] border-on-background transition-colors shadow-[2px_2px_0px_#1c1b1b]
                            {{ request()->routeIs('pembelajaran', 'modul.*')
                                ? 'bg-secondary-container text-on-surface'
                                : 'bg-surface-container-lowest text-on-surface hover:bg-secondary-container' }}"
                        data-path="pembelajaran" href="{{ route('pembelajaran') }}">PEMBELAJARAN</a>

                    <a aria-current="{{ request()->routeIs('materi') ? 'page' : 'false' }}"
                        class="font-label-sm text-label-sm uppercase px-3 py-1.5 border-[2px] border-on-background transition-colors shadow-[2px_2px_0px_#1c1b1b]
                            {{ request()->routeIs('materi')
                                ? 'bg-secondary-container text-on-surface'
                                : 'bg-surface-container-lowest text-on-surface hover:bg-secondary-container' }}"
                        data-path="materi-atp" href="{{ route('materi') }}">MATERI ATP</a>

                    <a aria-current="{{ request()->routeIs('tentang') ? 'page' : 'false' }}"
                        class="font-label-sm text-label-sm uppercase px-3 py-1.5 border-[2px] border-on-background transition-colors shadow-[2px_2px_0px_#1c1b1b]
                            {{ request()->routeIs('tentang')
                                ? 'bg-secondary-container text-on-surface'
                                : 'bg-surface-container-lowest text-on-surface hover:bg-secondary-container' }}"
                        data-path="tentang" href="{{ route('tentang') }}">TENTANG</a>

                    <a aria-current="{{ request()->routeIs('contact') ? 'page' : 'false' }}"
                        class="font-label-sm text-label-sm uppercase px-3 py-1.5 border-[2px] border-on-background transition-colors shadow-[2px_2px_0px_#1c1b1b]
                            {{ request()->routeIs('contact')
                                ? 'bg-secondary-container text-on-surface'
                                : 'bg-primary-container text-on-surface hover:bg-secondary-container' }}"
                        data-path="contact" href="{{ route('contact') }}">CONTACT ME</a>
                </div>

                <div class="md:col-span-3 flex flex-col md:items-end gap-2">
                    <span class="font-label-sm text-label-sm uppercase text-on-surface-variant">DEV CHANNELS</span>
                    <div class="flex flex-wrap gap-2">
                        <a class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background text-on-surface shadow-[2px_2px_0px_#1c1b1b] hover:bg-tertiary-fixed hover:text-on-surface transition-all"
                            href="#">WHATSAPP</a>
                        <a class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background text-on-surface shadow-[2px_2px_0px_#1c1b1b] hover:bg-tertiary-fixed hover:text-on-surface transition-all"
                            href="#">GITHUB</a>
                        <a class="font-label-sm text-label-sm uppercase px-3 py-1 bg-surface-container-lowest border-[2px] border-on-background text-on-surface shadow-[2px_2px_0px_#1c1b1b] hover:bg-tertiary-fixed hover:text-on-surface transition-all"
                            href="#">EMAIL</a>
                    </div>
                </div>
            </div>

            <div class="pt-space-md flex flex-col sm:flex-row items-center justify-between gap-space-sm">
                <div class="font-label-sm text-label-sm text-on-surface-variant text-center sm:text-left">
                    © 2026 Ahmad Fauzan • XII RPL 1. Built for learning,
                    documentation &amp; showcase.
                </div>
                <div class="font-code-inline text-code-inline text-on-surface-variant flex items-center gap-space-xs">
                    <span class="inline-block w-2 h-2 bg-primary-container border border-on-background"></span>SYSTEM
                    STATUS: STABLE
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
