<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="text-white mb-0"><i class="fa-solid fa-user-gear me-2"></i> Usuarios</h4>
    </div>

    <!-- Modal para editar usuario -->
    <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="modalUsuarioLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: rgba(33, 37, 41, 1) !important; color: white;">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalUsuarioLabel">Editar Usuario</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Cerrar"></button>
                </div>
                <form id="formUsuario">
                    <div class="modal-body">
                        <input type="hidden" name="id_usuario" id="id_usuario">
                        <div class="mb-3">
                            <label for="nombre_usuario" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre_usuario" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="correo_usuario" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="correo_usuario" name="correo" required>
                        </div>
                        <div class="mb-3">
                            <label for="contrasenia_usuario" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="contrasenia_usuario" name="contrasenia"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="tipo_usuario" class="form-label">Tipo de Usuario</label>
                            <select class="form-select" id="tipo_usuario" name="id_tipo_usuario" required>
                                <!-- Opciones dinámicas desde backend -->
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Filtros de búsqueda -->
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" class="form-control" id="inputBuscarUsuario" placeholder="Buscar...">
                <select class="form-select" id="selectFiltroUsuario">
                    <option value="">Selecciona...</option>
                    <option value="id">ID</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Lista de usuarios -->
    <ul class="list-group" id="lista-usuarios">
        <!-- Aquí se renderizan los usuarios dinámicamente -->
    </ul>
</div>