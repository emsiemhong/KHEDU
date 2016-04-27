<?php

namespace BookBundle\Constant;

class Grade {
    const FIRST    = 1;
    const SECOND   = 2;
    const THIRD    = 3;
    const FOURTH   = 4;
    const FIFTH    = 5;
    const SIXTH    = 6;
    const SEVENTH  = 7;
    const EIGHTH   = 8;
    const NINTH    = 9;
    const TENTH    = 10;
    const ELEVENTH = 11;
    const TWELFTH  = 12;

    public static $grades = [
        self::FIRST      = 'ថ្នាក់ទី ១',
        self::SECOND     = 'ថ្នាក់ទី ២',
        self::THIRD      = 'ថ្នាក់ទី ៣',
        self::FOURTH     = 'ថ្នាក់ទី ៤',
        self::FIFTH      = 'ថ្នាក់ទី ៥',
        self::SIXTH      = 'ថ្នាក់ទី ៦',
        self::SEVENTH    = 'ថ្នាក់ទី ៧',
        self::EIGHTH     = 'ថ្នាក់ទី ៨',
        self::NINTH      = 'ថ្នាក់ទី ៩',
        self::TENTH      = 'ថ្នាក់ទី ១០',
        self::ELEVENTH   = 'ថ្នាក់ទី ១១',
        self::TWELFTH    = 'ថ្នាក់ទី ១២'
    ];

    public static getGrades() {
        return array_keys(self::$grades);
    }

    public function getGradeName($index) {
        return self::$grades[$index];
    }

}