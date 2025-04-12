export function proveedorTemplate(proveedor) {
  return `
      <li class="list-group-item bg-dark text-white d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
          <div class="fw-bold">${proveedor.nombre}</div>
          <small>
            ID: ${proveedor.id_proveedor} |
            Email: ${proveedor.email} |
            Tel: ${proveedor.telefono}
          </small>
          <br>
          <span class="badge bg-secondary">${proveedor.direccion}</span>
        </div>
        <div>
          <button class="btn btn-sm btn-editar-proveedor me-2" data-id="${proveedor.id_proveedor}" style="background-color: #00A36C; color: white; border: none;">
            <i class="bi bi-pencil"></i> Editar
          </button>
          <button class="btn btn-sm btn-eliminar-proveedor" data-id="${proveedor.id_proveedor}" style="background-color: #FF073A; color: white; border: none;">
            <i class="bi bi-trash"></i> Eliminar
          </button>
        </div>
      </li>
    `;
}
