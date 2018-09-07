<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnalyticsPage extends Model
{
    // ocean user Analytics ...
    public function visitor()
    {

        return $this->belongsTo('App\AnalyticsVisitor', 'visitor_id')->orderby('id', 'desc');
    }
}
