@extends('layouts.home')

@section('content')
<div class="containes">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Subir nueva imagen</div>

                <div class="card-body">
                    <form method="post" action="{{ Route('save') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row mb-2">
                            <label for="image_path" class="col-md-3 col-form-label text-md-right">Imagen</label>
                            <div class="col-md-7">
                                <input type="file" name="image_path" id="image_path" class="form-control">

                                @if (isset($erros))
                                    @if ($erros->has('image_path'))
                                        <span class="text-danger">{{ $erros->first('image_path') }}</span>
                                    @endif
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-2">
                            <label for="description" class="col-md-3 col-form-label text-md-right">Descripción</label>
                            <div class="col-md-7">
                                <textarea name="description" id="description" class="form-control" required></textarea>

                                @if (isset($erros))
                                    @if ($erros->has('description'))
                                        <span class="text-danger">{{ $erros->first('description') }}</span>
                                    @endif
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="Subir imagen" class="btn btn-primary w-50">
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection