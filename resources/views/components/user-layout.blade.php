{{-- User dashboard layout component with proper navbar offset --}}

@push('styles')
<style>
    /* Add padding to account for fixed navbar */
    .dashboard-container {
        padding-top: 100px;
        background-color: #212529; /* Dark background */
        color: #fff; /* Light text */
        min-height: 100vh;
    }
    
    @media (max-width: 768px) {
        .dashboard-container {
            padding-top: 80px;
        }
    }

    /* Card styling for dark theme */
    .dashboard-container .card {
        background-color: #2c3034;
        color: #fff;
        border: 1px solid #373b3e;
    }

    .dashboard-container .card-header {
        background-color: #343a40;
        border-bottom: 1px solid #373b3e;
    }

    .dashboard-container .list-group-item {
        background-color: #2c3034;
        color: #fff;
        border-color: #373b3e;
    }

    .dashboard-container .text-muted {
        color: #adb5bd !important;
    }

    .dashboard-container .bg-light {
        background-color: #343a40 !important;
    }

    .dashboard-container .btn-outline-secondary {
        color: #adb5bd;
        border-color: #6c757d;
    }

    .dashboard-container .btn-outline-primary {
        color: #0d6efd;
        border-color: #0d6efd;
    }

    .dashboard-container .table {
        color: #fff;
    }
    
    .dashboard-container .alert {
        background-color: #343a40;
        border-color: #373b3e;
    }
</style>
@endpush

<div class="dashboard-container">
    {{ $slot }}
</div> 