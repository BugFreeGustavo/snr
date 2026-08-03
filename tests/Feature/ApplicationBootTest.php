<?php

it('boots the application and serves the welcome page', function () {
    $this->get('/')->assertOk();
});
