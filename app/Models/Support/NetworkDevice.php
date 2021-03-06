<?php

namespace App\Models\Support;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use App\Models\General\Asset;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Support\NetworkDevice
 *
 * @property int $id
 * @property string $asset_number
 * @property string|null $serial_number
 * @property int $network_device_type_id
 * @property string $hostname
 * @property string $ip_address
 * @property string|null $ip_address_alt
 * @property string $hardware_maker
 * @property string $hardware_version
 * @property string $device_os_version
 * @property int $total_ports
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\General\Asset $asset
 * @property-read mixed $path
 * @property-read \App\Models\Support\NetworkDeviceType $networkDeviceType
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Support\SwitchportInformation[] $switchPortInformation
 * @property-read int|null $switch_port_information_count
 * @method static \App\Builder\MyBuilder|\App\Models\Support\NetworkDevice newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\NetworkDevice newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\Support\NetworkDevice query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereAssetNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereDeviceOsVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereHardwareMaker($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereHardwareVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereHostname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereIpAddressAlt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereNetworkDeviceTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereTotalPorts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Support\NetworkDevice whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class NetworkDevice extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'asset_number',
        'serial_number',
        'network_device_type_id',
        'hostname',
        'ip_address',
        'ip_address_alt',
        'hardware_maker',
        'hardware_version',
        'device_os_version',
        'total_ports',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function switchPortInformation(): HasMany
    {
        return $this->hasMany(SwitchportInformation::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function networkDeviceType(): HasOne
    {
        return $this->hasOne(NetworkDeviceType::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function asset(): HasOne
    {
        return $this->hasOne(Asset::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/network/devices/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'networkdevice_index';
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
