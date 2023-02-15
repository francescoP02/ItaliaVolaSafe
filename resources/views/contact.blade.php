@extends('layouts.app')

@section('content')
<section id="ms-contact" class="text-center" style="background-image: url('{{asset('img/contact_bg.jpg')}}')">
    <h2 class="fw-bold">Chiedi il tuo Rimborso</h2>
    <div class="ms-container ms-form-section">
        <form class="row g-3 needs-validation" action="{{ route('emails.store') }}" method="POST" enctype="multipart/form-data" novalidate>
          @method('POST')
          @csrf

            <h4 class="p-1">Inserisci i dati della prenotazione</h4>
            <div class="col-md-6">
              <label for="first_name" class="form-label">First name</label>
              <input type="text" class="form-control" id="first_name" value="" name="first_name" required placeholder="Inserisci nome">
              <div class="invalid-feedback">
                Please provide a valid name.
              </div>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6">
              <label for="last_name" class="form-label">Last name</label>
              <input type="text" class="form-control" name="last_name" id="last_name" value="" required placeholder="Inserisci cognome">
              <div class="invalid-feedback">
                Please provide a valid surname.
              </div>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" required placeholder="Inserisci indirizzo mail">
              <div class="invalid-feedback">
                Please provide a valid email.
              </div>
            </div>
            <div class="col-md-12">
                <label for="company" class="form-label">Company</label>
                <select class="form-select" name="company" id="company" required>
                  <option selected disabled value="">Choose company</option>
                  <option>EasyJet</option>
                  <option>Emirates</option>
                  <option>Iberia</option>
                  <option>ITA Airways</option>
                  <option>Ryanair</option>
                  <option>Tap Portugal</option>
                  <option>Volotea</option>
                  <option>Vueling</option>
                  <option>Wizz Air</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid company.
                </div>
            </div>
            <div class="col-md-6">
              <label for="departure_airport" class="form-label">Departure Airport</label>
              <input type="text" class="form-control" name="departure_airport" id="departure_airport" required placeholder="Inserisci aeroporto partenza">
              <div class="invalid-feedback">
                Please provide a valid departure airport.
              </div>
            </div>
            <div class="col-md-6">
                <label for="arrival_airport" class="form-label">Arrival Airport</label>
                <input type="text" class="form-control" name="arrival_airport" id="arrival_airport" required placeholder="Inserisci aeroporto arrivo">
                <div class="invalid-feedback">
                  Please provide a valid arrival airport.
                </div>
            </div>
            <div class="col-md-6">
                <label for="flight_number" class="form-label">Flight number</label>
                <input type="text" class="form-control" name="flight_number" id="flight_number" required placeholder="Inserisci numero volo">
                <div class="invalid-feedback">
                  Please provide a valid flight number.
                </div>
            </div>
            <div class="col-md-6">
                <label for="flight_date" class="form-label">Flight date</label>
                <input type="date" class="form-control" name="flight_date" id="flight_date" required>
                <div class="invalid-feedback">
                  Please provide a valid date.
                </div>
            </div>

            <div class="col-md-12">
              <label for="discomfort" class="form-label">Discomfort Experienced:</label>
              <select class="form-select" name="discomfort" id="discomfort" required>
                <option selected disabled value="">Choose discomfort</option>
                <option>Delayed</option>
                <option>Canceled</option>
                <option>Denied Boarding</option>
              </select>
              <div class="invalid-feedback">Select discomfort experienced</div>
          </div>
            
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </form>
    </div>
</section>
@endsection