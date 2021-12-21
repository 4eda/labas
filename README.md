<?PHP
    /* (c) 2009 tim - anyone who finds a use for this is very welcome to use it with no restrictions unless they're making a weapon */

    //how many sets shall we generate?
    $gNumSets = 1000;

    //keep track of collisions, just for fun.
    $gCollisions = 0;

    $starttime = time();

    /**
     * Generate and return an integer with exactly 15 of the lower 25 bits set (1) and the other 10 unset (0)
     */ 
    function genSetHash(){
      $hash = pow(2,25)-1;

      $used = array();

      for($i=0;$i<10;){

        //pick a bit to turn off
        $bit = rand(0,24);

        if (! in_array($bit,$used)){
          $hash =  ( $hash & ~pow(2,$bit) );
          $i++;  
          $used[] = $bit;  
        }
      }
      return  $hash;
    }

    //we store our solution hashes in here.  
    $solutions = array();

    //generate a bunch of solutions.
    for($i=0;$i<$gNumSets;){
      $hash = genSetHash(); 

      //ensure no collisions
      if (! in_array($hash,$solutions)){
        $solutions[] = $hash;
        //brag a little.
        echo("Generated $i random sets in " . (time()-$starttime) . " seconds.\n");
        $i++;
      }else { 
        //there was a collision. There will generally be more the longer the process runs.
        echo "thud.\n"; 
        $gCollisions++;
      }
    }

    // okay, we're done with the hard work.  $solutions contains a bunch of
    // unique, random, ints in the right range.  Everything from here on out
    // is just output.

    //takes an integer with 25 significant digits, and returns an array of 15 numbers between 1 and 25
    function hash2set($hash){
      $set = array();
      for($i=0;$i<24;$i++){  
        if ($hash & pow(2,$i)){
          $set[] = $i+1;
        }
      }
      return $set;
    }

    //pretty-print our sets.
    function formatSet($set){
      return "[ " . implode(',',$set) . ']';
    }

    //if we wanted to print them, 
    foreach($solutions as $hash){
      echo formatSet(hash2set($hash)) . "\n";
    }

    echo("Generated $gNumSets unique random sets in " . (time()-$starttime) . " seconds.\n");

    echo "\n\nDone.  $gCollisions collisions.\n";
