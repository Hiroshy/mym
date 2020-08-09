<?php
    //Incluimos la Base de datos
    require ("bd.php");
    // Creamos la clase tienda
    class Tienda extends DB{
        private $tiendaNombre;
        private $logo;
        private $logoBarraNavegacion;
        private $descripcion;
        private $palabraClave;
        private $telefono;
        private $email;
        private $whatsapp;
        private $tituloOpcional;
        public  $autor;

        public function __construct($nombreTienda,$telefonoTienda,$emailTienda,$whatsappTienda){
           $this->tiendaNombre=$nombreTienda;
           $this->telefono=$telefonoTienda;
           $this->email=$emailTienda;
           $this->whatsapp=$whatsappTienda;
        }

        public function nombreTienda(){
            return $this->tiendaNombre;
        }

        public function miTelefono(){
            return $this->telefono;
        }

        public function miEmail(){
            return $this->email;
        }

        public function botonWhtssp(){
            return $this->whatsapp;
        }

        public function asigna_iconoAplicacion($ruta){
            $this->logo=$ruta;
        }

        public function iconoAplicacion(){
            return $this->logo;
        }

        public function asigna_iconoAplicacionNav($ruta){
            $this->logo=$ruta;
        }

        public function iconoAplicacionNav(){
            return $this->logo;
        }

        public function asigna_metaDescription($descrpc){
            $this->descripcion=$descrpc;
        }

        public function metaDescription(){
            return $this->descripcion;
        }

        public function asigna_metaKeywords($key){
            $this->palabraClave=$key;
        }

        public function metaKeywords(){
            return $this->palabraClave;
        }

        public function iconoApp(){
            return $this->logo;
        }

        public function asigna_titulOpcional($titulo){
            $this->tituloOpcional=$titulo;
        }

        public function titulOpcional(){
            if (strlen($this->tituloOpcional)>1) {
                return $this->tituloOpcional;
            }else{
                metaDescription();
            }
        }
        public function asigna_autor($autorOk){
            $this->autor=$autorOk;
        }
        public function autor(){
            return $this->autor;
        }

    }

    $tienda=new Tienda('AM Real State',5621429436,'',5621429436);
    $tienda->asigna_iconoAplicacion("../media/logo/logo am real state_circle.png");
    $tienda->asigna_iconoAplicacionNav("../media/logo/logo_am_real_estate.png");
    $tienda->asigna_autor("Invirix");
?>