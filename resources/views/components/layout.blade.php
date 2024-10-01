<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    {{-- header begins here --}}
    <header>
        <div class="background">
            <nav class="main-navbar">
                <div class="logo">
                    <img src="https://www.enna.dz/wp-content/themes/enna/assets/images/logo-ENNA.png"
                        alt="Logo de l'ENNA - École Nationale de Navigation et d'Aéronautique">
                </div>
                <div class="nav-links">
                    <a href="https://www.google.dz/"><i class="fa-solid fa-house"></i></a>
                    <a href="#">À Propos</a>
                    <a href="#">Services</a>
                    <a href="#">Activités</a>
                    <a href="/offres">Offres</a>
                </div>
                <div class="search-container">
                    <span class="search-icon" onclick="toggleSearch()" aria-label="Ouvrir la recherche"> <i
                            class="fa-solid fa-magnifying-glass fa-beat"></i></span>
                    <input type="text" id="search-box" class="search-box" placeholder="Recherche..."
                        aria-label="Barre de recherche" style="display:none;">
                </div>

                <nav class="fade-navbar">
                    <div class="nav-links">
                        <div class="logo">
                        </div>
                        <a href="https://www.google.dz/"><i class="fa-solid fa-house"></i></a>
                        <a href="#">À Propos</b></a>
                        <a href="#">Services</a>
                        <a href="#">Activités</a>
                        <a href="#">Contact</a>
                    </div>
                </nav>
            </nav>
            <div>
                <h1 class="display-4 fw-bold text-white title-dark pt-5 ps-5 mt-3"
                    style="font-weight: bold; font-family: IBM Plex Serif">
                    Etablissement National<br> <span class="ps-5"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; de la Navigation
                    Aérienne</span></h1>
            </div>
        </div>

        {{-- button menu --}}
        <div class="menu-container">
            <div class="menu-button" onclick="toggleMenu()">
                <i class="fa-solid fa-sitemap fa-3x"></i>
            </div>
            <div class="social-menu" id="social-menu">
                <div>
                    <a href="https://www.instagram.com" target="_blank" class="social-icon">
                        <span class="icon-title">DENA</span>
                        <span class="tooltip-text">Direction de l’Exploitation de la Navigation Aérienne.</span>
                    </a>
                </div>
                <div>
                    <a href="https://www.twitter.com" target="_blank" class="social-icon">
                        <span class="icon-title">DRFC</span>
                        <span class="tooltip-text">Direction des Ressources des Finances et de la Comptabilité.</span>
                    </a>
                </div>
                <div>
                    <a href="https://www.facebook.com" target="_blank" class="social-icon">
                        <span class="icon-title">DGRH</span>
                        <span class="tooltip-text">Direction Juridique et des Ressources Humaines</span>
                    </a>
                </div>
                <div>
                    <a href="https://www.facebook.com" target="_blank" class="social-icon">
                        <span class="icon-title">DTNA</span>
                        <span class="tooltip-text">Direction Technique de la Navigation Aérienne.</span>
                    </a>
                </div>
                <div>
                    <a href="https://www.facebook.com" target="_blank" class="social-icon">
                        <span class="icon-title">CQRENA</span>
                        <span class="tooltip-text">Centre de Qualification, de Recyclage et d’Expérimentation de la Navigation Aérienne.</span>
                    </a>
                </div>
                <div>
                    <a href="https://www.facebook.com" target="_blank" class="social-icon">
                        <span class="icon-title">DLOG</span>
                        <span class="tooltip-text">Direction de la Logistique.</span>
                    </a>
                </div>
                <div>
                    <a href="https://www.facebook.com" target="_blank" class="social-icon">
                        <span class="icon-title">DDNA</span>
                        <span class="tooltip-text">Direction du Développement de la Navigation Aérienne.</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    {{-- header ends here --}}

    {{ $slot }}

    {{-- footer begins here! --}}
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <h5>Suivez-nous sur les réseaux sociaux</h5>
            <div class="social-icons mb-3">
                <a href="#" class="text-white mx-2">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-white mx-2">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-white mx-2">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="text-white mx-2">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
            <p>&copy; 2024 Votre Nom d'Entreprise. Tous droits réservés.</p>
            <p>
                <a href="#" class="text-white">Politique de confidentialité</a> |
                <a href="#" class="text-white">Conditions d'utilisation</a>
            </p>
        </div>
    </footer>
    {{-- end footer --}}

    {{-- script section  --}}
    <script>
        function toggleSearch() {
            const searchBox = document.getElementById('search-box');
            if (searchBox.style.display === 'block') {
                searchBox.style.display = 'none';
            } else {
                searchBox.style.display = 'block';
                searchBox.style.opacity = 0;
                setTimeout(() => {
                    searchBox.style.opacity = 1;
                    searchBox.focus();
                }, 10);
            }
        }

        // Fade navbar logic
        window.addEventListener('scroll', () => {
            const fadeNavbar = document.querySelector('.fade-navbar');

            if (window.scrollY > 100) { // Adjust this value based on when you want the fade navbar to appear
                fadeNavbar.classList.add('show'); // Add class to show fade navbar
            } else {
                fadeNavbar.classList.remove('show'); // Remove class to hide fade navbar
            }
        });


        // dots bat js :
        document.addEventListener('DOMContentLoaded', () => {
            const servicesContent = document.querySelector('.services-content');
            const serviceItems = document.querySelectorAll('.service-item');
            const dotIndicators = document.querySelector('.dot-indicators');

            // Create dots based on the first three service items only
            const maxDots = Math.min(serviceItems.length, 4); // Ensure a maximum of 3 dots
            for (let index = 0; index < maxDots; index++) {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                dot.dataset.index = index; // Store index for reference
                dotIndicators.appendChild(dot);
            }


            function updateActiveDot(index) {
                const dots = document.querySelectorAll('.dot');
                dots.forEach(dot => dot.classList.remove('active'));
                if (dots[index]) {
                    dots[index].classList.add('active');
                }
            }

            servicesContent.addEventListener('scroll', () => {
                const scrollLeft = servicesContent.scrollLeft;
                const itemWidth = serviceItems[0].offsetWidth;
                const index = Math.round(scrollLeft / itemWidth);
                updateActiveDot(index);
            });

            dotIndicators.addEventListener('click', (e) => {
                if (e.target.classList.contains('dot')) {
                    const index = e.target.dataset.index;
                    servicesContent.scrollTo({
                        left: index * serviceItems[0].offsetWidth,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // button menu js :
        function toggleMenu() {
            const menu = document.getElementById('social-menu');
            menu.classList.toggle('active');
        }

        // mouse scrolling js :

    </script>

</body>

</html>
