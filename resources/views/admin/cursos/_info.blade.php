
<div class="form-group">
    <input type="text" class="form-control" name="idioma" value="{{isset($registro->objetivos) ? $registro->objetivos: ''}}" placeholder="Objetivos">
 </div>
 <div class="form-group">
    <input type="text" class="form-control" name="idioma" value="{{isset($registro->Requisitos) ? $registro->requisitos: ''}}" placeholder="Requisitos">
 </div>
 <div class="form-group">
    <input type="text" class="form-control" name="file_titulo" value="{{isset($registro->file_titulo) ? $registro->file_titulo: ''}}" placeholder="Titulo do arquivo">
 </div>
 <div class="form-group">
    <input type="file" class="form-control" name="file_name" style="border:none; margin-left: -10px;">
  </div>
