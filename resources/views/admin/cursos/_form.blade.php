<script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
  <div class="form-group">
    <input type="text" class="form-control" name="categoria" value="{{isset($registro->categoria) ? $registro->categoria : ''}}" placeholder="Categoria">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}" placeholder="Titulo">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="slug" value="{{isset($registro->slug) ? $registro->slug : ''}}" placeholder="Sub Titulo">
  </div>
  <div class="form-group">
       <textarea name="descricao" rows="6" class="form-control" placeholder="Descrição">
         {{isset($registro->descricao) ? $registro->descricao : ''}}
       </textarea>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}" placeholder="Valor">
  </div>
  <div class="form-group">
    <input type="file" class="form-control" name="imagem" style="border:none; margin-left: -10px;">
  </div>
  @if(isset($registro->imagem))
  <div class="">
    <img width="150" src="{{asset($registro->imagem)}}" />
  </div>
  @endif
  <br>
  <div class="form-group">
    <input type="text" class="form-control" name="autor" value="{{isset($registro->autor) ? $registro->autor : ''}}" placeholder="Autor">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="idioma" value="{{isset($registro->idioma) ? $registro->idioma : ''}}" placeholder="Idioma">
  </div>

  <div class="custom-control custom-checkbox mb-5">
    <input type="checkbox" class="custom-control-input" id="customCheck1" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }} value="true">
    <label class="custom-control-label" for="customCheck1">Publicar?</label>
  </div>
  <!--estrutura do formulario-->
