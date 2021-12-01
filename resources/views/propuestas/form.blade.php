<div class='title'>
    <i class="fa fa-paperclip" aria-hidden="true"></i>
    <h5>Editar Propuesta</h5>
</div>
<div class='content_form'>
    <form action="{{ route('propuestas.store') }}" method="POST" enctype="multipart/form-data">
        <div class='form_group'>
            <label for="prospectos">Prospecto</label>
            <select name="prospecto" id="prospectos" class="form-control select2" required disabled>
                <option value="" selected disable>Seleccione Prospecto</option>
                @foreach($prospectos as $item)
                <option value="{{$item->id}}"
                @if( $item->id == $propuesta->prospectos_id ) {!! _('selected') !!} @endif
                >{{$item->mnombre}}</option>
                @endforeach
            </select>
        </div>     
        <div class='form_group'>
            <label for="">Tipo de Venta</label>
            <select name="tp" required>
                <option value="" selected disable>Seleccione Tipo de Venta</option>
                @foreach($tiposventas as $item)
                <option value="{{$item->id}}"
                @if( $item->id == $propuesta->tipos_ventas_id  ) {!! _('selected') !!} @endif
                >{{$item->tnombre}}</option>
                @endforeach
            </select>
        </div>
        <div class='form_group'>
            <label for="">Estado</label>
            <select name="estado" required>
                <option value="" selected disable>Seleccione Estado</option>
                @foreach($estados as $item)
                <option value="{{$item->id}}"
                @if( $item->id == $propuesta->estados_id ) {!! _('selected') !!} @endif
                >{{$item->enombre}}</option>
                @endforeach
            </select>
        </div>
        <div class='form_group'>
            <label for="">País</label>
            <select name="paises[]" required class='select2' multiple="multiple">
                <option value="" selected disable>Seleccione País</option>
                @foreach($paises as $item)
                <option value="{{$item->id}}">{{$item->pnombre}}</option>
                @endforeach
            </select>
        </div>
        <div class='form_group'>
            <label for="">Proyecto</label>
            <select name="proyectos[]" required class='select2' multiple="multiple">
                <option value="" selected disable>Seleccione Proyecto</option>
                @foreach($proyectos as $item)
                <option value="{{$item->id}}">{{$item->pnombre}}</option>
                @endforeach
            </select>
        </div>
        <div class='form_group'>
            <label for="">Descripción de propuesta</label>
            <input type="text" name="descripcion" placeholder='Detalle los propuesta' value='{{$propuesta->descripcion}}' required>
        </div>
        <div class='form_group'>
            <label for="">Valor (sin impuestos)</label>
            <input type="number" name="valor" value='{{$propuesta->valor_sin_impuestos}}' required>
        </div>
        <div class='form_group'>
            <label for="">Moneda</label>
            <select name="moneda" required disabled>
                <option value="" selected disable>Seleccione</option>
                @foreach($monedas as $item)
                <option value="{{$item->id}}"
                @if( $item->id == $propuesta->monedas_id ) {!! _('selected') !!} @endif
                >{{$item->mnombre}}</option>
                @endforeach
            </select>
        </div>
        <div class='form_group'>
            <label for="">Fecha Servicio</label>
            <input class='double_input picker_date' type="text" name="finicio" placeholder='Desde' value='{{ $propuesta->fomatoFecha($propuesta->fecha_ini, "Y-m-d") }}' required>
            <input class='double_input picker_date' type="text" name="ffinal" placeholder='Hasta' value='{{ $propuesta->fomatoFecha($propuesta->fecha_fin, "Y-m-d") }}' required>
        </div>
        <div class='form_group justify-content-between mt-3'  >
            <div>
                <div class='file' id='file_quote'>
                    <input class='file__input--file' type="file" name="archivo" id="quote_file" required>
                    <label class="file__input--label" id="labelquote_file" for="quote_file" data-text-btn="Upload"><i class="fa fa-camera" aria-hidden="true"></i>Upload File</label>
                </div>
            </div>
            <div class='d-flex align-items-center'>
                <div class='btn button_form_close' onclick='out_modal()'>
                    <i class="fa fa-times" aria-hidden="true"></i>
                    Close
                </div>
                @csrf
                <button class='btn button_form_save'>
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                    Save
                </button>
            </div>
        </div>
    </form>
</div>