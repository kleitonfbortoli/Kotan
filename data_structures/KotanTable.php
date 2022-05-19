<?php
    namespace DataStructures;

    use \Ds\Stack;
    class KotanTable {
        private $map = array();

        public function dd(AbstractKotanSymbol $Symbol) : void {
            $map[$Symbol->getName] = $Symbol;
        }

        public function exists(string $SymbolName) : bool {
            return key_exists($SymbolName, self::$map);
        }

        public function get(string $SymbolName) : AbstractKotanSymbol {
            return self::$map[$SymbolName] ?? null;
            new Stack();
        }
    }
?>