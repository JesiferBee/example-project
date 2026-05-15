@extends('layouts.app')

@section('main')
    <div class="container my-5">
        <h2 class="fw-bold mb-4 text-center">Featured Products</h2>

        <div class="row g-4">

            <!-- Product 1: Headphones -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0 rounded-3">
                    <img src="https://i5.walmartimages.com/seo/Beats-Solo4-Wireless-Headphones-On-Ear-Wireless-Headphones-Matte-Black_061bc359-a5bc-4b46-b1ea-b9b957473dcf.fc697a62916553b100bf7967cf2bfef8.png"
                        class="card-img-top" alt="Product 1">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title fw-bold">Wireless Headphones</h5>
                        <p class="text-muted small">High-quality noise cancellation.</p>
                        <p class="fs-5 fw-bold text-primary mb-3 mt-auto">$199.00</p>
                        <button class="btn btn-primary w-100 mt-2">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 2: Smartwatch -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0 rounded-3">
                    <img src="https://kfourgroup.com.kh/wp-content/uploads/2024/09/JBLLIVE670NCBLK-450x450.webp"
                        class="card-img-top" alt="Product 1">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title fw-bold">Wireless Headphones</h5>
                        <p class="text-muted small">High-quality noise cancellation.</p>
                        <p class="fs-5 fw-bold text-primary mb-3 mt-auto">$199.00</p>
                        <button class="btn btn-primary w-100 mt-2">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 3: Camera -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0 rounded-3">
                    <img src="https://www.backscatter.com/ITEM_IMAGES/cn-8035b002_1.jpg" class="card-img-top"
                        alt="Product 3">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title fw-bold">DSLR Digital Camera</h5>
                        <p class="text-muted small">Capture every moment in 4K.</p>
                        <p class="fs-5 fw-bold text-primary mb-3 mt-auto">$899.00</p>
                        <button class="btn btn-primary w-100 mt-2">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 4: Smartphone -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0 rounded-3">
                    <img src="https://www.oppo.com/content/dam/oppo/common/mkt/v2-2/a6-pro-series/navigation/440-440-pink.png"
                        class="card-img-top" alt="Product 4">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title fw-bold">Pro Smartphone</h5>
                        <p class="text-muted small">Powerful performance, sleek design.</p>
                        <p class="fs-5 fw-bold text-primary mb-3 mt-auto">$999.00</p>
                        <button class="btn btn-primary w-100 mt-2">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 5: Bluetooth Speaker -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0 rounded-3">
                    <img src="https://www.sencor.com/getmedia/53d54418-3de4-4fe8-a503-5edb74cac646/35059173.jpg.aspx?width=2100&height=2100&ext=.jpg"
                        class="card-img-top" alt="Product 5">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title fw-bold">Portable Speaker</h5>
                        <p class="text-muted small">Crystal clear sound on the go.</p>
                        <p class="fs-5 fw-bold text-primary mb-3 mt-auto">$79.00</p>
                        <button class="btn btn-primary w-100 mt-2">Add to Cart</button>
                    </div>
                </div>
            </div>

            <!-- Product 6: Laptop -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 shadow-sm border-0 rounded-3">
                    <img src="https://images.svijet-medija.hr/img/213120-154/4_Zenbook_A14_UX3407_04_CRO.jpg"
                        class="card-img-top" alt="Product 6">
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title fw-bold">Ultrabook Laptop</h5>
                        <p class="text-muted small">The perfect companion for work.</p>
                        <p class="fs-5 fw-bold text-primary mb-3 mt-auto">$1,299.00</p>
                        <button class="btn btn-primary w-100 mt-2">Add to Cart</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection