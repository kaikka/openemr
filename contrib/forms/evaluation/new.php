<?php
require_once("../../globals.php");
require_once("$srcdir/api.inc");

require("C_FormEvaluation.class.php");

$c = new C_FormEvaluation();
echo $c->default_action();
