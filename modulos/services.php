<?php
    class Services extends Conexion{
        public static $services = null;
        public static function get() {
            self::$services = (!self::$services instanceof self) ? new self() : self::$services;
            return self::$services; 
        }

            
        public function seccionservices(){
            $data = json_decode(json_encode($this->peticion), true)["services"];
            $lista = $data["card"];
            $plantilla = <<<HTML
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="{$lista[0]['icono']}"></i>
                        <div class="text"> {$lista[0]['titulo']} </div>
                        <p>{$lista[0]['descripcion']}</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="{$lista[1]['icono']}"></i>
                        <div class="text"> {$lista[1]['titulo']} </div>
                        <p>{$lista[1]['descripcion']}</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="{$lista[2]['icono']}"></i>
                        <div class="text"> {$lista[2]['titulo']} </div>
                        <p>{$lista[2]['descripcion']}</p>
                    </div>
                </div>
            </div>
                
            HTML;
            return $plantilla; 
        }
    }
?>