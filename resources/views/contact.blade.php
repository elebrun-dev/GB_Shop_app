@extends('template')

@section('content')

<section class="form">
      <h1>Contactez-nous!</h1>
     
        <form class="row g-3" method="POST" action="{{route('results')}}">
          @csrf
          <div class="col-md-6">
            <label for="inputName" class="form-label">Nom</label>
            <input
              type="text"
              class="form-control"
              name="nom"
              id="inputName"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="inputLastname" class="form-label">Prénom</label>
            <input
              type="text"
              class="form-control"
              id="inputLastname"
              name="prenom"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input
              type="email"
              class="form-control"
              id="inputEmail"
              name="email"
              placeholder="jean.jacque@laposte.net"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="inputChoice" class="form-label"
              >Raison de votre message</label
            >
            <select id="inputChoice" class="form-select" name="raison" required>
              <option value="">Choisissez parmi la liste</option>
              <option value="sav">SAV</option>
              <option value="job">Job</option>
              <option value="partenariat">Partenariat</option>
              <option value="autre">Autre</option>
            </select>
          </div>
          <div class="col-12">
            <label for="inputMessage" class="form-label">Message</label>
            <textarea
              name="message"
              class="form-control text1"
              id="inputMessage"
              placeholder="Tapez votre message ici ..."
              required
            ></textarea>
          </div>
          <!-- Button trigger modal CHANGER ICI POUR LE TYPE DE BOUTTON-->
          <div class="col-lg-6">
            <button
              type="submit"
              class="btn btn-primary"
              {{-- data-bs-toggle="modal"
              data-bs-target="#staticBackdrop" --}}
            >
              Envoyer
            </button>
          </div>

          <!-- Modal -->
          {{-- <div
            class="modal fade"
            id="staticBackdrop"
            data-bs-backdrop="static"
            data-bs-keyboard="false"
            tabindex="-1"
            aria-labelledby="staticBackdropLabel"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">
                    Votre message a bien été envoyé !
                  </h5>
                  
                </div>
                <div class="modal-footer">
                  <button
                    type="submit"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal"
                  >
                    Fermer
                  </button>
                  
                </div>
              </div>
            </div>
          </div> --}}
        </form>
           
      </section>
   
      @endsection
   