<?php
    class Abouttitulo extends Conexion{
        public static $abouttitulo = null;
        public static function get() {
            self::$abouttitulo = (!self::$abouttitulo instanceof self) ? new self() : self::$abouttitulo;
            return self::$abouttitulo; 
        }

        public function secciontituloabout(){
            $data = json_decode(json_encode($this->peticion), true)["about"];
            $plantilla = <<<HTML
            <h2 class="title" data-subtitulo="{$data['subtituloabout']}"> {$data['tituloabout']} </h2> 
            HTML;
            return $plantilla; 
        }

     }
?>

