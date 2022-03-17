@extends('layout.template')

@section('content')

<section class="container form">
      <h1>Contactez-nous!</h1>
     
        <form class="row g-3" method="POST" action="{{route('results')}}">
          @csrf
          <div class="col-md-6">
            <label for="lastname" class="form-label">Nom</label>
            <input
              type="text"
              class="form-control @error('lastname') is-invalid @enderror" 
              name="lastname"
              id="lastname"
              value="{{ old('lastname') }}"
              {{-- required --}}
            />
            @error('lastname')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="firstname" class="form-label">Prénom</label>
            <input
              type="text"
              class="form-control @error('firstname') is-invalid @enderror"
              id="firstname"
              name="firstname"
              value="{{ old('firstname') }}"
              {{-- required --}}
            />
            @error('firstname')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              class="form-control @error('email') is-invalid @enderror"
              id="email"
              name="email"
              placeholder="jean.jacque@laposte.net"
              value="{{ old('email') }}"
              {{-- required --}}
            />
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="inputChoice" class="form-label"
              >Raison de votre message</label
            >
            <select id="inputChoice" class="form-select" name="raison" >
              <option value="">Choisissez parmi la liste</option>
              <option value="sav">SAV</option>
              <option value="job">Job</option>
              <option value="partenariat">Partenariat</option>
              <option value="autre">Autre</option>
            </select>
          </div>
          <div class="col-12">
            <label for="message" class="form-label">Message</label>
            <textarea
              name="message"
              class="form-control @error('message') is-invalid @enderror"
              id="message"
              {{-- required --}}
              placeholder="Tapez votre message ici ...">{{ old('message') }}
            </textarea>
            @error('message')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="col-lg-6">
            <button
              type="submit"
              class="btn btn-primary"
             >
              Envoyer
            </button>
          </div>
        </form>
      </section>
      @endsection
   