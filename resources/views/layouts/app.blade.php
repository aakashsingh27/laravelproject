<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', config('app.name', 'Laravel'))</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700;800&family=Space+Grotesk:wght@500;700&display=swap"
        rel="stylesheet"
    >
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous"
    >
    <style>
        :root {
            --page-bg: #090c14;
            --page-bg-deep: #05070d;
            --surface: rgba(14, 19, 31, 0.72);
            --surface-strong: rgba(15, 21, 35, 0.94);
            --surface-soft: rgba(22, 29, 46, 0.88);
            --ink: #f5f7fb;
            --muted: #95a0b8;
            --accent: #59d0ff;
            --accent-deep: #3f8cff;
            --accent-soft: rgba(89, 208, 255, 0.12);
            --secondary: #9b8cff;
            --secondary-soft: rgba(155, 140, 255, 0.14);
            --line: rgba(255, 255, 255, 0.09);
            --line-strong: rgba(255, 255, 255, 0.18);
            --shadow: 0 30px 80px rgba(0, 0, 0, 0.45);
        }

        body {
            min-height: 100vh;
            font-family: "DM Sans", sans-serif;
            color: var(--ink);
            background:
                radial-gradient(circle at top left, rgba(63, 140, 255, 0.24), transparent 26%),
                radial-gradient(circle at top right, rgba(155, 140, 255, 0.18), transparent 24%),
                radial-gradient(circle at bottom right, rgba(89, 208, 255, 0.14), transparent 24%),
                linear-gradient(180deg, #0a0f1b 0%, var(--page-bg) 52%, var(--page-bg-deep) 100%);
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .font-display {
            font-family: "Space Grotesk", sans-serif;
            letter-spacing: -0.03em;
        }

        .shell {
            position: relative;
        }

        .shell::before,
        .shell::after {
            position: fixed;
            z-index: 0;
            width: 18rem;
            height: 18rem;
            border-radius: 999px;
            content: "";
            filter: blur(8px);
            opacity: 0.7;
            pointer-events: none;
        }

        .shell::before {
            top: 5rem;
            left: -7rem;
            background: rgba(63, 140, 255, 0.16);
        }

        .shell::after {
            right: -6rem;
            bottom: 4rem;
            background: rgba(155, 140, 255, 0.14);
        }

        .glass-panel {
            position: relative;
            z-index: 1;
            background: var(--surface);
            backdrop-filter: blur(18px);
            border: 1px solid var(--line);
            box-shadow: var(--shadow);
        }

        .soft-card {
            background: var(--surface-strong);
            border: 1px solid var(--line);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.28);
        }

        .text-muted-custom {
            color: var(--muted);
        }

        .btn-accent {
            color: #fff;
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-deep) 100%);
            border: none;
            box-shadow: 0 16px 34px rgba(63, 140, 255, 0.28);
        }

        .btn-accent:hover,
        .btn-accent:focus {
            color: #fff;
            background: linear-gradient(135deg, #74dcff 0%, #527fff 100%);
        }

        .btn-soft {
            color: #dfe7ff;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid var(--line);
        }

        .btn-soft:hover,
        .btn-soft:focus {
            color: #fff;
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--line-strong);
        }

        .badge-soft {
            color: #d6d1ff;
            background: var(--secondary-soft);
        }

        .search-panel {
            border-radius: 1.75rem;
        }

        .metric-card,
        .job-card,
        .company-card,
        .insight-card {
            border-radius: 1.5rem;
        }

        .section-label {
            color: #7bc9ff;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
        }

        .hero-orb {
            width: 100%;
            min-height: 26rem;
            border-radius: 2rem;
            background:
                radial-gradient(circle at top, rgba(255, 255, 255, 0.16), transparent 34%),
                linear-gradient(160deg, #121a2f 0%, #1b315f 42%, #3f8cff 74%, #59d0ff 100%);
            color: #fff;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .hero-orb::before {
            position: absolute;
            inset: auto auto -4.5rem -3rem;
            width: 13rem;
            height: 13rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.08);
            content: "";
        }

        .hero-orb::after {
            position: absolute;
            top: 1.5rem;
            right: -3rem;
            width: 11rem;
            height: 11rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.1);
            content: "";
        }

        .floating-pill {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(12px);
        }

        .icon-dot {
            width: 0.7rem;
            height: 0.7rem;
            border-radius: 999px;
            display: inline-block;
        }

        .input-clean,
        .input-clean:focus {
            background: transparent;
            border: none;
            box-shadow: none;
        }

        .brand-chip {
            border: 1px solid var(--line);
            background: rgba(255, 255, 255, 0.04);
            color: #dce4ff;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 10;
            background: rgba(7, 10, 17, 0.72);
            backdrop-filter: blur(18px);
            border-bottom: 1px solid var(--line);
        }

        .brand-mark {
            width: 2.75rem;
            height: 2.75rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 1rem;
            background: linear-gradient(135deg, rgba(89, 208, 255, 0.18), rgba(155, 140, 255, 0.28));
            border: 1px solid rgba(255, 255, 255, 0.08);
            color: #fff;
            box-shadow: 0 16px 36px rgba(63, 140, 255, 0.18);
        }

        .nav-link-custom {
            color: var(--muted);
            text-decoration: none;
            font-weight: 500;
        }

        .nav-link-custom:hover,
        .nav-link-custom:focus {
            color: #fff;
        }

        .site-footer {
            position: relative;
            z-index: 1;
            border-top: 1px solid var(--line);
            background: rgba(5, 7, 13, 0.72);
        }

        .footer-link {
            color: var(--muted);
            text-decoration: none;
        }

        .footer-link:hover,
        .footer-link:focus {
            color: #fff;
        }

        .bg-panel {
            background: var(--surface-soft);
        }

        .form-control-dark,
        .form-control-dark:focus {
            color: #fff;
            background: transparent;
            border: none;
            box-shadow: none;
        }

        @media (max-width: 991.98px) {
            .hero-orb {
                min-height: 20rem;
            }
        }
        /* Placeholder white color */
        ::placeholder {
            color: #b8b4b4 !important;
            opacity: 1; /* full white */
        }

        /* For better browser support */
        ::-webkit-input-placeholder { color: #b8b4b4; }
        :-ms-input-placeholder { color: #b8b4b4; }
        ::placeholder { color: #b8b4b4; }


                /* Hover effect like real job portals */
        .job-item {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .job-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}
</style>
</head>
<body>
    <header class="site-header">
     <div class="container py-2">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
            
            <!-- Brand -->
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{@route('home')}}">
                <span class="brand-mark font-display fw-bold">OH</span>
                <div>
                    <div class="font-display fw-bold text-white">OrbitHire</div>
                    <small class="text-muted-custom d-none d-md-block">
                        Dark-mode careers for modern teams
                    </small>
                </div>
            </a>

            <!-- Toggle Button -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse mt-3 mt-lg-0" id="navbarContent">
                
                <!-- Links -->
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-4">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#">Discover</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="{{@route('jobPage')}}">Remote Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="#">Resources</a>
                    </li>

                    <!-- Buttons -->
                    <li class="nav-item mt-2 mt-lg-0">
                        <a href="#" class="btn btn-soft rounded-pill px-4 w-100 w-lg-auto">
                            Sign in
                        </a>
                    </li>
                    <li class="nav-item mt-2 mt-lg-0">
                        <a href="#" class="btn btn-accent rounded-pill px-4 w-100 w-lg-auto">
                            Join free
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
     </div>
</header>

    <main class="shell py-4 py-lg-5">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="site-footer mt-5">
        <div class="container py-4 py-lg-5">
            <div class="row g-4 align-items-start">
                <div class="col-lg-5">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <span class="brand-mark font-display fw-bold">OH</span>
                        <div>
                            <div class="font-display fs-4 fw-bold text-white">OrbitHire</div>
                            <div class="text-muted-custom">Curated workspaces, better hiring rhythm.</div>
                        </div>
                    </div>
                    <p class="text-muted-custom mb-0">
                        Discover polished roles, transparent teams, and hiring experiences that feel human from the first click.
                    </p>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="section-label mb-3">Explore</div>
                    <div class="d-flex flex-column gap-2">
                        <a href="#" class="footer-link">Design</a>
                        <a href="#" class="footer-link">Engineering</a>
                        <a href="#" class="footer-link">Marketing</a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="section-label mb-3">Company</div>
                    <div class="d-flex flex-column gap-2">
                        <a href="#" class="footer-link">About</a>
                        <a href="#" class="footer-link">Hiring stories</a>
                        <a href="#" class="footer-link">Contact</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="section-label mb-3">Weekly roles</div>
                    <div class="glass-panel rounded-4 p-2">
                        <div class="d-flex align-items-center">
                            <input class="form-control form-control-dark" type="email" placeholder="Enter email">
                            <button class="btn btn-accent rounded-3 px-3">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between gap-2 mt-4 pt-4 border-top" style="border-color: var(--line) !important;">
                <div class="text-muted-custom small">&copy; {{ date('Y') }} OrbitHire. Crafted for standout careers.</div>
                <div class="d-flex gap-3 small">
                    <a href="#" class="footer-link">Privacy</a>
                    <a href="#" class="footer-link">Terms</a>
                    <a href="#" class="footer-link">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"
    ></script>
</body>
</html>
