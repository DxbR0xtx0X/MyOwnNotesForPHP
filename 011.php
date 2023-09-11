<?php /* heredoc, nowdoc */
/*
  in heredoc we get parsing process "FARZ"
  in nowdoc we skip the whole code
  we use nowdoc when we have large block of code and we need to skip it all
  */
  // still i don't get the whole information




//     heredoc e.g
$myString = <<<END
This is a heredoc string.
It can span multiple lines, and
include "quotes" and 'apostrophes'.
END;


//     nowcode e.g nowdoc alwayes come with single quot
  /* the matter here is the single quot */
$myString = <<<'END'
This is a nowdoc string.
It can span multiple lines, and
it will not interpret any variables or escape sequences, like \n or \t.
END;


