<?php
/**
 * User: casperlai
 * Date: 2016/8/31
 * Time: 下午9:18
 */

namespace Casperlaitw\LaravelFbMessenger\Messages;

use Casperlaitw\LaravelFbMessenger\Collections\ElementCollection;
use Casperlaitw\LaravelFbMessenger\Transformers\GenericTransformer;

class Generic extends Structured
{
    /**
     * Generic constructor.
     *
     * @param $sender
     * @param $elements
     */
    public function __construct($sender, $elements = [])
    {
        parent::__construct($sender);
        $this->add($elements);
    }

    /**
     * Message to send object
     * @return \pimax\Messages\Message
     */
    public function toData()
    {
        return (new GenericTransformer)->transform($this);
    }

    /**
     * @return mixed
     */
    protected function collection()
    {
        return ElementCollection::class;
    }
}