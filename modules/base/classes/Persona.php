<?php

/**
 * Classe criada para verificar se o login do Persona vindo do
 * javascript é válido.
 *
 * Código tirado de:
 * https://github.com/mozilla/browserid-cookbook/blob/master/php/persona.php
 * Referencia: https://developer.mozilla.org/en-US/docs/Persona
 *
 * Verify Assertion Results:
 * https://developer.mozilla.org/en-US/docs/Persona/Remote_Verification_API
 */

class Persona
{
    /**
     * Scheme, hostname and port
     */
    protected $audience;

    /**
     * Constructs a new Persona (optionally specifying the audience)
     */
    public function __construct($audience = NULL)
    {
        $this->audience = $audience ?: $this->guessAudience();
    }

    /**
     * Verify the validity of the assertion received from the user
     *
     * @param string $assertion The assertion as received from the login dialog
     * @return object The response from the Persona online verifier
     */
    public function verifyAssertion($assertion)
    {
        $postdata = 'assertion=' . urlencode($assertion) . '&audience=' . urlencode($this->audience);

        $ch = curl_init('https://verifier.login.persona.org/verify');
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); // ********** SET TRUE WHEN GO TO PRODUCTION **********
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response);
    }

    /**
     * Guesses the audience from the web server configuration
     */
    protected function guessAudience()
    {
        $audience = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
        $audience .= $_SERVER['SERVER_NAME'] . ':'.$_SERVER['SERVER_PORT'];
        return $audience;
    }
}
