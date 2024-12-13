/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MovePiecesToObtainStringTest {

    @Test
	public void testMovePiecesToObtainString() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = MovePiecesToObtainString.canChange( "_L__R__R_", "L______RR" );
        assertEquals(want, got);
        //Test 2
        want = false;
        got = MovePiecesToObtainString.canChange( "R_L_", "__LR" );
        assertEquals(want, got);
        //Test 3
        want = false;
        got = MovePiecesToObtainString.canChange( "_R", "R_" );
        assertEquals(want, got);
	}

}
