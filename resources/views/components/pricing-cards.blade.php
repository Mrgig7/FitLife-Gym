<div class="container py-5">
    @if(!isset($hideTitle) || !$hideTitle)
    <div class="text-center mb-5">
        <h2 class="section-title text-center display-5 fw-bold">Our Membership Options</h2>
        <div class="mx-auto" style="max-width: 650px;">
            <p class="lead text-muted">Simple, transparent pricing with no hidden fees</p>
        </div>
    </div>
    @endif

    <div class="row g-4 justify-content-center">
        <!-- Basic Plan -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 rounded-4 overflow-hidden">
                <div class="card-header text-center py-4 border-0" style="background: linear-gradient(135deg, #e83e8c 0%, #e83e8c 100%);">
                    <h3 class="h3 mb-0 fw-bold text-white">Basic</h3>
                </div>
                <div class="card-body bg-white text-center p-4">
                    <div class="mb-4 mt-3">
                        <h2 class="card-title pricing-card-title mb-2">
                            <span class="display-4 fw-bold">₹1000</span>
                            <small class="text-muted fw-normal">/30 days</small>
                        </h2>
                        <div class="mt-3 mb-4">
                            <span style="border: 1px solid #dc3545; border-radius: 30px; padding: 5px 15px; display: inline-block; color: #dc3545; font-size: 0.9rem;">GST Included</span>
                        </div>
                    </div>
                    <div class="pricing-features mt-3">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>Gym access during regular hours</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>Locker access</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>Free WiFi</span>
                        </div>
                    </div>
                    <div class="mt-5">
                        @auth
                            <a href="{{ route('subscriptions.create', ['plan' => 1]) }}" class="btn btn-lg w-100 py-3 rounded-pill fw-bold" style="background-color: #e83e8c; color: white;">Select Plan</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-lg w-100 py-3 rounded-pill fw-bold" style="background-color: #e83e8c; color: white;">Select Plan</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        <!-- Standard Plan -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 rounded-4 overflow-hidden">
                <div class="card-header text-center py-4 border-0" style="background: linear-gradient(135deg, #e83e8c 0%, #e83e8c 100%);">
                    <h3 class="h3 mb-0 fw-bold text-white">Standard</h3>
                </div>
                <div class="card-body bg-white text-center p-4">
                    <div class="mb-4 mt-3">
                        <h2 class="card-title pricing-card-title mb-2">
                            <span class="display-4 fw-bold">₹1500</span>
                            <small class="text-muted fw-normal">/30 days</small>
                        </h2>
                        <div class="mt-3 mb-4">
                            <span style="border: 1px solid #dc3545; border-radius: 30px; padding: 5px 15px; display: inline-block; color: #dc3545; font-size: 0.9rem;">GST Included</span>
                        </div>
                    </div>
                    <div class="pricing-features mt-3">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>24/7 gym access</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>Locker access</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>Free WiFi</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>2 group classes per week</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>Access to sauna</span>
                        </div>
                    </div>
                    <div class="mt-4">
                        @auth
                            <a href="{{ route('subscriptions.create', ['plan' => 2]) }}" class="btn btn-lg w-100 py-3 rounded-pill fw-bold" style="background-color: #e83e8c; color: white;">Select Plan</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-lg w-100 py-3 rounded-pill fw-bold" style="background-color: #e83e8c; color: white;">Select Plan</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>

        <!-- Premium Plan -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 rounded-4 overflow-hidden">
                <div class="card-header text-center py-4 border-0" style="background: linear-gradient(135deg, #e83e8c 0%, #e83e8c 100%);">
                    <h3 class="h3 mb-0 fw-bold text-white">Premium</h3>
                </div>
                <div class="card-body bg-white text-center p-4">
                    <div class="mb-4 mt-3">
                        <h2 class="card-title pricing-card-title mb-2">
                            <span class="display-4 fw-bold">₹2000</span>
                            <small class="text-muted fw-normal">/30 days</small>
                        </h2>
                        <div class="mt-3 mb-4">
                            <span style="border: 1px solid #dc3545; border-radius: 30px; padding: 5px 15px; display: inline-block; color: #dc3545; font-size: 0.9rem;">GST Included</span>
                        </div>
                    </div>
                    <div class="pricing-features mt-3">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>24/7 gym access</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>Locker access</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>Free WiFi</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>Unlimited group classes</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>Personal trainer session (1x/month)</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>Sauna & Spa access</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check text-success me-3"></i>
                            <span>Nutritional consultation</span>
                        </div>
                    </div>
                    <div class="mt-4">
                        @auth
                            <a href="{{ route('subscriptions.create', ['plan' => 3]) }}" class="btn btn-lg w-100 py-3 rounded-pill fw-bold" style="background-color: #e83e8c; color: white;">Select Plan</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-lg w-100 py-3 rounded-pill fw-bold" style="background-color: #e83e8c; color: white;">Select Plan</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 