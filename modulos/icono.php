<?php
    class Icono extends Conexion{
        public static $icono = null;
        public static function get() {
            self::$icono = (!self::$icono instanceof self) ? new self() : self::$icono;
            return self::$icono; 
        }
        public function iconoMenu(){
            $cadena = explode("-", $this->peticion->Barra->logo);
            $plantilla = <<<HTML
                <a href=".">{$cadena[0]}<span>{$cadena[1]}</span></a>
            HTML;
            return $plantilla; 
        }
    }
?>