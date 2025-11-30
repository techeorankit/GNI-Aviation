<?php
include('connection.php');

// Dynamic page title and meta description
$page = basename($_SERVER['PHP_SELF'], '.php');
$site_name = "GNI Aviation Services Pvt. Ltd.";
$site_url = "https://gniasjewar.com";

// Page-specific SEO settings
$seo_data = [
    'index' => [
        'title' => 'GNI Aviation Services | Aviation Training & Airport Jobs at Noida International Airport Jewar',
        'description' => 'GNI Aviation Services Pvt. Ltd. offers professional aviation training, airport ground staff jobs, and manpower solutions at Noida International Airport, Jewar. Apply for airline careers, customer service, and ground handling positions.',
        'keywords' => 'aviation training, airport jobs, Noida International Airport, Jewar airport jobs, ground staff jobs, airline careers, aviation courses, airport recruitment, GNI Aviation'
    ],
    'about' => [
        'title' => 'About Us - GNI Aviation Services | Aviation Training Institute in Delhi NCR',
        'description' => 'Learn about Greater Noida International Aviation Services Pvt. Ltd. - a leading aviation training and manpower solutions provider. IATA-certified trainers, industry partnerships, and proven placement record.',
        'keywords' => 'about GNI Aviation, aviation training institute, Delhi NCR aviation academy, IATA certified training, aviation company India'
    ],
    'career' => [
        'title' => 'Aviation Careers & Jobs | Airport Jobs at Noida International Airport - GNI Aviation',
        'description' => 'Explore airline career opportunities at Noida International Airport Jewar. Jobs in ground handling, customer service, cargo operations, and airport management. Apply now for aviation careers.',
        'keywords' => 'aviation careers, airport jobs Jewar, airline jobs Delhi NCR, ground staff recruitment, airport career opportunities, aviation job openings'
    ],
    'services' => [
        'title' => 'Aviation Training & Manpower Services | GNI Aviation Services',
        'description' => 'Comprehensive aviation training programs and manpower solutions for airlines, airports, and ground handling companies. Professional training for ground staff, customer service, and cargo operations.',
        'keywords' => 'aviation training services, manpower solutions, airport staff training, airline training programs, ground handling training'
    ],
    'selection-process' => [
        'title' => 'Selection Process for Airport Jobs | Airline Recruitment - GNI Aviation',
        'description' => 'Learn about our structured selection process for aviation jobs. Written tests, interviews, and competency assessments for airline and airport positions at Noida International Airport.',
        'keywords' => 'airline selection process, airport job recruitment, aviation interview process, ground staff selection, airline job eligibility'
    ],
    'gallery' => [
        'title' => 'Photo Gallery | GNI Aviation Training & Placement Activities',
        'description' => 'View photos from GNI Aviation Services training programs, placement activities, and campus events. See our aviation training facilities and successful candidates.',
        'keywords' => 'aviation training photos, GNI Aviation gallery, airport training images, aviation academy pictures'
    ],
    'testimonial' => [
        'title' => 'Student Testimonials | Success Stories - GNI Aviation Services',
        'description' => 'Read success stories and testimonials from candidates placed in aviation jobs through GNI Aviation Services. Real experiences from our trained professionals.',
        'keywords' => 'aviation training reviews, GNI Aviation testimonials, student success stories, airport job placement reviews'
    ],
    'contact' => [
        'title' => 'Contact Us | GNI Aviation Services - Delhi NCR Aviation Training',
        'description' => 'Contact GNI Aviation Services for aviation training inquiries, job applications, and manpower solutions. Located in Rohini, Delhi. Call +91-9217277714.',
        'keywords' => 'contact GNI Aviation, aviation training enquiry, airport job inquiry, Delhi aviation academy contact'
    ],
    'register' => [
        'title' => 'Register for Aviation Training | Apply Online - GNI Aviation',
        'description' => 'Register online for aviation training programs and airport job opportunities at GNI Aviation Services. Start your airline career today.',
        'keywords' => 'aviation training registration, apply for airport jobs, airline job application, GNI Aviation registration'
    ],
    'login' => [
        'title' => 'Login | GNI Aviation Services - Candidate Portal',
        'description' => 'Login to your GNI Aviation Services candidate portal to check application status, download admit card, and view results.',
        'keywords' => 'GNI Aviation login, candidate portal, check application status'
    ],
    'privacy-policy' => [
        'title' => 'Privacy Policy | GNI Aviation Services',
        'description' => 'Read the privacy policy of GNI Aviation Services Pvt. Ltd. Learn how we collect, use, and protect your personal information.',
        'keywords' => 'privacy policy, GNI Aviation privacy, data protection'
    ],
    'term-and-condition' => [
        'title' => 'Terms & Conditions | GNI Aviation Services',
        'description' => 'Read the terms and conditions for using GNI Aviation Services. Understand our policies for training programs and recruitment services.',
        'keywords' => 'terms and conditions, GNI Aviation terms, service agreement'
    ],
    'refund-policy' => [
        'title' => 'Refund Policy | GNI Aviation Services',
        'description' => 'Understand the refund policy of GNI Aviation Services for training programs and registration fees.',
        'keywords' => 'refund policy, GNI Aviation refund, fee refund'
    ],
    'admit-card-login' => [
        'title' => 'Download Admit Card | GNI Aviation Services',
        'description' => 'Login to download your admit card for GNI Aviation Services written examination and interview.',
        'keywords' => 'admit card download, GNI Aviation admit card, examination hall ticket'
    ]
];

