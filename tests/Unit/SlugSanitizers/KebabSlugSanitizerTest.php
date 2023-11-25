<?php

use Lukeraymonddowning\SelfHealingUrls\SlugSanitizers\BaseSlugSanitizer;
use Lukeraymonddowning\SelfHealingUrls\SlugSanitizers\KebabSlugSanitizer;

it('replaces spaces with hyphens', function () {
    $sanitizer = new KebabSlugSanitizer();
    $result = $sanitizer->sanitize('what are you doing?');

    expect($result)->toBe('what-are-you-doing');
});

it('removes multiple hyphens', function () {
    $sanitizer = new KebabSlugSanitizer();
    $result = $sanitizer->sanitize('what--are------you-doing');

    expect($result)->toBe('what-are-you-doing');
});