<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GerenciadorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GerenciadorTable Test Case
 */
class GerenciadorTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GerenciadorTable
     */
    public $Gerenciador;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gerenciador'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Gerenciador') ? [] : ['className' => 'App\Model\Table\GerenciadorTable'];
        $this->Gerenciador = TableRegistry::get('Gerenciador', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gerenciador);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
