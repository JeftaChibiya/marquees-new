<?php

namespace App;



/**
 * Created on 11.11.2016 (JC, C3398189)
 * Below is an ordinary Eloquent query to get all category Items (JC, C3398189)
 */

class EloquentCategories implements Categories{


  /**
   * Get all category items
   * @return
   */
  public function all()
  {

      return Category::all();

  }


}
