<footer class="footer bg-dark text-light py-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-0">
                <h5 class="text-primary mb-3">EMSI Student Association</h5>
                <p class="mb-3">
                    Votre plateforme dédiée à la vie étudiante de l'EMSI. Rejoignez-nous
                    pour participer à des événements passionnants et faire partie d'une
                    communauté dynamique.
                </p>
                <div class="social-links">
                    <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="col-md-6">
                <h5 class="text-primary mb-3">Contact</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        hassan, rabat
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-phone me-2"></i>
                        0771402945
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-envelope me-2"></i>
                        contact@emsi-student.ma
                    </li>
                </ul>
            </div>
        </div>

        <hr class="my-4 bg-light" />

        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">
                    &copy; {{ date('Y') }} EMSI Student Association. Tous droits réservés.
                </p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <a href="{{ url('/mentions-legales') }}" class="text-light text-decoration-none me-3">Mentions légales</a>
                <a href="{{ url('/politique-confidentialite') }}" class="text-light text-decoration-none">Politique de confidentialité</a>
            </div>
        </div>
    </div>
</footer> 