// Get current page SEO data or use defaults
$current_seo = isset($seo_data[$page]) ? $seo_data[$page] : [
    'title' => $site_name . ' | Aviation Training & Airport Jobs',
    'description' => 'GNI Aviation Services provides professional aviation training and airport job placements at Noida International Airport, Jewar.',
    'keywords' => 'aviation training, airport jobs, GNI Aviation'
];

$page_title = $current_seo['title'];
$meta_description = $current_seo['description'];
$meta_keywords = $current_seo['keywords'];
$canonical_url = $site_url . '/' . ($page == 'index' ? '' : $page . '.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Site Verification -->
    <meta name="google-site-verification" content="a4HXRDKYRxKkneDzzv40w2m_zrfBSBnblp4IEg5U3bs" />

    <!-- Primary Meta Tags -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
    <meta name="author" content="GNI Aviation Services Pvt. Ltd.">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta property="og:image" content="<?php echo $site_url; ?>/img/logo.png">
    <meta property="og:site_name" content="<?php echo $site_name; ?>">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="twitter:image" content="<?php echo $site_url; ?>/img/logo.png">

    <!-- Geo Tags for Local SEO -->
    <meta name="geo.region" content="IN-DL">
    <meta name="geo.placename" content="New Delhi">
    <meta name="geo.position" content="28.729549;77.087872">
    <meta name="ICBM" content="28.729549, 77.087872">

    <!-- favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/logo.png" sizes="16x16" type="image/png">
    <link rel="apple-touch-icon" href="img/logo.png">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="assets/css/lib/bootstrap.min.css">
    <!-- Slick  -->
    <link rel="stylesheet" href="assets/css/lib/slick.css">
    <!-- Box Icon  -->
    <link rel="stylesheet" href="assets/css/lib/boxicons.css">
    <!-- Nice Select  -->
    <link rel="stylesheet" href="assets/css/lib/nice-select.css">
    <!-- Odometer  -->
    <link rel="stylesheet" href="assets/css/lib/odometer-theme-default.css">
    <!-- Magnific PopUp -->
    <link rel="stylesheet" href="assets/css/lib/magnific-popup.css">
    <!-- Stylesheet Link -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Structured Data - Organization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "GNI Aviation Services Pvt. Ltd.",
        "alternateName": "Greater Noida International Aviation Services",
        "url": "https://gniasjewar.com",
        "logo": "https://gniasjewar.com/img/logo.png",
        "description": "Leading aviation training and manpower solutions provider for Noida International Airport, Jewar. Offering professional training for airport ground staff, customer service, and cargo operations.",
        "foundingDate": "2025",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-9217277714",
            "contactType": "customer service",
            "areaServed": "IN",
            "availableLanguage": ["English", "Hindi"]
        },
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "H.No.173-174, Pocket-25, Sector-24, Rohini",
            "addressLocality": "New Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110085",
            "addressCountry": "IN"
        },
        "sameAs": [
            "https://www.facebook.com/gniaviationservices"
        ]
    }
    </script>

    <!-- Structured Data - Local Business Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "EducationalOrganization",
        "name": "GNI Aviation Services Pvt. Ltd.",
        "image": "https://gniasjewar.com/img/logo.png",
        "url": "https://gniasjewar.com",
        "telephone": "+91-9217277714",
        "email": "info@gniasjewar.com",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "H.No.173-174, Pocket-25, Sector-24, Rohini",
            "addressLocality": "New Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110085",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.729549,
            "longitude": 77.087872
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "opens": "09:30",
            "closes": "18:00"
        },
        "priceRange": "$$",
        "areaServed": {
            "@type": "Country",
            "name": "India"
        }
    }
    </script>

    <!-- Breadcrumb Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://gniasjewar.com"
        }<?php if($page != 'index'): ?>,{
            "@type": "ListItem",
            "position": 2,
            "name": "<?php echo ucwords(str_replace('-', ' ', $page)); ?>",
            "item": "<?php echo $canonical_url; ?>"
        }<?php endif; ?>]
    }
    </script>
  </head>

  
  <body>
    <!-- Preloader  -->
    <div class="preloader">
      <div class="preloader__loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <!-- Preloader End -->
    <!-- search Popup -->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="search-popup" id="search-popup">
      <form action="#" class="search-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn">
          <i class="bx bx-search"></i>
        </button>
      </form>
    </div>
    <!--search Popup End-->

    <!-- Header  -->
     <section class="bgcgrayss">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-12 tpfntssd">
                    <p>New Delhi | <a href="#"><i class="bx bxs-phone" aria-hidden="true"></i> +91-9217277714</a></p>
                </div>
                <div class="col-lg-4 col-12 imgsss text-center mlbnoness">
                    <img src="img/flag.png" alt="Indian Flag - GNI Aviation Services">
                </div>
                <div class="col-lg-4 col-12 mlbnoness">
                    <ul class="spcallsss">
                        <li><a href="https://www.facebook.com/gniaviationservices" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
     </section>
   
