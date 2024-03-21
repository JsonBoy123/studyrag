<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoalCategory extends Model
{
    public static function getByUuid(int $workspace_id, $uuid)
{
    return GoalCategory::where("workspace_id", $workspace_id)
        ->where("uuid", $uuid)
        ->first();
}
    use HasFactory;
}
