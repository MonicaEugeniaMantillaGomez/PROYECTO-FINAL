<?php
    class Tituloskills extends Conexion{
        public static $tituloskills = null;
        public static function get() {
            self::$tituloskills = (!self::$tituloskills instanceof self) ? new self() : self::$tituloskills;
            return self::$tituloskills; 
        }

        public function secciontituloskills(){
            $data = json_decode(json_encode($this->peticion), true)["skills"];
            $plantilla = <<<HTML
            <h2 class="title" data-subtitulo="{$data['subtituloSkills']}"> {$data['tituloSkills']} </h2> 
            HTML;
            return $plantilla; 
        }

     }
?>
