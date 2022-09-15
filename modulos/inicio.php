<?php
    class Inicio extends Conexion{
        public static $inicio = null;
        public static function get() {
            self::$inicio = (!self::$inicio instanceof self) ? new self() : self::$inicio;
            return self::$inicio; 
        }
        public function seccionInicio(){
            $data = json_decode(json_encode($this->peticion), true)["home"];
            $key = array_keys($data);
            $lista = json_encode($data["ocupaciones"]);
            $plantilla = <<<HTML
                <div class="text-1">{$data["saludo"]}</div>
                <div class="text-2">{$data["nombre"]}</div>
                <div class="text-3">{$key[2]} <span class="typing" data-lista='{$lista}'></span> </div>
                <a href="{$data[$key[4]]}">{$key[4]}</a>
            HTML;
            return $plantilla; 
        }
       
    }
?>