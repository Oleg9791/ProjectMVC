<?php

namespace Model;

use App\Model\AutModel;
use PHPUnit\Framework\TestCase;

class AutModelTest extends TestCase
{
    private AutModel $arr;

    public function setUp(): void
    {
        $config = include __DIR__ . "/../../config.php";
        $config["table"] = "users";
        $this->arr = new AutModel($config);
    }


    public function testCheckUserExists()
    {
        $this->assertTrue($this->arr->checkUserExists("tom1"));
        $this->assertFalse($this->arr->checkUserExists("tim"));
    }

    public function testCheckUser()
    {
        $this->assertIsArray($this->arr->checkUser("tom1", "tom12345"));
    }


}
