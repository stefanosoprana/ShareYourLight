@extends('layouts.admin_app')

@section('sidebar')
  @include('layouts.sidebar.admin_app')
@endsection

@section('content')

  <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiungi Nuova Pagina</h1>
                <form class="form-group" action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value={{Auth::user()->id}} >


                      {{-- *** PAGE *** --}}

                    <div class="section__page">
                      <div class="form-group section__page__title">
                        <label for="title_page">Titolo</label>
                        <input type="text" name="title_page" class="form-control">
                      </div>
                      <div class="form-group section__page__description" >
                        <label for="description_page">Descrizione</label>
                        <textarea name="description_page" class="form-control" rows="8" cols="80"></textarea>
                      </div>
                      <div class="section__page__button">
                        <button type="button" name="button" class="btn btn-primary">Avanti</button>
                      </div>
                    </div>


                    {{-- *** SECTION *** --}}


                    <div class="section__section display-none">
                      <h4>Inserisci una sezione</h4>
                      <div class="form-group section__section__title">
                        <label for="title_section">Titolo</label>
                        <input type="text" name="title_section" class="form-control" placeholder="es. Header, Footer">
                      </div>
                      <div class="section__section__button">
                        <button type="button" name="button" class="btn btn-primary">Avanti</button>
                      </div>
                    </div>


                    {{-- *** ELEMENT *** --}}


                    {{-- <div class="section__element display-none">
                      <h4>Scegli un elemento</h4>
                      <div class="form-group section__element__select">
                        <select class="form-control" name="">
                          <option value="">---</option>
                          <option value="titolo">Titolo</option>
                          <option value="sottotitolo">Sottotitolo</option>
                          <option value="immagine">Immagine</option>
                          <option value="descrizione">Descrizione</option>
                        </select>
                      </div>
                    </div> --}}

                  <div class="section__element display-none">

                    <div class="option section__title">
                      <h4>Inserisci un titolo</h4>
                      <div class="form-group section__element">
                        <label for="element_title_title">Titolo</label>
                        <input type="text" name="element_title_title" class="form-control" placeholder="Non verrà visualizzato in pagina">
                      </div>
                      <div class="form-group">
                        <label for="element_text_title">Testo</label>
                        <input type="text" name="element_text_title" class="form-control">
                      </div>
                    </div>



                    <div class="option section__subtitle">
                      <h4>Inserisci un sottotolo</h4>
                      <div class="form-group section__element">
                        <label for="element_title_subtitle">Titolo</label>
                        <input type="text" name="element_title_subtitle" class="form-control" placeholder="Non verrà visualizzato in pagina">
                      </div>
                      <div class="form-group">
                        <label for="element_text_subtitle">Testo</label>
                        <input type="text" name="element_text_subtitle" class="form-control">
                      </div>
                    </div>



                    <div class="option section__description">
                      <h4>Inserisci una descrizione</h4>
                      <div class="form-group section__element">
                        <label for="element_title_description">Titolo</label>
                        <input type="text" name="element_title_description" class="form-control" placeholder="Non verrà visualizzato in pagina">
                      </div>
                      <div class="form-group">
                        <label for="element_text_description">Descrizione</label>
                        <textarea name="element_text_description" rows="8" cols="80" class="form-control"></textarea>
                      </div>
                    </div>



                    <div class="option section__image">
                      <h4>Inserisci un'immagine</h4>
                      <div class="form-group section__element">
                        <label for="element_title_image">Titolo</label>
                        <input type="text" name="element_title_image" class="form-control" placeholder="Non verrà visualizzato in pagina">
                      </div>
                      <div class="form-group">
                        <label for="image">Immagine</label> <br>
                        <input type="file" name="image">
                      </div>
                    </div>

                    <div class="form-group">
                      <input type="submit" value="Crea Pagina" class="form-control">
                    </div>
                  </div>



                    <div class="form-group add-element display-none">
                      <a href="#" class="btn btn-secondary">Inserisci un altro elemento</a>
                    </div>
                    <div class="form-group display-none">
                      <a href="#" class="btn btn-primary">Inserisci un'altra sezione</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
