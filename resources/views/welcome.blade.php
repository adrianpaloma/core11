<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Platform | Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
      body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .hero-section {
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://www.ceo-review.com/wp-content/uploads/2022/01/Vendor-Management.jpg') no-repeat center center/cover;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .feature-icon {
            font-size: 3rem;
            color: #007bff;
        }
        .cta-section {
            background: #007bff;
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        .cta-section .btn {
            font-size: 1.2rem;
            padding: 12px 30px;
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        .footer a {
            color: white;
            margin: 0 10px;
            font-size: 1.2rem;
            transition: 0.3s;
        }
        .footer a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Vendor Platform</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="btn btn-primary" href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="fw-bold display-4">Empower Your Business with Vendor Platform</h1>
            <p class="lead">Manage products, track sales, and grow your business seamlessly.</p>
            <a href="{{ route('register') }}" class="btn btn-lg btn-primary mt-3">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <main class="mt-6 container my-5">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="p-4 border rounded shadow-sm bg-white">
                    <i class="fas fa-box feature-icon"></i>
                    <h4 class="fw-bold mt-3">Product Management</h4>
                    <p>Easily manage and update your products with an intuitive dashboard.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded shadow-sm bg-white">
                    <i class="fas fa-truck feature-icon"></i>
                    <h4 class="fw-bold mt-3">Order Tracking</h4>
                    <p>Monitor your orders in real-time and ensure smooth deliveries.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 border rounded shadow-sm bg-white">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h4 class="fw-bold mt-3">Performance Analytics</h4>
                    <p>Gain insights on product performance and sales trends.</p>
                </div>
            </div>
        </div>
    </main>

 

<!-- About Section -->
<section id="about" class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6 text-center">
            <img src="https://scontent.fmnl8-3.fna.fbcdn.net/v/t39.30808-6/346602511_1256425258324672_3665776092029386947_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEFjshQJiw9JCvkvqxOl8luKA7CY_MBuskoDsJj8wG6yfY_r6NgpKjTVkYu60cd6iotiO5v1NJ2gTO6oX5V5o2o&_nc_ohc=GO9hevOhVg0Q7kNvgHa_eVo&_nc_oc=Adg8JPB6Ci1wTK6QWUcdD4XgX-WV2QLR5_2GIrrDs2eyc40fsJm2Z_QQiw1iYyku48U&_nc_zt=23&_nc_ht=scontent.fmnl8-3.fna&_nc_gid=A3OinVJYE4wohFIG0XSZY7b&oh=00_AYCnKfOBkl8a5JvCxEutR__ZP0YcRhmvgTmwkY685RlgCg&oe=67C5B1EE" class="img-fluid rounded shadow" alt="About Us">
        </div>
        <div class="col-md-6 text-center text-md-start">
            <h2 class="fw-bold">About Us</h2>
            <p class="lead">Empowering businesses with seamless vendor management.</p>
            <p>Vendor Platform provides intuitive tools to help businesses track sales, monitor orders, and analyze performance efficiently. Our mission is to simplify vendor operations and drive growth.</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fas fa-check-circle text-success"></i> Easy Product Management</li>
                <li class="list-group-item"><i class="fas fa-check-circle text-success"></i> Order and Sales Tracking</li>
                <li class="list-group-item"><i class="fas fa-check-circle text-success"></i> Business Growth Insights</li>
            </ul>
        </div>
    </div>
</section>


<!-- Contact Section -->
<section id="contact" class="container my-5">
    <h2 class="fw-bold text-center mb-4">Contact Us</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="p-4 border rounded shadow-sm bg-white">
                <h4><i class="fas fa-envelope text-primary"></i> Email</h4>
                <p><a href="mailto:support@vendorplatform.com" class="text-dark">support@vendorplatform.com</a></p>
                
                <h4><i class="fas fa-phone text-primary"></i> Phone</h4>
                <p>+1 234 567 890</p>

                <h4><i class="fas fa-map-marker-alt text-primary"></i> Address</h4>
                <p>123 Vendor Street, Business City, USA</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-4 border rounded shadow-sm bg-white">
                <h4>Send Us a Message</h4>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea class="form-control" rows="4" placeholder="Type your message..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>


    <!-- Call to Action -->
    <section class="cta-section">
        <h2 class="fw-bold">Join Our Platform Today</h2>
        <p class="lead">Start managing your business more efficiently with our advanced tools.</p>
        <a href="{{ route('register') }}" class="btn btn-light me-3">Sign Up</a>
        <a href="{{ route('login') }}" class="btn btn-dark">Login</a>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p class="mb-2">&copy; {{ date('Y') }} Vendor Platform. All rights reserved.</p>
        <div>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>