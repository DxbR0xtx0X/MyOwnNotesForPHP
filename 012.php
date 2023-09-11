<?php /* Array*/
// we have build in function to print human readable information about the var "print_r()"
// before we get started our lesson let's me say in the array we have key and value
// we can define key as an index
print_r([
  "A" => "Abdel...",
  "B" => "Brinis"
  "WEB APP PENTESTING"
])
  /* IN THIS CODE WE DON'T GIVE A KEY FOR WEB... SO AUTOMATICLLY THE VALUE WE'LL TAKE INDEX 0 */
  // for e.g :
  print_r([
    0 => "NMAP"
    "A" => "Abdel...",
    "B" => "Brinis"
    "WEB APP PENTESTING"
    /* in this case nmap take the index 0 and WEB... take the index 1  */
    True => "BURPSUITE" /* in this case BURPSUITE take the index 1 and overwrite WEB...  */
  ])
  // BURPSUITE is the index 1 here if we create another value without key the new value take index 2

  print_r([
    0 => "NMAP",
    "A" => "Abdel...",
    "B" => "Brinis",
    "WEB APP PENTESTING",
    True => "BURPSUITE" ,
    "value number two" ,>>> /* this value get index 2*/
    9 => "vlue", /* index 9*/
    "another v" /* index 10 bcs it's after index number 9*/
    /*  THIS IS HOW TO WORK WITH INDEXES IN ARRAY IN PHP */
    /*
      =========================
      ======== PRACTICE MORE ==
      =========================
      = TO GET FULL ===========
      =========================
      ============= KNOWLEDGE =
      =========================

    */


  ])
