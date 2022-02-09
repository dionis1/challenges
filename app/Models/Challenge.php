<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\ChallengeFactory;
use Auth;
use DB;

class Challenge extends Model
{
     use SoftDeletes;
     use HasFactory;

     public static $types = [
         'days_with_10000_steps' => 'Number of days with 10000 steps done', 
         'days_with_3_meals' => 'Number of days where at least 3 meals are consumed',
         'total_workout_minutes' => 'Number of workout minutes done'
    ];

    /**
     * Default values
     */
    protected $attributes = array(
        'participant_count' => 0
    );

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_public' => 'boolean'
    ];

    protected $visible = [
        'id',
        'start_date',
        'end_date',
        'image_url',
        'participant_count',
        'title',
        'description',
        'prize_title',
        'prize_description',

        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_date',
        'end_date',
        'type',
        'is_public',
        'image_url',
        'title',
        'description',
        'prize_title',
        'prize_description',
    ];

    /**
     * Validation rules for this model
     *
     * @var array
     */
    public static $rules = [
        'start_date' => 'required|date',
        'end_date' => 'required|date',
        'type' => 'sometimes|string|in:days_with_10000_steps,days_with_3_meals,total_workout_minutes',
        // 'is_public' => 'required|boolean',
        'image_url' => 'nullable|string|url',
        'title' => 'nullable|max:255|string|required_without:title',
        'description' => 'nullable|string|required_without:description',
        'prize_title' => 'nullable|max:255|string',
        'prize_description' => 'nullable|string',
    ];


    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return new ChallengeFactory();
    }	



}