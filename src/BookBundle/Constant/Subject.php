<?php

namespace BookBundle\Constant;

class Subject {
    const MATH          = 1;
    const PHYSIC        = 2;
    const CHEMESTRY     = 3;
    const EARTH_SCIENCE = 4;
    const ENGLISH       = 5;
    const KHMER         = 6;
    const HISTROTY      = 7;
    const GEOGRAPHY     = 8;
    const BIOLOGY       = 9;

    public static $subjects = [
        self::MATH = 'គណិតវិទ្យា',
        self::PHYSIC = 'រូបវិទ្យា',
        self::CHEMESTRY = 'គីមីវិទ្យា',
        self::EARTH_SCIENCE = 'ផែនដីវិទ្យា',
        self::ENGLISH = 'អង់គ្លេស',
        self::KHMER = 'ភាសាខ្មែរ',
        self::HISTROTY = 'ប្រវត្តិវិទ្យា',
        self::GEOGRAPHY = 'ភូមិវិទ្យា',
        self::BIOLOGY = 'ជីវវិទ្យា'
    ];

    public static getSubject() {
        return array_keys(self::$subjects);
    }

    public function getSubjectName($index) {
        return self::$subjects[$index];
    }
}
