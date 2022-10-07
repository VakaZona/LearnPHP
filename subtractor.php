<?php
    require '/OpenServer/domains/LearnPHP/vendor/autoload.php';
    use function Functional\select;
    use function Functional\partial_left;
    use function Functional\partial_any;
    use function Functional\retry;
    use const Functional\…;

    $subtractor = function($a, $b){
        return $a - $b;
    };
    echo $subtractor(10,20) . "<br>";

    $subtractor2 = function($a){
        return function($b) use ($a) {
            return $a - $b;
        };
    };

    $partialApliedSubtractor = $subtractor2(10);
    echo $partialApliedSubtractor(20) . "<br>";

    $partialApliedSubtractor = partial_left($subtractor, 10);
    echo $partialApliedSubtractor(20) . "<br>";

    $elements = [
        'john',
        'joe',
        'joanna',
        'patrick',
    ];
    $selected = select($elements, partial_any('substr_count', …,'jo'));
    print_r($selected);
?>