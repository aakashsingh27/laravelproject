@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="glass-panel rounded-5 px-3 px-md-4 px-xl-5 py-3 py-md-4 mb-4 mb-lg-5">
        <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3">
            <div>
                <div class="section-label mb-2">Curated careers</div>
                <a href="#" class="text-decoration-none text-white font-display fs-3 fw-bold">
                    OrbitHire
                </a>
            </div>
            <div class="d-flex flex-column flex-sm-row gap-2">
                <a href="#" class="btn btn-soft rounded-pill px-4">For employers</a>
                <a href="#" class="btn btn-accent rounded-pill px-4">Post a job</a>
            </div>
        </div>
    </section>

    <section class="mb-4 mb-lg-5">
        <div class="row align-items-center g-4 g-xl-5">
            <div class="col-xl-7">
                <div class="pe-xl-4">
                    <div class="section-label mb-3">Aesthetic job portal</div>
                    <h1 class="display-3 fw-bold mb-3">
                        Find work that fits your pace, taste, and ambition.
                    </h1>
                    <p class="fs-5 text-muted-custom mb-4">
                        A warm, editorial-style space for designers, developers, marketers, and operators to discover
                        meaningful roles at thoughtful companies.
                    </p>

                    <div class="glass-panel search-panel p-2 p-md-3 mb-4">
                        <div class="row g-2 align-items-center">
                            <div class="col-lg-5">
                                <div class="d-flex align-items-center rounded-4 px-3 py-2 bg-panel">
                                    <span class="me-2 text-muted-custom">Role</span>
                                    <input class="form-control input-clean text-white" type="text" value="Product Designer">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="d-flex align-items-center rounded-4 px-3 py-2 bg-panel">
                                    <span class="me-2 text-muted-custom">City</span>
                                    <input class="form-control input-clean text-white" type="text" value="Remote or Bangalore">
                                </div>
                            </div>
                            <div class="col-lg-3 d-grid">
                                <button class="btn btn-accent rounded-4 py-3">Search jobs</button>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge rounded-pill badge-soft px-3 py-2">Design systems</span>
                        <span class="badge rounded-pill badge-soft px-3 py-2">Frontend engineering</span>
                        <span class="badge rounded-pill badge-soft px-3 py-2">Growth marketing</span>
                        <span class="badge rounded-pill badge-soft px-3 py-2">Product strategy</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="hero-orb soft-card position-relative p-4 p-md-5">
                    <div class="floating-pill rounded-pill px-3 py-2 d-inline-flex align-items-center gap-2 mb-4">
                        <span class="icon-dot bg-warning"></span>
                        <span>2,400+ thoughtful companies hiring</span>
                    </div>

                    <div class="position-relative">
                        <p class="text-uppercase small opacity-75 mb-2">Featured match</p>
                        <h2 class="fw-bold mb-3">Senior UX Designer</h2>
                        <p class="mb-4 opacity-75">
                            Join a climate-tech team building elegant tools for modern cities. Remote-first, 4-day work
                            week, and a product culture that values craft.
                        </p>

                        <div class="row g-3">
                            <div class="col-6">
                                <div class="floating-pill rounded-4 p-3">
                                    <div class="small opacity-75">Salary</div>
                                    <div class="fs-5 fw-semibold">$92k - $120k</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="floating-pill rounded-4 p-3">
                                    <div class="small opacity-75">Work mode</div>
                                    <div class="fs-5 fw-semibold">Remote</div>
                                </div>
                            </div>
                        </div>

                        <div class="floating-pill rounded-4 p-3 mt-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="small opacity-75">Response rate</div>
                                    <div class="fs-5 fw-semibold">96% within 5 days</div>
                                </div>
                                <span class="badge rounded-pill text-bg-light">Verified team</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-4 mb-lg-5">
        <div class="row g-3 g-lg-4">
            <div class="col-6 col-xl-3">
                <div class="soft-card metric-card h-100 p-4">
                    <div class="section-label mb-2">Open roles</div>
                    <div class="font-display fs-1 fw-bold">18k</div>
                    <p class="text-muted-custom mb-0">Fresh listings across product, engineering, and brand.</p>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="soft-card metric-card h-100 p-4">
                    <div class="section-label mb-2">Remote first</div>
                    <div class="font-display fs-1 fw-bold">64%</div>
                    <p class="text-muted-custom mb-0">Flexible teams with async-friendly hiring pipelines.</p>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="soft-card metric-card h-100 p-4">
                    <div class="section-label mb-2">Avg. reply</div>
                    <div class="font-display fs-1 fw-bold">4.2d</div>
                    <p class="text-muted-custom mb-0">Fast response times from companies that respect applicants.</p>
                </div>
            </div>
            <div class="col-6 col-xl-3">
                <div class="soft-card metric-card h-100 p-4">
                    <div class="section-label mb-2">New today</div>
                    <div class="font-display fs-1 fw-bold">327</div>
                    <p class="text-muted-custom mb-0">Curated opportunities updated every morning.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-4 mb-lg-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
            <div>
                <div class="section-label mb-2">Featured opportunities</div>
                <h2 class="fw-bold mb-0">Roles with strong teams and clear craft standards</h2>
            </div>
            <a href="#" class="btn btn-soft rounded-pill px-4">Explore all jobs</a>
        </div>

        <div class="row g-3 g-lg-4">
            <div class="col-lg-4">
                <div class="soft-card job-card h-100 p-4">
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <div>
                            <span class="badge rounded-pill badge-soft px-3 py-2 mb-3">Design</span>
                            <h3 class="h4 fw-bold mb-1">Brand Designer</h3>
                            <p class="text-muted-custom mb-0">Northstar Studio</p>
                        </div>
                        <span class="brand-chip rounded-pill px-3 py-2 small">Remote</span>
                    </div>
                    <p class="text-muted-custom">
                        Shape a bold visual identity across campaigns, web, and motion for a culture-first consumer
                        brand.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <strong>$70k - $88k</strong>
                        <a href="#" class="text-decoration-none fw-semibold text-info">View role</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="soft-card job-card h-100 p-4">
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <div>
                            <span class="badge rounded-pill badge-soft px-3 py-2 mb-3">Engineering</span>
                            <h3 class="h4 fw-bold mb-1">Frontend Engineer</h3>
                            <p class="text-muted-custom mb-0">Loom & Logic</p>
                        </div>
                        <span class="brand-chip rounded-pill px-3 py-2 small">Hybrid</span>
                    </div>
                    <p class="text-muted-custom">
                        Build polished interfaces for an AI-assisted research platform with a strong appetite for UI
                        craft.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <strong>$95k - $132k</strong>
                        <a href="#" class="text-decoration-none fw-semibold text-info">View role</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="soft-card job-card h-100 p-4">
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <div>
                            <span class="badge rounded-pill badge-soft px-3 py-2 mb-3">Marketing</span>
                            <h3 class="h4 fw-bold mb-1">Growth Lead</h3>
                            <p class="text-muted-custom mb-0">Fern Health</p>
                        </div>
                        <span class="brand-chip rounded-pill px-3 py-2 small">On-site</span>
                    </div>
                    <p class="text-muted-custom">
                        Own acquisition strategy for a modern wellness company blending editorial storytelling and
                        performance.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <strong>$82k - $108k</strong>
                        <a href="#" class="text-decoration-none fw-semibold text-info">View role</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-4 mb-lg-5">
        <div class="row g-3 g-lg-4">
            <div class="col-lg-7">
                <div class="soft-card insight-card h-100 p-4 p-lg-5">
                    <div class="section-label mb-2">Why it feels different</div>
                    <h2 class="fw-bold mb-3">A job board designed like a magazine, filtered like a recruiter.</h2>
                    <p class="text-muted-custom mb-4">
                        Every company profile highlights work style, response habits, salary clarity, and team values so
                        candidates can judge fit before they apply.
                    </p>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="rounded-4 p-3" style="background: var(--accent-soft); border: 1px solid var(--line);">
                                <div class="fw-semibold mb-1">Transparent salaries</div>
                                <div class="text-muted-custom small">Fewer vague listings, more honest conversations.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rounded-4 p-3" style="background: var(--secondary-soft); border: 1px solid var(--line);">
                                <div class="fw-semibold mb-1">Culture snapshots</div>
                                <div class="text-muted-custom small">Quick cues on pace, rituals, and decision style.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="soft-card company-card h-100 p-4 p-lg-5">
                    <div class="section-label mb-2">Hiring now</div>
                    <h2 class="fw-bold mb-4">Loved by modern teams</h2>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="brand-chip rounded-pill px-3 py-2">Nova Labs</span>
                        <span class="brand-chip rounded-pill px-3 py-2">Arc Studio</span>
                        <span class="brand-chip rounded-pill px-3 py-2">Fieldnote</span>
                        <span class="brand-chip rounded-pill px-3 py-2">Morrow</span>
                        <span class="brand-chip rounded-pill px-3 py-2">Velvet Cloud</span>
                        <span class="brand-chip rounded-pill px-3 py-2">Harbor AI</span>
                    </div>
                    <a href="#" class="btn btn-accent rounded-pill px-4">Create your profile</a>
                </div>
            </div>
        </div>
    </section>
@endsection
