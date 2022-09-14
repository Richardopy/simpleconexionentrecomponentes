<div>
    <div class="row">
        <div class="col-md-12">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <select class="form-control" wire:model="categoria_id">
                        <option value="">Seleccione una opción</option>
                        <option value="1">Gaseosas</option>
                        <option value="2">Comestibles</option>
                    </select>
                </div>
                <input wire:model="search" class="form-control" type="search" placeholder="Buscar">
            </div>
        </div>
    </div>
</div>
