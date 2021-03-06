<?php

namespace Amp\Ssh\Message;

/**
 * @internal
 */
final class KeyExchangeCurveInit implements Message {
    public $exchange;

    public function encode(): string {
        return \pack('CNa*', self::getNumber(), \strlen($this->exchange), $this->exchange);
    }

    public static function decode(string $payload) {
        throw new \RuntimeException('Not implemented');
    }

    public static function getNumber(): int {
        return self::SSH_MSG_KEX_ECDH_INIT;
    }
}
