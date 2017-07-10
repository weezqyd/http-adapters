<?php
namespace Http\Adapter;

use Buzz\Listener\ListenerInterface;
use Buzz\Message\MessageInterface;
use Buzz\Message\RequestInterface;

/**
 * @author Antoine Corcy <contact@sbin.dk>
 * @author Graham Campbell <graham@alt-three.com>
 * @author Albert Leitato <wizqydy@gmail.com>
 */
class BuzzOAuthListener implements ListenerInterface
{
    /**
     * @var string
     */
    protected $token;

    /**
     * @param string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * {@inheritdoc}
     */
    public function preSend(RequestInterface $request)
    {
        $request->addHeader(\sprintf('Authorization: Bearer %s', $this->token));
    }

    /**
     * {@inheritdoc}
     */
    public function postSend(RequestInterface $request, MessageInterface $response)
    {
    }
}
