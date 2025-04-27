<div class="row g-4">
    @forelse($trainers ?? [] as $trainer)
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-0 shadow-sm card-hover text-center">
                <div class="position-relative overflow-hidden">
                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 220px;">
                        <i class="fas fa-user-tie fa-4x text-danger"></i>
                    </div>
                    <div class="position-absolute top-0 start-0 bg-danger text-white px-3 py-2 m-3 rounded-pill fw-bold">
                        {{ $trainer->experience_years ?? '5+' }} years
                    </div>
                </div>
                <div class="card-body p-4">
                    <h3 class="card-title h5 fw-bold mb-1">{{ $trainer->user->name ?? 'Trainer Name' }}</h3>
                    <p class="card-text text-danger mb-3 fw-bold">{{ $trainer->specialization ?? 'Fitness Expert' }}</p>
                    <p class="card-text text-muted mb-4">{{ isset($trainer->bio) ? Str::limit($trainer->bio, 100) : 'Expert trainer specializing in strength training, cardio, and nutrition guidance.' }}</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12 text-center">
            <div class="p-5 bg-light rounded-4">
                <i class="fas fa-user-slash fa-3x text-muted mb-3"></i>
                <h3 class="h5">No trainers available at the moment</h3>
                <p class="text-muted">Please check back soon to meet our fitness experts!</p>
            </div>
        </div>
    @endforelse
    
    @if((empty($trainers) || count($trainers) === 0) && !app()->environment('production'))
        <!-- Demo data for development (only shows when no trainers exist and not in production) -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-0 shadow-sm card-hover text-center">
                <div class="position-relative overflow-hidden">
                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 220px;">
                        <i class="fas fa-user-tie fa-4x text-danger"></i>
                    </div>
                    <div class="position-absolute top-0 start-0 bg-danger text-white px-3 py-2 m-3 rounded-pill fw-bold">
                        7+ years
                    </div>
                </div>
                <div class="card-body p-4">
                    <h3 class="card-title h5 fw-bold mb-1">Amit Sharma</h3>
                    <p class="card-text text-danger mb-3 fw-bold">Strength Training</p>
                    <p class="card-text text-muted mb-4">Specializes in bodybuilding and powerlifting techniques with a focus on proper form and progressive overload principles.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-0 shadow-sm card-hover text-center">
                <div class="position-relative overflow-hidden">
                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 220px;">
                        <i class="fas fa-user-tie fa-4x text-danger"></i>
                    </div>
                    <div class="position-absolute top-0 start-0 bg-danger text-white px-3 py-2 m-3 rounded-pill fw-bold">
                        5+ years
                    </div>
                </div>
                <div class="card-body p-4">
                    <h3 class="card-title h5 fw-bold mb-1">Priya Patel</h3>
                    <p class="card-text text-danger mb-3 fw-bold">Yoga & Pilates</p>
                    <p class="card-text text-muted mb-4">Certified yoga instructor with expertise in vinyasa, hatha, and restorative practices for all experience levels.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-0 shadow-sm card-hover text-center">
                <div class="position-relative overflow-hidden">
                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 220px;">
                        <i class="fas fa-user-tie fa-4x text-danger"></i>
                    </div>
                    <div class="position-absolute top-0 start-0 bg-danger text-white px-3 py-2 m-3 rounded-pill fw-bold">
                        10+ years
                    </div>
                </div>
                <div class="card-body p-4">
                    <h3 class="card-title h5 fw-bold mb-1">Rahul Verma</h3>
                    <p class="card-text text-danger mb-3 fw-bold">HIIT & Cardio</p>
                    <p class="card-text text-muted mb-4">Expert in high-intensity interval training and cardio programs designed to maximize calorie burn and build endurance.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100 border-0 shadow-sm card-hover text-center">
                <div class="position-relative overflow-hidden">
                    <div class="bg-light d-flex align-items-center justify-content-center" style="height: 220px;">
                        <i class="fas fa-user-tie fa-4x text-danger"></i>
                    </div>
                    <div class="position-absolute top-0 start-0 bg-danger text-white px-3 py-2 m-3 rounded-pill fw-bold">
                        8+ years
                    </div>
                </div>
                <div class="card-body p-4">
                    <h3 class="card-title h5 fw-bold mb-1">Deepika Malhotra</h3>
                    <p class="card-text text-danger mb-3 fw-bold">Nutrition & Wellness</p>
                    <p class="card-text text-muted mb-4">Certified nutritionist helping clients achieve their fitness goals through balanced diet plans and lifestyle modifications.</p>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle mx-1" style="width: 36px; height: 36px; line-height: 34px; padding: 0;"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div> 