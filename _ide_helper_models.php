<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\category
 *
 */
	class category extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUsername($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App{
/**
 * App\Vedio
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $total_time
 * @property string $tag
 * @property integer $size
 * @property string $lecturer
 * @property string $categroy_id
 * @property integer $is_public
 * @property integer $looked_count
 * @property string $extention_name
 * @property string $vedio_path
 * @property string $image_path
 * @property integer $needpoint
 * @property string $published_at
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereTotalTime($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereTag($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereSize($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereLecturer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereCategroyId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereIsPublic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereLookedCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereExtentionName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereVedioPath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereImagePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereNeedpoint($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio wherePublishedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vedio whereUpdatedAt($value)
 */
	class Vedio extends \Eloquent {}
}

