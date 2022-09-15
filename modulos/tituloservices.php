<?php
    class Tituloservices extends Conexion{
        public static $tituloservices = null;
        public static function get() {
            self::$tituloservices = (!self::$tituloservices instanceof self) ? new self() : self::$tituloservices;
            return self::$tituloservices; 
        }

        public function secciontituloservices(){
            $data = json_decode(json_encode($this->peticion), true)["services"];
            $plantilla = <<<HTML
            <h2 class="title" data-subtitulo="{$data['subtituloservices']}"> {$data['tituloservices']} </h2> 
            HTML;
            return $plantilla; 
        }

     }
?>
