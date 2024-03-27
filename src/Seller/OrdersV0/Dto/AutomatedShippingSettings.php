<?php

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AutomatedShippingSettings extends BaseDto
{
    protected static array $attributeMap = [
        'hasAutomatedShippingSettings' => 'HasAutomatedShippingSettings',
        'automatedCarrier' => 'AutomatedCarrier',
        'automatedShipMethod' => 'AutomatedShipMethod',
    ];

    /**
     * @param  ?bool  $hasAutomatedShippingSettings  When true, this order has automated shipping settings generated by Amazon. This order could be identified as an SSA order.
     * @param  ?string  $automatedCarrier  Auto-generated carrier for SSA orders.
     * @param  ?string  $automatedShipMethod  Auto-generated ship method for SSA orders.
     */
    public function __construct(
        public readonly ?bool $hasAutomatedShippingSettings = null,
        public readonly ?string $automatedCarrier = null,
        public readonly ?string $automatedShipMethod = null,
    ) {
    }
}
