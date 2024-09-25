<?php

namespace App\Http\Abstracts\Services;

use Exception;

abstract class ProdutoServicesAbstracts extends ServicesAbstracts
{
    public function __construct()
    {
    }

    public function update($data)
    {
        $data = $this->validarInputsToggle($data);
        $query = $this->repository->update($data);
        return $query;
    }

    protected function validarInputsToggle($data)
    {
        $data['vender'] = isset($data['vender']) ? $data['vender'] : '0';
        $data['controlar_estoque'] = isset($data['controlar_estoque']) ? $data['controlar_estoque'] : '0';

        $resultado = array_map(function($valor) {
            return $valor === 'on' ? '1' : $valor;
        }, $data);

        return $resultado;
    }

}
