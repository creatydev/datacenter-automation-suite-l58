<?php

namespace App\Models\Support;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\Queue
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $visible
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $path
 * @method static \App\Builder\MyBuilder|\App\Models\Support\Queue newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\Queue newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\Queue query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Queue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Queue whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Queue whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Queue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Queue whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Queue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\Queue whereVisible($value)
 * @mixin \Eloquent
 */
class Queue extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = ['name', 'description', 'visible',];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/queues/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'queue_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray(): array
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
}
