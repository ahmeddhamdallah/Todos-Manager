<?php

 namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Category extends Model

    {
		    	public function categoryParent(){
		    return $this->belongsTo('App\Category', 'parent_id');
		}

		public function categoryChildren(){
		    return $this->hasMany('App\Category', 'parent_id');
		}

		       //category has childs

		       public function childs() {

		               return $this->hasMany('App\Category','parent_id','id') ;

       }


    }


