<?php

namespace App\Models\Support;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\Support\SubnetAddress
 *
 * @property int $id
 * @property string $subnet_address
 * @property string $network_block
 * @property int $network_mask
 * @property int $datacenter_id
 * @property string|null $available
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $path
 * @method static \App\Builder\MyBuilder|\App\Models\Support\SubnetAddress newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\SubnetAddress newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\SubnetAddress query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\SubnetAddress whereAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\SubnetAddress whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\SubnetAddress whereDatacenterId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\SubnetAddress whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\SubnetAddress whereNetworkBlock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\SubnetAddress whereNetworkMask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\SubnetAddress whereSubnetAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\SubnetAddress whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubnetAddress extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'subnet_address',
        'network_block',
        'network_mask',
        'datacenter_id',
        'available',
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
        return 'subnetaddresses_index';
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
