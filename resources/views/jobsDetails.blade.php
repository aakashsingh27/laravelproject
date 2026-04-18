@extends('layouts.app')

@section('title', 'Jobs')

@section('content')

<div class="container-fluid">
    <div class="row g-4">

        <!-- LEFT JOB LIST (SCROLLABLE) -->
        <div class="col-lg-4">
            <div class="left-scroll">

                <!-- Search -->
                <div class="glass-panel p-3 mb-4">
                    <input type="text" class="form-control input-clean text-white"
                           placeholder="🔍 Search jobs...">
                </div>

                @php
                    $companies = ['Google','Microsoft','Amazon','Meta','Netflix','Adobe','Uber','Paytm','Flipkart','Swiggy'];
                @endphp

                @foreach($companies as $company)
                <div class="soft-card p-3 mb-3 job-item active-job">

                    <div class="d-flex gap-3">

                        <img 
                            src="https://ui-avatars.com/api/?name={{ urlencode($company) }}&background=0D8ABC&color=fff"
                            class="company-logo"
                        >

                        <div>
                            <h6 class="fw-bold mb-1 text-white">Backend Developer</h6>
                            <small class="text-muted-custom">{{ $company }} • Remote</small><br>
                            <small class="text-success">Actively hiring</small>
                        </div>

                    </div>

                </div>
                @endforeach

            </div>
        </div>

        <!-- RIGHT JOB DETAILS (STICKY) -->
        <div class="col-lg-8">
            <div class="job-details-wrapper">

                <div class="soft-card p-4 job-details">

                    <!-- HEADER -->
                    <div class="d-flex gap-3 mb-4">

                        <img 
                            src="https://ui-avatars.com/api/?name=Google&background=0D8ABC&color=fff"
                            class="company-logo-lg"
                        >

                        <div>
                            <h4 class="fw-bold mb-1">Backend Software Engineer</h4>
                            <p class="text-muted-custom mb-1">Google • Remote • India</p>
                            <small class="text-muted-custom">4 days ago • 100+ applicants</small>
                        </div>

                    </div>

                    <!-- TAGS -->
                    <div class="mb-4 d-flex flex-wrap gap-2">
                        <span class="badge bg-primary">$80k - $120k</span>
                        <span class="badge bg-secondary">Remote</span>
                        <span class="badge bg-info text-dark">Full-time</span>
                    </div>

                    <!-- ACTION BUTTONS -->
                    <div class="d-flex gap-2 mb-4">
                        <button class="btn btn-accent">Apply Now</button>
                        <button class="btn btn-soft">Save</button>
                    </div>

                    <!-- DESCRIPTION -->
                    <div class="mb-4">
                        <h5 class="fw-bold">About the job</h5>
                        <p class="text-muted-custom">
                            We are looking for a Backend Developer to build scalable APIs and systems.
                            You will work with modern technologies like Laravel, Node.js, and cloud services.
                        </p>
                    </div>

                    <!-- REQUIREMENTS -->
                    <div class="mb-4">
                        <h5 class="fw-bold">Requirements</h5>
                        <ul class="text-muted-custom">
                            <li>3+ years experience in backend development</li>
                            <li>Strong knowledge of Laravel / Node.js</li>
                            <li>Experience with MySQL & APIs</li>
                            <li>Good problem solving skills</li>
                        </ul>
                    </div>

                    <!-- COMPANY INFO -->
                    <div>
                        <h5 class="fw-bold">About Company</h5>
                        <p class="text-muted-custom">
                            Google is a global technology leader focused on improving the ways people connect
                            and access information.
                        </p>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

<style>

/* LEFT SIDE SCROLL */
.left-scroll {
    height: 90vh;
    overflow-y: auto;
    padding-right: 10px;
}

/* SCROLLBAR */
.left-scroll::-webkit-scrollbar {
    width: 6px;
}
.left-scroll::-webkit-scrollbar-thumb {
    background: #555;
    border-radius: 10px;
}

/* RIGHT SIDE FIXED */
.job-details-wrapper {
    position: sticky;
    top: 20px;
}

/* LOGOS */
.company-logo {
    width: 45px;
    height: 45px;
    border-radius: 10px;
}

.company-logo-lg {
    width: 60px;
    height: 60px;
    border-radius: 12px;
}

/* JOB LIST */
.job-item {
    cursor: pointer;
    transition: 0.3s;
}

.job-item:hover {
    background: rgba(255,255,255,0.05);
    transform: translateY(-3px);
}

.active-job {
    border: 1px solid #59d0ff;
}

/* MOBILE FIX */
@media (max-width: 992px) {

    .left-scroll {
        height: auto;
        overflow: visible;
    }

    .job-details-wrapper {
        position: static;
    }
}

</style>

@endsection