<?php
function age(string $date): int
{
    $age = date('Y') - date('Y', $date);
    if (date('md') < date('md', strtotime($date))) {
        return $age - 1;
    }
    return $age;
}
