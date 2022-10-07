<?php
require_once "..\solution.php";

use function App\Solution\cube;

class SolutionDataSetTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testCubeWithDataSet($expected, $argument)
    {
        $this->assertEquals($expected, cube($argument));
    }

    public function additionProvider(): array
    {
        return [
            [1,1],
            [8,2],
            [27,3],
            [-1,-1]
        ];
    }
}
