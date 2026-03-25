@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
            <div class="welcome-text">
                <h4 class="card-title mb-1">Expediente de Obra: {{ $obra->numero_contrato }}</h4>
                <p class="mb-0 text-muted">Ejercicio {{ $obra->periodo_ejercicio }} | {{ $obra->entidad }}</p>
            </div>
            <ol class="breadcrumb mb-0 mt-2 mt-sm-0">
                <li class="breadcrumb-item"><a href="{{ route('obras.index') }}">Directorio</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Expediente</a></li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-4 col-lg-5">
            <div class="card">
                <div class="card-header border-0 pb-0">
                    <h4 class="card-title">Datos Generales</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <strong>Monto Total:</strong> 
                            <span>${{ number_format($obra->monto_total_contrato, 2) }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <strong>Fecha Contrato:</strong> 
                            <span>{{ $obra->fecha_contrato ?? 'No registrada' }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between px-0">
                            <strong>Proveedor Ganador:</strong> 
                            <span>{{ $obra->proveedor ?? 'Pendiente' }}</span>
                        </li>
                    </ul>
                    <div class="mt-4">
                        <h6>Objeto de la Obra:</h6>
                        <p class="text-muted">{{ $obra->objeto_descripcion }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-lg-7">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center border-0 pb-0">
                    <h4 class="card-title">Empresas Participantes (Propuestas)</h4>
                    <button type="button" class="btn btn-sm btn-primary light" data-bs-toggle="modal" data-bs-target="#modalAgregarEmpresa">
                        + Agregar Propuesta
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th><strong>EMPRESA</strong></th>
                                    <th><strong>MONTO PROPUESTO</strong></th>
                                    <th><strong>ESTATUS</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($obra->propuestas as $propuesta)
                                <tr>
                                    <td>{{ $propuesta->nombre_empresa }}</td>
                                    <td>${{ number_format($propuesta->monto_propuesto, 2) }}</td>
                                    <td>
                                        @if($propuesta->es_ganadora)
                                            <span class="badge badge-success">Ganadora</span>
                                        @elseif($propuesta->es_solvente)
                                            <span class="badge badge-info light">Solvente</span>
                                        @else
                                            <span class="badge badge-danger light">Desechada</span>
                                        @endif
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-center py-4 text-muted">
                                        No hay empresas registradas en este procedimiento.
                                    </td>
                                </tr>
                                @endempty
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-12">
            <div class="card border-danger"> <div class="card-header">
                    <h4 class="card-title text-danger"><i class="fas fa-exclamation-triangle me-2"></i> Análisis de Riesgos (Karewa)</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('riesgos.store', $obra->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Riesgo General (Semáforo)</label>
                                    <select class="default-select form-control wide" name="riesgo_general">
                                        <option value="" disabled {{ !$obra->indicadorRiesgo ? 'selected' : '' }}>Selecciona un nivel...</option>
                                        <option value="Sin Riesgo" {{ optional($obra->indicadorRiesgo)->riesgo_general == 'Sin Riesgo' ? 'selected' : '' }}>🟢 Sin Riesgo</option>
                                        <option value="Riesgo Moderado" {{ optional($obra->indicadorRiesgo)->riesgo_general == 'Riesgo Moderado' ? 'selected' : '' }}>🟡 Riesgo Moderado</option>
                                        <option value="Riesgo Alto" {{ optional($obra->indicadorRiesgo)->riesgo_general == 'Riesgo Alto' ? 'selected' : '' }}>🔴 Riesgo Alto</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Monto de Sobreprecio (Si aplica)</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" step="0.01" class="form-control" name="sobreprecio_monto" value="{{ optional($obra->indicadorRiesgo)->sobreprecio_monto }}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Notas Karewa / Observaciones</label>
                                    <textarea class="form-control" name="notas_karewa" rows="4">{{ optional($obra->indicadorRiesgo)->notas_karewa }}</textarea>
                                </div>
                            </div>

                            <div class="col-md-6 pt-4">
                                <h5 class="mb-3">Banderas Rojas Detectadas</h5>
                                
                                <div class="form-check custom-checkbox mb-3">
                                    <input type="checkbox" class="form-check-input" id="sobreprecio_riesgo" name="sobreprecio_riesgo" value="1" {{ optional($obra->indicadorRiesgo)->sobreprecio_riesgo ? 'checked' : '' }}>
                                    <label class="form-check-label" for="sobreprecio_riesgo">Riesgo de Sobreprecio evidente</label>
                                </div>
                                <div class="form-check custom-checkbox mb-3">
                                    <input type="checkbox" class="form-check-input" id="empresa_fantasma_riesgo" name="empresa_fantasma_riesgo" value="1" {{ optional($obra->indicadorRiesgo)->empresa_fantasma_riesgo ? 'checked' : '' }}>
                                    <label class="form-check-label" for="empresa_fantasma_riesgo">Posible Empresa Fantasma (EF_riesgo)</label>
                                </div>
                                <div class="form-check custom-checkbox mb-3">
                                    <input type="checkbox" class="form-check-input" id="fraccionar_riesgo_ad" name="fraccionar_riesgo_ad" value="1" {{ optional($obra->indicadorRiesgo)->fraccionar_riesgo_ad ? 'checked' : '' }}>
                                    <label class="form-check-label" for="fraccionar_riesgo_ad">Riesgo de Fraccionar (Para evadir licitación)</label>
                                </div>
                                <div class="form-check custom-checkbox mb-3">
                                    <input type="checkbox" class="form-check-input" id="ausencia_competencia_propu" name="ausencia_competencia_propu" value="1" {{ optional($obra->indicadorRiesgo)->ausencia_competencia_propu ? 'checked' : '' }}>
                                    <label class="form-check-label" for="ausencia_competencia_propu">Ausencia de Competencia Real</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger mt-3">Guardar Análisis de Riesgo</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalAgregarEmpresa">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registrar Nueva Propuesta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('propuestas.store', $obra->id) }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Nombre de la Empresa *</label>
                            <input type="text" class="form-control" name="nombre_empresa" placeholder="Razón social" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Monto Propuesto</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" step="0.01" class="form-control" name="monto_propuesto" placeholder="0.00">
                            </div>
                        </div>
                        
                        <div class="form-check custom-checkbox mb-3 mt-4">
                            <input type="checkbox" class="form-check-input" id="es_solvente" name="es_solvente" value="1">
                            <label class="form-check-label" for="es_solvente">Es una propuesta solvente (cumple con los requisitos técnicos/económicos)</label>
                        </div>
                        <div class="form-check custom-checkbox mb-3">
                            <input type="checkbox" class="form-check-input" id="es_ganadora" name="es_ganadora" value="1">
                            <label class="form-check-label" for="es_ganadora">Es la empresa ganadora (se le adjudicó el contrato)</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Propuesta</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Esto arranca el modal de su contenedor actual y lo pega directo en el <body>
            // escapando de cualquier bloqueo o "secuestro" de la plantilla.
            document.body.appendChild(document.getElementById('modalAgregarEmpresa'));
        });
    </script>
@endsection