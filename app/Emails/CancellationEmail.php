<?php

namespace App\Emails;

class CancellationEmail extends Email
{
    /**
     * Get the email id.
     *
     * @return string
     */
    protected function getEmailId()
    {
        return 'email-id';
    }

    /**
     * Get an array of variables for the CM email.
     *
     * @param  $user
     * @return array
     */
    public function variables($user)
    {
        return ['email' => $user['email']]; // Or whatever.
    }
}