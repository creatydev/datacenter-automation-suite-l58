<?php

namespace App\Models\General;

use App\Builder\MyBuilder;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\General\InvoiceItem
 *
 * @property int $id
 * @property int $invoice_id
 * @property int $service_id
 * @property string $description
 * @property string $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $path
 * @property-read \App\Models\General\Invoice $invoice
 * @property-read \App\Models\General\Service $service
 * @method static \App\Builder\MyBuilder|\App\Models\General\InvoiceItem newModelQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\General\InvoiceItem newQuery()
 * @method static \App\Builder\MyBuilder|\App\Models\General\InvoiceItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\InvoiceItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\InvoiceItem whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\InvoiceItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\InvoiceItem whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\InvoiceItem wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\InvoiceItem whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\General\InvoiceItem whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class InvoiceItem extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'invoice_id',
        'service_id',
        'description',
        'price',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function invoice(): BelongsTo
    {
        return $this->belongsTo(Invoice::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function service(): HasOne
    {
        return $this->hasOne(Service::class);
    }

    /**
     * Return resource path.
     *
     * @return string
     */
    public function path(): string
    {
        return config('dashboard.path') . "/invoices/items/{$this->id}";
    }

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs(): string
    {
        return 'invoiceitem_index';
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
