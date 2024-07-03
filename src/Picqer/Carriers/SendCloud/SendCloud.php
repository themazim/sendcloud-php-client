<?php

namespace Picqer\Carriers\SendCloud;

class SendCloud
{
    /**
     * The HTTP connection
     *
     * @var Connection
     */
    protected $connection;

    /**
     * The HTTP connectionV3
     *
     * @var ConnectionV3
     */
    protected $connectionV3;

    public function __construct(Connection $connection, ConnectionV3 $connectionV3)
    {
        $this->connection = $connection;
        $this->connectionV3 = $connectionV3;
    }

    public function invoices(): Invoice
    {
        return new Invoice($this->connection);
    }

    public function labels(): Label
    {
        return new Label($this->connection);
    }

    public function parcels(): Parcel
    {
        return new Parcel($this->connection);
    }

    public function orders(): Order
    {
        return new Order($this->connectionV3);
    }

    public function shippingMethods(): ShippingMethod
    {
        return new ShippingMethod($this->connection);
    }

    public function parcelStatuses(): ParcelStatus
    {
        return new ParcelStatus($this->connection);
    }

    public function users(): User
    {
        return new User($this->connection);
    }

    public function senderAddresses(): SenderAddress
    {
        return new SenderAddress($this->connection);
    }

    public function contracts(): Contract
    {
        return new Contract($this->connection);
    }

    /**
     * SenderAddress Resource
     *
     * @return SenderAddress
     * @deprecated Inconsistent nameing, use senderAddresses()
     */
    public function sender_addresses()
    {
        return $this->senderAddresses();
    }
}
