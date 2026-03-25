@extends('layouts.default')
@section('content')
<div class="container-fluid">
    <div class="row page-titles">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Gestión de Obras</a></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">Nueva Obra</a></li>
        </ol>
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Registro de Nueva Obra Pública</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('obras.store') }}" method="POST">
                            @csrf {{-- Token de seguridad obligatorio en Laravel --}}

                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Entidad Responsable *</label>
                                    <select id="entidad" class="default-select form-control wide" name="entidad" required>
                                        <option value="" selected disabled>Selecciona una opción...</option>
                                        <option value="Municipal">Gobierno Municipal</option>
                                        <option value="Estatal">Gobierno del Estado</option>
                                        <option value="JMAS">JMAS (Agua y Saneamiento)</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Periodo / Ejercicio (Año) *</label>
                                    <input type="number" class="form-control" name="periodo_ejercicio" placeholder="Ej. 2026" required>
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Número de Contrato *</label>
                                    <input type="text" class="form-control" name="numero_contrato" placeholder="Ej. OP-001-2026" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label">Objeto o Descripción de la Obra *</label>
                                    <textarea class="form-control" name="objeto_descripcion" rows="4" required placeholder="Describe brevemente el objetivo de la obra..."></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Monto Total (Con Impuestos)</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">$</span>
                                        <input type="number" step="0.01" class="form-control" name="monto_total_contrato">
                                    </div>
                                </div>

                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Fecha de Contrato</label>
                                    <input type="date" class="form-control" name="fecha_contrato">
                                </div>
                                
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Proveedor Adjudicado</label>
                                    <input type="text" class="form-control" name="proveedor" placeholder="Razón Social de la Empresa">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Guardar Datos Generales</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection