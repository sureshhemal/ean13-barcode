<?php

class ean13
{
    public function generate(): string
    {
        $barcode = str_shuffle(time() . str_pad(mt_rand(0, 99), 2, '0', STR_PAD_LEFT)); //12 char
        $barcode .= $this->getCheckDigit($barcode);

        return (string)$barcode;
    }

    private function getCheckDigit(string $prefix): int
    {
        $digits = str_split($prefix);
        $evenSum = 0;
        $oddSum = 0;

        foreach ($digits as $key => $value) {
            if (($key + 1) % 2 == 0) {
                $evenSum += $value;
            } else {
                $oddSum += $value;
            }
        }

        $evenSum *= 3;
        $total = $evenSum + $oddSum;

        if ($total % 10 == 0) {
            $checkDigit = 0;
        } else {
            $checkDigit = 10 - (int)substr($total, -1);
        }

        return $checkDigit;
    }

    public function handle(): string
    {
        return $this->generate();
    }
}
