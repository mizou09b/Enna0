<x-layout>

    <!-- About Us Section -->
    <section class="company-description">
        <div class="container">
            <div class="description-content">
                <img src="https://via.placeholder.com/400" alt="Company Image" class="company-image">
                <div class="col-lg-7 col-md-6 mt-4 pt-2 padding_0">
                    <div class="section-title ms-4">
                        <h4 class="title mb-4 pb-2" style="color:#011D70;font-family:KacsTitle !important ;">Présentation
                        </h4>
                        <h4 class="title mb-4" style="color:#2F55D4;margin-top:-5%;font-family:KacsTitle !important ;">
                            De l'Etablissement National de la Navigation Aerienne</h4>
                        <hr width="15%" color="#00CBD9" size="2" align="left"
                            style="margin-top:-3%; opacity:1; color:#4dabf7">
                        <div class="text-muted">
                            <p style="color:#808080 ! important ;"></p>
                            <p style="color:#8492a6 !important">L’ENNA est un établissement public à caractère
                                industriel et commercial (EPIC) placé sous la tutelle du Ministère des Algériens. Il a
                                pour mission d’assurer le service public de la sécurité de la navigation aérienne dans
                                l’espace aérien Algérien pour le compte et au nom de l’état algérien.</p>
                            <p></p>
                        </div>
                        <div class="mt-4">
                            <a href="a-propos.html" class="css-button-sliding-to-bottom--blue ms-4 float-end">À
                                Propos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services and Activities Section -->
    <section class="services-activities">
        <div class="container">
            <h2 class="text-center text-white" style="font-family: 'PT sans', sans-serif; font-weight: bold;">Nos
                Services et Activités</h2>
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
        </div>
    </section>


    {{-- data chiffre section --}}

    <h2 class="text-center pt-4 h2-styles">L'Enna en chiffre</h2>
    <hr class="w-25 mx-auto" style="border-top: 2px solid #2F55D4; opacity: 1">
    <section class="ennaEnChiffre">

        <a href="#" class="cardE education">
            <div class="overlay"></div>
            <div class="circle">
                <i class="fa-solid fa-plane fa-3x"></i>
            </div>
            <p>Aérodromes Internationaux</p>
            <div class="numbers-data">25</div>
        </a>

        <a href="#" class="cardE credentialing">
            <div class="overlay"></div>
            <div class="circle">
                <i class="fa-solid fa-plane fa-3x"></i>
            </div>
            <p>Aérodromes Nationaux</p>
            <div class="numbers-data">25</div>
        </a>

        <a href="#" class="cardE wallet">
            <div class="overlay"></div>
            <div class="circle">
                <i class="fa-solid fa-plane fa-3x"></i>
            </div>
            <p>Movements Aérodromes </p>
            <div class="numbers-data">25</div>
        </a>

        <a href="#" class="cardE human-resources">
            <div class="overlay"></div>
            <div class="circle">
                <i class="fa-solid fa-plane fa-3x"></i>
            </div>
            <p>Survols</p>
            <div class="numbers-data">25</div>
        </a>
    </section>
</x-layout>
