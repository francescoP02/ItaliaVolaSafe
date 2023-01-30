@extends('layouts.app')

@section('content')
<section id="ms-contact" class="text-center">
    <h2 class="fw-bold">Chiedi il tuo Rimborso</h2>
    <div class="ms-container ms-form-section">
        <form class="row g-3 needs-validation" novalidate>
            <h4 class="p-1">Inserisci i dati della prenotazione</h4>
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Last name</label>
              <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-12">
              <label for="validationCustom03" class="form-label">City</label>
              <input type="text" class="form-control" id="validationCustom03" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom04" class="form-label">State</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Choose...</option>
                  <option>...</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid state.
                </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Zip</label>
              <input type="text" class="form-control" id="validationCustom05" required>
              <div class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" required>
                <div class="invalid-feedback">
                  Please provide a valid zip.
                </div>
            </div>
            <div class="col-md-4 ms-radiobtn">

                <div class="form-check m-2">
                    <input type="radio" class="form-check-input" id="validationFormCheck2" name="radio-stacked" required>
                    <label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
                </div>
                <div class="form-check m-2">
                    <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked" required>
                    <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
                    <div class="invalid-feedback">More example invalid feedback text</div>
                </div>
                <div class="form-check m-2">
                    <input type="radio" class="form-check-input" id="validationFormCheck4" name="radio-stacked" required>
                    <label class="form-check-label" for="validationFormCheck4">Or toggle this other radio</label>
                    <div class="invalid-feedback">More example invalid feedback text</div>
                </div>

            </div>
            
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
          </form>
    </div>
</section>
@endsection