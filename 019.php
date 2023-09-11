<?php
// Predefined And Magic Constants And Reserved Keywords

/*
Constant	Description
PHP_VERSION 	|The current version of PHP, represented as a string.
PHP_MAJOR_VERSION	|The major version of PHP, represented as an integer.
PHP_MINOR_VERSION	|The minor version of PHP, represented as an integer.
PHP_RELEASE_VERSION	|The release version of PHP, represented as an integer.
PHP_VERSION_ID	|The version of PHP, represented as an integer in the format of major * 10000 + minor * 100 + release. For example, PHP 7.3.12 is represented as the integer 70312.
PHP_OS	|The operating system PHP is currently running on, represented as a string.
PHP_SAPI|	The Server API (SAPI) PHP is using, represented as a string.
PHP_EOL|	The end-of-line character sequence used by PHP on the current platform. This is either "\r\n" on Windows, or "\n" on Unix-like systems.
PHP_INT_MAX	|The maximum value that can be represented by an integer on the current platform.
PHP_INT_MIN	|The minimum value that can be represented by an integer on the current platform.
PHP_INT_SIZE|	The size in bytes of an integer on the current platform. This is either 4 or 8, depending on the architecture.
PHP_FLOAT_MAX	|The maximum value that can be represented by a float on the current platform.
PHP_FLOAT_MIN	|The minimum normalized value that can be represented by a float on the current platform.
PHP_FLOAT_DIG	|The number of decimal digits that can be represented by a float on the current platform.
PHP_FLOAT_EPSILON	|The smallest representable positive number x, such that x + 1.0 != 1.0 on the current platform.
PHP_OS_FAMILY	|The family of the operating system PHP is currently running on, represented as a string. This constant was introduced in PHP 7.2.0. The possible values are "Windows", "BSD", "Darwin", "Solaris", "Linux", "Unknown".
PHP_BINDIR	|The directory containing the PHP binary.
PHP_LIBDIR	|The directory containing the PHP shared libraries.
PHP_DATADIR	|The directory containing read-only architecture-independent data files.
PHP_SYSCONFDIR	|The directory containing read-only system configuration files.
PHP_LOCALSTATEDIR	|The directory containing variable data files.
PHP_CONFIG_FILE_PATH	|The path to the main php.ini configuration file being used.
PHP_CONFIG_FILE_SCAN_DIR	|The directory containing additional configuration files to be scanned for directives.
PHP_SHLIB_SUFFIX	|The suffix used for shared libraries on the current platform. For example, ".so" on Unix-like systems, or ".dll" on Windows.
PHP_EOL	|The end-of-line character sequence used by PHP on the current platform. This is either "\r\n" on Windows, or "\n" on Unix-like systems.
PHP_MAXPATHLEN	|The maximum length of a file path on the current platform. This constant was introduced



*/
// we can call all of these helpful tools for us from PHP devlopers
// for e.g
echo php_uname(); // this is give us informations about the system "server" php running on it like Linux
// =============================================================
// also we have magic constants
// how to know the magic constant? A: magic constants always start and end with double underscore __xx__
/*
Magic Constant	   Description
LINE              	The current line number of the file in which it appears.
FILE	            The full path and filename of the file in which it appears.
DIR	           The full path of the directory of the file in which it appears.
FUNCTION	       The name of the current function or method in which it appears.
CLASS	           The name of the current class in which it appears.
TRAIT	         The name of the current trait in which it appears. This magic constant is available starting from PHP 5.4.
METHOD        	The name of the current class method in which it appears.
NAMESPACE	        The name of the current namespace in which it appears.

ClassName::class	The fully qualified name of the class in which it appears.
                  This magic constant is available starting from PHP 5.5.0.
                  It can be used as a parameter to functions such as class_exists()
                  and is_subclass_of(), or in place of a string value when using the ::class syntax
                  to access a class name.

Note that these magic constants are case-insensitive and always start and end with two underscores.

Reserved Keywords:
  "words for php you can't use it like break or clone ..."

=====================================================================================
what's the different between compile time and runtime?
-Compile time and runtime are two different phases of the software development process.

-Compile time refers to the period during which a program's source code is transformed into
executable code by a compiler. During this phase, the compiler checks the syntax and semantics of the code and
generates machine instructions that can be executed by the computer's CPU. The output of the
compilation process is an executable file or a library, which can be run later during the runtime phase.

-Runtime, on the other hand, refers to the period during which a program is executed on a computer.
In this phase, the compiled code is loaded into memory, and the computer's CPU executes the instructions
contained in the program. During the runtime phase, the program interacts with the user or other programs,
performs various operations, and produces output.

-In summary, compile time is the period during which the source code is transformed into executable code,
while runtime is the period during which the compiled code is executed. Understanding the difference between
these two phases is important for developers, as it can help them to identify and fix errors in their code,
optimize performance, and improve the overall user experience of their software.

//
