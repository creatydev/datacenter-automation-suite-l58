<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Models Watched
    |--------------------------------------------------------------------------
    |
    | Any app model present in this array is watched by Larametrics, and its
    | changes are stored in the database under the larametrics_models table.
    | If you would like no models watched, change this to an empty array.
    |
    */
    'modelsWatched'               => [
        '\App\Models\General\Asset',
        '\App\Models\General\BillingInfo',
        '\App\Models\General\Cart',
        '\App\Models\General\Company',
        '\App\Models\General\Coupon',
        '\App\Models\General\Domain',
        '\App\Models\General\InboundEmail',
        '\App\Models\General\Invoice',
        '\App\Models\General\InvoiceItem',
        '\App\Models\General\Notification',
        '\App\Models\General\Permission',
        '\App\Models\General\Product',
        '\App\Models\General\Registrar',
        '\App\Models\General\Reseller',
        '\App\Models\General\Role',
        '\App\Models\General\Service',
        '\App\Models\General\Subscription',
        '\App\Models\General\TagCloud',
        '\App\Models\General\TagType',
        '\App\Models\Nameserver\Comment',
        '\App\Models\Nameserver\Cryptokey',
        '\App\Models\Nameserver\Domain',
        '\App\Models\Nameserver\Domainmetadata',
        '\App\Models\Nameserver\Record',
        '\App\Models\Nameserver\Supermaster',
        '\App\Models\Nameserver\Tsigkey',
        '\App\Models\Roles\Customer',
        '\App\Models\Roles\Employee',
        '\App\Models\Roles\Vendor',
        '\App\Models\Roles\Whiteglove',
        '\App\Models\Support\AssetRegion',
        '\App\Models\Support\AvailabilityZone',
        '\App\Models\Support\Chassis',
        '\App\Models\Support\Comment',
        '\App\Models\Support\ControlPanel',
        '\App\Models\Support\Cpu',
        '\App\Models\Support\Datacenter',
        '\App\Models\Support\Department',
        '\App\Models\Support\Disk',
        '\App\Models\Support\FirewallZone',
        '\App\Models\Support\IpAddress',
        '\App\Models\Support\Memory',
        '\App\Models\Support\Motherboard',
        '\App\Models\Support\MotherboardType',
        '\App\Models\Support\NetworkConfiguration',
        '\App\Models\Support\NetworkDevice',
        '\App\Models\Support\NetworkDeviceType',
        '\App\Models\Support\NetworkInterfaceCard',
        '\App\Models\Support\Note',
        '\App\Models\Support\OperatingSystem',
        '\App\Models\Support\PowerSupplyUnit',
        '\App\Models\Support\Queue',
        '\App\Models\Support\RaidCard',
        '\App\Models\Support\ResourceGroup',
        '\App\Models\Support\ResourceName',
        '\App\Models\Support\SalesRep',
        '\App\Models\Support\SecurityGroup',
        '\App\Models\Support\ServiceLimit',
        '\App\Models\Support\ServiceNamespace',
        '\App\Models\Support\Status',
        '\App\Models\Support\SubnetAddress',
        '\App\Models\Support\SwitchportInformation',
        '\App\Models\Support\Technician',
        '\App\Models\Support\Ticket',
        '\App\Models\Support\TldExtension',
        '\App\Models\Website\AboutUs',
        '\App\Models\Website\Chat',
        '\App\Models\Website\MenuPage',
        '\App\Models\Website\Pricing',
    ],

    /*
    |--------------------------------------------------------------------------
    | Models Watched - Expire Days
    |--------------------------------------------------------------------------
    |
    | By default, model changes are stored in the database for 30 days. You
    | can set your own expiration time (in days) here. During each time a change
    | is added to the database, any records older than the expiration time will
    | be removed.
    |
    */
    'modelsWatchedExpireDays'     => 365,

    /*
    |--------------------------------------------------------------------------
    | Models Watched - Expire Amount
    |--------------------------------------------------------------------------
    |
    | By default, a max of 1200 model changes are stored in the database at
    | any given time. Set this number to 0 if you would like to have no limit.
    |
    */
    'modelsWatchedExpireAmount'   => 0,

    /*
    |--------------------------------------------------------------------------
    | Requests Watched
    |--------------------------------------------------------------------------
    |
    | By default, requests are not watched due to resource conservation. By
    | enabling this portion of the app, all requests to your site and their
    | details will be logged in the larametrics_requests table.
    |
    */
    'requestsWatched'             => false,

    /*
    |--------------------------------------------------------------------------
    | Requests Watched - Expire Days
    |--------------------------------------------------------------------------
    |
    | By default, requests are stored for 10 days after creation. You can set
    | your own expiration time (in days) here. During each request log
    | creation, any items older than the expiration time will be removed.
    |
    */
    'requestsWatchedExpireDays'   => 90,

    /*
    |--------------------------------------------------------------------------
    | Requests Watched - Expire Amount
    |--------------------------------------------------------------------------
    |
    | By default, a max of 10000 requests are stored in the database at any
    | given time. Set this number to 0 if you would like to have no limit.
    |
    */
    'requestsWatchedExpireAmount' => 0,

    /*
    |--------------------------------------------------------------------------
    | Ignore Larametrics Requests
    |--------------------------------------------------------------------------
    |
    | If both this and requestsWatched are both set to true, Larametrics
    | will not log requests that are part of the package.
    |
    */
    'ignoreLarametricsRequests'   => true,

    /*
    |--------------------------------------------------------------------------
    | Logs Watched
    |--------------------------------------------------------------------------
    |
    | Any time that the Laravel log is written to, its contents are stored
    | in the database under the larametrics_logs table.
    | If you would like to disable log storage, set this to false.
    |
    */
    'logsWatched'                 => false,

    /*
    |--------------------------------------------------------------------------
    | Logs Watched - Expire Days
    |--------------------------------------------------------------------------
    |
    | By default, logs  are stored in the database for an unlimited amount
    | of time. You can set your own expiration time (in days) here. Each
    | time a log is added to the database, any records older than the
    | expiration time will be removed.
    |
    */
    'logsWatchedExpireDays'       => 0,

    /*
    |--------------------------------------------------------------------------
    | Logs Watched - Expire Amount
    |--------------------------------------------------------------------------
    |
    | By default, there is no limit on logs stored in the database at any
    | given time. Change this number if you would prefer there to be a limit.
    |
    */
    'logsWatchedExpireAmount'     => 0,

    /*
    |--------------------------------------------------------------------------
    | Hide Unwatched Menu Items
    |--------------------------------------------------------------------------
    |
    | If this is set to true, the main navigation for Larametrics will hide
    | the links for items (models, requests, logs) that are not being watched.
    */
    'hideUnwatchedMenuItems'      => true,

    /*
    |--------------------------------------------------------------------------
    | Notification Methods
    |--------------------------------------------------------------------------
    |
    | Set how you want to be notified here, by default both are env variables
    | but if you'd like to directly override them, you can do so here.
    |
    | 'email' should be a standard email address
    | 'slack' should be a Slack Webhook URL ready to receive messages
    */
    'notificationMethods'         => [
        'email' => env('LARAMETRICS_NOTIFICATION_EMAIL', 'no-reply@dcas.local'),
        'slack' => env('LARAMETRICS_NOTIFICATION_SLACK_WEBHOOK', ''),
    ],
];
