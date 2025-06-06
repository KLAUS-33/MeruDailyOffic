<?php

namespace sigawa\mvccore\auth;

interface OAuthService
{
    public function getAuthUrl(): string;
    public function getAccessToken(string $code): array;
    public function getUserData(string $accessToken): array;
}
