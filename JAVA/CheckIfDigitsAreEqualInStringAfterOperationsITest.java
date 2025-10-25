/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CheckIfDigitsAreEqualInStringAfterOperationsITest {

    @Test
	public void testCheckIfDigitsAreEqualInStringAfterOperationsI() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = CheckIfDigitsAreEqualInStringAfterOperationsI.hasSameDigits( "3902" );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = CheckIfDigitsAreEqualInStringAfterOperationsI.hasSameDigits( "34789" );
        assertEquals(want, got);
	}

}
