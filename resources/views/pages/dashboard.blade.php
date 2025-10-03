@extends('layouts.student')

@section('student-content')
<div class="container py-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <img src="{{ asset('assets/images/emsi_logo.jpg') }}" alt="EMSI Logo" style="height: 240px;">
        </div>
    </div>
    <div class="row g-4">
        <!-- Modern Stat Card: Événements à venir -->
        <div class="col-md-6">
            <div class="stat-card-white d-flex flex-column align-items-center justify-content-center h-100">
                <div class="stat-icon mb-3" style="color: #007A3D; background: rgba(0,122,61,0.08);">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="stat-value" style="color: #007A3D;">{{ $eventsCount ?? 0 }}</div>
                <div class="stat-label mb-3" style="color: #007A3D;">Événements à venir</div>
                <a href="{{ route('evenements.index') }}" class="btn btn-success btn-lg w-75 fw-bold" style="background-color: #007A3D; border-color: #007A3D;">Voir les événements</a>
            </div>
        </div>
        <!-- Modern Stat Card: Clubs -->
        <div class="col-md-6">
            <div class="stat-card-white d-flex flex-column align-items-center justify-content-center h-100">
                <div class="stat-icon mb-3" style="color: #007A3D; background: rgba(0,122,61,0.08);">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-value" style="color: #007A3D;">{{ $clubsCount }}</div>
                <div class="stat-label mb-3" style="color: #007A3D;">Clubs</div>
                <a href="{{ route('clubs.index') }}" class="btn btn-success btn-lg w-75 fw-bold" style="background-color: #007A3D; border-color: #007A3D;">Voir les clubs</a>
            </div>
        </div>
    </div>
</div>

<style>
.stat-card-white {
    background: #fff;
    color: #007A3D;
    border-radius: 2rem;
    box-shadow: 0 4px 24px rgba(0, 122, 61, 0.10);
    padding: 2.5rem 1.5rem 2rem 1.5rem;
    min-height: 320px;
    text-align: center;
    border: 1.5px solid #e6e6e6;
    transition: box-shadow 0.2s, transform 0.2s;
}
.stat-card-white:hover {
    box-shadow: 0 8px 32px rgba(0, 122, 61, 0.18);
    transform: translateY(-4px) scale(1.02);
}
.stat-icon {
    font-size: 3.5rem;
    border-radius: 50%;
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.stat-value {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}
.stat-label {
    font-size: 1.25rem;
    font-weight: 500;
    letter-spacing: 0.5px;
}
.btn-success {
    background-color: #007A3D;
    border-color: #007A3D;
}
.btn-success:hover, .btn:hover {
    background-color: #005c2e;
    border-color: #005c2e;
}
</style>
@endsection 