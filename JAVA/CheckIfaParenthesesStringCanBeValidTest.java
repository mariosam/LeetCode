/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CheckIfaParenthesesStringCanBeValidTest {

    @Test
	public void testCheckIfaParenthesesStringCanBeValid() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = CheckIfaParenthesesStringCanBeValid.canBeValid( "))()))", "010100" );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = CheckIfaParenthesesStringCanBeValid.canBeValid( "()()", "0000" );
        assertEquals(want, got);
        //Test 3
        want = false;
        got = CheckIfaParenthesesStringCanBeValid.canBeValid( ")", "0" );
        assertEquals(want, got);
	}

}
