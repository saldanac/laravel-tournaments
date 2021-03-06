<?php

namespace Xoco70\LaravelTournaments\Models;

use Illuminate\Database\Eloquent\Model;

class FighterGroupCompetitor extends Model
{
    protected $table = 'fighters_group_competitor';
    public $timestamps = true;

    public function group()
    {
        return $this->belongsTo(FightersGroup::class);
    }

    public function competitor()
    {
        return $this->belongsTo(Competitor::class);
    }
}
