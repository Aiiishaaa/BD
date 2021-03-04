@extends('layouts.app')
@section('content')

    <main id="main">
        <section class="breadcrumbs">
        </section>
        <section id="forum" class="forum">
            <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="mb-5 panel-heading">
                        <i class="icofont-wechat"></i> Historique de mes commentaires
                </div>
            </div>
      
            <ul  class="row">
                @foreach ($coments as $coment)
                @if ($coment-> user_id== Auth::user()->id)
                  <div class="modal fade modal-top" id="editComent_{{ $coment->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form action="{{route('coments.update', $coment->id)}}" method="POST" id="editForm" class="form-group formdialo rounded">
                                    @csrf 
                                    {{method_field('PATCH')}}
                                        <div class="modal-body">
                                            <h3>Modification de votre message</h3>
                                            <input type="hidden" id="{{ $coment->id }} ">
                                            <input type="text" class="form-control" id="modal__coment" value="{{ $coment->coment }}" name="coment" class="mb-3">
                                            <br>
                                            <input type="file" class="form-control" name="image" id="image">
                                            <input type="text" hidden name="user_id" value="{{Auth::user()->id}}">
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                <button type="submit" name="insertcoment" class="btn btn-primary">Valider</a>
                                            </div>
                                        </div>
                            </form>
                        </div>
                    </div>
              </div>
                <li  class="  col-lg-6 col-md-6 col-sm-12 d-none d-lg-block ">
                                                <div class=" col-lg-6 mb-3 "><b>  {{ $coment  -> created_at}}</b></div>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i> 
                                                {{ $coment -> coment}}
                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                              
                                                <form action="{{route('coments.destroy', $coment->id)}}" method="POST" onsubmit="return confirm('Étes-vous sûr de vouloir supprimer votre commentaire ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                     <button class="col-lg-3 mt-0" type="submit" name="button"><i class="icofont-ui-delete">Supprimer</i></button>
                                                </form>
                                                <button  class=" col-lg-3 mt-1" type='submit' name="button" class="btn edit_btn" data-coment="{{ json_encode($coments) }}" data-toggle="modal" data-target="#editComent_{{ $coment->id }}"><i class="icofont-pen-nib"> Editer</i></button>
                                           <br>
                        </li>
                 @endif
                @endforeach      
                                 <form enctype="multipart/form-data" action="{{route('coments.store')}}" method="POST">
                                                      @csrf
                                        <div class="group-form ml-4 mt-5">
                                                <input type="text" hidden name="user_id" value="{{Auth::user()->id}}">
                                                <textarea type='text' name="coment" class="form-controller" rows="5" cols="60"></textarea>
                                                 <button class=" offset-lg-3 col-lg-6 mt-0" type="submit" name="button"><i class="icofont-checked">Enregistrer</i></button>
                                        </div>
                                </form>
                        </ul>
                     </div>
               </div>
        </section>
    <!-- Fin #main -->
@endsection 