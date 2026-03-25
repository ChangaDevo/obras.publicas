@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="card mb-4">
        <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
            <div class="welcome-text">
                <h4 class="card-title mb-1">Directorio de Contratistas</h4>
                <p class="mb-0 text-muted">Gestiona el padrón de proveedores y empresas adjudicadas</p>
            </div>
            <ol class="breadcrumb mb-0 mt-2 mt-sm-0">
                <li class="breadcrumb-item"><a href="{{ route('obras.index') }}">Inicio</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Proveedores</a></li>
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
                    <h4 class="card-title">Listado de Empresas</h4>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-success light" data-bs-toggle="modal" data-bs-target="#modalImportarProveedores">
                            <i class="fas fa-file-excel me-2"></i> Importar Proveedores
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th><strong>RFC</strong></th>
                                    <th><strong>RAZÓN SOCIAL</strong></th>
                                    <th><strong>TIPO</strong></th>
                                    <th><strong>REPRESENTANTE</strong></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($proveedores as $proveedor)
                                <tr>
                                    <td><strong>{{ $proveedor->rfc }}</strong></td>
                                    <td>{{ $proveedor->nombre_razon_social }}</td>
                                    <td>
                                        <span class="badge badge-sm badge-dark light">
                                            {{ $proveedor->persona_fisica_moral ?? 'N/A' }}
                                        </span>
                                    </td>
                                    <td>{{ $proveedor->representante_legal ?? 'No registrado' }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary light sharp" data-bs-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Ver Historial de Obras</a>
                                                <a class="dropdown-item" href="#">Editar Datos</a>
                                                <a class="dropdown-item text-danger" href="#">Dar de Baja</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted">No hay proveedores registrados. Importa un Excel para comenzar.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalImportarProveedores" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Carga Masiva de Proveedores</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('proveedores.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="alert alert-warning light">
                        <strong>Estructura del Excel:</strong><br>
                        Encabezados: <code>nombre, rfc, tipo, representante, domicilio</code>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Archivo Excel (.xlsx, .csv)</label>
                        <input class="form-control" type="file" name="archivo_excel" accept=".xlsx, .csv" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Importar Ahora</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.body.appendChild(document.getElementById('modalImportarProveedores'));
    });
</script>
@endsection