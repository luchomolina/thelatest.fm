<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	// this is bad because it is PHP 4 style
    public function AppController() {}
	const myTest = ""; // should be in UPPERCASE
	
	/*Code Size*/
	
	//unused vars 
	public function unusedVard() {
		$var1 = '';
	}
	
	//too many decision points
	public function complexity($a,$b,$c,$d,$e,$f,$z) {
		if ($a == $b)  {
           if ($a1 == $b1) {
                fiddle();
           } else if ($a2 == $b2) {
                fiddle();
            }  else {
                fiddle();
            }
       } else if ($c == $d) {
           while ($c == $d) {
                fiddle();
            }
        } else if ($e == $f) {
           for ($n = 0; $n < $h; $n++) {
                fiddle();
            }
        } else{
            switch ($z) {
               case 1:
                    fiddle();
                    break;
              case 2:
                    fiddle();
                    break;
              case 3:
                    fiddle();
                    break;
              default:
                    fiddle();
                    break;
            }
        }
	}
	
	//method does too much
	public function tooLong() {
        print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
    	print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
    	print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
		print("Hello world!" . PHP_EOL);
        print("Hello world!" . PHP_EOL);
	}

	/*Design*/
	
	//untesteable
	public function exitCode($param)  {
        if ($param === 42) {
            exit(23);
        }
    }
	
	//untesteable, sec risk
	public function evalExpression($param)  {
        if ($param === 42) {
            eval('$param = 23;');
        }
    }
	
	// should be isFoo
	public function getFoo() {true;} 
}