<header class="header bg--light">
      <div class="container">
          
        <div class="row g-0 align-items-center align-items-lg-stretch d-none d-lg-flex">
          <div class="col-6 col-lg-2">
            <!-- Logo  -->
            <a href="index.php" class="logo">
              <img src="img/logo.png" alt="GNI Aviation Services Logo - Aviation Training Institute" class="img-fluid logo__is">
            </a>
            <!-- Logo End -->
          </div>
          <div class="col-6 col-lg-10">
            <div class="row g-0">
              
              <div class="col-12 align-self-end">
                <ul class="list list--row d-none d-lg-flex align-items-center top-headers">
                  <li class="list--row__item">
                    <ul class="list vf-info-list vf-info-list--alt">
                      <li class="vf-info-list__item">
                        <div class="d-flex">
                          
                          <div class="ms-3">
                            <p class="mb-0 fw-bold text-uppercase t-text-heading logo-texts">
                              GNI Aviation Services Pvt. Ltd.
                            </p>
                            
                          </div>
                        </div>
                      </li>
                    
                    </ul>
                  </li>
                  <li class="list--row__item ms-auto">
                    <div class="d-flex">
                        <img src="img/azadi01.jpg" style="max-width:230px;" alt="Azadi Ka Amrit Mahotsav">
                      <img src="img/bharat.png" alt="Bharat Government Initiative">
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="primary-menu--dark">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 d-lg-none">
            <!-- Logo  -->
            <a href="index.php" class="logo">
              <img src="img/logo-footer.png" alt="GNI Aviation Services Logo" class="img-fluid logo__is">
            </a>
            <!-- Logo End -->
          </div>
          <div class="col-6 col-lg-12">
            <div class="nav-container px-lg-0 bg--dark">
              <!-- Navigation Toggler  -->
              <div class="text-end">
                <button type="button" class="btn btn--sqr btn--primary nav--toggle d-lg-none t-text-white">
                  <i class="bx bx-menu"></i>
                </button>
              </div>
              <!-- Navigation Toggler End -->

              <!-- Navigation  -->
              <nav class="navs">
                <!-- Close Button for Mobile -->
                <button type="button" class="nav-close-btn d-lg-none">
                  <i class="bx bx-x"></i>
                </button>
                <!-- Primary Menu  -->
                <ul class="list primary-menu w-100">
                  <li class="primary-menu__list">
                    <a href="index.php" class="primary-menu__link text-capitalize">
                      home
                    </a>
                    
                  </li>
                  <li class="primary-menu__list">
                    <a href="about.php" class="primary-menu__link text-capitalize">About Us</a>
                    
                  </li>
                  
                  <li class="primary-menu__list">
                    <a href="career.php" class="primary-menu__link text-capitalize">Career & Jobs</a>
                    
                  </li>
                  <!-- <li class="primary-menu__list">
                    <a href="#" class="primary-menu__link text-capitalize">Ground Staff</a>
                    
                  </li> -->
                  
                  <li class="primary-menu__list">
                    <a href="services.php" class="primary-menu__link text-capitalize">Services</a>
                    
                  </li>
                  <li class="primary-menu__list">
                    <a href="selection-process.php" class="primary-menu__link text-capitalize">Selection Process</a>
                    
                  </li>
                  
                  <li class="primary-menu__list">
                    <a href="gallery.php" class="primary-menu__link text-capitalize">Gallery</a>
                    
                  </li>
                  
                  <li class="primary-menu__list">
                    <a href="testimonial.php" class="primary-menu__link text-capitalize">Testimonial</a>
                    
                  </li>
                  <li class="primary-menu__list">
                    <a href="contact.php" class="primary-menu__link text-capitalize">Contact</a>
                    
                  </li>

                  <li class="primary-menu__list">
                    <a href="admit-card-login.php" class="primary-menu__link text-capitalize">Admit Card</a>
                    
                  </li>

                  <li class="primary-menu__list bgcclrlogin">
                    <a href="login.php" class="primary-menu__link text-capitalize">Login</a>
                    
                  </li>

                  <li class="primary-menu__list bgcreg">
                    <a href="register.php" class="primary-menu__link text-capitalize">Register</a>
                    
                  </li>
                  
               
                </ul>
                <!-- Primary Menu End -->
              </nav>
              <!-- Navigation End -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Header End -->