<?php
/**
 * @copyright Copyright (c) 2018 Information Technology Co., Ltd.
 * @link http://www.larvacent.com/
 * @license http://www.larvacent.com/license/
 */

namespace App\Http\Resources\Api\V1\Transaction;


use App\Http\Resources\Resource;

/**
 * Class TransactionChargeResource
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class ChargeResource extends Resource
{
    /**
     * 禁用资源包裹
     *
     * @var string
     */
    public static $wrap = null;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'app_id' => $this->app_id,
            'paid' => $this->paid,
            'refunded' => $this->refunded,
            'reversed' => $this->reversed,
            'channel' => $this->channel,
            'type' => $this->type,
            'order_id' => $this->order_id,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'subject' => $this->subject,
            'body' => $this->body,
            'client_ip' => $this->client_ip,
            'time_paid' => $this->time_paid,
            'time_expire' => $this->time_expire,
            'transaction_no' => $this->transaction_no,
            'amount_refunded' => $this->amount_refunded,
            'failure_code' => $this->failure_code,
            'failure_msg' => $this->failure_msg,
            'extra' => $this->extra,
            'metadata' => $this->metadata,
            'credential' => $this->credential,
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}