<?php


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(PHPMD)
*/
class FunctionalTester extends \Codeception\Actor
{
    use _generated\FunctionalTesterActions, PreparesTestDatabase;

   /**
    * Define custom actions here
    */
//    public function prepareDb()
//    {
//        $cli = $this->getApplication()['Illuminate\Contracts\Console\Kernel'];
//
//        if ($cli->call('migrate') !== 0)
//        {
//            throw new Exception('Could not migrate the database');
//        }
//    }
}
