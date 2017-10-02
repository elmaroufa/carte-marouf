<?php

if(! function_exists('page_title'))
	       {
             function page_title($title)
             {
             	$base_title= "Laracarte-list of artisan";
             	if($title=="")
             		  {
             		  	return $base_title;
             		  }
             		  else
             		  {
             		  	return $title." | ".$base_title;
             		  }
             }
	       }
	       if(! function_exists("actives"))
	       	    {
	       	    	function actives($title)
	       	    	        {
	       	    	        	if($title=="Home")
	       	    	        		  {
	       	    	        		  	return "active";
	       	    	        		  }
	       	    	        		  else if($title=="About")
	       	    	        		  	   {
	       	    	        		  	   	return "active";
	       	    	        		  	   }
	       	    	        		  	   else return " ";
	       	    	        }
	       	    }
	       

?>