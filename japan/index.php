<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NipponJourney — Program Dakwah Internasional Ramadhan "From Indonesia to Japan 2025"</title>
    <meta name="description" content="Program dakwah internasional untuk memperkuat hubungan Muslim Indonesia-Jepang dan memberikan dukungan bagi mualaf di Jepang">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Noto+Serif+JP:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        /* CSS Variables */
        :root {
            --primary-color: #1e3a5f;
            --secondary-color: #e8423a;
            --accent-color: #f8c291;
            --text-dark: #333;
            --text-light: #666;
            --white: #ffffff;
            --light-gray: #f5f5f5;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 1rem;
        }
        
        h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
        }
        
        h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
            padding-bottom: 1rem;
        }
        
        h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--secondary-color);
            border-radius: 2px;
        }
        
        h3 {
            font-size: clamp(1.5rem, 3vw, 2rem);
        }
        
        p {
            margin-bottom: 1rem;
            color: var(--text-light);
        }
        
        /* Buttons */
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: var(--primary-color);
            color: var(--white);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }
        
        .btn:hover {
            background: #152a44;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .btn-secondary {
            background: var(--secondary-color);
        }
        
        .btn-secondary:hover {
            background: #d0332b;
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }
        
        .btn-outline:hover {
            background: var(--primary-color);
            color: var(--white);
        }
        
        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }
        
        .navbar {
            padding: 1rem 0;
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .logo i {
            margin-right: 10px;
            color: var(--secondary-color);
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-menu li {
            margin-left: 2rem;
        }
        
        .nav-menu a {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }
        
        .nav-menu a:hover {
            color: var(--primary-color);
        }
        
        .nav-menu a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary-color);
            transition: var(--transition);
        }
        
        .nav-menu a:hover::after {
            width: 100%;
        }
        
        .nav-cta {
            background: var(--secondary-color);
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
        }
        
        .nav-cta:hover {
            color: white;
        }
        
        .nav-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        
        .nav-toggle span {
            width: 25px;
            height: 3px;
            background: var(--primary-color);
            margin: 3px 0;
            transition: 0.3s;
        }
        
        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            padding: 100px 0 50px;
            background: linear-gradient(135deg, #f5f7fa 0%, #e4efe9 100%);
            overflow: hidden;
        }
        
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }
        
        .hero-text h1 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }
        
        .hero-text .highlight {
            color: var(--secondary-color);
        }
        
        .hero-text p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        
        .hero-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .hero-image {
            position: relative;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .stat-card {
            background: white;
            padding: 1.5rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .stat-card i {
            font-size: 2rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        
        .stat-card h3 {
            font-size: 1.8rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }
        
        /* Story Section */
        .story-section {
            padding: 100px 0;
            background: white;
        }
        
        .story-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }
        
        .story-image {
            position: relative;
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .story-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .story-text h2 {
            text-align: left;
            margin-bottom: 1.5rem;
        }
        
        .story-text h2::after {
            left: 0;
            transform: none;
        }
        
        .quote-box {
            background: var(--light-gray);
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
            position: relative;
        }
        
        .quote-box::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 20px;
            font-size: 5rem;
            color: var(--secondary-color);
            opacity: 0.2;
        }
        
        .quote-text {
            font-style: italic;
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }
        
        .quote-author {
            text-align: right;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        /* Program Section */
        .program-section {
            padding: 100px 0;
            background: var(--light-gray);
        }
        
        .program-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }
        
        .program-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }
        
        .card-icon {
            width: 80px;
            height: 80px;
            background: rgba(232, 66, 58, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }
        
        .card-icon i {
            font-size: 2rem;
            color: var(--secondary-color);
        }
        
        .program-card h3 {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        .ai-assistant {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }
        
        .ai-visual {
            position: relative;
            height: 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .ai-visual img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
        }
        
        .emphasis {
            font-weight: 600;
            color: var(--primary-color);
            font-size: 1.1rem;
        }
        
        /* Impact Section */
        .impact-section {
            padding: 100px 0;
            background: white;
        }
        
        .impact-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }
        
        .impact-card {
            background: var(--light-gray);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: var(--transition);
        }
        
        .impact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }
        
        .impact-card i {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }
        
        .impact-card h3 {
            margin-bottom: 1rem;
            color: var(--primary-color);
        }
        
        /* Budget Section */
        .budget-section {
            padding: 100px 0;
            background: var(--light-gray);
        }
        
        .budget-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-top: 3rem;
        }
        
        .budget-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }
        
        .budget-card h3 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
        }
        
        .budget-card h3 i {
            margin-right: 10px;
            color: var(--secondary-color);
        }
        
        .budget-item {
            display: flex;
            justify-content: space-between;
            padding: 1rem 0;
            border-bottom: 1px solid #eee;
        }
        
        .budget-item:last-child {
            border-bottom: none;
            font-weight: 600;
            color: var(--primary-color);
            font-size: 1.2rem;
            margin-top: 1rem;
            padding-top: 1.5rem;
            border-top: 2px solid #eee;
        }
        
        /* Partnership Section */
        .partnership-section {
            padding: 100px 0;
            background: white;
        }
        
        .partnership-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            margin-top: 3rem;
        }
        
        .partnership-logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .partnership-logo img {
            max-width: 100%;
            height: auto;
            border-radius: 15px;
        }
        
        .partnership-content h3 {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }
        
        .partnership-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .stat-item {
            background: var(--light-gray);
            padding: 1.5rem;
            border-radius: 15px;
            text-align: center;
        }
        
        .stat-item h4 {
            font-size: 1.8rem;
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
        }
        
        /* Donation Section */
        .donation-section {
            padding: 100px 0;
            background: white;
            position: relative;
            overflow: hidden;
        }
        
        .donation-container {
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }
        
        .donation-amounts {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin: 3rem 0;
        }
        
        .amount-btn {
            padding: 15px 25px;
            background: white;
            border: 2px solid var(--primary-color);
            border-radius: 50px;
            font-weight: 600;
            color: var(--primary-color);
            cursor: pointer;
            transition: var(--transition);
        }
        
        .amount-btn:hover, .amount-btn.active {
            background: var(--primary-color);
            color: white;
        }
        
        .custom-amount-input {
            margin: 2rem 0;
            display: none;
        }
        
        .custom-amount-input input {
            width: 100%;
            padding: 15px;
            border: 2px solid var(--primary-color);
            border-radius: 10px;
            font-size: 1.1rem;
            text-align: center;
        }
        
        .donation-info {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 2rem;
            margin: 3rem 0;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .info-item i {
            color: var(--secondary-color);
            font-size: 1.2rem;
        }
        
        .donate-btn {
            background: var(--secondary-color);
            color: white;
            padding: 15px 40px;
            font-size: 1.2rem;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 1rem;
        }
        
        .donate-btn:hover {
            background: #d0332b;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        /* Contact Section */
        .contact-section {
            padding: 100px 0;
            background: var(--light-gray);
        }
        
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            margin-top: 3rem;
        }
        
        .contact-info {
            padding: 2rem;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        
        .contact-item i {
            font-size: 1.5rem;
            color: var(--secondary-color);
            margin-right: 1rem;
            width: 30px;
        }
        
        .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 15px;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: inherit;
            transition: var(--transition);
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--secondary-color);
        }
        
        .form-group textarea {
            height: 150px;
            resize: vertical;
        }
        
        /* Footer */
        footer {
            background: var(--primary-color);
            color: white;
            padding: 3rem 0 1rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .footer-logo i {
            margin-right: 10px;
            color: var(--secondary-color);
        }
        
        .footer-links h3 {
            margin-bottom: 1rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .footer-links h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--secondary-color);
        }
        
        .footer-links ul {
            list-style: none;
        }
        
        .footer-links ul li {
            margin-bottom: 0.5rem;
        }
        
        .footer-links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .footer-links a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .footer-social {
            margin-top: 1rem;
        }
        
        .footer-social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            margin-right: 10px;
            transition: var(--transition);
        }
        
        .footer-social a:hover {
            background: var(--secondary-color);
            transform: translateY(-3px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.7);
        }
        
        /* Responsive Styles */
        @media (max-width: 992px) {
            .hero-content,
            .story-content,
            .ai-assistant,
            .budget-container,
            .contact-container,
            .partnership-container {
                grid-template-columns: 1fr;
            }
            
            .hero-image {
                height: 400px;
            }
            
            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background-color: white;
                width: 100%;
                text-align: center;
                transition: 0.3s;
                box-shadow: 0 10px 27px rgba(0, 0, 0, 0.05);
                padding: 2rem 0;
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-menu li {
                margin: 1rem 0;
            }
            
            .nav-toggle {
                display: flex;
            }
        }
        
        @media (max-width: 768px) {
            .hero-buttons {
                flex-direction: column;
            }
            
            .hero-stats {
                grid-template-columns: 1fr;
            }
            
            .donation-amounts {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .partnership-stats {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 576px) {
            .container {
                padding: 0 15px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            h2 {
                font-size: 1.8rem;
            }
            
            .program-grid,
            .impact-content {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .footer-links h3::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .footer-social {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header id="navbar">
        <div class="navbar">
            <div class="container">
                <div class="nav-container">
                    <a href="#" class="logo">
                        <i class="fas fa-moon"></i>
                        NipponJourney
                    </a>
                    <ul class="nav-menu">
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#cerita">Cerita</a></li>
                        <li><a href="#program">Program</a></li>
                        <li><a href="#mitra">Mitra</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                        <li><a href="https://lynk.id/nipponjourney/v13ed88mwnnv" class="nav-cta" target="_blank">Donasi</a></li>
                    </ul>
                    <div class="nav-toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="beranda" class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text" data-aos="fade-right">
                    <h1>Program Dakwah Internasional Ramadhan <span class="highlight">"From Indonesia to Japan 2025"</span></h1>
                    <p>Menghubungkan Muslim Indonesia dan Jepang, memberikan dukungan bagi mualaf, dan memperkuat komunitas Muslim di Jepang.</p>
                    <div class="hero-buttons">
                        <a href="#program" class="btn">Pelajari Lebih Lanjut</a>
                        <a href="https://lynk.id/nipponjourney/v13ed88mwnnv" class="btn btn-secondary" target="_blank">Donasi Sekarang</a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-card">
                            <i class="fas fa-calendar-alt"></i>
                            <h3>14 Hari</h3>
                            <p>Program Ramadhan</p>
                        </div>
                        <div class="stat-card">
                            <i class="fas fa-map-marker-alt"></i>
                            <h3>4 Kota</h3>
                            <p>Tokyo, Yokohama, Shizuoka, Otsuka</p>
                        </div>
                        <div class="stat-card">
                            <i class="fas fa-users"></i>
                            <h3>230.000</h3>
                            <p>Populasi Muslim di Jepang</p>
                        </div>
                    </div>
                </div>
                <div class="hero-image" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1528164344705-47542687000d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Muslim di Jepang">
                </div>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section id="cerita" class="story-section">
        <div class="container">
            <div class="story-content">
                <div class="story-image" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Muslim di Jepang">
                </div>
                <div class="story-text" data-aos="fade-left">
                    <h2>Kisah di Balik Senyum</h2>
                    <p>Di Jepang, populasi Muslim telah meningkat menjadi sekitar 230.000 orang pada akhir 2019-2020. Meskipun jumlah semakin bertambah, akses terhadap pendidikan Islam yang berkualitas, ruang pendampingan untuk mualaf, dan komunitas anak muda Muslim masih sangat terbatas.</p>
                    <div class="quote-box">
                        <p class="quote-text">"Andaikan ada yang menemani aku belajar Islam dari awal..."</p>
                        <p class="quote-author">— keluhan yang sering mereka sampaikan</p>
                    </div>
                    <p class="emphasis">Tahun ini, kita menjawab kalimat itu.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Section -->
    <section id="program" class="program-section">
        <div class="container">
            <h2 data-aos="fade-up">Program Utama Kami</h2>
            <div class="program-grid">
                <div class="program-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Membimbing Mualaf</h3>
                    <p>Pembekalan Islam dasar untuk mualaf dengan pendekatan yang ramah, non-judgment, dan sesuai dengan budaya Jepang.</p>
                </div>
                
                <div class="program-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-icon">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <h3>Culture & Tech Swap Workshop</h3>
                    <p>Pertukaran budaya dan teknologi antara pelajar Indonesia dan Jepang untuk mempererat persaudaraan.</p>
                </div>
                
                <div class="program-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-icon">
                        <i class="fas fa-mosque"></i>
                    </div>
                    <h3>Aktivitas Sosial & Relawan</h3>
                    <p>Bersih-bersih masjid, bagi makanan berbuka, membantu Islamic center, dan kegiatan anak-anak.</p>
                </div>
            </div>
            
            <div class="ai-assistant" data-aos="fade-up">
                <div class="ai-content">
                    <h3>AI Chat Assistant Islam Berbahasa Jepang</h3>
                    <p>Sebuah chatbot webapp yang memberikan penjelasan dasar tentang Islam dalam bahasa Jepang dengan gaya sopan, ringkas, dan non-menghakimi.</p>
                    <p class="emphasis">Yang kita tinggalkan bukan kenangan… tapi pegangan.</p>
                    <a href="https://kaorisupport.site" class="btn btn-secondary" target="_blank">Coba Chatbot</a>
                    </div>
                <div class="ai-visual">
                    <img src="data:image/jpeg;base64,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" alt="AI Assistant">
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section id="dampak" class="impact-section">
        <div class="container">
            <h2 data-aos="fade-up">Dampak dari Kebaikan Anda</h2>
            <div class="impact-content">
                <div class="impact-card" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-graduation-cap"></i>
                    <h3>Pendidikan Islam</h3>
                    <p>Memberikan akses pendidikan Islam berkualitas bagi mualaf dan komunitas Muslim di Jepang.</p>
                </div>
                <div class="impact-card" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-users"></i>
                    <h3>Komunitas yang Kuat</h3>
                    <p>Membangun fondasi komunitas Muslim yang berkelanjutan dan saling mendukung.</p>
                </div>
                <div class="impact-card" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-robot"></i>
                    <h3>Solusi Digital Jangka Panjang</h3>
                    <p>AI Chat Assistant Islam berbahasa Jepang akan terus membantu mualaf setelah program selesai.</p>
                </div>
                <div class="impact-card" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-handshake"></i>
                    <h3>Kolaborasi Lintas Negara</h3>
                    <p>Memperkuat hubungan Muslim Indonesia-Jepang untuk kolaborasi di masa depan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partnership Section -->
    <section id="mitra" class="partnership-section">
        <div class="container">
            <h2 data-aos="fade-up">Mitra Strategis Kami</h2>
            <div class="partnership-container">
                <div class="partnership-logo" data-aos="fade-right">
                    <a href="https://id.myfundaction.org/" target="_blank">
                        <img src="https://indorelawan-prod.nos.jkt-1.neo.id/uploads/user_avatar/Logo_1679989682784_MyFundAction-Indonesia_20230328_144632-jpg" alt="MyFundaction">
                    </a>
                </div>
                <div class="partnership-content" data-aos="fade-left">
                    <h3>MyFundaction</h3>
                    <p>MyFundaction adalah lembaga NGO internasional yang mengajak seluruh elemen masyarakat untuk peduli terhadap berbagai isu kemanusiaan. Lembaga ini memulai aksi kemanusiaan di Indonesia pada tahun 2020 dan sejak itu terus memperluas jangkauannya ke seluruh penjuru negeri.</p>
                    <p>Saat ini, MyFundaction memiliki program di 16 negara, antara lain: Indonesia, Malaysia, Australia, New Zealand, Inggris, Amerika Serikat, Cina, Jepang, Korea Selatan, Mesir, Yordania, Turki, Palestina, Suriah, Yaman, dan Afrika.</p>
                    <p>Melalui berbagai inisiatifnya, MyFundaction telah membawa kebahagiaan dan dukungan kepada lebih dari 1 juta orang yang membutuhkan, baik di dalam maupun di luar negeri.</p>
                    
                    <div class="partnership-stats">
                        <div class="stat-item">
                            <h4>16+</h4>
                            <p>Negara</p>
                        </div>
                        <div class="stat-item">
                            <h4>1 Juta+</h4>
                            <p>Penerima Manfaat</p>
                        </div>
                        <div class="stat-item">
                            <h4>2020</h4>
                            <p>Tahun Berdiri</p>
                        </div>
                        <div class="stat-item">
                            <h4>5+</h4>
                            <p>Program Utama</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Budget Section -->
    <section id="anggaran" class="budget-section">
        <div class="container">
            <h2 data-aos="fade-up">Rincian Anggaran</h2>
            <div class="budget-container">
                <div class="budget-card" data-aos="fade-right">
                    <h3><i class="fas fa-user"></i> Biaya Perorangan (5 Orang)</h3>
                    <div class="budget-item">
                        <span>Tiket Pesawat</span>
                        <span>IDR 9.500.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Visa</span>
                        <span>IDR 500.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Bandara</span>
                        <span>IDR 1.368.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Akomodasi</span>
                        <span>IDR 7.980.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Transportasi</span>
                        <span>IDR 4.560.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Makanan</span>
                        <span>IDR 3.990.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Asuransi Perjalanan</span>
                        <span>IDR 1.900.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Total Perorangan</span>
                        <span>IDR 29.798.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Total 5 Orang</span>
                        <span>IDR 148.990.000</span>
                    </div>
                </div>
                <div class="budget-card" data-aos="fade-left">
                    <h3><i class="fas fa-tasks"></i> Biaya Kegiatan</h3>
                    <div class="budget-item">
                        <span>API Key ChatGPT</span>
                        <span>IDR 5.500.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Domain & Hosting</span>
                        <span>IDR 600.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Cenderamata Indonesia</span>
                        <span>IDR 500.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Dana Darurat</span>
                        <span>IDR 400.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Total Kegiatan</span>
                        <span>IDR 7.000.000</span>
                    </div>
                    <div class="budget-item">
                        <span>Total Keseluruhan</span>
                        <span>IDR 155.990.000</span>
                    </div>
                    <div class="budget-item">
                        <span style="font-size: 0.9rem; color: #666;">Catatan: Anggaran kegiatan selebihnya ditanggung oleh pihak lembaga myfundaction terkait dengan pembagian Alquran bahasa Jepang kepada mualaf atau Hikari Box termasuk juga pembagian ifthar dan sahur bersama.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Section -->
    <section id="donasi" class="donation-section">
        <div class="container">
            <div class="donation-container" data-aos="fade-up">
                <h2>Sampaikan Kehangatan Ramadhan Anda</h2>
                <p>Setiap donasi Anda akan membantu menciptakan Ramadhan yang berarti bagi saudara Muslim di Jepang.</p>
                
                <div class="donation-amounts">
                    <button class="amount-btn" data-amount="25000">Rp 25.000</button>
                    <button class="amount-btn" data-amount="50000">Rp 50.000</button>
                    <button class="amount-btn" data-amount="100000">Rp 100.000</button>
                    <button class="amount-btn" data-amount="250000">Rp 250.000</button>
                    <button class="amount-btn" data-amount="500000">Rp 500.000</button>
                    <button class="amount-btn" data-amount="1000000">Rp 1.000.000</button>
                    <button class="amount-btn custom-amount">Custom</button>
                </div>
                
                <div class="custom-amount-input">
                    <input type="number" placeholder="Masukkan jumlah donasi" min="10000">
                </div>
                
                <div class="donation-info">
                    <div class="info-item">
                        <i class="fas fa-check-circle"></i>
                        <span>100% donasi akan disalurkan</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-shield-alt"></i>
                        <span>Donasi aman dan terpercaya</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-file-invoice"></i>
                        <span>Laporan donasi akan dikirim</span>
                    </div>
                </div>
                
                <a href="https://lynk.id/nipponjourney/v13ed88mwnnv" class="donate-btn" target="_blank">Sumbang Sekarang</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="kontak" class="contact-section">
        <div class="container">
            <h2 data-aos="fade-up">Hubungi Kami</h2>
            <div class="contact-container">
                <div class="contact-info" data-aos="fade-right">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>nipponjourney2026@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Telepon</h3>
                            <p>0895-4254-35686</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-globe"></i>
                        <div>
                            <h3>Website</h3>
                            <p>nipponjourney.site</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-instagram"></i>
                        <div>
                            <h3>Instagram</h3>
                            <p>@nipponjourney.id</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form" data-aos="fade-left">
                    <form>
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-secondary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <div class="footer-logo">
                        <i class="fas fa-moon"></i>
                        NipponJourney
                    </div>
                    <p>Program Dakwah Internasional Ramadhan "From Indonesia to Japan 2025" - DAKWAH - CHARITY - IMPACT</p>
                    <div class="footer-social">
                        <a href="https://www.instagram.com/nipponjourney.id/" aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h3>Tautan Cepat</h3>
                    <ul>
                        <li><a href="#beranda">Beranda</a></li>
                        <li><a href="#cerita">Cerita</a></li>
                        <li><a href="#program">Program</a></li>
                        <li><a href="#mitra">Mitra</a></li>
                        <li><a href="https://www.canva.com/design/DAG5-hN_6zc/enWoZa0WTTWr5Gpjo_VTCw/edit?utm_content=DAG5-hN_6zc&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">Proposal</a></li>
                        <li><a href="https://www.canva.com/design/DAG4qfCn4AM/m2IVAIeXL3gmXJt0jmJ0MQ/edit">PPT</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Informasi</h3>
                    <ul>
                        <li><a href="#anggaran">Anggaran</a></li>
                        <li><a href="#dampak">Dampak</a></li>
                        <li><a href="#donasi">Donasi</a></li>
                        <li><a href="#kontak">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Kontak</h3>
                    <ul>
                        <li><i class="fas fa-envelope"></i> nipponjourney2026@gmail.com</li>
                        <li><i class="fas fa-phone"></i> 0895-4254-35686</li>
                        <li><i class="fas fa-globe"></i> nipponjourney.site</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 NipponJourney. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
        
        // Mobile Navigation Toggle
        const navToggle = document.querySelector('.nav-toggle');
        const navMenu = document.querySelector('.nav-menu');
        
        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            
            // Animate hamburger menu
            navToggle.classList.toggle('active');
        });
        
        // Donation Amount Selection
        const amountBtns = document.querySelectorAll('.amount-btn');
        const customAmountInput = document.querySelector('.custom-amount-input');
        const customAmountBtn = document.querySelector('.custom-amount');
        
        amountBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                amountBtns.forEach(b => b.classList.remove('active'));
                
                // Add active class to clicked button
                btn.classList.add('active');
                
                // Show/hide custom amount input
                if (btn.classList.contains('custom-amount')) {
                    customAmountInput.style.display = 'block';
                } else {
                    customAmountInput.style.display = 'none';
                }
            });
        });
        
        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            
            if (window.scrollY > 100) {
                header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.boxShadow = 'none';
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    navMenu.classList.remove('active');
                    navToggle.classList.remove('active');
                }
            });
        });
        
        // Form submission
        const contactForm = document.querySelector('.contact-form form');
        
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Here you would normally send the form data to a server
            // For this example, we'll just show an alert
            alert('Pesan Anda telah terkirim! Kami akan segera menghubungi Anda.');
            
            // Reset form
            contactForm.reset();
        });
    </script>
</body>
</html>