<?php

namespace App\Models\Support;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\ResourceGroup
 *
 * @property int $id
 * @property string $serial_number
 * @property mixed $service_ids
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $path
 * @method static \App\Builder\MyBuilder|\App\Models\Support\ResourceGroup newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\ResourceGroup newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\ResourceGroup query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\ResourceGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\ResourceGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\ResourceGroup whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\ResourceGroup whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\ResourceGroup whereServiceIds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\ResourceGroup whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ResourceGroup extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'serial_number',
        'service_ids',
        'notes',
    ];

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        // TODO: Implement path() method.
        //
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'resource_group_index';
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
