<?php

namespace cloudwf\Request\V20170328;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of GetStaTop
 *
 * @method string getApgroupId()
 */
class GetStaTopRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cloudwf',
            '2017-03-28',
            'GetStaTop',
            'cloudwf'
        );
    }

    /**
     * @param string $apgroupId
     *
     * @return $this
     */
    public function setApgroupId($apgroupId)
    {
        $this->requestParameters['ApgroupId'] = $apgroupId;
        $this->queryParameters['ApgroupId'] = $apgroupId;

        return $this;
    }
}
