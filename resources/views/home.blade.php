<!DOCTYPE html>
<html>
  @include('shared.head')

  <body>
    @include('shared.nav')

    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 left-section">
            <div class="p-4 left-content">
              <h1 class="display-4">Nowoczesna aranżacja Twojego ogrodu </h1>
              <p class="lead">Marka GiardDesign to wieloletnie doświadczenie i wysoka estetyka realizacji. Oferujemy kompleksowy zakres usług <br>z indywidualnym podejściem do każdego projektu.</p>
              <div class="d-grid gap-2 d-md-block mb-4">
                <a href="#" class="btn btn-intro-f mb-2">Skontaktuj się z nami</a>
                <a href="#" class="btn btn-intro-s">Zobacz nasze realizacje <i class="fas fa-arrow-down"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 right-section position-relative p-0">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('img/img4.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slider Image 1">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('img/img5.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slider Image 2">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('img/img6.jpg') }}" class="d-block w-100 h-100 object-fit-cover" alt="Slider Image 3">
                </div>
              </div>
            </div>
            <div class="right-bottom-box">
              <div class="arrows-container">
                <div class="arrow left-arrow " id="prevSlide" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <i class="fas fa-arrow-left"></i>
                </div>
                <div class="arrow right-arrow" id="nextSlide" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <i class="fas fa-arrow-right"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <section class="upper-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="box">
                        <p class="about-link">Oferta</p>
                        <h2 class="upper-heading">Działamy <span class="complementary-text">kompleksowo</span></h2>
                        <p>Oferujemy kompletną obsługę inwestycji terenów zielonych. Projektujemy nowoczesne ogrody przydomowe oraz rezydencjonalne. Stworzymy dla Ciebie projekt, zwizualizujemy go i wcielimy w życie, a na każdym etapie posłużymy radą i wieloletnim doświadczeniem. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="card-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card first-card">
                        <div class="card-body">
                            <i class="fas fa-pencil-alt"></i>
                            <h3>Projekty</h3>
                            <p>Zaprojektujemy Twój ogród w nowoczesnym stylu i z najlepszym wykorzystaniem istniejącej przestrzeni.</p>
                            <a href="#" class="card-link">Dowiedz się więcej <x class="fas fa-arrow-right"></x></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card first-card">
                        <div class="card-body">
                            <i class="fas fa-pencil-alt"></i>
                            <h3>Wizualizacje</h3>
                            <p>Przedstawimy Ci projekty koncepcyjne w postaci wirtualnego spaceru animowanego w technologii 3D.</p>
                            <a href="#" class="card-link">Dowiedz się więcej <x class="fas fa-arrow-right"></x></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-pencil-alt"></i>
                            <h3>Realizacje</h3>
                            <p>Zrealizujemy Twoje marzenie przy użyciu najnowszych rozwiązań i zaawansowanych technologii.</p>
                            <a href="#" class="card-link">Dowiedz się więcej <x class="fas fa-arrow-right"></x></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- <section class="image-section">
        <div class="image-container">
            <img src="{{ asset('img/img5.jpg') }}" alt="Zdjęcie Firmy" class="image">
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-content">
                        <div class="about-box">
                            <a href="#o-firmie" class="about-link">O Firmie</a>
                            <h2>Tworzymy <br>z <span>pasją</span></h2>
                            <p>Każdy projekt to nowe wyzwanie. Dlatego nasz zespół tworzą wykwalifikowani projektanci oraz architekci, których zadaniem jest rozpoznanie i realizacja potrzeb każdego Klienta. Nasza specjalizacja to przestrzenie nowoczesne, które charakteryzuje minimalizm, geometria i elegancka prostota. Tworzymy ogrody małoobsługowe, dostosowane do współczesnego trybu życia.</p>
                            <a href="#o-firmie" class="btn btn-primary">Poznaj nas bliżej</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <div class="row">
        <section class="image-section col-md-6 ">
            <div class="image-container">
                <img src="{{ asset('img/img5.jpg') }}" alt="Zdjęcie Firmy" class="image">
            </div>
        </section>

        <section class="about-section col-md-6">
            <div class="about-content">
                <div class="about-box">
                    <a href="#o-firmie" class="about-link">O Firmie</a>
                    <h2>Tworzymy <br>z <span>pasją</span></h2>
                    <p>Każdy projekt to nowe wyzwanie. Dlatego nasz zespół tworzą wykwalifikowani projektanci oraz architekci, których zadaniem jest rozpoznanie i realizacja potrzeb każdego Klienta. Nasza specjalizacja to przestrzenie nowoczesne, które charakteryzuje minimalizm, geometria i elegancka prostota. Tworzymy ogrody małoobsługowe, dostosowane do współczesnego trybu życia.</p>
                    <a href="#o-firmie" class="btn-about">Poznaj nas bliżej <x class="fas fa-arrow-right"></x> </a>
                </div>
            </div>
        </section>
    </div>

    <section class="gallery-section">
        <div class="container-fluid">
            <div class="section-titles">
                <a href="#realizacje" class="section-link">Realizacje</a>
                <h2 class="section-title">Nasze
                <v class="section-title">projekty</v></h2>
            </div>
            <div class="gallery-container">
            <div class="gallery" id="masonry-gallery">
                <!-- Tu dodaj swoje zdjęcia -->
                <img class="item" src="{{ asset('img/img5.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img2.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img1.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img5.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img4.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img5.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img6.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img3.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img2.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img5.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img2.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img3.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img2.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img5.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img2.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img3.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img2.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img5.jpg') }}" alt="Zdjęcie Firmy" class="image">
                <img class="item" src="{{ asset('img/img2.jpg') }}" alt="Zdjęcie Firmy" class="image">

            </div>
            <button id="expand-button" class="expand-button">Rozwiń <i class="fas fa-arrow-down"></i></button>
        </div>
        </div>
    </section>

    <!-- Modal dla galerii zdjęć -->
    <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="gallery-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="modal-close" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <button id="modal-prev" class="btn btn-light btn-nav"><i class="fas fa-chevron-left"></i></button>
                    <img id="modal-image" class="img-fluid" alt="">
                    <button id="modal-next" class="btn btn-light btn-nav"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info d-flex flex-column justify-content-center align-items-center">
                <h2>Zostańmy w kontakcie!<br>Znajdziesz nas na <x>Instagramie.</x></h2>
            </div>
            <div class="contact-description d-flex flex-column justify-content-center align-items-center">
                <p>Śledź nasze <br>najnowsze realizacje!</p>
                <button class="contact-button">Instagram</button>
            </div>
        </div>
    </section>


    {{-- <footer class="footer-section">
        <div class="foot">
        <div class="footer-container">
            <div class="footer-logo">
                <a class="navbar-brand" href="#"><b class="text-white">giard</b>design </a>
            </div>
            <div class="footer-content">
                <p>Daj znać, co możemy dla Ciebie zrobić!</p>
                <button class="footer-button">Skontaktuj się z nami</button>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="footer-links">
            <div class="social-links">
                <a href="#">Kontakt</a>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Linkedin</a>
            </div>
            <div class="social-links">
                <span class="right-align">000-000-000</span>
                <span class="right-align">giarddesign@kontakt.pl</span>
            </div>
        </div>

        <div class="footer-bottom">
            <p>Prawa zastrzeżone &copy; 2023</p>
            <p>Made by adRespect</p>
        </div>
        </div>
    </footer> --}}


    <footer class="footer-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="footer-logo">
                        <a class="navbar-brand" href="#"><b class="text-white">giard</b>design </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-content mt-4 mt-md-0 justify-content-end">
                        <p>Daj znać, co możemy dla Ciebie zrobić!</p>
                        <button class="footer-button">Skontaktuj się z nami</button>
                    </div>
                </div>
            </div>
            <hr class="footer-divider mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="social-links">
                        <a href="#">Kontakt</a>
                        <a href="#">Facebook</a>
                        <a href="#">Instagram</a>
                        <a href="#">Linkedin</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social-links d-flex justify-content-end">
                        <span class="right-align">000-000-000</span>
                        <span class="right-align">giarddesign@kontakt.pl</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-bottom mt-4 mt-md-5">
                        <p class="text-md-start">Prawa zastrzeżone &copy; 2023</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-bottom mt-4 mt-md-5 justify-content-end">
                        <p>Made by adRespect</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/macy/2.5.1/macy.js" integrity="sha512-OkX9Zu3kqQlpQ+Mlstfn3ShxAh/yBn7J1HMTH/Hp2qT8iLoPgTADFhYI8i9qTi1XK+cj1PkzEFb7WFqPkHiHNw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- skrypt do ukladu zdjec masonry --}}
    <script>
        const msnry = new Macy({
        container: '.gallery',
        mobileFirst: true,
        columns: 1,
        breakAt: {
            576: 2,
            768: 2,
            992: 3,
        },
        margin: {
            x: 40,
            y: 40,
        }
        })
    </script>

    {{-- skrypt do rozwiania galerii (button) --}}
    <script>
        const expandButton = document.querySelector('.expand-button');
        const gallery = document.querySelector('.gallery');

        let isExpanded = false;

        expandButton.addEventListener('click', () => {
            if (!isExpanded) {
                gallery.style.maxHeight = 'none';
                expandButton.innerHTML = 'Zwiń <i class="fas fa-arrow-up"></i>';
            } else {
                gallery.style.maxHeight = '1824px'; /* Maksymalna wysokość galerii */
                expandButton.innerHTML = 'Rozwiń <i class="fas fa-arrow-down"></i>';
            }
            isExpanded = !isExpanded;
        });
    </script>

{{-- skrypt do modalu galerii --}}
<script>
    const images = document.querySelectorAll('.item');
    const modal = new bootstrap.Modal(document.getElementById('gallery-modal'));
    const modalImage = document.getElementById('modal-image');
    const modalPrevButton = document.getElementById('modal-prev');
    const modalNextButton = document.getElementById('modal-next');
    let currentIndex = 0;

    images.forEach((image, index) => {
        image.addEventListener('click', () => {
            currentIndex = index;
            updateModalImage();
            modal.show();
        });
    });

    const closeButton = document.getElementById('modal-close');
    closeButton.addEventListener('click', () => {
        modal.hide();
    });

    modalPrevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateModalImage();
    });

    modalNextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateModalImage();
    });

    function updateModalImage() {
        modalImage.src = images[currentIndex].src;
    }
</script>

    {{-- skrypt do rozwijania zdjecia w sekcji about --}}
    <script>
        const imageSection = document.querySelector('.image-section');
        const options = {
            threshold: 0.5, // Próg widoczności sekcji
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        observer.observe(imageSection);
    </script>

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

  </body>
</html>
