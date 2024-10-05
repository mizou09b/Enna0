<x-layout>

    <!-- About Us Section -->
    <section class="company-description">
        <div class="container">
            <div class="description-content">
                <img src="https://via.placeholder.com/400" alt="Company Image" class="company-image">
                <div class="description-text">
                    <h2 class="h2-styles ps-2">Presentation</h2>
                    <p class="ps-5 fw-normal">
                        L’ENNA est un établissement public à caractère industriel et commercial (EPIC) placé
                        sous la
                        tutelle du Ministère des Transports Algériens. Il a pour mission d’assurer le
                        service public de
                        la sécurité de la navigation aérienne dans l’espace aérien Algérien pour le compte
                        et au nom de
                        l’état algérien
                    </p>
                    <a href="a-propos.html" class="css-button-sliding-to-bottom--blue ms-4 float-end">À Propos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services and Activities Section -->
    <section class="services-activities">
        <div class="container">
            <h2 class="text-center text-white">Nos Services et Activités</h2>
            <hr class="w-25 mx-auto" style="border-top: 2px solid #fff; opacity: 1;">

            {{-- slider d'images --}}
            <div class="slider">
                <div class="list">
                    <div class="item" style="--position: 1 ">
                        <a href=""><img
                                src="https://www.enna.dz/wp-content/uploads/2021/05/service-de-la-navigation-aerienne-800x800.jpg"
                                alt="Installation et maintenances"></a>
                        <h5>Service de la navigation aerienne</h5>
                    </div>

                    <div class="item" style="--position: 2 ">
                        <a href="#"> <img
                                src="https://www.enna.dz/wp-content/uploads/2021/05/Installation-et-maintenances-cns-800x800.jpg"
                                alt="Installation et maintenances CNS"></a>
                        <h5>Installation et maintenances CNS</h5>
                    </div>

                    <div class="item" style="--position: 3 ">
                        <a href=""><img
                                src="https://www.enna.dz/wp-content/uploads/2022/03/formation1-800x800.jpg"
                                alt="Formation"></a>
                        <h5>Formation</h5>
                    </div>

                    <div class="item" style="--position: 4 ">
                        <a href=""> <img src="https://via.placeholder.com/300" alt="Service 4"></a>
                        <h5>Service 4</h5>
                    </div>

                    <div class="item" style="--position: 5">
                        <a href=""><img src="https://www.enna.dz/wp-content/uploads/2021/05/calibration-3.jpg"
                                alt="Flight inspection unit"></a>
                        <h5>Flight isnpection unit 5</h5>
                    </div>
                </div>
            </div>
            <div class="dot-indicators text-center"> </div>
        </div>
    </section>


    {{-- data chiffre section --}}

    <h2 class="text-center pt-4 h2-styles">L'Enna en chiffre</h2>
    <hr class="w-25 mx-auto" style="border-top: 2px solid #4dabf7; opacity: 1">
    <section class="ennaEnChiffre">

        <a href="#" class="cardE education">
            <div class="overlay"></div>
            <div class="circle">
                <svg width="71px" height="76px">
                    <g id="Group">

                    </g>
                </svg>
            </div>
            <p>Aérodromes Internationaux</p>

        </a>

        <a href="#" class="cardE credentialing">
            <div class="overlay"></div>
            <div class="circle">
                <svg width="64px" height="72px">
                    <g id="Group-12">
                        <i class="fa-solid fa-plane fa-3x" style="z-index: 100;"></i>
                    </g>
                </svg>
            </div>
            <p>Aérodromes Nationaux
                <br>
                <span>25</span>
            </p>
        </a>

        <a href="#" class="cardE wallet">
            <div class="overlay"></div>
            <div class="circle">

                <svg width="78px" height="60px">
                    <g id="icon" >
                    </g>
                </svg>
            </div>
            <p>Movements Aérodromes </p>
        </a>

        <a href="#" class="cardE human-resources">
            <div class="overlay"></div>
            <div class="circle">
                <svg width="66px" height="77px">
                    <g id="Page-1">
                    </g>
                </svg>
            </div>
            <p>Survols</p>
        </a>
    </section>
</x-layout>
