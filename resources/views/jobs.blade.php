@extends('layouts.app')

@section('title', 'Jobs')

@section('content')

<div class="container-fluid">
    <div class="row g-4">

        <!-- LEFT SIDEBAR (FIXED) -->
        <div class="col-lg-3">
            <div class="sidebar-fixed">

                <div class="soft-card p-4 mb-4 text-center">
                    <img src="https://i.pravatar.cc/100" class="rounded-circle mb-3" width="80">
                    <h5 class="fw-bold mb-1">Aakash Singh</h5>
                    <p class="text-muted-custom small mb-2">PHP Laravel Developer</p>
                    <span class="badge bg-success">Open to work</span>
                </div>

                <div class="soft-card p-3">
                    <div class="d-flex flex-column gap-3">
                        <a href="#" class="text-decoration-none text-white">📌 Job Preferences</a>
                        <a href="#" class="text-decoration-none text-white">📊 My Applications</a>
                        <a href="#" class="text-decoration-none text-white">💼 Saved Jobs</a>
                        <a href="#" class="text-decoration-none text-white">⚙️ Settings</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- RIGHT CONTENT (SCROLLABLE) -->
        <div class="col-lg-9">
            <div class="right-scroll">

                <!-- Search -->
                <div class="glass-panel p-3 mb-4">
                    <input type="text"
                           class="form-control input-clean text-white"
                           placeholder="🔍 Search jobs, skills, companies...">
                </div>

                <!-- JOB LIST -->
                @php
                    $companies = ['Google','Microsoft','Amazon','Meta','Netflix','Adobe','Uber','PayPal','Flipkart','Swiggy'];
                @endphp

                @foreach($companies as $company)
                <a href="{{ @route('jobDetails') }}" class="job-link">
                    <div class="soft-card p-4 mb-3 job-item">

                        <div class="d-flex justify-content-between align-items-center">

                            <!-- LEFT -->
                            <div class="d-flex gap-3 align-items-center">

                                <img 
                                    src="https://ui-avatars.com/api/?name={{ urlencode($company) }}&background=0D8ABC&color=fff"
                                    class="company-logo"
                                >

                                <div>
                                    <h5 class="fw-bold mb-1 text-white">Backend Developer</h5>

                                    <p class="mb-1 text-muted-custom">
                                        {{ $company }} • Remote
                                    </p>

                                    <small class="text-success">
                                        Actively hiring
                                    </small>
                                </div>

                            </div>

                            <!-- RIGHT -->
                            <div class="text-end">
                                <div class="fw-bold text-white">$80k - $120k</div>
                                <small class="text-muted-custom">2 days ago</small>
                            </div>

                        </div>

                    </div>
                </a>
                @endforeach

            </div>
        </div>

    </div>
</div>

<style>

/* FIXED SIDEBAR */
.sidebar-fixed {
    position: sticky;
    top: 20px;
}

/* RIGHT SIDE SCROLL */
.right-scroll {
    height: 90vh;
    overflow-y: auto;
    padding-right: 10px;
}

/* SMOOTH SCROLL */
.right-scroll::-webkit-scrollbar {
    width: 6px;
}
.right-scroll::-webkit-scrollbar-thumb {
    background: #555;
    border-radius: 10px;
}

/* Company Logo */
.company-logo {
    width: 50px;
    height: 50px;
    border-radius: 10px;
    object-fit: cover;
    box-shadow: 0 10px 20px rgba(0,0,0,0.3);
}

/* Job Card Hover */
.job-link {
    text-decoration: none;
    display: block;
}

.job-item {
    transition: 0.3s ease;
    cursor: pointer;
}

.job-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
    border: 1px solid rgba(89, 208, 255, 0.3);
}

/* MOBILE FIX */
@media (max-width: 768px) {

    .right-scroll {
        height: auto;
        overflow: visible;
    }

    .sidebar-fixed {
        position: relative;
    }

    .job-item .d-flex {
        flex-direction: column !important;
        gap: 10px;
    }
}

</style>

@endsection