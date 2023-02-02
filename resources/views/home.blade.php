@extends('layouts.app')

@section('content')
    {{-- Jumbotron --}}
    <div class="jumbotron jumbotron-fluid" style="background-image: url('{{asset('img/plane_bg.jpg')}}')">
        <div class="ms-jumbotron-container d-flex">
            <div class="ms-jumbotron-text align-self-center" data-aos = "fade-left">

                <h1 class="display-4 pb-2 fw-bold">ItaliaVolaSafe</h1>
                <p>ItaliaVolaSafe è un portale interamente dedicato alla tutela dei passeggeri che hanno subìto dei disagi aerei. ItaliaVolaSafe, grazie ad una rete di professionisti specializzati nel diritto dei trasporti europeo e globale, è in grado di offrirti la miglior tutela possibile per le problematiche relative al tuo volo!</p>

            </div>
        </div>
    </div>
    {{-- /Jumbotron --}}

    {{-- Card Section --}}
    <section class="text-center ms-card-section container">

        <h2 class="ms-card-h3 fw-bold">DISAGI</h2>

        <div class="ms-cardbox">
            <div class="card ms-card" data-aos = "fade-left">
                <img class="card-img-top" src="{{asset('img/delayed.jpg')}}" alt="Delayed Flight">
                <div class="card-body">
                  <h5 class="card-title">Ritardo Volo</h5>
                  <p class="card-text">Ritardo aereo superiore alle 3 ore?<br> Verifica il tuo rimborso! Potresti aver diritto a fino 600€ in tempi rapidi e senza spese.</p>
                </div>
              </div>
              <div class="card ms-card" data-aos = "fade-up">
                <img class="card-img-top" src="{{asset('img/canceled.jpg')}}" alt="Canceled Flight">
                <div class="card-body">
                  <h5 class="card-title">Volo Cancellato</h5>
                  <p class="card-text">Volo cancellato?<br> Pensiamo Noi a richiedere ed ottenere il tuo rimborso aereo, senza spese!</p>
                </div>
              </div>
              <div class="card ms-card" data-aos = "fade-right">
                <img class="card-img-top" src="{{asset('img/overbooking.jpg')}}" alt="Overbooked Flight">
                <div class="card-body">
                  <h5 class="card-title">Negato Imbarco</h5>
                  <p class="card-text">Ti hanno negato l'imbarco per overbooking? <br> Compila il form e ci occuperemo di richiedere il tuo rimborso!</p>
                </div>
              </div>
        </div>

    </section>
    {{-- /Card Section --}}

    {{-- Refound Instruction Section --}}
    <section class="text-center ms-refound-section">

        <h2>Come richiedere il Tuo Rimborso</h2>
        <div id="timeline">

            <div class="demo-card-wrapper">
                <div class="demo-card demo-card--step1" data-aos = "fade-left">
                    <div class="head">
                        <div class="number-box">
                            <span>01</span>
                        </div>
                        <h2><span class="small">INSERISCI I TUOI DATI</h2>
                    </div>
                    <div class="body">
                        <p>Inserisci i dati del tuo volo e in pochi istanti scoprirai a quanto ammonta il tuo rimborso in caso di volo in ritardo, volo cancellato, volo in overbooking, bagaglio perso o riconsegnato in ritardo.</p>
                    </div>
                </div>
        
                <div class="demo-card demo-card--step2" data-aos = "fade-right">
                    <div class="head">
                        <div class="number-box">
                            <span>02</span>
                        </div>
                        <h2><span class="small">CARICA LE INFORMAZIONI</h2>
                    </div>
                    <div class="body">
                        <p>Ti chiederemo le infromazioni necessaria ad avviare la pratica per richiedere il tuo rimborso in tempi brevissimi.</p>
                    </div>
                </div>
        
                <div class="demo-card demo-card--step3" data-aos = "fade-left">
                    <div class="head">
                        <div class="number-box">
                            <span>03</span>
                        </div>
                        <h2><span class="small">RICEVI I TUOI SOLDI</h2>
                    </div>
                    <div class="body">
                        <p>Ottenere il tuo rimborso con il nostro supporto è più semplice e veloce. Come ItaliaVolaSafe ci occuperemo di tutto Noi, prendendoci cura dell’iter burocratico senza impegno e costi per te!</p>
                    </div>
                </div>
            
            </div>
            
        </div>

        

    </section>
    {{-- /Refound Instruction Section --}}

    {{-- About Us --}}
    <section id="about-us-section" class="text-center py-4 w-100 container">
        <h2 class="p-3 fw-bold" data-aos = "fade-right">About Us</h2>

        <p class="p-2" data-aos = "fade-right">La missione di VolaSafe è semplice: fornire servizi di alta qualità ai nostri clienti. Il nostro team fa di tutto per soddisfare le esigenze specifiche di ogni progetto. Attraverso una comunicazione chiara e un servizio eccezionale, speriamo che troverai quello che stai cercando con il nostro Servizio di fabbro. Per ulteriori informazioni e domande, contattaci al più presto.</p>
        
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-aos = "fade-right">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/support_team.jpeg')}}" class="d-block w-100" alt="Support Team">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/volo-cancellato.jpg')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/happy_customer.jpg')}}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section>
    {{-- /About Us --}}

@endsection