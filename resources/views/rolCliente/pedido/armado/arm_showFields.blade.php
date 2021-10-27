@include('venta.pedido.pedido_activo.armado_pedidoActivo.ven_pedAct_armPedAct_showFields.imagen')
@include('venta.pedido.pedido_activo.armado_pedidoActivo.ven_pedAct_armPedAct_showFields.created')
<div class="row">
  @include('venta.pedido.pedido_activo.armado_pedidoActivo.ven_pedAct_armPedAct_showFields.estatusCliente')
  @include('venta.pedido.pedido_activo.armado_pedidoActivo.ven_pedAct_armPedAct_showFields.codigo')
  @include('venta.pedido.pedido_activo.armado_pedidoActivo.ven_pedAct_armPedAct_showFields.gama')
</div>
<div class="row">
  @include('venta.pedido.pedido_activo.armado_pedidoActivo.ven_pedAct_armPedAct_showFields.cantidad')
  @include('venta.pedido.pedido_activo.armado_pedidoActivo.ven_pedAct_armPedAct_showFields.tipo')
</div>
<div class="row">
  @include('venta.pedido.pedido_activo.armado_pedidoActivo.ven_pedAct_armPedAct_showFields.nombreDeArmado')
  @include('venta.pedido.pedido_activo.armado_pedidoActivo.ven_pedAct_armPedAct_showFields.sku')
</div>
@include('venta.pedido.pedido_activo.armado_pedidoActivo.ven_pedAct_armPedAct_showFields.productosArmado')
@include('venta.pedido.pedido_activo.armado_pedidoActivo.ven_pedAct_armPedAct_showFields.medidas')
<div class="row">
  @include('venta.pedido.pedido_activo.armado_pedidoActivo.ven_pedAct_armPedAct_showFields.comentariosCliente')
</div>
<div class="row">
  <div class="form-group col-sm btn-sm">
    <center><a href="{{ route('rolCliente.pedido.show', Crypt::encrypt($pedido->id)) }}" class="btn btn-default w-50 p-2 border"><i class="fas fa-sign-out-alt text-dark"></i> {{ __('Continuar con el pedido') }}</a></center>
  </div>
</div>
@include('layouts.private.plugins.priv_plu_select2')
@section('js2')
<script>
  $('.select2').prop("disabled", true);
</script>
@endsection