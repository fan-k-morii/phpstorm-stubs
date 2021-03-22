<?php

define('RUNKIT_IMPORT_FUNCTIONS', 1);
define('RUNKIT_IMPORT_CLASS_METHODS', 2);
define('RUNKIT_IMPORT_CLASS_CONSTS', 4);
define('RUNKIT_IMPORT_CLASS_PROPS', 8);
define('RUNKIT_IMPORT_CLASS_STATIC_PROPS', 16);
define('RUNKIT_IMPORT_CLASSES', 30);
define('RUNKIT_IMPORT_OVERRIDE', 32);
define('RUNKIT_ACC_PUBLIC', 256);
define('RUNKIT_ACC_PROTECTED', 512);
define('RUNKIT_ACC_PRIVATE', 1024);
define('RUNKIT_ACC_STATIC', 1);
define('RUNKIT_VERSION', '1.0.4');

/**
 * @param string $classname
 * @param string $parentname
 * @return bool
 */
function runkit_class_adopt($classname, $parentname) {}

/**
 * @param string $classname
 * @return bool
 */
function runkit_class_emancipate($classname) {}

/**
 * @param string $constname
 * @param mixed $value
 * @return bool
 */
function runkit_constant_add($constname, $value) {}

/**
 * @param string $constname
 * @param mixed $newvalue
 * @return bool
 */
function runkit_constant_redefine($constname , $newvalue) {}

/**
 * @param $constname
 * @return bool
 */
function runkit_constant_remove($constname) {}

/**
 * @param string $funcname
 * @param Closure $closure
 * @param string|null $doc_comment
 * @return bool
 */
function runkit_function_add($funcname, $closure, $doc_comment = null) {}

/**
 * @param string $funcname
 * @param string $targetname
 * @return bool
 */
function runkit_function_copy($funcname, $targetname) {}

/**
 * @param string $funcname
 * @param Closure $closure
 * @param string|null $doc_comment
 * @return bool
 */
function runkit_function_redefine($funcname, $closure, $doc_comment = null) {}

/**
 * @param string $funcname
 * @return bool
 */
function runkit_function_remove($funcname) {}

/**
 * @param string $funcname
 * @param string $newname
 * @return bool
 */
function runkit_function_rename($funcname , $newname) {}

/**
 * @param string $filename
 * @param int $flags
 * @return bool
 */
function runkit_import($filename, $flags = RUNKIT_IMPORT_CLASS_METHODS) {}

/**
 * @param string $classname
 * @param string $methodname
 * @param Closure $closure
 * @param int $flags
 * @param string|null $doc_comment
 * @return bool
 */
function runkit_method_add($classname, $methodname, $closure, $flags = RUNKIT_ACC_PUBLIC, $doc_comment = null) {}

/**
 * @param string $dClass
 * @param string $dMethod
 * @param string $sClass
 * @param string|null $sMethod
 * @return bool
 */
function runkit_method_copy($dClass, $dMethod, $sClass, $sMethod = null) {}

/**
 * @param string $classname
 * @param string $methodname
 * @param Closure $closure
 * @param int $flags
 * @param string|null $doc_comment
 * @return bool
 */
function runkit_method_redefine($classname, $methodname, $closure, $flags = RUNKIT_ACC_PUBLIC, $doc_comment = NULL) {}

/**
 * @param string $classname
 * @param string $methodname
 * @return bool
 */
function runkit_method_remove($classname, $methodname) {}

/**
 * @param string $classname
 * @param string $methodname
 * @param string $newname
 * @return bool
 */
function runkit_method_rename($classname, $methodname, $newname) {}

/**
 * @return bool
 */
function runkit_return_value_used() {}

/**
 * @return string[]
 */
function runkit_superglobals() {}
