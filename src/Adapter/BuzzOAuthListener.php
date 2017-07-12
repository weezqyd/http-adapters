<?php
/*
 *   This file is part of the HTTP Adapters library.
 *
 *   (c) Albert Leitato <wizqydy@gmail.com>
 *
 *   For the full copyright and license information, please view the LICENSE
 *   file that was distributed with this source code.
 */
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
    protected $headers;

    /**
     * @param string $token
     */
    public function __construct(array $headers)
    {
        $this->headers = $heades;
    }

    /**
     * {@inheritdoc}
     */
    public function preSend(RequestInterface $request)
    {
        foreach ($this->headers as $key => $header) {
            $request->addHeader("{$key}: $header");
        }
    }

    /**
     * {@inheritdoc}
     */
    public function postSend(RequestInterface $request, MessageInterface $response)
    {
    }
}
