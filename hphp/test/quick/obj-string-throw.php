<?php

class foo {
  public function __toString() { throw new Exception("asd"); }
}

function main() {
  echo (string)(new foo());
}

try { main(); } catch (Exception $x) {}
echo "done.\n";
