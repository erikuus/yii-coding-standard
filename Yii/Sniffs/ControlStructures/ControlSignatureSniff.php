<?php
/**
 * Verifies that control statements conform to their coding standards.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 */

namespace PHP_CodeSniffer\Standards\PEAR\Sniffs\ControlStructures;

use PHP_CodeSniffer\Sniffs\AbstractPatternSniff;

class ControlSignatureSniff extends AbstractPatternSniff
{

	/**
	 * If true, comments will be ignored if they are found in the code.
	 *
	 * @var boolean
	 */
	public $ignoreComments = true;

	/**
	 * Returns the patterns that this test wishes to verify.
	 *
	 * @return string[]
	 */
	protected function getPatterns()
	{
		return [
			'if(...)EOL...{...}EOL...elseEOL',
			'if(...)EOL...{...}EOL...elseif(...)EOL',
			'if(...)EOL',
			'tryEOL...{EOL...}EOL',
			'catch(...)EOL...{EOL',
			'while(...)EOL...{EOL',
			'doEOL...{EOL...}EOL...while(...);EOL',
			'for(...)EOL...{EOL',
			'foreach(...)EOL...{EOL',
			'switch(...)EOL...{EOL',
		];

	}//end getPatterns()


}//end class
