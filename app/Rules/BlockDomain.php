<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class BlockDomain implements ValidationRule
{
    protected $domain;

    public function __construct($domain)
    {
        $this->domain = $domain;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/\b(https?:\/\/)?(www\.)?' . preg_quote($this->domain, '/') . '\b/i', $value)) {
            $fail('Spamming not allowed');
        }
    }
}
