<?php

use Illuminate\Contracts\Auth\MustVerifyEmail;

class AccountRegistration extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
}
