<?php

namespace App\Emails;

class WelcomeEmail extends Email
{
    /**
     * Get the email id.
     *
     * @return string
     */
    public function getEmailId()
    {
        return '8713f775-7863-46d5-862b-8c9de54cd3b1';
    }

    /**
     * Get an array of variables for the CM email.
     *
     * @param  $user
     * @return array
     */
    public function variables($user)
    {
        return [
            'username' => $user['username'],
        ];
    }
}