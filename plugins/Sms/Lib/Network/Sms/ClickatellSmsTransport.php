<?php
use Xi\Sms\Gateway\ClickatellGateway;


App::uses('AbstractSmsTransport','Sms.Network/Sms');
class ClickatellSmsTransport extends AbstractSmsTransport
{
    const CLICKATELL_API_ID = '15__YTb1QmShUniiYYhWUQ== ';
    const CLICKATELL_USER = 'blackcaat4@gmail.com';
    const CLICKATELL_PASSWORD = 'superman';

    /**
     * Sends an SMS Through Clickatell
     * We could also consider using this library: http://github.com/arcturial/clickatell
     *
     * @param CakeSms $sms
     * @return bool Success
     */
    public function send(CakeSms $sms) {
        $gw = new ClickatellGateway(
            self::CLICKATELL_API_ID,
            self::CLICKATELL_USER,
            self::CLICKATELL_PASSWORD
        );

        $service = new Xi\Sms\SmsService($gw);

        $msg = new Xi\Sms\SmsMessage(
            $sms->message(),
            self::parsePhoneNumber($sms->from()),
            self::parsePhoneNumber($sms->to())
        );

        $response = $service->send($msg);

        return !empty($response);
    }

    /**
     * Parses a phone number to fit Clickatell requirements
     * from +49123[...] to 49123[...]
     *
     * @param array|string $phoneNumber
     * @return array|string|bool
     */
    public static function parsePhoneNumber($phoneNumber) {
        if (is_array($phoneNumber)) {
            return array_map('self::parsePhoneNumber', $phoneNumber);
        }
        if (preg_match('/^\+([0-9]+)$/', (string) $phoneNumber, $matches)) {
            return $matches[1];
        }
        return false;
    }
}