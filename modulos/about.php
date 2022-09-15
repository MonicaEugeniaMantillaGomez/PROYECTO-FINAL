<?php
    class About extends Conexion{
        public static $about = null;
        public static function get() {
            self::$about = (!self::$about instanceof self) ? new self() : self::$about;
            return self::$about; 
        }

            
        public function seccionabout(){
            $data = json_decode(json_encode($this->peticion), true)["about"];
            $key = array_keys($data);
            $lista = json_encode($data["ocupacionesabout"]);
            $plantilla = <<<HTML
            <div class="column left">
            <img src="images/profile-1-1.jpg" alt="">
            </div>
            <div class="column right">
                
            <div class="text">{$data['conectorSoyAbout']} <span class="typing-2" data-lista='{$lista}'></span></div>
                <p>{$data['Descripcionabout']} </p>
                <a href="{$data[$key[5]]}">{$key[5]}</a>
            </div>
                
            HTML;
            return $plantilla; 
        }
    }
?>

