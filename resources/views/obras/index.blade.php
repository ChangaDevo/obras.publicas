@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="card mb-4">
    <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
        <div class="welcome-text">
            <h4 class="card-title mb-1">Directorio de Obras Públicas</h4>
            <p class="mb-0 text-muted">Consulta y gestiona todos los proyectos registrados</p>
        </div>
        <ol class="breadcrumb mb-0 mt-2 mt-sm-0">
            <li class="breadcrumb-item"><a href="{{ route('obras.index') }}">Gestión de Obras</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Directorio</a></li>
        </ol>
    </div>
</div>

    @if(session('success'))
        <div class="alert alert-success solid alert-dismissible fade show">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
            <strong>¡Éxito!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                    <h4 class="card-title">Obras Públicas Registradas</h4>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-success light" data-bs-toggle="modal" data-bs-target="#modalImportarExcel">
                            <i class="fas fa-file-excel me-2"></i> Importar Excel
                        </button>
                        <a href="{{ route('obras.create') }}" class="btn btn-primary">Registrar Nueva Obra</a>
                    </div>
                </div>
                <br>
                <br>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#ID</strong></th>
                                    <th><strong>ENTIDAD</strong></th>
                                    <th><strong>CONTRATO / PERIODO</strong></th>
                                    <th><strong>OBJETO DE LA OBRA</strong></th>
                                    <th><strong>MONTO TOTAL</strong></th>
                                    <th></th> </tr>
                            </thead>
                            <tbody>
                                {{-- Usamos forelse en lugar de foreach para poder mostrar un mensaje si la tabla está vacía --}}
                                @forelse($obras as $obra)
                                <tr>
                                    <td><strong>{{ str_pad($obra->id, 2, '0', STR_PAD_LEFT) }}</strong></td>
                                    <td>
                                        @if($obra->entidad == 'Municipal')
                                            <span class="badge badge-sm badge-info light">Municipal</span>
                                        @elseif($obra->entidad == 'Estatal')
                                            <span class="badge badge-sm badge-success light">Estatal</span>
                                        @else
                                            <span class="badge badge-sm badge-primary light">JMAS</span>
                                        @endif
                                    </td>
                                    <td>
                                        {{ $obra->numero_contrato }}<br>
                                        <small class="text-muted">{{ $obra->periodo_ejercicio }}</small>
                                    </td>
                                    <td>{{ Str::limit($obra->objeto_descripcion, 60) }}</td>
                                    <td>${{ number_format($obra->monto_total_contrato, 2) }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('obras.show', $obra->id) }}">Ver Detalles</a>
                                                <a class="dropdown-item" href="{{ route('obras.edit', $obra->id) }}">Editar Obra</a>
                                                {{-- Formulario oculto para que el botón de eliminar sea seguro --}}
                                                <form action="{{ route('obras.destroy', $obra->id) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="dropdown-item text-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta obra?')">Eliminar</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4">
                                        Aún no hay obras registradas. Haz clic en "Registrar Nueva Obra" para comenzar.
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
</div>
<div class="modal fade" id="modalImportarExcel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Importar Obras por Lote</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('obras.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="alert alert-info solid">
                        <strong>Instrucciones:</strong> El archivo debe ser .xlsx o .csv. La primera fila debe contener los encabezados exactos: <code>entidad, periodo_ejercicio, numero_contrato, objeto_descripcion, monto_total_contrato, fecha_contrato, proveedor</code>.
                    </div>
                    <div class="mb-3">
                        <label for="archivo_excel" class="form-label">Selecciona tu archivo Excel</label>
                        <input class="form-control" type="file" id="archivo_excel" name="archivo_excel" accept=".xlsx, .csv, .xls" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Subir e Importar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.body.appendChild(document.getElementById('modalImportarExcel'));
    });
</script>
@endsection