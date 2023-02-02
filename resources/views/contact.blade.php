@extends('layouts.app')

@section('content')
<section id="ms-contact" class="text-center" style="background-image: url('{{asset('img/contact_bg.jpg')}}')">
    <h2 class="fw-bold">Chiedi il tuo Rimborso</h2>
    <div class="ms-container ms-form-section">
        <form class="row g-3 needs-validation" novalidate>
            <h4 class="p-1">Inserisci i dati della prenotazione</h4>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" class="form-control" id="validationCustom01" value="" required placeholder="Inserisci nome">
              <div class="invalid-feedback">
                Please provide a valid name.
              </div>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationCustom02" value="" required placeholder="Inserisci cognome">
              <div class="invalid-feedback">
                Please provide a valid surname.
              </div>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label">Email</label>
              <input type="email" class="form-control" id="validationCustom03" required placeholder="Inserisci indirizzo mail">
              <div class="invalid-feedback">
                Please provide a valid email.
              </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom04" class="form-label">Company</label>
                <select class="form-select" id="validationCustom04" required>
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
              <label for="validationCustom05" class="form-label">Departure Airport</label>
              <input type="text" class="form-control" id="validationCustom05" required placeholder="Inserisci aeroporto partenza">
              <div class="invalid-feedback">
                Please provide a valid departure airport.
              </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom06" class="form-label">Arrival Airport</label>
                <input type="text" class="form-control" id="validationCustom06" required placeholder="Inserisci aeroporto arrivo">
                <div class="invalid-feedback">
                  Please provide a valid arrival airport.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom07 class="form-label">Flight number</label>
                <input type="text" class="form-control" id="validationCustom07" required placeholder="Inserisci numero volo">
                <div class="invalid-feedback">
                  Please provide a valid flight number.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom08" class="form-label">Flight date</label>
                <input type="date" class="form-control" id="validationCustom08" required>
                <div class="invalid-feedback">
                  Please provide a valid date.
                </div>
            </div>
            <div class="col-md-4 ms-radiobtn">

                <h5>Discomfort Experienced:</h5>

                <div class="form-check m-2">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                    <label class="form-check-label" for="validationFormCheck2">Delayed</label>
                </div>
                <div class="form-check m-2">
                    <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
                    <label class="form-check-label" for="validationFormCheck3">Canceled</label>
                </div>
                <div class="form-check m-2">
                    <input type="radio" class="form-check-input" id="validationFormCheck4" name="radio-stacked" required>
                    <label class="form-check-label" for="validationFormCheck4">Denied Boarding</label>
                    <div class="invalid-feedback">Select discomfort experienced</div>
                </div>

            </div>
            
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </form>
    </div>
</section>
@endsection